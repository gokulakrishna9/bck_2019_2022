<?php

namespace App\Controllers;

class ADFile extends BaseController {
    public function _remap($method) {
        if ($method === 'some_method') {
            return $this->$method();
        } else {
            return $this->default_method();
        }
    }
    
    private function addADFileRecord() {
        echo "Add ADFile";
    }
    
    private function updateADFileRecord() {
        echo "Update ADFile";
    }
    
    private function deleteADFileRecord() {
        echo "Update ADFile";
    }
    
    private function getADFileRecord() {
        echo "Get ADFile";
    }
}
