<?php class Helpline_call_model extends CI_Model {
  function helpline_call_create() {
    $helpline_call_post = [];
    $helpline_call_post['helpline_caller_type.caller_type_id'] = $this->session->helpline_caller_type_caller_type_id;
    $helpline_call_post['helpline_call_category.call_category_id'] = $this->session->helpline_call_category_call_category_id;
    $helpline_call_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $helpline_call_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $helpline_call_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $helpline_call_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $helpline_call_post['helpline_resolution_status.resolution_status_id'] = $this->session->helpline_resolution_status_resolution_status_id;
    $helpline_call_post['helpline_call_group.call_group_id'] = $this->session->helpline_call_group_call_group_id;
    $helpline_call_post['helpline_caller_type.caller_type_id'] = $helpline_caller_type_caller_type_id;
    $helpline_call_post['helpline_call_category.call_category_id'] = $helpline_call_category_call_category_id;
    $helpline_call_post['hospital.hospital_id'] = $hospital_hospital_id;
    $helpline_call_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $helpline_call_post['mlc.visit_id'] = $mlc_visit_id;
    $helpline_call_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $helpline_call_post['helpline_resolution_status.resolution_status_id'] = $helpline_resolution_status_resolution_status_id;
    $helpline_call_post['helpline_call_group.call_group_id'] = $helpline_call_group_call_group_id;
    $helpline_call_post['call_id'] = is_null($this->input->post('call_id')) ? '' : $this->input->post('call_id');
    $helpline_call_post['callsid'] = is_null($this->input->post('callsid')) ? '' : $this->input->post('callsid');
    $helpline_call_post['from_number'] = is_null($this->input->post('from_number')) ? '' : $this->input->post('from_number');
    $helpline_call_post['to_number'] = is_null($this->input->post('to_number')) ? '' : $this->input->post('to_number');
    $helpline_call_post['direction'] = is_null($this->input->post('direction')) ? '' : $this->input->post('direction');
    $helpline_call_post['dial_call_duration'] = is_null($this->input->post('dial_call_duration')) ? '' : $this->input->post('dial_call_duration');
    $helpline_call_post['start_time'] = is_null($this->input->post('start_time')) ? '' : $this->input->post('start_time');
    $helpline_call_post['current_server_time'] = is_null($this->input->post('current_server_time')) ? '' : $this->input->post('current_server_time');
    $helpline_call_post['end_time'] = is_null($this->input->post('end_time')) ? '' : $this->input->post('end_time');
    $helpline_call_post['call_type'] = is_null($this->input->post('call_type')) ? '' : $this->input->post('call_type');
    $helpline_call_post['recording_url'] = is_null($this->input->post('recording_url')) ? '' : $this->input->post('recording_url');
    $helpline_call_post['dial_whom_number'] = is_null($this->input->post('dial_whom_number')) ? '' : $this->input->post('dial_whom_number');
    $helpline_call_post['caller_type_id'] = is_null($this->input->post('caller_type_id')) ? '' : $this->input->post('caller_type_id');
    $helpline_call_post['call_category_id'] = is_null($this->input->post('call_category_id')) ? '' : $this->input->post('call_category_id');
    $helpline_call_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $helpline_call_post['ip_op'] = is_null($this->input->post('ip_op')) ? '' : $this->input->post('ip_op');
    $helpline_call_post['visit_id'] = is_null($this->input->post('visit_id')) ? '' : $this->input->post('visit_id');
    $helpline_call_post['resolution_status_id'] = is_null($this->input->post('resolution_status_id')) ? '' : $this->input->post('resolution_status_id');
    $helpline_call_post['note'] = is_null($this->input->post('note')) ? '' : $this->input->post('note');
    $helpline_call_post['create_date_time'] = is_null($this->input->post('create_date_time')) ? '' : $this->input->post('create_date_time');
    $helpline_call_post['update_date_time'] = is_null($this->input->post('update_date_time')) ? '' : $this->input->post('update_date_time');
    $helpline_call_post['updated'] = is_null($this->input->post('updated')) ? '' : $this->input->post('updated');
    $helpline_call_post['resolution_date_time'] = is_null($this->input->post('resolution_date_time')) ? '' : $this->input->post('resolution_date_time');
    $helpline_call_post['call_group_id'] = is_null($this->input->post('call_group_id')) ? '' : $this->input->post('call_group_id');
    $this->session->set_userdata('helpline_caller_type.caller_type_id', $helpline_call_post['helpline_caller_type.caller_type_id']);
    $this->session->set_userdata('helpline_call_category.call_category_id', $helpline_call_post['helpline_call_category.call_category_id']);
    $this->session->set_userdata('hospital.hospital_id', $helpline_call_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $helpline_call_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('mlc.visit_id', $helpline_call_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $helpline_call_post['patient_visit.visit_id']);
    $this->session->set_userdata('helpline_resolution_status.resolution_status_id', $helpline_call_post['helpline_resolution_status.resolution_status_id']);
    $this->session->set_userdata('helpline_call_group.call_group_id', $helpline_call_post['helpline_call_group.call_group_id']);
    $this->db->insert('helpline_call', $helpline_call_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $helpline_call_post);
  }
  function helpline_call_update() {
    $helpline_call_post['helpline_caller_type.caller_type_id'] = $this->session->helpline_caller_type_caller_type_id;
    $helpline_call_post['helpline_call_category.call_category_id'] = $this->session->helpline_call_category_call_category_id;
    $helpline_call_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $helpline_call_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $helpline_call_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $helpline_call_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $helpline_call_post['helpline_resolution_status.resolution_status_id'] = $this->session->helpline_resolution_status_resolution_status_id;
    $helpline_call_post['helpline_call_group.call_group_id'] = $this->session->helpline_call_group_call_group_id;
    $helpline_call_post['helpline_call.call_id'] = $this->session->helpline_call_call_id;
    $helpline_call_post['helpline_caller_type.caller_type_id'] = $helpline_caller_type_caller_type_id;
    $helpline_call_post['helpline_call_category.call_category_id'] = $helpline_call_category_call_category_id;
    $helpline_call_post['hospital.hospital_id'] = $hospital_hospital_id;
    $helpline_call_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $helpline_call_post['mlc.visit_id'] = $mlc_visit_id;
    $helpline_call_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $helpline_call_post['helpline_resolution_status.resolution_status_id'] = $helpline_resolution_status_resolution_status_id;
    $helpline_call_post['helpline_call_group.call_group_id'] = $helpline_call_group_call_group_id;
    $helpline_call_post['helpline_call.call_id'] = $helpline_call_call_id;
    $helpline_call_post['helpline_call.callsid'] = is_null($this->input->post('helpline_call_callsid')) ? '' : $this->input->post('helpline_call_callsid');
    $helpline_call_post['helpline_call.from_number'] = is_null($this->input->post('helpline_call_from_number')) ? '' : $this->input->post('helpline_call_from_number');
    $helpline_call_post['helpline_call.to_number'] = is_null($this->input->post('helpline_call_to_number')) ? '' : $this->input->post('helpline_call_to_number');
    $helpline_call_post['helpline_call.direction'] = is_null($this->input->post('helpline_call_direction')) ? '' : $this->input->post('helpline_call_direction');
    $helpline_call_post['helpline_call.dial_call_duration'] = is_null($this->input->post('helpline_call_dial_call_duration')) ? '' : $this->input->post('helpline_call_dial_call_duration');
    $helpline_call_post['helpline_call.start_time'] = is_null($this->input->post('helpline_call_start_time')) ? '' : $this->input->post('helpline_call_start_time');
    $helpline_call_post['helpline_call.current_server_time'] = is_null($this->input->post('helpline_call_current_server_time')) ? '' : $this->input->post('helpline_call_current_server_time');
    $helpline_call_post['helpline_call.end_time'] = is_null($this->input->post('helpline_call_end_time')) ? '' : $this->input->post('helpline_call_end_time');
    $helpline_call_post['helpline_call.call_type'] = is_null($this->input->post('helpline_call_call_type')) ? '' : $this->input->post('helpline_call_call_type');
    $helpline_call_post['helpline_call.recording_url'] = is_null($this->input->post('helpline_call_recording_url')) ? '' : $this->input->post('helpline_call_recording_url');
    $helpline_call_post['helpline_call.dial_whom_number'] = is_null($this->input->post('helpline_call_dial_whom_number')) ? '' : $this->input->post('helpline_call_dial_whom_number');
    $helpline_call_post['helpline_call.caller_type_id'] = is_null($this->input->post('helpline_call_caller_type_id')) ? '' : $this->input->post('helpline_call_caller_type_id');
    $helpline_call_post['helpline_call.call_category_id'] = is_null($this->input->post('helpline_call_call_category_id')) ? '' : $this->input->post('helpline_call_call_category_id');
    $helpline_call_post['helpline_call.hospital_id'] = is_null($this->input->post('helpline_call_hospital_id')) ? '' : $this->input->post('helpline_call_hospital_id');
    $helpline_call_post['helpline_call.ip_op'] = is_null($this->input->post('helpline_call_ip_op')) ? '' : $this->input->post('helpline_call_ip_op');
    $helpline_call_post['helpline_call.visit_id'] = is_null($this->input->post('helpline_call_visit_id')) ? '' : $this->input->post('helpline_call_visit_id');
    $helpline_call_post['helpline_call.resolution_status_id'] = is_null($this->input->post('helpline_call_resolution_status_id')) ? '' : $this->input->post('helpline_call_resolution_status_id');
    $helpline_call_post['helpline_call.note'] = is_null($this->input->post('helpline_call_note')) ? '' : $this->input->post('helpline_call_note');
    $helpline_call_post['helpline_call.create_date_time'] = is_null($this->input->post('helpline_call_create_date_time')) ? '' : $this->input->post('helpline_call_create_date_time');
    $helpline_call_post['helpline_call.update_date_time'] = is_null($this->input->post('helpline_call_update_date_time')) ? '' : $this->input->post('helpline_call_update_date_time');
    $helpline_call_post['helpline_call.updated'] = is_null($this->input->post('helpline_call_updated')) ? '' : $this->input->post('helpline_call_updated');
    $helpline_call_post['helpline_call.resolution_date_time'] = is_null($this->input->post('helpline_call_resolution_date_time')) ? '' : $this->input->post('helpline_call_resolution_date_time');
    $helpline_call_post['helpline_call.call_group_id'] = is_null($this->input->post('helpline_call_call_group_id')) ? '' : $this->input->post('helpline_call_call_group_id');
    $this->session->set_userdata('helpline_caller_type.caller_type_id', $helpline_call_post['helpline_caller_type.caller_type_id']);
    $this->session->set_userdata('helpline_call_category.call_category_id', $helpline_call_post['helpline_call_category.call_category_id']);
    $this->session->set_userdata('hospital.hospital_id', $helpline_call_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $helpline_call_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('mlc.visit_id', $helpline_call_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $helpline_call_post['patient_visit.visit_id']);
    $this->session->set_userdata('helpline_resolution_status.resolution_status_id', $helpline_call_post['helpline_resolution_status.resolution_status_id']);
    $this->session->set_userdata('helpline_call_group.call_group_id', $helpline_call_post['helpline_call_group.call_group_id']);
    $this->session->set_userdata('helpline_call.call_id', $helpline_call_post['helpline_call.call_id']);
    $this->db->update('helpline_call', $helpline_call_post, array('call_id' => $helpline_call_post['call_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $helpline_call_post);
  }
  function helpline_call_delete() {
    $helpline_call_delete['helpline_call.call_id'] = is_null($this->input->post('helpline_call_call_id')) ? '' : $this->input->post('helpline_call_call_id');
    $helpline_call_delete['helpline_call.callsid'] = is_null($this->input->post('helpline_call_callsid')) ? '' : $this->input->post('helpline_call_callsid');
    $helpline_call_delete['helpline_call.from_number'] = is_null($this->input->post('helpline_call_from_number')) ? '' : $this->input->post('helpline_call_from_number');
    $helpline_call_delete['helpline_call.to_number'] = is_null($this->input->post('helpline_call_to_number')) ? '' : $this->input->post('helpline_call_to_number');
    $helpline_call_delete['helpline_call.direction'] = is_null($this->input->post('helpline_call_direction')) ? '' : $this->input->post('helpline_call_direction');
    $helpline_call_delete['helpline_call.dial_call_duration'] = is_null($this->input->post('helpline_call_dial_call_duration')) ? '' : $this->input->post('helpline_call_dial_call_duration');
    $helpline_call_delete['helpline_call.start_time'] = is_null($this->input->post('helpline_call_start_time')) ? '' : $this->input->post('helpline_call_start_time');
    $helpline_call_delete['helpline_call.current_server_time'] = is_null($this->input->post('helpline_call_current_server_time')) ? '' : $this->input->post('helpline_call_current_server_time');
    $helpline_call_delete['helpline_call.end_time'] = is_null($this->input->post('helpline_call_end_time')) ? '' : $this->input->post('helpline_call_end_time');
    $helpline_call_delete['helpline_call.call_type'] = is_null($this->input->post('helpline_call_call_type')) ? '' : $this->input->post('helpline_call_call_type');
    $helpline_call_delete['helpline_call.recording_url'] = is_null($this->input->post('helpline_call_recording_url')) ? '' : $this->input->post('helpline_call_recording_url');
    $helpline_call_delete['helpline_call.dial_whom_number'] = is_null($this->input->post('helpline_call_dial_whom_number')) ? '' : $this->input->post('helpline_call_dial_whom_number');
    $helpline_call_delete['helpline_call.caller_type_id'] = is_null($this->input->post('helpline_call_caller_type_id')) ? '' : $this->input->post('helpline_call_caller_type_id');
    $helpline_call_delete['helpline_call.call_category_id'] = is_null($this->input->post('helpline_call_call_category_id')) ? '' : $this->input->post('helpline_call_call_category_id');
    $helpline_call_delete['helpline_call.hospital_id'] = is_null($this->input->post('helpline_call_hospital_id')) ? '' : $this->input->post('helpline_call_hospital_id');
    $helpline_call_delete['helpline_call.ip_op'] = is_null($this->input->post('helpline_call_ip_op')) ? '' : $this->input->post('helpline_call_ip_op');
    $helpline_call_delete['helpline_call.visit_id'] = is_null($this->input->post('helpline_call_visit_id')) ? '' : $this->input->post('helpline_call_visit_id');
    $helpline_call_delete['helpline_call.resolution_status_id'] = is_null($this->input->post('helpline_call_resolution_status_id')) ? '' : $this->input->post('helpline_call_resolution_status_id');
    $helpline_call_delete['helpline_call.note'] = is_null($this->input->post('helpline_call_note')) ? '' : $this->input->post('helpline_call_note');
    $helpline_call_delete['helpline_call.create_date_time'] = is_null($this->input->post('helpline_call_create_date_time')) ? '' : $this->input->post('helpline_call_create_date_time');
    $helpline_call_delete['helpline_call.update_date_time'] = is_null($this->input->post('helpline_call_update_date_time')) ? '' : $this->input->post('helpline_call_update_date_time');
    $helpline_call_delete['helpline_call.updated'] = is_null($this->input->post('helpline_call_updated')) ? '' : $this->input->post('helpline_call_updated');
    $helpline_call_delete['helpline_call.resolution_date_time'] = is_null($this->input->post('helpline_call_resolution_date_time')) ? '' : $this->input->post('helpline_call_resolution_date_time');
    $helpline_call_delete['helpline_call.call_group_id'] = is_null($this->input->post('helpline_call_call_group_id')) ? '' : $this->input->post('helpline_call_call_group_id');
    $this->db->delete('helpline_call', array('call_id' => $helpline_call_delete['call_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $helpline_call_delete);
  }
  function helpline_call_get_records() {
    $helpline_call_filters['helpline_caller_type.caller_type_id'] = $this->session->helpline_caller_type_caller_type_id;
    $helpline_call_filters['helpline_call_category.call_category_id'] = $this->session->helpline_call_category_call_category_id;
    $helpline_call_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $helpline_call_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $helpline_call_filters['mlc.visit_id'] = $this->session->mlc_visit_id;
    $helpline_call_filters['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $helpline_call_filters['helpline_resolution_status.resolution_status_id'] = $this->session->helpline_resolution_status_resolution_status_id;
    $helpline_call_filters['helpline_call_group.call_group_id'] = $this->session->helpline_call_group_call_group_id;
    $helpline_call_filters['helpline_call.call_id'] = $this->session->helpline_call_call_id;
    $helpline_call_filters['helpline_caller_type.caller_type_id'] = $helpline_caller_type_caller_type_id;
    $helpline_call_filters['helpline_call_category.call_category_id'] = $helpline_call_category_call_category_id;
    $helpline_call_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $helpline_call_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $helpline_call_filters['mlc.visit_id'] = $mlc_visit_id;
    $helpline_call_filters['patient_visit.visit_id'] = $patient_visit_visit_id;
    $helpline_call_filters['helpline_resolution_status.resolution_status_id'] = $helpline_resolution_status_resolution_status_id;
    $helpline_call_filters['helpline_call_group.call_group_id'] = $helpline_call_group_call_group_id;
    $helpline_call_filters['helpline_call.call_id'] = $helpline_call_call_id;
    $helpline_call_filters['helpline_call.callsid'] = is_null($this->input->post('helpline_call_callsid')) ? '' : $this->input->post('helpline_call_callsid');
    $helpline_call_filters['helpline_call.from_number'] = is_null($this->input->post('helpline_call_from_number')) ? '' : $this->input->post('helpline_call_from_number');
    $helpline_call_filters['helpline_call.to_number'] = is_null($this->input->post('helpline_call_to_number')) ? '' : $this->input->post('helpline_call_to_number');
    $helpline_call_filters['helpline_call.direction'] = is_null($this->input->post('helpline_call_direction')) ? '' : $this->input->post('helpline_call_direction');
    $helpline_call_filters['helpline_call.dial_call_duration'] = is_null($this->input->post('helpline_call_dial_call_duration')) ? '' : $this->input->post('helpline_call_dial_call_duration');
    $helpline_call_filters['helpline_call.start_time'] = is_null($this->input->post('helpline_call_start_time')) ? '' : $this->input->post('helpline_call_start_time');
    $helpline_call_filters['helpline_call.current_server_time'] = is_null($this->input->post('helpline_call_current_server_time')) ? '' : $this->input->post('helpline_call_current_server_time');
    $helpline_call_filters['helpline_call.end_time'] = is_null($this->input->post('helpline_call_end_time')) ? '' : $this->input->post('helpline_call_end_time');
    $helpline_call_filters['helpline_call.call_type'] = is_null($this->input->post('helpline_call_call_type')) ? '' : $this->input->post('helpline_call_call_type');
    $helpline_call_filters['helpline_call.recording_url'] = is_null($this->input->post('helpline_call_recording_url')) ? '' : $this->input->post('helpline_call_recording_url');
    $helpline_call_filters['helpline_call.dial_whom_number'] = is_null($this->input->post('helpline_call_dial_whom_number')) ? '' : $this->input->post('helpline_call_dial_whom_number');
    $helpline_call_filters['helpline_call.caller_type_id'] = is_null($this->input->post('helpline_call_caller_type_id')) ? '' : $this->input->post('helpline_call_caller_type_id');
    $helpline_call_filters['helpline_call.call_category_id'] = is_null($this->input->post('helpline_call_call_category_id')) ? '' : $this->input->post('helpline_call_call_category_id');
    $helpline_call_filters['helpline_call.hospital_id'] = is_null($this->input->post('helpline_call_hospital_id')) ? '' : $this->input->post('helpline_call_hospital_id');
    $helpline_call_filters['helpline_call.ip_op'] = is_null($this->input->post('helpline_call_ip_op')) ? '' : $this->input->post('helpline_call_ip_op');
    $helpline_call_filters['helpline_call.visit_id'] = is_null($this->input->post('helpline_call_visit_id')) ? '' : $this->input->post('helpline_call_visit_id');
    $helpline_call_filters['helpline_call.resolution_status_id'] = is_null($this->input->post('helpline_call_resolution_status_id')) ? '' : $this->input->post('helpline_call_resolution_status_id');
    $helpline_call_filters['helpline_call.note'] = is_null($this->input->post('helpline_call_note')) ? '' : $this->input->post('helpline_call_note');
    $helpline_call_filters['helpline_call.create_date_time'] = is_null($this->input->post('helpline_call_create_date_time')) ? '' : $this->input->post('helpline_call_create_date_time');
    $helpline_call_filters['helpline_call.update_date_time'] = is_null($this->input->post('helpline_call_update_date_time')) ? '' : $this->input->post('helpline_call_update_date_time');
    $helpline_call_filters['helpline_call.updated'] = is_null($this->input->post('helpline_call_updated')) ? '' : $this->input->post('helpline_call_updated');
    $helpline_call_filters['helpline_call.resolution_date_time'] = is_null($this->input->post('helpline_call_resolution_date_time')) ? '' : $this->input->post('helpline_call_resolution_date_time');
    $helpline_call_filters['helpline_call.call_group_id'] = is_null($this->input->post('helpline_call_call_group_id')) ? '' : $this->input->post('helpline_call_call_group_id');
    $this->session->set_userdata('helpline_caller_type.caller_type_id', $helpline_call_filters['helpline_caller_type.caller_type_id']);
    $this->session->set_userdata('helpline_call_category.call_category_id', $helpline_call_filters['helpline_call_category.call_category_id']);
    $this->session->set_userdata('hospital.hospital_id', $helpline_call_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $helpline_call_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('mlc.visit_id', $helpline_call_filters['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $helpline_call_filters['patient_visit.visit_id']);
    $this->session->set_userdata('helpline_resolution_status.resolution_status_id', $helpline_call_filters['helpline_resolution_status.resolution_status_id']);
    $this->session->set_userdata('helpline_call_group.call_group_id', $helpline_call_filters['helpline_call_group.call_group_id']);
    $this->session->set_userdata('helpline_call.call_id', $helpline_call_filters['helpline_call.call_id']);
    $this->db->select('helpline_caller_type.caller_type_id AS helpline_call_caller_type_id, helpline_call_category.call_category_id AS helpline_call_call_category_id,
    hospital.hospital_id AS helpline_call_hospital_id, staff_previous_hospital.hospital_id AS helpline_call_hospital_id,
    mlc.visit_id AS helpline_call_visit_id, patient_visit.visit_id AS helpline_call_visit_id,
    helpline_resolution_status.resolution_status_id AS helpline_call_resolution_status_id, helpline_call_group.call_group_id AS helpline_call_call_group_id,
    helpline_call.call_id AS helpline_call_call_id, helpline_call.callsid AS helpline_call_callsid,
    helpline_call.from_number AS helpline_call_from_number, helpline_call.to_number AS helpline_call_to_number,
    helpline_call.direction AS helpline_call_direction, helpline_call.dial_call_duration AS helpline_call_dial_call_duration,
    helpline_call.start_time AS helpline_call_start_time, helpline_call.current_server_time AS helpline_call_current_server_time,
    helpline_call.end_time AS helpline_call_end_time, helpline_call.call_type AS helpline_call_call_type,
    helpline_call.recording_url AS helpline_call_recording_url, helpline_call.dial_whom_number AS helpline_call_dial_whom_number,
    helpline_call.caller_type_id AS helpline_call_caller_type_id, helpline_call.call_category_id AS helpline_call_call_category_id,
    helpline_call.hospital_id AS helpline_call_hospital_id, helpline_call.ip_op AS helpline_call_ip_op,
    helpline_call.visit_id AS helpline_call_visit_id, helpline_call.resolution_status_id AS helpline_call_resolution_status_id,
    helpline_call.note AS helpline_call_note, helpline_call.create_date_time AS helpline_call_create_date_time,
    helpline_call.update_date_time AS helpline_call_update_date_time, helpline_call.updated AS helpline_call_updated,
    helpline_call.resolution_date_time AS helpline_call_resolution_date_time, helpline_call.call_group_id AS helpline_call_call_group_id')->from('helpline_call');
    $this->db->join('helpline_caller_type', 'helpline_call.caller_type_id = helpline_caller_type.caller_type_id', 'left');
    $this->db->join('helpline_call_category', 'helpline_call.call_category_id = helpline_call_category.call_category_id', 'left');
    $this->db->join('hospital', 'helpline_call.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'helpline_call.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->join('mlc', 'helpline_call.visit_id = mlc.visit_id', 'left');
    $this->db->join('patient_visit', 'helpline_call.visit_id = patient_visit.visit_id', 'left');
    $this->db->join('helpline_resolution_status', 'helpline_call.resolution_status_id = helpline_resolution_status.resolution_status_id', 'left');
    $this->db->join('helpline_call_group', 'helpline_call.call_group_id = helpline_call_group.call_group_id', 'left');
    $this->db->where($helpline_call_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $helpline_call_filters);
  }
}