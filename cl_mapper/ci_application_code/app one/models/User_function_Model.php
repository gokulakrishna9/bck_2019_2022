<?php class User_function_model extends CI_Model {
  function user_function_create() {
    $user_function_post = [];
    $user_function_post['description'] = is_null($this->input->post('description')) ? '' : $this->input->post('description');
    $user_function_post['user_function'] = is_null($this->input->post('user_function')) ? '' : $this->input->post('user_function');
    $user_function_post['user_function_display'] = is_null($this->input->post('user_function_display')) ? '' : $this->input->post('user_function_display');
    $user_function_post['user_function_id'] = is_null($this->input->post('user_function_id')) ? '' : $this->input->post('user_function_id');
    $this->db->insert('user_function', $user_function_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $user_function_post);
  }
  function user_function_update($user_function_id) {
    $user_function_post['user_function.user_function_id'] = $this->session->user_function_user_function_id;
    $user_function_post['user_function.user_function_id'] = $user_function_user_function_id;
    $user_function_post['user_function.description'] = is_null($this->input->post('user_function_description')) ? '' : $this->input->post('user_function_description');
    $user_function_post['user_function.user_function'] = is_null($this->input->post('user_function_user_function')) ? '' : $this->input->post('user_function_user_function');
    $user_function_post['user_function.user_function_display'] = is_null($this->input->post('user_function_user_function_display')) ? '' : $this->input->post('user_function_user_function_display');
    $this->session->set_userdata('user_function.user_function_id', $user_function_post['user_function.user_function_id']);
    $this->db->update('user_function', $user_function_post, array('user_function_id' => $user_function_post['user_function_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $user_function_post);
  }
  function user_function_delete() {
    $user_function_delete['user_function.description'] = is_null($this->input->post('user_function_description')) ? '' : $this->input->post('user_function_description');
    $user_function_delete['user_function.user_function'] = is_null($this->input->post('user_function_user_function')) ? '' : $this->input->post('user_function_user_function');
    $user_function_delete['user_function.user_function_display'] = is_null($this->input->post('user_function_user_function_display')) ? '' : $this->input->post('user_function_user_function_display');
    $user_function_delete['user_function.user_function_id'] = is_null($this->input->post('user_function_user_function_id')) ? '' : $this->input->post('user_function_user_function_id');
    $this->db->delete('user_function', array('user_function_id' => $user_function_delete['user_function_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $user_function_delete);
  }
  function user_function_get_records($user_function_id) {
    $user_function_filters['user_function.user_function_id'] = $this->session->user_function_user_function_id;
    $user_function_filters['user_function.user_function_id'] = $user_function_user_function_id;
    $user_function_filters['user_function.description'] = is_null($this->input->post('user_function_description')) ? '' : $this->input->post('user_function_description');
    $user_function_filters['user_function.user_function'] = is_null($this->input->post('user_function_user_function')) ? '' : $this->input->post('user_function_user_function');
    $user_function_filters['user_function.user_function_display'] = is_null($this->input->post('user_function_user_function_display')) ? '' : $this->input->post('user_function_user_function_display');
    $this->session->set_userdata('user_function.user_function_id', $user_function_filters['user_function.user_function_id']);
    $this->db->select('user_function.description AS user_function_description, user_function.user_function AS user_function_user_function,
    user_function.user_function_display AS user_function_user_function_display, user_function.user_function_id AS user_function_user_function_id')->from('user_function');
    $this->db->where($user_function_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $user_function_filters);
  }
}