<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Staff_selection_parameter extends CI_CONTROLLER {
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
  public function staff_selection_parameter_create() {
    $this->load->model('staff_recruitment_drive_model');
    $this->data['staff_recruitment_drive'] = $this->staff_recruitment_drive_model->staff_recruitment_drive_get_records();
    $this->data['staff_selection_parameter_create'] = $this->staff_selection_parameter_model->staff_selection_parameter_create();
    $this->data['staff_selection_parameter'] = $this->staff_selection_parameter_model->staff_selection_parameter_get_records();
    $this->load->view('staff_selection_parameter/default_grid', $this->data);
  }
  public function staff_selection_parameter_update() {
    $this->load->model('staff_recruitment_drive_model');
    $this->data['staff_recruitment_drive'] = $this->staff_recruitment_drive_model->staff_recruitment_drive_get_records();
    $this->data['staff_selection_parameter_update'] = $this->staff_selection_parameter_model->staff_selection_parameter_update();
    $this->data['staff_selection_parameter'] = $this->staff_selection_parameter_model->staff_selection_parameter_get_records();
    $this->load->view('staff_selection_parameter/default_grid', $this->data);
  }
  public function staff_selection_parameter_delete() {
    $this->load->model('staff_recruitment_drive_model');
    $this->data['staff_recruitment_drive'] = $this->staff_recruitment_drive_model->staff_recruitment_drive_get_records();
    $this->data['staff_selection_parameter_delete'] = $this->staff_selection_parameter_model->staff_selection_parameter_delete();
    $this->data['staff_selection_parameter'] = $this->staff_selection_parameter_model->staff_selection_parameter_get_records();
    $this->load->view('staff_selection_parameter/default_grid', $this->data);
  }
  public function staff_selection_parameter_select() {
    $this->load->model('staff_recruitment_drive_model');
    $this->data['staff_recruitment_drive'] = $this->staff_recruitment_drive_model->staff_recruitment_drive_get_records();
    $this->data['staff_selection_parameter'] = $this->staff_selection_parameter_model->staff_selection_parameter_get_records();
    $this->load->view('staff_selection_parameter/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}