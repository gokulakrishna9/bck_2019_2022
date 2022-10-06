<?php class Blood_issue_model extends CI_Model {
  function blood_issue_create($hospital_hospital_id,$staff_previous_hospital_hospital_id,$blood_request_request_id,$service_record_request_id) {
    $blood_issue_post = [];
    $blood_issue_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_issue_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_issue_post['blood_request.request_id'] = $this->session->blood_request_request_id;
    $blood_issue_post['service_record.request_id'] = $this->session->service_record_request_id;
    $blood_issue_post['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_issue_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_issue_post['blood_request.request_id'] = $blood_request_request_id;
    $blood_issue_post['service_record.request_id'] = $service_record_request_id;
    $blood_issue_post['cross_matched_by'] = is_null($this->input->post('cross_matched_by')) ? '' : $this->input->post('cross_matched_by');
    $blood_issue_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $blood_issue_post['issue_date'] = is_null($this->input->post('issue_date')) ? '' : $this->input->post('issue_date');
    $blood_issue_post['issue_id'] = is_null($this->input->post('issue_id')) ? '' : $this->input->post('issue_id');
    $blood_issue_post['issue_time'] = is_null($this->input->post('issue_time')) ? '' : $this->input->post('issue_time');
    $blood_issue_post['issued_by'] = is_null($this->input->post('issued_by')) ? '' : $this->input->post('issued_by');
    $blood_issue_post['request_id'] = is_null($this->input->post('request_id')) ? '' : $this->input->post('request_id');
    $this->session->set_userdata('hospital.hospital_id', $blood_issue_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_issue_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('blood_request.request_id', $blood_issue_post['blood_request.request_id']);
    $this->session->set_userdata('service_record.request_id', $blood_issue_post['service_record.request_id']);
    $this->db->insert('blood_issue', $blood_issue_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $blood_issue_post);
  }
  function blood_issue_update($hospital_id,$hospital_id,$request_id,$request_id,$issue_id) {
    $blood_issue_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_issue_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_issue_post['blood_request.request_id'] = $this->session->blood_request_request_id;
    $blood_issue_post['service_record.request_id'] = $this->session->service_record_request_id;
    $blood_issue_post['blood_issue.issue_id'] = $this->session->blood_issue_issue_id;
    $blood_issue_post['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_issue_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_issue_post['blood_request.request_id'] = $blood_request_request_id;
    $blood_issue_post['service_record.request_id'] = $service_record_request_id;
    $blood_issue_post['blood_issue.issue_id'] = $blood_issue_issue_id;
    $blood_issue_post['blood_issue.cross_matched_by'] = is_null($this->input->post('blood_issue_cross_matched_by')) ? '' : $this->input->post('blood_issue_cross_matched_by');
    $blood_issue_post['blood_issue.hospital_id'] = is_null($this->input->post('blood_issue_hospital_id')) ? '' : $this->input->post('blood_issue_hospital_id');
    $blood_issue_post['blood_issue.issue_date'] = is_null($this->input->post('blood_issue_issue_date')) ? '' : $this->input->post('blood_issue_issue_date');
    $blood_issue_post['blood_issue.issue_time'] = is_null($this->input->post('blood_issue_issue_time')) ? '' : $this->input->post('blood_issue_issue_time');
    $blood_issue_post['blood_issue.issued_by'] = is_null($this->input->post('blood_issue_issued_by')) ? '' : $this->input->post('blood_issue_issued_by');
    $blood_issue_post['blood_issue.request_id'] = is_null($this->input->post('blood_issue_request_id')) ? '' : $this->input->post('blood_issue_request_id');
    $this->session->set_userdata('hospital.hospital_id', $blood_issue_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_issue_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('blood_request.request_id', $blood_issue_post['blood_request.request_id']);
    $this->session->set_userdata('service_record.request_id', $blood_issue_post['service_record.request_id']);
    $this->session->set_userdata('blood_issue.issue_id', $blood_issue_post['blood_issue.issue_id']);
    $this->db->update('blood_issue', $blood_issue_post, array('issue_id' => $blood_issue_post['issue_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_issue_post);
  }
  function blood_issue_delete() {
    $blood_issue_delete['blood_issue.cross_matched_by'] = is_null($this->input->post('blood_issue_cross_matched_by')) ? '' : $this->input->post('blood_issue_cross_matched_by');
    $blood_issue_delete['blood_issue.hospital_id'] = is_null($this->input->post('blood_issue_hospital_id')) ? '' : $this->input->post('blood_issue_hospital_id');
    $blood_issue_delete['blood_issue.issue_date'] = is_null($this->input->post('blood_issue_issue_date')) ? '' : $this->input->post('blood_issue_issue_date');
    $blood_issue_delete['blood_issue.issue_id'] = is_null($this->input->post('blood_issue_issue_id')) ? '' : $this->input->post('blood_issue_issue_id');
    $blood_issue_delete['blood_issue.issue_time'] = is_null($this->input->post('blood_issue_issue_time')) ? '' : $this->input->post('blood_issue_issue_time');
    $blood_issue_delete['blood_issue.issued_by'] = is_null($this->input->post('blood_issue_issued_by')) ? '' : $this->input->post('blood_issue_issued_by');
    $blood_issue_delete['blood_issue.request_id'] = is_null($this->input->post('blood_issue_request_id')) ? '' : $this->input->post('blood_issue_request_id');
    $this->db->delete('blood_issue', array('issue_id' => $blood_issue_delete['issue_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_issue_delete);
  }
  function blood_issue_get_records($hospital_id,$hospital_id,$request_id,$request_id,$issue_id) {
    $blood_issue_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_issue_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_issue_filters['blood_request.request_id'] = $this->session->blood_request_request_id;
    $blood_issue_filters['service_record.request_id'] = $this->session->service_record_request_id;
    $blood_issue_filters['blood_issue.issue_id'] = $this->session->blood_issue_issue_id;
    $blood_issue_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_issue_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_issue_filters['blood_request.request_id'] = $blood_request_request_id;
    $blood_issue_filters['service_record.request_id'] = $service_record_request_id;
    $blood_issue_filters['blood_issue.issue_id'] = $blood_issue_issue_id;
    $blood_issue_filters['blood_issue.cross_matched_by'] = is_null($this->input->post('blood_issue_cross_matched_by')) ? '' : $this->input->post('blood_issue_cross_matched_by');
    $blood_issue_filters['blood_issue.hospital_id'] = is_null($this->input->post('blood_issue_hospital_id')) ? '' : $this->input->post('blood_issue_hospital_id');
    $blood_issue_filters['blood_issue.issue_date'] = is_null($this->input->post('blood_issue_issue_date')) ? '' : $this->input->post('blood_issue_issue_date');
    $blood_issue_filters['blood_issue.issue_time'] = is_null($this->input->post('blood_issue_issue_time')) ? '' : $this->input->post('blood_issue_issue_time');
    $blood_issue_filters['blood_issue.issued_by'] = is_null($this->input->post('blood_issue_issued_by')) ? '' : $this->input->post('blood_issue_issued_by');
    $blood_issue_filters['blood_issue.request_id'] = is_null($this->input->post('blood_issue_request_id')) ? '' : $this->input->post('blood_issue_request_id');
    $this->session->set_userdata('hospital.hospital_id', $blood_issue_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_issue_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('blood_request.request_id', $blood_issue_filters['blood_request.request_id']);
    $this->session->set_userdata('service_record.request_id', $blood_issue_filters['service_record.request_id']);
    $this->session->set_userdata('blood_issue.issue_id', $blood_issue_filters['blood_issue.issue_id']);
    $this->db->select('hospital.hospital_id AS blood_issue_hospital_id, staff_previous_hospital.hospital_id AS blood_issue_hospital_id,
    blood_request.request_id AS blood_issue_request_id, service_record.request_id AS blood_issue_request_id,
    blood_issue.cross_matched_by AS blood_issue_cross_matched_by, blood_issue.hospital_id AS blood_issue_hospital_id,
    blood_issue.issue_date AS blood_issue_issue_date, blood_issue.issue_id AS blood_issue_issue_id,
    blood_issue.issue_time AS blood_issue_issue_time, blood_issue.issued_by AS blood_issue_issued_by,
    blood_issue.request_id AS blood_issue_request_id')->from('blood_issue');
    $this->db->join('hospital', 'blood_issue.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'blood_issue.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->join('blood_request', 'blood_issue.request_id = blood_request.request_id', 'left');
    $this->db->join('service_record', 'blood_issue.request_id = service_record.request_id', 'left');
    $this->db->where($blood_issue_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $blood_issue_filters);
  }
}