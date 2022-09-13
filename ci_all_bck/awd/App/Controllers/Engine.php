<?php

namespace App\Controllers;

class Engine extends BaseController
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
    $pageMethod = 'enginePage';
    if ($method == 'getEngineLblJson') {
      $this->$method();
    } else if (method_exists($this, $method) && $method !== $pageMethod && $method !== 'enginePage') {
      //$this->load_manufacturer_type();
      //$this->set_session_filters();
      $this->data = [];
      // default data
      $this->$defaultData();
      // method data            
      $this->$method();
      $this->getEngine();
      // view method
      $this->$pageMethod();
    } else {      // else if response type is json
      $this->data = [];
      // default data
      $this->$defaultData();
      // view method
      $this->getEngine();
      $this->$pageMethod();
      return;
    }
  }

  private function defaultData()
  {
    $this->data['title'] = 'AWD';
    $this->data['primary_column_name'] = 'engine_id';
    $this->data['show'] = ' ';
    $this->data['form_title'] = 'Add Engine';
    $this->data['form_id'] = 'engine_form';
    $this->data['page_form'] = 'engine/engine_form';
    $this->data['page_table'] = 'engine/engine_table';
    $this->data['page_filter'] = 'engine/engine_filter';
    $this->data['page_js'] = 'engine/engine_js';
    $this->data['form_action'] = 'add_engine';
    $this->data['update_action'] = 'update_engine';
    $this->data['view_action'] = 'view_engine';
    $this->data['delete_action'] = 'delete_engine';
    $this->data['page_filter_action'] = 'get_engine';
  }

  private function enginePage()
  {
    echo view('default_component/default_page_grid', $this->data);
  }

  private function addEngine()
  {
    $mFd = model(EngineM::class);
    $db = db_connect();
    if ($this->request->getMethod() === 'post') {
      $data = [
        'engine_serial_number' => $this->request->getPost('engine_serial_number'),
        'engine_type_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('engine_type_id')))[1],
        'engine_model_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('engine_model_id')))[1],
        'manufacturer_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('manufacturer_id')))[1], // PENDING
        'created_by' => 1,
        'updated_by' => 1
      ];

      $mFd->insert($data);
      $mfId = $mFd->getInsertID();
    }
    $this->enginePage();
  }

  private function updateEngineRecord()
  {
    $validation = [
      'manufacturer_type' => 'required'
    ];
    if (!$this->validate($validation)) {
      // set validation message
      $this->getEngineRecord();
      $this->data['form_action'] = 'update_engine';
      $this->data['show'] = 'show';
    } else {
      $pk = $this->request->getPost('engine_id');
      if (isset($pk)) {
        $db = db_connect();
        $builder = $db->table("engine");
        $builder->set(['engine_serial_number' => $this->request->getPost('engine_serial_number')]);
        $builder->set(['manufacturer_id' => $this->request->getPost('manufacturer_id')]);
        $builder->set(['model_id' => $this->request->getPost('model_id')]);
        $builder->set(['engine_type_id' => $this->request->getPost('engine_type_id')]);
        $builder->where('engine_id', $pk);
        $builder->update();
      }
      $this->data['form_action'] = 'update_manufacturer';
    }
  }

  private function deleteEngineRecord()
  {
    echo "Update Engine";
  }

  private function getEngineRecord()
  {
    $pk = $this->request->getGet('engine_id');
    if (!isset($pk)) {
      // set validation message
    } else {
      $db = db_connect();
      $builder = $db->table("engine");
      $pk = $this->request->getGet('engine_id');
      $query = $builder->select('engine_id, manufacturer_id, engine_model_id, engine_type_id')
        ->join('manufacturer', 'engine.manufacturer_id = manufacturer.manufacturer_id', 'left')
        ->join('engine_model', 'engine_model.engine_model_id = engine.engine_model_id', 'left')
        ->join('engine_type', 'engine_type.engine_type_id = engine.engine_type_id', 'left')
        ->where('engine_id', $pk);
      $rslt = $query->get()->getResult();
      $this->data['engine'] = $rslt[0];
    }
  }

  private function getEngineLabelJson()
  {
    if ($this->request->getMethod() === 'get') {
      $qry_s = $this->request->getGet('qry_string');
      // Loading db instance
      $db = db_connect();
      // Loading Query builder instance
      $builder = $db->table("engine");
      $query = $builder->select('engine_id as value, engine_serial_number as label')
        ->where('engine_serial_number LIKE CONCAT("%", substring("' . $qry_s . '", 2), "%")');

      $rslt = $query->get()->getResult();
      echo json_encode($rslt);
    }
  }

  private function getEngine()
  {
    $db = db_connect();
    $tblDtb = $db->table('engine');
    $tblDtb->select('engine.engine_id, engine.engine_serial_number, '
      . 'engine_model.engine_model, engine_type.engine_type, manufacturer.manufacturer_name');
    $tblDtb->join('manufacturer', 'engine.manufacturer_id = manufacturer.manufacturer_id', 'left');
    $tblDtb->join('engine_model', 'engine_model.engine_model_id = engine.engine_model_id', 'left');
    $tblDtb->join('engine_type', 'engine_type.engine_type_id = engine.engine_type_id', 'left');
    $query = $tblDtb->get()->getResult();
    $this->data['table_data'] = $query;
  }
}
