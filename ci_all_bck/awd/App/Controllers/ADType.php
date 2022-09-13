<?php

namespace App\Controllers;

use App\Models\ADTypeM;

class ADType extends BaseController
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
    $pageMethod = 'adTypePage';
    if ($method == 'getADTypeLabelJson') {
      $this->$method();
    } else if (method_exists($this, $method) && $method !== $pageMethod && $method !== 'adTypePage') {
      //$this->load_manufacturer_type();
      //$this->set_session_filters();
      $this->data = [];
      // default data
      $this->$defaultData();
      // method data            
      $this->$method();
      $this->getADType();
      // view method
      $this->$pageMethod();
    } else {      // else if response type is json
      $this->data = [];
      // default data
      $this->$defaultData();
      // view method
      $this->getADType();
      $this->$pageMethod();
      return;
    }
  }

  private function defaultData() {
    $this->data['title'] = 'AWD';
    $this->data['primary_column_name'] = 'ad_type_id';
    $this->data['form_title'] = 'Add AD Type';
    $this->data['show'] = ' ';
    $this->data['form_id'] = 'ad_type_form';
    $this->data['page_form'] = 'awd_type/awd_type_form';
    $this->data['page_table'] = 'awd_type/awd_type_table';
    $this->data['page_filter'] = 'awd_type/awd_type_filter';
    $this->data['validate_list'] = [];
    $this->data['form_action'] = 'add_ad_type';
    $this->data['update_action'] = 'update_ad_type';
    $this->data['view_action'] = 'view_ad_type';
    $this->data['delete_action'] = 'delete_ad_type';
    $this->data['page_filter_action'] = 'get_ad_type';
  }

  private function adTypePage()
  { 
    echo view('default_component/default_page_grid', $this->data);
  }

  private function addADType()
  {
    $mFd = model(ADTypeM::class);
    if ($this->request->getMethod() === 'post') {
      $data = [
        'ad_type' => $this->request->getPost('ad_type'),
        'created_by' => 1,
        'updated_by' => 1
      ];

      $mFd->insert($data);
      $mfId = $mFd->getInsertID();
    }
    $this->adTypePage();
  }

  private function updateADTypeRecord()
  {
    $validation = [
      'manufacturer_type' => 'required'
    ];
    if (!$this->validate($validation)) {
      // set validation message
      $this->getADTypeRecord();
      $this->data['form_action'] = 'update_ad_type';
      $this->data['show'] = 'show';
    } else {
      $pk = $this->request->getPost('ad_type_id');
      if (isset($pk)) {
        $db = db_connect();
        $builder = $db->table("ad_type");
        $builder->set(['ad_type' => $this->request->getPost('ad_type')]);
        $builder->where('ad_type_id', $pk);
        $builder->update();
      }
      $this->data['form_action'] = 'add_ad_type';
    }
  }

  private function deleteADTypeRecord()
  {
    echo "Update ADType";
  }

  private function getADTypeRecord()
  {
    $pk = $this->request->getGet('ad_type_id');
    if (!isset($pk)) {
      // set validation message
    } else {
      $db = db_connect();
      $builder = $db->table("ad_type");
      $pk = $this->request->getGet('ad_type_id');
      $query = $builder->select('ad_type.ad_type_id, ad_type.ad_type')->where('ad_type_id', $pk);
      $rslt = $query->get()->getResult();
      $this->data['ad_type'] = $rslt[0];
    }
  }

  private function getADTypeLabelJson()
  {
    if ($this->request->getMethod() === 'get') {
      $qry_s = $this->request->getGet('qry_string');
      // Loading db instance
      $db = db_connect();
      // Loading Query builder instance
      $builder = $db->table("ad_type");
      $query = $builder->select('ad_type_id as value, ad_type as label')
        ->where('ad_type LIKE CONCAT("%", substring("' . $qry_s . '", 2), "%")');

      $rslt = $query->get()->getResult();
      echo json_encode($rslt);
    }
  }

  private function getADType()
  {
    $db = db_connect();
    $tblDtb = $db->table('ad_type');
    $tblDtb->select('ad_type.ad_type_id, ad_type.ad_type');
    $query = $tblDtb->get()->getResult();
    $this->data['table_data'] = $query;
  }
}
