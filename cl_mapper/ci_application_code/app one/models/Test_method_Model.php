<?php class Test_method_model extends CI_Model {
  function test_method_create($hospital_hospital_id,$staff_previous_hospital_hospital_id) {
    $test_method_post = [];
    $test_method_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $test_method_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $test_method_post['hospital.hospital_id'] = $hospital_hospital_id;
    $test_method_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $test_method_post['accredition_logo'] = is_null($this->input->post('accredition_logo')) ? '' : $this->input->post('accredition_logo');
    $test_method_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $test_method_post['temp_test_method_id'] = is_null($this->input->post('temp_test_method_id')) ? '' : $this->input->post('temp_test_method_id');
    $test_method_post['test_method'] = is_null($this->input->post('test_method')) ? '' : $this->input->post('test_method');
    $test_method_post['test_method_id'] = is_null($this->input->post('test_method_id')) ? '' : $this->input->post('test_method_id');
    $this->session->set_userdata('hospital.hospital_id', $test_method_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $test_method_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('test_method', $test_method_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $test_method_post);
  }
  function test_method_update($hospital_id,$hospital_id,$test_method_id) {
    $test_method_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $test_method_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $test_method_post['test_method.test_method_id'] = $this->session->test_method_test_method_id;
    $test_method_post['hospital.hospital_id'] = $hospital_hospital_id;
    $test_method_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $test_method_post['test_method.test_method_id'] = $test_method_test_method_id;
    $test_method_post['test_method.accredition_logo'] = is_null($this->input->post('test_method_accredition_logo')) ? '' : $this->input->post('test_method_accredition_logo');
    $test_method_post['test_method.hospital_id'] = is_null($this->input->post('test_method_hospital_id')) ? '' : $this->input->post('test_method_hospital_id');
    $test_method_post['test_method.temp_test_method_id'] = is_null($this->input->post('test_method_temp_test_method_id')) ? '' : $this->input->post('test_method_temp_test_method_id');
    $test_method_post['test_method.test_method'] = is_null($this->input->post('test_method_test_method')) ? '' : $this->input->post('test_method_test_method');
    $this->session->set_userdata('hospital.hospital_id', $test_method_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $test_method_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('test_method.test_method_id', $test_method_post['test_method.test_method_id']);
    $this->db->update('test_method', $test_method_post, array('test_method_id' => $test_method_post['test_method_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_method_post);
  }
  function test_method_delete() {
    $test_method_delete['test_method.accredition_logo'] = is_null($this->input->post('test_method_accredition_logo')) ? '' : $this->input->post('test_method_accredition_logo');
    $test_method_delete['test_method.hospital_id'] = is_null($this->input->post('test_method_hospital_id')) ? '' : $this->input->post('test_method_hospital_id');
    $test_method_delete['test_method.temp_test_method_id'] = is_null($this->input->post('test_method_temp_test_method_id')) ? '' : $this->input->post('test_method_temp_test_method_id');
    $test_method_delete['test_method.test_method'] = is_null($this->input->post('test_method_test_method')) ? '' : $this->input->post('test_method_test_method');
    $test_method_delete['test_method.test_method_id'] = is_null($this->input->post('test_method_test_method_id')) ? '' : $this->input->post('test_method_test_method_id');
    $this->db->delete('test_method', array('test_method_id' => $test_method_delete['test_method_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_method_delete);
  }
  function test_method_get_records($hospital_id,$hospital_id,$test_method_id) {
    $test_method_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $test_method_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $test_method_filters['test_method.test_method_id'] = $this->session->test_method_test_method_id;
    $test_method_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $test_method_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $test_method_filters['test_method.test_method_id'] = $test_method_test_method_id;
    $test_method_filters['test_method.accredition_logo'] = is_null($this->input->post('test_method_accredition_logo')) ? '' : $this->input->post('test_method_accredition_logo');
    $test_method_filters['test_method.hospital_id'] = is_null($this->input->post('test_method_hospital_id')) ? '' : $this->input->post('test_method_hospital_id');
    $test_method_filters['test_method.temp_test_method_id'] = is_null($this->input->post('test_method_temp_test_method_id')) ? '' : $this->input->post('test_method_temp_test_method_id');
    $test_method_filters['test_method.test_method'] = is_null($this->input->post('test_method_test_method')) ? '' : $this->input->post('test_method_test_method');
    $this->session->set_userdata('hospital.hospital_id', $test_method_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $test_method_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('test_method.test_method_id', $test_method_filters['test_method.test_method_id']);
    $this->db->select('hospital.hospital_id AS test_method_hospital_id, staff_previous_hospital.hospital_id AS test_method_hospital_id,
    test_method.accredition_logo AS test_method_accredition_logo, test_method.hospital_id AS test_method_hospital_id,
    test_method.temp_test_method_id AS test_method_temp_test_method_id, test_method.test_method AS test_method_test_method,
    test_method.test_method_id AS test_method_test_method_id')->from('test_method');
    $this->db->join('hospital', 'test_method.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'test_method.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($test_method_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $test_method_filters);
  }
}