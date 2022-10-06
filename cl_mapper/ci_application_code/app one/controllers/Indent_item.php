<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Indent_item extends CI_CONTROLLER {
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
  public function indent_item_create() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('indent_model');
    $this->load->model('item_model');
    $this->load->model('item_master_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['indent'] = $this->indent_model->indent_get_records();
    $this->data['item'] = $this->item_model->item_get_records();
    $this->data['item_master'] = $this->item_master_model->item_master_get_records();
    $this->data['indent_item_create'] = $this->indent_item_model->indent_item_create();
    $this->data['indent_item'] = $this->indent_item_model->indent_item_get_records();
    $this->load->view('indent_item/default_grid', $this->data);
  }
  public function indent_item_update() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('indent_model');
    $this->load->model('item_model');
    $this->load->model('item_master_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['indent'] = $this->indent_model->indent_get_records();
    $this->data['item'] = $this->item_model->item_get_records();
    $this->data['item_master'] = $this->item_master_model->item_master_get_records();
    $this->data['indent_item_update'] = $this->indent_item_model->indent_item_update();
    $this->data['indent_item'] = $this->indent_item_model->indent_item_get_records();
    $this->load->view('indent_item/default_grid', $this->data);
  }
  public function indent_item_delete() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('indent_model');
    $this->load->model('item_model');
    $this->load->model('item_master_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['indent'] = $this->indent_model->indent_get_records();
    $this->data['item'] = $this->item_model->item_get_records();
    $this->data['item_master'] = $this->item_master_model->item_master_get_records();
    $this->data['indent_item_delete'] = $this->indent_item_model->indent_item_delete();
    $this->data['indent_item'] = $this->indent_item_model->indent_item_get_records();
    $this->load->view('indent_item/default_grid', $this->data);
  }
  public function indent_item_select() {
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('indent_model');
    $this->load->model('item_model');
    $this->load->model('item_master_model');
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['indent'] = $this->indent_model->indent_get_records();
    $this->data['item'] = $this->item_model->item_get_records();
    $this->data['item_master'] = $this->item_master_model->item_master_get_records();
    $this->data['indent_item'] = $this->indent_item_model->indent_item_get_records();
    $this->load->view('indent_item/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}