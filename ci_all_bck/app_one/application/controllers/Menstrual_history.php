<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Menstrual_history extends CI_CONTROLLER {
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
  public function menstrual_history_create() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['menstrual_history_create'] = $this->menstrual_history_model->menstrual_history_create();
    $this->data['menstrual_history'] = $this->menstrual_history_model->menstrual_history_get_records();
    $this->load->view('menstrual_history/default_grid', $this->data);
  }
  public function menstrual_history_update() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['menstrual_history_update'] = $this->menstrual_history_model->menstrual_history_update();
    $this->data['menstrual_history'] = $this->menstrual_history_model->menstrual_history_get_records();
    $this->load->view('menstrual_history/default_grid', $this->data);
  }
  public function menstrual_history_delete() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['menstrual_history_delete'] = $this->menstrual_history_model->menstrual_history_delete();
    $this->data['menstrual_history'] = $this->menstrual_history_model->menstrual_history_get_records();
    $this->load->view('menstrual_history/default_grid', $this->data);
  }
  public function menstrual_history_select() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['menstrual_history'] = $this->menstrual_history_model->menstrual_history_get_records();
    $this->load->view('menstrual_history/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}