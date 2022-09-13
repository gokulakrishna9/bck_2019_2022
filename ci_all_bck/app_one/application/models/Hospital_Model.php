<?php class Hospital_model extends CI_Model {
  function hospital_create() {
    $hospital_post = [];
    $hospital_post['village_town.village_town_id'] = $this->session->village_town_village_town_id;
    $hospital_post['village_town.village_town_id'] = $village_town_village_town_id;
    $hospital_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $hospital_post['hospital_type_id'] = is_null($this->input->post('hospital_type_id')) ? '' : $this->input->post('hospital_type_id');
    $hospital_post['hospital'] = is_null($this->input->post('hospital')) ? '' : $this->input->post('hospital');
    $hospital_post['hospital_short_name'] = is_null($this->input->post('hospital_short_name')) ? '' : $this->input->post('hospital_short_name');
    $hospital_post['description'] = is_null($this->input->post('description')) ? '' : $this->input->post('description');
    $hospital_post['place'] = is_null($this->input->post('place')) ? '' : $this->input->post('place');
    $hospital_post['village_town_id'] = is_null($this->input->post('village_town_id')) ? '' : $this->input->post('village_town_id');
    $hospital_post['district'] = is_null($this->input->post('district')) ? '' : $this->input->post('district');
    $hospital_post['state'] = is_null($this->input->post('state')) ? '' : $this->input->post('state');
    $hospital_post['logo'] = is_null($this->input->post('logo')) ? '' : $this->input->post('logo');
    $hospital_post['type1'] = is_null($this->input->post('type1')) ? '' : $this->input->post('type1');
    $hospital_post['type2'] = is_null($this->input->post('type2')) ? '' : $this->input->post('type2');
    $hospital_post['type3'] = is_null($this->input->post('type3')) ? '' : $this->input->post('type3');
    $hospital_post['type4'] = is_null($this->input->post('type4')) ? '' : $this->input->post('type4');
    $hospital_post['type5'] = is_null($this->input->post('type5')) ? '' : $this->input->post('type5');
    $hospital_post['type6'] = is_null($this->input->post('type6')) ? '' : $this->input->post('type6');
    $this->session->set_userdata('village_town.village_town_id', $hospital_post['village_town.village_town_id']);
    $this->db->insert('hospital', $hospital_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $hospital_post);
  }
  function hospital_update() {
    $hospital_post['village_town.village_town_id'] = $this->session->village_town_village_town_id;
    $hospital_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $hospital_post['village_town.village_town_id'] = $village_town_village_town_id;
    $hospital_post['hospital.hospital_id'] = $hospital_hospital_id;
    $hospital_post['hospital.hospital_type_id'] = is_null($this->input->post('hospital_hospital_type_id')) ? '' : $this->input->post('hospital_hospital_type_id');
    $hospital_post['hospital.hospital'] = is_null($this->input->post('hospital_hospital')) ? '' : $this->input->post('hospital_hospital');
    $hospital_post['hospital.hospital_short_name'] = is_null($this->input->post('hospital_hospital_short_name')) ? '' : $this->input->post('hospital_hospital_short_name');
    $hospital_post['hospital.description'] = is_null($this->input->post('hospital_description')) ? '' : $this->input->post('hospital_description');
    $hospital_post['hospital.place'] = is_null($this->input->post('hospital_place')) ? '' : $this->input->post('hospital_place');
    $hospital_post['hospital.village_town_id'] = is_null($this->input->post('hospital_village_town_id')) ? '' : $this->input->post('hospital_village_town_id');
    $hospital_post['hospital.district'] = is_null($this->input->post('hospital_district')) ? '' : $this->input->post('hospital_district');
    $hospital_post['hospital.state'] = is_null($this->input->post('hospital_state')) ? '' : $this->input->post('hospital_state');
    $hospital_post['hospital.logo'] = is_null($this->input->post('hospital_logo')) ? '' : $this->input->post('hospital_logo');
    $hospital_post['hospital.type1'] = is_null($this->input->post('hospital_type1')) ? '' : $this->input->post('hospital_type1');
    $hospital_post['hospital.type2'] = is_null($this->input->post('hospital_type2')) ? '' : $this->input->post('hospital_type2');
    $hospital_post['hospital.type3'] = is_null($this->input->post('hospital_type3')) ? '' : $this->input->post('hospital_type3');
    $hospital_post['hospital.type4'] = is_null($this->input->post('hospital_type4')) ? '' : $this->input->post('hospital_type4');
    $hospital_post['hospital.type5'] = is_null($this->input->post('hospital_type5')) ? '' : $this->input->post('hospital_type5');
    $hospital_post['hospital.type6'] = is_null($this->input->post('hospital_type6')) ? '' : $this->input->post('hospital_type6');
    $this->session->set_userdata('village_town.village_town_id', $hospital_post['village_town.village_town_id']);
    $this->session->set_userdata('hospital.hospital_id', $hospital_post['hospital.hospital_id']);
    $this->db->update('hospital', $hospital_post, array('hospital_id' => $hospital_post['hospital_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $hospital_post);
  }
  function hospital_delete() {
    $hospital_delete['hospital.hospital_id'] = is_null($this->input->post('hospital_hospital_id')) ? '' : $this->input->post('hospital_hospital_id');
    $hospital_delete['hospital.hospital_type_id'] = is_null($this->input->post('hospital_hospital_type_id')) ? '' : $this->input->post('hospital_hospital_type_id');
    $hospital_delete['hospital.hospital'] = is_null($this->input->post('hospital_hospital')) ? '' : $this->input->post('hospital_hospital');
    $hospital_delete['hospital.hospital_short_name'] = is_null($this->input->post('hospital_hospital_short_name')) ? '' : $this->input->post('hospital_hospital_short_name');
    $hospital_delete['hospital.description'] = is_null($this->input->post('hospital_description')) ? '' : $this->input->post('hospital_description');
    $hospital_delete['hospital.place'] = is_null($this->input->post('hospital_place')) ? '' : $this->input->post('hospital_place');
    $hospital_delete['hospital.village_town_id'] = is_null($this->input->post('hospital_village_town_id')) ? '' : $this->input->post('hospital_village_town_id');
    $hospital_delete['hospital.district'] = is_null($this->input->post('hospital_district')) ? '' : $this->input->post('hospital_district');
    $hospital_delete['hospital.state'] = is_null($this->input->post('hospital_state')) ? '' : $this->input->post('hospital_state');
    $hospital_delete['hospital.logo'] = is_null($this->input->post('hospital_logo')) ? '' : $this->input->post('hospital_logo');
    $hospital_delete['hospital.type1'] = is_null($this->input->post('hospital_type1')) ? '' : $this->input->post('hospital_type1');
    $hospital_delete['hospital.type2'] = is_null($this->input->post('hospital_type2')) ? '' : $this->input->post('hospital_type2');
    $hospital_delete['hospital.type3'] = is_null($this->input->post('hospital_type3')) ? '' : $this->input->post('hospital_type3');
    $hospital_delete['hospital.type4'] = is_null($this->input->post('hospital_type4')) ? '' : $this->input->post('hospital_type4');
    $hospital_delete['hospital.type5'] = is_null($this->input->post('hospital_type5')) ? '' : $this->input->post('hospital_type5');
    $hospital_delete['hospital.type6'] = is_null($this->input->post('hospital_type6')) ? '' : $this->input->post('hospital_type6');
    $this->db->delete('hospital', array('hospital_id' => $hospital_delete['hospital_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $hospital_delete);
  }
  function hospital_get_records() {
    $hospital_filters['village_town.village_town_id'] = $this->session->village_town_village_town_id;
    $hospital_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $hospital_filters['village_town.village_town_id'] = $village_town_village_town_id;
    $hospital_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $hospital_filters['hospital.hospital_type_id'] = is_null($this->input->post('hospital_hospital_type_id')) ? '' : $this->input->post('hospital_hospital_type_id');
    $hospital_filters['hospital.hospital'] = is_null($this->input->post('hospital_hospital')) ? '' : $this->input->post('hospital_hospital');
    $hospital_filters['hospital.hospital_short_name'] = is_null($this->input->post('hospital_hospital_short_name')) ? '' : $this->input->post('hospital_hospital_short_name');
    $hospital_filters['hospital.description'] = is_null($this->input->post('hospital_description')) ? '' : $this->input->post('hospital_description');
    $hospital_filters['hospital.place'] = is_null($this->input->post('hospital_place')) ? '' : $this->input->post('hospital_place');
    $hospital_filters['hospital.village_town_id'] = is_null($this->input->post('hospital_village_town_id')) ? '' : $this->input->post('hospital_village_town_id');
    $hospital_filters['hospital.district'] = is_null($this->input->post('hospital_district')) ? '' : $this->input->post('hospital_district');
    $hospital_filters['hospital.state'] = is_null($this->input->post('hospital_state')) ? '' : $this->input->post('hospital_state');
    $hospital_filters['hospital.logo'] = is_null($this->input->post('hospital_logo')) ? '' : $this->input->post('hospital_logo');
    $hospital_filters['hospital.type1'] = is_null($this->input->post('hospital_type1')) ? '' : $this->input->post('hospital_type1');
    $hospital_filters['hospital.type2'] = is_null($this->input->post('hospital_type2')) ? '' : $this->input->post('hospital_type2');
    $hospital_filters['hospital.type3'] = is_null($this->input->post('hospital_type3')) ? '' : $this->input->post('hospital_type3');
    $hospital_filters['hospital.type4'] = is_null($this->input->post('hospital_type4')) ? '' : $this->input->post('hospital_type4');
    $hospital_filters['hospital.type5'] = is_null($this->input->post('hospital_type5')) ? '' : $this->input->post('hospital_type5');
    $hospital_filters['hospital.type6'] = is_null($this->input->post('hospital_type6')) ? '' : $this->input->post('hospital_type6');
    $this->session->set_userdata('village_town.village_town_id', $hospital_filters['village_town.village_town_id']);
    $this->session->set_userdata('hospital.hospital_id', $hospital_filters['hospital.hospital_id']);
    $this->db->select('village_town.village_town_id AS hospital_village_town_id, hospital.hospital_id AS hospital_hospital_id,
    hospital.hospital_type_id AS hospital_hospital_type_id, hospital.hospital AS hospital_hospital,
    hospital.hospital_short_name AS hospital_hospital_short_name, hospital.description AS hospital_description,
    hospital.place AS hospital_place, hospital.village_town_id AS hospital_village_town_id,
    hospital.district AS hospital_district, hospital.state AS hospital_state,
    hospital.logo AS hospital_logo, hospital.type1 AS hospital_type1,
    hospital.type2 AS hospital_type2, hospital.type3 AS hospital_type3,
    hospital.type4 AS hospital_type4, hospital.type5 AS hospital_type5,
    hospital.type6 AS hospital_type6')->from('hospital');
    $this->db->join('village_town', 'hospital.village_town_id = village_town.village_town_id', 'left');
    $this->db->where($hospital_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $hospital_filters);
  }
}