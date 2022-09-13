<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Patient_treatment extends CI_CONTROLLER {
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
  public function patient_treatment_create() {
    $this->data['patient_treatment_create'] = $this->patient_treatment_model->patient_treatment_create();
    $this->data['patient_treatment'] = $this->patient_treatment_model->patient_treatment_get_records();
    $this->load->view('patient_treatment/default_grid', $this->data);
  }
  public function patient_treatment_update() {
    $this->data['patient_treatment_update'] = $this->patient_treatment_model->patient_treatment_update();
    $this->data['patient_treatment'] = $this->patient_treatment_model->patient_treatment_get_records();
    $this->load->view('patient_treatment/default_grid', $this->data);
  }
  public function patient_treatment_delete() {
    $this->data['patient_treatment_delete'] = $this->patient_treatment_model->patient_treatment_delete();
    $this->data['patient_treatment'] = $this->patient_treatment_model->patient_treatment_get_records();
    $this->load->view('patient_treatment/default_grid', $this->data);
  }
  public function patient_treatment_select() {
    $this->data['patient_treatment'] = $this->patient_treatment_model->patient_treatment_get_records();
    $this->load->view('patient_treatment/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}