<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Attendance extends CI_CONTROLLER {
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
  public function attendance_create() {
    $this->load->model('roaster_model');
    $this->data['roaster'] = $this->roaster_model->roaster_get_records();
    $this->data['attendance_create'] = $this->attendance_model->attendance_create();
    $this->data['attendance'] = $this->attendance_model->attendance_get_records();
    $this->load->view('attendance/default_grid', $this->data);
  }
  public function attendance_update() {
    $this->load->model('roaster_model');
    $this->data['roaster'] = $this->roaster_model->roaster_get_records();
    $this->data['attendance_update'] = $this->attendance_model->attendance_update();
    $this->data['attendance'] = $this->attendance_model->attendance_get_records();
    $this->load->view('attendance/default_grid', $this->data);
  }
  public function attendance_delete() {
    $this->load->model('roaster_model');
    $this->data['roaster'] = $this->roaster_model->roaster_get_records();
    $this->data['attendance_delete'] = $this->attendance_model->attendance_delete();
    $this->data['attendance'] = $this->attendance_model->attendance_get_records();
    $this->load->view('attendance/default_grid', $this->data);
  }
  public function attendance_select() {
    $this->load->model('roaster_model');
    $this->data['roaster'] = $this->roaster_model->roaster_get_records();
    $this->data['attendance'] = $this->attendance_model->attendance_get_records();
    $this->load->view('attendance/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}