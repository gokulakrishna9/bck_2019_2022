<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Hr_transaction extends CI_CONTROLLER {
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
  public function hr_transaction_create() {
    $this->load->model('staff_model');
    $this->load->model('hr_transaction_type_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['hr_transaction_type'] = $this->hr_transaction_type_model->hr_transaction_type_get_records();
    $this->data['hr_transaction_create'] = $this->hr_transaction_model->hr_transaction_create();
    $this->data['hr_transaction'] = $this->hr_transaction_model->hr_transaction_get_records();
    $this->load->view('hr_transaction/default_grid', $this->data);
  }
  public function hr_transaction_update() {
    $this->load->model('staff_model');
    $this->load->model('hr_transaction_type_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['hr_transaction_type'] = $this->hr_transaction_type_model->hr_transaction_type_get_records();
    $this->data['hr_transaction_update'] = $this->hr_transaction_model->hr_transaction_update();
    $this->data['hr_transaction'] = $this->hr_transaction_model->hr_transaction_get_records();
    $this->load->view('hr_transaction/default_grid', $this->data);
  }
  public function hr_transaction_delete() {
    $this->load->model('staff_model');
    $this->load->model('hr_transaction_type_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['hr_transaction_type'] = $this->hr_transaction_type_model->hr_transaction_type_get_records();
    $this->data['hr_transaction_delete'] = $this->hr_transaction_model->hr_transaction_delete();
    $this->data['hr_transaction'] = $this->hr_transaction_model->hr_transaction_get_records();
    $this->load->view('hr_transaction/default_grid', $this->data);
  }
  public function hr_transaction_select() {
    $this->load->model('staff_model');
    $this->load->model('hr_transaction_type_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['hr_transaction_type'] = $this->hr_transaction_type_model->hr_transaction_type_get_records();
    $this->data['hr_transaction'] = $this->hr_transaction_model->hr_transaction_get_records();
    $this->load->view('hr_transaction/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}