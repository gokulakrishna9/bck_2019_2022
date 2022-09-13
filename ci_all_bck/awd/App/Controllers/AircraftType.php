<?php

namespace App\Controllers;

use App\Models\AircraftTypeM;

class AircraftType extends BaseController
{
  public function _remap($method)
  {
    // authentication && authorization
    /*
      if (!$this->authenticate_user()) {
        $this->default_handler();
        return;
      }
    */
    //$content_type = $this->request->headers();
    $defaultData = 'defaultData';
    $pageMethod = 'aircraftTypePage';
    if ($method == 'getAircraftTypeLblJson') {
      $this->$method();
    } else if (method_exists($this, $method) && $method !== $pageMethod && $method !== 'aircraftTypePage') {
      //$this->load_manufacturer_type();
      //$this->set_session_filters();
      $this->data = [];
      // default data
      $this->$defaultData();
      // method data            
      $this->$method();
      $this->getAircraftType();
      // view method
      $this->$pageMethod();
    } else {      // else if response type is json
      $this->data = [];
      // default data
      $this->$defaultData();
      // view method
      $this->getAircraftType();
      $this->$pageMethod();
      return;
    }
  }

  private function defaultData() {
    $this->data['title'] = 'AWD';
    $this->data['primary_column_name'] = 'aircraft_type_id';
    $this->data['show'] = ' ';
    $this->data['form_title'] = 'Add Aircraft Type';
    $this->data['page_form'] = 'aircraft_type/aircraft_type_form';
    $this->data['form_id'] = 'aircraft_type_form';
    $this->data['page_table'] = 'aircraft_type/aircraft_type_table';
    $this->data['page_filter'] = 'aircraft_type/aircraft_type_filter';
    $this->data['page_js'] = 'aircraft_type/aircraft_type_js';
    $this->data['form_action'] = 'add_aircraft_type';
    $this->data['update_action'] = 'update_aircraft_type';
    $this->data['view_action'] = 'view_aircraft_type';
    $this->data['delete_action'] = 'delete_aircraft_type';
    $this->data['page_filter_action'] = 'get_aircraft_type';
  }

  private function aircraftTypePage()
  {     
    echo view('default_component/default_page_grid', $this->data);
  }

  private function addAircraftType()
  {
    $mFd = model(AircraftTypeM::class);
    $db = db_connect();
    if ($this->request->getMethod() === 'post') {
      $data = [
        'aircraft_type' => $this->request->getPost('aircraft_type'),
        'aircraft_model_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('aircraft_model_id')))[1], // PENDING
        'created_by' => 1,
        'updated_by' => 1
      ];

      $mFd->insert($data);
      $mfId = $mFd->getInsertID();
    }
    $this->aircraftTypePage();
  }

  private function updateAircraftType()
  {
    $validation = [
      'manufacturer_type' => 'required'
    ];
    if (!$this->validate($validation)) {
      // set validation message
      $this->getAircraftTypeRecord();
      $this->data['form_action'] = 'update_aircraft_type';
      $this->data['show'] = 'show';
    } else {
      $pk = $this->request->getPost('aircraft_type_id');
      if (isset($pk)) {
        $db = db_connect();
        $builder = $db->table("aircraft_type");
        $builder->set(['aircraft_type' => $this->request->getPost('manufacturer_name')]);
        $builder->set(['aircraft_model_id' => $this->request->getPost('aircraft_model_id')]);
        $builder->where('manufacturer_id', $pk);
        $builder->update();
      }
      $this->data['form_action'] = 'add_aircraft_type';
    }
  }

  private function deleteAircraftTypeRecord()
  {
    echo "Update AircraftType";
  }

  private function getAircraftTypeRecord()
  {
    $pk = $this->request->getGet('aircraft_type_id');
    if (!isset($pk)) {
      // set validation message
    } else {
      $db = db_connect();
      $builder = $db->table("aircraft_type");
      $pk = $this->request->getGet('aircraft_type_id');
      $query = $builder->select('aircraft_type.aircraft_type_id, aircraft_model.aircraft_model, aircraft_type.aircraft_type')
        ->join('aircraft_model', 'aircraft_type.aircraft_model_id = aircraft_model.aircraft_model_id', 'left')
        ->where('aircraft_type_id', $pk);
      $rslt = $query->get()->getResult();
      $this->data['aircraft_type'] = $rslt[0];
    }
  }

  private function getAircraftTypeLabelJson()
  {
    if ($this->request->getMethod() === 'get') {
      $qry_s = $this->request->getGet('qry_string');
      // Loading db instance
      $db = db_connect();
      // Loading Query builder instance
      $builder = $db->table("aircraft_type");
      $query = $builder->select('aircraft_type_id as value, aircraft_type as label')
        ->where('aircraft_type LIKE CONCAT("%", substring("' . $qry_s . '", 2), "%")');

      $rslt = $query->get()->getResult();
      echo json_encode($rslt);
    }
  }

  private function getAircraftType() {
    $db = db_connect();
    $tblDtb = $db->table('aircraft_type');
    $tblDtb->select('aircraft_type.aircraft_type_id, aircraft_model.aircraft_model, aircraft_type.aircraft_type');
    $tblDtb->join('aircraft_model', 'aircraft_type.aircraft_model_id = aircraft_model.aircraft_model_id', 'left');
    $query = $tblDtb->get()->getResult();
    $this->data['table_data'] = $query;
  }
}
