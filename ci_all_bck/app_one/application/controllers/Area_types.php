<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Area_types extends CI_CONTROLLER {
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
  public function area_types_create() {
    $this->data['area_types_create'] = $this->area_types_model->area_types_create();
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->load->view('area_types/default_grid', $this->data);
  }
  public function area_types_update() {
    $this->data['area_types_update'] = $this->area_types_model->area_types_update();
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->load->view('area_types/default_grid', $this->data);
  }
  public function area_types_delete() {
    $this->data['area_types_delete'] = $this->area_types_model->area_types_delete();
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->load->view('area_types/default_grid', $this->data);
  }
  public function area_types_select() {
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->load->view('area_types/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}