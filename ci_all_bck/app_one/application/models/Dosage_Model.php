<?php class Dosage_model extends CI_Model {
  function dosage_create() {
    $dosage_post = [];
    $dosage_post['dosage_id'] = is_null($this->input->post('dosage_id')) ? '' : $this->input->post('dosage_id');
    $dosage_post['dosage_unit'] = is_null($this->input->post('dosage_unit')) ? '' : $this->input->post('dosage_unit');
    $dosage_post['dosage'] = is_null($this->input->post('dosage')) ? '' : $this->input->post('dosage');
    $this->db->insert('dosage', $dosage_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $dosage_post);
  }
  function dosage_update() {
    $dosage_post['dosage.dosage_id'] = $this->session->dosage_dosage_id;
    $dosage_post['dosage.dosage_id'] = $dosage_dosage_id;
    $dosage_post['dosage.dosage_unit'] = is_null($this->input->post('dosage_dosage_unit')) ? '' : $this->input->post('dosage_dosage_unit');
    $dosage_post['dosage.dosage'] = is_null($this->input->post('dosage_dosage')) ? '' : $this->input->post('dosage_dosage');
    $this->session->set_userdata('dosage.dosage_id', $dosage_post['dosage.dosage_id']);
    $this->db->update('dosage', $dosage_post, array('dosage_id' => $dosage_post['dosage_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $dosage_post);
  }
  function dosage_delete() {
    $dosage_delete['dosage.dosage_id'] = is_null($this->input->post('dosage_dosage_id')) ? '' : $this->input->post('dosage_dosage_id');
    $dosage_delete['dosage.dosage_unit'] = is_null($this->input->post('dosage_dosage_unit')) ? '' : $this->input->post('dosage_dosage_unit');
    $dosage_delete['dosage.dosage'] = is_null($this->input->post('dosage_dosage')) ? '' : $this->input->post('dosage_dosage');
    $this->db->delete('dosage', array('dosage_id' => $dosage_delete['dosage_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $dosage_delete);
  }
  function dosage_get_records() {
    $dosage_filters['dosage.dosage_id'] = $this->session->dosage_dosage_id;
    $dosage_filters['dosage.dosage_id'] = $dosage_dosage_id;
    $dosage_filters['dosage.dosage_unit'] = is_null($this->input->post('dosage_dosage_unit')) ? '' : $this->input->post('dosage_dosage_unit');
    $dosage_filters['dosage.dosage'] = is_null($this->input->post('dosage_dosage')) ? '' : $this->input->post('dosage_dosage');
    $this->session->set_userdata('dosage.dosage_id', $dosage_filters['dosage.dosage_id']);
    $this->db->select('dosage.dosage_id AS dosage_dosage_id, dosage.dosage_unit AS dosage_dosage_unit,
    dosage.dosage AS dosage_dosage')->from('dosage');
    $this->db->where($dosage_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $dosage_filters);
  }
}