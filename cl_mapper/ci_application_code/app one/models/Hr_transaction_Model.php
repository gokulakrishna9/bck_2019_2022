<?php class Hr_transaction_model extends CI_Model {
  function hr_transaction_create($hr_transaction_type_hr_transaction_type_id,$staff_staff_id) {
    $hr_transaction_post = [];
    $hr_transaction_post['hr_transaction_type.hr_transaction_type_id'] = $this->session->hr_transaction_type_hr_transaction_type_id;
    $hr_transaction_post['staff.staff_id'] = $this->session->staff_staff_id;
    $hr_transaction_post['hr_transaction_type.hr_transaction_type_id'] = $hr_transaction_type_hr_transaction_type_id;
    $hr_transaction_post['staff.staff_id'] = $staff_staff_id;
    $hr_transaction_post['hr_transaction_date'] = is_null($this->input->post('hr_transaction_date')) ? '' : $this->input->post('hr_transaction_date');
    $hr_transaction_post['hr_transaction_id'] = is_null($this->input->post('hr_transaction_id')) ? '' : $this->input->post('hr_transaction_id');
    $hr_transaction_post['hr_transaction_type_id'] = is_null($this->input->post('hr_transaction_type_id')) ? '' : $this->input->post('hr_transaction_type_id');
    $hr_transaction_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $this->session->set_userdata('hr_transaction_type.hr_transaction_type_id', $hr_transaction_post['hr_transaction_type.hr_transaction_type_id']);
    $this->session->set_userdata('staff.staff_id', $hr_transaction_post['staff.staff_id']);
    $this->db->insert('hr_transaction', $hr_transaction_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $hr_transaction_post);
  }
  function hr_transaction_update($hr_transaction_type_id,$staff_id,$hr_transaction_id) {
    $hr_transaction_post['hr_transaction_type.hr_transaction_type_id'] = $this->session->hr_transaction_type_hr_transaction_type_id;
    $hr_transaction_post['staff.staff_id'] = $this->session->staff_staff_id;
    $hr_transaction_post['hr_transaction.hr_transaction_id'] = $this->session->hr_transaction_hr_transaction_id;
    $hr_transaction_post['hr_transaction_type.hr_transaction_type_id'] = $hr_transaction_type_hr_transaction_type_id;
    $hr_transaction_post['staff.staff_id'] = $staff_staff_id;
    $hr_transaction_post['hr_transaction.hr_transaction_id'] = $hr_transaction_hr_transaction_id;
    $hr_transaction_post['hr_transaction.hr_transaction_date'] = is_null($this->input->post('hr_transaction_hr_transaction_date')) ? '' : $this->input->post('hr_transaction_hr_transaction_date');
    $hr_transaction_post['hr_transaction.hr_transaction_type_id'] = is_null($this->input->post('hr_transaction_hr_transaction_type_id')) ? '' : $this->input->post('hr_transaction_hr_transaction_type_id');
    $hr_transaction_post['hr_transaction.staff_id'] = is_null($this->input->post('hr_transaction_staff_id')) ? '' : $this->input->post('hr_transaction_staff_id');
    $this->session->set_userdata('hr_transaction_type.hr_transaction_type_id', $hr_transaction_post['hr_transaction_type.hr_transaction_type_id']);
    $this->session->set_userdata('staff.staff_id', $hr_transaction_post['staff.staff_id']);
    $this->session->set_userdata('hr_transaction.hr_transaction_id', $hr_transaction_post['hr_transaction.hr_transaction_id']);
    $this->db->update('hr_transaction', $hr_transaction_post, array('hr_transaction_id' => $hr_transaction_post['hr_transaction_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $hr_transaction_post);
  }
  function hr_transaction_delete() {
    $hr_transaction_delete['hr_transaction.hr_transaction_date'] = is_null($this->input->post('hr_transaction_hr_transaction_date')) ? '' : $this->input->post('hr_transaction_hr_transaction_date');
    $hr_transaction_delete['hr_transaction.hr_transaction_id'] = is_null($this->input->post('hr_transaction_hr_transaction_id')) ? '' : $this->input->post('hr_transaction_hr_transaction_id');
    $hr_transaction_delete['hr_transaction.hr_transaction_type_id'] = is_null($this->input->post('hr_transaction_hr_transaction_type_id')) ? '' : $this->input->post('hr_transaction_hr_transaction_type_id');
    $hr_transaction_delete['hr_transaction.staff_id'] = is_null($this->input->post('hr_transaction_staff_id')) ? '' : $this->input->post('hr_transaction_staff_id');
    $this->db->delete('hr_transaction', array('hr_transaction_id' => $hr_transaction_delete['hr_transaction_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $hr_transaction_delete);
  }
  function hr_transaction_get_records($hr_transaction_type_id,$staff_id,$hr_transaction_id) {
    $hr_transaction_filters['hr_transaction_type.hr_transaction_type_id'] = $this->session->hr_transaction_type_hr_transaction_type_id;
    $hr_transaction_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $hr_transaction_filters['hr_transaction.hr_transaction_id'] = $this->session->hr_transaction_hr_transaction_id;
    $hr_transaction_filters['hr_transaction_type.hr_transaction_type_id'] = $hr_transaction_type_hr_transaction_type_id;
    $hr_transaction_filters['staff.staff_id'] = $staff_staff_id;
    $hr_transaction_filters['hr_transaction.hr_transaction_id'] = $hr_transaction_hr_transaction_id;
    $hr_transaction_filters['hr_transaction.hr_transaction_date'] = is_null($this->input->post('hr_transaction_hr_transaction_date')) ? '' : $this->input->post('hr_transaction_hr_transaction_date');
    $hr_transaction_filters['hr_transaction.hr_transaction_type_id'] = is_null($this->input->post('hr_transaction_hr_transaction_type_id')) ? '' : $this->input->post('hr_transaction_hr_transaction_type_id');
    $hr_transaction_filters['hr_transaction.staff_id'] = is_null($this->input->post('hr_transaction_staff_id')) ? '' : $this->input->post('hr_transaction_staff_id');
    $this->session->set_userdata('hr_transaction_type.hr_transaction_type_id', $hr_transaction_filters['hr_transaction_type.hr_transaction_type_id']);
    $this->session->set_userdata('staff.staff_id', $hr_transaction_filters['staff.staff_id']);
    $this->session->set_userdata('hr_transaction.hr_transaction_id', $hr_transaction_filters['hr_transaction.hr_transaction_id']);
    $this->db->select('hr_transaction_type.hr_transaction_type_id AS hr_transaction_hr_transaction_type_id, staff.staff_id AS hr_transaction_staff_id,
    hr_transaction.hr_transaction_date AS hr_transaction_hr_transaction_date, hr_transaction.hr_transaction_id AS hr_transaction_hr_transaction_id,
    hr_transaction.hr_transaction_type_id AS hr_transaction_hr_transaction_type_id, hr_transaction.staff_id AS hr_transaction_staff_id')->from('hr_transaction');
    $this->db->join('hr_transaction_type', 'hr_transaction.hr_transaction_type_id = hr_transaction_type.hr_transaction_type_id', 'left');
    $this->db->join('staff', 'hr_transaction.staff_id = staff.staff_id', 'left');
    $this->db->where($hr_transaction_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $hr_transaction_filters);
  }
}