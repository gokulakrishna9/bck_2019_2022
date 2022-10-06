<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Helpline_receiver extends CI_CONTROLLER {
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
  public function helpline_receiver_create() {
    $this->data['helpline_receiver_create'] = $this->helpline_receiver_model->helpline_receiver_create();
    $this->data['helpline_receiver'] = $this->helpline_receiver_model->helpline_receiver_get_records();
    $this->load->view('helpline_receiver/default_grid', $this->data);
  }
  public function helpline_receiver_update() {
    $this->data['helpline_receiver_update'] = $this->helpline_receiver_model->helpline_receiver_update();
    $this->data['helpline_receiver'] = $this->helpline_receiver_model->helpline_receiver_get_records();
    $this->load->view('helpline_receiver/default_grid', $this->data);
  }
  public function helpline_receiver_delete() {
    $this->data['helpline_receiver_delete'] = $this->helpline_receiver_model->helpline_receiver_delete();
    $this->data['helpline_receiver'] = $this->helpline_receiver_model->helpline_receiver_get_records();
    $this->load->view('helpline_receiver/default_grid', $this->data);
  }
  public function helpline_receiver_select() {
    $this->data['helpline_receiver'] = $this->helpline_receiver_model->helpline_receiver_get_records();
    $this->load->view('helpline_receiver/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}