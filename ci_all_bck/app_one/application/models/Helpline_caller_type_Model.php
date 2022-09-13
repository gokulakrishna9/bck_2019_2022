<?php class Helpline_caller_type_model extends CI_Model {
  function helpline_caller_type_create() {
    $helpline_caller_type_post = [];
    $helpline_caller_type_post['caller_type_id'] = is_null($this->input->post('caller_type_id')) ? '' : $this->input->post('caller_type_id');
    $helpline_caller_type_post['caller_type'] = is_null($this->input->post('caller_type')) ? '' : $this->input->post('caller_type');
    $helpline_caller_type_post['note'] = is_null($this->input->post('note')) ? '' : $this->input->post('note');
    $this->db->insert('helpline_caller_type', $helpline_caller_type_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $helpline_caller_type_post);
  }
  function helpline_caller_type_update() {
    $helpline_caller_type_post['helpline_caller_type.caller_type_id'] = $this->session->helpline_caller_type_caller_type_id;
    $helpline_caller_type_post['helpline_caller_type.caller_type_id'] = $helpline_caller_type_caller_type_id;
    $helpline_caller_type_post['helpline_caller_type.caller_type'] = is_null($this->input->post('helpline_caller_type_caller_type')) ? '' : $this->input->post('helpline_caller_type_caller_type');
    $helpline_caller_type_post['helpline_caller_type.note'] = is_null($this->input->post('helpline_caller_type_note')) ? '' : $this->input->post('helpline_caller_type_note');
    $this->session->set_userdata('helpline_caller_type.caller_type_id', $helpline_caller_type_post['helpline_caller_type.caller_type_id']);
    $this->db->update('helpline_caller_type', $helpline_caller_type_post, array('caller_type_id' => $helpline_caller_type_post['caller_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $helpline_caller_type_post);
  }
  function helpline_caller_type_delete() {
    $helpline_caller_type_delete['helpline_caller_type.caller_type_id'] = is_null($this->input->post('helpline_caller_type_caller_type_id')) ? '' : $this->input->post('helpline_caller_type_caller_type_id');
    $helpline_caller_type_delete['helpline_caller_type.caller_type'] = is_null($this->input->post('helpline_caller_type_caller_type')) ? '' : $this->input->post('helpline_caller_type_caller_type');
    $helpline_caller_type_delete['helpline_caller_type.note'] = is_null($this->input->post('helpline_caller_type_note')) ? '' : $this->input->post('helpline_caller_type_note');
    $this->db->delete('helpline_caller_type', array('caller_type_id' => $helpline_caller_type_delete['caller_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $helpline_caller_type_delete);
  }
  function helpline_caller_type_get_records() {
    $helpline_caller_type_filters['helpline_caller_type.caller_type_id'] = $this->session->helpline_caller_type_caller_type_id;
    $helpline_caller_type_filters['helpline_caller_type.caller_type_id'] = $helpline_caller_type_caller_type_id;
    $helpline_caller_type_filters['helpline_caller_type.caller_type'] = is_null($this->input->post('helpline_caller_type_caller_type')) ? '' : $this->input->post('helpline_caller_type_caller_type');
    $helpline_caller_type_filters['helpline_caller_type.note'] = is_null($this->input->post('helpline_caller_type_note')) ? '' : $this->input->post('helpline_caller_type_note');
    $this->session->set_userdata('helpline_caller_type.caller_type_id', $helpline_caller_type_filters['helpline_caller_type.caller_type_id']);
    $this->db->select('helpline_caller_type.caller_type_id AS helpline_caller_type_caller_type_id, helpline_caller_type.caller_type AS helpline_caller_type_caller_type,
    helpline_caller_type.note AS helpline_caller_type_note')->from('helpline_caller_type');
    $this->db->where($helpline_caller_type_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $helpline_caller_type_filters);
  }
}