<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Physical_function_link extends CI_CONTROLLER {
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
  public function physical_function_link_create() {
    $this->data['physical_function_link_create'] = $this->physical_function_link_model->physical_function_link_create();
    $this->data['physical_function_link'] = $this->physical_function_link_model->physical_function_link_get_records();
    $this->load->view('physical_function_link/default_grid', $this->data);
  }
  public function physical_function_link_update() {
    $this->data['physical_function_link_update'] = $this->physical_function_link_model->physical_function_link_update();
    $this->data['physical_function_link'] = $this->physical_function_link_model->physical_function_link_get_records();
    $this->load->view('physical_function_link/default_grid', $this->data);
  }
  public function physical_function_link_delete() {
    $this->data['physical_function_link_delete'] = $this->physical_function_link_model->physical_function_link_delete();
    $this->data['physical_function_link'] = $this->physical_function_link_model->physical_function_link_get_records();
    $this->load->view('physical_function_link/default_grid', $this->data);
  }
  public function physical_function_link_select() {
    $this->data['physical_function_link'] = $this->physical_function_link_model->physical_function_link_get_records();
    $this->load->view('physical_function_link/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}