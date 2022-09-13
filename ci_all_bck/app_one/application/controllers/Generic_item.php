<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Generic_item extends CI_CONTROLLER {
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
  public function generic_item_create() {
    $this->load->model('drug_type_model');
    $this->load->model('item_type_model');
    $this->data['drug_type'] = $this->drug_type_model->drug_type_get_records();
    $this->data['item_type'] = $this->item_type_model->item_type_get_records();
    $this->data['generic_item_create'] = $this->generic_item_model->generic_item_create();
    $this->data['generic_item'] = $this->generic_item_model->generic_item_get_records();
    $this->load->view('generic_item/default_grid', $this->data);
  }
  public function generic_item_update() {
    $this->load->model('drug_type_model');
    $this->load->model('item_type_model');
    $this->data['drug_type'] = $this->drug_type_model->drug_type_get_records();
    $this->data['item_type'] = $this->item_type_model->item_type_get_records();
    $this->data['generic_item_update'] = $this->generic_item_model->generic_item_update();
    $this->data['generic_item'] = $this->generic_item_model->generic_item_get_records();
    $this->load->view('generic_item/default_grid', $this->data);
  }
  public function generic_item_delete() {
    $this->load->model('drug_type_model');
    $this->load->model('item_type_model');
    $this->data['drug_type'] = $this->drug_type_model->drug_type_get_records();
    $this->data['item_type'] = $this->item_type_model->item_type_get_records();
    $this->data['generic_item_delete'] = $this->generic_item_model->generic_item_delete();
    $this->data['generic_item'] = $this->generic_item_model->generic_item_get_records();
    $this->load->view('generic_item/default_grid', $this->data);
  }
  public function generic_item_select() {
    $this->load->model('drug_type_model');
    $this->load->model('item_type_model');
    $this->data['drug_type'] = $this->drug_type_model->drug_type_get_records();
    $this->data['item_type'] = $this->item_type_model->item_type_get_records();
    $this->data['generic_item'] = $this->generic_item_model->generic_item_get_records();
    $this->load->view('generic_item/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}