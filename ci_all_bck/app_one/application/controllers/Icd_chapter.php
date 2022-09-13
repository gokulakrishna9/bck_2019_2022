<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Icd_chapter extends CI_CONTROLLER {
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
  public function icd_chapter_create() {
    $this->data['icd_chapter_create'] = $this->icd_chapter_model->icd_chapter_create();
    $this->data['icd_chapter'] = $this->icd_chapter_model->icd_chapter_get_records();
    $this->load->view('icd_chapter/default_grid', $this->data);
  }
  public function icd_chapter_update() {
    $this->data['icd_chapter_update'] = $this->icd_chapter_model->icd_chapter_update();
    $this->data['icd_chapter'] = $this->icd_chapter_model->icd_chapter_get_records();
    $this->load->view('icd_chapter/default_grid', $this->data);
  }
  public function icd_chapter_delete() {
    $this->data['icd_chapter_delete'] = $this->icd_chapter_model->icd_chapter_delete();
    $this->data['icd_chapter'] = $this->icd_chapter_model->icd_chapter_get_records();
    $this->load->view('icd_chapter/default_grid', $this->data);
  }
  public function icd_chapter_select() {
    $this->data['icd_chapter'] = $this->icd_chapter_model->icd_chapter_get_records();
    $this->load->view('icd_chapter/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}