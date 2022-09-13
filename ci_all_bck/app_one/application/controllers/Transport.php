<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Transport extends CI_CONTROLLER {
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
  public function transport_create() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('staff_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['transport_create'] = $this->transport_model->transport_create();
    $this->data['transport'] = $this->transport_model->transport_get_records();
    $this->load->view('transport/default_grid', $this->data);
  }
  public function transport_update() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('staff_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['transport_update'] = $this->transport_model->transport_update();
    $this->data['transport'] = $this->transport_model->transport_get_records();
    $this->load->view('transport/default_grid', $this->data);
  }
  public function transport_delete() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('staff_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['transport_delete'] = $this->transport_model->transport_delete();
    $this->data['transport'] = $this->transport_model->transport_get_records();
    $this->load->view('transport/default_grid', $this->data);
  }
  public function transport_select() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('staff_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['transport'] = $this->transport_model->transport_get_records();
    $this->load->view('transport/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}