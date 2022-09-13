<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Blood_request extends CI_CONTROLLER {
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
  public function blood_request_create() {
    $this->load->model('staff_model');
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['blood_request_create'] = $this->blood_request_model->blood_request_create();
    $this->data['blood_request'] = $this->blood_request_model->blood_request_get_records();
    $this->load->view('blood_request/default_grid', $this->data);
  }
  public function blood_request_update() {
    $this->load->model('staff_model');
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['blood_request_update'] = $this->blood_request_model->blood_request_update();
    $this->data['blood_request'] = $this->blood_request_model->blood_request_get_records();
    $this->load->view('blood_request/default_grid', $this->data);
  }
  public function blood_request_delete() {
    $this->load->model('staff_model');
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['blood_request_delete'] = $this->blood_request_model->blood_request_delete();
    $this->data['blood_request'] = $this->blood_request_model->blood_request_get_records();
    $this->load->view('blood_request/default_grid', $this->data);
  }
  public function blood_request_select() {
    $this->load->model('staff_model');
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['blood_request'] = $this->blood_request_model->blood_request_get_records();
    $this->load->view('blood_request/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}