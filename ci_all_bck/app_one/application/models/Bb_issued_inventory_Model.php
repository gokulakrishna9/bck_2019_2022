<?php class Bb_issued_inventory_model extends CI_Model {
  function bb_issued_inventory_create() {
    $bb_issued_inventory_post = [];
    $bb_issued_inventory_post['blood_issue.issue_id'] = $this->session->blood_issue_issue_id;
    $bb_issued_inventory_post['blood_inventory.inventory_id'] = $this->session->blood_inventory_inventory_id;
    $bb_issued_inventory_post['blood_issue.issue_id'] = $blood_issue_issue_id;
    $bb_issued_inventory_post['blood_inventory.inventory_id'] = $blood_inventory_inventory_id;
    $bb_issued_inventory_post['issued_inventory_id'] = is_null($this->input->post('issued_inventory_id')) ? '' : $this->input->post('issued_inventory_id');
    $bb_issued_inventory_post['issue_id'] = is_null($this->input->post('issue_id')) ? '' : $this->input->post('issue_id');
    $bb_issued_inventory_post['inventory_id'] = is_null($this->input->post('inventory_id')) ? '' : $this->input->post('inventory_id');
    $this->session->set_userdata('blood_issue.issue_id', $bb_issued_inventory_post['blood_issue.issue_id']);
    $this->session->set_userdata('blood_inventory.inventory_id', $bb_issued_inventory_post['blood_inventory.inventory_id']);
    $this->db->insert('bb_issued_inventory', $bb_issued_inventory_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $bb_issued_inventory_post);
  }
  function bb_issued_inventory_update() {
    $bb_issued_inventory_post['blood_issue.issue_id'] = $this->session->blood_issue_issue_id;
    $bb_issued_inventory_post['blood_inventory.inventory_id'] = $this->session->blood_inventory_inventory_id;
    $bb_issued_inventory_post['bb_issued_inventory.issued_inventory_id'] = $this->session->bb_issued_inventory_issued_inventory_id;
    $bb_issued_inventory_post['blood_issue.issue_id'] = $blood_issue_issue_id;
    $bb_issued_inventory_post['blood_inventory.inventory_id'] = $blood_inventory_inventory_id;
    $bb_issued_inventory_post['bb_issued_inventory.issued_inventory_id'] = $bb_issued_inventory_issued_inventory_id;
    $bb_issued_inventory_post['bb_issued_inventory.issue_id'] = is_null($this->input->post('bb_issued_inventory_issue_id')) ? '' : $this->input->post('bb_issued_inventory_issue_id');
    $bb_issued_inventory_post['bb_issued_inventory.inventory_id'] = is_null($this->input->post('bb_issued_inventory_inventory_id')) ? '' : $this->input->post('bb_issued_inventory_inventory_id');
    $this->session->set_userdata('blood_issue.issue_id', $bb_issued_inventory_post['blood_issue.issue_id']);
    $this->session->set_userdata('blood_inventory.inventory_id', $bb_issued_inventory_post['blood_inventory.inventory_id']);
    $this->session->set_userdata('bb_issued_inventory.issued_inventory_id', $bb_issued_inventory_post['bb_issued_inventory.issued_inventory_id']);
    $this->db->update('bb_issued_inventory', $bb_issued_inventory_post, array('issued_inventory_id' => $bb_issued_inventory_post['issued_inventory_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_issued_inventory_post);
  }
  function bb_issued_inventory_delete() {
    $bb_issued_inventory_delete['bb_issued_inventory.issued_inventory_id'] = is_null($this->input->post('bb_issued_inventory_issued_inventory_id')) ? '' : $this->input->post('bb_issued_inventory_issued_inventory_id');
    $bb_issued_inventory_delete['bb_issued_inventory.issue_id'] = is_null($this->input->post('bb_issued_inventory_issue_id')) ? '' : $this->input->post('bb_issued_inventory_issue_id');
    $bb_issued_inventory_delete['bb_issued_inventory.inventory_id'] = is_null($this->input->post('bb_issued_inventory_inventory_id')) ? '' : $this->input->post('bb_issued_inventory_inventory_id');
    $this->db->delete('bb_issued_inventory', array('issued_inventory_id' => $bb_issued_inventory_delete['issued_inventory_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $bb_issued_inventory_delete);
  }
  function bb_issued_inventory_get_records() {
    $bb_issued_inventory_filters['blood_issue.issue_id'] = $this->session->blood_issue_issue_id;
    $bb_issued_inventory_filters['blood_inventory.inventory_id'] = $this->session->blood_inventory_inventory_id;
    $bb_issued_inventory_filters['bb_issued_inventory.issued_inventory_id'] = $this->session->bb_issued_inventory_issued_inventory_id;
    $bb_issued_inventory_filters['blood_issue.issue_id'] = $blood_issue_issue_id;
    $bb_issued_inventory_filters['blood_inventory.inventory_id'] = $blood_inventory_inventory_id;
    $bb_issued_inventory_filters['bb_issued_inventory.issued_inventory_id'] = $bb_issued_inventory_issued_inventory_id;
    $bb_issued_inventory_filters['bb_issued_inventory.issue_id'] = is_null($this->input->post('bb_issued_inventory_issue_id')) ? '' : $this->input->post('bb_issued_inventory_issue_id');
    $bb_issued_inventory_filters['bb_issued_inventory.inventory_id'] = is_null($this->input->post('bb_issued_inventory_inventory_id')) ? '' : $this->input->post('bb_issued_inventory_inventory_id');
    $this->session->set_userdata('blood_issue.issue_id', $bb_issued_inventory_filters['blood_issue.issue_id']);
    $this->session->set_userdata('blood_inventory.inventory_id', $bb_issued_inventory_filters['blood_inventory.inventory_id']);
    $this->session->set_userdata('bb_issued_inventory.issued_inventory_id', $bb_issued_inventory_filters['bb_issued_inventory.issued_inventory_id']);
    $this->db->select('blood_issue.issue_id AS bb_issued_inventory_issue_id, blood_inventory.inventory_id AS bb_issued_inventory_inventory_id,
    bb_issued_inventory.issued_inventory_id AS bb_issued_inventory_issued_inventory_id, bb_issued_inventory.issue_id AS bb_issued_inventory_issue_id,
    bb_issued_inventory.inventory_id AS bb_issued_inventory_inventory_id')->from('bb_issued_inventory');
    $this->db->join('blood_issue', 'bb_issued_inventory.issue_id = blood_issue.issue_id', 'left');
    $this->db->join('blood_inventory', 'bb_issued_inventory.inventory_id = blood_inventory.inventory_id', 'left');
    $this->db->where($bb_issued_inventory_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $bb_issued_inventory_filters);
  }
}