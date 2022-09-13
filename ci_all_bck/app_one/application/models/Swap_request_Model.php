<?php class Swap_request_model extends CI_Model {
  function swap_request_create() {
    $swap_request_post = [];
    $swap_request_post['swap_id'] = is_null($this->input->post('swap_id')) ? '' : $this->input->post('swap_id');
    $swap_request_post['roaster_id_requested'] = is_null($this->input->post('roaster_id_requested')) ? '' : $this->input->post('roaster_id_requested');
    $swap_request_post['shift_id_requested'] = is_null($this->input->post('shift_id_requested')) ? '' : $this->input->post('shift_id_requested');
    $swap_request_post['request_timestamp'] = is_null($this->input->post('request_timestamp')) ? '' : $this->input->post('request_timestamp');
    $swap_request_post['swap_status'] = is_null($this->input->post('swap_status')) ? '' : $this->input->post('swap_status');
    $swap_request_post['roaster_id_accepted'] = is_null($this->input->post('roaster_id_accepted')) ? '' : $this->input->post('roaster_id_accepted');
    $this->db->insert('swap_request', $swap_request_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $swap_request_post);
  }
  function swap_request_update() {
    $swap_request_post['swap_request.swap_id'] = $this->session->swap_request_swap_id;
    $swap_request_post['swap_request.swap_id'] = $swap_request_swap_id;
    $swap_request_post['swap_request.roaster_id_requested'] = is_null($this->input->post('swap_request_roaster_id_requested')) ? '' : $this->input->post('swap_request_roaster_id_requested');
    $swap_request_post['swap_request.shift_id_requested'] = is_null($this->input->post('swap_request_shift_id_requested')) ? '' : $this->input->post('swap_request_shift_id_requested');
    $swap_request_post['swap_request.request_timestamp'] = is_null($this->input->post('swap_request_request_timestamp')) ? '' : $this->input->post('swap_request_request_timestamp');
    $swap_request_post['swap_request.swap_status'] = is_null($this->input->post('swap_request_swap_status')) ? '' : $this->input->post('swap_request_swap_status');
    $swap_request_post['swap_request.roaster_id_accepted'] = is_null($this->input->post('swap_request_roaster_id_accepted')) ? '' : $this->input->post('swap_request_roaster_id_accepted');
    $this->session->set_userdata('swap_request.swap_id', $swap_request_post['swap_request.swap_id']);
    $this->db->update('swap_request', $swap_request_post, array('swap_id' => $swap_request_post['swap_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $swap_request_post);
  }
  function swap_request_delete() {
    $swap_request_delete['swap_request.swap_id'] = is_null($this->input->post('swap_request_swap_id')) ? '' : $this->input->post('swap_request_swap_id');
    $swap_request_delete['swap_request.roaster_id_requested'] = is_null($this->input->post('swap_request_roaster_id_requested')) ? '' : $this->input->post('swap_request_roaster_id_requested');
    $swap_request_delete['swap_request.shift_id_requested'] = is_null($this->input->post('swap_request_shift_id_requested')) ? '' : $this->input->post('swap_request_shift_id_requested');
    $swap_request_delete['swap_request.request_timestamp'] = is_null($this->input->post('swap_request_request_timestamp')) ? '' : $this->input->post('swap_request_request_timestamp');
    $swap_request_delete['swap_request.swap_status'] = is_null($this->input->post('swap_request_swap_status')) ? '' : $this->input->post('swap_request_swap_status');
    $swap_request_delete['swap_request.roaster_id_accepted'] = is_null($this->input->post('swap_request_roaster_id_accepted')) ? '' : $this->input->post('swap_request_roaster_id_accepted');
    $this->db->delete('swap_request', array('swap_id' => $swap_request_delete['swap_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $swap_request_delete);
  }
  function swap_request_get_records() {
    $swap_request_filters['swap_request.swap_id'] = $this->session->swap_request_swap_id;
    $swap_request_filters['swap_request.swap_id'] = $swap_request_swap_id;
    $swap_request_filters['swap_request.roaster_id_requested'] = is_null($this->input->post('swap_request_roaster_id_requested')) ? '' : $this->input->post('swap_request_roaster_id_requested');
    $swap_request_filters['swap_request.shift_id_requested'] = is_null($this->input->post('swap_request_shift_id_requested')) ? '' : $this->input->post('swap_request_shift_id_requested');
    $swap_request_filters['swap_request.request_timestamp'] = is_null($this->input->post('swap_request_request_timestamp')) ? '' : $this->input->post('swap_request_request_timestamp');
    $swap_request_filters['swap_request.swap_status'] = is_null($this->input->post('swap_request_swap_status')) ? '' : $this->input->post('swap_request_swap_status');
    $swap_request_filters['swap_request.roaster_id_accepted'] = is_null($this->input->post('swap_request_roaster_id_accepted')) ? '' : $this->input->post('swap_request_roaster_id_accepted');
    $this->session->set_userdata('swap_request.swap_id', $swap_request_filters['swap_request.swap_id']);
    $this->db->select('swap_request.swap_id AS swap_request_swap_id, swap_request.roaster_id_requested AS swap_request_roaster_id_requested,
    swap_request.shift_id_requested AS swap_request_shift_id_requested, swap_request.request_timestamp AS swap_request_request_timestamp,
    swap_request.swap_status AS swap_request_swap_status, swap_request.roaster_id_accepted AS swap_request_roaster_id_accepted')->from('swap_request');
    $this->db->where($swap_request_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $swap_request_filters);
  }
}