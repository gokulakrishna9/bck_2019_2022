<?php class Staff_model extends CI_Model {
  function staff_create() {
    $staff_post = [];
    $staff_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $staff_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $staff_post['department.department_id'] = $this->session->department_department_id;
    $staff_post['unit.unit_id'] = $this->session->unit_unit_id;
    $staff_post['area.area_id'] = $this->session->area_area_id;
    $staff_post['staff_category.staff_category_id'] = $this->session->staff_category_staff_category_id;
    $staff_post['staff_role.staff_role_id'] = $this->session->staff_role_staff_role_id;
    $staff_post['qualification.qualification_id'] = $this->session->qualification_qualification_id;
    $staff_post['staff_applicant_qualification_master.qualification_id'] = $this->session->staff_applicant_qualification_master_qualification_id;
    $staff_post['hospital.hospital_id'] = $hospital_hospital_id;
    $staff_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $staff_post['department.department_id'] = $department_department_id;
    $staff_post['unit.unit_id'] = $unit_unit_id;
    $staff_post['area.area_id'] = $area_area_id;
    $staff_post['staff_category.staff_category_id'] = $staff_category_staff_category_id;
    $staff_post['staff_role.staff_role_id'] = $staff_role_staff_role_id;
    $staff_post['qualification.qualification_id'] = $qualification_qualification_id;
    $staff_post['staff_applicant_qualification_master.qualification_id'] = $staff_applicant_qualification_master_qualification_id;
    $staff_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $staff_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $staff_post['department_id'] = is_null($this->input->post('department_id')) ? '' : $this->input->post('department_id');
    $staff_post['unit_id'] = is_null($this->input->post('unit_id')) ? '' : $this->input->post('unit_id');
    $staff_post['area_id'] = is_null($this->input->post('area_id')) ? '' : $this->input->post('area_id');
    $staff_post['first_name'] = is_null($this->input->post('first_name')) ? '' : $this->input->post('first_name');
    $staff_post['last_name'] = is_null($this->input->post('last_name')) ? '' : $this->input->post('last_name');
    $staff_post['name'] = is_null($this->input->post('name')) ? '' : $this->input->post('name');
    $staff_post['date_of_birth'] = is_null($this->input->post('date_of_birth')) ? '' : $this->input->post('date_of_birth');
    $staff_post['gender'] = is_null($this->input->post('gender')) ? '' : $this->input->post('gender');
    $staff_post['staff_category'] = is_null($this->input->post('staff_category')) ? '' : $this->input->post('staff_category');
    $staff_post['staff_category_id'] = is_null($this->input->post('staff_category_id')) ? '' : $this->input->post('staff_category_id');
    $staff_post['staff_type'] = is_null($this->input->post('staff_type')) ? '' : $this->input->post('staff_type');
    $staff_post['staff_role'] = is_null($this->input->post('staff_role')) ? '' : $this->input->post('staff_role');
    $staff_post['staff_role_id'] = is_null($this->input->post('staff_role_id')) ? '' : $this->input->post('staff_role_id');
    $staff_post['mci_flag'] = is_null($this->input->post('mci_flag')) ? '' : $this->input->post('mci_flag');
    $staff_post['ima_registration_number'] = is_null($this->input->post('ima_registration_number')) ? '' : $this->input->post('ima_registration_number');
    $staff_post['email'] = is_null($this->input->post('email')) ? '' : $this->input->post('email');
    $staff_post['phone'] = is_null($this->input->post('phone')) ? '' : $this->input->post('phone');
    $staff_post['image'] = is_null($this->input->post('image')) ? '' : $this->input->post('image');
    $staff_post['qualification_id'] = is_null($this->input->post('qualification_id')) ? '' : $this->input->post('qualification_id');
    $staff_post['designation'] = is_null($this->input->post('designation')) ? '' : $this->input->post('designation');
    $staff_post['area_of_responsibility'] = is_null($this->input->post('area_of_responsibility')) ? '' : $this->input->post('area_of_responsibility');
    $staff_post['research_area'] = is_null($this->input->post('research_area')) ? '' : $this->input->post('research_area');
    $staff_post['specialisation'] = is_null($this->input->post('specialisation')) ? '' : $this->input->post('specialisation');
    $staff_post['research'] = is_null($this->input->post('research')) ? '' : $this->input->post('research');
    $staff_post['personal_note'] = is_null($this->input->post('personal_note')) ? '' : $this->input->post('personal_note');
    $staff_post['staff_status'] = is_null($this->input->post('staff_status')) ? '' : $this->input->post('staff_status');
    $staff_post['status'] = is_null($this->input->post('status')) ? '' : $this->input->post('status');
    $staff_post['status_date'] = is_null($this->input->post('status_date')) ? '' : $this->input->post('status_date');
    $staff_post['doctor_reg_no'] = is_null($this->input->post('doctor_reg_no')) ? '' : $this->input->post('doctor_reg_no');
    $staff_post['staff_flag'] = is_null($this->input->post('staff_flag')) ? '' : $this->input->post('staff_flag');
    $staff_post['doctor_flag'] = is_null($this->input->post('doctor_flag')) ? '' : $this->input->post('doctor_flag');
    $staff_post['bank'] = is_null($this->input->post('bank')) ? '' : $this->input->post('bank');
    $staff_post['bank_branch'] = is_null($this->input->post('bank_branch')) ? '' : $this->input->post('bank_branch');
    $staff_post['account_name'] = is_null($this->input->post('account_name')) ? '' : $this->input->post('account_name');
    $staff_post['account_number'] = is_null($this->input->post('account_number')) ? '' : $this->input->post('account_number');
    $staff_post['ifsc_code'] = is_null($this->input->post('ifsc_code')) ? '' : $this->input->post('ifsc_code');
    $this->session->set_userdata('hospital.hospital_id', $staff_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $staff_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('department.department_id', $staff_post['department.department_id']);
    $this->session->set_userdata('unit.unit_id', $staff_post['unit.unit_id']);
    $this->session->set_userdata('area.area_id', $staff_post['area.area_id']);
    $this->session->set_userdata('staff_category.staff_category_id', $staff_post['staff_category.staff_category_id']);
    $this->session->set_userdata('staff_role.staff_role_id', $staff_post['staff_role.staff_role_id']);
    $this->session->set_userdata('qualification.qualification_id', $staff_post['qualification.qualification_id']);
    $this->session->set_userdata('staff_applicant_qualification_master.qualification_id', $staff_post['staff_applicant_qualification_master.qualification_id']);
    $this->db->insert('staff', $staff_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $staff_post);
  }
  function staff_update() {
    $staff_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $staff_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $staff_post['department.department_id'] = $this->session->department_department_id;
    $staff_post['unit.unit_id'] = $this->session->unit_unit_id;
    $staff_post['area.area_id'] = $this->session->area_area_id;
    $staff_post['staff_category.staff_category_id'] = $this->session->staff_category_staff_category_id;
    $staff_post['staff_role.staff_role_id'] = $this->session->staff_role_staff_role_id;
    $staff_post['qualification.qualification_id'] = $this->session->qualification_qualification_id;
    $staff_post['staff_applicant_qualification_master.qualification_id'] = $this->session->staff_applicant_qualification_master_qualification_id;
    $staff_post['staff.staff_id'] = $this->session->staff_staff_id;
    $staff_post['hospital.hospital_id'] = $hospital_hospital_id;
    $staff_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $staff_post['department.department_id'] = $department_department_id;
    $staff_post['unit.unit_id'] = $unit_unit_id;
    $staff_post['area.area_id'] = $area_area_id;
    $staff_post['staff_category.staff_category_id'] = $staff_category_staff_category_id;
    $staff_post['staff_role.staff_role_id'] = $staff_role_staff_role_id;
    $staff_post['qualification.qualification_id'] = $qualification_qualification_id;
    $staff_post['staff_applicant_qualification_master.qualification_id'] = $staff_applicant_qualification_master_qualification_id;
    $staff_post['staff.staff_id'] = $staff_staff_id;
    $staff_post['staff.hospital_id'] = is_null($this->input->post('staff_hospital_id')) ? '' : $this->input->post('staff_hospital_id');
    $staff_post['staff.department_id'] = is_null($this->input->post('staff_department_id')) ? '' : $this->input->post('staff_department_id');
    $staff_post['staff.unit_id'] = is_null($this->input->post('staff_unit_id')) ? '' : $this->input->post('staff_unit_id');
    $staff_post['staff.area_id'] = is_null($this->input->post('staff_area_id')) ? '' : $this->input->post('staff_area_id');
    $staff_post['staff.first_name'] = is_null($this->input->post('staff_first_name')) ? '' : $this->input->post('staff_first_name');
    $staff_post['staff.last_name'] = is_null($this->input->post('staff_last_name')) ? '' : $this->input->post('staff_last_name');
    $staff_post['staff.name'] = is_null($this->input->post('staff_name')) ? '' : $this->input->post('staff_name');
    $staff_post['staff.date_of_birth'] = is_null($this->input->post('staff_date_of_birth')) ? '' : $this->input->post('staff_date_of_birth');
    $staff_post['staff.gender'] = is_null($this->input->post('staff_gender')) ? '' : $this->input->post('staff_gender');
    $staff_post['staff.staff_category'] = is_null($this->input->post('staff_staff_category')) ? '' : $this->input->post('staff_staff_category');
    $staff_post['staff.staff_category_id'] = is_null($this->input->post('staff_staff_category_id')) ? '' : $this->input->post('staff_staff_category_id');
    $staff_post['staff.staff_type'] = is_null($this->input->post('staff_staff_type')) ? '' : $this->input->post('staff_staff_type');
    $staff_post['staff.staff_role'] = is_null($this->input->post('staff_staff_role')) ? '' : $this->input->post('staff_staff_role');
    $staff_post['staff.staff_role_id'] = is_null($this->input->post('staff_staff_role_id')) ? '' : $this->input->post('staff_staff_role_id');
    $staff_post['staff.mci_flag'] = is_null($this->input->post('staff_mci_flag')) ? '' : $this->input->post('staff_mci_flag');
    $staff_post['staff.ima_registration_number'] = is_null($this->input->post('staff_ima_registration_number')) ? '' : $this->input->post('staff_ima_registration_number');
    $staff_post['staff.email'] = is_null($this->input->post('staff_email')) ? '' : $this->input->post('staff_email');
    $staff_post['staff.phone'] = is_null($this->input->post('staff_phone')) ? '' : $this->input->post('staff_phone');
    $staff_post['staff.image'] = is_null($this->input->post('staff_image')) ? '' : $this->input->post('staff_image');
    $staff_post['staff.qualification_id'] = is_null($this->input->post('staff_qualification_id')) ? '' : $this->input->post('staff_qualification_id');
    $staff_post['staff.designation'] = is_null($this->input->post('staff_designation')) ? '' : $this->input->post('staff_designation');
    $staff_post['staff.area_of_responsibility'] = is_null($this->input->post('staff_area_of_responsibility')) ? '' : $this->input->post('staff_area_of_responsibility');
    $staff_post['staff.research_area'] = is_null($this->input->post('staff_research_area')) ? '' : $this->input->post('staff_research_area');
    $staff_post['staff.specialisation'] = is_null($this->input->post('staff_specialisation')) ? '' : $this->input->post('staff_specialisation');
    $staff_post['staff.research'] = is_null($this->input->post('staff_research')) ? '' : $this->input->post('staff_research');
    $staff_post['staff.personal_note'] = is_null($this->input->post('staff_personal_note')) ? '' : $this->input->post('staff_personal_note');
    $staff_post['staff.staff_status'] = is_null($this->input->post('staff_staff_status')) ? '' : $this->input->post('staff_staff_status');
    $staff_post['staff.status'] = is_null($this->input->post('staff_status')) ? '' : $this->input->post('staff_status');
    $staff_post['staff.status_date'] = is_null($this->input->post('staff_status_date')) ? '' : $this->input->post('staff_status_date');
    $staff_post['staff.doctor_reg_no'] = is_null($this->input->post('staff_doctor_reg_no')) ? '' : $this->input->post('staff_doctor_reg_no');
    $staff_post['staff.staff_flag'] = is_null($this->input->post('staff_staff_flag')) ? '' : $this->input->post('staff_staff_flag');
    $staff_post['staff.doctor_flag'] = is_null($this->input->post('staff_doctor_flag')) ? '' : $this->input->post('staff_doctor_flag');
    $staff_post['staff.bank'] = is_null($this->input->post('staff_bank')) ? '' : $this->input->post('staff_bank');
    $staff_post['staff.bank_branch'] = is_null($this->input->post('staff_bank_branch')) ? '' : $this->input->post('staff_bank_branch');
    $staff_post['staff.account_name'] = is_null($this->input->post('staff_account_name')) ? '' : $this->input->post('staff_account_name');
    $staff_post['staff.account_number'] = is_null($this->input->post('staff_account_number')) ? '' : $this->input->post('staff_account_number');
    $staff_post['staff.ifsc_code'] = is_null($this->input->post('staff_ifsc_code')) ? '' : $this->input->post('staff_ifsc_code');
    $this->session->set_userdata('hospital.hospital_id', $staff_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $staff_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('department.department_id', $staff_post['department.department_id']);
    $this->session->set_userdata('unit.unit_id', $staff_post['unit.unit_id']);
    $this->session->set_userdata('area.area_id', $staff_post['area.area_id']);
    $this->session->set_userdata('staff_category.staff_category_id', $staff_post['staff_category.staff_category_id']);
    $this->session->set_userdata('staff_role.staff_role_id', $staff_post['staff_role.staff_role_id']);
    $this->session->set_userdata('qualification.qualification_id', $staff_post['qualification.qualification_id']);
    $this->session->set_userdata('staff_applicant_qualification_master.qualification_id', $staff_post['staff_applicant_qualification_master.qualification_id']);
    $this->session->set_userdata('staff.staff_id', $staff_post['staff.staff_id']);
    $this->db->update('staff', $staff_post, array('staff_id' => $staff_post['staff_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_post);
  }
  function staff_delete() {
    $staff_delete['staff.staff_id'] = is_null($this->input->post('staff_staff_id')) ? '' : $this->input->post('staff_staff_id');
    $staff_delete['staff.hospital_id'] = is_null($this->input->post('staff_hospital_id')) ? '' : $this->input->post('staff_hospital_id');
    $staff_delete['staff.department_id'] = is_null($this->input->post('staff_department_id')) ? '' : $this->input->post('staff_department_id');
    $staff_delete['staff.unit_id'] = is_null($this->input->post('staff_unit_id')) ? '' : $this->input->post('staff_unit_id');
    $staff_delete['staff.area_id'] = is_null($this->input->post('staff_area_id')) ? '' : $this->input->post('staff_area_id');
    $staff_delete['staff.first_name'] = is_null($this->input->post('staff_first_name')) ? '' : $this->input->post('staff_first_name');
    $staff_delete['staff.last_name'] = is_null($this->input->post('staff_last_name')) ? '' : $this->input->post('staff_last_name');
    $staff_delete['staff.name'] = is_null($this->input->post('staff_name')) ? '' : $this->input->post('staff_name');
    $staff_delete['staff.date_of_birth'] = is_null($this->input->post('staff_date_of_birth')) ? '' : $this->input->post('staff_date_of_birth');
    $staff_delete['staff.gender'] = is_null($this->input->post('staff_gender')) ? '' : $this->input->post('staff_gender');
    $staff_delete['staff.staff_category'] = is_null($this->input->post('staff_staff_category')) ? '' : $this->input->post('staff_staff_category');
    $staff_delete['staff.staff_category_id'] = is_null($this->input->post('staff_staff_category_id')) ? '' : $this->input->post('staff_staff_category_id');
    $staff_delete['staff.staff_type'] = is_null($this->input->post('staff_staff_type')) ? '' : $this->input->post('staff_staff_type');
    $staff_delete['staff.staff_role'] = is_null($this->input->post('staff_staff_role')) ? '' : $this->input->post('staff_staff_role');
    $staff_delete['staff.staff_role_id'] = is_null($this->input->post('staff_staff_role_id')) ? '' : $this->input->post('staff_staff_role_id');
    $staff_delete['staff.mci_flag'] = is_null($this->input->post('staff_mci_flag')) ? '' : $this->input->post('staff_mci_flag');
    $staff_delete['staff.ima_registration_number'] = is_null($this->input->post('staff_ima_registration_number')) ? '' : $this->input->post('staff_ima_registration_number');
    $staff_delete['staff.email'] = is_null($this->input->post('staff_email')) ? '' : $this->input->post('staff_email');
    $staff_delete['staff.phone'] = is_null($this->input->post('staff_phone')) ? '' : $this->input->post('staff_phone');
    $staff_delete['staff.image'] = is_null($this->input->post('staff_image')) ? '' : $this->input->post('staff_image');
    $staff_delete['staff.qualification_id'] = is_null($this->input->post('staff_qualification_id')) ? '' : $this->input->post('staff_qualification_id');
    $staff_delete['staff.designation'] = is_null($this->input->post('staff_designation')) ? '' : $this->input->post('staff_designation');
    $staff_delete['staff.area_of_responsibility'] = is_null($this->input->post('staff_area_of_responsibility')) ? '' : $this->input->post('staff_area_of_responsibility');
    $staff_delete['staff.research_area'] = is_null($this->input->post('staff_research_area')) ? '' : $this->input->post('staff_research_area');
    $staff_delete['staff.specialisation'] = is_null($this->input->post('staff_specialisation')) ? '' : $this->input->post('staff_specialisation');
    $staff_delete['staff.research'] = is_null($this->input->post('staff_research')) ? '' : $this->input->post('staff_research');
    $staff_delete['staff.personal_note'] = is_null($this->input->post('staff_personal_note')) ? '' : $this->input->post('staff_personal_note');
    $staff_delete['staff.staff_status'] = is_null($this->input->post('staff_staff_status')) ? '' : $this->input->post('staff_staff_status');
    $staff_delete['staff.status'] = is_null($this->input->post('staff_status')) ? '' : $this->input->post('staff_status');
    $staff_delete['staff.status_date'] = is_null($this->input->post('staff_status_date')) ? '' : $this->input->post('staff_status_date');
    $staff_delete['staff.doctor_reg_no'] = is_null($this->input->post('staff_doctor_reg_no')) ? '' : $this->input->post('staff_doctor_reg_no');
    $staff_delete['staff.staff_flag'] = is_null($this->input->post('staff_staff_flag')) ? '' : $this->input->post('staff_staff_flag');
    $staff_delete['staff.doctor_flag'] = is_null($this->input->post('staff_doctor_flag')) ? '' : $this->input->post('staff_doctor_flag');
    $staff_delete['staff.bank'] = is_null($this->input->post('staff_bank')) ? '' : $this->input->post('staff_bank');
    $staff_delete['staff.bank_branch'] = is_null($this->input->post('staff_bank_branch')) ? '' : $this->input->post('staff_bank_branch');
    $staff_delete['staff.account_name'] = is_null($this->input->post('staff_account_name')) ? '' : $this->input->post('staff_account_name');
    $staff_delete['staff.account_number'] = is_null($this->input->post('staff_account_number')) ? '' : $this->input->post('staff_account_number');
    $staff_delete['staff.ifsc_code'] = is_null($this->input->post('staff_ifsc_code')) ? '' : $this->input->post('staff_ifsc_code');
    $this->db->delete('staff', array('staff_id' => $staff_delete['staff_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_delete);
  }
  function staff_get_records() {
    $staff_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $staff_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $staff_filters['department.department_id'] = $this->session->department_department_id;
    $staff_filters['unit.unit_id'] = $this->session->unit_unit_id;
    $staff_filters['area.area_id'] = $this->session->area_area_id;
    $staff_filters['staff_category.staff_category_id'] = $this->session->staff_category_staff_category_id;
    $staff_filters['staff_role.staff_role_id'] = $this->session->staff_role_staff_role_id;
    $staff_filters['qualification.qualification_id'] = $this->session->qualification_qualification_id;
    $staff_filters['staff_applicant_qualification_master.qualification_id'] = $this->session->staff_applicant_qualification_master_qualification_id;
    $staff_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $staff_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $staff_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $staff_filters['department.department_id'] = $department_department_id;
    $staff_filters['unit.unit_id'] = $unit_unit_id;
    $staff_filters['area.area_id'] = $area_area_id;
    $staff_filters['staff_category.staff_category_id'] = $staff_category_staff_category_id;
    $staff_filters['staff_role.staff_role_id'] = $staff_role_staff_role_id;
    $staff_filters['qualification.qualification_id'] = $qualification_qualification_id;
    $staff_filters['staff_applicant_qualification_master.qualification_id'] = $staff_applicant_qualification_master_qualification_id;
    $staff_filters['staff.staff_id'] = $staff_staff_id;
    $staff_filters['staff.hospital_id'] = is_null($this->input->post('staff_hospital_id')) ? '' : $this->input->post('staff_hospital_id');
    $staff_filters['staff.department_id'] = is_null($this->input->post('staff_department_id')) ? '' : $this->input->post('staff_department_id');
    $staff_filters['staff.unit_id'] = is_null($this->input->post('staff_unit_id')) ? '' : $this->input->post('staff_unit_id');
    $staff_filters['staff.area_id'] = is_null($this->input->post('staff_area_id')) ? '' : $this->input->post('staff_area_id');
    $staff_filters['staff.first_name'] = is_null($this->input->post('staff_first_name')) ? '' : $this->input->post('staff_first_name');
    $staff_filters['staff.last_name'] = is_null($this->input->post('staff_last_name')) ? '' : $this->input->post('staff_last_name');
    $staff_filters['staff.name'] = is_null($this->input->post('staff_name')) ? '' : $this->input->post('staff_name');
    $staff_filters['staff.date_of_birth'] = is_null($this->input->post('staff_date_of_birth')) ? '' : $this->input->post('staff_date_of_birth');
    $staff_filters['staff.gender'] = is_null($this->input->post('staff_gender')) ? '' : $this->input->post('staff_gender');
    $staff_filters['staff.staff_category'] = is_null($this->input->post('staff_staff_category')) ? '' : $this->input->post('staff_staff_category');
    $staff_filters['staff.staff_category_id'] = is_null($this->input->post('staff_staff_category_id')) ? '' : $this->input->post('staff_staff_category_id');
    $staff_filters['staff.staff_type'] = is_null($this->input->post('staff_staff_type')) ? '' : $this->input->post('staff_staff_type');
    $staff_filters['staff.staff_role'] = is_null($this->input->post('staff_staff_role')) ? '' : $this->input->post('staff_staff_role');
    $staff_filters['staff.staff_role_id'] = is_null($this->input->post('staff_staff_role_id')) ? '' : $this->input->post('staff_staff_role_id');
    $staff_filters['staff.mci_flag'] = is_null($this->input->post('staff_mci_flag')) ? '' : $this->input->post('staff_mci_flag');
    $staff_filters['staff.ima_registration_number'] = is_null($this->input->post('staff_ima_registration_number')) ? '' : $this->input->post('staff_ima_registration_number');
    $staff_filters['staff.email'] = is_null($this->input->post('staff_email')) ? '' : $this->input->post('staff_email');
    $staff_filters['staff.phone'] = is_null($this->input->post('staff_phone')) ? '' : $this->input->post('staff_phone');
    $staff_filters['staff.image'] = is_null($this->input->post('staff_image')) ? '' : $this->input->post('staff_image');
    $staff_filters['staff.qualification_id'] = is_null($this->input->post('staff_qualification_id')) ? '' : $this->input->post('staff_qualification_id');
    $staff_filters['staff.designation'] = is_null($this->input->post('staff_designation')) ? '' : $this->input->post('staff_designation');
    $staff_filters['staff.area_of_responsibility'] = is_null($this->input->post('staff_area_of_responsibility')) ? '' : $this->input->post('staff_area_of_responsibility');
    $staff_filters['staff.research_area'] = is_null($this->input->post('staff_research_area')) ? '' : $this->input->post('staff_research_area');
    $staff_filters['staff.specialisation'] = is_null($this->input->post('staff_specialisation')) ? '' : $this->input->post('staff_specialisation');
    $staff_filters['staff.research'] = is_null($this->input->post('staff_research')) ? '' : $this->input->post('staff_research');
    $staff_filters['staff.personal_note'] = is_null($this->input->post('staff_personal_note')) ? '' : $this->input->post('staff_personal_note');
    $staff_filters['staff.staff_status'] = is_null($this->input->post('staff_staff_status')) ? '' : $this->input->post('staff_staff_status');
    $staff_filters['staff.status'] = is_null($this->input->post('staff_status')) ? '' : $this->input->post('staff_status');
    $staff_filters['staff.status_date'] = is_null($this->input->post('staff_status_date')) ? '' : $this->input->post('staff_status_date');
    $staff_filters['staff.doctor_reg_no'] = is_null($this->input->post('staff_doctor_reg_no')) ? '' : $this->input->post('staff_doctor_reg_no');
    $staff_filters['staff.staff_flag'] = is_null($this->input->post('staff_staff_flag')) ? '' : $this->input->post('staff_staff_flag');
    $staff_filters['staff.doctor_flag'] = is_null($this->input->post('staff_doctor_flag')) ? '' : $this->input->post('staff_doctor_flag');
    $staff_filters['staff.bank'] = is_null($this->input->post('staff_bank')) ? '' : $this->input->post('staff_bank');
    $staff_filters['staff.bank_branch'] = is_null($this->input->post('staff_bank_branch')) ? '' : $this->input->post('staff_bank_branch');
    $staff_filters['staff.account_name'] = is_null($this->input->post('staff_account_name')) ? '' : $this->input->post('staff_account_name');
    $staff_filters['staff.account_number'] = is_null($this->input->post('staff_account_number')) ? '' : $this->input->post('staff_account_number');
    $staff_filters['staff.ifsc_code'] = is_null($this->input->post('staff_ifsc_code')) ? '' : $this->input->post('staff_ifsc_code');
    $this->session->set_userdata('hospital.hospital_id', $staff_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $staff_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('department.department_id', $staff_filters['department.department_id']);
    $this->session->set_userdata('unit.unit_id', $staff_filters['unit.unit_id']);
    $this->session->set_userdata('area.area_id', $staff_filters['area.area_id']);
    $this->session->set_userdata('staff_category.staff_category_id', $staff_filters['staff_category.staff_category_id']);
    $this->session->set_userdata('staff_role.staff_role_id', $staff_filters['staff_role.staff_role_id']);
    $this->session->set_userdata('qualification.qualification_id', $staff_filters['qualification.qualification_id']);
    $this->session->set_userdata('staff_applicant_qualification_master.qualification_id', $staff_filters['staff_applicant_qualification_master.qualification_id']);
    $this->session->set_userdata('staff.staff_id', $staff_filters['staff.staff_id']);
    $this->db->select('hospital.hospital_id AS staff_hospital_id, staff_previous_hospital.hospital_id AS staff_hospital_id,
    department.department_id AS staff_department_id, unit.unit_id AS staff_unit_id,
    area.area_id AS staff_area_id, staff_category.staff_category_id AS staff_staff_category_id,
    staff_role.staff_role_id AS staff_staff_role_id, qualification.qualification_id AS staff_qualification_id,
    staff_applicant_qualification_master.qualification_id AS staff_qualification_id, staff.staff_id AS staff_staff_id,
    staff.hospital_id AS staff_hospital_id, staff.department_id AS staff_department_id,
    staff.unit_id AS staff_unit_id, staff.area_id AS staff_area_id,
    staff.first_name AS staff_first_name, staff.last_name AS staff_last_name,
    staff.name AS staff_name, staff.date_of_birth AS staff_date_of_birth,
    staff.gender AS staff_gender, staff.staff_category AS staff_staff_category,
    staff.staff_category_id AS staff_staff_category_id, staff.staff_type AS staff_staff_type,
    staff.staff_role AS staff_staff_role, staff.staff_role_id AS staff_staff_role_id,
    staff.mci_flag AS staff_mci_flag, staff.ima_registration_number AS staff_ima_registration_number,
    staff.email AS staff_email, staff.phone AS staff_phone,
    staff.image AS staff_image, staff.qualification_id AS staff_qualification_id,
    staff.designation AS staff_designation, staff.area_of_responsibility AS staff_area_of_responsibility,
    staff.research_area AS staff_research_area, staff.specialisation AS staff_specialisation,
    staff.research AS staff_research, staff.personal_note AS staff_personal_note,
    staff.staff_status AS staff_staff_status, staff.status AS staff_status,
    staff.status_date AS staff_status_date, staff.doctor_reg_no AS staff_doctor_reg_no,
    staff.staff_flag AS staff_staff_flag, staff.doctor_flag AS staff_doctor_flag,
    staff.bank AS staff_bank, staff.bank_branch AS staff_bank_branch,
    staff.account_name AS staff_account_name, staff.account_number AS staff_account_number,
    staff.ifsc_code AS staff_ifsc_code')->from('staff');
    $this->db->join('hospital', 'staff.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'staff.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->join('department', 'staff.department_id = department.department_id', 'left');
    $this->db->join('unit', 'staff.unit_id = unit.unit_id', 'left');
    $this->db->join('area', 'staff.area_id = area.area_id', 'left');
    $this->db->join('staff_category', 'staff.staff_category_id = staff_category.staff_category_id', 'left');
    $this->db->join('staff_role', 'staff.staff_role_id = staff_role.staff_role_id', 'left');
    $this->db->join('qualification', 'staff.qualification_id = qualification.qualification_id', 'left');
    $this->db->join('staff_applicant_qualification_master', 'staff.qualification_id = staff_applicant_qualification_master.qualification_id', 'left');
    $this->db->where($staff_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $staff_filters);
  }
}