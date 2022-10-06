<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class State_codes extends CI_CONTROLLER {
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
  public function state_codes_create() {
    $this->data['state_codes_create'] = $this->state_codes_model->state_codes_create();
    $this->data['state_codes'] = $this->state_codes_model->state_codes_get_records();
    $this->load->view('state_codes/default_grid', $this->data);
  }
  public function state_codes_update() {
    $this->data['state_codes_update'] = $this->state_codes_model->state_codes_update();
    $this->data['state_codes'] = $this->state_codes_model->state_codes_get_records();
    $this->load->view('state_codes/default_grid', $this->data);
  }
  public function state_codes_delete() {
    $this->data['state_codes_delete'] = $this->state_codes_model->state_codes_delete();
    $this->data['state_codes'] = $this->state_codes_model->state_codes_get_records();
    $this->load->view('state_codes/default_grid', $this->data);
  }
  public function state_codes_select() {
    $this->data['state_codes'] = $this->state_codes_model->state_codes_get_records();
    $this->load->view('state_codes/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}