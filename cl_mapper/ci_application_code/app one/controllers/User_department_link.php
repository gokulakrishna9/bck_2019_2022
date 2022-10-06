<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class User_department_link extends CI_CONTROLLER {
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
  public function user_department_link_create() {
    $this->load->model('department_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['user_department_link_create'] = $this->user_department_link_model->user_department_link_create();
    $this->data['user_department_link'] = $this->user_department_link_model->user_department_link_get_records();
    $this->load->view('user_department_link/default_grid', $this->data);
  }
  public function user_department_link_update() {
    $this->load->model('department_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['user_department_link_update'] = $this->user_department_link_model->user_department_link_update();
    $this->data['user_department_link'] = $this->user_department_link_model->user_department_link_get_records();
    $this->load->view('user_department_link/default_grid', $this->data);
  }
  public function user_department_link_delete() {
    $this->load->model('department_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['user_department_link_delete'] = $this->user_department_link_model->user_department_link_delete();
    $this->data['user_department_link'] = $this->user_department_link_model->user_department_link_get_records();
    $this->load->view('user_department_link/default_grid', $this->data);
  }
  public function user_department_link_select() {
    $this->load->model('department_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['user_department_link'] = $this->user_department_link_model->user_department_link_get_records();
    $this->load->view('user_department_link/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}