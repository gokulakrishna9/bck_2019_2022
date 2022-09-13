<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class User extends CI_CONTROLLER {
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
  public function user_create() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['user_create'] = $this->user_model->user_create();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->load->view('user/default_grid', $this->data);
  }
  public function user_update() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['user_update'] = $this->user_model->user_update();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->load->view('user/default_grid', $this->data);
  }
  public function user_delete() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['user_delete'] = $this->user_model->user_delete();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->load->view('user/default_grid', $this->data);
  }
  public function user_select() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->load->view('user/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}