<?php class State_model extends CI_Model {
  function state_create($country_country_id,$country_codes_country_id) {
    $state_post = [];
    $state_post['country.country_id'] = $this->session->country_country_id;
    $state_post['country_codes.country_id'] = $this->session->country_codes_country_id;
    $state_post['country.country_id'] = $country_country_id;
    $state_post['country_codes.country_id'] = $country_codes_country_id;
    $state_post['country_id'] = is_null($this->input->post('country_id')) ? '' : $this->input->post('country_id');
    $state_post['latitude'] = is_null($this->input->post('latitude')) ? '' : $this->input->post('latitude');
    $state_post['longitude'] = is_null($this->input->post('longitude')) ? '' : $this->input->post('longitude');
    $state_post['state'] = is_null($this->input->post('state')) ? '' : $this->input->post('state');
    $state_post['state_id'] = is_null($this->input->post('state_id')) ? '' : $this->input->post('state_id');
    $this->session->set_userdata('country.country_id', $state_post['country.country_id']);
    $this->session->set_userdata('country_codes.country_id', $state_post['country_codes.country_id']);
    $this->db->insert('state', $state_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $state_post);
  }
  function state_update($country_id,$country_id,$state_id) {
    $state_post['country.country_id'] = $this->session->country_country_id;
    $state_post['country_codes.country_id'] = $this->session->country_codes_country_id;
    $state_post['state.state_id'] = $this->session->state_state_id;
    $state_post['country.country_id'] = $country_country_id;
    $state_post['country_codes.country_id'] = $country_codes_country_id;
    $state_post['state.state_id'] = $state_state_id;
    $state_post['state.country_id'] = is_null($this->input->post('state_country_id')) ? '' : $this->input->post('state_country_id');
    $state_post['state.latitude'] = is_null($this->input->post('state_latitude')) ? '' : $this->input->post('state_latitude');
    $state_post['state.longitude'] = is_null($this->input->post('state_longitude')) ? '' : $this->input->post('state_longitude');
    $state_post['state.state'] = is_null($this->input->post('state_state')) ? '' : $this->input->post('state_state');
    $this->session->set_userdata('country.country_id', $state_post['country.country_id']);
    $this->session->set_userdata('country_codes.country_id', $state_post['country_codes.country_id']);
    $this->session->set_userdata('state.state_id', $state_post['state.state_id']);
    $this->db->update('state', $state_post, array('state_id' => $state_post['state_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $state_post);
  }
  function state_delete() {
    $state_delete['state.country_id'] = is_null($this->input->post('state_country_id')) ? '' : $this->input->post('state_country_id');
    $state_delete['state.latitude'] = is_null($this->input->post('state_latitude')) ? '' : $this->input->post('state_latitude');
    $state_delete['state.longitude'] = is_null($this->input->post('state_longitude')) ? '' : $this->input->post('state_longitude');
    $state_delete['state.state'] = is_null($this->input->post('state_state')) ? '' : $this->input->post('state_state');
    $state_delete['state.state_id'] = is_null($this->input->post('state_state_id')) ? '' : $this->input->post('state_state_id');
    $this->db->delete('state', array('state_id' => $state_delete['state_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $state_delete);
  }
  function state_get_records($country_id,$country_id,$state_id) {
    $state_filters['country.country_id'] = $this->session->country_country_id;
    $state_filters['country_codes.country_id'] = $this->session->country_codes_country_id;
    $state_filters['state.state_id'] = $this->session->state_state_id;
    $state_filters['country.country_id'] = $country_country_id;
    $state_filters['country_codes.country_id'] = $country_codes_country_id;
    $state_filters['state.state_id'] = $state_state_id;
    $state_filters['state.country_id'] = is_null($this->input->post('state_country_id')) ? '' : $this->input->post('state_country_id');
    $state_filters['state.latitude'] = is_null($this->input->post('state_latitude')) ? '' : $this->input->post('state_latitude');
    $state_filters['state.longitude'] = is_null($this->input->post('state_longitude')) ? '' : $this->input->post('state_longitude');
    $state_filters['state.state'] = is_null($this->input->post('state_state')) ? '' : $this->input->post('state_state');
    $this->session->set_userdata('country.country_id', $state_filters['country.country_id']);
    $this->session->set_userdata('country_codes.country_id', $state_filters['country_codes.country_id']);
    $this->session->set_userdata('state.state_id', $state_filters['state.state_id']);
    $this->db->select('country.country_id AS state_country_id, country_codes.country_id AS state_country_id,
    state.country_id AS state_country_id, state.latitude AS state_latitude,
    state.longitude AS state_longitude, state.state AS state_state,
    state.state_id AS state_state_id')->from('state');
    $this->db->join('country', 'state.country_id = country.country_id', 'left');
    $this->db->join('country_codes', 'state.country_id = country_codes.country_id', 'left');
    $this->db->where($state_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $state_filters);
  }
}