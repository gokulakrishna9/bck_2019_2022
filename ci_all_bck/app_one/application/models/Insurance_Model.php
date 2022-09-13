<?php class Insurance_model extends CI_Model {
  function insurance_create() {
    $insurance_post = [];
    $insurance_post['insurance_id'] = is_null($this->input->post('insurance_id')) ? '' : $this->input->post('insurance_id');
    $insurance_post['insurance_name'] = is_null($this->input->post('insurance_name')) ? '' : $this->input->post('insurance_name');
    $this->db->insert('insurance', $insurance_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $insurance_post);
  }
  function insurance_update() {
    $insurance_post['insurance.insurance_id'] = $this->session->insurance_insurance_id;
    $insurance_post['insurance.insurance_id'] = $insurance_insurance_id;
    $insurance_post['insurance.insurance_name'] = is_null($this->input->post('insurance_insurance_name')) ? '' : $this->input->post('insurance_insurance_name');
    $this->session->set_userdata('insurance.insurance_id', $insurance_post['insurance.insurance_id']);
    $this->db->update('insurance', $insurance_post, array('insurance_id' => $insurance_post['insurance_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $insurance_post);
  }
  function insurance_delete() {
    $insurance_delete['insurance.insurance_id'] = is_null($this->input->post('insurance_insurance_id')) ? '' : $this->input->post('insurance_insurance_id');
    $insurance_delete['insurance.insurance_name'] = is_null($this->input->post('insurance_insurance_name')) ? '' : $this->input->post('insurance_insurance_name');
    $this->db->delete('insurance', array('insurance_id' => $insurance_delete['insurance_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $insurance_delete);
  }
  function insurance_get_records() {
    $insurance_filters['insurance.insurance_id'] = $this->session->insurance_insurance_id;
    $insurance_filters['insurance.insurance_id'] = $insurance_insurance_id;
    $insurance_filters['insurance.insurance_name'] = is_null($this->input->post('insurance_insurance_name')) ? '' : $this->input->post('insurance_insurance_name');
    $this->session->set_userdata('insurance.insurance_id', $insurance_filters['insurance.insurance_id']);
    $this->db->select('insurance.insurance_id AS insurance_insurance_id, insurance.insurance_name AS insurance_insurance_name')->from('insurance');
    $this->db->where($insurance_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $insurance_filters);
  }
}