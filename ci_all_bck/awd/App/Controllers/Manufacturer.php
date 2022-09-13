<?php

namespace App\Controllers;

use App\Models\ManufacturerM;

class Manufacturer extends BaseController
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
    $pageMethod = 'manufacturerPage';
    if ($method == 'getManufacturerLblJson') {
      $this->$method();
    } else if (method_exists($this, $method) && $method !== $pageMethod && $method !== 'manufacturerTypePage') {
      //$this->load_manufacturer_type();
      //$this->set_session_filters();
      $this->data = [];
      // default data
      $this->$defaultData();
      // method data            
      $this->$method();
      $this->getManufacturer();
      // view method
      $this->$pageMethod();
    } else {      // else if response type is json
      $this->data = [];
      // default data
      $this->$defaultData();
      // view method
      $this->getManufacturer();
      $this->$pageMethod();
      return;
    }
  }

  private function defaultData()
  {
    $this->data['title'] = 'AWD';
    $this->data['primary_column_name'] = 'manufacturer_id';
    $this->data['show'] = ' ';
    $this->data['form_title'] = 'Add Engine Manufacturer';
    $this->data['form_id'] = 'manufacturer_form';
    $this->data['page_form'] = 'manufacturer/manufacturer_form';
    $this->data['page_table'] = 'manufacturer/manufacturer_table';
    $this->data['page_filter'] = 'manufacturer/manufacturer_filter';
    $this->data['page_js'] = 'manufacturer/manufacturer_js';
    $this->data['validate_list'] = [];
    $this->data['form_action'] = 'add_manufacturer';
    $this->data['update_action'] = 'update_manufacturer';
    $this->data['view_action'] = 'view_manufacturer';
    $this->data['delete_action'] = 'delete_manufacturer';
    $this->data['page_filter_action'] = 'get_manufacturer';
  }

  private function manufacturerPage()
  {
    echo view('default_component/default_page_grid', $this->data);
  }

  private function addManufacturer()
  {
    $mFd = model(ManufacturerM::class);
    $db = db_connect();
    if ($this->request->getMethod() === 'post') {
      $this->data = [
        'manufacturer_name' => $this->request->getPost('manufacturer_name'),
        'created_by' => 1,
        'updated_by' => 1
      ];
      echo "Add Manufacturer";
      var_dump($this->data);
      $mFd->insert($this->data);
      $mfId = $mFd->getInsertID();

      $manufacturer_type_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('manufacturer_type_id')));
      $this->data = [];
      foreach ($manufacturer_type_id as $mtid) {
        array_push($this->data, [
          'manufacturer_type_id' => $mtid,
          'manufacturer_id' => $mfId
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($this->data);
    }
  }

  private function updateManufacturer()
  {
    echo "Update Manufacturer";
    $validation = [
      'manufacturer_type' => 'required'
    ];
    if (!$this->validate($validation)) {
      // set validation message
      $this->getManufacturerRecord();
      $this->data['form_action'] = 'update_manufacturer';
      $this->data['show'] = 'show';
    } else {
      $pk = $this->request->getPost('manufacturer_id');
      if (isset($pk)) {
        $db = db_connect();
        $builder = $db->table("manufacturer");
        $builder->set(['manufacturer_name' => $this->request->getPost('manufacturer_name')]);
        $builder->set(['manufacturer_type_id' => $this->request->getPost('manufacturer_type_id')]);
        $builder->where('manufacturer_id', $pk);
        $this->updateManufacturerTypeList();
        $builder->update();
      }
      $this->data['form_action'] = 'add_manufacturer';
    }
  }

  private function custArrayDiff($array1, $array2) {
    $diff = [];
    foreach($array1 as $el1) {
      $new = false;
      foreach($array2 as $el2) {
        if($el1 !== $el2) {
          $new = true;          
        } else {
          $new = false;
        }
      }
      if($new) {
        array_push($diff, $el1);
      }
    }
    return $diff;
  }

  private function updateManufacturerTypeList()
  {
    // previous record
    $prv = $this->request->getPost('prev_manufacturer_type_list');
    $prv = isset($prv) ? explode(',', $prv) : [];
    // current record
    $cr = $this->request->getPost('manufacturer_type_id');
    $cr = isset($cr) ? explode(',', $cr) : [];
    $pk = $this->request->getPost('manufacturer_id');
    $del = [];
    $new = [];
    if (isset($pk)) {
      $del = $this->custArrayDiff($prv, $cr);
      $new = $this->custArrayDiff($cr, $prv);
    }
    var_dump($prv);
    var_dump($cr);
    var_dump($del);
    var_dump($new);
    $db = db_connect();
    $builder = $db->table("manufacturer_type_link");
    // delete missing    
    foreach($del as $id) {
      $builder->where('manufacturer_id', $pk);
      $builder->where('manufacturer_type_id', $id);
      $builder->delete();
    }
    
    // add new
    $data = [];
    foreach ($new as $id) {
      array_push($data, [
        'manufacturer_id' => $pk,
        'manufacturer_type_id' => $id
      ]);
    }
    if(!empty($data)) {
      $builder->insertBatch($data);
    }
    echo $db->getLastQuery();
  }

  private function deleteManufacturer()
  {
    echo "Update Manufacturer";
  }

  private function getManufacturerRecord()
  {
    $pk = $this->request->getGet('manufacturer_id');
    if (!isset($pk)) {
      // set validation message
    } else {
      $db = db_connect();
      $builder = $db->table("manufacturer");
      $pk = $this->request->getGet('manufacturer_id');
      $query = $builder->select('manufacturer.manufacturer_id, manufacturer.manufacturer_name, GROUP_CONCAT(manufacturer_type.manufacturer_type, ", ") as manufacturer_type, GROUP_CONCAT(manufacturer_type.manufacturer_type_id, ", ") as manufacturer_type_id')
        ->join('manufacturer_type_link', 'manufacturer.manufacturer_id = manufacturer_type_link.manufacturer_id', 'left')
        ->join('manufacturer_type', 'manufacturer_type.manufacturer_type_id = manufacturer_type_link.manufacturer_type_id', 'left')
        ->where('manufacturer.manufacturer_id', $pk);
      $rslt = $query->get()->getResult();
      $this->data['manufacturer'] = $rslt[0];
    }
  }

  private function getManufacturerLblJson()
  {
    if ($this->request->getMethod() === 'get') {
      $qry_s = $this->request->getGet('qry_string');
      // Loading db instance
      $db = db_connect();
      // Loading Query builder instance
      $builder = $db->table("manufacturer");
      $query = $builder->select('manufacturer_id as value, manufacturer_name as label')        
        ->where('manufacturer_name LIKE CONCAT("%", substring("' . $qry_s . '", 2), "%")');
      $rslt = $query->get()->getResult();
      echo json_encode($rslt);
    }
  }

  function getManufacturer()
  {
    echo 'Get Manufacturer Page';
    $db = db_connect();
    $tblDtb = $db->table('manufacturer');
    $tblDtb->select('manufacturer.manufacturer_id, manufacturer.manufacturer_name, GROUP_CONCAT(manufacturer_type.manufacturer_type, ", ") as manufacturer_type');
    $tblDtb->join('manufacturer_type_link', 'manufacturer.manufacturer_id = manufacturer_type_link.manufacturer_id', 'left');
    $tblDtb->join('manufacturer_type', 'manufacturer_type.manufacturer_type_id = manufacturer_type_link.manufacturer_type_id', 'left');
    $tblDtb->groupBy('manufacturer.manufacturer_id');
    $query = $tblDtb->get()->getResult();
    $this->data['table_data'] = $query;
  }
}
