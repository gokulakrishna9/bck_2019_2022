<?php class Bb_app_slot_link_model extends CI_Model {
  function bb_app_slot_link_create() {
    $bb_app_slot_link_post = [];
    $bb_app_slot_link_post['bb_appointment.appointment_id'] = $this->session->bb_appointment_appointment_id;
    $bb_app_slot_link_post['bb_slot.slot_id'] = $this->session->bb_slot_slot_id;
    $bb_app_slot_link_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_app_slot_link_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_app_slot_link_post['bb_appointment.appointment_id'] = $bb_appointment_appointment_id;
    $bb_app_slot_link_post['bb_slot.slot_id'] = $bb_slot_slot_id;
    $bb_app_slot_link_post['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_app_slot_link_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_app_slot_link_post['link_id'] = is_null($this->input->post('link_id')) ? '' : $this->input->post('link_id');
    $bb_app_slot_link_post['appointment_id'] = is_null($this->input->post('appointment_id')) ? '' : $this->input->post('appointment_id');
    $bb_app_slot_link_post['slot_id'] = is_null($this->input->post('slot_id')) ? '' : $this->input->post('slot_id');
    $bb_app_slot_link_post['datetime'] = is_null($this->input->post('datetime')) ? '' : $this->input->post('datetime');
    $bb_app_slot_link_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $this->session->set_userdata('bb_appointment.appointment_id', $bb_app_slot_link_post['bb_appointment.appointment_id']);
    $this->session->set_userdata('bb_slot.slot_id', $bb_app_slot_link_post['bb_slot.slot_id']);
    $this->session->set_userdata('hospital.hospital_id', $bb_app_slot_link_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_app_slot_link_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('bb_app_slot_link', $bb_app_slot_link_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $bb_app_slot_link_post);
  }
  function bb_app_slot_link_update() {
    $bb_app_slot_link_post['bb_appointment.appointment_id'] = $this->session->bb_appointment_appointment_id;
    $bb_app_slot_link_post['bb_slot.slot_id'] = $this->session->bb_slot_slot_id;
    $bb_app_slot_link_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_app_slot_link_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_app_slot_link_post['bb_app_slot_link.link_id'] = $this->session->bb_app_slot_link_link_id;
    $bb_app_slot_link_post['bb_appointment.appointment_id'] = $bb_appointment_appointment_id;
    $bb_app_slot_link_post['bb_slot.slot_id'] = $bb_slot_slot_id;
    $bb_app_slot_link_post['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_app_slot_link_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_app_slot_link_post['bb_app_slot_link.link_id'] = $bb_app_slot_link_link_id;
    $bb_app_slot_link_post['bb_app_slot_link.appointment_id'] = is_null($this->input->post('bb_app_slot_link_appointment_id')) ? '' : $this->input->post('bb_app_slot_link_appointment_id');
    $bb_app_slot_link_post['bb_app_slot_link.slot_id'] = is_null($this->input->post('bb_app_slot_link_slot_id')) ? '' : $this->input->post('bb_app_slot_link_slot_id');
    $bb_app_slot_link_post['bb_app_slot_link.datetime'] = is_null($this->input->post('bb_app_slot_link_datetime')) ? '' : $this->input->post('bb_app_slot_link_datetime');
    $bb_app_slot_link_post['bb_app_slot_link.hospital_id'] = is_null($this->input->post('bb_app_slot_link_hospital_id')) ? '' : $this->input->post('bb_app_slot_link_hospital_id');
    $this->session->set_userdata('bb_appointment.appointment_id', $bb_app_slot_link_post['bb_appointment.appointment_id']);
    $this->session->set_userdata('bb_slot.slot_id', $bb_app_slot_link_post['bb_slot.slot_id']);
    $this->session->set_userdata('hospital.hospital_id', $bb_app_slot_link_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_app_slot_link_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_app_slot_link.link_id', $bb_app_slot_link_post['bb_app_slot_link.link_id']);
    $this->db->update('bb_app_slot_link', $bb_app_slot_link_post, array('link_id' => $bb_app_slot_link_post['link_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_app_slot_link_post);
  }
  function bb_app_slot_link_delete() {
    $bb_app_slot_link_delete['bb_app_slot_link.link_id'] = is_null($this->input->post('bb_app_slot_link_link_id')) ? '' : $this->input->post('bb_app_slot_link_link_id');
    $bb_app_slot_link_delete['bb_app_slot_link.appointment_id'] = is_null($this->input->post('bb_app_slot_link_appointment_id')) ? '' : $this->input->post('bb_app_slot_link_appointment_id');
    $bb_app_slot_link_delete['bb_app_slot_link.slot_id'] = is_null($this->input->post('bb_app_slot_link_slot_id')) ? '' : $this->input->post('bb_app_slot_link_slot_id');
    $bb_app_slot_link_delete['bb_app_slot_link.datetime'] = is_null($this->input->post('bb_app_slot_link_datetime')) ? '' : $this->input->post('bb_app_slot_link_datetime');
    $bb_app_slot_link_delete['bb_app_slot_link.hospital_id'] = is_null($this->input->post('bb_app_slot_link_hospital_id')) ? '' : $this->input->post('bb_app_slot_link_hospital_id');
    $this->db->delete('bb_app_slot_link', array('link_id' => $bb_app_slot_link_delete['link_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_app_slot_link_delete);
  }
  function bb_app_slot_link_get_records() {
    $bb_app_slot_link_filters['bb_appointment.appointment_id'] = $this->session->bb_appointment_appointment_id;
    $bb_app_slot_link_filters['bb_slot.slot_id'] = $this->session->bb_slot_slot_id;
    $bb_app_slot_link_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_app_slot_link_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_app_slot_link_filters['bb_app_slot_link.link_id'] = $this->session->bb_app_slot_link_link_id;
    $bb_app_slot_link_filters['bb_appointment.appointment_id'] = $bb_appointment_appointment_id;
    $bb_app_slot_link_filters['bb_slot.slot_id'] = $bb_slot_slot_id;
    $bb_app_slot_link_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_app_slot_link_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_app_slot_link_filters['bb_app_slot_link.link_id'] = $bb_app_slot_link_link_id;
    $bb_app_slot_link_filters['bb_app_slot_link.appointment_id'] = is_null($this->input->post('bb_app_slot_link_appointment_id')) ? '' : $this->input->post('bb_app_slot_link_appointment_id');
    $bb_app_slot_link_filters['bb_app_slot_link.slot_id'] = is_null($this->input->post('bb_app_slot_link_slot_id')) ? '' : $this->input->post('bb_app_slot_link_slot_id');
    $bb_app_slot_link_filters['bb_app_slot_link.datetime'] = is_null($this->input->post('bb_app_slot_link_datetime')) ? '' : $this->input->post('bb_app_slot_link_datetime');
    $bb_app_slot_link_filters['bb_app_slot_link.hospital_id'] = is_null($this->input->post('bb_app_slot_link_hospital_id')) ? '' : $this->input->post('bb_app_slot_link_hospital_id');
    $this->session->set_userdata('bb_appointment.appointment_id', $bb_app_slot_link_filters['bb_appointment.appointment_id']);
    $this->session->set_userdata('bb_slot.slot_id', $bb_app_slot_link_filters['bb_slot.slot_id']);
    $this->session->set_userdata('hospital.hospital_id', $bb_app_slot_link_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_app_slot_link_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_app_slot_link.link_id', $bb_app_slot_link_filters['bb_app_slot_link.link_id']);
    $this->db->select('bb_appointment.appointment_id AS bb_app_slot_link_appointment_id, bb_slot.slot_id AS bb_app_slot_link_slot_id,
    hospital.hospital_id AS bb_app_slot_link_hospital_id, staff_previous_hospital.hospital_id AS bb_app_slot_link_hospital_id,
    bb_app_slot_link.link_id AS bb_app_slot_link_link_id, bb_app_slot_link.appointment_id AS bb_app_slot_link_appointment_id,
    bb_app_slot_link.slot_id AS bb_app_slot_link_slot_id, bb_app_slot_link.datetime AS bb_app_slot_link_datetime,
    bb_app_slot_link.hospital_id AS bb_app_slot_link_hospital_id')->from('bb_app_slot_link');
    $this->db->join('bb_appointment', 'bb_app_slot_link.appointment_id = bb_appointment.appointment_id', 'left');
    $this->db->join('bb_slot', 'bb_app_slot_link.slot_id = bb_slot.slot_id', 'left');
    $this->db->join('hospital', 'bb_app_slot_link.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'bb_app_slot_link.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($bb_app_slot_link_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $bb_app_slot_link_filters);
  }
}