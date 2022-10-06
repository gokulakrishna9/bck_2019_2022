<?php class Generic_item_model extends CI_Model {
  function generic_item_create($drug_type_drug_type_id,$item_type_item_type_id) {
    $generic_item_post = [];
    $generic_item_post['drug_type.drug_type_id'] = $this->session->drug_type_drug_type_id;
    $generic_item_post['item_type.item_type_id'] = $this->session->item_type_item_type_id;
    $generic_item_post['drug_type.drug_type_id'] = $drug_type_drug_type_id;
    $generic_item_post['item_type.item_type_id'] = $item_type_item_type_id;
    $generic_item_post['drug_type_id'] = is_null($this->input->post('drug_type_id')) ? '' : $this->input->post('drug_type_id');
    $generic_item_post['generic_item_id'] = is_null($this->input->post('generic_item_id')) ? '' : $this->input->post('generic_item_id');
    $generic_item_post['generic_name'] = is_null($this->input->post('generic_name')) ? '' : $this->input->post('generic_name');
    $generic_item_post['item_type_id'] = is_null($this->input->post('item_type_id')) ? '' : $this->input->post('item_type_id');
    $this->session->set_userdata('drug_type.drug_type_id', $generic_item_post['drug_type.drug_type_id']);
    $this->session->set_userdata('item_type.item_type_id', $generic_item_post['item_type.item_type_id']);
    $this->db->insert('generic_item', $generic_item_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $generic_item_post);
  }
  function generic_item_update($drug_type_id,$item_type_id,$generic_item_id) {
    $generic_item_post['drug_type.drug_type_id'] = $this->session->drug_type_drug_type_id;
    $generic_item_post['item_type.item_type_id'] = $this->session->item_type_item_type_id;
    $generic_item_post['generic_item.generic_item_id'] = $this->session->generic_item_generic_item_id;
    $generic_item_post['drug_type.drug_type_id'] = $drug_type_drug_type_id;
    $generic_item_post['item_type.item_type_id'] = $item_type_item_type_id;
    $generic_item_post['generic_item.generic_item_id'] = $generic_item_generic_item_id;
    $generic_item_post['generic_item.drug_type_id'] = is_null($this->input->post('generic_item_drug_type_id')) ? '' : $this->input->post('generic_item_drug_type_id');
    $generic_item_post['generic_item.generic_name'] = is_null($this->input->post('generic_item_generic_name')) ? '' : $this->input->post('generic_item_generic_name');
    $generic_item_post['generic_item.item_type_id'] = is_null($this->input->post('generic_item_item_type_id')) ? '' : $this->input->post('generic_item_item_type_id');
    $this->session->set_userdata('drug_type.drug_type_id', $generic_item_post['drug_type.drug_type_id']);
    $this->session->set_userdata('item_type.item_type_id', $generic_item_post['item_type.item_type_id']);
    $this->session->set_userdata('generic_item.generic_item_id', $generic_item_post['generic_item.generic_item_id']);
    $this->db->update('generic_item', $generic_item_post, array('generic_item_id' => $generic_item_post['generic_item_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $generic_item_post);
  }
  function generic_item_delete() {
    $generic_item_delete['generic_item.drug_type_id'] = is_null($this->input->post('generic_item_drug_type_id')) ? '' : $this->input->post('generic_item_drug_type_id');
    $generic_item_delete['generic_item.generic_item_id'] = is_null($this->input->post('generic_item_generic_item_id')) ? '' : $this->input->post('generic_item_generic_item_id');
    $generic_item_delete['generic_item.generic_name'] = is_null($this->input->post('generic_item_generic_name')) ? '' : $this->input->post('generic_item_generic_name');
    $generic_item_delete['generic_item.item_type_id'] = is_null($this->input->post('generic_item_item_type_id')) ? '' : $this->input->post('generic_item_item_type_id');
    $this->db->delete('generic_item', array('generic_item_id' => $generic_item_delete['generic_item_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $generic_item_delete);
  }
  function generic_item_get_records($drug_type_id,$item_type_id,$generic_item_id) {
    $generic_item_filters['drug_type.drug_type_id'] = $this->session->drug_type_drug_type_id;
    $generic_item_filters['item_type.item_type_id'] = $this->session->item_type_item_type_id;
    $generic_item_filters['generic_item.generic_item_id'] = $this->session->generic_item_generic_item_id;
    $generic_item_filters['drug_type.drug_type_id'] = $drug_type_drug_type_id;
    $generic_item_filters['item_type.item_type_id'] = $item_type_item_type_id;
    $generic_item_filters['generic_item.generic_item_id'] = $generic_item_generic_item_id;
    $generic_item_filters['generic_item.drug_type_id'] = is_null($this->input->post('generic_item_drug_type_id')) ? '' : $this->input->post('generic_item_drug_type_id');
    $generic_item_filters['generic_item.generic_name'] = is_null($this->input->post('generic_item_generic_name')) ? '' : $this->input->post('generic_item_generic_name');
    $generic_item_filters['generic_item.item_type_id'] = is_null($this->input->post('generic_item_item_type_id')) ? '' : $this->input->post('generic_item_item_type_id');
    $this->session->set_userdata('drug_type.drug_type_id', $generic_item_filters['drug_type.drug_type_id']);
    $this->session->set_userdata('item_type.item_type_id', $generic_item_filters['item_type.item_type_id']);
    $this->session->set_userdata('generic_item.generic_item_id', $generic_item_filters['generic_item.generic_item_id']);
    $this->db->select('drug_type.drug_type_id AS generic_item_drug_type_id, item_type.item_type_id AS generic_item_item_type_id,
    generic_item.drug_type_id AS generic_item_drug_type_id, generic_item.generic_item_id AS generic_item_generic_item_id,
    generic_item.generic_name AS generic_item_generic_name, generic_item.item_type_id AS generic_item_item_type_id')->from('generic_item');
    $this->db->join('drug_type', 'generic_item.drug_type_id = drug_type.drug_type_id', 'left');
    $this->db->join('item_type', 'generic_item.item_type_id = item_type.item_type_id', 'left');
    $this->db->where($generic_item_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $generic_item_filters);
  }
}