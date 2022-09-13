<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Hospital extends CI_CONTROLLER {
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
  public function hospital_create() {
    $this->load->model('village_town_model');
    $this->data['village_town'] = $this->village_town_model->village_town_get_records();
    $this->data['hospital_create'] = $this->hospital_model->hospital_create();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->load->view('hospital/default_grid', $this->data);
  }
  public function hospital_update() {
    $this->load->model('village_town_model');
    $this->data['village_town'] = $this->village_town_model->village_town_get_records();
    $this->data['hospital_update'] = $this->hospital_model->hospital_update();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->load->view('hospital/default_grid', $this->data);
  }
  public function hospital_delete() {
    $this->load->model('village_town_model');
    $this->data['village_town'] = $this->village_town_model->village_town_get_records();
    $this->data['hospital_delete'] = $this->hospital_model->hospital_delete();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->load->view('hospital/default_grid', $this->data);
  }
  public function hospital_select() {
    $this->load->model('village_town_model');
    $this->data['village_town'] = $this->village_town_model->village_town_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->load->view('hospital/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}