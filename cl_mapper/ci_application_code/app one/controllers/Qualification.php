<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Qualification extends CI_CONTROLLER {
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
  public function qualification_create() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['qualification_create'] = $this->qualification_model->qualification_create();
    $this->data['qualification'] = $this->qualification_model->qualification_get_records();
    $this->load->view('qualification/default_grid', $this->data);
  }
  public function qualification_update() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['qualification_update'] = $this->qualification_model->qualification_update();
    $this->data['qualification'] = $this->qualification_model->qualification_get_records();
    $this->load->view('qualification/default_grid', $this->data);
  }
  public function qualification_delete() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['qualification_delete'] = $this->qualification_model->qualification_delete();
    $this->data['qualification'] = $this->qualification_model->qualification_get_records();
    $this->load->view('qualification/default_grid', $this->data);
  }
  public function qualification_select() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['qualification'] = $this->qualification_model->qualification_get_records();
    $this->load->view('qualification/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}