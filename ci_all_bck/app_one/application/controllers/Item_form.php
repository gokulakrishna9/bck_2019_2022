<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Item_form extends CI_CONTROLLER {
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
  public function item_form_create() {
    $this->data['item_form_create'] = $this->item_form_model->item_form_create();
    $this->data['item_form'] = $this->item_form_model->item_form_get_records();
    $this->load->view('item_form/default_grid', $this->data);
  }
  public function item_form_update() {
    $this->data['item_form_update'] = $this->item_form_model->item_form_update();
    $this->data['item_form'] = $this->item_form_model->item_form_get_records();
    $this->load->view('item_form/default_grid', $this->data);
  }
  public function item_form_delete() {
    $this->data['item_form_delete'] = $this->item_form_model->item_form_delete();
    $this->data['item_form'] = $this->item_form_model->item_form_get_records();
    $this->load->view('item_form/default_grid', $this->data);
  }
  public function item_form_select() {
    $this->data['item_form'] = $this->item_form_model->item_form_get_records();
    $this->load->view('item_form/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}