<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Patient_visit extends CI_CONTROLLER {
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
  public function patient_visit_create() {
    $this->load->model('department_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('insurance_model');
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->load->model('visit_name_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['insurance'] = $this->insurance_model->insurance_get_records();
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['visit_name'] = $this->visit_name_model->visit_name_get_records();
    $this->data['patient_visit_create'] = $this->patient_visit_model->patient_visit_create();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->load->view('patient_visit/default_grid', $this->data);
  }
  public function patient_visit_update() {
    $this->load->model('department_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('insurance_model');
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->load->model('visit_name_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['insurance'] = $this->insurance_model->insurance_get_records();
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['visit_name'] = $this->visit_name_model->visit_name_get_records();
    $this->data['patient_visit_update'] = $this->patient_visit_model->patient_visit_update();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->load->view('patient_visit/default_grid', $this->data);
  }
  public function patient_visit_delete() {
    $this->load->model('department_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('insurance_model');
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->load->model('visit_name_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['insurance'] = $this->insurance_model->insurance_get_records();
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['visit_name'] = $this->visit_name_model->visit_name_get_records();
    $this->data['patient_visit_delete'] = $this->patient_visit_model->patient_visit_delete();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->load->view('patient_visit/default_grid', $this->data);
  }
  public function patient_visit_select() {
    $this->load->model('department_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('insurance_model');
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->load->model('visit_name_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['insurance'] = $this->insurance_model->insurance_get_records();
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['visit_name'] = $this->visit_name_model->visit_name_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->load->view('patient_visit/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}