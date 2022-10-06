<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Patient extends CI_CONTROLLER {
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
  public function patient_create() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('id_proof_type_model');
    $this->load->model('occupation_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['id_proof_type'] = $this->id_proof_type_model->id_proof_type_get_records();
    $this->data['occupation'] = $this->occupation_model->occupation_get_records();
    $this->data['patient_create'] = $this->patient_model->patient_create();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->load->view('patient/default_grid', $this->data);
  }
  public function patient_update() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('id_proof_type_model');
    $this->load->model('occupation_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['id_proof_type'] = $this->id_proof_type_model->id_proof_type_get_records();
    $this->data['occupation'] = $this->occupation_model->occupation_get_records();
    $this->data['patient_update'] = $this->patient_model->patient_update();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->load->view('patient/default_grid', $this->data);
  }
  public function patient_delete() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('id_proof_type_model');
    $this->load->model('occupation_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['id_proof_type'] = $this->id_proof_type_model->id_proof_type_get_records();
    $this->data['occupation'] = $this->occupation_model->occupation_get_records();
    $this->data['patient_delete'] = $this->patient_model->patient_delete();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->load->view('patient/default_grid', $this->data);
  }
  public function patient_select() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('id_proof_type_model');
    $this->load->model('occupation_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['id_proof_type'] = $this->id_proof_type_model->id_proof_type_get_records();
    $this->data['occupation'] = $this->occupation_model->occupation_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->load->view('patient/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}