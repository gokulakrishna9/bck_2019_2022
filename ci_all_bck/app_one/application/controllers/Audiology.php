<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Audiology extends CI_CONTROLLER {
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
  public function audiology_create() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['audiology_create'] = $this->audiology_model->audiology_create();
    $this->data['audiology'] = $this->audiology_model->audiology_get_records();
    $this->load->view('audiology/default_grid', $this->data);
  }
  public function audiology_update() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['audiology_update'] = $this->audiology_model->audiology_update();
    $this->data['audiology'] = $this->audiology_model->audiology_get_records();
    $this->load->view('audiology/default_grid', $this->data);
  }
  public function audiology_delete() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['audiology_delete'] = $this->audiology_model->audiology_delete();
    $this->data['audiology'] = $this->audiology_model->audiology_get_records();
    $this->load->view('audiology/default_grid', $this->data);
  }
  public function audiology_select() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['audiology'] = $this->audiology_model->audiology_get_records();
    $this->load->view('audiology/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}