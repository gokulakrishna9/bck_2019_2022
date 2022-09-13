<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Item_batch extends CI_CONTROLLER {
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
  public function item_batch_create() {
    $this->load->model('item_model');
    $this->load->model('item_master_model');
    $this->data['item'] = $this->item_model->item_get_records();
    $this->data['item_master'] = $this->item_master_model->item_master_get_records();
    $this->data['item_batch_create'] = $this->item_batch_model->item_batch_create();
    $this->data['item_batch'] = $this->item_batch_model->item_batch_get_records();
    $this->load->view('item_batch/default_grid', $this->data);
  }
  public function item_batch_update() {
    $this->load->model('item_model');
    $this->load->model('item_master_model');
    $this->data['item'] = $this->item_model->item_get_records();
    $this->data['item_master'] = $this->item_master_model->item_master_get_records();
    $this->data['item_batch_update'] = $this->item_batch_model->item_batch_update();
    $this->data['item_batch'] = $this->item_batch_model->item_batch_get_records();
    $this->load->view('item_batch/default_grid', $this->data);
  }
  public function item_batch_delete() {
    $this->load->model('item_model');
    $this->load->model('item_master_model');
    $this->data['item'] = $this->item_model->item_get_records();
    $this->data['item_master'] = $this->item_master_model->item_master_get_records();
    $this->data['item_batch_delete'] = $this->item_batch_model->item_batch_delete();
    $this->data['item_batch'] = $this->item_batch_model->item_batch_get_records();
    $this->load->view('item_batch/default_grid', $this->data);
  }
  public function item_batch_select() {
    $this->load->model('item_model');
    $this->load->model('item_master_model');
    $this->data['item'] = $this->item_model->item_get_records();
    $this->data['item_master'] = $this->item_master_model->item_master_get_records();
    $this->data['item_batch'] = $this->item_batch_model->item_batch_get_records();
    $this->load->view('item_batch/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}