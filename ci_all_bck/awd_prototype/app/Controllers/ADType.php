<?php
namespace App\Controllers;
use App\Models\ADTypeM;

class ADType extends BaseController {
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
            $method = 'adTypePage';
            $this->$method();
            return;
        }
    }

    private function adTypePage() {
        $data['title'] = 'AWD';
        $data['primary_column_name'] = '';
        $data['form_title'] = 'Add AD Type';
        $data['form_id'] = 'ad_type_form';
        $data['page_form'] = 'awd_type/awd_type_form';
        $data['page_table'] = 'awd_type/awd_type_table';
        $data['page_filter'] = 'awd_type/awd_type_filter';
        $data['page_create_action'] = '';
        $data['page_update_action'] = '';
        $data['page_filter_action'] = '';
        $db = db_connect();
        $tblDtb = $db->table('ad_type');
        $tblDtb->
          select('ad_type.ad_type_id, ad_type.ad_type');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        echo view('default_component/default_page_grid', $data);
    }

    private function getADTypeJson() {
        $db = db_connect();
        $tblDtb = $db->table('ad_type');
        $tblDtb->
          select('ad_type.ad_type_id, ad_type.ad_type');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        $data['header'] = ['ad_type_id' => 'AD Type ID', 'ad_type' => 'AD Type'];
        echo json_encode($data);
    }
    
    private function addADType() {
        $mFd = model(ADTypeM::class);
        if ($this->request->getMethod() === 'post') {
            $data = [
                'ad_type' => $this->request->getPost('ad_type'),
                'created_by' => 1,
                'updated_by' => 1
            ];            
            
            $mFd->insert($data);
            $mfId = $mFd->getInsertID();
        }
        $this->adTypePage();
    }
    
    private function updateADTypeRecord() {
        echo "Update ADType";
    }
    
    private function deleteADTypeRecord() {
        echo "Update ADType";
    }
    
    private function getADTypeRecord() {
        echo "Get ADType";
    }
    
    private function getADTypeLabelJson() {
        if ($this->request->getMethod() === 'get') {
            $qry_s = $this->request->getGet('qry_string');
            // Loading db instance
            $db = db_connect();
            // Loading Query builder instance
            $builder = $db->table("ad_type");
            $query = $builder->select('ad_type_id as value, ad_type as label')
                    ->where('ad_type LIKE CONCAT("%", substring("'.$qry_s.'", 2), "%")');
            
            $rslt = $query->get()->getResult();            
            echo json_encode($rslt);
        }
    }
}
