<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Service_record extends CI_CONTROLLER {
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
  public function service_record_create() {
    $this->load->model('equipment_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->load->model('vendor_model');
    $this->data['equipment'] = $this->equipment_model->equipment_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['service_record_create'] = $this->service_record_model->service_record_create();
    $this->data['service_record'] = $this->service_record_model->service_record_get_records();
    $this->load->view('service_record/default_grid', $this->data);
  }
  public function service_record_update() {
    $this->load->model('equipment_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->load->model('vendor_model');
    $this->data['equipment'] = $this->equipment_model->equipment_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['service_record_update'] = $this->service_record_model->service_record_update();
    $this->data['service_record'] = $this->service_record_model->service_record_get_records();
    $this->load->view('service_record/default_grid', $this->data);
  }
  public function service_record_delete() {
    $this->load->model('equipment_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->load->model('vendor_model');
    $this->data['equipment'] = $this->equipment_model->equipment_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['service_record_delete'] = $this->service_record_model->service_record_delete();
    $this->data['service_record'] = $this->service_record_model->service_record_get_records();
    $this->load->view('service_record/default_grid', $this->data);
  }
  public function service_record_select() {
    $this->load->model('equipment_model');
    $this->load->model('bb_user_model');
    $this->load->model('user_model');
    $this->load->model('vendor_model');
    $this->data['equipment'] = $this->equipment_model->equipment_get_records();
    $this->data['bb_user'] = $this->bb_user_model->bb_user_get_records();
    $this->data['user'] = $this->user_model->user_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['service_record'] = $this->service_record_model->service_record_get_records();
    $this->load->view('service_record/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}