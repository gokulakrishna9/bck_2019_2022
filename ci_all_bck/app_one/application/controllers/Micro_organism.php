<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Micro_organism extends CI_CONTROLLER {
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
  public function micro_organism_create() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['micro_organism_create'] = $this->micro_organism_model->micro_organism_create();
    $this->data['micro_organism'] = $this->micro_organism_model->micro_organism_get_records();
    $this->load->view('micro_organism/default_grid', $this->data);
  }
  public function micro_organism_update() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['micro_organism_update'] = $this->micro_organism_model->micro_organism_update();
    $this->data['micro_organism'] = $this->micro_organism_model->micro_organism_get_records();
    $this->load->view('micro_organism/default_grid', $this->data);
  }
  public function micro_organism_delete() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['micro_organism_delete'] = $this->micro_organism_model->micro_organism_delete();
    $this->data['micro_organism'] = $this->micro_organism_model->micro_organism_get_records();
    $this->load->view('micro_organism/default_grid', $this->data);
  }
  public function micro_organism_select() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['micro_organism'] = $this->micro_organism_model->micro_organism_get_records();
    $this->load->view('micro_organism/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}