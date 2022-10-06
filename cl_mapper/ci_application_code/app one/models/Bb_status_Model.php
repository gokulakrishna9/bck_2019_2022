<?php class Bb_status_model extends CI_Model {
  function bb_status_create() {
    $bb_status_post = [];
    $bb_status_post['status'] = is_null($this->input->post('status')) ? '' : $this->input->post('status');
    $bb_status_post['status_id'] = is_null($this->input->post('status_id')) ? '' : $this->input->post('status_id');
    $this->db->insert('bb_status', $bb_status_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $bb_status_post);
  }
  function bb_status_update($status_id) {
    $bb_status_post['bb_status.status_id'] = $this->session->bb_status_status_id;
    $bb_status_post['bb_status.status_id'] = $bb_status_status_id;
    $bb_status_post['bb_status.status'] = is_null($this->input->post('bb_status_status')) ? '' : $this->input->post('bb_status_status');
    $this->session->set_userdata('bb_status.status_id', $bb_status_post['bb_status.status_id']);
    $this->db->update('bb_status', $bb_status_post, array('status_id' => $bb_status_post['status_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_status_post);
  }
  function bb_status_delete() {
    $bb_status_delete['bb_status.status'] = is_null($this->input->post('bb_status_status')) ? '' : $this->input->post('bb_status_status');
    $bb_status_delete['bb_status.status_id'] = is_null($this->input->post('bb_status_status_id')) ? '' : $this->input->post('bb_status_status_id');
    $this->db->delete('bb_status', array('status_id' => $bb_status_delete['status_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_status_delete);
  }
  function bb_status_get_records($status_id) {
    $bb_status_filters['bb_status.status_id'] = $this->session->bb_status_status_id;
    $bb_status_filters['bb_status.status_id'] = $bb_status_status_id;
    $bb_status_filters['bb_status.status'] = is_null($this->input->post('bb_status_status')) ? '' : $this->input->post('bb_status_status');
    $this->session->set_userdata('bb_status.status_id', $bb_status_filters['bb_status.status_id']);
    $this->db->select('bb_status.status AS bb_status_status, bb_status.status_id AS bb_status_status_id')->from('bb_status');
    $this->db->where($bb_status_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $bb_status_filters);
  }
}