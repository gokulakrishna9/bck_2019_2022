<?php class Activity_done_model extends CI_Model {
  function activity_done_create() {
    $activity_done_post = [];
    $activity_done_post['facility_activity.activity_id'] = $this->session->facility_activity_activity_id;
    $activity_done_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $activity_done_post['user.user_id'] = $this->session->user_user_id;
    $activity_done_post['facility_activity.activity_id'] = $facility_activity_activity_id;
    $activity_done_post['bb_user.user_id'] = $bb_user_user_id;
    $activity_done_post['user.user_id'] = $user_user_id;
    $activity_done_post['activity_done_id'] = is_null($this->input->post('activity_done_id')) ? '' : $this->input->post('activity_done_id');
    $activity_done_post['activity_id'] = is_null($this->input->post('activity_id')) ? '' : $this->input->post('activity_id');
    $activity_done_post['score'] = is_null($this->input->post('score')) ? '' : $this->input->post('score');
    $activity_done_post['comments'] = is_null($this->input->post('comments')) ? '' : $this->input->post('comments');
    $activity_done_post['date'] = is_null($this->input->post('date')) ? '' : $this->input->post('date');
    $activity_done_post['time'] = is_null($this->input->post('time')) ? '' : $this->input->post('time');
    $activity_done_post['user_id'] = is_null($this->input->post('user_id')) ? '' : $this->input->post('user_id');
    $activity_done_post['datetime'] = is_null($this->input->post('datetime')) ? '' : $this->input->post('datetime');
    $this->session->set_userdata('facility_activity.activity_id', $activity_done_post['facility_activity.activity_id']);
    $this->session->set_userdata('bb_user.user_id', $activity_done_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $activity_done_post['user.user_id']);
    $this->db->insert('activity_done', $activity_done_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $activity_done_post);
  }
  function activity_done_update() {
    $activity_done_post['facility_activity.activity_id'] = $this->session->facility_activity_activity_id;
    $activity_done_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $activity_done_post['user.user_id'] = $this->session->user_user_id;
    $activity_done_post['activity_done.activity_done_id'] = $this->session->activity_done_activity_done_id;
    $activity_done_post['facility_activity.activity_id'] = $facility_activity_activity_id;
    $activity_done_post['bb_user.user_id'] = $bb_user_user_id;
    $activity_done_post['user.user_id'] = $user_user_id;
    $activity_done_post['activity_done.activity_done_id'] = $activity_done_activity_done_id;
    $activity_done_post['activity_done.activity_id'] = is_null($this->input->post('activity_done_activity_id')) ? '' : $this->input->post('activity_done_activity_id');
    $activity_done_post['activity_done.score'] = is_null($this->input->post('activity_done_score')) ? '' : $this->input->post('activity_done_score');
    $activity_done_post['activity_done.comments'] = is_null($this->input->post('activity_done_comments')) ? '' : $this->input->post('activity_done_comments');
    $activity_done_post['activity_done.date'] = is_null($this->input->post('activity_done_date')) ? '' : $this->input->post('activity_done_date');
    $activity_done_post['activity_done.time'] = is_null($this->input->post('activity_done_time')) ? '' : $this->input->post('activity_done_time');
    $activity_done_post['activity_done.user_id'] = is_null($this->input->post('activity_done_user_id')) ? '' : $this->input->post('activity_done_user_id');
    $activity_done_post['activity_done.datetime'] = is_null($this->input->post('activity_done_datetime')) ? '' : $this->input->post('activity_done_datetime');
    $this->session->set_userdata('facility_activity.activity_id', $activity_done_post['facility_activity.activity_id']);
    $this->session->set_userdata('bb_user.user_id', $activity_done_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $activity_done_post['user.user_id']);
    $this->session->set_userdata('activity_done.activity_done_id', $activity_done_post['activity_done.activity_done_id']);
    $this->db->update('activity_done', $activity_done_post, array('activity_done_id' => $activity_done_post['activity_done_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $activity_done_post);
  }
  function activity_done_delete() {
    $activity_done_delete['activity_done.activity_done_id'] = is_null($this->input->post('activity_done_activity_done_id')) ? '' : $this->input->post('activity_done_activity_done_id');
    $activity_done_delete['activity_done.activity_id'] = is_null($this->input->post('activity_done_activity_id')) ? '' : $this->input->post('activity_done_activity_id');
    $activity_done_delete['activity_done.score'] = is_null($this->input->post('activity_done_score')) ? '' : $this->input->post('activity_done_score');
    $activity_done_delete['activity_done.comments'] = is_null($this->input->post('activity_done_comments')) ? '' : $this->input->post('activity_done_comments');
    $activity_done_delete['activity_done.date'] = is_null($this->input->post('activity_done_date')) ? '' : $this->input->post('activity_done_date');
    $activity_done_delete['activity_done.time'] = is_null($this->input->post('activity_done_time')) ? '' : $this->input->post('activity_done_time');
    $activity_done_delete['activity_done.user_id'] = is_null($this->input->post('activity_done_user_id')) ? '' : $this->input->post('activity_done_user_id');
    $activity_done_delete['activity_done.datetime'] = is_null($this->input->post('activity_done_datetime')) ? '' : $this->input->post('activity_done_datetime');
    $this->db->delete('activity_done', array('activity_done_id' => $activity_done_delete['activity_done_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $activity_done_delete);
  }
  function activity_done_get_records() {
    $activity_done_filters['facility_activity.activity_id'] = $this->session->facility_activity_activity_id;
    $activity_done_filters['bb_user.user_id'] = $this->session->bb_user_user_id;
    $activity_done_filters['user.user_id'] = $this->session->user_user_id;
    $activity_done_filters['activity_done.activity_done_id'] = $this->session->activity_done_activity_done_id;
    $activity_done_filters['facility_activity.activity_id'] = $facility_activity_activity_id;
    $activity_done_filters['bb_user.user_id'] = $bb_user_user_id;
    $activity_done_filters['user.user_id'] = $user_user_id;
    $activity_done_filters['activity_done.activity_done_id'] = $activity_done_activity_done_id;
    $activity_done_filters['activity_done.activity_id'] = is_null($this->input->post('activity_done_activity_id')) ? '' : $this->input->post('activity_done_activity_id');
    $activity_done_filters['activity_done.score'] = is_null($this->input->post('activity_done_score')) ? '' : $this->input->post('activity_done_score');
    $activity_done_filters['activity_done.comments'] = is_null($this->input->post('activity_done_comments')) ? '' : $this->input->post('activity_done_comments');
    $activity_done_filters['activity_done.date'] = is_null($this->input->post('activity_done_date')) ? '' : $this->input->post('activity_done_date');
    $activity_done_filters['activity_done.time'] = is_null($this->input->post('activity_done_time')) ? '' : $this->input->post('activity_done_time');
    $activity_done_filters['activity_done.user_id'] = is_null($this->input->post('activity_done_user_id')) ? '' : $this->input->post('activity_done_user_id');
    $activity_done_filters['activity_done.datetime'] = is_null($this->input->post('activity_done_datetime')) ? '' : $this->input->post('activity_done_datetime');
    $this->session->set_userdata('facility_activity.activity_id', $activity_done_filters['facility_activity.activity_id']);
    $this->session->set_userdata('bb_user.user_id', $activity_done_filters['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $activity_done_filters['user.user_id']);
    $this->session->set_userdata('activity_done.activity_done_id', $activity_done_filters['activity_done.activity_done_id']);
    $this->db->select('facility_activity.activity_id AS activity_done_activity_id, bb_user.user_id AS activity_done_user_id,
    user.user_id AS activity_done_user_id, activity_done.activity_done_id AS activity_done_activity_done_id,
    activity_done.activity_id AS activity_done_activity_id, activity_done.score AS activity_done_score,
    activity_done.comments AS activity_done_comments, activity_done.date AS activity_done_date,
    activity_done.time AS activity_done_time, activity_done.user_id AS activity_done_user_id,
    activity_done.datetime AS activity_done_datetime')->from('activity_done');
    $this->db->join('facility_activity', 'activity_done.activity_id = facility_activity.activity_id', 'left');
    $this->db->join('bb_user', 'activity_done.user_id = bb_user.user_id', 'left');
    $this->db->join('user', 'activity_done.user_id = user.user_id', 'left');
    $this->db->where($activity_done_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $activity_done_filters);
  }
}