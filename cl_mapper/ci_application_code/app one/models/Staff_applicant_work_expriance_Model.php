<?php class Staff_applicant_work_expriance_model extends CI_Model {
  function staff_applicant_work_expriance_create($staff_applicant_applicant_id,$hospital_hospital_id,$staff_previous_hospital_hospital_id,$staff_staff_id) {
    $staff_applicant_work_expriance_post = [];
    $staff_applicant_work_expriance_post['staff_applicant.applicant_id'] = $this->session->staff_applicant_applicant_id;
    $staff_applicant_work_expriance_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $staff_applicant_work_expriance_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $staff_applicant_work_expriance_post['staff.staff_id'] = $this->session->staff_staff_id;
    $staff_applicant_work_expriance_post['staff_applicant.applicant_id'] = $staff_applicant_applicant_id;
    $staff_applicant_work_expriance_post['hospital.hospital_id'] = $hospital_hospital_id;
    $staff_applicant_work_expriance_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $staff_applicant_work_expriance_post['staff.staff_id'] = $staff_staff_id;
    $staff_applicant_work_expriance_post['applicant_id'] = is_null($this->input->post('applicant_id')) ? '' : $this->input->post('applicant_id');
    $staff_applicant_work_expriance_post['experiance_id'] = is_null($this->input->post('experiance_id')) ? '' : $this->input->post('experiance_id');
    $staff_applicant_work_expriance_post['experiance_years'] = is_null($this->input->post('experiance_years')) ? '' : $this->input->post('experiance_years');
    $staff_applicant_work_expriance_post['from_date'] = is_null($this->input->post('from_date')) ? '' : $this->input->post('from_date');
    $staff_applicant_work_expriance_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $staff_applicant_work_expriance_post['role_id'] = is_null($this->input->post('role_id')) ? '' : $this->input->post('role_id');
    $staff_applicant_work_expriance_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $staff_applicant_work_expriance_post['to_date'] = is_null($this->input->post('to_date')) ? '' : $this->input->post('to_date');
    $this->session->set_userdata('staff_applicant.applicant_id', $staff_applicant_work_expriance_post['staff_applicant.applicant_id']);
    $this->session->set_userdata('hospital.hospital_id', $staff_applicant_work_expriance_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $staff_applicant_work_expriance_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('staff.staff_id', $staff_applicant_work_expriance_post['staff.staff_id']);
    $this->db->insert('staff_applicant_work_expriance', $staff_applicant_work_expriance_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $staff_applicant_work_expriance_post);
  }
  function staff_applicant_work_expriance_update($applicant_id,$hospital_id,$hospital_id,$staff_id,$experiance_id) {
    $staff_applicant_work_expriance_post['staff_applicant.applicant_id'] = $this->session->staff_applicant_applicant_id;
    $staff_applicant_work_expriance_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $staff_applicant_work_expriance_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $staff_applicant_work_expriance_post['staff.staff_id'] = $this->session->staff_staff_id;
    $staff_applicant_work_expriance_post['staff_applicant_work_expriance.experiance_id'] = $this->session->staff_applicant_work_expriance_experiance_id;
    $staff_applicant_work_expriance_post['staff_applicant.applicant_id'] = $staff_applicant_applicant_id;
    $staff_applicant_work_expriance_post['hospital.hospital_id'] = $hospital_hospital_id;
    $staff_applicant_work_expriance_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $staff_applicant_work_expriance_post['staff.staff_id'] = $staff_staff_id;
    $staff_applicant_work_expriance_post['staff_applicant_work_expriance.experiance_id'] = $staff_applicant_work_expriance_experiance_id;
    $staff_applicant_work_expriance_post['staff_applicant_work_expriance.applicant_id'] = is_null($this->input->post('staff_applicant_work_expriance_applicant_id')) ? '' : $this->input->post('staff_applicant_work_expriance_applicant_id');
    $staff_applicant_work_expriance_post['staff_applicant_work_expriance.experiance_years'] = is_null($this->input->post('staff_applicant_work_expriance_experiance_years')) ? '' : $this->input->post('staff_applicant_work_expriance_experiance_years');
    $staff_applicant_work_expriance_post['staff_applicant_work_expriance.from_date'] = is_null($this->input->post('staff_applicant_work_expriance_from_date')) ? '' : $this->input->post('staff_applicant_work_expriance_from_date');
    $staff_applicant_work_expriance_post['staff_applicant_work_expriance.hospital_id'] = is_null($this->input->post('staff_applicant_work_expriance_hospital_id')) ? '' : $this->input->post('staff_applicant_work_expriance_hospital_id');
    $staff_applicant_work_expriance_post['staff_applicant_work_expriance.role_id'] = is_null($this->input->post('staff_applicant_work_expriance_role_id')) ? '' : $this->input->post('staff_applicant_work_expriance_role_id');
    $staff_applicant_work_expriance_post['staff_applicant_work_expriance.staff_id'] = is_null($this->input->post('staff_applicant_work_expriance_staff_id')) ? '' : $this->input->post('staff_applicant_work_expriance_staff_id');
    $staff_applicant_work_expriance_post['staff_applicant_work_expriance.to_date'] = is_null($this->input->post('staff_applicant_work_expriance_to_date')) ? '' : $this->input->post('staff_applicant_work_expriance_to_date');
    $this->session->set_userdata('staff_applicant.applicant_id', $staff_applicant_work_expriance_post['staff_applicant.applicant_id']);
    $this->session->set_userdata('hospital.hospital_id', $staff_applicant_work_expriance_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $staff_applicant_work_expriance_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('staff.staff_id', $staff_applicant_work_expriance_post['staff.staff_id']);
    $this->session->set_userdata('staff_applicant_work_expriance.experiance_id', $staff_applicant_work_expriance_post['staff_applicant_work_expriance.experiance_id']);
    $this->db->update('staff_applicant_work_expriance', $staff_applicant_work_expriance_post, array('experiance_id' => $staff_applicant_work_expriance_post['experiance_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_applicant_work_expriance_post);
  }
  function staff_applicant_work_expriance_delete() {
    $staff_applicant_work_expriance_delete['staff_applicant_work_expriance.applicant_id'] = is_null($this->input->post('staff_applicant_work_expriance_applicant_id')) ? '' : $this->input->post('staff_applicant_work_expriance_applicant_id');
    $staff_applicant_work_expriance_delete['staff_applicant_work_expriance.experiance_id'] = is_null($this->input->post('staff_applicant_work_expriance_experiance_id')) ? '' : $this->input->post('staff_applicant_work_expriance_experiance_id');
    $staff_applicant_work_expriance_delete['staff_applicant_work_expriance.experiance_years'] = is_null($this->input->post('staff_applicant_work_expriance_experiance_years')) ? '' : $this->input->post('staff_applicant_work_expriance_experiance_years');
    $staff_applicant_work_expriance_delete['staff_applicant_work_expriance.from_date'] = is_null($this->input->post('staff_applicant_work_expriance_from_date')) ? '' : $this->input->post('staff_applicant_work_expriance_from_date');
    $staff_applicant_work_expriance_delete['staff_applicant_work_expriance.hospital_id'] = is_null($this->input->post('staff_applicant_work_expriance_hospital_id')) ? '' : $this->input->post('staff_applicant_work_expriance_hospital_id');
    $staff_applicant_work_expriance_delete['staff_applicant_work_expriance.role_id'] = is_null($this->input->post('staff_applicant_work_expriance_role_id')) ? '' : $this->input->post('staff_applicant_work_expriance_role_id');
    $staff_applicant_work_expriance_delete['staff_applicant_work_expriance.staff_id'] = is_null($this->input->post('staff_applicant_work_expriance_staff_id')) ? '' : $this->input->post('staff_applicant_work_expriance_staff_id');
    $staff_applicant_work_expriance_delete['staff_applicant_work_expriance.to_date'] = is_null($this->input->post('staff_applicant_work_expriance_to_date')) ? '' : $this->input->post('staff_applicant_work_expriance_to_date');
    $this->db->delete('staff_applicant_work_expriance', array('experiance_id' => $staff_applicant_work_expriance_delete['experiance_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_applicant_work_expriance_delete);
  }
  function staff_applicant_work_expriance_get_records($applicant_id,$hospital_id,$hospital_id,$staff_id,$experiance_id) {
    $staff_applicant_work_expriance_filters['staff_applicant.applicant_id'] = $this->session->staff_applicant_applicant_id;
    $staff_applicant_work_expriance_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $staff_applicant_work_expriance_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $staff_applicant_work_expriance_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $staff_applicant_work_expriance_filters['staff_applicant_work_expriance.experiance_id'] = $this->session->staff_applicant_work_expriance_experiance_id;
    $staff_applicant_work_expriance_filters['staff_applicant.applicant_id'] = $staff_applicant_applicant_id;
    $staff_applicant_work_expriance_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $staff_applicant_work_expriance_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $staff_applicant_work_expriance_filters['staff.staff_id'] = $staff_staff_id;
    $staff_applicant_work_expriance_filters['staff_applicant_work_expriance.experiance_id'] = $staff_applicant_work_expriance_experiance_id;
    $staff_applicant_work_expriance_filters['staff_applicant_work_expriance.applicant_id'] = is_null($this->input->post('staff_applicant_work_expriance_applicant_id')) ? '' : $this->input->post('staff_applicant_work_expriance_applicant_id');
    $staff_applicant_work_expriance_filters['staff_applicant_work_expriance.experiance_years'] = is_null($this->input->post('staff_applicant_work_expriance_experiance_years')) ? '' : $this->input->post('staff_applicant_work_expriance_experiance_years');
    $staff_applicant_work_expriance_filters['staff_applicant_work_expriance.from_date'] = is_null($this->input->post('staff_applicant_work_expriance_from_date')) ? '' : $this->input->post('staff_applicant_work_expriance_from_date');
    $staff_applicant_work_expriance_filters['staff_applicant_work_expriance.hospital_id'] = is_null($this->input->post('staff_applicant_work_expriance_hospital_id')) ? '' : $this->input->post('staff_applicant_work_expriance_hospital_id');
    $staff_applicant_work_expriance_filters['staff_applicant_work_expriance.role_id'] = is_null($this->input->post('staff_applicant_work_expriance_role_id')) ? '' : $this->input->post('staff_applicant_work_expriance_role_id');
    $staff_applicant_work_expriance_filters['staff_applicant_work_expriance.staff_id'] = is_null($this->input->post('staff_applicant_work_expriance_staff_id')) ? '' : $this->input->post('staff_applicant_work_expriance_staff_id');
    $staff_applicant_work_expriance_filters['staff_applicant_work_expriance.to_date'] = is_null($this->input->post('staff_applicant_work_expriance_to_date')) ? '' : $this->input->post('staff_applicant_work_expriance_to_date');
    $this->session->set_userdata('staff_applicant.applicant_id', $staff_applicant_work_expriance_filters['staff_applicant.applicant_id']);
    $this->session->set_userdata('hospital.hospital_id', $staff_applicant_work_expriance_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $staff_applicant_work_expriance_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('staff.staff_id', $staff_applicant_work_expriance_filters['staff.staff_id']);
    $this->session->set_userdata('staff_applicant_work_expriance.experiance_id', $staff_applicant_work_expriance_filters['staff_applicant_work_expriance.experiance_id']);
    $this->db->select('staff_applicant.applicant_id AS staff_applicant_work_expriance_applicant_id, hospital.hospital_id AS staff_applicant_work_expriance_hospital_id,
    staff_previous_hospital.hospital_id AS staff_applicant_work_expriance_hospital_id, staff.staff_id AS staff_applicant_work_expriance_staff_id,
    staff_applicant_work_expriance.applicant_id AS staff_applicant_work_expriance_applicant_id, staff_applicant_work_expriance.experiance_id AS staff_applicant_work_expriance_experiance_id,
    staff_applicant_work_expriance.experiance_years AS staff_applicant_work_expriance_experiance_years, staff_applicant_work_expriance.from_date AS staff_applicant_work_expriance_from_date,
    staff_applicant_work_expriance.hospital_id AS staff_applicant_work_expriance_hospital_id, staff_applicant_work_expriance.role_id AS staff_applicant_work_expriance_role_id,
    staff_applicant_work_expriance.staff_id AS staff_applicant_work_expriance_staff_id, staff_applicant_work_expriance.to_date AS staff_applicant_work_expriance_to_date')->from('staff_applicant_work_expriance');
    $this->db->join('staff_applicant', 'staff_applicant_work_expriance.applicant_id = staff_applicant.applicant_id', 'left');
    $this->db->join('hospital', 'staff_applicant_work_expriance.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'staff_applicant_work_expriance.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->join('staff', 'staff_applicant_work_expriance.staff_id = staff.staff_id', 'left');
    $this->db->where($staff_applicant_work_expriance_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $staff_applicant_work_expriance_filters);
  }
}