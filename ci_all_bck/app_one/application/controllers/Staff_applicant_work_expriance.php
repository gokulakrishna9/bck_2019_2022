<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Staff_applicant_work_expriance extends CI_CONTROLLER {
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
  public function staff_applicant_work_expriance_create() {
    $this->load->model('staff_applicant_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('staff_model');
    $this->data['staff_applicant'] = $this->staff_applicant_model->staff_applicant_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['staff_applicant_work_expriance_create'] = $this->staff_applicant_work_expriance_model->staff_applicant_work_expriance_create();
    $this->data['staff_applicant_work_expriance'] = $this->staff_applicant_work_expriance_model->staff_applicant_work_expriance_get_records();
    $this->load->view('staff_applicant_work_expriance/default_grid', $this->data);
  }
  public function staff_applicant_work_expriance_update() {
    $this->load->model('staff_applicant_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('staff_model');
    $this->data['staff_applicant'] = $this->staff_applicant_model->staff_applicant_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['staff_applicant_work_expriance_update'] = $this->staff_applicant_work_expriance_model->staff_applicant_work_expriance_update();
    $this->data['staff_applicant_work_expriance'] = $this->staff_applicant_work_expriance_model->staff_applicant_work_expriance_get_records();
    $this->load->view('staff_applicant_work_expriance/default_grid', $this->data);
  }
  public function staff_applicant_work_expriance_delete() {
    $this->load->model('staff_applicant_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('staff_model');
    $this->data['staff_applicant'] = $this->staff_applicant_model->staff_applicant_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['staff_applicant_work_expriance_delete'] = $this->staff_applicant_work_expriance_model->staff_applicant_work_expriance_delete();
    $this->data['staff_applicant_work_expriance'] = $this->staff_applicant_work_expriance_model->staff_applicant_work_expriance_get_records();
    $this->load->view('staff_applicant_work_expriance/default_grid', $this->data);
  }
  public function staff_applicant_work_expriance_select() {
    $this->load->model('staff_applicant_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('staff_model');
    $this->data['staff_applicant'] = $this->staff_applicant_model->staff_applicant_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['staff_applicant_work_expriance'] = $this->staff_applicant_work_expriance_model->staff_applicant_work_expriance_get_records();
    $this->load->view('staff_applicant_work_expriance/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}