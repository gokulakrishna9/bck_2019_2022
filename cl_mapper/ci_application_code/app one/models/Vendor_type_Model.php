<?php class Vendor_type_model extends CI_Model {
  function vendor_type_create() {
    $vendor_type_post = [];
    $vendor_type_post['vendor_type'] = is_null($this->input->post('vendor_type')) ? '' : $this->input->post('vendor_type');
    $vendor_type_post['vendor_type_id'] = is_null($this->input->post('vendor_type_id')) ? '' : $this->input->post('vendor_type_id');
    $this->db->insert('vendor_type', $vendor_type_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $vendor_type_post);
  }
  function vendor_type_update($vendor_type_id) {
    $vendor_type_post['vendor_type.vendor_type_id'] = $this->session->vendor_type_vendor_type_id;
    $vendor_type_post['vendor_type.vendor_type_id'] = $vendor_type_vendor_type_id;
    $vendor_type_post['vendor_type.vendor_type'] = is_null($this->input->post('vendor_type_vendor_type')) ? '' : $this->input->post('vendor_type_vendor_type');
    $this->session->set_userdata('vendor_type.vendor_type_id', $vendor_type_post['vendor_type.vendor_type_id']);
    $this->db->update('vendor_type', $vendor_type_post, array('vendor_type_id' => $vendor_type_post['vendor_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $vendor_type_post);
  }
  function vendor_type_delete() {
    $vendor_type_delete['vendor_type.vendor_type'] = is_null($this->input->post('vendor_type_vendor_type')) ? '' : $this->input->post('vendor_type_vendor_type');
    $vendor_type_delete['vendor_type.vendor_type_id'] = is_null($this->input->post('vendor_type_vendor_type_id')) ? '' : $this->input->post('vendor_type_vendor_type_id');
    $this->db->delete('vendor_type', array('vendor_type_id' => $vendor_type_delete['vendor_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $vendor_type_delete);
  }
  function vendor_type_get_records($vendor_type_id) {
    $vendor_type_filters['vendor_type.vendor_type_id'] = $this->session->vendor_type_vendor_type_id;
    $vendor_type_filters['vendor_type.vendor_type_id'] = $vendor_type_vendor_type_id;
    $vendor_type_filters['vendor_type.vendor_type'] = is_null($this->input->post('vendor_type_vendor_type')) ? '' : $this->input->post('vendor_type_vendor_type');
    $this->session->set_userdata('vendor_type.vendor_type_id', $vendor_type_filters['vendor_type.vendor_type_id']);
    $this->db->select('vendor_type.vendor_type AS vendor_type_vendor_type, vendor_type.vendor_type_id AS vendor_type_vendor_type_id')->from('vendor_type');
    $this->db->where($vendor_type_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $vendor_type_filters);
  }
}