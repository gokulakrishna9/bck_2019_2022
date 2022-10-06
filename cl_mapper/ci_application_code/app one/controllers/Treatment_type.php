<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Treatment_type extends CI_CONTROLLER {
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
  public function treatment_type_create() {
    $this->data['treatment_type_create'] = $this->treatment_type_model->treatment_type_create();
    $this->data['treatment_type'] = $this->treatment_type_model->treatment_type_get_records();
    $this->load->view('treatment_type/default_grid', $this->data);
  }
  public function treatment_type_update() {
    $this->data['treatment_type_update'] = $this->treatment_type_model->treatment_type_update();
    $this->data['treatment_type'] = $this->treatment_type_model->treatment_type_get_records();
    $this->load->view('treatment_type/default_grid', $this->data);
  }
  public function treatment_type_delete() {
    $this->data['treatment_type_delete'] = $this->treatment_type_model->treatment_type_delete();
    $this->data['treatment_type'] = $this->treatment_type_model->treatment_type_get_records();
    $this->load->view('treatment_type/default_grid', $this->data);
  }
  public function treatment_type_select() {
    $this->data['treatment_type'] = $this->treatment_type_model->treatment_type_get_records();
    $this->load->view('treatment_type/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}