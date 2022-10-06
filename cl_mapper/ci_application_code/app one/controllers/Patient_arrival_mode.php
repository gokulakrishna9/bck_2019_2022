<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Patient_arrival_mode extends CI_CONTROLLER {
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
  public function patient_arrival_mode_create() {
    $this->data['patient_arrival_mode_create'] = $this->patient_arrival_mode_model->patient_arrival_mode_create();
    $this->data['patient_arrival_mode'] = $this->patient_arrival_mode_model->patient_arrival_mode_get_records();
    $this->load->view('patient_arrival_mode/default_grid', $this->data);
  }
  public function patient_arrival_mode_update() {
    $this->data['patient_arrival_mode_update'] = $this->patient_arrival_mode_model->patient_arrival_mode_update();
    $this->data['patient_arrival_mode'] = $this->patient_arrival_mode_model->patient_arrival_mode_get_records();
    $this->load->view('patient_arrival_mode/default_grid', $this->data);
  }
  public function patient_arrival_mode_delete() {
    $this->data['patient_arrival_mode_delete'] = $this->patient_arrival_mode_model->patient_arrival_mode_delete();
    $this->data['patient_arrival_mode'] = $this->patient_arrival_mode_model->patient_arrival_mode_get_records();
    $this->load->view('patient_arrival_mode/default_grid', $this->data);
  }
  public function patient_arrival_mode_select() {
    $this->data['patient_arrival_mode'] = $this->patient_arrival_mode_model->patient_arrival_mode_get_records();
    $this->load->view('patient_arrival_mode/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}