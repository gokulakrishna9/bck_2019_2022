<?php class Internal_transfer_model extends CI_Model {
  function internal_transfer_create() {
    $internal_transfer_post = [];
    $internal_transfer_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $internal_transfer_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $internal_transfer_post['department.department_id'] = $this->session->department_department_id;
    $internal_transfer_post['area.area_id'] = $this->session->area_area_id;
    $internal_transfer_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $internal_transfer_post['user.user_id'] = $this->session->user_user_id;
    $internal_transfer_post['mlc.visit_id'] = $mlc_visit_id;
    $internal_transfer_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $internal_transfer_post['department.department_id'] = $department_department_id;
    $internal_transfer_post['area.area_id'] = $area_area_id;
    $internal_transfer_post['bb_user.user_id'] = $bb_user_user_id;
    $internal_transfer_post['user.user_id'] = $user_user_id;
    $internal_transfer_post['transfer_id'] = is_null($this->input->post('transfer_id')) ? '' : $this->input->post('transfer_id');
    $internal_transfer_post['visit_id'] = is_null($this->input->post('visit_id')) ? '' : $this->input->post('visit_id');
    $internal_transfer_post['department_id'] = is_null($this->input->post('department_id')) ? '' : $this->input->post('department_id');
    $internal_transfer_post['area_id'] = is_null($this->input->post('area_id')) ? '' : $this->input->post('area_id');
    $internal_transfer_post['transfer_date'] = is_null($this->input->post('transfer_date')) ? '' : $this->input->post('transfer_date');
    $internal_transfer_post['transfer_time'] = is_null($this->input->post('transfer_time')) ? '' : $this->input->post('transfer_time');
    $internal_transfer_post['timestamp'] = is_null($this->input->post('timestamp')) ? '' : $this->input->post('timestamp');
    $internal_transfer_post['user_id'] = is_null($this->input->post('user_id')) ? '' : $this->input->post('user_id');
    $this->session->set_userdata('mlc.visit_id', $internal_transfer_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $internal_transfer_post['patient_visit.visit_id']);
    $this->session->set_userdata('department.department_id', $internal_transfer_post['department.department_id']);
    $this->session->set_userdata('area.area_id', $internal_transfer_post['area.area_id']);
    $this->session->set_userdata('bb_user.user_id', $internal_transfer_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $internal_transfer_post['user.user_id']);
    $this->db->insert('internal_transfer', $internal_transfer_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $internal_transfer_post);
  }
  function internal_transfer_update() {
    $internal_transfer_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $internal_transfer_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $internal_transfer_post['department.department_id'] = $this->session->department_department_id;
    $internal_transfer_post['area.area_id'] = $this->session->area_area_id;
    $internal_transfer_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $internal_transfer_post['user.user_id'] = $this->session->user_user_id;
    $internal_transfer_post['internal_transfer.transfer_id'] = $this->session->internal_transfer_transfer_id;
    $internal_transfer_post['mlc.visit_id'] = $mlc_visit_id;
    $internal_transfer_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $internal_transfer_post['department.department_id'] = $department_department_id;
    $internal_transfer_post['area.area_id'] = $area_area_id;
    $internal_transfer_post['bb_user.user_id'] = $bb_user_user_id;
    $internal_transfer_post['user.user_id'] = $user_user_id;
    $internal_transfer_post['internal_transfer.transfer_id'] = $internal_transfer_transfer_id;
    $internal_transfer_post['internal_transfer.visit_id'] = is_null($this->input->post('internal_transfer_visit_id')) ? '' : $this->input->post('internal_transfer_visit_id');
    $internal_transfer_post['internal_transfer.department_id'] = is_null($this->input->post('internal_transfer_department_id')) ? '' : $this->input->post('internal_transfer_department_id');
    $internal_transfer_post['internal_transfer.area_id'] = is_null($this->input->post('internal_transfer_area_id')) ? '' : $this->input->post('internal_transfer_area_id');
    $internal_transfer_post['internal_transfer.transfer_date'] = is_null($this->input->post('internal_transfer_transfer_date')) ? '' : $this->input->post('internal_transfer_transfer_date');
    $internal_transfer_post['internal_transfer.transfer_time'] = is_null($this->input->post('internal_transfer_transfer_time')) ? '' : $this->input->post('internal_transfer_transfer_time');
    $internal_transfer_post['internal_transfer.timestamp'] = is_null($this->input->post('internal_transfer_timestamp')) ? '' : $this->input->post('internal_transfer_timestamp');
    $internal_transfer_post['internal_transfer.user_id'] = is_null($this->input->post('internal_transfer_user_id')) ? '' : $this->input->post('internal_transfer_user_id');
    $this->session->set_userdata('mlc.visit_id', $internal_transfer_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $internal_transfer_post['patient_visit.visit_id']);
    $this->session->set_userdata('department.department_id', $internal_transfer_post['department.department_id']);
    $this->session->set_userdata('area.area_id', $internal_transfer_post['area.area_id']);
    $this->session->set_userdata('bb_user.user_id', $internal_transfer_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $internal_transfer_post['user.user_id']);
    $this->session->set_userdata('internal_transfer.transfer_id', $internal_transfer_post['internal_transfer.transfer_id']);
    $this->db->update('internal_transfer', $internal_transfer_post, array('transfer_id' => $internal_transfer_post['transfer_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $internal_transfer_post);
  }
  function internal_transfer_delete() {
    $internal_transfer_delete['internal_transfer.transfer_id'] = is_null($this->input->post('internal_transfer_transfer_id')) ? '' : $this->input->post('internal_transfer_transfer_id');
    $internal_transfer_delete['internal_transfer.visit_id'] = is_null($this->input->post('internal_transfer_visit_id')) ? '' : $this->input->post('internal_transfer_visit_id');
    $internal_transfer_delete['internal_transfer.department_id'] = is_null($this->input->post('internal_transfer_department_id')) ? '' : $this->input->post('internal_transfer_department_id');
    $internal_transfer_delete['internal_transfer.area_id'] = is_null($this->input->post('internal_transfer_area_id')) ? '' : $this->input->post('internal_transfer_area_id');
    $internal_transfer_delete['internal_transfer.transfer_date'] = is_null($this->input->post('internal_transfer_transfer_date')) ? '' : $this->input->post('internal_transfer_transfer_date');
    $internal_transfer_delete['internal_transfer.transfer_time'] = is_null($this->input->post('internal_transfer_transfer_time')) ? '' : $this->input->post('internal_transfer_transfer_time');
    $internal_transfer_delete['internal_transfer.timestamp'] = is_null($this->input->post('internal_transfer_timestamp')) ? '' : $this->input->post('internal_transfer_timestamp');
    $internal_transfer_delete['internal_transfer.user_id'] = is_null($this->input->post('internal_transfer_user_id')) ? '' : $this->input->post('internal_transfer_user_id');
    $this->db->delete('internal_transfer', array('transfer_id' => $internal_transfer_delete['transfer_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $internal_transfer_delete);
  }
  function internal_transfer_get_records() {
    $internal_transfer_filters['mlc.visit_id'] = $this->session->mlc_visit_id;
    $internal_transfer_filters['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $internal_transfer_filters['department.department_id'] = $this->session->department_department_id;
    $internal_transfer_filters['area.area_id'] = $this->session->area_area_id;
    $internal_transfer_filters['bb_user.user_id'] = $this->session->bb_user_user_id;
    $internal_transfer_filters['user.user_id'] = $this->session->user_user_id;
    $internal_transfer_filters['internal_transfer.transfer_id'] = $this->session->internal_transfer_transfer_id;
    $internal_transfer_filters['mlc.visit_id'] = $mlc_visit_id;
    $internal_transfer_filters['patient_visit.visit_id'] = $patient_visit_visit_id;
    $internal_transfer_filters['department.department_id'] = $department_department_id;
    $internal_transfer_filters['area.area_id'] = $area_area_id;
    $internal_transfer_filters['bb_user.user_id'] = $bb_user_user_id;
    $internal_transfer_filters['user.user_id'] = $user_user_id;
    $internal_transfer_filters['internal_transfer.transfer_id'] = $internal_transfer_transfer_id;
    $internal_transfer_filters['internal_transfer.visit_id'] = is_null($this->input->post('internal_transfer_visit_id')) ? '' : $this->input->post('internal_transfer_visit_id');
    $internal_transfer_filters['internal_transfer.department_id'] = is_null($this->input->post('internal_transfer_department_id')) ? '' : $this->input->post('internal_transfer_department_id');
    $internal_transfer_filters['internal_transfer.area_id'] = is_null($this->input->post('internal_transfer_area_id')) ? '' : $this->input->post('internal_transfer_area_id');
    $internal_transfer_filters['internal_transfer.transfer_date'] = is_null($this->input->post('internal_transfer_transfer_date')) ? '' : $this->input->post('internal_transfer_transfer_date');
    $internal_transfer_filters['internal_transfer.transfer_time'] = is_null($this->input->post('internal_transfer_transfer_time')) ? '' : $this->input->post('internal_transfer_transfer_time');
    $internal_transfer_filters['internal_transfer.timestamp'] = is_null($this->input->post('internal_transfer_timestamp')) ? '' : $this->input->post('internal_transfer_timestamp');
    $internal_transfer_filters['internal_transfer.user_id'] = is_null($this->input->post('internal_transfer_user_id')) ? '' : $this->input->post('internal_transfer_user_id');
    $this->session->set_userdata('mlc.visit_id', $internal_transfer_filters['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $internal_transfer_filters['patient_visit.visit_id']);
    $this->session->set_userdata('department.department_id', $internal_transfer_filters['department.department_id']);
    $this->session->set_userdata('area.area_id', $internal_transfer_filters['area.area_id']);
    $this->session->set_userdata('bb_user.user_id', $internal_transfer_filters['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $internal_transfer_filters['user.user_id']);
    $this->session->set_userdata('internal_transfer.transfer_id', $internal_transfer_filters['internal_transfer.transfer_id']);
    $this->db->select('mlc.visit_id AS internal_transfer_visit_id, patient_visit.visit_id AS internal_transfer_visit_id,
    department.department_id AS internal_transfer_department_id, area.area_id AS internal_transfer_area_id,
    bb_user.user_id AS internal_transfer_user_id, user.user_id AS internal_transfer_user_id,
    internal_transfer.transfer_id AS internal_transfer_transfer_id, internal_transfer.visit_id AS internal_transfer_visit_id,
    internal_transfer.department_id AS internal_transfer_department_id, internal_transfer.area_id AS internal_transfer_area_id,
    internal_transfer.transfer_date AS internal_transfer_transfer_date, internal_transfer.transfer_time AS internal_transfer_transfer_time,
    internal_transfer.timestamp AS internal_transfer_timestamp, internal_transfer.user_id AS internal_transfer_user_id')->from('internal_transfer');
    $this->db->join('mlc', 'internal_transfer.visit_id = mlc.visit_id', 'left');
    $this->db->join('patient_visit', 'internal_transfer.visit_id = patient_visit.visit_id', 'left');
    $this->db->join('department', 'internal_transfer.department_id = department.department_id', 'left');
    $this->db->join('area', 'internal_transfer.area_id = area.area_id', 'left');
    $this->db->join('bb_user', 'internal_transfer.user_id = bb_user.user_id', 'left');
    $this->db->join('user', 'internal_transfer.user_id = user.user_id', 'left');
    $this->db->where($internal_transfer_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $internal_transfer_filters);
  }
}