<?php class Test_assay_model extends CI_Model {
  function test_assay_create() {
    $test_assay_post = [];
    $test_assay_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $test_assay_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $test_assay_post['hospital.hospital_id'] = $hospital_hospital_id;
    $test_assay_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $test_assay_post['assay_id'] = is_null($this->input->post('assay_id')) ? '' : $this->input->post('assay_id');
    $test_assay_post['assay'] = is_null($this->input->post('assay')) ? '' : $this->input->post('assay');
    $test_assay_post['temp_assay_id'] = is_null($this->input->post('temp_assay_id')) ? '' : $this->input->post('temp_assay_id');
    $test_assay_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $this->session->set_userdata('hospital.hospital_id', $test_assay_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $test_assay_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('test_assay', $test_assay_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $test_assay_post);
  }
  function test_assay_update() {
    $test_assay_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $test_assay_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $test_assay_post['test_assay.assay_id'] = $this->session->test_assay_assay_id;
    $test_assay_post['hospital.hospital_id'] = $hospital_hospital_id;
    $test_assay_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $test_assay_post['test_assay.assay_id'] = $test_assay_assay_id;
    $test_assay_post['test_assay.assay'] = is_null($this->input->post('test_assay_assay')) ? '' : $this->input->post('test_assay_assay');
    $test_assay_post['test_assay.temp_assay_id'] = is_null($this->input->post('test_assay_temp_assay_id')) ? '' : $this->input->post('test_assay_temp_assay_id');
    $test_assay_post['test_assay.hospital_id'] = is_null($this->input->post('test_assay_hospital_id')) ? '' : $this->input->post('test_assay_hospital_id');
    $this->session->set_userdata('hospital.hospital_id', $test_assay_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $test_assay_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('test_assay.assay_id', $test_assay_post['test_assay.assay_id']);
    $this->db->update('test_assay', $test_assay_post, array('assay_id' => $test_assay_post['assay_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_assay_post);
  }
  function test_assay_delete() {
    $test_assay_delete['test_assay.assay_id'] = is_null($this->input->post('test_assay_assay_id')) ? '' : $this->input->post('test_assay_assay_id');
    $test_assay_delete['test_assay.assay'] = is_null($this->input->post('test_assay_assay')) ? '' : $this->input->post('test_assay_assay');
    $test_assay_delete['test_assay.temp_assay_id'] = is_null($this->input->post('test_assay_temp_assay_id')) ? '' : $this->input->post('test_assay_temp_assay_id');
    $test_assay_delete['test_assay.hospital_id'] = is_null($this->input->post('test_assay_hospital_id')) ? '' : $this->input->post('test_assay_hospital_id');
    $this->db->delete('test_assay', array('assay_id' => $test_assay_delete['assay_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_assay_delete);
  }
  function test_assay_get_records() {
    $test_assay_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $test_assay_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $test_assay_filters['test_assay.assay_id'] = $this->session->test_assay_assay_id;
    $test_assay_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $test_assay_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $test_assay_filters['test_assay.assay_id'] = $test_assay_assay_id;
    $test_assay_filters['test_assay.assay'] = is_null($this->input->post('test_assay_assay')) ? '' : $this->input->post('test_assay_assay');
    $test_assay_filters['test_assay.temp_assay_id'] = is_null($this->input->post('test_assay_temp_assay_id')) ? '' : $this->input->post('test_assay_temp_assay_id');
    $test_assay_filters['test_assay.hospital_id'] = is_null($this->input->post('test_assay_hospital_id')) ? '' : $this->input->post('test_assay_hospital_id');
    $this->session->set_userdata('hospital.hospital_id', $test_assay_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $test_assay_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('test_assay.assay_id', $test_assay_filters['test_assay.assay_id']);
    $this->db->select('hospital.hospital_id AS test_assay_hospital_id, staff_previous_hospital.hospital_id AS test_assay_hospital_id,
    test_assay.assay_id AS test_assay_assay_id, test_assay.assay AS test_assay_assay,
    test_assay.temp_assay_id AS test_assay_temp_assay_id, test_assay.hospital_id AS test_assay_hospital_id')->from('test_assay');
    $this->db->join('hospital', 'test_assay.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'test_assay.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($test_assay_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $test_assay_filters);
  }
}