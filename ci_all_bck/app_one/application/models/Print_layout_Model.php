<?php class Print_layout_model extends CI_Model {
  function print_layout_create() {
    $print_layout_post = [];
    $print_layout_post['print_layout_id'] = is_null($this->input->post('print_layout_id')) ? '' : $this->input->post('print_layout_id');
    $print_layout_post['print_layout_name'] = is_null($this->input->post('print_layout_name')) ? '' : $this->input->post('print_layout_name');
    $print_layout_post['print_layout_page'] = is_null($this->input->post('print_layout_page')) ? '' : $this->input->post('print_layout_page');
    $this->db->insert('print_layout', $print_layout_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $print_layout_post);
  }
  function print_layout_update() {
    $print_layout_post['print_layout.print_layout_id'] = $this->session->print_layout_print_layout_id;
    $print_layout_post['print_layout.print_layout_id'] = $print_layout_print_layout_id;
    $print_layout_post['print_layout.print_layout_name'] = is_null($this->input->post('print_layout_print_layout_name')) ? '' : $this->input->post('print_layout_print_layout_name');
    $print_layout_post['print_layout.print_layout_page'] = is_null($this->input->post('print_layout_print_layout_page')) ? '' : $this->input->post('print_layout_print_layout_page');
    $this->session->set_userdata('print_layout.print_layout_id', $print_layout_post['print_layout.print_layout_id']);
    $this->db->update('print_layout', $print_layout_post, array('print_layout_id' => $print_layout_post['print_layout_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $print_layout_post);
  }
  function print_layout_delete() {
    $print_layout_delete['print_layout.print_layout_id'] = is_null($this->input->post('print_layout_print_layout_id')) ? '' : $this->input->post('print_layout_print_layout_id');
    $print_layout_delete['print_layout.print_layout_name'] = is_null($this->input->post('print_layout_print_layout_name')) ? '' : $this->input->post('print_layout_print_layout_name');
    $print_layout_delete['print_layout.print_layout_page'] = is_null($this->input->post('print_layout_print_layout_page')) ? '' : $this->input->post('print_layout_print_layout_page');
    $this->db->delete('print_layout', array('print_layout_id' => $print_layout_delete['print_layout_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $print_layout_delete);
  }
  function print_layout_get_records() {
    $print_layout_filters['print_layout.print_layout_id'] = $this->session->print_layout_print_layout_id;
    $print_layout_filters['print_layout.print_layout_id'] = $print_layout_print_layout_id;
    $print_layout_filters['print_layout.print_layout_name'] = is_null($this->input->post('print_layout_print_layout_name')) ? '' : $this->input->post('print_layout_print_layout_name');
    $print_layout_filters['print_layout.print_layout_page'] = is_null($this->input->post('print_layout_print_layout_page')) ? '' : $this->input->post('print_layout_print_layout_page');
    $this->session->set_userdata('print_layout.print_layout_id', $print_layout_filters['print_layout.print_layout_id']);
    $this->db->select('print_layout.print_layout_id AS print_layout_print_layout_id, print_layout.print_layout_name AS print_layout_print_layout_name,
    print_layout.print_layout_page AS print_layout_print_layout_page')->from('print_layout');
    $this->db->where($print_layout_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $print_layout_filters);
  }
}