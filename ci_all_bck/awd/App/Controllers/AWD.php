<?php

namespace App\Controllers;

use App\Models\ADModel;

class AWD extends BaseController
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
    $pageMethod = 'awdPage';
    if ($method == 'getAWDLabelJson') {
      $this->$method();
    } else if (method_exists($this, $method) && $method !== $pageMethod && $method !== 'awdPage') {
      //$this->load_manufacturer_type();
      //$this->set_session_filters();
      $this->data = [];
      // default data
      $this->$defaultData();
      // method data            
      $this->$method();
      $this->getAWD();
      // view method
      $this->$pageMethod();
    } else {      // else if response type is json
      $this->data = [];
      // default data
      $this->$defaultData();
      // view method
      $this->getAWD();
      $this->$pageMethod();
      return;
    }
  }

  private function defaultData()
  {
    $this->data['title'] = 'AWD';
    $this->data['primary_column_name'] = 'ad_record_id';
    $this->data['show'] = ' ';
    $this->data['form_title'] = 'Add Air Worthiness Directive';
    $this->data['page_form'] = 'awd/awd_form';
    $this->data['form_id'] = 'awd_form';
    $this->data['page_table'] = 'awd/awd_table';
    $this->data['page_filter'] = 'awd/awd_filter';

    $this->data['form_action'] = 'add_awd';
    $this->data['update_action'] = 'update_awd';
    $this->data['view_action'] = 'view_awd';
    $this->data['delete_action'] = 'delete_awd';
    $this->data['page_filter_action'] = 'get_awd';
  }

  private function awdPage()
  {
    echo view('default_component/default_page_grid', $this->data);
  }

  private function addAWD()
  {
    $ad = model(ADModel::class);
    if ($this->request->getMethod() === 'post') {
      $this->data = [
        'ad_number' => $this->request->getPost('title'),
        'ad_type_id' => $this->request->getPost('ad_type_id'),
        'subject' => $this->request->getPost('subject'),
        'issued_by_id' => $this->request->getPost('issued_by_id'),
        'effective_date' => $this->request->getPost('effective_date'),
        'supersedes_ad_id' => $this->request->getPost('supersedes_ad_id'),
        'superseded_by_ad_id' => $this->request->getPost('superseded_by_ad_id'),
        'created_by' => 1,
        'udpated_by' => 1
      ];
      $ad->insert($this->data);
      echo "Add Manufacturer";
      var_dump($this->data);
      $ad->insert($this->data);
      $ad = $ad->getInsertID();

      $manufacturer_type_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('manufacturer_type_id')));
      $this->data = [];
      foreach ($manufacturer_type_id as $mtid) {
        array_push($this->data, [
          'manufacturer_type_id' => $mtid,
          'manufacturer_id' => $ad
        ]);
      }
      $db = db_connect();
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($this->data);
      $ad_type_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('ad_type_id')));
      $this->data = [];
      foreach ($ad_type_id as $mtid) {
        array_push($this->data, [
          'ad_type_id' => $mtid,
          'ad_record_id' => $ad
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($this->data);
      $avaiation_authority_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('avaiation_authority_id')));
      $this->data = [];
      foreach ($avaiation_authority_id as $mtid) {
        array_push($this->data, [
          'avaiation_authority_id' => $mtid,
          'ad_record_id' => $ad
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($this->data);
      $aircraft_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('aircraft_id')));
      $this->data = [];
      foreach ($aircraft_id as $mtid) {
        array_push($this->data, [
          'aircraft_id' => $mtid,
          'ad_record_id' => $ad
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($this->data);
      $aircraft_model_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('aircraft_model_id')));
      $this->data = [];
      foreach ($aircraft_model_id as $mtid) {
        array_push($this->data, [
          'aircraft_model_id' => $mtid,
          'ad_record_id' => $ad
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($this->data);
      $aircraft_type_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('aircraft_type_id')));
      $this->data = [];
      foreach ($aircraft_type_id as $mtid) {
        array_push($this->data, [
          'aircraft_type_id' => $mtid,
          'ad_record_id' => $ad
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($this->data);
      $engine_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('engine_id')));
      $this->data = [];
      foreach ($engine_id as $mtid) {
        array_push($this->data, [
          'engine_id' => $mtid,
          'ad_record_id' => $ad
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($this->data);
      $engine_model_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('engine_model_id')));
      $this->data = [];
      foreach ($engine_model_id as $mtid) {
        array_push($this->data, [
          'engine_model_id' => $mtid,
          'ad_record_id' => $ad
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($this->data);
      $engine_type_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('engine_type_id')));
      $this->data = [];
      foreach ($engine_type_id as $mtid) {
        array_push($this->data, [
          'engine_type_id' => $mtid,
          'ad_record_id' => $ad
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($this->data);
    }
    $this->awdPage();
  }

  private function updateADRecord()
  {
    $validation = [
      'ad_number' => 'required'
    ];
    if (!$this->validate($validation)) {
      // set validation message
      $this->getADRecord();
      $this->data['form_action'] = 'update_awd_record';
      $this->data['show'] = 'show';
    } else {
      $pk = $this->request->getPost('ad_record_id');
      if (isset($pk)) {
        $db = db_connect();
        $builder = $db->table("ad_record");
        $builder->set(['ad_number' => $this->request->getPost('ad_number')]);
        $builder->set(['ad_type_id' => $this->request->getPost('ad_type_id')]);
        $builder->set(['subject' => $this->request->getPost('subject')]);
        $builder->set(['aviation_authority_id' => $this->request->getPost('aviation_authority_id')]);
        $builder->set(['supersedes_ad_id' => $this->request->getPost('supersedes_ad_id')]);
        $builder->set(['superseded_by_ad_id' => $this->request->getPost('superseded_by_ad_id')]);
        $builder->where('ad_record_id', $pk);
        $builder->update();
        // aircraft
        $this->updateAircraftList();
        // aircraft_model
        $this->updateAircraftModel();
        // aircraft_type
        $this->updateAircraftType();
        // appliance
        $this->updateAppliance();
        // engine
        $this->updateEngine();
        // engine model
        $this->updateEngineModel();
        // engine type
        $this->updateEngineType();
      }
      $this->data['form_action'] = 'update_manufacturer';
    }
  }

  // aircraft
  private function updateAircraftList()
  {
    // previous record
    $prv = $this->request->getPost('prev_aircraft_list');
    $prv = isset($prv) ? explode(',', $prv) : [];
    // current record
    $cr = $this->request->getPost('aircraft_id');
    $cr = isset($cr) ? explode(',', $cr) : [];
    $adpk = $this->request->getPost('ad_record_id');
    $del = [];
    $new = [];
    if (isset($adpk)) {
      $del = array_diff($prv, $cr);
      $new = array_diff($cr, $prv);
    }
    $db = db_connect();
    $builder = $db->table("ad_aircraft_link");
    // delete missing    
    foreach($del as $id) {
      $builder->delete(['aircraft_id' => $id, 'ad_record_id' => $adpk]);
    }
    // add new
    $this->data = [];
    foreach ($new as $id) {
      array_push($this->data, [
        'aircraft_id' => $id,
        'ad_record_id' => $adpk
      ]);
    }
    $builder->insertBatch($this->data);
  }
  // aircraft_model
  private function updateAircraftModel()
  {
    // previous record
    $prv = $this->request->getPost('prev_aircraft_model_list');
    $prv = isset($prv) ? explode(',', $prv) : [];
    // current record
    $cr = $this->request->getPost('aircraft_model_id');
    $cr = isset($cr) ? explode(',', $cr) : [];
    $adpk = $this->request->getPost('ad_record_id');
    $del = [];
    $new = [];
    if (isset($adpk)) {
      $del = array_diff($prv, $cr);
      $new = array_diff($cr, $prv);
    }
    $db = db_connect();
    $builder = $db->table("ad_aircraft_model_link");
    // delete missing    
    foreach($del as $id) {
      $builder->delete(['aircraft_model_id' => $id, 'ad_record_id' => $adpk]);
    }
    // add new
    $this->data = [];
    foreach ($new as $id) {
      array_push($this->data, [
        'aircraft_model_id' => $id,
        'ad_record_id' => $adpk
      ]);
    }
    $builder->insertBatch($this->data);
  }
  // aircraft_type
  private function updateAircraftType()
  {
    // previous record
    $prv = $this->request->getPost('prev_aircraft_type_list');
    $prv = isset($prv) ? explode(',', $prv) : [];
    // current record
    $cr = $this->request->getPost('aircraft_type_id');
    $cr = isset($cr) ? explode(',', $cr) : [];
    $adpk = $this->request->getPost('ad_record_id');
    $del = [];
    $new = [];
    if (isset($adpk)) {
      $del = array_diff($prv, $cr);
      $new = array_diff($cr, $prv);
    }
    $db = db_connect();
    $builder = $db->table("ad_aircraft_type_link");
    // delete missing    
    foreach($del as $id) {
      $builder->delete(['aircraft_type_id' => $id, 'ad_record_id' => $adpk]);
    }
    // add new
    $this->data = [];
    foreach ($new as $id) {
      array_push($this->data, [
        'aircraft_type_id' => $id,
        'ad_record_id' => $adpk
      ]);
    }
    $builder->insertBatch($this->data);
  }
  // appliance
  private function updateAppliance()
  {
    // previous record
    $prv = $this->request->getPost('prev_appliance_list');
    $prv = isset($prv) ? explode(',', $prv) : [];
    // current record
    $cr = $this->request->getPost('appliance_id');
    $cr = isset($cr) ? explode(',', $cr) : [];
    $adpk = $this->request->getPost('ad_record_id');
    $del = [];
    $new = [];
    if (isset($adpk)) {
      $del = array_diff($prv, $cr);
      $new = array_diff($cr, $prv);
    }
    $db = db_connect();
    $builder = $db->table("ad_appliance_link");
    // delete missing    
    foreach($del as $id) {
      $builder->delete(['appliance_id' => $id, 'ad_record_id' => $adpk]);
    }
    // add new
    $this->data = [];
    foreach ($new as $id) {
      array_push($this->data, [
        'appliance_id' => $id,
        'ad_record_id' => $adpk
      ]);
    }
    $builder->insertBatch($this->data);
  }
  // engine
  private function updateEngine()
  {
    // previous record
    $prv = $this->request->getPost('prev_engine_list');
    $prv = isset($prv) ? explode(',', $prv) : [];
    // current record
    $cr = $this->request->getPost('engine_id');
    $cr = isset($cr) ? explode(',', $cr) : [];
    $adpk = $this->request->getPost('ad_record_id');
    $del = [];
    $new = [];
    if (isset($adpk)) {
      $del = array_diff($prv, $cr);
      $new = array_diff($cr, $prv);
    }
    $db = db_connect();
    $builder = $db->table("ad_engine_link");
    // delete missing    
    foreach($del as $id) {
      $builder->delete(['engine_id' => $id, 'ad_record_id' => $adpk]);
    }
    // add new
    $this->data = [];
    foreach ($new as $id) {
      array_push($this->data, [
        'engine_id' => $id,
        'ad_record_id' => $adpk
      ]);
    }
    $builder->insertBatch($this->data);
  }
  // engine model
  private function updateEngineModel()
  {
    // previous record
    $prv = $this->request->getPost('prev_engine_model_list');
    $prv = isset($prv) ? explode(',', $prv) : [];
    // current record
    $cr = $this->request->getPost('engine_model_id');
    $cr = isset($cr) ? explode(',', $cr) : [];
    $adpk = $this->request->getPost('ad_record_id');
    $del = [];
    $new = [];
    if (isset($adpk)) {
      $del = array_diff($prv, $cr);
      $new = array_diff($cr, $prv);
    }
    $db = db_connect();
    $builder = $db->table("ad_engine_model_link");
    // delete missing    
    foreach($del as $id) {
      $builder->delete(['engine_model_id' => $id, 'ad_record_id' => $adpk]);
    }
    // add new
    $this->data = [];
    foreach ($new as $id) {
      array_push($this->data, [
        'engine_model_id' => $id,
        'ad_record_id' => $adpk
      ]);
    }
    $builder->insertBatch($this->data);
  }
  // engine type
  private function updateEngineType()
  {
    // previous record
    $prv = $this->request->getPost('prev_engine_type_list');
    $prv = isset($prv) ? explode(',', $prv) : [];
    // current record
    $cr = $this->request->getPost('engine_type_id');
    $cr = isset($cr) ? explode(',', $cr) : [];
    $adpk = $this->request->getPost('ad_record_id');
    $del = [];
    $new = [];
    if (isset($adpk)) {
      $del = array_diff($prv, $cr);
      $new = array_diff($cr, $prv);
    }
    $db = db_connect();
    $builder = $db->table("ad_engine_type_link");
    // delete missing    
    foreach($del as $id) {
      $builder->delete(['engine_type_id' => $id, 'ad_record_id' => $adpk]);
    }
    // add new
    $this->data = [];
    foreach ($new as $id) {
      array_push($this->data, [
        'engine_type_id' => $id,
        'ad_record_id' => $adpk
      ]);
    }
    $builder->insertBatch($this->data);
  }

  private function deleteADRecord()
  {
    echo "Update ADRecord";
  }

  private function getADRecord()
  {
    $pk = $this->request->getGet('ad_record_id');
    if (!isset($pk)) {
      // set validation message
    } else {
      $db = db_connect();
      $builder = $db->table("ad_record as ad_main");
      $query = $builder->select('ad_main.ad_record_id, ad_main.ad_number, ad_main.subject,'
        . 'avaiation_authority.avaiation_authority, aviation_authority_id'
        . 'ad_type.ad_type, ad_main.issue_date, ad_main.effective_date,'
        . 'ad_supersed.ad_number as supersedes, ad_superseded_by.ad_number as superseded_by,'
        . 'GROUP_CONCAT(aircraft.aircraft_serial_number) as aircraft_serial_number, GROUP_CONCAT(aircraft.aircraft_id) as aircraft_id,'
        . 'GROUP_CONCAT(aircraft_model.aircraft_model) as aircraft_model, GROUP_CONCAT(aircraft_model.aircraft_model_id) as aircraft_model_id'
        . 'GROUP_CONCAT(aircraft_type.aircraft_type) as aircraft_type, GROUP_CONCAT(aircraft_type.aircraft_type_id) as aircraft_type_id, '
        . 'GROUP_CONCAT(engine.engine_serial_number) as engine_serial_number, GROUP_CONCAT(engine.engine_id) as engine_id,'
        . 'GROUP_CONCAT(engine_type.engine_type) as engine_type, GROUP_CONCAT(engine_type.engine_type_id) as engine_type_id,'
        . 'GROUP_CONCAT(engine_model.engine_model) as engine_model, GROUP_CONCAT(engine_model.engine_model_id) as engine_model_id')
        ->join('ad_record as ad_supersed', 'ad_main.supersedes_ad_id = ad_supersed.ad_record_id', 'left')
        ->join('ad_record as ad_superseded_by', 'ad_main.superseded_by_ad_id = ad_superseded_by.ad_record_id', 'left')
        ->join('avaiation_authority', 'avaiation_authority.avaiation_authority_id = ad_main.issued_by_id', 'left')
        ->join('ad_type', 'ad_type.ad_type_id = ad_main.ad_type_id', 'left')
        ->join('ad_aircraft_link', 'ad_main.ad_record_id = ad_aircraft_link.ad_record_id', 'left')
        ->join('aircraft', 'ad_aircraft_link.aircraft_id = aircraft.aircraft_id', 'left')
        ->join('ad_aircraft_model_link', 'ad_main.ad_record_id = ad_aircraft_model_link.ad_record_id', 'left')
        ->join('aircraft_model', 'ad_aircraft_model_link.aircraft_model_id = aircraft_model.aircraft_model_id', 'left')
        ->join('ad_aircraft_type_link', 'ad_main.ad_record_id = ad_aircraft_type_link.ad_record_id', 'left')
        ->join('aircraft_type', 'ad_aircraft_type_link.aircraft_type_id = aircraft_type.aircraft_type_id', 'left')
        ->join('ad_engine_link', 'ad_main.ad_record_id = ad_engine_link.ad_record_id', 'left')
        ->join('engine', 'ad_engine_link.engine_id = engine.engine_id', 'left')
        ->join('ad_engine_model_link', 'ad_main.ad_record_id = ad_engine_model_link.ad_record_id', 'left')
        ->join('engine_model', 'ad_engine_model_link.engine_model_id = engine_model.engine_model_id', 'left')
        ->join('ad_engine_type_link', 'ad_main.ad_record_id = ad_engine_type_link.ad_record_id', 'left')
        ->join('engine_type', 'engine_type.engine_type_id = ad_engine_type_link.engine_type_id', 'left')
        ->where('ad_main.ad_record_id', $pk)
        ->groupBy('ad_main.ad_record_id');
      $rslt = $query->get()->getResult();
      $this->data['ad_record'] = $rslt[0];
    }
  }

  private function default_handler()
  {
    echo "Page Not Found";
  }

  private function getAWDLabelJson()
  {
    if ($this->request->getMethod() === 'get') {
      $qry_s = $this->request->getGet('qry_string');
      // Loading db instance
      $db = db_connect();
      // Loading Query builder instance
      $builder = $db->table("ad_record");
      $query = $builder->select('ad_record_id as value, ad_number as label')
        ->where('ad_number LIKE CONCAT("%", substring("' . $qry_s . '", 2), "%")');

      $rslt = $query->get()->getResult();
      echo json_encode($rslt);
    }
  }

  private function getAWD()
  {
    $db = db_connect();
    $tblDtb = $db->table('ad_record as ad_main');
    $tblDtb->select('ad_main.ad_record_id, ad_main.ad_number, ad_main.subject,'
      . 'avaiation_authority.avaiation_authority, avaiation_authority.avaiation_authority_id,'
      . 'ad_type.ad_type, ad_main.issue_date, ad_main.effective_date,'
      . 'ad_supersed.ad_number as supersedes, ad_superseded_by.ad_number as superseded_by,'
      . 'GROUP_CONCAT(aircraft.aircraft_serial_number) as aircraft_serial_number, GROUP_CONCAT(aircraft.aircraft_id) as aircraft_id,'
      . 'GROUP_CONCAT(aircraft_model.aircraft_model) as aircraft_model, GROUP_CONCAT(aircraft_model.aircraft_model_id) as aircraft_model_id,'
      . 'GROUP_CONCAT(aircraft_type.aircraft_type) as aircraft_type, GROUP_CONCAT(aircraft_type.aircraft_type_id) as aircraft_type_id, '
      . 'GROUP_CONCAT(engine.engine_serial_number) as engine_serial_number, GROUP_CONCAT(engine.engine_id) as engine_id,'
      . 'GROUP_CONCAT(engine_type.engine_type) as engine_type, GROUP_CONCAT(engine_type.engine_type_id) as engine_type_id,'
      . 'GROUP_CONCAT(engine_model.engine_model) as engine_model, GROUP_CONCAT(engine_model.engine_model_id) as engine_model_id');
    $tblDtb->join('ad_record as ad_supersed', 'ad_main.supersedes_ad_id = ad_supersed.ad_record_id', 'left');
    $tblDtb->join('ad_record as ad_superseded_by', 'ad_main.superseded_by_ad_id = ad_superseded_by.ad_record_id', 'left');
    //$tblDtb->join('manufacturer', 'ad_main.manufacturer_id = manufacturer.manufacturer_id', 'left');
    //$tblDtb->join('manufacturer', 'ad_main.manufacturer_id = manufacturer.manufacturer_id', 'left');
    $tblDtb->join('avaiation_authority', 'avaiation_authority.avaiation_authority_id = ad_main.issued_by_id', 'left');
    $tblDtb->join('ad_type', 'ad_type.ad_type_id = ad_main.ad_type_id', 'left');

    $tblDtb->join('ad_aircraft_link', 'ad_main.ad_record_id = ad_aircraft_link.ad_record_id', 'left');
    $tblDtb->join('aircraft', 'ad_aircraft_link.aircraft_id = aircraft.aircraft_id', 'left');

    $tblDtb->join('ad_aircraft_model_link', 'ad_main.ad_record_id = ad_aircraft_model_link.ad_record_id', 'left');
    $tblDtb->join('aircraft_model', 'ad_aircraft_model_link.aircraft_model_id = aircraft_model.aircraft_model_id', 'left');

    $tblDtb->join('ad_aircraft_type_link', 'ad_main.ad_record_id = ad_aircraft_type_link.ad_record_id', 'left');
    $tblDtb->join('aircraft_type', 'ad_aircraft_type_link.aircraft_type_id = aircraft_type.aircraft_type_id', 'left');

    $tblDtb->join('ad_engine_link', 'ad_main.ad_record_id = ad_engine_link.ad_record_id', 'left');
    $tblDtb->join('engine', 'ad_engine_link.engine_id = engine.engine_id', 'left');

    $tblDtb->join('ad_engine_model_link', 'ad_main.ad_record_id = ad_engine_model_link.ad_record_id', 'left');
    $tblDtb->join('engine_model', 'ad_engine_model_link.engine_model_id = engine_model.engine_model_id', 'left');

    $tblDtb->join('ad_engine_type_link', 'ad_main.ad_record_id = ad_engine_type_link.ad_record_id', 'left');
    $tblDtb->join('engine_type', 'engine_type.engine_type_id = ad_engine_type_link.engine_type_id', 'left');
    $tblDtb->groupBy('ad_main.ad_record_id');
    $query = $tblDtb->get()->getResult();
    $this->data['table_data'] = $query;
  }
}
