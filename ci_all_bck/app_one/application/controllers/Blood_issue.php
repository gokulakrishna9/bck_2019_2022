<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Blood_issue extends CI_CONTROLLER {
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
  public function blood_issue_create() {
    $this->load->model('blood_request_model');
    $this->load->model('service_record_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['blood_request'] = $this->blood_request_model->blood_request_get_records();
    $this->data['service_record'] = $this->service_record_model->service_record_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['blood_issue_create'] = $this->blood_issue_model->blood_issue_create();
    $this->data['blood_issue'] = $this->blood_issue_model->blood_issue_get_records();
    $this->load->view('blood_issue/default_grid', $this->data);
  }
  public function blood_issue_update() {
    $this->load->model('blood_request_model');
    $this->load->model('service_record_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['blood_request'] = $this->blood_request_model->blood_request_get_records();
    $this->data['service_record'] = $this->service_record_model->service_record_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['blood_issue_update'] = $this->blood_issue_model->blood_issue_update();
    $this->data['blood_issue'] = $this->blood_issue_model->blood_issue_get_records();
    $this->load->view('blood_issue/default_grid', $this->data);
  }
  public function blood_issue_delete() {
    $this->load->model('blood_request_model');
    $this->load->model('service_record_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['blood_request'] = $this->blood_request_model->blood_request_get_records();
    $this->data['service_record'] = $this->service_record_model->service_record_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['blood_issue_delete'] = $this->blood_issue_model->blood_issue_delete();
    $this->data['blood_issue'] = $this->blood_issue_model->blood_issue_get_records();
    $this->load->view('blood_issue/default_grid', $this->data);
  }
  public function blood_issue_select() {
    $this->load->model('blood_request_model');
    $this->load->model('service_record_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['blood_request'] = $this->blood_request_model->blood_request_get_records();
    $this->data['service_record'] = $this->service_record_model->service_record_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['blood_issue'] = $this->blood_issue_model->blood_issue_get_records();
    $this->load->view('blood_issue/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}