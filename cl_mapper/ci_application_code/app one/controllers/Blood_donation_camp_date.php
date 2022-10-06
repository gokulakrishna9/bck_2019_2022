<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Blood_donation_camp_date extends CI_CONTROLLER {
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
  public function blood_donation_camp_date_create() {
    $this->data['blood_donation_camp_date_create'] = $this->blood_donation_camp_date_model->blood_donation_camp_date_create();
    $this->data['blood_donation_camp_date'] = $this->blood_donation_camp_date_model->blood_donation_camp_date_get_records();
    $this->load->view('blood_donation_camp_date/default_grid', $this->data);
  }
  public function blood_donation_camp_date_update() {
    $this->data['blood_donation_camp_date_update'] = $this->blood_donation_camp_date_model->blood_donation_camp_date_update();
    $this->data['blood_donation_camp_date'] = $this->blood_donation_camp_date_model->blood_donation_camp_date_get_records();
    $this->load->view('blood_donation_camp_date/default_grid', $this->data);
  }
  public function blood_donation_camp_date_delete() {
    $this->data['blood_donation_camp_date_delete'] = $this->blood_donation_camp_date_model->blood_donation_camp_date_delete();
    $this->data['blood_donation_camp_date'] = $this->blood_donation_camp_date_model->blood_donation_camp_date_get_records();
    $this->load->view('blood_donation_camp_date/default_grid', $this->data);
  }
  public function blood_donation_camp_date_select() {
    $this->data['blood_donation_camp_date'] = $this->blood_donation_camp_date_model->blood_donation_camp_date_get_records();
    $this->load->view('blood_donation_camp_date/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}