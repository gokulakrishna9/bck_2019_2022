<?php

namespace App\Controllers;
use App\Models\EngineTypeM;

class EngineType extends BaseController {
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
            $method = 'engineTypePage';
            $this->$method();
            return;
        }
    }

    private function engineTypePage() {
        $data['title'] = 'AWD';
        $data['primary_column_name'] = '';
        $data['form_title'] = 'Add Engine Type';
        $data['form_id'] = 'engine_type_form';
        $data['page_form'] = 'engine_type/engine_type_form';
        $data['page_table'] = 'engine_type/engine_type_table';
        $data['page_filter'] = 'engine_type/engine_type_filter';
        $data['auto_complete_list'] = [
            'get_engine_model_label' => [
               'field' => ['engine_model', 'engine_model_id'],
               'multi_select' => true
            ]
        ];
        $data['page_create_action'] = '';
        $data['page_update_action'] = '';
        $data['page_filter_action'] = '';
        $db = db_connect();
        $tblDtb = $db->table('engine_type');
        $tblDtb->
          select('engine_type.engine_type_id, engine_type.engine_type, engine_model.engine_model');
        $tblDtb->join('engine_model', 'engine_model.engine_model_id = engine_type.engine_model_id', 'left');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        echo view('default_component/default_page_grid', $data);
    }
    
    private function getEngineTypeJson() {
        $db = db_connect();
        $tblDtb = $db->table('engine_type');
        $tblDtb->
          select('engine_type.engine_type_id, engine_type.engine_type, engine_model.engine_model');
        $tblDtb->join('engine_model', 'engine_model.engine_model_id = engine_type.engine_model_id', 'left');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        $data['header'] = ['engine_type_id' => 'Engine Type ID', 'engine_type' => 'Engine Type', 'engine_model' => 'Engine Model'];
        echo json_encode($data);
    }

    private function addEngineType() {
        $mFd = model(EngineTypeM::class);
        $db = db_connect();
        if ($this->request->getMethod() === 'post') {
            $data = [
                'engine_type' => $this->request->getPost('engine_type'),
                'engine_model_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('engine_model_id')))[1], // PENDING
                'created_by' => 1,
                'updated_by' => 1
            ];            
            
            $mFd->insert($data);
            $mfId = $mFd->getInsertID();
        }
        $this->engineTypePage();
    }
    
    private function updateEngineTypeRecord() {
        echo "Update EngineType";
    }
    
    private function deleteEngineTypeRecord() {
        echo "Update EngineType";
    }
    
    private function getEngineTypeRecord() {
        echo "Get EngineType";
    }
    
    private function getEngineTypeLabelJson() {
        if ($this->request->getMethod() === 'get') {
            $qry_s = $this->request->getGet('qry_string');
            // Loading db instance
            $db = db_connect();
            // Loading Query builder instance
            $builder = $db->table("engine_type");
            $query = $builder->select('engine_type_id as value, engine_type as label')
                    ->where('engine_type LIKE CONCAT("%", substring("'.$qry_s.'", 2), "%")');
            
            $rslt = $query->get()->getResult();            
            echo json_encode($rslt);
        }
    }
}
