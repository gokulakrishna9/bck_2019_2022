<?php

namespace App\Controllers;
use App\Models\ManufacturerM;

class Manufacturer extends BaseController {
    public function _remap($method) {
        // authentication && authorization
        /*
        if (!$this->authenticate_user()) {
            $this->default_handler();
            return;
        }
        */
        if (method_exists($this, $method)) {
            //$this->load_manufacturer();
            //$this->set_session_filters();
            $this->$method();
        } else {
            $method = 'manufacturerPage';
            $this->$method();
            return;
        }
    }

    private function manufacturerPage() {
        $data['title'] = 'AWD';
        $data['primary_column_name'] = '';
        $data['form_title'] = 'Add Engine Manufacturer';
        $data['form_id'] = 'manufacturer_form';
        $data['page_form'] = 'manufacturer/manufacturer_form';
        $data['page_table'] = 'manufacturer/manufacturer_table';
        $data['page_filter'] = 'manufacturer/manufacturer_filter';
        $data['auto_complete_list'] = [
            'get_manufacturer_type_label' => [
               'field' => ['manufacturer_type', 'manufacturer_type_id'],
               'multi_select' => true
            ]
        ];
        $data['validate_list'] = [];
        $data['page_create_action'] = '';
        $data['page_update_action'] = '';
        $data['page_filter_action'] = '';
        $db = db_connect();
        $tblDtb = $db->table('manufacturer');
        $tblDtb->
          select('manufacturer.manufacturer_id, manufacturer.manufacturer_name, GROUP_CONCAT(manufacturer_type.manufacturer_type, ", ") as manufacturer_type');
        $tblDtb->join('manufacturer_type_link', 'manufacturer.manufacturer_id = manufacturer_type_link.manufacturer_id', 'left');
        $tblDtb->join('manufacturer_type', 'manufacturer_type.manufacturer_type_id = manufacturer_type_link.manufacturer_type_id', 'left');
        $tblDtb->groupBy('manufacturer.manufacturer_id');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        echo view('default_component/default_page_grid', $data);
    }

    private function getManufacturerJson() {
        $db = db_connect();
        $tblDtb = $db->table('manufacturer');
        $tblDtb->
          select('manufacturer.manufacturer_id, manufacturer.manufacturer_name, GROUP_CONCAT(manufacturer_type.manufacturer_type, ", ") as manufacturer_type');
        $tblDtb->join('manufacturer_type_link', 'manufacturer.manufacturer_id = manufacturer_type_link.manufacturer_id', 'left');
        $tblDtb->join('manufacturer_type', 'manufacturer_type.manufacturer_type_id = manufacturer_type_link.manufacturer_type_id', 'left');
        $tblDtb->groupBy('manufacturer.manufacturer_id');
        $query = $tblDtb->get()->getResult();
        $data['table_data'] = $query;
        $data['header'] = ['manufacturer_id' => 'Manufacturer ID', 'manufacturer_name' => 'Manufacturer Name', 'manufacturer_type' => 'Manufacturer Type'];
        echo json_encode($data);
    }
    
    private function addManufacturer() {
        $mFd = model(ManufacturerM::class);
        $db = db_connect();
        if ($this->request->getMethod() === 'post') {
            $data = [
                'manufacturer_name' => $this->request->getPost('manufacturer_name'),
                'created_by' => 1,
                'updated_by' => 1
            ];            
            echo "Add Manufacturer";
            var_dump($data);
            $mFd->insert($data);
            $mfId = $mFd->getInsertID();
            
            $manufacturer_type_id = explode(' ', str_replace(', ', ' ', $this->request->getPost('manufacturer_type_id')));
            $data = [];
            foreach($manufacturer_type_id as $mtid) {
                array_push($data, [
                    'manufacturer_type_id' => $mtid,
                    'manufacturer_id' => $mfId
                ]);
            }
            $builder = $db->table("manufacturer_type_link");
            $query = $builder->insertBatch($data);
        }
        echo json_encode([true]);
    }
    
    private function updateManufacturerRecord() {
        echo "Update Manufacturer";
    }
    
    private function deleteManufacturerRecord() {
        echo "Update Manufacturer";
    }
    
    private function getManufacturerRecord() {
        echo "Get Manufacturer";
    }
    
    private function getManufacturerLabelJson() {
        if ($this->request->getMethod() === 'get') {
            $qry_s = $this->request->getGet('qry_string');
            // Loading db instance
            $db = db_connect();
            // Loading Query builder instance
            $builder = $db->table("manufacturer");
            $query = $builder->select('manufacturer_id as value, manufacturer_name as label')
                    ->where('manufacturer_name LIKE CONCAT("%", substring("'.$qry_s.'", 2), "%")');
            
            $rslt = $query->get()->getResult();            
            echo json_encode($rslt);
        }
    }
}
