<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Dashboards extends CI_CONTROLLER {
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
  public function dashboards_create() {
    $this->data['dashboards_create'] = $this->dashboards_model->dashboards_create();
    $this->data['dashboards'] = $this->dashboards_model->dashboards_get_records();
    $this->load->view('dashboards/default_grid', $this->data);
  }
  public function dashboards_update() {
    $this->data['dashboards_update'] = $this->dashboards_model->dashboards_update();
    $this->data['dashboards'] = $this->dashboards_model->dashboards_get_records();
    $this->load->view('dashboards/default_grid', $this->data);
  }
  public function dashboards_delete() {
    $this->data['dashboards_delete'] = $this->dashboards_model->dashboards_delete();
    $this->data['dashboards'] = $this->dashboards_model->dashboards_get_records();
    $this->load->view('dashboards/default_grid', $this->data);
  }
  public function dashboards_select() {
    $this->data['dashboards'] = $this->dashboards_model->dashboards_get_records();
    $this->load->view('dashboards/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}