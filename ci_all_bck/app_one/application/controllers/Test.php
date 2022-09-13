<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Test extends CI_CONTROLLER {
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
  public function test_create() {
    $this->load->model('test_order_model');
    $this->load->model('test_sample_model');
    $this->load->model('test_master_model');
    $this->load->model('test_group_model');
    $this->data['test_order'] = $this->test_order_model->test_order_get_records();
    $this->data['test_sample'] = $this->test_sample_model->test_sample_get_records();
    $this->data['test_master'] = $this->test_master_model->test_master_get_records();
    $this->data['test_group'] = $this->test_group_model->test_group_get_records();
    $this->data['test_create'] = $this->test_model->test_create();
    $this->data['test'] = $this->test_model->test_get_records();
    $this->load->view('test/default_grid', $this->data);
  }
  public function test_update() {
    $this->load->model('test_order_model');
    $this->load->model('test_sample_model');
    $this->load->model('test_master_model');
    $this->load->model('test_group_model');
    $this->data['test_order'] = $this->test_order_model->test_order_get_records();
    $this->data['test_sample'] = $this->test_sample_model->test_sample_get_records();
    $this->data['test_master'] = $this->test_master_model->test_master_get_records();
    $this->data['test_group'] = $this->test_group_model->test_group_get_records();
    $this->data['test_update'] = $this->test_model->test_update();
    $this->data['test'] = $this->test_model->test_get_records();
    $this->load->view('test/default_grid', $this->data);
  }
  public function test_delete() {
    $this->load->model('test_order_model');
    $this->load->model('test_sample_model');
    $this->load->model('test_master_model');
    $this->load->model('test_group_model');
    $this->data['test_order'] = $this->test_order_model->test_order_get_records();
    $this->data['test_sample'] = $this->test_sample_model->test_sample_get_records();
    $this->data['test_master'] = $this->test_master_model->test_master_get_records();
    $this->data['test_group'] = $this->test_group_model->test_group_get_records();
    $this->data['test_delete'] = $this->test_model->test_delete();
    $this->data['test'] = $this->test_model->test_get_records();
    $this->load->view('test/default_grid', $this->data);
  }
  public function test_select() {
    $this->load->model('test_order_model');
    $this->load->model('test_sample_model');
    $this->load->model('test_master_model');
    $this->load->model('test_group_model');
    $this->data['test_order'] = $this->test_order_model->test_order_get_records();
    $this->data['test_sample'] = $this->test_sample_model->test_sample_get_records();
    $this->data['test_master'] = $this->test_master_model->test_master_get_records();
    $this->data['test_group'] = $this->test_group_model->test_group_get_records();
    $this->data['test'] = $this->test_model->test_get_records();
    $this->load->view('test/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}