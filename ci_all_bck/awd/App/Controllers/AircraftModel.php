<?php

namespace App\Controllers;

use App\Models\AircraftModelM;

class AircraftModel extends BaseController
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
    $pageMethod = 'aircraftModelPage';
    if ($method == 'getAircraftModelLblJson') {
      $this->$method();
    } else if (method_exists($this, $method) && $method !== $pageMethod && $method !== 'aircraftModelPage') {
      //$this->load_manufacturer_type();
      //$this->set_session_filters();
      $this->data = [];
      // default data
      $this->$defaultData();
      // method data            
      $this->$method();
      $this->getAircraftModel();
      // view method
      $this->$pageMethod();
    } else {      // else if response type is json
      $this->data = [];
      // default data
      $this->$defaultData();
      // view method
      $this->getAircraftModel();
      $this->$pageMethod();
      return;
    }
  }

  private function defaultData() {
    $this->data['title'] = 'AWD';
    $this->data['primary_column_name'] = 'aircraft_model_id';
    $this->data['show'] = ' ';
    $this->data['form_title'] = 'Add Aircraft Model';
    $this->data['form_id'] = 'aircraft_model_form';
    $this->data['page_form'] = 'aircraft_model/aircraft_model_form';
    $this->data['page_table'] = 'aircraft_model/aircraft_model_table';
    $this->data['page_filter'] = 'aircraft_model/aircraft_model_filter';
    $this->data['page_js'] = 'aircraft_model/aircraft_model_js';
    $this->data['validate_list'] = [];
    $this->data['form_action'] = 'add_aircraft_model';
    $this->data['update_action'] = 'update_aircraft_model';
    $this->data['view_action'] = 'view_aircraft_model';
    $this->data['delete_action'] = 'delete_aircraft_model';
    $this->data['page_filter_action'] = 'get_aircraft_model';
  }

  private function aircraftModelPage()
  { 
    echo view('default_component/default_page_grid', $this->data);
  }

  private function addAircraftModel()
  {
    $mFd = model(AircraftModelM::class);
    $db = db_connect();
    if ($this->request->getMethod() === 'post') {
      $data = [
        'aircraft_model' => $this->request->getPost('aircraft_model'),
        'manufacturer_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('manufacturer_id')))[1], // PENDING
        'created_by' => 1,
        'updated_by' => 1
      ];
      echo "Add Manufacturer";
      $mFd->insert($data);
      $mfId = $mFd->getInsertID();
    }
    $this->aircraftModelPage();
  }

  private function updateAircraftModel()
  {
    $validation = [
      'manufacturer_type' => 'required'
    ];
    if (!$this->validate($validation)) {
      // set validation message
      $this->getAircraftModelRecord();
      $this->data['form_action'] = 'update_aircraft_model';
      $this->data['show'] = 'show';
    } else {
      $pk = $this->request->getPost('aircraft_model_id');
      if (isset($pk)) {
        $db = db_connect();
        $builder = $db->table("aircraft_model");
        $builder->set(['aircraft_model' => $this->request->getPost('aircraft_model')]);
        $builder->set(['manufacturer_id' => $this->request->getPost('manufacturer_id')]);
        $builder->where('aircraft_model_id', $pk);
        $builder->update();
      }
      $this->data['form_action'] = 'add_aircraft_model';
    }
  }

  private function deleteAircraftModelRecord()
  {
    echo "Update AircraftModel";
  }

  private function getAircraftModelRecord()
  {
    $pk = $this->request->getGet('aircraft_model_id');
    if (!isset($pk)) {
      // set validation message
    } else {
      $db = db_connect();
      $builder = $db->table("aircraft_model");
      $pk = $this->request->getGet('aircraft_model_id');
      $query = $builder->select('aircraft_model.aircraft_model_id, aircraft_model.aircraft_model, manufacturer.manufacturer_name, manufacturer.manufacturer_id')
        ->join('manufacturer', 'manufacturer.manufacturer_id = aircraft_model.manufacturer_id', 'left')
        ->where('aircraft_model_id', $pk);
      $rslt = $query->get()->getResult();
      $this->data['aircraft_model'] = $rslt[0];
    }
  }

  private function getAircraftModelLblJson()
  {
    if ($this->request->getMethod() === 'get') {
      $qry_s = $this->request->getGet('qry_string');
      // Loading db instance
      $db = db_connect();
      // Loading Query builder instance
      $builder = $db->table("aircraft_model");
      $query = $builder->select('aircraft_model_id as value, aircraft_model as label')
        ->where('aircraft_model LIKE CONCAT("%", substring("' . $qry_s . '", 2), "%")');

      $rslt = $query->get()->getResult();
      echo json_encode($rslt);
    }
  }

  private function getAircraftModel() {
    $db = db_connect();
    $tblDtb = $db->table('aircraft_model');
    $tblDtb->select('aircraft_model.aircraft_model_id, aircraft_model.aircraft_model, manufacturer.manufacturer_name');
    $tblDtb->join('manufacturer', 'manufacturer.manufacturer_id = aircraft_model.manufacturer_id', 'left');
    $query = $tblDtb->get()->getResult();
    $this->data['table_data'] = $query;
  }
}
