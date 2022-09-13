<?php class Test_area_model extends CI_Model {
  function test_area_create() {
    $test_area_post = [];
    $test_area_post['department.department_id'] = $this->session->department_department_id;
    $test_area_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $test_area_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $test_area_post['department.department_id'] = $department_department_id;
    $test_area_post['hospital.hospital_id'] = $hospital_hospital_id;
    $test_area_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $test_area_post['test_area_id'] = is_null($this->input->post('test_area_id')) ? '' : $this->input->post('test_area_id');
    $test_area_post['test_area'] = is_null($this->input->post('test_area')) ? '' : $this->input->post('test_area');
    $test_area_post['department_id'] = is_null($this->input->post('department_id')) ? '' : $this->input->post('department_id');
    $test_area_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $test_area_post['temp_test_area_id'] = is_null($this->input->post('temp_test_area_id')) ? '' : $this->input->post('temp_test_area_id');
    $this->session->set_userdata('department.department_id', $test_area_post['department.department_id']);
    $this->session->set_userdata('hospital.hospital_id', $test_area_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $test_area_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('test_area', $test_area_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $test_area_post);
  }
  function test_area_update() {
    $test_area_post['department.department_id'] = $this->session->department_department_id;
    $test_area_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $test_area_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $test_area_post['test_area.test_area_id'] = $this->session->test_area_test_area_id;
    $test_area_post['department.department_id'] = $department_department_id;
    $test_area_post['hospital.hospital_id'] = $hospital_hospital_id;
    $test_area_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $test_area_post['test_area.test_area_id'] = $test_area_test_area_id;
    $test_area_post['test_area.test_area'] = is_null($this->input->post('test_area_test_area')) ? '' : $this->input->post('test_area_test_area');
    $test_area_post['test_area.department_id'] = is_null($this->input->post('test_area_department_id')) ? '' : $this->input->post('test_area_department_id');
    $test_area_post['test_area.hospital_id'] = is_null($this->input->post('test_area_hospital_id')) ? '' : $this->input->post('test_area_hospital_id');
    $test_area_post['test_area.temp_test_area_id'] = is_null($this->input->post('test_area_temp_test_area_id')) ? '' : $this->input->post('test_area_temp_test_area_id');
    $this->session->set_userdata('department.department_id', $test_area_post['department.department_id']);
    $this->session->set_userdata('hospital.hospital_id', $test_area_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $test_area_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('test_area.test_area_id', $test_area_post['test_area.test_area_id']);
    $this->db->update('test_area', $test_area_post, array('test_area_id' => $test_area_post['test_area_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_area_post);
  }
  function test_area_delete() {
    $test_area_delete['test_area.test_area_id'] = is_null($this->input->post('test_area_test_area_id')) ? '' : $this->input->post('test_area_test_area_id');
    $test_area_delete['test_area.test_area'] = is_null($this->input->post('test_area_test_area')) ? '' : $this->input->post('test_area_test_area');
    $test_area_delete['test_area.department_id'] = is_null($this->input->post('test_area_department_id')) ? '' : $this->input->post('test_area_department_id');
    $test_area_delete['test_area.hospital_id'] = is_null($this->input->post('test_area_hospital_id')) ? '' : $this->input->post('test_area_hospital_id');
    $test_area_delete['test_area.temp_test_area_id'] = is_null($this->input->post('test_area_temp_test_area_id')) ? '' : $this->input->post('test_area_temp_test_area_id');
    $this->db->delete('test_area', array('test_area_id' => $test_area_delete['test_area_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_area_delete);
  }
  function test_area_get_records() {
    $test_area_filters['department.department_id'] = $this->session->department_department_id;
    $test_area_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $test_area_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $test_area_filters['test_area.test_area_id'] = $this->session->test_area_test_area_id;
    $test_area_filters['department.department_id'] = $department_department_id;
    $test_area_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $test_area_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $test_area_filters['test_area.test_area_id'] = $test_area_test_area_id;
    $test_area_filters['test_area.test_area'] = is_null($this->input->post('test_area_test_area')) ? '' : $this->input->post('test_area_test_area');
    $test_area_filters['test_area.department_id'] = is_null($this->input->post('test_area_department_id')) ? '' : $this->input->post('test_area_department_id');
    $test_area_filters['test_area.hospital_id'] = is_null($this->input->post('test_area_hospital_id')) ? '' : $this->input->post('test_area_hospital_id');
    $test_area_filters['test_area.temp_test_area_id'] = is_null($this->input->post('test_area_temp_test_area_id')) ? '' : $this->input->post('test_area_temp_test_area_id');
    $this->session->set_userdata('department.department_id', $test_area_filters['department.department_id']);
    $this->session->set_userdata('hospital.hospital_id', $test_area_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $test_area_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('test_area.test_area_id', $test_area_filters['test_area.test_area_id']);
    $this->db->select('department.department_id AS test_area_department_id, hospital.hospital_id AS test_area_hospital_id,
    staff_previous_hospital.hospital_id AS test_area_hospital_id, test_area.test_area_id AS test_area_test_area_id,
    test_area.test_area AS test_area_test_area, test_area.department_id AS test_area_department_id,
    test_area.hospital_id AS test_area_hospital_id, test_area.temp_test_area_id AS test_area_temp_test_area_id')->from('test_area');
    $this->db->join('department', 'test_area.department_id = department.department_id', 'left');
    $this->db->join('hospital', 'test_area.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'test_area.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($test_area_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $test_area_filters);
  }
}