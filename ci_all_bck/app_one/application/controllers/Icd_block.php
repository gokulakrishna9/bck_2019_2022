<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Icd_block extends CI_CONTROLLER {
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
  public function icd_block_create() {
    $this->load->model('icd_chapter_model');
    $this->data['icd_chapter'] = $this->icd_chapter_model->icd_chapter_get_records();
    $this->data['icd_block_create'] = $this->icd_block_model->icd_block_create();
    $this->data['icd_block'] = $this->icd_block_model->icd_block_get_records();
    $this->load->view('icd_block/default_grid', $this->data);
  }
  public function icd_block_update() {
    $this->load->model('icd_chapter_model');
    $this->data['icd_chapter'] = $this->icd_chapter_model->icd_chapter_get_records();
    $this->data['icd_block_update'] = $this->icd_block_model->icd_block_update();
    $this->data['icd_block'] = $this->icd_block_model->icd_block_get_records();
    $this->load->view('icd_block/default_grid', $this->data);
  }
  public function icd_block_delete() {
    $this->load->model('icd_chapter_model');
    $this->data['icd_chapter'] = $this->icd_chapter_model->icd_chapter_get_records();
    $this->data['icd_block_delete'] = $this->icd_block_model->icd_block_delete();
    $this->data['icd_block'] = $this->icd_block_model->icd_block_get_records();
    $this->load->view('icd_block/default_grid', $this->data);
  }
  public function icd_block_select() {
    $this->load->model('icd_chapter_model');
    $this->data['icd_chapter'] = $this->icd_chapter_model->icd_chapter_get_records();
    $this->data['icd_block'] = $this->icd_block_model->icd_block_get_records();
    $this->load->view('icd_block/default_grid', $this->data);
  }
  private function authenticate_user(){return true;}
  private function authorize_user(){return true;}
  private function authentication_failure(){show_404();}
  private function authorization_failure(){show_404();}
  private function default_handler(){show_404();}
}