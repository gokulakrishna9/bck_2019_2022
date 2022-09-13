<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Helpline_email extends CI_CONTROLLER {
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
  public function helpline_email_create() {
    $this->load->model('helpline_call_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['helpline_call'] = $this->helpline_call_model->helpline_call_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['helpline_email_create'] = $this->helpline_email_model->helpline_email_create();
    $this->data['helpline_email'] = $this->helpline_email_model->helpline_email_get_records();
    $this->load->view('helpline_email/default_grid', $this->data);
  }
  public function helpline_email_update() {
    $this->load->model('helpline_call_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['helpline_call'] = $this->helpline_call_model->helpline_call_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['helpline_email_update'] = $this->helpline_email_model->helpline_email_update();
    $this->data['helpline_email'] = $this->helpline_email_model->helpline_email_get_records();
    $this->load->view('helpline_email/default_grid', $this->data);
  }
  public function helpline_email_delete() {
    $this->load->model('helpline_call_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['helpline_call'] = $this->helpline_call_model->helpline_call_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['helpline_email_delete'] = $this->helpline_email_model->helpline_email_delete();
    $this->data['helpline_email'] = $this->helpline_email_model->helpline_email_get_records();
    $this->load->view('helpline_email/default_grid', $this->data);
  }
  public function helpline_email_select() {
    $this->load->model('helpline_call_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['helpline_call'] = $this->helpline_call_model->helpline_call_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['helpline_email'] = $this->helpline_email_model->helpline_email_get_records();
    $this->load->view('helpline_email/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}