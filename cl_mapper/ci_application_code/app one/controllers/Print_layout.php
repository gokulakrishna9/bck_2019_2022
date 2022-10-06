<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Print_layout extends CI_CONTROLLER {
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
  public function print_layout_create() {
    $this->data['print_layout_create'] = $this->print_layout_model->print_layout_create();
    $this->data['print_layout'] = $this->print_layout_model->print_layout_get_records();
    $this->load->view('print_layout/default_grid', $this->data);
  }
  public function print_layout_update() {
    $this->data['print_layout_update'] = $this->print_layout_model->print_layout_update();
    $this->data['print_layout'] = $this->print_layout_model->print_layout_get_records();
    $this->load->view('print_layout/default_grid', $this->data);
  }
  public function print_layout_delete() {
    $this->data['print_layout_delete'] = $this->print_layout_model->print_layout_delete();
    $this->data['print_layout'] = $this->print_layout_model->print_layout_get_records();
    $this->load->view('print_layout/default_grid', $this->data);
  }
  public function print_layout_select() {
    $this->data['print_layout'] = $this->print_layout_model->print_layout_get_records();
    $this->load->view('print_layout/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}