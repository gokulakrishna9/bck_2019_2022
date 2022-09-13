<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Test_result_suggestion extends CI_CONTROLLER {
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
  public function test_result_suggestion_create() {
    $this->load->model('test_master_model');
    $this->data['test_master'] = $this->test_master_model->test_master_get_records();
    $this->data['test_result_suggestion_create'] = $this->test_result_suggestion_model->test_result_suggestion_create();
    $this->data['test_result_suggestion'] = $this->test_result_suggestion_model->test_result_suggestion_get_records();
    $this->load->view('test_result_suggestion/default_grid', $this->data);
  }
  public function test_result_suggestion_update() {
    $this->load->model('test_master_model');
    $this->data['test_master'] = $this->test_master_model->test_master_get_records();
    $this->data['test_result_suggestion_update'] = $this->test_result_suggestion_model->test_result_suggestion_update();
    $this->data['test_result_suggestion'] = $this->test_result_suggestion_model->test_result_suggestion_get_records();
    $this->load->view('test_result_suggestion/default_grid', $this->data);
  }
  public function test_result_suggestion_delete() {
    $this->load->model('test_master_model');
    $this->data['test_master'] = $this->test_master_model->test_master_get_records();
    $this->data['test_result_suggestion_delete'] = $this->test_result_suggestion_model->test_result_suggestion_delete();
    $this->data['test_result_suggestion'] = $this->test_result_suggestion_model->test_result_suggestion_get_records();
    $this->load->view('test_result_suggestion/default_grid', $this->data);
  }
  public function test_result_suggestion_select() {
    $this->load->model('test_master_model');
    $this->data['test_master'] = $this->test_master_model->test_master_get_records();
    $this->data['test_result_suggestion'] = $this->test_result_suggestion_model->test_result_suggestion_get_records();
    $this->load->view('test_result_suggestion/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}