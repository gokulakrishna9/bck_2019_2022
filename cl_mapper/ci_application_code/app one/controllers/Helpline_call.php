<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Helpline_call extends CI_CONTROLLER {
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
  public function helpline_call_create() {
    $this->load->model('helpline_call_category_model');
    $this->load->model('helpline_call_group_model');
    $this->load->model('helpline_caller_type_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('helpline_resolution_status_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['helpline_call_category'] = $this->helpline_call_category_model->helpline_call_category_get_records();
    $this->data['helpline_call_group'] = $this->helpline_call_group_model->helpline_call_group_get_records();
    $this->data['helpline_caller_type'] = $this->helpline_caller_type_model->helpline_caller_type_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['helpline_resolution_status'] = $this->helpline_resolution_status_model->helpline_resolution_status_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['helpline_call_create'] = $this->helpline_call_model->helpline_call_create();
    $this->data['helpline_call'] = $this->helpline_call_model->helpline_call_get_records();
    $this->load->view('helpline_call/default_grid', $this->data);
  }
  public function helpline_call_update() {
    $this->load->model('helpline_call_category_model');
    $this->load->model('helpline_call_group_model');
    $this->load->model('helpline_caller_type_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('helpline_resolution_status_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['helpline_call_category'] = $this->helpline_call_category_model->helpline_call_category_get_records();
    $this->data['helpline_call_group'] = $this->helpline_call_group_model->helpline_call_group_get_records();
    $this->data['helpline_caller_type'] = $this->helpline_caller_type_model->helpline_caller_type_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['helpline_resolution_status'] = $this->helpline_resolution_status_model->helpline_resolution_status_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['helpline_call_update'] = $this->helpline_call_model->helpline_call_update();
    $this->data['helpline_call'] = $this->helpline_call_model->helpline_call_get_records();
    $this->load->view('helpline_call/default_grid', $this->data);
  }
  public function helpline_call_delete() {
    $this->load->model('helpline_call_category_model');
    $this->load->model('helpline_call_group_model');
    $this->load->model('helpline_caller_type_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('helpline_resolution_status_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['helpline_call_category'] = $this->helpline_call_category_model->helpline_call_category_get_records();
    $this->data['helpline_call_group'] = $this->helpline_call_group_model->helpline_call_group_get_records();
    $this->data['helpline_caller_type'] = $this->helpline_caller_type_model->helpline_caller_type_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['helpline_resolution_status'] = $this->helpline_resolution_status_model->helpline_resolution_status_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['helpline_call_delete'] = $this->helpline_call_model->helpline_call_delete();
    $this->data['helpline_call'] = $this->helpline_call_model->helpline_call_get_records();
    $this->load->view('helpline_call/default_grid', $this->data);
  }
  public function helpline_call_select() {
    $this->load->model('helpline_call_category_model');
    $this->load->model('helpline_call_group_model');
    $this->load->model('helpline_caller_type_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('helpline_resolution_status_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['helpline_call_category'] = $this->helpline_call_category_model->helpline_call_category_get_records();
    $this->data['helpline_call_group'] = $this->helpline_call_group_model->helpline_call_group_get_records();
    $this->data['helpline_caller_type'] = $this->helpline_caller_type_model->helpline_caller_type_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['helpline_resolution_status'] = $this->helpline_resolution_status_model->helpline_resolution_status_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['helpline_call'] = $this->helpline_call_model->helpline_call_get_records();
    $this->load->view('helpline_call/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}