<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Hr_transaction_type extends CI_CONTROLLER {
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
  public function hr_transaction_type_create() {
    $this->data['hr_transaction_type_create'] = $this->hr_transaction_type_model->hr_transaction_type_create();
    $this->data['hr_transaction_type'] = $this->hr_transaction_type_model->hr_transaction_type_get_records();
    $this->load->view('hr_transaction_type/default_grid', $this->data);
  }
  public function hr_transaction_type_update() {
    $this->data['hr_transaction_type_update'] = $this->hr_transaction_type_model->hr_transaction_type_update();
    $this->data['hr_transaction_type'] = $this->hr_transaction_type_model->hr_transaction_type_get_records();
    $this->load->view('hr_transaction_type/default_grid', $this->data);
  }
  public function hr_transaction_type_delete() {
    $this->data['hr_transaction_type_delete'] = $this->hr_transaction_type_model->hr_transaction_type_delete();
    $this->data['hr_transaction_type'] = $this->hr_transaction_type_model->hr_transaction_type_get_records();
    $this->load->view('hr_transaction_type/default_grid', $this->data);
  }
  public function hr_transaction_type_select() {
    $this->data['hr_transaction_type'] = $this->hr_transaction_type_model->hr_transaction_type_get_records();
    $this->load->view('hr_transaction_type/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}