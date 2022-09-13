<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Dicom extends CI_CONTROLLER {
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
  public function dicom_create() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('test_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['test'] = $this->test_model->test_get_records();
    $this->data['dicom_create'] = $this->dicom_model->dicom_create();
    $this->data['dicom'] = $this->dicom_model->dicom_get_records();
    $this->load->view('dicom/default_grid', $this->data);
  }
  public function dicom_update() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('test_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['test'] = $this->test_model->test_get_records();
    $this->data['dicom_update'] = $this->dicom_model->dicom_update();
    $this->data['dicom'] = $this->dicom_model->dicom_get_records();
    $this->load->view('dicom/default_grid', $this->data);
  }
  public function dicom_delete() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('test_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['test'] = $this->test_model->test_get_records();
    $this->data['dicom_delete'] = $this->dicom_model->dicom_delete();
    $this->data['dicom'] = $this->dicom_model->dicom_get_records();
    $this->load->view('dicom/default_grid', $this->data);
  }
  public function dicom_select() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('test_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['test'] = $this->test_model->test_get_records();
    $this->data['dicom'] = $this->dicom_model->dicom_get_records();
    $this->load->view('dicom/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}