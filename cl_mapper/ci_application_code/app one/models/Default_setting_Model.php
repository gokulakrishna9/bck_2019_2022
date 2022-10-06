<?php class Default_setting_model extends CI_Model {
  function default_setting_create() {
    $default_setting_post = [];
    $default_setting_post['default_value'] = is_null($this->input->post('default_value')) ? '' : $this->input->post('default_value');
    $default_setting_post['default_value_text'] = is_null($this->input->post('default_value_text')) ? '' : $this->input->post('default_value_text');
    $default_setting_post['primary_key'] = is_null($this->input->post('primary_key')) ? '' : $this->input->post('primary_key');
    $default_setting_post['setting_id'] = is_null($this->input->post('setting_id')) ? '' : $this->input->post('setting_id');
    $default_setting_post['table'] = is_null($this->input->post('table')) ? '' : $this->input->post('table');
    $this->db->insert('default_setting', $default_setting_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $default_setting_post);
  }
  function default_setting_update($setting_id) {
    $default_setting_post['default_setting.setting_id'] = $this->session->default_setting_setting_id;
    $default_setting_post['default_setting.setting_id'] = $default_setting_setting_id;
    $default_setting_post['default_setting.default_value'] = is_null($this->input->post('default_setting_default_value')) ? '' : $this->input->post('default_setting_default_value');
    $default_setting_post['default_setting.default_value_text'] = is_null($this->input->post('default_setting_default_value_text')) ? '' : $this->input->post('default_setting_default_value_text');
    $default_setting_post['default_setting.primary_key'] = is_null($this->input->post('default_setting_primary_key')) ? '' : $this->input->post('default_setting_primary_key');
    $default_setting_post['default_setting.table'] = is_null($this->input->post('default_setting_table')) ? '' : $this->input->post('default_setting_table');
    $this->session->set_userdata('default_setting.setting_id', $default_setting_post['default_setting.setting_id']);
    $this->db->update('default_setting', $default_setting_post, array('setting_id' => $default_setting_post['setting_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $default_setting_post);
  }
  function default_setting_delete() {
    $default_setting_delete['default_setting.default_value'] = is_null($this->input->post('default_setting_default_value')) ? '' : $this->input->post('default_setting_default_value');
    $default_setting_delete['default_setting.default_value_text'] = is_null($this->input->post('default_setting_default_value_text')) ? '' : $this->input->post('default_setting_default_value_text');
    $default_setting_delete['default_setting.primary_key'] = is_null($this->input->post('default_setting_primary_key')) ? '' : $this->input->post('default_setting_primary_key');
    $default_setting_delete['default_setting.setting_id'] = is_null($this->input->post('default_setting_setting_id')) ? '' : $this->input->post('default_setting_setting_id');
    $default_setting_delete['default_setting.table'] = is_null($this->input->post('default_setting_table')) ? '' : $this->input->post('default_setting_table');
    $this->db->delete('default_setting', array('setting_id' => $default_setting_delete['setting_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $default_setting_delete);
  }
  function default_setting_get_records($setting_id) {
    $default_setting_filters['default_setting.setting_id'] = $this->session->default_setting_setting_id;
    $default_setting_filters['default_setting.setting_id'] = $default_setting_setting_id;
    $default_setting_filters['default_setting.default_value'] = is_null($this->input->post('default_setting_default_value')) ? '' : $this->input->post('default_setting_default_value');
    $default_setting_filters['default_setting.default_value_text'] = is_null($this->input->post('default_setting_default_value_text')) ? '' : $this->input->post('default_setting_default_value_text');
    $default_setting_filters['default_setting.primary_key'] = is_null($this->input->post('default_setting_primary_key')) ? '' : $this->input->post('default_setting_primary_key');
    $default_setting_filters['default_setting.table'] = is_null($this->input->post('default_setting_table')) ? '' : $this->input->post('default_setting_table');
    $this->session->set_userdata('default_setting.setting_id', $default_setting_filters['default_setting.setting_id']);
    $this->db->select('default_setting.default_value AS default_setting_default_value, default_setting.default_value_text AS default_setting_default_value_text,
    default_setting.primary_key AS default_setting_primary_key, default_setting.setting_id AS default_setting_setting_id,
    default_setting.table AS default_setting_table')->from('default_setting');
    $this->db->where($default_setting_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $default_setting_filters);
  }
}