<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Country extends CI_CONTROLLER {
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
  public function country_create() {
    $this->data['country_create'] = $this->country_model->country_create();
    $this->data['country'] = $this->country_model->country_get_records();
    $this->load->view('country/default_grid', $this->data);
  }
  public function country_update() {
    $this->data['country_update'] = $this->country_model->country_update();
    $this->data['country'] = $this->country_model->country_get_records();
    $this->load->view('country/default_grid', $this->data);
  }
  public function country_delete() {
    $this->data['country_delete'] = $this->country_model->country_delete();
    $this->data['country'] = $this->country_model->country_get_records();
    $this->load->view('country/default_grid', $this->data);
  }
  public function country_select() {
    $this->data['country'] = $this->country_model->country_get_records();
    $this->load->view('country/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}