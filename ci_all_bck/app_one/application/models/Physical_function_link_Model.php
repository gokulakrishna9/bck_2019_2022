<?php class Physical_function_link_model extends CI_Model {
  function physical_function_link_create() {
    $physical_function_link_post = [];
    $physical_function_link_post['link_id'] = is_null($this->input->post('link_id')) ? '' : $this->input->post('link_id');
    $physical_function_link_post['function_id'] = is_null($this->input->post('function_id')) ? '' : $this->input->post('function_id');
    $physical_function_link_post['physical_address'] = is_null($this->input->post('physical_address')) ? '' : $this->input->post('physical_address');
    $this->db->insert('physical_function_link', $physical_function_link_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $physical_function_link_post);
  }
  function physical_function_link_update() {
    $physical_function_link_post['physical_function_link.link_id'] = $this->session->physical_function_link_link_id;
    $physical_function_link_post['physical_function_link.link_id'] = $physical_function_link_link_id;
    $physical_function_link_post['physical_function_link.function_id'] = is_null($this->input->post('physical_function_link_function_id')) ? '' : $this->input->post('physical_function_link_function_id');
    $physical_function_link_post['physical_function_link.physical_address'] = is_null($this->input->post('physical_function_link_physical_address')) ? '' : $this->input->post('physical_function_link_physical_address');
    $this->session->set_userdata('physical_function_link.link_id', $physical_function_link_post['physical_function_link.link_id']);
    $this->db->update('physical_function_link', $physical_function_link_post, array('link_id' => $physical_function_link_post['link_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $physical_function_link_post);
  }
  function physical_function_link_delete() {
    $physical_function_link_delete['physical_function_link.link_id'] = is_null($this->input->post('physical_function_link_link_id')) ? '' : $this->input->post('physical_function_link_link_id');
    $physical_function_link_delete['physical_function_link.function_id'] = is_null($this->input->post('physical_function_link_function_id')) ? '' : $this->input->post('physical_function_link_function_id');
    $physical_function_link_delete['physical_function_link.physical_address'] = is_null($this->input->post('physical_function_link_physical_address')) ? '' : $this->input->post('physical_function_link_physical_address');
    $this->db->delete('physical_function_link', array('link_id' => $physical_function_link_delete['link_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $physical_function_link_delete);
  }
  function physical_function_link_get_records() {
    $physical_function_link_filters['physical_function_link.link_id'] = $this->session->physical_function_link_link_id;
    $physical_function_link_filters['physical_function_link.link_id'] = $physical_function_link_link_id;
    $physical_function_link_filters['physical_function_link.function_id'] = is_null($this->input->post('physical_function_link_function_id')) ? '' : $this->input->post('physical_function_link_function_id');
    $physical_function_link_filters['physical_function_link.physical_address'] = is_null($this->input->post('physical_function_link_physical_address')) ? '' : $this->input->post('physical_function_link_physical_address');
    $this->session->set_userdata('physical_function_link.link_id', $physical_function_link_filters['physical_function_link.link_id']);
    $this->db->select('physical_function_link.link_id AS physical_function_link_link_id, physical_function_link.function_id AS physical_function_link_function_id,
    physical_function_link.physical_address AS physical_function_link_physical_address')->from('physical_function_link');
    $this->db->where($physical_function_link_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $physical_function_link_filters);
  }
}