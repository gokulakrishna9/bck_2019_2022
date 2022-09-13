<?php class Helpline_receiver_model extends CI_Model {
  function helpline_receiver_create() {
    $helpline_receiver_post = [];
    $helpline_receiver_post['receiver_id'] = is_null($this->input->post('receiver_id')) ? '' : $this->input->post('receiver_id');
    $helpline_receiver_post['phone'] = is_null($this->input->post('phone')) ? '' : $this->input->post('phone');
    $helpline_receiver_post['full_name'] = is_null($this->input->post('full_name')) ? '' : $this->input->post('full_name');
    $helpline_receiver_post['short_name'] = is_null($this->input->post('short_name')) ? '' : $this->input->post('short_name');
    $helpline_receiver_post['email'] = is_null($this->input->post('email')) ? '' : $this->input->post('email');
    $this->db->insert('helpline_receiver', $helpline_receiver_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $helpline_receiver_post);
  }
  function helpline_receiver_update() {
    $helpline_receiver_post['helpline_receiver.receiver_id'] = $this->session->helpline_receiver_receiver_id;
    $helpline_receiver_post['helpline_receiver.receiver_id'] = $helpline_receiver_receiver_id;
    $helpline_receiver_post['helpline_receiver.phone'] = is_null($this->input->post('helpline_receiver_phone')) ? '' : $this->input->post('helpline_receiver_phone');
    $helpline_receiver_post['helpline_receiver.full_name'] = is_null($this->input->post('helpline_receiver_full_name')) ? '' : $this->input->post('helpline_receiver_full_name');
    $helpline_receiver_post['helpline_receiver.short_name'] = is_null($this->input->post('helpline_receiver_short_name')) ? '' : $this->input->post('helpline_receiver_short_name');
    $helpline_receiver_post['helpline_receiver.email'] = is_null($this->input->post('helpline_receiver_email')) ? '' : $this->input->post('helpline_receiver_email');
    $this->session->set_userdata('helpline_receiver.receiver_id', $helpline_receiver_post['helpline_receiver.receiver_id']);
    $this->db->update('helpline_receiver', $helpline_receiver_post, array('receiver_id' => $helpline_receiver_post['receiver_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $helpline_receiver_post);
  }
  function helpline_receiver_delete() {
    $helpline_receiver_delete['helpline_receiver.receiver_id'] = is_null($this->input->post('helpline_receiver_receiver_id')) ? '' : $this->input->post('helpline_receiver_receiver_id');
    $helpline_receiver_delete['helpline_receiver.phone'] = is_null($this->input->post('helpline_receiver_phone')) ? '' : $this->input->post('helpline_receiver_phone');
    $helpline_receiver_delete['helpline_receiver.full_name'] = is_null($this->input->post('helpline_receiver_full_name')) ? '' : $this->input->post('helpline_receiver_full_name');
    $helpline_receiver_delete['helpline_receiver.short_name'] = is_null($this->input->post('helpline_receiver_short_name')) ? '' : $this->input->post('helpline_receiver_short_name');
    $helpline_receiver_delete['helpline_receiver.email'] = is_null($this->input->post('helpline_receiver_email')) ? '' : $this->input->post('helpline_receiver_email');
    $this->db->delete('helpline_receiver', array('receiver_id' => $helpline_receiver_delete['receiver_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $helpline_receiver_delete);
  }
  function helpline_receiver_get_records() {
    $helpline_receiver_filters['helpline_receiver.receiver_id'] = $this->session->helpline_receiver_receiver_id;
    $helpline_receiver_filters['helpline_receiver.receiver_id'] = $helpline_receiver_receiver_id;
    $helpline_receiver_filters['helpline_receiver.phone'] = is_null($this->input->post('helpline_receiver_phone')) ? '' : $this->input->post('helpline_receiver_phone');
    $helpline_receiver_filters['helpline_receiver.full_name'] = is_null($this->input->post('helpline_receiver_full_name')) ? '' : $this->input->post('helpline_receiver_full_name');
    $helpline_receiver_filters['helpline_receiver.short_name'] = is_null($this->input->post('helpline_receiver_short_name')) ? '' : $this->input->post('helpline_receiver_short_name');
    $helpline_receiver_filters['helpline_receiver.email'] = is_null($this->input->post('helpline_receiver_email')) ? '' : $this->input->post('helpline_receiver_email');
    $this->session->set_userdata('helpline_receiver.receiver_id', $helpline_receiver_filters['helpline_receiver.receiver_id']);
    $this->db->select('helpline_receiver.receiver_id AS helpline_receiver_receiver_id, helpline_receiver.phone AS helpline_receiver_phone,
    helpline_receiver.full_name AS helpline_receiver_full_name, helpline_receiver.short_name AS helpline_receiver_short_name,
    helpline_receiver.email AS helpline_receiver_email')->from('helpline_receiver');
    $this->db->where($helpline_receiver_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $helpline_receiver_filters);
  }
}