<?php class User_department_link_model extends CI_Model {
  function user_department_link_create($department_department_id,$bb_user_user_id,$user_user_id) {
    $user_department_link_post = [];
    $user_department_link_post['department.department_id'] = $this->session->department_department_id;
    $user_department_link_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $user_department_link_post['user.user_id'] = $this->session->user_user_id;
    $user_department_link_post['department.department_id'] = $department_department_id;
    $user_department_link_post['bb_user.user_id'] = $bb_user_user_id;
    $user_department_link_post['user.user_id'] = $user_user_id;
    $user_department_link_post['department_id'] = is_null($this->input->post('department_id')) ? '' : $this->input->post('department_id');
    $user_department_link_post['link_id'] = is_null($this->input->post('link_id')) ? '' : $this->input->post('link_id');
    $user_department_link_post['user_id'] = is_null($this->input->post('user_id')) ? '' : $this->input->post('user_id');
    $this->session->set_userdata('department.department_id', $user_department_link_post['department.department_id']);
    $this->session->set_userdata('bb_user.user_id', $user_department_link_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $user_department_link_post['user.user_id']);
    $this->db->insert('user_department_link', $user_department_link_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $user_department_link_post);
  }
  function user_department_link_update($department_id,$user_id,$user_id,$link_id) {
    $user_department_link_post['department.department_id'] = $this->session->department_department_id;
    $user_department_link_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $user_department_link_post['user.user_id'] = $this->session->user_user_id;
    $user_department_link_post['user_department_link.link_id'] = $this->session->user_department_link_link_id;
    $user_department_link_post['department.department_id'] = $department_department_id;
    $user_department_link_post['bb_user.user_id'] = $bb_user_user_id;
    $user_department_link_post['user.user_id'] = $user_user_id;
    $user_department_link_post['user_department_link.link_id'] = $user_department_link_link_id;
    $user_department_link_post['user_department_link.department_id'] = is_null($this->input->post('user_department_link_department_id')) ? '' : $this->input->post('user_department_link_department_id');
    $user_department_link_post['user_department_link.user_id'] = is_null($this->input->post('user_department_link_user_id')) ? '' : $this->input->post('user_department_link_user_id');
    $this->session->set_userdata('department.department_id', $user_department_link_post['department.department_id']);
    $this->session->set_userdata('bb_user.user_id', $user_department_link_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $user_department_link_post['user.user_id']);
    $this->session->set_userdata('user_department_link.link_id', $user_department_link_post['user_department_link.link_id']);
    $this->db->update('user_department_link', $user_department_link_post, array('link_id' => $user_department_link_post['link_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $user_department_link_post);
  }
  function user_department_link_delete() {
    $user_department_link_delete['user_department_link.department_id'] = is_null($this->input->post('user_department_link_department_id')) ? '' : $this->input->post('user_department_link_department_id');
    $user_department_link_delete['user_department_link.link_id'] = is_null($this->input->post('user_department_link_link_id')) ? '' : $this->input->post('user_department_link_link_id');
    $user_department_link_delete['user_department_link.user_id'] = is_null($this->input->post('user_department_link_user_id')) ? '' : $this->input->post('user_department_link_user_id');
    $this->db->delete('user_department_link', array('link_id' => $user_department_link_delete['link_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $user_department_link_delete);
  }
  function user_department_link_get_records($department_id,$user_id,$user_id,$link_id) {
    $user_department_link_filters['department.department_id'] = $this->session->department_department_id;
    $user_department_link_filters['bb_user.user_id'] = $this->session->bb_user_user_id;
    $user_department_link_filters['user.user_id'] = $this->session->user_user_id;
    $user_department_link_filters['user_department_link.link_id'] = $this->session->user_department_link_link_id;
    $user_department_link_filters['department.department_id'] = $department_department_id;
    $user_department_link_filters['bb_user.user_id'] = $bb_user_user_id;
    $user_department_link_filters['user.user_id'] = $user_user_id;
    $user_department_link_filters['user_department_link.link_id'] = $user_department_link_link_id;
    $user_department_link_filters['user_department_link.department_id'] = is_null($this->input->post('user_department_link_department_id')) ? '' : $this->input->post('user_department_link_department_id');
    $user_department_link_filters['user_department_link.user_id'] = is_null($this->input->post('user_department_link_user_id')) ? '' : $this->input->post('user_department_link_user_id');
    $this->session->set_userdata('department.department_id', $user_department_link_filters['department.department_id']);
    $this->session->set_userdata('bb_user.user_id', $user_department_link_filters['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $user_department_link_filters['user.user_id']);
    $this->session->set_userdata('user_department_link.link_id', $user_department_link_filters['user_department_link.link_id']);
    $this->db->select('department.department_id AS user_department_link_department_id, bb_user.user_id AS user_department_link_user_id,
    user.user_id AS user_department_link_user_id, user_department_link.department_id AS user_department_link_department_id,
    user_department_link.link_id AS user_department_link_link_id, user_department_link.user_id AS user_department_link_user_id')->from('user_department_link');
    $this->db->join('department', 'user_department_link.department_id = department.department_id', 'left');
    $this->db->join('bb_user', 'user_department_link.user_id = bb_user.user_id', 'left');
    $this->db->join('user', 'user_department_link.user_id = user.user_id', 'left');
    $this->db->where($user_department_link_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $user_department_link_filters);
  }
}