<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Antenatal_visit extends CI_CONTROLLER {
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
  public function antenatal_visit_create() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['antenatal_visit_create'] = $this->antenatal_visit_model->antenatal_visit_create();
    $this->data['antenatal_visit'] = $this->antenatal_visit_model->antenatal_visit_get_records();
    $this->load->view('antenatal_visit/default_grid', $this->data);
  }
  public function antenatal_visit_update() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['antenatal_visit_update'] = $this->antenatal_visit_model->antenatal_visit_update();
    $this->data['antenatal_visit'] = $this->antenatal_visit_model->antenatal_visit_get_records();
    $this->load->view('antenatal_visit/default_grid', $this->data);
  }
  public function antenatal_visit_delete() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['antenatal_visit_delete'] = $this->antenatal_visit_model->antenatal_visit_delete();
    $this->data['antenatal_visit'] = $this->antenatal_visit_model->antenatal_visit_get_records();
    $this->load->view('antenatal_visit/default_grid', $this->data);
  }
  public function antenatal_visit_select() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['antenatal_visit'] = $this->antenatal_visit_model->antenatal_visit_get_records();
    $this->load->view('antenatal_visit/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}