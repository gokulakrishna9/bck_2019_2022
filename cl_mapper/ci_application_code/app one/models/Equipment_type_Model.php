<?php class Equipment_type_model extends CI_Model {
  function equipment_type_create() {
    $equipment_type_post = [];
    $equipment_type_post['equipment_type'] = is_null($this->input->post('equipment_type')) ? '' : $this->input->post('equipment_type');
    $equipment_type_post['equipment_type_id'] = is_null($this->input->post('equipment_type_id')) ? '' : $this->input->post('equipment_type_id');
    $this->db->insert('equipment_type', $equipment_type_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $equipment_type_post);
  }
  function equipment_type_update($equipment_type_id) {
    $equipment_type_post['equipment_type.equipment_type_id'] = $this->session->equipment_type_equipment_type_id;
    $equipment_type_post['equipment_type.equipment_type_id'] = $equipment_type_equipment_type_id;
    $equipment_type_post['equipment_type.equipment_type'] = is_null($this->input->post('equipment_type_equipment_type')) ? '' : $this->input->post('equipment_type_equipment_type');
    $this->session->set_userdata('equipment_type.equipment_type_id', $equipment_type_post['equipment_type.equipment_type_id']);
    $this->db->update('equipment_type', $equipment_type_post, array('equipment_type_id' => $equipment_type_post['equipment_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $equipment_type_post);
  }
  function equipment_type_delete() {
    $equipment_type_delete['equipment_type.equipment_type'] = is_null($this->input->post('equipment_type_equipment_type')) ? '' : $this->input->post('equipment_type_equipment_type');
    $equipment_type_delete['equipment_type.equipment_type_id'] = is_null($this->input->post('equipment_type_equipment_type_id')) ? '' : $this->input->post('equipment_type_equipment_type_id');
    $this->db->delete('equipment_type', array('equipment_type_id' => $equipment_type_delete['equipment_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $equipment_type_delete);
  }
  function equipment_type_get_records($equipment_type_id) {
    $equipment_type_filters['equipment_type.equipment_type_id'] = $this->session->equipment_type_equipment_type_id;
    $equipment_type_filters['equipment_type.equipment_type_id'] = $equipment_type_equipment_type_id;
    $equipment_type_filters['equipment_type.equipment_type'] = is_null($this->input->post('equipment_type_equipment_type')) ? '' : $this->input->post('equipment_type_equipment_type');
    $this->session->set_userdata('equipment_type.equipment_type_id', $equipment_type_filters['equipment_type.equipment_type_id']);
    $this->db->select('equipment_type.equipment_type AS equipment_type_equipment_type, equipment_type.equipment_type_id AS equipment_type_equipment_type_id')->from('equipment_type');
    $this->db->where($equipment_type_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $equipment_type_filters);
  }
}