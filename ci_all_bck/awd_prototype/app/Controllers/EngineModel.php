<?php

namespace App\Controllers;
use App\Models\EngineModelM;

class EngineModel extends BaseController {
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
            $method = 'engineModelPage';
            $this->$method();
            return;
        }
    }

    private function engineModelPage() {
        $data['title'] = 'AWD';
        $data['primary_column_name'] = '';
        $data['form_title'] = 'Add Engine Model';
        $data['page_form'] = 'engine_model/engine_model_form';
        $data['form_id'] = 'engine_model_form';
        $data['page_table'] = 'engine_model/engine_model_table';
        $data['page_filter'] = 'engine_model/engine_model_filter';
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
        $tblDtb = $db->table('engine_model');
        $tblDtb->
          select('engine_model.engine_model_id, engine_model.engine_model, manufacturer.manufacturer_name');
        $tblDtb->join('manufacturer', 'engine_model.manufacturer_id = manufacturer.manufacturer_id', 'left');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        echo view('default_component/default_page_grid', $data);
    }
    
    private function getEngineModelJson() {
        $db = db_connect();
        $tblDtb = $db->table('engine_model');
        $tblDtb->
          select('engine_model.engine_model_id, engine_model.engine_model, manufacturer.manufacturer_name');
        $tblDtb->join('manufacturer', 'engine_model.manufacturer_id = manufacturer.manufacturer_id', 'left');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        $data['header'] = ['engine_model_id' => 'Engine Model ID', 'engine_model' => 'Engine Model'];
        echo json_encode($data);
    }

    private function addEngineModel() {
        $mFd = model(EngineModelM::class);
        $db = db_connect();
        if ($this->request->getMethod() === 'post') {
            $data = [
                'engine_model' => $this->request->getPost('engine_model'),
                'manufacturer_id' => explode(' ', str_replace(', ', ' ', $this->request->getPost('manufacturer_id')))[1], // PENDING
                'created_by' => 1,
                'updated_by' => 1
            ];            
            
            $mFd->insert($data);
            $mfId = $mFd->getInsertID();
        }
        $this->engineModelPage();
    }
    
    private function updateEngineModelRecord() {
        echo "Update EngineModel";
    }
    
    private function deleteEngineModelRecord() {
        echo "Update EngineModel";
    }
    
    private function getEngineModelRecord() {
        echo "Get EngineModel";
    }
    
    private function getEngineModelLabelJson() {
        if ($this->request->getMethod() === 'get') {
            $qry_s = $this->request->getGet('qry_string');
            // Loading db instance
            $db = db_connect();
            // Loading Query builder instance
            $builder = $db->table("engine_model");
            $query = $builder->select('engine_model_id as value, engine_model as label')
                    ->where('engine_model LIKE CONCAT("%", substring("'.$qry_s.'", 2), "%")');
            
            $rslt = $query->get()->getResult();            
            echo json_encode($rslt);
        }
    }
}
