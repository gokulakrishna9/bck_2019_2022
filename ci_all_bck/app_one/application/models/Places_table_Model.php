<?php class Places_table_model extends CI_Model {
  function places_table_create() {
    $places_table_post = [];
    $places_table_post['place_id'] = is_null($this->input->post('place_id')) ? '' : $this->input->post('place_id');
    $places_table_post['col_change'] = is_null($this->input->post('col_change')) ? '' : $this->input->post('col_change');
    $places_table_post['country_code'] = is_null($this->input->post('country_code')) ? '' : $this->input->post('country_code');
    $places_table_post['place_code'] = is_null($this->input->post('place_code')) ? '' : $this->input->post('place_code');
    $places_table_post['place_name'] = is_null($this->input->post('place_name')) ? '' : $this->input->post('place_name');
    $places_table_post['place_name_without_diacritics'] = is_null($this->input->post('place_name_without_diacritics')) ? '' : $this->input->post('place_name_without_diacritics');
    $places_table_post['state_code'] = is_null($this->input->post('state_code')) ? '' : $this->input->post('state_code');
    $places_table_post['place_function'] = is_null($this->input->post('place_function')) ? '' : $this->input->post('place_function');
    $places_table_post['place_status'] = is_null($this->input->post('place_status')) ? '' : $this->input->post('place_status');
    $places_table_post['place_date'] = is_null($this->input->post('place_date')) ? '' : $this->input->post('place_date');
    $places_table_post['place_iata'] = is_null($this->input->post('place_iata')) ? '' : $this->input->post('place_iata');
    $places_table_post['subsidiary_loc'] = is_null($this->input->post('subsidiary_loc')) ? '' : $this->input->post('subsidiary_loc');
    $places_table_post['support_codes'] = is_null($this->input->post('support_codes')) ? '' : $this->input->post('support_codes');
    $this->db->insert('places_table', $places_table_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $places_table_post);
  }
  function places_table_update() {
    $places_table_post['places_table.place_id'] = $this->session->places_table_place_id;
    $places_table_post['places_table.place_id'] = $places_table_place_id;
    $places_table_post['places_table.col_change'] = is_null($this->input->post('places_table_col_change')) ? '' : $this->input->post('places_table_col_change');
    $places_table_post['places_table.country_code'] = is_null($this->input->post('places_table_country_code')) ? '' : $this->input->post('places_table_country_code');
    $places_table_post['places_table.place_code'] = is_null($this->input->post('places_table_place_code')) ? '' : $this->input->post('places_table_place_code');
    $places_table_post['places_table.place_name'] = is_null($this->input->post('places_table_place_name')) ? '' : $this->input->post('places_table_place_name');
    $places_table_post['places_table.place_name_without_diacritics'] = is_null($this->input->post('places_table_place_name_without_diacritics')) ? '' : $this->input->post('places_table_place_name_without_diacritics');
    $places_table_post['places_table.state_code'] = is_null($this->input->post('places_table_state_code')) ? '' : $this->input->post('places_table_state_code');
    $places_table_post['places_table.place_function'] = is_null($this->input->post('places_table_place_function')) ? '' : $this->input->post('places_table_place_function');
    $places_table_post['places_table.place_status'] = is_null($this->input->post('places_table_place_status')) ? '' : $this->input->post('places_table_place_status');
    $places_table_post['places_table.place_date'] = is_null($this->input->post('places_table_place_date')) ? '' : $this->input->post('places_table_place_date');
    $places_table_post['places_table.place_iata'] = is_null($this->input->post('places_table_place_iata')) ? '' : $this->input->post('places_table_place_iata');
    $places_table_post['places_table.subsidiary_loc'] = is_null($this->input->post('places_table_subsidiary_loc')) ? '' : $this->input->post('places_table_subsidiary_loc');
    $places_table_post['places_table.support_codes'] = is_null($this->input->post('places_table_support_codes')) ? '' : $this->input->post('places_table_support_codes');
    $this->session->set_userdata('places_table.place_id', $places_table_post['places_table.place_id']);
    $this->db->update('places_table', $places_table_post, array('place_id' => $places_table_post['place_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $places_table_post);
  }
  function places_table_delete() {
    $places_table_delete['places_table.place_id'] = is_null($this->input->post('places_table_place_id')) ? '' : $this->input->post('places_table_place_id');
    $places_table_delete['places_table.col_change'] = is_null($this->input->post('places_table_col_change')) ? '' : $this->input->post('places_table_col_change');
    $places_table_delete['places_table.country_code'] = is_null($this->input->post('places_table_country_code')) ? '' : $this->input->post('places_table_country_code');
    $places_table_delete['places_table.place_code'] = is_null($this->input->post('places_table_place_code')) ? '' : $this->input->post('places_table_place_code');
    $places_table_delete['places_table.place_name'] = is_null($this->input->post('places_table_place_name')) ? '' : $this->input->post('places_table_place_name');
    $places_table_delete['places_table.place_name_without_diacritics'] = is_null($this->input->post('places_table_place_name_without_diacritics')) ? '' : $this->input->post('places_table_place_name_without_diacritics');
    $places_table_delete['places_table.state_code'] = is_null($this->input->post('places_table_state_code')) ? '' : $this->input->post('places_table_state_code');
    $places_table_delete['places_table.place_function'] = is_null($this->input->post('places_table_place_function')) ? '' : $this->input->post('places_table_place_function');
    $places_table_delete['places_table.place_status'] = is_null($this->input->post('places_table_place_status')) ? '' : $this->input->post('places_table_place_status');
    $places_table_delete['places_table.place_date'] = is_null($this->input->post('places_table_place_date')) ? '' : $this->input->post('places_table_place_date');
    $places_table_delete['places_table.place_iata'] = is_null($this->input->post('places_table_place_iata')) ? '' : $this->input->post('places_table_place_iata');
    $places_table_delete['places_table.subsidiary_loc'] = is_null($this->input->post('places_table_subsidiary_loc')) ? '' : $this->input->post('places_table_subsidiary_loc');
    $places_table_delete['places_table.support_codes'] = is_null($this->input->post('places_table_support_codes')) ? '' : $this->input->post('places_table_support_codes');
    $this->db->delete('places_table', array('place_id' => $places_table_delete['place_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $places_table_delete);
  }
  function places_table_get_records() {
    $places_table_filters['places_table.place_id'] = $this->session->places_table_place_id;
    $places_table_filters['places_table.place_id'] = $places_table_place_id;
    $places_table_filters['places_table.col_change'] = is_null($this->input->post('places_table_col_change')) ? '' : $this->input->post('places_table_col_change');
    $places_table_filters['places_table.country_code'] = is_null($this->input->post('places_table_country_code')) ? '' : $this->input->post('places_table_country_code');
    $places_table_filters['places_table.place_code'] = is_null($this->input->post('places_table_place_code')) ? '' : $this->input->post('places_table_place_code');
    $places_table_filters['places_table.place_name'] = is_null($this->input->post('places_table_place_name')) ? '' : $this->input->post('places_table_place_name');
    $places_table_filters['places_table.place_name_without_diacritics'] = is_null($this->input->post('places_table_place_name_without_diacritics')) ? '' : $this->input->post('places_table_place_name_without_diacritics');
    $places_table_filters['places_table.state_code'] = is_null($this->input->post('places_table_state_code')) ? '' : $this->input->post('places_table_state_code');
    $places_table_filters['places_table.place_function'] = is_null($this->input->post('places_table_place_function')) ? '' : $this->input->post('places_table_place_function');
    $places_table_filters['places_table.place_status'] = is_null($this->input->post('places_table_place_status')) ? '' : $this->input->post('places_table_place_status');
    $places_table_filters['places_table.place_date'] = is_null($this->input->post('places_table_place_date')) ? '' : $this->input->post('places_table_place_date');
    $places_table_filters['places_table.place_iata'] = is_null($this->input->post('places_table_place_iata')) ? '' : $this->input->post('places_table_place_iata');
    $places_table_filters['places_table.subsidiary_loc'] = is_null($this->input->post('places_table_subsidiary_loc')) ? '' : $this->input->post('places_table_subsidiary_loc');
    $places_table_filters['places_table.support_codes'] = is_null($this->input->post('places_table_support_codes')) ? '' : $this->input->post('places_table_support_codes');
    $this->session->set_userdata('places_table.place_id', $places_table_filters['places_table.place_id']);
    $this->db->select('places_table.place_id AS places_table_place_id, places_table.col_change AS places_table_col_change,
    places_table.country_code AS places_table_country_code, places_table.place_code AS places_table_place_code,
    places_table.place_name AS places_table_place_name, places_table.place_name_without_diacritics AS places_table_place_name_without_diacritics,
    places_table.state_code AS places_table_state_code, places_table.place_function AS places_table_place_function,
    places_table.place_status AS places_table_place_status, places_table.place_date AS places_table_place_date,
    places_table.place_iata AS places_table_place_iata, places_table.subsidiary_loc AS places_table_subsidiary_loc,
    places_table.support_codes AS places_table_support_codes')->from('places_table');
    $this->db->where($places_table_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $places_table_filters);
  }
}