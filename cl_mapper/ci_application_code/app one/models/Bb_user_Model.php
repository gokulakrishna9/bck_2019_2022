<?php class Bb_user_model extends CI_Model {
  function bb_user_create($hospital_hospital_id,$staff_previous_hospital_hospital_id) {
    $bb_user_post = [];
    $bb_user_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_user_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_user_post['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_user_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_user_post['admin'] = is_null($this->input->post('admin')) ? '' : $this->input->post('admin');
    $bb_user_post['displayname'] = is_null($this->input->post('displayname')) ? '' : $this->input->post('displayname');
    $bb_user_post['examiner'] = is_null($this->input->post('examiner')) ? '' : $this->input->post('examiner');
    $bb_user_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $bb_user_post['issuer'] = is_null($this->input->post('issuer')) ? '' : $this->input->post('issuer');
    $bb_user_post['password'] = is_null($this->input->post('password')) ? '' : $this->input->post('password');
    $bb_user_post['registrar'] = is_null($this->input->post('registrar')) ? '' : $this->input->post('registrar');
    $bb_user_post['registration_date'] = is_null($this->input->post('registration_date')) ? '' : $this->input->post('registration_date');
    $bb_user_post['requester'] = is_null($this->input->post('requester')) ? '' : $this->input->post('requester');
    $bb_user_post['screener'] = is_null($this->input->post('screener')) ? '' : $this->input->post('screener');
    $bb_user_post['technician'] = is_null($this->input->post('technician')) ? '' : $this->input->post('technician');
    $bb_user_post['user_id'] = is_null($this->input->post('user_id')) ? '' : $this->input->post('user_id');
    $bb_user_post['username'] = is_null($this->input->post('username')) ? '' : $this->input->post('username');
    $this->session->set_userdata('hospital.hospital_id', $bb_user_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_user_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('bb_user', $bb_user_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $bb_user_post);
  }
  function bb_user_update($hospital_id,$hospital_id,$user_id) {
    $bb_user_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_user_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_user_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $bb_user_post['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_user_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_user_post['bb_user.user_id'] = $bb_user_user_id;
    $bb_user_post['bb_user.admin'] = is_null($this->input->post('bb_user_admin')) ? '' : $this->input->post('bb_user_admin');
    $bb_user_post['bb_user.displayname'] = is_null($this->input->post('bb_user_displayname')) ? '' : $this->input->post('bb_user_displayname');
    $bb_user_post['bb_user.examiner'] = is_null($this->input->post('bb_user_examiner')) ? '' : $this->input->post('bb_user_examiner');
    $bb_user_post['bb_user.hospital_id'] = is_null($this->input->post('bb_user_hospital_id')) ? '' : $this->input->post('bb_user_hospital_id');
    $bb_user_post['bb_user.issuer'] = is_null($this->input->post('bb_user_issuer')) ? '' : $this->input->post('bb_user_issuer');
    $bb_user_post['bb_user.password'] = is_null($this->input->post('bb_user_password')) ? '' : $this->input->post('bb_user_password');
    $bb_user_post['bb_user.registrar'] = is_null($this->input->post('bb_user_registrar')) ? '' : $this->input->post('bb_user_registrar');
    $bb_user_post['bb_user.registration_date'] = is_null($this->input->post('bb_user_registration_date')) ? '' : $this->input->post('bb_user_registration_date');
    $bb_user_post['bb_user.requester'] = is_null($this->input->post('bb_user_requester')) ? '' : $this->input->post('bb_user_requester');
    $bb_user_post['bb_user.screener'] = is_null($this->input->post('bb_user_screener')) ? '' : $this->input->post('bb_user_screener');
    $bb_user_post['bb_user.technician'] = is_null($this->input->post('bb_user_technician')) ? '' : $this->input->post('bb_user_technician');
    $bb_user_post['bb_user.username'] = is_null($this->input->post('bb_user_username')) ? '' : $this->input->post('bb_user_username');
    $this->session->set_userdata('hospital.hospital_id', $bb_user_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_user_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_user.user_id', $bb_user_post['bb_user.user_id']);
    $this->db->update('bb_user', $bb_user_post, array('user_id' => $bb_user_post['user_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_user_post);
  }
  function bb_user_delete() {
    $bb_user_delete['bb_user.admin'] = is_null($this->input->post('bb_user_admin')) ? '' : $this->input->post('bb_user_admin');
    $bb_user_delete['bb_user.displayname'] = is_null($this->input->post('bb_user_displayname')) ? '' : $this->input->post('bb_user_displayname');
    $bb_user_delete['bb_user.examiner'] = is_null($this->input->post('bb_user_examiner')) ? '' : $this->input->post('bb_user_examiner');
    $bb_user_delete['bb_user.hospital_id'] = is_null($this->input->post('bb_user_hospital_id')) ? '' : $this->input->post('bb_user_hospital_id');
    $bb_user_delete['bb_user.issuer'] = is_null($this->input->post('bb_user_issuer')) ? '' : $this->input->post('bb_user_issuer');
    $bb_user_delete['bb_user.password'] = is_null($this->input->post('bb_user_password')) ? '' : $this->input->post('bb_user_password');
    $bb_user_delete['bb_user.registrar'] = is_null($this->input->post('bb_user_registrar')) ? '' : $this->input->post('bb_user_registrar');
    $bb_user_delete['bb_user.registration_date'] = is_null($this->input->post('bb_user_registration_date')) ? '' : $this->input->post('bb_user_registration_date');
    $bb_user_delete['bb_user.requester'] = is_null($this->input->post('bb_user_requester')) ? '' : $this->input->post('bb_user_requester');
    $bb_user_delete['bb_user.screener'] = is_null($this->input->post('bb_user_screener')) ? '' : $this->input->post('bb_user_screener');
    $bb_user_delete['bb_user.technician'] = is_null($this->input->post('bb_user_technician')) ? '' : $this->input->post('bb_user_technician');
    $bb_user_delete['bb_user.user_id'] = is_null($this->input->post('bb_user_user_id')) ? '' : $this->input->post('bb_user_user_id');
    $bb_user_delete['bb_user.username'] = is_null($this->input->post('bb_user_username')) ? '' : $this->input->post('bb_user_username');
    $this->db->delete('bb_user', array('user_id' => $bb_user_delete['user_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_user_delete);
  }
  function bb_user_get_records($hospital_id,$hospital_id,$user_id) {
    $bb_user_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $bb_user_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $bb_user_filters['bb_user.user_id'] = $this->session->bb_user_user_id;
    $bb_user_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $bb_user_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $bb_user_filters['bb_user.user_id'] = $bb_user_user_id;
    $bb_user_filters['bb_user.admin'] = is_null($this->input->post('bb_user_admin')) ? '' : $this->input->post('bb_user_admin');
    $bb_user_filters['bb_user.displayname'] = is_null($this->input->post('bb_user_displayname')) ? '' : $this->input->post('bb_user_displayname');
    $bb_user_filters['bb_user.examiner'] = is_null($this->input->post('bb_user_examiner')) ? '' : $this->input->post('bb_user_examiner');
    $bb_user_filters['bb_user.hospital_id'] = is_null($this->input->post('bb_user_hospital_id')) ? '' : $this->input->post('bb_user_hospital_id');
    $bb_user_filters['bb_user.issuer'] = is_null($this->input->post('bb_user_issuer')) ? '' : $this->input->post('bb_user_issuer');
    $bb_user_filters['bb_user.password'] = is_null($this->input->post('bb_user_password')) ? '' : $this->input->post('bb_user_password');
    $bb_user_filters['bb_user.registrar'] = is_null($this->input->post('bb_user_registrar')) ? '' : $this->input->post('bb_user_registrar');
    $bb_user_filters['bb_user.registration_date'] = is_null($this->input->post('bb_user_registration_date')) ? '' : $this->input->post('bb_user_registration_date');
    $bb_user_filters['bb_user.requester'] = is_null($this->input->post('bb_user_requester')) ? '' : $this->input->post('bb_user_requester');
    $bb_user_filters['bb_user.screener'] = is_null($this->input->post('bb_user_screener')) ? '' : $this->input->post('bb_user_screener');
    $bb_user_filters['bb_user.technician'] = is_null($this->input->post('bb_user_technician')) ? '' : $this->input->post('bb_user_technician');
    $bb_user_filters['bb_user.username'] = is_null($this->input->post('bb_user_username')) ? '' : $this->input->post('bb_user_username');
    $this->session->set_userdata('hospital.hospital_id', $bb_user_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $bb_user_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('bb_user.user_id', $bb_user_filters['bb_user.user_id']);
    $this->db->select('hospital.hospital_id AS bb_user_hospital_id, staff_previous_hospital.hospital_id AS bb_user_hospital_id,
    bb_user.admin AS bb_user_admin, bb_user.displayname AS bb_user_displayname,
    bb_user.examiner AS bb_user_examiner, bb_user.hospital_id AS bb_user_hospital_id,
    bb_user.issuer AS bb_user_issuer, bb_user.password AS bb_user_password,
    bb_user.registrar AS bb_user_registrar, bb_user.registration_date AS bb_user_registration_date,
    bb_user.requester AS bb_user_requester, bb_user.screener AS bb_user_screener,
    bb_user.technician AS bb_user_technician, bb_user.user_id AS bb_user_user_id,
    bb_user.username AS bb_user_username')->from('bb_user');
    $this->db->join('hospital', 'bb_user.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'bb_user.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($bb_user_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $bb_user_filters);
  }
}