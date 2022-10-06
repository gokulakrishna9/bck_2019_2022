<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Vendor_contracts extends CI_CONTROLLER {
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
  public function vendor_contracts_create() {
    $this->load->model('facility_model');
    $this->load->model('vendor_model');
    $this->data['facility'] = $this->facility_model->facility_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['vendor_contracts_create'] = $this->vendor_contracts_model->vendor_contracts_create();
    $this->data['vendor_contracts'] = $this->vendor_contracts_model->vendor_contracts_get_records();
    $this->load->view('vendor_contracts/default_grid', $this->data);
  }
  public function vendor_contracts_update() {
    $this->load->model('facility_model');
    $this->load->model('vendor_model');
    $this->data['facility'] = $this->facility_model->facility_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['vendor_contracts_update'] = $this->vendor_contracts_model->vendor_contracts_update();
    $this->data['vendor_contracts'] = $this->vendor_contracts_model->vendor_contracts_get_records();
    $this->load->view('vendor_contracts/default_grid', $this->data);
  }
  public function vendor_contracts_delete() {
    $this->load->model('facility_model');
    $this->load->model('vendor_model');
    $this->data['facility'] = $this->facility_model->facility_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['vendor_contracts_delete'] = $this->vendor_contracts_model->vendor_contracts_delete();
    $this->data['vendor_contracts'] = $this->vendor_contracts_model->vendor_contracts_get_records();
    $this->load->view('vendor_contracts/default_grid', $this->data);
  }
  public function vendor_contracts_select() {
    $this->load->model('facility_model');
    $this->load->model('vendor_model');
    $this->data['facility'] = $this->facility_model->facility_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['vendor_contracts'] = $this->vendor_contracts_model->vendor_contracts_get_records();
    $this->load->view('vendor_contracts/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}