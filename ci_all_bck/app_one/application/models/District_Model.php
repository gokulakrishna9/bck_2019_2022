<?php class District_model extends CI_Model {
  function district_create() {
    $district_post = [];
    $district_post['state.state_id'] = $this->session->state_state_id;
    $district_post['state_codes.state_id'] = $this->session->state_codes_state_id;
    $district_post['state.state_id'] = $state_state_id;
    $district_post['state_codes.state_id'] = $state_codes_state_id;
    $district_post['district_id'] = is_null($this->input->post('district_id')) ? '' : $this->input->post('district_id');
    $district_post['district'] = is_null($this->input->post('district')) ? '' : $this->input->post('district');
    $district_post['latitude'] = is_null($this->input->post('latitude')) ? '' : $this->input->post('latitude');
    $district_post['longitude'] = is_null($this->input->post('longitude')) ? '' : $this->input->post('longitude');
    $district_post['state'] = is_null($this->input->post('state')) ? '' : $this->input->post('state');
    $district_post['state_id'] = is_null($this->input->post('state_id')) ? '' : $this->input->post('state_id');
    $this->session->set_userdata('state.state_id', $district_post['state.state_id']);
    $this->session->set_userdata('state_codes.state_id', $district_post['state_codes.state_id']);
    $this->db->insert('district', $district_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $district_post);
  }
  function district_update() {
    $district_post['state.state_id'] = $this->session->state_state_id;
    $district_post['state_codes.state_id'] = $this->session->state_codes_state_id;
    $district_post['district.district_id'] = $this->session->district_district_id;
    $district_post['state.state_id'] = $state_state_id;
    $district_post['state_codes.state_id'] = $state_codes_state_id;
    $district_post['district.district_id'] = $district_district_id;
    $district_post['district.district'] = is_null($this->input->post('district_district')) ? '' : $this->input->post('district_district');
    $district_post['district.latitude'] = is_null($this->input->post('district_latitude')) ? '' : $this->input->post('district_latitude');
    $district_post['district.longitude'] = is_null($this->input->post('district_longitude')) ? '' : $this->input->post('district_longitude');
    $district_post['district.state'] = is_null($this->input->post('district_state')) ? '' : $this->input->post('district_state');
    $district_post['district.state_id'] = is_null($this->input->post('district_state_id')) ? '' : $this->input->post('district_state_id');
    $this->session->set_userdata('state.state_id', $district_post['state.state_id']);
    $this->session->set_userdata('state_codes.state_id', $district_post['state_codes.state_id']);
    $this->session->set_userdata('district.district_id', $district_post['district.district_id']);
    $this->db->update('district', $district_post, array('district_id' => $district_post['district_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $district_post);
  }
  function district_delete() {
    $district_delete['district.district_id'] = is_null($this->input->post('district_district_id')) ? '' : $this->input->post('district_district_id');
    $district_delete['district.district'] = is_null($this->input->post('district_district')) ? '' : $this->input->post('district_district');
    $district_delete['district.latitude'] = is_null($this->input->post('district_latitude')) ? '' : $this->input->post('district_latitude');
    $district_delete['district.longitude'] = is_null($this->input->post('district_longitude')) ? '' : $this->input->post('district_longitude');
    $district_delete['district.state'] = is_null($this->input->post('district_state')) ? '' : $this->input->post('district_state');
    $district_delete['district.state_id'] = is_null($this->input->post('district_state_id')) ? '' : $this->input->post('district_state_id');
    $this->db->delete('district', array('district_id' => $district_delete['district_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $district_delete);
  }
  function district_get_records() {
    $district_filters['state.state_id'] = $this->session->state_state_id;
    $district_filters['state_codes.state_id'] = $this->session->state_codes_state_id;
    $district_filters['district.district_id'] = $this->session->district_district_id;
    $district_filters['state.state_id'] = $state_state_id;
    $district_filters['state_codes.state_id'] = $state_codes_state_id;
    $district_filters['district.district_id'] = $district_district_id;
    $district_filters['district.district'] = is_null($this->input->post('district_district')) ? '' : $this->input->post('district_district');
    $district_filters['district.latitude'] = is_null($this->input->post('district_latitude')) ? '' : $this->input->post('district_latitude');
    $district_filters['district.longitude'] = is_null($this->input->post('district_longitude')) ? '' : $this->input->post('district_longitude');
    $district_filters['district.state'] = is_null($this->input->post('district_state')) ? '' : $this->input->post('district_state');
    $district_filters['district.state_id'] = is_null($this->input->post('district_state_id')) ? '' : $this->input->post('district_state_id');
    $this->session->set_userdata('state.state_id', $district_filters['state.state_id']);
    $this->session->set_userdata('state_codes.state_id', $district_filters['state_codes.state_id']);
    $this->session->set_userdata('district.district_id', $district_filters['district.district_id']);
    $this->db->select('state.state_id AS district_state_id, state_codes.state_id AS district_state_id,
    district.district_id AS district_district_id, district.district AS district_district,
    district.latitude AS district_latitude, district.longitude AS district_longitude,
    district.state AS district_state, district.state_id AS district_state_id')->from('district');
    $this->db->join('state', 'district.state_id = state.state_id', 'left');
    $this->db->join('state_codes', 'district.state_id = state_codes.state_id', 'left');
    $this->db->where($district_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $district_filters);
  }
}