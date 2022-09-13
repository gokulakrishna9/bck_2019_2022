<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Staff extends CI_CONTROLLER {
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
  public function staff_create() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('department_model');
    $this->load->model('unit_model');
    $this->load->model('area_model');
    $this->load->model('staff_category_model');
    $this->load->model('staff_role_model');
    $this->load->model('qualification_model');
    $this->load->model('staff_applicant_qualification_master_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['staff_category'] = $this->staff_category_model->staff_category_get_records();
    $this->data['staff_role'] = $this->staff_role_model->staff_role_get_records();
    $this->data['qualification'] = $this->qualification_model->qualification_get_records();
    $this->data['staff_applicant_qualification_master'] = $this->staff_applicant_qualification_master_model->staff_applicant_qualification_master_get_records();
    $this->data['staff_create'] = $this->staff_model->staff_create();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->load->view('staff/default_grid', $this->data);
  }
  public function staff_update() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('department_model');
    $this->load->model('unit_model');
    $this->load->model('area_model');
    $this->load->model('staff_category_model');
    $this->load->model('staff_role_model');
    $this->load->model('qualification_model');
    $this->load->model('staff_applicant_qualification_master_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['staff_category'] = $this->staff_category_model->staff_category_get_records();
    $this->data['staff_role'] = $this->staff_role_model->staff_role_get_records();
    $this->data['qualification'] = $this->qualification_model->qualification_get_records();
    $this->data['staff_applicant_qualification_master'] = $this->staff_applicant_qualification_master_model->staff_applicant_qualification_master_get_records();
    $this->data['staff_update'] = $this->staff_model->staff_update();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->load->view('staff/default_grid', $this->data);
  }
  public function staff_delete() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('department_model');
    $this->load->model('unit_model');
    $this->load->model('area_model');
    $this->load->model('staff_category_model');
    $this->load->model('staff_role_model');
    $this->load->model('qualification_model');
    $this->load->model('staff_applicant_qualification_master_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['staff_category'] = $this->staff_category_model->staff_category_get_records();
    $this->data['staff_role'] = $this->staff_role_model->staff_role_get_records();
    $this->data['qualification'] = $this->qualification_model->qualification_get_records();
    $this->data['staff_applicant_qualification_master'] = $this->staff_applicant_qualification_master_model->staff_applicant_qualification_master_get_records();
    $this->data['staff_delete'] = $this->staff_model->staff_delete();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->load->view('staff/default_grid', $this->data);
  }
  public function staff_select() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('department_model');
    $this->load->model('unit_model');
    $this->load->model('area_model');
    $this->load->model('staff_category_model');
    $this->load->model('staff_role_model');
    $this->load->model('qualification_model');
    $this->load->model('staff_applicant_qualification_master_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['staff_category'] = $this->staff_category_model->staff_category_get_records();
    $this->data['staff_role'] = $this->staff_role_model->staff_role_get_records();
    $this->data['qualification'] = $this->qualification_model->qualification_get_records();
    $this->data['staff_applicant_qualification_master'] = $this->staff_applicant_qualification_master_model->staff_applicant_qualification_master_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->load->view('staff/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}