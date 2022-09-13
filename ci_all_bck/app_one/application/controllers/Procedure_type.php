<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Procedure_type extends CI_CONTROLLER {
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
  public function procedure_type_create() {
    $this->data['procedure_type_create'] = $this->procedure_type_model->procedure_type_create();
    $this->data['procedure_type'] = $this->procedure_type_model->procedure_type_get_records();
    $this->load->view('procedure_type/default_grid', $this->data);
  }
  public function procedure_type_update() {
    $this->data['procedure_type_update'] = $this->procedure_type_model->procedure_type_update();
    $this->data['procedure_type'] = $this->procedure_type_model->procedure_type_get_records();
    $this->load->view('procedure_type/default_grid', $this->data);
  }
  public function procedure_type_delete() {
    $this->data['procedure_type_delete'] = $this->procedure_type_model->procedure_type_delete();
    $this->data['procedure_type'] = $this->procedure_type_model->procedure_type_get_records();
    $this->load->view('procedure_type/default_grid', $this->data);
  }
  public function procedure_type_select() {
    $this->data['procedure_type'] = $this->procedure_type_model->procedure_type_get_records();
    $this->load->view('procedure_type/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}