<?php class Swap_request_sent_model extends CI_Model {
  function swap_request_sent_create() {
    $swap_request_sent_post = [];
    $swap_request_sent_post['swap_request.swap_id'] = $this->session->swap_request_swap_id;
    $swap_request_sent_post['swap_request.swap_id'] = $swap_request_swap_id;
    $swap_request_sent_post['swap_request_sent_id'] = is_null($this->input->post('swap_request_sent_id')) ? '' : $this->input->post('swap_request_sent_id');
    $swap_request_sent_post['swap_id'] = is_null($this->input->post('swap_id')) ? '' : $this->input->post('swap_id');
    $swap_request_sent_post['staff_id_sent_to'] = is_null($this->input->post('staff_id_sent_to')) ? '' : $this->input->post('staff_id_sent_to');
    $this->session->set_userdata('swap_request.swap_id', $swap_request_sent_post['swap_request.swap_id']);
    $this->db->insert('swap_request_sent', $swap_request_sent_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $swap_request_sent_post);
  }
  function swap_request_sent_update() {
    $swap_request_sent_post['swap_request.swap_id'] = $this->session->swap_request_swap_id;
    $swap_request_sent_post['swap_request_sent.swap_request_sent_id'] = $this->session->swap_request_sent_swap_request_sent_id;
    $swap_request_sent_post['swap_request.swap_id'] = $swap_request_swap_id;
    $swap_request_sent_post['swap_request_sent.swap_request_sent_id'] = $swap_request_sent_swap_request_sent_id;
    $swap_request_sent_post['swap_request_sent.swap_id'] = is_null($this->input->post('swap_request_sent_swap_id')) ? '' : $this->input->post('swap_request_sent_swap_id');
    $swap_request_sent_post['swap_request_sent.staff_id_sent_to'] = is_null($this->input->post('swap_request_sent_staff_id_sent_to')) ? '' : $this->input->post('swap_request_sent_staff_id_sent_to');
    $this->session->set_userdata('swap_request.swap_id', $swap_request_sent_post['swap_request.swap_id']);
    $this->session->set_userdata('swap_request_sent.swap_request_sent_id', $swap_request_sent_post['swap_request_sent.swap_request_sent_id']);
    $this->db->update('swap_request_sent', $swap_request_sent_post, array('swap_request_sent_id' => $swap_request_sent_post['swap_request_sent_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $swap_request_sent_post);
  }
  function swap_request_sent_delete() {
    $swap_request_sent_delete['swap_request_sent.swap_request_sent_id'] = is_null($this->input->post('swap_request_sent_swap_request_sent_id')) ? '' : $this->input->post('swap_request_sent_swap_request_sent_id');
    $swap_request_sent_delete['swap_request_sent.swap_id'] = is_null($this->input->post('swap_request_sent_swap_id')) ? '' : $this->input->post('swap_request_sent_swap_id');
    $swap_request_sent_delete['swap_request_sent.staff_id_sent_to'] = is_null($this->input->post('swap_request_sent_staff_id_sent_to')) ? '' : $this->input->post('swap_request_sent_staff_id_sent_to');
    $this->db->delete('swap_request_sent', array('swap_request_sent_id' => $swap_request_sent_delete['swap_request_sent_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $swap_request_sent_delete);
  }
  function swap_request_sent_get_records() {
    $swap_request_sent_filters['swap_request.swap_id'] = $this->session->swap_request_swap_id;
    $swap_request_sent_filters['swap_request_sent.swap_request_sent_id'] = $this->session->swap_request_sent_swap_request_sent_id;
    $swap_request_sent_filters['swap_request.swap_id'] = $swap_request_swap_id;
    $swap_request_sent_filters['swap_request_sent.swap_request_sent_id'] = $swap_request_sent_swap_request_sent_id;
    $swap_request_sent_filters['swap_request_sent.swap_id'] = is_null($this->input->post('swap_request_sent_swap_id')) ? '' : $this->input->post('swap_request_sent_swap_id');
    $swap_request_sent_filters['swap_request_sent.staff_id_sent_to'] = is_null($this->input->post('swap_request_sent_staff_id_sent_to')) ? '' : $this->input->post('swap_request_sent_staff_id_sent_to');
    $this->session->set_userdata('swap_request.swap_id', $swap_request_sent_filters['swap_request.swap_id']);
    $this->session->set_userdata('swap_request_sent.swap_request_sent_id', $swap_request_sent_filters['swap_request_sent.swap_request_sent_id']);
    $this->db->select('swap_request.swap_id AS swap_request_sent_swap_id, swap_request_sent.swap_request_sent_id AS swap_request_sent_swap_request_sent_id,
    swap_request_sent.swap_id AS swap_request_sent_swap_id, swap_request_sent.staff_id_sent_to AS swap_request_sent_staff_id_sent_to')->from('swap_request_sent');
    $this->db->join('swap_request', 'swap_request_sent.swap_id = swap_request.swap_id', 'left');
    $this->db->where($swap_request_sent_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $swap_request_sent_filters);
  }
}