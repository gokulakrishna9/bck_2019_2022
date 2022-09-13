<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Places_table extends CI_CONTROLLER {
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
  public function places_table_create() {
    $this->data['places_table_create'] = $this->places_table_model->places_table_create();
    $this->data['places_table'] = $this->places_table_model->places_table_get_records();
    $this->load->view('places_table/default_grid', $this->data);
  }
  public function places_table_update() {
    $this->data['places_table_update'] = $this->places_table_model->places_table_update();
    $this->data['places_table'] = $this->places_table_model->places_table_get_records();
    $this->load->view('places_table/default_grid', $this->data);
  }
  public function places_table_delete() {
    $this->data['places_table_delete'] = $this->places_table_model->places_table_delete();
    $this->data['places_table'] = $this->places_table_model->places_table_get_records();
    $this->load->view('places_table/default_grid', $this->data);
  }
  public function places_table_select() {
    $this->data['places_table'] = $this->places_table_model->places_table_get_records();
    $this->load->view('places_table/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}