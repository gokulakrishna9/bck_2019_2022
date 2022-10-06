<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Micro_organism_test extends CI_CONTROLLER {
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
  public function micro_organism_test_create() {
    $this->load->model('micro_organism_model');
    $this->load->model('test_model');
    $this->data['micro_organism'] = $this->micro_organism_model->micro_organism_get_records();
    $this->data['test'] = $this->test_model->test_get_records();
    $this->data['micro_organism_test_create'] = $this->micro_organism_test_model->micro_organism_test_create();
    $this->data['micro_organism_test'] = $this->micro_organism_test_model->micro_organism_test_get_records();
    $this->load->view('micro_organism_test/default_grid', $this->data);
  }
  public function micro_organism_test_update() {
    $this->load->model('micro_organism_model');
    $this->load->model('test_model');
    $this->data['micro_organism'] = $this->micro_organism_model->micro_organism_get_records();
    $this->data['test'] = $this->test_model->test_get_records();
    $this->data['micro_organism_test_update'] = $this->micro_organism_test_model->micro_organism_test_update();
    $this->data['micro_organism_test'] = $this->micro_organism_test_model->micro_organism_test_get_records();
    $this->load->view('micro_organism_test/default_grid', $this->data);
  }
  public function micro_organism_test_delete() {
    $this->load->model('micro_organism_model');
    $this->load->model('test_model');
    $this->data['micro_organism'] = $this->micro_organism_model->micro_organism_get_records();
    $this->data['test'] = $this->test_model->test_get_records();
    $this->data['micro_organism_test_delete'] = $this->micro_organism_test_model->micro_organism_test_delete();
    $this->data['micro_organism_test'] = $this->micro_organism_test_model->micro_organism_test_get_records();
    $this->load->view('micro_organism_test/default_grid', $this->data);
  }
  public function micro_organism_test_select() {
    $this->load->model('micro_organism_model');
    $this->load->model('test_model');
    $this->data['micro_organism'] = $this->micro_organism_model->micro_organism_get_records();
    $this->data['test'] = $this->test_model->test_get_records();
    $this->data['micro_organism_test'] = $this->micro_organism_test_model->micro_organism_test_get_records();
    $this->load->view('micro_organism_test/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}