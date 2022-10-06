<?php class User_model extends CI_Model {
  function user_create($staff_staff_id) {
    $user_post = [];
    $user_post['staff.staff_id'] = $this->session->staff_staff_id;
    $user_post['staff.staff_id'] = $staff_staff_id;
    $user_post['password'] = is_null($this->input->post('password')) ? '' : $this->input->post('password');
    $user_post['past_login_date'] = is_null($this->input->post('past_login_date')) ? '' : $this->input->post('past_login_date');
    $user_post['past_login_time'] = is_null($this->input->post('past_login_time')) ? '' : $this->input->post('past_login_time');
    $user_post['present_login_date'] = is_null($this->input->post('present_login_date')) ? '' : $this->input->post('present_login_date');
    $user_post['present_login_time'] = is_null($this->input->post('present_login_time')) ? '' : $this->input->post('present_login_time');
    $user_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $user_post['temp_user_id'] = is_null($this->input->post('temp_user_id')) ? '' : $this->input->post('temp_user_id');
    $user_post['user_id'] = is_null($this->input->post('user_id')) ? '' : $this->input->post('user_id');
    $user_post['username'] = is_null($this->input->post('username')) ? '' : $this->input->post('username');
    $this->session->set_userdata('staff.staff_id', $user_post['staff.staff_id']);
    $this->db->insert('user', $user_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $user_post);
  }
  function user_update($staff_id,$user_id) {
    $user_post['staff.staff_id'] = $this->session->staff_staff_id;
    $user_post['user.user_id'] = $this->session->user_user_id;
    $user_post['staff.staff_id'] = $staff_staff_id;
    $user_post['user.user_id'] = $user_user_id;
    $user_post['user.password'] = is_null($this->input->post('user_password')) ? '' : $this->input->post('user_password');
    $user_post['user.past_login_date'] = is_null($this->input->post('user_past_login_date')) ? '' : $this->input->post('user_past_login_date');
    $user_post['user.past_login_time'] = is_null($this->input->post('user_past_login_time')) ? '' : $this->input->post('user_past_login_time');
    $user_post['user.present_login_date'] = is_null($this->input->post('user_present_login_date')) ? '' : $this->input->post('user_present_login_date');
    $user_post['user.present_login_time'] = is_null($this->input->post('user_present_login_time')) ? '' : $this->input->post('user_present_login_time');
    $user_post['user.staff_id'] = is_null($this->input->post('user_staff_id')) ? '' : $this->input->post('user_staff_id');
    $user_post['user.temp_user_id'] = is_null($this->input->post('user_temp_user_id')) ? '' : $this->input->post('user_temp_user_id');
    $user_post['user.username'] = is_null($this->input->post('user_username')) ? '' : $this->input->post('user_username');
    $this->session->set_userdata('staff.staff_id', $user_post['staff.staff_id']);
    $this->session->set_userdata('user.user_id', $user_post['user.user_id']);
    $this->db->update('user', $user_post, array('user_id' => $user_post['user_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $user_post);
  }
  function user_delete() {
    $user_delete['user.password'] = is_null($this->input->post('user_password')) ? '' : $this->input->post('user_password');
    $user_delete['user.past_login_date'] = is_null($this->input->post('user_past_login_date')) ? '' : $this->input->post('user_past_login_date');
    $user_delete['user.past_login_time'] = is_null($this->input->post('user_past_login_time')) ? '' : $this->input->post('user_past_login_time');
    $user_delete['user.present_login_date'] = is_null($this->input->post('user_present_login_date')) ? '' : $this->input->post('user_present_login_date');
    $user_delete['user.present_login_time'] = is_null($this->input->post('user_present_login_time')) ? '' : $this->input->post('user_present_login_time');
    $user_delete['user.staff_id'] = is_null($this->input->post('user_staff_id')) ? '' : $this->input->post('user_staff_id');
    $user_delete['user.temp_user_id'] = is_null($this->input->post('user_temp_user_id')) ? '' : $this->input->post('user_temp_user_id');
    $user_delete['user.user_id'] = is_null($this->input->post('user_user_id')) ? '' : $this->input->post('user_user_id');
    $user_delete['user.username'] = is_null($this->input->post('user_username')) ? '' : $this->input->post('user_username');
    $this->db->delete('user', array('user_id' => $user_delete['user_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $user_delete);
  }
  function user_get_records($staff_id,$user_id) {
    $user_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $user_filters['user.user_id'] = $this->session->user_user_id;
    $user_filters['staff.staff_id'] = $staff_staff_id;
    $user_filters['user.user_id'] = $user_user_id;
    $user_filters['user.password'] = is_null($this->input->post('user_password')) ? '' : $this->input->post('user_password');
    $user_filters['user.past_login_date'] = is_null($this->input->post('user_past_login_date')) ? '' : $this->input->post('user_past_login_date');
    $user_filters['user.past_login_time'] = is_null($this->input->post('user_past_login_time')) ? '' : $this->input->post('user_past_login_time');
    $user_filters['user.present_login_date'] = is_null($this->input->post('user_present_login_date')) ? '' : $this->input->post('user_present_login_date');
    $user_filters['user.present_login_time'] = is_null($this->input->post('user_present_login_time')) ? '' : $this->input->post('user_present_login_time');
    $user_filters['user.staff_id'] = is_null($this->input->post('user_staff_id')) ? '' : $this->input->post('user_staff_id');
    $user_filters['user.temp_user_id'] = is_null($this->input->post('user_temp_user_id')) ? '' : $this->input->post('user_temp_user_id');
    $user_filters['user.username'] = is_null($this->input->post('user_username')) ? '' : $this->input->post('user_username');
    $this->session->set_userdata('staff.staff_id', $user_filters['staff.staff_id']);
    $this->session->set_userdata('user.user_id', $user_filters['user.user_id']);
    $this->db->select('staff.staff_id AS user_staff_id, user.password AS user_password,
    user.past_login_date AS user_past_login_date, user.past_login_time AS user_past_login_time,
    user.present_login_date AS user_present_login_date, user.present_login_time AS user_present_login_time,
    user.staff_id AS user_staff_id, user.temp_user_id AS user_temp_user_id,
    user.user_id AS user_user_id, user.username AS user_username')->from('user');
    $this->db->join('staff', 'user.staff_id = staff.staff_id', 'left');
    $this->db->where($user_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $user_filters);
  }
}