<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Village_town extends CI_CONTROLLER {
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
  public function village_town_create() {
    $this->data['village_town_create'] = $this->village_town_model->village_town_create();
    $this->data['village_town'] = $this->village_town_model->village_town_get_records();
    $this->load->view('village_town/default_grid', $this->data);
  }
  public function village_town_update() {
    $this->data['village_town_update'] = $this->village_town_model->village_town_update();
    $this->data['village_town'] = $this->village_town_model->village_town_get_records();
    $this->load->view('village_town/default_grid', $this->data);
  }
  public function village_town_delete() {
    $this->data['village_town_delete'] = $this->village_town_model->village_town_delete();
    $this->data['village_town'] = $this->village_town_model->village_town_get_records();
    $this->load->view('village_town/default_grid', $this->data);
  }
  public function village_town_select() {
    $this->data['village_town'] = $this->village_town_model->village_town_get_records();
    $this->load->view('village_town/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}