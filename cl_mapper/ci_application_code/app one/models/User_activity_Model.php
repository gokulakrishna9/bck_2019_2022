<?php class User_activity_model extends CI_Model {
  function user_activity_create($bb_user_user_id,$user_user_id,$mlc_visit_id,$patient_visit_visit_id) {
    $user_activity_post = [];
    $user_activity_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $user_activity_post['user.user_id'] = $this->session->user_user_id;
    $user_activity_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $user_activity_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $user_activity_post['bb_user.user_id'] = $bb_user_user_id;
    $user_activity_post['user.user_id'] = $user_user_id;
    $user_activity_post['mlc.visit_id'] = $mlc_visit_id;
    $user_activity_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $user_activity_post['event_date'] = is_null($this->input->post('event_date')) ? '' : $this->input->post('event_date');
    $user_activity_post['register'] = is_null($this->input->post('register')) ? '' : $this->input->post('register');
    $user_activity_post['update_id'] = is_null($this->input->post('update_id')) ? '' : $this->input->post('update_id');
    $user_activity_post['user_id'] = is_null($this->input->post('user_id')) ? '' : $this->input->post('user_id');
    $user_activity_post['visit_id'] = is_null($this->input->post('visit_id')) ? '' : $this->input->post('visit_id');
    $this->session->set_userdata('bb_user.user_id', $user_activity_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $user_activity_post['user.user_id']);
    $this->session->set_userdata('mlc.visit_id', $user_activity_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $user_activity_post['patient_visit.visit_id']);
    $this->db->insert('user_activity', $user_activity_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $user_activity_post);
  }
  function user_activity_update($user_id,$user_id,$visit_id,$visit_id,$update_id) {
    $user_activity_post['bb_user.user_id'] = $this->session->bb_user_user_id;
    $user_activity_post['user.user_id'] = $this->session->user_user_id;
    $user_activity_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $user_activity_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $user_activity_post['user_activity.update_id'] = $this->session->user_activity_update_id;
    $user_activity_post['bb_user.user_id'] = $bb_user_user_id;
    $user_activity_post['user.user_id'] = $user_user_id;
    $user_activity_post['mlc.visit_id'] = $mlc_visit_id;
    $user_activity_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $user_activity_post['user_activity.update_id'] = $user_activity_update_id;
    $user_activity_post['user_activity.event_date'] = is_null($this->input->post('user_activity_event_date')) ? '' : $this->input->post('user_activity_event_date');
    $user_activity_post['user_activity.register'] = is_null($this->input->post('user_activity_register')) ? '' : $this->input->post('user_activity_register');
    $user_activity_post['user_activity.user_id'] = is_null($this->input->post('user_activity_user_id')) ? '' : $this->input->post('user_activity_user_id');
    $user_activity_post['user_activity.visit_id'] = is_null($this->input->post('user_activity_visit_id')) ? '' : $this->input->post('user_activity_visit_id');
    $this->session->set_userdata('bb_user.user_id', $user_activity_post['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $user_activity_post['user.user_id']);
    $this->session->set_userdata('mlc.visit_id', $user_activity_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $user_activity_post['patient_visit.visit_id']);
    $this->session->set_userdata('user_activity.update_id', $user_activity_post['user_activity.update_id']);
    $this->db->update('user_activity', $user_activity_post, array('update_id' => $user_activity_post['update_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $user_activity_post);
  }
  function user_activity_delete() {
    $user_activity_delete['user_activity.event_date'] = is_null($this->input->post('user_activity_event_date')) ? '' : $this->input->post('user_activity_event_date');
    $user_activity_delete['user_activity.register'] = is_null($this->input->post('user_activity_register')) ? '' : $this->input->post('user_activity_register');
    $user_activity_delete['user_activity.update_id'] = is_null($this->input->post('user_activity_update_id')) ? '' : $this->input->post('user_activity_update_id');
    $user_activity_delete['user_activity.user_id'] = is_null($this->input->post('user_activity_user_id')) ? '' : $this->input->post('user_activity_user_id');
    $user_activity_delete['user_activity.visit_id'] = is_null($this->input->post('user_activity_visit_id')) ? '' : $this->input->post('user_activity_visit_id');
    $this->db->delete('user_activity', array('update_id' => $user_activity_delete['update_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $user_activity_delete);
  }
  function user_activity_get_records($user_id,$user_id,$visit_id,$visit_id,$update_id) {
    $user_activity_filters['bb_user.user_id'] = $this->session->bb_user_user_id;
    $user_activity_filters['user.user_id'] = $this->session->user_user_id;
    $user_activity_filters['mlc.visit_id'] = $this->session->mlc_visit_id;
    $user_activity_filters['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $user_activity_filters['user_activity.update_id'] = $this->session->user_activity_update_id;
    $user_activity_filters['bb_user.user_id'] = $bb_user_user_id;
    $user_activity_filters['user.user_id'] = $user_user_id;
    $user_activity_filters['mlc.visit_id'] = $mlc_visit_id;
    $user_activity_filters['patient_visit.visit_id'] = $patient_visit_visit_id;
    $user_activity_filters['user_activity.update_id'] = $user_activity_update_id;
    $user_activity_filters['user_activity.event_date'] = is_null($this->input->post('user_activity_event_date')) ? '' : $this->input->post('user_activity_event_date');
    $user_activity_filters['user_activity.register'] = is_null($this->input->post('user_activity_register')) ? '' : $this->input->post('user_activity_register');
    $user_activity_filters['user_activity.user_id'] = is_null($this->input->post('user_activity_user_id')) ? '' : $this->input->post('user_activity_user_id');
    $user_activity_filters['user_activity.visit_id'] = is_null($this->input->post('user_activity_visit_id')) ? '' : $this->input->post('user_activity_visit_id');
    $this->session->set_userdata('bb_user.user_id', $user_activity_filters['bb_user.user_id']);
    $this->session->set_userdata('user.user_id', $user_activity_filters['user.user_id']);
    $this->session->set_userdata('mlc.visit_id', $user_activity_filters['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $user_activity_filters['patient_visit.visit_id']);
    $this->session->set_userdata('user_activity.update_id', $user_activity_filters['user_activity.update_id']);
    $this->db->select('bb_user.user_id AS user_activity_user_id, user.user_id AS user_activity_user_id,
    mlc.visit_id AS user_activity_visit_id, patient_visit.visit_id AS user_activity_visit_id,
    user_activity.event_date AS user_activity_event_date, user_activity.register AS user_activity_register,
    user_activity.update_id AS user_activity_update_id, user_activity.user_id AS user_activity_user_id,
    user_activity.visit_id AS user_activity_visit_id')->from('user_activity');
    $this->db->join('bb_user', 'user_activity.user_id = bb_user.user_id', 'left');
    $this->db->join('user', 'user_activity.user_id = user.user_id', 'left');
    $this->db->join('mlc', 'user_activity.visit_id = mlc.visit_id', 'left');
    $this->db->join('patient_visit', 'user_activity.visit_id = patient_visit.visit_id', 'left');
    $this->db->where($user_activity_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $user_activity_filters);
  }
}