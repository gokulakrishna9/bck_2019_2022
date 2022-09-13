<?php class Helpline_call_group_model extends CI_Model {
  function helpline_call_group_create() {
    $helpline_call_group_post = [];
    $helpline_call_group_post['call_group_id'] = is_null($this->input->post('call_group_id')) ? '' : $this->input->post('call_group_id');
    $helpline_call_group_post['group_name'] = is_null($this->input->post('group_name')) ? '' : $this->input->post('group_name');
    $helpline_call_group_post['group_datetime'] = is_null($this->input->post('group_datetime')) ? '' : $this->input->post('group_datetime');
    $helpline_call_group_post['created_by'] = is_null($this->input->post('created_by')) ? '' : $this->input->post('created_by');
    $this->db->insert('helpline_call_group', $helpline_call_group_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $helpline_call_group_post);
  }
  function helpline_call_group_update() {
    $helpline_call_group_post['helpline_call_group.call_group_id'] = $this->session->helpline_call_group_call_group_id;
    $helpline_call_group_post['helpline_call_group.call_group_id'] = $helpline_call_group_call_group_id;
    $helpline_call_group_post['helpline_call_group.group_name'] = is_null($this->input->post('helpline_call_group_group_name')) ? '' : $this->input->post('helpline_call_group_group_name');
    $helpline_call_group_post['helpline_call_group.group_datetime'] = is_null($this->input->post('helpline_call_group_group_datetime')) ? '' : $this->input->post('helpline_call_group_group_datetime');
    $helpline_call_group_post['helpline_call_group.created_by'] = is_null($this->input->post('helpline_call_group_created_by')) ? '' : $this->input->post('helpline_call_group_created_by');
    $this->session->set_userdata('helpline_call_group.call_group_id', $helpline_call_group_post['helpline_call_group.call_group_id']);
    $this->db->update('helpline_call_group', $helpline_call_group_post, array('call_group_id' => $helpline_call_group_post['call_group_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $helpline_call_group_post);
  }
  function helpline_call_group_delete() {
    $helpline_call_group_delete['helpline_call_group.call_group_id'] = is_null($this->input->post('helpline_call_group_call_group_id')) ? '' : $this->input->post('helpline_call_group_call_group_id');
    $helpline_call_group_delete['helpline_call_group.group_name'] = is_null($this->input->post('helpline_call_group_group_name')) ? '' : $this->input->post('helpline_call_group_group_name');
    $helpline_call_group_delete['helpline_call_group.group_datetime'] = is_null($this->input->post('helpline_call_group_group_datetime')) ? '' : $this->input->post('helpline_call_group_group_datetime');
    $helpline_call_group_delete['helpline_call_group.created_by'] = is_null($this->input->post('helpline_call_group_created_by')) ? '' : $this->input->post('helpline_call_group_created_by');
    $this->db->delete('helpline_call_group', array('call_group_id' => $helpline_call_group_delete['call_group_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $helpline_call_group_delete);
  }
  function helpline_call_group_get_records() {
    $helpline_call_group_filters['helpline_call_group.call_group_id'] = $this->session->helpline_call_group_call_group_id;
    $helpline_call_group_filters['helpline_call_group.call_group_id'] = $helpline_call_group_call_group_id;
    $helpline_call_group_filters['helpline_call_group.group_name'] = is_null($this->input->post('helpline_call_group_group_name')) ? '' : $this->input->post('helpline_call_group_group_name');
    $helpline_call_group_filters['helpline_call_group.group_datetime'] = is_null($this->input->post('helpline_call_group_group_datetime')) ? '' : $this->input->post('helpline_call_group_group_datetime');
    $helpline_call_group_filters['helpline_call_group.created_by'] = is_null($this->input->post('helpline_call_group_created_by')) ? '' : $this->input->post('helpline_call_group_created_by');
    $this->session->set_userdata('helpline_call_group.call_group_id', $helpline_call_group_filters['helpline_call_group.call_group_id']);
    $this->db->select('helpline_call_group.call_group_id AS helpline_call_group_call_group_id, helpline_call_group.group_name AS helpline_call_group_group_name,
    helpline_call_group.group_datetime AS helpline_call_group_group_datetime, helpline_call_group.created_by AS helpline_call_group_created_by')->from('helpline_call_group');
    $this->db->where($helpline_call_group_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $helpline_call_group_filters);
  }
}