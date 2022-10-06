<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class User_activity extends CI_CONTROLLER {
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
  public function user_activity_create() {
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['user_activity_create'] = $this->user_activity_model->user_activity_create();
    $this->data['user_activity'] = $this->user_activity_model->user_activity_get_records();
    $this->load->view('user_activity/default_grid', $this->data);
  }
  public function user_activity_update() {
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['user_activity_update'] = $this->user_activity_model->user_activity_update();
    $this->data['user_activity'] = $this->user_activity_model->user_activity_get_records();
    $this->load->view('user_activity/default_grid', $this->data);
  }
  public function user_activity_delete() {
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['user_activity_delete'] = $this->user_activity_model->user_activity_delete();
    $this->data['user_activity'] = $this->user_activity_model->user_activity_get_records();
    $this->load->view('user_activity/default_grid', $this->data);
  }
  public function user_activity_select() {
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['user_activity'] = $this->user_activity_model->user_activity_get_records();
    $this->load->view('user_activity/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}