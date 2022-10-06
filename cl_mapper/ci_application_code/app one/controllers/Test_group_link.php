<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Test_group_link extends CI_CONTROLLER {
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
  public function test_group_link_create() {
    $this->load->model('test_group_model');
    $this->load->model('test_master_model');
    $this->data['test_group'] = $this->test_group_model->test_group_get_records();
    $this->data['test_master'] = $this->test_master_model->test_master_get_records();
    $this->data['test_group_link_create'] = $this->test_group_link_model->test_group_link_create();
    $this->data['test_group_link'] = $this->test_group_link_model->test_group_link_get_records();
    $this->load->view('test_group_link/default_grid', $this->data);
  }
  public function test_group_link_update() {
    $this->load->model('test_group_model');
    $this->load->model('test_master_model');
    $this->data['test_group'] = $this->test_group_model->test_group_get_records();
    $this->data['test_master'] = $this->test_master_model->test_master_get_records();
    $this->data['test_group_link_update'] = $this->test_group_link_model->test_group_link_update();
    $this->data['test_group_link'] = $this->test_group_link_model->test_group_link_get_records();
    $this->load->view('test_group_link/default_grid', $this->data);
  }
  public function test_group_link_delete() {
    $this->load->model('test_group_model');
    $this->load->model('test_master_model');
    $this->data['test_group'] = $this->test_group_model->test_group_get_records();
    $this->data['test_master'] = $this->test_master_model->test_master_get_records();
    $this->data['test_group_link_delete'] = $this->test_group_link_model->test_group_link_delete();
    $this->data['test_group_link'] = $this->test_group_link_model->test_group_link_get_records();
    $this->load->view('test_group_link/default_grid', $this->data);
  }
  public function test_group_link_select() {
    $this->load->model('test_group_model');
    $this->load->model('test_master_model');
    $this->data['test_group'] = $this->test_group_model->test_group_get_records();
    $this->data['test_master'] = $this->test_master_model->test_master_get_records();
    $this->data['test_group_link'] = $this->test_group_link_model->test_group_link_get_records();
    $this->load->view('test_group_link/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}