<?php class Procedure_plan_model extends CI_Model {
  function procedure_plan_create() {
    $procedure_plan_post = [];
    $procedure_plan_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $procedure_plan_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $procedure_plan_post['procedure.procedure_id'] = $this->session->procedure_procedure_id;
    $procedure_plan_post['mlc.visit_id'] = $mlc_visit_id;
    $procedure_plan_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $procedure_plan_post['procedure.procedure_id'] = $procedure_procedure_id;
    $procedure_plan_post['procedure_plan_id'] = is_null($this->input->post('procedure_plan_id')) ? '' : $this->input->post('procedure_plan_id');
    $procedure_plan_post['visit_id'] = is_null($this->input->post('visit_id')) ? '' : $this->input->post('visit_id');
    $procedure_plan_post['procedure_id'] = is_null($this->input->post('procedure_id')) ? '' : $this->input->post('procedure_id');
    $procedure_plan_post['plan_date'] = is_null($this->input->post('plan_date')) ? '' : $this->input->post('plan_date');
    $procedure_plan_post['status'] = is_null($this->input->post('status')) ? '' : $this->input->post('status');
    $this->session->set_userdata('mlc.visit_id', $procedure_plan_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $procedure_plan_post['patient_visit.visit_id']);
    $this->session->set_userdata('procedure.procedure_id', $procedure_plan_post['procedure.procedure_id']);
    $this->db->insert('procedure_plan', $procedure_plan_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $procedure_plan_post);
  }
  function procedure_plan_update() {
    $procedure_plan_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $procedure_plan_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $procedure_plan_post['procedure.procedure_id'] = $this->session->procedure_procedure_id;
    $procedure_plan_post['procedure_plan.procedure_plan_id'] = $this->session->procedure_plan_procedure_plan_id;
    $procedure_plan_post['mlc.visit_id'] = $mlc_visit_id;
    $procedure_plan_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $procedure_plan_post['procedure.procedure_id'] = $procedure_procedure_id;
    $procedure_plan_post['procedure_plan.procedure_plan_id'] = $procedure_plan_procedure_plan_id;
    $procedure_plan_post['procedure_plan.visit_id'] = is_null($this->input->post('procedure_plan_visit_id')) ? '' : $this->input->post('procedure_plan_visit_id');
    $procedure_plan_post['procedure_plan.procedure_id'] = is_null($this->input->post('procedure_plan_procedure_id')) ? '' : $this->input->post('procedure_plan_procedure_id');
    $procedure_plan_post['procedure_plan.plan_date'] = is_null($this->input->post('procedure_plan_plan_date')) ? '' : $this->input->post('procedure_plan_plan_date');
    $procedure_plan_post['procedure_plan.status'] = is_null($this->input->post('procedure_plan_status')) ? '' : $this->input->post('procedure_plan_status');
    $this->session->set_userdata('mlc.visit_id', $procedure_plan_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $procedure_plan_post['patient_visit.visit_id']);
    $this->session->set_userdata('procedure.procedure_id', $procedure_plan_post['procedure.procedure_id']);
    $this->session->set_userdata('procedure_plan.procedure_plan_id', $procedure_plan_post['procedure_plan.procedure_plan_id']);
    $this->db->update('procedure_plan', $procedure_plan_post, array('procedure_plan_id' => $procedure_plan_post['procedure_plan_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $procedure_plan_post);
  }
  function procedure_plan_delete() {
    $procedure_plan_delete['procedure_plan.procedure_plan_id'] = is_null($this->input->post('procedure_plan_procedure_plan_id')) ? '' : $this->input->post('procedure_plan_procedure_plan_id');
    $procedure_plan_delete['procedure_plan.visit_id'] = is_null($this->input->post('procedure_plan_visit_id')) ? '' : $this->input->post('procedure_plan_visit_id');
    $procedure_plan_delete['procedure_plan.procedure_id'] = is_null($this->input->post('procedure_plan_procedure_id')) ? '' : $this->input->post('procedure_plan_procedure_id');
    $procedure_plan_delete['procedure_plan.plan_date'] = is_null($this->input->post('procedure_plan_plan_date')) ? '' : $this->input->post('procedure_plan_plan_date');
    $procedure_plan_delete['procedure_plan.status'] = is_null($this->input->post('procedure_plan_status')) ? '' : $this->input->post('procedure_plan_status');
    $this->db->delete('procedure_plan', array('procedure_plan_id' => $procedure_plan_delete['procedure_plan_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $procedure_plan_delete);
  }
  function procedure_plan_get_records() {
    $procedure_plan_filters['mlc.visit_id'] = $this->session->mlc_visit_id;
    $procedure_plan_filters['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $procedure_plan_filters['procedure.procedure_id'] = $this->session->procedure_procedure_id;
    $procedure_plan_filters['procedure_plan.procedure_plan_id'] = $this->session->procedure_plan_procedure_plan_id;
    $procedure_plan_filters['mlc.visit_id'] = $mlc_visit_id;
    $procedure_plan_filters['patient_visit.visit_id'] = $patient_visit_visit_id;
    $procedure_plan_filters['procedure.procedure_id'] = $procedure_procedure_id;
    $procedure_plan_filters['procedure_plan.procedure_plan_id'] = $procedure_plan_procedure_plan_id;
    $procedure_plan_filters['procedure_plan.visit_id'] = is_null($this->input->post('procedure_plan_visit_id')) ? '' : $this->input->post('procedure_plan_visit_id');
    $procedure_plan_filters['procedure_plan.procedure_id'] = is_null($this->input->post('procedure_plan_procedure_id')) ? '' : $this->input->post('procedure_plan_procedure_id');
    $procedure_plan_filters['procedure_plan.plan_date'] = is_null($this->input->post('procedure_plan_plan_date')) ? '' : $this->input->post('procedure_plan_plan_date');
    $procedure_plan_filters['procedure_plan.status'] = is_null($this->input->post('procedure_plan_status')) ? '' : $this->input->post('procedure_plan_status');
    $this->session->set_userdata('mlc.visit_id', $procedure_plan_filters['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $procedure_plan_filters['patient_visit.visit_id']);
    $this->session->set_userdata('procedure.procedure_id', $procedure_plan_filters['procedure.procedure_id']);
    $this->session->set_userdata('procedure_plan.procedure_plan_id', $procedure_plan_filters['procedure_plan.procedure_plan_id']);
    $this->db->select('mlc.visit_id AS procedure_plan_visit_id, patient_visit.visit_id AS procedure_plan_visit_id,
    procedure.procedure_id AS procedure_plan_procedure_id, procedure_plan.procedure_plan_id AS procedure_plan_procedure_plan_id,
    procedure_plan.visit_id AS procedure_plan_visit_id, procedure_plan.procedure_id AS procedure_plan_procedure_id,
    procedure_plan.plan_date AS procedure_plan_plan_date, procedure_plan.status AS procedure_plan_status')->from('procedure_plan');
    $this->db->join('mlc', 'procedure_plan.visit_id = mlc.visit_id', 'left');
    $this->db->join('patient_visit', 'procedure_plan.visit_id = patient_visit.visit_id', 'left');
    $this->db->join('procedure', 'procedure_plan.procedure_id = procedure.procedure_id', 'left');
    $this->db->where($procedure_plan_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $procedure_plan_filters);
  }
}