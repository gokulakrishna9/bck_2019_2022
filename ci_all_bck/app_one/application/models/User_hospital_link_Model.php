<?php class User_hospital_link_model extends CI_Model {
  function user_hospital_link_create() {
    $user_hospital_link_post = [];
    $user_hospital_link_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $user_hospital_link_post['user.user_id'] = $this->session->user_user_id;
    $user_hospital_link_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $user_hospital_link_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $user_hospital_link_post['bb_user.user_id'] = $bb_user_user_id;
    $user_hospital_link_post['user.user_id'] = $user_user_id;
    $user_hospital_link_post['hospital.hospital_id'] = $hospital_hospital_id;
    $user_hospital_link_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $user_hospital_link_post['link_id'] = is_null($this->input->post('link_id')) ? '' : $this->input->post('link_id');
    $user_hospital_link_post['user_id'] = is_null($this->input->post('user_id')) ? '' : $this->input->post('user_id');
    $user_hospital_link_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $this->session->set_userdata('bb_user.user_id', $user_hospital_link_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $user_hospital_link_post['user.user_id']);
    $this->session->set_userdata('hospital.hospital_id', $user_hospital_link_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $user_hospital_link_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('user_hospital_link', $user_hospital_link_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $user_hospital_link_post);
  }
  function user_hospital_link_update() {
    $user_hospital_link_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $user_hospital_link_post['user.user_id'] = $this->session->user_user_id;
    $user_hospital_link_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $user_hospital_link_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $user_hospital_link_post['user_hospital_link.link_id'] = $this->session->user_hospital_link_link_id;
    $user_hospital_link_post['bb_user.user_id'] = $bb_user_user_id;
    $user_hospital_link_post['user.user_id'] = $user_user_id;
    $user_hospital_link_post['hospital.hospital_id'] = $hospital_hospital_id;
    $user_hospital_link_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $user_hospital_link_post['user_hospital_link.link_id'] = $user_hospital_link_link_id;
    $user_hospital_link_post['user_hospital_link.user_id'] = is_null($this->input->post('user_hospital_link_user_id')) ? '' : $this->input->post('user_hospital_link_user_id');
    $user_hospital_link_post['user_hospital_link.hospital_id'] = is_null($this->input->post('user_hospital_link_hospital_id')) ? '' : $this->input->post('user_hospital_link_hospital_id');
    $this->session->set_userdata('bb_user.user_id', $user_hospital_link_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $user_hospital_link_post['user.user_id']);
    $this->session->set_userdata('hospital.hospital_id', $user_hospital_link_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $user_hospital_link_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('user_hospital_link.link_id', $user_hospital_link_post['user_hospital_link.link_id']);
    $this->db->update('user_hospital_link', $user_hospital_link_post, array('link_id' => $user_hospital_link_post['link_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $user_hospital_link_post);
  }
  function user_hospital_link_delete() {
    $user_hospital_link_delete['user_hospital_link.link_id'] = is_null($this->input->post('user_hospital_link_link_id')) ? '' : $this->input->post('user_hospital_link_link_id');
    $user_hospital_link_delete['user_hospital_link.user_id'] = is_null($this->input->post('user_hospital_link_user_id')) ? '' : $this->input->post('user_hospital_link_user_id');
    $user_hospital_link_delete['user_hospital_link.hospital_id'] = is_null($this->input->post('user_hospital_link_hospital_id')) ? '' : $this->input->post('user_hospital_link_hospital_id');
    $this->db->delete('user_hospital_link', array('link_id' => $user_hospital_link_delete['link_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $user_hospital_link_delete);
  }
  function user_hospital_link_get_records() {
    $user_hospital_link_filters['bb_user.user_id'] = $this->session->bb_user_user_id;
    $user_hospital_link_filters['user.user_id'] = $this->session->user_user_id;
    $user_hospital_link_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $user_hospital_link_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $user_hospital_link_filters['user_hospital_link.link_id'] = $this->session->user_hospital_link_link_id;
    $user_hospital_link_filters['bb_user.user_id'] = $bb_user_user_id;
    $user_hospital_link_filters['user.user_id'] = $user_user_id;
    $user_hospital_link_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $user_hospital_link_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $user_hospital_link_filters['user_hospital_link.link_id'] = $user_hospital_link_link_id;
    $user_hospital_link_filters['user_hospital_link.user_id'] = is_null($this->input->post('user_hospital_link_user_id')) ? '' : $this->input->post('user_hospital_link_user_id');
    $user_hospital_link_filters['user_hospital_link.hospital_id'] = is_null($this->input->post('user_hospital_link_hospital_id')) ? '' : $this->input->post('user_hospital_link_hospital_id');
    $this->session->set_userdata('bb_user.user_id', $user_hospital_link_filters['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $user_hospital_link_filters['user.user_id']);
    $this->session->set_userdata('hospital.hospital_id', $user_hospital_link_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $user_hospital_link_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('user_hospital_link.link_id', $user_hospital_link_filters['user_hospital_link.link_id']);
    $this->db->select('bb_user.user_id AS user_hospital_link_user_id, user.user_id AS user_hospital_link_user_id,
    hospital.hospital_id AS user_hospital_link_hospital_id, staff_previous_hospital.hospital_id AS user_hospital_link_hospital_id,
    user_hospital_link.link_id AS user_hospital_link_link_id, user_hospital_link.user_id AS user_hospital_link_user_id,
    user_hospital_link.hospital_id AS user_hospital_link_hospital_id')->from('user_hospital_link');
    $this->db->join('bb_user', 'user_hospital_link.user_id = bb_user.user_id', 'left');
    $this->db->join('user', 'user_hospital_link.user_id = user.user_id', 'left');
    $this->db->join('hospital', 'user_hospital_link.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'user_hospital_link.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($user_hospital_link_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $user_hospital_link_filters);
  }
}