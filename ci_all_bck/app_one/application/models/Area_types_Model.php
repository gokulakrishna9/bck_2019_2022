<?php class Area_types_model extends CI_Model {
  function area_types_create() {
    $area_types_post = [];
    $area_types_post['area_type_id'] = is_null($this->input->post('area_type_id')) ? '' : $this->input->post('area_type_id');
    $area_types_post['area_type'] = is_null($this->input->post('area_type')) ? '' : $this->input->post('area_type');
    $this->db->insert('area_types', $area_types_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $area_types_post);
  }
  function area_types_update() {
    $area_types_post['area_types.area_type_id'] = $this->session->area_types_area_type_id;
    $area_types_post['area_types.area_type_id'] = $area_types_area_type_id;
    $area_types_post['area_types.area_type'] = is_null($this->input->post('area_types_area_type')) ? '' : $this->input->post('area_types_area_type');
    $this->session->set_userdata('area_types.area_type_id', $area_types_post['area_types.area_type_id']);
    $this->db->update('area_types', $area_types_post, array('area_type_id' => $area_types_post['area_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $area_types_post);
  }
  function area_types_delete() {
    $area_types_delete['area_types.area_type_id'] = is_null($this->input->post('area_types_area_type_id')) ? '' : $this->input->post('area_types_area_type_id');
    $area_types_delete['area_types.area_type'] = is_null($this->input->post('area_types_area_type')) ? '' : $this->input->post('area_types_area_type');
    $this->db->delete('area_types', array('area_type_id' => $area_types_delete['area_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $area_types_delete);
  }
  function area_types_get_records() {
    $area_types_filters['area_types.area_type_id'] = $this->session->area_types_area_type_id;
    $area_types_filters['area_types.area_type_id'] = $area_types_area_type_id;
    $area_types_filters['area_types.area_type'] = is_null($this->input->post('area_types_area_type')) ? '' : $this->input->post('area_types_area_type');
    $this->session->set_userdata('area_types.area_type_id', $area_types_filters['area_types.area_type_id']);
    $this->db->select('area_types.area_type_id AS area_types_area_type_id, area_types.area_type AS area_types_area_type')->from('area_types');
    $this->db->where($area_types_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $area_types_filters);
  }
}