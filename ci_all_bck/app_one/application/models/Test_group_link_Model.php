<?php class Test_group_link_model extends CI_Model {
  function test_group_link_create() {
    $test_group_link_post = [];
    $test_group_link_post['test_group.group_id'] = $this->session->test_group_group_id;
    $test_group_link_post['test_master.test_master_id'] = $this->session->test_master_test_master_id;
    $test_group_link_post['test_group.group_id'] = $test_group_group_id;
    $test_group_link_post['test_master.test_master_id'] = $test_master_test_master_id;
    $test_group_link_post['link_id'] = is_null($this->input->post('link_id')) ? '' : $this->input->post('link_id');
    $test_group_link_post['group_id'] = is_null($this->input->post('group_id')) ? '' : $this->input->post('group_id');
    $test_group_link_post['test_master_id'] = is_null($this->input->post('test_master_id')) ? '' : $this->input->post('test_master_id');
    $this->session->set_userdata('test_group.group_id', $test_group_link_post['test_group.group_id']);
    $this->session->set_userdata('test_master.test_master_id', $test_group_link_post['test_master.test_master_id']);
    $this->db->insert('test_group_link', $test_group_link_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $test_group_link_post);
  }
  function test_group_link_update() {
    $test_group_link_post['test_group.group_id'] = $this->session->test_group_group_id;
    $test_group_link_post['test_master.test_master_id'] = $this->session->test_master_test_master_id;
    $test_group_link_post['test_group_link.link_id'] = $this->session->test_group_link_link_id;
    $test_group_link_post['test_group.group_id'] = $test_group_group_id;
    $test_group_link_post['test_master.test_master_id'] = $test_master_test_master_id;
    $test_group_link_post['test_group_link.link_id'] = $test_group_link_link_id;
    $test_group_link_post['test_group_link.group_id'] = is_null($this->input->post('test_group_link_group_id')) ? '' : $this->input->post('test_group_link_group_id');
    $test_group_link_post['test_group_link.test_master_id'] = is_null($this->input->post('test_group_link_test_master_id')) ? '' : $this->input->post('test_group_link_test_master_id');
    $this->session->set_userdata('test_group.group_id', $test_group_link_post['test_group.group_id']);
    $this->session->set_userdata('test_master.test_master_id', $test_group_link_post['test_master.test_master_id']);
    $this->session->set_userdata('test_group_link.link_id', $test_group_link_post['test_group_link.link_id']);
    $this->db->update('test_group_link', $test_group_link_post, array('link_id' => $test_group_link_post['link_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_group_link_post);
  }
  function test_group_link_delete() {
    $test_group_link_delete['test_group_link.link_id'] = is_null($this->input->post('test_group_link_link_id')) ? '' : $this->input->post('test_group_link_link_id');
    $test_group_link_delete['test_group_link.group_id'] = is_null($this->input->post('test_group_link_group_id')) ? '' : $this->input->post('test_group_link_group_id');
    $test_group_link_delete['test_group_link.test_master_id'] = is_null($this->input->post('test_group_link_test_master_id')) ? '' : $this->input->post('test_group_link_test_master_id');
    $this->db->delete('test_group_link', array('link_id' => $test_group_link_delete['link_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_group_link_delete);
  }
  function test_group_link_get_records() {
    $test_group_link_filters['test_group.group_id'] = $this->session->test_group_group_id;
    $test_group_link_filters['test_master.test_master_id'] = $this->session->test_master_test_master_id;
    $test_group_link_filters['test_group_link.link_id'] = $this->session->test_group_link_link_id;
    $test_group_link_filters['test_group.group_id'] = $test_group_group_id;
    $test_group_link_filters['test_master.test_master_id'] = $test_master_test_master_id;
    $test_group_link_filters['test_group_link.link_id'] = $test_group_link_link_id;
    $test_group_link_filters['test_group_link.group_id'] = is_null($this->input->post('test_group_link_group_id')) ? '' : $this->input->post('test_group_link_group_id');
    $test_group_link_filters['test_group_link.test_master_id'] = is_null($this->input->post('test_group_link_test_master_id')) ? '' : $this->input->post('test_group_link_test_master_id');
    $this->session->set_userdata('test_group.group_id', $test_group_link_filters['test_group.group_id']);
    $this->session->set_userdata('test_master.test_master_id', $test_group_link_filters['test_master.test_master_id']);
    $this->session->set_userdata('test_group_link.link_id', $test_group_link_filters['test_group_link.link_id']);
    $this->db->select('test_group.group_id AS test_group_link_group_id, test_master.test_master_id AS test_group_link_test_master_id,
    test_group_link.link_id AS test_group_link_link_id, test_group_link.group_id AS test_group_link_group_id,
    test_group_link.test_master_id AS test_group_link_test_master_id')->from('test_group_link');
    $this->db->join('test_group', 'test_group_link.group_id = test_group.group_id', 'left');
    $this->db->join('test_master', 'test_group_link.test_master_id = test_master.test_master_id', 'left');
    $this->db->where($test_group_link_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $test_group_link_filters);
  }
}