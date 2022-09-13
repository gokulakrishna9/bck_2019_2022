<?php class Bb_slot_model extends CI_Model {
  function bb_slot_create() {
    $bb_slot_post = [];
    $bb_slot_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_slot_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_slot_post['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_slot_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_slot_post['slot_id'] = is_null($this->input->post('slot_id')) ? '' : $this->input->post('slot_id');
    $bb_slot_post['date'] = is_null($this->input->post('date')) ? '' : $this->input->post('date');
    $bb_slot_post['from_time'] = is_null($this->input->post('from_time')) ? '' : $this->input->post('from_time');
    $bb_slot_post['to_time'] = is_null($this->input->post('to_time')) ? '' : $this->input->post('to_time');
    $bb_slot_post['no_appointments'] = is_null($this->input->post('no_appointments')) ? '' : $this->input->post('no_appointments');
    $bb_slot_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $this->session->set_userdata('hospital.hospital_id', $bb_slot_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_slot_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('bb_slot', $bb_slot_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $bb_slot_post);
  }
  function bb_slot_update() {
    $bb_slot_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_slot_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_slot_post['bb_slot.slot_id'] = $this->session->bb_slot_slot_id;
    $bb_slot_post['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_slot_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_slot_post['bb_slot.slot_id'] = $bb_slot_slot_id;
    $bb_slot_post['bb_slot.date'] = is_null($this->input->post('bb_slot_date')) ? '' : $this->input->post('bb_slot_date');
    $bb_slot_post['bb_slot.from_time'] = is_null($this->input->post('bb_slot_from_time')) ? '' : $this->input->post('bb_slot_from_time');
    $bb_slot_post['bb_slot.to_time'] = is_null($this->input->post('bb_slot_to_time')) ? '' : $this->input->post('bb_slot_to_time');
    $bb_slot_post['bb_slot.no_appointments'] = is_null($this->input->post('bb_slot_no_appointments')) ? '' : $this->input->post('bb_slot_no_appointments');
    $bb_slot_post['bb_slot.hospital_id'] = is_null($this->input->post('bb_slot_hospital_id')) ? '' : $this->input->post('bb_slot_hospital_id');
    $this->session->set_userdata('hospital.hospital_id', $bb_slot_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_slot_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_slot.slot_id', $bb_slot_post['bb_slot.slot_id']);
    $this->db->update('bb_slot', $bb_slot_post, array('slot_id' => $bb_slot_post['slot_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_slot_post);
  }
  function bb_slot_delete() {
    $bb_slot_delete['bb_slot.slot_id'] = is_null($this->input->post('bb_slot_slot_id')) ? '' : $this->input->post('bb_slot_slot_id');
    $bb_slot_delete['bb_slot.date'] = is_null($this->input->post('bb_slot_date')) ? '' : $this->input->post('bb_slot_date');
    $bb_slot_delete['bb_slot.from_time'] = is_null($this->input->post('bb_slot_from_time')) ? '' : $this->input->post('bb_slot_from_time');
    $bb_slot_delete['bb_slot.to_time'] = is_null($this->input->post('bb_slot_to_time')) ? '' : $this->input->post('bb_slot_to_time');
    $bb_slot_delete['bb_slot.no_appointments'] = is_null($this->input->post('bb_slot_no_appointments')) ? '' : $this->input->post('bb_slot_no_appointments');
    $bb_slot_delete['bb_slot.hospital_id'] = is_null($this->input->post('bb_slot_hospital_id')) ? '' : $this->input->post('bb_slot_hospital_id');
    $this->db->delete('bb_slot', array('slot_id' => $bb_slot_delete['slot_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_slot_delete);
  }
  function bb_slot_get_records() {
    $bb_slot_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_slot_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_slot_filters['bb_slot.slot_id'] = $this->session->bb_slot_slot_id;
    $bb_slot_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_slot_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_slot_filters['bb_slot.slot_id'] = $bb_slot_slot_id;
    $bb_slot_filters['bb_slot.date'] = is_null($this->input->post('bb_slot_date')) ? '' : $this->input->post('bb_slot_date');
    $bb_slot_filters['bb_slot.from_time'] = is_null($this->input->post('bb_slot_from_time')) ? '' : $this->input->post('bb_slot_from_time');
    $bb_slot_filters['bb_slot.to_time'] = is_null($this->input->post('bb_slot_to_time')) ? '' : $this->input->post('bb_slot_to_time');
    $bb_slot_filters['bb_slot.no_appointments'] = is_null($this->input->post('bb_slot_no_appointments')) ? '' : $this->input->post('bb_slot_no_appointments');
    $bb_slot_filters['bb_slot.hospital_id'] = is_null($this->input->post('bb_slot_hospital_id')) ? '' : $this->input->post('bb_slot_hospital_id');
    $this->session->set_userdata('hospital.hospital_id', $bb_slot_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_slot_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_slot.slot_id', $bb_slot_filters['bb_slot.slot_id']);
    $this->db->select('hospital.hospital_id AS bb_slot_hospital_id, staff_previous_hospital.hospital_id AS bb_slot_hospital_id,
    bb_slot.slot_id AS bb_slot_slot_id, bb_slot.date AS bb_slot_date,
    bb_slot.from_time AS bb_slot_from_time, bb_slot.to_time AS bb_slot_to_time,
    bb_slot.no_appointments AS bb_slot_no_appointments, bb_slot.hospital_id AS bb_slot_hospital_id')->from('bb_slot');
    $this->db->join('hospital', 'bb_slot.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'bb_slot.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($bb_slot_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $bb_slot_filters);
  }
}