<?php class Staff_applicant_qualification_model extends CI_Model {
  function staff_applicant_qualification_create($staff_applicant_applicant_id,$staff_applicant_college_college_id,$qualification_qualification_id,$staff_applicant_qualification_master_qualification_id,$staff_staff_id) {
    $staff_applicant_qualification_post = [];
    $staff_applicant_qualification_post['staff_applicant.applicant_id'] = $this->session->staff_applicant_applicant_id;
    $staff_applicant_qualification_post['staff_applicant_college.college_id'] = $this->session->staff_applicant_college_college_id;
    $staff_applicant_qualification_post['qualification.qualification_id'] = $this->session->qualification_qualification_id;
    $staff_applicant_qualification_post['staff_applicant_qualification_master.qualification_id'] = $this->session->staff_applicant_qualification_master_qualification_id;
    $staff_applicant_qualification_post['staff.staff_id'] = $this->session->staff_staff_id;
    $staff_applicant_qualification_post['staff_applicant.applicant_id'] = $staff_applicant_applicant_id;
    $staff_applicant_qualification_post['staff_applicant_college.college_id'] = $staff_applicant_college_college_id;
    $staff_applicant_qualification_post['qualification.qualification_id'] = $qualification_qualification_id;
    $staff_applicant_qualification_post['staff_applicant_qualification_master.qualification_id'] = $staff_applicant_qualification_master_qualification_id;
    $staff_applicant_qualification_post['staff.staff_id'] = $staff_staff_id;
    $staff_applicant_qualification_post['applicant_id'] = is_null($this->input->post('applicant_id')) ? '' : $this->input->post('applicant_id');
    $staff_applicant_qualification_post['college_id'] = is_null($this->input->post('college_id')) ? '' : $this->input->post('college_id');
    $staff_applicant_qualification_post['from_date'] = is_null($this->input->post('from_date')) ? '' : $this->input->post('from_date');
    $staff_applicant_qualification_post['id'] = is_null($this->input->post('id')) ? '' : $this->input->post('id');
    $staff_applicant_qualification_post['qualification_id'] = is_null($this->input->post('qualification_id')) ? '' : $this->input->post('qualification_id');
    $staff_applicant_qualification_post['registration_number'] = is_null($this->input->post('registration_number')) ? '' : $this->input->post('registration_number');
    $staff_applicant_qualification_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $staff_applicant_qualification_post['to_date'] = is_null($this->input->post('to_date')) ? '' : $this->input->post('to_date');
    $this->session->set_userdata('staff_applicant.applicant_id', $staff_applicant_qualification_post['staff_applicant.applicant_id']);
    $this->session->set_userdata('staff_applicant_college.college_id', $staff_applicant_qualification_post['staff_applicant_college.college_id']);
    $this->session->set_userdata('qualification.qualification_id', $staff_applicant_qualification_post['qualification.qualification_id']);
    $this->session->set_userdata('staff_applicant_qualification_master.qualification_id', $staff_applicant_qualification_post['staff_applicant_qualification_master.qualification_id']);
    $this->session->set_userdata('staff.staff_id', $staff_applicant_qualification_post['staff.staff_id']);
    $this->db->insert('staff_applicant_qualification', $staff_applicant_qualification_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $staff_applicant_qualification_post);
  }
  function staff_applicant_qualification_update($applicant_id,$college_id,$qualification_id,$qualification_id,$staff_id,$id) {
    $staff_applicant_qualification_post['staff_applicant.applicant_id'] = $this->session->staff_applicant_applicant_id;
    $staff_applicant_qualification_post['staff_applicant_college.college_id'] = $this->session->staff_applicant_college_college_id;
    $staff_applicant_qualification_post['qualification.qualification_id'] = $this->session->qualification_qualification_id;
    $staff_applicant_qualification_post['staff_applicant_qualification_master.qualification_id'] = $this->session->staff_applicant_qualification_master_qualification_id;
    $staff_applicant_qualification_post['staff.staff_id'] = $this->session->staff_staff_id;
    $staff_applicant_qualification_post['staff_applicant_qualification.id'] = $this->session->staff_applicant_qualification_id;
    $staff_applicant_qualification_post['staff_applicant.applicant_id'] = $staff_applicant_applicant_id;
    $staff_applicant_qualification_post['staff_applicant_college.college_id'] = $staff_applicant_college_college_id;
    $staff_applicant_qualification_post['qualification.qualification_id'] = $qualification_qualification_id;
    $staff_applicant_qualification_post['staff_applicant_qualification_master.qualification_id'] = $staff_applicant_qualification_master_qualification_id;
    $staff_applicant_qualification_post['staff.staff_id'] = $staff_staff_id;
    $staff_applicant_qualification_post['staff_applicant_qualification.id'] = $staff_applicant_qualification_id;
    $staff_applicant_qualification_post['staff_applicant_qualification.applicant_id'] = is_null($this->input->post('staff_applicant_qualification_applicant_id')) ? '' : $this->input->post('staff_applicant_qualification_applicant_id');
    $staff_applicant_qualification_post['staff_applicant_qualification.college_id'] = is_null($this->input->post('staff_applicant_qualification_college_id')) ? '' : $this->input->post('staff_applicant_qualification_college_id');
    $staff_applicant_qualification_post['staff_applicant_qualification.from_date'] = is_null($this->input->post('staff_applicant_qualification_from_date')) ? '' : $this->input->post('staff_applicant_qualification_from_date');
    $staff_applicant_qualification_post['staff_applicant_qualification.qualification_id'] = is_null($this->input->post('staff_applicant_qualification_qualification_id')) ? '' : $this->input->post('staff_applicant_qualification_qualification_id');
    $staff_applicant_qualification_post['staff_applicant_qualification.registration_number'] = is_null($this->input->post('staff_applicant_qualification_registration_number')) ? '' : $this->input->post('staff_applicant_qualification_registration_number');
    $staff_applicant_qualification_post['staff_applicant_qualification.staff_id'] = is_null($this->input->post('staff_applicant_qualification_staff_id')) ? '' : $this->input->post('staff_applicant_qualification_staff_id');
    $staff_applicant_qualification_post['staff_applicant_qualification.to_date'] = is_null($this->input->post('staff_applicant_qualification_to_date')) ? '' : $this->input->post('staff_applicant_qualification_to_date');
    $this->session->set_userdata('staff_applicant.applicant_id', $staff_applicant_qualification_post['staff_applicant.applicant_id']);
    $this->session->set_userdata('staff_applicant_college.college_id', $staff_applicant_qualification_post['staff_applicant_college.college_id']);
    $this->session->set_userdata('qualification.qualification_id', $staff_applicant_qualification_post['qualification.qualification_id']);
    $this->session->set_userdata('staff_applicant_qualification_master.qualification_id', $staff_applicant_qualification_post['staff_applicant_qualification_master.qualification_id']);
    $this->session->set_userdata('staff.staff_id', $staff_applicant_qualification_post['staff.staff_id']);
    $this->session->set_userdata('staff_applicant_qualification.id', $staff_applicant_qualification_post['staff_applicant_qualification.id']);
    $this->db->update('staff_applicant_qualification', $staff_applicant_qualification_post, array('id' => $staff_applicant_qualification_post['id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_applicant_qualification_post);
  }
  function staff_applicant_qualification_delete() {
    $staff_applicant_qualification_delete['staff_applicant_qualification.applicant_id'] = is_null($this->input->post('staff_applicant_qualification_applicant_id')) ? '' : $this->input->post('staff_applicant_qualification_applicant_id');
    $staff_applicant_qualification_delete['staff_applicant_qualification.college_id'] = is_null($this->input->post('staff_applicant_qualification_college_id')) ? '' : $this->input->post('staff_applicant_qualification_college_id');
    $staff_applicant_qualification_delete['staff_applicant_qualification.from_date'] = is_null($this->input->post('staff_applicant_qualification_from_date')) ? '' : $this->input->post('staff_applicant_qualification_from_date');
    $staff_applicant_qualification_delete['staff_applicant_qualification.id'] = is_null($this->input->post('staff_applicant_qualification_id')) ? '' : $this->input->post('staff_applicant_qualification_id');
    $staff_applicant_qualification_delete['staff_applicant_qualification.qualification_id'] = is_null($this->input->post('staff_applicant_qualification_qualification_id')) ? '' : $this->input->post('staff_applicant_qualification_qualification_id');
    $staff_applicant_qualification_delete['staff_applicant_qualification.registration_number'] = is_null($this->input->post('staff_applicant_qualification_registration_number')) ? '' : $this->input->post('staff_applicant_qualification_registration_number');
    $staff_applicant_qualification_delete['staff_applicant_qualification.staff_id'] = is_null($this->input->post('staff_applicant_qualification_staff_id')) ? '' : $this->input->post('staff_applicant_qualification_staff_id');
    $staff_applicant_qualification_delete['staff_applicant_qualification.to_date'] = is_null($this->input->post('staff_applicant_qualification_to_date')) ? '' : $this->input->post('staff_applicant_qualification_to_date');
    $this->db->delete('staff_applicant_qualification', array('id' => $staff_applicant_qualification_delete['id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_applicant_qualification_delete);
  }
  function staff_applicant_qualification_get_records($applicant_id,$college_id,$qualification_id,$qualification_id,$staff_id,$id) {
    $staff_applicant_qualification_filters['staff_applicant.applicant_id'] = $this->session->staff_applicant_applicant_id;
    $staff_applicant_qualification_filters['staff_applicant_college.college_id'] = $this->session->staff_applicant_college_college_id;
    $staff_applicant_qualification_filters['qualification.qualification_id'] = $this->session->qualification_qualification_id;
    $staff_applicant_qualification_filters['staff_applicant_qualification_master.qualification_id'] = $this->session->staff_applicant_qualification_master_qualification_id;
    $staff_applicant_qualification_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $staff_applicant_qualification_filters['staff_applicant_qualification.id'] = $this->session->staff_applicant_qualification_id;
    $staff_applicant_qualification_filters['staff_applicant.applicant_id'] = $staff_applicant_applicant_id;
    $staff_applicant_qualification_filters['staff_applicant_college.college_id'] = $staff_applicant_college_college_id;
    $staff_applicant_qualification_filters['qualification.qualification_id'] = $qualification_qualification_id;
    $staff_applicant_qualification_filters['staff_applicant_qualification_master.qualification_id'] = $staff_applicant_qualification_master_qualification_id;
    $staff_applicant_qualification_filters['staff.staff_id'] = $staff_staff_id;
    $staff_applicant_qualification_filters['staff_applicant_qualification.id'] = $staff_applicant_qualification_id;
    $staff_applicant_qualification_filters['staff_applicant_qualification.applicant_id'] = is_null($this->input->post('staff_applicant_qualification_applicant_id')) ? '' : $this->input->post('staff_applicant_qualification_applicant_id');
    $staff_applicant_qualification_filters['staff_applicant_qualification.college_id'] = is_null($this->input->post('staff_applicant_qualification_college_id')) ? '' : $this->input->post('staff_applicant_qualification_college_id');
    $staff_applicant_qualification_filters['staff_applicant_qualification.from_date'] = is_null($this->input->post('staff_applicant_qualification_from_date')) ? '' : $this->input->post('staff_applicant_qualification_from_date');
    $staff_applicant_qualification_filters['staff_applicant_qualification.qualification_id'] = is_null($this->input->post('staff_applicant_qualification_qualification_id')) ? '' : $this->input->post('staff_applicant_qualification_qualification_id');
    $staff_applicant_qualification_filters['staff_applicant_qualification.registration_number'] = is_null($this->input->post('staff_applicant_qualification_registration_number')) ? '' : $this->input->post('staff_applicant_qualification_registration_number');
    $staff_applicant_qualification_filters['staff_applicant_qualification.staff_id'] = is_null($this->input->post('staff_applicant_qualification_staff_id')) ? '' : $this->input->post('staff_applicant_qualification_staff_id');
    $staff_applicant_qualification_filters['staff_applicant_qualification.to_date'] = is_null($this->input->post('staff_applicant_qualification_to_date')) ? '' : $this->input->post('staff_applicant_qualification_to_date');
    $this->session->set_userdata('staff_applicant.applicant_id', $staff_applicant_qualification_filters['staff_applicant.applicant_id']);
    $this->session->set_userdata('staff_applicant_college.college_id', $staff_applicant_qualification_filters['staff_applicant_college.college_id']);
    $this->session->set_userdata('qualification.qualification_id', $staff_applicant_qualification_filters['qualification.qualification_id']);
    $this->session->set_userdata('staff_applicant_qualification_master.qualification_id', $staff_applicant_qualification_filters['staff_applicant_qualification_master.qualification_id']);
    $this->session->set_userdata('staff.staff_id', $staff_applicant_qualification_filters['staff.staff_id']);
    $this->session->set_userdata('staff_applicant_qualification.id', $staff_applicant_qualification_filters['staff_applicant_qualification.id']);
    $this->db->select('staff_applicant.applicant_id AS staff_applicant_qualification_applicant_id, staff_applicant_college.college_id AS staff_applicant_qualification_college_id,
    qualification.qualification_id AS staff_applicant_qualification_qualification_id, staff_applicant_qualification_master.qualification_id AS staff_applicant_qualification_qualification_id,
    staff.staff_id AS staff_applicant_qualification_staff_id, staff_applicant_qualification.applicant_id AS staff_applicant_qualification_applicant_id,
    staff_applicant_qualification.college_id AS staff_applicant_qualification_college_id, staff_applicant_qualification.from_date AS staff_applicant_qualification_from_date,
    staff_applicant_qualification.id AS staff_applicant_qualification_id, staff_applicant_qualification.qualification_id AS staff_applicant_qualification_qualification_id,
    staff_applicant_qualification.registration_number AS staff_applicant_qualification_registration_number, staff_applicant_qualification.staff_id AS staff_applicant_qualification_staff_id,
    staff_applicant_qualification.to_date AS staff_applicant_qualification_to_date')->from('staff_applicant_qualification');
    $this->db->join('staff_applicant', 'staff_applicant_qualification.applicant_id = staff_applicant.applicant_id', 'left');
    $this->db->join('staff_applicant_college', 'staff_applicant_qualification.college_id = staff_applicant_college.college_id', 'left');
    $this->db->join('qualification', 'staff_applicant_qualification.qualification_id = qualification.qualification_id', 'left');
    $this->db->join('staff_applicant_qualification_master', 'staff_applicant_qualification.qualification_id = staff_applicant_qualification_master.qualification_id', 'left');
    $this->db->join('staff', 'staff_applicant_qualification.staff_id = staff.staff_id', 'left');
    $this->db->where($staff_applicant_qualification_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $staff_applicant_qualification_filters);
  }
}