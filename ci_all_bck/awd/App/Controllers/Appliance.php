<?php

namespace App\Controllers;

class Appliance extends BaseController {
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
            $method = 'appliancePage';
            $this->$method();
            return;
        }
    }

    private function appliancePage() {
        $data['title'] = 'AWD';
        $data['primary_column_name'] = '';
        $data['form_title'] = 'Add Appliance';
        $data['page_form'] = 'appliance/appliance_form';
        $data['page_table'] = 'appliance/appliance_table';
        $data['page_filter'] = 'appliance/appliance_filter';
        $data['page_create_action'] = '';
        $data['page_update_action'] = '';
        $data['page_filter_action'] = '';
        echo view('default_component/default_page_grid', $data);
    }
    
    private function addApplianceRecord() {
        echo "Add Appliance";
    }
    
    private function updateApplianceRecord() {
        echo "Update Appliance";
    }
    
    private function deleteApplianceRecord() {
        echo "Update Appliance";
    }
    
    private function getApplianceRecord() {
        echo "Get Appliance";
    }
}
