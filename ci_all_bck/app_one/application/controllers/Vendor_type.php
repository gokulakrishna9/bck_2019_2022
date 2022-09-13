<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Vendor_type extends CI_CONTROLLER {
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
  public function vendor_type_create() {
    $this->data['vendor_type_create'] = $this->vendor_type_model->vendor_type_create();
    $this->data['vendor_type'] = $this->vendor_type_model->vendor_type_get_records();
    $this->load->view('vendor_type/default_grid', $this->data);
  }
  public function vendor_type_update() {
    $this->data['vendor_type_update'] = $this->vendor_type_model->vendor_type_update();
    $this->data['vendor_type'] = $this->vendor_type_model->vendor_type_get_records();
    $this->load->view('vendor_type/default_grid', $this->data);
  }
  public function vendor_type_delete() {
    $this->data['vendor_type_delete'] = $this->vendor_type_model->vendor_type_delete();
    $this->data['vendor_type'] = $this->vendor_type_model->vendor_type_get_records();
    $this->load->view('vendor_type/default_grid', $this->data);
  }
  public function vendor_type_select() {
    $this->data['vendor_type'] = $this->vendor_type_model->vendor_type_get_records();
    $this->load->view('vendor_type/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}