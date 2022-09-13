<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Api_updates extends CI_CONTROLLER {
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
  public function api_updates_create() {
    $this->data['api_updates_create'] = $this->api_updates_model->api_updates_create();
    $this->data['api_updates'] = $this->api_updates_model->api_updates_get_records();
    $this->load->view('api_updates/default_grid', $this->data);
  }
  public function api_updates_update() {
    $this->data['api_updates_update'] = $this->api_updates_model->api_updates_update();
    $this->data['api_updates'] = $this->api_updates_model->api_updates_get_records();
    $this->load->view('api_updates/default_grid', $this->data);
  }
  public function api_updates_delete() {
    $this->data['api_updates_delete'] = $this->api_updates_model->api_updates_delete();
    $this->data['api_updates'] = $this->api_updates_model->api_updates_get_records();
    $this->load->view('api_updates/default_grid', $this->data);
  }
  public function api_updates_select() {
    $this->data['api_updates'] = $this->api_updates_model->api_updates_get_records();
    $this->load->view('api_updates/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}