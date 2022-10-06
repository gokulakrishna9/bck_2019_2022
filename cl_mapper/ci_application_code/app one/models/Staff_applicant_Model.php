<?php class Staff_applicant_model extends CI_Model {
  function staff_applicant_create($district_district_id,$staff_recruitment_drive_drive_id,$staff_staff_id) {
    $staff_applicant_post = [];
    $staff_applicant_post['district.district_id'] = $this->session->district_district_id;
    $staff_applicant_post['staff_recruitment_drive.drive_id'] = $this->session->staff_recruitment_drive_drive_id;
    $staff_applicant_post['staff.staff_id'] = $this->session->staff_staff_id;
    $staff_applicant_post['district.district_id'] = $district_district_id;
    $staff_applicant_post['staff_recruitment_drive.drive_id'] = $staff_recruitment_drive_drive_id;
    $staff_applicant_post['staff.staff_id'] = $staff_staff_id;
    $staff_applicant_post['address'] = is_null($this->input->post('address')) ? '' : $this->input->post('address');
    $staff_applicant_post['applicant_id'] = is_null($this->input->post('applicant_id')) ? '' : $this->input->post('applicant_id');
    $staff_applicant_post['date_of_birth'] = is_null($this->input->post('date_of_birth')) ? '' : $this->input->post('date_of_birth');
    $staff_applicant_post['district_id'] = is_null($this->input->post('district_id')) ? '' : $this->input->post('district_id');
    $staff_applicant_post['drive_id'] = is_null($this->input->post('drive_id')) ? '' : $this->input->post('drive_id');
    $staff_applicant_post['email'] = is_null($this->input->post('email')) ? '' : $this->input->post('email');
    $staff_applicant_post['fathers_name'] = is_null($this->input->post('fathers_name')) ? '' : $this->input->post('fathers_name');
    $staff_applicant_post['first_name'] = is_null($this->input->post('first_name')) ? '' : $this->input->post('first_name');
    $staff_applicant_post['gender'] = is_null($this->input->post('gender')) ? '' : $this->input->post('gender');
    $staff_applicant_post['husbands_name'] = is_null($this->input->post('husbands_name')) ? '' : $this->input->post('husbands_name');
    $staff_applicant_post['last_name'] = is_null($this->input->post('last_name')) ? '' : $this->input->post('last_name');
    $staff_applicant_post['mothers_name'] = is_null($this->input->post('mothers_name')) ? '' : $this->input->post('mothers_name');
    $staff_applicant_post['phone'] = is_null($this->input->post('phone')) ? '' : $this->input->post('phone');
    $staff_applicant_post['phone_alternate'] = is_null($this->input->post('phone_alternate')) ? '' : $this->input->post('phone_alternate');
    $staff_applicant_post['place'] = is_null($this->input->post('place')) ? '' : $this->input->post('place');
    $staff_applicant_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $this->session->set_userdata('district.district_id', $staff_applicant_post['district.district_id']);
    $this->session->set_userdata('staff_recruitment_drive.drive_id', $staff_applicant_post['staff_recruitment_drive.drive_id']);
    $this->session->set_userdata('staff.staff_id', $staff_applicant_post['staff.staff_id']);
    $this->db->insert('staff_applicant', $staff_applicant_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $staff_applicant_post);
  }
  function staff_applicant_update($district_id,$drive_id,$staff_id,$applicant_id) {
    $staff_applicant_post['district.district_id'] = $this->session->district_district_id;
    $staff_applicant_post['staff_recruitment_drive.drive_id'] = $this->session->staff_recruitment_drive_drive_id;
    $staff_applicant_post['staff.staff_id'] = $this->session->staff_staff_id;
    $staff_applicant_post['staff_applicant.applicant_id'] = $this->session->staff_applicant_applicant_id;
    $staff_applicant_post['district.district_id'] = $district_district_id;
    $staff_applicant_post['staff_recruitment_drive.drive_id'] = $staff_recruitment_drive_drive_id;
    $staff_applicant_post['staff.staff_id'] = $staff_staff_id;
    $staff_applicant_post['staff_applicant.applicant_id'] = $staff_applicant_applicant_id;
    $staff_applicant_post['staff_applicant.address'] = is_null($this->input->post('staff_applicant_address')) ? '' : $this->input->post('staff_applicant_address');
    $staff_applicant_post['staff_applicant.date_of_birth'] = is_null($this->input->post('staff_applicant_date_of_birth')) ? '' : $this->input->post('staff_applicant_date_of_birth');
    $staff_applicant_post['staff_applicant.district_id'] = is_null($this->input->post('staff_applicant_district_id')) ? '' : $this->input->post('staff_applicant_district_id');
    $staff_applicant_post['staff_applicant.drive_id'] = is_null($this->input->post('staff_applicant_drive_id')) ? '' : $this->input->post('staff_applicant_drive_id');
    $staff_applicant_post['staff_applicant.email'] = is_null($this->input->post('staff_applicant_email')) ? '' : $this->input->post('staff_applicant_email');
    $staff_applicant_post['staff_applicant.fathers_name'] = is_null($this->input->post('staff_applicant_fathers_name')) ? '' : $this->input->post('staff_applicant_fathers_name');
    $staff_applicant_post['staff_applicant.first_name'] = is_null($this->input->post('staff_applicant_first_name')) ? '' : $this->input->post('staff_applicant_first_name');
    $staff_applicant_post['staff_applicant.gender'] = is_null($this->input->post('staff_applicant_gender')) ? '' : $this->input->post('staff_applicant_gender');
    $staff_applicant_post['staff_applicant.husbands_name'] = is_null($this->input->post('staff_applicant_husbands_name')) ? '' : $this->input->post('staff_applicant_husbands_name');
    $staff_applicant_post['staff_applicant.last_name'] = is_null($this->input->post('staff_applicant_last_name')) ? '' : $this->input->post('staff_applicant_last_name');
    $staff_applicant_post['staff_applicant.mothers_name'] = is_null($this->input->post('staff_applicant_mothers_name')) ? '' : $this->input->post('staff_applicant_mothers_name');
    $staff_applicant_post['staff_applicant.phone'] = is_null($this->input->post('staff_applicant_phone')) ? '' : $this->input->post('staff_applicant_phone');
    $staff_applicant_post['staff_applicant.phone_alternate'] = is_null($this->input->post('staff_applicant_phone_alternate')) ? '' : $this->input->post('staff_applicant_phone_alternate');
    $staff_applicant_post['staff_applicant.place'] = is_null($this->input->post('staff_applicant_place')) ? '' : $this->input->post('staff_applicant_place');
    $staff_applicant_post['staff_applicant.staff_id'] = is_null($this->input->post('staff_applicant_staff_id')) ? '' : $this->input->post('staff_applicant_staff_id');
    $this->session->set_userdata('district.district_id', $staff_applicant_post['district.district_id']);
    $this->session->set_userdata('staff_recruitment_drive.drive_id', $staff_applicant_post['staff_recruitment_drive.drive_id']);
    $this->session->set_userdata('staff.staff_id', $staff_applicant_post['staff.staff_id']);
    $this->session->set_userdata('staff_applicant.applicant_id', $staff_applicant_post['staff_applicant.applicant_id']);
    $this->db->update('staff_applicant', $staff_applicant_post, array('applicant_id' => $staff_applicant_post['applicant_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_applicant_post);
  }
  function staff_applicant_delete() {
    $staff_applicant_delete['staff_applicant.address'] = is_null($this->input->post('staff_applicant_address')) ? '' : $this->input->post('staff_applicant_address');
    $staff_applicant_delete['staff_applicant.applicant_id'] = is_null($this->input->post('staff_applicant_applicant_id')) ? '' : $this->input->post('staff_applicant_applicant_id');
    $staff_applicant_delete['staff_applicant.date_of_birth'] = is_null($this->input->post('staff_applicant_date_of_birth')) ? '' : $this->input->post('staff_applicant_date_of_birth');
    $staff_applicant_delete['staff_applicant.district_id'] = is_null($this->input->post('staff_applicant_district_id')) ? '' : $this->input->post('staff_applicant_district_id');
    $staff_applicant_delete['staff_applicant.drive_id'] = is_null($this->input->post('staff_applicant_drive_id')) ? '' : $this->input->post('staff_applicant_drive_id');
    $staff_applicant_delete['staff_applicant.email'] = is_null($this->input->post('staff_applicant_email')) ? '' : $this->input->post('staff_applicant_email');
    $staff_applicant_delete['staff_applicant.fathers_name'] = is_null($this->input->post('staff_applicant_fathers_name')) ? '' : $this->input->post('staff_applicant_fathers_name');
    $staff_applicant_delete['staff_applicant.first_name'] = is_null($this->input->post('staff_applicant_first_name')) ? '' : $this->input->post('staff_applicant_first_name');
    $staff_applicant_delete['staff_applicant.gender'] = is_null($this->input->post('staff_applicant_gender')) ? '' : $this->input->post('staff_applicant_gender');
    $staff_applicant_delete['staff_applicant.husbands_name'] = is_null($this->input->post('staff_applicant_husbands_name')) ? '' : $this->input->post('staff_applicant_husbands_name');
    $staff_applicant_delete['staff_applicant.last_name'] = is_null($this->input->post('staff_applicant_last_name')) ? '' : $this->input->post('staff_applicant_last_name');
    $staff_applicant_delete['staff_applicant.mothers_name'] = is_null($this->input->post('staff_applicant_mothers_name')) ? '' : $this->input->post('staff_applicant_mothers_name');
    $staff_applicant_delete['staff_applicant.phone'] = is_null($this->input->post('staff_applicant_phone')) ? '' : $this->input->post('staff_applicant_phone');
    $staff_applicant_delete['staff_applicant.phone_alternate'] = is_null($this->input->post('staff_applicant_phone_alternate')) ? '' : $this->input->post('staff_applicant_phone_alternate');
    $staff_applicant_delete['staff_applicant.place'] = is_null($this->input->post('staff_applicant_place')) ? '' : $this->input->post('staff_applicant_place');
    $staff_applicant_delete['staff_applicant.staff_id'] = is_null($this->input->post('staff_applicant_staff_id')) ? '' : $this->input->post('staff_applicant_staff_id');
    $this->db->delete('staff_applicant', array('applicant_id' => $staff_applicant_delete['applicant_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_applicant_delete);
  }
  function staff_applicant_get_records($district_id,$drive_id,$staff_id,$applicant_id) {
    $staff_applicant_filters['district.district_id'] = $this->session->district_district_id;
    $staff_applicant_filters['staff_recruitment_drive.drive_id'] = $this->session->staff_recruitment_drive_drive_id;
    $staff_applicant_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $staff_applicant_filters['staff_applicant.applicant_id'] = $this->session->staff_applicant_applicant_id;
    $staff_applicant_filters['district.district_id'] = $district_district_id;
    $staff_applicant_filters['staff_recruitment_drive.drive_id'] = $staff_recruitment_drive_drive_id;
    $staff_applicant_filters['staff.staff_id'] = $staff_staff_id;
    $staff_applicant_filters['staff_applicant.applicant_id'] = $staff_applicant_applicant_id;
    $staff_applicant_filters['staff_applicant.address'] = is_null($this->input->post('staff_applicant_address')) ? '' : $this->input->post('staff_applicant_address');
    $staff_applicant_filters['staff_applicant.date_of_birth'] = is_null($this->input->post('staff_applicant_date_of_birth')) ? '' : $this->input->post('staff_applicant_date_of_birth');
    $staff_applicant_filters['staff_applicant.district_id'] = is_null($this->input->post('staff_applicant_district_id')) ? '' : $this->input->post('staff_applicant_district_id');
    $staff_applicant_filters['staff_applicant.drive_id'] = is_null($this->input->post('staff_applicant_drive_id')) ? '' : $this->input->post('staff_applicant_drive_id');
    $staff_applicant_filters['staff_applicant.email'] = is_null($this->input->post('staff_applicant_email')) ? '' : $this->input->post('staff_applicant_email');
    $staff_applicant_filters['staff_applicant.fathers_name'] = is_null($this->input->post('staff_applicant_fathers_name')) ? '' : $this->input->post('staff_applicant_fathers_name');
    $staff_applicant_filters['staff_applicant.first_name'] = is_null($this->input->post('staff_applicant_first_name')) ? '' : $this->input->post('staff_applicant_first_name');
    $staff_applicant_filters['staff_applicant.gender'] = is_null($this->input->post('staff_applicant_gender')) ? '' : $this->input->post('staff_applicant_gender');
    $staff_applicant_filters['staff_applicant.husbands_name'] = is_null($this->input->post('staff_applicant_husbands_name')) ? '' : $this->input->post('staff_applicant_husbands_name');
    $staff_applicant_filters['staff_applicant.last_name'] = is_null($this->input->post('staff_applicant_last_name')) ? '' : $this->input->post('staff_applicant_last_name');
    $staff_applicant_filters['staff_applicant.mothers_name'] = is_null($this->input->post('staff_applicant_mothers_name')) ? '' : $this->input->post('staff_applicant_mothers_name');
    $staff_applicant_filters['staff_applicant.phone'] = is_null($this->input->post('staff_applicant_phone')) ? '' : $this->input->post('staff_applicant_phone');
    $staff_applicant_filters['staff_applicant.phone_alternate'] = is_null($this->input->post('staff_applicant_phone_alternate')) ? '' : $this->input->post('staff_applicant_phone_alternate');
    $staff_applicant_filters['staff_applicant.place'] = is_null($this->input->post('staff_applicant_place')) ? '' : $this->input->post('staff_applicant_place');
    $staff_applicant_filters['staff_applicant.staff_id'] = is_null($this->input->post('staff_applicant_staff_id')) ? '' : $this->input->post('staff_applicant_staff_id');
    $this->session->set_userdata('district.district_id', $staff_applicant_filters['district.district_id']);
    $this->session->set_userdata('staff_recruitment_drive.drive_id', $staff_applicant_filters['staff_recruitment_drive.drive_id']);
    $this->session->set_userdata('staff.staff_id', $staff_applicant_filters['staff.staff_id']);
    $this->session->set_userdata('staff_applicant.applicant_id', $staff_applicant_filters['staff_applicant.applicant_id']);
    $this->db->select('district.district_id AS staff_applicant_district_id, staff_recruitment_drive.drive_id AS staff_applicant_drive_id,
    staff.staff_id AS staff_applicant_staff_id, staff_applicant.address AS staff_applicant_address,
    staff_applicant.applicant_id AS staff_applicant_applicant_id, staff_applicant.date_of_birth AS staff_applicant_date_of_birth,
    staff_applicant.district_id AS staff_applicant_district_id, staff_applicant.drive_id AS staff_applicant_drive_id,
    staff_applicant.email AS staff_applicant_email, staff_applicant.fathers_name AS staff_applicant_fathers_name,
    staff_applicant.first_name AS staff_applicant_first_name, staff_applicant.gender AS staff_applicant_gender,
    staff_applicant.husbands_name AS staff_applicant_husbands_name, staff_applicant.last_name AS staff_applicant_last_name,
    staff_applicant.mothers_name AS staff_applicant_mothers_name, staff_applicant.phone AS staff_applicant_phone,
    staff_applicant.phone_alternate AS staff_applicant_phone_alternate, staff_applicant.place AS staff_applicant_place,
    staff_applicant.staff_id AS staff_applicant_staff_id')->from('staff_applicant');
    $this->db->join('district', 'staff_applicant.district_id = district.district_id', 'left');
    $this->db->join('staff_recruitment_drive', 'staff_applicant.drive_id = staff_recruitment_drive.drive_id', 'left');
    $this->db->join('staff', 'staff_applicant.staff_id = staff.staff_id', 'left');
    $this->db->where($staff_applicant_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $staff_applicant_filters);
  }
}