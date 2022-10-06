<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Procedure_staff extends CI_CONTROLLER {
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
  public function procedure_staff_create() {
    $this->load->model('patient_procedure_model');
    $this->load->model('staff_model');
    $this->data['patient_procedure'] = $this->patient_procedure_model->patient_procedure_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['procedure_staff_create'] = $this->procedure_staff_model->procedure_staff_create();
    $this->data['procedure_staff'] = $this->procedure_staff_model->procedure_staff_get_records();
    $this->load->view('procedure_staff/default_grid', $this->data);
  }
  public function procedure_staff_update() {
    $this->load->model('patient_procedure_model');
    $this->load->model('staff_model');
    $this->data['patient_procedure'] = $this->patient_procedure_model->patient_procedure_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['procedure_staff_update'] = $this->procedure_staff_model->procedure_staff_update();
    $this->data['procedure_staff'] = $this->procedure_staff_model->procedure_staff_get_records();
    $this->load->view('procedure_staff/default_grid', $this->data);
  }
  public function procedure_staff_delete() {
    $this->load->model('patient_procedure_model');
    $this->load->model('staff_model');
    $this->data['patient_procedure'] = $this->patient_procedure_model->patient_procedure_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['procedure_staff_delete'] = $this->procedure_staff_model->procedure_staff_delete();
    $this->data['procedure_staff'] = $this->procedure_staff_model->procedure_staff_get_records();
    $this->load->view('procedure_staff/default_grid', $this->data);
  }
  public function procedure_staff_select() {
    $this->load->model('patient_procedure_model');
    $this->load->model('staff_model');
    $this->data['patient_procedure'] = $this->patient_procedure_model->patient_procedure_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['procedure_staff'] = $this->procedure_staff_model->procedure_staff_get_records();
    $this->load->view('procedure_staff/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}