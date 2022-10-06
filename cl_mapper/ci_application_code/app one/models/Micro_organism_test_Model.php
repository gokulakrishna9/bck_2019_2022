<?php class Micro_organism_test_model extends CI_Model {
  function micro_organism_test_create($micro_organism_micro_organism_id,$test_test_id) {
    $micro_organism_test_post = [];
    $micro_organism_test_post['micro_organism.micro_organism_id'] = $this->session->micro_organism_micro_organism_id;
    $micro_organism_test_post['test.test_id'] = $this->session->test_test_id;
    $micro_organism_test_post['micro_organism.micro_organism_id'] = $micro_organism_micro_organism_id;
    $micro_organism_test_post['test.test_id'] = $test_test_id;
    $micro_organism_test_post['micro_organism_id'] = is_null($this->input->post('micro_organism_id')) ? '' : $this->input->post('micro_organism_id');
    $micro_organism_test_post['micro_organism_test_id'] = is_null($this->input->post('micro_organism_test_id')) ? '' : $this->input->post('micro_organism_test_id');
    $micro_organism_test_post['temp_micro_organism_test_id'] = is_null($this->input->post('temp_micro_organism_test_id')) ? '' : $this->input->post('temp_micro_organism_test_id');
    $micro_organism_test_post['test_id'] = is_null($this->input->post('test_id')) ? '' : $this->input->post('test_id');
    $this->session->set_userdata('micro_organism.micro_organism_id', $micro_organism_test_post['micro_organism.micro_organism_id']);
    $this->session->set_userdata('test.test_id', $micro_organism_test_post['test.test_id']);
    $this->db->insert('micro_organism_test', $micro_organism_test_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $micro_organism_test_post);
  }
  function micro_organism_test_update($micro_organism_id,$test_id,$micro_organism_test_id) {
    $micro_organism_test_post['micro_organism.micro_organism_id'] = $this->session->micro_organism_micro_organism_id;
    $micro_organism_test_post['test.test_id'] = $this->session->test_test_id;
    $micro_organism_test_post['micro_organism_test.micro_organism_test_id'] = $this->session->micro_organism_test_micro_organism_test_id;
    $micro_organism_test_post['micro_organism.micro_organism_id'] = $micro_organism_micro_organism_id;
    $micro_organism_test_post['test.test_id'] = $test_test_id;
    $micro_organism_test_post['micro_organism_test.micro_organism_test_id'] = $micro_organism_test_micro_organism_test_id;
    $micro_organism_test_post['micro_organism_test.micro_organism_id'] = is_null($this->input->post('micro_organism_test_micro_organism_id')) ? '' : $this->input->post('micro_organism_test_micro_organism_id');
    $micro_organism_test_post['micro_organism_test.temp_micro_organism_test_id'] = is_null($this->input->post('micro_organism_test_temp_micro_organism_test_id')) ? '' : $this->input->post('micro_organism_test_temp_micro_organism_test_id');
    $micro_organism_test_post['micro_organism_test.test_id'] = is_null($this->input->post('micro_organism_test_test_id')) ? '' : $this->input->post('micro_organism_test_test_id');
    $this->session->set_userdata('micro_organism.micro_organism_id', $micro_organism_test_post['micro_organism.micro_organism_id']);
    $this->session->set_userdata('test.test_id', $micro_organism_test_post['test.test_id']);
    $this->session->set_userdata('micro_organism_test.micro_organism_test_id', $micro_organism_test_post['micro_organism_test.micro_organism_test_id']);
    $this->db->update('micro_organism_test', $micro_organism_test_post, array('micro_organism_test_id' => $micro_organism_test_post['micro_organism_test_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $micro_organism_test_post);
  }
  function micro_organism_test_delete() {
    $micro_organism_test_delete['micro_organism_test.micro_organism_id'] = is_null($this->input->post('micro_organism_test_micro_organism_id')) ? '' : $this->input->post('micro_organism_test_micro_organism_id');
    $micro_organism_test_delete['micro_organism_test.micro_organism_test_id'] = is_null($this->input->post('micro_organism_test_micro_organism_test_id')) ? '' : $this->input->post('micro_organism_test_micro_organism_test_id');
    $micro_organism_test_delete['micro_organism_test.temp_micro_organism_test_id'] = is_null($this->input->post('micro_organism_test_temp_micro_organism_test_id')) ? '' : $this->input->post('micro_organism_test_temp_micro_organism_test_id');
    $micro_organism_test_delete['micro_organism_test.test_id'] = is_null($this->input->post('micro_organism_test_test_id')) ? '' : $this->input->post('micro_organism_test_test_id');
    $this->db->delete('micro_organism_test', array('micro_organism_test_id' => $micro_organism_test_delete['micro_organism_test_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $micro_organism_test_delete);
  }
  function micro_organism_test_get_records($micro_organism_id,$test_id,$micro_organism_test_id) {
    $micro_organism_test_filters['micro_organism.micro_organism_id'] = $this->session->micro_organism_micro_organism_id;
    $micro_organism_test_filters['test.test_id'] = $this->session->test_test_id;
    $micro_organism_test_filters['micro_organism_test.micro_organism_test_id'] = $this->session->micro_organism_test_micro_organism_test_id;
    $micro_organism_test_filters['micro_organism.micro_organism_id'] = $micro_organism_micro_organism_id;
    $micro_organism_test_filters['test.test_id'] = $test_test_id;
    $micro_organism_test_filters['micro_organism_test.micro_organism_test_id'] = $micro_organism_test_micro_organism_test_id;
    $micro_organism_test_filters['micro_organism_test.micro_organism_id'] = is_null($this->input->post('micro_organism_test_micro_organism_id')) ? '' : $this->input->post('micro_organism_test_micro_organism_id');
    $micro_organism_test_filters['micro_organism_test.temp_micro_organism_test_id'] = is_null($this->input->post('micro_organism_test_temp_micro_organism_test_id')) ? '' : $this->input->post('micro_organism_test_temp_micro_organism_test_id');
    $micro_organism_test_filters['micro_organism_test.test_id'] = is_null($this->input->post('micro_organism_test_test_id')) ? '' : $this->input->post('micro_organism_test_test_id');
    $this->session->set_userdata('micro_organism.micro_organism_id', $micro_organism_test_filters['micro_organism.micro_organism_id']);
    $this->session->set_userdata('test.test_id', $micro_organism_test_filters['test.test_id']);
    $this->session->set_userdata('micro_organism_test.micro_organism_test_id', $micro_organism_test_filters['micro_organism_test.micro_organism_test_id']);
    $this->db->select('micro_organism.micro_organism_id AS micro_organism_test_micro_organism_id, test.test_id AS micro_organism_test_test_id,
    micro_organism_test.micro_organism_id AS micro_organism_test_micro_organism_id, micro_organism_test.micro_organism_test_id AS micro_organism_test_micro_organism_test_id,
    micro_organism_test.temp_micro_organism_test_id AS micro_organism_test_temp_micro_organism_test_id, micro_organism_test.test_id AS micro_organism_test_test_id')->from('micro_organism_test');
    $this->db->join('micro_organism', 'micro_organism_test.micro_organism_id = micro_organism.micro_organism_id', 'left');
    $this->db->join('test', 'micro_organism_test.test_id = test.test_id', 'left');
    $this->db->where($micro_organism_test_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $micro_organism_test_filters);
  }
}