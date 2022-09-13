<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Procedure_plan extends CI_CONTROLLER {
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
  public function procedure_plan_create() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('procedure_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['procedure'] = $this->procedure_model->procedure_get_records();
    $this->data['procedure_plan_create'] = $this->procedure_plan_model->procedure_plan_create();
    $this->data['procedure_plan'] = $this->procedure_plan_model->procedure_plan_get_records();
    $this->load->view('procedure_plan/default_grid', $this->data);
  }
  public function procedure_plan_update() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('procedure_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['procedure'] = $this->procedure_model->procedure_get_records();
    $this->data['procedure_plan_update'] = $this->procedure_plan_model->procedure_plan_update();
    $this->data['procedure_plan'] = $this->procedure_plan_model->procedure_plan_get_records();
    $this->load->view('procedure_plan/default_grid', $this->data);
  }
  public function procedure_plan_delete() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('procedure_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['procedure'] = $this->procedure_model->procedure_get_records();
    $this->data['procedure_plan_delete'] = $this->procedure_plan_model->procedure_plan_delete();
    $this->data['procedure_plan'] = $this->procedure_plan_model->procedure_plan_get_records();
    $this->load->view('procedure_plan/default_grid', $this->data);
  }
  public function procedure_plan_select() {
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->load->model('procedure_model');
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['procedure'] = $this->procedure_model->procedure_get_records();
    $this->data['procedure_plan'] = $this->procedure_plan_model->procedure_plan_get_records();
    $this->load->view('procedure_plan/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}