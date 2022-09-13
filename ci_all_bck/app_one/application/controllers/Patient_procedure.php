<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Patient_procedure extends CI_CONTROLLER {
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
  public function patient_procedure_create() {
    $this->load->model('procedure_plan_model');
    $this->load->model('procedure_model');
    $this->data['procedure_plan'] = $this->procedure_plan_model->procedure_plan_get_records();
    $this->data['procedure'] = $this->procedure_model->procedure_get_records();
    $this->data['patient_procedure_create'] = $this->patient_procedure_model->patient_procedure_create();
    $this->data['patient_procedure'] = $this->patient_procedure_model->patient_procedure_get_records();
    $this->load->view('patient_procedure/default_grid', $this->data);
  }
  public function patient_procedure_update() {
    $this->load->model('procedure_plan_model');
    $this->load->model('procedure_model');
    $this->data['procedure_plan'] = $this->procedure_plan_model->procedure_plan_get_records();
    $this->data['procedure'] = $this->procedure_model->procedure_get_records();
    $this->data['patient_procedure_update'] = $this->patient_procedure_model->patient_procedure_update();
    $this->data['patient_procedure'] = $this->patient_procedure_model->patient_procedure_get_records();
    $this->load->view('patient_procedure/default_grid', $this->data);
  }
  public function patient_procedure_delete() {
    $this->load->model('procedure_plan_model');
    $this->load->model('procedure_model');
    $this->data['procedure_plan'] = $this->procedure_plan_model->procedure_plan_get_records();
    $this->data['procedure'] = $this->procedure_model->procedure_get_records();
    $this->data['patient_procedure_delete'] = $this->patient_procedure_model->patient_procedure_delete();
    $this->data['patient_procedure'] = $this->patient_procedure_model->patient_procedure_get_records();
    $this->load->view('patient_procedure/default_grid', $this->data);
  }
  public function patient_procedure_select() {
    $this->load->model('procedure_plan_model');
    $this->load->model('procedure_model');
    $this->data['procedure_plan'] = $this->procedure_plan_model->procedure_plan_get_records();
    $this->data['procedure'] = $this->procedure_model->procedure_get_records();
    $this->data['patient_procedure'] = $this->patient_procedure_model->patient_procedure_get_records();
    $this->load->view('patient_procedure/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}