<?php class Country_model extends CI_Model {
  function country_create() {
    $country_post = [];
    $country_post['country_id'] = is_null($this->input->post('country_id')) ? '' : $this->input->post('country_id');
    $country_post['country'] = is_null($this->input->post('country')) ? '' : $this->input->post('country');
    $this->db->insert('country', $country_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $country_post);
  }
  function country_update() {
    $country_post['country.country_id'] = $this->session->country_country_id;
    $country_post['country.country_id'] = $country_country_id;
    $country_post['country.country'] = is_null($this->input->post('country_country')) ? '' : $this->input->post('country_country');
    $this->session->set_userdata('country.country_id', $country_post['country.country_id']);
    $this->db->update('country', $country_post, array('country_id' => $country_post['country_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $country_post);
  }
  function country_delete() {
    $country_delete['country.country_id'] = is_null($this->input->post('country_country_id')) ? '' : $this->input->post('country_country_id');
    $country_delete['country.country'] = is_null($this->input->post('country_country')) ? '' : $this->input->post('country_country');
    $this->db->delete('country', array('country_id' => $country_delete['country_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $country_delete);
  }
  function country_get_records() {
    $country_filters['country.country_id'] = $this->session->country_country_id;
    $country_filters['country.country_id'] = $country_country_id;
    $country_filters['country.country'] = is_null($this->input->post('country_country')) ? '' : $this->input->post('country_country');
    $this->session->set_userdata('country.country_id', $country_filters['country.country_id']);
    $this->db->select('country.country_id AS country_country_id, country.country AS country_country')->from('country');
    $this->db->where($country_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $country_filters);
  }
}