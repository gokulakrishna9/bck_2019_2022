<?php class Icd_code_model extends CI_Model {
  function icd_code_create() {
    $icd_code_post = [];
    $icd_code_post['icd_code'] = is_null($this->input->post('icd_code')) ? '' : $this->input->post('icd_code');
    $icd_code_post['block_id'] = is_null($this->input->post('block_id')) ? '' : $this->input->post('block_id');
    $icd_code_post['icd_10'] = is_null($this->input->post('icd_10')) ? '' : $this->input->post('icd_10');
    $icd_code_post['icd_10_ext'] = is_null($this->input->post('icd_10_ext')) ? '' : $this->input->post('icd_10_ext');
    $icd_code_post['code_title'] = is_null($this->input->post('code_title')) ? '' : $this->input->post('code_title');
    $this->db->insert('icd_code', $icd_code_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $icd_code_post);
  }
  function icd_code_update() {
    $icd_code_post['icd_code.icd_code'] = $this->session->icd_code_icd_code;
    $icd_code_post['icd_code.icd_code'] = $icd_code_icd_code;
    $icd_code_post['icd_code.block_id'] = is_null($this->input->post('icd_code_block_id')) ? '' : $this->input->post('icd_code_block_id');
    $icd_code_post['icd_code.icd_10'] = is_null($this->input->post('icd_code_icd_10')) ? '' : $this->input->post('icd_code_icd_10');
    $icd_code_post['icd_code.icd_10_ext'] = is_null($this->input->post('icd_code_icd_10_ext')) ? '' : $this->input->post('icd_code_icd_10_ext');
    $icd_code_post['icd_code.code_title'] = is_null($this->input->post('icd_code_code_title')) ? '' : $this->input->post('icd_code_code_title');
    $this->session->set_userdata('icd_code.icd_code', $icd_code_post['icd_code.icd_code']);
    $this->db->update('icd_code', $icd_code_post, array('icd_code' => $icd_code_post['icd_code']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $icd_code_post);
  }
  function icd_code_delete() {
    $icd_code_delete['icd_code.icd_code'] = is_null($this->input->post('icd_code_icd_code')) ? '' : $this->input->post('icd_code_icd_code');
    $icd_code_delete['icd_code.block_id'] = is_null($this->input->post('icd_code_block_id')) ? '' : $this->input->post('icd_code_block_id');
    $icd_code_delete['icd_code.icd_10'] = is_null($this->input->post('icd_code_icd_10')) ? '' : $this->input->post('icd_code_icd_10');
    $icd_code_delete['icd_code.icd_10_ext'] = is_null($this->input->post('icd_code_icd_10_ext')) ? '' : $this->input->post('icd_code_icd_10_ext');
    $icd_code_delete['icd_code.code_title'] = is_null($this->input->post('icd_code_code_title')) ? '' : $this->input->post('icd_code_code_title');
    $this->db->delete('icd_code', array('icd_code' => $icd_code_delete['icd_code']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $icd_code_delete);
  }
  function icd_code_get_records() {
    $icd_code_filters['icd_code.icd_code'] = $this->session->icd_code_icd_code;
    $icd_code_filters['icd_code.icd_code'] = $icd_code_icd_code;
    $icd_code_filters['icd_code.block_id'] = is_null($this->input->post('icd_code_block_id')) ? '' : $this->input->post('icd_code_block_id');
    $icd_code_filters['icd_code.icd_10'] = is_null($this->input->post('icd_code_icd_10')) ? '' : $this->input->post('icd_code_icd_10');
    $icd_code_filters['icd_code.icd_10_ext'] = is_null($this->input->post('icd_code_icd_10_ext')) ? '' : $this->input->post('icd_code_icd_10_ext');
    $icd_code_filters['icd_code.code_title'] = is_null($this->input->post('icd_code_code_title')) ? '' : $this->input->post('icd_code_code_title');
    $this->session->set_userdata('icd_code.icd_code', $icd_code_filters['icd_code.icd_code']);
    $this->db->select('icd_code.icd_code AS icd_code_icd_code, icd_code.block_id AS icd_code_block_id,
    icd_code.icd_10 AS icd_code_icd_10, icd_code.icd_10_ext AS icd_code_icd_10_ext,
    icd_code.code_title AS icd_code_code_title')->from('icd_code');
    $this->db->where($icd_code_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $icd_code_filters);
  }
}