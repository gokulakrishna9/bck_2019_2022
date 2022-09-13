<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Marital_info extends CI_CONTROLLER {
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
  public function marital_info_create() {
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['marital_info_create'] = $this->marital_info_model->marital_info_create();
    $this->data['marital_info'] = $this->marital_info_model->marital_info_get_records();
    $this->load->view('marital_info/default_grid', $this->data);
  }
  public function marital_info_update() {
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['marital_info_update'] = $this->marital_info_model->marital_info_update();
    $this->data['marital_info'] = $this->marital_info_model->marital_info_get_records();
    $this->load->view('marital_info/default_grid', $this->data);
  }
  public function marital_info_delete() {
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['marital_info_delete'] = $this->marital_info_model->marital_info_delete();
    $this->data['marital_info'] = $this->marital_info_model->marital_info_get_records();
    $this->load->view('marital_info/default_grid', $this->data);
  }
  public function marital_info_select() {
    $this->load->model('bb_external_patient_model');
    $this->load->model('patient_model');
    $this->data['bb_external_patient'] = $this->bb_external_patient_model->bb_external_patient_get_records();
    $this->data['patient'] = $this->patient_model->patient_get_records();
    $this->data['marital_info'] = $this->marital_info_model->marital_info_get_records();
    $this->load->view('marital_info/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}