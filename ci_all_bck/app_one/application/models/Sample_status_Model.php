<?php class Sample_status_model extends CI_Model {
  function sample_status_create() {
    $sample_status_post = [];
    $sample_status_post['sample_status_id'] = is_null($this->input->post('sample_status_id')) ? '' : $this->input->post('sample_status_id');
    $sample_status_post['sample_status'] = is_null($this->input->post('sample_status')) ? '' : $this->input->post('sample_status');
    $this->db->insert('sample_status', $sample_status_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $sample_status_post);
  }
  function sample_status_update() {
    $sample_status_post['sample_status.sample_status_id'] = $this->session->sample_status_sample_status_id;
    $sample_status_post['sample_status.sample_status_id'] = $sample_status_sample_status_id;
    $sample_status_post['sample_status.sample_status'] = is_null($this->input->post('sample_status_sample_status')) ? '' : $this->input->post('sample_status_sample_status');
    $this->session->set_userdata('sample_status.sample_status_id', $sample_status_post['sample_status.sample_status_id']);
    $this->db->update('sample_status', $sample_status_post, array('sample_status_id' => $sample_status_post['sample_status_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $sample_status_post);
  }
  function sample_status_delete() {
    $sample_status_delete['sample_status.sample_status_id'] = is_null($this->input->post('sample_status_sample_status_id')) ? '' : $this->input->post('sample_status_sample_status_id');
    $sample_status_delete['sample_status.sample_status'] = is_null($this->input->post('sample_status_sample_status')) ? '' : $this->input->post('sample_status_sample_status');
    $this->db->delete('sample_status', array('sample_status_id' => $sample_status_delete['sample_status_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $sample_status_delete);
  }
  function sample_status_get_records() {
    $sample_status_filters['sample_status.sample_status_id'] = $this->session->sample_status_sample_status_id;
    $sample_status_filters['sample_status.sample_status_id'] = $sample_status_sample_status_id;
    $sample_status_filters['sample_status.sample_status'] = is_null($this->input->post('sample_status_sample_status')) ? '' : $this->input->post('sample_status_sample_status');
    $this->session->set_userdata('sample_status.sample_status_id', $sample_status_filters['sample_status.sample_status_id']);
    $this->db->select('sample_status.sample_status_id AS sample_status_sample_status_id, sample_status.sample_status AS sample_status_sample_status')->from('sample_status');
    $this->db->where($sample_status_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $sample_status_filters);
  }
}