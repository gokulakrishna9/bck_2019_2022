<?php class Staff_applicant_score_model extends CI_Model {
  function staff_applicant_score_create() {
    $staff_applicant_score_post = [];
    $staff_applicant_score_post['staff_selection_parameter.parameter_id'] = $this->session->staff_selection_parameter_parameter_id;
    $staff_applicant_score_post['staff_applicant.applicant_id'] = $this->session->staff_applicant_applicant_id;
    $staff_applicant_score_post['staff_recruitment_drive.drive_id'] = $this->session->staff_recruitment_drive_drive_id;
    $staff_applicant_score_post['staff_selection_parameter.parameter_id'] = $staff_selection_parameter_parameter_id;
    $staff_applicant_score_post['staff_applicant.applicant_id'] = $staff_applicant_applicant_id;
    $staff_applicant_score_post['staff_recruitment_drive.drive_id'] = $staff_recruitment_drive_drive_id;
    $staff_applicant_score_post['score_id'] = is_null($this->input->post('score_id')) ? '' : $this->input->post('score_id');
    $staff_applicant_score_post['parameter_id'] = is_null($this->input->post('parameter_id')) ? '' : $this->input->post('parameter_id');
    $staff_applicant_score_post['applicant_id'] = is_null($this->input->post('applicant_id')) ? '' : $this->input->post('applicant_id');
    $staff_applicant_score_post['drive_id'] = is_null($this->input->post('drive_id')) ? '' : $this->input->post('drive_id');
    $staff_applicant_score_post['score'] = is_null($this->input->post('score')) ? '' : $this->input->post('score');
    $this->session->set_userdata('staff_selection_parameter.parameter_id', $staff_applicant_score_post['staff_selection_parameter.parameter_id']);
    $this->session->set_userdata('staff_applicant.applicant_id', $staff_applicant_score_post['staff_applicant.applicant_id']);
    $this->session->set_userdata('staff_recruitment_drive.drive_id', $staff_applicant_score_post['staff_recruitment_drive.drive_id']);
    $this->db->insert('staff_applicant_score', $staff_applicant_score_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $staff_applicant_score_post);
  }
  function staff_applicant_score_update() {
    $staff_applicant_score_post['staff_selection_parameter.parameter_id'] = $this->session->staff_selection_parameter_parameter_id;
    $staff_applicant_score_post['staff_applicant.applicant_id'] = $this->session->staff_applicant_applicant_id;
    $staff_applicant_score_post['staff_recruitment_drive.drive_id'] = $this->session->staff_recruitment_drive_drive_id;
    $staff_applicant_score_post['staff_applicant_score.score_id'] = $this->session->staff_applicant_score_score_id;
    $staff_applicant_score_post['staff_selection_parameter.parameter_id'] = $staff_selection_parameter_parameter_id;
    $staff_applicant_score_post['staff_applicant.applicant_id'] = $staff_applicant_applicant_id;
    $staff_applicant_score_post['staff_recruitment_drive.drive_id'] = $staff_recruitment_drive_drive_id;
    $staff_applicant_score_post['staff_applicant_score.score_id'] = $staff_applicant_score_score_id;
    $staff_applicant_score_post['staff_applicant_score.parameter_id'] = is_null($this->input->post('staff_applicant_score_parameter_id')) ? '' : $this->input->post('staff_applicant_score_parameter_id');
    $staff_applicant_score_post['staff_applicant_score.applicant_id'] = is_null($this->input->post('staff_applicant_score_applicant_id')) ? '' : $this->input->post('staff_applicant_score_applicant_id');
    $staff_applicant_score_post['staff_applicant_score.drive_id'] = is_null($this->input->post('staff_applicant_score_drive_id')) ? '' : $this->input->post('staff_applicant_score_drive_id');
    $staff_applicant_score_post['staff_applicant_score.score'] = is_null($this->input->post('staff_applicant_score_score')) ? '' : $this->input->post('staff_applicant_score_score');
    $this->session->set_userdata('staff_selection_parameter.parameter_id', $staff_applicant_score_post['staff_selection_parameter.parameter_id']);
    $this->session->set_userdata('staff_applicant.applicant_id', $staff_applicant_score_post['staff_applicant.applicant_id']);
    $this->session->set_userdata('staff_recruitment_drive.drive_id', $staff_applicant_score_post['staff_recruitment_drive.drive_id']);
    $this->session->set_userdata('staff_applicant_score.score_id', $staff_applicant_score_post['staff_applicant_score.score_id']);
    $this->db->update('staff_applicant_score', $staff_applicant_score_post, array('score_id' => $staff_applicant_score_post['score_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_applicant_score_post);
  }
  function staff_applicant_score_delete() {
    $staff_applicant_score_delete['staff_applicant_score.score_id'] = is_null($this->input->post('staff_applicant_score_score_id')) ? '' : $this->input->post('staff_applicant_score_score_id');
    $staff_applicant_score_delete['staff_applicant_score.parameter_id'] = is_null($this->input->post('staff_applicant_score_parameter_id')) ? '' : $this->input->post('staff_applicant_score_parameter_id');
    $staff_applicant_score_delete['staff_applicant_score.applicant_id'] = is_null($this->input->post('staff_applicant_score_applicant_id')) ? '' : $this->input->post('staff_applicant_score_applicant_id');
    $staff_applicant_score_delete['staff_applicant_score.drive_id'] = is_null($this->input->post('staff_applicant_score_drive_id')) ? '' : $this->input->post('staff_applicant_score_drive_id');
    $staff_applicant_score_delete['staff_applicant_score.score'] = is_null($this->input->post('staff_applicant_score_score')) ? '' : $this->input->post('staff_applicant_score_score');
    $this->db->delete('staff_applicant_score', array('score_id' => $staff_applicant_score_delete['score_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_applicant_score_delete);
  }
  function staff_applicant_score_get_records() {
    $staff_applicant_score_filters['staff_selection_parameter.parameter_id'] = $this->session->staff_selection_parameter_parameter_id;
    $staff_applicant_score_filters['staff_applicant.applicant_id'] = $this->session->staff_applicant_applicant_id;
    $staff_applicant_score_filters['staff_recruitment_drive.drive_id'] = $this->session->staff_recruitment_drive_drive_id;
    $staff_applicant_score_filters['staff_applicant_score.score_id'] = $this->session->staff_applicant_score_score_id;
    $staff_applicant_score_filters['staff_selection_parameter.parameter_id'] = $staff_selection_parameter_parameter_id;
    $staff_applicant_score_filters['staff_applicant.applicant_id'] = $staff_applicant_applicant_id;
    $staff_applicant_score_filters['staff_recruitment_drive.drive_id'] = $staff_recruitment_drive_drive_id;
    $staff_applicant_score_filters['staff_applicant_score.score_id'] = $staff_applicant_score_score_id;
    $staff_applicant_score_filters['staff_applicant_score.parameter_id'] = is_null($this->input->post('staff_applicant_score_parameter_id')) ? '' : $this->input->post('staff_applicant_score_parameter_id');
    $staff_applicant_score_filters['staff_applicant_score.applicant_id'] = is_null($this->input->post('staff_applicant_score_applicant_id')) ? '' : $this->input->post('staff_applicant_score_applicant_id');
    $staff_applicant_score_filters['staff_applicant_score.drive_id'] = is_null($this->input->post('staff_applicant_score_drive_id')) ? '' : $this->input->post('staff_applicant_score_drive_id');
    $staff_applicant_score_filters['staff_applicant_score.score'] = is_null($this->input->post('staff_applicant_score_score')) ? '' : $this->input->post('staff_applicant_score_score');
    $this->session->set_userdata('staff_selection_parameter.parameter_id', $staff_applicant_score_filters['staff_selection_parameter.parameter_id']);
    $this->session->set_userdata('staff_applicant.applicant_id', $staff_applicant_score_filters['staff_applicant.applicant_id']);
    $this->session->set_userdata('staff_recruitment_drive.drive_id', $staff_applicant_score_filters['staff_recruitment_drive.drive_id']);
    $this->session->set_userdata('staff_applicant_score.score_id', $staff_applicant_score_filters['staff_applicant_score.score_id']);
    $this->db->select('staff_selection_parameter.parameter_id AS staff_applicant_score_parameter_id, staff_applicant.applicant_id AS staff_applicant_score_applicant_id,
    staff_recruitment_drive.drive_id AS staff_applicant_score_drive_id, staff_applicant_score.score_id AS staff_applicant_score_score_id,
    staff_applicant_score.parameter_id AS staff_applicant_score_parameter_id, staff_applicant_score.applicant_id AS staff_applicant_score_applicant_id,
    staff_applicant_score.drive_id AS staff_applicant_score_drive_id, staff_applicant_score.score AS staff_applicant_score_score')->from('staff_applicant_score');
    $this->db->join('staff_selection_parameter', 'staff_applicant_score.parameter_id = staff_selection_parameter.parameter_id', 'left');
    $this->db->join('staff_applicant', 'staff_applicant_score.applicant_id = staff_applicant.applicant_id', 'left');
    $this->db->join('staff_recruitment_drive', 'staff_applicant_score.drive_id = staff_recruitment_drive.drive_id', 'left');
    $this->db->where($staff_applicant_score_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $staff_applicant_score_filters);
  }
}