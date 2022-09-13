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
    if (method_exists($this, $method)) {
      //$this->load_model();
      //$this->set_session_filters();
      $this->$method();
    } else {
      $method = 'awdPage';

      $this->$method();
      return;
    }
  }

  private function addAjaxADRecord()  {
    if ($this->request->getMethod() === 'post') {
      echo $this->request->getPost('test_data');
    } else {
      echo $this->request->getMethod();
      //echo 'Ajax AD';
    }
  }

  private function awdPage()
  {
    $data['title'] = 'AWD';
    $data['primary_column_name'] = '';
    $data['form_title'] = 'Add Air Worthiness Directive';
    $data['page_form'] = 'awd/awd_form';
    $data['form_id'] = 'awd_form';
    $data['page_table'] = 'awd/awd_table';
    $data['page_filter'] = 'awd/awd_filter';
    $data['datepicker'] = ['issue_date', 'effective_date'];
    $data['auto_complete_list'] = [
      'get_adtype_label' => [
        'field' => ['ad_type', 'ad_type_id'],
        'multi_select' => true
      ],
      'get_avaiation_authority_label' => [
        'field' => ['avaiation_authority', 'avaiation_authority_id'],
        'multi_select' => true
      ],
      'get_awd_label' => [ // PENDING
        'field' => ['supersedes_ad_number', 'supersedes_ad_id'],
        'multi_select' => true
      ],
      'get_awd_label' => [ // PENDING
        'field' => ['superseded_by_ad_number', 'superseded_by_ad_id'],
        'multi_select' => true
      ],
      'get_aircraft_label' => [
        'field' => ['aircraft_serial_number', 'aircraft_id'], // link table
        'multi_select' => true
      ],
      'get_aircraft_model_label' => [
        'field' => ['aircraft_model', 'aircraft_model_id'],
        'multi_select' => true
      ],
      'get_aircraft_type_label' => [
        'field' => ['aircraft_type', 'aircraft_type_id'],
        'multi_select' => true
      ],
      'get_engine_label' => [
        'field' => ['engine_serial_number', 'engine_id'],
        'multi_select' => true
      ],
      'get_engine_model_label' => [
        'field' => ['engine_model', 'engine_model_id'],
        'multi_select' => true
      ],
      'get_engine_type_label' => [
        'field' => ['engine_type', 'engine_type_id'],
        'multi_select' => true
      ],
    ];
    $data['page_create_action'] = '';
    $data['page_update_action'] = '';
    $data['page_filter_action'] = '';
    $db = db_connect();
    $tblDtb = $db->table('ad_record as ad_main');
    $tblDtb->select('ad_main.ad_record_id, ad_main.ad_number, ad_main.subject, avaiation_authority.avaiation_authority,'
      . 'ad_type.ad_type, ad_main.issue_date, ad_main.effective_date,'
      . 'ad_supersed.ad_number as supersedes, ad_superseded_by.ad_number as superseded_by,'
      . 'aircraft.aircraft_serial_number, aircraft_model.aircraft_model, aircraft_type.aircraft_type,'
      . 'engine.engine_serial_number, engine_type.engine_type, engine_model.engine_model');
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

    $query = $tblDtb->get()->getResult();
    $data['table_data'] = $query;
    echo view('default_component/default_page_grid', $data);
  }


  private function getAWDRecordJson() {
    $db = db_connect();
    $tblDtb = $db->table('ad_record as ad_main');
    // conditional where conditions
    $tblDtb->select('ad_main.ad_record_id, ad_main.ad_number, ad_main.subject, avaiation_authority.avaiation_authority,'
      . 'ad_type.ad_type, ad_main.issue_date, ad_main.effective_date,'
      . 'ad_supersed.ad_number as supersedes, ad_superseded_by.ad_number as superseded_by,'
      . 'aircraft.aircraft_serial_number, aircraft_model.aircraft_model, aircraft_type.aircraft_type,'
      . 'engine.engine_serial_number, engine_type.engine_type, engine_model.engine_model');
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

    $query = $tblDtb->get()->getResult();
    $data['header'] = ['ad_number' => 'AD Number', 'ad_record_id' => 'AD Record ID', 'ad_type' => 'AD Type', 'aircraft_model' => 'Aircraft Model', 'aircraft_serial_number' => 'Aircraft Serial Number', 'aircraft_type' => 'Aircraft Type', 'avaiation_authority' => 'Aviation Authority', 'effective_date' => 'Effective Date', 'engine_model' => 'Engine Model', 'engine_serial_number' => 'Engine Serial Number', 'engine_type' => 'Engine Type', 'issue_date' => 'Issue Date', 
    'subject' => 'Subject', 'superseded_by' => 'Superseded By', 'supersedes' => 'Supersedes'];
    $data['table_data'] = $query;
    echo json_encode($data);
  }

  private function addAWD()
  {
    $ad = model(ADModel::class);
    if ($this->request->getMethod() === 'post') {
      $data = [
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
      $ad->insert($data);
      echo "Add Manufacturer";
      var_dump($data);
      $mFd->insert($data);
      $mfId = $mFd->getInsertID();

      $manufacturer_type_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('manufacturer_type_id')));
      $data = [];
      foreach ($manufacturer_type_id as $mtid) {
        array_push($data, [
          'manufacturer_type_id' => $mtid,
          'manufacturer_id' => $mfId
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($data);
      $ad_type_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('ad_type_id')));
      $data = [];
      foreach ($ad_type_id as $mtid) {
        array_push($data, [
          'ad_type_id' => $mtid,
          'ad_record_id' => $mfId
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($data);
      $avaiation_authority_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('avaiation_authority_id')));
      $data = [];
      foreach ($avaiation_authority_id as $mtid) {
        array_push($data, [
          'avaiation_authority_id' => $mtid,
          'ad_record_id' => $mfId
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($data);
      $aircraft_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('aircraft_id')));
      $data = [];
      foreach ($aircraft_id as $mtid) {
        array_push($data, [
          'aircraft_id' => $mtid,
          'ad_record_id' => $mfId
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($data);
      $aircraft_model_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('aircraft_model_id')));
      $data = [];
      foreach ($aircraft_model_id as $mtid) {
        array_push($data, [
          'aircraft_model_id' => $mtid,
          'ad_record_id' => $mfId
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($data);
      $aircraft_type_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('aircraft_type_id')));
      $data = [];
      foreach ($aircraft_type_id as $mtid) {
        array_push($data, [
          'aircraft_type_id' => $mtid,
          'ad_record_id' => $mfId
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($data);
      $engine_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('engine_id')));
      $data = [];
      foreach ($engine_id as $mtid) {
        array_push($data, [
          'engine_id' => $mtid,
          'ad_record_id' => $mfId
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($data);
      $engine_model_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('engine_model_id')));
      $data = [];
      foreach ($engine_model_id as $mtid) {
        array_push($data, [
          'engine_model_id' => $mtid,
          'ad_record_id' => $mfId
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($data);
      $engine_type_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('engine_type_id')));
      $data = [];
      foreach ($engine_type_id as $mtid) {
        array_push($data, [
          'engine_type_id' => $mtid,
          'ad_record_id' => $mfId
        ]);
      }
      $builder = $db->table("manufacturer_type_link");
      $query = $builder->insertBatch($data);
    }
    $this->awdPage();
  }

  private function updateADRecord()
  {
    echo "Update ADRecord";
  }

  private function deleteADRecord()
  {
    echo "Update ADRecord";
  }

  private function getADRecord()
  {
    echo "Get ADRecord";
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
}
