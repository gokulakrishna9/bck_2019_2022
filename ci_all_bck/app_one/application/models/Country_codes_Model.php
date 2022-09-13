<?php class Country_codes_model extends CI_Model {
  function country_codes_create() {
    $country_codes_post = [];
    $country_codes_post['country_id'] = is_null($this->input->post('country_id')) ? '' : $this->input->post('country_id');
    $country_codes_post['country'] = is_null($this->input->post('country')) ? '' : $this->input->post('country');
    $country_codes_post['latitude'] = is_null($this->input->post('latitude')) ? '' : $this->input->post('latitude');
    $country_codes_post['longitude'] = is_null($this->input->post('longitude')) ? '' : $this->input->post('longitude');
    $country_codes_post['name'] = is_null($this->input->post('name')) ? '' : $this->input->post('name');
    $country_codes_post['priority'] = is_null($this->input->post('priority')) ? '' : $this->input->post('priority');
    $this->db->insert('country_codes', $country_codes_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $country_codes_post);
  }
  function country_codes_update() {
    $country_codes_post['country_codes.country_id'] = $this->session->country_codes_country_id;
    $country_codes_post['country_codes.country_id'] = $country_codes_country_id;
    $country_codes_post['country_codes.country'] = is_null($this->input->post('country_codes_country')) ? '' : $this->input->post('country_codes_country');
    $country_codes_post['country_codes.latitude'] = is_null($this->input->post('country_codes_latitude')) ? '' : $this->input->post('country_codes_latitude');
    $country_codes_post['country_codes.longitude'] = is_null($this->input->post('country_codes_longitude')) ? '' : $this->input->post('country_codes_longitude');
    $country_codes_post['country_codes.name'] = is_null($this->input->post('country_codes_name')) ? '' : $this->input->post('country_codes_name');
    $country_codes_post['country_codes.priority'] = is_null($this->input->post('country_codes_priority')) ? '' : $this->input->post('country_codes_priority');
    $this->session->set_userdata('country_codes.country_id', $country_codes_post['country_codes.country_id']);
    $this->db->update('country_codes', $country_codes_post, array('country_id' => $country_codes_post['country_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $country_codes_post);
  }
  function country_codes_delete() {
    $country_codes_delete['country_codes.country_id'] = is_null($this->input->post('country_codes_country_id')) ? '' : $this->input->post('country_codes_country_id');
    $country_codes_delete['country_codes.country'] = is_null($this->input->post('country_codes_country')) ? '' : $this->input->post('country_codes_country');
    $country_codes_delete['country_codes.latitude'] = is_null($this->input->post('country_codes_latitude')) ? '' : $this->input->post('country_codes_latitude');
    $country_codes_delete['country_codes.longitude'] = is_null($this->input->post('country_codes_longitude')) ? '' : $this->input->post('country_codes_longitude');
    $country_codes_delete['country_codes.name'] = is_null($this->input->post('country_codes_name')) ? '' : $this->input->post('country_codes_name');
    $country_codes_delete['country_codes.priority'] = is_null($this->input->post('country_codes_priority')) ? '' : $this->input->post('country_codes_priority');
    $this->db->delete('country_codes', array('country_id' => $country_codes_delete['country_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $country_codes_delete);
  }
  function country_codes_get_records() {
    $country_codes_filters['country_codes.country_id'] = $this->session->country_codes_country_id;
    $country_codes_filters['country_codes.country_id'] = $country_codes_country_id;
    $country_codes_filters['country_codes.country'] = is_null($this->input->post('country_codes_country')) ? '' : $this->input->post('country_codes_country');
    $country_codes_filters['country_codes.latitude'] = is_null($this->input->post('country_codes_latitude')) ? '' : $this->input->post('country_codes_latitude');
    $country_codes_filters['country_codes.longitude'] = is_null($this->input->post('country_codes_longitude')) ? '' : $this->input->post('country_codes_longitude');
    $country_codes_filters['country_codes.name'] = is_null($this->input->post('country_codes_name')) ? '' : $this->input->post('country_codes_name');
    $country_codes_filters['country_codes.priority'] = is_null($this->input->post('country_codes_priority')) ? '' : $this->input->post('country_codes_priority');
    $this->session->set_userdata('country_codes.country_id', $country_codes_filters['country_codes.country_id']);
    $this->db->select('country_codes.country_id AS country_codes_country_id, country_codes.country AS country_codes_country,
    country_codes.latitude AS country_codes_latitude, country_codes.longitude AS country_codes_longitude,
    country_codes.name AS country_codes_name, country_codes.priority AS country_codes_priority')->from('country_codes');
    $this->db->where($country_codes_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $country_codes_filters);
  }
}