<?php class Staff_category_model extends CI_Model {
  function staff_category_create() {
    $staff_category_post = [];
    $staff_category_post['staff_category_id'] = is_null($this->input->post('staff_category_id')) ? '' : $this->input->post('staff_category_id');
    $staff_category_post['staff_category'] = is_null($this->input->post('staff_category')) ? '' : $this->input->post('staff_category');
    $staff_category_post['seniority'] = is_null($this->input->post('seniority')) ? '' : $this->input->post('seniority');
    $this->db->insert('staff_category', $staff_category_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $staff_category_post);
  }
  function staff_category_update() {
    $staff_category_post['staff_category.staff_category_id'] = $this->session->staff_category_staff_category_id;
    $staff_category_post['staff_category.staff_category_id'] = $staff_category_staff_category_id;
    $staff_category_post['staff_category.staff_category'] = is_null($this->input->post('staff_category_staff_category')) ? '' : $this->input->post('staff_category_staff_category');
    $staff_category_post['staff_category.seniority'] = is_null($this->input->post('staff_category_seniority')) ? '' : $this->input->post('staff_category_seniority');
    $this->session->set_userdata('staff_category.staff_category_id', $staff_category_post['staff_category.staff_category_id']);
    $this->db->update('staff_category', $staff_category_post, array('staff_category_id' => $staff_category_post['staff_category_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_category_post);
  }
  function staff_category_delete() {
    $staff_category_delete['staff_category.staff_category_id'] = is_null($this->input->post('staff_category_staff_category_id')) ? '' : $this->input->post('staff_category_staff_category_id');
    $staff_category_delete['staff_category.staff_category'] = is_null($this->input->post('staff_category_staff_category')) ? '' : $this->input->post('staff_category_staff_category');
    $staff_category_delete['staff_category.seniority'] = is_null($this->input->post('staff_category_seniority')) ? '' : $this->input->post('staff_category_seniority');
    $this->db->delete('staff_category', array('staff_category_id' => $staff_category_delete['staff_category_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_category_delete);
  }
  function staff_category_get_records() {
    $staff_category_filters['staff_category.staff_category_id'] = $this->session->staff_category_staff_category_id;
    $staff_category_filters['staff_category.staff_category_id'] = $staff_category_staff_category_id;
    $staff_category_filters['staff_category.staff_category'] = is_null($this->input->post('staff_category_staff_category')) ? '' : $this->input->post('staff_category_staff_category');
    $staff_category_filters['staff_category.seniority'] = is_null($this->input->post('staff_category_seniority')) ? '' : $this->input->post('staff_category_seniority');
    $this->session->set_userdata('staff_category.staff_category_id', $staff_category_filters['staff_category.staff_category_id']);
    $this->db->select('staff_category.staff_category_id AS staff_category_staff_category_id, staff_category.staff_category AS staff_category_staff_category,
    staff_category.seniority AS staff_category_seniority')->from('staff_category');
    $this->db->where($staff_category_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $staff_category_filters);
  }
}