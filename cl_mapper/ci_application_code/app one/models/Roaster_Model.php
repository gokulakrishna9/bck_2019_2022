<?php class Roaster_model extends CI_Model {
  function roaster_create($shift_shift_id,$staff_staff_id) {
    $roaster_post = [];
    $roaster_post['shift.shift_id'] = $this->session->shift_shift_id;
    $roaster_post['staff.staff_id'] = $this->session->staff_staff_id;
    $roaster_post['shift.shift_id'] = $shift_shift_id;
    $roaster_post['staff.staff_id'] = $staff_staff_id;
    $roaster_post['date'] = is_null($this->input->post('date')) ? '' : $this->input->post('date');
    $roaster_post['original_shift_id'] = is_null($this->input->post('original_shift_id')) ? '' : $this->input->post('original_shift_id');
    $roaster_post['roaster_id'] = is_null($this->input->post('roaster_id')) ? '' : $this->input->post('roaster_id');
    $roaster_post['shift_id'] = is_null($this->input->post('shift_id')) ? '' : $this->input->post('shift_id');
    $roaster_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $roaster_post['swap_status'] = is_null($this->input->post('swap_status')) ? '' : $this->input->post('swap_status');
    $this->session->set_userdata('shift.shift_id', $roaster_post['shift.shift_id']);
    $this->session->set_userdata('staff.staff_id', $roaster_post['staff.staff_id']);
    $this->db->insert('roaster', $roaster_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $roaster_post);
  }
  function roaster_update($shift_id,$staff_id,$roaster_id) {
    $roaster_post['shift.shift_id'] = $this->session->shift_shift_id;
    $roaster_post['staff.staff_id'] = $this->session->staff_staff_id;
    $roaster_post['roaster.roaster_id'] = $this->session->roaster_roaster_id;
    $roaster_post['shift.shift_id'] = $shift_shift_id;
    $roaster_post['staff.staff_id'] = $staff_staff_id;
    $roaster_post['roaster.roaster_id'] = $roaster_roaster_id;
    $roaster_post['roaster.date'] = is_null($this->input->post('roaster_date')) ? '' : $this->input->post('roaster_date');
    $roaster_post['roaster.original_shift_id'] = is_null($this->input->post('roaster_original_shift_id')) ? '' : $this->input->post('roaster_original_shift_id');
    $roaster_post['roaster.shift_id'] = is_null($this->input->post('roaster_shift_id')) ? '' : $this->input->post('roaster_shift_id');
    $roaster_post['roaster.staff_id'] = is_null($this->input->post('roaster_staff_id')) ? '' : $this->input->post('roaster_staff_id');
    $roaster_post['roaster.swap_status'] = is_null($this->input->post('roaster_swap_status')) ? '' : $this->input->post('roaster_swap_status');
    $this->session->set_userdata('shift.shift_id', $roaster_post['shift.shift_id']);
    $this->session->set_userdata('staff.staff_id', $roaster_post['staff.staff_id']);
    $this->session->set_userdata('roaster.roaster_id', $roaster_post['roaster.roaster_id']);
    $this->db->update('roaster', $roaster_post, array('roaster_id' => $roaster_post['roaster_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $roaster_post);
  }
  function roaster_delete() {
    $roaster_delete['roaster.date'] = is_null($this->input->post('roaster_date')) ? '' : $this->input->post('roaster_date');
    $roaster_delete['roaster.original_shift_id'] = is_null($this->input->post('roaster_original_shift_id')) ? '' : $this->input->post('roaster_original_shift_id');
    $roaster_delete['roaster.roaster_id'] = is_null($this->input->post('roaster_roaster_id')) ? '' : $this->input->post('roaster_roaster_id');
    $roaster_delete['roaster.shift_id'] = is_null($this->input->post('roaster_shift_id')) ? '' : $this->input->post('roaster_shift_id');
    $roaster_delete['roaster.staff_id'] = is_null($this->input->post('roaster_staff_id')) ? '' : $this->input->post('roaster_staff_id');
    $roaster_delete['roaster.swap_status'] = is_null($this->input->post('roaster_swap_status')) ? '' : $this->input->post('roaster_swap_status');
    $this->db->delete('roaster', array('roaster_id' => $roaster_delete['roaster_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $roaster_delete);
  }
  function roaster_get_records($shift_id,$staff_id,$roaster_id) {
    $roaster_filters['shift.shift_id'] = $this->session->shift_shift_id;
    $roaster_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $roaster_filters['roaster.roaster_id'] = $this->session->roaster_roaster_id;
    $roaster_filters['shift.shift_id'] = $shift_shift_id;
    $roaster_filters['staff.staff_id'] = $staff_staff_id;
    $roaster_filters['roaster.roaster_id'] = $roaster_roaster_id;
    $roaster_filters['roaster.date'] = is_null($this->input->post('roaster_date')) ? '' : $this->input->post('roaster_date');
    $roaster_filters['roaster.original_shift_id'] = is_null($this->input->post('roaster_original_shift_id')) ? '' : $this->input->post('roaster_original_shift_id');
    $roaster_filters['roaster.shift_id'] = is_null($this->input->post('roaster_shift_id')) ? '' : $this->input->post('roaster_shift_id');
    $roaster_filters['roaster.staff_id'] = is_null($this->input->post('roaster_staff_id')) ? '' : $this->input->post('roaster_staff_id');
    $roaster_filters['roaster.swap_status'] = is_null($this->input->post('roaster_swap_status')) ? '' : $this->input->post('roaster_swap_status');
    $this->session->set_userdata('shift.shift_id', $roaster_filters['shift.shift_id']);
    $this->session->set_userdata('staff.staff_id', $roaster_filters['staff.staff_id']);
    $this->session->set_userdata('roaster.roaster_id', $roaster_filters['roaster.roaster_id']);
    $this->db->select('shift.shift_id AS roaster_shift_id, staff.staff_id AS roaster_staff_id,
    roaster.date AS roaster_date, roaster.original_shift_id AS roaster_original_shift_id,
    roaster.roaster_id AS roaster_roaster_id, roaster.shift_id AS roaster_shift_id,
    roaster.staff_id AS roaster_staff_id, roaster.swap_status AS roaster_swap_status')->from('roaster');
    $this->db->join('shift', 'roaster.shift_id = shift.shift_id', 'left');
    $this->db->join('staff', 'roaster.staff_id = staff.staff_id', 'left');
    $this->db->where($roaster_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $roaster_filters);
  }
}