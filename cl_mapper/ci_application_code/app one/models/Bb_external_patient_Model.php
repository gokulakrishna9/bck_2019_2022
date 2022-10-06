<?php class Bb_external_patient_model extends CI_Model {
  function bb_external_patient_create($hospital_hospital_id,$staff_previous_hospital_hospital_id) {
    $bb_external_patient_post = [];
    $bb_external_patient_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_external_patient_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_external_patient_post['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_external_patient_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_external_patient_post['age'] = is_null($this->input->post('age')) ? '' : $this->input->post('age');
    $bb_external_patient_post['diagnosis'] = is_null($this->input->post('diagnosis')) ? '' : $this->input->post('diagnosis');
    $bb_external_patient_post['doctor'] = is_null($this->input->post('doctor')) ? '' : $this->input->post('doctor');
    $bb_external_patient_post['first_name'] = is_null($this->input->post('first_name')) ? '' : $this->input->post('first_name');
    $bb_external_patient_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $bb_external_patient_post['last_name'] = is_null($this->input->post('last_name')) ? '' : $this->input->post('last_name');
    $bb_external_patient_post['patient_id'] = is_null($this->input->post('patient_id')) ? '' : $this->input->post('patient_id');
    $bb_external_patient_post['ward_unit'] = is_null($this->input->post('ward_unit')) ? '' : $this->input->post('ward_unit');
    $this->session->set_userdata('hospital.hospital_id', $bb_external_patient_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_external_patient_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('bb_external_patient', $bb_external_patient_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $bb_external_patient_post);
  }
  function bb_external_patient_update($hospital_id,$hospital_id,$patient_id) {
    $bb_external_patient_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_external_patient_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_external_patient_post['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $bb_external_patient_post['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_external_patient_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_external_patient_post['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $bb_external_patient_post['bb_external_patient.age'] = is_null($this->input->post('bb_external_patient_age')) ? '' : $this->input->post('bb_external_patient_age');
    $bb_external_patient_post['bb_external_patient.diagnosis'] = is_null($this->input->post('bb_external_patient_diagnosis')) ? '' : $this->input->post('bb_external_patient_diagnosis');
    $bb_external_patient_post['bb_external_patient.doctor'] = is_null($this->input->post('bb_external_patient_doctor')) ? '' : $this->input->post('bb_external_patient_doctor');
    $bb_external_patient_post['bb_external_patient.first_name'] = is_null($this->input->post('bb_external_patient_first_name')) ? '' : $this->input->post('bb_external_patient_first_name');
    $bb_external_patient_post['bb_external_patient.hospital_id'] = is_null($this->input->post('bb_external_patient_hospital_id')) ? '' : $this->input->post('bb_external_patient_hospital_id');
    $bb_external_patient_post['bb_external_patient.last_name'] = is_null($this->input->post('bb_external_patient_last_name')) ? '' : $this->input->post('bb_external_patient_last_name');
    $bb_external_patient_post['bb_external_patient.ward_unit'] = is_null($this->input->post('bb_external_patient_ward_unit')) ? '' : $this->input->post('bb_external_patient_ward_unit');
    $this->session->set_userdata('hospital.hospital_id', $bb_external_patient_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_external_patient_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_external_patient.patient_id', $bb_external_patient_post['bb_external_patient.patient_id']);
    $this->db->update('bb_external_patient', $bb_external_patient_post, array('patient_id' => $bb_external_patient_post['patient_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_external_patient_post);
  }
  function bb_external_patient_delete() {
    $bb_external_patient_delete['bb_external_patient.age'] = is_null($this->input->post('bb_external_patient_age')) ? '' : $this->input->post('bb_external_patient_age');
    $bb_external_patient_delete['bb_external_patient.diagnosis'] = is_null($this->input->post('bb_external_patient_diagnosis')) ? '' : $this->input->post('bb_external_patient_diagnosis');
    $bb_external_patient_delete['bb_external_patient.doctor'] = is_null($this->input->post('bb_external_patient_doctor')) ? '' : $this->input->post('bb_external_patient_doctor');
    $bb_external_patient_delete['bb_external_patient.first_name'] = is_null($this->input->post('bb_external_patient_first_name')) ? '' : $this->input->post('bb_external_patient_first_name');
    $bb_external_patient_delete['bb_external_patient.hospital_id'] = is_null($this->input->post('bb_external_patient_hospital_id')) ? '' : $this->input->post('bb_external_patient_hospital_id');
    $bb_external_patient_delete['bb_external_patient.last_name'] = is_null($this->input->post('bb_external_patient_last_name')) ? '' : $this->input->post('bb_external_patient_last_name');
    $bb_external_patient_delete['bb_external_patient.patient_id'] = is_null($this->input->post('bb_external_patient_patient_id')) ? '' : $this->input->post('bb_external_patient_patient_id');
    $bb_external_patient_delete['bb_external_patient.ward_unit'] = is_null($this->input->post('bb_external_patient_ward_unit')) ? '' : $this->input->post('bb_external_patient_ward_unit');
    $this->db->delete('bb_external_patient', array('patient_id' => $bb_external_patient_delete['patient_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_external_patient_delete);
  }
  function bb_external_patient_get_records($hospital_id,$hospital_id,$patient_id) {
    $bb_external_patient_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_external_patient_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_external_patient_filters['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $bb_external_patient_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_external_patient_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_external_patient_filters['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $bb_external_patient_filters['bb_external_patient.age'] = is_null($this->input->post('bb_external_patient_age')) ? '' : $this->input->post('bb_external_patient_age');
    $bb_external_patient_filters['bb_external_patient.diagnosis'] = is_null($this->input->post('bb_external_patient_diagnosis')) ? '' : $this->input->post('bb_external_patient_diagnosis');
    $bb_external_patient_filters['bb_external_patient.doctor'] = is_null($this->input->post('bb_external_patient_doctor')) ? '' : $this->input->post('bb_external_patient_doctor');
    $bb_external_patient_filters['bb_external_patient.first_name'] = is_null($this->input->post('bb_external_patient_first_name')) ? '' : $this->input->post('bb_external_patient_first_name');
    $bb_external_patient_filters['bb_external_patient.hospital_id'] = is_null($this->input->post('bb_external_patient_hospital_id')) ? '' : $this->input->post('bb_external_patient_hospital_id');
    $bb_external_patient_filters['bb_external_patient.last_name'] = is_null($this->input->post('bb_external_patient_last_name')) ? '' : $this->input->post('bb_external_patient_last_name');
    $bb_external_patient_filters['bb_external_patient.ward_unit'] = is_null($this->input->post('bb_external_patient_ward_unit')) ? '' : $this->input->post('bb_external_patient_ward_unit');
    $this->session->set_userdata('hospital.hospital_id', $bb_external_patient_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_external_patient_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_external_patient.patient_id', $bb_external_patient_filters['bb_external_patient.patient_id']);
    $this->db->select('hospital.hospital_id AS bb_external_patient_hospital_id, staff_previous_hospital.hospital_id AS bb_external_patient_hospital_id,
    bb_external_patient.age AS bb_external_patient_age, bb_external_patient.diagnosis AS bb_external_patient_diagnosis,
    bb_external_patient.doctor AS bb_external_patient_doctor, bb_external_patient.first_name AS bb_external_patient_first_name,
    bb_external_patient.hospital_id AS bb_external_patient_hospital_id, bb_external_patient.last_name AS bb_external_patient_last_name,
    bb_external_patient.patient_id AS bb_external_patient_patient_id, bb_external_patient.ward_unit AS bb_external_patient_ward_unit')->from('bb_external_patient');
    $this->db->join('hospital', 'bb_external_patient.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'bb_external_patient.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($bb_external_patient_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $bb_external_patient_filters);
  }
}