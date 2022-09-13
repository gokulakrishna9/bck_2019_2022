<?php

namespace App\Controllers;

use App\Models\EngineModelM;

class EngineModel extends BaseController
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
    $pageMethod = 'engineModelPage';
    if ($method == 'getEngineModelLabelJson') {
      $this->$method();
    } else if (method_exists($this, $method) && $method !== $pageMethod && $method !== 'getEngineModelLabelJson') {
      //$this->load_manufacturer_type();
      //$this->set_session_filters();
      $this->data = [];
      // default data
      $this->$defaultData();
      // method data            
      $this->$method();
      $this->getEngineModel();
      // view method
      $this->$pageMethod();
    } else {      // else if response type is json
      $this->data = [];
      // default data
      $this->$defaultData();
      // view method
      $this->getEngineModel();
      $this->$pageMethod();
      return;
    }
  }

  private function defaultData()
  {
    $this->data['title'] = 'AWD';
    $this->data['primary_column_name'] = 'engine_model_id';
    $this->data['show'] = ' ';
    $this->data['form_title'] = 'Add Engine Model';
    $this->data['page_form'] = 'engine_model/engine_model_form';
    $this->data['form_id'] = 'engine_model_form';
    $this->data['page_table'] = 'engine_model/engine_model_table';
    $this->data['page_filter'] = 'engine_model/engine_model_filter';
    $this->data['page_js'] = 'engine_model/engine_model_js';
    $this->data['form_action'] = 'add_engine_model';
    $this->data['update_action'] = 'update_engine_model';
    $this->data['view_action'] = 'view_engine_model';
    $this->data['delete_action'] = 'delete_engine_model';
    $this->data['page_filter_action'] = 'get_engine_model';
  }

  private function engineModelPage()
  {
    echo view('default_component/default_page_grid', $this->data);
  }

  private function addEngineModel()
  {
    $mFd = model(EngineModelM::class);
    $db = db_connect();
    if ($this->request->getMethod() === 'post') {
      $data = [
        'engine_model' => $this->request->getPost('engine_model'),
        'engine_model_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('engine_model_id')))[1], // PENDING
        'created_by' => 1,
        'updated_by' => 1
      ];

      $mFd->insert($data);
      $mfId = $mFd->getInsertID();
    }
    $this->engineModelPage();
  }

  private function updateEngineModel()
  {
    $validation = [
      'engine_model_id' => 'required'
    ];
    if (!$this->validate($validation)) {
      // set validation message
      $this->getEngineModelRecord();
      $this->data['form_action'] = 'update_engine_model';
      $this->data['show'] = 'show';
    } else {
      $pk = $this->request->getPost('engine_model_id');
      if (isset($pk)) {
        $db = db_connect();
        $builder = $db->table("engine_model");
        $builder->set(['engine_model' => $this->request->getPost('engine_model')]);
        $builder->set(['manufacturer_id' => $this->request->getPost('manufacturer_id')]);
        $builder->where('engine_model_id', $pk);
        $builder->update();
      }
      $this->data['form_action'] = 'update_engine_model';
    }
  }

  private function deleteEngineModelRecord()
  {
    echo "Update EngineModel";
  }

  private function getEngineModelRecord()
  {
    $pk = $this->request->getGet('engine_model_id');
    if (!isset($pk)) {
      // set validation message
    } else {
      $db = db_connect();
      $builder = $db->table("engine_model");
      $pk = $this->request->getGet('engine_model_id');
      $query = $builder->select('engine_model.engine_model_id, engine_model.engine_model, engine_model.manufacturer_id, manufacturer.manufacturer_name')->join('manufacturer', 'manufacturer.manufacturer_id = engine_model.manufacturer_id', 'left')->where('engine_model_id', $pk);
      $rslt = $query->get()->getResult();
      $this->data['engine_model'] = $rslt[0];
    }
  }

  private function getEngineModelLabelJson()
  {
    if ($this->request->getMethod() === 'get') {
      $qry_s = $this->request->getGet('qry_string');
      // Loading db instance
      $db = db_connect();
      // Loading Query builder instance
      $builder = $db->table("engine_model");
      $query = $builder->select('engine_model_id as value, engine_model as label')
        ->where('engine_model LIKE CONCAT("%", substring("' . $qry_s . '", 2), "%")');

      $rslt = $query->get()->getResult();
      echo json_encode($rslt);
    }
  }

  private function getEngineModel()
  {
    $db = db_connect();
    $tblDtb = $db->table('engine_model');
    $tblDtb->select('engine_model.engine_model_id, engine_model.engine_model, engine_model.manufacturer_id, manufacturer.manufacturer_name');
    $tblDtb->join('manufacturer', 'manufacturer.manufacturer_id = engine_model.manufacturer_id', 'left');
    $query = $tblDtb->get()->getResult();
    $this->data['table_data'] = $query;
  }
}
