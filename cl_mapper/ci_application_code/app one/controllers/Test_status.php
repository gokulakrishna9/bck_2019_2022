<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Test_status extends CI_CONTROLLER {
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
  public function test_status_create() {
    $this->load->model('test_model');
    $this->load->model('test_status_type_model');
    $this->data['test'] = $this->test_model->test_get_records();
    $this->data['test_status_type'] = $this->test_status_type_model->test_status_type_get_records();
    $this->data['test_status_create'] = $this->test_status_model->test_status_create();
    $this->data['test_status'] = $this->test_status_model->test_status_get_records();
    $this->load->view('test_status/default_grid', $this->data);
  }
  public function test_status_update() {
    $this->load->model('test_model');
    $this->load->model('test_status_type_model');
    $this->data['test'] = $this->test_model->test_get_records();
    $this->data['test_status_type'] = $this->test_status_type_model->test_status_type_get_records();
    $this->data['test_status_update'] = $this->test_status_model->test_status_update();
    $this->data['test_status'] = $this->test_status_model->test_status_get_records();
    $this->load->view('test_status/default_grid', $this->data);
  }
  public function test_status_delete() {
    $this->load->model('test_model');
    $this->load->model('test_status_type_model');
    $this->data['test'] = $this->test_model->test_get_records();
    $this->data['test_status_type'] = $this->test_status_type_model->test_status_type_get_records();
    $this->data['test_status_delete'] = $this->test_status_model->test_status_delete();
    $this->data['test_status'] = $this->test_status_model->test_status_get_records();
    $this->load->view('test_status/default_grid', $this->data);
  }
  public function test_status_select() {
    $this->load->model('test_model');
    $this->load->model('test_status_type_model');
    $this->data['test'] = $this->test_model->test_get_records();
    $this->data['test_status_type'] = $this->test_status_type_model->test_status_type_get_records();
    $this->data['test_status'] = $this->test_status_model->test_status_get_records();
    $this->load->view('test_status/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}