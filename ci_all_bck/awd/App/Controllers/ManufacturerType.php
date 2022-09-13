<?php
// view component
// update to form component
// filter handler
// The End
namespace App\Controllers;

use App\Models\ManufacturerTypeM;

class ManufacturerType extends BaseController
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
    $pageMethod = 'manufacturerTypePage';
    if($method == 'getManufacturerTypeLblJson') {
      $this->$method();
    } else if (method_exists($this, $method) && $method !== $pageMethod && $method !== 'manufacturerTypePage') {
      //$this->load_manufacturer_type();
      //$this->set_session_filters();
      $this->data = [];
      // default data
      $this->$defaultData();
      // method data            
      $this->$method();
      $this->getManufacturerType();
      // view method
      $this->$pageMethod();
    } else {      // else if response type is json
      $this->data = [];
      // default data
      $this->$defaultData();
      // view method
      $this->getManufacturerType();
      $this->$pageMethod();
      return;
    }
  }

  private function defaultData()
  {
    $this->data['title'] = 'AWD';
    $this->data['primary_column_name'] = 'manufacturer_type_id';
    $this->data['form_title'] = 'Add Engine Manufacturer Type';
    $this->data['show'] = '';
    $this->data['page_form'] = 'manufacturer_type/manufacturer_type_form';
    $this->data['page_table'] = 'manufacturer_type/manufacturer_type_table';
    $this->data['page_filter'] = 'manufacturer_type/manufacturer_type_filter';
    $this->data['form_action'] = 'add_manufacturer_type';
    $this->data['view_action'] = 'view_manufacturer_type';
    $this->data['update_action'] = 'update_manufacturer_type';
    $this->data['delete_action'] = 'delete_manufacturer_type';
    $this->data['page_filter_action'] = 'get_manufacturer_type';
    $this->data['manufacturer_type_record'] = (object)[];
    $this->data['validation_errors'] = [];
  }

  private function manufacturerTypePage()
  {
    echo view('default_component/default_page_grid', $this->data);
  }

  private function addManufacturerType()
  {
    $validation = [
      'manufacturer_type' => 'required'
    ];
    if (!$this->validate($validation)) {
      // set validation message
    } else {
      $db = db_connect('default');
      $builder = $db->table('manufacturer_type');
      $record = [
        'manufacturer_type' => $this->request->getPost('manufacturer_type'),
        'created_by' => 1,
        'updated_by' => 1
      ];
      $builder->insert($record);
      $record['insert_id'] = $db->insertID();
      $this->data['insert_record'] = $record;
    }
  }

  private function viewManufacturerType()
  {
    echo 'View Manufacturer Type';
    echo $this->request->getGet('manufacturer_type_id');
  }

  private function updateManufacturerType()
  {
    $validation = [
      'manufacturer_type' => 'required'
    ];
    if (!$this->validate($validation)) {
      // set validation message
      $this->getManufacturerTypeRecord();
      $this->data['form_action'] = 'update_manufacturer';
      $this->data['show'] = 'show';
    } else {
      $pk = $this->request->getPost('manufacturer_type_id');
      if (isset($pk)) {
        $db = db_connect();
        $builder = $db->table("manufacturer_type");
        $builder->set(['manufacturer_type' => $this->request->getPost('manufacturer_type')]);
        $builder->where('manufacturer_type_id', $pk);
        $builder->update();
      }
      $this->data['form_action'] = 'add_manufacturer';
    }
  }

  private function deleteManufacturerType()
  {
    echo "Delete Manufacturer";
  }

  private function getManufacturerTypeLblJson()
  {
    $qry_s = $this->request->getGet('qry_string');
    if (isset($qry_s)) {
      // Loading db instance
      $db = db_connect();
      // Loading Query builder instance
      $builder = $db->table("manufacturer_type");
      $query = $builder->select('manufacturer_type_id as value, manufacturer_type as label')
        ->where('manufacturer_type LIKE CONCAT("%", substring("' . $qry_s . '", 2), "%")');
      $rslt = $query->get()->getResult();
      echo json_encode($rslt);
    }
  }

  private function getManufacturerTypeRecord()
  {
    $pk = $this->request->getGet('manufacturer_type_id');
    if (!isset($pk)) {
      // set validation message
    } else {
      $db = db_connect();
      $builder = $db->table("manufacturer_type");
      $pk = $this->request->getGet('manufacturer_type_id');
      $query = $builder->select('manufacturer_type_id, manufacturer_type')
        ->where('manufacturer_type_id', $pk);
      $rslt = $query->get()->getResult();
      $this->data['manufacturer_type_record'] = $rslt[0];
    }
  }

  private function getManufacturerType()
  {
    $mdT = model(ManufacturerTypeM::class);
    $this->data['table_data'] = $mdT->findAll();
  }
}
