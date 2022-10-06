<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Affiliation extends CI_CONTROLLER {
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
  public function affiliation_create() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['affiliation_create'] = $this->affiliation_model->affiliation_create();
    $this->data['affiliation'] = $this->affiliation_model->affiliation_get_records();
    $this->load->view('affiliation/default_grid', $this->data);
  }
  public function affiliation_update() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['affiliation_update'] = $this->affiliation_model->affiliation_update();
    $this->data['affiliation'] = $this->affiliation_model->affiliation_get_records();
    $this->load->view('affiliation/default_grid', $this->data);
  }
  public function affiliation_delete() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['affiliation_delete'] = $this->affiliation_model->affiliation_delete();
    $this->data['affiliation'] = $this->affiliation_model->affiliation_get_records();
    $this->load->view('affiliation/default_grid', $this->data);
  }
  public function affiliation_select() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['affiliation'] = $this->affiliation_model->affiliation_get_records();
    $this->load->view('affiliation/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}