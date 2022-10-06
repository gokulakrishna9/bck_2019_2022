<?php class Bloodbank_edit_log_model extends CI_Model {
  function bloodbank_edit_log_create($staff_staff_id) {
    $bloodbank_edit_log_post = [];
    $bloodbank_edit_log_post['staff.staff_id'] = $this->session->staff_staff_id;
    $bloodbank_edit_log_post['staff.staff_id'] = $staff_staff_id;
    $bloodbank_edit_log_post['bb_log_id'] = is_null($this->input->post('bb_log_id')) ? '' : $this->input->post('bb_log_id');
    $bloodbank_edit_log_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $bloodbank_edit_log_post['trail'] = is_null($this->input->post('trail')) ? '' : $this->input->post('trail');
    $this->session->set_userdata('staff.staff_id', $bloodbank_edit_log_post['staff.staff_id']);
    $this->db->insert('bloodbank_edit_log', $bloodbank_edit_log_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $bloodbank_edit_log_post);
  }
  function bloodbank_edit_log_update($staff_id,$bb_log_id) {
    $bloodbank_edit_log_post['staff.staff_id'] = $this->session->staff_staff_id;
    $bloodbank_edit_log_post['bloodbank_edit_log.bb_log_id'] = $this->session->bloodbank_edit_log_bb_log_id;
    $bloodbank_edit_log_post['staff.staff_id'] = $staff_staff_id;
    $bloodbank_edit_log_post['bloodbank_edit_log.bb_log_id'] = $bloodbank_edit_log_bb_log_id;
    $bloodbank_edit_log_post['bloodbank_edit_log.staff_id'] = is_null($this->input->post('bloodbank_edit_log_staff_id')) ? '' : $this->input->post('bloodbank_edit_log_staff_id');
    $bloodbank_edit_log_post['bloodbank_edit_log.trail'] = is_null($this->input->post('bloodbank_edit_log_trail')) ? '' : $this->input->post('bloodbank_edit_log_trail');
    $this->session->set_userdata('staff.staff_id', $bloodbank_edit_log_post['staff.staff_id']);
    $this->session->set_userdata('bloodbank_edit_log.bb_log_id', $bloodbank_edit_log_post['bloodbank_edit_log.bb_log_id']);
    $this->db->update('bloodbank_edit_log', $bloodbank_edit_log_post, array('bb_log_id' => $bloodbank_edit_log_post['bb_log_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bloodbank_edit_log_post);
  }
  function bloodbank_edit_log_delete() {
    $bloodbank_edit_log_delete['bloodbank_edit_log.bb_log_id'] = is_null($this->input->post('bloodbank_edit_log_bb_log_id')) ? '' : $this->input->post('bloodbank_edit_log_bb_log_id');
    $bloodbank_edit_log_delete['bloodbank_edit_log.staff_id'] = is_null($this->input->post('bloodbank_edit_log_staff_id')) ? '' : $this->input->post('bloodbank_edit_log_staff_id');
    $bloodbank_edit_log_delete['bloodbank_edit_log.trail'] = is_null($this->input->post('bloodbank_edit_log_trail')) ? '' : $this->input->post('bloodbank_edit_log_trail');
    $this->db->delete('bloodbank_edit_log', array('bb_log_id' => $bloodbank_edit_log_delete['bb_log_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bloodbank_edit_log_delete);
  }
  function bloodbank_edit_log_get_records($staff_id,$bb_log_id) {
    $bloodbank_edit_log_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $bloodbank_edit_log_filters['bloodbank_edit_log.bb_log_id'] = $this->session->bloodbank_edit_log_bb_log_id;
    $bloodbank_edit_log_filters['staff.staff_id'] = $staff_staff_id;
    $bloodbank_edit_log_filters['bloodbank_edit_log.bb_log_id'] = $bloodbank_edit_log_bb_log_id;
    $bloodbank_edit_log_filters['bloodbank_edit_log.staff_id'] = is_null($this->input->post('bloodbank_edit_log_staff_id')) ? '' : $this->input->post('bloodbank_edit_log_staff_id');
    $bloodbank_edit_log_filters['bloodbank_edit_log.trail'] = is_null($this->input->post('bloodbank_edit_log_trail')) ? '' : $this->input->post('bloodbank_edit_log_trail');
    $this->session->set_userdata('staff.staff_id', $bloodbank_edit_log_filters['staff.staff_id']);
    $this->session->set_userdata('bloodbank_edit_log.bb_log_id', $bloodbank_edit_log_filters['bloodbank_edit_log.bb_log_id']);
    $this->db->select('staff.staff_id AS bloodbank_edit_log_staff_id, bloodbank_edit_log.bb_log_id AS bloodbank_edit_log_bb_log_id,
    bloodbank_edit_log.staff_id AS bloodbank_edit_log_staff_id, bloodbank_edit_log.trail AS bloodbank_edit_log_trail')->from('bloodbank_edit_log');
    $this->db->join('staff', 'bloodbank_edit_log.staff_id = staff.staff_id', 'left');
    $this->db->where($bloodbank_edit_log_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $bloodbank_edit_log_filters);
  }
}