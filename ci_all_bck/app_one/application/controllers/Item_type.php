<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Item_type extends CI_CONTROLLER {
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
  public function item_type_create() {
    $this->data['item_type_create'] = $this->item_type_model->item_type_create();
    $this->data['item_type'] = $this->item_type_model->item_type_get_records();
    $this->load->view('item_type/default_grid', $this->data);
  }
  public function item_type_update() {
    $this->data['item_type_update'] = $this->item_type_model->item_type_update();
    $this->data['item_type'] = $this->item_type_model->item_type_get_records();
    $this->load->view('item_type/default_grid', $this->data);
  }
  public function item_type_delete() {
    $this->data['item_type_delete'] = $this->item_type_model->item_type_delete();
    $this->data['item_type'] = $this->item_type_model->item_type_get_records();
    $this->load->view('item_type/default_grid', $this->data);
  }
  public function item_type_select() {
    $this->data['item_type'] = $this->item_type_model->item_type_get_records();
    $this->load->view('item_type/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}