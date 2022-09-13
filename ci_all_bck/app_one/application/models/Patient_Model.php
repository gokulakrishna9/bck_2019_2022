<?php class Patient_model extends CI_Model {
  function patient_create() {
    $patient_post = [];
    $patient_post['id_proof_type.id_proof_type_id'] = $this->session->id_proof_type_id_proof_type_id;
    $patient_post['occupation.occupation_id'] = $this->session->occupation_occupation_id;
    $patient_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $patient_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $patient_post['id_proof_type.id_proof_type_id'] = $id_proof_type_id_proof_type_id;
    $patient_post['occupation.occupation_id'] = $occupation_occupation_id;
    $patient_post['hospital.hospital_id'] = $hospital_hospital_id;
    $patient_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $patient_post['patient_id'] = is_null($this->input->post('patient_id')) ? '' : $this->input->post('patient_id');
    $patient_post['patient_id_manual'] = is_null($this->input->post('patient_id_manual')) ? '' : $this->input->post('patient_id_manual');
    $patient_post['identification_marks'] = is_null($this->input->post('identification_marks')) ? '' : $this->input->post('identification_marks');
    $patient_post['first_name'] = is_null($this->input->post('first_name')) ? '' : $this->input->post('first_name');
    $patient_post['middle_name'] = is_null($this->input->post('middle_name')) ? '' : $this->input->post('middle_name');
    $patient_post['last_name'] = is_null($this->input->post('last_name')) ? '' : $this->input->post('last_name');
    $patient_post['dob'] = is_null($this->input->post('dob')) ? '' : $this->input->post('dob');
    $patient_post['age_years'] = is_null($this->input->post('age_years')) ? '' : $this->input->post('age_years');
    $patient_post['age_months'] = is_null($this->input->post('age_months')) ? '' : $this->input->post('age_months');
    $patient_post['age_days'] = is_null($this->input->post('age_days')) ? '' : $this->input->post('age_days');
    $patient_post['gender'] = is_null($this->input->post('gender')) ? '' : $this->input->post('gender');
    $patient_post['address'] = is_null($this->input->post('address')) ? '' : $this->input->post('address');
    $patient_post['place'] = is_null($this->input->post('place')) ? '' : $this->input->post('place');
    $patient_post['country_code'] = is_null($this->input->post('country_code')) ? '' : $this->input->post('country_code');
    $patient_post['state_code'] = is_null($this->input->post('state_code')) ? '' : $this->input->post('state_code');
    $patient_post['district_id'] = is_null($this->input->post('district_id')) ? '' : $this->input->post('district_id');
    $patient_post['phone'] = is_null($this->input->post('phone')) ? '' : $this->input->post('phone');
    $patient_post['alt_phone'] = is_null($this->input->post('alt_phone')) ? '' : $this->input->post('alt_phone');
    $patient_post['father_name'] = is_null($this->input->post('father_name')) ? '' : $this->input->post('father_name');
    $patient_post['mother_name'] = is_null($this->input->post('mother_name')) ? '' : $this->input->post('mother_name');
    $patient_post['spouse_name'] = is_null($this->input->post('spouse_name')) ? '' : $this->input->post('spouse_name');
    $patient_post['id_proof_type_id'] = is_null($this->input->post('id_proof_type_id')) ? '' : $this->input->post('id_proof_type_id');
    $patient_post['id_proof_number'] = is_null($this->input->post('id_proof_number')) ? '' : $this->input->post('id_proof_number');
    $patient_post['occupation_id'] = is_null($this->input->post('occupation_id')) ? '' : $this->input->post('occupation_id');
    $patient_post['education_level'] = is_null($this->input->post('education_level')) ? '' : $this->input->post('education_level');
    $patient_post['education_qualification'] = is_null($this->input->post('education_qualification')) ? '' : $this->input->post('education_qualification');
    $patient_post['blood_group'] = is_null($this->input->post('blood_group')) ? '' : $this->input->post('blood_group');
    $patient_post['mr_no'] = is_null($this->input->post('mr_no')) ? '' : $this->input->post('mr_no');
    $patient_post['bc_no'] = is_null($this->input->post('bc_no')) ? '' : $this->input->post('bc_no');
    $patient_post['gestation'] = is_null($this->input->post('gestation')) ? '' : $this->input->post('gestation');
    $patient_post['gestation_type'] = is_null($this->input->post('gestation_type')) ? '' : $this->input->post('gestation_type');
    $patient_post['delivery_mode'] = is_null($this->input->post('delivery_mode')) ? '' : $this->input->post('delivery_mode');
    $patient_post['delivery_place'] = is_null($this->input->post('delivery_place')) ? '' : $this->input->post('delivery_place');
    $patient_post['delivery_location'] = is_null($this->input->post('delivery_location')) ? '' : $this->input->post('delivery_location');
    $patient_post['hospital_type'] = is_null($this->input->post('hospital_type')) ? '' : $this->input->post('hospital_type');
    $patient_post['delivery_location_type'] = is_null($this->input->post('delivery_location_type')) ? '' : $this->input->post('delivery_location_type');
    $patient_post['delivery_plan'] = is_null($this->input->post('delivery_plan')) ? '' : $this->input->post('delivery_plan');
    $patient_post['birth_weight'] = is_null($this->input->post('birth_weight')) ? '' : $this->input->post('birth_weight');
    $patient_post['congenital_anomalies'] = is_null($this->input->post('congenital_anomalies')) ? '' : $this->input->post('congenital_anomalies');
    $patient_post['insert_by_user_id'] = is_null($this->input->post('insert_by_user_id')) ? '' : $this->input->post('insert_by_user_id');
    $patient_post['update_by_user_id'] = is_null($this->input->post('update_by_user_id')) ? '' : $this->input->post('update_by_user_id');
    $patient_post['insert_datetime'] = is_null($this->input->post('insert_datetime')) ? '' : $this->input->post('insert_datetime');
    $patient_post['update_datetime'] = is_null($this->input->post('update_datetime')) ? '' : $this->input->post('update_datetime');
    $patient_post['temp_patient_id'] = is_null($this->input->post('temp_patient_id')) ? '' : $this->input->post('temp_patient_id');
    $patient_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $this->session->set_userdata('id_proof_type.id_proof_type_id', $patient_post['id_proof_type.id_proof_type_id']);
    $this->session->set_userdata('occupation.occupation_id', $patient_post['occupation.occupation_id']);
    $this->session->set_userdata('hospital.hospital_id', $patient_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $patient_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('patient', $patient_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $patient_post);
  }
  function patient_update() {
    $patient_post['id_proof_type.id_proof_type_id'] = $this->session->id_proof_type_id_proof_type_id;
    $patient_post['occupation.occupation_id'] = $this->session->occupation_occupation_id;
    $patient_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $patient_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $patient_post['patient.patient_id'] = $this->session->patient_patient_id;
    $patient_post['id_proof_type.id_proof_type_id'] = $id_proof_type_id_proof_type_id;
    $patient_post['occupation.occupation_id'] = $occupation_occupation_id;
    $patient_post['hospital.hospital_id'] = $hospital_hospital_id;
    $patient_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $patient_post['patient.patient_id'] = $patient_patient_id;
    $patient_post['patient.patient_id_manual'] = is_null($this->input->post('patient_patient_id_manual')) ? '' : $this->input->post('patient_patient_id_manual');
    $patient_post['patient.identification_marks'] = is_null($this->input->post('patient_identification_marks')) ? '' : $this->input->post('patient_identification_marks');
    $patient_post['patient.first_name'] = is_null($this->input->post('patient_first_name')) ? '' : $this->input->post('patient_first_name');
    $patient_post['patient.middle_name'] = is_null($this->input->post('patient_middle_name')) ? '' : $this->input->post('patient_middle_name');
    $patient_post['patient.last_name'] = is_null($this->input->post('patient_last_name')) ? '' : $this->input->post('patient_last_name');
    $patient_post['patient.dob'] = is_null($this->input->post('patient_dob')) ? '' : $this->input->post('patient_dob');
    $patient_post['patient.age_years'] = is_null($this->input->post('patient_age_years')) ? '' : $this->input->post('patient_age_years');
    $patient_post['patient.age_months'] = is_null($this->input->post('patient_age_months')) ? '' : $this->input->post('patient_age_months');
    $patient_post['patient.age_days'] = is_null($this->input->post('patient_age_days')) ? '' : $this->input->post('patient_age_days');
    $patient_post['patient.gender'] = is_null($this->input->post('patient_gender')) ? '' : $this->input->post('patient_gender');
    $patient_post['patient.address'] = is_null($this->input->post('patient_address')) ? '' : $this->input->post('patient_address');
    $patient_post['patient.place'] = is_null($this->input->post('patient_place')) ? '' : $this->input->post('patient_place');
    $patient_post['patient.country_code'] = is_null($this->input->post('patient_country_code')) ? '' : $this->input->post('patient_country_code');
    $patient_post['patient.state_code'] = is_null($this->input->post('patient_state_code')) ? '' : $this->input->post('patient_state_code');
    $patient_post['patient.district_id'] = is_null($this->input->post('patient_district_id')) ? '' : $this->input->post('patient_district_id');
    $patient_post['patient.phone'] = is_null($this->input->post('patient_phone')) ? '' : $this->input->post('patient_phone');
    $patient_post['patient.alt_phone'] = is_null($this->input->post('patient_alt_phone')) ? '' : $this->input->post('patient_alt_phone');
    $patient_post['patient.father_name'] = is_null($this->input->post('patient_father_name')) ? '' : $this->input->post('patient_father_name');
    $patient_post['patient.mother_name'] = is_null($this->input->post('patient_mother_name')) ? '' : $this->input->post('patient_mother_name');
    $patient_post['patient.spouse_name'] = is_null($this->input->post('patient_spouse_name')) ? '' : $this->input->post('patient_spouse_name');
    $patient_post['patient.id_proof_type_id'] = is_null($this->input->post('patient_id_proof_type_id')) ? '' : $this->input->post('patient_id_proof_type_id');
    $patient_post['patient.id_proof_number'] = is_null($this->input->post('patient_id_proof_number')) ? '' : $this->input->post('patient_id_proof_number');
    $patient_post['patient.occupation_id'] = is_null($this->input->post('patient_occupation_id')) ? '' : $this->input->post('patient_occupation_id');
    $patient_post['patient.education_level'] = is_null($this->input->post('patient_education_level')) ? '' : $this->input->post('patient_education_level');
    $patient_post['patient.education_qualification'] = is_null($this->input->post('patient_education_qualification')) ? '' : $this->input->post('patient_education_qualification');
    $patient_post['patient.blood_group'] = is_null($this->input->post('patient_blood_group')) ? '' : $this->input->post('patient_blood_group');
    $patient_post['patient.mr_no'] = is_null($this->input->post('patient_mr_no')) ? '' : $this->input->post('patient_mr_no');
    $patient_post['patient.bc_no'] = is_null($this->input->post('patient_bc_no')) ? '' : $this->input->post('patient_bc_no');
    $patient_post['patient.gestation'] = is_null($this->input->post('patient_gestation')) ? '' : $this->input->post('patient_gestation');
    $patient_post['patient.gestation_type'] = is_null($this->input->post('patient_gestation_type')) ? '' : $this->input->post('patient_gestation_type');
    $patient_post['patient.delivery_mode'] = is_null($this->input->post('patient_delivery_mode')) ? '' : $this->input->post('patient_delivery_mode');
    $patient_post['patient.delivery_place'] = is_null($this->input->post('patient_delivery_place')) ? '' : $this->input->post('patient_delivery_place');
    $patient_post['patient.delivery_location'] = is_null($this->input->post('patient_delivery_location')) ? '' : $this->input->post('patient_delivery_location');
    $patient_post['patient.hospital_type'] = is_null($this->input->post('patient_hospital_type')) ? '' : $this->input->post('patient_hospital_type');
    $patient_post['patient.delivery_location_type'] = is_null($this->input->post('patient_delivery_location_type')) ? '' : $this->input->post('patient_delivery_location_type');
    $patient_post['patient.delivery_plan'] = is_null($this->input->post('patient_delivery_plan')) ? '' : $this->input->post('patient_delivery_plan');
    $patient_post['patient.birth_weight'] = is_null($this->input->post('patient_birth_weight')) ? '' : $this->input->post('patient_birth_weight');
    $patient_post['patient.congenital_anomalies'] = is_null($this->input->post('patient_congenital_anomalies')) ? '' : $this->input->post('patient_congenital_anomalies');
    $patient_post['patient.insert_by_user_id'] = is_null($this->input->post('patient_insert_by_user_id')) ? '' : $this->input->post('patient_insert_by_user_id');
    $patient_post['patient.update_by_user_id'] = is_null($this->input->post('patient_update_by_user_id')) ? '' : $this->input->post('patient_update_by_user_id');
    $patient_post['patient.insert_datetime'] = is_null($this->input->post('patient_insert_datetime')) ? '' : $this->input->post('patient_insert_datetime');
    $patient_post['patient.update_datetime'] = is_null($this->input->post('patient_update_datetime')) ? '' : $this->input->post('patient_update_datetime');
    $patient_post['patient.temp_patient_id'] = is_null($this->input->post('patient_temp_patient_id')) ? '' : $this->input->post('patient_temp_patient_id');
    $patient_post['patient.hospital_id'] = is_null($this->input->post('patient_hospital_id')) ? '' : $this->input->post('patient_hospital_id');
    $this->session->set_userdata('id_proof_type.id_proof_type_id', $patient_post['id_proof_type.id_proof_type_id']);
    $this->session->set_userdata('occupation.occupation_id', $patient_post['occupation.occupation_id']);
    $this->session->set_userdata('hospital.hospital_id', $patient_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $patient_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('patient.patient_id', $patient_post['patient.patient_id']);
    $this->db->update('patient', $patient_post, array('patient_id' => $patient_post['patient_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $patient_post);
  }
  function patient_delete() {
    $patient_delete['patient.patient_id'] = is_null($this->input->post('patient_patient_id')) ? '' : $this->input->post('patient_patient_id');
    $patient_delete['patient.patient_id_manual'] = is_null($this->input->post('patient_patient_id_manual')) ? '' : $this->input->post('patient_patient_id_manual');
    $patient_delete['patient.identification_marks'] = is_null($this->input->post('patient_identification_marks')) ? '' : $this->input->post('patient_identification_marks');
    $patient_delete['patient.first_name'] = is_null($this->input->post('patient_first_name')) ? '' : $this->input->post('patient_first_name');
    $patient_delete['patient.middle_name'] = is_null($this->input->post('patient_middle_name')) ? '' : $this->input->post('patient_middle_name');
    $patient_delete['patient.last_name'] = is_null($this->input->post('patient_last_name')) ? '' : $this->input->post('patient_last_name');
    $patient_delete['patient.dob'] = is_null($this->input->post('patient_dob')) ? '' : $this->input->post('patient_dob');
    $patient_delete['patient.age_years'] = is_null($this->input->post('patient_age_years')) ? '' : $this->input->post('patient_age_years');
    $patient_delete['patient.age_months'] = is_null($this->input->post('patient_age_months')) ? '' : $this->input->post('patient_age_months');
    $patient_delete['patient.age_days'] = is_null($this->input->post('patient_age_days')) ? '' : $this->input->post('patient_age_days');
    $patient_delete['patient.gender'] = is_null($this->input->post('patient_gender')) ? '' : $this->input->post('patient_gender');
    $patient_delete['patient.address'] = is_null($this->input->post('patient_address')) ? '' : $this->input->post('patient_address');
    $patient_delete['patient.place'] = is_null($this->input->post('patient_place')) ? '' : $this->input->post('patient_place');
    $patient_delete['patient.country_code'] = is_null($this->input->post('patient_country_code')) ? '' : $this->input->post('patient_country_code');
    $patient_delete['patient.state_code'] = is_null($this->input->post('patient_state_code')) ? '' : $this->input->post('patient_state_code');
    $patient_delete['patient.district_id'] = is_null($this->input->post('patient_district_id')) ? '' : $this->input->post('patient_district_id');
    $patient_delete['patient.phone'] = is_null($this->input->post('patient_phone')) ? '' : $this->input->post('patient_phone');
    $patient_delete['patient.alt_phone'] = is_null($this->input->post('patient_alt_phone')) ? '' : $this->input->post('patient_alt_phone');
    $patient_delete['patient.father_name'] = is_null($this->input->post('patient_father_name')) ? '' : $this->input->post('patient_father_name');
    $patient_delete['patient.mother_name'] = is_null($this->input->post('patient_mother_name')) ? '' : $this->input->post('patient_mother_name');
    $patient_delete['patient.spouse_name'] = is_null($this->input->post('patient_spouse_name')) ? '' : $this->input->post('patient_spouse_name');
    $patient_delete['patient.id_proof_type_id'] = is_null($this->input->post('patient_id_proof_type_id')) ? '' : $this->input->post('patient_id_proof_type_id');
    $patient_delete['patient.id_proof_number'] = is_null($this->input->post('patient_id_proof_number')) ? '' : $this->input->post('patient_id_proof_number');
    $patient_delete['patient.occupation_id'] = is_null($this->input->post('patient_occupation_id')) ? '' : $this->input->post('patient_occupation_id');
    $patient_delete['patient.education_level'] = is_null($this->input->post('patient_education_level')) ? '' : $this->input->post('patient_education_level');
    $patient_delete['patient.education_qualification'] = is_null($this->input->post('patient_education_qualification')) ? '' : $this->input->post('patient_education_qualification');
    $patient_delete['patient.blood_group'] = is_null($this->input->post('patient_blood_group')) ? '' : $this->input->post('patient_blood_group');
    $patient_delete['patient.mr_no'] = is_null($this->input->post('patient_mr_no')) ? '' : $this->input->post('patient_mr_no');
    $patient_delete['patient.bc_no'] = is_null($this->input->post('patient_bc_no')) ? '' : $this->input->post('patient_bc_no');
    $patient_delete['patient.gestation'] = is_null($this->input->post('patient_gestation')) ? '' : $this->input->post('patient_gestation');
    $patient_delete['patient.gestation_type'] = is_null($this->input->post('patient_gestation_type')) ? '' : $this->input->post('patient_gestation_type');
    $patient_delete['patient.delivery_mode'] = is_null($this->input->post('patient_delivery_mode')) ? '' : $this->input->post('patient_delivery_mode');
    $patient_delete['patient.delivery_place'] = is_null($this->input->post('patient_delivery_place')) ? '' : $this->input->post('patient_delivery_place');
    $patient_delete['patient.delivery_location'] = is_null($this->input->post('patient_delivery_location')) ? '' : $this->input->post('patient_delivery_location');
    $patient_delete['patient.hospital_type'] = is_null($this->input->post('patient_hospital_type')) ? '' : $this->input->post('patient_hospital_type');
    $patient_delete['patient.delivery_location_type'] = is_null($this->input->post('patient_delivery_location_type')) ? '' : $this->input->post('patient_delivery_location_type');
    $patient_delete['patient.delivery_plan'] = is_null($this->input->post('patient_delivery_plan')) ? '' : $this->input->post('patient_delivery_plan');
    $patient_delete['patient.birth_weight'] = is_null($this->input->post('patient_birth_weight')) ? '' : $this->input->post('patient_birth_weight');
    $patient_delete['patient.congenital_anomalies'] = is_null($this->input->post('patient_congenital_anomalies')) ? '' : $this->input->post('patient_congenital_anomalies');
    $patient_delete['patient.insert_by_user_id'] = is_null($this->input->post('patient_insert_by_user_id')) ? '' : $this->input->post('patient_insert_by_user_id');
    $patient_delete['patient.update_by_user_id'] = is_null($this->input->post('patient_update_by_user_id')) ? '' : $this->input->post('patient_update_by_user_id');
    $patient_delete['patient.insert_datetime'] = is_null($this->input->post('patient_insert_datetime')) ? '' : $this->input->post('patient_insert_datetime');
    $patient_delete['patient.update_datetime'] = is_null($this->input->post('patient_update_datetime')) ? '' : $this->input->post('patient_update_datetime');
    $patient_delete['patient.temp_patient_id'] = is_null($this->input->post('patient_temp_patient_id')) ? '' : $this->input->post('patient_temp_patient_id');
    $patient_delete['patient.hospital_id'] = is_null($this->input->post('patient_hospital_id')) ? '' : $this->input->post('patient_hospital_id');
    $this->db->delete('patient', array('patient_id' => $patient_delete['patient_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $patient_delete);
  }
  function patient_get_records() {
    $patient_filters['id_proof_type.id_proof_type_id'] = $this->session->id_proof_type_id_proof_type_id;
    $patient_filters['occupation.occupation_id'] = $this->session->occupation_occupation_id;
    $patient_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $patient_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $patient_filters['patient.patient_id'] = $this->session->patient_patient_id;
    $patient_filters['id_proof_type.id_proof_type_id'] = $id_proof_type_id_proof_type_id;
    $patient_filters['occupation.occupation_id'] = $occupation_occupation_id;
    $patient_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $patient_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $patient_filters['patient.patient_id'] = $patient_patient_id;
    $patient_filters['patient.patient_id_manual'] = is_null($this->input->post('patient_patient_id_manual')) ? '' : $this->input->post('patient_patient_id_manual');
    $patient_filters['patient.identification_marks'] = is_null($this->input->post('patient_identification_marks')) ? '' : $this->input->post('patient_identification_marks');
    $patient_filters['patient.first_name'] = is_null($this->input->post('patient_first_name')) ? '' : $this->input->post('patient_first_name');
    $patient_filters['patient.middle_name'] = is_null($this->input->post('patient_middle_name')) ? '' : $this->input->post('patient_middle_name');
    $patient_filters['patient.last_name'] = is_null($this->input->post('patient_last_name')) ? '' : $this->input->post('patient_last_name');
    $patient_filters['patient.dob'] = is_null($this->input->post('patient_dob')) ? '' : $this->input->post('patient_dob');
    $patient_filters['patient.age_years'] = is_null($this->input->post('patient_age_years')) ? '' : $this->input->post('patient_age_years');
    $patient_filters['patient.age_months'] = is_null($this->input->post('patient_age_months')) ? '' : $this->input->post('patient_age_months');
    $patient_filters['patient.age_days'] = is_null($this->input->post('patient_age_days')) ? '' : $this->input->post('patient_age_days');
    $patient_filters['patient.gender'] = is_null($this->input->post('patient_gender')) ? '' : $this->input->post('patient_gender');
    $patient_filters['patient.address'] = is_null($this->input->post('patient_address')) ? '' : $this->input->post('patient_address');
    $patient_filters['patient.place'] = is_null($this->input->post('patient_place')) ? '' : $this->input->post('patient_place');
    $patient_filters['patient.country_code'] = is_null($this->input->post('patient_country_code')) ? '' : $this->input->post('patient_country_code');
    $patient_filters['patient.state_code'] = is_null($this->input->post('patient_state_code')) ? '' : $this->input->post('patient_state_code');
    $patient_filters['patient.district_id'] = is_null($this->input->post('patient_district_id')) ? '' : $this->input->post('patient_district_id');
    $patient_filters['patient.phone'] = is_null($this->input->post('patient_phone')) ? '' : $this->input->post('patient_phone');
    $patient_filters['patient.alt_phone'] = is_null($this->input->post('patient_alt_phone')) ? '' : $this->input->post('patient_alt_phone');
    $patient_filters['patient.father_name'] = is_null($this->input->post('patient_father_name')) ? '' : $this->input->post('patient_father_name');
    $patient_filters['patient.mother_name'] = is_null($this->input->post('patient_mother_name')) ? '' : $this->input->post('patient_mother_name');
    $patient_filters['patient.spouse_name'] = is_null($this->input->post('patient_spouse_name')) ? '' : $this->input->post('patient_spouse_name');
    $patient_filters['patient.id_proof_type_id'] = is_null($this->input->post('patient_id_proof_type_id')) ? '' : $this->input->post('patient_id_proof_type_id');
    $patient_filters['patient.id_proof_number'] = is_null($this->input->post('patient_id_proof_number')) ? '' : $this->input->post('patient_id_proof_number');
    $patient_filters['patient.occupation_id'] = is_null($this->input->post('patient_occupation_id')) ? '' : $this->input->post('patient_occupation_id');
    $patient_filters['patient.education_level'] = is_null($this->input->post('patient_education_level')) ? '' : $this->input->post('patient_education_level');
    $patient_filters['patient.education_qualification'] = is_null($this->input->post('patient_education_qualification')) ? '' : $this->input->post('patient_education_qualification');
    $patient_filters['patient.blood_group'] = is_null($this->input->post('patient_blood_group')) ? '' : $this->input->post('patient_blood_group');
    $patient_filters['patient.mr_no'] = is_null($this->input->post('patient_mr_no')) ? '' : $this->input->post('patient_mr_no');
    $patient_filters['patient.bc_no'] = is_null($this->input->post('patient_bc_no')) ? '' : $this->input->post('patient_bc_no');
    $patient_filters['patient.gestation'] = is_null($this->input->post('patient_gestation')) ? '' : $this->input->post('patient_gestation');
    $patient_filters['patient.gestation_type'] = is_null($this->input->post('patient_gestation_type')) ? '' : $this->input->post('patient_gestation_type');
    $patient_filters['patient.delivery_mode'] = is_null($this->input->post('patient_delivery_mode')) ? '' : $this->input->post('patient_delivery_mode');
    $patient_filters['patient.delivery_place'] = is_null($this->input->post('patient_delivery_place')) ? '' : $this->input->post('patient_delivery_place');
    $patient_filters['patient.delivery_location'] = is_null($this->input->post('patient_delivery_location')) ? '' : $this->input->post('patient_delivery_location');
    $patient_filters['patient.hospital_type'] = is_null($this->input->post('patient_hospital_type')) ? '' : $this->input->post('patient_hospital_type');
    $patient_filters['patient.delivery_location_type'] = is_null($this->input->post('patient_delivery_location_type')) ? '' : $this->input->post('patient_delivery_location_type');
    $patient_filters['patient.delivery_plan'] = is_null($this->input->post('patient_delivery_plan')) ? '' : $this->input->post('patient_delivery_plan');
    $patient_filters['patient.birth_weight'] = is_null($this->input->post('patient_birth_weight')) ? '' : $this->input->post('patient_birth_weight');
    $patient_filters['patient.congenital_anomalies'] = is_null($this->input->post('patient_congenital_anomalies')) ? '' : $this->input->post('patient_congenital_anomalies');
    $patient_filters['patient.insert_by_user_id'] = is_null($this->input->post('patient_insert_by_user_id')) ? '' : $this->input->post('patient_insert_by_user_id');
    $patient_filters['patient.update_by_user_id'] = is_null($this->input->post('patient_update_by_user_id')) ? '' : $this->input->post('patient_update_by_user_id');
    $patient_filters['patient.insert_datetime'] = is_null($this->input->post('patient_insert_datetime')) ? '' : $this->input->post('patient_insert_datetime');
    $patient_filters['patient.update_datetime'] = is_null($this->input->post('patient_update_datetime')) ? '' : $this->input->post('patient_update_datetime');
    $patient_filters['patient.temp_patient_id'] = is_null($this->input->post('patient_temp_patient_id')) ? '' : $this->input->post('patient_temp_patient_id');
    $patient_filters['patient.hospital_id'] = is_null($this->input->post('patient_hospital_id')) ? '' : $this->input->post('patient_hospital_id');
    $this->session->set_userdata('id_proof_type.id_proof_type_id', $patient_filters['id_proof_type.id_proof_type_id']);
    $this->session->set_userdata('occupation.occupation_id', $patient_filters['occupation.occupation_id']);
    $this->session->set_userdata('hospital.hospital_id', $patient_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $patient_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('patient.patient_id', $patient_filters['patient.patient_id']);
    $this->db->select('id_proof_type.id_proof_type_id AS patient_id_proof_type_id, occupation.occupation_id AS patient_occupation_id,
    hospital.hospital_id AS patient_hospital_id, staff_previous_hospital.hospital_id AS patient_hospital_id,
    patient.patient_id AS patient_patient_id, patient.patient_id_manual AS patient_patient_id_manual,
    patient.identification_marks AS patient_identification_marks, patient.first_name AS patient_first_name,
    patient.middle_name AS patient_middle_name, patient.last_name AS patient_last_name,
    patient.dob AS patient_dob, patient.age_years AS patient_age_years,
    patient.age_months AS patient_age_months, patient.age_days AS patient_age_days,
    patient.gender AS patient_gender, patient.address AS patient_address,
    patient.place AS patient_place, patient.country_code AS patient_country_code,
    patient.state_code AS patient_state_code, patient.district_id AS patient_district_id,
    patient.phone AS patient_phone, patient.alt_phone AS patient_alt_phone,
    patient.father_name AS patient_father_name, patient.mother_name AS patient_mother_name,
    patient.spouse_name AS patient_spouse_name, patient.id_proof_type_id AS patient_id_proof_type_id,
    patient.id_proof_number AS patient_id_proof_number, patient.occupation_id AS patient_occupation_id,
    patient.education_level AS patient_education_level, patient.education_qualification AS patient_education_qualification,
    patient.blood_group AS patient_blood_group, patient.mr_no AS patient_mr_no,
    patient.bc_no AS patient_bc_no, patient.gestation AS patient_gestation,
    patient.gestation_type AS patient_gestation_type, patient.delivery_mode AS patient_delivery_mode,
    patient.delivery_place AS patient_delivery_place, patient.delivery_location AS patient_delivery_location,
    patient.hospital_type AS patient_hospital_type, patient.delivery_location_type AS patient_delivery_location_type,
    patient.delivery_plan AS patient_delivery_plan, patient.birth_weight AS patient_birth_weight,
    patient.congenital_anomalies AS patient_congenital_anomalies, patient.insert_by_user_id AS patient_insert_by_user_id,
    patient.update_by_user_id AS patient_update_by_user_id, patient.insert_datetime AS patient_insert_datetime,
    patient.update_datetime AS patient_update_datetime, patient.temp_patient_id AS patient_temp_patient_id,
    patient.hospital_id AS patient_hospital_id')->from('patient');
    $this->db->join('id_proof_type', 'patient.id_proof_type_id = id_proof_type.id_proof_type_id', 'left');
    $this->db->join('occupation', 'patient.occupation_id = occupation.occupation_id', 'left');
    $this->db->join('hospital', 'patient.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'patient.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($patient_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $patient_filters);
  }
}