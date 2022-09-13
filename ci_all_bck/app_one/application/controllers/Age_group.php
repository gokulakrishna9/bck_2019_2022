<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Age_group extends CI_CONTROLLER {
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
  public function age_group_create() {
    $this->data['age_group_create'] = $this->age_group_model->age_group_create();
    $this->data['age_group'] = $this->age_group_model->age_group_get_records();
    $this->load->view('age_group/default_grid', $this->data);
  }
  public function age_group_update() {
    $this->data['age_group_update'] = $this->age_group_model->age_group_update();
    $this->data['age_group'] = $this->age_group_model->age_group_get_records();
    $this->load->view('age_group/default_grid', $this->data);
  }
  public function age_group_delete() {
    $this->data['age_group_delete'] = $this->age_group_model->age_group_delete();
    $this->data['age_group'] = $this->age_group_model->age_group_get_records();
    $this->load->view('age_group/default_grid', $this->data);
  }
  public function age_group_select() {
    $this->data['age_group'] = $this->age_group_model->age_group_get_records();
    $this->load->view('age_group/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}