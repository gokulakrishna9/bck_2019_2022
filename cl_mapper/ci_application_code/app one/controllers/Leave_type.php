<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Leave_type extends CI_CONTROLLER {
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
  public function leave_type_create() {
    $this->data['leave_type_create'] = $this->leave_type_model->leave_type_create();
    $this->data['leave_type'] = $this->leave_type_model->leave_type_get_records();
    $this->load->view('leave_type/default_grid', $this->data);
  }
  public function leave_type_update() {
    $this->data['leave_type_update'] = $this->leave_type_model->leave_type_update();
    $this->data['leave_type'] = $this->leave_type_model->leave_type_get_records();
    $this->load->view('leave_type/default_grid', $this->data);
  }
  public function leave_type_delete() {
    $this->data['leave_type_delete'] = $this->leave_type_model->leave_type_delete();
    $this->data['leave_type'] = $this->leave_type_model->leave_type_get_records();
    $this->load->view('leave_type/default_grid', $this->data);
  }
  public function leave_type_select() {
    $this->data['leave_type'] = $this->leave_type_model->leave_type_get_records();
    $this->load->view('leave_type/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}