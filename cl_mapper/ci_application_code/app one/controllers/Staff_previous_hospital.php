<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Staff_previous_hospital extends CI_CONTROLLER {
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
  public function staff_previous_hospital_create() {
    $this->load->model('district_model');
    $this->data['district'] = $this->district_model->district_get_records();
    $this->data['staff_previous_hospital_create'] = $this->staff_previous_hospital_model->staff_previous_hospital_create();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->load->view('staff_previous_hospital/default_grid', $this->data);
  }
  public function staff_previous_hospital_update() {
    $this->load->model('district_model');
    $this->data['district'] = $this->district_model->district_get_records();
    $this->data['staff_previous_hospital_update'] = $this->staff_previous_hospital_model->staff_previous_hospital_update();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->load->view('staff_previous_hospital/default_grid', $this->data);
  }
  public function staff_previous_hospital_delete() {
    $this->load->model('district_model');
    $this->data['district'] = $this->district_model->district_get_records();
    $this->data['staff_previous_hospital_delete'] = $this->staff_previous_hospital_model->staff_previous_hospital_delete();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->load->view('staff_previous_hospital/default_grid', $this->data);
  }
  public function staff_previous_hospital_select() {
    $this->load->model('district_model');
    $this->data['district'] = $this->district_model->district_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->load->view('staff_previous_hospital/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}