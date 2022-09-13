<?php

namespace App\Controllers;
use App\Models\AircraftTypeM;
class Aircraft extends BaseController {
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
            $method = 'aircraftPage';
            $this->$method();
            return;
        }
    }

    private function aircraftPage() {
        $data['title'] = 'AWD';
        $data['primary_column_name'] = '';
        $data['form_title'] = 'Add Aircraft';
        $data['form_id'] = 'aircraft_form';
        $data['page_form'] = 'aircraft/aircraft_form';
        $data['page_table'] = 'aircraft/aircraft_table';
        $data['page_filter'] = 'aircraft/aircraft_filter';
        $data['auto_complete_list'] = [
            'get_aircraft_model_label' => [
               'field' => ['aircraft_model', 'aircraft_model_id'],
               'multi_select' => true
            ],
            'get_aircraft_type_label' => [
               'field' => ['aircraft_type', 'aircraft_type_id'],
               'multi_select' => true
            ],
            'get_manufacturer_label' => [
               'field' => ['manufacturer_name', 'manufacturer_id'],
               'multi_select' => true
            ]
        ];
        $data['page_create_action'] = '';
        $data['page_update_action'] = '';
        $data['page_filter_action'] = '';
        $db = db_connect();
        $tblDtb = $db->table('aircraft');
        $tblDtb->
          select('aircraft.aircraft_serial_number, aircraft.aircraft_id, aircraft_model.aircraft_model, aircraft_type.aircraft_type, manufacturer.manufacturer_name');
        $tblDtb->join('aircraft_type', 'aircraft_type.aircraft_type_id = aircraft.aircraft_type_id', 'left');
        $tblDtb->join('aircraft_model', 'aircraft.aircraft_model_id = aircraft_model.aircraft_model_id', 'left');
        $tblDtb->join('manufacturer', 'aircraft.manufacturer_id = manufacturer.manufacturer_id', 'left');        
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        echo view('default_component/default_page_grid', $data);
    }

    private function getAircraftJson() {   
        $data['page_create_action'] = '';
        $data['page_update_action'] = '';
        $data['page_filter_action'] = '';
        $db = db_connect();
        $tblDtb = $db->table('aircraft');
        $tblDtb->
          select('aircraft.aircraft_serial_number, aircraft.aircraft_id, aircraft_model.aircraft_model, aircraft_type.aircraft_type, manufacturer.manufacturer_name');
        $tblDtb->join('aircraft_type', 'aircraft_type.aircraft_type_id = aircraft.aircraft_type_id', 'left');
        $tblDtb->join('aircraft_model', 'aircraft.aircraft_model_id = aircraft_model.aircraft_model_id', 'left');
        $tblDtb->join('manufacturer', 'aircraft.manufacturer_id = manufacturer.manufacturer_id', 'left');        
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        $data['header'] = ['aircraft_serial_number' => 'Aircraft Serial Number', 'aircraft_id' => 'Aircraft ID', 'aircraft_model' => 'Aircraft Model', 'Aircraft Type' => 'aircraft_type', 'manufacturer_name' => 'Manufacturer Name'];
        echo json_encode($data);
    }
    
    private function addAircraft() {
        $mFd = model(AircraftM::class);
        $db = db_connect();
        if ($this->request->getMethod() === 'post') {
            $data = [
                'aircraft_serial_number' => $this->request->getPost('aircraft_serial_number'),
                'aircraft_model_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('aircraft_model_id')))[1], // PENDING
                'aircraft_type_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('aircraft_type_id')))[1], // PENDING
                'manufacturer_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('manufacturer_id')))[1], // PENDING
                'created_by' => 1,
                'updated_by' => 1
            ];            
            
            $mFd->insert($data);
            $mfId = $mFd->getInsertID();
        }
        $this->aircraftPage();
    }
    
    private function updateAircraftRecord() {
        echo "Update Aircraft";
    }
    
    private function deleteAircraftRecord() {
        echo "Update Aircraft";
    }
    
    private function getAircraftRecord() {
        echo "Get Aircraft";
    }
}
