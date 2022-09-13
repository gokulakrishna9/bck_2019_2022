<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Occupation extends CI_CONTROLLER {
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
  public function occupation_create() {
    $this->data['occupation_create'] = $this->occupation_model->occupation_create();
    $this->data['occupation'] = $this->occupation_model->occupation_get_records();
    $this->load->view('occupation/default_grid', $this->data);
  }
  public function occupation_update() {
    $this->data['occupation_update'] = $this->occupation_model->occupation_update();
    $this->data['occupation'] = $this->occupation_model->occupation_get_records();
    $this->load->view('occupation/default_grid', $this->data);
  }
  public function occupation_delete() {
    $this->data['occupation_delete'] = $this->occupation_model->occupation_delete();
    $this->data['occupation'] = $this->occupation_model->occupation_get_records();
    $this->load->view('occupation/default_grid', $this->data);
  }
  public function occupation_select() {
    $this->data['occupation'] = $this->occupation_model->occupation_get_records();
    $this->load->view('occupation/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}