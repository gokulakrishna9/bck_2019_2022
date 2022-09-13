<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Facility_activity extends CI_CONTROLLER {
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
  public function facility_activity_create() {
    $this->load->model('facility_area_model');
    $this->load->model('area_activity_model');
    $this->data['facility_area'] = $this->facility_area_model->facility_area_get_records();
    $this->data['area_activity'] = $this->area_activity_model->area_activity_get_records();
    $this->data['facility_activity_create'] = $this->facility_activity_model->facility_activity_create();
    $this->data['facility_activity'] = $this->facility_activity_model->facility_activity_get_records();
    $this->load->view('facility_activity/default_grid', $this->data);
  }
  public function facility_activity_update() {
    $this->load->model('facility_area_model');
    $this->load->model('area_activity_model');
    $this->data['facility_area'] = $this->facility_area_model->facility_area_get_records();
    $this->data['area_activity'] = $this->area_activity_model->area_activity_get_records();
    $this->data['facility_activity_update'] = $this->facility_activity_model->facility_activity_update();
    $this->data['facility_activity'] = $this->facility_activity_model->facility_activity_get_records();
    $this->load->view('facility_activity/default_grid', $this->data);
  }
  public function facility_activity_delete() {
    $this->load->model('facility_area_model');
    $this->load->model('area_activity_model');
    $this->data['facility_area'] = $this->facility_area_model->facility_area_get_records();
    $this->data['area_activity'] = $this->area_activity_model->area_activity_get_records();
    $this->data['facility_activity_delete'] = $this->facility_activity_model->facility_activity_delete();
    $this->data['facility_activity'] = $this->facility_activity_model->facility_activity_get_records();
    $this->load->view('facility_activity/default_grid', $this->data);
  }
  public function facility_activity_select() {
    $this->load->model('facility_area_model');
    $this->load->model('area_activity_model');
    $this->data['facility_area'] = $this->facility_area_model->facility_area_get_records();
    $this->data['area_activity'] = $this->area_activity_model->area_activity_get_records();
    $this->data['facility_activity'] = $this->facility_activity_model->facility_activity_get_records();
    $this->load->view('facility_activity/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}