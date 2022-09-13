<?php class Audiology_model extends CI_Model {
  function audiology_create() {
    $audiology_post = [];
    $audiology_post['staff.staff_id'] = $this->session->staff_staff_id;
    $audiology_post['staff.staff_id'] = $staff_staff_id;
    $audiology_post['aud_test_id'] = is_null($this->input->post('aud_test_id')) ? '' : $this->input->post('aud_test_id');
    $audiology_post['date_of_test'] = is_null($this->input->post('date_of_test')) ? '' : $this->input->post('date_of_test');
    $audiology_post['type_of_test'] = is_null($this->input->post('type_of_test')) ? '' : $this->input->post('type_of_test');
    $audiology_post['ip_no'] = is_null($this->input->post('ip_no')) ? '' : $this->input->post('ip_no');
    $audiology_post['test_no'] = is_null($this->input->post('test_no')) ? '' : $this->input->post('test_no');
    $audiology_post['oael_outcome'] = is_null($this->input->post('oael_outcome')) ? '' : $this->input->post('oael_outcome');
    $audiology_post['oaer_outcome'] = is_null($this->input->post('oaer_outcome')) ? '' : $this->input->post('oaer_outcome');
    $audiology_post['remarks'] = is_null($this->input->post('remarks')) ? '' : $this->input->post('remarks');
    $audiology_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $this->session->set_userdata('staff.staff_id', $audiology_post['staff.staff_id']);
    $this->db->insert('audiology', $audiology_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $audiology_post);
  }
  function audiology_update() {
    $audiology_post['staff.staff_id'] = $this->session->staff_staff_id;
    $audiology_post['audiology.aud_test_id'] = $this->session->audiology_aud_test_id;
    $audiology_post['staff.staff_id'] = $staff_staff_id;
    $audiology_post['audiology.aud_test_id'] = $audiology_aud_test_id;
    $audiology_post['audiology.date_of_test'] = is_null($this->input->post('audiology_date_of_test')) ? '' : $this->input->post('audiology_date_of_test');
    $audiology_post['audiology.type_of_test'] = is_null($this->input->post('audiology_type_of_test')) ? '' : $this->input->post('audiology_type_of_test');
    $audiology_post['audiology.ip_no'] = is_null($this->input->post('audiology_ip_no')) ? '' : $this->input->post('audiology_ip_no');
    $audiology_post['audiology.test_no'] = is_null($this->input->post('audiology_test_no')) ? '' : $this->input->post('audiology_test_no');
    $audiology_post['audiology.oael_outcome'] = is_null($this->input->post('audiology_oael_outcome')) ? '' : $this->input->post('audiology_oael_outcome');
    $audiology_post['audiology.oaer_outcome'] = is_null($this->input->post('audiology_oaer_outcome')) ? '' : $this->input->post('audiology_oaer_outcome');
    $audiology_post['audiology.remarks'] = is_null($this->input->post('audiology_remarks')) ? '' : $this->input->post('audiology_remarks');
    $audiology_post['audiology.staff_id'] = is_null($this->input->post('audiology_staff_id')) ? '' : $this->input->post('audiology_staff_id');
    $this->session->set_userdata('staff.staff_id', $audiology_post['staff.staff_id']);
    $this->session->set_userdata('audiology.aud_test_id', $audiology_post['audiology.aud_test_id']);
    $this->db->update('audiology', $audiology_post, array('aud_test_id' => $audiology_post['aud_test_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $audiology_post);
  }
  function audiology_delete() {
    $audiology_delete['audiology.aud_test_id'] = is_null($this->input->post('audiology_aud_test_id')) ? '' : $this->input->post('audiology_aud_test_id');
    $audiology_delete['audiology.date_of_test'] = is_null($this->input->post('audiology_date_of_test')) ? '' : $this->input->post('audiology_date_of_test');
    $audiology_delete['audiology.type_of_test'] = is_null($this->input->post('audiology_type_of_test')) ? '' : $this->input->post('audiology_type_of_test');
    $audiology_delete['audiology.ip_no'] = is_null($this->input->post('audiology_ip_no')) ? '' : $this->input->post('audiology_ip_no');
    $audiology_delete['audiology.test_no'] = is_null($this->input->post('audiology_test_no')) ? '' : $this->input->post('audiology_test_no');
    $audiology_delete['audiology.oael_outcome'] = is_null($this->input->post('audiology_oael_outcome')) ? '' : $this->input->post('audiology_oael_outcome');
    $audiology_delete['audiology.oaer_outcome'] = is_null($this->input->post('audiology_oaer_outcome')) ? '' : $this->input->post('audiology_oaer_outcome');
    $audiology_delete['audiology.remarks'] = is_null($this->input->post('audiology_remarks')) ? '' : $this->input->post('audiology_remarks');
    $audiology_delete['audiology.staff_id'] = is_null($this->input->post('audiology_staff_id')) ? '' : $this->input->post('audiology_staff_id');
    $this->db->delete('audiology', array('aud_test_id' => $audiology_delete['aud_test_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $audiology_delete);
  }
  function audiology_get_records() {
    $audiology_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $audiology_filters['audiology.aud_test_id'] = $this->session->audiology_aud_test_id;
    $audiology_filters['staff.staff_id'] = $staff_staff_id;
    $audiology_filters['audiology.aud_test_id'] = $audiology_aud_test_id;
    $audiology_filters['audiology.date_of_test'] = is_null($this->input->post('audiology_date_of_test')) ? '' : $this->input->post('audiology_date_of_test');
    $audiology_filters['audiology.type_of_test'] = is_null($this->input->post('audiology_type_of_test')) ? '' : $this->input->post('audiology_type_of_test');
    $audiology_filters['audiology.ip_no'] = is_null($this->input->post('audiology_ip_no')) ? '' : $this->input->post('audiology_ip_no');
    $audiology_filters['audiology.test_no'] = is_null($this->input->post('audiology_test_no')) ? '' : $this->input->post('audiology_test_no');
    $audiology_filters['audiology.oael_outcome'] = is_null($this->input->post('audiology_oael_outcome')) ? '' : $this->input->post('audiology_oael_outcome');
    $audiology_filters['audiology.oaer_outcome'] = is_null($this->input->post('audiology_oaer_outcome')) ? '' : $this->input->post('audiology_oaer_outcome');
    $audiology_filters['audiology.remarks'] = is_null($this->input->post('audiology_remarks')) ? '' : $this->input->post('audiology_remarks');
    $audiology_filters['audiology.staff_id'] = is_null($this->input->post('audiology_staff_id')) ? '' : $this->input->post('audiology_staff_id');
    $this->session->set_userdata('staff.staff_id', $audiology_filters['staff.staff_id']);
    $this->session->set_userdata('audiology.aud_test_id', $audiology_filters['audiology.aud_test_id']);
    $this->db->select('staff.staff_id AS audiology_staff_id, audiology.aud_test_id AS audiology_aud_test_id,
    audiology.date_of_test AS audiology_date_of_test, audiology.type_of_test AS audiology_type_of_test,
    audiology.ip_no AS audiology_ip_no, audiology.test_no AS audiology_test_no,
    audiology.oael_outcome AS audiology_oael_outcome, audiology.oaer_outcome AS audiology_oaer_outcome,
    audiology.remarks AS audiology_remarks, audiology.staff_id AS audiology_staff_id')->from('audiology');
    $this->db->join('staff', 'audiology.staff_id = staff.staff_id', 'left');
    $this->db->where($audiology_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $audiology_filters);
  }
}