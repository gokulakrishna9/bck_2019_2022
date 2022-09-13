<?php

namespace App\Controllers;
use App\Models\AircraftModelM;
class AircraftModel extends BaseController {
    public function _remap($method) {
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
            $method = 'aircraftModelPage';
            $this->$method();
            return;
        }
    }

    private function aircraftModelPage() {
        $data['title'] = 'AWD';
        $data['primary_column_name'] = '';
        $data['form_title'] = 'Add Aircraft Model';
        $data['form_id'] = 'aircraft_model_form';
        $data['page_form'] = 'aircraft_model/aircraft_model_form';
        $data['page_table'] = 'aircraft_model/aircraft_model_table';
        $data['page_filter'] = 'aircraft_model/aircraft_model_filter';
        $data['auto_complete_list'] = [
            'get_manufacturer_label' => [
               'field' => ['manufacturer_name', 'manufacturer_id'],
               'multi_select' => true
            ]
        ];
        $data['page_create_action'] = '';
        $data['page_update_action'] = '';
        $data['page_filter_action'] = '';
        $db = db_connect();
        $tblDtb = $db->table('aircraft_model');
        $tblDtb->
          select('aircraft_model.aircraft_model_id, aircraft_model.aircraft_model, manufacturer.manufacturer_name');
        $tblDtb->join('manufacturer', 'manufacturer.manufacturer_id = aircraft_model.manufacturer_id', 'left');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        echo view('default_component/default_page_grid', $data);
    }

    private function aircraftModelJson() {
        $data['page_create_action'] = '';
        $data['page_update_action'] = '';
        $data['page_filter_action'] = '';
        $db = db_connect();
        $tblDtb = $db->table('aircraft_model');
        $tblDtb->
          select('aircraft_model.aircraft_model_id, aircraft_model.aircraft_model, manufacturer.manufacturer_name');
        $tblDtb->join('manufacturer', 'manufacturer.manufacturer_id = aircraft_model.manufacturer_id', 'left');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        $data['header'] = ['aircraft_model_id' => 'Aircraft Model ID', 'aircraft_model' => 'Aircraft Model', 'aircraft_type' => 'Aircraft Type', 'manufacturer_name' => 'Manufacturer Name'];
        echo json_encode($data);
    }
    
    private function addAircraftModel() {
        $mFd = model(AircraftModelM::class);
        $db = db_connect();
        if ($this->request->getMethod() === 'post') {
            $data = [
                'aircraft_model' => $this->request->getPost('aircraft_model'),
                'manufacturer_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('manufacturer_id')))[1], // PENDING
                'created_by' => 1,
                'updated_by' => 1
            ];            
            echo "Add Manufacturer";
            $mFd->insert($data);
            $mfId = $mFd->getInsertID();
        }
        $this->aircraftModelPage();
    }
    
    private function updateAircraftModelRecord() {
        echo "Update AircraftModel";
    }
    
    private function deleteAircraftModelRecord() {
        echo "Update AircraftModel";
    }
    
    private function getAircraftModelRecord() {
        echo "Get AircraftModel";
    }
    
    private function getAircraftModelLabelJson() {
        if ($this->request->getMethod() === 'get') {
            $qry_s = $this->request->getGet('qry_string');
            // Loading db instance
            $db = db_connect();
            // Loading Query builder instance
            $builder = $db->table("aircraft_model");
            $query = $builder->select('aircraft_model_id as value, aircraft_model as label')
                    ->where('aircraft_model LIKE CONCAT("%", substring("'.$qry_s.'", 2), "%")');
            
            $rslt = $query->get()->getResult();            
            echo json_encode($rslt);
        }
    }
}
