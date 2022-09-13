<?php class Marital_info_model extends CI_Model {
  function marital_info_create() {
    $marital_info_post = [];
    $marital_info_post['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $marital_info_post['patient.patient_id'] = $this->session->patient_patient_id;
    $marital_info_post['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $marital_info_post['patient.patient_id'] = $patient_patient_id;
    $marital_info_post['marital_history_id'] = is_null($this->input->post('marital_history_id')) ? '' : $this->input->post('marital_history_id');
    $marital_info_post['patient_id'] = is_null($this->input->post('patient_id')) ? '' : $this->input->post('patient_id');
    $marital_info_post['marital_life'] = is_null($this->input->post('marital_life')) ? '' : $this->input->post('marital_life');
    $marital_info_post['consanguinous'] = is_null($this->input->post('consanguinous')) ? '' : $this->input->post('consanguinous');
    $marital_info_post['marital_status'] = is_null($this->input->post('marital_status')) ? '' : $this->input->post('marital_status');
    $this->session->set_userdata('bb_external_patient.patient_id', $marital_info_post['bb_external_patient.patient_id']);
    $this->session->set_userdata('patient.patient_id', $marital_info_post['patient.patient_id']);
    $this->db->insert('marital_info', $marital_info_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $marital_info_post);
  }
  function marital_info_update() {
    $marital_info_post['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $marital_info_post['patient.patient_id'] = $this->session->patient_patient_id;
    $marital_info_post['marital_info.marital_history_id'] = $this->session->marital_info_marital_history_id;
    $marital_info_post['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $marital_info_post['patient.patient_id'] = $patient_patient_id;
    $marital_info_post['marital_info.marital_history_id'] = $marital_info_marital_history_id;
    $marital_info_post['marital_info.patient_id'] = is_null($this->input->post('marital_info_patient_id')) ? '' : $this->input->post('marital_info_patient_id');
    $marital_info_post['marital_info.marital_life'] = is_null($this->input->post('marital_info_marital_life')) ? '' : $this->input->post('marital_info_marital_life');
    $marital_info_post['marital_info.consanguinous'] = is_null($this->input->post('marital_info_consanguinous')) ? '' : $this->input->post('marital_info_consanguinous');
    $marital_info_post['marital_info.marital_status'] = is_null($this->input->post('marital_info_marital_status')) ? '' : $this->input->post('marital_info_marital_status');
    $this->session->set_userdata('bb_external_patient.patient_id', $marital_info_post['bb_external_patient.patient_id']);
    $this->session->set_userdata('patient.patient_id', $marital_info_post['patient.patient_id']);
    $this->session->set_userdata('marital_info.marital_history_id', $marital_info_post['marital_info.marital_history_id']);
    $this->db->update('marital_info', $marital_info_post, array('marital_history_id' => $marital_info_post['marital_history_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $marital_info_post);
  }
  function marital_info_delete() {
    $marital_info_delete['marital_info.marital_history_id'] = is_null($this->input->post('marital_info_marital_history_id')) ? '' : $this->input->post('marital_info_marital_history_id');
    $marital_info_delete['marital_info.patient_id'] = is_null($this->input->post('marital_info_patient_id')) ? '' : $this->input->post('marital_info_patient_id');
    $marital_info_delete['marital_info.marital_life'] = is_null($this->input->post('marital_info_marital_life')) ? '' : $this->input->post('marital_info_marital_life');
    $marital_info_delete['marital_info.consanguinous'] = is_null($this->input->post('marital_info_consanguinous')) ? '' : $this->input->post('marital_info_consanguinous');
    $marital_info_delete['marital_info.marital_status'] = is_null($this->input->post('marital_info_marital_status')) ? '' : $this->input->post('marital_info_marital_status');
    $this->db->delete('marital_info', array('marital_history_id' => $marital_info_delete['marital_history_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $marital_info_delete);
  }
  function marital_info_get_records() {
    $marital_info_filters['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $marital_info_filters['patient.patient_id'] = $this->session->patient_patient_id;
    $marital_info_filters['marital_info.marital_history_id'] = $this->session->marital_info_marital_history_id;
    $marital_info_filters['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $marital_info_filters['patient.patient_id'] = $patient_patient_id;
    $marital_info_filters['marital_info.marital_history_id'] = $marital_info_marital_history_id;
    $marital_info_filters['marital_info.patient_id'] = is_null($this->input->post('marital_info_patient_id')) ? '' : $this->input->post('marital_info_patient_id');
    $marital_info_filters['marital_info.marital_life'] = is_null($this->input->post('marital_info_marital_life')) ? '' : $this->input->post('marital_info_marital_life');
    $marital_info_filters['marital_info.consanguinous'] = is_null($this->input->post('marital_info_consanguinous')) ? '' : $this->input->post('marital_info_consanguinous');
    $marital_info_filters['marital_info.marital_status'] = is_null($this->input->post('marital_info_marital_status')) ? '' : $this->input->post('marital_info_marital_status');
    $this->session->set_userdata('bb_external_patient.patient_id', $marital_info_filters['bb_external_patient.patient_id']);
    $this->session->set_userdata('patient.patient_id', $marital_info_filters['patient.patient_id']);
    $this->session->set_userdata('marital_info.marital_history_id', $marital_info_filters['marital_info.marital_history_id']);
    $this->db->select('bb_external_patient.patient_id AS marital_info_patient_id, patient.patient_id AS marital_info_patient_id,
    marital_info.marital_history_id AS marital_info_marital_history_id, marital_info.patient_id AS marital_info_patient_id,
    marital_info.marital_life AS marital_info_marital_life, marital_info.consanguinous AS marital_info_consanguinous,
    marital_info.marital_status AS marital_info_marital_status')->from('marital_info');
    $this->db->join('bb_external_patient', 'marital_info.patient_id = bb_external_patient.patient_id', 'left');
    $this->db->join('patient', 'marital_info.patient_id = patient.patient_id', 'left');
    $this->db->where($marital_info_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $marital_info_filters);
  }
}