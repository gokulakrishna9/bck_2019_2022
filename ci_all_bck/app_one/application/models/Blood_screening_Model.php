<?php class Blood_screening_model extends CI_Model {
  function blood_screening_create() {
    $blood_screening_post = [];
    $blood_screening_post['bb_donation.donation_id'] = $this->session->bb_donation_donation_id;
    $blood_screening_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_screening_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_screening_post['bb_donation.donation_id'] = $bb_donation_donation_id;
    $blood_screening_post['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_screening_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_screening_post['screening_id'] = is_null($this->input->post('screening_id')) ? '' : $this->input->post('screening_id');
    $blood_screening_post['donation_id'] = is_null($this->input->post('donation_id')) ? '' : $this->input->post('donation_id');
    $blood_screening_post['test_hiv'] = is_null($this->input->post('test_hiv')) ? '' : $this->input->post('test_hiv');
    $blood_screening_post['test_hbsag'] = is_null($this->input->post('test_hbsag')) ? '' : $this->input->post('test_hbsag');
    $blood_screening_post['test_hcv'] = is_null($this->input->post('test_hcv')) ? '' : $this->input->post('test_hcv');
    $blood_screening_post['test_vdrl'] = is_null($this->input->post('test_vdrl')) ? '' : $this->input->post('test_vdrl');
    $blood_screening_post['test_mp'] = is_null($this->input->post('test_mp')) ? '' : $this->input->post('test_mp');
    $blood_screening_post['test_irregular_ab'] = is_null($this->input->post('test_irregular_ab')) ? '' : $this->input->post('test_irregular_ab');
    $blood_screening_post['screening_result'] = is_null($this->input->post('screening_result')) ? '' : $this->input->post('screening_result');
    $blood_screening_post['screening_datetime'] = is_null($this->input->post('screening_datetime')) ? '' : $this->input->post('screening_datetime');
    $blood_screening_post['screened_by'] = is_null($this->input->post('screened_by')) ? '' : $this->input->post('screened_by');
    $blood_screening_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $this->session->set_userdata('bb_donation.donation_id', $blood_screening_post['bb_donation.donation_id']);
    $this->session->set_userdata('hospital.hospital_id', $blood_screening_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_screening_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('blood_screening', $blood_screening_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $blood_screening_post);
  }
  function blood_screening_update() {
    $blood_screening_post['bb_donation.donation_id'] = $this->session->bb_donation_donation_id;
    $blood_screening_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_screening_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_screening_post['blood_screening.screening_id'] = $this->session->blood_screening_screening_id;
    $blood_screening_post['bb_donation.donation_id'] = $bb_donation_donation_id;
    $blood_screening_post['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_screening_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_screening_post['blood_screening.screening_id'] = $blood_screening_screening_id;
    $blood_screening_post['blood_screening.donation_id'] = is_null($this->input->post('blood_screening_donation_id')) ? '' : $this->input->post('blood_screening_donation_id');
    $blood_screening_post['blood_screening.test_hiv'] = is_null($this->input->post('blood_screening_test_hiv')) ? '' : $this->input->post('blood_screening_test_hiv');
    $blood_screening_post['blood_screening.test_hbsag'] = is_null($this->input->post('blood_screening_test_hbsag')) ? '' : $this->input->post('blood_screening_test_hbsag');
    $blood_screening_post['blood_screening.test_hcv'] = is_null($this->input->post('blood_screening_test_hcv')) ? '' : $this->input->post('blood_screening_test_hcv');
    $blood_screening_post['blood_screening.test_vdrl'] = is_null($this->input->post('blood_screening_test_vdrl')) ? '' : $this->input->post('blood_screening_test_vdrl');
    $blood_screening_post['blood_screening.test_mp'] = is_null($this->input->post('blood_screening_test_mp')) ? '' : $this->input->post('blood_screening_test_mp');
    $blood_screening_post['blood_screening.test_irregular_ab'] = is_null($this->input->post('blood_screening_test_irregular_ab')) ? '' : $this->input->post('blood_screening_test_irregular_ab');
    $blood_screening_post['blood_screening.screening_result'] = is_null($this->input->post('blood_screening_screening_result')) ? '' : $this->input->post('blood_screening_screening_result');
    $blood_screening_post['blood_screening.screening_datetime'] = is_null($this->input->post('blood_screening_screening_datetime')) ? '' : $this->input->post('blood_screening_screening_datetime');
    $blood_screening_post['blood_screening.screened_by'] = is_null($this->input->post('blood_screening_screened_by')) ? '' : $this->input->post('blood_screening_screened_by');
    $blood_screening_post['blood_screening.hospital_id'] = is_null($this->input->post('blood_screening_hospital_id')) ? '' : $this->input->post('blood_screening_hospital_id');
    $this->session->set_userdata('bb_donation.donation_id', $blood_screening_post['bb_donation.donation_id']);
    $this->session->set_userdata('hospital.hospital_id', $blood_screening_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_screening_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('blood_screening.screening_id', $blood_screening_post['blood_screening.screening_id']);
    $this->db->update('blood_screening', $blood_screening_post, array('screening_id' => $blood_screening_post['screening_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_screening_post);
  }
  function blood_screening_delete() {
    $blood_screening_delete['blood_screening.screening_id'] = is_null($this->input->post('blood_screening_screening_id')) ? '' : $this->input->post('blood_screening_screening_id');
    $blood_screening_delete['blood_screening.donation_id'] = is_null($this->input->post('blood_screening_donation_id')) ? '' : $this->input->post('blood_screening_donation_id');
    $blood_screening_delete['blood_screening.test_hiv'] = is_null($this->input->post('blood_screening_test_hiv')) ? '' : $this->input->post('blood_screening_test_hiv');
    $blood_screening_delete['blood_screening.test_hbsag'] = is_null($this->input->post('blood_screening_test_hbsag')) ? '' : $this->input->post('blood_screening_test_hbsag');
    $blood_screening_delete['blood_screening.test_hcv'] = is_null($this->input->post('blood_screening_test_hcv')) ? '' : $this->input->post('blood_screening_test_hcv');
    $blood_screening_delete['blood_screening.test_vdrl'] = is_null($this->input->post('blood_screening_test_vdrl')) ? '' : $this->input->post('blood_screening_test_vdrl');
    $blood_screening_delete['blood_screening.test_mp'] = is_null($this->input->post('blood_screening_test_mp')) ? '' : $this->input->post('blood_screening_test_mp');
    $blood_screening_delete['blood_screening.test_irregular_ab'] = is_null($this->input->post('blood_screening_test_irregular_ab')) ? '' : $this->input->post('blood_screening_test_irregular_ab');
    $blood_screening_delete['blood_screening.screening_result'] = is_null($this->input->post('blood_screening_screening_result')) ? '' : $this->input->post('blood_screening_screening_result');
    $blood_screening_delete['blood_screening.screening_datetime'] = is_null($this->input->post('blood_screening_screening_datetime')) ? '' : $this->input->post('blood_screening_screening_datetime');
    $blood_screening_delete['blood_screening.screened_by'] = is_null($this->input->post('blood_screening_screened_by')) ? '' : $this->input->post('blood_screening_screened_by');
    $blood_screening_delete['blood_screening.hospital_id'] = is_null($this->input->post('blood_screening_hospital_id')) ? '' : $this->input->post('blood_screening_hospital_id');
    $this->db->delete('blood_screening', array('screening_id' => $blood_screening_delete['screening_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_screening_delete);
  }
  function blood_screening_get_records() {
    $blood_screening_filters['bb_donation.donation_id'] = $this->session->bb_donation_donation_id;
    $blood_screening_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_screening_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_screening_filters['blood_screening.screening_id'] = $this->session->blood_screening_screening_id;
    $blood_screening_filters['bb_donation.donation_id'] = $bb_donation_donation_id;
    $blood_screening_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_screening_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_screening_filters['blood_screening.screening_id'] = $blood_screening_screening_id;
    $blood_screening_filters['blood_screening.donation_id'] = is_null($this->input->post('blood_screening_donation_id')) ? '' : $this->input->post('blood_screening_donation_id');
    $blood_screening_filters['blood_screening.test_hiv'] = is_null($this->input->post('blood_screening_test_hiv')) ? '' : $this->input->post('blood_screening_test_hiv');
    $blood_screening_filters['blood_screening.test_hbsag'] = is_null($this->input->post('blood_screening_test_hbsag')) ? '' : $this->input->post('blood_screening_test_hbsag');
    $blood_screening_filters['blood_screening.test_hcv'] = is_null($this->input->post('blood_screening_test_hcv')) ? '' : $this->input->post('blood_screening_test_hcv');
    $blood_screening_filters['blood_screening.test_vdrl'] = is_null($this->input->post('blood_screening_test_vdrl')) ? '' : $this->input->post('blood_screening_test_vdrl');
    $blood_screening_filters['blood_screening.test_mp'] = is_null($this->input->post('blood_screening_test_mp')) ? '' : $this->input->post('blood_screening_test_mp');
    $blood_screening_filters['blood_screening.test_irregular_ab'] = is_null($this->input->post('blood_screening_test_irregular_ab')) ? '' : $this->input->post('blood_screening_test_irregular_ab');
    $blood_screening_filters['blood_screening.screening_result'] = is_null($this->input->post('blood_screening_screening_result')) ? '' : $this->input->post('blood_screening_screening_result');
    $blood_screening_filters['blood_screening.screening_datetime'] = is_null($this->input->post('blood_screening_screening_datetime')) ? '' : $this->input->post('blood_screening_screening_datetime');
    $blood_screening_filters['blood_screening.screened_by'] = is_null($this->input->post('blood_screening_screened_by')) ? '' : $this->input->post('blood_screening_screened_by');
    $blood_screening_filters['blood_screening.hospital_id'] = is_null($this->input->post('blood_screening_hospital_id')) ? '' : $this->input->post('blood_screening_hospital_id');
    $this->session->set_userdata('bb_donation.donation_id', $blood_screening_filters['bb_donation.donation_id']);
    $this->session->set_userdata('hospital.hospital_id', $blood_screening_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_screening_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('blood_screening.screening_id', $blood_screening_filters['blood_screening.screening_id']);
    $this->db->select('bb_donation.donation_id AS blood_screening_donation_id, hospital.hospital_id AS blood_screening_hospital_id,
    staff_previous_hospital.hospital_id AS blood_screening_hospital_id, blood_screening.screening_id AS blood_screening_screening_id,
    blood_screening.donation_id AS blood_screening_donation_id, blood_screening.test_hiv AS blood_screening_test_hiv,
    blood_screening.test_hbsag AS blood_screening_test_hbsag, blood_screening.test_hcv AS blood_screening_test_hcv,
    blood_screening.test_vdrl AS blood_screening_test_vdrl, blood_screening.test_mp AS blood_screening_test_mp,
    blood_screening.test_irregular_ab AS blood_screening_test_irregular_ab, blood_screening.screening_result AS blood_screening_screening_result,
    blood_screening.screening_datetime AS blood_screening_screening_datetime, blood_screening.screened_by AS blood_screening_screened_by,
    blood_screening.hospital_id AS blood_screening_hospital_id')->from('blood_screening');
    $this->db->join('bb_donation', 'blood_screening.donation_id = bb_donation.donation_id', 'left');
    $this->db->join('hospital', 'blood_screening.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'blood_screening.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($blood_screening_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $blood_screening_filters);
  }
}