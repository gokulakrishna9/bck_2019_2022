<?php class Patient_arrival_mode_model extends CI_Model {
  function patient_arrival_mode_create() {
    $patient_arrival_mode_post = [];
    $patient_arrival_mode_post['arrival_id'] = is_null($this->input->post('arrival_id')) ? '' : $this->input->post('arrival_id');
    $patient_arrival_mode_post['arrival_mode'] = is_null($this->input->post('arrival_mode')) ? '' : $this->input->post('arrival_mode');
    $this->db->insert('patient_arrival_mode', $patient_arrival_mode_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $patient_arrival_mode_post);
  }
  function patient_arrival_mode_update() {
    $patient_arrival_mode_post['patient_arrival_mode.arrival_id'] = $this->session->patient_arrival_mode_arrival_id;
    $patient_arrival_mode_post['patient_arrival_mode.arrival_id'] = $patient_arrival_mode_arrival_id;
    $patient_arrival_mode_post['patient_arrival_mode.arrival_mode'] = is_null($this->input->post('patient_arrival_mode_arrival_mode')) ? '' : $this->input->post('patient_arrival_mode_arrival_mode');
    $this->session->set_userdata('patient_arrival_mode.arrival_id', $patient_arrival_mode_post['patient_arrival_mode.arrival_id']);
    $this->db->update('patient_arrival_mode', $patient_arrival_mode_post, array('arrival_id' => $patient_arrival_mode_post['arrival_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $patient_arrival_mode_post);
  }
  function patient_arrival_mode_delete() {
    $patient_arrival_mode_delete['patient_arrival_mode.arrival_id'] = is_null($this->input->post('patient_arrival_mode_arrival_id')) ? '' : $this->input->post('patient_arrival_mode_arrival_id');
    $patient_arrival_mode_delete['patient_arrival_mode.arrival_mode'] = is_null($this->input->post('patient_arrival_mode_arrival_mode')) ? '' : $this->input->post('patient_arrival_mode_arrival_mode');
    $this->db->delete('patient_arrival_mode', array('arrival_id' => $patient_arrival_mode_delete['arrival_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $patient_arrival_mode_delete);
  }
  function patient_arrival_mode_get_records() {
    $patient_arrival_mode_filters['patient_arrival_mode.arrival_id'] = $this->session->patient_arrival_mode_arrival_id;
    $patient_arrival_mode_filters['patient_arrival_mode.arrival_id'] = $patient_arrival_mode_arrival_id;
    $patient_arrival_mode_filters['patient_arrival_mode.arrival_mode'] = is_null($this->input->post('patient_arrival_mode_arrival_mode')) ? '' : $this->input->post('patient_arrival_mode_arrival_mode');
    $this->session->set_userdata('patient_arrival_mode.arrival_id', $patient_arrival_mode_filters['patient_arrival_mode.arrival_id']);
    $this->db->select('patient_arrival_mode.arrival_id AS patient_arrival_mode_arrival_id, patient_arrival_mode.arrival_mode AS patient_arrival_mode_arrival_mode')->from('patient_arrival_mode');
    $this->db->where($patient_arrival_mode_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $patient_arrival_mode_filters);
  }
}