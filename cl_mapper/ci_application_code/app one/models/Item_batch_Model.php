<?php class Item_batch_model extends CI_Model {
  function item_batch_create($item_item_id,$item_master_item_id) {
    $item_batch_post = [];
    $item_batch_post['item.item_id'] = $this->session->item_item_id;
    $item_batch_post['item_master.item_id'] = $this->session->item_master_item_id;
    $item_batch_post['item.item_id'] = $item_item_id;
    $item_batch_post['item_master.item_id'] = $item_master_item_id;
    $item_batch_post['batch_id'] = is_null($this->input->post('batch_id')) ? '' : $this->input->post('batch_id');
    $item_batch_post['batch_number'] = is_null($this->input->post('batch_number')) ? '' : $this->input->post('batch_number');
    $item_batch_post['item_id'] = is_null($this->input->post('item_id')) ? '' : $this->input->post('item_id');
    $item_batch_post['item_quantity'] = is_null($this->input->post('item_quantity')) ? '' : $this->input->post('item_quantity');
    $this->session->set_userdata('item.item_id', $item_batch_post['item.item_id']);
    $this->session->set_userdata('item_master.item_id', $item_batch_post['item_master.item_id']);
    $this->db->insert('item_batch', $item_batch_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $item_batch_post);
  }
  function item_batch_update($item_id,$item_id,$batch_id) {
    $item_batch_post['item.item_id'] = $this->session->item_item_id;
    $item_batch_post['item_master.item_id'] = $this->session->item_master_item_id;
    $item_batch_post['item_batch.batch_id'] = $this->session->item_batch_batch_id;
    $item_batch_post['item.item_id'] = $item_item_id;
    $item_batch_post['item_master.item_id'] = $item_master_item_id;
    $item_batch_post['item_batch.batch_id'] = $item_batch_batch_id;
    $item_batch_post['item_batch.batch_number'] = is_null($this->input->post('item_batch_batch_number')) ? '' : $this->input->post('item_batch_batch_number');
    $item_batch_post['item_batch.item_id'] = is_null($this->input->post('item_batch_item_id')) ? '' : $this->input->post('item_batch_item_id');
    $item_batch_post['item_batch.item_quantity'] = is_null($this->input->post('item_batch_item_quantity')) ? '' : $this->input->post('item_batch_item_quantity');
    $this->session->set_userdata('item.item_id', $item_batch_post['item.item_id']);
    $this->session->set_userdata('item_master.item_id', $item_batch_post['item_master.item_id']);
    $this->session->set_userdata('item_batch.batch_id', $item_batch_post['item_batch.batch_id']);
    $this->db->update('item_batch', $item_batch_post, array('batch_id' => $item_batch_post['batch_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $item_batch_post);
  }
  function item_batch_delete() {
    $item_batch_delete['item_batch.batch_id'] = is_null($this->input->post('item_batch_batch_id')) ? '' : $this->input->post('item_batch_batch_id');
    $item_batch_delete['item_batch.batch_number'] = is_null($this->input->post('item_batch_batch_number')) ? '' : $this->input->post('item_batch_batch_number');
    $item_batch_delete['item_batch.item_id'] = is_null($this->input->post('item_batch_item_id')) ? '' : $this->input->post('item_batch_item_id');
    $item_batch_delete['item_batch.item_quantity'] = is_null($this->input->post('item_batch_item_quantity')) ? '' : $this->input->post('item_batch_item_quantity');
    $this->db->delete('item_batch', array('batch_id' => $item_batch_delete['batch_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $item_batch_delete);
  }
  function item_batch_get_records($item_id,$item_id,$batch_id) {
    $item_batch_filters['item.item_id'] = $this->session->item_item_id;
    $item_batch_filters['item_master.item_id'] = $this->session->item_master_item_id;
    $item_batch_filters['item_batch.batch_id'] = $this->session->item_batch_batch_id;
    $item_batch_filters['item.item_id'] = $item_item_id;
    $item_batch_filters['item_master.item_id'] = $item_master_item_id;
    $item_batch_filters['item_batch.batch_id'] = $item_batch_batch_id;
    $item_batch_filters['item_batch.batch_number'] = is_null($this->input->post('item_batch_batch_number')) ? '' : $this->input->post('item_batch_batch_number');
    $item_batch_filters['item_batch.item_id'] = is_null($this->input->post('item_batch_item_id')) ? '' : $this->input->post('item_batch_item_id');
    $item_batch_filters['item_batch.item_quantity'] = is_null($this->input->post('item_batch_item_quantity')) ? '' : $this->input->post('item_batch_item_quantity');
    $this->session->set_userdata('item.item_id', $item_batch_filters['item.item_id']);
    $this->session->set_userdata('item_master.item_id', $item_batch_filters['item_master.item_id']);
    $this->session->set_userdata('item_batch.batch_id', $item_batch_filters['item_batch.batch_id']);
    $this->db->select('item.item_id AS item_batch_item_id, item_master.item_id AS item_batch_item_id,
    item_batch.batch_id AS item_batch_batch_id, item_batch.batch_number AS item_batch_batch_number,
    item_batch.item_id AS item_batch_item_id, item_batch.item_quantity AS item_batch_item_quantity')->from('item_batch');
    $this->db->join('item', 'item_batch.item_id = item.item_id', 'left');
    $this->db->join('item_master', 'item_batch.item_id = item_master.item_id', 'left');
    $this->db->where($item_batch_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $item_batch_filters);
  }
}