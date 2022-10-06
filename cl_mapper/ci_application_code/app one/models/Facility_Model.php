<?php class Facility_model extends CI_Model {
  function facility_create($facility_type_facility_type_id,$village_town_village_town_id) {
    $facility_post = [];
    $facility_post['facility_type.facility_type_id'] = $this->session->facility_type_facility_type_id;
    $facility_post['village_town.village_town_id'] = $this->session->village_town_village_town_id;
    $facility_post['facility_type.facility_type_id'] = $facility_type_facility_type_id;
    $facility_post['village_town.village_town_id'] = $village_town_village_town_id;
    $facility_post['address'] = is_null($this->input->post('address')) ? '' : $this->input->post('address');
    $facility_post['facility_id'] = is_null($this->input->post('facility_id')) ? '' : $this->input->post('facility_id');
    $facility_post['facility_name'] = is_null($this->input->post('facility_name')) ? '' : $this->input->post('facility_name');
    $facility_post['facility_type_id'] = is_null($this->input->post('facility_type_id')) ? '' : $this->input->post('facility_type_id');
    $facility_post['latitude'] = is_null($this->input->post('latitude')) ? '' : $this->input->post('latitude');
    $facility_post['longitude'] = is_null($this->input->post('longitude')) ? '' : $this->input->post('longitude');
    $facility_post['village_town_id'] = is_null($this->input->post('village_town_id')) ? '' : $this->input->post('village_town_id');
    $this->session->set_userdata('facility_type.facility_type_id', $facility_post['facility_type.facility_type_id']);
    $this->session->set_userdata('village_town.village_town_id', $facility_post['village_town.village_town_id']);
    $this->db->insert('facility', $facility_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $facility_post);
  }
  function facility_update($facility_type_id,$village_town_id,$facility_id) {
    $facility_post['facility_type.facility_type_id'] = $this->session->facility_type_facility_type_id;
    $facility_post['village_town.village_town_id'] = $this->session->village_town_village_town_id;
    $facility_post['facility.facility_id'] = $this->session->facility_facility_id;
    $facility_post['facility_type.facility_type_id'] = $facility_type_facility_type_id;
    $facility_post['village_town.village_town_id'] = $village_town_village_town_id;
    $facility_post['facility.facility_id'] = $facility_facility_id;
    $facility_post['facility.address'] = is_null($this->input->post('facility_address')) ? '' : $this->input->post('facility_address');
    $facility_post['facility.facility_name'] = is_null($this->input->post('facility_facility_name')) ? '' : $this->input->post('facility_facility_name');
    $facility_post['facility.facility_type_id'] = is_null($this->input->post('facility_facility_type_id')) ? '' : $this->input->post('facility_facility_type_id');
    $facility_post['facility.latitude'] = is_null($this->input->post('facility_latitude')) ? '' : $this->input->post('facility_latitude');
    $facility_post['facility.longitude'] = is_null($this->input->post('facility_longitude')) ? '' : $this->input->post('facility_longitude');
    $facility_post['facility.village_town_id'] = is_null($this->input->post('facility_village_town_id')) ? '' : $this->input->post('facility_village_town_id');
    $this->session->set_userdata('facility_type.facility_type_id', $facility_post['facility_type.facility_type_id']);
    $this->session->set_userdata('village_town.village_town_id', $facility_post['village_town.village_town_id']);
    $this->session->set_userdata('facility.facility_id', $facility_post['facility.facility_id']);
    $this->db->update('facility', $facility_post, array('facility_id' => $facility_post['facility_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $facility_post);
  }
  function facility_delete() {
    $facility_delete['facility.address'] = is_null($this->input->post('facility_address')) ? '' : $this->input->post('facility_address');
    $facility_delete['facility.facility_id'] = is_null($this->input->post('facility_facility_id')) ? '' : $this->input->post('facility_facility_id');
    $facility_delete['facility.facility_name'] = is_null($this->input->post('facility_facility_name')) ? '' : $this->input->post('facility_facility_name');
    $facility_delete['facility.facility_type_id'] = is_null($this->input->post('facility_facility_type_id')) ? '' : $this->input->post('facility_facility_type_id');
    $facility_delete['facility.latitude'] = is_null($this->input->post('facility_latitude')) ? '' : $this->input->post('facility_latitude');
    $facility_delete['facility.longitude'] = is_null($this->input->post('facility_longitude')) ? '' : $this->input->post('facility_longitude');
    $facility_delete['facility.village_town_id'] = is_null($this->input->post('facility_village_town_id')) ? '' : $this->input->post('facility_village_town_id');
    $this->db->delete('facility', array('facility_id' => $facility_delete['facility_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $facility_delete);
  }
  function facility_get_records($facility_type_id,$village_town_id,$facility_id) {
    $facility_filters['facility_type.facility_type_id'] = $this->session->facility_type_facility_type_id;
    $facility_filters['village_town.village_town_id'] = $this->session->village_town_village_town_id;
    $facility_filters['facility.facility_id'] = $this->session->facility_facility_id;
    $facility_filters['facility_type.facility_type_id'] = $facility_type_facility_type_id;
    $facility_filters['village_town.village_town_id'] = $village_town_village_town_id;
    $facility_filters['facility.facility_id'] = $facility_facility_id;
    $facility_filters['facility.address'] = is_null($this->input->post('facility_address')) ? '' : $this->input->post('facility_address');
    $facility_filters['facility.facility_name'] = is_null($this->input->post('facility_facility_name')) ? '' : $this->input->post('facility_facility_name');
    $facility_filters['facility.facility_type_id'] = is_null($this->input->post('facility_facility_type_id')) ? '' : $this->input->post('facility_facility_type_id');
    $facility_filters['facility.latitude'] = is_null($this->input->post('facility_latitude')) ? '' : $this->input->post('facility_latitude');
    $facility_filters['facility.longitude'] = is_null($this->input->post('facility_longitude')) ? '' : $this->input->post('facility_longitude');
    $facility_filters['facility.village_town_id'] = is_null($this->input->post('facility_village_town_id')) ? '' : $this->input->post('facility_village_town_id');
    $this->session->set_userdata('facility_type.facility_type_id', $facility_filters['facility_type.facility_type_id']);
    $this->session->set_userdata('village_town.village_town_id', $facility_filters['village_town.village_town_id']);
    $this->session->set_userdata('facility.facility_id', $facility_filters['facility.facility_id']);
    $this->db->select('facility_type.facility_type_id AS facility_facility_type_id, village_town.village_town_id AS facility_village_town_id,
    facility.address AS facility_address, facility.facility_id AS facility_facility_id,
    facility.facility_name AS facility_facility_name, facility.facility_type_id AS facility_facility_type_id,
    facility.latitude AS facility_latitude, facility.longitude AS facility_longitude,
    facility.village_town_id AS facility_village_town_id')->from('facility');
    $this->db->join('facility_type', 'facility.facility_type_id = facility_type.facility_type_id', 'left');
    $this->db->join('village_town', 'facility.village_town_id = village_town.village_town_id', 'left');
    $this->db->where($facility_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $facility_filters);
  }
}