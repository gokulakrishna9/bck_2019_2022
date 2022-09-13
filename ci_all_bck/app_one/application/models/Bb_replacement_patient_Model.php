<?php class Bb_replacement_patient_model extends CI_Model {
  function bb_replacement_patient_create() {
    $bb_replacement_patient_post = [];
    $bb_replacement_patient_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_replacement_patient_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_replacement_patient_post['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_replacement_patient_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_replacement_patient_post['replacement_patient_id'] = is_null($this->input->post('replacement_patient_id')) ? '' : $this->input->post('replacement_patient_id');
    $bb_replacement_patient_post['ip_number'] = is_null($this->input->post('ip_number')) ? '' : $this->input->post('ip_number');
    $bb_replacement_patient_post['name'] = is_null($this->input->post('name')) ? '' : $this->input->post('name');
    $bb_replacement_patient_post['ward_unit'] = is_null($this->input->post('ward_unit')) ? '' : $this->input->post('ward_unit');
    $bb_replacement_patient_post['blood_group'] = is_null($this->input->post('blood_group')) ? '' : $this->input->post('blood_group');
    $bb_replacement_patient_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $this->session->set_userdata('hospital.hospital_id', $bb_replacement_patient_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_replacement_patient_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('bb_replacement_patient', $bb_replacement_patient_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $bb_replacement_patient_post);
  }
  function bb_replacement_patient_update() {
    $bb_replacement_patient_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_replacement_patient_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_replacement_patient_post['bb_replacement_patient.replacement_patient_id'] = $this->session->bb_replacement_patient_replacement_patient_id;
    $bb_replacement_patient_post['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_replacement_patient_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_replacement_patient_post['bb_replacement_patient.replacement_patient_id'] = $bb_replacement_patient_replacement_patient_id;
    $bb_replacement_patient_post['bb_replacement_patient.ip_number'] = is_null($this->input->post('bb_replacement_patient_ip_number')) ? '' : $this->input->post('bb_replacement_patient_ip_number');
    $bb_replacement_patient_post['bb_replacement_patient.name'] = is_null($this->input->post('bb_replacement_patient_name')) ? '' : $this->input->post('bb_replacement_patient_name');
    $bb_replacement_patient_post['bb_replacement_patient.ward_unit'] = is_null($this->input->post('bb_replacement_patient_ward_unit')) ? '' : $this->input->post('bb_replacement_patient_ward_unit');
    $bb_replacement_patient_post['bb_replacement_patient.blood_group'] = is_null($this->input->post('bb_replacement_patient_blood_group')) ? '' : $this->input->post('bb_replacement_patient_blood_group');
    $bb_replacement_patient_post['bb_replacement_patient.hospital_id'] = is_null($this->input->post('bb_replacement_patient_hospital_id')) ? '' : $this->input->post('bb_replacement_patient_hospital_id');
    $this->session->set_userdata('hospital.hospital_id', $bb_replacement_patient_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_replacement_patient_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_replacement_patient.replacement_patient_id', $bb_replacement_patient_post['bb_replacement_patient.replacement_patient_id']);
    $this->db->update('bb_replacement_patient', $bb_replacement_patient_post, array('replacement_patient_id' => $bb_replacement_patient_post['replacement_patient_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_replacement_patient_post);
  }
  function bb_replacement_patient_delete() {
    $bb_replacement_patient_delete['bb_replacement_patient.replacement_patient_id'] = is_null($this->input->post('bb_replacement_patient_replacement_patient_id')) ? '' : $this->input->post('bb_replacement_patient_replacement_patient_id');
    $bb_replacement_patient_delete['bb_replacement_patient.ip_number'] = is_null($this->input->post('bb_replacement_patient_ip_number')) ? '' : $this->input->post('bb_replacement_patient_ip_number');
    $bb_replacement_patient_delete['bb_replacement_patient.name'] = is_null($this->input->post('bb_replacement_patient_name')) ? '' : $this->input->post('bb_replacement_patient_name');
    $bb_replacement_patient_delete['bb_replacement_patient.ward_unit'] = is_null($this->input->post('bb_replacement_patient_ward_unit')) ? '' : $this->input->post('bb_replacement_patient_ward_unit');
    $bb_replacement_patient_delete['bb_replacement_patient.blood_group'] = is_null($this->input->post('bb_replacement_patient_blood_group')) ? '' : $this->input->post('bb_replacement_patient_blood_group');
    $bb_replacement_patient_delete['bb_replacement_patient.hospital_id'] = is_null($this->input->post('bb_replacement_patient_hospital_id')) ? '' : $this->input->post('bb_replacement_patient_hospital_id');
    $this->db->delete('bb_replacement_patient', array('replacement_patient_id' => $bb_replacement_patient_delete['replacement_patient_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_replacement_patient_delete);
  }
  function bb_replacement_patient_get_records() {
    $bb_replacement_patient_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_replacement_patient_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_replacement_patient_filters['bb_replacement_patient.replacement_patient_id'] = $this->session->bb_replacement_patient_replacement_patient_id;
    $bb_replacement_patient_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_replacement_patient_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_replacement_patient_filters['bb_replacement_patient.replacement_patient_id'] = $bb_replacement_patient_replacement_patient_id;
    $bb_replacement_patient_filters['bb_replacement_patient.ip_number'] = is_null($this->input->post('bb_replacement_patient_ip_number')) ? '' : $this->input->post('bb_replacement_patient_ip_number');
    $bb_replacement_patient_filters['bb_replacement_patient.name'] = is_null($this->input->post('bb_replacement_patient_name')) ? '' : $this->input->post('bb_replacement_patient_name');
    $bb_replacement_patient_filters['bb_replacement_patient.ward_unit'] = is_null($this->input->post('bb_replacement_patient_ward_unit')) ? '' : $this->input->post('bb_replacement_patient_ward_unit');
    $bb_replacement_patient_filters['bb_replacement_patient.blood_group'] = is_null($this->input->post('bb_replacement_patient_blood_group')) ? '' : $this->input->post('bb_replacement_patient_blood_group');
    $bb_replacement_patient_filters['bb_replacement_patient.hospital_id'] = is_null($this->input->post('bb_replacement_patient_hospital_id')) ? '' : $this->input->post('bb_replacement_patient_hospital_id');
    $this->session->set_userdata('hospital.hospital_id', $bb_replacement_patient_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_replacement_patient_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_replacement_patient.replacement_patient_id', $bb_replacement_patient_filters['bb_replacement_patient.replacement_patient_id']);
    $this->db->select('hospital.hospital_id AS bb_replacement_patient_hospital_id, staff_previous_hospital.hospital_id AS bb_replacement_patient_hospital_id,
    bb_replacement_patient.replacement_patient_id AS bb_replacement_patient_replacement_patient_id, bb_replacement_patient.ip_number AS bb_replacement_patient_ip_number,
    bb_replacement_patient.name AS bb_replacement_patient_name, bb_replacement_patient.ward_unit AS bb_replacement_patient_ward_unit,
    bb_replacement_patient.blood_group AS bb_replacement_patient_blood_group, bb_replacement_patient.hospital_id AS bb_replacement_patient_hospital_id')->from('bb_replacement_patient');
    $this->db->join('hospital', 'bb_replacement_patient.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'bb_replacement_patient.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($bb_replacement_patient_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $bb_replacement_patient_filters);
  }
}