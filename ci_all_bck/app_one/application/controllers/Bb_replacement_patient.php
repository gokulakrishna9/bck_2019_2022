<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Bb_replacement_patient extends CI_CONTROLLER {
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
  public function bb_replacement_patient_create() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['bb_replacement_patient_create'] = $this->bb_replacement_patient_model->bb_replacement_patient_create();
    $this->data['bb_replacement_patient'] = $this->bb_replacement_patient_model->bb_replacement_patient_get_records();
    $this->load->view('bb_replacement_patient/default_grid', $this->data);
  }
  public function bb_replacement_patient_update() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['bb_replacement_patient_update'] = $this->bb_replacement_patient_model->bb_replacement_patient_update();
    $this->data['bb_replacement_patient'] = $this->bb_replacement_patient_model->bb_replacement_patient_get_records();
    $this->load->view('bb_replacement_patient/default_grid', $this->data);
  }
  public function bb_replacement_patient_delete() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['bb_replacement_patient_delete'] = $this->bb_replacement_patient_model->bb_replacement_patient_delete();
    $this->data['bb_replacement_patient'] = $this->bb_replacement_patient_model->bb_replacement_patient_get_records();
    $this->load->view('bb_replacement_patient/default_grid', $this->data);
  }
  public function bb_replacement_patient_select() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['bb_replacement_patient'] = $this->bb_replacement_patient_model->bb_replacement_patient_get_records();
    $this->load->view('bb_replacement_patient/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}