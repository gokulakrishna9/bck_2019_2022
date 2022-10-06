<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Equipment extends CI_CONTROLLER {
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
  public function equipment_create() {
    $this->load->model('area_model');
    $this->load->model('department_model');
    $this->load->model('equipment_type_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('staff_model');
    $this->load->model('unit_model');
    $this->load->model('vendor_model');
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['equipment_type'] = $this->equipment_type_model->equipment_type_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['equipment_create'] = $this->equipment_model->equipment_create();
    $this->data['equipment'] = $this->equipment_model->equipment_get_records();
    $this->load->view('equipment/default_grid', $this->data);
  }
  public function equipment_update() {
    $this->load->model('area_model');
    $this->load->model('department_model');
    $this->load->model('equipment_type_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('staff_model');
    $this->load->model('unit_model');
    $this->load->model('vendor_model');
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['equipment_type'] = $this->equipment_type_model->equipment_type_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['equipment_update'] = $this->equipment_model->equipment_update();
    $this->data['equipment'] = $this->equipment_model->equipment_get_records();
    $this->load->view('equipment/default_grid', $this->data);
  }
  public function equipment_delete() {
    $this->load->model('area_model');
    $this->load->model('department_model');
    $this->load->model('equipment_type_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('staff_model');
    $this->load->model('unit_model');
    $this->load->model('vendor_model');
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['equipment_type'] = $this->equipment_type_model->equipment_type_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['equipment_delete'] = $this->equipment_model->equipment_delete();
    $this->data['equipment'] = $this->equipment_model->equipment_get_records();
    $this->load->view('equipment/default_grid', $this->data);
  }
  public function equipment_select() {
    $this->load->model('area_model');
    $this->load->model('department_model');
    $this->load->model('equipment_type_model');
    $this->load->model('hospital_model');
    $this->load->model('staff_previous_hospital_model');
    $this->load->model('staff_model');
    $this->load->model('unit_model');
    $this->load->model('vendor_model');
    $this->data['area'] = $this->area_model->area_get_records();
    $this->data['department'] = $this->department_model->department_get_records();
    $this->data['equipment_type'] = $this->equipment_type_model->equipment_type_get_records();
    $this->data['hospital'] = $this->hospital_model->hospital_get_records();
    $this->data['staff_previous_hospital'] = $this->staff_previous_hospital_model->staff_previous_hospital_get_records();
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['unit'] = $this->unit_model->unit_get_records();
    $this->data['vendor'] = $this->vendor_model->vendor_get_records();
    $this->data['equipment'] = $this->equipment_model->equipment_get_records();
    $this->load->view('equipment/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}