<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Area_activity extends CI_CONTROLLER {
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
  public function area_activity_create() {
    $this->load->model('area_types_model');
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->data['area_activity_create'] = $this->area_activity_model->area_activity_create();
    $this->data['area_activity'] = $this->area_activity_model->area_activity_get_records();
    $this->load->view('area_activity/default_grid', $this->data);
  }
  public function area_activity_update() {
    $this->load->model('area_types_model');
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->data['area_activity_update'] = $this->area_activity_model->area_activity_update();
    $this->data['area_activity'] = $this->area_activity_model->area_activity_get_records();
    $this->load->view('area_activity/default_grid', $this->data);
  }
  public function area_activity_delete() {
    $this->load->model('area_types_model');
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->data['area_activity_delete'] = $this->area_activity_model->area_activity_delete();
    $this->data['area_activity'] = $this->area_activity_model->area_activity_get_records();
    $this->load->view('area_activity/default_grid', $this->data);
  }
  public function area_activity_select() {
    $this->load->model('area_types_model');
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->data['area_activity'] = $this->area_activity_model->area_activity_get_records();
    $this->load->view('area_activity/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}