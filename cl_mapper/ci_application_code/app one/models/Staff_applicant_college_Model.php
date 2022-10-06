<?php class Staff_applicant_college_model extends CI_Model {
  function staff_applicant_college_create($district_district_id) {
    $staff_applicant_college_post = [];
    $staff_applicant_college_post['district.district_id'] = $this->session->district_district_id;
    $staff_applicant_college_post['district.district_id'] = $district_district_id;
    $staff_applicant_college_post['address'] = is_null($this->input->post('address')) ? '' : $this->input->post('address');
    $staff_applicant_college_post['affiliated_to'] = is_null($this->input->post('affiliated_to')) ? '' : $this->input->post('affiliated_to');
    $staff_applicant_college_post['college_id'] = is_null($this->input->post('college_id')) ? '' : $this->input->post('college_id');
    $staff_applicant_college_post['college_name'] = is_null($this->input->post('college_name')) ? '' : $this->input->post('college_name');
    $staff_applicant_college_post['district_id'] = is_null($this->input->post('district_id')) ? '' : $this->input->post('district_id');
    $staff_applicant_college_post['email'] = is_null($this->input->post('email')) ? '' : $this->input->post('email');
    $staff_applicant_college_post['public_institution_flag'] = is_null($this->input->post('public_institution_flag')) ? '' : $this->input->post('public_institution_flag');
    $staff_applicant_college_post['university_flag'] = is_null($this->input->post('university_flag')) ? '' : $this->input->post('university_flag');
    $this->session->set_userdata('district.district_id', $staff_applicant_college_post['district.district_id']);
    $this->db->insert('staff_applicant_college', $staff_applicant_college_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $staff_applicant_college_post);
  }
  function staff_applicant_college_update($district_id,$college_id) {
    $staff_applicant_college_post['district.district_id'] = $this->session->district_district_id;
    $staff_applicant_college_post['staff_applicant_college.college_id'] = $this->session->staff_applicant_college_college_id;
    $staff_applicant_college_post['district.district_id'] = $district_district_id;
    $staff_applicant_college_post['staff_applicant_college.college_id'] = $staff_applicant_college_college_id;
    $staff_applicant_college_post['staff_applicant_college.address'] = is_null($this->input->post('staff_applicant_college_address')) ? '' : $this->input->post('staff_applicant_college_address');
    $staff_applicant_college_post['staff_applicant_college.affiliated_to'] = is_null($this->input->post('staff_applicant_college_affiliated_to')) ? '' : $this->input->post('staff_applicant_college_affiliated_to');
    $staff_applicant_college_post['staff_applicant_college.college_name'] = is_null($this->input->post('staff_applicant_college_college_name')) ? '' : $this->input->post('staff_applicant_college_college_name');
    $staff_applicant_college_post['staff_applicant_college.district_id'] = is_null($this->input->post('staff_applicant_college_district_id')) ? '' : $this->input->post('staff_applicant_college_district_id');
    $staff_applicant_college_post['staff_applicant_college.email'] = is_null($this->input->post('staff_applicant_college_email')) ? '' : $this->input->post('staff_applicant_college_email');
    $staff_applicant_college_post['staff_applicant_college.public_institution_flag'] = is_null($this->input->post('staff_applicant_college_public_institution_flag')) ? '' : $this->input->post('staff_applicant_college_public_institution_flag');
    $staff_applicant_college_post['staff_applicant_college.university_flag'] = is_null($this->input->post('staff_applicant_college_university_flag')) ? '' : $this->input->post('staff_applicant_college_university_flag');
    $this->session->set_userdata('district.district_id', $staff_applicant_college_post['district.district_id']);
    $this->session->set_userdata('staff_applicant_college.college_id', $staff_applicant_college_post['staff_applicant_college.college_id']);
    $this->db->update('staff_applicant_college', $staff_applicant_college_post, array('college_id' => $staff_applicant_college_post['college_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_applicant_college_post);
  }
  function staff_applicant_college_delete() {
    $staff_applicant_college_delete['staff_applicant_college.address'] = is_null($this->input->post('staff_applicant_college_address')) ? '' : $this->input->post('staff_applicant_college_address');
    $staff_applicant_college_delete['staff_applicant_college.affiliated_to'] = is_null($this->input->post('staff_applicant_college_affiliated_to')) ? '' : $this->input->post('staff_applicant_college_affiliated_to');
    $staff_applicant_college_delete['staff_applicant_college.college_id'] = is_null($this->input->post('staff_applicant_college_college_id')) ? '' : $this->input->post('staff_applicant_college_college_id');
    $staff_applicant_college_delete['staff_applicant_college.college_name'] = is_null($this->input->post('staff_applicant_college_college_name')) ? '' : $this->input->post('staff_applicant_college_college_name');
    $staff_applicant_college_delete['staff_applicant_college.district_id'] = is_null($this->input->post('staff_applicant_college_district_id')) ? '' : $this->input->post('staff_applicant_college_district_id');
    $staff_applicant_college_delete['staff_applicant_college.email'] = is_null($this->input->post('staff_applicant_college_email')) ? '' : $this->input->post('staff_applicant_college_email');
    $staff_applicant_college_delete['staff_applicant_college.public_institution_flag'] = is_null($this->input->post('staff_applicant_college_public_institution_flag')) ? '' : $this->input->post('staff_applicant_college_public_institution_flag');
    $staff_applicant_college_delete['staff_applicant_college.university_flag'] = is_null($this->input->post('staff_applicant_college_university_flag')) ? '' : $this->input->post('staff_applicant_college_university_flag');
    $this->db->delete('staff_applicant_college', array('college_id' => $staff_applicant_college_delete['college_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_applicant_college_delete);
  }
  function staff_applicant_college_get_records($district_id,$college_id) {
    $staff_applicant_college_filters['district.district_id'] = $this->session->district_district_id;
    $staff_applicant_college_filters['staff_applicant_college.college_id'] = $this->session->staff_applicant_college_college_id;
    $staff_applicant_college_filters['district.district_id'] = $district_district_id;
    $staff_applicant_college_filters['staff_applicant_college.college_id'] = $staff_applicant_college_college_id;
    $staff_applicant_college_filters['staff_applicant_college.address'] = is_null($this->input->post('staff_applicant_college_address')) ? '' : $this->input->post('staff_applicant_college_address');
    $staff_applicant_college_filters['staff_applicant_college.affiliated_to'] = is_null($this->input->post('staff_applicant_college_affiliated_to')) ? '' : $this->input->post('staff_applicant_college_affiliated_to');
    $staff_applicant_college_filters['staff_applicant_college.college_name'] = is_null($this->input->post('staff_applicant_college_college_name')) ? '' : $this->input->post('staff_applicant_college_college_name');
    $staff_applicant_college_filters['staff_applicant_college.district_id'] = is_null($this->input->post('staff_applicant_college_district_id')) ? '' : $this->input->post('staff_applicant_college_district_id');
    $staff_applicant_college_filters['staff_applicant_college.email'] = is_null($this->input->post('staff_applicant_college_email')) ? '' : $this->input->post('staff_applicant_college_email');
    $staff_applicant_college_filters['staff_applicant_college.public_institution_flag'] = is_null($this->input->post('staff_applicant_college_public_institution_flag')) ? '' : $this->input->post('staff_applicant_college_public_institution_flag');
    $staff_applicant_college_filters['staff_applicant_college.university_flag'] = is_null($this->input->post('staff_applicant_college_university_flag')) ? '' : $this->input->post('staff_applicant_college_university_flag');
    $this->session->set_userdata('district.district_id', $staff_applicant_college_filters['district.district_id']);
    $this->session->set_userdata('staff_applicant_college.college_id', $staff_applicant_college_filters['staff_applicant_college.college_id']);
    $this->db->select('district.district_id AS staff_applicant_college_district_id, staff_applicant_college.address AS staff_applicant_college_address,
    staff_applicant_college.affiliated_to AS staff_applicant_college_affiliated_to, staff_applicant_college.college_id AS staff_applicant_college_college_id,
    staff_applicant_college.college_name AS staff_applicant_college_college_name, staff_applicant_college.district_id AS staff_applicant_college_district_id,
    staff_applicant_college.email AS staff_applicant_college_email, staff_applicant_college.public_institution_flag AS staff_applicant_college_public_institution_flag,
    staff_applicant_college.university_flag AS staff_applicant_college_university_flag')->from('staff_applicant_college');
    $this->db->join('district', 'staff_applicant_college.district_id = district.district_id', 'left');
    $this->db->where($staff_applicant_college_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $staff_applicant_college_filters);
  }
}