<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Staff_applicant_college extends CI_CONTROLLER {
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
  public function staff_applicant_college_create() {
    $this->load->model('district_model');
    $this->data['district'] = $this->district_model->district_get_records();
    $this->data['staff_applicant_college_create'] = $this->staff_applicant_college_model->staff_applicant_college_create();
    $this->data['staff_applicant_college'] = $this->staff_applicant_college_model->staff_applicant_college_get_records();
    $this->load->view('staff_applicant_college/default_grid', $this->data);
  }
  public function staff_applicant_college_update() {
    $this->load->model('district_model');
    $this->data['district'] = $this->district_model->district_get_records();
    $this->data['staff_applicant_college_update'] = $this->staff_applicant_college_model->staff_applicant_college_update();
    $this->data['staff_applicant_college'] = $this->staff_applicant_college_model->staff_applicant_college_get_records();
    $this->load->view('staff_applicant_college/default_grid', $this->data);
  }
  public function staff_applicant_college_delete() {
    $this->load->model('district_model');
    $this->data['district'] = $this->district_model->district_get_records();
    $this->data['staff_applicant_college_delete'] = $this->staff_applicant_college_model->staff_applicant_college_delete();
    $this->data['staff_applicant_college'] = $this->staff_applicant_college_model->staff_applicant_college_get_records();
    $this->load->view('staff_applicant_college/default_grid', $this->data);
  }
  public function staff_applicant_college_select() {
    $this->load->model('district_model');
    $this->data['district'] = $this->district_model->district_get_records();
    $this->data['staff_applicant_college'] = $this->staff_applicant_college_model->staff_applicant_college_get_records();
    $this->load->view('staff_applicant_college/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}