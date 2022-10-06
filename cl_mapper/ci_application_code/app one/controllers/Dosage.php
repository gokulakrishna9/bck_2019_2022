<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Dosage extends CI_CONTROLLER {
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
  public function dosage_create() {
    $this->data['dosage_create'] = $this->dosage_model->dosage_create();
    $this->data['dosage'] = $this->dosage_model->dosage_get_records();
    $this->load->view('dosage/default_grid', $this->data);
  }
  public function dosage_update() {
    $this->data['dosage_update'] = $this->dosage_model->dosage_update();
    $this->data['dosage'] = $this->dosage_model->dosage_get_records();
    $this->load->view('dosage/default_grid', $this->data);
  }
  public function dosage_delete() {
    $this->data['dosage_delete'] = $this->dosage_model->dosage_delete();
    $this->data['dosage'] = $this->dosage_model->dosage_get_records();
    $this->load->view('dosage/default_grid', $this->data);
  }
  public function dosage_select() {
    $this->data['dosage'] = $this->dosage_model->dosage_get_records();
    $this->load->view('dosage/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}