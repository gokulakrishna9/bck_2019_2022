<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Staff_applicant_qualification extends CI_CONTROLLER {
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
  public function staff_applicant_qualification_create() {
    $this->load->model('staff_applicant_model');
    $this->load->model('qualification_model');
    $this->load->model('staff_applicant_qualification_master_model');
    $this->load->model('staff_applicant_college_model');
    $this->load->model('staff_model');
    $this->data['staff_applicant'] = $this->staff_applicant_model->staff_applicant_get_records();
    $this->data['qualification'] = $this->qualification_model->qualification_get_records();
    $this->data['staff_applicant_qualification_master'] = $this->staff_applicant_qualification_master_model->staff_applicant_qualification_master_get_records();
    $this->data['staff_applicant_college'] = $this->staff_applicant_college_model->staff_applicant_college_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['staff_applicant_qualification_create'] = $this->staff_applicant_qualification_model->staff_applicant_qualification_create();
    $this->data['staff_applicant_qualification'] = $this->staff_applicant_qualification_model->staff_applicant_qualification_get_records();
    $this->load->view('staff_applicant_qualification/default_grid', $this->data);
  }
  public function staff_applicant_qualification_update() {
    $this->load->model('staff_applicant_model');
    $this->load->model('qualification_model');
    $this->load->model('staff_applicant_qualification_master_model');
    $this->load->model('staff_applicant_college_model');
    $this->load->model('staff_model');
    $this->data['staff_applicant'] = $this->staff_applicant_model->staff_applicant_get_records();
    $this->data['qualification'] = $this->qualification_model->qualification_get_records();
    $this->data['staff_applicant_qualification_master'] = $this->staff_applicant_qualification_master_model->staff_applicant_qualification_master_get_records();
    $this->data['staff_applicant_college'] = $this->staff_applicant_college_model->staff_applicant_college_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['staff_applicant_qualification_update'] = $this->staff_applicant_qualification_model->staff_applicant_qualification_update();
    $this->data['staff_applicant_qualification'] = $this->staff_applicant_qualification_model->staff_applicant_qualification_get_records();
    $this->load->view('staff_applicant_qualification/default_grid', $this->data);
  }
  public function staff_applicant_qualification_delete() {
    $this->load->model('staff_applicant_model');
    $this->load->model('qualification_model');
    $this->load->model('staff_applicant_qualification_master_model');
    $this->load->model('staff_applicant_college_model');
    $this->load->model('staff_model');
    $this->data['staff_applicant'] = $this->staff_applicant_model->staff_applicant_get_records();
    $this->data['qualification'] = $this->qualification_model->qualification_get_records();
    $this->data['staff_applicant_qualification_master'] = $this->staff_applicant_qualification_master_model->staff_applicant_qualification_master_get_records();
    $this->data['staff_applicant_college'] = $this->staff_applicant_college_model->staff_applicant_college_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['staff_applicant_qualification_delete'] = $this->staff_applicant_qualification_model->staff_applicant_qualification_delete();
    $this->data['staff_applicant_qualification'] = $this->staff_applicant_qualification_model->staff_applicant_qualification_get_records();
    $this->load->view('staff_applicant_qualification/default_grid', $this->data);
  }
  public function staff_applicant_qualification_select() {
    $this->load->model('staff_applicant_model');
    $this->load->model('qualification_model');
    $this->load->model('staff_applicant_qualification_master_model');
    $this->load->model('staff_applicant_college_model');
    $this->load->model('staff_model');
    $this->data['staff_applicant'] = $this->staff_applicant_model->staff_applicant_get_records();
    $this->data['qualification'] = $this->qualification_model->qualification_get_records();
    $this->data['staff_applicant_qualification_master'] = $this->staff_applicant_qualification_master_model->staff_applicant_qualification_master_get_records();
    $this->data['staff_applicant_college'] = $this->staff_applicant_college_model->staff_applicant_college_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['staff_applicant_qualification'] = $this->staff_applicant_qualification_model->staff_applicant_qualification_get_records();
    $this->load->view('staff_applicant_qualification/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}