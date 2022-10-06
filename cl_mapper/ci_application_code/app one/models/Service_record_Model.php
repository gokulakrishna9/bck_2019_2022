<?php class Service_record_model extends CI_Model {
  function service_record_create($equipment_equipment_id,$bb_user_user_id,$user_user_id,$vendor_vendor_id) {
    $service_record_post = [];
    $service_record_post['equipment.equipment_id'] = $this->session->equipment_equipment_id;
    $service_record_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $service_record_post['user.user_id'] = $this->session->user_user_id;
    $service_record_post['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $service_record_post['equipment.equipment_id'] = $equipment_equipment_id;
    $service_record_post['bb_user.user_id'] = $bb_user_user_id;
    $service_record_post['user.user_id'] = $user_user_id;
    $service_record_post['vendor.vendor_id'] = $vendor_vendor_id;
    $service_record_post['call_date'] = is_null($this->input->post('call_date')) ? '' : $this->input->post('call_date');
    $service_record_post['call_information'] = is_null($this->input->post('call_information')) ? '' : $this->input->post('call_information');
    $service_record_post['call_information_type'] = is_null($this->input->post('call_information_type')) ? '' : $this->input->post('call_information_type');
    $service_record_post['call_time'] = is_null($this->input->post('call_time')) ? '' : $this->input->post('call_time');
    $service_record_post['contact_person_id'] = is_null($this->input->post('contact_person_id')) ? '' : $this->input->post('contact_person_id');
    $service_record_post['equipment_id'] = is_null($this->input->post('equipment_id')) ? '' : $this->input->post('equipment_id');
    $service_record_post['problem_status'] = is_null($this->input->post('problem_status')) ? '' : $this->input->post('problem_status');
    $service_record_post['request_id'] = is_null($this->input->post('request_id')) ? '' : $this->input->post('request_id');
    $service_record_post['service_date'] = is_null($this->input->post('service_date')) ? '' : $this->input->post('service_date');
    $service_record_post['service_person'] = is_null($this->input->post('service_person')) ? '' : $this->input->post('service_person');
    $service_record_post['service_person_remarks'] = is_null($this->input->post('service_person_remarks')) ? '' : $this->input->post('service_person_remarks');
    $service_record_post['service_provider'] = is_null($this->input->post('service_provider')) ? '' : $this->input->post('service_provider');
    $service_record_post['service_time'] = is_null($this->input->post('service_time')) ? '' : $this->input->post('service_time');
    $service_record_post['user_id'] = is_null($this->input->post('user_id')) ? '' : $this->input->post('user_id');
    $service_record_post['vendor_id'] = is_null($this->input->post('vendor_id')) ? '' : $this->input->post('vendor_id');
    $service_record_post['working_status'] = is_null($this->input->post('working_status')) ? '' : $this->input->post('working_status');
    $this->session->set_userdata('equipment.equipment_id', $service_record_post['equipment.equipment_id']);
    $this->session->set_userdata('bb_user.user_id', $service_record_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $service_record_post['user.user_id']);
    $this->session->set_userdata('vendor.vendor_id', $service_record_post['vendor.vendor_id']);
    $this->db->insert('service_record', $service_record_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $service_record_post);
  }
  function service_record_update($equipment_id,$user_id,$user_id,$vendor_id,$request_id) {
    $service_record_post['equipment.equipment_id'] = $this->session->equipment_equipment_id;
    $service_record_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $service_record_post['user.user_id'] = $this->session->user_user_id;
    $service_record_post['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $service_record_post['service_record.request_id'] = $this->session->service_record_request_id;
    $service_record_post['equipment.equipment_id'] = $equipment_equipment_id;
    $service_record_post['bb_user.user_id'] = $bb_user_user_id;
    $service_record_post['user.user_id'] = $user_user_id;
    $service_record_post['vendor.vendor_id'] = $vendor_vendor_id;
    $service_record_post['service_record.request_id'] = $service_record_request_id;
    $service_record_post['service_record.call_date'] = is_null($this->input->post('service_record_call_date')) ? '' : $this->input->post('service_record_call_date');
    $service_record_post['service_record.call_information'] = is_null($this->input->post('service_record_call_information')) ? '' : $this->input->post('service_record_call_information');
    $service_record_post['service_record.call_information_type'] = is_null($this->input->post('service_record_call_information_type')) ? '' : $this->input->post('service_record_call_information_type');
    $service_record_post['service_record.call_time'] = is_null($this->input->post('service_record_call_time')) ? '' : $this->input->post('service_record_call_time');
    $service_record_post['service_record.contact_person_id'] = is_null($this->input->post('service_record_contact_person_id')) ? '' : $this->input->post('service_record_contact_person_id');
    $service_record_post['service_record.equipment_id'] = is_null($this->input->post('service_record_equipment_id')) ? '' : $this->input->post('service_record_equipment_id');
    $service_record_post['service_record.problem_status'] = is_null($this->input->post('service_record_problem_status')) ? '' : $this->input->post('service_record_problem_status');
    $service_record_post['service_record.service_date'] = is_null($this->input->post('service_record_service_date')) ? '' : $this->input->post('service_record_service_date');
    $service_record_post['service_record.service_person'] = is_null($this->input->post('service_record_service_person')) ? '' : $this->input->post('service_record_service_person');
    $service_record_post['service_record.service_person_remarks'] = is_null($this->input->post('service_record_service_person_remarks')) ? '' : $this->input->post('service_record_service_person_remarks');
    $service_record_post['service_record.service_provider'] = is_null($this->input->post('service_record_service_provider')) ? '' : $this->input->post('service_record_service_provider');
    $service_record_post['service_record.service_time'] = is_null($this->input->post('service_record_service_time')) ? '' : $this->input->post('service_record_service_time');
    $service_record_post['service_record.user_id'] = is_null($this->input->post('service_record_user_id')) ? '' : $this->input->post('service_record_user_id');
    $service_record_post['service_record.vendor_id'] = is_null($this->input->post('service_record_vendor_id')) ? '' : $this->input->post('service_record_vendor_id');
    $service_record_post['service_record.working_status'] = is_null($this->input->post('service_record_working_status')) ? '' : $this->input->post('service_record_working_status');
    $this->session->set_userdata('equipment.equipment_id', $service_record_post['equipment.equipment_id']);
    $this->session->set_userdata('bb_user.user_id', $service_record_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $service_record_post['user.user_id']);
    $this->session->set_userdata('vendor.vendor_id', $service_record_post['vendor.vendor_id']);
    $this->session->set_userdata('service_record.request_id', $service_record_post['service_record.request_id']);
    $this->db->update('service_record', $service_record_post, array('request_id' => $service_record_post['request_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $service_record_post);
  }
  function service_record_delete() {
    $service_record_delete['service_record.call_date'] = is_null($this->input->post('service_record_call_date')) ? '' : $this->input->post('service_record_call_date');
    $service_record_delete['service_record.call_information'] = is_null($this->input->post('service_record_call_information')) ? '' : $this->input->post('service_record_call_information');
    $service_record_delete['service_record.call_information_type'] = is_null($this->input->post('service_record_call_information_type')) ? '' : $this->input->post('service_record_call_information_type');
    $service_record_delete['service_record.call_time'] = is_null($this->input->post('service_record_call_time')) ? '' : $this->input->post('service_record_call_time');
    $service_record_delete['service_record.contact_person_id'] = is_null($this->input->post('service_record_contact_person_id')) ? '' : $this->input->post('service_record_contact_person_id');
    $service_record_delete['service_record.equipment_id'] = is_null($this->input->post('service_record_equipment_id')) ? '' : $this->input->post('service_record_equipment_id');
    $service_record_delete['service_record.problem_status'] = is_null($this->input->post('service_record_problem_status')) ? '' : $this->input->post('service_record_problem_status');
    $service_record_delete['service_record.request_id'] = is_null($this->input->post('service_record_request_id')) ? '' : $this->input->post('service_record_request_id');
    $service_record_delete['service_record.service_date'] = is_null($this->input->post('service_record_service_date')) ? '' : $this->input->post('service_record_service_date');
    $service_record_delete['service_record.service_person'] = is_null($this->input->post('service_record_service_person')) ? '' : $this->input->post('service_record_service_person');
    $service_record_delete['service_record.service_person_remarks'] = is_null($this->input->post('service_record_service_person_remarks')) ? '' : $this->input->post('service_record_service_person_remarks');
    $service_record_delete['service_record.service_provider'] = is_null($this->input->post('service_record_service_provider')) ? '' : $this->input->post('service_record_service_provider');
    $service_record_delete['service_record.service_time'] = is_null($this->input->post('service_record_service_time')) ? '' : $this->input->post('service_record_service_time');
    $service_record_delete['service_record.user_id'] = is_null($this->input->post('service_record_user_id')) ? '' : $this->input->post('service_record_user_id');
    $service_record_delete['service_record.vendor_id'] = is_null($this->input->post('service_record_vendor_id')) ? '' : $this->input->post('service_record_vendor_id');
    $service_record_delete['service_record.working_status'] = is_null($this->input->post('service_record_working_status')) ? '' : $this->input->post('service_record_working_status');
    $this->db->delete('service_record', array('request_id' => $service_record_delete['request_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $service_record_delete);
  }
  function service_record_get_records($equipment_id,$user_id,$user_id,$vendor_id,$request_id) {
    $service_record_filters['equipment.equipment_id'] = $this->session->equipment_equipment_id;
    $service_record_filters['bb_user.user_id'] = $this->session->bb_user_user_id;
    $service_record_filters['user.user_id'] = $this->session->user_user_id;
    $service_record_filters['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $service_record_filters['service_record.request_id'] = $this->session->service_record_request_id;
    $service_record_filters['equipment.equipment_id'] = $equipment_equipment_id;
    $service_record_filters['bb_user.user_id'] = $bb_user_user_id;
    $service_record_filters['user.user_id'] = $user_user_id;
    $service_record_filters['vendor.vendor_id'] = $vendor_vendor_id;
    $service_record_filters['service_record.request_id'] = $service_record_request_id;
    $service_record_filters['service_record.call_date'] = is_null($this->input->post('service_record_call_date')) ? '' : $this->input->post('service_record_call_date');
    $service_record_filters['service_record.call_information'] = is_null($this->input->post('service_record_call_information')) ? '' : $this->input->post('service_record_call_information');
    $service_record_filters['service_record.call_information_type'] = is_null($this->input->post('service_record_call_information_type')) ? '' : $this->input->post('service_record_call_information_type');
    $service_record_filters['service_record.call_time'] = is_null($this->input->post('service_record_call_time')) ? '' : $this->input->post('service_record_call_time');
    $service_record_filters['service_record.contact_person_id'] = is_null($this->input->post('service_record_contact_person_id')) ? '' : $this->input->post('service_record_contact_person_id');
    $service_record_filters['service_record.equipment_id'] = is_null($this->input->post('service_record_equipment_id')) ? '' : $this->input->post('service_record_equipment_id');
    $service_record_filters['service_record.problem_status'] = is_null($this->input->post('service_record_problem_status')) ? '' : $this->input->post('service_record_problem_status');
    $service_record_filters['service_record.service_date'] = is_null($this->input->post('service_record_service_date')) ? '' : $this->input->post('service_record_service_date');
    $service_record_filters['service_record.service_person'] = is_null($this->input->post('service_record_service_person')) ? '' : $this->input->post('service_record_service_person');
    $service_record_filters['service_record.service_person_remarks'] = is_null($this->input->post('service_record_service_person_remarks')) ? '' : $this->input->post('service_record_service_person_remarks');
    $service_record_filters['service_record.service_provider'] = is_null($this->input->post('service_record_service_provider')) ? '' : $this->input->post('service_record_service_provider');
    $service_record_filters['service_record.service_time'] = is_null($this->input->post('service_record_service_time')) ? '' : $this->input->post('service_record_service_time');
    $service_record_filters['service_record.user_id'] = is_null($this->input->post('service_record_user_id')) ? '' : $this->input->post('service_record_user_id');
    $service_record_filters['service_record.vendor_id'] = is_null($this->input->post('service_record_vendor_id')) ? '' : $this->input->post('service_record_vendor_id');
    $service_record_filters['service_record.working_status'] = is_null($this->input->post('service_record_working_status')) ? '' : $this->input->post('service_record_working_status');
    $this->session->set_userdata('equipment.equipment_id', $service_record_filters['equipment.equipment_id']);
    $this->session->set_userdata('bb_user.user_id', $service_record_filters['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $service_record_filters['user.user_id']);
    $this->session->set_userdata('vendor.vendor_id', $service_record_filters['vendor.vendor_id']);
    $this->session->set_userdata('service_record.request_id', $service_record_filters['service_record.request_id']);
    $this->db->select('equipment.equipment_id AS service_record_equipment_id, bb_user.user_id AS service_record_user_id,
    user.user_id AS service_record_user_id, vendor.vendor_id AS service_record_vendor_id,
    service_record.call_date AS service_record_call_date, service_record.call_information AS service_record_call_information,
    service_record.call_information_type AS service_record_call_information_type, service_record.call_time AS service_record_call_time,
    service_record.contact_person_id AS service_record_contact_person_id, service_record.equipment_id AS service_record_equipment_id,
    service_record.problem_status AS service_record_problem_status, service_record.request_id AS service_record_request_id,
    service_record.service_date AS service_record_service_date, service_record.service_person AS service_record_service_person,
    service_record.service_person_remarks AS service_record_service_person_remarks, service_record.service_provider AS service_record_service_provider,
    service_record.service_time AS service_record_service_time, service_record.user_id AS service_record_user_id,
    service_record.vendor_id AS service_record_vendor_id, service_record.working_status AS service_record_working_status')->from('service_record');
    $this->db->join('equipment', 'service_record.equipment_id = equipment.equipment_id', 'left');
    $this->db->join('bb_user', 'service_record.user_id = bb_user.user_id', 'left');
    $this->db->join('user', 'service_record.user_id = user.user_id', 'left');
    $this->db->join('vendor', 'service_record.vendor_id = vendor.vendor_id', 'left');
    $this->db->where($service_record_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $service_record_filters);
  }
}