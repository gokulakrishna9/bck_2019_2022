<?php

namespace App\Controllers;
use App\Models\AviationAuthorityM;

class AviationAuthority extends BaseController {
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
            $method = 'avaiationAuthorityPage';
            $this->$method();
            return;
        }
    }
    
    private function avaiationAuthorityPage() {
        $data['title'] = 'AWD';
        $data['primary_column_name'] = '';
        $data['form_title'] = 'Add Aviation Authority';
        $data['form_id'] = 'avaiation_authority_form';
        $data['page_form'] = 'avaiation_authority/avaiation_authority_form';
        $data['page_table'] = 'avaiation_authority/avaiation_authority_table';
        $data['page_filter'] = 'avaiation_authority/avaiation_authority_filter';
        $data['page_create_action'] = '';
        $data['page_update_action'] = '';
        $data['page_filter_action'] = '';
        $db = db_connect();
        $tblDtb = $db->table('avaiation_authority');
        $tblDtb->
          select('avaiation_authority.avaiation_authority_id, avaiation_authority.avaiation_authority');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        echo view('default_component/default_page_grid', $data);
    }

    private function getAviationAuthorityJson() {
        $db = db_connect();
        $tblDtb = $db->table('avaiation_authority');
        $tblDtb->
          select('avaiation_authority.avaiation_authority_id, avaiation_authority.avaiation_authority');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        $data['header'] = ['avaiation_authority_id' => 'Avaiation Authority ID', 'avaiation_authority' => 'Avaiation Authority'];
        echo json_encode($data);
    }
    
    private function addAviationAuthority() {
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
        $this->avaiationAuthorityPage();
    }
    
    private function updateAviationAuthorityRecord() {
        echo "Update AviationAuthority";
    }
    
    private function deleteAviationAuthorityRecord() {
        echo "Update AviationAuthority";
    }
    
    private function getAviationAuthorityRecord() {
        echo "Get AviationAuthority";
    }
    
     private function getAvaiationAuthorityLabelJson() {
        if ($this->request->getMethod() === 'get') {
            $qry_s = $this->request->getGet('qry_string');
            // Loading db instance
            
            $db = db_connect();
            // Loading Query builder instance
            $builder = $db->table("avaiation_authority");
            $query = $builder->select('avaiation_authority_id as value, avaiation_authority as label')
                    ->where('avaiation_authority LIKE CONCAT("%", substring("'.$qry_s.'", 2), "%")')
                    ->LIMIT(10);
            
            $rslt = $query->get()->getResult();            
            echo json_encode($rslt);
        }
    }
}
