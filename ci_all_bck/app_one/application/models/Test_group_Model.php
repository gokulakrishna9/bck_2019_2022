<?php class Test_group_model extends CI_Model {
  function test_group_create() {
    $test_group_post = [];
    $test_group_post['test_method.test_method_id'] = $this->session->test_method_test_method_id;
    $test_group_post['test_method.test_method_id'] = $test_method_test_method_id;
    $test_group_post['group_id'] = is_null($this->input->post('group_id')) ? '' : $this->input->post('group_id');
    $test_group_post['group_name'] = is_null($this->input->post('group_name')) ? '' : $this->input->post('group_name');
    $test_group_post['test_method_id'] = is_null($this->input->post('test_method_id')) ? '' : $this->input->post('test_method_id');
    $test_group_post['has_result'] = is_null($this->input->post('has_result')) ? '' : $this->input->post('has_result');
    $test_group_post['binary_result'] = is_null($this->input->post('binary_result')) ? '' : $this->input->post('binary_result');
    $test_group_post['numeric_result'] = is_null($this->input->post('numeric_result')) ? '' : $this->input->post('numeric_result');
    $test_group_post['text_result'] = is_null($this->input->post('text_result')) ? '' : $this->input->post('text_result');
    $test_group_post['binary_positive'] = is_null($this->input->post('binary_positive')) ? '' : $this->input->post('binary_positive');
    $test_group_post['binary_negative'] = is_null($this->input->post('binary_negative')) ? '' : $this->input->post('binary_negative');
    $test_group_post['numeric_result_unit'] = is_null($this->input->post('numeric_result_unit')) ? '' : $this->input->post('numeric_result_unit');
    $test_group_post['interpretation'] = is_null($this->input->post('interpretation')) ? '' : $this->input->post('interpretation');
    $test_group_post['temp_test_group_id'] = is_null($this->input->post('temp_test_group_id')) ? '' : $this->input->post('temp_test_group_id');
    $test_group_post['temp_group_id'] = is_null($this->input->post('temp_group_id')) ? '' : $this->input->post('temp_group_id');
    $this->session->set_userdata('test_method.test_method_id', $test_group_post['test_method.test_method_id']);
    $this->db->insert('test_group', $test_group_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $test_group_post);
  }
  function test_group_update() {
    $test_group_post['test_method.test_method_id'] = $this->session->test_method_test_method_id;
    $test_group_post['test_group.group_id'] = $this->session->test_group_group_id;
    $test_group_post['test_method.test_method_id'] = $test_method_test_method_id;
    $test_group_post['test_group.group_id'] = $test_group_group_id;
    $test_group_post['test_group.group_name'] = is_null($this->input->post('test_group_group_name')) ? '' : $this->input->post('test_group_group_name');
    $test_group_post['test_group.test_method_id'] = is_null($this->input->post('test_group_test_method_id')) ? '' : $this->input->post('test_group_test_method_id');
    $test_group_post['test_group.has_result'] = is_null($this->input->post('test_group_has_result')) ? '' : $this->input->post('test_group_has_result');
    $test_group_post['test_group.binary_result'] = is_null($this->input->post('test_group_binary_result')) ? '' : $this->input->post('test_group_binary_result');
    $test_group_post['test_group.numeric_result'] = is_null($this->input->post('test_group_numeric_result')) ? '' : $this->input->post('test_group_numeric_result');
    $test_group_post['test_group.text_result'] = is_null($this->input->post('test_group_text_result')) ? '' : $this->input->post('test_group_text_result');
    $test_group_post['test_group.binary_positive'] = is_null($this->input->post('test_group_binary_positive')) ? '' : $this->input->post('test_group_binary_positive');
    $test_group_post['test_group.binary_negative'] = is_null($this->input->post('test_group_binary_negative')) ? '' : $this->input->post('test_group_binary_negative');
    $test_group_post['test_group.numeric_result_unit'] = is_null($this->input->post('test_group_numeric_result_unit')) ? '' : $this->input->post('test_group_numeric_result_unit');
    $test_group_post['test_group.interpretation'] = is_null($this->input->post('test_group_interpretation')) ? '' : $this->input->post('test_group_interpretation');
    $test_group_post['test_group.temp_test_group_id'] = is_null($this->input->post('test_group_temp_test_group_id')) ? '' : $this->input->post('test_group_temp_test_group_id');
    $test_group_post['test_group.temp_group_id'] = is_null($this->input->post('test_group_temp_group_id')) ? '' : $this->input->post('test_group_temp_group_id');
    $this->session->set_userdata('test_method.test_method_id', $test_group_post['test_method.test_method_id']);
    $this->session->set_userdata('test_group.group_id', $test_group_post['test_group.group_id']);
    $this->db->update('test_group', $test_group_post, array('group_id' => $test_group_post['group_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_group_post);
  }
  function test_group_delete() {
    $test_group_delete['test_group.group_id'] = is_null($this->input->post('test_group_group_id')) ? '' : $this->input->post('test_group_group_id');
    $test_group_delete['test_group.group_name'] = is_null($this->input->post('test_group_group_name')) ? '' : $this->input->post('test_group_group_name');
    $test_group_delete['test_group.test_method_id'] = is_null($this->input->post('test_group_test_method_id')) ? '' : $this->input->post('test_group_test_method_id');
    $test_group_delete['test_group.has_result'] = is_null($this->input->post('test_group_has_result')) ? '' : $this->input->post('test_group_has_result');
    $test_group_delete['test_group.binary_result'] = is_null($this->input->post('test_group_binary_result')) ? '' : $this->input->post('test_group_binary_result');
    $test_group_delete['test_group.numeric_result'] = is_null($this->input->post('test_group_numeric_result')) ? '' : $this->input->post('test_group_numeric_result');
    $test_group_delete['test_group.text_result'] = is_null($this->input->post('test_group_text_result')) ? '' : $this->input->post('test_group_text_result');
    $test_group_delete['test_group.binary_positive'] = is_null($this->input->post('test_group_binary_positive')) ? '' : $this->input->post('test_group_binary_positive');
    $test_group_delete['test_group.binary_negative'] = is_null($this->input->post('test_group_binary_negative')) ? '' : $this->input->post('test_group_binary_negative');
    $test_group_delete['test_group.numeric_result_unit'] = is_null($this->input->post('test_group_numeric_result_unit')) ? '' : $this->input->post('test_group_numeric_result_unit');
    $test_group_delete['test_group.interpretation'] = is_null($this->input->post('test_group_interpretation')) ? '' : $this->input->post('test_group_interpretation');
    $test_group_delete['test_group.temp_test_group_id'] = is_null($this->input->post('test_group_temp_test_group_id')) ? '' : $this->input->post('test_group_temp_test_group_id');
    $test_group_delete['test_group.temp_group_id'] = is_null($this->input->post('test_group_temp_group_id')) ? '' : $this->input->post('test_group_temp_group_id');
    $this->db->delete('test_group', array('group_id' => $test_group_delete['group_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_group_delete);
  }
  function test_group_get_records() {
    $test_group_filters['test_method.test_method_id'] = $this->session->test_method_test_method_id;
    $test_group_filters['test_group.group_id'] = $this->session->test_group_group_id;
    $test_group_filters['test_method.test_method_id'] = $test_method_test_method_id;
    $test_group_filters['test_group.group_id'] = $test_group_group_id;
    $test_group_filters['test_group.group_name'] = is_null($this->input->post('test_group_group_name')) ? '' : $this->input->post('test_group_group_name');
    $test_group_filters['test_group.test_method_id'] = is_null($this->input->post('test_group_test_method_id')) ? '' : $this->input->post('test_group_test_method_id');
    $test_group_filters['test_group.has_result'] = is_null($this->input->post('test_group_has_result')) ? '' : $this->input->post('test_group_has_result');
    $test_group_filters['test_group.binary_result'] = is_null($this->input->post('test_group_binary_result')) ? '' : $this->input->post('test_group_binary_result');
    $test_group_filters['test_group.numeric_result'] = is_null($this->input->post('test_group_numeric_result')) ? '' : $this->input->post('test_group_numeric_result');
    $test_group_filters['test_group.text_result'] = is_null($this->input->post('test_group_text_result')) ? '' : $this->input->post('test_group_text_result');
    $test_group_filters['test_group.binary_positive'] = is_null($this->input->post('test_group_binary_positive')) ? '' : $this->input->post('test_group_binary_positive');
    $test_group_filters['test_group.binary_negative'] = is_null($this->input->post('test_group_binary_negative')) ? '' : $this->input->post('test_group_binary_negative');
    $test_group_filters['test_group.numeric_result_unit'] = is_null($this->input->post('test_group_numeric_result_unit')) ? '' : $this->input->post('test_group_numeric_result_unit');
    $test_group_filters['test_group.interpretation'] = is_null($this->input->post('test_group_interpretation')) ? '' : $this->input->post('test_group_interpretation');
    $test_group_filters['test_group.temp_test_group_id'] = is_null($this->input->post('test_group_temp_test_group_id')) ? '' : $this->input->post('test_group_temp_test_group_id');
    $test_group_filters['test_group.temp_group_id'] = is_null($this->input->post('test_group_temp_group_id')) ? '' : $this->input->post('test_group_temp_group_id');
    $this->session->set_userdata('test_method.test_method_id', $test_group_filters['test_method.test_method_id']);
    $this->session->set_userdata('test_group.group_id', $test_group_filters['test_group.group_id']);
    $this->db->select('test_method.test_method_id AS test_group_test_method_id, test_group.group_id AS test_group_group_id,
    test_group.group_name AS test_group_group_name, test_group.test_method_id AS test_group_test_method_id,
    test_group.has_result AS test_group_has_result, test_group.binary_result AS test_group_binary_result,
    test_group.numeric_result AS test_group_numeric_result, test_group.text_result AS test_group_text_result,
    test_group.binary_positive AS test_group_binary_positive, test_group.binary_negative AS test_group_binary_negative,
    test_group.numeric_result_unit AS test_group_numeric_result_unit, test_group.interpretation AS test_group_interpretation,
    test_group.temp_test_group_id AS test_group_temp_test_group_id, test_group.temp_group_id AS test_group_temp_group_id')->from('test_group');
    $this->db->join('test_method', 'test_group.test_method_id = test_method.test_method_id', 'left');
    $this->db->where($test_group_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $test_group_filters);
  }
}