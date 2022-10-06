<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Test_sample extends CI_CONTROLLER {
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
  public function test_sample_create() {
    $this->load->model('test_order_model');
    $this->load->model('sample_status_model');
    $this->load->model('specimen_type_model');
    $this->data['test_order'] = $this->test_order_model->test_order_get_records();
    $this->data['sample_status'] = $this->sample_status_model->sample_status_get_records();
    $this->data['specimen_type'] = $this->specimen_type_model->specimen_type_get_records();
    $this->data['test_sample_create'] = $this->test_sample_model->test_sample_create();
    $this->data['test_sample'] = $this->test_sample_model->test_sample_get_records();
    $this->load->view('test_sample/default_grid', $this->data);
  }
  public function test_sample_update() {
    $this->load->model('test_order_model');
    $this->load->model('sample_status_model');
    $this->load->model('specimen_type_model');
    $this->data['test_order'] = $this->test_order_model->test_order_get_records();
    $this->data['sample_status'] = $this->sample_status_model->sample_status_get_records();
    $this->data['specimen_type'] = $this->specimen_type_model->specimen_type_get_records();
    $this->data['test_sample_update'] = $this->test_sample_model->test_sample_update();
    $this->data['test_sample'] = $this->test_sample_model->test_sample_get_records();
    $this->load->view('test_sample/default_grid', $this->data);
  }
  public function test_sample_delete() {
    $this->load->model('test_order_model');
    $this->load->model('sample_status_model');
    $this->load->model('specimen_type_model');
    $this->data['test_order'] = $this->test_order_model->test_order_get_records();
    $this->data['sample_status'] = $this->sample_status_model->sample_status_get_records();
    $this->data['specimen_type'] = $this->specimen_type_model->specimen_type_get_records();
    $this->data['test_sample_delete'] = $this->test_sample_model->test_sample_delete();
    $this->data['test_sample'] = $this->test_sample_model->test_sample_get_records();
    $this->load->view('test_sample/default_grid', $this->data);
  }
  public function test_sample_select() {
    $this->load->model('test_order_model');
    $this->load->model('sample_status_model');
    $this->load->model('specimen_type_model');
    $this->data['test_order'] = $this->test_order_model->test_order_get_records();
    $this->data['sample_status'] = $this->sample_status_model->sample_status_get_records();
    $this->data['specimen_type'] = $this->specimen_type_model->specimen_type_get_records();
    $this->data['test_sample'] = $this->test_sample_model->test_sample_get_records();
    $this->load->view('test_sample/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}