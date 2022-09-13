<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Bb_appointment extends CI_CONTROLLER {
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
  public function bb_appointment_create() {
    $this->load->model('blood_donor_model');
    $this->load->model('bb_slot_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['blood_donor'] = $this->blood_donor_model->blood_donor_get_records();
    $this->data['bb_slot'] = $this->bb_slot_model->bb_slot_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['bb_appointment_create'] = $this->bb_appointment_model->bb_appointment_create();
    $this->data['bb_appointment'] = $this->bb_appointment_model->bb_appointment_get_records();
    $this->load->view('bb_appointment/default_grid', $this->data);
  }
  public function bb_appointment_update() {
    $this->load->model('blood_donor_model');
    $this->load->model('bb_slot_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['blood_donor'] = $this->blood_donor_model->blood_donor_get_records();
    $this->data['bb_slot'] = $this->bb_slot_model->bb_slot_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['bb_appointment_update'] = $this->bb_appointment_model->bb_appointment_update();
    $this->data['bb_appointment'] = $this->bb_appointment_model->bb_appointment_get_records();
    $this->load->view('bb_appointment/default_grid', $this->data);
  }
  public function bb_appointment_delete() {
    $this->load->model('blood_donor_model');
    $this->load->model('bb_slot_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['blood_donor'] = $this->blood_donor_model->blood_donor_get_records();
    $this->data['bb_slot'] = $this->bb_slot_model->bb_slot_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['bb_appointment_delete'] = $this->bb_appointment_model->bb_appointment_delete();
    $this->data['bb_appointment'] = $this->bb_appointment_model->bb_appointment_get_records();
    $this->load->view('bb_appointment/default_grid', $this->data);
  }
  public function bb_appointment_select() {
    $this->load->model('blood_donor_model');
    $this->load->model('bb_slot_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['blood_donor'] = $this->blood_donor_model->blood_donor_get_records();
    $this->data['bb_slot'] = $this->bb_slot_model->bb_slot_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['bb_appointment'] = $this->bb_appointment_model->bb_appointment_get_records();
    $this->load->view('bb_appointment/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}