<?php class Helpline_email_model extends CI_Model {
  function helpline_email_create() {
    $helpline_email_post = [];
    $helpline_email_post['helpline_call.call_id'] = $this->session->helpline_call_call_id;
    $helpline_email_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $helpline_email_post['user.user_id'] = $this->session->user_user_id;
    $helpline_email_post['helpline_call.call_id'] = $helpline_call_call_id;
    $helpline_email_post['bb_user.user_id'] = $bb_user_user_id;
    $helpline_email_post['user.user_id'] = $user_user_id;
    $helpline_email_post['helpline_email_id'] = is_null($this->input->post('helpline_email_id')) ? '' : $this->input->post('helpline_email_id');
    $helpline_email_post['call_id'] = is_null($this->input->post('call_id')) ? '' : $this->input->post('call_id');
    $helpline_email_post['to_email'] = is_null($this->input->post('to_email')) ? '' : $this->input->post('to_email');
    $helpline_email_post['cc_email'] = is_null($this->input->post('cc_email')) ? '' : $this->input->post('cc_email');
    $helpline_email_post['greeting'] = is_null($this->input->post('greeting')) ? '' : $this->input->post('greeting');
    $helpline_email_post['phone_shared'] = is_null($this->input->post('phone_shared')) ? '' : $this->input->post('phone_shared');
    $helpline_email_post['note'] = is_null($this->input->post('note')) ? '' : $this->input->post('note');
    $helpline_email_post['user_id'] = is_null($this->input->post('user_id')) ? '' : $this->input->post('user_id');
    $helpline_email_post['email_date_time'] = is_null($this->input->post('email_date_time')) ? '' : $this->input->post('email_date_time');
    $this->session->set_userdata('helpline_call.call_id', $helpline_email_post['helpline_call.call_id']);
    $this->session->set_userdata('bb_user.user_id', $helpline_email_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $helpline_email_post['user.user_id']);
    $this->db->insert('helpline_email', $helpline_email_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $helpline_email_post);
  }
  function helpline_email_update() {
    $helpline_email_post['helpline_call.call_id'] = $this->session->helpline_call_call_id;
    $helpline_email_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $helpline_email_post['user.user_id'] = $this->session->user_user_id;
    $helpline_email_post['helpline_email.helpline_email_id'] = $this->session->helpline_email_helpline_email_id;
    $helpline_email_post['helpline_call.call_id'] = $helpline_call_call_id;
    $helpline_email_post['bb_user.user_id'] = $bb_user_user_id;
    $helpline_email_post['user.user_id'] = $user_user_id;
    $helpline_email_post['helpline_email.helpline_email_id'] = $helpline_email_helpline_email_id;
    $helpline_email_post['helpline_email.call_id'] = is_null($this->input->post('helpline_email_call_id')) ? '' : $this->input->post('helpline_email_call_id');
    $helpline_email_post['helpline_email.to_email'] = is_null($this->input->post('helpline_email_to_email')) ? '' : $this->input->post('helpline_email_to_email');
    $helpline_email_post['helpline_email.cc_email'] = is_null($this->input->post('helpline_email_cc_email')) ? '' : $this->input->post('helpline_email_cc_email');
    $helpline_email_post['helpline_email.greeting'] = is_null($this->input->post('helpline_email_greeting')) ? '' : $this->input->post('helpline_email_greeting');
    $helpline_email_post['helpline_email.phone_shared'] = is_null($this->input->post('helpline_email_phone_shared')) ? '' : $this->input->post('helpline_email_phone_shared');
    $helpline_email_post['helpline_email.note'] = is_null($this->input->post('helpline_email_note')) ? '' : $this->input->post('helpline_email_note');
    $helpline_email_post['helpline_email.user_id'] = is_null($this->input->post('helpline_email_user_id')) ? '' : $this->input->post('helpline_email_user_id');
    $helpline_email_post['helpline_email.email_date_time'] = is_null($this->input->post('helpline_email_email_date_time')) ? '' : $this->input->post('helpline_email_email_date_time');
    $this->session->set_userdata('helpline_call.call_id', $helpline_email_post['helpline_call.call_id']);
    $this->session->set_userdata('bb_user.user_id', $helpline_email_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $helpline_email_post['user.user_id']);
    $this->session->set_userdata('helpline_email.helpline_email_id', $helpline_email_post['helpline_email.helpline_email_id']);
    $this->db->update('helpline_email', $helpline_email_post, array('helpline_email_id' => $helpline_email_post['helpline_email_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $helpline_email_post);
  }
  function helpline_email_delete() {
    $helpline_email_delete['helpline_email.helpline_email_id'] = is_null($this->input->post('helpline_email_helpline_email_id')) ? '' : $this->input->post('helpline_email_helpline_email_id');
    $helpline_email_delete['helpline_email.call_id'] = is_null($this->input->post('helpline_email_call_id')) ? '' : $this->input->post('helpline_email_call_id');
    $helpline_email_delete['helpline_email.to_email'] = is_null($this->input->post('helpline_email_to_email')) ? '' : $this->input->post('helpline_email_to_email');
    $helpline_email_delete['helpline_email.cc_email'] = is_null($this->input->post('helpline_email_cc_email')) ? '' : $this->input->post('helpline_email_cc_email');
    $helpline_email_delete['helpline_email.greeting'] = is_null($this->input->post('helpline_email_greeting')) ? '' : $this->input->post('helpline_email_greeting');
    $helpline_email_delete['helpline_email.phone_shared'] = is_null($this->input->post('helpline_email_phone_shared')) ? '' : $this->input->post('helpline_email_phone_shared');
    $helpline_email_delete['helpline_email.note'] = is_null($this->input->post('helpline_email_note')) ? '' : $this->input->post('helpline_email_note');
    $helpline_email_delete['helpline_email.user_id'] = is_null($this->input->post('helpline_email_user_id')) ? '' : $this->input->post('helpline_email_user_id');
    $helpline_email_delete['helpline_email.email_date_time'] = is_null($this->input->post('helpline_email_email_date_time')) ? '' : $this->input->post('helpline_email_email_date_time');
    $this->db->delete('helpline_email', array('helpline_email_id' => $helpline_email_delete['helpline_email_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $helpline_email_delete);
  }
  function helpline_email_get_records() {
    $helpline_email_filters['helpline_call.call_id'] = $this->session->helpline_call_call_id;
    $helpline_email_filters['bb_user.user_id'] = $this->session->bb_user_user_id;
    $helpline_email_filters['user.user_id'] = $this->session->user_user_id;
    $helpline_email_filters['helpline_email.helpline_email_id'] = $this->session->helpline_email_helpline_email_id;
    $helpline_email_filters['helpline_call.call_id'] = $helpline_call_call_id;
    $helpline_email_filters['bb_user.user_id'] = $bb_user_user_id;
    $helpline_email_filters['user.user_id'] = $user_user_id;
    $helpline_email_filters['helpline_email.helpline_email_id'] = $helpline_email_helpline_email_id;
    $helpline_email_filters['helpline_email.call_id'] = is_null($this->input->post('helpline_email_call_id')) ? '' : $this->input->post('helpline_email_call_id');
    $helpline_email_filters['helpline_email.to_email'] = is_null($this->input->post('helpline_email_to_email')) ? '' : $this->input->post('helpline_email_to_email');
    $helpline_email_filters['helpline_email.cc_email'] = is_null($this->input->post('helpline_email_cc_email')) ? '' : $this->input->post('helpline_email_cc_email');
    $helpline_email_filters['helpline_email.greeting'] = is_null($this->input->post('helpline_email_greeting')) ? '' : $this->input->post('helpline_email_greeting');
    $helpline_email_filters['helpline_email.phone_shared'] = is_null($this->input->post('helpline_email_phone_shared')) ? '' : $this->input->post('helpline_email_phone_shared');
    $helpline_email_filters['helpline_email.note'] = is_null($this->input->post('helpline_email_note')) ? '' : $this->input->post('helpline_email_note');
    $helpline_email_filters['helpline_email.user_id'] = is_null($this->input->post('helpline_email_user_id')) ? '' : $this->input->post('helpline_email_user_id');
    $helpline_email_filters['helpline_email.email_date_time'] = is_null($this->input->post('helpline_email_email_date_time')) ? '' : $this->input->post('helpline_email_email_date_time');
    $this->session->set_userdata('helpline_call.call_id', $helpline_email_filters['helpline_call.call_id']);
    $this->session->set_userdata('bb_user.user_id', $helpline_email_filters['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $helpline_email_filters['user.user_id']);
    $this->session->set_userdata('helpline_email.helpline_email_id', $helpline_email_filters['helpline_email.helpline_email_id']);
    $this->db->select('helpline_call.call_id AS helpline_email_call_id, bb_user.user_id AS helpline_email_user_id,
    user.user_id AS helpline_email_user_id, helpline_email.helpline_email_id AS helpline_email_helpline_email_id,
    helpline_email.call_id AS helpline_email_call_id, helpline_email.to_email AS helpline_email_to_email,
    helpline_email.cc_email AS helpline_email_cc_email, helpline_email.greeting AS helpline_email_greeting,
    helpline_email.phone_shared AS helpline_email_phone_shared, helpline_email.note AS helpline_email_note,
    helpline_email.user_id AS helpline_email_user_id, helpline_email.email_date_time AS helpline_email_email_date_time')->from('helpline_email');
    $this->db->join('helpline_call', 'helpline_email.call_id = helpline_call.call_id', 'left');
    $this->db->join('bb_user', 'helpline_email.user_id = bb_user.user_id', 'left');
    $this->db->join('user', 'helpline_email.user_id = user.user_id', 'left');
    $this->db->where($helpline_email_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $helpline_email_filters);
  }
}