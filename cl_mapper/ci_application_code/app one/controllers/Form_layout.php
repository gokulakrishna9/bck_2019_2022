<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Form_layout extends CI_CONTROLLER {
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
  public function form_layout_create() {
    $this->load->model('form_model');
    $this->data['form'] = $this->form_model->form_get_records();
    $this->data['form_layout_create'] = $this->form_layout_model->form_layout_create();
    $this->data['form_layout'] = $this->form_layout_model->form_layout_get_records();
    $this->load->view('form_layout/default_grid', $this->data);
  }
  public function form_layout_update() {
    $this->load->model('form_model');
    $this->data['form'] = $this->form_model->form_get_records();
    $this->data['form_layout_update'] = $this->form_layout_model->form_layout_update();
    $this->data['form_layout'] = $this->form_layout_model->form_layout_get_records();
    $this->load->view('form_layout/default_grid', $this->data);
  }
  public function form_layout_delete() {
    $this->load->model('form_model');
    $this->data['form'] = $this->form_model->form_get_records();
    $this->data['form_layout_delete'] = $this->form_layout_model->form_layout_delete();
    $this->data['form_layout'] = $this->form_layout_model->form_layout_get_records();
    $this->load->view('form_layout/default_grid', $this->data);
  }
  public function form_layout_select() {
    $this->load->model('form_model');
    $this->data['form'] = $this->form_model->form_get_records();
    $this->data['form_layout'] = $this->form_layout_model->form_layout_get_records();
    $this->load->view('form_layout/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}