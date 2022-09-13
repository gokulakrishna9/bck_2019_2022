<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Patient_obstetric_history extends CI_CONTROLLER {
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
  public function patient_obstetric_history_create() {
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['patient_obstetric_history_create'] = $this->patient_obstetric_history_model->patient_obstetric_history_create();
    $this->data['patient_obstetric_history'] = $this->patient_obstetric_history_model->patient_obstetric_history_get_records();
    $this->load->view('patient_obstetric_history/default_grid', $this->data);
  }
  public function patient_obstetric_history_update() {
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['patient_obstetric_history_update'] = $this->patient_obstetric_history_model->patient_obstetric_history_update();
    $this->data['patient_obstetric_history'] = $this->patient_obstetric_history_model->patient_obstetric_history_get_records();
    $this->load->view('patient_obstetric_history/default_grid', $this->data);
  }
  public function patient_obstetric_history_delete() {
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['patient_obstetric_history_delete'] = $this->patient_obstetric_history_model->patient_obstetric_history_delete();
    $this->data['patient_obstetric_history'] = $this->patient_obstetric_history_model->patient_obstetric_history_get_records();
    $this->load->view('patient_obstetric_history/default_grid', $this->data);
  }
  public function patient_obstetric_history_select() {
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['patient_obstetric_history'] = $this->patient_obstetric_history_model->patient_obstetric_history_get_records();
    $this->load->view('patient_obstetric_history/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}