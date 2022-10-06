<?php class Micro_organism_model extends CI_Model {
  function micro_organism_create($hospital_hospital_id,$staff_previous_hospital_hospital_id) {
    $micro_organism_post = [];
    $micro_organism_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $micro_organism_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $micro_organism_post['hospital.hospital_id'] = $hospital_hospital_id;
    $micro_organism_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $micro_organism_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $micro_organism_post['micro_organism'] = is_null($this->input->post('micro_organism')) ? '' : $this->input->post('micro_organism');
    $micro_organism_post['micro_organism_id'] = is_null($this->input->post('micro_organism_id')) ? '' : $this->input->post('micro_organism_id');
    $micro_organism_post['micro_organism_type'] = is_null($this->input->post('micro_organism_type')) ? '' : $this->input->post('micro_organism_type');
    $micro_organism_post['temp_micro_organism_id'] = is_null($this->input->post('temp_micro_organism_id')) ? '' : $this->input->post('temp_micro_organism_id');
    $this->session->set_userdata('hospital.hospital_id', $micro_organism_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $micro_organism_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('micro_organism', $micro_organism_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $micro_organism_post);
  }
  function micro_organism_update($hospital_id,$hospital_id,$micro_organism_id) {
    $micro_organism_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $micro_organism_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $micro_organism_post['micro_organism.micro_organism_id'] = $this->session->micro_organism_micro_organism_id;
    $micro_organism_post['hospital.hospital_id'] = $hospital_hospital_id;
    $micro_organism_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $micro_organism_post['micro_organism.micro_organism_id'] = $micro_organism_micro_organism_id;
    $micro_organism_post['micro_organism.hospital_id'] = is_null($this->input->post('micro_organism_hospital_id')) ? '' : $this->input->post('micro_organism_hospital_id');
    $micro_organism_post['micro_organism.micro_organism'] = is_null($this->input->post('micro_organism_micro_organism')) ? '' : $this->input->post('micro_organism_micro_organism');
    $micro_organism_post['micro_organism.micro_organism_type'] = is_null($this->input->post('micro_organism_micro_organism_type')) ? '' : $this->input->post('micro_organism_micro_organism_type');
    $micro_organism_post['micro_organism.temp_micro_organism_id'] = is_null($this->input->post('micro_organism_temp_micro_organism_id')) ? '' : $this->input->post('micro_organism_temp_micro_organism_id');
    $this->session->set_userdata('hospital.hospital_id', $micro_organism_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $micro_organism_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('micro_organism.micro_organism_id', $micro_organism_post['micro_organism.micro_organism_id']);
    $this->db->update('micro_organism', $micro_organism_post, array('micro_organism_id' => $micro_organism_post['micro_organism_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $micro_organism_post);
  }
  function micro_organism_delete() {
    $micro_organism_delete['micro_organism.hospital_id'] = is_null($this->input->post('micro_organism_hospital_id')) ? '' : $this->input->post('micro_organism_hospital_id');
    $micro_organism_delete['micro_organism.micro_organism'] = is_null($this->input->post('micro_organism_micro_organism')) ? '' : $this->input->post('micro_organism_micro_organism');
    $micro_organism_delete['micro_organism.micro_organism_id'] = is_null($this->input->post('micro_organism_micro_organism_id')) ? '' : $this->input->post('micro_organism_micro_organism_id');
    $micro_organism_delete['micro_organism.micro_organism_type'] = is_null($this->input->post('micro_organism_micro_organism_type')) ? '' : $this->input->post('micro_organism_micro_organism_type');
    $micro_organism_delete['micro_organism.temp_micro_organism_id'] = is_null($this->input->post('micro_organism_temp_micro_organism_id')) ? '' : $this->input->post('micro_organism_temp_micro_organism_id');
    $this->db->delete('micro_organism', array('micro_organism_id' => $micro_organism_delete['micro_organism_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $micro_organism_delete);
  }
  function micro_organism_get_records($hospital_id,$hospital_id,$micro_organism_id) {
    $micro_organism_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $micro_organism_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $micro_organism_filters['micro_organism.micro_organism_id'] = $this->session->micro_organism_micro_organism_id;
    $micro_organism_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $micro_organism_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $micro_organism_filters['micro_organism.micro_organism_id'] = $micro_organism_micro_organism_id;
    $micro_organism_filters['micro_organism.hospital_id'] = is_null($this->input->post('micro_organism_hospital_id')) ? '' : $this->input->post('micro_organism_hospital_id');
    $micro_organism_filters['micro_organism.micro_organism'] = is_null($this->input->post('micro_organism_micro_organism')) ? '' : $this->input->post('micro_organism_micro_organism');
    $micro_organism_filters['micro_organism.micro_organism_type'] = is_null($this->input->post('micro_organism_micro_organism_type')) ? '' : $this->input->post('micro_organism_micro_organism_type');
    $micro_organism_filters['micro_organism.temp_micro_organism_id'] = is_null($this->input->post('micro_organism_temp_micro_organism_id')) ? '' : $this->input->post('micro_organism_temp_micro_organism_id');
    $this->session->set_userdata('hospital.hospital_id', $micro_organism_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $micro_organism_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('micro_organism.micro_organism_id', $micro_organism_filters['micro_organism.micro_organism_id']);
    $this->db->select('hospital.hospital_id AS micro_organism_hospital_id, staff_previous_hospital.hospital_id AS micro_organism_hospital_id,
    micro_organism.hospital_id AS micro_organism_hospital_id, micro_organism.micro_organism AS micro_organism_micro_organism,
    micro_organism.micro_organism_id AS micro_organism_micro_organism_id, micro_organism.micro_organism_type AS micro_organism_micro_organism_type,
    micro_organism.temp_micro_organism_id AS micro_organism_temp_micro_organism_id')->from('micro_organism');
    $this->db->join('hospital', 'micro_organism.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'micro_organism.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($micro_organism_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $micro_organism_filters);
  }
}