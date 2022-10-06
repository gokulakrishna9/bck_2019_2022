<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Procedure extends CI_CONTROLLER {
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
  public function procedure_create() {
    $this->load->model('procedure_type_model');
    $this->data['procedure_type'] = $this->procedure_type_model->procedure_type_get_records();
    $this->data['procedure_create'] = $this->procedure_model->procedure_create();
    $this->data['procedure'] = $this->procedure_model->procedure_get_records();
    $this->load->view('procedure/default_grid', $this->data);
  }
  public function procedure_update() {
    $this->load->model('procedure_type_model');
    $this->data['procedure_type'] = $this->procedure_type_model->procedure_type_get_records();
    $this->data['procedure_update'] = $this->procedure_model->procedure_update();
    $this->data['procedure'] = $this->procedure_model->procedure_get_records();
    $this->load->view('procedure/default_grid', $this->data);
  }
  public function procedure_delete() {
    $this->load->model('procedure_type_model');
    $this->data['procedure_type'] = $this->procedure_type_model->procedure_type_get_records();
    $this->data['procedure_delete'] = $this->procedure_model->procedure_delete();
    $this->data['procedure'] = $this->procedure_model->procedure_get_records();
    $this->load->view('procedure/default_grid', $this->data);
  }
  public function procedure_select() {
    $this->load->model('procedure_type_model');
    $this->data['procedure_type'] = $this->procedure_type_model->procedure_type_get_records();
    $this->data['procedure'] = $this->procedure_model->procedure_get_records();
    $this->load->view('procedure/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}