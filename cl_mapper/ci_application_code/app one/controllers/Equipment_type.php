<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Equipment_type extends CI_CONTROLLER {
  public function _remap($method){
    if(!$this->authenticate_user()){
      $this->authentication_failure();
      return;
    }
    if(!$this->authorize_user($method)){
      $this->authorization_failure();
      return;
    }
    if(method_exists($this, $method)){
      $this->$method();
    } else {
      $this->default_handler($method);
    }
  }
  public function equipment_type_create() {
    $this->data['equipment_type_create'] = $this->equipment_type_model->equipment_type_create();
    $this->data['equipment_type'] = $this->equipment_type_model->equipment_type_get_records();
    $this->load->view('equipment_type/default_grid', $this->data);
  }
  public function equipment_type_update() {
    $this->data['equipment_type_update'] = $this->equipment_type_model->equipment_type_update();
    $this->data['equipment_type'] = $this->equipment_type_model->equipment_type_get_records();
    $this->load->view('equipment_type/default_grid', $this->data);
  }
  public function equipment_type_delete() {
    $this->data['equipment_type_delete'] = $this->equipment_type_model->equipment_type_delete();
    $this->data['equipment_type'] = $this->equipment_type_model->equipment_type_get_records();
    $this->load->view('equipment_type/default_grid', $this->data);
  }
  public function equipment_type_select() {
    $this->data['equipment_type'] = $this->equipment_type_model->equipment_type_get_records();
    $this->load->view('equipment_type/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}