<?php class User_function_link_model extends CI_Model {
  function user_function_link_create() {
    $user_function_link_post = [];
    $user_function_link_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $user_function_link_post['user.user_id'] = $this->session->user_user_id;
    $user_function_link_post['bb_user.user_id'] = $bb_user_user_id;
    $user_function_link_post['user.user_id'] = $user_user_id;
    $user_function_link_post['link_id'] = is_null($this->input->post('link_id')) ? '' : $this->input->post('link_id');
    $user_function_link_post['user_id'] = is_null($this->input->post('user_id')) ? '' : $this->input->post('user_id');
    $user_function_link_post['function_id'] = is_null($this->input->post('function_id')) ? '' : $this->input->post('function_id');
    $user_function_link_post['add'] = is_null($this->input->post('add')) ? '' : $this->input->post('add');
    $user_function_link_post['edit'] = is_null($this->input->post('edit')) ? '' : $this->input->post('edit');
    $user_function_link_post['view'] = is_null($this->input->post('view')) ? '' : $this->input->post('view');
    $user_function_link_post['active'] = is_null($this->input->post('active')) ? '' : $this->input->post('active');
    $this->session->set_userdata('bb_user.user_id', $user_function_link_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $user_function_link_post['user.user_id']);
    $this->db->insert('user_function_link', $user_function_link_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $user_function_link_post);
  }
  function user_function_link_update() {
    $user_function_link_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $user_function_link_post['user.user_id'] = $this->session->user_user_id;
    $user_function_link_post['user_function_link.link_id'] = $this->session->user_function_link_link_id;
    $user_function_link_post['bb_user.user_id'] = $bb_user_user_id;
    $user_function_link_post['user.user_id'] = $user_user_id;
    $user_function_link_post['user_function_link.link_id'] = $user_function_link_link_id;
    $user_function_link_post['user_function_link.user_id'] = is_null($this->input->post('user_function_link_user_id')) ? '' : $this->input->post('user_function_link_user_id');
    $user_function_link_post['user_function_link.function_id'] = is_null($this->input->post('user_function_link_function_id')) ? '' : $this->input->post('user_function_link_function_id');
    $user_function_link_post['user_function_link.add'] = is_null($this->input->post('user_function_link_add')) ? '' : $this->input->post('user_function_link_add');
    $user_function_link_post['user_function_link.edit'] = is_null($this->input->post('user_function_link_edit')) ? '' : $this->input->post('user_function_link_edit');
    $user_function_link_post['user_function_link.view'] = is_null($this->input->post('user_function_link_view')) ? '' : $this->input->post('user_function_link_view');
    $user_function_link_post['user_function_link.active'] = is_null($this->input->post('user_function_link_active')) ? '' : $this->input->post('user_function_link_active');
    $this->session->set_userdata('bb_user.user_id', $user_function_link_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $user_function_link_post['user.user_id']);
    $this->session->set_userdata('user_function_link.link_id', $user_function_link_post['user_function_link.link_id']);
    $this->db->update('user_function_link', $user_function_link_post, array('link_id' => $user_function_link_post['link_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $user_function_link_post);
  }
  function user_function_link_delete() {
    $user_function_link_delete['user_function_link.link_id'] = is_null($this->input->post('user_function_link_link_id')) ? '' : $this->input->post('user_function_link_link_id');
    $user_function_link_delete['user_function_link.user_id'] = is_null($this->input->post('user_function_link_user_id')) ? '' : $this->input->post('user_function_link_user_id');
    $user_function_link_delete['user_function_link.function_id'] = is_null($this->input->post('user_function_link_function_id')) ? '' : $this->input->post('user_function_link_function_id');
    $user_function_link_delete['user_function_link.add'] = is_null($this->input->post('user_function_link_add')) ? '' : $this->input->post('user_function_link_add');
    $user_function_link_delete['user_function_link.edit'] = is_null($this->input->post('user_function_link_edit')) ? '' : $this->input->post('user_function_link_edit');
    $user_function_link_delete['user_function_link.view'] = is_null($this->input->post('user_function_link_view')) ? '' : $this->input->post('user_function_link_view');
    $user_function_link_delete['user_function_link.active'] = is_null($this->input->post('user_function_link_active')) ? '' : $this->input->post('user_function_link_active');
    $this->db->delete('user_function_link', array('link_id' => $user_function_link_delete['link_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $user_function_link_delete);
  }
  function user_function_link_get_records() {
    $user_function_link_filters['bb_user.user_id'] = $this->session->bb_user_user_id;
    $user_function_link_filters['user.user_id'] = $this->session->user_user_id;
    $user_function_link_filters['user_function_link.link_id'] = $this->session->user_function_link_link_id;
    $user_function_link_filters['bb_user.user_id'] = $bb_user_user_id;
    $user_function_link_filters['user.user_id'] = $user_user_id;
    $user_function_link_filters['user_function_link.link_id'] = $user_function_link_link_id;
    $user_function_link_filters['user_function_link.user_id'] = is_null($this->input->post('user_function_link_user_id')) ? '' : $this->input->post('user_function_link_user_id');
    $user_function_link_filters['user_function_link.function_id'] = is_null($this->input->post('user_function_link_function_id')) ? '' : $this->input->post('user_function_link_function_id');
    $user_function_link_filters['user_function_link.add'] = is_null($this->input->post('user_function_link_add')) ? '' : $this->input->post('user_function_link_add');
    $user_function_link_filters['user_function_link.edit'] = is_null($this->input->post('user_function_link_edit')) ? '' : $this->input->post('user_function_link_edit');
    $user_function_link_filters['user_function_link.view'] = is_null($this->input->post('user_function_link_view')) ? '' : $this->input->post('user_function_link_view');
    $user_function_link_filters['user_function_link.active'] = is_null($this->input->post('user_function_link_active')) ? '' : $this->input->post('user_function_link_active');
    $this->session->set_userdata('bb_user.user_id', $user_function_link_filters['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $user_function_link_filters['user.user_id']);
    $this->session->set_userdata('user_function_link.link_id', $user_function_link_filters['user_function_link.link_id']);
    $this->db->select('bb_user.user_id AS user_function_link_user_id, user.user_id AS user_function_link_user_id,
    user_function_link.link_id AS user_function_link_link_id, user_function_link.user_id AS user_function_link_user_id,
    user_function_link.function_id AS user_function_link_function_id, user_function_link.add AS user_function_link_add,
    user_function_link.edit AS user_function_link_edit, user_function_link.view AS user_function_link_view,
    user_function_link.active AS user_function_link_active')->from('user_function_link');
    $this->db->join('bb_user', 'user_function_link.user_id = bb_user.user_id', 'left');
    $this->db->join('user', 'user_function_link.user_id = user.user_id', 'left');
    $this->db->where($user_function_link_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $user_function_link_filters);
  }
}