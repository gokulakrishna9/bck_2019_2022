<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Mlc extends CI_CONTROLLER {
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
  public function mlc_create() {
    $this->data['mlc_create'] = $this->mlc_model->mlc_create();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->load->view('mlc/default_grid', $this->data);
  }
  public function mlc_update() {
    $this->data['mlc_update'] = $this->mlc_model->mlc_update();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->load->view('mlc/default_grid', $this->data);
  }
  public function mlc_delete() {
    $this->data['mlc_delete'] = $this->mlc_model->mlc_delete();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->load->view('mlc/default_grid', $this->data);
  }
  public function mlc_select() {
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->load->view('mlc/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}