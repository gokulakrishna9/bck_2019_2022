<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Staff_category extends CI_CONTROLLER {
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
  public function staff_category_create() {
    $this->data['staff_category_create'] = $this->staff_category_model->staff_category_create();
    $this->data['staff_category'] = $this->staff_category_model->staff_category_get_records();
    $this->load->view('staff_category/default_grid', $this->data);
  }
  public function staff_category_update() {
    $this->data['staff_category_update'] = $this->staff_category_model->staff_category_update();
    $this->data['staff_category'] = $this->staff_category_model->staff_category_get_records();
    $this->load->view('staff_category/default_grid', $this->data);
  }
  public function staff_category_delete() {
    $this->data['staff_category_delete'] = $this->staff_category_model->staff_category_delete();
    $this->data['staff_category'] = $this->staff_category_model->staff_category_get_records();
    $this->load->view('staff_category/default_grid', $this->data);
  }
  public function staff_category_select() {
    $this->data['staff_category'] = $this->staff_category_model->staff_category_get_records();
    $this->load->view('staff_category/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}