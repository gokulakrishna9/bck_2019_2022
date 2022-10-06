<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Insurance extends CI_CONTROLLER {
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
  public function insurance_create() {
    $this->data['insurance_create'] = $this->insurance_model->insurance_create();
    $this->data['insurance'] = $this->insurance_model->insurance_get_records();
    $this->load->view('insurance/default_grid', $this->data);
  }
  public function insurance_update() {
    $this->data['insurance_update'] = $this->insurance_model->insurance_update();
    $this->data['insurance'] = $this->insurance_model->insurance_get_records();
    $this->load->view('insurance/default_grid', $this->data);
  }
  public function insurance_delete() {
    $this->data['insurance_delete'] = $this->insurance_model->insurance_delete();
    $this->data['insurance'] = $this->insurance_model->insurance_get_records();
    $this->load->view('insurance/default_grid', $this->data);
  }
  public function insurance_select() {
    $this->data['insurance'] = $this->insurance_model->insurance_get_records();
    $this->load->view('insurance/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}