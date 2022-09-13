<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Facility_area extends CI_CONTROLLER {
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
  public function facility_area_create() {
    $this->load->model('facility_model');
    $this->load->model('department_model');
    $this->load->model('area_types_model');
    $this->data['facility'] = $this->facility_model->facility_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->data['facility_area_create'] = $this->facility_area_model->facility_area_create();
    $this->data['facility_area'] = $this->facility_area_model->facility_area_get_records();
    $this->load->view('facility_area/default_grid', $this->data);
  }
  public function facility_area_update() {
    $this->load->model('facility_model');
    $this->load->model('department_model');
    $this->load->model('area_types_model');
    $this->data['facility'] = $this->facility_model->facility_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->data['facility_area_update'] = $this->facility_area_model->facility_area_update();
    $this->data['facility_area'] = $this->facility_area_model->facility_area_get_records();
    $this->load->view('facility_area/default_grid', $this->data);
  }
  public function facility_area_delete() {
    $this->load->model('facility_model');
    $this->load->model('department_model');
    $this->load->model('area_types_model');
    $this->data['facility'] = $this->facility_model->facility_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->data['facility_area_delete'] = $this->facility_area_model->facility_area_delete();
    $this->data['facility_area'] = $this->facility_area_model->facility_area_get_records();
    $this->load->view('facility_area/default_grid', $this->data);
  }
  public function facility_area_select() {
    $this->load->model('facility_model');
    $this->load->model('department_model');
    $this->load->model('area_types_model');
    $this->data['facility'] = $this->facility_model->facility_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->data['facility_area'] = $this->facility_area_model->facility_area_get_records();
    $this->load->view('facility_area/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}