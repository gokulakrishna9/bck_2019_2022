<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class List_department extends CI_CONTROLLER {
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
  public function list_department_create() {
    $this->data['list_department_create'] = $this->list_department_model->list_department_create();
    $this->data['list_department'] = $this->list_department_model->list_department_get_records();
    $this->load->view('list_department/default_grid', $this->data);
  }
  public function list_department_update() {
    $this->data['list_department_update'] = $this->list_department_model->list_department_update();
    $this->data['list_department'] = $this->list_department_model->list_department_get_records();
    $this->load->view('list_department/default_grid', $this->data);
  }
  public function list_department_delete() {
    $this->data['list_department_delete'] = $this->list_department_model->list_department_delete();
    $this->data['list_department'] = $this->list_department_model->list_department_get_records();
    $this->load->view('list_department/default_grid', $this->data);
  }
  public function list_department_select() {
    $this->data['list_department'] = $this->list_department_model->list_department_get_records();
    $this->load->view('list_department/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}