<?php

namespace App\Controllers;

use App\Models\EngineTypeM;

class EngineType extends BaseController
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
    $pageMethod = 'engineTypePage';
    if ($method == 'getEngineTypeLabelJson') {
      $this->$method();
    } else if (method_exists($this, $method) && $method !== $pageMethod && $method !== 'engineTypePage') {
      //$this->load_manufacturer_type();
      //$this->set_session_filters();
      $this->data = [];
      // default data
      $this->$defaultData();
      // method data            
      $this->$method();
      $this->getEngineType();
      // view method
      $this->$pageMethod();
    } else {      // else if response type is json
      $this->data = [];
      // default data
      $this->$defaultData();
      // view method
      $this->getEngineType();
      $this->$pageMethod();
      return;
    }
  }

  private function defaultData() {
    $this->data['title'] = 'AWD';
    $this->data['show'] = ' ';
    $this->data['primary_column_name'] = 'engine_type_id';
    $this->data['form_title'] = 'Add Engine Type';
    $this->data['form_id'] = 'engine_type_form';
    $this->data['page_form'] = 'engine_type/engine_type_form';
    $this->data['page_table'] = 'engine_type/engine_type_table';
    $this->data['page_filter'] = 'engine_type/engine_type_filter';
    $this->data['page_js'] = 'engine_type/engine_type_js';
    $this->data['page_create_action'] = 'add_engine_type';
    $this->data['page_update_action'] = 'update_engine_type';
    $this->data['page_filter_action'] = 'get_engine_type';
    $this->data['update_action'] = 'update_engine_type';
    $this->data['view_action'] = 'view_engine_type';
    $this->data['delete_action'] = 'delete_engine_type';
  }

  private function engineTypePage()
  {    
    echo view('default_component/default_page_grid', $this->data);
  }

  private function addEngineType()
  {
    $mFd = model(EngineTypeM::class);
    $db = db_connect();
    if ($this->request->getMethod() === 'post') {
      $data = [
        'engine_type' => $this->request->getPost('engine_type'),
        'engine_model_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('engine_model_id')))[1], // PENDING
        'created_by' => 1,
        'updated_by' => 1
      ];

      $mFd->insert($data);
      $mfId = $mFd->getInsertID();
    }
    $this->engineTypePage();
  }

  private function updateEngineTypeRecord()
  {
    $validation = [
      'engine_type_id' => 'required'
    ];
    if (!$this->validate($validation)) {
      // set validation message
      $this->getEngineTypeRecord();
      $this->data['form_action'] = 'update_engine_type';
      $this->data['show'] = 'show';
    } else {
      $pk = $this->request->getPost('engine_type_id');
      if (isset($pk)) {
        $db = db_connect();
        $builder = $db->table("engine_type");
        $builder->set(['engine_type' => $this->request->getPost('engine_type')]);
        $builder->set(['engine_model_id' => $this->request->getPost('engine_model_id')]);
        $builder->where('engine_type_id', $pk);
        $builder->update();
      }
      $this->data['form_action'] = 'add_engine_type';
    }
  }

  private function deleteEngineTypeRecord()
  {
    echo "Update EngineType";
  }

  private function getEngineTypeRecord()
  {
    echo "Get EngineType";
    $pk = $this->request->getGet('engine_type_id');
    if (!isset($pk)) {
      // set validation message
    } else {
      $db = db_connect();
      $builder = $db->table("engine_type");
      $pk = $this->request->getGet('engine_type_id');
      $query = $builder->select('engine_type_id, engine_type, engine_model, engine_model_id')
               ->join('engine_model', 'engine_model.engine_model_id = engine_type.engine_model_id', 'left')
               ->where('engine_type_id', $pk);
      $rslt = $query->get()->getResult();
      $this->data['engine_type'] = $rslt[0];
    }
  }

  private function getEngineTypeLabelJson()
  {
    if ($this->request->getMethod() === 'get') {
      $qry_s = $this->request->getGet('qry_string');
      // Loading db instance
      $db = db_connect();
      // Loading Query builder instance
      $builder = $db->table("engine_type");
      $query = $builder->select('engine_type_id as value, engine_type as label')
        ->where('engine_type LIKE CONCAT("%", substring("' . $qry_s . '", 2), "%")');

      $rslt = $query->get()->getResult();
      echo json_encode($rslt);
    }
  }

  private function getEngineType() {
    $db = db_connect();
    $tblDtb = $db->table('engine_type');
    $tblDtb->select('engine_type.engine_type_id, engine_type.engine_type, engine_model.engine_model');
    $tblDtb->join('engine_model', 'engine_model.engine_model_id = engine_type.engine_model_id', 'left');
    $query = $tblDtb->get()->getResult();
    $this->data['table_data'] = $query;
  }
}
