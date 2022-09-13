<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class State extends CI_CONTROLLER {
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
  public function state_create() {
    $this->load->model('country_model');
    $this->load->model('country_codes_model');
    $this->data['country'] = $this->country_model->country_get_records();
    $this->data['country_codes'] = $this->country_codes_model->country_codes_get_records();
    $this->data['state_create'] = $this->state_model->state_create();
    $this->data['state'] = $this->state_model->state_get_records();
    $this->load->view('state/default_grid', $this->data);
  }
  public function state_update() {
    $this->load->model('country_model');
    $this->load->model('country_codes_model');
    $this->data['country'] = $this->country_model->country_get_records();
    $this->data['country_codes'] = $this->country_codes_model->country_codes_get_records();
    $this->data['state_update'] = $this->state_model->state_update();
    $this->data['state'] = $this->state_model->state_get_records();
    $this->load->view('state/default_grid', $this->data);
  }
  public function state_delete() {
    $this->load->model('country_model');
    $this->load->model('country_codes_model');
    $this->data['country'] = $this->country_model->country_get_records();
    $this->data['country_codes'] = $this->country_codes_model->country_codes_get_records();
    $this->data['state_delete'] = $this->state_model->state_delete();
    $this->data['state'] = $this->state_model->state_get_records();
    $this->load->view('state/default_grid', $this->data);
  }
  public function state_select() {
    $this->load->model('country_model');
    $this->load->model('country_codes_model');
    $this->data['country'] = $this->country_model->country_get_records();
    $this->data['country_codes'] = $this->country_codes_model->country_codes_get_records();
    $this->data['state'] = $this->state_model->state_get_records();
    $this->load->view('state/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}