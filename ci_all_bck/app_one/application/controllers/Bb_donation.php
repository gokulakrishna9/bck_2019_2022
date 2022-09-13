<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Bb_donation extends CI_CONTROLLER {
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
  public function bb_donation_create() {
    $this->load->model('blood_donor_model');
    $this->load->model('bb_replacement_patient_model');
    $this->load->model('bb_status_model');
    $this->load->model('blood_donation_camp_model');
    $this->load->model('blood_donation_camp_date_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['blood_donor'] = $this->blood_donor_model->blood_donor_get_records();
    $this->data['bb_replacement_patient'] = $this->bb_replacement_patient_model->bb_replacement_patient_get_records();
    $this->data['bb_status'] = $this->bb_status_model->bb_status_get_records();
    $this->data['blood_donation_camp'] = $this->blood_donation_camp_model->blood_donation_camp_get_records();
    $this->data['blood_donation_camp_date'] = $this->blood_donation_camp_date_model->blood_donation_camp_date_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['bb_donation_create'] = $this->bb_donation_model->bb_donation_create();
    $this->data['bb_donation'] = $this->bb_donation_model->bb_donation_get_records();
    $this->load->view('bb_donation/default_grid', $this->data);
  }
  public function bb_donation_update() {
    $this->load->model('blood_donor_model');
    $this->load->model('bb_replacement_patient_model');
    $this->load->model('bb_status_model');
    $this->load->model('blood_donation_camp_model');
    $this->load->model('blood_donation_camp_date_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['blood_donor'] = $this->blood_donor_model->blood_donor_get_records();
    $this->data['bb_replacement_patient'] = $this->bb_replacement_patient_model->bb_replacement_patient_get_records();
    $this->data['bb_status'] = $this->bb_status_model->bb_status_get_records();
    $this->data['blood_donation_camp'] = $this->blood_donation_camp_model->blood_donation_camp_get_records();
    $this->data['blood_donation_camp_date'] = $this->blood_donation_camp_date_model->blood_donation_camp_date_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['bb_donation_update'] = $this->bb_donation_model->bb_donation_update();
    $this->data['bb_donation'] = $this->bb_donation_model->bb_donation_get_records();
    $this->load->view('bb_donation/default_grid', $this->data);
  }
  public function bb_donation_delete() {
    $this->load->model('blood_donor_model');
    $this->load->model('bb_replacement_patient_model');
    $this->load->model('bb_status_model');
    $this->load->model('blood_donation_camp_model');
    $this->load->model('blood_donation_camp_date_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['blood_donor'] = $this->blood_donor_model->blood_donor_get_records();
    $this->data['bb_replacement_patient'] = $this->bb_replacement_patient_model->bb_replacement_patient_get_records();
    $this->data['bb_status'] = $this->bb_status_model->bb_status_get_records();
    $this->data['blood_donation_camp'] = $this->blood_donation_camp_model->blood_donation_camp_get_records();
    $this->data['blood_donation_camp_date'] = $this->blood_donation_camp_date_model->blood_donation_camp_date_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['bb_donation_delete'] = $this->bb_donation_model->bb_donation_delete();
    $this->data['bb_donation'] = $this->bb_donation_model->bb_donation_get_records();
    $this->load->view('bb_donation/default_grid', $this->data);
  }
  public function bb_donation_select() {
    $this->load->model('blood_donor_model');
    $this->load->model('bb_replacement_patient_model');
    $this->load->model('bb_status_model');
    $this->load->model('blood_donation_camp_model');
    $this->load->model('blood_donation_camp_date_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['blood_donor'] = $this->blood_donor_model->blood_donor_get_records();
    $this->data['bb_replacement_patient'] = $this->bb_replacement_patient_model->bb_replacement_patient_get_records();
    $this->data['bb_status'] = $this->bb_status_model->bb_status_get_records();
    $this->data['blood_donation_camp'] = $this->blood_donation_camp_model->blood_donation_camp_get_records();
    $this->data['blood_donation_camp_date'] = $this->blood_donation_camp_date_model->blood_donation_camp_date_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['bb_donation'] = $this->bb_donation_model->bb_donation_get_records();
    $this->load->view('bb_donation/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}