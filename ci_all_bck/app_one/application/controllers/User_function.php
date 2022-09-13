<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class User_function extends CI_CONTROLLER {
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
  public function user_function_create() {
    $this->data['user_function_create'] = $this->user_function_model->user_function_create();
    $this->data['user_function'] = $this->user_function_model->user_function_get_records();
    $this->load->view('user_function/default_grid', $this->data);
  }
  public function user_function_update() {
    $this->data['user_function_update'] = $this->user_function_model->user_function_update();
    $this->data['user_function'] = $this->user_function_model->user_function_get_records();
    $this->load->view('user_function/default_grid', $this->data);
  }
  public function user_function_delete() {
    $this->data['user_function_delete'] = $this->user_function_model->user_function_delete();
    $this->data['user_function'] = $this->user_function_model->user_function_get_records();
    $this->load->view('user_function/default_grid', $this->data);
  }
  public function user_function_select() {
    $this->data['user_function'] = $this->user_function_model->user_function_get_records();
    $this->load->view('user_function/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}