<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Helpline_call_group extends CI_CONTROLLER {
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
  public function helpline_call_group_create() {
    $this->data['helpline_call_group_create'] = $this->helpline_call_group_model->helpline_call_group_create();
    $this->data['helpline_call_group'] = $this->helpline_call_group_model->helpline_call_group_get_records();
    $this->load->view('helpline_call_group/default_grid', $this->data);
  }
  public function helpline_call_group_update() {
    $this->data['helpline_call_group_update'] = $this->helpline_call_group_model->helpline_call_group_update();
    $this->data['helpline_call_group'] = $this->helpline_call_group_model->helpline_call_group_get_records();
    $this->load->view('helpline_call_group/default_grid', $this->data);
  }
  public function helpline_call_group_delete() {
    $this->data['helpline_call_group_delete'] = $this->helpline_call_group_model->helpline_call_group_delete();
    $this->data['helpline_call_group'] = $this->helpline_call_group_model->helpline_call_group_get_records();
    $this->load->view('helpline_call_group/default_grid', $this->data);
  }
  public function helpline_call_group_select() {
    $this->data['helpline_call_group'] = $this->helpline_call_group_model->helpline_call_group_get_records();
    $this->load->view('helpline_call_group/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}