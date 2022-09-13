<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Leave extends CI_CONTROLLER {
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
  public function leave_create() {
    $this->load->model('staff_model');
    $this->load->model('leave_type_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['leave_type'] = $this->leave_type_model->leave_type_get_records();
    $this->data['leave_create'] = $this->leave_model->leave_create();
    $this->data['leave'] = $this->leave_model->leave_get_records();
    $this->load->view('leave/default_grid', $this->data);
  }
  public function leave_update() {
    $this->load->model('staff_model');
    $this->load->model('leave_type_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['leave_type'] = $this->leave_type_model->leave_type_get_records();
    $this->data['leave_update'] = $this->leave_model->leave_update();
    $this->data['leave'] = $this->leave_model->leave_get_records();
    $this->load->view('leave/default_grid', $this->data);
  }
  public function leave_delete() {
    $this->load->model('staff_model');
    $this->load->model('leave_type_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['leave_type'] = $this->leave_type_model->leave_type_get_records();
    $this->data['leave_delete'] = $this->leave_model->leave_delete();
    $this->data['leave'] = $this->leave_model->leave_get_records();
    $this->load->view('leave/default_grid', $this->data);
  }
  public function leave_select() {
    $this->load->model('staff_model');
    $this->load->model('leave_type_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['leave_type'] = $this->leave_type_model->leave_type_get_records();
    $this->data['leave'] = $this->leave_model->leave_get_records();
    $this->load->view('leave/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}