<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Helpline_call_category extends CI_CONTROLLER {
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
  public function helpline_call_category_create() {
    $this->data['helpline_call_category_create'] = $this->helpline_call_category_model->helpline_call_category_create();
    $this->data['helpline_call_category'] = $this->helpline_call_category_model->helpline_call_category_get_records();
    $this->load->view('helpline_call_category/default_grid', $this->data);
  }
  public function helpline_call_category_update() {
    $this->data['helpline_call_category_update'] = $this->helpline_call_category_model->helpline_call_category_update();
    $this->data['helpline_call_category'] = $this->helpline_call_category_model->helpline_call_category_get_records();
    $this->load->view('helpline_call_category/default_grid', $this->data);
  }
  public function helpline_call_category_delete() {
    $this->data['helpline_call_category_delete'] = $this->helpline_call_category_model->helpline_call_category_delete();
    $this->data['helpline_call_category'] = $this->helpline_call_category_model->helpline_call_category_get_records();
    $this->load->view('helpline_call_category/default_grid', $this->data);
  }
  public function helpline_call_category_select() {
    $this->data['helpline_call_category'] = $this->helpline_call_category_model->helpline_call_category_get_records();
    $this->load->view('helpline_call_category/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}