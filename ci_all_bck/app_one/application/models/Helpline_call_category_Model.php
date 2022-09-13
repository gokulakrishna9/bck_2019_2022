<?php class Helpline_call_category_model extends CI_Model {
  function helpline_call_category_create() {
    $helpline_call_category_post = [];
    $helpline_call_category_post['call_category_id'] = is_null($this->input->post('call_category_id')) ? '' : $this->input->post('call_category_id');
    $helpline_call_category_post['call_category'] = is_null($this->input->post('call_category')) ? '' : $this->input->post('call_category');
    $helpline_call_category_post['note'] = is_null($this->input->post('note')) ? '' : $this->input->post('note');
    $this->db->insert('helpline_call_category', $helpline_call_category_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $helpline_call_category_post);
  }
  function helpline_call_category_update() {
    $helpline_call_category_post['helpline_call_category.call_category_id'] = $this->session->helpline_call_category_call_category_id;
    $helpline_call_category_post['helpline_call_category.call_category_id'] = $helpline_call_category_call_category_id;
    $helpline_call_category_post['helpline_call_category.call_category'] = is_null($this->input->post('helpline_call_category_call_category')) ? '' : $this->input->post('helpline_call_category_call_category');
    $helpline_call_category_post['helpline_call_category.note'] = is_null($this->input->post('helpline_call_category_note')) ? '' : $this->input->post('helpline_call_category_note');
    $this->session->set_userdata('helpline_call_category.call_category_id', $helpline_call_category_post['helpline_call_category.call_category_id']);
    $this->db->update('helpline_call_category', $helpline_call_category_post, array('call_category_id' => $helpline_call_category_post['call_category_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $helpline_call_category_post);
  }
  function helpline_call_category_delete() {
    $helpline_call_category_delete['helpline_call_category.call_category_id'] = is_null($this->input->post('helpline_call_category_call_category_id')) ? '' : $this->input->post('helpline_call_category_call_category_id');
    $helpline_call_category_delete['helpline_call_category.call_category'] = is_null($this->input->post('helpline_call_category_call_category')) ? '' : $this->input->post('helpline_call_category_call_category');
    $helpline_call_category_delete['helpline_call_category.note'] = is_null($this->input->post('helpline_call_category_note')) ? '' : $this->input->post('helpline_call_category_note');
    $this->db->delete('helpline_call_category', array('call_category_id' => $helpline_call_category_delete['call_category_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $helpline_call_category_delete);
  }
  function helpline_call_category_get_records() {
    $helpline_call_category_filters['helpline_call_category.call_category_id'] = $this->session->helpline_call_category_call_category_id;
    $helpline_call_category_filters['helpline_call_category.call_category_id'] = $helpline_call_category_call_category_id;
    $helpline_call_category_filters['helpline_call_category.call_category'] = is_null($this->input->post('helpline_call_category_call_category')) ? '' : $this->input->post('helpline_call_category_call_category');
    $helpline_call_category_filters['helpline_call_category.note'] = is_null($this->input->post('helpline_call_category_note')) ? '' : $this->input->post('helpline_call_category_note');
    $this->session->set_userdata('helpline_call_category.call_category_id', $helpline_call_category_filters['helpline_call_category.call_category_id']);
    $this->db->select('helpline_call_category.call_category_id AS helpline_call_category_call_category_id, helpline_call_category.call_category AS helpline_call_category_call_category,
    helpline_call_category.note AS helpline_call_category_note')->from('helpline_call_category');
    $this->db->where($helpline_call_category_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $helpline_call_category_filters);
  }
}