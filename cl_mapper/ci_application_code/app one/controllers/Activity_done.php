<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Activity_done extends CI_CONTROLLER {
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
  public function activity_done_create() {
    $this->load->model('facility_activity_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['facility_activity'] = $this->facility_activity_model->facility_activity_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['activity_done_create'] = $this->activity_done_model->activity_done_create();
    $this->data['activity_done'] = $this->activity_done_model->activity_done_get_records();
    $this->load->view('activity_done/default_grid', $this->data);
  }
  public function activity_done_update() {
    $this->load->model('facility_activity_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['facility_activity'] = $this->facility_activity_model->facility_activity_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['activity_done_update'] = $this->activity_done_model->activity_done_update();
    $this->data['activity_done'] = $this->activity_done_model->activity_done_get_records();
    $this->load->view('activity_done/default_grid', $this->data);
  }
  public function activity_done_delete() {
    $this->load->model('facility_activity_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['facility_activity'] = $this->facility_activity_model->facility_activity_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['activity_done_delete'] = $this->activity_done_model->activity_done_delete();
    $this->data['activity_done'] = $this->activity_done_model->activity_done_get_records();
    $this->load->view('activity_done/default_grid', $this->data);
  }
  public function activity_done_select() {
    $this->load->model('facility_activity_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['facility_activity'] = $this->facility_activity_model->facility_activity_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['activity_done'] = $this->activity_done_model->activity_done_get_records();
    $this->load->view('activity_done/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}