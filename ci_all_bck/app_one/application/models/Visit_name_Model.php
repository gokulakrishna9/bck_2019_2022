<?php class Visit_name_model extends CI_Model {
  function visit_name_create() {
    $visit_name_post = [];
    $visit_name_post['visit_name_id'] = is_null($this->input->post('visit_name_id')) ? '' : $this->input->post('visit_name_id');
    $visit_name_post['visit_name'] = is_null($this->input->post('visit_name')) ? '' : $this->input->post('visit_name');
    $this->db->insert('visit_name', $visit_name_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $visit_name_post);
  }
  function visit_name_update() {
    $visit_name_post['visit_name.visit_name_id'] = $this->session->visit_name_visit_name_id;
    $visit_name_post['visit_name.visit_name_id'] = $visit_name_visit_name_id;
    $visit_name_post['visit_name.visit_name'] = is_null($this->input->post('visit_name_visit_name')) ? '' : $this->input->post('visit_name_visit_name');
    $this->session->set_userdata('visit_name.visit_name_id', $visit_name_post['visit_name.visit_name_id']);
    $this->db->update('visit_name', $visit_name_post, array('visit_name_id' => $visit_name_post['visit_name_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $visit_name_post);
  }
  function visit_name_delete() {
    $visit_name_delete['visit_name.visit_name_id'] = is_null($this->input->post('visit_name_visit_name_id')) ? '' : $this->input->post('visit_name_visit_name_id');
    $visit_name_delete['visit_name.visit_name'] = is_null($this->input->post('visit_name_visit_name')) ? '' : $this->input->post('visit_name_visit_name');
    $this->db->delete('visit_name', array('visit_name_id' => $visit_name_delete['visit_name_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $visit_name_delete);
  }
  function visit_name_get_records() {
    $visit_name_filters['visit_name.visit_name_id'] = $this->session->visit_name_visit_name_id;
    $visit_name_filters['visit_name.visit_name_id'] = $visit_name_visit_name_id;
    $visit_name_filters['visit_name.visit_name'] = is_null($this->input->post('visit_name_visit_name')) ? '' : $this->input->post('visit_name_visit_name');
    $this->session->set_userdata('visit_name.visit_name_id', $visit_name_filters['visit_name.visit_name_id']);
    $this->db->select('visit_name.visit_name_id AS visit_name_visit_name_id, visit_name.visit_name AS visit_name_visit_name')->from('visit_name');
    $this->db->where($visit_name_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $visit_name_filters);
  }
}