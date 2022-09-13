<?php class Patient_treatment_model extends CI_Model {
  function patient_treatment_create() {
    $patient_treatment_post = [];
    $patient_treatment_post['treatment_id'] = is_null($this->input->post('treatment_id')) ? '' : $this->input->post('treatment_id');
    $patient_treatment_post['visit_id'] = is_null($this->input->post('visit_id')) ? '' : $this->input->post('visit_id');
    $patient_treatment_post['treatment_type'] = is_null($this->input->post('treatment_type')) ? '' : $this->input->post('treatment_type');
    $patient_treatment_post['treatment'] = is_null($this->input->post('treatment')) ? '' : $this->input->post('treatment');
    $patient_treatment_post['treatment_date'] = is_null($this->input->post('treatment_date')) ? '' : $this->input->post('treatment_date');
    $patient_treatment_post['treatment_time'] = is_null($this->input->post('treatment_time')) ? '' : $this->input->post('treatment_time');
    $patient_treatment_post['duration'] = is_null($this->input->post('duration')) ? '' : $this->input->post('duration');
    $patient_treatment_post['notes'] = is_null($this->input->post('notes')) ? '' : $this->input->post('notes');
    $this->db->insert('patient_treatment', $patient_treatment_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $patient_treatment_post);
  }
  function patient_treatment_update() {
    $patient_treatment_post['patient_treatment.treatment_id'] = $this->session->patient_treatment_treatment_id;
    $patient_treatment_post['patient_treatment.treatment_id'] = $patient_treatment_treatment_id;
    $patient_treatment_post['patient_treatment.visit_id'] = is_null($this->input->post('patient_treatment_visit_id')) ? '' : $this->input->post('patient_treatment_visit_id');
    $patient_treatment_post['patient_treatment.treatment_type'] = is_null($this->input->post('patient_treatment_treatment_type')) ? '' : $this->input->post('patient_treatment_treatment_type');
    $patient_treatment_post['patient_treatment.treatment'] = is_null($this->input->post('patient_treatment_treatment')) ? '' : $this->input->post('patient_treatment_treatment');
    $patient_treatment_post['patient_treatment.treatment_date'] = is_null($this->input->post('patient_treatment_treatment_date')) ? '' : $this->input->post('patient_treatment_treatment_date');
    $patient_treatment_post['patient_treatment.treatment_time'] = is_null($this->input->post('patient_treatment_treatment_time')) ? '' : $this->input->post('patient_treatment_treatment_time');
    $patient_treatment_post['patient_treatment.duration'] = is_null($this->input->post('patient_treatment_duration')) ? '' : $this->input->post('patient_treatment_duration');
    $patient_treatment_post['patient_treatment.notes'] = is_null($this->input->post('patient_treatment_notes')) ? '' : $this->input->post('patient_treatment_notes');
    $this->session->set_userdata('patient_treatment.treatment_id', $patient_treatment_post['patient_treatment.treatment_id']);
    $this->db->update('patient_treatment', $patient_treatment_post, array('treatment_id' => $patient_treatment_post['treatment_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $patient_treatment_post);
  }
  function patient_treatment_delete() {
    $patient_treatment_delete['patient_treatment.treatment_id'] = is_null($this->input->post('patient_treatment_treatment_id')) ? '' : $this->input->post('patient_treatment_treatment_id');
    $patient_treatment_delete['patient_treatment.visit_id'] = is_null($this->input->post('patient_treatment_visit_id')) ? '' : $this->input->post('patient_treatment_visit_id');
    $patient_treatment_delete['patient_treatment.treatment_type'] = is_null($this->input->post('patient_treatment_treatment_type')) ? '' : $this->input->post('patient_treatment_treatment_type');
    $patient_treatment_delete['patient_treatment.treatment'] = is_null($this->input->post('patient_treatment_treatment')) ? '' : $this->input->post('patient_treatment_treatment');
    $patient_treatment_delete['patient_treatment.treatment_date'] = is_null($this->input->post('patient_treatment_treatment_date')) ? '' : $this->input->post('patient_treatment_treatment_date');
    $patient_treatment_delete['patient_treatment.treatment_time'] = is_null($this->input->post('patient_treatment_treatment_time')) ? '' : $this->input->post('patient_treatment_treatment_time');
    $patient_treatment_delete['patient_treatment.duration'] = is_null($this->input->post('patient_treatment_duration')) ? '' : $this->input->post('patient_treatment_duration');
    $patient_treatment_delete['patient_treatment.notes'] = is_null($this->input->post('patient_treatment_notes')) ? '' : $this->input->post('patient_treatment_notes');
    $this->db->delete('patient_treatment', array('treatment_id' => $patient_treatment_delete['treatment_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $patient_treatment_delete);
  }
  function patient_treatment_get_records() {
    $patient_treatment_filters['patient_treatment.treatment_id'] = $this->session->patient_treatment_treatment_id;
    $patient_treatment_filters['patient_treatment.treatment_id'] = $patient_treatment_treatment_id;
    $patient_treatment_filters['patient_treatment.visit_id'] = is_null($this->input->post('patient_treatment_visit_id')) ? '' : $this->input->post('patient_treatment_visit_id');
    $patient_treatment_filters['patient_treatment.treatment_type'] = is_null($this->input->post('patient_treatment_treatment_type')) ? '' : $this->input->post('patient_treatment_treatment_type');
    $patient_treatment_filters['patient_treatment.treatment'] = is_null($this->input->post('patient_treatment_treatment')) ? '' : $this->input->post('patient_treatment_treatment');
    $patient_treatment_filters['patient_treatment.treatment_date'] = is_null($this->input->post('patient_treatment_treatment_date')) ? '' : $this->input->post('patient_treatment_treatment_date');
    $patient_treatment_filters['patient_treatment.treatment_time'] = is_null($this->input->post('patient_treatment_treatment_time')) ? '' : $this->input->post('patient_treatment_treatment_time');
    $patient_treatment_filters['patient_treatment.duration'] = is_null($this->input->post('patient_treatment_duration')) ? '' : $this->input->post('patient_treatment_duration');
    $patient_treatment_filters['patient_treatment.notes'] = is_null($this->input->post('patient_treatment_notes')) ? '' : $this->input->post('patient_treatment_notes');
    $this->session->set_userdata('patient_treatment.treatment_id', $patient_treatment_filters['patient_treatment.treatment_id']);
    $this->db->select('patient_treatment.treatment_id AS patient_treatment_treatment_id, patient_treatment.visit_id AS patient_treatment_visit_id,
    patient_treatment.treatment_type AS patient_treatment_treatment_type, patient_treatment.treatment AS patient_treatment_treatment,
    patient_treatment.treatment_date AS patient_treatment_treatment_date, patient_treatment.treatment_time AS patient_treatment_treatment_time,
    patient_treatment.duration AS patient_treatment_duration, patient_treatment.notes AS patient_treatment_notes')->from('patient_treatment');
    $this->db->where($patient_treatment_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $patient_treatment_filters);
  }
}