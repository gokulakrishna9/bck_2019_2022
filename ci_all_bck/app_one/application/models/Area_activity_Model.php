<?php class Area_activity_model extends CI_Model {
  function area_activity_create() {
    $area_activity_post = [];
    $area_activity_post['area_types.area_type_id'] = $this->session->area_types_area_type_id;
    $area_activity_post['area_types.area_type_id'] = $area_types_area_type_id;
    $area_activity_post['area_activity_id'] = is_null($this->input->post('area_activity_id')) ? '' : $this->input->post('area_activity_id');
    $area_activity_post['activity_name'] = is_null($this->input->post('activity_name')) ? '' : $this->input->post('activity_name');
    $area_activity_post['frequency'] = is_null($this->input->post('frequency')) ? '' : $this->input->post('frequency');
    $area_activity_post['weightage'] = is_null($this->input->post('weightage')) ? '' : $this->input->post('weightage');
    $area_activity_post['area_type_id'] = is_null($this->input->post('area_type_id')) ? '' : $this->input->post('area_type_id');
    $area_activity_post['frequency_type'] = is_null($this->input->post('frequency_type')) ? '' : $this->input->post('frequency_type');
    $this->session->set_userdata('area_types.area_type_id', $area_activity_post['area_types.area_type_id']);
    $this->db->insert('area_activity', $area_activity_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $area_activity_post);
  }
  function area_activity_update() {
    $area_activity_post['area_types.area_type_id'] = $this->session->area_types_area_type_id;
    $area_activity_post['area_activity.area_activity_id'] = $this->session->area_activity_area_activity_id;
    $area_activity_post['area_types.area_type_id'] = $area_types_area_type_id;
    $area_activity_post['area_activity.area_activity_id'] = $area_activity_area_activity_id;
    $area_activity_post['area_activity.activity_name'] = is_null($this->input->post('area_activity_activity_name')) ? '' : $this->input->post('area_activity_activity_name');
    $area_activity_post['area_activity.frequency'] = is_null($this->input->post('area_activity_frequency')) ? '' : $this->input->post('area_activity_frequency');
    $area_activity_post['area_activity.weightage'] = is_null($this->input->post('area_activity_weightage')) ? '' : $this->input->post('area_activity_weightage');
    $area_activity_post['area_activity.area_type_id'] = is_null($this->input->post('area_activity_area_type_id')) ? '' : $this->input->post('area_activity_area_type_id');
    $area_activity_post['area_activity.frequency_type'] = is_null($this->input->post('area_activity_frequency_type')) ? '' : $this->input->post('area_activity_frequency_type');
    $this->session->set_userdata('area_types.area_type_id', $area_activity_post['area_types.area_type_id']);
    $this->session->set_userdata('area_activity.area_activity_id', $area_activity_post['area_activity.area_activity_id']);
    $this->db->update('area_activity', $area_activity_post, array('area_activity_id' => $area_activity_post['area_activity_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $area_activity_post);
  }
  function area_activity_delete() {
    $area_activity_delete['area_activity.area_activity_id'] = is_null($this->input->post('area_activity_area_activity_id')) ? '' : $this->input->post('area_activity_area_activity_id');
    $area_activity_delete['area_activity.activity_name'] = is_null($this->input->post('area_activity_activity_name')) ? '' : $this->input->post('area_activity_activity_name');
    $area_activity_delete['area_activity.frequency'] = is_null($this->input->post('area_activity_frequency')) ? '' : $this->input->post('area_activity_frequency');
    $area_activity_delete['area_activity.weightage'] = is_null($this->input->post('area_activity_weightage')) ? '' : $this->input->post('area_activity_weightage');
    $area_activity_delete['area_activity.area_type_id'] = is_null($this->input->post('area_activity_area_type_id')) ? '' : $this->input->post('area_activity_area_type_id');
    $area_activity_delete['area_activity.frequency_type'] = is_null($this->input->post('area_activity_frequency_type')) ? '' : $this->input->post('area_activity_frequency_type');
    $this->db->delete('area_activity', array('area_activity_id' => $area_activity_delete['area_activity_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $area_activity_delete);
  }
  function area_activity_get_records() {
    $area_activity_filters['area_types.area_type_id'] = $this->session->area_types_area_type_id;
    $area_activity_filters['area_activity.area_activity_id'] = $this->session->area_activity_area_activity_id;
    $area_activity_filters['area_types.area_type_id'] = $area_types_area_type_id;
    $area_activity_filters['area_activity.area_activity_id'] = $area_activity_area_activity_id;
    $area_activity_filters['area_activity.activity_name'] = is_null($this->input->post('area_activity_activity_name')) ? '' : $this->input->post('area_activity_activity_name');
    $area_activity_filters['area_activity.frequency'] = is_null($this->input->post('area_activity_frequency')) ? '' : $this->input->post('area_activity_frequency');
    $area_activity_filters['area_activity.weightage'] = is_null($this->input->post('area_activity_weightage')) ? '' : $this->input->post('area_activity_weightage');
    $area_activity_filters['area_activity.area_type_id'] = is_null($this->input->post('area_activity_area_type_id')) ? '' : $this->input->post('area_activity_area_type_id');
    $area_activity_filters['area_activity.frequency_type'] = is_null($this->input->post('area_activity_frequency_type')) ? '' : $this->input->post('area_activity_frequency_type');
    $this->session->set_userdata('area_types.area_type_id', $area_activity_filters['area_types.area_type_id']);
    $this->session->set_userdata('area_activity.area_activity_id', $area_activity_filters['area_activity.area_activity_id']);
    $this->db->select('area_types.area_type_id AS area_activity_area_type_id, area_activity.area_activity_id AS area_activity_area_activity_id,
    area_activity.activity_name AS area_activity_activity_name, area_activity.frequency AS area_activity_frequency,
    area_activity.weightage AS area_activity_weightage, area_activity.area_type_id AS area_activity_area_type_id,
    area_activity.frequency_type AS area_activity_frequency_type')->from('area_activity');
    $this->db->join('area_types', 'area_activity.area_type_id = area_types.area_type_id', 'left');
    $this->db->where($area_activity_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $area_activity_filters);
  }
}