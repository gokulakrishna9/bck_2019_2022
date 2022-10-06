<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Ci_sessions extends CI_CONTROLLER {
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
  public function ci_sessions_create() {
    $this->data['ci_sessions_create'] = $this->ci_sessions_model->ci_sessions_create();
    $this->data['ci_sessions'] = $this->ci_sessions_model->ci_sessions_get_records();
    $this->load->view('ci_sessions/default_grid', $this->data);
  }
  public function ci_sessions_update() {
    $this->data['ci_sessions_update'] = $this->ci_sessions_model->ci_sessions_update();
    $this->data['ci_sessions'] = $this->ci_sessions_model->ci_sessions_get_records();
    $this->load->view('ci_sessions/default_grid', $this->data);
  }
  public function ci_sessions_delete() {
    $this->data['ci_sessions_delete'] = $this->ci_sessions_model->ci_sessions_delete();
    $this->data['ci_sessions'] = $this->ci_sessions_model->ci_sessions_get_records();
    $this->load->view('ci_sessions/default_grid', $this->data);
  }
  public function ci_sessions_select() {
    $this->data['ci_sessions'] = $this->ci_sessions_model->ci_sessions_get_records();
    $this->load->view('ci_sessions/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}