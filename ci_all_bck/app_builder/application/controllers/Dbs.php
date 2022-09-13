<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbs extends CI_Controller {
	public function index()	{
    $this->load->view('data_page');  
  }

  public function get_data() {
    $this->load->model('dbs_model');
  //  $this->load->library('table');
  //  $result['db_list'] = $this->dbs_model->db_list();
  //  $result['db_table_columns'] = $this->dbs_model->db_table_columns();
    $result = $this->dbs_model->health_for_all_columns();
  //  echo $this->table->generate($result);
    echo json_encode($result);
  }
}
