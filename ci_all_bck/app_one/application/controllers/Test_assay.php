<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Test_assay extends CI_CONTROLLER {
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
  public function test_assay_create() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['test_assay_create'] = $this->test_assay_model->test_assay_create();
    $this->data['test_assay'] = $this->test_assay_model->test_assay_get_records();
    $this->load->view('test_assay/default_grid', $this->data);
  }
  public function test_assay_update() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['test_assay_update'] = $this->test_assay_model->test_assay_update();
    $this->data['test_assay'] = $this->test_assay_model->test_assay_get_records();
    $this->load->view('test_assay/default_grid', $this->data);
  }
  public function test_assay_delete() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['test_assay_delete'] = $this->test_assay_model->test_assay_delete();
    $this->data['test_assay'] = $this->test_assay_model->test_assay_get_records();
    $this->load->view('test_assay/default_grid', $this->data);
  }
  public function test_assay_select() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['test_assay'] = $this->test_assay_model->test_assay_get_records();
    $this->load->view('test_assay/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}