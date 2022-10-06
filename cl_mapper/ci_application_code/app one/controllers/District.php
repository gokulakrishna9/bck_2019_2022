<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class District extends CI_CONTROLLER {
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
  public function district_create() {
    $this->load->model('state_model');
    $this->load->model('state_codes_model');
    $this->data['state'] = $this->state_model->state_get_records();
    $this->data['state_codes'] = $this->state_codes_model->state_codes_get_records();
    $this->data['district_create'] = $this->district_model->district_create();
    $this->data['district'] = $this->district_model->district_get_records();
    $this->load->view('district/default_grid', $this->data);
  }
  public function district_update() {
    $this->load->model('state_model');
    $this->load->model('state_codes_model');
    $this->data['state'] = $this->state_model->state_get_records();
    $this->data['state_codes'] = $this->state_codes_model->state_codes_get_records();
    $this->data['district_update'] = $this->district_model->district_update();
    $this->data['district'] = $this->district_model->district_get_records();
    $this->load->view('district/default_grid', $this->data);
  }
  public function district_delete() {
    $this->load->model('state_model');
    $this->load->model('state_codes_model');
    $this->data['state'] = $this->state_model->state_get_records();
    $this->data['state_codes'] = $this->state_codes_model->state_codes_get_records();
    $this->data['district_delete'] = $this->district_model->district_delete();
    $this->data['district'] = $this->district_model->district_get_records();
    $this->load->view('district/default_grid', $this->data);
  }
  public function district_select() {
    $this->load->model('state_model');
    $this->load->model('state_codes_model');
    $this->data['state'] = $this->state_model->state_get_records();
    $this->data['state_codes'] = $this->state_codes_model->state_codes_get_records();
    $this->data['district'] = $this->district_model->district_get_records();
    $this->load->view('district/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}