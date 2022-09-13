<?php class Staff_role_model extends CI_Model {
  function staff_role_create() {
    $staff_role_post = [];
    $staff_role_post['staff_role_id'] = is_null($this->input->post('staff_role_id')) ? '' : $this->input->post('staff_role_id');
    $staff_role_post['staff_role'] = is_null($this->input->post('staff_role')) ? '' : $this->input->post('staff_role');
    $this->db->insert('staff_role', $staff_role_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $staff_role_post);
  }
  function staff_role_update() {
    $staff_role_post['staff_role.staff_role_id'] = $this->session->staff_role_staff_role_id;
    $staff_role_post['staff_role.staff_role_id'] = $staff_role_staff_role_id;
    $staff_role_post['staff_role.staff_role'] = is_null($this->input->post('staff_role_staff_role')) ? '' : $this->input->post('staff_role_staff_role');
    $this->session->set_userdata('staff_role.staff_role_id', $staff_role_post['staff_role.staff_role_id']);
    $this->db->update('staff_role', $staff_role_post, array('staff_role_id' => $staff_role_post['staff_role_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_role_post);
  }
  function staff_role_delete() {
    $staff_role_delete['staff_role.staff_role_id'] = is_null($this->input->post('staff_role_staff_role_id')) ? '' : $this->input->post('staff_role_staff_role_id');
    $staff_role_delete['staff_role.staff_role'] = is_null($this->input->post('staff_role_staff_role')) ? '' : $this->input->post('staff_role_staff_role');
    $this->db->delete('staff_role', array('staff_role_id' => $staff_role_delete['staff_role_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_role_delete);
  }
  function staff_role_get_records() {
    $staff_role_filters['staff_role.staff_role_id'] = $this->session->staff_role_staff_role_id;
    $staff_role_filters['staff_role.staff_role_id'] = $staff_role_staff_role_id;
    $staff_role_filters['staff_role.staff_role'] = is_null($this->input->post('staff_role_staff_role')) ? '' : $this->input->post('staff_role_staff_role');
    $this->session->set_userdata('staff_role.staff_role_id', $staff_role_filters['staff_role.staff_role_id']);
    $this->db->select('staff_role.staff_role_id AS staff_role_staff_role_id, staff_role.staff_role AS staff_role_staff_role')->from('staff_role');
    $this->db->where($staff_role_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $staff_role_filters);
  }
}