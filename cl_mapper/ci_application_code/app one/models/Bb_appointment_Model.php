<?php class Bb_appointment_model extends CI_Model {
  function bb_appointment_create($blood_donor_donor_id,$hospital_hospital_id,$staff_previous_hospital_hospital_id,$bb_slot_slot_id) {
    $bb_appointment_post = [];
    $bb_appointment_post['blood_donor.donor_id'] = $this->session->blood_donor_donor_id;
    $bb_appointment_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_appointment_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_appointment_post['bb_slot.slot_id'] = $this->session->bb_slot_slot_id;
    $bb_appointment_post['blood_donor.donor_id'] = $blood_donor_donor_id;
    $bb_appointment_post['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_appointment_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_appointment_post['bb_slot.slot_id'] = $bb_slot_slot_id;
    $bb_appointment_post['appointment_id'] = is_null($this->input->post('appointment_id')) ? '' : $this->input->post('appointment_id');
    $bb_appointment_post['datetime'] = is_null($this->input->post('datetime')) ? '' : $this->input->post('datetime');
    $bb_appointment_post['donor_id'] = is_null($this->input->post('donor_id')) ? '' : $this->input->post('donor_id');
    $bb_appointment_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $bb_appointment_post['slot_id'] = is_null($this->input->post('slot_id')) ? '' : $this->input->post('slot_id');
    $bb_appointment_post['status'] = is_null($this->input->post('status')) ? '' : $this->input->post('status');
    $this->session->set_userdata('blood_donor.donor_id', $bb_appointment_post['blood_donor.donor_id']);
    $this->session->set_userdata('hospital.hospital_id', $bb_appointment_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_appointment_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_slot.slot_id', $bb_appointment_post['bb_slot.slot_id']);
    $this->db->insert('bb_appointment', $bb_appointment_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $bb_appointment_post);
  }
  function bb_appointment_update($donor_id,$hospital_id,$hospital_id,$slot_id,$appointment_id) {
    $bb_appointment_post['blood_donor.donor_id'] = $this->session->blood_donor_donor_id;
    $bb_appointment_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_appointment_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_appointment_post['bb_slot.slot_id'] = $this->session->bb_slot_slot_id;
    $bb_appointment_post['bb_appointment.appointment_id'] = $this->session->bb_appointment_appointment_id;
    $bb_appointment_post['blood_donor.donor_id'] = $blood_donor_donor_id;
    $bb_appointment_post['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_appointment_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_appointment_post['bb_slot.slot_id'] = $bb_slot_slot_id;
    $bb_appointment_post['bb_appointment.appointment_id'] = $bb_appointment_appointment_id;
    $bb_appointment_post['bb_appointment.datetime'] = is_null($this->input->post('bb_appointment_datetime')) ? '' : $this->input->post('bb_appointment_datetime');
    $bb_appointment_post['bb_appointment.donor_id'] = is_null($this->input->post('bb_appointment_donor_id')) ? '' : $this->input->post('bb_appointment_donor_id');
    $bb_appointment_post['bb_appointment.hospital_id'] = is_null($this->input->post('bb_appointment_hospital_id')) ? '' : $this->input->post('bb_appointment_hospital_id');
    $bb_appointment_post['bb_appointment.slot_id'] = is_null($this->input->post('bb_appointment_slot_id')) ? '' : $this->input->post('bb_appointment_slot_id');
    $bb_appointment_post['bb_appointment.status'] = is_null($this->input->post('bb_appointment_status')) ? '' : $this->input->post('bb_appointment_status');
    $this->session->set_userdata('blood_donor.donor_id', $bb_appointment_post['blood_donor.donor_id']);
    $this->session->set_userdata('hospital.hospital_id', $bb_appointment_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_appointment_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_slot.slot_id', $bb_appointment_post['bb_slot.slot_id']);
    $this->session->set_userdata('bb_appointment.appointment_id', $bb_appointment_post['bb_appointment.appointment_id']);
    $this->db->update('bb_appointment', $bb_appointment_post, array('appointment_id' => $bb_appointment_post['appointment_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_appointment_post);
  }
  function bb_appointment_delete() {
    $bb_appointment_delete['bb_appointment.appointment_id'] = is_null($this->input->post('bb_appointment_appointment_id')) ? '' : $this->input->post('bb_appointment_appointment_id');
    $bb_appointment_delete['bb_appointment.datetime'] = is_null($this->input->post('bb_appointment_datetime')) ? '' : $this->input->post('bb_appointment_datetime');
    $bb_appointment_delete['bb_appointment.donor_id'] = is_null($this->input->post('bb_appointment_donor_id')) ? '' : $this->input->post('bb_appointment_donor_id');
    $bb_appointment_delete['bb_appointment.hospital_id'] = is_null($this->input->post('bb_appointment_hospital_id')) ? '' : $this->input->post('bb_appointment_hospital_id');
    $bb_appointment_delete['bb_appointment.slot_id'] = is_null($this->input->post('bb_appointment_slot_id')) ? '' : $this->input->post('bb_appointment_slot_id');
    $bb_appointment_delete['bb_appointment.status'] = is_null($this->input->post('bb_appointment_status')) ? '' : $this->input->post('bb_appointment_status');
    $this->db->delete('bb_appointment', array('appointment_id' => $bb_appointment_delete['appointment_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_appointment_delete);
  }
  function bb_appointment_get_records($donor_id,$hospital_id,$hospital_id,$slot_id,$appointment_id) {
    $bb_appointment_filters['blood_donor.donor_id'] = $this->session->blood_donor_donor_id;
    $bb_appointment_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_appointment_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_appointment_filters['bb_slot.slot_id'] = $this->session->bb_slot_slot_id;
    $bb_appointment_filters['bb_appointment.appointment_id'] = $this->session->bb_appointment_appointment_id;
    $bb_appointment_filters['blood_donor.donor_id'] = $blood_donor_donor_id;
    $bb_appointment_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_appointment_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_appointment_filters['bb_slot.slot_id'] = $bb_slot_slot_id;
    $bb_appointment_filters['bb_appointment.appointment_id'] = $bb_appointment_appointment_id;
    $bb_appointment_filters['bb_appointment.datetime'] = is_null($this->input->post('bb_appointment_datetime')) ? '' : $this->input->post('bb_appointment_datetime');
    $bb_appointment_filters['bb_appointment.donor_id'] = is_null($this->input->post('bb_appointment_donor_id')) ? '' : $this->input->post('bb_appointment_donor_id');
    $bb_appointment_filters['bb_appointment.hospital_id'] = is_null($this->input->post('bb_appointment_hospital_id')) ? '' : $this->input->post('bb_appointment_hospital_id');
    $bb_appointment_filters['bb_appointment.slot_id'] = is_null($this->input->post('bb_appointment_slot_id')) ? '' : $this->input->post('bb_appointment_slot_id');
    $bb_appointment_filters['bb_appointment.status'] = is_null($this->input->post('bb_appointment_status')) ? '' : $this->input->post('bb_appointment_status');
    $this->session->set_userdata('blood_donor.donor_id', $bb_appointment_filters['blood_donor.donor_id']);
    $this->session->set_userdata('hospital.hospital_id', $bb_appointment_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_appointment_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_slot.slot_id', $bb_appointment_filters['bb_slot.slot_id']);
    $this->session->set_userdata('bb_appointment.appointment_id', $bb_appointment_filters['bb_appointment.appointment_id']);
    $this->db->select('blood_donor.donor_id AS bb_appointment_donor_id, hospital.hospital_id AS bb_appointment_hospital_id,
    staff_previous_hospital.hospital_id AS bb_appointment_hospital_id, bb_slot.slot_id AS bb_appointment_slot_id,
    bb_appointment.appointment_id AS bb_appointment_appointment_id, bb_appointment.datetime AS bb_appointment_datetime,
    bb_appointment.donor_id AS bb_appointment_donor_id, bb_appointment.hospital_id AS bb_appointment_hospital_id,
    bb_appointment.slot_id AS bb_appointment_slot_id, bb_appointment.status AS bb_appointment_status')->from('bb_appointment');
    $this->db->join('blood_donor', 'bb_appointment.donor_id = blood_donor.donor_id', 'left');
    $this->db->join('hospital', 'bb_appointment.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'bb_appointment.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->join('bb_slot', 'bb_appointment.slot_id = bb_slot.slot_id', 'left');
    $this->db->where($bb_appointment_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $bb_appointment_filters);
  }
}