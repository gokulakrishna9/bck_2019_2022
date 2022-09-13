<?php class Menstrual_history_model extends CI_Model {
  function menstrual_history_create() {
    $menstrual_history_post = [];
    $menstrual_history_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $menstrual_history_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $menstrual_history_post['mlc.visit_id'] = $mlc_visit_id;
    $menstrual_history_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $menstrual_history_post['menstrual_history_id'] = is_null($this->input->post('menstrual_history_id')) ? '' : $this->input->post('menstrual_history_id');
    $menstrual_history_post['visit_id'] = is_null($this->input->post('visit_id')) ? '' : $this->input->post('visit_id');
    $menstrual_history_post['regularity'] = is_null($this->input->post('regularity')) ? '' : $this->input->post('regularity');
    $menstrual_history_post['cycle'] = is_null($this->input->post('cycle')) ? '' : $this->input->post('cycle');
    $menstrual_history_post['flow_amount'] = is_null($this->input->post('flow_amount')) ? '' : $this->input->post('flow_amount');
    $menstrual_history_post['dysmenorrhea'] = is_null($this->input->post('dysmenorrhea')) ? '' : $this->input->post('dysmenorrhea');
    $this->session->set_userdata('mlc.visit_id', $menstrual_history_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $menstrual_history_post['patient_visit.visit_id']);
    $this->db->insert('menstrual_history', $menstrual_history_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $menstrual_history_post);
  }
  function menstrual_history_update() {
    $menstrual_history_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $menstrual_history_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $menstrual_history_post['menstrual_history.menstrual_history_id'] = $this->session->menstrual_history_menstrual_history_id;
    $menstrual_history_post['mlc.visit_id'] = $mlc_visit_id;
    $menstrual_history_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $menstrual_history_post['menstrual_history.menstrual_history_id'] = $menstrual_history_menstrual_history_id;
    $menstrual_history_post['menstrual_history.visit_id'] = is_null($this->input->post('menstrual_history_visit_id')) ? '' : $this->input->post('menstrual_history_visit_id');
    $menstrual_history_post['menstrual_history.regularity'] = is_null($this->input->post('menstrual_history_regularity')) ? '' : $this->input->post('menstrual_history_regularity');
    $menstrual_history_post['menstrual_history.cycle'] = is_null($this->input->post('menstrual_history_cycle')) ? '' : $this->input->post('menstrual_history_cycle');
    $menstrual_history_post['menstrual_history.flow_amount'] = is_null($this->input->post('menstrual_history_flow_amount')) ? '' : $this->input->post('menstrual_history_flow_amount');
    $menstrual_history_post['menstrual_history.dysmenorrhea'] = is_null($this->input->post('menstrual_history_dysmenorrhea')) ? '' : $this->input->post('menstrual_history_dysmenorrhea');
    $this->session->set_userdata('mlc.visit_id', $menstrual_history_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $menstrual_history_post['patient_visit.visit_id']);
    $this->session->set_userdata('menstrual_history.menstrual_history_id', $menstrual_history_post['menstrual_history.menstrual_history_id']);
    $this->db->update('menstrual_history', $menstrual_history_post, array('menstrual_history_id' => $menstrual_history_post['menstrual_history_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $menstrual_history_post);
  }
  function menstrual_history_delete() {
    $menstrual_history_delete['menstrual_history.menstrual_history_id'] = is_null($this->input->post('menstrual_history_menstrual_history_id')) ? '' : $this->input->post('menstrual_history_menstrual_history_id');
    $menstrual_history_delete['menstrual_history.visit_id'] = is_null($this->input->post('menstrual_history_visit_id')) ? '' : $this->input->post('menstrual_history_visit_id');
    $menstrual_history_delete['menstrual_history.regularity'] = is_null($this->input->post('menstrual_history_regularity')) ? '' : $this->input->post('menstrual_history_regularity');
    $menstrual_history_delete['menstrual_history.cycle'] = is_null($this->input->post('menstrual_history_cycle')) ? '' : $this->input->post('menstrual_history_cycle');
    $menstrual_history_delete['menstrual_history.flow_amount'] = is_null($this->input->post('menstrual_history_flow_amount')) ? '' : $this->input->post('menstrual_history_flow_amount');
    $menstrual_history_delete['menstrual_history.dysmenorrhea'] = is_null($this->input->post('menstrual_history_dysmenorrhea')) ? '' : $this->input->post('menstrual_history_dysmenorrhea');
    $this->db->delete('menstrual_history', array('menstrual_history_id' => $menstrual_history_delete['menstrual_history_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $menstrual_history_delete);
  }
  function menstrual_history_get_records() {
    $menstrual_history_filters['mlc.visit_id'] = $this->session->mlc_visit_id;
    $menstrual_history_filters['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $menstrual_history_filters['menstrual_history.menstrual_history_id'] = $this->session->menstrual_history_menstrual_history_id;
    $menstrual_history_filters['mlc.visit_id'] = $mlc_visit_id;
    $menstrual_history_filters['patient_visit.visit_id'] = $patient_visit_visit_id;
    $menstrual_history_filters['menstrual_history.menstrual_history_id'] = $menstrual_history_menstrual_history_id;
    $menstrual_history_filters['menstrual_history.visit_id'] = is_null($this->input->post('menstrual_history_visit_id')) ? '' : $this->input->post('menstrual_history_visit_id');
    $menstrual_history_filters['menstrual_history.regularity'] = is_null($this->input->post('menstrual_history_regularity')) ? '' : $this->input->post('menstrual_history_regularity');
    $menstrual_history_filters['menstrual_history.cycle'] = is_null($this->input->post('menstrual_history_cycle')) ? '' : $this->input->post('menstrual_history_cycle');
    $menstrual_history_filters['menstrual_history.flow_amount'] = is_null($this->input->post('menstrual_history_flow_amount')) ? '' : $this->input->post('menstrual_history_flow_amount');
    $menstrual_history_filters['menstrual_history.dysmenorrhea'] = is_null($this->input->post('menstrual_history_dysmenorrhea')) ? '' : $this->input->post('menstrual_history_dysmenorrhea');
    $this->session->set_userdata('mlc.visit_id', $menstrual_history_filters['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $menstrual_history_filters['patient_visit.visit_id']);
    $this->session->set_userdata('menstrual_history.menstrual_history_id', $menstrual_history_filters['menstrual_history.menstrual_history_id']);
    $this->db->select('mlc.visit_id AS menstrual_history_visit_id, patient_visit.visit_id AS menstrual_history_visit_id,
    menstrual_history.menstrual_history_id AS menstrual_history_menstrual_history_id, menstrual_history.visit_id AS menstrual_history_visit_id,
    menstrual_history.regularity AS menstrual_history_regularity, menstrual_history.cycle AS menstrual_history_cycle,
    menstrual_history.flow_amount AS menstrual_history_flow_amount, menstrual_history.dysmenorrhea AS menstrual_history_dysmenorrhea')->from('menstrual_history');
    $this->db->join('mlc', 'menstrual_history.visit_id = mlc.visit_id', 'left');
    $this->db->join('patient_visit', 'menstrual_history.visit_id = patient_visit.visit_id', 'left');
    $this->db->where($menstrual_history_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $menstrual_history_filters);
  }
}