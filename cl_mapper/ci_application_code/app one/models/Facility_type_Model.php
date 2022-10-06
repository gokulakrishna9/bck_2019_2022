<?php class Facility_type_model extends CI_Model {
  function facility_type_create() {
    $facility_type_post = [];
    $facility_type_post['facility_type'] = is_null($this->input->post('facility_type')) ? '' : $this->input->post('facility_type');
    $facility_type_post['facility_type_id'] = is_null($this->input->post('facility_type_id')) ? '' : $this->input->post('facility_type_id');
    $this->db->insert('facility_type', $facility_type_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $facility_type_post);
  }
  function facility_type_update($facility_type_id) {
    $facility_type_post['facility_type.facility_type_id'] = $this->session->facility_type_facility_type_id;
    $facility_type_post['facility_type.facility_type_id'] = $facility_type_facility_type_id;
    $facility_type_post['facility_type.facility_type'] = is_null($this->input->post('facility_type_facility_type')) ? '' : $this->input->post('facility_type_facility_type');
    $this->session->set_userdata('facility_type.facility_type_id', $facility_type_post['facility_type.facility_type_id']);
    $this->db->update('facility_type', $facility_type_post, array('facility_type_id' => $facility_type_post['facility_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $facility_type_post);
  }
  function facility_type_delete() {
    $facility_type_delete['facility_type.facility_type'] = is_null($this->input->post('facility_type_facility_type')) ? '' : $this->input->post('facility_type_facility_type');
    $facility_type_delete['facility_type.facility_type_id'] = is_null($this->input->post('facility_type_facility_type_id')) ? '' : $this->input->post('facility_type_facility_type_id');
    $this->db->delete('facility_type', array('facility_type_id' => $facility_type_delete['facility_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $facility_type_delete);
  }
  function facility_type_get_records($facility_type_id) {
    $facility_type_filters['facility_type.facility_type_id'] = $this->session->facility_type_facility_type_id;
    $facility_type_filters['facility_type.facility_type_id'] = $facility_type_facility_type_id;
    $facility_type_filters['facility_type.facility_type'] = is_null($this->input->post('facility_type_facility_type')) ? '' : $this->input->post('facility_type_facility_type');
    $this->session->set_userdata('facility_type.facility_type_id', $facility_type_filters['facility_type.facility_type_id']);
    $this->db->select('facility_type.facility_type AS facility_type_facility_type, facility_type.facility_type_id AS facility_type_facility_type_id')->from('facility_type');
    $this->db->where($facility_type_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $facility_type_filters);
  }
}