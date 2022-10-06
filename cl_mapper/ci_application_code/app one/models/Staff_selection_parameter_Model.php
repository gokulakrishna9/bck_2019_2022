<?php class Staff_selection_parameter_model extends CI_Model {
  function staff_selection_parameter_create($staff_recruitment_drive_drive_id) {
    $staff_selection_parameter_post = [];
    $staff_selection_parameter_post['staff_recruitment_drive.drive_id'] = $this->session->staff_recruitment_drive_drive_id;
    $staff_selection_parameter_post['staff_recruitment_drive.drive_id'] = $staff_recruitment_drive_drive_id;
    $staff_selection_parameter_post['drive_id'] = is_null($this->input->post('drive_id')) ? '' : $this->input->post('drive_id');
    $staff_selection_parameter_post['parameter_id'] = is_null($this->input->post('parameter_id')) ? '' : $this->input->post('parameter_id');
    $staff_selection_parameter_post['parameter_label'] = is_null($this->input->post('parameter_label')) ? '' : $this->input->post('parameter_label');
    $staff_selection_parameter_post['parameter_max_value'] = is_null($this->input->post('parameter_max_value')) ? '' : $this->input->post('parameter_max_value');
    $staff_selection_parameter_post['parameter_rank'] = is_null($this->input->post('parameter_rank')) ? '' : $this->input->post('parameter_rank');
    $this->session->set_userdata('staff_recruitment_drive.drive_id', $staff_selection_parameter_post['staff_recruitment_drive.drive_id']);
    $this->db->insert('staff_selection_parameter', $staff_selection_parameter_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $staff_selection_parameter_post);
  }
  function staff_selection_parameter_update($drive_id,$parameter_id) {
    $staff_selection_parameter_post['staff_recruitment_drive.drive_id'] = $this->session->staff_recruitment_drive_drive_id;
    $staff_selection_parameter_post['staff_selection_parameter.parameter_id'] = $this->session->staff_selection_parameter_parameter_id;
    $staff_selection_parameter_post['staff_recruitment_drive.drive_id'] = $staff_recruitment_drive_drive_id;
    $staff_selection_parameter_post['staff_selection_parameter.parameter_id'] = $staff_selection_parameter_parameter_id;
    $staff_selection_parameter_post['staff_selection_parameter.drive_id'] = is_null($this->input->post('staff_selection_parameter_drive_id')) ? '' : $this->input->post('staff_selection_parameter_drive_id');
    $staff_selection_parameter_post['staff_selection_parameter.parameter_label'] = is_null($this->input->post('staff_selection_parameter_parameter_label')) ? '' : $this->input->post('staff_selection_parameter_parameter_label');
    $staff_selection_parameter_post['staff_selection_parameter.parameter_max_value'] = is_null($this->input->post('staff_selection_parameter_parameter_max_value')) ? '' : $this->input->post('staff_selection_parameter_parameter_max_value');
    $staff_selection_parameter_post['staff_selection_parameter.parameter_rank'] = is_null($this->input->post('staff_selection_parameter_parameter_rank')) ? '' : $this->input->post('staff_selection_parameter_parameter_rank');
    $this->session->set_userdata('staff_recruitment_drive.drive_id', $staff_selection_parameter_post['staff_recruitment_drive.drive_id']);
    $this->session->set_userdata('staff_selection_parameter.parameter_id', $staff_selection_parameter_post['staff_selection_parameter.parameter_id']);
    $this->db->update('staff_selection_parameter', $staff_selection_parameter_post, array('parameter_id' => $staff_selection_parameter_post['parameter_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_selection_parameter_post);
  }
  function staff_selection_parameter_delete() {
    $staff_selection_parameter_delete['staff_selection_parameter.drive_id'] = is_null($this->input->post('staff_selection_parameter_drive_id')) ? '' : $this->input->post('staff_selection_parameter_drive_id');
    $staff_selection_parameter_delete['staff_selection_parameter.parameter_id'] = is_null($this->input->post('staff_selection_parameter_parameter_id')) ? '' : $this->input->post('staff_selection_parameter_parameter_id');
    $staff_selection_parameter_delete['staff_selection_parameter.parameter_label'] = is_null($this->input->post('staff_selection_parameter_parameter_label')) ? '' : $this->input->post('staff_selection_parameter_parameter_label');
    $staff_selection_parameter_delete['staff_selection_parameter.parameter_max_value'] = is_null($this->input->post('staff_selection_parameter_parameter_max_value')) ? '' : $this->input->post('staff_selection_parameter_parameter_max_value');
    $staff_selection_parameter_delete['staff_selection_parameter.parameter_rank'] = is_null($this->input->post('staff_selection_parameter_parameter_rank')) ? '' : $this->input->post('staff_selection_parameter_parameter_rank');
    $this->db->delete('staff_selection_parameter', array('parameter_id' => $staff_selection_parameter_delete['parameter_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_selection_parameter_delete);
  }
  function staff_selection_parameter_get_records($drive_id,$parameter_id) {
    $staff_selection_parameter_filters['staff_recruitment_drive.drive_id'] = $this->session->staff_recruitment_drive_drive_id;
    $staff_selection_parameter_filters['staff_selection_parameter.parameter_id'] = $this->session->staff_selection_parameter_parameter_id;
    $staff_selection_parameter_filters['staff_recruitment_drive.drive_id'] = $staff_recruitment_drive_drive_id;
    $staff_selection_parameter_filters['staff_selection_parameter.parameter_id'] = $staff_selection_parameter_parameter_id;
    $staff_selection_parameter_filters['staff_selection_parameter.drive_id'] = is_null($this->input->post('staff_selection_parameter_drive_id')) ? '' : $this->input->post('staff_selection_parameter_drive_id');
    $staff_selection_parameter_filters['staff_selection_parameter.parameter_label'] = is_null($this->input->post('staff_selection_parameter_parameter_label')) ? '' : $this->input->post('staff_selection_parameter_parameter_label');
    $staff_selection_parameter_filters['staff_selection_parameter.parameter_max_value'] = is_null($this->input->post('staff_selection_parameter_parameter_max_value')) ? '' : $this->input->post('staff_selection_parameter_parameter_max_value');
    $staff_selection_parameter_filters['staff_selection_parameter.parameter_rank'] = is_null($this->input->post('staff_selection_parameter_parameter_rank')) ? '' : $this->input->post('staff_selection_parameter_parameter_rank');
    $this->session->set_userdata('staff_recruitment_drive.drive_id', $staff_selection_parameter_filters['staff_recruitment_drive.drive_id']);
    $this->session->set_userdata('staff_selection_parameter.parameter_id', $staff_selection_parameter_filters['staff_selection_parameter.parameter_id']);
    $this->db->select('staff_recruitment_drive.drive_id AS staff_selection_parameter_drive_id, staff_selection_parameter.drive_id AS staff_selection_parameter_drive_id,
    staff_selection_parameter.parameter_id AS staff_selection_parameter_parameter_id, staff_selection_parameter.parameter_label AS staff_selection_parameter_parameter_label,
    staff_selection_parameter.parameter_max_value AS staff_selection_parameter_parameter_max_value, staff_selection_parameter.parameter_rank AS staff_selection_parameter_parameter_rank')->from('staff_selection_parameter');
    $this->db->join('staff_recruitment_drive', 'staff_selection_parameter.drive_id = staff_recruitment_drive.drive_id', 'left');
    $this->db->where($staff_selection_parameter_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $staff_selection_parameter_filters);
  }
}