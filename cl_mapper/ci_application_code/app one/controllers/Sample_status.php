<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Sample_status extends CI_CONTROLLER {
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
  public function sample_status_create() {
    $this->data['sample_status_create'] = $this->sample_status_model->sample_status_create();
    $this->data['sample_status'] = $this->sample_status_model->sample_status_get_records();
    $this->load->view('sample_status/default_grid', $this->data);
  }
  public function sample_status_update() {
    $this->data['sample_status_update'] = $this->sample_status_model->sample_status_update();
    $this->data['sample_status'] = $this->sample_status_model->sample_status_get_records();
    $this->load->view('sample_status/default_grid', $this->data);
  }
  public function sample_status_delete() {
    $this->data['sample_status_delete'] = $this->sample_status_model->sample_status_delete();
    $this->data['sample_status'] = $this->sample_status_model->sample_status_get_records();
    $this->load->view('sample_status/default_grid', $this->data);
  }
  public function sample_status_select() {
    $this->data['sample_status'] = $this->sample_status_model->sample_status_get_records();
    $this->load->view('sample_status/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}