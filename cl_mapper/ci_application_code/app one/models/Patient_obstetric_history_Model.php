<?php class Patient_obstetric_history_model extends CI_Model {
  function patient_obstetric_history_create($bb_external_patient_patient_id,$patient_patient_id) {
    $patient_obstetric_history_post = [];
    $patient_obstetric_history_post['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $patient_obstetric_history_post['patient.patient_id'] = $this->session->patient_patient_id;
    $patient_obstetric_history_post['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $patient_obstetric_history_post['patient.patient_id'] = $patient_patient_id;
    $patient_obstetric_history_post['alive'] = is_null($this->input->post('alive')) ? '' : $this->input->post('alive');
    $patient_obstetric_history_post['apgar'] = is_null($this->input->post('apgar')) ? '' : $this->input->post('apgar');
    $patient_obstetric_history_post['booked'] = is_null($this->input->post('booked')) ? '' : $this->input->post('booked');
    $patient_obstetric_history_post['cause_of_death'] = is_null($this->input->post('cause_of_death')) ? '' : $this->input->post('cause_of_death');
    $patient_obstetric_history_post['conception_type'] = is_null($this->input->post('conception_type')) ? '' : $this->input->post('conception_type');
    $patient_obstetric_history_post['date_of_birth'] = is_null($this->input->post('date_of_birth')) ? '' : $this->input->post('date_of_birth');
    $patient_obstetric_history_post['date_of_death'] = is_null($this->input->post('date_of_death')) ? '' : $this->input->post('date_of_death');
    $patient_obstetric_history_post['delivered'] = is_null($this->input->post('delivered')) ? '' : $this->input->post('delivered');
    $patient_obstetric_history_post['delivery_mode_id'] = is_null($this->input->post('delivery_mode_id')) ? '' : $this->input->post('delivery_mode_id');
    $patient_obstetric_history_post['delivery_outcome'] = is_null($this->input->post('delivery_outcome')) ? '' : $this->input->post('delivery_outcome');
    $patient_obstetric_history_post['edd_date'] = is_null($this->input->post('edd_date')) ? '' : $this->input->post('edd_date');
    $patient_obstetric_history_post['gender'] = is_null($this->input->post('gender')) ? '' : $this->input->post('gender');
    $patient_obstetric_history_post['imp_date'] = is_null($this->input->post('imp_date')) ? '' : $this->input->post('imp_date');
    $patient_obstetric_history_post['nicu_admission'] = is_null($this->input->post('nicu_admission')) ? '' : $this->input->post('nicu_admission');
    $patient_obstetric_history_post['nicu_admission_reason'] = is_null($this->input->post('nicu_admission_reason')) ? '' : $this->input->post('nicu_admission_reason');
    $patient_obstetric_history_post['obstetric_history_id'] = is_null($this->input->post('obstetric_history_id')) ? '' : $this->input->post('obstetric_history_id');
    $patient_obstetric_history_post['patient_id'] = is_null($this->input->post('patient_id')) ? '' : $this->input->post('patient_id');
    $patient_obstetric_history_post['pregnancy_number'] = is_null($this->input->post('pregnancy_number')) ? '' : $this->input->post('pregnancy_number');
    $patient_obstetric_history_post['weight_at_birth'] = is_null($this->input->post('weight_at_birth')) ? '' : $this->input->post('weight_at_birth');
    $this->session->set_userdata('bb_external_patient.patient_id', $patient_obstetric_history_post['bb_external_patient.patient_id']);
    $this->session->set_userdata('patient.patient_id', $patient_obstetric_history_post['patient.patient_id']);
    $this->db->insert('patient_obstetric_history', $patient_obstetric_history_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $patient_obstetric_history_post);
  }
  function patient_obstetric_history_update($patient_id,$patient_id,$obstetric_history_id) {
    $patient_obstetric_history_post['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $patient_obstetric_history_post['patient.patient_id'] = $this->session->patient_patient_id;
    $patient_obstetric_history_post['patient_obstetric_history.obstetric_history_id'] = $this->session->patient_obstetric_history_obstetric_history_id;
    $patient_obstetric_history_post['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $patient_obstetric_history_post['patient.patient_id'] = $patient_patient_id;
    $patient_obstetric_history_post['patient_obstetric_history.obstetric_history_id'] = $patient_obstetric_history_obstetric_history_id;
    $patient_obstetric_history_post['patient_obstetric_history.alive'] = is_null($this->input->post('patient_obstetric_history_alive')) ? '' : $this->input->post('patient_obstetric_history_alive');
    $patient_obstetric_history_post['patient_obstetric_history.apgar'] = is_null($this->input->post('patient_obstetric_history_apgar')) ? '' : $this->input->post('patient_obstetric_history_apgar');
    $patient_obstetric_history_post['patient_obstetric_history.booked'] = is_null($this->input->post('patient_obstetric_history_booked')) ? '' : $this->input->post('patient_obstetric_history_booked');
    $patient_obstetric_history_post['patient_obstetric_history.cause_of_death'] = is_null($this->input->post('patient_obstetric_history_cause_of_death')) ? '' : $this->input->post('patient_obstetric_history_cause_of_death');
    $patient_obstetric_history_post['patient_obstetric_history.conception_type'] = is_null($this->input->post('patient_obstetric_history_conception_type')) ? '' : $this->input->post('patient_obstetric_history_conception_type');
    $patient_obstetric_history_post['patient_obstetric_history.date_of_birth'] = is_null($this->input->post('patient_obstetric_history_date_of_birth')) ? '' : $this->input->post('patient_obstetric_history_date_of_birth');
    $patient_obstetric_history_post['patient_obstetric_history.date_of_death'] = is_null($this->input->post('patient_obstetric_history_date_of_death')) ? '' : $this->input->post('patient_obstetric_history_date_of_death');
    $patient_obstetric_history_post['patient_obstetric_history.delivered'] = is_null($this->input->post('patient_obstetric_history_delivered')) ? '' : $this->input->post('patient_obstetric_history_delivered');
    $patient_obstetric_history_post['patient_obstetric_history.delivery_mode_id'] = is_null($this->input->post('patient_obstetric_history_delivery_mode_id')) ? '' : $this->input->post('patient_obstetric_history_delivery_mode_id');
    $patient_obstetric_history_post['patient_obstetric_history.delivery_outcome'] = is_null($this->input->post('patient_obstetric_history_delivery_outcome')) ? '' : $this->input->post('patient_obstetric_history_delivery_outcome');
    $patient_obstetric_history_post['patient_obstetric_history.edd_date'] = is_null($this->input->post('patient_obstetric_history_edd_date')) ? '' : $this->input->post('patient_obstetric_history_edd_date');
    $patient_obstetric_history_post['patient_obstetric_history.gender'] = is_null($this->input->post('patient_obstetric_history_gender')) ? '' : $this->input->post('patient_obstetric_history_gender');
    $patient_obstetric_history_post['patient_obstetric_history.imp_date'] = is_null($this->input->post('patient_obstetric_history_imp_date')) ? '' : $this->input->post('patient_obstetric_history_imp_date');
    $patient_obstetric_history_post['patient_obstetric_history.nicu_admission'] = is_null($this->input->post('patient_obstetric_history_nicu_admission')) ? '' : $this->input->post('patient_obstetric_history_nicu_admission');
    $patient_obstetric_history_post['patient_obstetric_history.nicu_admission_reason'] = is_null($this->input->post('patient_obstetric_history_nicu_admission_reason')) ? '' : $this->input->post('patient_obstetric_history_nicu_admission_reason');
    $patient_obstetric_history_post['patient_obstetric_history.patient_id'] = is_null($this->input->post('patient_obstetric_history_patient_id')) ? '' : $this->input->post('patient_obstetric_history_patient_id');
    $patient_obstetric_history_post['patient_obstetric_history.pregnancy_number'] = is_null($this->input->post('patient_obstetric_history_pregnancy_number')) ? '' : $this->input->post('patient_obstetric_history_pregnancy_number');
    $patient_obstetric_history_post['patient_obstetric_history.weight_at_birth'] = is_null($this->input->post('patient_obstetric_history_weight_at_birth')) ? '' : $this->input->post('patient_obstetric_history_weight_at_birth');
    $this->session->set_userdata('bb_external_patient.patient_id', $patient_obstetric_history_post['bb_external_patient.patient_id']);
    $this->session->set_userdata('patient.patient_id', $patient_obstetric_history_post['patient.patient_id']);
    $this->session->set_userdata('patient_obstetric_history.obstetric_history_id', $patient_obstetric_history_post['patient_obstetric_history.obstetric_history_id']);
    $this->db->update('patient_obstetric_history', $patient_obstetric_history_post, array('obstetric_history_id' => $patient_obstetric_history_post['obstetric_history_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $patient_obstetric_history_post);
  }
  function patient_obstetric_history_delete() {
    $patient_obstetric_history_delete['patient_obstetric_history.alive'] = is_null($this->input->post('patient_obstetric_history_alive')) ? '' : $this->input->post('patient_obstetric_history_alive');
    $patient_obstetric_history_delete['patient_obstetric_history.apgar'] = is_null($this->input->post('patient_obstetric_history_apgar')) ? '' : $this->input->post('patient_obstetric_history_apgar');
    $patient_obstetric_history_delete['patient_obstetric_history.booked'] = is_null($this->input->post('patient_obstetric_history_booked')) ? '' : $this->input->post('patient_obstetric_history_booked');
    $patient_obstetric_history_delete['patient_obstetric_history.cause_of_death'] = is_null($this->input->post('patient_obstetric_history_cause_of_death')) ? '' : $this->input->post('patient_obstetric_history_cause_of_death');
    $patient_obstetric_history_delete['patient_obstetric_history.conception_type'] = is_null($this->input->post('patient_obstetric_history_conception_type')) ? '' : $this->input->post('patient_obstetric_history_conception_type');
    $patient_obstetric_history_delete['patient_obstetric_history.date_of_birth'] = is_null($this->input->post('patient_obstetric_history_date_of_birth')) ? '' : $this->input->post('patient_obstetric_history_date_of_birth');
    $patient_obstetric_history_delete['patient_obstetric_history.date_of_death'] = is_null($this->input->post('patient_obstetric_history_date_of_death')) ? '' : $this->input->post('patient_obstetric_history_date_of_death');
    $patient_obstetric_history_delete['patient_obstetric_history.delivered'] = is_null($this->input->post('patient_obstetric_history_delivered')) ? '' : $this->input->post('patient_obstetric_history_delivered');
    $patient_obstetric_history_delete['patient_obstetric_history.delivery_mode_id'] = is_null($this->input->post('patient_obstetric_history_delivery_mode_id')) ? '' : $this->input->post('patient_obstetric_history_delivery_mode_id');
    $patient_obstetric_history_delete['patient_obstetric_history.delivery_outcome'] = is_null($this->input->post('patient_obstetric_history_delivery_outcome')) ? '' : $this->input->post('patient_obstetric_history_delivery_outcome');
    $patient_obstetric_history_delete['patient_obstetric_history.edd_date'] = is_null($this->input->post('patient_obstetric_history_edd_date')) ? '' : $this->input->post('patient_obstetric_history_edd_date');
    $patient_obstetric_history_delete['patient_obstetric_history.gender'] = is_null($this->input->post('patient_obstetric_history_gender')) ? '' : $this->input->post('patient_obstetric_history_gender');
    $patient_obstetric_history_delete['patient_obstetric_history.imp_date'] = is_null($this->input->post('patient_obstetric_history_imp_date')) ? '' : $this->input->post('patient_obstetric_history_imp_date');
    $patient_obstetric_history_delete['patient_obstetric_history.nicu_admission'] = is_null($this->input->post('patient_obstetric_history_nicu_admission')) ? '' : $this->input->post('patient_obstetric_history_nicu_admission');
    $patient_obstetric_history_delete['patient_obstetric_history.nicu_admission_reason'] = is_null($this->input->post('patient_obstetric_history_nicu_admission_reason')) ? '' : $this->input->post('patient_obstetric_history_nicu_admission_reason');
    $patient_obstetric_history_delete['patient_obstetric_history.obstetric_history_id'] = is_null($this->input->post('patient_obstetric_history_obstetric_history_id')) ? '' : $this->input->post('patient_obstetric_history_obstetric_history_id');
    $patient_obstetric_history_delete['patient_obstetric_history.patient_id'] = is_null($this->input->post('patient_obstetric_history_patient_id')) ? '' : $this->input->post('patient_obstetric_history_patient_id');
    $patient_obstetric_history_delete['patient_obstetric_history.pregnancy_number'] = is_null($this->input->post('patient_obstetric_history_pregnancy_number')) ? '' : $this->input->post('patient_obstetric_history_pregnancy_number');
    $patient_obstetric_history_delete['patient_obstetric_history.weight_at_birth'] = is_null($this->input->post('patient_obstetric_history_weight_at_birth')) ? '' : $this->input->post('patient_obstetric_history_weight_at_birth');
    $this->db->delete('patient_obstetric_history', array('obstetric_history_id' => $patient_obstetric_history_delete['obstetric_history_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $patient_obstetric_history_delete);
  }
  function patient_obstetric_history_get_records($patient_id,$patient_id,$obstetric_history_id) {
    $patient_obstetric_history_filters['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $patient_obstetric_history_filters['patient.patient_id'] = $this->session->patient_patient_id;
    $patient_obstetric_history_filters['patient_obstetric_history.obstetric_history_id'] = $this->session->patient_obstetric_history_obstetric_history_id;
    $patient_obstetric_history_filters['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $patient_obstetric_history_filters['patient.patient_id'] = $patient_patient_id;
    $patient_obstetric_history_filters['patient_obstetric_history.obstetric_history_id'] = $patient_obstetric_history_obstetric_history_id;
    $patient_obstetric_history_filters['patient_obstetric_history.alive'] = is_null($this->input->post('patient_obstetric_history_alive')) ? '' : $this->input->post('patient_obstetric_history_alive');
    $patient_obstetric_history_filters['patient_obstetric_history.apgar'] = is_null($this->input->post('patient_obstetric_history_apgar')) ? '' : $this->input->post('patient_obstetric_history_apgar');
    $patient_obstetric_history_filters['patient_obstetric_history.booked'] = is_null($this->input->post('patient_obstetric_history_booked')) ? '' : $this->input->post('patient_obstetric_history_booked');
    $patient_obstetric_history_filters['patient_obstetric_history.cause_of_death'] = is_null($this->input->post('patient_obstetric_history_cause_of_death')) ? '' : $this->input->post('patient_obstetric_history_cause_of_death');
    $patient_obstetric_history_filters['patient_obstetric_history.conception_type'] = is_null($this->input->post('patient_obstetric_history_conception_type')) ? '' : $this->input->post('patient_obstetric_history_conception_type');
    $patient_obstetric_history_filters['patient_obstetric_history.date_of_birth'] = is_null($this->input->post('patient_obstetric_history_date_of_birth')) ? '' : $this->input->post('patient_obstetric_history_date_of_birth');
    $patient_obstetric_history_filters['patient_obstetric_history.date_of_death'] = is_null($this->input->post('patient_obstetric_history_date_of_death')) ? '' : $this->input->post('patient_obstetric_history_date_of_death');
    $patient_obstetric_history_filters['patient_obstetric_history.delivered'] = is_null($this->input->post('patient_obstetric_history_delivered')) ? '' : $this->input->post('patient_obstetric_history_delivered');
    $patient_obstetric_history_filters['patient_obstetric_history.delivery_mode_id'] = is_null($this->input->post('patient_obstetric_history_delivery_mode_id')) ? '' : $this->input->post('patient_obstetric_history_delivery_mode_id');
    $patient_obstetric_history_filters['patient_obstetric_history.delivery_outcome'] = is_null($this->input->post('patient_obstetric_history_delivery_outcome')) ? '' : $this->input->post('patient_obstetric_history_delivery_outcome');
    $patient_obstetric_history_filters['patient_obstetric_history.edd_date'] = is_null($this->input->post('patient_obstetric_history_edd_date')) ? '' : $this->input->post('patient_obstetric_history_edd_date');
    $patient_obstetric_history_filters['patient_obstetric_history.gender'] = is_null($this->input->post('patient_obstetric_history_gender')) ? '' : $this->input->post('patient_obstetric_history_gender');
    $patient_obstetric_history_filters['patient_obstetric_history.imp_date'] = is_null($this->input->post('patient_obstetric_history_imp_date')) ? '' : $this->input->post('patient_obstetric_history_imp_date');
    $patient_obstetric_history_filters['patient_obstetric_history.nicu_admission'] = is_null($this->input->post('patient_obstetric_history_nicu_admission')) ? '' : $this->input->post('patient_obstetric_history_nicu_admission');
    $patient_obstetric_history_filters['patient_obstetric_history.nicu_admission_reason'] = is_null($this->input->post('patient_obstetric_history_nicu_admission_reason')) ? '' : $this->input->post('patient_obstetric_history_nicu_admission_reason');
    $patient_obstetric_history_filters['patient_obstetric_history.patient_id'] = is_null($this->input->post('patient_obstetric_history_patient_id')) ? '' : $this->input->post('patient_obstetric_history_patient_id');
    $patient_obstetric_history_filters['patient_obstetric_history.pregnancy_number'] = is_null($this->input->post('patient_obstetric_history_pregnancy_number')) ? '' : $this->input->post('patient_obstetric_history_pregnancy_number');
    $patient_obstetric_history_filters['patient_obstetric_history.weight_at_birth'] = is_null($this->input->post('patient_obstetric_history_weight_at_birth')) ? '' : $this->input->post('patient_obstetric_history_weight_at_birth');
    $this->session->set_userdata('bb_external_patient.patient_id', $patient_obstetric_history_filters['bb_external_patient.patient_id']);
    $this->session->set_userdata('patient.patient_id', $patient_obstetric_history_filters['patient.patient_id']);
    $this->session->set_userdata('patient_obstetric_history.obstetric_history_id', $patient_obstetric_history_filters['patient_obstetric_history.obstetric_history_id']);
    $this->db->select('bb_external_patient.patient_id AS patient_obstetric_history_patient_id, patient.patient_id AS patient_obstetric_history_patient_id,
    patient_obstetric_history.alive AS patient_obstetric_history_alive, patient_obstetric_history.apgar AS patient_obstetric_history_apgar,
    patient_obstetric_history.booked AS patient_obstetric_history_booked, patient_obstetric_history.cause_of_death AS patient_obstetric_history_cause_of_death,
    patient_obstetric_history.conception_type AS patient_obstetric_history_conception_type, patient_obstetric_history.date_of_birth AS patient_obstetric_history_date_of_birth,
    patient_obstetric_history.date_of_death AS patient_obstetric_history_date_of_death, patient_obstetric_history.delivered AS patient_obstetric_history_delivered,
    patient_obstetric_history.delivery_mode_id AS patient_obstetric_history_delivery_mode_id, patient_obstetric_history.delivery_outcome AS patient_obstetric_history_delivery_outcome,
    patient_obstetric_history.edd_date AS patient_obstetric_history_edd_date, patient_obstetric_history.gender AS patient_obstetric_history_gender,
    patient_obstetric_history.imp_date AS patient_obstetric_history_imp_date, patient_obstetric_history.nicu_admission AS patient_obstetric_history_nicu_admission,
    patient_obstetric_history.nicu_admission_reason AS patient_obstetric_history_nicu_admission_reason, patient_obstetric_history.obstetric_history_id AS patient_obstetric_history_obstetric_history_id,
    patient_obstetric_history.patient_id AS patient_obstetric_history_patient_id, patient_obstetric_history.pregnancy_number AS patient_obstetric_history_pregnancy_number,
    patient_obstetric_history.weight_at_birth AS patient_obstetric_history_weight_at_birth')->from('patient_obstetric_history');
    $this->db->join('bb_external_patient', 'patient_obstetric_history.patient_id = bb_external_patient.patient_id', 'left');
    $this->db->join('patient', 'patient_obstetric_history.patient_id = patient.patient_id', 'left');
    $this->db->where($patient_obstetric_history_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $patient_obstetric_history_filters);
  }
}