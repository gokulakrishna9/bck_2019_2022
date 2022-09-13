<?php class Attendance_model extends CI_Model {
  function attendance_create() {
    $attendance_post = [];
    $attendance_post['roaster.roaster_id'] = $this->session->roaster_roaster_id;
    $attendance_post['roaster.roaster_id'] = $roaster_roaster_id;
    $attendance_post['attendance_id'] = is_null($this->input->post('attendance_id')) ? '' : $this->input->post('attendance_id');
    $attendance_post['roaster_id'] = is_null($this->input->post('roaster_id')) ? '' : $this->input->post('roaster_id');
    $attendance_post['time_in'] = is_null($this->input->post('time_in')) ? '' : $this->input->post('time_in');
    $attendance_post['time_out'] = is_null($this->input->post('time_out')) ? '' : $this->input->post('time_out');
    $this->session->set_userdata('roaster.roaster_id', $attendance_post['roaster.roaster_id']);
    $this->db->insert('attendance', $attendance_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $attendance_post);
  }
  function attendance_update() {
    $attendance_post['roaster.roaster_id'] = $this->session->roaster_roaster_id;
    $attendance_post['attendance.attendance_id'] = $this->session->attendance_attendance_id;
    $attendance_post['roaster.roaster_id'] = $roaster_roaster_id;
    $attendance_post['attendance.attendance_id'] = $attendance_attendance_id;
    $attendance_post['attendance.roaster_id'] = is_null($this->input->post('attendance_roaster_id')) ? '' : $this->input->post('attendance_roaster_id');
    $attendance_post['attendance.time_in'] = is_null($this->input->post('attendance_time_in')) ? '' : $this->input->post('attendance_time_in');
    $attendance_post['attendance.time_out'] = is_null($this->input->post('attendance_time_out')) ? '' : $this->input->post('attendance_time_out');
    $this->session->set_userdata('roaster.roaster_id', $attendance_post['roaster.roaster_id']);
    $this->session->set_userdata('attendance.attendance_id', $attendance_post['attendance.attendance_id']);
    $this->db->update('attendance', $attendance_post, array('attendance_id' => $attendance_post['attendance_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $attendance_post);
  }
  function attendance_delete() {
    $attendance_delete['attendance.attendance_id'] = is_null($this->input->post('attendance_attendance_id')) ? '' : $this->input->post('attendance_attendance_id');
    $attendance_delete['attendance.roaster_id'] = is_null($this->input->post('attendance_roaster_id')) ? '' : $this->input->post('attendance_roaster_id');
    $attendance_delete['attendance.time_in'] = is_null($this->input->post('attendance_time_in')) ? '' : $this->input->post('attendance_time_in');
    $attendance_delete['attendance.time_out'] = is_null($this->input->post('attendance_time_out')) ? '' : $this->input->post('attendance_time_out');
    $this->db->delete('attendance', array('attendance_id' => $attendance_delete['attendance_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $attendance_delete);
  }
  function attendance_get_records() {
    $attendance_filters['roaster.roaster_id'] = $this->session->roaster_roaster_id;
    $attendance_filters['attendance.attendance_id'] = $this->session->attendance_attendance_id;
    $attendance_filters['roaster.roaster_id'] = $roaster_roaster_id;
    $attendance_filters['attendance.attendance_id'] = $attendance_attendance_id;
    $attendance_filters['attendance.roaster_id'] = is_null($this->input->post('attendance_roaster_id')) ? '' : $this->input->post('attendance_roaster_id');
    $attendance_filters['attendance.time_in'] = is_null($this->input->post('attendance_time_in')) ? '' : $this->input->post('attendance_time_in');
    $attendance_filters['attendance.time_out'] = is_null($this->input->post('attendance_time_out')) ? '' : $this->input->post('attendance_time_out');
    $this->session->set_userdata('roaster.roaster_id', $attendance_filters['roaster.roaster_id']);
    $this->session->set_userdata('attendance.attendance_id', $attendance_filters['attendance.attendance_id']);
    $this->db->select('roaster.roaster_id AS attendance_roaster_id, attendance.attendance_id AS attendance_attendance_id,
    attendance.roaster_id AS attendance_roaster_id, attendance.time_in AS attendance_time_in,
    attendance.time_out AS attendance_time_out')->from('attendance');
    $this->db->join('roaster', 'attendance.roaster_id = roaster.roaster_id', 'left');
    $this->db->where($attendance_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $attendance_filters);
  }
}