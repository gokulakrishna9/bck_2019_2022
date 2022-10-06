<?php class Shift_model extends CI_Model {
  function shift_create() {
    $shift_post = [];
    $shift_post['description'] = is_null($this->input->post('description')) ? '' : $this->input->post('description');
    $shift_post['shift'] = is_null($this->input->post('shift')) ? '' : $this->input->post('shift');
    $shift_post['shift_id'] = is_null($this->input->post('shift_id')) ? '' : $this->input->post('shift_id');
    $shift_post['time_in'] = is_null($this->input->post('time_in')) ? '' : $this->input->post('time_in');
    $shift_post['time_out'] = is_null($this->input->post('time_out')) ? '' : $this->input->post('time_out');
    $this->db->insert('shift', $shift_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $shift_post);
  }
  function shift_update($shift_id) {
    $shift_post['shift.shift_id'] = $this->session->shift_shift_id;
    $shift_post['shift.shift_id'] = $shift_shift_id;
    $shift_post['shift.description'] = is_null($this->input->post('shift_description')) ? '' : $this->input->post('shift_description');
    $shift_post['shift.shift'] = is_null($this->input->post('shift_shift')) ? '' : $this->input->post('shift_shift');
    $shift_post['shift.time_in'] = is_null($this->input->post('shift_time_in')) ? '' : $this->input->post('shift_time_in');
    $shift_post['shift.time_out'] = is_null($this->input->post('shift_time_out')) ? '' : $this->input->post('shift_time_out');
    $this->session->set_userdata('shift.shift_id', $shift_post['shift.shift_id']);
    $this->db->update('shift', $shift_post, array('shift_id' => $shift_post['shift_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $shift_post);
  }
  function shift_delete() {
    $shift_delete['shift.description'] = is_null($this->input->post('shift_description')) ? '' : $this->input->post('shift_description');
    $shift_delete['shift.shift'] = is_null($this->input->post('shift_shift')) ? '' : $this->input->post('shift_shift');
    $shift_delete['shift.shift_id'] = is_null($this->input->post('shift_shift_id')) ? '' : $this->input->post('shift_shift_id');
    $shift_delete['shift.time_in'] = is_null($this->input->post('shift_time_in')) ? '' : $this->input->post('shift_time_in');
    $shift_delete['shift.time_out'] = is_null($this->input->post('shift_time_out')) ? '' : $this->input->post('shift_time_out');
    $this->db->delete('shift', array('shift_id' => $shift_delete['shift_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $shift_delete);
  }
  function shift_get_records($shift_id) {
    $shift_filters['shift.shift_id'] = $this->session->shift_shift_id;
    $shift_filters['shift.shift_id'] = $shift_shift_id;
    $shift_filters['shift.description'] = is_null($this->input->post('shift_description')) ? '' : $this->input->post('shift_description');
    $shift_filters['shift.shift'] = is_null($this->input->post('shift_shift')) ? '' : $this->input->post('shift_shift');
    $shift_filters['shift.time_in'] = is_null($this->input->post('shift_time_in')) ? '' : $this->input->post('shift_time_in');
    $shift_filters['shift.time_out'] = is_null($this->input->post('shift_time_out')) ? '' : $this->input->post('shift_time_out');
    $this->session->set_userdata('shift.shift_id', $shift_filters['shift.shift_id']);
    $this->db->select('shift.description AS shift_description, shift.shift AS shift_shift,
    shift.shift_id AS shift_shift_id, shift.time_in AS shift_time_in,
    shift.time_out AS shift_time_out')->from('shift');
    $this->db->where($shift_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $shift_filters);
  }
}