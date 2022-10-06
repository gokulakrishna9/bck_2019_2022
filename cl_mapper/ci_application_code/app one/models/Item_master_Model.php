<?php class Item_master_model extends CI_Model {
  function item_master_create($generic_item_generic_item_id,$item_form_item_form_id) {
    $item_master_post = [];
    $item_master_post['generic_item.generic_item_id'] = $this->session->generic_item_generic_item_id;
    $item_master_post['item_form.item_form_id'] = $this->session->item_form_item_form_id;
    $item_master_post['generic_item.generic_item_id'] = $generic_item_generic_item_id;
    $item_master_post['item_form.item_form_id'] = $item_form_item_form_id;
    $item_master_post['asset_number'] = is_null($this->input->post('asset_number')) ? '' : $this->input->post('asset_number');
    $item_master_post['description'] = is_null($this->input->post('description')) ? '' : $this->input->post('description');
    $item_master_post['generic_item_id'] = is_null($this->input->post('generic_item_id')) ? '' : $this->input->post('generic_item_id');
    $item_master_post['item_form_id'] = is_null($this->input->post('item_form_id')) ? '' : $this->input->post('item_form_id');
    $item_master_post['item_id'] = is_null($this->input->post('item_id')) ? '' : $this->input->post('item_id');
    $item_master_post['item_name'] = is_null($this->input->post('item_name')) ? '' : $this->input->post('item_name');
    $item_master_post['model'] = is_null($this->input->post('model')) ? '' : $this->input->post('model');
    $item_master_post['serial_number'] = is_null($this->input->post('serial_number')) ? '' : $this->input->post('serial_number');
    $this->session->set_userdata('generic_item.generic_item_id', $item_master_post['generic_item.generic_item_id']);
    $this->session->set_userdata('item_form.item_form_id', $item_master_post['item_form.item_form_id']);
    $this->db->insert('item_master', $item_master_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $item_master_post);
  }
  function item_master_update($generic_item_id,$item_form_id,$item_id) {
    $item_master_post['generic_item.generic_item_id'] = $this->session->generic_item_generic_item_id;
    $item_master_post['item_form.item_form_id'] = $this->session->item_form_item_form_id;
    $item_master_post['item_master.item_id'] = $this->session->item_master_item_id;
    $item_master_post['generic_item.generic_item_id'] = $generic_item_generic_item_id;
    $item_master_post['item_form.item_form_id'] = $item_form_item_form_id;
    $item_master_post['item_master.item_id'] = $item_master_item_id;
    $item_master_post['item_master.asset_number'] = is_null($this->input->post('item_master_asset_number')) ? '' : $this->input->post('item_master_asset_number');
    $item_master_post['item_master.description'] = is_null($this->input->post('item_master_description')) ? '' : $this->input->post('item_master_description');
    $item_master_post['item_master.generic_item_id'] = is_null($this->input->post('item_master_generic_item_id')) ? '' : $this->input->post('item_master_generic_item_id');
    $item_master_post['item_master.item_form_id'] = is_null($this->input->post('item_master_item_form_id')) ? '' : $this->input->post('item_master_item_form_id');
    $item_master_post['item_master.item_name'] = is_null($this->input->post('item_master_item_name')) ? '' : $this->input->post('item_master_item_name');
    $item_master_post['item_master.model'] = is_null($this->input->post('item_master_model')) ? '' : $this->input->post('item_master_model');
    $item_master_post['item_master.serial_number'] = is_null($this->input->post('item_master_serial_number')) ? '' : $this->input->post('item_master_serial_number');
    $this->session->set_userdata('generic_item.generic_item_id', $item_master_post['generic_item.generic_item_id']);
    $this->session->set_userdata('item_form.item_form_id', $item_master_post['item_form.item_form_id']);
    $this->session->set_userdata('item_master.item_id', $item_master_post['item_master.item_id']);
    $this->db->update('item_master', $item_master_post, array('item_id' => $item_master_post['item_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $item_master_post);
  }
  function item_master_delete() {
    $item_master_delete['item_master.asset_number'] = is_null($this->input->post('item_master_asset_number')) ? '' : $this->input->post('item_master_asset_number');
    $item_master_delete['item_master.description'] = is_null($this->input->post('item_master_description')) ? '' : $this->input->post('item_master_description');
    $item_master_delete['item_master.generic_item_id'] = is_null($this->input->post('item_master_generic_item_id')) ? '' : $this->input->post('item_master_generic_item_id');
    $item_master_delete['item_master.item_form_id'] = is_null($this->input->post('item_master_item_form_id')) ? '' : $this->input->post('item_master_item_form_id');
    $item_master_delete['item_master.item_id'] = is_null($this->input->post('item_master_item_id')) ? '' : $this->input->post('item_master_item_id');
    $item_master_delete['item_master.item_name'] = is_null($this->input->post('item_master_item_name')) ? '' : $this->input->post('item_master_item_name');
    $item_master_delete['item_master.model'] = is_null($this->input->post('item_master_model')) ? '' : $this->input->post('item_master_model');
    $item_master_delete['item_master.serial_number'] = is_null($this->input->post('item_master_serial_number')) ? '' : $this->input->post('item_master_serial_number');
    $this->db->delete('item_master', array('item_id' => $item_master_delete['item_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $item_master_delete);
  }
  function item_master_get_records($generic_item_id,$item_form_id,$item_id) {
    $item_master_filters['generic_item.generic_item_id'] = $this->session->generic_item_generic_item_id;
    $item_master_filters['item_form.item_form_id'] = $this->session->item_form_item_form_id;
    $item_master_filters['item_master.item_id'] = $this->session->item_master_item_id;
    $item_master_filters['generic_item.generic_item_id'] = $generic_item_generic_item_id;
    $item_master_filters['item_form.item_form_id'] = $item_form_item_form_id;
    $item_master_filters['item_master.item_id'] = $item_master_item_id;
    $item_master_filters['item_master.asset_number'] = is_null($this->input->post('item_master_asset_number')) ? '' : $this->input->post('item_master_asset_number');
    $item_master_filters['item_master.description'] = is_null($this->input->post('item_master_description')) ? '' : $this->input->post('item_master_description');
    $item_master_filters['item_master.generic_item_id'] = is_null($this->input->post('item_master_generic_item_id')) ? '' : $this->input->post('item_master_generic_item_id');
    $item_master_filters['item_master.item_form_id'] = is_null($this->input->post('item_master_item_form_id')) ? '' : $this->input->post('item_master_item_form_id');
    $item_master_filters['item_master.item_name'] = is_null($this->input->post('item_master_item_name')) ? '' : $this->input->post('item_master_item_name');
    $item_master_filters['item_master.model'] = is_null($this->input->post('item_master_model')) ? '' : $this->input->post('item_master_model');
    $item_master_filters['item_master.serial_number'] = is_null($this->input->post('item_master_serial_number')) ? '' : $this->input->post('item_master_serial_number');
    $this->session->set_userdata('generic_item.generic_item_id', $item_master_filters['generic_item.generic_item_id']);
    $this->session->set_userdata('item_form.item_form_id', $item_master_filters['item_form.item_form_id']);
    $this->session->set_userdata('item_master.item_id', $item_master_filters['item_master.item_id']);
    $this->db->select('generic_item.generic_item_id AS item_master_generic_item_id, item_form.item_form_id AS item_master_item_form_id,
    item_master.asset_number AS item_master_asset_number, item_master.description AS item_master_description,
    item_master.generic_item_id AS item_master_generic_item_id, item_master.item_form_id AS item_master_item_form_id,
    item_master.item_id AS item_master_item_id, item_master.item_name AS item_master_item_name,
    item_master.model AS item_master_model, item_master.serial_number AS item_master_serial_number')->from('item_master');
    $this->db->join('generic_item', 'item_master.generic_item_id = generic_item.generic_item_id', 'left');
    $this->db->join('item_form', 'item_master.item_form_id = item_form.item_form_id', 'left');
    $this->db->where($item_master_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $item_master_filters);
  }
}