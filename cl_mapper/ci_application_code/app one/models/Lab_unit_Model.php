<?php class Lab_unit_model extends CI_Model {
  function lab_unit_create($hospital_hospital_id,$staff_previous_hospital_hospital_id) {
    $lab_unit_post = [];
    $lab_unit_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $lab_unit_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $lab_unit_post['hospital.hospital_id'] = $hospital_hospital_id;
    $lab_unit_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $lab_unit_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $lab_unit_post['lab_unit'] = is_null($this->input->post('lab_unit')) ? '' : $this->input->post('lab_unit');
    $lab_unit_post['lab_unit_id'] = is_null($this->input->post('lab_unit_id')) ? '' : $this->input->post('lab_unit_id');
    $lab_unit_post['temp_lab_unit_id'] = is_null($this->input->post('temp_lab_unit_id')) ? '' : $this->input->post('temp_lab_unit_id');
    $this->session->set_userdata('hospital.hospital_id', $lab_unit_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $lab_unit_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('lab_unit', $lab_unit_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $lab_unit_post);
  }
  function lab_unit_update($hospital_id,$hospital_id,$lab_unit_id) {
    $lab_unit_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $lab_unit_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $lab_unit_post['lab_unit.lab_unit_id'] = $this->session->lab_unit_lab_unit_id;
    $lab_unit_post['hospital.hospital_id'] = $hospital_hospital_id;
    $lab_unit_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $lab_unit_post['lab_unit.lab_unit_id'] = $lab_unit_lab_unit_id;
    $lab_unit_post['lab_unit.hospital_id'] = is_null($this->input->post('lab_unit_hospital_id')) ? '' : $this->input->post('lab_unit_hospital_id');
    $lab_unit_post['lab_unit.lab_unit'] = is_null($this->input->post('lab_unit_lab_unit')) ? '' : $this->input->post('lab_unit_lab_unit');
    $lab_unit_post['lab_unit.temp_lab_unit_id'] = is_null($this->input->post('lab_unit_temp_lab_unit_id')) ? '' : $this->input->post('lab_unit_temp_lab_unit_id');
    $this->session->set_userdata('hospital.hospital_id', $lab_unit_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $lab_unit_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('lab_unit.lab_unit_id', $lab_unit_post['lab_unit.lab_unit_id']);
    $this->db->update('lab_unit', $lab_unit_post, array('lab_unit_id' => $lab_unit_post['lab_unit_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $lab_unit_post);
  }
  function lab_unit_delete() {
    $lab_unit_delete['lab_unit.hospital_id'] = is_null($this->input->post('lab_unit_hospital_id')) ? '' : $this->input->post('lab_unit_hospital_id');
    $lab_unit_delete['lab_unit.lab_unit'] = is_null($this->input->post('lab_unit_lab_unit')) ? '' : $this->input->post('lab_unit_lab_unit');
    $lab_unit_delete['lab_unit.lab_unit_id'] = is_null($this->input->post('lab_unit_lab_unit_id')) ? '' : $this->input->post('lab_unit_lab_unit_id');
    $lab_unit_delete['lab_unit.temp_lab_unit_id'] = is_null($this->input->post('lab_unit_temp_lab_unit_id')) ? '' : $this->input->post('lab_unit_temp_lab_unit_id');
    $this->db->delete('lab_unit', array('lab_unit_id' => $lab_unit_delete['lab_unit_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $lab_unit_delete);
  }
  function lab_unit_get_records($hospital_id,$hospital_id,$lab_unit_id) {
    $lab_unit_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $lab_unit_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $lab_unit_filters['lab_unit.lab_unit_id'] = $this->session->lab_unit_lab_unit_id;
    $lab_unit_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $lab_unit_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $lab_unit_filters['lab_unit.lab_unit_id'] = $lab_unit_lab_unit_id;
    $lab_unit_filters['lab_unit.hospital_id'] = is_null($this->input->post('lab_unit_hospital_id')) ? '' : $this->input->post('lab_unit_hospital_id');
    $lab_unit_filters['lab_unit.lab_unit'] = is_null($this->input->post('lab_unit_lab_unit')) ? '' : $this->input->post('lab_unit_lab_unit');
    $lab_unit_filters['lab_unit.temp_lab_unit_id'] = is_null($this->input->post('lab_unit_temp_lab_unit_id')) ? '' : $this->input->post('lab_unit_temp_lab_unit_id');
    $this->session->set_userdata('hospital.hospital_id', $lab_unit_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $lab_unit_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('lab_unit.lab_unit_id', $lab_unit_filters['lab_unit.lab_unit_id']);
    $this->db->select('hospital.hospital_id AS lab_unit_hospital_id, staff_previous_hospital.hospital_id AS lab_unit_hospital_id,
    lab_unit.hospital_id AS lab_unit_hospital_id, lab_unit.lab_unit AS lab_unit_lab_unit,
    lab_unit.lab_unit_id AS lab_unit_lab_unit_id, lab_unit.temp_lab_unit_id AS lab_unit_temp_lab_unit_id')->from('lab_unit');
    $this->db->join('hospital', 'lab_unit.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'lab_unit.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($lab_unit_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $lab_unit_filters);
  }
}