<?php

namespace App\Controllers;
use App\Models\AircraftTypeM;

class AircraftType extends BaseController {
    public function _remap($method) {
        // authentication && authorization
        /*
        if (!$this->authenticate_user()) {
            $this->default_handler();
            return;
        }
        */
        if (method_exists($this, $method)) {
            //$this->load_type();
            //$this->set_session_filters();
            $this->$method();
        } else {
            $method = 'aircraftTypePage';
            $this->$method();
            return;
        }
    }

    private function aircraftTypePage() {
        $data['title'] = 'AWD';
        $data['primary_column_name'] = '';
        $data['form_title'] = 'Add Aircraft Type';
        $data['page_form'] = 'aircraft_type/aircraft_type_form';
        $data['form_id'] = 'aircraft_type_form';
        $data['page_table'] = 'aircraft_type/aircraft_type_table';
        $data['page_filter'] = 'aircraft_type/aircraft_type_filter';
        $data['auto_complete_list'] = [
            'get_aircraft_model_label' => [
               'field' => ['aircraft_model', 'aircraft_model_id'],
               'multi_select' => true
            ]
        ];
        $data['page_create_action'] = '';
        $data['page_update_action'] = '';
        $data['page_filter_action'] = '';
        $db = db_connect();
        $tblDtb = $db->table('aircraft_type');
        $tblDtb->
          select('aircraft_type.aircraft_type_id, aircraft_model.aircraft_model, aircraft_type.aircraft_type');
        $tblDtb->join('aircraft_model', 'aircraft_type.aircraft_model_id = aircraft_model.aircraft_model_id', 'left');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        echo view('default_component/default_page_grid', $data);
    }
    
    private function getAircraftTypeJson() {
        $db = db_connect();
        $tblDtb = $db->table('aircraft_type');
        $tblDtb->
          select('aircraft_type.aircraft_type_id, aircraft_model.aircraft_model, aircraft_type.aircraft_type');
        $tblDtb->join('aircraft_model', 'aircraft_type.aircraft_model_id = aircraft_model.aircraft_model_id', 'left');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        $data['header'] = ['aircraft_type_id' => 'Aircraft Type ID', 'aircraft_type' => 'Aircraft Type', 'manufacturer_name' => 'Manufacturer Name'];
        echo json_encode($data);
    }

    private function addAircraftType() {
        $mFd = model(AircraftTypeM::class);
        $db = db_connect();
        if ($this->request->getMethod() === 'post') {
            $data = [
                'aircraft_type' => $this->request->getPost('aircraft_type'),
                'aircraft_model_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('aircraft_model_id')))[1], // PENDING
                'created_by' => 1,
                'updated_by' => 1
            ];            
            
            $mFd->insert($data);
            $mfId = $mFd->getInsertID();
        }
        $this->aircraftTypePage();
    }
    
    private function updateAircraftTypeRecord() {
        echo "Update AircraftType";
    }
    
    private function deleteAircraftTypeRecord() {
        echo "Update AircraftType";
    }
    
    private function getAircraftTypeRecord() {
        echo "Get AircraftType";
    }
    
    private function getAircraftTypeLabelJson() {
        if ($this->request->getMethod() === 'get') {
            $qry_s = $this->request->getGet('qry_string');
            // Loading db instance
            $db = db_connect();
            // Loading Query builder instance
            $builder = $db->table("aircraft_type");
            $query = $builder->select('aircraft_type_id as value, aircraft_type as label')
                    ->where('aircraft_type LIKE CONCAT("%", substring("'.$qry_s.'", 2), "%")');
            
            $rslt = $query->get()->getResult();            
            echo json_encode($rslt);
        }
    }
}
