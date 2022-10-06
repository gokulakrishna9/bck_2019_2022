<?php class Item_type_model extends CI_Model {
  function item_type_create() {
    $item_type_post = [];
    $item_type_post['item_type'] = is_null($this->input->post('item_type')) ? '' : $this->input->post('item_type');
    $item_type_post['item_type_id'] = is_null($this->input->post('item_type_id')) ? '' : $this->input->post('item_type_id');
    $this->db->insert('item_type', $item_type_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $item_type_post);
  }
  function item_type_update($item_type_id) {
    $item_type_post['item_type.item_type_id'] = $this->session->item_type_item_type_id;
    $item_type_post['item_type.item_type_id'] = $item_type_item_type_id;
    $item_type_post['item_type.item_type'] = is_null($this->input->post('item_type_item_type')) ? '' : $this->input->post('item_type_item_type');
    $this->session->set_userdata('item_type.item_type_id', $item_type_post['item_type.item_type_id']);
    $this->db->update('item_type', $item_type_post, array('item_type_id' => $item_type_post['item_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $item_type_post);
  }
  function item_type_delete() {
    $item_type_delete['item_type.item_type'] = is_null($this->input->post('item_type_item_type')) ? '' : $this->input->post('item_type_item_type');
    $item_type_delete['item_type.item_type_id'] = is_null($this->input->post('item_type_item_type_id')) ? '' : $this->input->post('item_type_item_type_id');
    $this->db->delete('item_type', array('item_type_id' => $item_type_delete['item_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $item_type_delete);
  }
  function item_type_get_records($item_type_id) {
    $item_type_filters['item_type.item_type_id'] = $this->session->item_type_item_type_id;
    $item_type_filters['item_type.item_type_id'] = $item_type_item_type_id;
    $item_type_filters['item_type.item_type'] = is_null($this->input->post('item_type_item_type')) ? '' : $this->input->post('item_type_item_type');
    $this->session->set_userdata('item_type.item_type_id', $item_type_filters['item_type.item_type_id']);
    $this->db->select('item_type.item_type AS item_type_item_type, item_type.item_type_id AS item_type_item_type_id')->from('item_type');
    $this->db->where($item_type_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $item_type_filters);
  }
}