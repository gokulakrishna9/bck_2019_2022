<?php class Test_master_model extends CI_Model {
  function test_master_create() {
    $test_master_post = [];
    $test_master_post['test_assay.assay_id'] = $this->session->test_assay_assay_id;
    $test_master_post['test_method.test_method_id'] = $this->session->test_method_test_method_id;
    $test_master_post['test_area.test_area_id'] = $this->session->test_area_test_area_id;
    $test_master_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $test_master_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $test_master_post['test_assay.assay_id'] = $test_assay_assay_id;
    $test_master_post['test_method.test_method_id'] = $test_method_test_method_id;
    $test_master_post['test_area.test_area_id'] = $test_area_test_area_id;
    $test_master_post['hospital.hospital_id'] = $hospital_hospital_id;
    $test_master_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $test_master_post['test_master_id'] = is_null($this->input->post('test_master_id')) ? '' : $this->input->post('test_master_id');
    $test_master_post['test_name'] = is_null($this->input->post('test_name')) ? '' : $this->input->post('test_name');
    $test_master_post['assay_id'] = is_null($this->input->post('assay_id')) ? '' : $this->input->post('assay_id');
    $test_master_post['test_method_id'] = is_null($this->input->post('test_method_id')) ? '' : $this->input->post('test_method_id');
    $test_master_post['test_area_id'] = is_null($this->input->post('test_area_id')) ? '' : $this->input->post('test_area_id');
    $test_master_post['binary_result'] = is_null($this->input->post('binary_result')) ? '' : $this->input->post('binary_result');
    $test_master_post['numeric_result'] = is_null($this->input->post('numeric_result')) ? '' : $this->input->post('numeric_result');
    $test_master_post['text_range'] = is_null($this->input->post('text_range')) ? '' : $this->input->post('text_range');
    $test_master_post['text_result'] = is_null($this->input->post('text_result')) ? '' : $this->input->post('text_result');
    $test_master_post['binary_positive'] = is_null($this->input->post('binary_positive')) ? '' : $this->input->post('binary_positive');
    $test_master_post['binary_negative'] = is_null($this->input->post('binary_negative')) ? '' : $this->input->post('binary_negative');
    $test_master_post['numeric_result_unit'] = is_null($this->input->post('numeric_result_unit')) ? '' : $this->input->post('numeric_result_unit');
    $test_master_post['availability'] = is_null($this->input->post('availability')) ? '' : $this->input->post('availability');
    $test_master_post['nabl'] = is_null($this->input->post('nabl')) ? '' : $this->input->post('nabl');
    $test_master_post['level'] = is_null($this->input->post('level')) ? '' : $this->input->post('level');
    $test_master_post['comments'] = is_null($this->input->post('comments')) ? '' : $this->input->post('comments');
    $test_master_post['interpretation'] = is_null($this->input->post('interpretation')) ? '' : $this->input->post('interpretation');
    $test_master_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $test_master_post['temp_test_master_id'] = is_null($this->input->post('temp_test_master_id')) ? '' : $this->input->post('temp_test_master_id');
    $this->session->set_userdata('test_assay.assay_id', $test_master_post['test_assay.assay_id']);
    $this->session->set_userdata('test_method.test_method_id', $test_master_post['test_method.test_method_id']);
    $this->session->set_userdata('test_area.test_area_id', $test_master_post['test_area.test_area_id']);
    $this->session->set_userdata('hospital.hospital_id', $test_master_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $test_master_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('test_master', $test_master_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $test_master_post);
  }
  function test_master_update() {
    $test_master_post['test_assay.assay_id'] = $this->session->test_assay_assay_id;
    $test_master_post['test_method.test_method_id'] = $this->session->test_method_test_method_id;
    $test_master_post['test_area.test_area_id'] = $this->session->test_area_test_area_id;
    $test_master_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $test_master_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $test_master_post['test_master.test_master_id'] = $this->session->test_master_test_master_id;
    $test_master_post['test_assay.assay_id'] = $test_assay_assay_id;
    $test_master_post['test_method.test_method_id'] = $test_method_test_method_id;
    $test_master_post['test_area.test_area_id'] = $test_area_test_area_id;
    $test_master_post['hospital.hospital_id'] = $hospital_hospital_id;
    $test_master_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $test_master_post['test_master.test_master_id'] = $test_master_test_master_id;
    $test_master_post['test_master.test_name'] = is_null($this->input->post('test_master_test_name')) ? '' : $this->input->post('test_master_test_name');
    $test_master_post['test_master.assay_id'] = is_null($this->input->post('test_master_assay_id')) ? '' : $this->input->post('test_master_assay_id');
    $test_master_post['test_master.test_method_id'] = is_null($this->input->post('test_master_test_method_id')) ? '' : $this->input->post('test_master_test_method_id');
    $test_master_post['test_master.test_area_id'] = is_null($this->input->post('test_master_test_area_id')) ? '' : $this->input->post('test_master_test_area_id');
    $test_master_post['test_master.binary_result'] = is_null($this->input->post('test_master_binary_result')) ? '' : $this->input->post('test_master_binary_result');
    $test_master_post['test_master.numeric_result'] = is_null($this->input->post('test_master_numeric_result')) ? '' : $this->input->post('test_master_numeric_result');
    $test_master_post['test_master.text_range'] = is_null($this->input->post('test_master_text_range')) ? '' : $this->input->post('test_master_text_range');
    $test_master_post['test_master.text_result'] = is_null($this->input->post('test_master_text_result')) ? '' : $this->input->post('test_master_text_result');
    $test_master_post['test_master.binary_positive'] = is_null($this->input->post('test_master_binary_positive')) ? '' : $this->input->post('test_master_binary_positive');
    $test_master_post['test_master.binary_negative'] = is_null($this->input->post('test_master_binary_negative')) ? '' : $this->input->post('test_master_binary_negative');
    $test_master_post['test_master.numeric_result_unit'] = is_null($this->input->post('test_master_numeric_result_unit')) ? '' : $this->input->post('test_master_numeric_result_unit');
    $test_master_post['test_master.availability'] = is_null($this->input->post('test_master_availability')) ? '' : $this->input->post('test_master_availability');
    $test_master_post['test_master.nabl'] = is_null($this->input->post('test_master_nabl')) ? '' : $this->input->post('test_master_nabl');
    $test_master_post['test_master.level'] = is_null($this->input->post('test_master_level')) ? '' : $this->input->post('test_master_level');
    $test_master_post['test_master.comments'] = is_null($this->input->post('test_master_comments')) ? '' : $this->input->post('test_master_comments');
    $test_master_post['test_master.interpretation'] = is_null($this->input->post('test_master_interpretation')) ? '' : $this->input->post('test_master_interpretation');
    $test_master_post['test_master.hospital_id'] = is_null($this->input->post('test_master_hospital_id')) ? '' : $this->input->post('test_master_hospital_id');
    $test_master_post['test_master.temp_test_master_id'] = is_null($this->input->post('test_master_temp_test_master_id')) ? '' : $this->input->post('test_master_temp_test_master_id');
    $this->session->set_userdata('test_assay.assay_id', $test_master_post['test_assay.assay_id']);
    $this->session->set_userdata('test_method.test_method_id', $test_master_post['test_method.test_method_id']);
    $this->session->set_userdata('test_area.test_area_id', $test_master_post['test_area.test_area_id']);
    $this->session->set_userdata('hospital.hospital_id', $test_master_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $test_master_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('test_master.test_master_id', $test_master_post['test_master.test_master_id']);
    $this->db->update('test_master', $test_master_post, array('test_master_id' => $test_master_post['test_master_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_master_post);
  }
  function test_master_delete() {
    $test_master_delete['test_master.test_master_id'] = is_null($this->input->post('test_master_test_master_id')) ? '' : $this->input->post('test_master_test_master_id');
    $test_master_delete['test_master.test_name'] = is_null($this->input->post('test_master_test_name')) ? '' : $this->input->post('test_master_test_name');
    $test_master_delete['test_master.assay_id'] = is_null($this->input->post('test_master_assay_id')) ? '' : $this->input->post('test_master_assay_id');
    $test_master_delete['test_master.test_method_id'] = is_null($this->input->post('test_master_test_method_id')) ? '' : $this->input->post('test_master_test_method_id');
    $test_master_delete['test_master.test_area_id'] = is_null($this->input->post('test_master_test_area_id')) ? '' : $this->input->post('test_master_test_area_id');
    $test_master_delete['test_master.binary_result'] = is_null($this->input->post('test_master_binary_result')) ? '' : $this->input->post('test_master_binary_result');
    $test_master_delete['test_master.numeric_result'] = is_null($this->input->post('test_master_numeric_result')) ? '' : $this->input->post('test_master_numeric_result');
    $test_master_delete['test_master.text_range'] = is_null($this->input->post('test_master_text_range')) ? '' : $this->input->post('test_master_text_range');
    $test_master_delete['test_master.text_result'] = is_null($this->input->post('test_master_text_result')) ? '' : $this->input->post('test_master_text_result');
    $test_master_delete['test_master.binary_positive'] = is_null($this->input->post('test_master_binary_positive')) ? '' : $this->input->post('test_master_binary_positive');
    $test_master_delete['test_master.binary_negative'] = is_null($this->input->post('test_master_binary_negative')) ? '' : $this->input->post('test_master_binary_negative');
    $test_master_delete['test_master.numeric_result_unit'] = is_null($this->input->post('test_master_numeric_result_unit')) ? '' : $this->input->post('test_master_numeric_result_unit');
    $test_master_delete['test_master.availability'] = is_null($this->input->post('test_master_availability')) ? '' : $this->input->post('test_master_availability');
    $test_master_delete['test_master.nabl'] = is_null($this->input->post('test_master_nabl')) ? '' : $this->input->post('test_master_nabl');
    $test_master_delete['test_master.level'] = is_null($this->input->post('test_master_level')) ? '' : $this->input->post('test_master_level');
    $test_master_delete['test_master.comments'] = is_null($this->input->post('test_master_comments')) ? '' : $this->input->post('test_master_comments');
    $test_master_delete['test_master.interpretation'] = is_null($this->input->post('test_master_interpretation')) ? '' : $this->input->post('test_master_interpretation');
    $test_master_delete['test_master.hospital_id'] = is_null($this->input->post('test_master_hospital_id')) ? '' : $this->input->post('test_master_hospital_id');
    $test_master_delete['test_master.temp_test_master_id'] = is_null($this->input->post('test_master_temp_test_master_id')) ? '' : $this->input->post('test_master_temp_test_master_id');
    $this->db->delete('test_master', array('test_master_id' => $test_master_delete['test_master_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_master_delete);
  }
  function test_master_get_records() {
    $test_master_filters['test_assay.assay_id'] = $this->session->test_assay_assay_id;
    $test_master_filters['test_method.test_method_id'] = $this->session->test_method_test_method_id;
    $test_master_filters['test_area.test_area_id'] = $this->session->test_area_test_area_id;
    $test_master_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $test_master_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $test_master_filters['test_master.test_master_id'] = $this->session->test_master_test_master_id;
    $test_master_filters['test_assay.assay_id'] = $test_assay_assay_id;
    $test_master_filters['test_method.test_method_id'] = $test_method_test_method_id;
    $test_master_filters['test_area.test_area_id'] = $test_area_test_area_id;
    $test_master_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $test_master_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $test_master_filters['test_master.test_master_id'] = $test_master_test_master_id;
    $test_master_filters['test_master.test_name'] = is_null($this->input->post('test_master_test_name')) ? '' : $this->input->post('test_master_test_name');
    $test_master_filters['test_master.assay_id'] = is_null($this->input->post('test_master_assay_id')) ? '' : $this->input->post('test_master_assay_id');
    $test_master_filters['test_master.test_method_id'] = is_null($this->input->post('test_master_test_method_id')) ? '' : $this->input->post('test_master_test_method_id');
    $test_master_filters['test_master.test_area_id'] = is_null($this->input->post('test_master_test_area_id')) ? '' : $this->input->post('test_master_test_area_id');
    $test_master_filters['test_master.binary_result'] = is_null($this->input->post('test_master_binary_result')) ? '' : $this->input->post('test_master_binary_result');
    $test_master_filters['test_master.numeric_result'] = is_null($this->input->post('test_master_numeric_result')) ? '' : $this->input->post('test_master_numeric_result');
    $test_master_filters['test_master.text_range'] = is_null($this->input->post('test_master_text_range')) ? '' : $this->input->post('test_master_text_range');
    $test_master_filters['test_master.text_result'] = is_null($this->input->post('test_master_text_result')) ? '' : $this->input->post('test_master_text_result');
    $test_master_filters['test_master.binary_positive'] = is_null($this->input->post('test_master_binary_positive')) ? '' : $this->input->post('test_master_binary_positive');
    $test_master_filters['test_master.binary_negative'] = is_null($this->input->post('test_master_binary_negative')) ? '' : $this->input->post('test_master_binary_negative');
    $test_master_filters['test_master.numeric_result_unit'] = is_null($this->input->post('test_master_numeric_result_unit')) ? '' : $this->input->post('test_master_numeric_result_unit');
    $test_master_filters['test_master.availability'] = is_null($this->input->post('test_master_availability')) ? '' : $this->input->post('test_master_availability');
    $test_master_filters['test_master.nabl'] = is_null($this->input->post('test_master_nabl')) ? '' : $this->input->post('test_master_nabl');
    $test_master_filters['test_master.level'] = is_null($this->input->post('test_master_level')) ? '' : $this->input->post('test_master_level');
    $test_master_filters['test_master.comments'] = is_null($this->input->post('test_master_comments')) ? '' : $this->input->post('test_master_comments');
    $test_master_filters['test_master.interpretation'] = is_null($this->input->post('test_master_interpretation')) ? '' : $this->input->post('test_master_interpretation');
    $test_master_filters['test_master.hospital_id'] = is_null($this->input->post('test_master_hospital_id')) ? '' : $this->input->post('test_master_hospital_id');
    $test_master_filters['test_master.temp_test_master_id'] = is_null($this->input->post('test_master_temp_test_master_id')) ? '' : $this->input->post('test_master_temp_test_master_id');
    $this->session->set_userdata('test_assay.assay_id', $test_master_filters['test_assay.assay_id']);
    $this->session->set_userdata('test_method.test_method_id', $test_master_filters['test_method.test_method_id']);
    $this->session->set_userdata('test_area.test_area_id', $test_master_filters['test_area.test_area_id']);
    $this->session->set_userdata('hospital.hospital_id', $test_master_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $test_master_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('test_master.test_master_id', $test_master_filters['test_master.test_master_id']);
    $this->db->select('test_assay.assay_id AS test_master_assay_id, test_method.test_method_id AS test_master_test_method_id,
    test_area.test_area_id AS test_master_test_area_id, hospital.hospital_id AS test_master_hospital_id,
    staff_previous_hospital.hospital_id AS test_master_hospital_id, test_master.test_master_id AS test_master_test_master_id,
    test_master.test_name AS test_master_test_name, test_master.assay_id AS test_master_assay_id,
    test_master.test_method_id AS test_master_test_method_id, test_master.test_area_id AS test_master_test_area_id,
    test_master.binary_result AS test_master_binary_result, test_master.numeric_result AS test_master_numeric_result,
    test_master.text_range AS test_master_text_range, test_master.text_result AS test_master_text_result,
    test_master.binary_positive AS test_master_binary_positive, test_master.binary_negative AS test_master_binary_negative,
    test_master.numeric_result_unit AS test_master_numeric_result_unit, test_master.availability AS test_master_availability,
    test_master.nabl AS test_master_nabl, test_master.level AS test_master_level,
    test_master.comments AS test_master_comments, test_master.interpretation AS test_master_interpretation,
    test_master.hospital_id AS test_master_hospital_id, test_master.temp_test_master_id AS test_master_temp_test_master_id')->from('test_master');
    $this->db->join('test_assay', 'test_master.assay_id = test_assay.assay_id', 'left');
    $this->db->join('test_method', 'test_master.test_method_id = test_method.test_method_id', 'left');
    $this->db->join('test_area', 'test_master.test_area_id = test_area.test_area_id', 'left');
    $this->db->join('hospital', 'test_master.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'test_master.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($test_master_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $test_master_filters);
  }
}