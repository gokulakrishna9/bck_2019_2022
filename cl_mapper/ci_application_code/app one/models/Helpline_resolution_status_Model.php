<?php class Helpline_resolution_status_model extends CI_Model {
  function helpline_resolution_status_create() {
    $helpline_resolution_status_post = [];
    $helpline_resolution_status_post['note'] = is_null($this->input->post('note')) ? '' : $this->input->post('note');
    $helpline_resolution_status_post['resolution_status'] = is_null($this->input->post('resolution_status')) ? '' : $this->input->post('resolution_status');
    $helpline_resolution_status_post['resolution_status_id'] = is_null($this->input->post('resolution_status_id')) ? '' : $this->input->post('resolution_status_id');
    $this->db->insert('helpline_resolution_status', $helpline_resolution_status_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $helpline_resolution_status_post);
  }
  function helpline_resolution_status_update($resolution_status_id) {
    $helpline_resolution_status_post['helpline_resolution_status.resolution_status_id'] = $this->session->helpline_resolution_status_resolution_status_id;
    $helpline_resolution_status_post['helpline_resolution_status.resolution_status_id'] = $helpline_resolution_status_resolution_status_id;
    $helpline_resolution_status_post['helpline_resolution_status.note'] = is_null($this->input->post('helpline_resolution_status_note')) ? '' : $this->input->post('helpline_resolution_status_note');
    $helpline_resolution_status_post['helpline_resolution_status.resolution_status'] = is_null($this->input->post('helpline_resolution_status_resolution_status')) ? '' : $this->input->post('helpline_resolution_status_resolution_status');
    $this->session->set_userdata('helpline_resolution_status.resolution_status_id', $helpline_resolution_status_post['helpline_resolution_status.resolution_status_id']);
    $this->db->update('helpline_resolution_status', $helpline_resolution_status_post, array('resolution_status_id' => $helpline_resolution_status_post['resolution_status_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $helpline_resolution_status_post);
  }
  function helpline_resolution_status_delete() {
    $helpline_resolution_status_delete['helpline_resolution_status.note'] = is_null($this->input->post('helpline_resolution_status_note')) ? '' : $this->input->post('helpline_resolution_status_note');
    $helpline_resolution_status_delete['helpline_resolution_status.resolution_status'] = is_null($this->input->post('helpline_resolution_status_resolution_status')) ? '' : $this->input->post('helpline_resolution_status_resolution_status');
    $helpline_resolution_status_delete['helpline_resolution_status.resolution_status_id'] = is_null($this->input->post('helpline_resolution_status_resolution_status_id')) ? '' : $this->input->post('helpline_resolution_status_resolution_status_id');
    $this->db->delete('helpline_resolution_status', array('resolution_status_id' => $helpline_resolution_status_delete['resolution_status_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $helpline_resolution_status_delete);
  }
  function helpline_resolution_status_get_records($resolution_status_id) {
    $helpline_resolution_status_filters['helpline_resolution_status.resolution_status_id'] = $this->session->helpline_resolution_status_resolution_status_id;
    $helpline_resolution_status_filters['helpline_resolution_status.resolution_status_id'] = $helpline_resolution_status_resolution_status_id;
    $helpline_resolution_status_filters['helpline_resolution_status.note'] = is_null($this->input->post('helpline_resolution_status_note')) ? '' : $this->input->post('helpline_resolution_status_note');
    $helpline_resolution_status_filters['helpline_resolution_status.resolution_status'] = is_null($this->input->post('helpline_resolution_status_resolution_status')) ? '' : $this->input->post('helpline_resolution_status_resolution_status');
    $this->session->set_userdata('helpline_resolution_status.resolution_status_id', $helpline_resolution_status_filters['helpline_resolution_status.resolution_status_id']);
    $this->db->select('helpline_resolution_status.note AS helpline_resolution_status_note, helpline_resolution_status.resolution_status AS helpline_resolution_status_resolution_status,
    helpline_resolution_status.resolution_status_id AS helpline_resolution_status_resolution_status_id')->from('helpline_resolution_status');
    $this->db->where($helpline_resolution_status_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $helpline_resolution_status_filters);
  }
}