<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Bb_issued_inventory extends CI_CONTROLLER {
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
  public function bb_issued_inventory_create() {
    $this->load->model('blood_issue_model');
    $this->load->model('blood_inventory_model');
    $this->data['blood_issue'] = $this->blood_issue_model->blood_issue_get_records();
    $this->data['blood_inventory'] = $this->blood_inventory_model->blood_inventory_get_records();
    $this->data['bb_issued_inventory_create'] = $this->bb_issued_inventory_model->bb_issued_inventory_create();
    $this->data['bb_issued_inventory'] = $this->bb_issued_inventory_model->bb_issued_inventory_get_records();
    $this->load->view('bb_issued_inventory/default_grid', $this->data);
  }
  public function bb_issued_inventory_update() {
    $this->load->model('blood_issue_model');
    $this->load->model('blood_inventory_model');
    $this->data['blood_issue'] = $this->blood_issue_model->blood_issue_get_records();
    $this->data['blood_inventory'] = $this->blood_inventory_model->blood_inventory_get_records();
    $this->data['bb_issued_inventory_update'] = $this->bb_issued_inventory_model->bb_issued_inventory_update();
    $this->data['bb_issued_inventory'] = $this->bb_issued_inventory_model->bb_issued_inventory_get_records();
    $this->load->view('bb_issued_inventory/default_grid', $this->data);
  }
  public function bb_issued_inventory_delete() {
    $this->load->model('blood_issue_model');
    $this->load->model('blood_inventory_model');
    $this->data['blood_issue'] = $this->blood_issue_model->blood_issue_get_records();
    $this->data['blood_inventory'] = $this->blood_inventory_model->blood_inventory_get_records();
    $this->data['bb_issued_inventory_delete'] = $this->bb_issued_inventory_model->bb_issued_inventory_delete();
    $this->data['bb_issued_inventory'] = $this->bb_issued_inventory_model->bb_issued_inventory_get_records();
    $this->load->view('bb_issued_inventory/default_grid', $this->data);
  }
  public function bb_issued_inventory_select() {
    $this->load->model('blood_issue_model');
    $this->load->model('blood_inventory_model');
    $this->data['blood_issue'] = $this->blood_issue_model->blood_issue_get_records();
    $this->data['blood_inventory'] = $this->blood_inventory_model->blood_inventory_get_records();
    $this->data['bb_issued_inventory'] = $this->bb_issued_inventory_model->bb_issued_inventory_get_records();
    $this->load->view('bb_issued_inventory/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}