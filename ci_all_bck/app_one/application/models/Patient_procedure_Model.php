<?php class Patient_procedure_model extends CI_Model {
  function patient_procedure_create() {
    $patient_procedure_post = [];
    $patient_procedure_post['procedure_plan.procedure_plan_id'] = $this->session->procedure_plan_procedure_plan_id;
    $patient_procedure_post['procedure.procedure_id'] = $this->session->procedure_procedure_id;
    $patient_procedure_post['procedure_plan.procedure_plan_id'] = $procedure_plan_procedure_plan_id;
    $patient_procedure_post['procedure.procedure_id'] = $procedure_procedure_id;
    $patient_procedure_post['patient_procedure_id'] = is_null($this->input->post('patient_procedure_id')) ? '' : $this->input->post('patient_procedure_id');
    $patient_procedure_post['procedure_plan_id'] = is_null($this->input->post('procedure_plan_id')) ? '' : $this->input->post('procedure_plan_id');
    $patient_procedure_post['visit_id'] = is_null($this->input->post('visit_id')) ? '' : $this->input->post('visit_id');
    $patient_procedure_post['procedure_id'] = is_null($this->input->post('procedure_id')) ? '' : $this->input->post('procedure_id');
    $patient_procedure_post['procedure_datetime'] = is_null($this->input->post('procedure_datetime')) ? '' : $this->input->post('procedure_datetime');
    $patient_procedure_post['procedure_duration'] = is_null($this->input->post('procedure_duration')) ? '' : $this->input->post('procedure_duration');
    $patient_procedure_post['procedure_note'] = is_null($this->input->post('procedure_note')) ? '' : $this->input->post('procedure_note');
    $patient_procedure_post['procedure_findings'] = is_null($this->input->post('procedure_findings')) ? '' : $this->input->post('procedure_findings');
    $patient_procedure_post['post_procedure'] = is_null($this->input->post('post_procedure')) ? '' : $this->input->post('post_procedure');
    $this->session->set_userdata('procedure_plan.procedure_plan_id', $patient_procedure_post['procedure_plan.procedure_plan_id']);
    $this->session->set_userdata('procedure.procedure_id', $patient_procedure_post['procedure.procedure_id']);
    $this->db->insert('patient_procedure', $patient_procedure_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $patient_procedure_post);
  }
  function patient_procedure_update() {
    $patient_procedure_post['procedure_plan.procedure_plan_id'] = $this->session->procedure_plan_procedure_plan_id;
    $patient_procedure_post['procedure.procedure_id'] = $this->session->procedure_procedure_id;
    $patient_procedure_post['patient_procedure.patient_procedure_id'] = $this->session->patient_procedure_patient_procedure_id;
    $patient_procedure_post['procedure_plan.procedure_plan_id'] = $procedure_plan_procedure_plan_id;
    $patient_procedure_post['procedure.procedure_id'] = $procedure_procedure_id;
    $patient_procedure_post['patient_procedure.patient_procedure_id'] = $patient_procedure_patient_procedure_id;
    $patient_procedure_post['patient_procedure.procedure_plan_id'] = is_null($this->input->post('patient_procedure_procedure_plan_id')) ? '' : $this->input->post('patient_procedure_procedure_plan_id');
    $patient_procedure_post['patient_procedure.visit_id'] = is_null($this->input->post('patient_procedure_visit_id')) ? '' : $this->input->post('patient_procedure_visit_id');
    $patient_procedure_post['patient_procedure.procedure_id'] = is_null($this->input->post('patient_procedure_procedure_id')) ? '' : $this->input->post('patient_procedure_procedure_id');
    $patient_procedure_post['patient_procedure.procedure_datetime'] = is_null($this->input->post('patient_procedure_procedure_datetime')) ? '' : $this->input->post('patient_procedure_procedure_datetime');
    $patient_procedure_post['patient_procedure.procedure_duration'] = is_null($this->input->post('patient_procedure_procedure_duration')) ? '' : $this->input->post('patient_procedure_procedure_duration');
    $patient_procedure_post['patient_procedure.procedure_note'] = is_null($this->input->post('patient_procedure_procedure_note')) ? '' : $this->input->post('patient_procedure_procedure_note');
    $patient_procedure_post['patient_procedure.procedure_findings'] = is_null($this->input->post('patient_procedure_procedure_findings')) ? '' : $this->input->post('patient_procedure_procedure_findings');
    $patient_procedure_post['patient_procedure.post_procedure'] = is_null($this->input->post('patient_procedure_post_procedure')) ? '' : $this->input->post('patient_procedure_post_procedure');
    $this->session->set_userdata('procedure_plan.procedure_plan_id', $patient_procedure_post['procedure_plan.procedure_plan_id']);
    $this->session->set_userdata('procedure.procedure_id', $patient_procedure_post['procedure.procedure_id']);
    $this->session->set_userdata('patient_procedure.patient_procedure_id', $patient_procedure_post['patient_procedure.patient_procedure_id']);
    $this->db->update('patient_procedure', $patient_procedure_post, array('patient_procedure_id' => $patient_procedure_post['patient_procedure_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $patient_procedure_post);
  }
  function patient_procedure_delete() {
    $patient_procedure_delete['patient_procedure.patient_procedure_id'] = is_null($this->input->post('patient_procedure_patient_procedure_id')) ? '' : $this->input->post('patient_procedure_patient_procedure_id');
    $patient_procedure_delete['patient_procedure.procedure_plan_id'] = is_null($this->input->post('patient_procedure_procedure_plan_id')) ? '' : $this->input->post('patient_procedure_procedure_plan_id');
    $patient_procedure_delete['patient_procedure.visit_id'] = is_null($this->input->post('patient_procedure_visit_id')) ? '' : $this->input->post('patient_procedure_visit_id');
    $patient_procedure_delete['patient_procedure.procedure_id'] = is_null($this->input->post('patient_procedure_procedure_id')) ? '' : $this->input->post('patient_procedure_procedure_id');
    $patient_procedure_delete['patient_procedure.procedure_datetime'] = is_null($this->input->post('patient_procedure_procedure_datetime')) ? '' : $this->input->post('patient_procedure_procedure_datetime');
    $patient_procedure_delete['patient_procedure.procedure_duration'] = is_null($this->input->post('patient_procedure_procedure_duration')) ? '' : $this->input->post('patient_procedure_procedure_duration');
    $patient_procedure_delete['patient_procedure.procedure_note'] = is_null($this->input->post('patient_procedure_procedure_note')) ? '' : $this->input->post('patient_procedure_procedure_note');
    $patient_procedure_delete['patient_procedure.procedure_findings'] = is_null($this->input->post('patient_procedure_procedure_findings')) ? '' : $this->input->post('patient_procedure_procedure_findings');
    $patient_procedure_delete['patient_procedure.post_procedure'] = is_null($this->input->post('patient_procedure_post_procedure')) ? '' : $this->input->post('patient_procedure_post_procedure');
    $this->db->delete('patient_procedure', array('patient_procedure_id' => $patient_procedure_delete['patient_procedure_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $patient_procedure_delete);
  }
  function patient_procedure_get_records() {
    $patient_procedure_filters['procedure_plan.procedure_plan_id'] = $this->session->procedure_plan_procedure_plan_id;
    $patient_procedure_filters['procedure.procedure_id'] = $this->session->procedure_procedure_id;
    $patient_procedure_filters['patient_procedure.patient_procedure_id'] = $this->session->patient_procedure_patient_procedure_id;
    $patient_procedure_filters['procedure_plan.procedure_plan_id'] = $procedure_plan_procedure_plan_id;
    $patient_procedure_filters['procedure.procedure_id'] = $procedure_procedure_id;
    $patient_procedure_filters['patient_procedure.patient_procedure_id'] = $patient_procedure_patient_procedure_id;
    $patient_procedure_filters['patient_procedure.procedure_plan_id'] = is_null($this->input->post('patient_procedure_procedure_plan_id')) ? '' : $this->input->post('patient_procedure_procedure_plan_id');
    $patient_procedure_filters['patient_procedure.visit_id'] = is_null($this->input->post('patient_procedure_visit_id')) ? '' : $this->input->post('patient_procedure_visit_id');
    $patient_procedure_filters['patient_procedure.procedure_id'] = is_null($this->input->post('patient_procedure_procedure_id')) ? '' : $this->input->post('patient_procedure_procedure_id');
    $patient_procedure_filters['patient_procedure.procedure_datetime'] = is_null($this->input->post('patient_procedure_procedure_datetime')) ? '' : $this->input->post('patient_procedure_procedure_datetime');
    $patient_procedure_filters['patient_procedure.procedure_duration'] = is_null($this->input->post('patient_procedure_procedure_duration')) ? '' : $this->input->post('patient_procedure_procedure_duration');
    $patient_procedure_filters['patient_procedure.procedure_note'] = is_null($this->input->post('patient_procedure_procedure_note')) ? '' : $this->input->post('patient_procedure_procedure_note');
    $patient_procedure_filters['patient_procedure.procedure_findings'] = is_null($this->input->post('patient_procedure_procedure_findings')) ? '' : $this->input->post('patient_procedure_procedure_findings');
    $patient_procedure_filters['patient_procedure.post_procedure'] = is_null($this->input->post('patient_procedure_post_procedure')) ? '' : $this->input->post('patient_procedure_post_procedure');
    $this->session->set_userdata('procedure_plan.procedure_plan_id', $patient_procedure_filters['procedure_plan.procedure_plan_id']);
    $this->session->set_userdata('procedure.procedure_id', $patient_procedure_filters['procedure.procedure_id']);
    $this->session->set_userdata('patient_procedure.patient_procedure_id', $patient_procedure_filters['patient_procedure.patient_procedure_id']);
    $this->db->select('procedure_plan.procedure_plan_id AS patient_procedure_procedure_plan_id, procedure.procedure_id AS patient_procedure_procedure_id,
    patient_procedure.patient_procedure_id AS patient_procedure_patient_procedure_id, patient_procedure.procedure_plan_id AS patient_procedure_procedure_plan_id,
    patient_procedure.visit_id AS patient_procedure_visit_id, patient_procedure.procedure_id AS patient_procedure_procedure_id,
    patient_procedure.procedure_datetime AS patient_procedure_procedure_datetime, patient_procedure.procedure_duration AS patient_procedure_procedure_duration,
    patient_procedure.procedure_note AS patient_procedure_procedure_note, patient_procedure.procedure_findings AS patient_procedure_procedure_findings,
    patient_procedure.post_procedure AS patient_procedure_post_procedure')->from('patient_procedure');
    $this->db->join('procedure_plan', 'patient_procedure.procedure_plan_id = procedure_plan.procedure_plan_id', 'left');
    $this->db->join('procedure', 'patient_procedure.procedure_id = procedure.procedure_id', 'left');
    $this->db->where($patient_procedure_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $patient_procedure_filters);
  }
}