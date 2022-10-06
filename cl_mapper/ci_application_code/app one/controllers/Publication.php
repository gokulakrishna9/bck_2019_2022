<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Publication extends CI_CONTROLLER {
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
  public function publication_create() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['publication_create'] = $this->publication_model->publication_create();
    $this->data['publication'] = $this->publication_model->publication_get_records();
    $this->load->view('publication/default_grid', $this->data);
  }
  public function publication_update() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['publication_update'] = $this->publication_model->publication_update();
    $this->data['publication'] = $this->publication_model->publication_get_records();
    $this->load->view('publication/default_grid', $this->data);
  }
  public function publication_delete() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['publication_delete'] = $this->publication_model->publication_delete();
    $this->data['publication'] = $this->publication_model->publication_get_records();
    $this->load->view('publication/default_grid', $this->data);
  }
  public function publication_select() {
    $this->load->model('staff_model');
    $this->data['staff'] = $this->staff_model->staff_get_records();
    $this->data['publication'] = $this->publication_model->publication_get_records();
    $this->load->view('publication/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}