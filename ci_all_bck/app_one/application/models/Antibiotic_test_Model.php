<?php class Antibiotic_test_model extends CI_Model {
  function antibiotic_test_create() {
    $antibiotic_test_post = [];
    $antibiotic_test_post['antibiotic.antibiotic_id'] = $this->session->antibiotic_antibiotic_id;
    $antibiotic_test_post['micro_organism_test.micro_organism_test_id'] = $this->session->micro_organism_test_micro_organism_test_id;
    $antibiotic_test_post['antibiotic.antibiotic_id'] = $antibiotic_antibiotic_id;
    $antibiotic_test_post['micro_organism_test.micro_organism_test_id'] = $micro_organism_test_micro_organism_test_id;
    $antibiotic_test_post['antibiotic_test_id'] = is_null($this->input->post('antibiotic_test_id')) ? '' : $this->input->post('antibiotic_test_id');
    $antibiotic_test_post['antibiotic_id'] = is_null($this->input->post('antibiotic_id')) ? '' : $this->input->post('antibiotic_id');
    $antibiotic_test_post['micro_organism_test_id'] = is_null($this->input->post('micro_organism_test_id')) ? '' : $this->input->post('micro_organism_test_id');
    $antibiotic_test_post['antibiotic_result'] = is_null($this->input->post('antibiotic_result')) ? '' : $this->input->post('antibiotic_result');
    $antibiotic_test_post['temp_antibiotic_test_id'] = is_null($this->input->post('temp_antibiotic_test_id')) ? '' : $this->input->post('temp_antibiotic_test_id');
    $this->session->set_userdata('antibiotic.antibiotic_id', $antibiotic_test_post['antibiotic.antibiotic_id']);
    $this->session->set_userdata('micro_organism_test.micro_organism_test_id', $antibiotic_test_post['micro_organism_test.micro_organism_test_id']);
    $this->db->insert('antibiotic_test', $antibiotic_test_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $antibiotic_test_post);
  }
  function antibiotic_test_update() {
    $antibiotic_test_post['antibiotic.antibiotic_id'] = $this->session->antibiotic_antibiotic_id;
    $antibiotic_test_post['micro_organism_test.micro_organism_test_id'] = $this->session->micro_organism_test_micro_organism_test_id;
    $antibiotic_test_post['antibiotic_test.antibiotic_test_id'] = $this->session->antibiotic_test_antibiotic_test_id;
    $antibiotic_test_post['antibiotic.antibiotic_id'] = $antibiotic_antibiotic_id;
    $antibiotic_test_post['micro_organism_test.micro_organism_test_id'] = $micro_organism_test_micro_organism_test_id;
    $antibiotic_test_post['antibiotic_test.antibiotic_test_id'] = $antibiotic_test_antibiotic_test_id;
    $antibiotic_test_post['antibiotic_test.antibiotic_id'] = is_null($this->input->post('antibiotic_test_antibiotic_id')) ? '' : $this->input->post('antibiotic_test_antibiotic_id');
    $antibiotic_test_post['antibiotic_test.micro_organism_test_id'] = is_null($this->input->post('antibiotic_test_micro_organism_test_id')) ? '' : $this->input->post('antibiotic_test_micro_organism_test_id');
    $antibiotic_test_post['antibiotic_test.antibiotic_result'] = is_null($this->input->post('antibiotic_test_antibiotic_result')) ? '' : $this->input->post('antibiotic_test_antibiotic_result');
    $antibiotic_test_post['antibiotic_test.temp_antibiotic_test_id'] = is_null($this->input->post('antibiotic_test_temp_antibiotic_test_id')) ? '' : $this->input->post('antibiotic_test_temp_antibiotic_test_id');
    $this->session->set_userdata('antibiotic.antibiotic_id', $antibiotic_test_post['antibiotic.antibiotic_id']);
    $this->session->set_userdata('micro_organism_test.micro_organism_test_id', $antibiotic_test_post['micro_organism_test.micro_organism_test_id']);
    $this->session->set_userdata('antibiotic_test.antibiotic_test_id', $antibiotic_test_post['antibiotic_test.antibiotic_test_id']);
    $this->db->update('antibiotic_test', $antibiotic_test_post, array('antibiotic_test_id' => $antibiotic_test_post['antibiotic_test_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $antibiotic_test_post);
  }
  function antibiotic_test_delete() {
    $antibiotic_test_delete['antibiotic_test.antibiotic_test_id'] = is_null($this->input->post('antibiotic_test_antibiotic_test_id')) ? '' : $this->input->post('antibiotic_test_antibiotic_test_id');
    $antibiotic_test_delete['antibiotic_test.antibiotic_id'] = is_null($this->input->post('antibiotic_test_antibiotic_id')) ? '' : $this->input->post('antibiotic_test_antibiotic_id');
    $antibiotic_test_delete['antibiotic_test.micro_organism_test_id'] = is_null($this->input->post('antibiotic_test_micro_organism_test_id')) ? '' : $this->input->post('antibiotic_test_micro_organism_test_id');
    $antibiotic_test_delete['antibiotic_test.antibiotic_result'] = is_null($this->input->post('antibiotic_test_antibiotic_result')) ? '' : $this->input->post('antibiotic_test_antibiotic_result');
    $antibiotic_test_delete['antibiotic_test.temp_antibiotic_test_id'] = is_null($this->input->post('antibiotic_test_temp_antibiotic_test_id')) ? '' : $this->input->post('antibiotic_test_temp_antibiotic_test_id');
    $this->db->delete('antibiotic_test', array('antibiotic_test_id' => $antibiotic_test_delete['antibiotic_test_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $antibiotic_test_delete);
  }
  function antibiotic_test_get_records() {
    $antibiotic_test_filters['antibiotic.antibiotic_id'] = $this->session->antibiotic_antibiotic_id;
    $antibiotic_test_filters['micro_organism_test.micro_organism_test_id'] = $this->session->micro_organism_test_micro_organism_test_id;
    $antibiotic_test_filters['antibiotic_test.antibiotic_test_id'] = $this->session->antibiotic_test_antibiotic_test_id;
    $antibiotic_test_filters['antibiotic.antibiotic_id'] = $antibiotic_antibiotic_id;
    $antibiotic_test_filters['micro_organism_test.micro_organism_test_id'] = $micro_organism_test_micro_organism_test_id;
    $antibiotic_test_filters['antibiotic_test.antibiotic_test_id'] = $antibiotic_test_antibiotic_test_id;
    $antibiotic_test_filters['antibiotic_test.antibiotic_id'] = is_null($this->input->post('antibiotic_test_antibiotic_id')) ? '' : $this->input->post('antibiotic_test_antibiotic_id');
    $antibiotic_test_filters['antibiotic_test.micro_organism_test_id'] = is_null($this->input->post('antibiotic_test_micro_organism_test_id')) ? '' : $this->input->post('antibiotic_test_micro_organism_test_id');
    $antibiotic_test_filters['antibiotic_test.antibiotic_result'] = is_null($this->input->post('antibiotic_test_antibiotic_result')) ? '' : $this->input->post('antibiotic_test_antibiotic_result');
    $antibiotic_test_filters['antibiotic_test.temp_antibiotic_test_id'] = is_null($this->input->post('antibiotic_test_temp_antibiotic_test_id')) ? '' : $this->input->post('antibiotic_test_temp_antibiotic_test_id');
    $this->session->set_userdata('antibiotic.antibiotic_id', $antibiotic_test_filters['antibiotic.antibiotic_id']);
    $this->session->set_userdata('micro_organism_test.micro_organism_test_id', $antibiotic_test_filters['micro_organism_test.micro_organism_test_id']);
    $this->session->set_userdata('antibiotic_test.antibiotic_test_id', $antibiotic_test_filters['antibiotic_test.antibiotic_test_id']);
    $this->db->select('antibiotic.antibiotic_id AS antibiotic_test_antibiotic_id, micro_organism_test.micro_organism_test_id AS antibiotic_test_micro_organism_test_id,
    antibiotic_test.antibiotic_test_id AS antibiotic_test_antibiotic_test_id, antibiotic_test.antibiotic_id AS antibiotic_test_antibiotic_id,
    antibiotic_test.micro_organism_test_id AS antibiotic_test_micro_organism_test_id, antibiotic_test.antibiotic_result AS antibiotic_test_antibiotic_result,
    antibiotic_test.temp_antibiotic_test_id AS antibiotic_test_temp_antibiotic_test_id')->from('antibiotic_test');
    $this->db->join('antibiotic', 'antibiotic_test.antibiotic_id = antibiotic.antibiotic_id', 'left');
    $this->db->join('micro_organism_test', 'antibiotic_test.micro_organism_test_id = micro_organism_test.micro_organism_test_id', 'left');
    $this->db->where($antibiotic_test_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $antibiotic_test_filters);
  }
}