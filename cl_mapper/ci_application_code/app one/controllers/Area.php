<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Area extends CI_CONTROLLER {
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
  public function area_create() {
    $this->load->model('area_types_model');
    $this->load->model('department_model');
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['area_create'] = $this->area_model->area_create();
    $this->data['area'] = $this->area_model->area_get_records();
    $this->load->view('area/default_grid', $this->data);
  }
  public function area_update() {
    $this->load->model('area_types_model');
    $this->load->model('department_model');
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['area_update'] = $this->area_model->area_update();
    $this->data['area'] = $this->area_model->area_get_records();
    $this->load->view('area/default_grid', $this->data);
  }
  public function area_delete() {
    $this->load->model('area_types_model');
    $this->load->model('department_model');
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['area_delete'] = $this->area_model->area_delete();
    $this->data['area'] = $this->area_model->area_get_records();
    $this->load->view('area/default_grid', $this->data);
  }
  public function area_select() {
    $this->load->model('area_types_model');
    $this->load->model('department_model');
    $this->data['area_types'] = $this->area_types_model->area_types_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['area'] = $this->area_model->area_get_records();
    $this->load->view('area/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}