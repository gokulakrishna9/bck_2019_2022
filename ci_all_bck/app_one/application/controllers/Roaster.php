<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Roaster extends CI_CONTROLLER {
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
  public function roaster_create() {
    $this->load->model('staff_model');
    $this->load->model('shift_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['shift'] = $this->shift_model->shift_get_records();
    $this->data['roaster_create'] = $this->roaster_model->roaster_create();
    $this->data['roaster'] = $this->roaster_model->roaster_get_records();
    $this->load->view('roaster/default_grid', $this->data);
  }
  public function roaster_update() {
    $this->load->model('staff_model');
    $this->load->model('shift_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['shift'] = $this->shift_model->shift_get_records();
    $this->data['roaster_update'] = $this->roaster_model->roaster_update();
    $this->data['roaster'] = $this->roaster_model->roaster_get_records();
    $this->load->view('roaster/default_grid', $this->data);
  }
  public function roaster_delete() {
    $this->load->model('staff_model');
    $this->load->model('shift_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['shift'] = $this->shift_model->shift_get_records();
    $this->data['roaster_delete'] = $this->roaster_model->roaster_delete();
    $this->data['roaster'] = $this->roaster_model->roaster_get_records();
    $this->load->view('roaster/default_grid', $this->data);
  }
  public function roaster_select() {
    $this->load->model('staff_model');
    $this->load->model('shift_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['shift'] = $this->shift_model->shift_get_records();
    $this->data['roaster'] = $this->roaster_model->roaster_get_records();
    $this->load->view('roaster/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}