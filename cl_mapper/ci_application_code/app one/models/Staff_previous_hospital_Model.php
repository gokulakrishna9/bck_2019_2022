<?php class Staff_previous_hospital_model extends CI_Model {
  function staff_previous_hospital_create($district_district_id) {
    $staff_previous_hospital_post = [];
    $staff_previous_hospital_post['district.district_id'] = $this->session->district_district_id;
    $staff_previous_hospital_post['district.district_id'] = $district_district_id;
    $staff_previous_hospital_post['address'] = is_null($this->input->post('address')) ? '' : $this->input->post('address');
    $staff_previous_hospital_post['district_id'] = is_null($this->input->post('district_id')) ? '' : $this->input->post('district_id');
    $staff_previous_hospital_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $staff_previous_hospital_post['hospital_name'] = is_null($this->input->post('hospital_name')) ? '' : $this->input->post('hospital_name');
    $staff_previous_hospital_post['public_institution_flag'] = is_null($this->input->post('public_institution_flag')) ? '' : $this->input->post('public_institution_flag');
    $this->session->set_userdata('district.district_id', $staff_previous_hospital_post['district.district_id']);
    $this->db->insert('staff_previous_hospital', $staff_previous_hospital_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $staff_previous_hospital_post);
  }
  function staff_previous_hospital_update($district_id,$hospital_id) {
    $staff_previous_hospital_post['district.district_id'] = $this->session->district_district_id;
    $staff_previous_hospital_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $staff_previous_hospital_post['district.district_id'] = $district_district_id;
    $staff_previous_hospital_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $staff_previous_hospital_post['staff_previous_hospital.address'] = is_null($this->input->post('staff_previous_hospital_address')) ? '' : $this->input->post('staff_previous_hospital_address');
    $staff_previous_hospital_post['staff_previous_hospital.district_id'] = is_null($this->input->post('staff_previous_hospital_district_id')) ? '' : $this->input->post('staff_previous_hospital_district_id');
    $staff_previous_hospital_post['staff_previous_hospital.hospital_name'] = is_null($this->input->post('staff_previous_hospital_hospital_name')) ? '' : $this->input->post('staff_previous_hospital_hospital_name');
    $staff_previous_hospital_post['staff_previous_hospital.public_institution_flag'] = is_null($this->input->post('staff_previous_hospital_public_institution_flag')) ? '' : $this->input->post('staff_previous_hospital_public_institution_flag');
    $this->session->set_userdata('district.district_id', $staff_previous_hospital_post['district.district_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $staff_previous_hospital_post['staff_previous_hospital.hospital_id']);
    $this->db->update('staff_previous_hospital', $staff_previous_hospital_post, array('hospital_id' => $staff_previous_hospital_post['hospital_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_previous_hospital_post);
  }
  function staff_previous_hospital_delete() {
    $staff_previous_hospital_delete['staff_previous_hospital.address'] = is_null($this->input->post('staff_previous_hospital_address')) ? '' : $this->input->post('staff_previous_hospital_address');
    $staff_previous_hospital_delete['staff_previous_hospital.district_id'] = is_null($this->input->post('staff_previous_hospital_district_id')) ? '' : $this->input->post('staff_previous_hospital_district_id');
    $staff_previous_hospital_delete['staff_previous_hospital.hospital_id'] = is_null($this->input->post('staff_previous_hospital_hospital_id')) ? '' : $this->input->post('staff_previous_hospital_hospital_id');
    $staff_previous_hospital_delete['staff_previous_hospital.hospital_name'] = is_null($this->input->post('staff_previous_hospital_hospital_name')) ? '' : $this->input->post('staff_previous_hospital_hospital_name');
    $staff_previous_hospital_delete['staff_previous_hospital.public_institution_flag'] = is_null($this->input->post('staff_previous_hospital_public_institution_flag')) ? '' : $this->input->post('staff_previous_hospital_public_institution_flag');
    $this->db->delete('staff_previous_hospital', array('hospital_id' => $staff_previous_hospital_delete['hospital_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_previous_hospital_delete);
  }
  function staff_previous_hospital_get_records($district_id,$hospital_id) {
    $staff_previous_hospital_filters['district.district_id'] = $this->session->district_district_id;
    $staff_previous_hospital_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $staff_previous_hospital_filters['district.district_id'] = $district_district_id;
    $staff_previous_hospital_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $staff_previous_hospital_filters['staff_previous_hospital.address'] = is_null($this->input->post('staff_previous_hospital_address')) ? '' : $this->input->post('staff_previous_hospital_address');
    $staff_previous_hospital_filters['staff_previous_hospital.district_id'] = is_null($this->input->post('staff_previous_hospital_district_id')) ? '' : $this->input->post('staff_previous_hospital_district_id');
    $staff_previous_hospital_filters['staff_previous_hospital.hospital_name'] = is_null($this->input->post('staff_previous_hospital_hospital_name')) ? '' : $this->input->post('staff_previous_hospital_hospital_name');
    $staff_previous_hospital_filters['staff_previous_hospital.public_institution_flag'] = is_null($this->input->post('staff_previous_hospital_public_institution_flag')) ? '' : $this->input->post('staff_previous_hospital_public_institution_flag');
    $this->session->set_userdata('district.district_id', $staff_previous_hospital_filters['district.district_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $staff_previous_hospital_filters['staff_previous_hospital.hospital_id']);
    $this->db->select('district.district_id AS staff_previous_hospital_district_id, staff_previous_hospital.address AS staff_previous_hospital_address,
    staff_previous_hospital.district_id AS staff_previous_hospital_district_id, staff_previous_hospital.hospital_id AS staff_previous_hospital_hospital_id,
    staff_previous_hospital.hospital_name AS staff_previous_hospital_hospital_name, staff_previous_hospital.public_institution_flag AS staff_previous_hospital_public_institution_flag')->from('staff_previous_hospital');
    $this->db->join('district', 'staff_previous_hospital.district_id = district.district_id', 'left');
    $this->db->where($staff_previous_hospital_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $staff_previous_hospital_filters);
  }
}