<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Unit extends CI_CONTROLLER {
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
  public function unit_create() {
    $this->load->model('department_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['unit_create'] = $this->unit_model->unit_create();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->load->view('unit/default_grid', $this->data);
  }
  public function unit_update() {
    $this->load->model('department_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['unit_update'] = $this->unit_model->unit_update();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->load->view('unit/default_grid', $this->data);
  }
  public function unit_delete() {
    $this->load->model('department_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['unit_delete'] = $this->unit_model->unit_delete();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->load->view('unit/default_grid', $this->data);
  }
  public function unit_select() {
    $this->load->model('department_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->load->view('unit/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}