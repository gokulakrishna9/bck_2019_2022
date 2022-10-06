<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Swap_request extends CI_CONTROLLER {
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
  public function swap_request_create() {
    $this->data['swap_request_create'] = $this->swap_request_model->swap_request_create();
    $this->data['swap_request'] = $this->swap_request_model->swap_request_get_records();
    $this->load->view('swap_request/default_grid', $this->data);
  }
  public function swap_request_update() {
    $this->data['swap_request_update'] = $this->swap_request_model->swap_request_update();
    $this->data['swap_request'] = $this->swap_request_model->swap_request_get_records();
    $this->load->view('swap_request/default_grid', $this->data);
  }
  public function swap_request_delete() {
    $this->data['swap_request_delete'] = $this->swap_request_model->swap_request_delete();
    $this->data['swap_request'] = $this->swap_request_model->swap_request_get_records();
    $this->load->view('swap_request/default_grid', $this->data);
  }
  public function swap_request_select() {
    $this->data['swap_request'] = $this->swap_request_model->swap_request_get_records();
    $this->load->view('swap_request/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}