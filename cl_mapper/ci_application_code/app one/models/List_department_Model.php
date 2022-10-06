<?php class List_department_model extends CI_Model {
  function list_department_create() {
    $list_department_post = [];
    $list_department_post['department'] = is_null($this->input->post('department')) ? '' : $this->input->post('department');
    $list_department_post['list_department_id'] = is_null($this->input->post('list_department_id')) ? '' : $this->input->post('list_department_id');
    $this->db->insert('list_department', $list_department_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $list_department_post);
  }
  function list_department_update($list_department_id) {
    $list_department_post['list_department.list_department_id'] = $this->session->list_department_list_department_id;
    $list_department_post['list_department.list_department_id'] = $list_department_list_department_id;
    $list_department_post['list_department.department'] = is_null($this->input->post('list_department_department')) ? '' : $this->input->post('list_department_department');
    $this->session->set_userdata('list_department.list_department_id', $list_department_post['list_department.list_department_id']);
    $this->db->update('list_department', $list_department_post, array('list_department_id' => $list_department_post['list_department_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $list_department_post);
  }
  function list_department_delete() {
    $list_department_delete['list_department.department'] = is_null($this->input->post('list_department_department')) ? '' : $this->input->post('list_department_department');
    $list_department_delete['list_department.list_department_id'] = is_null($this->input->post('list_department_list_department_id')) ? '' : $this->input->post('list_department_list_department_id');
    $this->db->delete('list_department', array('list_department_id' => $list_department_delete['list_department_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $list_department_delete);
  }
  function list_department_get_records($list_department_id) {
    $list_department_filters['list_department.list_department_id'] = $this->session->list_department_list_department_id;
    $list_department_filters['list_department.list_department_id'] = $list_department_list_department_id;
    $list_department_filters['list_department.department'] = is_null($this->input->post('list_department_department')) ? '' : $this->input->post('list_department_department');
    $this->session->set_userdata('list_department.list_department_id', $list_department_filters['list_department.list_department_id']);
    $this->db->select('list_department.department AS list_department_department, list_department.list_department_id AS list_department_list_department_id')->from('list_department');
    $this->db->where($list_department_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $list_department_filters);
  }
}