<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batch extends CI_Controller {
  public function _remap($method){
    if(!$this->authenticate_user()){
      $this->default_handler();
      return;
    }
    // Authentication, Authorization
    if(method_exists($this, $method)){
      $this->$method();
    } else {
      $this->default_handler();
      return;
    }
  }

  private function authenticate_user(){
    if($this->session->has_userdata('logged_in')){
      return true;
    }      
    else{
      return false;
    }
  }

  private function authorize_user(){

  }

  function index(){
    // Modal with View, Update, Delete buttons
    // Return data with route
    // Load the React deployment view
  }

  function add_update_record(){
    $this->load->model('batch_model');
    echo json_encode($this->batch_model->add_update_record());
  }

  function get_records(){
    $this->load->model('batch_model');
    echo json_encode($this->batch_model->get_records());
  }

  function delete_equipment(){
    // Delete record
  }

  function default_handler(){
    echo 'Default Method Called';
  }
}
