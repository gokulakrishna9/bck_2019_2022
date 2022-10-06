<?php class Blood_donor_model extends CI_Model {
  function blood_donor_create($hospital_hospital_id,$staff_previous_hospital_hospital_id) {
    $blood_donor_post = [];
    $blood_donor_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_donor_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_donor_post['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_donor_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_donor_post['address'] = is_null($this->input->post('address')) ? '' : $this->input->post('address');
    $blood_donor_post['age'] = is_null($this->input->post('age')) ? '' : $this->input->post('age');
    $blood_donor_post['alerts'] = is_null($this->input->post('alerts')) ? '' : $this->input->post('alerts');
    $blood_donor_post['blood_group'] = is_null($this->input->post('blood_group')) ? '' : $this->input->post('blood_group');
    $blood_donor_post['dob'] = is_null($this->input->post('dob')) ? '' : $this->input->post('dob');
    $blood_donor_post['donor_id'] = is_null($this->input->post('donor_id')) ? '' : $this->input->post('donor_id');
    $blood_donor_post['email'] = is_null($this->input->post('email')) ? '' : $this->input->post('email');
    $blood_donor_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $blood_donor_post['maritial_status'] = is_null($this->input->post('maritial_status')) ? '' : $this->input->post('maritial_status');
    $blood_donor_post['name'] = is_null($this->input->post('name')) ? '' : $this->input->post('name');
    $blood_donor_post['occupation'] = is_null($this->input->post('occupation')) ? '' : $this->input->post('occupation');
    $blood_donor_post['parent_spouse'] = is_null($this->input->post('parent_spouse')) ? '' : $this->input->post('parent_spouse');
    $blood_donor_post['phone'] = is_null($this->input->post('phone')) ? '' : $this->input->post('phone');
    $blood_donor_post['sex'] = is_null($this->input->post('sex')) ? '' : $this->input->post('sex');
    $blood_donor_post['sub_group'] = is_null($this->input->post('sub_group')) ? '' : $this->input->post('sub_group');
    $this->session->set_userdata('hospital.hospital_id', $blood_donor_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_donor_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('blood_donor', $blood_donor_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $blood_donor_post);
  }
  function blood_donor_update($hospital_id,$hospital_id,$donor_id) {
    $blood_donor_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_donor_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_donor_post['blood_donor.donor_id'] = $this->session->blood_donor_donor_id;
    $blood_donor_post['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_donor_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_donor_post['blood_donor.donor_id'] = $blood_donor_donor_id;
    $blood_donor_post['blood_donor.address'] = is_null($this->input->post('blood_donor_address')) ? '' : $this->input->post('blood_donor_address');
    $blood_donor_post['blood_donor.age'] = is_null($this->input->post('blood_donor_age')) ? '' : $this->input->post('blood_donor_age');
    $blood_donor_post['blood_donor.alerts'] = is_null($this->input->post('blood_donor_alerts')) ? '' : $this->input->post('blood_donor_alerts');
    $blood_donor_post['blood_donor.blood_group'] = is_null($this->input->post('blood_donor_blood_group')) ? '' : $this->input->post('blood_donor_blood_group');
    $blood_donor_post['blood_donor.dob'] = is_null($this->input->post('blood_donor_dob')) ? '' : $this->input->post('blood_donor_dob');
    $blood_donor_post['blood_donor.email'] = is_null($this->input->post('blood_donor_email')) ? '' : $this->input->post('blood_donor_email');
    $blood_donor_post['blood_donor.hospital_id'] = is_null($this->input->post('blood_donor_hospital_id')) ? '' : $this->input->post('blood_donor_hospital_id');
    $blood_donor_post['blood_donor.maritial_status'] = is_null($this->input->post('blood_donor_maritial_status')) ? '' : $this->input->post('blood_donor_maritial_status');
    $blood_donor_post['blood_donor.name'] = is_null($this->input->post('blood_donor_name')) ? '' : $this->input->post('blood_donor_name');
    $blood_donor_post['blood_donor.occupation'] = is_null($this->input->post('blood_donor_occupation')) ? '' : $this->input->post('blood_donor_occupation');
    $blood_donor_post['blood_donor.parent_spouse'] = is_null($this->input->post('blood_donor_parent_spouse')) ? '' : $this->input->post('blood_donor_parent_spouse');
    $blood_donor_post['blood_donor.phone'] = is_null($this->input->post('blood_donor_phone')) ? '' : $this->input->post('blood_donor_phone');
    $blood_donor_post['blood_donor.sex'] = is_null($this->input->post('blood_donor_sex')) ? '' : $this->input->post('blood_donor_sex');
    $blood_donor_post['blood_donor.sub_group'] = is_null($this->input->post('blood_donor_sub_group')) ? '' : $this->input->post('blood_donor_sub_group');
    $this->session->set_userdata('hospital.hospital_id', $blood_donor_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_donor_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('blood_donor.donor_id', $blood_donor_post['blood_donor.donor_id']);
    $this->db->update('blood_donor', $blood_donor_post, array('donor_id' => $blood_donor_post['donor_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_donor_post);
  }
  function blood_donor_delete() {
    $blood_donor_delete['blood_donor.address'] = is_null($this->input->post('blood_donor_address')) ? '' : $this->input->post('blood_donor_address');
    $blood_donor_delete['blood_donor.age'] = is_null($this->input->post('blood_donor_age')) ? '' : $this->input->post('blood_donor_age');
    $blood_donor_delete['blood_donor.alerts'] = is_null($this->input->post('blood_donor_alerts')) ? '' : $this->input->post('blood_donor_alerts');
    $blood_donor_delete['blood_donor.blood_group'] = is_null($this->input->post('blood_donor_blood_group')) ? '' : $this->input->post('blood_donor_blood_group');
    $blood_donor_delete['blood_donor.dob'] = is_null($this->input->post('blood_donor_dob')) ? '' : $this->input->post('blood_donor_dob');
    $blood_donor_delete['blood_donor.donor_id'] = is_null($this->input->post('blood_donor_donor_id')) ? '' : $this->input->post('blood_donor_donor_id');
    $blood_donor_delete['blood_donor.email'] = is_null($this->input->post('blood_donor_email')) ? '' : $this->input->post('blood_donor_email');
    $blood_donor_delete['blood_donor.hospital_id'] = is_null($this->input->post('blood_donor_hospital_id')) ? '' : $this->input->post('blood_donor_hospital_id');
    $blood_donor_delete['blood_donor.maritial_status'] = is_null($this->input->post('blood_donor_maritial_status')) ? '' : $this->input->post('blood_donor_maritial_status');
    $blood_donor_delete['blood_donor.name'] = is_null($this->input->post('blood_donor_name')) ? '' : $this->input->post('blood_donor_name');
    $blood_donor_delete['blood_donor.occupation'] = is_null($this->input->post('blood_donor_occupation')) ? '' : $this->input->post('blood_donor_occupation');
    $blood_donor_delete['blood_donor.parent_spouse'] = is_null($this->input->post('blood_donor_parent_spouse')) ? '' : $this->input->post('blood_donor_parent_spouse');
    $blood_donor_delete['blood_donor.phone'] = is_null($this->input->post('blood_donor_phone')) ? '' : $this->input->post('blood_donor_phone');
    $blood_donor_delete['blood_donor.sex'] = is_null($this->input->post('blood_donor_sex')) ? '' : $this->input->post('blood_donor_sex');
    $blood_donor_delete['blood_donor.sub_group'] = is_null($this->input->post('blood_donor_sub_group')) ? '' : $this->input->post('blood_donor_sub_group');
    $this->db->delete('blood_donor', array('donor_id' => $blood_donor_delete['donor_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_donor_delete);
  }
  function blood_donor_get_records($hospital_id,$hospital_id,$donor_id) {
    $blood_donor_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_donor_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_donor_filters['blood_donor.donor_id'] = $this->session->blood_donor_donor_id;
    $blood_donor_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_donor_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_donor_filters['blood_donor.donor_id'] = $blood_donor_donor_id;
    $blood_donor_filters['blood_donor.address'] = is_null($this->input->post('blood_donor_address')) ? '' : $this->input->post('blood_donor_address');
    $blood_donor_filters['blood_donor.age'] = is_null($this->input->post('blood_donor_age')) ? '' : $this->input->post('blood_donor_age');
    $blood_donor_filters['blood_donor.alerts'] = is_null($this->input->post('blood_donor_alerts')) ? '' : $this->input->post('blood_donor_alerts');
    $blood_donor_filters['blood_donor.blood_group'] = is_null($this->input->post('blood_donor_blood_group')) ? '' : $this->input->post('blood_donor_blood_group');
    $blood_donor_filters['blood_donor.dob'] = is_null($this->input->post('blood_donor_dob')) ? '' : $this->input->post('blood_donor_dob');
    $blood_donor_filters['blood_donor.email'] = is_null($this->input->post('blood_donor_email')) ? '' : $this->input->post('blood_donor_email');
    $blood_donor_filters['blood_donor.hospital_id'] = is_null($this->input->post('blood_donor_hospital_id')) ? '' : $this->input->post('blood_donor_hospital_id');
    $blood_donor_filters['blood_donor.maritial_status'] = is_null($this->input->post('blood_donor_maritial_status')) ? '' : $this->input->post('blood_donor_maritial_status');
    $blood_donor_filters['blood_donor.name'] = is_null($this->input->post('blood_donor_name')) ? '' : $this->input->post('blood_donor_name');
    $blood_donor_filters['blood_donor.occupation'] = is_null($this->input->post('blood_donor_occupation')) ? '' : $this->input->post('blood_donor_occupation');
    $blood_donor_filters['blood_donor.parent_spouse'] = is_null($this->input->post('blood_donor_parent_spouse')) ? '' : $this->input->post('blood_donor_parent_spouse');
    $blood_donor_filters['blood_donor.phone'] = is_null($this->input->post('blood_donor_phone')) ? '' : $this->input->post('blood_donor_phone');
    $blood_donor_filters['blood_donor.sex'] = is_null($this->input->post('blood_donor_sex')) ? '' : $this->input->post('blood_donor_sex');
    $blood_donor_filters['blood_donor.sub_group'] = is_null($this->input->post('blood_donor_sub_group')) ? '' : $this->input->post('blood_donor_sub_group');
    $this->session->set_userdata('hospital.hospital_id', $blood_donor_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_donor_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('blood_donor.donor_id', $blood_donor_filters['blood_donor.donor_id']);
    $this->db->select('hospital.hospital_id AS blood_donor_hospital_id, staff_previous_hospital.hospital_id AS blood_donor_hospital_id,
    blood_donor.address AS blood_donor_address, blood_donor.age AS blood_donor_age,
    blood_donor.alerts AS blood_donor_alerts, blood_donor.blood_group AS blood_donor_blood_group,
    blood_donor.dob AS blood_donor_dob, blood_donor.donor_id AS blood_donor_donor_id,
    blood_donor.email AS blood_donor_email, blood_donor.hospital_id AS blood_donor_hospital_id,
    blood_donor.maritial_status AS blood_donor_maritial_status, blood_donor.name AS blood_donor_name,
    blood_donor.occupation AS blood_donor_occupation, blood_donor.parent_spouse AS blood_donor_parent_spouse,
    blood_donor.phone AS blood_donor_phone, blood_donor.sex AS blood_donor_sex,
    blood_donor.sub_group AS blood_donor_sub_group')->from('blood_donor');
    $this->db->join('hospital', 'blood_donor.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'blood_donor.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($blood_donor_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $blood_donor_filters);
  }
}