<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Shift extends CI_CONTROLLER {
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
  public function shift_create() {
    $this->data['shift_create'] = $this->shift_model->shift_create();
    $this->data['shift'] = $this->shift_model->shift_get_records();
    $this->load->view('shift/default_grid', $this->data);
  }
  public function shift_update() {
    $this->data['shift_update'] = $this->shift_model->shift_update();
    $this->data['shift'] = $this->shift_model->shift_get_records();
    $this->load->view('shift/default_grid', $this->data);
  }
  public function shift_delete() {
    $this->data['shift_delete'] = $this->shift_model->shift_delete();
    $this->data['shift'] = $this->shift_model->shift_get_records();
    $this->load->view('shift/default_grid', $this->data);
  }
  public function shift_select() {
    $this->data['shift'] = $this->shift_model->shift_get_records();
    $this->load->view('shift/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}