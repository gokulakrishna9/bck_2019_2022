<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Bloodbank_edit_log extends CI_CONTROLLER {
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
  public function bloodbank_edit_log_create() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['bloodbank_edit_log_create'] = $this->bloodbank_edit_log_model->bloodbank_edit_log_create();
    $this->data['bloodbank_edit_log'] = $this->bloodbank_edit_log_model->bloodbank_edit_log_get_records();
    $this->load->view('bloodbank_edit_log/default_grid', $this->data);
  }
  public function bloodbank_edit_log_update() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['bloodbank_edit_log_update'] = $this->bloodbank_edit_log_model->bloodbank_edit_log_update();
    $this->data['bloodbank_edit_log'] = $this->bloodbank_edit_log_model->bloodbank_edit_log_get_records();
    $this->load->view('bloodbank_edit_log/default_grid', $this->data);
  }
  public function bloodbank_edit_log_delete() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['bloodbank_edit_log_delete'] = $this->bloodbank_edit_log_model->bloodbank_edit_log_delete();
    $this->data['bloodbank_edit_log'] = $this->bloodbank_edit_log_model->bloodbank_edit_log_get_records();
    $this->load->view('bloodbank_edit_log/default_grid', $this->data);
  }
  public function bloodbank_edit_log_select() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['bloodbank_edit_log'] = $this->bloodbank_edit_log_model->bloodbank_edit_log_get_records();
    $this->load->view('bloodbank_edit_log/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}