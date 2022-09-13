<?php class Patient_visit_model extends CI_Model {
  function patient_visit_create() {
    $patient_visit_post = [];
    $patient_visit_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $patient_visit_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $patient_visit_post['visit_name.visit_name_id'] = $this->session->visit_name_visit_name_id;
    $patient_visit_post['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $patient_visit_post['patient.patient_id'] = $this->session->patient_patient_id;
    $patient_visit_post['department.department_id'] = $this->session->department_department_id;
    $patient_visit_post['insurance.insurance_id'] = $this->session->insurance_insurance_id;
    $patient_visit_post['hospital.hospital_id'] = $hospital_hospital_id;
    $patient_visit_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $patient_visit_post['visit_name.visit_name_id'] = $visit_name_visit_name_id;
    $patient_visit_post['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $patient_visit_post['patient.patient_id'] = $patient_patient_id;
    $patient_visit_post['department.department_id'] = $department_department_id;
    $patient_visit_post['insurance.insurance_id'] = $insurance_insurance_id;
    $patient_visit_post['visit_id'] = is_null($this->input->post('visit_id')) ? '' : $this->input->post('visit_id');
    $patient_visit_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $patient_visit_post['admit_id'] = is_null($this->input->post('admit_id')) ? '' : $this->input->post('admit_id');
    $patient_visit_post['visit_type'] = is_null($this->input->post('visit_type')) ? '' : $this->input->post('visit_type');
    $patient_visit_post['visit_name_id'] = is_null($this->input->post('visit_name_id')) ? '' : $this->input->post('visit_name_id');
    $patient_visit_post['patient_id'] = is_null($this->input->post('patient_id')) ? '' : $this->input->post('patient_id');
    $patient_visit_post['hosp_file_no'] = is_null($this->input->post('hosp_file_no')) ? '' : $this->input->post('hosp_file_no');
    $patient_visit_post['admit_date'] = is_null($this->input->post('admit_date')) ? '' : $this->input->post('admit_date');
    $patient_visit_post['admit_time'] = is_null($this->input->post('admit_time')) ? '' : $this->input->post('admit_time');
    $patient_visit_post['department_id'] = is_null($this->input->post('department_id')) ? '' : $this->input->post('department_id');
    $patient_visit_post['unit'] = is_null($this->input->post('unit')) ? '' : $this->input->post('unit');
    $patient_visit_post['area'] = is_null($this->input->post('area')) ? '' : $this->input->post('area');
    $patient_visit_post['doctor_id'] = is_null($this->input->post('doctor_id')) ? '' : $this->input->post('doctor_id');
    $patient_visit_post['nurse'] = is_null($this->input->post('nurse')) ? '' : $this->input->post('nurse');
    $patient_visit_post['insurance_case'] = is_null($this->input->post('insurance_case')) ? '' : $this->input->post('insurance_case');
    $patient_visit_post['insurance_id'] = is_null($this->input->post('insurance_id')) ? '' : $this->input->post('insurance_id');
    $patient_visit_post['insurance_no'] = is_null($this->input->post('insurance_no')) ? '' : $this->input->post('insurance_no');
    $patient_visit_post['presenting_complaints'] = is_null($this->input->post('presenting_complaints')) ? '' : $this->input->post('presenting_complaints');
    $patient_visit_post['past_history'] = is_null($this->input->post('past_history')) ? '' : $this->input->post('past_history');
    $patient_visit_post['family_history'] = is_null($this->input->post('family_history')) ? '' : $this->input->post('family_history');
    $patient_visit_post['admit_weight'] = is_null($this->input->post('admit_weight')) ? '' : $this->input->post('admit_weight');
    $patient_visit_post['pulse_rate'] = is_null($this->input->post('pulse_rate')) ? '' : $this->input->post('pulse_rate');
    $patient_visit_post['respiratory_rate'] = is_null($this->input->post('respiratory_rate')) ? '' : $this->input->post('respiratory_rate');
    $patient_visit_post['temperature'] = is_null($this->input->post('temperature')) ? '' : $this->input->post('temperature');
    $patient_visit_post['sbp'] = is_null($this->input->post('sbp')) ? '' : $this->input->post('sbp');
    $patient_visit_post['dbp'] = is_null($this->input->post('dbp')) ? '' : $this->input->post('dbp');
    $patient_visit_post['clinical_findings'] = is_null($this->input->post('clinical_findings')) ? '' : $this->input->post('clinical_findings');
    $patient_visit_post['cvs'] = is_null($this->input->post('cvs')) ? '' : $this->input->post('cvs');
    $patient_visit_post['rs'] = is_null($this->input->post('rs')) ? '' : $this->input->post('rs');
    $patient_visit_post['pa'] = is_null($this->input->post('pa')) ? '' : $this->input->post('pa');
    $patient_visit_post['cns'] = is_null($this->input->post('cns')) ? '' : $this->input->post('cns');
    $patient_visit_post['cxr'] = is_null($this->input->post('cxr')) ? '' : $this->input->post('cxr');
    $patient_visit_post['provisional_diagnosis'] = is_null($this->input->post('provisional_diagnosis')) ? '' : $this->input->post('provisional_diagnosis');
    $patient_visit_post['final_diagnosis'] = is_null($this->input->post('final_diagnosis')) ? '' : $this->input->post('final_diagnosis');
    $patient_visit_post['decision'] = is_null($this->input->post('decision')) ? '' : $this->input->post('decision');
    $patient_visit_post['advise'] = is_null($this->input->post('advise')) ? '' : $this->input->post('advise');
    $patient_visit_post['icd_10'] = is_null($this->input->post('icd_10')) ? '' : $this->input->post('icd_10');
    $patient_visit_post['icd_10_ext'] = is_null($this->input->post('icd_10_ext')) ? '' : $this->input->post('icd_10_ext');
    $patient_visit_post['discharge_weight'] = is_null($this->input->post('discharge_weight')) ? '' : $this->input->post('discharge_weight');
    $patient_visit_post['outcome'] = is_null($this->input->post('outcome')) ? '' : $this->input->post('outcome');
    $patient_visit_post['outcome_date'] = is_null($this->input->post('outcome_date')) ? '' : $this->input->post('outcome_date');
    $patient_visit_post['outcome_time'] = is_null($this->input->post('outcome_time')) ? '' : $this->input->post('outcome_time');
    $patient_visit_post['ip_file_received'] = is_null($this->input->post('ip_file_received')) ? '' : $this->input->post('ip_file_received');
    $patient_visit_post['mlc'] = is_null($this->input->post('mlc')) ? '' : $this->input->post('mlc');
    $patient_visit_post['arrival_mode'] = is_null($this->input->post('arrival_mode')) ? '' : $this->input->post('arrival_mode');
    $patient_visit_post['refereal_hospital_id'] = is_null($this->input->post('refereal_hospital_id')) ? '' : $this->input->post('refereal_hospital_id');
    $patient_visit_post['insert_by_user_id'] = is_null($this->input->post('insert_by_user_id')) ? '' : $this->input->post('insert_by_user_id');
    $patient_visit_post['update_by_user_id'] = is_null($this->input->post('update_by_user_id')) ? '' : $this->input->post('update_by_user_id');
    $patient_visit_post['insert_datetime'] = is_null($this->input->post('insert_datetime')) ? '' : $this->input->post('insert_datetime');
    $patient_visit_post['update_datetime'] = is_null($this->input->post('update_datetime')) ? '' : $this->input->post('update_datetime');
    $patient_visit_post['temp_visit_id'] = is_null($this->input->post('temp_visit_id')) ? '' : $this->input->post('temp_visit_id');
    $this->session->set_userdata('hospital.hospital_id', $patient_visit_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $patient_visit_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('visit_name.visit_name_id', $patient_visit_post['visit_name.visit_name_id']);
    $this->session->set_userdata('bb_external_patient.patient_id', $patient_visit_post['bb_external_patient.patient_id']);
    $this->session->set_userdata('patient.patient_id', $patient_visit_post['patient.patient_id']);
    $this->session->set_userdata('department.department_id', $patient_visit_post['department.department_id']);
    $this->session->set_userdata('insurance.insurance_id', $patient_visit_post['insurance.insurance_id']);
    $this->db->insert('patient_visit', $patient_visit_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $patient_visit_post);
  }
  function patient_visit_update() {
    $patient_visit_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $patient_visit_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $patient_visit_post['visit_name.visit_name_id'] = $this->session->visit_name_visit_name_id;
    $patient_visit_post['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $patient_visit_post['patient.patient_id'] = $this->session->patient_patient_id;
    $patient_visit_post['department.department_id'] = $this->session->department_department_id;
    $patient_visit_post['insurance.insurance_id'] = $this->session->insurance_insurance_id;
    $patient_visit_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $patient_visit_post['hospital.hospital_id'] = $hospital_hospital_id;
    $patient_visit_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $patient_visit_post['visit_name.visit_name_id'] = $visit_name_visit_name_id;
    $patient_visit_post['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $patient_visit_post['patient.patient_id'] = $patient_patient_id;
    $patient_visit_post['department.department_id'] = $department_department_id;
    $patient_visit_post['insurance.insurance_id'] = $insurance_insurance_id;
    $patient_visit_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $patient_visit_post['patient_visit.hospital_id'] = is_null($this->input->post('patient_visit_hospital_id')) ? '' : $this->input->post('patient_visit_hospital_id');
    $patient_visit_post['patient_visit.admit_id'] = is_null($this->input->post('patient_visit_admit_id')) ? '' : $this->input->post('patient_visit_admit_id');
    $patient_visit_post['patient_visit.visit_type'] = is_null($this->input->post('patient_visit_visit_type')) ? '' : $this->input->post('patient_visit_visit_type');
    $patient_visit_post['patient_visit.visit_name_id'] = is_null($this->input->post('patient_visit_visit_name_id')) ? '' : $this->input->post('patient_visit_visit_name_id');
    $patient_visit_post['patient_visit.patient_id'] = is_null($this->input->post('patient_visit_patient_id')) ? '' : $this->input->post('patient_visit_patient_id');
    $patient_visit_post['patient_visit.hosp_file_no'] = is_null($this->input->post('patient_visit_hosp_file_no')) ? '' : $this->input->post('patient_visit_hosp_file_no');
    $patient_visit_post['patient_visit.admit_date'] = is_null($this->input->post('patient_visit_admit_date')) ? '' : $this->input->post('patient_visit_admit_date');
    $patient_visit_post['patient_visit.admit_time'] = is_null($this->input->post('patient_visit_admit_time')) ? '' : $this->input->post('patient_visit_admit_time');
    $patient_visit_post['patient_visit.department_id'] = is_null($this->input->post('patient_visit_department_id')) ? '' : $this->input->post('patient_visit_department_id');
    $patient_visit_post['patient_visit.unit'] = is_null($this->input->post('patient_visit_unit')) ? '' : $this->input->post('patient_visit_unit');
    $patient_visit_post['patient_visit.area'] = is_null($this->input->post('patient_visit_area')) ? '' : $this->input->post('patient_visit_area');
    $patient_visit_post['patient_visit.doctor_id'] = is_null($this->input->post('patient_visit_doctor_id')) ? '' : $this->input->post('patient_visit_doctor_id');
    $patient_visit_post['patient_visit.nurse'] = is_null($this->input->post('patient_visit_nurse')) ? '' : $this->input->post('patient_visit_nurse');
    $patient_visit_post['patient_visit.insurance_case'] = is_null($this->input->post('patient_visit_insurance_case')) ? '' : $this->input->post('patient_visit_insurance_case');
    $patient_visit_post['patient_visit.insurance_id'] = is_null($this->input->post('patient_visit_insurance_id')) ? '' : $this->input->post('patient_visit_insurance_id');
    $patient_visit_post['patient_visit.insurance_no'] = is_null($this->input->post('patient_visit_insurance_no')) ? '' : $this->input->post('patient_visit_insurance_no');
    $patient_visit_post['patient_visit.presenting_complaints'] = is_null($this->input->post('patient_visit_presenting_complaints')) ? '' : $this->input->post('patient_visit_presenting_complaints');
    $patient_visit_post['patient_visit.past_history'] = is_null($this->input->post('patient_visit_past_history')) ? '' : $this->input->post('patient_visit_past_history');
    $patient_visit_post['patient_visit.family_history'] = is_null($this->input->post('patient_visit_family_history')) ? '' : $this->input->post('patient_visit_family_history');
    $patient_visit_post['patient_visit.admit_weight'] = is_null($this->input->post('patient_visit_admit_weight')) ? '' : $this->input->post('patient_visit_admit_weight');
    $patient_visit_post['patient_visit.pulse_rate'] = is_null($this->input->post('patient_visit_pulse_rate')) ? '' : $this->input->post('patient_visit_pulse_rate');
    $patient_visit_post['patient_visit.respiratory_rate'] = is_null($this->input->post('patient_visit_respiratory_rate')) ? '' : $this->input->post('patient_visit_respiratory_rate');
    $patient_visit_post['patient_visit.temperature'] = is_null($this->input->post('patient_visit_temperature')) ? '' : $this->input->post('patient_visit_temperature');
    $patient_visit_post['patient_visit.sbp'] = is_null($this->input->post('patient_visit_sbp')) ? '' : $this->input->post('patient_visit_sbp');
    $patient_visit_post['patient_visit.dbp'] = is_null($this->input->post('patient_visit_dbp')) ? '' : $this->input->post('patient_visit_dbp');
    $patient_visit_post['patient_visit.clinical_findings'] = is_null($this->input->post('patient_visit_clinical_findings')) ? '' : $this->input->post('patient_visit_clinical_findings');
    $patient_visit_post['patient_visit.cvs'] = is_null($this->input->post('patient_visit_cvs')) ? '' : $this->input->post('patient_visit_cvs');
    $patient_visit_post['patient_visit.rs'] = is_null($this->input->post('patient_visit_rs')) ? '' : $this->input->post('patient_visit_rs');
    $patient_visit_post['patient_visit.pa'] = is_null($this->input->post('patient_visit_pa')) ? '' : $this->input->post('patient_visit_pa');
    $patient_visit_post['patient_visit.cns'] = is_null($this->input->post('patient_visit_cns')) ? '' : $this->input->post('patient_visit_cns');
    $patient_visit_post['patient_visit.cxr'] = is_null($this->input->post('patient_visit_cxr')) ? '' : $this->input->post('patient_visit_cxr');
    $patient_visit_post['patient_visit.provisional_diagnosis'] = is_null($this->input->post('patient_visit_provisional_diagnosis')) ? '' : $this->input->post('patient_visit_provisional_diagnosis');
    $patient_visit_post['patient_visit.final_diagnosis'] = is_null($this->input->post('patient_visit_final_diagnosis')) ? '' : $this->input->post('patient_visit_final_diagnosis');
    $patient_visit_post['patient_visit.decision'] = is_null($this->input->post('patient_visit_decision')) ? '' : $this->input->post('patient_visit_decision');
    $patient_visit_post['patient_visit.advise'] = is_null($this->input->post('patient_visit_advise')) ? '' : $this->input->post('patient_visit_advise');
    $patient_visit_post['patient_visit.icd_10'] = is_null($this->input->post('patient_visit_icd_10')) ? '' : $this->input->post('patient_visit_icd_10');
    $patient_visit_post['patient_visit.icd_10_ext'] = is_null($this->input->post('patient_visit_icd_10_ext')) ? '' : $this->input->post('patient_visit_icd_10_ext');
    $patient_visit_post['patient_visit.discharge_weight'] = is_null($this->input->post('patient_visit_discharge_weight')) ? '' : $this->input->post('patient_visit_discharge_weight');
    $patient_visit_post['patient_visit.outcome'] = is_null($this->input->post('patient_visit_outcome')) ? '' : $this->input->post('patient_visit_outcome');
    $patient_visit_post['patient_visit.outcome_date'] = is_null($this->input->post('patient_visit_outcome_date')) ? '' : $this->input->post('patient_visit_outcome_date');
    $patient_visit_post['patient_visit.outcome_time'] = is_null($this->input->post('patient_visit_outcome_time')) ? '' : $this->input->post('patient_visit_outcome_time');
    $patient_visit_post['patient_visit.ip_file_received'] = is_null($this->input->post('patient_visit_ip_file_received')) ? '' : $this->input->post('patient_visit_ip_file_received');
    $patient_visit_post['patient_visit.mlc'] = is_null($this->input->post('patient_visit_mlc')) ? '' : $this->input->post('patient_visit_mlc');
    $patient_visit_post['patient_visit.arrival_mode'] = is_null($this->input->post('patient_visit_arrival_mode')) ? '' : $this->input->post('patient_visit_arrival_mode');
    $patient_visit_post['patient_visit.refereal_hospital_id'] = is_null($this->input->post('patient_visit_refereal_hospital_id')) ? '' : $this->input->post('patient_visit_refereal_hospital_id');
    $patient_visit_post['patient_visit.insert_by_user_id'] = is_null($this->input->post('patient_visit_insert_by_user_id')) ? '' : $this->input->post('patient_visit_insert_by_user_id');
    $patient_visit_post['patient_visit.update_by_user_id'] = is_null($this->input->post('patient_visit_update_by_user_id')) ? '' : $this->input->post('patient_visit_update_by_user_id');
    $patient_visit_post['patient_visit.insert_datetime'] = is_null($this->input->post('patient_visit_insert_datetime')) ? '' : $this->input->post('patient_visit_insert_datetime');
    $patient_visit_post['patient_visit.update_datetime'] = is_null($this->input->post('patient_visit_update_datetime')) ? '' : $this->input->post('patient_visit_update_datetime');
    $patient_visit_post['patient_visit.temp_visit_id'] = is_null($this->input->post('patient_visit_temp_visit_id')) ? '' : $this->input->post('patient_visit_temp_visit_id');
    $this->session->set_userdata('hospital.hospital_id', $patient_visit_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $patient_visit_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('visit_name.visit_name_id', $patient_visit_post['visit_name.visit_name_id']);
    $this->session->set_userdata('bb_external_patient.patient_id', $patient_visit_post['bb_external_patient.patient_id']);
    $this->session->set_userdata('patient.patient_id', $patient_visit_post['patient.patient_id']);
    $this->session->set_userdata('department.department_id', $patient_visit_post['department.department_id']);
    $this->session->set_userdata('insurance.insurance_id', $patient_visit_post['insurance.insurance_id']);
    $this->session->set_userdata('patient_visit.visit_id', $patient_visit_post['patient_visit.visit_id']);
    $this->db->update('patient_visit', $patient_visit_post, array('visit_id' => $patient_visit_post['visit_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $patient_visit_post);
  }
  function patient_visit_delete() {
    $patient_visit_delete['patient_visit.visit_id'] = is_null($this->input->post('patient_visit_visit_id')) ? '' : $this->input->post('patient_visit_visit_id');
    $patient_visit_delete['patient_visit.hospital_id'] = is_null($this->input->post('patient_visit_hospital_id')) ? '' : $this->input->post('patient_visit_hospital_id');
    $patient_visit_delete['patient_visit.admit_id'] = is_null($this->input->post('patient_visit_admit_id')) ? '' : $this->input->post('patient_visit_admit_id');
    $patient_visit_delete['patient_visit.visit_type'] = is_null($this->input->post('patient_visit_visit_type')) ? '' : $this->input->post('patient_visit_visit_type');
    $patient_visit_delete['patient_visit.visit_name_id'] = is_null($this->input->post('patient_visit_visit_name_id')) ? '' : $this->input->post('patient_visit_visit_name_id');
    $patient_visit_delete['patient_visit.patient_id'] = is_null($this->input->post('patient_visit_patient_id')) ? '' : $this->input->post('patient_visit_patient_id');
    $patient_visit_delete['patient_visit.hosp_file_no'] = is_null($this->input->post('patient_visit_hosp_file_no')) ? '' : $this->input->post('patient_visit_hosp_file_no');
    $patient_visit_delete['patient_visit.admit_date'] = is_null($this->input->post('patient_visit_admit_date')) ? '' : $this->input->post('patient_visit_admit_date');
    $patient_visit_delete['patient_visit.admit_time'] = is_null($this->input->post('patient_visit_admit_time')) ? '' : $this->input->post('patient_visit_admit_time');
    $patient_visit_delete['patient_visit.department_id'] = is_null($this->input->post('patient_visit_department_id')) ? '' : $this->input->post('patient_visit_department_id');
    $patient_visit_delete['patient_visit.unit'] = is_null($this->input->post('patient_visit_unit')) ? '' : $this->input->post('patient_visit_unit');
    $patient_visit_delete['patient_visit.area'] = is_null($this->input->post('patient_visit_area')) ? '' : $this->input->post('patient_visit_area');
    $patient_visit_delete['patient_visit.doctor_id'] = is_null($this->input->post('patient_visit_doctor_id')) ? '' : $this->input->post('patient_visit_doctor_id');
    $patient_visit_delete['patient_visit.nurse'] = is_null($this->input->post('patient_visit_nurse')) ? '' : $this->input->post('patient_visit_nurse');
    $patient_visit_delete['patient_visit.insurance_case'] = is_null($this->input->post('patient_visit_insurance_case')) ? '' : $this->input->post('patient_visit_insurance_case');
    $patient_visit_delete['patient_visit.insurance_id'] = is_null($this->input->post('patient_visit_insurance_id')) ? '' : $this->input->post('patient_visit_insurance_id');
    $patient_visit_delete['patient_visit.insurance_no'] = is_null($this->input->post('patient_visit_insurance_no')) ? '' : $this->input->post('patient_visit_insurance_no');
    $patient_visit_delete['patient_visit.presenting_complaints'] = is_null($this->input->post('patient_visit_presenting_complaints')) ? '' : $this->input->post('patient_visit_presenting_complaints');
    $patient_visit_delete['patient_visit.past_history'] = is_null($this->input->post('patient_visit_past_history')) ? '' : $this->input->post('patient_visit_past_history');
    $patient_visit_delete['patient_visit.family_history'] = is_null($this->input->post('patient_visit_family_history')) ? '' : $this->input->post('patient_visit_family_history');
    $patient_visit_delete['patient_visit.admit_weight'] = is_null($this->input->post('patient_visit_admit_weight')) ? '' : $this->input->post('patient_visit_admit_weight');
    $patient_visit_delete['patient_visit.pulse_rate'] = is_null($this->input->post('patient_visit_pulse_rate')) ? '' : $this->input->post('patient_visit_pulse_rate');
    $patient_visit_delete['patient_visit.respiratory_rate'] = is_null($this->input->post('patient_visit_respiratory_rate')) ? '' : $this->input->post('patient_visit_respiratory_rate');
    $patient_visit_delete['patient_visit.temperature'] = is_null($this->input->post('patient_visit_temperature')) ? '' : $this->input->post('patient_visit_temperature');
    $patient_visit_delete['patient_visit.sbp'] = is_null($this->input->post('patient_visit_sbp')) ? '' : $this->input->post('patient_visit_sbp');
    $patient_visit_delete['patient_visit.dbp'] = is_null($this->input->post('patient_visit_dbp')) ? '' : $this->input->post('patient_visit_dbp');
    $patient_visit_delete['patient_visit.clinical_findings'] = is_null($this->input->post('patient_visit_clinical_findings')) ? '' : $this->input->post('patient_visit_clinical_findings');
    $patient_visit_delete['patient_visit.cvs'] = is_null($this->input->post('patient_visit_cvs')) ? '' : $this->input->post('patient_visit_cvs');
    $patient_visit_delete['patient_visit.rs'] = is_null($this->input->post('patient_visit_rs')) ? '' : $this->input->post('patient_visit_rs');
    $patient_visit_delete['patient_visit.pa'] = is_null($this->input->post('patient_visit_pa')) ? '' : $this->input->post('patient_visit_pa');
    $patient_visit_delete['patient_visit.cns'] = is_null($this->input->post('patient_visit_cns')) ? '' : $this->input->post('patient_visit_cns');
    $patient_visit_delete['patient_visit.cxr'] = is_null($this->input->post('patient_visit_cxr')) ? '' : $this->input->post('patient_visit_cxr');
    $patient_visit_delete['patient_visit.provisional_diagnosis'] = is_null($this->input->post('patient_visit_provisional_diagnosis')) ? '' : $this->input->post('patient_visit_provisional_diagnosis');
    $patient_visit_delete['patient_visit.final_diagnosis'] = is_null($this->input->post('patient_visit_final_diagnosis')) ? '' : $this->input->post('patient_visit_final_diagnosis');
    $patient_visit_delete['patient_visit.decision'] = is_null($this->input->post('patient_visit_decision')) ? '' : $this->input->post('patient_visit_decision');
    $patient_visit_delete['patient_visit.advise'] = is_null($this->input->post('patient_visit_advise')) ? '' : $this->input->post('patient_visit_advise');
    $patient_visit_delete['patient_visit.icd_10'] = is_null($this->input->post('patient_visit_icd_10')) ? '' : $this->input->post('patient_visit_icd_10');
    $patient_visit_delete['patient_visit.icd_10_ext'] = is_null($this->input->post('patient_visit_icd_10_ext')) ? '' : $this->input->post('patient_visit_icd_10_ext');
    $patient_visit_delete['patient_visit.discharge_weight'] = is_null($this->input->post('patient_visit_discharge_weight')) ? '' : $this->input->post('patient_visit_discharge_weight');
    $patient_visit_delete['patient_visit.outcome'] = is_null($this->input->post('patient_visit_outcome')) ? '' : $this->input->post('patient_visit_outcome');
    $patient_visit_delete['patient_visit.outcome_date'] = is_null($this->input->post('patient_visit_outcome_date')) ? '' : $this->input->post('patient_visit_outcome_date');
    $patient_visit_delete['patient_visit.outcome_time'] = is_null($this->input->post('patient_visit_outcome_time')) ? '' : $this->input->post('patient_visit_outcome_time');
    $patient_visit_delete['patient_visit.ip_file_received'] = is_null($this->input->post('patient_visit_ip_file_received')) ? '' : $this->input->post('patient_visit_ip_file_received');
    $patient_visit_delete['patient_visit.mlc'] = is_null($this->input->post('patient_visit_mlc')) ? '' : $this->input->post('patient_visit_mlc');
    $patient_visit_delete['patient_visit.arrival_mode'] = is_null($this->input->post('patient_visit_arrival_mode')) ? '' : $this->input->post('patient_visit_arrival_mode');
    $patient_visit_delete['patient_visit.refereal_hospital_id'] = is_null($this->input->post('patient_visit_refereal_hospital_id')) ? '' : $this->input->post('patient_visit_refereal_hospital_id');
    $patient_visit_delete['patient_visit.insert_by_user_id'] = is_null($this->input->post('patient_visit_insert_by_user_id')) ? '' : $this->input->post('patient_visit_insert_by_user_id');
    $patient_visit_delete['patient_visit.update_by_user_id'] = is_null($this->input->post('patient_visit_update_by_user_id')) ? '' : $this->input->post('patient_visit_update_by_user_id');
    $patient_visit_delete['patient_visit.insert_datetime'] = is_null($this->input->post('patient_visit_insert_datetime')) ? '' : $this->input->post('patient_visit_insert_datetime');
    $patient_visit_delete['patient_visit.update_datetime'] = is_null($this->input->post('patient_visit_update_datetime')) ? '' : $this->input->post('patient_visit_update_datetime');
    $patient_visit_delete['patient_visit.temp_visit_id'] = is_null($this->input->post('patient_visit_temp_visit_id')) ? '' : $this->input->post('patient_visit_temp_visit_id');
    $this->db->delete('patient_visit', array('visit_id' => $patient_visit_delete['visit_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $patient_visit_delete);
  }
  function patient_visit_get_records() {
    $patient_visit_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $patient_visit_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $patient_visit_filters['visit_name.visit_name_id'] = $this->session->visit_name_visit_name_id;
    $patient_visit_filters['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $patient_visit_filters['patient.patient_id'] = $this->session->patient_patient_id;
    $patient_visit_filters['department.department_id'] = $this->session->department_department_id;
    $patient_visit_filters['insurance.insurance_id'] = $this->session->insurance_insurance_id;
    $patient_visit_filters['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $patient_visit_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $patient_visit_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $patient_visit_filters['visit_name.visit_name_id'] = $visit_name_visit_name_id;
    $patient_visit_filters['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $patient_visit_filters['patient.patient_id'] = $patient_patient_id;
    $patient_visit_filters['department.department_id'] = $department_department_id;
    $patient_visit_filters['insurance.insurance_id'] = $insurance_insurance_id;
    $patient_visit_filters['patient_visit.visit_id'] = $patient_visit_visit_id;
    $patient_visit_filters['patient_visit.hospital_id'] = is_null($this->input->post('patient_visit_hospital_id')) ? '' : $this->input->post('patient_visit_hospital_id');
    $patient_visit_filters['patient_visit.admit_id'] = is_null($this->input->post('patient_visit_admit_id')) ? '' : $this->input->post('patient_visit_admit_id');
    $patient_visit_filters['patient_visit.visit_type'] = is_null($this->input->post('patient_visit_visit_type')) ? '' : $this->input->post('patient_visit_visit_type');
    $patient_visit_filters['patient_visit.visit_name_id'] = is_null($this->input->post('patient_visit_visit_name_id')) ? '' : $this->input->post('patient_visit_visit_name_id');
    $patient_visit_filters['patient_visit.patient_id'] = is_null($this->input->post('patient_visit_patient_id')) ? '' : $this->input->post('patient_visit_patient_id');
    $patient_visit_filters['patient_visit.hosp_file_no'] = is_null($this->input->post('patient_visit_hosp_file_no')) ? '' : $this->input->post('patient_visit_hosp_file_no');
    $patient_visit_filters['patient_visit.admit_date'] = is_null($this->input->post('patient_visit_admit_date')) ? '' : $this->input->post('patient_visit_admit_date');
    $patient_visit_filters['patient_visit.admit_time'] = is_null($this->input->post('patient_visit_admit_time')) ? '' : $this->input->post('patient_visit_admit_time');
    $patient_visit_filters['patient_visit.department_id'] = is_null($this->input->post('patient_visit_department_id')) ? '' : $this->input->post('patient_visit_department_id');
    $patient_visit_filters['patient_visit.unit'] = is_null($this->input->post('patient_visit_unit')) ? '' : $this->input->post('patient_visit_unit');
    $patient_visit_filters['patient_visit.area'] = is_null($this->input->post('patient_visit_area')) ? '' : $this->input->post('patient_visit_area');
    $patient_visit_filters['patient_visit.doctor_id'] = is_null($this->input->post('patient_visit_doctor_id')) ? '' : $this->input->post('patient_visit_doctor_id');
    $patient_visit_filters['patient_visit.nurse'] = is_null($this->input->post('patient_visit_nurse')) ? '' : $this->input->post('patient_visit_nurse');
    $patient_visit_filters['patient_visit.insurance_case'] = is_null($this->input->post('patient_visit_insurance_case')) ? '' : $this->input->post('patient_visit_insurance_case');
    $patient_visit_filters['patient_visit.insurance_id'] = is_null($this->input->post('patient_visit_insurance_id')) ? '' : $this->input->post('patient_visit_insurance_id');
    $patient_visit_filters['patient_visit.insurance_no'] = is_null($this->input->post('patient_visit_insurance_no')) ? '' : $this->input->post('patient_visit_insurance_no');
    $patient_visit_filters['patient_visit.presenting_complaints'] = is_null($this->input->post('patient_visit_presenting_complaints')) ? '' : $this->input->post('patient_visit_presenting_complaints');
    $patient_visit_filters['patient_visit.past_history'] = is_null($this->input->post('patient_visit_past_history')) ? '' : $this->input->post('patient_visit_past_history');
    $patient_visit_filters['patient_visit.family_history'] = is_null($this->input->post('patient_visit_family_history')) ? '' : $this->input->post('patient_visit_family_history');
    $patient_visit_filters['patient_visit.admit_weight'] = is_null($this->input->post('patient_visit_admit_weight')) ? '' : $this->input->post('patient_visit_admit_weight');
    $patient_visit_filters['patient_visit.pulse_rate'] = is_null($this->input->post('patient_visit_pulse_rate')) ? '' : $this->input->post('patient_visit_pulse_rate');
    $patient_visit_filters['patient_visit.respiratory_rate'] = is_null($this->input->post('patient_visit_respiratory_rate')) ? '' : $this->input->post('patient_visit_respiratory_rate');
    $patient_visit_filters['patient_visit.temperature'] = is_null($this->input->post('patient_visit_temperature')) ? '' : $this->input->post('patient_visit_temperature');
    $patient_visit_filters['patient_visit.sbp'] = is_null($this->input->post('patient_visit_sbp')) ? '' : $this->input->post('patient_visit_sbp');
    $patient_visit_filters['patient_visit.dbp'] = is_null($this->input->post('patient_visit_dbp')) ? '' : $this->input->post('patient_visit_dbp');
    $patient_visit_filters['patient_visit.clinical_findings'] = is_null($this->input->post('patient_visit_clinical_findings')) ? '' : $this->input->post('patient_visit_clinical_findings');
    $patient_visit_filters['patient_visit.cvs'] = is_null($this->input->post('patient_visit_cvs')) ? '' : $this->input->post('patient_visit_cvs');
    $patient_visit_filters['patient_visit.rs'] = is_null($this->input->post('patient_visit_rs')) ? '' : $this->input->post('patient_visit_rs');
    $patient_visit_filters['patient_visit.pa'] = is_null($this->input->post('patient_visit_pa')) ? '' : $this->input->post('patient_visit_pa');
    $patient_visit_filters['patient_visit.cns'] = is_null($this->input->post('patient_visit_cns')) ? '' : $this->input->post('patient_visit_cns');
    $patient_visit_filters['patient_visit.cxr'] = is_null($this->input->post('patient_visit_cxr')) ? '' : $this->input->post('patient_visit_cxr');
    $patient_visit_filters['patient_visit.provisional_diagnosis'] = is_null($this->input->post('patient_visit_provisional_diagnosis')) ? '' : $this->input->post('patient_visit_provisional_diagnosis');
    $patient_visit_filters['patient_visit.final_diagnosis'] = is_null($this->input->post('patient_visit_final_diagnosis')) ? '' : $this->input->post('patient_visit_final_diagnosis');
    $patient_visit_filters['patient_visit.decision'] = is_null($this->input->post('patient_visit_decision')) ? '' : $this->input->post('patient_visit_decision');
    $patient_visit_filters['patient_visit.advise'] = is_null($this->input->post('patient_visit_advise')) ? '' : $this->input->post('patient_visit_advise');
    $patient_visit_filters['patient_visit.icd_10'] = is_null($this->input->post('patient_visit_icd_10')) ? '' : $this->input->post('patient_visit_icd_10');
    $patient_visit_filters['patient_visit.icd_10_ext'] = is_null($this->input->post('patient_visit_icd_10_ext')) ? '' : $this->input->post('patient_visit_icd_10_ext');
    $patient_visit_filters['patient_visit.discharge_weight'] = is_null($this->input->post('patient_visit_discharge_weight')) ? '' : $this->input->post('patient_visit_discharge_weight');
    $patient_visit_filters['patient_visit.outcome'] = is_null($this->input->post('patient_visit_outcome')) ? '' : $this->input->post('patient_visit_outcome');
    $patient_visit_filters['patient_visit.outcome_date'] = is_null($this->input->post('patient_visit_outcome_date')) ? '' : $this->input->post('patient_visit_outcome_date');
    $patient_visit_filters['patient_visit.outcome_time'] = is_null($this->input->post('patient_visit_outcome_time')) ? '' : $this->input->post('patient_visit_outcome_time');
    $patient_visit_filters['patient_visit.ip_file_received'] = is_null($this->input->post('patient_visit_ip_file_received')) ? '' : $this->input->post('patient_visit_ip_file_received');
    $patient_visit_filters['patient_visit.mlc'] = is_null($this->input->post('patient_visit_mlc')) ? '' : $this->input->post('patient_visit_mlc');
    $patient_visit_filters['patient_visit.arrival_mode'] = is_null($this->input->post('patient_visit_arrival_mode')) ? '' : $this->input->post('patient_visit_arrival_mode');
    $patient_visit_filters['patient_visit.refereal_hospital_id'] = is_null($this->input->post('patient_visit_refereal_hospital_id')) ? '' : $this->input->post('patient_visit_refereal_hospital_id');
    $patient_visit_filters['patient_visit.insert_by_user_id'] = is_null($this->input->post('patient_visit_insert_by_user_id')) ? '' : $this->input->post('patient_visit_insert_by_user_id');
    $patient_visit_filters['patient_visit.update_by_user_id'] = is_null($this->input->post('patient_visit_update_by_user_id')) ? '' : $this->input->post('patient_visit_update_by_user_id');
    $patient_visit_filters['patient_visit.insert_datetime'] = is_null($this->input->post('patient_visit_insert_datetime')) ? '' : $this->input->post('patient_visit_insert_datetime');
    $patient_visit_filters['patient_visit.update_datetime'] = is_null($this->input->post('patient_visit_update_datetime')) ? '' : $this->input->post('patient_visit_update_datetime');
    $patient_visit_filters['patient_visit.temp_visit_id'] = is_null($this->input->post('patient_visit_temp_visit_id')) ? '' : $this->input->post('patient_visit_temp_visit_id');
    $this->session->set_userdata('hospital.hospital_id', $patient_visit_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $patient_visit_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('visit_name.visit_name_id', $patient_visit_filters['visit_name.visit_name_id']);
    $this->session->set_userdata('bb_external_patient.patient_id', $patient_visit_filters['bb_external_patient.patient_id']);
    $this->session->set_userdata('patient.patient_id', $patient_visit_filters['patient.patient_id']);
    $this->session->set_userdata('department.department_id', $patient_visit_filters['department.department_id']);
    $this->session->set_userdata('insurance.insurance_id', $patient_visit_filters['insurance.insurance_id']);
    $this->session->set_userdata('patient_visit.visit_id', $patient_visit_filters['patient_visit.visit_id']);
    $this->db->select('hospital.hospital_id AS patient_visit_hospital_id, staff_previous_hospital.hospital_id AS patient_visit_hospital_id,
    visit_name.visit_name_id AS patient_visit_visit_name_id, bb_external_patient.patient_id AS patient_visit_patient_id,
    patient.patient_id AS patient_visit_patient_id, department.department_id AS patient_visit_department_id,
    insurance.insurance_id AS patient_visit_insurance_id, patient_visit.visit_id AS patient_visit_visit_id,
    patient_visit.hospital_id AS patient_visit_hospital_id, patient_visit.admit_id AS patient_visit_admit_id,
    patient_visit.visit_type AS patient_visit_visit_type, patient_visit.visit_name_id AS patient_visit_visit_name_id,
    patient_visit.patient_id AS patient_visit_patient_id, patient_visit.hosp_file_no AS patient_visit_hosp_file_no,
    patient_visit.admit_date AS patient_visit_admit_date, patient_visit.admit_time AS patient_visit_admit_time,
    patient_visit.department_id AS patient_visit_department_id, patient_visit.unit AS patient_visit_unit,
    patient_visit.area AS patient_visit_area, patient_visit.doctor_id AS patient_visit_doctor_id,
    patient_visit.nurse AS patient_visit_nurse, patient_visit.insurance_case AS patient_visit_insurance_case,
    patient_visit.insurance_id AS patient_visit_insurance_id, patient_visit.insurance_no AS patient_visit_insurance_no,
    patient_visit.presenting_complaints AS patient_visit_presenting_complaints, patient_visit.past_history AS patient_visit_past_history,
    patient_visit.family_history AS patient_visit_family_history, patient_visit.admit_weight AS patient_visit_admit_weight,
    patient_visit.pulse_rate AS patient_visit_pulse_rate, patient_visit.respiratory_rate AS patient_visit_respiratory_rate,
    patient_visit.temperature AS patient_visit_temperature, patient_visit.sbp AS patient_visit_sbp,
    patient_visit.dbp AS patient_visit_dbp, patient_visit.clinical_findings AS patient_visit_clinical_findings,
    patient_visit.cvs AS patient_visit_cvs, patient_visit.rs AS patient_visit_rs,
    patient_visit.pa AS patient_visit_pa, patient_visit.cns AS patient_visit_cns,
    patient_visit.cxr AS patient_visit_cxr, patient_visit.provisional_diagnosis AS patient_visit_provisional_diagnosis,
    patient_visit.final_diagnosis AS patient_visit_final_diagnosis, patient_visit.decision AS patient_visit_decision,
    patient_visit.advise AS patient_visit_advise, patient_visit.icd_10 AS patient_visit_icd_10,
    patient_visit.icd_10_ext AS patient_visit_icd_10_ext, patient_visit.discharge_weight AS patient_visit_discharge_weight,
    patient_visit.outcome AS patient_visit_outcome, patient_visit.outcome_date AS patient_visit_outcome_date,
    patient_visit.outcome_time AS patient_visit_outcome_time, patient_visit.ip_file_received AS patient_visit_ip_file_received,
    patient_visit.mlc AS patient_visit_mlc, patient_visit.arrival_mode AS patient_visit_arrival_mode,
    patient_visit.refereal_hospital_id AS patient_visit_refereal_hospital_id, patient_visit.insert_by_user_id AS patient_visit_insert_by_user_id,
    patient_visit.update_by_user_id AS patient_visit_update_by_user_id, patient_visit.insert_datetime AS patient_visit_insert_datetime,
    patient_visit.update_datetime AS patient_visit_update_datetime, patient_visit.temp_visit_id AS patient_visit_temp_visit_id')->from('patient_visit');
    $this->db->join('hospital', 'patient_visit.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'patient_visit.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->join('visit_name', 'patient_visit.visit_name_id = visit_name.visit_name_id', 'left');
    $this->db->join('bb_external_patient', 'patient_visit.patient_id = bb_external_patient.patient_id', 'left');
    $this->db->join('patient', 'patient_visit.patient_id = patient.patient_id', 'left');
    $this->db->join('department', 'patient_visit.department_id = department.department_id', 'left');
    $this->db->join('insurance', 'patient_visit.insurance_id = insurance.insurance_id', 'left');
    $this->db->where($patient_visit_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $patient_visit_filters);
  }
}