<?php class Hr_transaction_type_model extends CI_Model {
  function hr_transaction_type_create() {
    $hr_transaction_type_post = [];
    $hr_transaction_type_post['display_flag'] = is_null($this->input->post('display_flag')) ? '' : $this->input->post('display_flag');
    $hr_transaction_type_post['hr_transaction_type'] = is_null($this->input->post('hr_transaction_type')) ? '' : $this->input->post('hr_transaction_type');
    $hr_transaction_type_post['hr_transaction_type_id'] = is_null($this->input->post('hr_transaction_type_id')) ? '' : $this->input->post('hr_transaction_type_id');
    $this->db->insert('hr_transaction_type', $hr_transaction_type_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $hr_transaction_type_post);
  }
  function hr_transaction_type_update($hr_transaction_type_id) {
    $hr_transaction_type_post['hr_transaction_type.hr_transaction_type_id'] = $this->session->hr_transaction_type_hr_transaction_type_id;
    $hr_transaction_type_post['hr_transaction_type.hr_transaction_type_id'] = $hr_transaction_type_hr_transaction_type_id;
    $hr_transaction_type_post['hr_transaction_type.display_flag'] = is_null($this->input->post('hr_transaction_type_display_flag')) ? '' : $this->input->post('hr_transaction_type_display_flag');
    $hr_transaction_type_post['hr_transaction_type.hr_transaction_type'] = is_null($this->input->post('hr_transaction_type_hr_transaction_type')) ? '' : $this->input->post('hr_transaction_type_hr_transaction_type');
    $this->session->set_userdata('hr_transaction_type.hr_transaction_type_id', $hr_transaction_type_post['hr_transaction_type.hr_transaction_type_id']);
    $this->db->update('hr_transaction_type', $hr_transaction_type_post, array('hr_transaction_type_id' => $hr_transaction_type_post['hr_transaction_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $hr_transaction_type_post);
  }
  function hr_transaction_type_delete() {
    $hr_transaction_type_delete['hr_transaction_type.display_flag'] = is_null($this->input->post('hr_transaction_type_display_flag')) ? '' : $this->input->post('hr_transaction_type_display_flag');
    $hr_transaction_type_delete['hr_transaction_type.hr_transaction_type'] = is_null($this->input->post('hr_transaction_type_hr_transaction_type')) ? '' : $this->input->post('hr_transaction_type_hr_transaction_type');
    $hr_transaction_type_delete['hr_transaction_type.hr_transaction_type_id'] = is_null($this->input->post('hr_transaction_type_hr_transaction_type_id')) ? '' : $this->input->post('hr_transaction_type_hr_transaction_type_id');
    $this->db->delete('hr_transaction_type', array('hr_transaction_type_id' => $hr_transaction_type_delete['hr_transaction_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $hr_transaction_type_delete);
  }
  function hr_transaction_type_get_records($hr_transaction_type_id) {
    $hr_transaction_type_filters['hr_transaction_type.hr_transaction_type_id'] = $this->session->hr_transaction_type_hr_transaction_type_id;
    $hr_transaction_type_filters['hr_transaction_type.hr_transaction_type_id'] = $hr_transaction_type_hr_transaction_type_id;
    $hr_transaction_type_filters['hr_transaction_type.display_flag'] = is_null($this->input->post('hr_transaction_type_display_flag')) ? '' : $this->input->post('hr_transaction_type_display_flag');
    $hr_transaction_type_filters['hr_transaction_type.hr_transaction_type'] = is_null($this->input->post('hr_transaction_type_hr_transaction_type')) ? '' : $this->input->post('hr_transaction_type_hr_transaction_type');
    $this->session->set_userdata('hr_transaction_type.hr_transaction_type_id', $hr_transaction_type_filters['hr_transaction_type.hr_transaction_type_id']);
    $this->db->select('hr_transaction_type.display_flag AS hr_transaction_type_display_flag, hr_transaction_type.hr_transaction_type AS hr_transaction_type_hr_transaction_type,
    hr_transaction_type.hr_transaction_type_id AS hr_transaction_type_hr_transaction_type_id')->from('hr_transaction_type');
    $this->db->where($hr_transaction_type_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $hr_transaction_type_filters);
  }
}