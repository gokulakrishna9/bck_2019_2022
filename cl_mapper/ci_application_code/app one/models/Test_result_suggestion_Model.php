<?php class Test_result_suggestion_model extends CI_Model {
  function test_result_suggestion_create($test_master_test_master_id) {
    $test_result_suggestion_post = [];
    $test_result_suggestion_post['test_master.test_master_id'] = $this->session->test_master_test_master_id;
    $test_result_suggestion_post['test_master.test_master_id'] = $test_master_test_master_id;
    $test_result_suggestion_post['suggestion'] = is_null($this->input->post('suggestion')) ? '' : $this->input->post('suggestion');
    $test_result_suggestion_post['suggestion_id'] = is_null($this->input->post('suggestion_id')) ? '' : $this->input->post('suggestion_id');
    $test_result_suggestion_post['temp_suggestion_id'] = is_null($this->input->post('temp_suggestion_id')) ? '' : $this->input->post('temp_suggestion_id');
    $test_result_suggestion_post['test_master_id'] = is_null($this->input->post('test_master_id')) ? '' : $this->input->post('test_master_id');
    $this->session->set_userdata('test_master.test_master_id', $test_result_suggestion_post['test_master.test_master_id']);
    $this->db->insert('test_result_suggestion', $test_result_suggestion_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $test_result_suggestion_post);
  }
  function test_result_suggestion_update($test_master_id,$suggestion_id) {
    $test_result_suggestion_post['test_master.test_master_id'] = $this->session->test_master_test_master_id;
    $test_result_suggestion_post['test_result_suggestion.suggestion_id'] = $this->session->test_result_suggestion_suggestion_id;
    $test_result_suggestion_post['test_master.test_master_id'] = $test_master_test_master_id;
    $test_result_suggestion_post['test_result_suggestion.suggestion_id'] = $test_result_suggestion_suggestion_id;
    $test_result_suggestion_post['test_result_suggestion.suggestion'] = is_null($this->input->post('test_result_suggestion_suggestion')) ? '' : $this->input->post('test_result_suggestion_suggestion');
    $test_result_suggestion_post['test_result_suggestion.temp_suggestion_id'] = is_null($this->input->post('test_result_suggestion_temp_suggestion_id')) ? '' : $this->input->post('test_result_suggestion_temp_suggestion_id');
    $test_result_suggestion_post['test_result_suggestion.test_master_id'] = is_null($this->input->post('test_result_suggestion_test_master_id')) ? '' : $this->input->post('test_result_suggestion_test_master_id');
    $this->session->set_userdata('test_master.test_master_id', $test_result_suggestion_post['test_master.test_master_id']);
    $this->session->set_userdata('test_result_suggestion.suggestion_id', $test_result_suggestion_post['test_result_suggestion.suggestion_id']);
    $this->db->update('test_result_suggestion', $test_result_suggestion_post, array('suggestion_id' => $test_result_suggestion_post['suggestion_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_result_suggestion_post);
  }
  function test_result_suggestion_delete() {
    $test_result_suggestion_delete['test_result_suggestion.suggestion'] = is_null($this->input->post('test_result_suggestion_suggestion')) ? '' : $this->input->post('test_result_suggestion_suggestion');
    $test_result_suggestion_delete['test_result_suggestion.suggestion_id'] = is_null($this->input->post('test_result_suggestion_suggestion_id')) ? '' : $this->input->post('test_result_suggestion_suggestion_id');
    $test_result_suggestion_delete['test_result_suggestion.temp_suggestion_id'] = is_null($this->input->post('test_result_suggestion_temp_suggestion_id')) ? '' : $this->input->post('test_result_suggestion_temp_suggestion_id');
    $test_result_suggestion_delete['test_result_suggestion.test_master_id'] = is_null($this->input->post('test_result_suggestion_test_master_id')) ? '' : $this->input->post('test_result_suggestion_test_master_id');
    $this->db->delete('test_result_suggestion', array('suggestion_id' => $test_result_suggestion_delete['suggestion_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_result_suggestion_delete);
  }
  function test_result_suggestion_get_records($test_master_id,$suggestion_id) {
    $test_result_suggestion_filters['test_master.test_master_id'] = $this->session->test_master_test_master_id;
    $test_result_suggestion_filters['test_result_suggestion.suggestion_id'] = $this->session->test_result_suggestion_suggestion_id;
    $test_result_suggestion_filters['test_master.test_master_id'] = $test_master_test_master_id;
    $test_result_suggestion_filters['test_result_suggestion.suggestion_id'] = $test_result_suggestion_suggestion_id;
    $test_result_suggestion_filters['test_result_suggestion.suggestion'] = is_null($this->input->post('test_result_suggestion_suggestion')) ? '' : $this->input->post('test_result_suggestion_suggestion');
    $test_result_suggestion_filters['test_result_suggestion.temp_suggestion_id'] = is_null($this->input->post('test_result_suggestion_temp_suggestion_id')) ? '' : $this->input->post('test_result_suggestion_temp_suggestion_id');
    $test_result_suggestion_filters['test_result_suggestion.test_master_id'] = is_null($this->input->post('test_result_suggestion_test_master_id')) ? '' : $this->input->post('test_result_suggestion_test_master_id');
    $this->session->set_userdata('test_master.test_master_id', $test_result_suggestion_filters['test_master.test_master_id']);
    $this->session->set_userdata('test_result_suggestion.suggestion_id', $test_result_suggestion_filters['test_result_suggestion.suggestion_id']);
    $this->db->select('test_master.test_master_id AS test_result_suggestion_test_master_id, test_result_suggestion.suggestion AS test_result_suggestion_suggestion,
    test_result_suggestion.suggestion_id AS test_result_suggestion_suggestion_id, test_result_suggestion.temp_suggestion_id AS test_result_suggestion_temp_suggestion_id,
    test_result_suggestion.test_master_id AS test_result_suggestion_test_master_id')->from('test_result_suggestion');
    $this->db->join('test_master', 'test_result_suggestion.test_master_id = test_master.test_master_id', 'left');
    $this->db->where($test_result_suggestion_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $test_result_suggestion_filters);
  }
}