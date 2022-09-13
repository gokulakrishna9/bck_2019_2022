<?php class Village_town_model extends CI_Model {
  function village_town_create() {
    $village_town_post = [];
    $village_town_post['village_town_id'] = is_null($this->input->post('village_town_id')) ? '' : $this->input->post('village_town_id');
    $village_town_post['village_town'] = is_null($this->input->post('village_town')) ? '' : $this->input->post('village_town');
    $this->db->insert('village_town', $village_town_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $village_town_post);
  }
  function village_town_update() {
    $village_town_post['village_town.village_town_id'] = $this->session->village_town_village_town_id;
    $village_town_post['village_town.village_town_id'] = $village_town_village_town_id;
    $village_town_post['village_town.village_town'] = is_null($this->input->post('village_town_village_town')) ? '' : $this->input->post('village_town_village_town');
    $this->session->set_userdata('village_town.village_town_id', $village_town_post['village_town.village_town_id']);
    $this->db->update('village_town', $village_town_post, array('village_town_id' => $village_town_post['village_town_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $village_town_post);
  }
  function village_town_delete() {
    $village_town_delete['village_town.village_town_id'] = is_null($this->input->post('village_town_village_town_id')) ? '' : $this->input->post('village_town_village_town_id');
    $village_town_delete['village_town.village_town'] = is_null($this->input->post('village_town_village_town')) ? '' : $this->input->post('village_town_village_town');
    $this->db->delete('village_town', array('village_town_id' => $village_town_delete['village_town_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $village_town_delete);
  }
  function village_town_get_records() {
    $village_town_filters['village_town.village_town_id'] = $this->session->village_town_village_town_id;
    $village_town_filters['village_town.village_town_id'] = $village_town_village_town_id;
    $village_town_filters['village_town.village_town'] = is_null($this->input->post('village_town_village_town')) ? '' : $this->input->post('village_town_village_town');
    $this->session->set_userdata('village_town.village_town_id', $village_town_filters['village_town.village_town_id']);
    $this->db->select('village_town.village_town_id AS village_town_village_town_id, village_town.village_town AS village_town_village_town')->from('village_town');
    $this->db->where($village_town_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $village_town_filters);
  }
}