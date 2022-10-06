<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Visit_name extends CI_CONTROLLER {
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
  public function visit_name_create() {
    $this->data['visit_name_create'] = $this->visit_name_model->visit_name_create();
    $this->data['visit_name'] = $this->visit_name_model->visit_name_get_records();
    $this->load->view('visit_name/default_grid', $this->data);
  }
  public function visit_name_update() {
    $this->data['visit_name_update'] = $this->visit_name_model->visit_name_update();
    $this->data['visit_name'] = $this->visit_name_model->visit_name_get_records();
    $this->load->view('visit_name/default_grid', $this->data);
  }
  public function visit_name_delete() {
    $this->data['visit_name_delete'] = $this->visit_name_model->visit_name_delete();
    $this->data['visit_name'] = $this->visit_name_model->visit_name_get_records();
    $this->load->view('visit_name/default_grid', $this->data);
  }
  public function visit_name_select() {
    $this->data['visit_name'] = $this->visit_name_model->visit_name_get_records();
    $this->load->view('visit_name/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}