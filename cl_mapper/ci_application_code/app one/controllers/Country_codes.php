<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Country_codes extends CI_CONTROLLER {
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
  public function country_codes_create() {
    $this->data['country_codes_create'] = $this->country_codes_model->country_codes_create();
    $this->data['country_codes'] = $this->country_codes_model->country_codes_get_records();
    $this->load->view('country_codes/default_grid', $this->data);
  }
  public function country_codes_update() {
    $this->data['country_codes_update'] = $this->country_codes_model->country_codes_update();
    $this->data['country_codes'] = $this->country_codes_model->country_codes_get_records();
    $this->load->view('country_codes/default_grid', $this->data);
  }
  public function country_codes_delete() {
    $this->data['country_codes_delete'] = $this->country_codes_model->country_codes_delete();
    $this->data['country_codes'] = $this->country_codes_model->country_codes_get_records();
    $this->load->view('country_codes/default_grid', $this->data);
  }
  public function country_codes_select() {
    $this->data['country_codes'] = $this->country_codes_model->country_codes_get_records();
    $this->load->view('country_codes/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}