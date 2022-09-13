<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Form extends CI_CONTROLLER {
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
  public function form_create() {
    $this->load->model('print_layout_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['print_layout'] = $this->print_layout_model->print_layout_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['form_create'] = $this->form_model->form_create();
    $this->data['form'] = $this->form_model->form_get_records();
    $this->load->view('form/default_grid', $this->data);
  }
  public function form_update() {
    $this->load->model('print_layout_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['print_layout'] = $this->print_layout_model->print_layout_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['form_update'] = $this->form_model->form_update();
    $this->data['form'] = $this->form_model->form_get_records();
    $this->load->view('form/default_grid', $this->data);
  }
  public function form_delete() {
    $this->load->model('print_layout_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['print_layout'] = $this->print_layout_model->print_layout_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['form_delete'] = $this->form_model->form_delete();
    $this->data['form'] = $this->form_model->form_get_records();
    $this->load->view('form/default_grid', $this->data);
  }
  public function form_select() {
    $this->load->model('print_layout_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->data['print_layout'] = $this->print_layout_model->print_layout_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['form'] = $this->form_model->form_get_records();
    $this->load->view('form/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}