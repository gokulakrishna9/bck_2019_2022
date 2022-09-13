<?php class Obstetric_history_model extends CI_Model {
  function obstetric_history_create() {
    $obstetric_history_post = [];
    $obstetric_history_post['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $obstetric_history_post['patient.patient_id'] = $this->session->patient_patient_id;
    $obstetric_history_post['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $obstetric_history_post['patient.patient_id'] = $patient_patient_id;
    $obstetric_history_post['obstetric_history_id'] = is_null($this->input->post('obstetric_history_id')) ? '' : $this->input->post('obstetric_history_id');
    $obstetric_history_post['patient_id'] = is_null($this->input->post('patient_id')) ? '' : $this->input->post('patient_id');
    $obstetric_history_post['pregnancy_number'] = is_null($this->input->post('pregnancy_number')) ? '' : $this->input->post('pregnancy_number');
    $obstetric_history_post['gestation'] = is_null($this->input->post('gestation')) ? '' : $this->input->post('gestation');
    $obstetric_history_post['lmp'] = is_null($this->input->post('lmp')) ? '' : $this->input->post('lmp');
    $obstetric_history_post['edd'] = is_null($this->input->post('edd')) ? '' : $this->input->post('edd');
    $obstetric_history_post['afi'] = is_null($this->input->post('afi')) ? '' : $this->input->post('afi');
    $obstetric_history_post['anesthesia_type'] = is_null($this->input->post('anesthesia_type')) ? '' : $this->input->post('anesthesia_type');
    $obstetric_history_post['placenta'] = is_null($this->input->post('placenta')) ? '' : $this->input->post('placenta');
    $obstetric_history_post['outcome'] = is_null($this->input->post('outcome')) ? '' : $this->input->post('outcome');
    $obstetric_history_post['delivery_mode'] = is_null($this->input->post('delivery_mode')) ? '' : $this->input->post('delivery_mode');
    $obstetric_history_post['sex'] = is_null($this->input->post('sex')) ? '' : $this->input->post('sex');
    $obstetric_history_post['birth_weight'] = is_null($this->input->post('birth_weight')) ? '' : $this->input->post('birth_weight');
    $obstetric_history_post['dob'] = is_null($this->input->post('dob')) ? '' : $this->input->post('dob');
    $obstetric_history_post['apgar'] = is_null($this->input->post('apgar')) ? '' : $this->input->post('apgar');
    $obstetric_history_post['suture_removal_date'] = is_null($this->input->post('suture_removal_date')) ? '' : $this->input->post('suture_removal_date');
    $obstetric_history_post['nicu_admission'] = is_null($this->input->post('nicu_admission')) ? '' : $this->input->post('nicu_admission');
    $obstetric_history_post['nicu_admission_reason'] = is_null($this->input->post('nicu_admission_reason')) ? '' : $this->input->post('nicu_admission_reason');
    $obstetric_history_post['dod'] = is_null($this->input->post('dod')) ? '' : $this->input->post('dod');
    $obstetric_history_post['cause_of_death'] = is_null($this->input->post('cause_of_death')) ? '' : $this->input->post('cause_of_death');
    $obstetric_history_post['booking_status'] = is_null($this->input->post('booking_status')) ? '' : $this->input->post('booking_status');
    $this->session->set_userdata('bb_external_patient.patient_id', $obstetric_history_post['bb_external_patient.patient_id']);
    $this->session->set_userdata('patient.patient_id', $obstetric_history_post['patient.patient_id']);
    $this->db->insert('obstetric_history', $obstetric_history_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $obstetric_history_post);
  }
  function obstetric_history_update() {
    $obstetric_history_post['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $obstetric_history_post['patient.patient_id'] = $this->session->patient_patient_id;
    $obstetric_history_post['obstetric_history.obstetric_history_id'] = $this->session->obstetric_history_obstetric_history_id;
    $obstetric_history_post['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $obstetric_history_post['patient.patient_id'] = $patient_patient_id;
    $obstetric_history_post['obstetric_history.obstetric_history_id'] = $obstetric_history_obstetric_history_id;
    $obstetric_history_post['obstetric_history.patient_id'] = is_null($this->input->post('obstetric_history_patient_id')) ? '' : $this->input->post('obstetric_history_patient_id');
    $obstetric_history_post['obstetric_history.pregnancy_number'] = is_null($this->input->post('obstetric_history_pregnancy_number')) ? '' : $this->input->post('obstetric_history_pregnancy_number');
    $obstetric_history_post['obstetric_history.gestation'] = is_null($this->input->post('obstetric_history_gestation')) ? '' : $this->input->post('obstetric_history_gestation');
    $obstetric_history_post['obstetric_history.lmp'] = is_null($this->input->post('obstetric_history_lmp')) ? '' : $this->input->post('obstetric_history_lmp');
    $obstetric_history_post['obstetric_history.edd'] = is_null($this->input->post('obstetric_history_edd')) ? '' : $this->input->post('obstetric_history_edd');
    $obstetric_history_post['obstetric_history.afi'] = is_null($this->input->post('obstetric_history_afi')) ? '' : $this->input->post('obstetric_history_afi');
    $obstetric_history_post['obstetric_history.anesthesia_type'] = is_null($this->input->post('obstetric_history_anesthesia_type')) ? '' : $this->input->post('obstetric_history_anesthesia_type');
    $obstetric_history_post['obstetric_history.placenta'] = is_null($this->input->post('obstetric_history_placenta')) ? '' : $this->input->post('obstetric_history_placenta');
    $obstetric_history_post['obstetric_history.outcome'] = is_null($this->input->post('obstetric_history_outcome')) ? '' : $this->input->post('obstetric_history_outcome');
    $obstetric_history_post['obstetric_history.delivery_mode'] = is_null($this->input->post('obstetric_history_delivery_mode')) ? '' : $this->input->post('obstetric_history_delivery_mode');
    $obstetric_history_post['obstetric_history.sex'] = is_null($this->input->post('obstetric_history_sex')) ? '' : $this->input->post('obstetric_history_sex');
    $obstetric_history_post['obstetric_history.birth_weight'] = is_null($this->input->post('obstetric_history_birth_weight')) ? '' : $this->input->post('obstetric_history_birth_weight');
    $obstetric_history_post['obstetric_history.dob'] = is_null($this->input->post('obstetric_history_dob')) ? '' : $this->input->post('obstetric_history_dob');
    $obstetric_history_post['obstetric_history.apgar'] = is_null($this->input->post('obstetric_history_apgar')) ? '' : $this->input->post('obstetric_history_apgar');
    $obstetric_history_post['obstetric_history.suture_removal_date'] = is_null($this->input->post('obstetric_history_suture_removal_date')) ? '' : $this->input->post('obstetric_history_suture_removal_date');
    $obstetric_history_post['obstetric_history.nicu_admission'] = is_null($this->input->post('obstetric_history_nicu_admission')) ? '' : $this->input->post('obstetric_history_nicu_admission');
    $obstetric_history_post['obstetric_history.nicu_admission_reason'] = is_null($this->input->post('obstetric_history_nicu_admission_reason')) ? '' : $this->input->post('obstetric_history_nicu_admission_reason');
    $obstetric_history_post['obstetric_history.dod'] = is_null($this->input->post('obstetric_history_dod')) ? '' : $this->input->post('obstetric_history_dod');
    $obstetric_history_post['obstetric_history.cause_of_death'] = is_null($this->input->post('obstetric_history_cause_of_death')) ? '' : $this->input->post('obstetric_history_cause_of_death');
    $obstetric_history_post['obstetric_history.booking_status'] = is_null($this->input->post('obstetric_history_booking_status')) ? '' : $this->input->post('obstetric_history_booking_status');
    $this->session->set_userdata('bb_external_patient.patient_id', $obstetric_history_post['bb_external_patient.patient_id']);
    $this->session->set_userdata('patient.patient_id', $obstetric_history_post['patient.patient_id']);
    $this->session->set_userdata('obstetric_history.obstetric_history_id', $obstetric_history_post['obstetric_history.obstetric_history_id']);
    $this->db->update('obstetric_history', $obstetric_history_post, array('obstetric_history_id' => $obstetric_history_post['obstetric_history_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $obstetric_history_post);
  }
  function obstetric_history_delete() {
    $obstetric_history_delete['obstetric_history.obstetric_history_id'] = is_null($this->input->post('obstetric_history_obstetric_history_id')) ? '' : $this->input->post('obstetric_history_obstetric_history_id');
    $obstetric_history_delete['obstetric_history.patient_id'] = is_null($this->input->post('obstetric_history_patient_id')) ? '' : $this->input->post('obstetric_history_patient_id');
    $obstetric_history_delete['obstetric_history.pregnancy_number'] = is_null($this->input->post('obstetric_history_pregnancy_number')) ? '' : $this->input->post('obstetric_history_pregnancy_number');
    $obstetric_history_delete['obstetric_history.gestation'] = is_null($this->input->post('obstetric_history_gestation')) ? '' : $this->input->post('obstetric_history_gestation');
    $obstetric_history_delete['obstetric_history.lmp'] = is_null($this->input->post('obstetric_history_lmp')) ? '' : $this->input->post('obstetric_history_lmp');
    $obstetric_history_delete['obstetric_history.edd'] = is_null($this->input->post('obstetric_history_edd')) ? '' : $this->input->post('obstetric_history_edd');
    $obstetric_history_delete['obstetric_history.afi'] = is_null($this->input->post('obstetric_history_afi')) ? '' : $this->input->post('obstetric_history_afi');
    $obstetric_history_delete['obstetric_history.anesthesia_type'] = is_null($this->input->post('obstetric_history_anesthesia_type')) ? '' : $this->input->post('obstetric_history_anesthesia_type');
    $obstetric_history_delete['obstetric_history.placenta'] = is_null($this->input->post('obstetric_history_placenta')) ? '' : $this->input->post('obstetric_history_placenta');
    $obstetric_history_delete['obstetric_history.outcome'] = is_null($this->input->post('obstetric_history_outcome')) ? '' : $this->input->post('obstetric_history_outcome');
    $obstetric_history_delete['obstetric_history.delivery_mode'] = is_null($this->input->post('obstetric_history_delivery_mode')) ? '' : $this->input->post('obstetric_history_delivery_mode');
    $obstetric_history_delete['obstetric_history.sex'] = is_null($this->input->post('obstetric_history_sex')) ? '' : $this->input->post('obstetric_history_sex');
    $obstetric_history_delete['obstetric_history.birth_weight'] = is_null($this->input->post('obstetric_history_birth_weight')) ? '' : $this->input->post('obstetric_history_birth_weight');
    $obstetric_history_delete['obstetric_history.dob'] = is_null($this->input->post('obstetric_history_dob')) ? '' : $this->input->post('obstetric_history_dob');
    $obstetric_history_delete['obstetric_history.apgar'] = is_null($this->input->post('obstetric_history_apgar')) ? '' : $this->input->post('obstetric_history_apgar');
    $obstetric_history_delete['obstetric_history.suture_removal_date'] = is_null($this->input->post('obstetric_history_suture_removal_date')) ? '' : $this->input->post('obstetric_history_suture_removal_date');
    $obstetric_history_delete['obstetric_history.nicu_admission'] = is_null($this->input->post('obstetric_history_nicu_admission')) ? '' : $this->input->post('obstetric_history_nicu_admission');
    $obstetric_history_delete['obstetric_history.nicu_admission_reason'] = is_null($this->input->post('obstetric_history_nicu_admission_reason')) ? '' : $this->input->post('obstetric_history_nicu_admission_reason');
    $obstetric_history_delete['obstetric_history.dod'] = is_null($this->input->post('obstetric_history_dod')) ? '' : $this->input->post('obstetric_history_dod');
    $obstetric_history_delete['obstetric_history.cause_of_death'] = is_null($this->input->post('obstetric_history_cause_of_death')) ? '' : $this->input->post('obstetric_history_cause_of_death');
    $obstetric_history_delete['obstetric_history.booking_status'] = is_null($this->input->post('obstetric_history_booking_status')) ? '' : $this->input->post('obstetric_history_booking_status');
    $this->db->delete('obstetric_history', array('obstetric_history_id' => $obstetric_history_delete['obstetric_history_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $obstetric_history_delete);
  }
  function obstetric_history_get_records() {
    $obstetric_history_filters['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $obstetric_history_filters['patient.patient_id'] = $this->session->patient_patient_id;
    $obstetric_history_filters['obstetric_history.obstetric_history_id'] = $this->session->obstetric_history_obstetric_history_id;
    $obstetric_history_filters['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $obstetric_history_filters['patient.patient_id'] = $patient_patient_id;
    $obstetric_history_filters['obstetric_history.obstetric_history_id'] = $obstetric_history_obstetric_history_id;
    $obstetric_history_filters['obstetric_history.patient_id'] = is_null($this->input->post('obstetric_history_patient_id')) ? '' : $this->input->post('obstetric_history_patient_id');
    $obstetric_history_filters['obstetric_history.pregnancy_number'] = is_null($this->input->post('obstetric_history_pregnancy_number')) ? '' : $this->input->post('obstetric_history_pregnancy_number');
    $obstetric_history_filters['obstetric_history.gestation'] = is_null($this->input->post('obstetric_history_gestation')) ? '' : $this->input->post('obstetric_history_gestation');
    $obstetric_history_filters['obstetric_history.lmp'] = is_null($this->input->post('obstetric_history_lmp')) ? '' : $this->input->post('obstetric_history_lmp');
    $obstetric_history_filters['obstetric_history.edd'] = is_null($this->input->post('obstetric_history_edd')) ? '' : $this->input->post('obstetric_history_edd');
    $obstetric_history_filters['obstetric_history.afi'] = is_null($this->input->post('obstetric_history_afi')) ? '' : $this->input->post('obstetric_history_afi');
    $obstetric_history_filters['obstetric_history.anesthesia_type'] = is_null($this->input->post('obstetric_history_anesthesia_type')) ? '' : $this->input->post('obstetric_history_anesthesia_type');
    $obstetric_history_filters['obstetric_history.placenta'] = is_null($this->input->post('obstetric_history_placenta')) ? '' : $this->input->post('obstetric_history_placenta');
    $obstetric_history_filters['obstetric_history.outcome'] = is_null($this->input->post('obstetric_history_outcome')) ? '' : $this->input->post('obstetric_history_outcome');
    $obstetric_history_filters['obstetric_history.delivery_mode'] = is_null($this->input->post('obstetric_history_delivery_mode')) ? '' : $this->input->post('obstetric_history_delivery_mode');
    $obstetric_history_filters['obstetric_history.sex'] = is_null($this->input->post('obstetric_history_sex')) ? '' : $this->input->post('obstetric_history_sex');
    $obstetric_history_filters['obstetric_history.birth_weight'] = is_null($this->input->post('obstetric_history_birth_weight')) ? '' : $this->input->post('obstetric_history_birth_weight');
    $obstetric_history_filters['obstetric_history.dob'] = is_null($this->input->post('obstetric_history_dob')) ? '' : $this->input->post('obstetric_history_dob');
    $obstetric_history_filters['obstetric_history.apgar'] = is_null($this->input->post('obstetric_history_apgar')) ? '' : $this->input->post('obstetric_history_apgar');
    $obstetric_history_filters['obstetric_history.suture_removal_date'] = is_null($this->input->post('obstetric_history_suture_removal_date')) ? '' : $this->input->post('obstetric_history_suture_removal_date');
    $obstetric_history_filters['obstetric_history.nicu_admission'] = is_null($this->input->post('obstetric_history_nicu_admission')) ? '' : $this->input->post('obstetric_history_nicu_admission');
    $obstetric_history_filters['obstetric_history.nicu_admission_reason'] = is_null($this->input->post('obstetric_history_nicu_admission_reason')) ? '' : $this->input->post('obstetric_history_nicu_admission_reason');
    $obstetric_history_filters['obstetric_history.dod'] = is_null($this->input->post('obstetric_history_dod')) ? '' : $this->input->post('obstetric_history_dod');
    $obstetric_history_filters['obstetric_history.cause_of_death'] = is_null($this->input->post('obstetric_history_cause_of_death')) ? '' : $this->input->post('obstetric_history_cause_of_death');
    $obstetric_history_filters['obstetric_history.booking_status'] = is_null($this->input->post('obstetric_history_booking_status')) ? '' : $this->input->post('obstetric_history_booking_status');
    $this->session->set_userdata('bb_external_patient.patient_id', $obstetric_history_filters['bb_external_patient.patient_id']);
    $this->session->set_userdata('patient.patient_id', $obstetric_history_filters['patient.patient_id']);
    $this->session->set_userdata('obstetric_history.obstetric_history_id', $obstetric_history_filters['obstetric_history.obstetric_history_id']);
    $this->db->select('bb_external_patient.patient_id AS obstetric_history_patient_id, patient.patient_id AS obstetric_history_patient_id,
    obstetric_history.obstetric_history_id AS obstetric_history_obstetric_history_id, obstetric_history.patient_id AS obstetric_history_patient_id,
    obstetric_history.pregnancy_number AS obstetric_history_pregnancy_number, obstetric_history.gestation AS obstetric_history_gestation,
    obstetric_history.lmp AS obstetric_history_lmp, obstetric_history.edd AS obstetric_history_edd,
    obstetric_history.afi AS obstetric_history_afi, obstetric_history.anesthesia_type AS obstetric_history_anesthesia_type,
    obstetric_history.placenta AS obstetric_history_placenta, obstetric_history.outcome AS obstetric_history_outcome,
    obstetric_history.delivery_mode AS obstetric_history_delivery_mode, obstetric_history.sex AS obstetric_history_sex,
    obstetric_history.birth_weight AS obstetric_history_birth_weight, obstetric_history.dob AS obstetric_history_dob,
    obstetric_history.apgar AS obstetric_history_apgar, obstetric_history.suture_removal_date AS obstetric_history_suture_removal_date,
    obstetric_history.nicu_admission AS obstetric_history_nicu_admission, obstetric_history.nicu_admission_reason AS obstetric_history_nicu_admission_reason,
    obstetric_history.dod AS obstetric_history_dod, obstetric_history.cause_of_death AS obstetric_history_cause_of_death,
    obstetric_history.booking_status AS obstetric_history_booking_status')->from('obstetric_history');
    $this->db->join('bb_external_patient', 'obstetric_history.patient_id = bb_external_patient.patient_id', 'left');
    $this->db->join('patient', 'obstetric_history.patient_id = patient.patient_id', 'left');
    $this->db->where($obstetric_history_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $obstetric_history_filters);
  }
}