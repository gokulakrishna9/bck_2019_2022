<?php class Qualification_model extends CI_Model {
  function qualification_create($staff_staff_id) {
    $qualification_post = [];
    $qualification_post['staff.staff_id'] = $this->session->staff_staff_id;
    $qualification_post['staff.staff_id'] = $staff_staff_id;
    $qualification_post['degree'] = is_null($this->input->post('degree')) ? '' : $this->input->post('degree');
    $qualification_post['qualification_id'] = is_null($this->input->post('qualification_id')) ? '' : $this->input->post('qualification_id');
    $qualification_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $qualification_post['university'] = is_null($this->input->post('university')) ? '' : $this->input->post('university');
    $qualification_post['year_of_completion'] = is_null($this->input->post('year_of_completion')) ? '' : $this->input->post('year_of_completion');
    $this->session->set_userdata('staff.staff_id', $qualification_post['staff.staff_id']);
    $this->db->insert('qualification', $qualification_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $qualification_post);
  }
  function qualification_update($staff_id,$qualification_id) {
    $qualification_post['staff.staff_id'] = $this->session->staff_staff_id;
    $qualification_post['qualification.qualification_id'] = $this->session->qualification_qualification_id;
    $qualification_post['staff.staff_id'] = $staff_staff_id;
    $qualification_post['qualification.qualification_id'] = $qualification_qualification_id;
    $qualification_post['qualification.degree'] = is_null($this->input->post('qualification_degree')) ? '' : $this->input->post('qualification_degree');
    $qualification_post['qualification.staff_id'] = is_null($this->input->post('qualification_staff_id')) ? '' : $this->input->post('qualification_staff_id');
    $qualification_post['qualification.university'] = is_null($this->input->post('qualification_university')) ? '' : $this->input->post('qualification_university');
    $qualification_post['qualification.year_of_completion'] = is_null($this->input->post('qualification_year_of_completion')) ? '' : $this->input->post('qualification_year_of_completion');
    $this->session->set_userdata('staff.staff_id', $qualification_post['staff.staff_id']);
    $this->session->set_userdata('qualification.qualification_id', $qualification_post['qualification.qualification_id']);
    $this->db->update('qualification', $qualification_post, array('qualification_id' => $qualification_post['qualification_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $qualification_post);
  }
  function qualification_delete() {
    $qualification_delete['qualification.degree'] = is_null($this->input->post('qualification_degree')) ? '' : $this->input->post('qualification_degree');
    $qualification_delete['qualification.qualification_id'] = is_null($this->input->post('qualification_qualification_id')) ? '' : $this->input->post('qualification_qualification_id');
    $qualification_delete['qualification.staff_id'] = is_null($this->input->post('qualification_staff_id')) ? '' : $this->input->post('qualification_staff_id');
    $qualification_delete['qualification.university'] = is_null($this->input->post('qualification_university')) ? '' : $this->input->post('qualification_university');
    $qualification_delete['qualification.year_of_completion'] = is_null($this->input->post('qualification_year_of_completion')) ? '' : $this->input->post('qualification_year_of_completion');
    $this->db->delete('qualification', array('qualification_id' => $qualification_delete['qualification_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $qualification_delete);
  }
  function qualification_get_records($staff_id,$qualification_id) {
    $qualification_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $qualification_filters['qualification.qualification_id'] = $this->session->qualification_qualification_id;
    $qualification_filters['staff.staff_id'] = $staff_staff_id;
    $qualification_filters['qualification.qualification_id'] = $qualification_qualification_id;
    $qualification_filters['qualification.degree'] = is_null($this->input->post('qualification_degree')) ? '' : $this->input->post('qualification_degree');
    $qualification_filters['qualification.staff_id'] = is_null($this->input->post('qualification_staff_id')) ? '' : $this->input->post('qualification_staff_id');
    $qualification_filters['qualification.university'] = is_null($this->input->post('qualification_university')) ? '' : $this->input->post('qualification_university');
    $qualification_filters['qualification.year_of_completion'] = is_null($this->input->post('qualification_year_of_completion')) ? '' : $this->input->post('qualification_year_of_completion');
    $this->session->set_userdata('staff.staff_id', $qualification_filters['staff.staff_id']);
    $this->session->set_userdata('qualification.qualification_id', $qualification_filters['qualification.qualification_id']);
    $this->db->select('staff.staff_id AS qualification_staff_id, qualification.degree AS qualification_degree,
    qualification.qualification_id AS qualification_qualification_id, qualification.staff_id AS qualification_staff_id,
    qualification.university AS qualification_university, qualification.year_of_completion AS qualification_year_of_completion')->from('qualification');
    $this->db->join('staff', 'qualification.staff_id = staff.staff_id', 'left');
    $this->db->where($qualification_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $qualification_filters);
  }
}