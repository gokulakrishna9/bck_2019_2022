<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Test_area extends CI_CONTROLLER {
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
  public function test_area_create() {
    $this->load->model('department_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['test_area_create'] = $this->test_area_model->test_area_create();
    $this->data['test_area'] = $this->test_area_model->test_area_get_records();
    $this->load->view('test_area/default_grid', $this->data);
  }
  public function test_area_update() {
    $this->load->model('department_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['test_area_update'] = $this->test_area_model->test_area_update();
    $this->data['test_area'] = $this->test_area_model->test_area_get_records();
    $this->load->view('test_area/default_grid', $this->data);
  }
  public function test_area_delete() {
    $this->load->model('department_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['test_area_delete'] = $this->test_area_model->test_area_delete();
    $this->data['test_area'] = $this->test_area_model->test_area_get_records();
    $this->load->view('test_area/default_grid', $this->data);
  }
  public function test_area_select() {
    $this->load->model('department_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['test_area'] = $this->test_area_model->test_area_get_records();
    $this->load->view('test_area/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}