<?php class Drug_type_model extends CI_Model {
  function drug_type_create() {
    $drug_type_post = [];
    $drug_type_post['description'] = is_null($this->input->post('description')) ? '' : $this->input->post('description');
    $drug_type_post['drug_type'] = is_null($this->input->post('drug_type')) ? '' : $this->input->post('drug_type');
    $drug_type_post['drug_type_id'] = is_null($this->input->post('drug_type_id')) ? '' : $this->input->post('drug_type_id');
    $this->db->insert('drug_type', $drug_type_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $drug_type_post);
  }
  function drug_type_update($drug_type_id) {
    $drug_type_post['drug_type.drug_type_id'] = $this->session->drug_type_drug_type_id;
    $drug_type_post['drug_type.drug_type_id'] = $drug_type_drug_type_id;
    $drug_type_post['drug_type.description'] = is_null($this->input->post('drug_type_description')) ? '' : $this->input->post('drug_type_description');
    $drug_type_post['drug_type.drug_type'] = is_null($this->input->post('drug_type_drug_type')) ? '' : $this->input->post('drug_type_drug_type');
    $this->session->set_userdata('drug_type.drug_type_id', $drug_type_post['drug_type.drug_type_id']);
    $this->db->update('drug_type', $drug_type_post, array('drug_type_id' => $drug_type_post['drug_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $drug_type_post);
  }
  function drug_type_delete() {
    $drug_type_delete['drug_type.description'] = is_null($this->input->post('drug_type_description')) ? '' : $this->input->post('drug_type_description');
    $drug_type_delete['drug_type.drug_type'] = is_null($this->input->post('drug_type_drug_type')) ? '' : $this->input->post('drug_type_drug_type');
    $drug_type_delete['drug_type.drug_type_id'] = is_null($this->input->post('drug_type_drug_type_id')) ? '' : $this->input->post('drug_type_drug_type_id');
    $this->db->delete('drug_type', array('drug_type_id' => $drug_type_delete['drug_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $drug_type_delete);
  }
  function drug_type_get_records($drug_type_id) {
    $drug_type_filters['drug_type.drug_type_id'] = $this->session->drug_type_drug_type_id;
    $drug_type_filters['drug_type.drug_type_id'] = $drug_type_drug_type_id;
    $drug_type_filters['drug_type.description'] = is_null($this->input->post('drug_type_description')) ? '' : $this->input->post('drug_type_description');
    $drug_type_filters['drug_type.drug_type'] = is_null($this->input->post('drug_type_drug_type')) ? '' : $this->input->post('drug_type_drug_type');
    $this->session->set_userdata('drug_type.drug_type_id', $drug_type_filters['drug_type.drug_type_id']);
    $this->db->select('drug_type.description AS drug_type_description, drug_type.drug_type AS drug_type_drug_type,
    drug_type.drug_type_id AS drug_type_drug_type_id')->from('drug_type');
    $this->db->where($drug_type_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $drug_type_filters);
  }
}