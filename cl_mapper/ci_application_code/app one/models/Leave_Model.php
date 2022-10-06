<?php class Leave_model extends CI_Model {
  function leave_create($leave_type_leave_type_id,$staff_staff_id) {
    $leave_post = [];
    $leave_post['leave_type.leave_type_id'] = $this->session->leave_type_leave_type_id;
    $leave_post['staff.staff_id'] = $this->session->staff_staff_id;
    $leave_post['leave_type.leave_type_id'] = $leave_type_leave_type_id;
    $leave_post['staff.staff_id'] = $staff_staff_id;
    $leave_post['comment'] = is_null($this->input->post('comment')) ? '' : $this->input->post('comment');
    $leave_post['leave_date'] = is_null($this->input->post('leave_date')) ? '' : $this->input->post('leave_date');
    $leave_post['leave_id'] = is_null($this->input->post('leave_id')) ? '' : $this->input->post('leave_id');
    $leave_post['leave_status'] = is_null($this->input->post('leave_status')) ? '' : $this->input->post('leave_status');
    $leave_post['leave_submission_date'] = is_null($this->input->post('leave_submission_date')) ? '' : $this->input->post('leave_submission_date');
    $leave_post['leave_type_id'] = is_null($this->input->post('leave_type_id')) ? '' : $this->input->post('leave_type_id');
    $leave_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $this->session->set_userdata('leave_type.leave_type_id', $leave_post['leave_type.leave_type_id']);
    $this->session->set_userdata('staff.staff_id', $leave_post['staff.staff_id']);
    $this->db->insert('leave', $leave_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $leave_post);
  }
  function leave_update($leave_type_id,$staff_id,$leave_id) {
    $leave_post['leave_type.leave_type_id'] = $this->session->leave_type_leave_type_id;
    $leave_post['staff.staff_id'] = $this->session->staff_staff_id;
    $leave_post['leave.leave_id'] = $this->session->leave_leave_id;
    $leave_post['leave_type.leave_type_id'] = $leave_type_leave_type_id;
    $leave_post['staff.staff_id'] = $staff_staff_id;
    $leave_post['leave.leave_id'] = $leave_leave_id;
    $leave_post['leave.comment'] = is_null($this->input->post('leave_comment')) ? '' : $this->input->post('leave_comment');
    $leave_post['leave.leave_date'] = is_null($this->input->post('leave_leave_date')) ? '' : $this->input->post('leave_leave_date');
    $leave_post['leave.leave_status'] = is_null($this->input->post('leave_leave_status')) ? '' : $this->input->post('leave_leave_status');
    $leave_post['leave.leave_submission_date'] = is_null($this->input->post('leave_leave_submission_date')) ? '' : $this->input->post('leave_leave_submission_date');
    $leave_post['leave.leave_type_id'] = is_null($this->input->post('leave_leave_type_id')) ? '' : $this->input->post('leave_leave_type_id');
    $leave_post['leave.staff_id'] = is_null($this->input->post('leave_staff_id')) ? '' : $this->input->post('leave_staff_id');
    $this->session->set_userdata('leave_type.leave_type_id', $leave_post['leave_type.leave_type_id']);
    $this->session->set_userdata('staff.staff_id', $leave_post['staff.staff_id']);
    $this->session->set_userdata('leave.leave_id', $leave_post['leave.leave_id']);
    $this->db->update('leave', $leave_post, array('leave_id' => $leave_post['leave_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $leave_post);
  }
  function leave_delete() {
    $leave_delete['leave.comment'] = is_null($this->input->post('leave_comment')) ? '' : $this->input->post('leave_comment');
    $leave_delete['leave.leave_date'] = is_null($this->input->post('leave_leave_date')) ? '' : $this->input->post('leave_leave_date');
    $leave_delete['leave.leave_id'] = is_null($this->input->post('leave_leave_id')) ? '' : $this->input->post('leave_leave_id');
    $leave_delete['leave.leave_status'] = is_null($this->input->post('leave_leave_status')) ? '' : $this->input->post('leave_leave_status');
    $leave_delete['leave.leave_submission_date'] = is_null($this->input->post('leave_leave_submission_date')) ? '' : $this->input->post('leave_leave_submission_date');
    $leave_delete['leave.leave_type_id'] = is_null($this->input->post('leave_leave_type_id')) ? '' : $this->input->post('leave_leave_type_id');
    $leave_delete['leave.staff_id'] = is_null($this->input->post('leave_staff_id')) ? '' : $this->input->post('leave_staff_id');
    $this->db->delete('leave', array('leave_id' => $leave_delete['leave_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $leave_delete);
  }
  function leave_get_records($leave_type_id,$staff_id,$leave_id) {
    $leave_filters['leave_type.leave_type_id'] = $this->session->leave_type_leave_type_id;
    $leave_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $leave_filters['leave.leave_id'] = $this->session->leave_leave_id;
    $leave_filters['leave_type.leave_type_id'] = $leave_type_leave_type_id;
    $leave_filters['staff.staff_id'] = $staff_staff_id;
    $leave_filters['leave.leave_id'] = $leave_leave_id;
    $leave_filters['leave.comment'] = is_null($this->input->post('leave_comment')) ? '' : $this->input->post('leave_comment');
    $leave_filters['leave.leave_date'] = is_null($this->input->post('leave_leave_date')) ? '' : $this->input->post('leave_leave_date');
    $leave_filters['leave.leave_status'] = is_null($this->input->post('leave_leave_status')) ? '' : $this->input->post('leave_leave_status');
    $leave_filters['leave.leave_submission_date'] = is_null($this->input->post('leave_leave_submission_date')) ? '' : $this->input->post('leave_leave_submission_date');
    $leave_filters['leave.leave_type_id'] = is_null($this->input->post('leave_leave_type_id')) ? '' : $this->input->post('leave_leave_type_id');
    $leave_filters['leave.staff_id'] = is_null($this->input->post('leave_staff_id')) ? '' : $this->input->post('leave_staff_id');
    $this->session->set_userdata('leave_type.leave_type_id', $leave_filters['leave_type.leave_type_id']);
    $this->session->set_userdata('staff.staff_id', $leave_filters['staff.staff_id']);
    $this->session->set_userdata('leave.leave_id', $leave_filters['leave.leave_id']);
    $this->db->select('leave_type.leave_type_id AS leave_leave_type_id, staff.staff_id AS leave_staff_id,
    leave.comment AS leave_comment, leave.leave_date AS leave_leave_date,
    leave.leave_id AS leave_leave_id, leave.leave_status AS leave_leave_status,
    leave.leave_submission_date AS leave_leave_submission_date, leave.leave_type_id AS leave_leave_type_id,
    leave.staff_id AS leave_staff_id')->from('leave');
    $this->db->join('leave_type', 'leave.leave_type_id = leave_type.leave_type_id', 'left');
    $this->db->join('staff', 'leave.staff_id = staff.staff_id', 'left');
    $this->db->where($leave_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $leave_filters);
  }
}