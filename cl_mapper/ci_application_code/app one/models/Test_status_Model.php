<?php class Test_status_model extends CI_Model {
  function test_status_create($test_test_id,$test_status_type_test_status_type_id) {
    $test_status_post = [];
    $test_status_post['test.test_id'] = $this->session->test_test_id;
    $test_status_post['test_status_type.test_status_type_id'] = $this->session->test_status_type_test_status_type_id;
    $test_status_post['test.test_id'] = $test_test_id;
    $test_status_post['test_status_type.test_status_type_id'] = $test_status_type_test_status_type_id;
    $test_status_post['status_date_time'] = is_null($this->input->post('status_date_time')) ? '' : $this->input->post('status_date_time');
    $test_status_post['test_id'] = is_null($this->input->post('test_id')) ? '' : $this->input->post('test_id');
    $test_status_post['test_status_id'] = is_null($this->input->post('test_status_id')) ? '' : $this->input->post('test_status_id');
    $test_status_post['test_status_type_id'] = is_null($this->input->post('test_status_type_id')) ? '' : $this->input->post('test_status_type_id');
    $this->session->set_userdata('test.test_id', $test_status_post['test.test_id']);
    $this->session->set_userdata('test_status_type.test_status_type_id', $test_status_post['test_status_type.test_status_type_id']);
    $this->db->insert('test_status', $test_status_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $test_status_post);
  }
  function test_status_update($test_id,$test_status_type_id,$test_status_id) {
    $test_status_post['test.test_id'] = $this->session->test_test_id;
    $test_status_post['test_status_type.test_status_type_id'] = $this->session->test_status_type_test_status_type_id;
    $test_status_post['test_status.test_status_id'] = $this->session->test_status_test_status_id;
    $test_status_post['test.test_id'] = $test_test_id;
    $test_status_post['test_status_type.test_status_type_id'] = $test_status_type_test_status_type_id;
    $test_status_post['test_status.test_status_id'] = $test_status_test_status_id;
    $test_status_post['test_status.status_date_time'] = is_null($this->input->post('test_status_status_date_time')) ? '' : $this->input->post('test_status_status_date_time');
    $test_status_post['test_status.test_id'] = is_null($this->input->post('test_status_test_id')) ? '' : $this->input->post('test_status_test_id');
    $test_status_post['test_status.test_status_type_id'] = is_null($this->input->post('test_status_test_status_type_id')) ? '' : $this->input->post('test_status_test_status_type_id');
    $this->session->set_userdata('test.test_id', $test_status_post['test.test_id']);
    $this->session->set_userdata('test_status_type.test_status_type_id', $test_status_post['test_status_type.test_status_type_id']);
    $this->session->set_userdata('test_status.test_status_id', $test_status_post['test_status.test_status_id']);
    $this->db->update('test_status', $test_status_post, array('test_status_id' => $test_status_post['test_status_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_status_post);
  }
  function test_status_delete() {
    $test_status_delete['test_status.status_date_time'] = is_null($this->input->post('test_status_status_date_time')) ? '' : $this->input->post('test_status_status_date_time');
    $test_status_delete['test_status.test_id'] = is_null($this->input->post('test_status_test_id')) ? '' : $this->input->post('test_status_test_id');
    $test_status_delete['test_status.test_status_id'] = is_null($this->input->post('test_status_test_status_id')) ? '' : $this->input->post('test_status_test_status_id');
    $test_status_delete['test_status.test_status_type_id'] = is_null($this->input->post('test_status_test_status_type_id')) ? '' : $this->input->post('test_status_test_status_type_id');
    $this->db->delete('test_status', array('test_status_id' => $test_status_delete['test_status_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_status_delete);
  }
  function test_status_get_records($test_id,$test_status_type_id,$test_status_id) {
    $test_status_filters['test.test_id'] = $this->session->test_test_id;
    $test_status_filters['test_status_type.test_status_type_id'] = $this->session->test_status_type_test_status_type_id;
    $test_status_filters['test_status.test_status_id'] = $this->session->test_status_test_status_id;
    $test_status_filters['test.test_id'] = $test_test_id;
    $test_status_filters['test_status_type.test_status_type_id'] = $test_status_type_test_status_type_id;
    $test_status_filters['test_status.test_status_id'] = $test_status_test_status_id;
    $test_status_filters['test_status.status_date_time'] = is_null($this->input->post('test_status_status_date_time')) ? '' : $this->input->post('test_status_status_date_time');
    $test_status_filters['test_status.test_id'] = is_null($this->input->post('test_status_test_id')) ? '' : $this->input->post('test_status_test_id');
    $test_status_filters['test_status.test_status_type_id'] = is_null($this->input->post('test_status_test_status_type_id')) ? '' : $this->input->post('test_status_test_status_type_id');
    $this->session->set_userdata('test.test_id', $test_status_filters['test.test_id']);
    $this->session->set_userdata('test_status_type.test_status_type_id', $test_status_filters['test_status_type.test_status_type_id']);
    $this->session->set_userdata('test_status.test_status_id', $test_status_filters['test_status.test_status_id']);
    $this->db->select('test.test_id AS test_status_test_id, test_status_type.test_status_type_id AS test_status_test_status_type_id,
    test_status.status_date_time AS test_status_status_date_time, test_status.test_id AS test_status_test_id,
    test_status.test_status_id AS test_status_test_status_id, test_status.test_status_type_id AS test_status_test_status_type_id')->from('test_status');
    $this->db->join('test', 'test_status.test_id = test.test_id', 'left');
    $this->db->join('test_status_type', 'test_status.test_status_type_id = test_status_type.test_status_type_id', 'left');
    $this->db->where($test_status_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $test_status_filters);
  }
}