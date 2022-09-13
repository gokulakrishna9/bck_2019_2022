<?php

namespace App\Controllers;

use App\Models\AircraftTypeM;

class Aircraft extends BaseController
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
    $pageMethod = 'aircraftPage';
    if ($method == 'getAircraftLblJson') {
      $this->$method();
    } else if (method_exists($this, $method) && $method !== $pageMethod && $method !== 'manufacturerTypePage') {
      //$this->load_manufacturer_type();
      //$this->set_session_filters();
      $this->data = [];
      // default data
      $this->$defaultData();
      // method data            
      $this->$method();
      $this->getAircraft();
      // view method
      $this->$pageMethod();
    } else {      // else if response type is json
      $this->data = [];
      // default data
      $this->$defaultData();
      // view method
      $this->getAircraft();
      $this->$pageMethod();
      return;
    }
  }

  private function defaultData()
  {
    $this->data['title'] = 'AWD';
    $this->data['primary_column_name'] = 'aircraft_id';
    $this->data['show'] = ' ';
    $this->data['form_title'] = 'Add Aircraft';
    $this->data['form_id'] = 'aircraft_form';
    $this->data['page_form'] = 'aircraft/aircraft_form';
    $this->data['page_table'] = 'aircraft/aircraft_table';
    $this->data['page_filter'] = 'aircraft/aircraft_filter';
    $this->data['page_js'] = 'aircraft/aircraft_js';

    $this->data['form_action'] = 'add_aircraft';
    $this->data['update_action'] = 'update_aircraft';
    $this->data['view_action'] = 'view_aircraft';
    $this->data['delete_action'] = 'delete_aircraft';
    $this->data['page_filter_action'] = 'get_aircraft';
  }

  private function aircraftPage()
  {
    echo view('default_component/default_page_grid', $this->data);
  }

  private function addAircraft()
  {
    $mFd = model(AircraftM::class);
    $db = db_connect();
    if ($this->request->getMethod() === 'post') {
      $data = [
        'aircraft_serial_number' => $this->request->getPost('aircraft_serial_number'),
        'aircraft_model_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('aircraft_model_id')))[1], // PENDING
        'aircraft_type_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('aircraft_type_id')))[1], // PENDING
        'manufacturer_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('manufacturer_id')))[1], // PENDING
        'created_by' => 1,
        'updated_by' => 1
      ];

      $mFd->insert($data);
      $mfId = $mFd->getInsertID();
    }
    $this->aircraftPage();
  }

  private function updateAircraftRecord()
  {
    $validation = [
      'aircraft_serial_number' => 'required'
    ];
    if (!$this->validate($validation)) {
      // set validation message
      $this->getAircraftRecord();
      $this->data['form_action'] = 'update_aircraft';
      $this->data['show'] = 'show';
    } else {
      $pk = $this->request->getPost('aircraft_id');
      if (isset($pk)) {
        $db = db_connect();
        $builder = $db->table("aircraft");
        $builder->set(['aircraft_serial_number' => $this->request->getPost('aircraft_serial_number')]);
        $builder->set(['manufacturer_id' => $this->request->getPost('manufacturer_id')]);
        $builder->set(['aircraft_model_id' => $this->request->getPost('aircraft_model_id')]);
        $builder->set(['aircraft_type_id' => $this->request->getPost('aircraft_type_id')]);
        $builder->where('aircraft_id', $pk);
        $builder->update();
      }
      $this->data['form_action'] = 'add_aircraft';
    }
  }

  private function deleteAircraftRecord()
  {
    echo "Update Aircraft";
  }

  private function getAircraftRecord()
  {
    $pk = $this->request->getGet('aircraft_id');
    if (!isset($pk)) {
      // set validation message
    } else {
      $db = db_connect();
      $builder = $db->table("aircraft");
      $pk = $this->request->getGet('aircraft_id');
      $query = $builder->select('aircraft.aircraft_serial_number, aircraft.aircraft_id, aircraft_model.aircraft_model, aircraft_type.aircraft_type, manufacturer.manufacturer_name')
        ->join('aircraft_type', 'aircraft_type.aircraft_type_id = aircraft.aircraft_type_id', 'left')
        ->join('aircraft_model', 'aircraft.aircraft_model_id = aircraft_model.aircraft_model_id', 'left')
        ->join('manufacturer', 'aircraft.manufacturer_id = manufacturer.manufacturer_id', 'left')
        ->where('aircraft_id', $pk);
      $rslt = $query->get()->getResult();
      $this->data['aircraft'] = $rslt[0];
    }
  }

  private function getAircraft()
  {
    $db = db_connect();
    $tblDtb = $db->table('aircraft');
    $tblDtb->select('aircraft.aircraft_serial_number, aircraft.aircraft_id, aircraft_model.aircraft_model, aircraft_type.aircraft_type, manufacturer.manufacturer_name');
    $tblDtb->join('aircraft_type', 'aircraft_type.aircraft_type_id = aircraft.aircraft_type_id', 'left');
    $tblDtb->join('aircraft_model', 'aircraft.aircraft_model_id = aircraft_model.aircraft_model_id', 'left');
    $tblDtb->join('manufacturer', 'aircraft.manufacturer_id = manufacturer.manufacturer_id', 'left');
    $query = $tblDtb->get()->getResult();
    $this->data['table_data'] = $query;
  }
}
