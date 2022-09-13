<?php class State_codes_model extends CI_Model {
  function state_codes_create() {
    $state_codes_post = [];
    $state_codes_post['state_id'] = is_null($this->input->post('state_id')) ? '' : $this->input->post('state_id');
    $state_codes_post['country_code'] = is_null($this->input->post('country_code')) ? '' : $this->input->post('country_code');
    $state_codes_post['state_code'] = is_null($this->input->post('state_code')) ? '' : $this->input->post('state_code');
    $state_codes_post['state_name'] = is_null($this->input->post('state_name')) ? '' : $this->input->post('state_name');
    $state_codes_post['type'] = is_null($this->input->post('type')) ? '' : $this->input->post('type');
    $this->db->insert('state_codes', $state_codes_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $state_codes_post);
  }
  function state_codes_update() {
    $state_codes_post['state_codes.state_id'] = $this->session->state_codes_state_id;
    $state_codes_post['state_codes.state_id'] = $state_codes_state_id;
    $state_codes_post['state_codes.country_code'] = is_null($this->input->post('state_codes_country_code')) ? '' : $this->input->post('state_codes_country_code');
    $state_codes_post['state_codes.state_code'] = is_null($this->input->post('state_codes_state_code')) ? '' : $this->input->post('state_codes_state_code');
    $state_codes_post['state_codes.state_name'] = is_null($this->input->post('state_codes_state_name')) ? '' : $this->input->post('state_codes_state_name');
    $state_codes_post['state_codes.type'] = is_null($this->input->post('state_codes_type')) ? '' : $this->input->post('state_codes_type');
    $this->session->set_userdata('state_codes.state_id', $state_codes_post['state_codes.state_id']);
    $this->db->update('state_codes', $state_codes_post, array('state_id' => $state_codes_post['state_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $state_codes_post);
  }
  function state_codes_delete() {
    $state_codes_delete['state_codes.state_id'] = is_null($this->input->post('state_codes_state_id')) ? '' : $this->input->post('state_codes_state_id');
    $state_codes_delete['state_codes.country_code'] = is_null($this->input->post('state_codes_country_code')) ? '' : $this->input->post('state_codes_country_code');
    $state_codes_delete['state_codes.state_code'] = is_null($this->input->post('state_codes_state_code')) ? '' : $this->input->post('state_codes_state_code');
    $state_codes_delete['state_codes.state_name'] = is_null($this->input->post('state_codes_state_name')) ? '' : $this->input->post('state_codes_state_name');
    $state_codes_delete['state_codes.type'] = is_null($this->input->post('state_codes_type')) ? '' : $this->input->post('state_codes_type');
    $this->db->delete('state_codes', array('state_id' => $state_codes_delete['state_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $state_codes_delete);
  }
  function state_codes_get_records() {
    $state_codes_filters['state_codes.state_id'] = $this->session->state_codes_state_id;
    $state_codes_filters['state_codes.state_id'] = $state_codes_state_id;
    $state_codes_filters['state_codes.country_code'] = is_null($this->input->post('state_codes_country_code')) ? '' : $this->input->post('state_codes_country_code');
    $state_codes_filters['state_codes.state_code'] = is_null($this->input->post('state_codes_state_code')) ? '' : $this->input->post('state_codes_state_code');
    $state_codes_filters['state_codes.state_name'] = is_null($this->input->post('state_codes_state_name')) ? '' : $this->input->post('state_codes_state_name');
    $state_codes_filters['state_codes.type'] = is_null($this->input->post('state_codes_type')) ? '' : $this->input->post('state_codes_type');
    $this->session->set_userdata('state_codes.state_id', $state_codes_filters['state_codes.state_id']);
    $this->db->select('state_codes.state_id AS state_codes_state_id, state_codes.country_code AS state_codes_country_code,
    state_codes.state_code AS state_codes_state_code, state_codes.state_name AS state_codes_state_name,
    state_codes.type AS state_codes_type')->from('state_codes');
    $this->db->where($state_codes_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $state_codes_filters);
  }
}