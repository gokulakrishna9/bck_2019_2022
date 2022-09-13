<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Vendor extends CI_CONTROLLER {
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
  public function vendor_create() {
    $this->load->model('vendor_type_model');
    $this->load->model('contact_person_model');
    $this->data['vendor_type'] = $this->vendor_type_model->vendor_type_get_records();
    $this->data['contact_person'] = $this->contact_person_model->contact_person_get_records();
    $this->data['vendor_create'] = $this->vendor_model->vendor_create();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->load->view('vendor/default_grid', $this->data);
  }
  public function vendor_update() {
    $this->load->model('vendor_type_model');
    $this->load->model('contact_person_model');
    $this->data['vendor_type'] = $this->vendor_type_model->vendor_type_get_records();
    $this->data['contact_person'] = $this->contact_person_model->contact_person_get_records();
    $this->data['vendor_update'] = $this->vendor_model->vendor_update();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->load->view('vendor/default_grid', $this->data);
  }
  public function vendor_delete() {
    $this->load->model('vendor_type_model');
    $this->load->model('contact_person_model');
    $this->data['vendor_type'] = $this->vendor_type_model->vendor_type_get_records();
    $this->data['contact_person'] = $this->contact_person_model->contact_person_get_records();
    $this->data['vendor_delete'] = $this->vendor_model->vendor_delete();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->load->view('vendor/default_grid', $this->data);
  }
  public function vendor_select() {
    $this->load->model('vendor_type_model');
    $this->load->model('contact_person_model');
    $this->data['vendor_type'] = $this->vendor_type_model->vendor_type_get_records();
    $this->data['contact_person'] = $this->contact_person_model->contact_person_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->load->view('vendor/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}