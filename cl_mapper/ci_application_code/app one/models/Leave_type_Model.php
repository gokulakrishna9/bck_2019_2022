<?php class Leave_type_model extends CI_Model {
  function leave_type_create() {
    $leave_type_post = [];
    $leave_type_post['leave_type'] = is_null($this->input->post('leave_type')) ? '' : $this->input->post('leave_type');
    $leave_type_post['leave_type_id'] = is_null($this->input->post('leave_type_id')) ? '' : $this->input->post('leave_type_id');
    $leave_type_post['note'] = is_null($this->input->post('note')) ? '' : $this->input->post('note');
    $this->db->insert('leave_type', $leave_type_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $leave_type_post);
  }
  function leave_type_update($leave_type_id) {
    $leave_type_post['leave_type.leave_type_id'] = $this->session->leave_type_leave_type_id;
    $leave_type_post['leave_type.leave_type_id'] = $leave_type_leave_type_id;
    $leave_type_post['leave_type.leave_type'] = is_null($this->input->post('leave_type_leave_type')) ? '' : $this->input->post('leave_type_leave_type');
    $leave_type_post['leave_type.note'] = is_null($this->input->post('leave_type_note')) ? '' : $this->input->post('leave_type_note');
    $this->session->set_userdata('leave_type.leave_type_id', $leave_type_post['leave_type.leave_type_id']);
    $this->db->update('leave_type', $leave_type_post, array('leave_type_id' => $leave_type_post['leave_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $leave_type_post);
  }
  function leave_type_delete() {
    $leave_type_delete['leave_type.leave_type'] = is_null($this->input->post('leave_type_leave_type')) ? '' : $this->input->post('leave_type_leave_type');
    $leave_type_delete['leave_type.leave_type_id'] = is_null($this->input->post('leave_type_leave_type_id')) ? '' : $this->input->post('leave_type_leave_type_id');
    $leave_type_delete['leave_type.note'] = is_null($this->input->post('leave_type_note')) ? '' : $this->input->post('leave_type_note');
    $this->db->delete('leave_type', array('leave_type_id' => $leave_type_delete['leave_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $leave_type_delete);
  }
  function leave_type_get_records($leave_type_id) {
    $leave_type_filters['leave_type.leave_type_id'] = $this->session->leave_type_leave_type_id;
    $leave_type_filters['leave_type.leave_type_id'] = $leave_type_leave_type_id;
    $leave_type_filters['leave_type.leave_type'] = is_null($this->input->post('leave_type_leave_type')) ? '' : $this->input->post('leave_type_leave_type');
    $leave_type_filters['leave_type.note'] = is_null($this->input->post('leave_type_note')) ? '' : $this->input->post('leave_type_note');
    $this->session->set_userdata('leave_type.leave_type_id', $leave_type_filters['leave_type.leave_type_id']);
    $this->db->select('leave_type.leave_type AS leave_type_leave_type, leave_type.leave_type_id AS leave_type_leave_type_id,
    leave_type.note AS leave_type_note')->from('leave_type');
    $this->db->where($leave_type_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $leave_type_filters);
  }
}