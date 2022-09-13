<?php class Facility_activity_model extends CI_Model {
  function facility_activity_create() {
    $facility_activity_post = [];
    $facility_activity_post['facility_area.facility_area_id'] = $this->session->facility_area_facility_area_id;
    $facility_activity_post['area_activity.area_activity_id'] = $this->session->area_activity_area_activity_id;
    $facility_activity_post['facility_area.facility_area_id'] = $facility_area_facility_area_id;
    $facility_activity_post['area_activity.area_activity_id'] = $area_activity_area_activity_id;
    $facility_activity_post['activity_id'] = is_null($this->input->post('activity_id')) ? '' : $this->input->post('activity_id');
    $facility_activity_post['facility_area_id'] = is_null($this->input->post('facility_area_id')) ? '' : $this->input->post('facility_area_id');
    $facility_activity_post['area_activity_id'] = is_null($this->input->post('area_activity_id')) ? '' : $this->input->post('area_activity_id');
    $this->session->set_userdata('facility_area.facility_area_id', $facility_activity_post['facility_area.facility_area_id']);
    $this->session->set_userdata('area_activity.area_activity_id', $facility_activity_post['area_activity.area_activity_id']);
    $this->db->insert('facility_activity', $facility_activity_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $facility_activity_post);
  }
  function facility_activity_update() {
    $facility_activity_post['facility_area.facility_area_id'] = $this->session->facility_area_facility_area_id;
    $facility_activity_post['area_activity.area_activity_id'] = $this->session->area_activity_area_activity_id;
    $facility_activity_post['facility_activity.activity_id'] = $this->session->facility_activity_activity_id;
    $facility_activity_post['facility_area.facility_area_id'] = $facility_area_facility_area_id;
    $facility_activity_post['area_activity.area_activity_id'] = $area_activity_area_activity_id;
    $facility_activity_post['facility_activity.activity_id'] = $facility_activity_activity_id;
    $facility_activity_post['facility_activity.facility_area_id'] = is_null($this->input->post('facility_activity_facility_area_id')) ? '' : $this->input->post('facility_activity_facility_area_id');
    $facility_activity_post['facility_activity.area_activity_id'] = is_null($this->input->post('facility_activity_area_activity_id')) ? '' : $this->input->post('facility_activity_area_activity_id');
    $this->session->set_userdata('facility_area.facility_area_id', $facility_activity_post['facility_area.facility_area_id']);
    $this->session->set_userdata('area_activity.area_activity_id', $facility_activity_post['area_activity.area_activity_id']);
    $this->session->set_userdata('facility_activity.activity_id', $facility_activity_post['facility_activity.activity_id']);
    $this->db->update('facility_activity', $facility_activity_post, array('activity_id' => $facility_activity_post['activity_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $facility_activity_post);
  }
  function facility_activity_delete() {
    $facility_activity_delete['facility_activity.activity_id'] = is_null($this->input->post('facility_activity_activity_id')) ? '' : $this->input->post('facility_activity_activity_id');
    $facility_activity_delete['facility_activity.facility_area_id'] = is_null($this->input->post('facility_activity_facility_area_id')) ? '' : $this->input->post('facility_activity_facility_area_id');
    $facility_activity_delete['facility_activity.area_activity_id'] = is_null($this->input->post('facility_activity_area_activity_id')) ? '' : $this->input->post('facility_activity_area_activity_id');
    $this->db->delete('facility_activity', array('activity_id' => $facility_activity_delete['activity_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $facility_activity_delete);
  }
  function facility_activity_get_records() {
    $facility_activity_filters['facility_area.facility_area_id'] = $this->session->facility_area_facility_area_id;
    $facility_activity_filters['area_activity.area_activity_id'] = $this->session->area_activity_area_activity_id;
    $facility_activity_filters['facility_activity.activity_id'] = $this->session->facility_activity_activity_id;
    $facility_activity_filters['facility_area.facility_area_id'] = $facility_area_facility_area_id;
    $facility_activity_filters['area_activity.area_activity_id'] = $area_activity_area_activity_id;
    $facility_activity_filters['facility_activity.activity_id'] = $facility_activity_activity_id;
    $facility_activity_filters['facility_activity.facility_area_id'] = is_null($this->input->post('facility_activity_facility_area_id')) ? '' : $this->input->post('facility_activity_facility_area_id');
    $facility_activity_filters['facility_activity.area_activity_id'] = is_null($this->input->post('facility_activity_area_activity_id')) ? '' : $this->input->post('facility_activity_area_activity_id');
    $this->session->set_userdata('facility_area.facility_area_id', $facility_activity_filters['facility_area.facility_area_id']);
    $this->session->set_userdata('area_activity.area_activity_id', $facility_activity_filters['area_activity.area_activity_id']);
    $this->session->set_userdata('facility_activity.activity_id', $facility_activity_filters['facility_activity.activity_id']);
    $this->db->select('facility_area.facility_area_id AS facility_activity_facility_area_id, area_activity.area_activity_id AS facility_activity_area_activity_id,
    facility_activity.activity_id AS facility_activity_activity_id, facility_activity.facility_area_id AS facility_activity_facility_area_id,
    facility_activity.area_activity_id AS facility_activity_area_activity_id')->from('facility_activity');
    $this->db->join('facility_area', 'facility_activity.facility_area_id = facility_area.facility_area_id', 'left');
    $this->db->join('area_activity', 'facility_activity.area_activity_id = area_activity.area_activity_id', 'left');
    $this->db->where($facility_activity_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $facility_activity_filters);
  }
}