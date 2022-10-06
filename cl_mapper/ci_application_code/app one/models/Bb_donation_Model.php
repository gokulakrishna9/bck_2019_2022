<?php class Bb_donation_model extends CI_Model {
  function bb_donation_create($blood_donation_camp_camp_id,$blood_donation_camp_date_camp_id,$blood_donor_donor_id,$hospital_hospital_id,$staff_previous_hospital_hospital_id,$bb_replacement_patient_replacement_patient_id,$bb_status_status_id) {
    $bb_donation_post = [];
    $bb_donation_post['blood_donation_camp.camp_id'] = $this->session->blood_donation_camp_camp_id;
    $bb_donation_post['blood_donation_camp_date.camp_id'] = $this->session->blood_donation_camp_date_camp_id;
    $bb_donation_post['blood_donor.donor_id'] = $this->session->blood_donor_donor_id;
    $bb_donation_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_donation_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_donation_post['bb_replacement_patient.replacement_patient_id'] = $this->session->bb_replacement_patient_replacement_patient_id;
    $bb_donation_post['bb_status.status_id'] = $this->session->bb_status_status_id;
    $bb_donation_post['blood_donation_camp.camp_id'] = $blood_donation_camp_camp_id;
    $bb_donation_post['blood_donation_camp_date.camp_id'] = $blood_donation_camp_date_camp_id;
    $bb_donation_post['blood_donor.donor_id'] = $blood_donor_donor_id;
    $bb_donation_post['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_donation_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_donation_post['bb_replacement_patient.replacement_patient_id'] = $bb_replacement_patient_replacement_patient_id;
    $bb_donation_post['bb_status.status_id'] = $bb_status_status_id;
    $bb_donation_post['bag_type'] = is_null($this->input->post('bag_type')) ? '' : $this->input->post('bag_type');
    $bb_donation_post['blood_unit_num'] = is_null($this->input->post('blood_unit_num')) ? '' : $this->input->post('blood_unit_num');
    $bb_donation_post['camp_id'] = is_null($this->input->post('camp_id')) ? '' : $this->input->post('camp_id');
    $bb_donation_post['collected_by'] = is_null($this->input->post('collected_by')) ? '' : $this->input->post('collected_by');
    $bb_donation_post['dbp'] = is_null($this->input->post('dbp')) ? '' : $this->input->post('dbp');
    $bb_donation_post['donation_date'] = is_null($this->input->post('donation_date')) ? '' : $this->input->post('donation_date');
    $bb_donation_post['donation_id'] = is_null($this->input->post('donation_id')) ? '' : $this->input->post('donation_id');
    $bb_donation_post['donation_time'] = is_null($this->input->post('donation_time')) ? '' : $this->input->post('donation_time');
    $bb_donation_post['donor_id'] = is_null($this->input->post('donor_id')) ? '' : $this->input->post('donor_id');
    $bb_donation_post['hb'] = is_null($this->input->post('hb')) ? '' : $this->input->post('hb');
    $bb_donation_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $bb_donation_post['pulse'] = is_null($this->input->post('pulse')) ? '' : $this->input->post('pulse');
    $bb_donation_post['replacement_patient_id'] = is_null($this->input->post('replacement_patient_id')) ? '' : $this->input->post('replacement_patient_id');
    $bb_donation_post['sbp'] = is_null($this->input->post('sbp')) ? '' : $this->input->post('sbp');
    $bb_donation_post['screening_result'] = is_null($this->input->post('screening_result')) ? '' : $this->input->post('screening_result');
    $bb_donation_post['segment_num'] = is_null($this->input->post('segment_num')) ? '' : $this->input->post('segment_num');
    $bb_donation_post['status'] = is_null($this->input->post('status')) ? '' : $this->input->post('status');
    $bb_donation_post['status_id'] = is_null($this->input->post('status_id')) ? '' : $this->input->post('status_id');
    $bb_donation_post['temperature'] = is_null($this->input->post('temperature')) ? '' : $this->input->post('temperature');
    $bb_donation_post['weight'] = is_null($this->input->post('weight')) ? '' : $this->input->post('weight');
    $this->session->set_userdata('blood_donation_camp.camp_id', $bb_donation_post['blood_donation_camp.camp_id']);
    $this->session->set_userdata('blood_donation_camp_date.camp_id', $bb_donation_post['blood_donation_camp_date.camp_id']);
    $this->session->set_userdata('blood_donor.donor_id', $bb_donation_post['blood_donor.donor_id']);
    $this->session->set_userdata('hospital.hospital_id', $bb_donation_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_donation_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_replacement_patient.replacement_patient_id', $bb_donation_post['bb_replacement_patient.replacement_patient_id']);
    $this->session->set_userdata('bb_status.status_id', $bb_donation_post['bb_status.status_id']);
    $this->db->insert('bb_donation', $bb_donation_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $bb_donation_post);
  }
  function bb_donation_update($camp_id,$camp_id,$donor_id,$hospital_id,$hospital_id,$replacement_patient_id,$status_id,$donation_id) {
    $bb_donation_post['blood_donation_camp.camp_id'] = $this->session->blood_donation_camp_camp_id;
    $bb_donation_post['blood_donation_camp_date.camp_id'] = $this->session->blood_donation_camp_date_camp_id;
    $bb_donation_post['blood_donor.donor_id'] = $this->session->blood_donor_donor_id;
    $bb_donation_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_donation_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_donation_post['bb_replacement_patient.replacement_patient_id'] = $this->session->bb_replacement_patient_replacement_patient_id;
    $bb_donation_post['bb_status.status_id'] = $this->session->bb_status_status_id;
    $bb_donation_post['bb_donation.donation_id'] = $this->session->bb_donation_donation_id;
    $bb_donation_post['blood_donation_camp.camp_id'] = $blood_donation_camp_camp_id;
    $bb_donation_post['blood_donation_camp_date.camp_id'] = $blood_donation_camp_date_camp_id;
    $bb_donation_post['blood_donor.donor_id'] = $blood_donor_donor_id;
    $bb_donation_post['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_donation_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_donation_post['bb_replacement_patient.replacement_patient_id'] = $bb_replacement_patient_replacement_patient_id;
    $bb_donation_post['bb_status.status_id'] = $bb_status_status_id;
    $bb_donation_post['bb_donation.donation_id'] = $bb_donation_donation_id;
    $bb_donation_post['bb_donation.bag_type'] = is_null($this->input->post('bb_donation_bag_type')) ? '' : $this->input->post('bb_donation_bag_type');
    $bb_donation_post['bb_donation.blood_unit_num'] = is_null($this->input->post('bb_donation_blood_unit_num')) ? '' : $this->input->post('bb_donation_blood_unit_num');
    $bb_donation_post['bb_donation.camp_id'] = is_null($this->input->post('bb_donation_camp_id')) ? '' : $this->input->post('bb_donation_camp_id');
    $bb_donation_post['bb_donation.collected_by'] = is_null($this->input->post('bb_donation_collected_by')) ? '' : $this->input->post('bb_donation_collected_by');
    $bb_donation_post['bb_donation.dbp'] = is_null($this->input->post('bb_donation_dbp')) ? '' : $this->input->post('bb_donation_dbp');
    $bb_donation_post['bb_donation.donation_date'] = is_null($this->input->post('bb_donation_donation_date')) ? '' : $this->input->post('bb_donation_donation_date');
    $bb_donation_post['bb_donation.donation_time'] = is_null($this->input->post('bb_donation_donation_time')) ? '' : $this->input->post('bb_donation_donation_time');
    $bb_donation_post['bb_donation.donor_id'] = is_null($this->input->post('bb_donation_donor_id')) ? '' : $this->input->post('bb_donation_donor_id');
    $bb_donation_post['bb_donation.hb'] = is_null($this->input->post('bb_donation_hb')) ? '' : $this->input->post('bb_donation_hb');
    $bb_donation_post['bb_donation.hospital_id'] = is_null($this->input->post('bb_donation_hospital_id')) ? '' : $this->input->post('bb_donation_hospital_id');
    $bb_donation_post['bb_donation.pulse'] = is_null($this->input->post('bb_donation_pulse')) ? '' : $this->input->post('bb_donation_pulse');
    $bb_donation_post['bb_donation.replacement_patient_id'] = is_null($this->input->post('bb_donation_replacement_patient_id')) ? '' : $this->input->post('bb_donation_replacement_patient_id');
    $bb_donation_post['bb_donation.sbp'] = is_null($this->input->post('bb_donation_sbp')) ? '' : $this->input->post('bb_donation_sbp');
    $bb_donation_post['bb_donation.screening_result'] = is_null($this->input->post('bb_donation_screening_result')) ? '' : $this->input->post('bb_donation_screening_result');
    $bb_donation_post['bb_donation.segment_num'] = is_null($this->input->post('bb_donation_segment_num')) ? '' : $this->input->post('bb_donation_segment_num');
    $bb_donation_post['bb_donation.status'] = is_null($this->input->post('bb_donation_status')) ? '' : $this->input->post('bb_donation_status');
    $bb_donation_post['bb_donation.status_id'] = is_null($this->input->post('bb_donation_status_id')) ? '' : $this->input->post('bb_donation_status_id');
    $bb_donation_post['bb_donation.temperature'] = is_null($this->input->post('bb_donation_temperature')) ? '' : $this->input->post('bb_donation_temperature');
    $bb_donation_post['bb_donation.weight'] = is_null($this->input->post('bb_donation_weight')) ? '' : $this->input->post('bb_donation_weight');
    $this->session->set_userdata('blood_donation_camp.camp_id', $bb_donation_post['blood_donation_camp.camp_id']);
    $this->session->set_userdata('blood_donation_camp_date.camp_id', $bb_donation_post['blood_donation_camp_date.camp_id']);
    $this->session->set_userdata('blood_donor.donor_id', $bb_donation_post['blood_donor.donor_id']);
    $this->session->set_userdata('hospital.hospital_id', $bb_donation_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_donation_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_replacement_patient.replacement_patient_id', $bb_donation_post['bb_replacement_patient.replacement_patient_id']);
    $this->session->set_userdata('bb_status.status_id', $bb_donation_post['bb_status.status_id']);
    $this->session->set_userdata('bb_donation.donation_id', $bb_donation_post['bb_donation.donation_id']);
    $this->db->update('bb_donation', $bb_donation_post, array('donation_id' => $bb_donation_post['donation_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_donation_post);
  }
  function bb_donation_delete() {
    $bb_donation_delete['bb_donation.bag_type'] = is_null($this->input->post('bb_donation_bag_type')) ? '' : $this->input->post('bb_donation_bag_type');
    $bb_donation_delete['bb_donation.blood_unit_num'] = is_null($this->input->post('bb_donation_blood_unit_num')) ? '' : $this->input->post('bb_donation_blood_unit_num');
    $bb_donation_delete['bb_donation.camp_id'] = is_null($this->input->post('bb_donation_camp_id')) ? '' : $this->input->post('bb_donation_camp_id');
    $bb_donation_delete['bb_donation.collected_by'] = is_null($this->input->post('bb_donation_collected_by')) ? '' : $this->input->post('bb_donation_collected_by');
    $bb_donation_delete['bb_donation.dbp'] = is_null($this->input->post('bb_donation_dbp')) ? '' : $this->input->post('bb_donation_dbp');
    $bb_donation_delete['bb_donation.donation_date'] = is_null($this->input->post('bb_donation_donation_date')) ? '' : $this->input->post('bb_donation_donation_date');
    $bb_donation_delete['bb_donation.donation_id'] = is_null($this->input->post('bb_donation_donation_id')) ? '' : $this->input->post('bb_donation_donation_id');
    $bb_donation_delete['bb_donation.donation_time'] = is_null($this->input->post('bb_donation_donation_time')) ? '' : $this->input->post('bb_donation_donation_time');
    $bb_donation_delete['bb_donation.donor_id'] = is_null($this->input->post('bb_donation_donor_id')) ? '' : $this->input->post('bb_donation_donor_id');
    $bb_donation_delete['bb_donation.hb'] = is_null($this->input->post('bb_donation_hb')) ? '' : $this->input->post('bb_donation_hb');
    $bb_donation_delete['bb_donation.hospital_id'] = is_null($this->input->post('bb_donation_hospital_id')) ? '' : $this->input->post('bb_donation_hospital_id');
    $bb_donation_delete['bb_donation.pulse'] = is_null($this->input->post('bb_donation_pulse')) ? '' : $this->input->post('bb_donation_pulse');
    $bb_donation_delete['bb_donation.replacement_patient_id'] = is_null($this->input->post('bb_donation_replacement_patient_id')) ? '' : $this->input->post('bb_donation_replacement_patient_id');
    $bb_donation_delete['bb_donation.sbp'] = is_null($this->input->post('bb_donation_sbp')) ? '' : $this->input->post('bb_donation_sbp');
    $bb_donation_delete['bb_donation.screening_result'] = is_null($this->input->post('bb_donation_screening_result')) ? '' : $this->input->post('bb_donation_screening_result');
    $bb_donation_delete['bb_donation.segment_num'] = is_null($this->input->post('bb_donation_segment_num')) ? '' : $this->input->post('bb_donation_segment_num');
    $bb_donation_delete['bb_donation.status'] = is_null($this->input->post('bb_donation_status')) ? '' : $this->input->post('bb_donation_status');
    $bb_donation_delete['bb_donation.status_id'] = is_null($this->input->post('bb_donation_status_id')) ? '' : $this->input->post('bb_donation_status_id');
    $bb_donation_delete['bb_donation.temperature'] = is_null($this->input->post('bb_donation_temperature')) ? '' : $this->input->post('bb_donation_temperature');
    $bb_donation_delete['bb_donation.weight'] = is_null($this->input->post('bb_donation_weight')) ? '' : $this->input->post('bb_donation_weight');
    $this->db->delete('bb_donation', array('donation_id' => $bb_donation_delete['donation_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_donation_delete);
  }
  function bb_donation_get_records($camp_id,$camp_id,$donor_id,$hospital_id,$hospital_id,$replacement_patient_id,$status_id,$donation_id) {
    $bb_donation_filters['blood_donation_camp.camp_id'] = $this->session->blood_donation_camp_camp_id;
    $bb_donation_filters['blood_donation_camp_date.camp_id'] = $this->session->blood_donation_camp_date_camp_id;
    $bb_donation_filters['blood_donor.donor_id'] = $this->session->blood_donor_donor_id;
    $bb_donation_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_donation_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_donation_filters['bb_replacement_patient.replacement_patient_id'] = $this->session->bb_replacement_patient_replacement_patient_id;
    $bb_donation_filters['bb_status.status_id'] = $this->session->bb_status_status_id;
    $bb_donation_filters['bb_donation.donation_id'] = $this->session->bb_donation_donation_id;
    $bb_donation_filters['blood_donation_camp.camp_id'] = $blood_donation_camp_camp_id;
    $bb_donation_filters['blood_donation_camp_date.camp_id'] = $blood_donation_camp_date_camp_id;
    $bb_donation_filters['blood_donor.donor_id'] = $blood_donor_donor_id;
    $bb_donation_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_donation_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_donation_filters['bb_replacement_patient.replacement_patient_id'] = $bb_replacement_patient_replacement_patient_id;
    $bb_donation_filters['bb_status.status_id'] = $bb_status_status_id;
    $bb_donation_filters['bb_donation.donation_id'] = $bb_donation_donation_id;
    $bb_donation_filters['bb_donation.bag_type'] = is_null($this->input->post('bb_donation_bag_type')) ? '' : $this->input->post('bb_donation_bag_type');
    $bb_donation_filters['bb_donation.blood_unit_num'] = is_null($this->input->post('bb_donation_blood_unit_num')) ? '' : $this->input->post('bb_donation_blood_unit_num');
    $bb_donation_filters['bb_donation.camp_id'] = is_null($this->input->post('bb_donation_camp_id')) ? '' : $this->input->post('bb_donation_camp_id');
    $bb_donation_filters['bb_donation.collected_by'] = is_null($this->input->post('bb_donation_collected_by')) ? '' : $this->input->post('bb_donation_collected_by');
    $bb_donation_filters['bb_donation.dbp'] = is_null($this->input->post('bb_donation_dbp')) ? '' : $this->input->post('bb_donation_dbp');
    $bb_donation_filters['bb_donation.donation_date'] = is_null($this->input->post('bb_donation_donation_date')) ? '' : $this->input->post('bb_donation_donation_date');
    $bb_donation_filters['bb_donation.donation_time'] = is_null($this->input->post('bb_donation_donation_time')) ? '' : $this->input->post('bb_donation_donation_time');
    $bb_donation_filters['bb_donation.donor_id'] = is_null($this->input->post('bb_donation_donor_id')) ? '' : $this->input->post('bb_donation_donor_id');
    $bb_donation_filters['bb_donation.hb'] = is_null($this->input->post('bb_donation_hb')) ? '' : $this->input->post('bb_donation_hb');
    $bb_donation_filters['bb_donation.hospital_id'] = is_null($this->input->post('bb_donation_hospital_id')) ? '' : $this->input->post('bb_donation_hospital_id');
    $bb_donation_filters['bb_donation.pulse'] = is_null($this->input->post('bb_donation_pulse')) ? '' : $this->input->post('bb_donation_pulse');
    $bb_donation_filters['bb_donation.replacement_patient_id'] = is_null($this->input->post('bb_donation_replacement_patient_id')) ? '' : $this->input->post('bb_donation_replacement_patient_id');
    $bb_donation_filters['bb_donation.sbp'] = is_null($this->input->post('bb_donation_sbp')) ? '' : $this->input->post('bb_donation_sbp');
    $bb_donation_filters['bb_donation.screening_result'] = is_null($this->input->post('bb_donation_screening_result')) ? '' : $this->input->post('bb_donation_screening_result');
    $bb_donation_filters['bb_donation.segment_num'] = is_null($this->input->post('bb_donation_segment_num')) ? '' : $this->input->post('bb_donation_segment_num');
    $bb_donation_filters['bb_donation.status'] = is_null($this->input->post('bb_donation_status')) ? '' : $this->input->post('bb_donation_status');
    $bb_donation_filters['bb_donation.status_id'] = is_null($this->input->post('bb_donation_status_id')) ? '' : $this->input->post('bb_donation_status_id');
    $bb_donation_filters['bb_donation.temperature'] = is_null($this->input->post('bb_donation_temperature')) ? '' : $this->input->post('bb_donation_temperature');
    $bb_donation_filters['bb_donation.weight'] = is_null($this->input->post('bb_donation_weight')) ? '' : $this->input->post('bb_donation_weight');
    $this->session->set_userdata('blood_donation_camp.camp_id', $bb_donation_filters['blood_donation_camp.camp_id']);
    $this->session->set_userdata('blood_donation_camp_date.camp_id', $bb_donation_filters['blood_donation_camp_date.camp_id']);
    $this->session->set_userdata('blood_donor.donor_id', $bb_donation_filters['blood_donor.donor_id']);
    $this->session->set_userdata('hospital.hospital_id', $bb_donation_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_donation_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_replacement_patient.replacement_patient_id', $bb_donation_filters['bb_replacement_patient.replacement_patient_id']);
    $this->session->set_userdata('bb_status.status_id', $bb_donation_filters['bb_status.status_id']);
    $this->session->set_userdata('bb_donation.donation_id', $bb_donation_filters['bb_donation.donation_id']);
    $this->db->select('blood_donation_camp.camp_id AS bb_donation_camp_id, blood_donation_camp_date.camp_id AS bb_donation_camp_id,
    blood_donor.donor_id AS bb_donation_donor_id, hospital.hospital_id AS bb_donation_hospital_id,
    staff_previous_hospital.hospital_id AS bb_donation_hospital_id, bb_replacement_patient.replacement_patient_id AS bb_donation_replacement_patient_id,
    bb_status.status_id AS bb_donation_status_id, bb_donation.bag_type AS bb_donation_bag_type,
    bb_donation.blood_unit_num AS bb_donation_blood_unit_num, bb_donation.camp_id AS bb_donation_camp_id,
    bb_donation.collected_by AS bb_donation_collected_by, bb_donation.dbp AS bb_donation_dbp,
    bb_donation.donation_date AS bb_donation_donation_date, bb_donation.donation_id AS bb_donation_donation_id,
    bb_donation.donation_time AS bb_donation_donation_time, bb_donation.donor_id AS bb_donation_donor_id,
    bb_donation.hb AS bb_donation_hb, bb_donation.hospital_id AS bb_donation_hospital_id,
    bb_donation.pulse AS bb_donation_pulse, bb_donation.replacement_patient_id AS bb_donation_replacement_patient_id,
    bb_donation.sbp AS bb_donation_sbp, bb_donation.screening_result AS bb_donation_screening_result,
    bb_donation.segment_num AS bb_donation_segment_num, bb_donation.status AS bb_donation_status,
    bb_donation.status_id AS bb_donation_status_id, bb_donation.temperature AS bb_donation_temperature,
    bb_donation.weight AS bb_donation_weight')->from('bb_donation');
    $this->db->join('blood_donation_camp', 'bb_donation.camp_id = blood_donation_camp.camp_id', 'left');
    $this->db->join('blood_donation_camp_date', 'bb_donation.camp_id = blood_donation_camp_date.camp_id', 'left');
    $this->db->join('blood_donor', 'bb_donation.donor_id = blood_donor.donor_id', 'left');
    $this->db->join('hospital', 'bb_donation.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'bb_donation.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->join('bb_replacement_patient', 'bb_donation.replacement_patient_id = bb_replacement_patient.replacement_patient_id', 'left');
    $this->db->join('bb_status', 'bb_donation.status_id = bb_status.status_id', 'left');
    $this->db->where($bb_donation_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $bb_donation_filters);
  }
}