<?php class Staff_applicant_qualification_master_model extends CI_Model {
  function staff_applicant_qualification_master_create() {
    $staff_applicant_qualification_master_post = [];
    $staff_applicant_qualification_master_post['qualification'] = is_null($this->input->post('qualification')) ? '' : $this->input->post('qualification');
    $staff_applicant_qualification_master_post['qualification_id'] = is_null($this->input->post('qualification_id')) ? '' : $this->input->post('qualification_id');
    $staff_applicant_qualification_master_post['qualification_level_id'] = is_null($this->input->post('qualification_level_id')) ? '' : $this->input->post('qualification_level_id');
    $this->db->insert('staff_applicant_qualification_master', $staff_applicant_qualification_master_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $staff_applicant_qualification_master_post);
  }
  function staff_applicant_qualification_master_update($qualification_id) {
    $staff_applicant_qualification_master_post['staff_applicant_qualification_master.qualification_id'] = $this->session->staff_applicant_qualification_master_qualification_id;
    $staff_applicant_qualification_master_post['staff_applicant_qualification_master.qualification_id'] = $staff_applicant_qualification_master_qualification_id;
    $staff_applicant_qualification_master_post['staff_applicant_qualification_master.qualification'] = is_null($this->input->post('staff_applicant_qualification_master_qualification')) ? '' : $this->input->post('staff_applicant_qualification_master_qualification');
    $staff_applicant_qualification_master_post['staff_applicant_qualification_master.qualification_level_id'] = is_null($this->input->post('staff_applicant_qualification_master_qualification_level_id')) ? '' : $this->input->post('staff_applicant_qualification_master_qualification_level_id');
    $this->session->set_userdata('staff_applicant_qualification_master.qualification_id', $staff_applicant_qualification_master_post['staff_applicant_qualification_master.qualification_id']);
    $this->db->update('staff_applicant_qualification_master', $staff_applicant_qualification_master_post, array('qualification_id' => $staff_applicant_qualification_master_post['qualification_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_applicant_qualification_master_post);
  }
  function staff_applicant_qualification_master_delete() {
    $staff_applicant_qualification_master_delete['staff_applicant_qualification_master.qualification'] = is_null($this->input->post('staff_applicant_qualification_master_qualification')) ? '' : $this->input->post('staff_applicant_qualification_master_qualification');
    $staff_applicant_qualification_master_delete['staff_applicant_qualification_master.qualification_id'] = is_null($this->input->post('staff_applicant_qualification_master_qualification_id')) ? '' : $this->input->post('staff_applicant_qualification_master_qualification_id');
    $staff_applicant_qualification_master_delete['staff_applicant_qualification_master.qualification_level_id'] = is_null($this->input->post('staff_applicant_qualification_master_qualification_level_id')) ? '' : $this->input->post('staff_applicant_qualification_master_qualification_level_id');
    $this->db->delete('staff_applicant_qualification_master', array('qualification_id' => $staff_applicant_qualification_master_delete['qualification_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_applicant_qualification_master_delete);
  }
  function staff_applicant_qualification_master_get_records($qualification_id) {
    $staff_applicant_qualification_master_filters['staff_applicant_qualification_master.qualification_id'] = $this->session->staff_applicant_qualification_master_qualification_id;
    $staff_applicant_qualification_master_filters['staff_applicant_qualification_master.qualification_id'] = $staff_applicant_qualification_master_qualification_id;
    $staff_applicant_qualification_master_filters['staff_applicant_qualification_master.qualification'] = is_null($this->input->post('staff_applicant_qualification_master_qualification')) ? '' : $this->input->post('staff_applicant_qualification_master_qualification');
    $staff_applicant_qualification_master_filters['staff_applicant_qualification_master.qualification_level_id'] = is_null($this->input->post('staff_applicant_qualification_master_qualification_level_id')) ? '' : $this->input->post('staff_applicant_qualification_master_qualification_level_id');
    $this->session->set_userdata('staff_applicant_qualification_master.qualification_id', $staff_applicant_qualification_master_filters['staff_applicant_qualification_master.qualification_id']);
    $this->db->select('staff_applicant_qualification_master.qualification AS staff_applicant_qualification_master_qualification, staff_applicant_qualification_master.qualification_id AS staff_applicant_qualification_master_qualification_id,
    staff_applicant_qualification_master.qualification_level_id AS staff_applicant_qualification_master_qualification_level_id')->from('staff_applicant_qualification_master');
    $this->db->where($staff_applicant_qualification_master_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $staff_applicant_qualification_master_filters);
  }
}