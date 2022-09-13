<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Internal_transfer extends CI_CONTROLLER {
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
  public function internal_transfer_create() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('department_model');
    $this->load->model('area_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['internal_transfer_create'] = $this->internal_transfer_model->internal_transfer_create();
    $this->data['internal_transfer'] = $this->internal_transfer_model->internal_transfer_get_records();
    $this->load->view('internal_transfer/default_grid', $this->data);
  }
  public function internal_transfer_update() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('department_model');
    $this->load->model('area_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['internal_transfer_update'] = $this->internal_transfer_model->internal_transfer_update();
    $this->data['internal_transfer'] = $this->internal_transfer_model->internal_transfer_get_records();
    $this->load->view('internal_transfer/default_grid', $this->data);
  }
  public function internal_transfer_delete() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('department_model');
    $this->load->model('area_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['internal_transfer_delete'] = $this->internal_transfer_model->internal_transfer_delete();
    $this->data['internal_transfer'] = $this->internal_transfer_model->internal_transfer_get_records();
    $this->load->view('internal_transfer/default_grid', $this->data);
  }
  public function internal_transfer_select() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('department_model');
    $this->load->model('area_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['internal_transfer'] = $this->internal_transfer_model->internal_transfer_get_records();
    $this->load->view('internal_transfer/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}