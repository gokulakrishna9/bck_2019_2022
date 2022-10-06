<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Item extends CI_CONTROLLER {
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
  public function item_create() {
    $this->load->model('dosage_model');
    $this->load->model('generic_item_model');
    $this->load->model('item_form_model');
    $this->data['dosage'] = $this->dosage_model->dosage_get_records();
    $this->data['generic_item'] = $this->generic_item_model->generic_item_get_records();
    $this->data['item_form'] = $this->item_form_model->item_form_get_records();
    $this->data['item_create'] = $this->item_model->item_create();
    $this->data['item'] = $this->item_model->item_get_records();
    $this->load->view('item/default_grid', $this->data);
  }
  public function item_update() {
    $this->load->model('dosage_model');
    $this->load->model('generic_item_model');
    $this->load->model('item_form_model');
    $this->data['dosage'] = $this->dosage_model->dosage_get_records();
    $this->data['generic_item'] = $this->generic_item_model->generic_item_get_records();
    $this->data['item_form'] = $this->item_form_model->item_form_get_records();
    $this->data['item_update'] = $this->item_model->item_update();
    $this->data['item'] = $this->item_model->item_get_records();
    $this->load->view('item/default_grid', $this->data);
  }
  public function item_delete() {
    $this->load->model('dosage_model');
    $this->load->model('generic_item_model');
    $this->load->model('item_form_model');
    $this->data['dosage'] = $this->dosage_model->dosage_get_records();
    $this->data['generic_item'] = $this->generic_item_model->generic_item_get_records();
    $this->data['item_form'] = $this->item_form_model->item_form_get_records();
    $this->data['item_delete'] = $this->item_model->item_delete();
    $this->data['item'] = $this->item_model->item_get_records();
    $this->load->view('item/default_grid', $this->data);
  }
  public function item_select() {
    $this->load->model('dosage_model');
    $this->load->model('generic_item_model');
    $this->load->model('item_form_model');
    $this->data['dosage'] = $this->dosage_model->dosage_get_records();
    $this->data['generic_item'] = $this->generic_item_model->generic_item_get_records();
    $this->data['item_form'] = $this->item_form_model->item_form_get_records();
    $this->data['item'] = $this->item_model->item_get_records();
    $this->load->view('item/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}