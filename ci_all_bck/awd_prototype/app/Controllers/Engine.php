<?php

namespace App\Controllers;

class Engine extends BaseController {
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
            $method = 'enginePage';
            $this->$method();
            return;
        }
    }

    private function enginePage() {
        $data['title'] = 'AWD';
        $data['primary_column_name'] = '';
        $data['form_title'] = 'Add Engine';
        $data['form_id'] = 'engine_form';
        $data['page_form'] = 'engine/engine_form';
        $data['page_table'] = 'engine/engine_table';
        $data['page_filter'] = 'engine/engine_filter';
        $data['auto_complete_list'] = [
            'get_manufacturer_label' => [
               'field' => ['manufacturer_name', 'manufacturer_id'],
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
        $tblDtb = $db->table('engine');
        $tblDtb->
          select('engine.engine_id, engine.engine_serial_number, '
                  . 'engine_model.engine_model, engine_type.engine_type, manufacturer.manufacturer_name');
        $tblDtb->join('manufacturer', 'engine.manufacturer_id = manufacturer.manufacturer_id', 'left');
        $tblDtb->join('engine_model', 'engine_model.engine_model_id = engine.engine_model_id', 'left');
        $tblDtb->join('engine_type', 'engine_type.engine_type_id = engine.engine_type_id', 'left');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        echo view('default_component/default_page_grid', $data);
    }
    
    private function getEngineRecordJson() {
        $db = db_connect();
        $tblDtb = $db->table('engine');
        $tblDtb->
          select('engine.engine_id, engine.engine_serial_number, '
                  . 'engine_model.engine_model, engine_type.engine_type, manufacturer.manufacturer_name');
        $tblDtb->join('manufacturer', 'engine.manufacturer_id = manufacturer.manufacturer_id', 'left');
        $tblDtb->join('engine_model', 'engine_model.engine_model_id = engine.engine_model_id', 'left');
        $tblDtb->join('engine_type', 'engine_type.engine_type_id = engine.engine_type_id', 'left');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        $data['header'] = ['engine_id' => 'Engine ID', 'engine_serial_number' => 'Engine Serial Number', 'engine_model' => 'Engine Model', 'engine_type' => 'Engine Type'];
        echo json_encode($data);
    }

    private function addEngine() {
        $mFd = model(EngineM::class);
        $db = db_connect();
        if ($this->request->getMethod() === 'post') {
            $data = [
                'engine_serial_number' => $this->request->getPost('engine_serial_number'),
                'engine_type_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('engine_type_id')))[1],
                'engine_model_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('engine_model_id')))[1],
                'manufacturer_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('manufacturer_id')))[1], // PENDING
                'created_by' => 1,
                'updated_by' => 1
            ];            
            
            $mFd->insert($data);
            $mfId = $mFd->getInsertID();
        }
        $this->enginePage();
    }
    
    private function updateEngineRecord() {
        echo "Update Engine";
    }
    
    private function deleteEngineRecord() {
        echo "Update Engine";
    }
    
    private function getEngineRecord() {
        echo "Get Engine";
    }
    
     private function getEngineLabelJson() {
        if ($this->request->getMethod() === 'get') {
            $qry_s = $this->request->getGet('qry_string');
            // Loading db instance
            $db = db_connect();
            // Loading Query builder instance
            $builder = $db->table("engine");
            $query = $builder->select('engine_id as value, engine_serial_number as label')
                    ->where('engine_serial_number LIKE CONCAT("%", substring("'.$qry_s.'", 2), "%")');
            
            $rslt = $query->get()->getResult();            
            echo json_encode($rslt);
        }
    }
}
