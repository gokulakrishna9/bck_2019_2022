<?php class Blood_request_model extends CI_Model {
  function blood_request_create($hospital_hospital_id,$staff_previous_hospital_hospital_id,$bb_external_patient_patient_id,$patient_patient_id,$staff_staff_id,$mlc_visit_id,$patient_visit_visit_id) {
    $blood_request_post = [];
    $blood_request_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_request_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_request_post['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $blood_request_post['patient.patient_id'] = $this->session->patient_patient_id;
    $blood_request_post['staff.staff_id'] = $this->session->staff_staff_id;
    $blood_request_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $blood_request_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $blood_request_post['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_request_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_request_post['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $blood_request_post['patient.patient_id'] = $patient_patient_id;
    $blood_request_post['staff.staff_id'] = $staff_staff_id;
    $blood_request_post['mlc.visit_id'] = $mlc_visit_id;
    $blood_request_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $blood_request_post['blood_group'] = is_null($this->input->post('blood_group')) ? '' : $this->input->post('blood_group');
    $blood_request_post['blood_transfusion_required'] = is_null($this->input->post('blood_transfusion_required')) ? '' : $this->input->post('blood_transfusion_required');
    $blood_request_post['bloodbank_id'] = is_null($this->input->post('bloodbank_id')) ? '' : $this->input->post('bloodbank_id');
    $blood_request_post['cryoprecipitate_units'] = is_null($this->input->post('cryoprecipitate_units')) ? '' : $this->input->post('cryoprecipitate_units');
    $blood_request_post['department'] = is_null($this->input->post('department')) ? '' : $this->input->post('department');
    $blood_request_post['diagnosis'] = is_null($this->input->post('diagnosis')) ? '' : $this->input->post('diagnosis');
    $blood_request_post['ffp_units'] = is_null($this->input->post('ffp_units')) ? '' : $this->input->post('ffp_units');
    $blood_request_post['fp_units'] = is_null($this->input->post('fp_units')) ? '' : $this->input->post('fp_units');
    $blood_request_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $blood_request_post['packed_cell_units'] = is_null($this->input->post('packed_cell_units')) ? '' : $this->input->post('packed_cell_units');
    $blood_request_post['patient_age'] = is_null($this->input->post('patient_age')) ? '' : $this->input->post('patient_age');
    $blood_request_post['patient_gender'] = is_null($this->input->post('patient_gender')) ? '' : $this->input->post('patient_gender');
    $blood_request_post['patient_id'] = is_null($this->input->post('patient_id')) ? '' : $this->input->post('patient_id');
    $blood_request_post['patient_name'] = is_null($this->input->post('patient_name')) ? '' : $this->input->post('patient_name');
    $blood_request_post['patient_type'] = is_null($this->input->post('patient_type')) ? '' : $this->input->post('patient_type');
    $blood_request_post['platelet_concentrate_units'] = is_null($this->input->post('platelet_concentrate_units')) ? '' : $this->input->post('platelet_concentrate_units');
    $blood_request_post['prp_units'] = is_null($this->input->post('prp_units')) ? '' : $this->input->post('prp_units');
    $blood_request_post['rdp_units'] = is_null($this->input->post('rdp_units')) ? '' : $this->input->post('rdp_units');
    $blood_request_post['referred_by_doctor'] = is_null($this->input->post('referred_by_doctor')) ? '' : $this->input->post('referred_by_doctor');
    $blood_request_post['request_date'] = is_null($this->input->post('request_date')) ? '' : $this->input->post('request_date');
    $blood_request_post['request_hospital_id'] = is_null($this->input->post('request_hospital_id')) ? '' : $this->input->post('request_hospital_id');
    $blood_request_post['request_id'] = is_null($this->input->post('request_id')) ? '' : $this->input->post('request_id');
    $blood_request_post['request_status'] = is_null($this->input->post('request_status')) ? '' : $this->input->post('request_status');
    $blood_request_post['request_type'] = is_null($this->input->post('request_type')) ? '' : $this->input->post('request_type');
    $blood_request_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $blood_request_post['visit_id'] = is_null($this->input->post('visit_id')) ? '' : $this->input->post('visit_id');
    $blood_request_post['ward_unit'] = is_null($this->input->post('ward_unit')) ? '' : $this->input->post('ward_unit');
    $blood_request_post['whole_blood_units'] = is_null($this->input->post('whole_blood_units')) ? '' : $this->input->post('whole_blood_units');
    $this->session->set_userdata('hospital.hospital_id', $blood_request_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_request_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_external_patient.patient_id', $blood_request_post['bb_external_patient.patient_id']);
    $this->session->set_userdata('patient.patient_id', $blood_request_post['patient.patient_id']);
    $this->session->set_userdata('staff.staff_id', $blood_request_post['staff.staff_id']);
    $this->session->set_userdata('mlc.visit_id', $blood_request_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $blood_request_post['patient_visit.visit_id']);
    $this->db->insert('blood_request', $blood_request_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $blood_request_post);
  }
  function blood_request_update($hospital_id,$hospital_id,$patient_id,$patient_id,$staff_id,$visit_id,$visit_id,$request_id) {
    $blood_request_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_request_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_request_post['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $blood_request_post['patient.patient_id'] = $this->session->patient_patient_id;
    $blood_request_post['staff.staff_id'] = $this->session->staff_staff_id;
    $blood_request_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $blood_request_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $blood_request_post['blood_request.request_id'] = $this->session->blood_request_request_id;
    $blood_request_post['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_request_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_request_post['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $blood_request_post['patient.patient_id'] = $patient_patient_id;
    $blood_request_post['staff.staff_id'] = $staff_staff_id;
    $blood_request_post['mlc.visit_id'] = $mlc_visit_id;
    $blood_request_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $blood_request_post['blood_request.request_id'] = $blood_request_request_id;
    $blood_request_post['blood_request.blood_group'] = is_null($this->input->post('blood_request_blood_group')) ? '' : $this->input->post('blood_request_blood_group');
    $blood_request_post['blood_request.blood_transfusion_required'] = is_null($this->input->post('blood_request_blood_transfusion_required')) ? '' : $this->input->post('blood_request_blood_transfusion_required');
    $blood_request_post['blood_request.bloodbank_id'] = is_null($this->input->post('blood_request_bloodbank_id')) ? '' : $this->input->post('blood_request_bloodbank_id');
    $blood_request_post['blood_request.cryoprecipitate_units'] = is_null($this->input->post('blood_request_cryoprecipitate_units')) ? '' : $this->input->post('blood_request_cryoprecipitate_units');
    $blood_request_post['blood_request.department'] = is_null($this->input->post('blood_request_department')) ? '' : $this->input->post('blood_request_department');
    $blood_request_post['blood_request.diagnosis'] = is_null($this->input->post('blood_request_diagnosis')) ? '' : $this->input->post('blood_request_diagnosis');
    $blood_request_post['blood_request.ffp_units'] = is_null($this->input->post('blood_request_ffp_units')) ? '' : $this->input->post('blood_request_ffp_units');
    $blood_request_post['blood_request.fp_units'] = is_null($this->input->post('blood_request_fp_units')) ? '' : $this->input->post('blood_request_fp_units');
    $blood_request_post['blood_request.hospital_id'] = is_null($this->input->post('blood_request_hospital_id')) ? '' : $this->input->post('blood_request_hospital_id');
    $blood_request_post['blood_request.packed_cell_units'] = is_null($this->input->post('blood_request_packed_cell_units')) ? '' : $this->input->post('blood_request_packed_cell_units');
    $blood_request_post['blood_request.patient_age'] = is_null($this->input->post('blood_request_patient_age')) ? '' : $this->input->post('blood_request_patient_age');
    $blood_request_post['blood_request.patient_gender'] = is_null($this->input->post('blood_request_patient_gender')) ? '' : $this->input->post('blood_request_patient_gender');
    $blood_request_post['blood_request.patient_id'] = is_null($this->input->post('blood_request_patient_id')) ? '' : $this->input->post('blood_request_patient_id');
    $blood_request_post['blood_request.patient_name'] = is_null($this->input->post('blood_request_patient_name')) ? '' : $this->input->post('blood_request_patient_name');
    $blood_request_post['blood_request.patient_type'] = is_null($this->input->post('blood_request_patient_type')) ? '' : $this->input->post('blood_request_patient_type');
    $blood_request_post['blood_request.platelet_concentrate_units'] = is_null($this->input->post('blood_request_platelet_concentrate_units')) ? '' : $this->input->post('blood_request_platelet_concentrate_units');
    $blood_request_post['blood_request.prp_units'] = is_null($this->input->post('blood_request_prp_units')) ? '' : $this->input->post('blood_request_prp_units');
    $blood_request_post['blood_request.rdp_units'] = is_null($this->input->post('blood_request_rdp_units')) ? '' : $this->input->post('blood_request_rdp_units');
    $blood_request_post['blood_request.referred_by_doctor'] = is_null($this->input->post('blood_request_referred_by_doctor')) ? '' : $this->input->post('blood_request_referred_by_doctor');
    $blood_request_post['blood_request.request_date'] = is_null($this->input->post('blood_request_request_date')) ? '' : $this->input->post('blood_request_request_date');
    $blood_request_post['blood_request.request_hospital_id'] = is_null($this->input->post('blood_request_request_hospital_id')) ? '' : $this->input->post('blood_request_request_hospital_id');
    $blood_request_post['blood_request.request_status'] = is_null($this->input->post('blood_request_request_status')) ? '' : $this->input->post('blood_request_request_status');
    $blood_request_post['blood_request.request_type'] = is_null($this->input->post('blood_request_request_type')) ? '' : $this->input->post('blood_request_request_type');
    $blood_request_post['blood_request.staff_id'] = is_null($this->input->post('blood_request_staff_id')) ? '' : $this->input->post('blood_request_staff_id');
    $blood_request_post['blood_request.visit_id'] = is_null($this->input->post('blood_request_visit_id')) ? '' : $this->input->post('blood_request_visit_id');
    $blood_request_post['blood_request.ward_unit'] = is_null($this->input->post('blood_request_ward_unit')) ? '' : $this->input->post('blood_request_ward_unit');
    $blood_request_post['blood_request.whole_blood_units'] = is_null($this->input->post('blood_request_whole_blood_units')) ? '' : $this->input->post('blood_request_whole_blood_units');
    $this->session->set_userdata('hospital.hospital_id', $blood_request_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_request_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_external_patient.patient_id', $blood_request_post['bb_external_patient.patient_id']);
    $this->session->set_userdata('patient.patient_id', $blood_request_post['patient.patient_id']);
    $this->session->set_userdata('staff.staff_id', $blood_request_post['staff.staff_id']);
    $this->session->set_userdata('mlc.visit_id', $blood_request_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $blood_request_post['patient_visit.visit_id']);
    $this->session->set_userdata('blood_request.request_id', $blood_request_post['blood_request.request_id']);
    $this->db->update('blood_request', $blood_request_post, array('request_id' => $blood_request_post['request_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_request_post);
  }
  function blood_request_delete() {
    $blood_request_delete['blood_request.blood_group'] = is_null($this->input->post('blood_request_blood_group')) ? '' : $this->input->post('blood_request_blood_group');
    $blood_request_delete['blood_request.blood_transfusion_required'] = is_null($this->input->post('blood_request_blood_transfusion_required')) ? '' : $this->input->post('blood_request_blood_transfusion_required');
    $blood_request_delete['blood_request.bloodbank_id'] = is_null($this->input->post('blood_request_bloodbank_id')) ? '' : $this->input->post('blood_request_bloodbank_id');
    $blood_request_delete['blood_request.cryoprecipitate_units'] = is_null($this->input->post('blood_request_cryoprecipitate_units')) ? '' : $this->input->post('blood_request_cryoprecipitate_units');
    $blood_request_delete['blood_request.department'] = is_null($this->input->post('blood_request_department')) ? '' : $this->input->post('blood_request_department');
    $blood_request_delete['blood_request.diagnosis'] = is_null($this->input->post('blood_request_diagnosis')) ? '' : $this->input->post('blood_request_diagnosis');
    $blood_request_delete['blood_request.ffp_units'] = is_null($this->input->post('blood_request_ffp_units')) ? '' : $this->input->post('blood_request_ffp_units');
    $blood_request_delete['blood_request.fp_units'] = is_null($this->input->post('blood_request_fp_units')) ? '' : $this->input->post('blood_request_fp_units');
    $blood_request_delete['blood_request.hospital_id'] = is_null($this->input->post('blood_request_hospital_id')) ? '' : $this->input->post('blood_request_hospital_id');
    $blood_request_delete['blood_request.packed_cell_units'] = is_null($this->input->post('blood_request_packed_cell_units')) ? '' : $this->input->post('blood_request_packed_cell_units');
    $blood_request_delete['blood_request.patient_age'] = is_null($this->input->post('blood_request_patient_age')) ? '' : $this->input->post('blood_request_patient_age');
    $blood_request_delete['blood_request.patient_gender'] = is_null($this->input->post('blood_request_patient_gender')) ? '' : $this->input->post('blood_request_patient_gender');
    $blood_request_delete['blood_request.patient_id'] = is_null($this->input->post('blood_request_patient_id')) ? '' : $this->input->post('blood_request_patient_id');
    $blood_request_delete['blood_request.patient_name'] = is_null($this->input->post('blood_request_patient_name')) ? '' : $this->input->post('blood_request_patient_name');
    $blood_request_delete['blood_request.patient_type'] = is_null($this->input->post('blood_request_patient_type')) ? '' : $this->input->post('blood_request_patient_type');
    $blood_request_delete['blood_request.platelet_concentrate_units'] = is_null($this->input->post('blood_request_platelet_concentrate_units')) ? '' : $this->input->post('blood_request_platelet_concentrate_units');
    $blood_request_delete['blood_request.prp_units'] = is_null($this->input->post('blood_request_prp_units')) ? '' : $this->input->post('blood_request_prp_units');
    $blood_request_delete['blood_request.rdp_units'] = is_null($this->input->post('blood_request_rdp_units')) ? '' : $this->input->post('blood_request_rdp_units');
    $blood_request_delete['blood_request.referred_by_doctor'] = is_null($this->input->post('blood_request_referred_by_doctor')) ? '' : $this->input->post('blood_request_referred_by_doctor');
    $blood_request_delete['blood_request.request_date'] = is_null($this->input->post('blood_request_request_date')) ? '' : $this->input->post('blood_request_request_date');
    $blood_request_delete['blood_request.request_hospital_id'] = is_null($this->input->post('blood_request_request_hospital_id')) ? '' : $this->input->post('blood_request_request_hospital_id');
    $blood_request_delete['blood_request.request_id'] = is_null($this->input->post('blood_request_request_id')) ? '' : $this->input->post('blood_request_request_id');
    $blood_request_delete['blood_request.request_status'] = is_null($this->input->post('blood_request_request_status')) ? '' : $this->input->post('blood_request_request_status');
    $blood_request_delete['blood_request.request_type'] = is_null($this->input->post('blood_request_request_type')) ? '' : $this->input->post('blood_request_request_type');
    $blood_request_delete['blood_request.staff_id'] = is_null($this->input->post('blood_request_staff_id')) ? '' : $this->input->post('blood_request_staff_id');
    $blood_request_delete['blood_request.visit_id'] = is_null($this->input->post('blood_request_visit_id')) ? '' : $this->input->post('blood_request_visit_id');
    $blood_request_delete['blood_request.ward_unit'] = is_null($this->input->post('blood_request_ward_unit')) ? '' : $this->input->post('blood_request_ward_unit');
    $blood_request_delete['blood_request.whole_blood_units'] = is_null($this->input->post('blood_request_whole_blood_units')) ? '' : $this->input->post('blood_request_whole_blood_units');
    $this->db->delete('blood_request', array('request_id' => $blood_request_delete['request_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_request_delete);
  }
  function blood_request_get_records($hospital_id,$hospital_id,$patient_id,$patient_id,$staff_id,$visit_id,$visit_id,$request_id) {
    $blood_request_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_request_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_request_filters['bb_external_patient.patient_id'] = $this->session->bb_external_patient_patient_id;
    $blood_request_filters['patient.patient_id'] = $this->session->patient_patient_id;
    $blood_request_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $blood_request_filters['mlc.visit_id'] = $this->session->mlc_visit_id;
    $blood_request_filters['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $blood_request_filters['blood_request.request_id'] = $this->session->blood_request_request_id;
    $blood_request_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_request_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_request_filters['bb_external_patient.patient_id'] = $bb_external_patient_patient_id;
    $blood_request_filters['patient.patient_id'] = $patient_patient_id;
    $blood_request_filters['staff.staff_id'] = $staff_staff_id;
    $blood_request_filters['mlc.visit_id'] = $mlc_visit_id;
    $blood_request_filters['patient_visit.visit_id'] = $patient_visit_visit_id;
    $blood_request_filters['blood_request.request_id'] = $blood_request_request_id;
    $blood_request_filters['blood_request.blood_group'] = is_null($this->input->post('blood_request_blood_group')) ? '' : $this->input->post('blood_request_blood_group');
    $blood_request_filters['blood_request.blood_transfusion_required'] = is_null($this->input->post('blood_request_blood_transfusion_required')) ? '' : $this->input->post('blood_request_blood_transfusion_required');
    $blood_request_filters['blood_request.bloodbank_id'] = is_null($this->input->post('blood_request_bloodbank_id')) ? '' : $this->input->post('blood_request_bloodbank_id');
    $blood_request_filters['blood_request.cryoprecipitate_units'] = is_null($this->input->post('blood_request_cryoprecipitate_units')) ? '' : $this->input->post('blood_request_cryoprecipitate_units');
    $blood_request_filters['blood_request.department'] = is_null($this->input->post('blood_request_department')) ? '' : $this->input->post('blood_request_department');
    $blood_request_filters['blood_request.diagnosis'] = is_null($this->input->post('blood_request_diagnosis')) ? '' : $this->input->post('blood_request_diagnosis');
    $blood_request_filters['blood_request.ffp_units'] = is_null($this->input->post('blood_request_ffp_units')) ? '' : $this->input->post('blood_request_ffp_units');
    $blood_request_filters['blood_request.fp_units'] = is_null($this->input->post('blood_request_fp_units')) ? '' : $this->input->post('blood_request_fp_units');
    $blood_request_filters['blood_request.hospital_id'] = is_null($this->input->post('blood_request_hospital_id')) ? '' : $this->input->post('blood_request_hospital_id');
    $blood_request_filters['blood_request.packed_cell_units'] = is_null($this->input->post('blood_request_packed_cell_units')) ? '' : $this->input->post('blood_request_packed_cell_units');
    $blood_request_filters['blood_request.patient_age'] = is_null($this->input->post('blood_request_patient_age')) ? '' : $this->input->post('blood_request_patient_age');
    $blood_request_filters['blood_request.patient_gender'] = is_null($this->input->post('blood_request_patient_gender')) ? '' : $this->input->post('blood_request_patient_gender');
    $blood_request_filters['blood_request.patient_id'] = is_null($this->input->post('blood_request_patient_id')) ? '' : $this->input->post('blood_request_patient_id');
    $blood_request_filters['blood_request.patient_name'] = is_null($this->input->post('blood_request_patient_name')) ? '' : $this->input->post('blood_request_patient_name');
    $blood_request_filters['blood_request.patient_type'] = is_null($this->input->post('blood_request_patient_type')) ? '' : $this->input->post('blood_request_patient_type');
    $blood_request_filters['blood_request.platelet_concentrate_units'] = is_null($this->input->post('blood_request_platelet_concentrate_units')) ? '' : $this->input->post('blood_request_platelet_concentrate_units');
    $blood_request_filters['blood_request.prp_units'] = is_null($this->input->post('blood_request_prp_units')) ? '' : $this->input->post('blood_request_prp_units');
    $blood_request_filters['blood_request.rdp_units'] = is_null($this->input->post('blood_request_rdp_units')) ? '' : $this->input->post('blood_request_rdp_units');
    $blood_request_filters['blood_request.referred_by_doctor'] = is_null($this->input->post('blood_request_referred_by_doctor')) ? '' : $this->input->post('blood_request_referred_by_doctor');
    $blood_request_filters['blood_request.request_date'] = is_null($this->input->post('blood_request_request_date')) ? '' : $this->input->post('blood_request_request_date');
    $blood_request_filters['blood_request.request_hospital_id'] = is_null($this->input->post('blood_request_request_hospital_id')) ? '' : $this->input->post('blood_request_request_hospital_id');
    $blood_request_filters['blood_request.request_status'] = is_null($this->input->post('blood_request_request_status')) ? '' : $this->input->post('blood_request_request_status');
    $blood_request_filters['blood_request.request_type'] = is_null($this->input->post('blood_request_request_type')) ? '' : $this->input->post('blood_request_request_type');
    $blood_request_filters['blood_request.staff_id'] = is_null($this->input->post('blood_request_staff_id')) ? '' : $this->input->post('blood_request_staff_id');
    $blood_request_filters['blood_request.visit_id'] = is_null($this->input->post('blood_request_visit_id')) ? '' : $this->input->post('blood_request_visit_id');
    $blood_request_filters['blood_request.ward_unit'] = is_null($this->input->post('blood_request_ward_unit')) ? '' : $this->input->post('blood_request_ward_unit');
    $blood_request_filters['blood_request.whole_blood_units'] = is_null($this->input->post('blood_request_whole_blood_units')) ? '' : $this->input->post('blood_request_whole_blood_units');
    $this->session->set_userdata('hospital.hospital_id', $blood_request_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_request_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_external_patient.patient_id', $blood_request_filters['bb_external_patient.patient_id']);
    $this->session->set_userdata('patient.patient_id', $blood_request_filters['patient.patient_id']);
    $this->session->set_userdata('staff.staff_id', $blood_request_filters['staff.staff_id']);
    $this->session->set_userdata('mlc.visit_id', $blood_request_filters['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $blood_request_filters['patient_visit.visit_id']);
    $this->session->set_userdata('blood_request.request_id', $blood_request_filters['blood_request.request_id']);
    $this->db->select('hospital.hospital_id AS blood_request_hospital_id, staff_previous_hospital.hospital_id AS blood_request_hospital_id,
    bb_external_patient.patient_id AS blood_request_patient_id, patient.patient_id AS blood_request_patient_id,
    staff.staff_id AS blood_request_staff_id, mlc.visit_id AS blood_request_visit_id,
    patient_visit.visit_id AS blood_request_visit_id, blood_request.blood_group AS blood_request_blood_group,
    blood_request.blood_transfusion_required AS blood_request_blood_transfusion_required, blood_request.bloodbank_id AS blood_request_bloodbank_id,
    blood_request.cryoprecipitate_units AS blood_request_cryoprecipitate_units, blood_request.department AS blood_request_department,
    blood_request.diagnosis AS blood_request_diagnosis, blood_request.ffp_units AS blood_request_ffp_units,
    blood_request.fp_units AS blood_request_fp_units, blood_request.hospital_id AS blood_request_hospital_id,
    blood_request.packed_cell_units AS blood_request_packed_cell_units, blood_request.patient_age AS blood_request_patient_age,
    blood_request.patient_gender AS blood_request_patient_gender, blood_request.patient_id AS blood_request_patient_id,
    blood_request.patient_name AS blood_request_patient_name, blood_request.patient_type AS blood_request_patient_type,
    blood_request.platelet_concentrate_units AS blood_request_platelet_concentrate_units, blood_request.prp_units AS blood_request_prp_units,
    blood_request.rdp_units AS blood_request_rdp_units, blood_request.referred_by_doctor AS blood_request_referred_by_doctor,
    blood_request.request_date AS blood_request_request_date, blood_request.request_hospital_id AS blood_request_request_hospital_id,
    blood_request.request_id AS blood_request_request_id, blood_request.request_status AS blood_request_request_status,
    blood_request.request_type AS blood_request_request_type, blood_request.staff_id AS blood_request_staff_id,
    blood_request.visit_id AS blood_request_visit_id, blood_request.ward_unit AS blood_request_ward_unit,
    blood_request.whole_blood_units AS blood_request_whole_blood_units')->from('blood_request');
    $this->db->join('hospital', 'blood_request.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'blood_request.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->join('bb_external_patient', 'blood_request.patient_id = bb_external_patient.patient_id', 'left');
    $this->db->join('patient', 'blood_request.patient_id = patient.patient_id', 'left');
    $this->db->join('staff', 'blood_request.staff_id = staff.staff_id', 'left');
    $this->db->join('mlc', 'blood_request.visit_id = mlc.visit_id', 'left');
    $this->db->join('patient_visit', 'blood_request.visit_id = patient_visit.visit_id', 'left');
    $this->db->where($blood_request_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $blood_request_filters);
  }
}