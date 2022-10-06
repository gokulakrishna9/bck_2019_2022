<?php class Item_form_model extends CI_Model {
  function item_form_create() {
    $item_form_post = [];
    $item_form_post['item_form'] = is_null($this->input->post('item_form')) ? '' : $this->input->post('item_form');
    $item_form_post['item_form_id'] = is_null($this->input->post('item_form_id')) ? '' : $this->input->post('item_form_id');
    $this->db->insert('item_form', $item_form_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $item_form_post);
  }
  function item_form_update($item_form_id) {
    $item_form_post['item_form.item_form_id'] = $this->session->item_form_item_form_id;
    $item_form_post['item_form.item_form_id'] = $item_form_item_form_id;
    $item_form_post['item_form.item_form'] = is_null($this->input->post('item_form_item_form')) ? '' : $this->input->post('item_form_item_form');
    $this->session->set_userdata('item_form.item_form_id', $item_form_post['item_form.item_form_id']);
    $this->db->update('item_form', $item_form_post, array('item_form_id' => $item_form_post['item_form_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $item_form_post);
  }
  function item_form_delete() {
    $item_form_delete['item_form.item_form'] = is_null($this->input->post('item_form_item_form')) ? '' : $this->input->post('item_form_item_form');
    $item_form_delete['item_form.item_form_id'] = is_null($this->input->post('item_form_item_form_id')) ? '' : $this->input->post('item_form_item_form_id');
    $this->db->delete('item_form', array('item_form_id' => $item_form_delete['item_form_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $item_form_delete);
  }
  function item_form_get_records($item_form_id) {
    $item_form_filters['item_form.item_form_id'] = $this->session->item_form_item_form_id;
    $item_form_filters['item_form.item_form_id'] = $item_form_item_form_id;
    $item_form_filters['item_form.item_form'] = is_null($this->input->post('item_form_item_form')) ? '' : $this->input->post('item_form_item_form');
    $this->session->set_userdata('item_form.item_form_id', $item_form_filters['item_form.item_form_id']);
    $this->db->select('item_form.item_form AS item_form_item_form, item_form.item_form_id AS item_form_item_form_id')->from('item_form');
    $this->db->where($item_form_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $item_form_filters);
  }
}