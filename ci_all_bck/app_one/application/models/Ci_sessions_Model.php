<?php class Ci_sessions_model extends CI_Model {
  function ci_sessions_create() {
    $ci_sessions_post = [];
    $ci_sessions_post['session_id'] = is_null($this->input->post('session_id')) ? '' : $this->input->post('session_id');
    $ci_sessions_post['ip_address'] = is_null($this->input->post('ip_address')) ? '' : $this->input->post('ip_address');
    $ci_sessions_post['user_agent'] = is_null($this->input->post('user_agent')) ? '' : $this->input->post('user_agent');
    $ci_sessions_post['last_activity'] = is_null($this->input->post('last_activity')) ? '' : $this->input->post('last_activity');
    $ci_sessions_post['user_data'] = is_null($this->input->post('user_data')) ? '' : $this->input->post('user_data');
    $this->db->insert('ci_sessions', $ci_sessions_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $ci_sessions_post);
  }
  function ci_sessions_update() {
    $ci_sessions_post['ci_sessions.session_id'] = $this->session->ci_sessions_session_id;
    $ci_sessions_post['ci_sessions.session_id'] = $ci_sessions_session_id;
    $ci_sessions_post['ci_sessions.ip_address'] = is_null($this->input->post('ci_sessions_ip_address')) ? '' : $this->input->post('ci_sessions_ip_address');
    $ci_sessions_post['ci_sessions.user_agent'] = is_null($this->input->post('ci_sessions_user_agent')) ? '' : $this->input->post('ci_sessions_user_agent');
    $ci_sessions_post['ci_sessions.last_activity'] = is_null($this->input->post('ci_sessions_last_activity')) ? '' : $this->input->post('ci_sessions_last_activity');
    $ci_sessions_post['ci_sessions.user_data'] = is_null($this->input->post('ci_sessions_user_data')) ? '' : $this->input->post('ci_sessions_user_data');
    $this->session->set_userdata('ci_sessions.session_id', $ci_sessions_post['ci_sessions.session_id']);
    $this->db->update('ci_sessions', $ci_sessions_post, array('session_id' => $ci_sessions_post['session_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $ci_sessions_post);
  }
  function ci_sessions_delete() {
    $ci_sessions_delete['ci_sessions.session_id'] = is_null($this->input->post('ci_sessions_session_id')) ? '' : $this->input->post('ci_sessions_session_id');
    $ci_sessions_delete['ci_sessions.ip_address'] = is_null($this->input->post('ci_sessions_ip_address')) ? '' : $this->input->post('ci_sessions_ip_address');
    $ci_sessions_delete['ci_sessions.user_agent'] = is_null($this->input->post('ci_sessions_user_agent')) ? '' : $this->input->post('ci_sessions_user_agent');
    $ci_sessions_delete['ci_sessions.last_activity'] = is_null($this->input->post('ci_sessions_last_activity')) ? '' : $this->input->post('ci_sessions_last_activity');
    $ci_sessions_delete['ci_sessions.user_data'] = is_null($this->input->post('ci_sessions_user_data')) ? '' : $this->input->post('ci_sessions_user_data');
    $this->db->delete('ci_sessions', array('session_id' => $ci_sessions_delete['session_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $ci_sessions_delete);
  }
  function ci_sessions_get_records() {
    $ci_sessions_filters['ci_sessions.session_id'] = $this->session->ci_sessions_session_id;
    $ci_sessions_filters['ci_sessions.session_id'] = $ci_sessions_session_id;
    $ci_sessions_filters['ci_sessions.ip_address'] = is_null($this->input->post('ci_sessions_ip_address')) ? '' : $this->input->post('ci_sessions_ip_address');
    $ci_sessions_filters['ci_sessions.user_agent'] = is_null($this->input->post('ci_sessions_user_agent')) ? '' : $this->input->post('ci_sessions_user_agent');
    $ci_sessions_filters['ci_sessions.last_activity'] = is_null($this->input->post('ci_sessions_last_activity')) ? '' : $this->input->post('ci_sessions_last_activity');
    $ci_sessions_filters['ci_sessions.user_data'] = is_null($this->input->post('ci_sessions_user_data')) ? '' : $this->input->post('ci_sessions_user_data');
    $this->session->set_userdata('ci_sessions.session_id', $ci_sessions_filters['ci_sessions.session_id']);
    $this->db->select('ci_sessions.session_id AS ci_sessions_session_id, ci_sessions.ip_address AS ci_sessions_ip_address,
    ci_sessions.user_agent AS ci_sessions_user_agent, ci_sessions.last_activity AS ci_sessions_last_activity,
    ci_sessions.user_data AS ci_sessions_user_data')->from('ci_sessions');
    $this->db->where($ci_sessions_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $ci_sessions_filters);
  }
}