<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Icd_code extends CI_CONTROLLER {
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
  public function icd_code_create() {
    $this->data['icd_code_create'] = $this->icd_code_model->icd_code_create();
    $this->data['icd_code'] = $this->icd_code_model->icd_code_get_records();
    $this->load->view('icd_code/default_grid', $this->data);
  }
  public function icd_code_update() {
    $this->data['icd_code_update'] = $this->icd_code_model->icd_code_update();
    $this->data['icd_code'] = $this->icd_code_model->icd_code_get_records();
    $this->load->view('icd_code/default_grid', $this->data);
  }
  public function icd_code_delete() {
    $this->data['icd_code_delete'] = $this->icd_code_model->icd_code_delete();
    $this->data['icd_code'] = $this->icd_code_model->icd_code_get_records();
    $this->load->view('icd_code/default_grid', $this->data);
  }
  public function icd_code_select() {
    $this->data['icd_code'] = $this->icd_code_model->icd_code_get_records();
    $this->load->view('icd_code/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}