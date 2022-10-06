<?php class Blood_grouping_model extends CI_Model {
  function blood_grouping_create($bb_donation_donation_id,$hospital_hospital_id,$staff_previous_hospital_hospital_id) {
    $blood_grouping_post = [];
    $blood_grouping_post['bb_donation.donation_id'] = $this->session->bb_donation_donation_id;
    $blood_grouping_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_grouping_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_grouping_post['bb_donation.donation_id'] = $bb_donation_donation_id;
    $blood_grouping_post['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_grouping_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_grouping_post['a_cells'] = is_null($this->input->post('a_cells')) ? '' : $this->input->post('a_cells');
    $blood_grouping_post['anti_a'] = is_null($this->input->post('anti_a')) ? '' : $this->input->post('anti_a');
    $blood_grouping_post['anti_ab'] = is_null($this->input->post('anti_ab')) ? '' : $this->input->post('anti_ab');
    $blood_grouping_post['anti_b'] = is_null($this->input->post('anti_b')) ? '' : $this->input->post('anti_b');
    $blood_grouping_post['anti_d'] = is_null($this->input->post('anti_d')) ? '' : $this->input->post('anti_d');
    $blood_grouping_post['b_cells'] = is_null($this->input->post('b_cells')) ? '' : $this->input->post('b_cells');
    $blood_grouping_post['blood_group'] = is_null($this->input->post('blood_group')) ? '' : $this->input->post('blood_group');
    $blood_grouping_post['donation_id'] = is_null($this->input->post('donation_id')) ? '' : $this->input->post('donation_id');
    $blood_grouping_post['du'] = is_null($this->input->post('du')) ? '' : $this->input->post('du');
    $blood_grouping_post['forward_done_by'] = is_null($this->input->post('forward_done_by')) ? '' : $this->input->post('forward_done_by');
    $blood_grouping_post['grouping_date'] = is_null($this->input->post('grouping_date')) ? '' : $this->input->post('grouping_date');
    $blood_grouping_post['grouping_id'] = is_null($this->input->post('grouping_id')) ? '' : $this->input->post('grouping_id');
    $blood_grouping_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $blood_grouping_post['o_cells'] = is_null($this->input->post('o_cells')) ? '' : $this->input->post('o_cells');
    $blood_grouping_post['reverse_done_by'] = is_null($this->input->post('reverse_done_by')) ? '' : $this->input->post('reverse_done_by');
    $blood_grouping_post['sub_group'] = is_null($this->input->post('sub_group')) ? '' : $this->input->post('sub_group');
    $this->session->set_userdata('bb_donation.donation_id', $blood_grouping_post['bb_donation.donation_id']);
    $this->session->set_userdata('hospital.hospital_id', $blood_grouping_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_grouping_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('blood_grouping', $blood_grouping_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $blood_grouping_post);
  }
  function blood_grouping_update($donation_id,$hospital_id,$hospital_id,$grouping_id) {
    $blood_grouping_post['bb_donation.donation_id'] = $this->session->bb_donation_donation_id;
    $blood_grouping_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_grouping_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_grouping_post['blood_grouping.grouping_id'] = $this->session->blood_grouping_grouping_id;
    $blood_grouping_post['bb_donation.donation_id'] = $bb_donation_donation_id;
    $blood_grouping_post['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_grouping_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_grouping_post['blood_grouping.grouping_id'] = $blood_grouping_grouping_id;
    $blood_grouping_post['blood_grouping.a_cells'] = is_null($this->input->post('blood_grouping_a_cells')) ? '' : $this->input->post('blood_grouping_a_cells');
    $blood_grouping_post['blood_grouping.anti_a'] = is_null($this->input->post('blood_grouping_anti_a')) ? '' : $this->input->post('blood_grouping_anti_a');
    $blood_grouping_post['blood_grouping.anti_ab'] = is_null($this->input->post('blood_grouping_anti_ab')) ? '' : $this->input->post('blood_grouping_anti_ab');
    $blood_grouping_post['blood_grouping.anti_b'] = is_null($this->input->post('blood_grouping_anti_b')) ? '' : $this->input->post('blood_grouping_anti_b');
    $blood_grouping_post['blood_grouping.anti_d'] = is_null($this->input->post('blood_grouping_anti_d')) ? '' : $this->input->post('blood_grouping_anti_d');
    $blood_grouping_post['blood_grouping.b_cells'] = is_null($this->input->post('blood_grouping_b_cells')) ? '' : $this->input->post('blood_grouping_b_cells');
    $blood_grouping_post['blood_grouping.blood_group'] = is_null($this->input->post('blood_grouping_blood_group')) ? '' : $this->input->post('blood_grouping_blood_group');
    $blood_grouping_post['blood_grouping.donation_id'] = is_null($this->input->post('blood_grouping_donation_id')) ? '' : $this->input->post('blood_grouping_donation_id');
    $blood_grouping_post['blood_grouping.du'] = is_null($this->input->post('blood_grouping_du')) ? '' : $this->input->post('blood_grouping_du');
    $blood_grouping_post['blood_grouping.forward_done_by'] = is_null($this->input->post('blood_grouping_forward_done_by')) ? '' : $this->input->post('blood_grouping_forward_done_by');
    $blood_grouping_post['blood_grouping.grouping_date'] = is_null($this->input->post('blood_grouping_grouping_date')) ? '' : $this->input->post('blood_grouping_grouping_date');
    $blood_grouping_post['blood_grouping.hospital_id'] = is_null($this->input->post('blood_grouping_hospital_id')) ? '' : $this->input->post('blood_grouping_hospital_id');
    $blood_grouping_post['blood_grouping.o_cells'] = is_null($this->input->post('blood_grouping_o_cells')) ? '' : $this->input->post('blood_grouping_o_cells');
    $blood_grouping_post['blood_grouping.reverse_done_by'] = is_null($this->input->post('blood_grouping_reverse_done_by')) ? '' : $this->input->post('blood_grouping_reverse_done_by');
    $blood_grouping_post['blood_grouping.sub_group'] = is_null($this->input->post('blood_grouping_sub_group')) ? '' : $this->input->post('blood_grouping_sub_group');
    $this->session->set_userdata('bb_donation.donation_id', $blood_grouping_post['bb_donation.donation_id']);
    $this->session->set_userdata('hospital.hospital_id', $blood_grouping_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_grouping_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('blood_grouping.grouping_id', $blood_grouping_post['blood_grouping.grouping_id']);
    $this->db->update('blood_grouping', $blood_grouping_post, array('grouping_id' => $blood_grouping_post['grouping_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_grouping_post);
  }
  function blood_grouping_delete() {
    $blood_grouping_delete['blood_grouping.a_cells'] = is_null($this->input->post('blood_grouping_a_cells')) ? '' : $this->input->post('blood_grouping_a_cells');
    $blood_grouping_delete['blood_grouping.anti_a'] = is_null($this->input->post('blood_grouping_anti_a')) ? '' : $this->input->post('blood_grouping_anti_a');
    $blood_grouping_delete['blood_grouping.anti_ab'] = is_null($this->input->post('blood_grouping_anti_ab')) ? '' : $this->input->post('blood_grouping_anti_ab');
    $blood_grouping_delete['blood_grouping.anti_b'] = is_null($this->input->post('blood_grouping_anti_b')) ? '' : $this->input->post('blood_grouping_anti_b');
    $blood_grouping_delete['blood_grouping.anti_d'] = is_null($this->input->post('blood_grouping_anti_d')) ? '' : $this->input->post('blood_grouping_anti_d');
    $blood_grouping_delete['blood_grouping.b_cells'] = is_null($this->input->post('blood_grouping_b_cells')) ? '' : $this->input->post('blood_grouping_b_cells');
    $blood_grouping_delete['blood_grouping.blood_group'] = is_null($this->input->post('blood_grouping_blood_group')) ? '' : $this->input->post('blood_grouping_blood_group');
    $blood_grouping_delete['blood_grouping.donation_id'] = is_null($this->input->post('blood_grouping_donation_id')) ? '' : $this->input->post('blood_grouping_donation_id');
    $blood_grouping_delete['blood_grouping.du'] = is_null($this->input->post('blood_grouping_du')) ? '' : $this->input->post('blood_grouping_du');
    $blood_grouping_delete['blood_grouping.forward_done_by'] = is_null($this->input->post('blood_grouping_forward_done_by')) ? '' : $this->input->post('blood_grouping_forward_done_by');
    $blood_grouping_delete['blood_grouping.grouping_date'] = is_null($this->input->post('blood_grouping_grouping_date')) ? '' : $this->input->post('blood_grouping_grouping_date');
    $blood_grouping_delete['blood_grouping.grouping_id'] = is_null($this->input->post('blood_grouping_grouping_id')) ? '' : $this->input->post('blood_grouping_grouping_id');
    $blood_grouping_delete['blood_grouping.hospital_id'] = is_null($this->input->post('blood_grouping_hospital_id')) ? '' : $this->input->post('blood_grouping_hospital_id');
    $blood_grouping_delete['blood_grouping.o_cells'] = is_null($this->input->post('blood_grouping_o_cells')) ? '' : $this->input->post('blood_grouping_o_cells');
    $blood_grouping_delete['blood_grouping.reverse_done_by'] = is_null($this->input->post('blood_grouping_reverse_done_by')) ? '' : $this->input->post('blood_grouping_reverse_done_by');
    $blood_grouping_delete['blood_grouping.sub_group'] = is_null($this->input->post('blood_grouping_sub_group')) ? '' : $this->input->post('blood_grouping_sub_group');
    $this->db->delete('blood_grouping', array('grouping_id' => $blood_grouping_delete['grouping_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_grouping_delete);
  }
  function blood_grouping_get_records($donation_id,$hospital_id,$hospital_id,$grouping_id) {
    $blood_grouping_filters['bb_donation.donation_id'] = $this->session->bb_donation_donation_id;
    $blood_grouping_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_grouping_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_grouping_filters['blood_grouping.grouping_id'] = $this->session->blood_grouping_grouping_id;
    $blood_grouping_filters['bb_donation.donation_id'] = $bb_donation_donation_id;
    $blood_grouping_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_grouping_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_grouping_filters['blood_grouping.grouping_id'] = $blood_grouping_grouping_id;
    $blood_grouping_filters['blood_grouping.a_cells'] = is_null($this->input->post('blood_grouping_a_cells')) ? '' : $this->input->post('blood_grouping_a_cells');
    $blood_grouping_filters['blood_grouping.anti_a'] = is_null($this->input->post('blood_grouping_anti_a')) ? '' : $this->input->post('blood_grouping_anti_a');
    $blood_grouping_filters['blood_grouping.anti_ab'] = is_null($this->input->post('blood_grouping_anti_ab')) ? '' : $this->input->post('blood_grouping_anti_ab');
    $blood_grouping_filters['blood_grouping.anti_b'] = is_null($this->input->post('blood_grouping_anti_b')) ? '' : $this->input->post('blood_grouping_anti_b');
    $blood_grouping_filters['blood_grouping.anti_d'] = is_null($this->input->post('blood_grouping_anti_d')) ? '' : $this->input->post('blood_grouping_anti_d');
    $blood_grouping_filters['blood_grouping.b_cells'] = is_null($this->input->post('blood_grouping_b_cells')) ? '' : $this->input->post('blood_grouping_b_cells');
    $blood_grouping_filters['blood_grouping.blood_group'] = is_null($this->input->post('blood_grouping_blood_group')) ? '' : $this->input->post('blood_grouping_blood_group');
    $blood_grouping_filters['blood_grouping.donation_id'] = is_null($this->input->post('blood_grouping_donation_id')) ? '' : $this->input->post('blood_grouping_donation_id');
    $blood_grouping_filters['blood_grouping.du'] = is_null($this->input->post('blood_grouping_du')) ? '' : $this->input->post('blood_grouping_du');
    $blood_grouping_filters['blood_grouping.forward_done_by'] = is_null($this->input->post('blood_grouping_forward_done_by')) ? '' : $this->input->post('blood_grouping_forward_done_by');
    $blood_grouping_filters['blood_grouping.grouping_date'] = is_null($this->input->post('blood_grouping_grouping_date')) ? '' : $this->input->post('blood_grouping_grouping_date');
    $blood_grouping_filters['blood_grouping.hospital_id'] = is_null($this->input->post('blood_grouping_hospital_id')) ? '' : $this->input->post('blood_grouping_hospital_id');
    $blood_grouping_filters['blood_grouping.o_cells'] = is_null($this->input->post('blood_grouping_o_cells')) ? '' : $this->input->post('blood_grouping_o_cells');
    $blood_grouping_filters['blood_grouping.reverse_done_by'] = is_null($this->input->post('blood_grouping_reverse_done_by')) ? '' : $this->input->post('blood_grouping_reverse_done_by');
    $blood_grouping_filters['blood_grouping.sub_group'] = is_null($this->input->post('blood_grouping_sub_group')) ? '' : $this->input->post('blood_grouping_sub_group');
    $this->session->set_userdata('bb_donation.donation_id', $blood_grouping_filters['bb_donation.donation_id']);
    $this->session->set_userdata('hospital.hospital_id', $blood_grouping_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_grouping_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('blood_grouping.grouping_id', $blood_grouping_filters['blood_grouping.grouping_id']);
    $this->db->select('bb_donation.donation_id AS blood_grouping_donation_id, hospital.hospital_id AS blood_grouping_hospital_id,
    staff_previous_hospital.hospital_id AS blood_grouping_hospital_id, blood_grouping.a_cells AS blood_grouping_a_cells,
    blood_grouping.anti_a AS blood_grouping_anti_a, blood_grouping.anti_ab AS blood_grouping_anti_ab,
    blood_grouping.anti_b AS blood_grouping_anti_b, blood_grouping.anti_d AS blood_grouping_anti_d,
    blood_grouping.b_cells AS blood_grouping_b_cells, blood_grouping.blood_group AS blood_grouping_blood_group,
    blood_grouping.donation_id AS blood_grouping_donation_id, blood_grouping.du AS blood_grouping_du,
    blood_grouping.forward_done_by AS blood_grouping_forward_done_by, blood_grouping.grouping_date AS blood_grouping_grouping_date,
    blood_grouping.grouping_id AS blood_grouping_grouping_id, blood_grouping.hospital_id AS blood_grouping_hospital_id,
    blood_grouping.o_cells AS blood_grouping_o_cells, blood_grouping.reverse_done_by AS blood_grouping_reverse_done_by,
    blood_grouping.sub_group AS blood_grouping_sub_group')->from('blood_grouping');
    $this->db->join('bb_donation', 'blood_grouping.donation_id = bb_donation.donation_id', 'left');
    $this->db->join('hospital', 'blood_grouping.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'blood_grouping.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($blood_grouping_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $blood_grouping_filters);
  }
}