<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Default_setting extends CI_CONTROLLER {
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
  public function default_setting_create() {
    $this->data['default_setting_create'] = $this->default_setting_model->default_setting_create();
    $this->data['default_setting'] = $this->default_setting_model->default_setting_get_records();
    $this->load->view('default_setting/default_grid', $this->data);
  }
  public function default_setting_update() {
    $this->data['default_setting_update'] = $this->default_setting_model->default_setting_update();
    $this->data['default_setting'] = $this->default_setting_model->default_setting_get_records();
    $this->load->view('default_setting/default_grid', $this->data);
  }
  public function default_setting_delete() {
    $this->data['default_setting_delete'] = $this->default_setting_model->default_setting_delete();
    $this->data['default_setting'] = $this->default_setting_model->default_setting_get_records();
    $this->load->view('default_setting/default_grid', $this->data);
  }
  public function default_setting_select() {
    $this->data['default_setting'] = $this->default_setting_model->default_setting_get_records();
    $this->load->view('default_setting/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}