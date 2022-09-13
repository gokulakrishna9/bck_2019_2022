<?php class Api_updates_model extends CI_Model {
  function api_updates_create() {
    $api_updates_post = [];
    $api_updates_post['api_id'] = is_null($this->input->post('api_id')) ? '' : $this->input->post('api_id');
    $api_updates_post['api_name'] = is_null($this->input->post('api_name')) ? '' : $this->input->post('api_name');
    $api_updates_post['table_name'] = is_null($this->input->post('table_name')) ? '' : $this->input->post('table_name');
    $api_updates_post['key_name'] = is_null($this->input->post('key_name')) ? '' : $this->input->post('key_name');
    $api_updates_post['last_updated_id'] = is_null($this->input->post('last_updated_id')) ? '' : $this->input->post('last_updated_id');
    $this->db->insert('api_updates', $api_updates_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $api_updates_post);
  }
  function api_updates_update() {
    $api_updates_post['api_updates.api_id'] = $this->session->api_updates_api_id;
    $api_updates_post['api_updates.api_id'] = $api_updates_api_id;
    $api_updates_post['api_updates.api_name'] = is_null($this->input->post('api_updates_api_name')) ? '' : $this->input->post('api_updates_api_name');
    $api_updates_post['api_updates.table_name'] = is_null($this->input->post('api_updates_table_name')) ? '' : $this->input->post('api_updates_table_name');
    $api_updates_post['api_updates.key_name'] = is_null($this->input->post('api_updates_key_name')) ? '' : $this->input->post('api_updates_key_name');
    $api_updates_post['api_updates.last_updated_id'] = is_null($this->input->post('api_updates_last_updated_id')) ? '' : $this->input->post('api_updates_last_updated_id');
    $this->session->set_userdata('api_updates.api_id', $api_updates_post['api_updates.api_id']);
    $this->db->update('api_updates', $api_updates_post, array('api_id' => $api_updates_post['api_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $api_updates_post);
  }
  function api_updates_delete() {
    $api_updates_delete['api_updates.api_id'] = is_null($this->input->post('api_updates_api_id')) ? '' : $this->input->post('api_updates_api_id');
    $api_updates_delete['api_updates.api_name'] = is_null($this->input->post('api_updates_api_name')) ? '' : $this->input->post('api_updates_api_name');
    $api_updates_delete['api_updates.table_name'] = is_null($this->input->post('api_updates_table_name')) ? '' : $this->input->post('api_updates_table_name');
    $api_updates_delete['api_updates.key_name'] = is_null($this->input->post('api_updates_key_name')) ? '' : $this->input->post('api_updates_key_name');
    $api_updates_delete['api_updates.last_updated_id'] = is_null($this->input->post('api_updates_last_updated_id')) ? '' : $this->input->post('api_updates_last_updated_id');
    $this->db->delete('api_updates', array('api_id' => $api_updates_delete['api_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $api_updates_delete);
  }
  function api_updates_get_records() {
    $api_updates_filters['api_updates.api_id'] = $this->session->api_updates_api_id;
    $api_updates_filters['api_updates.api_id'] = $api_updates_api_id;
    $api_updates_filters['api_updates.api_name'] = is_null($this->input->post('api_updates_api_name')) ? '' : $this->input->post('api_updates_api_name');
    $api_updates_filters['api_updates.table_name'] = is_null($this->input->post('api_updates_table_name')) ? '' : $this->input->post('api_updates_table_name');
    $api_updates_filters['api_updates.key_name'] = is_null($this->input->post('api_updates_key_name')) ? '' : $this->input->post('api_updates_key_name');
    $api_updates_filters['api_updates.last_updated_id'] = is_null($this->input->post('api_updates_last_updated_id')) ? '' : $this->input->post('api_updates_last_updated_id');
    $this->session->set_userdata('api_updates.api_id', $api_updates_filters['api_updates.api_id']);
    $this->db->select('api_updates.api_id AS api_updates_api_id, api_updates.api_name AS api_updates_api_name,
    api_updates.table_name AS api_updates_table_name, api_updates.key_name AS api_updates_key_name,
    api_updates.last_updated_id AS api_updates_last_updated_id')->from('api_updates');
    $this->db->where($api_updates_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $api_updates_filters);
  }
}