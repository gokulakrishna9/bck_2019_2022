<?php class Test_model extends CI_Model {
  function test_create() {
    $test_post = [];
    $test_post['test_order.order_id'] = $this->session->test_order_order_id;
    $test_post['test_sample.sample_id'] = $this->session->test_sample_sample_id;
    $test_post['test_master.test_master_id'] = $this->session->test_master_test_master_id;
    $test_post['test_group.group_id'] = $this->session->test_group_group_id;
    $test_post['test_order.order_id'] = $test_order_order_id;
    $test_post['test_sample.sample_id'] = $test_sample_sample_id;
    $test_post['test_master.test_master_id'] = $test_master_test_master_id;
    $test_post['test_group.group_id'] = $test_group_group_id;
    $test_post['test_id'] = is_null($this->input->post('test_id')) ? '' : $this->input->post('test_id');
    $test_post['order_id'] = is_null($this->input->post('order_id')) ? '' : $this->input->post('order_id');
    $test_post['sample_id'] = is_null($this->input->post('sample_id')) ? '' : $this->input->post('sample_id');
    $test_post['test_master_id'] = is_null($this->input->post('test_master_id')) ? '' : $this->input->post('test_master_id');
    $test_post['group_id'] = is_null($this->input->post('group_id')) ? '' : $this->input->post('group_id');
    $test_post['test_result'] = is_null($this->input->post('test_result')) ? '' : $this->input->post('test_result');
    $test_post['test_result_binary'] = is_null($this->input->post('test_result_binary')) ? '' : $this->input->post('test_result_binary');
    $test_post['test_result_text'] = is_null($this->input->post('test_result_text')) ? '' : $this->input->post('test_result_text');
    $test_post['test_date_time'] = is_null($this->input->post('test_date_time')) ? '' : $this->input->post('test_date_time');
    $test_post['test_done_by'] = is_null($this->input->post('test_done_by')) ? '' : $this->input->post('test_done_by');
    $test_post['test_approved_by'] = is_null($this->input->post('test_approved_by')) ? '' : $this->input->post('test_approved_by');
    $test_post['reported_date_time'] = is_null($this->input->post('reported_date_time')) ? '' : $this->input->post('reported_date_time');
    $test_post['test_status'] = is_null($this->input->post('test_status')) ? '' : $this->input->post('test_status');
    $test_post['test_range_id'] = is_null($this->input->post('test_range_id')) ? '' : $this->input->post('test_range_id');
    $test_post['temp_test_id'] = is_null($this->input->post('temp_test_id')) ? '' : $this->input->post('temp_test_id');
    $this->session->set_userdata('test_order.order_id', $test_post['test_order.order_id']);
    $this->session->set_userdata('test_sample.sample_id', $test_post['test_sample.sample_id']);
    $this->session->set_userdata('test_master.test_master_id', $test_post['test_master.test_master_id']);
    $this->session->set_userdata('test_group.group_id', $test_post['test_group.group_id']);
    $this->db->insert('test', $test_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $test_post);
  }
  function test_update() {
    $test_post['test_order.order_id'] = $this->session->test_order_order_id;
    $test_post['test_sample.sample_id'] = $this->session->test_sample_sample_id;
    $test_post['test_master.test_master_id'] = $this->session->test_master_test_master_id;
    $test_post['test_group.group_id'] = $this->session->test_group_group_id;
    $test_post['test.test_id'] = $this->session->test_test_id;
    $test_post['test_order.order_id'] = $test_order_order_id;
    $test_post['test_sample.sample_id'] = $test_sample_sample_id;
    $test_post['test_master.test_master_id'] = $test_master_test_master_id;
    $test_post['test_group.group_id'] = $test_group_group_id;
    $test_post['test.test_id'] = $test_test_id;
    $test_post['test.order_id'] = is_null($this->input->post('test_order_id')) ? '' : $this->input->post('test_order_id');
    $test_post['test.sample_id'] = is_null($this->input->post('test_sample_id')) ? '' : $this->input->post('test_sample_id');
    $test_post['test.test_master_id'] = is_null($this->input->post('test_test_master_id')) ? '' : $this->input->post('test_test_master_id');
    $test_post['test.group_id'] = is_null($this->input->post('test_group_id')) ? '' : $this->input->post('test_group_id');
    $test_post['test.test_result'] = is_null($this->input->post('test_test_result')) ? '' : $this->input->post('test_test_result');
    $test_post['test.test_result_binary'] = is_null($this->input->post('test_test_result_binary')) ? '' : $this->input->post('test_test_result_binary');
    $test_post['test.test_result_text'] = is_null($this->input->post('test_test_result_text')) ? '' : $this->input->post('test_test_result_text');
    $test_post['test.test_date_time'] = is_null($this->input->post('test_test_date_time')) ? '' : $this->input->post('test_test_date_time');
    $test_post['test.test_done_by'] = is_null($this->input->post('test_test_done_by')) ? '' : $this->input->post('test_test_done_by');
    $test_post['test.test_approved_by'] = is_null($this->input->post('test_test_approved_by')) ? '' : $this->input->post('test_test_approved_by');
    $test_post['test.reported_date_time'] = is_null($this->input->post('test_reported_date_time')) ? '' : $this->input->post('test_reported_date_time');
    $test_post['test.test_status'] = is_null($this->input->post('test_test_status')) ? '' : $this->input->post('test_test_status');
    $test_post['test.test_range_id'] = is_null($this->input->post('test_test_range_id')) ? '' : $this->input->post('test_test_range_id');
    $test_post['test.temp_test_id'] = is_null($this->input->post('test_temp_test_id')) ? '' : $this->input->post('test_temp_test_id');
    $this->session->set_userdata('test_order.order_id', $test_post['test_order.order_id']);
    $this->session->set_userdata('test_sample.sample_id', $test_post['test_sample.sample_id']);
    $this->session->set_userdata('test_master.test_master_id', $test_post['test_master.test_master_id']);
    $this->session->set_userdata('test_group.group_id', $test_post['test_group.group_id']);
    $this->session->set_userdata('test.test_id', $test_post['test.test_id']);
    $this->db->update('test', $test_post, array('test_id' => $test_post['test_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_post);
  }
  function test_delete() {
    $test_delete['test.test_id'] = is_null($this->input->post('test_test_id')) ? '' : $this->input->post('test_test_id');
    $test_delete['test.order_id'] = is_null($this->input->post('test_order_id')) ? '' : $this->input->post('test_order_id');
    $test_delete['test.sample_id'] = is_null($this->input->post('test_sample_id')) ? '' : $this->input->post('test_sample_id');
    $test_delete['test.test_master_id'] = is_null($this->input->post('test_test_master_id')) ? '' : $this->input->post('test_test_master_id');
    $test_delete['test.group_id'] = is_null($this->input->post('test_group_id')) ? '' : $this->input->post('test_group_id');
    $test_delete['test.test_result'] = is_null($this->input->post('test_test_result')) ? '' : $this->input->post('test_test_result');
    $test_delete['test.test_result_binary'] = is_null($this->input->post('test_test_result_binary')) ? '' : $this->input->post('test_test_result_binary');
    $test_delete['test.test_result_text'] = is_null($this->input->post('test_test_result_text')) ? '' : $this->input->post('test_test_result_text');
    $test_delete['test.test_date_time'] = is_null($this->input->post('test_test_date_time')) ? '' : $this->input->post('test_test_date_time');
    $test_delete['test.test_done_by'] = is_null($this->input->post('test_test_done_by')) ? '' : $this->input->post('test_test_done_by');
    $test_delete['test.test_approved_by'] = is_null($this->input->post('test_test_approved_by')) ? '' : $this->input->post('test_test_approved_by');
    $test_delete['test.reported_date_time'] = is_null($this->input->post('test_reported_date_time')) ? '' : $this->input->post('test_reported_date_time');
    $test_delete['test.test_status'] = is_null($this->input->post('test_test_status')) ? '' : $this->input->post('test_test_status');
    $test_delete['test.test_range_id'] = is_null($this->input->post('test_test_range_id')) ? '' : $this->input->post('test_test_range_id');
    $test_delete['test.temp_test_id'] = is_null($this->input->post('test_temp_test_id')) ? '' : $this->input->post('test_temp_test_id');
    $this->db->delete('test', array('test_id' => $test_delete['test_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_delete);
  }
  function test_get_records() {
    $test_filters['test_order.order_id'] = $this->session->test_order_order_id;
    $test_filters['test_sample.sample_id'] = $this->session->test_sample_sample_id;
    $test_filters['test_master.test_master_id'] = $this->session->test_master_test_master_id;
    $test_filters['test_group.group_id'] = $this->session->test_group_group_id;
    $test_filters['test.test_id'] = $this->session->test_test_id;
    $test_filters['test_order.order_id'] = $test_order_order_id;
    $test_filters['test_sample.sample_id'] = $test_sample_sample_id;
    $test_filters['test_master.test_master_id'] = $test_master_test_master_id;
    $test_filters['test_group.group_id'] = $test_group_group_id;
    $test_filters['test.test_id'] = $test_test_id;
    $test_filters['test.order_id'] = is_null($this->input->post('test_order_id')) ? '' : $this->input->post('test_order_id');
    $test_filters['test.sample_id'] = is_null($this->input->post('test_sample_id')) ? '' : $this->input->post('test_sample_id');
    $test_filters['test.test_master_id'] = is_null($this->input->post('test_test_master_id')) ? '' : $this->input->post('test_test_master_id');
    $test_filters['test.group_id'] = is_null($this->input->post('test_group_id')) ? '' : $this->input->post('test_group_id');
    $test_filters['test.test_result'] = is_null($this->input->post('test_test_result')) ? '' : $this->input->post('test_test_result');
    $test_filters['test.test_result_binary'] = is_null($this->input->post('test_test_result_binary')) ? '' : $this->input->post('test_test_result_binary');
    $test_filters['test.test_result_text'] = is_null($this->input->post('test_test_result_text')) ? '' : $this->input->post('test_test_result_text');
    $test_filters['test.test_date_time'] = is_null($this->input->post('test_test_date_time')) ? '' : $this->input->post('test_test_date_time');
    $test_filters['test.test_done_by'] = is_null($this->input->post('test_test_done_by')) ? '' : $this->input->post('test_test_done_by');
    $test_filters['test.test_approved_by'] = is_null($this->input->post('test_test_approved_by')) ? '' : $this->input->post('test_test_approved_by');
    $test_filters['test.reported_date_time'] = is_null($this->input->post('test_reported_date_time')) ? '' : $this->input->post('test_reported_date_time');
    $test_filters['test.test_status'] = is_null($this->input->post('test_test_status')) ? '' : $this->input->post('test_test_status');
    $test_filters['test.test_range_id'] = is_null($this->input->post('test_test_range_id')) ? '' : $this->input->post('test_test_range_id');
    $test_filters['test.temp_test_id'] = is_null($this->input->post('test_temp_test_id')) ? '' : $this->input->post('test_temp_test_id');
    $this->session->set_userdata('test_order.order_id', $test_filters['test_order.order_id']);
    $this->session->set_userdata('test_sample.sample_id', $test_filters['test_sample.sample_id']);
    $this->session->set_userdata('test_master.test_master_id', $test_filters['test_master.test_master_id']);
    $this->session->set_userdata('test_group.group_id', $test_filters['test_group.group_id']);
    $this->session->set_userdata('test.test_id', $test_filters['test.test_id']);
    $this->db->select('test_order.order_id AS test_order_id, test_sample.sample_id AS test_sample_id,
    test_master.test_master_id AS test_test_master_id, test_group.group_id AS test_group_id,
    test.test_id AS test_test_id, test.order_id AS test_order_id,
    test.sample_id AS test_sample_id, test.test_master_id AS test_test_master_id,
    test.group_id AS test_group_id, test.test_result AS test_test_result,
    test.test_result_binary AS test_test_result_binary, test.test_result_text AS test_test_result_text,
    test.test_date_time AS test_test_date_time, test.test_done_by AS test_test_done_by,
    test.test_approved_by AS test_test_approved_by, test.reported_date_time AS test_reported_date_time,
    test.test_status AS test_test_status, test.test_range_id AS test_test_range_id,
    test.temp_test_id AS test_temp_test_id')->from('test');
    $this->db->join('test_order', 'test.order_id = test_order.order_id', 'left');
    $this->db->join('test_sample', 'test.sample_id = test_sample.sample_id', 'left');
    $this->db->join('test_master', 'test.test_master_id = test_master.test_master_id', 'left');
    $this->db->join('test_group', 'test.group_id = test_group.group_id', 'left');
    $this->db->where($test_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $test_filters);
  }
}