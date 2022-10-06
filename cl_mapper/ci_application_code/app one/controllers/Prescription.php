<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Prescription extends CI_CONTROLLER {
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
  public function prescription_create() {
    $this->load->model('item_model');
    $this->load->model('item_master_model');
    $this->load->model('unit_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['item'] = $this->item_model->item_get_records();
    $this->data['item_master'] = $this->item_master_model->item_master_get_records();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['prescription_create'] = $this->prescription_model->prescription_create();
    $this->data['prescription'] = $this->prescription_model->prescription_get_records();
    $this->load->view('prescription/default_grid', $this->data);
  }
  public function prescription_update() {
    $this->load->model('item_model');
    $this->load->model('item_master_model');
    $this->load->model('unit_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['item'] = $this->item_model->item_get_records();
    $this->data['item_master'] = $this->item_master_model->item_master_get_records();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['prescription_update'] = $this->prescription_model->prescription_update();
    $this->data['prescription'] = $this->prescription_model->prescription_get_records();
    $this->load->view('prescription/default_grid', $this->data);
  }
  public function prescription_delete() {
    $this->load->model('item_model');
    $this->load->model('item_master_model');
    $this->load->model('unit_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['item'] = $this->item_model->item_get_records();
    $this->data['item_master'] = $this->item_master_model->item_master_get_records();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['prescription_delete'] = $this->prescription_model->prescription_delete();
    $this->data['prescription'] = $this->prescription_model->prescription_get_records();
    $this->load->view('prescription/default_grid', $this->data);
  }
  public function prescription_select() {
    $this->load->model('item_model');
    $this->load->model('item_master_model');
    $this->load->model('unit_model');
    $this->load->model('mlc_model');
    $this->load->model('patient_visit_model');
    $this->data['item'] = $this->item_model->item_get_records();
    $this->data['item_master'] = $this->item_master_model->item_master_get_records();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->data['mlc'] = $this->mlc_model->mlc_get_records();
    $this->data['patient_visit'] = $this->patient_visit_model->patient_visit_get_records();
    $this->data['prescription'] = $this->prescription_model->prescription_get_records();
    $this->load->view('prescription/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}