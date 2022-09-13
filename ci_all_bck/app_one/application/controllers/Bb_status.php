<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Bb_status extends CI_CONTROLLER {
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
  public function bb_status_create() {
    $this->data['bb_status_create'] = $this->bb_status_model->bb_status_create();
    $this->data['bb_status'] = $this->bb_status_model->bb_status_get_records();
    $this->load->view('bb_status/default_grid', $this->data);
  }
  public function bb_status_update() {
    $this->data['bb_status_update'] = $this->bb_status_model->bb_status_update();
    $this->data['bb_status'] = $this->bb_status_model->bb_status_get_records();
    $this->load->view('bb_status/default_grid', $this->data);
  }
  public function bb_status_delete() {
    $this->data['bb_status_delete'] = $this->bb_status_model->bb_status_delete();
    $this->data['bb_status'] = $this->bb_status_model->bb_status_get_records();
    $this->load->view('bb_status/default_grid', $this->data);
  }
  public function bb_status_select() {
    $this->data['bb_status'] = $this->bb_status_model->bb_status_get_records();
    $this->load->view('bb_status/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}