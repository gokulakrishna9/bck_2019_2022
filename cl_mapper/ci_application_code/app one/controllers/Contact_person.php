<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Contact_person extends CI_CONTROLLER {
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
  public function contact_person_create() {
    $this->load->model('vendor_model');
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['contact_person_create'] = $this->contact_person_model->contact_person_create();
    $this->data['contact_person'] = $this->contact_person_model->contact_person_get_records();
    $this->load->view('contact_person/default_grid', $this->data);
  }
  public function contact_person_update() {
    $this->load->model('vendor_model');
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['contact_person_update'] = $this->contact_person_model->contact_person_update();
    $this->data['contact_person'] = $this->contact_person_model->contact_person_get_records();
    $this->load->view('contact_person/default_grid', $this->data);
  }
  public function contact_person_delete() {
    $this->load->model('vendor_model');
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['contact_person_delete'] = $this->contact_person_model->contact_person_delete();
    $this->data['contact_person'] = $this->contact_person_model->contact_person_get_records();
    $this->load->view('contact_person/default_grid', $this->data);
  }
  public function contact_person_select() {
    $this->load->model('vendor_model');
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['contact_person'] = $this->contact_person_model->contact_person_get_records();
    $this->load->view('contact_person/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}