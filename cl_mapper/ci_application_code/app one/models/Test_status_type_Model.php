<?php class Test_status_type_model extends CI_Model {
  function test_status_type_create() {
    $test_status_type_post = [];
    $test_status_type_post['test_status'] = is_null($this->input->post('test_status')) ? '' : $this->input->post('test_status');
    $test_status_type_post['test_status_type_id'] = is_null($this->input->post('test_status_type_id')) ? '' : $this->input->post('test_status_type_id');
    $this->db->insert('test_status_type', $test_status_type_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $test_status_type_post);
  }
  function test_status_type_update($test_status_type_id) {
    $test_status_type_post['test_status_type.test_status_type_id'] = $this->session->test_status_type_test_status_type_id;
    $test_status_type_post['test_status_type.test_status_type_id'] = $test_status_type_test_status_type_id;
    $test_status_type_post['test_status_type.test_status'] = is_null($this->input->post('test_status_type_test_status')) ? '' : $this->input->post('test_status_type_test_status');
    $this->session->set_userdata('test_status_type.test_status_type_id', $test_status_type_post['test_status_type.test_status_type_id']);
    $this->db->update('test_status_type', $test_status_type_post, array('test_status_type_id' => $test_status_type_post['test_status_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_status_type_post);
  }
  function test_status_type_delete() {
    $test_status_type_delete['test_status_type.test_status'] = is_null($this->input->post('test_status_type_test_status')) ? '' : $this->input->post('test_status_type_test_status');
    $test_status_type_delete['test_status_type.test_status_type_id'] = is_null($this->input->post('test_status_type_test_status_type_id')) ? '' : $this->input->post('test_status_type_test_status_type_id');
    $this->db->delete('test_status_type', array('test_status_type_id' => $test_status_type_delete['test_status_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_status_type_delete);
  }
  function test_status_type_get_records($test_status_type_id) {
    $test_status_type_filters['test_status_type.test_status_type_id'] = $this->session->test_status_type_test_status_type_id;
    $test_status_type_filters['test_status_type.test_status_type_id'] = $test_status_type_test_status_type_id;
    $test_status_type_filters['test_status_type.test_status'] = is_null($this->input->post('test_status_type_test_status')) ? '' : $this->input->post('test_status_type_test_status');
    $this->session->set_userdata('test_status_type.test_status_type_id', $test_status_type_filters['test_status_type.test_status_type_id']);
    $this->db->select('test_status_type.test_status AS test_status_type_test_status, test_status_type.test_status_type_id AS test_status_type_test_status_type_id')->from('test_status_type');
    $this->db->where($test_status_type_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $test_status_type_filters);
  }
}