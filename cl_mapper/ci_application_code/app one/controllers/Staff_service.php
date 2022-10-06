<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Staff_service extends CI_CONTROLLER {
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
  public function staff_service_create() {
    $this->data['staff_service_create'] = $this->staff_service_model->staff_service_create();
    $this->data['staff_service'] = $this->staff_service_model->staff_service_get_records();
    $this->load->view('staff_service/default_grid', $this->data);
  }
  public function staff_service_update() {
    $this->data['staff_service_update'] = $this->staff_service_model->staff_service_update();
    $this->data['staff_service'] = $this->staff_service_model->staff_service_get_records();
    $this->load->view('staff_service/default_grid', $this->data);
  }
  public function staff_service_delete() {
    $this->data['staff_service_delete'] = $this->staff_service_model->staff_service_delete();
    $this->data['staff_service'] = $this->staff_service_model->staff_service_get_records();
    $this->load->view('staff_service/default_grid', $this->data);
  }
  public function staff_service_select() {
    $this->data['staff_service'] = $this->staff_service_model->staff_service_get_records();
    $this->load->view('staff_service/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}