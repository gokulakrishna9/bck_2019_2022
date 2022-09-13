<?php class Test_range_model extends CI_Model {
  function test_range_create() {
    $test_range_post = [];
    $test_range_post['test_master.test_master_id'] = $this->session->test_master_test_master_id;
    $test_range_post['test_master.test_master_id'] = $test_master_test_master_id;
    $test_range_post['test_range_id'] = is_null($this->input->post('test_range_id')) ? '' : $this->input->post('test_range_id');
    $test_range_post['test_master_id'] = is_null($this->input->post('test_master_id')) ? '' : $this->input->post('test_master_id');
    $test_range_post['gender'] = is_null($this->input->post('gender')) ? '' : $this->input->post('gender');
    $test_range_post['min'] = is_null($this->input->post('min')) ? '' : $this->input->post('min');
    $test_range_post['max'] = is_null($this->input->post('max')) ? '' : $this->input->post('max');
    $test_range_post['range_text'] = is_null($this->input->post('range_text')) ? '' : $this->input->post('range_text');
    $test_range_post['from_year'] = is_null($this->input->post('from_year')) ? '' : $this->input->post('from_year');
    $test_range_post['to_year'] = is_null($this->input->post('to_year')) ? '' : $this->input->post('to_year');
    $test_range_post['from_month'] = is_null($this->input->post('from_month')) ? '' : $this->input->post('from_month');
    $test_range_post['to_month'] = is_null($this->input->post('to_month')) ? '' : $this->input->post('to_month');
    $test_range_post['from_day'] = is_null($this->input->post('from_day')) ? '' : $this->input->post('from_day');
    $test_range_post['to_day'] = is_null($this->input->post('to_day')) ? '' : $this->input->post('to_day');
    $test_range_post['range_type'] = is_null($this->input->post('range_type')) ? '' : $this->input->post('range_type');
    $test_range_post['age_type'] = is_null($this->input->post('age_type')) ? '' : $this->input->post('age_type');
    $test_range_post['range_active'] = is_null($this->input->post('range_active')) ? '' : $this->input->post('range_active');
    $test_range_post['temp_test_range_id'] = is_null($this->input->post('temp_test_range_id')) ? '' : $this->input->post('temp_test_range_id');
    $this->session->set_userdata('test_master.test_master_id', $test_range_post['test_master.test_master_id']);
    $this->db->insert('test_range', $test_range_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $test_range_post);
  }
  function test_range_update() {
    $test_range_post['test_master.test_master_id'] = $this->session->test_master_test_master_id;
    $test_range_post['test_range.test_range_id'] = $this->session->test_range_test_range_id;
    $test_range_post['test_master.test_master_id'] = $test_master_test_master_id;
    $test_range_post['test_range.test_range_id'] = $test_range_test_range_id;
    $test_range_post['test_range.test_master_id'] = is_null($this->input->post('test_range_test_master_id')) ? '' : $this->input->post('test_range_test_master_id');
    $test_range_post['test_range.gender'] = is_null($this->input->post('test_range_gender')) ? '' : $this->input->post('test_range_gender');
    $test_range_post['test_range.min'] = is_null($this->input->post('test_range_min')) ? '' : $this->input->post('test_range_min');
    $test_range_post['test_range.max'] = is_null($this->input->post('test_range_max')) ? '' : $this->input->post('test_range_max');
    $test_range_post['test_range.range_text'] = is_null($this->input->post('test_range_range_text')) ? '' : $this->input->post('test_range_range_text');
    $test_range_post['test_range.from_year'] = is_null($this->input->post('test_range_from_year')) ? '' : $this->input->post('test_range_from_year');
    $test_range_post['test_range.to_year'] = is_null($this->input->post('test_range_to_year')) ? '' : $this->input->post('test_range_to_year');
    $test_range_post['test_range.from_month'] = is_null($this->input->post('test_range_from_month')) ? '' : $this->input->post('test_range_from_month');
    $test_range_post['test_range.to_month'] = is_null($this->input->post('test_range_to_month')) ? '' : $this->input->post('test_range_to_month');
    $test_range_post['test_range.from_day'] = is_null($this->input->post('test_range_from_day')) ? '' : $this->input->post('test_range_from_day');
    $test_range_post['test_range.to_day'] = is_null($this->input->post('test_range_to_day')) ? '' : $this->input->post('test_range_to_day');
    $test_range_post['test_range.range_type'] = is_null($this->input->post('test_range_range_type')) ? '' : $this->input->post('test_range_range_type');
    $test_range_post['test_range.age_type'] = is_null($this->input->post('test_range_age_type')) ? '' : $this->input->post('test_range_age_type');
    $test_range_post['test_range.range_active'] = is_null($this->input->post('test_range_range_active')) ? '' : $this->input->post('test_range_range_active');
    $test_range_post['test_range.temp_test_range_id'] = is_null($this->input->post('test_range_temp_test_range_id')) ? '' : $this->input->post('test_range_temp_test_range_id');
    $this->session->set_userdata('test_master.test_master_id', $test_range_post['test_master.test_master_id']);
    $this->session->set_userdata('test_range.test_range_id', $test_range_post['test_range.test_range_id']);
    $this->db->update('test_range', $test_range_post, array('test_range_id' => $test_range_post['test_range_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_range_post);
  }
  function test_range_delete() {
    $test_range_delete['test_range.test_range_id'] = is_null($this->input->post('test_range_test_range_id')) ? '' : $this->input->post('test_range_test_range_id');
    $test_range_delete['test_range.test_master_id'] = is_null($this->input->post('test_range_test_master_id')) ? '' : $this->input->post('test_range_test_master_id');
    $test_range_delete['test_range.gender'] = is_null($this->input->post('test_range_gender')) ? '' : $this->input->post('test_range_gender');
    $test_range_delete['test_range.min'] = is_null($this->input->post('test_range_min')) ? '' : $this->input->post('test_range_min');
    $test_range_delete['test_range.max'] = is_null($this->input->post('test_range_max')) ? '' : $this->input->post('test_range_max');
    $test_range_delete['test_range.range_text'] = is_null($this->input->post('test_range_range_text')) ? '' : $this->input->post('test_range_range_text');
    $test_range_delete['test_range.from_year'] = is_null($this->input->post('test_range_from_year')) ? '' : $this->input->post('test_range_from_year');
    $test_range_delete['test_range.to_year'] = is_null($this->input->post('test_range_to_year')) ? '' : $this->input->post('test_range_to_year');
    $test_range_delete['test_range.from_month'] = is_null($this->input->post('test_range_from_month')) ? '' : $this->input->post('test_range_from_month');
    $test_range_delete['test_range.to_month'] = is_null($this->input->post('test_range_to_month')) ? '' : $this->input->post('test_range_to_month');
    $test_range_delete['test_range.from_day'] = is_null($this->input->post('test_range_from_day')) ? '' : $this->input->post('test_range_from_day');
    $test_range_delete['test_range.to_day'] = is_null($this->input->post('test_range_to_day')) ? '' : $this->input->post('test_range_to_day');
    $test_range_delete['test_range.range_type'] = is_null($this->input->post('test_range_range_type')) ? '' : $this->input->post('test_range_range_type');
    $test_range_delete['test_range.age_type'] = is_null($this->input->post('test_range_age_type')) ? '' : $this->input->post('test_range_age_type');
    $test_range_delete['test_range.range_active'] = is_null($this->input->post('test_range_range_active')) ? '' : $this->input->post('test_range_range_active');
    $test_range_delete['test_range.temp_test_range_id'] = is_null($this->input->post('test_range_temp_test_range_id')) ? '' : $this->input->post('test_range_temp_test_range_id');
    $this->db->delete('test_range', array('test_range_id' => $test_range_delete['test_range_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_range_delete);
  }
  function test_range_get_records() {
    $test_range_filters['test_master.test_master_id'] = $this->session->test_master_test_master_id;
    $test_range_filters['test_range.test_range_id'] = $this->session->test_range_test_range_id;
    $test_range_filters['test_master.test_master_id'] = $test_master_test_master_id;
    $test_range_filters['test_range.test_range_id'] = $test_range_test_range_id;
    $test_range_filters['test_range.test_master_id'] = is_null($this->input->post('test_range_test_master_id')) ? '' : $this->input->post('test_range_test_master_id');
    $test_range_filters['test_range.gender'] = is_null($this->input->post('test_range_gender')) ? '' : $this->input->post('test_range_gender');
    $test_range_filters['test_range.min'] = is_null($this->input->post('test_range_min')) ? '' : $this->input->post('test_range_min');
    $test_range_filters['test_range.max'] = is_null($this->input->post('test_range_max')) ? '' : $this->input->post('test_range_max');
    $test_range_filters['test_range.range_text'] = is_null($this->input->post('test_range_range_text')) ? '' : $this->input->post('test_range_range_text');
    $test_range_filters['test_range.from_year'] = is_null($this->input->post('test_range_from_year')) ? '' : $this->input->post('test_range_from_year');
    $test_range_filters['test_range.to_year'] = is_null($this->input->post('test_range_to_year')) ? '' : $this->input->post('test_range_to_year');
    $test_range_filters['test_range.from_month'] = is_null($this->input->post('test_range_from_month')) ? '' : $this->input->post('test_range_from_month');
    $test_range_filters['test_range.to_month'] = is_null($this->input->post('test_range_to_month')) ? '' : $this->input->post('test_range_to_month');
    $test_range_filters['test_range.from_day'] = is_null($this->input->post('test_range_from_day')) ? '' : $this->input->post('test_range_from_day');
    $test_range_filters['test_range.to_day'] = is_null($this->input->post('test_range_to_day')) ? '' : $this->input->post('test_range_to_day');
    $test_range_filters['test_range.range_type'] = is_null($this->input->post('test_range_range_type')) ? '' : $this->input->post('test_range_range_type');
    $test_range_filters['test_range.age_type'] = is_null($this->input->post('test_range_age_type')) ? '' : $this->input->post('test_range_age_type');
    $test_range_filters['test_range.range_active'] = is_null($this->input->post('test_range_range_active')) ? '' : $this->input->post('test_range_range_active');
    $test_range_filters['test_range.temp_test_range_id'] = is_null($this->input->post('test_range_temp_test_range_id')) ? '' : $this->input->post('test_range_temp_test_range_id');
    $this->session->set_userdata('test_master.test_master_id', $test_range_filters['test_master.test_master_id']);
    $this->session->set_userdata('test_range.test_range_id', $test_range_filters['test_range.test_range_id']);
    $this->db->select('test_master.test_master_id AS test_range_test_master_id, test_range.test_range_id AS test_range_test_range_id,
    test_range.test_master_id AS test_range_test_master_id, test_range.gender AS test_range_gender,
    test_range.min AS test_range_min, test_range.max AS test_range_max,
    test_range.range_text AS test_range_range_text, test_range.from_year AS test_range_from_year,
    test_range.to_year AS test_range_to_year, test_range.from_month AS test_range_from_month,
    test_range.to_month AS test_range_to_month, test_range.from_day AS test_range_from_day,
    test_range.to_day AS test_range_to_day, test_range.range_type AS test_range_range_type,
    test_range.age_type AS test_range_age_type, test_range.range_active AS test_range_range_active,
    test_range.temp_test_range_id AS test_range_temp_test_range_id')->from('test_range');
    $this->db->join('test_master', 'test_range.test_master_id = test_master.test_master_id', 'left');
    $this->db->where($test_range_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $test_range_filters);
  }
}