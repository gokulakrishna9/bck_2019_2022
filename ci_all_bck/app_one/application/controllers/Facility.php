<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Facility extends CI_CONTROLLER {
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
  public function facility_create() {
    $this->load->model('facility_type_model');
    $this->load->model('village_town_model');
    $this->data['facility_type'] = $this->facility_type_model->facility_type_get_records();
    $this->data['village_town'] = $this->village_town_model->village_town_get_records();
    $this->data['facility_create'] = $this->facility_model->facility_create();
    $this->data['facility'] = $this->facility_model->facility_get_records();
    $this->load->view('facility/default_grid', $this->data);
  }
  public function facility_update() {
    $this->load->model('facility_type_model');
    $this->load->model('village_town_model');
    $this->data['facility_type'] = $this->facility_type_model->facility_type_get_records();
    $this->data['village_town'] = $this->village_town_model->village_town_get_records();
    $this->data['facility_update'] = $this->facility_model->facility_update();
    $this->data['facility'] = $this->facility_model->facility_get_records();
    $this->load->view('facility/default_grid', $this->data);
  }
  public function facility_delete() {
    $this->load->model('facility_type_model');
    $this->load->model('village_town_model');
    $this->data['facility_type'] = $this->facility_type_model->facility_type_get_records();
    $this->data['village_town'] = $this->village_town_model->village_town_get_records();
    $this->data['facility_delete'] = $this->facility_model->facility_delete();
    $this->data['facility'] = $this->facility_model->facility_get_records();
    $this->load->view('facility/default_grid', $this->data);
  }
  public function facility_select() {
    $this->load->model('facility_type_model');
    $this->load->model('village_town_model');
    $this->data['facility_type'] = $this->facility_type_model->facility_type_get_records();
    $this->data['village_town'] = $this->village_town_model->village_town_get_records();
    $this->data['facility'] = $this->facility_model->facility_get_records();
    $this->load->view('facility/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}