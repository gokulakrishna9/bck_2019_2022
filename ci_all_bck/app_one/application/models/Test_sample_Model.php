<?php class Test_sample_model extends CI_Model {
  function test_sample_create() {
    $test_sample_post = [];
    $test_sample_post['test_order.order_id'] = $this->session->test_order_order_id;
    $test_sample_post['specimen_type.specimen_type_id'] = $this->session->specimen_type_specimen_type_id;
    $test_sample_post['sample_status.sample_status_id'] = $this->session->sample_status_sample_status_id;
    $test_sample_post['test_order.order_id'] = $test_order_order_id;
    $test_sample_post['specimen_type.specimen_type_id'] = $specimen_type_specimen_type_id;
    $test_sample_post['sample_status.sample_status_id'] = $sample_status_sample_status_id;
    $test_sample_post['sample_id'] = is_null($this->input->post('sample_id')) ? '' : $this->input->post('sample_id');
    $test_sample_post['sample_code'] = is_null($this->input->post('sample_code')) ? '' : $this->input->post('sample_code');
    $test_sample_post['sample_date_time'] = is_null($this->input->post('sample_date_time')) ? '' : $this->input->post('sample_date_time');
    $test_sample_post['order_id'] = is_null($this->input->post('order_id')) ? '' : $this->input->post('order_id');
    $test_sample_post['specimen_type_id'] = is_null($this->input->post('specimen_type_id')) ? '' : $this->input->post('specimen_type_id');
    $test_sample_post['sample_container_type'] = is_null($this->input->post('sample_container_type')) ? '' : $this->input->post('sample_container_type');
    $test_sample_post['specimen_source'] = is_null($this->input->post('specimen_source')) ? '' : $this->input->post('specimen_source');
    $test_sample_post['sample_status_id'] = is_null($this->input->post('sample_status_id')) ? '' : $this->input->post('sample_status_id');
    $test_sample_post['temp_sample_id'] = is_null($this->input->post('temp_sample_id')) ? '' : $this->input->post('temp_sample_id');
    $this->session->set_userdata('test_order.order_id', $test_sample_post['test_order.order_id']);
    $this->session->set_userdata('specimen_type.specimen_type_id', $test_sample_post['specimen_type.specimen_type_id']);
    $this->session->set_userdata('sample_status.sample_status_id', $test_sample_post['sample_status.sample_status_id']);
    $this->db->insert('test_sample', $test_sample_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $test_sample_post);
  }
  function test_sample_update() {
    $test_sample_post['test_order.order_id'] = $this->session->test_order_order_id;
    $test_sample_post['specimen_type.specimen_type_id'] = $this->session->specimen_type_specimen_type_id;
    $test_sample_post['sample_status.sample_status_id'] = $this->session->sample_status_sample_status_id;
    $test_sample_post['test_sample.sample_id'] = $this->session->test_sample_sample_id;
    $test_sample_post['test_order.order_id'] = $test_order_order_id;
    $test_sample_post['specimen_type.specimen_type_id'] = $specimen_type_specimen_type_id;
    $test_sample_post['sample_status.sample_status_id'] = $sample_status_sample_status_id;
    $test_sample_post['test_sample.sample_id'] = $test_sample_sample_id;
    $test_sample_post['test_sample.sample_code'] = is_null($this->input->post('test_sample_sample_code')) ? '' : $this->input->post('test_sample_sample_code');
    $test_sample_post['test_sample.sample_date_time'] = is_null($this->input->post('test_sample_sample_date_time')) ? '' : $this->input->post('test_sample_sample_date_time');
    $test_sample_post['test_sample.order_id'] = is_null($this->input->post('test_sample_order_id')) ? '' : $this->input->post('test_sample_order_id');
    $test_sample_post['test_sample.specimen_type_id'] = is_null($this->input->post('test_sample_specimen_type_id')) ? '' : $this->input->post('test_sample_specimen_type_id');
    $test_sample_post['test_sample.sample_container_type'] = is_null($this->input->post('test_sample_sample_container_type')) ? '' : $this->input->post('test_sample_sample_container_type');
    $test_sample_post['test_sample.specimen_source'] = is_null($this->input->post('test_sample_specimen_source')) ? '' : $this->input->post('test_sample_specimen_source');
    $test_sample_post['test_sample.sample_status_id'] = is_null($this->input->post('test_sample_sample_status_id')) ? '' : $this->input->post('test_sample_sample_status_id');
    $test_sample_post['test_sample.temp_sample_id'] = is_null($this->input->post('test_sample_temp_sample_id')) ? '' : $this->input->post('test_sample_temp_sample_id');
    $this->session->set_userdata('test_order.order_id', $test_sample_post['test_order.order_id']);
    $this->session->set_userdata('specimen_type.specimen_type_id', $test_sample_post['specimen_type.specimen_type_id']);
    $this->session->set_userdata('sample_status.sample_status_id', $test_sample_post['sample_status.sample_status_id']);
    $this->session->set_userdata('test_sample.sample_id', $test_sample_post['test_sample.sample_id']);
    $this->db->update('test_sample', $test_sample_post, array('sample_id' => $test_sample_post['sample_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_sample_post);
  }
  function test_sample_delete() {
    $test_sample_delete['test_sample.sample_id'] = is_null($this->input->post('test_sample_sample_id')) ? '' : $this->input->post('test_sample_sample_id');
    $test_sample_delete['test_sample.sample_code'] = is_null($this->input->post('test_sample_sample_code')) ? '' : $this->input->post('test_sample_sample_code');
    $test_sample_delete['test_sample.sample_date_time'] = is_null($this->input->post('test_sample_sample_date_time')) ? '' : $this->input->post('test_sample_sample_date_time');
    $test_sample_delete['test_sample.order_id'] = is_null($this->input->post('test_sample_order_id')) ? '' : $this->input->post('test_sample_order_id');
    $test_sample_delete['test_sample.specimen_type_id'] = is_null($this->input->post('test_sample_specimen_type_id')) ? '' : $this->input->post('test_sample_specimen_type_id');
    $test_sample_delete['test_sample.sample_container_type'] = is_null($this->input->post('test_sample_sample_container_type')) ? '' : $this->input->post('test_sample_sample_container_type');
    $test_sample_delete['test_sample.specimen_source'] = is_null($this->input->post('test_sample_specimen_source')) ? '' : $this->input->post('test_sample_specimen_source');
    $test_sample_delete['test_sample.sample_status_id'] = is_null($this->input->post('test_sample_sample_status_id')) ? '' : $this->input->post('test_sample_sample_status_id');
    $test_sample_delete['test_sample.temp_sample_id'] = is_null($this->input->post('test_sample_temp_sample_id')) ? '' : $this->input->post('test_sample_temp_sample_id');
    $this->db->delete('test_sample', array('sample_id' => $test_sample_delete['sample_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_sample_delete);
  }
  function test_sample_get_records() {
    $test_sample_filters['test_order.order_id'] = $this->session->test_order_order_id;
    $test_sample_filters['specimen_type.specimen_type_id'] = $this->session->specimen_type_specimen_type_id;
    $test_sample_filters['sample_status.sample_status_id'] = $this->session->sample_status_sample_status_id;
    $test_sample_filters['test_sample.sample_id'] = $this->session->test_sample_sample_id;
    $test_sample_filters['test_order.order_id'] = $test_order_order_id;
    $test_sample_filters['specimen_type.specimen_type_id'] = $specimen_type_specimen_type_id;
    $test_sample_filters['sample_status.sample_status_id'] = $sample_status_sample_status_id;
    $test_sample_filters['test_sample.sample_id'] = $test_sample_sample_id;
    $test_sample_filters['test_sample.sample_code'] = is_null($this->input->post('test_sample_sample_code')) ? '' : $this->input->post('test_sample_sample_code');
    $test_sample_filters['test_sample.sample_date_time'] = is_null($this->input->post('test_sample_sample_date_time')) ? '' : $this->input->post('test_sample_sample_date_time');
    $test_sample_filters['test_sample.order_id'] = is_null($this->input->post('test_sample_order_id')) ? '' : $this->input->post('test_sample_order_id');
    $test_sample_filters['test_sample.specimen_type_id'] = is_null($this->input->post('test_sample_specimen_type_id')) ? '' : $this->input->post('test_sample_specimen_type_id');
    $test_sample_filters['test_sample.sample_container_type'] = is_null($this->input->post('test_sample_sample_container_type')) ? '' : $this->input->post('test_sample_sample_container_type');
    $test_sample_filters['test_sample.specimen_source'] = is_null($this->input->post('test_sample_specimen_source')) ? '' : $this->input->post('test_sample_specimen_source');
    $test_sample_filters['test_sample.sample_status_id'] = is_null($this->input->post('test_sample_sample_status_id')) ? '' : $this->input->post('test_sample_sample_status_id');
    $test_sample_filters['test_sample.temp_sample_id'] = is_null($this->input->post('test_sample_temp_sample_id')) ? '' : $this->input->post('test_sample_temp_sample_id');
    $this->session->set_userdata('test_order.order_id', $test_sample_filters['test_order.order_id']);
    $this->session->set_userdata('specimen_type.specimen_type_id', $test_sample_filters['specimen_type.specimen_type_id']);
    $this->session->set_userdata('sample_status.sample_status_id', $test_sample_filters['sample_status.sample_status_id']);
    $this->session->set_userdata('test_sample.sample_id', $test_sample_filters['test_sample.sample_id']);
    $this->db->select('test_order.order_id AS test_sample_order_id, specimen_type.specimen_type_id AS test_sample_specimen_type_id,
    sample_status.sample_status_id AS test_sample_sample_status_id, test_sample.sample_id AS test_sample_sample_id,
    test_sample.sample_code AS test_sample_sample_code, test_sample.sample_date_time AS test_sample_sample_date_time,
    test_sample.order_id AS test_sample_order_id, test_sample.specimen_type_id AS test_sample_specimen_type_id,
    test_sample.sample_container_type AS test_sample_sample_container_type, test_sample.specimen_source AS test_sample_specimen_source,
    test_sample.sample_status_id AS test_sample_sample_status_id, test_sample.temp_sample_id AS test_sample_temp_sample_id')->from('test_sample');
    $this->db->join('test_order', 'test_sample.order_id = test_order.order_id', 'left');
    $this->db->join('specimen_type', 'test_sample.specimen_type_id = specimen_type.specimen_type_id', 'left');
    $this->db->join('sample_status', 'test_sample.sample_status_id = sample_status.sample_status_id', 'left');
    $this->db->where($test_sample_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $test_sample_filters);
  }
}