<?php

namespace App\Controllers;

use App\Models\AviationAuthorityM;

class AviationAuthority extends BaseController
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
    $defaultData = 'defaultData';
    $pageMethod = 'aviationAuthorityPage';
    if ($method == 'getAviationAuthorityLblJson') {
      $this->$method();
    } else if (method_exists($this, $method) && $method !== $pageMethod && $method !== 'aviationAuthorityPage') {
      //$this->load_manufacturer_type();
      //$this->set_session_filters();
      $this->data = [];
      // default data
      $this->$defaultData();
      // method data            
      $this->$method();
      $this->getAviationAuthority();
      // view method
      $this->$pageMethod();
    } else {      // else if response type is json
      $this->data = [];
      // default data
      $this->$defaultData();
      // view method
      $this->getAviationAuthority();
      $this->$pageMethod();
      return;
    }
  }

  private function defaultData() {
    $this->data['title'] = 'AWD';
    $this->data['primary_column_name'] = 'avaiation_authority_id';
    $this->data['show'] = ' ';
    $this->data['form_title'] = 'Add Aviation Authority';
    $this->data['form_id'] = 'avaiation_authority_form';
    $this->data['page_form'] = 'avaiation_authority/avaiation_authority_form';
    $this->data['page_table'] = 'avaiation_authority/avaiation_authority_table';
    $this->data['page_filter'] = 'avaiation_authority/avaiation_authority_filter';
    $this->data['form_action'] = 'add_aviation_authority';
    $this->data['update_action'] = 'update_aviation_authority';
    $this->data['view_action'] = 'view_aviation_authority';
    $this->data['delete_action'] = 'delete_aviation_authority';
    $this->data['page_filter_action'] = 'get_aviation_authority';
  }

  private function aviationAuthorityPage()
  {    
    echo view('default_component/default_page_grid', $this->data);
  }

  private function addAviationAuthority()
  {
    $mFd = model(AviationAuthorityM::class);
    $db = db_connect();
    if ($this->request->getMethod() === 'post') {
      $data = [
        'avaiation_authority' => $this->request->getPost('avaiation_authority'),
        'created_by' => 1,
        'updated_by' => 1
      ];

      $mFd->insert($data);
      $mfId = $mFd->getInsertID();
    }
  }

  private function updateAviationAuthorityRecord()
  {
    $validation = [
      'aviation_authority' => 'required'
    ];
    if (!$this->validate($validation)) {
      // set validation message
      $this->getAviationAuthorityRecord();
      $this->data['form_action'] = 'update_aviation_authority';
      $this->data['show'] = 'show';
    } else {
      $pk = $this->request->getPost('aviation_authority_id');
      if (isset($pk)) {
        $db = db_connect();
        $builder = $db->table("aviation_authority");
        $builder->set(['aviation_authority' => $this->request->getPost('aviation_authority')]);        
        $builder->where('aviation_authority_id', $pk);
        $builder->update();
      }
      $this->data['form_action'] = 'add_aviation_authority';
    }
  }

  private function deleteAviationAuthorityRecord()
  {
    echo "Update AviationAuthority";
  }

  private function getAviationAuthorityRecord()
  {
    $pk = $this->request->getGet('aviation_authority_id');
    if (!isset($pk)) {
      // set validation message
    } else {
      $db = db_connect();
      $builder = $db->table("aviation_authority");
      $query = $builder->select('avaiation_authority.avaiation_authority_id, avaiation_authority.avaiation_authority')
        ->where('aviation_authority_id', $pk);
      $rslt = $query->get()->getResult();
      $this->data['aviation_authority'] = $rslt[0];
    }
  }

  private function getAviationAuthorityLabelJson()
  {
    if ($this->request->getMethod() === 'get') {
      $qry_s = $this->request->getGet('qry_string');
      // Loading db instance
      $db = db_connect();
      // Loading Query builder instance
      $builder = $db->table("avaiation_authority");
      $query = $builder->select('avaiation_authority_id as value, avaiation_authority as label')
        ->where('avaiation_authority LIKE CONCAT("%", substring("' . $qry_s . '", 2), "%")');

      $rslt = $query->get()->getResult();
      echo json_encode($rslt);
    }
  }

  private function getAviationAuthority() {
    $db = db_connect();
    $tblDtb = $db->table('avaiation_authority');
    $tblDtb->select('avaiation_authority.avaiation_authority_id, avaiation_authority.avaiation_authority');
    $query = $tblDtb->get()->getResult();
    $this->data['table_data'] = $query;
  }
}
