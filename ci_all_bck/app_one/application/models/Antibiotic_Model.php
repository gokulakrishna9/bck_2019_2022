<?php class Antibiotic_model extends CI_Model {
  function antibiotic_create() {
    $antibiotic_post = [];
    $antibiotic_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $antibiotic_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $antibiotic_post['hospital.hospital_id'] = $hospital_hospital_id;
    $antibiotic_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $antibiotic_post['antibiotic_id'] = is_null($this->input->post('antibiotic_id')) ? '' : $this->input->post('antibiotic_id');
    $antibiotic_post['antibiotic'] = is_null($this->input->post('antibiotic')) ? '' : $this->input->post('antibiotic');
    $antibiotic_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $antibiotic_post['temp_antibiotic_id'] = is_null($this->input->post('temp_antibiotic_id')) ? '' : $this->input->post('temp_antibiotic_id');
    $this->session->set_userdata('hospital.hospital_id', $antibiotic_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $antibiotic_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('antibiotic', $antibiotic_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $antibiotic_post);
  }
  function antibiotic_update() {
    $antibiotic_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $antibiotic_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $antibiotic_post['antibiotic.antibiotic_id'] = $this->session->antibiotic_antibiotic_id;
    $antibiotic_post['hospital.hospital_id'] = $hospital_hospital_id;
    $antibiotic_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $antibiotic_post['antibiotic.antibiotic_id'] = $antibiotic_antibiotic_id;
    $antibiotic_post['antibiotic.antibiotic'] = is_null($this->input->post('antibiotic_antibiotic')) ? '' : $this->input->post('antibiotic_antibiotic');
    $antibiotic_post['antibiotic.hospital_id'] = is_null($this->input->post('antibiotic_hospital_id')) ? '' : $this->input->post('antibiotic_hospital_id');
    $antibiotic_post['antibiotic.temp_antibiotic_id'] = is_null($this->input->post('antibiotic_temp_antibiotic_id')) ? '' : $this->input->post('antibiotic_temp_antibiotic_id');
    $this->session->set_userdata('hospital.hospital_id', $antibiotic_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $antibiotic_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('antibiotic.antibiotic_id', $antibiotic_post['antibiotic.antibiotic_id']);
    $this->db->update('antibiotic', $antibiotic_post, array('antibiotic_id' => $antibiotic_post['antibiotic_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $antibiotic_post);
  }
  function antibiotic_delete() {
    $antibiotic_delete['antibiotic.antibiotic_id'] = is_null($this->input->post('antibiotic_antibiotic_id')) ? '' : $this->input->post('antibiotic_antibiotic_id');
    $antibiotic_delete['antibiotic.antibiotic'] = is_null($this->input->post('antibiotic_antibiotic')) ? '' : $this->input->post('antibiotic_antibiotic');
    $antibiotic_delete['antibiotic.hospital_id'] = is_null($this->input->post('antibiotic_hospital_id')) ? '' : $this->input->post('antibiotic_hospital_id');
    $antibiotic_delete['antibiotic.temp_antibiotic_id'] = is_null($this->input->post('antibiotic_temp_antibiotic_id')) ? '' : $this->input->post('antibiotic_temp_antibiotic_id');
    $this->db->delete('antibiotic', array('antibiotic_id' => $antibiotic_delete['antibiotic_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $antibiotic_delete);
  }
  function antibiotic_get_records() {
    $antibiotic_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $antibiotic_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $antibiotic_filters['antibiotic.antibiotic_id'] = $this->session->antibiotic_antibiotic_id;
    $antibiotic_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $antibiotic_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $antibiotic_filters['antibiotic.antibiotic_id'] = $antibiotic_antibiotic_id;
    $antibiotic_filters['antibiotic.antibiotic'] = is_null($this->input->post('antibiotic_antibiotic')) ? '' : $this->input->post('antibiotic_antibiotic');
    $antibiotic_filters['antibiotic.hospital_id'] = is_null($this->input->post('antibiotic_hospital_id')) ? '' : $this->input->post('antibiotic_hospital_id');
    $antibiotic_filters['antibiotic.temp_antibiotic_id'] = is_null($this->input->post('antibiotic_temp_antibiotic_id')) ? '' : $this->input->post('antibiotic_temp_antibiotic_id');
    $this->session->set_userdata('hospital.hospital_id', $antibiotic_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $antibiotic_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('antibiotic.antibiotic_id', $antibiotic_filters['antibiotic.antibiotic_id']);
    $this->db->select('hospital.hospital_id AS antibiotic_hospital_id, staff_previous_hospital.hospital_id AS antibiotic_hospital_id,
    antibiotic.antibiotic_id AS antibiotic_antibiotic_id, antibiotic.antibiotic AS antibiotic_antibiotic,
    antibiotic.hospital_id AS antibiotic_hospital_id, antibiotic.temp_antibiotic_id AS antibiotic_temp_antibiotic_id')->from('antibiotic');
    $this->db->join('hospital', 'antibiotic.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'antibiotic.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($antibiotic_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $antibiotic_filters);
  }
}