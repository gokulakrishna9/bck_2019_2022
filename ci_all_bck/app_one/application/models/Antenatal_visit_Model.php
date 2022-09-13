<?php class Antenatal_visit_model extends CI_Model {
  function antenatal_visit_create() {
    $antenatal_visit_post = [];
    $antenatal_visit_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $antenatal_visit_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $antenatal_visit_post['mlc.visit_id'] = $mlc_visit_id;
    $antenatal_visit_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $antenatal_visit_post['antenatal_visit_id'] = is_null($this->input->post('antenatal_visit_id')) ? '' : $this->input->post('antenatal_visit_id');
    $antenatal_visit_post['visit_id'] = is_null($this->input->post('visit_id')) ? '' : $this->input->post('visit_id');
    $antenatal_visit_post['fundal_height'] = is_null($this->input->post('fundal_height')) ? '' : $this->input->post('fundal_height');
    $antenatal_visit_post['presentation'] = is_null($this->input->post('presentation')) ? '' : $this->input->post('presentation');
    $antenatal_visit_post['fetal_heart_rate'] = is_null($this->input->post('fetal_heart_rate')) ? '' : $this->input->post('fetal_heart_rate');
    $antenatal_visit_post['liquor'] = is_null($this->input->post('liquor')) ? '' : $this->input->post('liquor');
    $antenatal_visit_post['scan_finding'] = is_null($this->input->post('scan_finding')) ? '' : $this->input->post('scan_finding');
    $antenatal_visit_post['advice'] = is_null($this->input->post('advice')) ? '' : $this->input->post('advice');
    $this->session->set_userdata('mlc.visit_id', $antenatal_visit_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $antenatal_visit_post['patient_visit.visit_id']);
    $this->db->insert('antenatal_visit', $antenatal_visit_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $antenatal_visit_post);
  }
  function antenatal_visit_update() {
    $antenatal_visit_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $antenatal_visit_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $antenatal_visit_post['antenatal_visit.antenatal_visit_id'] = $this->session->antenatal_visit_antenatal_visit_id;
    $antenatal_visit_post['mlc.visit_id'] = $mlc_visit_id;
    $antenatal_visit_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $antenatal_visit_post['antenatal_visit.antenatal_visit_id'] = $antenatal_visit_antenatal_visit_id;
    $antenatal_visit_post['antenatal_visit.visit_id'] = is_null($this->input->post('antenatal_visit_visit_id')) ? '' : $this->input->post('antenatal_visit_visit_id');
    $antenatal_visit_post['antenatal_visit.fundal_height'] = is_null($this->input->post('antenatal_visit_fundal_height')) ? '' : $this->input->post('antenatal_visit_fundal_height');
    $antenatal_visit_post['antenatal_visit.presentation'] = is_null($this->input->post('antenatal_visit_presentation')) ? '' : $this->input->post('antenatal_visit_presentation');
    $antenatal_visit_post['antenatal_visit.fetal_heart_rate'] = is_null($this->input->post('antenatal_visit_fetal_heart_rate')) ? '' : $this->input->post('antenatal_visit_fetal_heart_rate');
    $antenatal_visit_post['antenatal_visit.liquor'] = is_null($this->input->post('antenatal_visit_liquor')) ? '' : $this->input->post('antenatal_visit_liquor');
    $antenatal_visit_post['antenatal_visit.scan_finding'] = is_null($this->input->post('antenatal_visit_scan_finding')) ? '' : $this->input->post('antenatal_visit_scan_finding');
    $antenatal_visit_post['antenatal_visit.advice'] = is_null($this->input->post('antenatal_visit_advice')) ? '' : $this->input->post('antenatal_visit_advice');
    $this->session->set_userdata('mlc.visit_id', $antenatal_visit_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $antenatal_visit_post['patient_visit.visit_id']);
    $this->session->set_userdata('antenatal_visit.antenatal_visit_id', $antenatal_visit_post['antenatal_visit.antenatal_visit_id']);
    $this->db->update('antenatal_visit', $antenatal_visit_post, array('antenatal_visit_id' => $antenatal_visit_post['antenatal_visit_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $antenatal_visit_post);
  }
  function antenatal_visit_delete() {
    $antenatal_visit_delete['antenatal_visit.antenatal_visit_id'] = is_null($this->input->post('antenatal_visit_antenatal_visit_id')) ? '' : $this->input->post('antenatal_visit_antenatal_visit_id');
    $antenatal_visit_delete['antenatal_visit.visit_id'] = is_null($this->input->post('antenatal_visit_visit_id')) ? '' : $this->input->post('antenatal_visit_visit_id');
    $antenatal_visit_delete['antenatal_visit.fundal_height'] = is_null($this->input->post('antenatal_visit_fundal_height')) ? '' : $this->input->post('antenatal_visit_fundal_height');
    $antenatal_visit_delete['antenatal_visit.presentation'] = is_null($this->input->post('antenatal_visit_presentation')) ? '' : $this->input->post('antenatal_visit_presentation');
    $antenatal_visit_delete['antenatal_visit.fetal_heart_rate'] = is_null($this->input->post('antenatal_visit_fetal_heart_rate')) ? '' : $this->input->post('antenatal_visit_fetal_heart_rate');
    $antenatal_visit_delete['antenatal_visit.liquor'] = is_null($this->input->post('antenatal_visit_liquor')) ? '' : $this->input->post('antenatal_visit_liquor');
    $antenatal_visit_delete['antenatal_visit.scan_finding'] = is_null($this->input->post('antenatal_visit_scan_finding')) ? '' : $this->input->post('antenatal_visit_scan_finding');
    $antenatal_visit_delete['antenatal_visit.advice'] = is_null($this->input->post('antenatal_visit_advice')) ? '' : $this->input->post('antenatal_visit_advice');
    $this->db->delete('antenatal_visit', array('antenatal_visit_id' => $antenatal_visit_delete['antenatal_visit_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $antenatal_visit_delete);
  }
  function antenatal_visit_get_records() {
    $antenatal_visit_filters['mlc.visit_id'] = $this->session->mlc_visit_id;
    $antenatal_visit_filters['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $antenatal_visit_filters['antenatal_visit.antenatal_visit_id'] = $this->session->antenatal_visit_antenatal_visit_id;
    $antenatal_visit_filters['mlc.visit_id'] = $mlc_visit_id;
    $antenatal_visit_filters['patient_visit.visit_id'] = $patient_visit_visit_id;
    $antenatal_visit_filters['antenatal_visit.antenatal_visit_id'] = $antenatal_visit_antenatal_visit_id;
    $antenatal_visit_filters['antenatal_visit.visit_id'] = is_null($this->input->post('antenatal_visit_visit_id')) ? '' : $this->input->post('antenatal_visit_visit_id');
    $antenatal_visit_filters['antenatal_visit.fundal_height'] = is_null($this->input->post('antenatal_visit_fundal_height')) ? '' : $this->input->post('antenatal_visit_fundal_height');
    $antenatal_visit_filters['antenatal_visit.presentation'] = is_null($this->input->post('antenatal_visit_presentation')) ? '' : $this->input->post('antenatal_visit_presentation');
    $antenatal_visit_filters['antenatal_visit.fetal_heart_rate'] = is_null($this->input->post('antenatal_visit_fetal_heart_rate')) ? '' : $this->input->post('antenatal_visit_fetal_heart_rate');
    $antenatal_visit_filters['antenatal_visit.liquor'] = is_null($this->input->post('antenatal_visit_liquor')) ? '' : $this->input->post('antenatal_visit_liquor');
    $antenatal_visit_filters['antenatal_visit.scan_finding'] = is_null($this->input->post('antenatal_visit_scan_finding')) ? '' : $this->input->post('antenatal_visit_scan_finding');
    $antenatal_visit_filters['antenatal_visit.advice'] = is_null($this->input->post('antenatal_visit_advice')) ? '' : $this->input->post('antenatal_visit_advice');
    $this->session->set_userdata('mlc.visit_id', $antenatal_visit_filters['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $antenatal_visit_filters['patient_visit.visit_id']);
    $this->session->set_userdata('antenatal_visit.antenatal_visit_id', $antenatal_visit_filters['antenatal_visit.antenatal_visit_id']);
    $this->db->select('mlc.visit_id AS antenatal_visit_visit_id, patient_visit.visit_id AS antenatal_visit_visit_id,
    antenatal_visit.antenatal_visit_id AS antenatal_visit_antenatal_visit_id, antenatal_visit.visit_id AS antenatal_visit_visit_id,
    antenatal_visit.fundal_height AS antenatal_visit_fundal_height, antenatal_visit.presentation AS antenatal_visit_presentation,
    antenatal_visit.fetal_heart_rate AS antenatal_visit_fetal_heart_rate, antenatal_visit.liquor AS antenatal_visit_liquor,
    antenatal_visit.scan_finding AS antenatal_visit_scan_finding, antenatal_visit.advice AS antenatal_visit_advice')->from('antenatal_visit');
    $this->db->join('mlc', 'antenatal_visit.visit_id = mlc.visit_id', 'left');
    $this->db->join('patient_visit', 'antenatal_visit.visit_id = patient_visit.visit_id', 'left');
    $this->db->where($antenatal_visit_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $antenatal_visit_filters);
  }
}