<?php class Indent_model extends CI_Model {
  function indent_create($hospital_hospital_id,$staff_previous_hospital_hospital_id) {
    $indent_post = [];
    $indent_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $indent_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $indent_post['hospital.hospital_id'] = $hospital_hospital_id;
    $indent_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $indent_post['approve_date_time'] = is_null($this->input->post('approve_date_time')) ? '' : $this->input->post('approve_date_time');
    $indent_post['approver_id'] = is_null($this->input->post('approver_id')) ? '' : $this->input->post('approver_id');
    $indent_post['from_id'] = is_null($this->input->post('from_id')) ? '' : $this->input->post('from_id');
    $indent_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $indent_post['indent_date'] = is_null($this->input->post('indent_date')) ? '' : $this->input->post('indent_date');
    $indent_post['indent_id'] = is_null($this->input->post('indent_id')) ? '' : $this->input->post('indent_id');
    $indent_post['indent_status'] = is_null($this->input->post('indent_status')) ? '' : $this->input->post('indent_status');
    $indent_post['insert_datetime'] = is_null($this->input->post('insert_datetime')) ? '' : $this->input->post('insert_datetime');
    $indent_post['insert_user_id'] = is_null($this->input->post('insert_user_id')) ? '' : $this->input->post('insert_user_id');
    $indent_post['issue_date_time'] = is_null($this->input->post('issue_date_time')) ? '' : $this->input->post('issue_date_time');
    $indent_post['issuer_id'] = is_null($this->input->post('issuer_id')) ? '' : $this->input->post('issuer_id');
    $indent_post['orderby_id'] = is_null($this->input->post('orderby_id')) ? '' : $this->input->post('orderby_id');
    $indent_post['to_id'] = is_null($this->input->post('to_id')) ? '' : $this->input->post('to_id');
    $indent_post['update_datetime'] = is_null($this->input->post('update_datetime')) ? '' : $this->input->post('update_datetime');
    $indent_post['update_user_id'] = is_null($this->input->post('update_user_id')) ? '' : $this->input->post('update_user_id');
    $this->session->set_userdata('hospital.hospital_id', $indent_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $indent_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('indent', $indent_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $indent_post);
  }
  function indent_update($hospital_id,$hospital_id,$indent_id) {
    $indent_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $indent_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $indent_post['indent.indent_id'] = $this->session->indent_indent_id;
    $indent_post['hospital.hospital_id'] = $hospital_hospital_id;
    $indent_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $indent_post['indent.indent_id'] = $indent_indent_id;
    $indent_post['indent.approve_date_time'] = is_null($this->input->post('indent_approve_date_time')) ? '' : $this->input->post('indent_approve_date_time');
    $indent_post['indent.approver_id'] = is_null($this->input->post('indent_approver_id')) ? '' : $this->input->post('indent_approver_id');
    $indent_post['indent.from_id'] = is_null($this->input->post('indent_from_id')) ? '' : $this->input->post('indent_from_id');
    $indent_post['indent.hospital_id'] = is_null($this->input->post('indent_hospital_id')) ? '' : $this->input->post('indent_hospital_id');
    $indent_post['indent.indent_date'] = is_null($this->input->post('indent_indent_date')) ? '' : $this->input->post('indent_indent_date');
    $indent_post['indent.indent_status'] = is_null($this->input->post('indent_indent_status')) ? '' : $this->input->post('indent_indent_status');
    $indent_post['indent.insert_datetime'] = is_null($this->input->post('indent_insert_datetime')) ? '' : $this->input->post('indent_insert_datetime');
    $indent_post['indent.insert_user_id'] = is_null($this->input->post('indent_insert_user_id')) ? '' : $this->input->post('indent_insert_user_id');
    $indent_post['indent.issue_date_time'] = is_null($this->input->post('indent_issue_date_time')) ? '' : $this->input->post('indent_issue_date_time');
    $indent_post['indent.issuer_id'] = is_null($this->input->post('indent_issuer_id')) ? '' : $this->input->post('indent_issuer_id');
    $indent_post['indent.orderby_id'] = is_null($this->input->post('indent_orderby_id')) ? '' : $this->input->post('indent_orderby_id');
    $indent_post['indent.to_id'] = is_null($this->input->post('indent_to_id')) ? '' : $this->input->post('indent_to_id');
    $indent_post['indent.update_datetime'] = is_null($this->input->post('indent_update_datetime')) ? '' : $this->input->post('indent_update_datetime');
    $indent_post['indent.update_user_id'] = is_null($this->input->post('indent_update_user_id')) ? '' : $this->input->post('indent_update_user_id');
    $this->session->set_userdata('hospital.hospital_id', $indent_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $indent_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('indent.indent_id', $indent_post['indent.indent_id']);
    $this->db->update('indent', $indent_post, array('indent_id' => $indent_post['indent_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $indent_post);
  }
  function indent_delete() {
    $indent_delete['indent.approve_date_time'] = is_null($this->input->post('indent_approve_date_time')) ? '' : $this->input->post('indent_approve_date_time');
    $indent_delete['indent.approver_id'] = is_null($this->input->post('indent_approver_id')) ? '' : $this->input->post('indent_approver_id');
    $indent_delete['indent.from_id'] = is_null($this->input->post('indent_from_id')) ? '' : $this->input->post('indent_from_id');
    $indent_delete['indent.hospital_id'] = is_null($this->input->post('indent_hospital_id')) ? '' : $this->input->post('indent_hospital_id');
    $indent_delete['indent.indent_date'] = is_null($this->input->post('indent_indent_date')) ? '' : $this->input->post('indent_indent_date');
    $indent_delete['indent.indent_id'] = is_null($this->input->post('indent_indent_id')) ? '' : $this->input->post('indent_indent_id');
    $indent_delete['indent.indent_status'] = is_null($this->input->post('indent_indent_status')) ? '' : $this->input->post('indent_indent_status');
    $indent_delete['indent.insert_datetime'] = is_null($this->input->post('indent_insert_datetime')) ? '' : $this->input->post('indent_insert_datetime');
    $indent_delete['indent.insert_user_id'] = is_null($this->input->post('indent_insert_user_id')) ? '' : $this->input->post('indent_insert_user_id');
    $indent_delete['indent.issue_date_time'] = is_null($this->input->post('indent_issue_date_time')) ? '' : $this->input->post('indent_issue_date_time');
    $indent_delete['indent.issuer_id'] = is_null($this->input->post('indent_issuer_id')) ? '' : $this->input->post('indent_issuer_id');
    $indent_delete['indent.orderby_id'] = is_null($this->input->post('indent_orderby_id')) ? '' : $this->input->post('indent_orderby_id');
    $indent_delete['indent.to_id'] = is_null($this->input->post('indent_to_id')) ? '' : $this->input->post('indent_to_id');
    $indent_delete['indent.update_datetime'] = is_null($this->input->post('indent_update_datetime')) ? '' : $this->input->post('indent_update_datetime');
    $indent_delete['indent.update_user_id'] = is_null($this->input->post('indent_update_user_id')) ? '' : $this->input->post('indent_update_user_id');
    $this->db->delete('indent', array('indent_id' => $indent_delete['indent_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $indent_delete);
  }
  function indent_get_records($hospital_id,$hospital_id,$indent_id) {
    $indent_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $indent_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $indent_filters['indent.indent_id'] = $this->session->indent_indent_id;
    $indent_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $indent_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $indent_filters['indent.indent_id'] = $indent_indent_id;
    $indent_filters['indent.approve_date_time'] = is_null($this->input->post('indent_approve_date_time')) ? '' : $this->input->post('indent_approve_date_time');
    $indent_filters['indent.approver_id'] = is_null($this->input->post('indent_approver_id')) ? '' : $this->input->post('indent_approver_id');
    $indent_filters['indent.from_id'] = is_null($this->input->post('indent_from_id')) ? '' : $this->input->post('indent_from_id');
    $indent_filters['indent.hospital_id'] = is_null($this->input->post('indent_hospital_id')) ? '' : $this->input->post('indent_hospital_id');
    $indent_filters['indent.indent_date'] = is_null($this->input->post('indent_indent_date')) ? '' : $this->input->post('indent_indent_date');
    $indent_filters['indent.indent_status'] = is_null($this->input->post('indent_indent_status')) ? '' : $this->input->post('indent_indent_status');
    $indent_filters['indent.insert_datetime'] = is_null($this->input->post('indent_insert_datetime')) ? '' : $this->input->post('indent_insert_datetime');
    $indent_filters['indent.insert_user_id'] = is_null($this->input->post('indent_insert_user_id')) ? '' : $this->input->post('indent_insert_user_id');
    $indent_filters['indent.issue_date_time'] = is_null($this->input->post('indent_issue_date_time')) ? '' : $this->input->post('indent_issue_date_time');
    $indent_filters['indent.issuer_id'] = is_null($this->input->post('indent_issuer_id')) ? '' : $this->input->post('indent_issuer_id');
    $indent_filters['indent.orderby_id'] = is_null($this->input->post('indent_orderby_id')) ? '' : $this->input->post('indent_orderby_id');
    $indent_filters['indent.to_id'] = is_null($this->input->post('indent_to_id')) ? '' : $this->input->post('indent_to_id');
    $indent_filters['indent.update_datetime'] = is_null($this->input->post('indent_update_datetime')) ? '' : $this->input->post('indent_update_datetime');
    $indent_filters['indent.update_user_id'] = is_null($this->input->post('indent_update_user_id')) ? '' : $this->input->post('indent_update_user_id');
    $this->session->set_userdata('hospital.hospital_id', $indent_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $indent_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('indent.indent_id', $indent_filters['indent.indent_id']);
    $this->db->select('hospital.hospital_id AS indent_hospital_id, staff_previous_hospital.hospital_id AS indent_hospital_id,
    indent.approve_date_time AS indent_approve_date_time, indent.approver_id AS indent_approver_id,
    indent.from_id AS indent_from_id, indent.hospital_id AS indent_hospital_id,
    indent.indent_date AS indent_indent_date, indent.indent_id AS indent_indent_id,
    indent.indent_status AS indent_indent_status, indent.insert_datetime AS indent_insert_datetime,
    indent.insert_user_id AS indent_insert_user_id, indent.issue_date_time AS indent_issue_date_time,
    indent.issuer_id AS indent_issuer_id, indent.orderby_id AS indent_orderby_id,
    indent.to_id AS indent_to_id, indent.update_datetime AS indent_update_datetime,
    indent.update_user_id AS indent_update_user_id')->from('indent');
    $this->db->join('hospital', 'indent.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'indent.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($indent_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $indent_filters);
  }
}