<?php class Age_group_model extends CI_Model {
  function age_group_create() {
    $age_group_post = [];
    $age_group_post['age_group_id'] = is_null($this->input->post('age_group_id')) ? '' : $this->input->post('age_group_id');
    $age_group_post['from_year'] = is_null($this->input->post('from_year')) ? '' : $this->input->post('from_year');
    $age_group_post['to_year'] = is_null($this->input->post('to_year')) ? '' : $this->input->post('to_year');
    $age_group_post['from_month'] = is_null($this->input->post('from_month')) ? '' : $this->input->post('from_month');
    $age_group_post['to_month'] = is_null($this->input->post('to_month')) ? '' : $this->input->post('to_month');
    $age_group_post['from_day'] = is_null($this->input->post('from_day')) ? '' : $this->input->post('from_day');
    $age_group_post['to_day'] = is_null($this->input->post('to_day')) ? '' : $this->input->post('to_day');
    $this->db->insert('age_group', $age_group_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $age_group_post);
  }
  function age_group_update() {
    $age_group_post['age_group.age_group_id'] = $this->session->age_group_age_group_id;
    $age_group_post['age_group.age_group_id'] = $age_group_age_group_id;
    $age_group_post['age_group.from_year'] = is_null($this->input->post('age_group_from_year')) ? '' : $this->input->post('age_group_from_year');
    $age_group_post['age_group.to_year'] = is_null($this->input->post('age_group_to_year')) ? '' : $this->input->post('age_group_to_year');
    $age_group_post['age_group.from_month'] = is_null($this->input->post('age_group_from_month')) ? '' : $this->input->post('age_group_from_month');
    $age_group_post['age_group.to_month'] = is_null($this->input->post('age_group_to_month')) ? '' : $this->input->post('age_group_to_month');
    $age_group_post['age_group.from_day'] = is_null($this->input->post('age_group_from_day')) ? '' : $this->input->post('age_group_from_day');
    $age_group_post['age_group.to_day'] = is_null($this->input->post('age_group_to_day')) ? '' : $this->input->post('age_group_to_day');
    $this->session->set_userdata('age_group.age_group_id', $age_group_post['age_group.age_group_id']);
    $this->db->update('age_group', $age_group_post, array('age_group_id' => $age_group_post['age_group_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $age_group_post);
  }
  function age_group_delete() {
    $age_group_delete['age_group.age_group_id'] = is_null($this->input->post('age_group_age_group_id')) ? '' : $this->input->post('age_group_age_group_id');
    $age_group_delete['age_group.from_year'] = is_null($this->input->post('age_group_from_year')) ? '' : $this->input->post('age_group_from_year');
    $age_group_delete['age_group.to_year'] = is_null($this->input->post('age_group_to_year')) ? '' : $this->input->post('age_group_to_year');
    $age_group_delete['age_group.from_month'] = is_null($this->input->post('age_group_from_month')) ? '' : $this->input->post('age_group_from_month');
    $age_group_delete['age_group.to_month'] = is_null($this->input->post('age_group_to_month')) ? '' : $this->input->post('age_group_to_month');
    $age_group_delete['age_group.from_day'] = is_null($this->input->post('age_group_from_day')) ? '' : $this->input->post('age_group_from_day');
    $age_group_delete['age_group.to_day'] = is_null($this->input->post('age_group_to_day')) ? '' : $this->input->post('age_group_to_day');
    $this->db->delete('age_group', array('age_group_id' => $age_group_delete['age_group_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $age_group_delete);
  }
  function age_group_get_records() {
    $age_group_filters['age_group.age_group_id'] = $this->session->age_group_age_group_id;
    $age_group_filters['age_group.age_group_id'] = $age_group_age_group_id;
    $age_group_filters['age_group.from_year'] = is_null($this->input->post('age_group_from_year')) ? '' : $this->input->post('age_group_from_year');
    $age_group_filters['age_group.to_year'] = is_null($this->input->post('age_group_to_year')) ? '' : $this->input->post('age_group_to_year');
    $age_group_filters['age_group.from_month'] = is_null($this->input->post('age_group_from_month')) ? '' : $this->input->post('age_group_from_month');
    $age_group_filters['age_group.to_month'] = is_null($this->input->post('age_group_to_month')) ? '' : $this->input->post('age_group_to_month');
    $age_group_filters['age_group.from_day'] = is_null($this->input->post('age_group_from_day')) ? '' : $this->input->post('age_group_from_day');
    $age_group_filters['age_group.to_day'] = is_null($this->input->post('age_group_to_day')) ? '' : $this->input->post('age_group_to_day');
    $this->session->set_userdata('age_group.age_group_id', $age_group_filters['age_group.age_group_id']);
    $this->db->select('age_group.age_group_id AS age_group_age_group_id, age_group.from_year AS age_group_from_year,
    age_group.to_year AS age_group_to_year, age_group.from_month AS age_group_from_month,
    age_group.to_month AS age_group_to_month, age_group.from_day AS age_group_from_day,
    age_group.to_day AS age_group_to_day')->from('age_group');
    $this->db->where($age_group_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $age_group_filters);
  }
}