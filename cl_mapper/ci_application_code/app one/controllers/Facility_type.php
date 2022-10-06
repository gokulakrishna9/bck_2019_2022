<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Facility_type extends CI_CONTROLLER {
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
  public function facility_type_create() {
    $this->data['facility_type_create'] = $this->facility_type_model->facility_type_create();
    $this->data['facility_type'] = $this->facility_type_model->facility_type_get_records();
    $this->load->view('facility_type/default_grid', $this->data);
  }
  public function facility_type_update() {
    $this->data['facility_type_update'] = $this->facility_type_model->facility_type_update();
    $this->data['facility_type'] = $this->facility_type_model->facility_type_get_records();
    $this->load->view('facility_type/default_grid', $this->data);
  }
  public function facility_type_delete() {
    $this->data['facility_type_delete'] = $this->facility_type_model->facility_type_delete();
    $this->data['facility_type'] = $this->facility_type_model->facility_type_get_records();
    $this->load->view('facility_type/default_grid', $this->data);
  }
  public function facility_type_select() {
    $this->data['facility_type'] = $this->facility_type_model->facility_type_get_records();
    $this->load->view('facility_type/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}