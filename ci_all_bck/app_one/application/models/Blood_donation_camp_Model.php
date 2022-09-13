<?php class Blood_donation_camp_model extends CI_Model {
  function blood_donation_camp_create() {
    $blood_donation_camp_post = [];
    $blood_donation_camp_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_donation_camp_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_donation_camp_post['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_donation_camp_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_donation_camp_post['camp_id'] = is_null($this->input->post('camp_id')) ? '' : $this->input->post('camp_id');
    $blood_donation_camp_post['camp_name'] = is_null($this->input->post('camp_name')) ? '' : $this->input->post('camp_name');
    $blood_donation_camp_post['location'] = is_null($this->input->post('location')) ? '' : $this->input->post('location');
    $blood_donation_camp_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $this->session->set_userdata('hospital.hospital_id', $blood_donation_camp_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_donation_camp_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('blood_donation_camp', $blood_donation_camp_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $blood_donation_camp_post);
  }
  function blood_donation_camp_update() {
    $blood_donation_camp_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_donation_camp_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_donation_camp_post['blood_donation_camp.camp_id'] = $this->session->blood_donation_camp_camp_id;
    $blood_donation_camp_post['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_donation_camp_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_donation_camp_post['blood_donation_camp.camp_id'] = $blood_donation_camp_camp_id;
    $blood_donation_camp_post['blood_donation_camp.camp_name'] = is_null($this->input->post('blood_donation_camp_camp_name')) ? '' : $this->input->post('blood_donation_camp_camp_name');
    $blood_donation_camp_post['blood_donation_camp.location'] = is_null($this->input->post('blood_donation_camp_location')) ? '' : $this->input->post('blood_donation_camp_location');
    $blood_donation_camp_post['blood_donation_camp.hospital_id'] = is_null($this->input->post('blood_donation_camp_hospital_id')) ? '' : $this->input->post('blood_donation_camp_hospital_id');
    $this->session->set_userdata('hospital.hospital_id', $blood_donation_camp_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_donation_camp_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('blood_donation_camp.camp_id', $blood_donation_camp_post['blood_donation_camp.camp_id']);
    $this->db->update('blood_donation_camp', $blood_donation_camp_post, array('camp_id' => $blood_donation_camp_post['camp_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_donation_camp_post);
  }
  function blood_donation_camp_delete() {
    $blood_donation_camp_delete['blood_donation_camp.camp_id'] = is_null($this->input->post('blood_donation_camp_camp_id')) ? '' : $this->input->post('blood_donation_camp_camp_id');
    $blood_donation_camp_delete['blood_donation_camp.camp_name'] = is_null($this->input->post('blood_donation_camp_camp_name')) ? '' : $this->input->post('blood_donation_camp_camp_name');
    $blood_donation_camp_delete['blood_donation_camp.location'] = is_null($this->input->post('blood_donation_camp_location')) ? '' : $this->input->post('blood_donation_camp_location');
    $blood_donation_camp_delete['blood_donation_camp.hospital_id'] = is_null($this->input->post('blood_donation_camp_hospital_id')) ? '' : $this->input->post('blood_donation_camp_hospital_id');
    $this->db->delete('blood_donation_camp', array('camp_id' => $blood_donation_camp_delete['camp_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_donation_camp_delete);
  }
  function blood_donation_camp_get_records() {
    $blood_donation_camp_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_donation_camp_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_donation_camp_filters['blood_donation_camp.camp_id'] = $this->session->blood_donation_camp_camp_id;
    $blood_donation_camp_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_donation_camp_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_donation_camp_filters['blood_donation_camp.camp_id'] = $blood_donation_camp_camp_id;
    $blood_donation_camp_filters['blood_donation_camp.camp_name'] = is_null($this->input->post('blood_donation_camp_camp_name')) ? '' : $this->input->post('blood_donation_camp_camp_name');
    $blood_donation_camp_filters['blood_donation_camp.location'] = is_null($this->input->post('blood_donation_camp_location')) ? '' : $this->input->post('blood_donation_camp_location');
    $blood_donation_camp_filters['blood_donation_camp.hospital_id'] = is_null($this->input->post('blood_donation_camp_hospital_id')) ? '' : $this->input->post('blood_donation_camp_hospital_id');
    $this->session->set_userdata('hospital.hospital_id', $blood_donation_camp_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_donation_camp_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('blood_donation_camp.camp_id', $blood_donation_camp_filters['blood_donation_camp.camp_id']);
    $this->db->select('hospital.hospital_id AS blood_donation_camp_hospital_id, staff_previous_hospital.hospital_id AS blood_donation_camp_hospital_id,
    blood_donation_camp.camp_id AS blood_donation_camp_camp_id, blood_donation_camp.camp_name AS blood_donation_camp_camp_name,
    blood_donation_camp.location AS blood_donation_camp_location, blood_donation_camp.hospital_id AS blood_donation_camp_hospital_id')->from('blood_donation_camp');
    $this->db->join('hospital', 'blood_donation_camp.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'blood_donation_camp.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($blood_donation_camp_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $blood_donation_camp_filters);
  }
}