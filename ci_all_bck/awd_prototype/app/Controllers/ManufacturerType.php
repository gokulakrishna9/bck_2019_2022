<?php

namespace App\Controllers;

use App\Models\ManufacturerTypeM;

class ManufacturerType extends BaseController {

    public function _remap($method) {
        // authentication && authorization
        /*
          if (!$this->authenticate_user()) {
          $this->default_handler();
          return;
          }
         */
        if (method_exists($this, $method)) {
            //$this->load_manufacturer_type();
            //$this->set_session_filters();
            $this->$method();
        } else {
            $method = 'manufacturerTypePage';
            $this->$method();
            return;
        }
    }

    private function manufacturerTypePage() {
        $mdT = model(ManufacturerTypeM::class);
        $data['title'] = 'AWD';
        $data['primary_column_name'] = '';
        $data['form_title'] = 'Add Engine ManufacturerTypeType';
        $data['page_form'] = 'manufacturer_type/manufacturer_type_form';
        $data['page_table'] = 'manufacturer_type/manufacturer_type_table';
        $data['table_data'] = $mdT->findAll();
        $data['page_filter'] = 'manufacturer_type/manufacturer_type_filter';
        $data['page_create_action'] = '';
        $data['page_update_action'] = '';
        $data['page_filter_action'] = '';
        echo view('default_component/default_page_grid', $data);
    }

    private function getManufacturerTypeJson() {
        // Loading db instance
        $db = db_connect();
        // Loading Query builder instance
        $builder = $db->table("manufacturer_type");
        $query = $builder->select('manufacturer_type_id, manufacturer_type');
        $p_key = $this->request->getGet('primary_key');
        if(!is_null($p_key)) {
            $query = $query->where('manufacturer_type_id', $p_key);            
        }                
        $rslt = $query->get()->getResult();    
        $data['table_data'] = $rslt;
        $data['header'] = ['manufacturer_type_id' => 'Manufacturer Type ID', 'manufacturer_type' => 'Manufacturer Type'];
        $data['primary_key'] = 'manufacturer_type_id';
        echo json_encode($data);                
    }

    private function addManufacturerType() {
        $mdT = model(ManufacturerTypeTypeM::class);
        if ($this->request->getMethod() === 'post') {
            $data = [
                'manufacturer_type' => $this->request->getPost('manufacturer_type'),
                'created_by' => 1,
                'updated_by' => 1
            ];
            $mdT->insert($data);
        }
        echo json_encode([true]);
    }

    private function updateManufacturerTypeRecord() {
        echo "Update ManufacturerTypeType";
    }

    private function deleteManufacturerTypeRecord() {
        echo "Update ManufacturerTypeType";
    }

    private function getManufacturerTypeLblJson() {
        if ($this->request->getMethod() === 'get') {
            $qry_s = $this->request->getGet('qry_string');
            // Loading db instance
            $db = db_connect();
            // Loading Query builder instance
            $builder = $db->table("manufacturer_type");
            $query = $builder->select('manufacturer_type_id as value, manufacturer_type as label')
                    ->where('manufacturer_type LIKE CONCAT("%", substring("'.$qry_s.'", 2), "%")');
            
            $rslt = $query->get()->getResult();
            
            echo json_encode($rslt);
        }
    }

    private function getManufacturerTypeRecord() {
        echo "Get ManufacturerTypeType";
    }

}
