<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Supply_chain_party extends CI_CONTROLLER {
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
  public function supply_chain_party_create() {
    $this->load->model('area_model');
    $this->load->model('department_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('vendor_model');
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['supply_chain_party_create'] = $this->supply_chain_party_model->supply_chain_party_create();
    $this->data['supply_chain_party'] = $this->supply_chain_party_model->supply_chain_party_get_records();
    $this->load->view('supply_chain_party/default_grid', $this->data);
  }
  public function supply_chain_party_update() {
    $this->load->model('area_model');
    $this->load->model('department_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('vendor_model');
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['supply_chain_party_update'] = $this->supply_chain_party_model->supply_chain_party_update();
    $this->data['supply_chain_party'] = $this->supply_chain_party_model->supply_chain_party_get_records();
    $this->load->view('supply_chain_party/default_grid', $this->data);
  }
  public function supply_chain_party_delete() {
    $this->load->model('area_model');
    $this->load->model('department_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('vendor_model');
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['supply_chain_party_delete'] = $this->supply_chain_party_model->supply_chain_party_delete();
    $this->data['supply_chain_party'] = $this->supply_chain_party_model->supply_chain_party_get_records();
    $this->load->view('supply_chain_party/default_grid', $this->data);
  }
  public function supply_chain_party_select() {
    $this->load->model('area_model');
    $this->load->model('department_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('vendor_model');
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['supply_chain_party'] = $this->supply_chain_party_model->supply_chain_party_get_records();
    $this->load->view('supply_chain_party/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}