<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_login extends CI_Controller {
	public function _remap($method){
    // check authentication
    $this->data = array();
    if(method_exists($this, $method)){
      $this->$method();
    } else {
      $this->index();
      return;
		}
	}

	public function index(){
		$this->load->view('login');		
	}

	public function login()
	{
		if($this->session->has_userdata('logged_in'))
			redirect('/course/');
		$this->load->model('user_detail');
		$this->data['captcha_image'] = $this->user_detail->set_captcha();
		$this->load->view('welcome_message', $this->data);
	}

	public function authenticate_user(){
		$this->load->model('user_detail');
		$authentic = $this->user_detail->authenticate_user();
		if($authentic){
			$this->session->set_userdata('logged_in', true);
			redirect('/equipment/');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('/welcome/');
  }
}