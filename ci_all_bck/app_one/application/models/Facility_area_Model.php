<?php class Facility_area_model extends CI_Model {
  function facility_area_create() {
    $facility_area_post = [];
    $facility_area_post['facility.facility_id'] = $this->session->facility_facility_id;
    $facility_area_post['department.department_id'] = $this->session->department_department_id;
    $facility_area_post['area_types.area_type_id'] = $this->session->area_types_area_type_id;
    $facility_area_post['facility.facility_id'] = $facility_facility_id;
    $facility_area_post['department.department_id'] = $department_department_id;
    $facility_area_post['area_types.area_type_id'] = $area_types_area_type_id;
    $facility_area_post['facility_area_id'] = is_null($this->input->post('facility_area_id')) ? '' : $this->input->post('facility_area_id');
    $facility_area_post['area_name'] = is_null($this->input->post('area_name')) ? '' : $this->input->post('area_name');
    $facility_area_post['facility_id'] = is_null($this->input->post('facility_id')) ? '' : $this->input->post('facility_id');
    $facility_area_post['department_id'] = is_null($this->input->post('department_id')) ? '' : $this->input->post('department_id');
    $facility_area_post['area_type_id'] = is_null($this->input->post('area_type_id')) ? '' : $this->input->post('area_type_id');
    $this->session->set_userdata('facility.facility_id', $facility_area_post['facility.facility_id']);
    $this->session->set_userdata('department.department_id', $facility_area_post['department.department_id']);
    $this->session->set_userdata('area_types.area_type_id', $facility_area_post['area_types.area_type_id']);
    $this->db->insert('facility_area', $facility_area_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $facility_area_post);
  }
  function facility_area_update() {
    $facility_area_post['facility.facility_id'] = $this->session->facility_facility_id;
    $facility_area_post['department.department_id'] = $this->session->department_department_id;
    $facility_area_post['area_types.area_type_id'] = $this->session->area_types_area_type_id;
    $facility_area_post['facility_area.facility_area_id'] = $this->session->facility_area_facility_area_id;
    $facility_area_post['facility.facility_id'] = $facility_facility_id;
    $facility_area_post['department.department_id'] = $department_department_id;
    $facility_area_post['area_types.area_type_id'] = $area_types_area_type_id;
    $facility_area_post['facility_area.facility_area_id'] = $facility_area_facility_area_id;
    $facility_area_post['facility_area.area_name'] = is_null($this->input->post('facility_area_area_name')) ? '' : $this->input->post('facility_area_area_name');
    $facility_area_post['facility_area.facility_id'] = is_null($this->input->post('facility_area_facility_id')) ? '' : $this->input->post('facility_area_facility_id');
    $facility_area_post['facility_area.department_id'] = is_null($this->input->post('facility_area_department_id')) ? '' : $this->input->post('facility_area_department_id');
    $facility_area_post['facility_area.area_type_id'] = is_null($this->input->post('facility_area_area_type_id')) ? '' : $this->input->post('facility_area_area_type_id');
    $this->session->set_userdata('facility.facility_id', $facility_area_post['facility.facility_id']);
    $this->session->set_userdata('department.department_id', $facility_area_post['department.department_id']);
    $this->session->set_userdata('area_types.area_type_id', $facility_area_post['area_types.area_type_id']);
    $this->session->set_userdata('facility_area.facility_area_id', $facility_area_post['facility_area.facility_area_id']);
    $this->db->update('facility_area', $facility_area_post, array('facility_area_id' => $facility_area_post['facility_area_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $facility_area_post);
  }
  function facility_area_delete() {
    $facility_area_delete['facility_area.facility_area_id'] = is_null($this->input->post('facility_area_facility_area_id')) ? '' : $this->input->post('facility_area_facility_area_id');
    $facility_area_delete['facility_area.area_name'] = is_null($this->input->post('facility_area_area_name')) ? '' : $this->input->post('facility_area_area_name');
    $facility_area_delete['facility_area.facility_id'] = is_null($this->input->post('facility_area_facility_id')) ? '' : $this->input->post('facility_area_facility_id');
    $facility_area_delete['facility_area.department_id'] = is_null($this->input->post('facility_area_department_id')) ? '' : $this->input->post('facility_area_department_id');
    $facility_area_delete['facility_area.area_type_id'] = is_null($this->input->post('facility_area_area_type_id')) ? '' : $this->input->post('facility_area_area_type_id');
    $this->db->delete('facility_area', array('facility_area_id' => $facility_area_delete['facility_area_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $facility_area_delete);
  }
  function facility_area_get_records() {
    $facility_area_filters['facility.facility_id'] = $this->session->facility_facility_id;
    $facility_area_filters['department.department_id'] = $this->session->department_department_id;
    $facility_area_filters['area_types.area_type_id'] = $this->session->area_types_area_type_id;
    $facility_area_filters['facility_area.facility_area_id'] = $this->session->facility_area_facility_area_id;
    $facility_area_filters['facility.facility_id'] = $facility_facility_id;
    $facility_area_filters['department.department_id'] = $department_department_id;
    $facility_area_filters['area_types.area_type_id'] = $area_types_area_type_id;
    $facility_area_filters['facility_area.facility_area_id'] = $facility_area_facility_area_id;
    $facility_area_filters['facility_area.area_name'] = is_null($this->input->post('facility_area_area_name')) ? '' : $this->input->post('facility_area_area_name');
    $facility_area_filters['facility_area.facility_id'] = is_null($this->input->post('facility_area_facility_id')) ? '' : $this->input->post('facility_area_facility_id');
    $facility_area_filters['facility_area.department_id'] = is_null($this->input->post('facility_area_department_id')) ? '' : $this->input->post('facility_area_department_id');
    $facility_area_filters['facility_area.area_type_id'] = is_null($this->input->post('facility_area_area_type_id')) ? '' : $this->input->post('facility_area_area_type_id');
    $this->session->set_userdata('facility.facility_id', $facility_area_filters['facility.facility_id']);
    $this->session->set_userdata('department.department_id', $facility_area_filters['department.department_id']);
    $this->session->set_userdata('area_types.area_type_id', $facility_area_filters['area_types.area_type_id']);
    $this->session->set_userdata('facility_area.facility_area_id', $facility_area_filters['facility_area.facility_area_id']);
    $this->db->select('facility.facility_id AS facility_area_facility_id, department.department_id AS facility_area_department_id,
    area_types.area_type_id AS facility_area_area_type_id, facility_area.facility_area_id AS facility_area_facility_area_id,
    facility_area.area_name AS facility_area_area_name, facility_area.facility_id AS facility_area_facility_id,
    facility_area.department_id AS facility_area_department_id, facility_area.area_type_id AS facility_area_area_type_id')->from('facility_area');
    $this->db->join('facility', 'facility_area.facility_id = facility.facility_id', 'left');
    $this->db->join('department', 'facility_area.department_id = department.department_id', 'left');
    $this->db->join('area_types', 'facility_area.area_type_id = area_types.area_type_id', 'left');
    $this->db->where($facility_area_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $facility_area_filters);
  }
}