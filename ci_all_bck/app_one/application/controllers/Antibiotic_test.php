<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Antibiotic_test extends CI_CONTROLLER {
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
  public function antibiotic_test_create() {
    $this->load->model('antibiotic_model');
    $this->load->model('micro_organism_test_model');
    $this->data['antibiotic'] = $this->antibiotic_model->antibiotic_get_records();
    $this->data['micro_organism_test'] = $this->micro_organism_test_model->micro_organism_test_get_records();
    $this->data['antibiotic_test_create'] = $this->antibiotic_test_model->antibiotic_test_create();
    $this->data['antibiotic_test'] = $this->antibiotic_test_model->antibiotic_test_get_records();
    $this->load->view('antibiotic_test/default_grid', $this->data);
  }
  public function antibiotic_test_update() {
    $this->load->model('antibiotic_model');
    $this->load->model('micro_organism_test_model');
    $this->data['antibiotic'] = $this->antibiotic_model->antibiotic_get_records();
    $this->data['micro_organism_test'] = $this->micro_organism_test_model->micro_organism_test_get_records();
    $this->data['antibiotic_test_update'] = $this->antibiotic_test_model->antibiotic_test_update();
    $this->data['antibiotic_test'] = $this->antibiotic_test_model->antibiotic_test_get_records();
    $this->load->view('antibiotic_test/default_grid', $this->data);
  }
  public function antibiotic_test_delete() {
    $this->load->model('antibiotic_model');
    $this->load->model('micro_organism_test_model');
    $this->data['antibiotic'] = $this->antibiotic_model->antibiotic_get_records();
    $this->data['micro_organism_test'] = $this->micro_organism_test_model->micro_organism_test_get_records();
    $this->data['antibiotic_test_delete'] = $this->antibiotic_test_model->antibiotic_test_delete();
    $this->data['antibiotic_test'] = $this->antibiotic_test_model->antibiotic_test_get_records();
    $this->load->view('antibiotic_test/default_grid', $this->data);
  }
  public function antibiotic_test_select() {
    $this->load->model('antibiotic_model');
    $this->load->model('micro_organism_test_model');
    $this->data['antibiotic'] = $this->antibiotic_model->antibiotic_get_records();
    $this->data['micro_organism_test'] = $this->micro_organism_test_model->micro_organism_test_get_records();
    $this->data['antibiotic_test'] = $this->antibiotic_test_model->antibiotic_test_get_records();
    $this->load->view('antibiotic_test/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}