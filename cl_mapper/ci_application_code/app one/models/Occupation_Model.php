<?php class Occupation_model extends CI_Model {
  function occupation_create() {
    $occupation_post = [];
    $occupation_post['occupation'] = is_null($this->input->post('occupation')) ? '' : $this->input->post('occupation');
    $occupation_post['occupation_id'] = is_null($this->input->post('occupation_id')) ? '' : $this->input->post('occupation_id');
    $this->db->insert('occupation', $occupation_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $occupation_post);
  }
  function occupation_update($occupation_id) {
    $occupation_post['occupation.occupation_id'] = $this->session->occupation_occupation_id;
    $occupation_post['occupation.occupation_id'] = $occupation_occupation_id;
    $occupation_post['occupation.occupation'] = is_null($this->input->post('occupation_occupation')) ? '' : $this->input->post('occupation_occupation');
    $this->session->set_userdata('occupation.occupation_id', $occupation_post['occupation.occupation_id']);
    $this->db->update('occupation', $occupation_post, array('occupation_id' => $occupation_post['occupation_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $occupation_post);
  }
  function occupation_delete() {
    $occupation_delete['occupation.occupation'] = is_null($this->input->post('occupation_occupation')) ? '' : $this->input->post('occupation_occupation');
    $occupation_delete['occupation.occupation_id'] = is_null($this->input->post('occupation_occupation_id')) ? '' : $this->input->post('occupation_occupation_id');
    $this->db->delete('occupation', array('occupation_id' => $occupation_delete['occupation_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $occupation_delete);
  }
  function occupation_get_records($occupation_id) {
    $occupation_filters['occupation.occupation_id'] = $this->session->occupation_occupation_id;
    $occupation_filters['occupation.occupation_id'] = $occupation_occupation_id;
    $occupation_filters['occupation.occupation'] = is_null($this->input->post('occupation_occupation')) ? '' : $this->input->post('occupation_occupation');
    $this->session->set_userdata('occupation.occupation_id', $occupation_filters['occupation.occupation_id']);
    $this->db->select('occupation.occupation AS occupation_occupation, occupation.occupation_id AS occupation_occupation_id')->from('occupation');
    $this->db->where($occupation_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $occupation_filters);
  }
}