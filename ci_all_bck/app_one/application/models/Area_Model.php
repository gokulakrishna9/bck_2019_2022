<?php class Area_model extends CI_Model {
  function area_create() {
    $area_post = [];
    $area_post['department.department_id'] = $this->session->department_department_id;
    $area_post['area_types.area_type_id'] = $this->session->area_types_area_type_id;
    $area_post['department.department_id'] = $department_department_id;
    $area_post['area_types.area_type_id'] = $area_types_area_type_id;
    $area_post['area_id'] = is_null($this->input->post('area_id')) ? '' : $this->input->post('area_id');
    $area_post['area_name'] = is_null($this->input->post('area_name')) ? '' : $this->input->post('area_name');
    $area_post['department_id'] = is_null($this->input->post('department_id')) ? '' : $this->input->post('department_id');
    $area_post['beds'] = is_null($this->input->post('beds')) ? '' : $this->input->post('beds');
    $area_post['area_type_id'] = is_null($this->input->post('area_type_id')) ? '' : $this->input->post('area_type_id');
    $area_post['lab_report_staff_id'] = is_null($this->input->post('lab_report_staff_id')) ? '' : $this->input->post('lab_report_staff_id');
    $area_post['temp_area_id'] = is_null($this->input->post('temp_area_id')) ? '' : $this->input->post('temp_area_id');
    $this->session->set_userdata('department.department_id', $area_post['department.department_id']);
    $this->session->set_userdata('area_types.area_type_id', $area_post['area_types.area_type_id']);
    $this->db->insert('area', $area_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $area_post);
  }
  function area_update() {
    $area_post['department.department_id'] = $this->session->department_department_id;
    $area_post['area_types.area_type_id'] = $this->session->area_types_area_type_id;
    $area_post['area.area_id'] = $this->session->area_area_id;
    $area_post['department.department_id'] = $department_department_id;
    $area_post['area_types.area_type_id'] = $area_types_area_type_id;
    $area_post['area.area_id'] = $area_area_id;
    $area_post['area.area_name'] = is_null($this->input->post('area_area_name')) ? '' : $this->input->post('area_area_name');
    $area_post['area.department_id'] = is_null($this->input->post('area_department_id')) ? '' : $this->input->post('area_department_id');
    $area_post['area.beds'] = is_null($this->input->post('area_beds')) ? '' : $this->input->post('area_beds');
    $area_post['area.area_type_id'] = is_null($this->input->post('area_area_type_id')) ? '' : $this->input->post('area_area_type_id');
    $area_post['area.lab_report_staff_id'] = is_null($this->input->post('area_lab_report_staff_id')) ? '' : $this->input->post('area_lab_report_staff_id');
    $area_post['area.temp_area_id'] = is_null($this->input->post('area_temp_area_id')) ? '' : $this->input->post('area_temp_area_id');
    $this->session->set_userdata('department.department_id', $area_post['department.department_id']);
    $this->session->set_userdata('area_types.area_type_id', $area_post['area_types.area_type_id']);
    $this->session->set_userdata('area.area_id', $area_post['area.area_id']);
    $this->db->update('area', $area_post, array('area_id' => $area_post['area_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $area_post);
  }
  function area_delete() {
    $area_delete['area.area_id'] = is_null($this->input->post('area_area_id')) ? '' : $this->input->post('area_area_id');
    $area_delete['area.area_name'] = is_null($this->input->post('area_area_name')) ? '' : $this->input->post('area_area_name');
    $area_delete['area.department_id'] = is_null($this->input->post('area_department_id')) ? '' : $this->input->post('area_department_id');
    $area_delete['area.beds'] = is_null($this->input->post('area_beds')) ? '' : $this->input->post('area_beds');
    $area_delete['area.area_type_id'] = is_null($this->input->post('area_area_type_id')) ? '' : $this->input->post('area_area_type_id');
    $area_delete['area.lab_report_staff_id'] = is_null($this->input->post('area_lab_report_staff_id')) ? '' : $this->input->post('area_lab_report_staff_id');
    $area_delete['area.temp_area_id'] = is_null($this->input->post('area_temp_area_id')) ? '' : $this->input->post('area_temp_area_id');
    $this->db->delete('area', array('area_id' => $area_delete['area_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $area_delete);
  }
  function area_get_records() {
    $area_filters['department.department_id'] = $this->session->department_department_id;
    $area_filters['area_types.area_type_id'] = $this->session->area_types_area_type_id;
    $area_filters['area.area_id'] = $this->session->area_area_id;
    $area_filters['department.department_id'] = $department_department_id;
    $area_filters['area_types.area_type_id'] = $area_types_area_type_id;
    $area_filters['area.area_id'] = $area_area_id;
    $area_filters['area.area_name'] = is_null($this->input->post('area_area_name')) ? '' : $this->input->post('area_area_name');
    $area_filters['area.department_id'] = is_null($this->input->post('area_department_id')) ? '' : $this->input->post('area_department_id');
    $area_filters['area.beds'] = is_null($this->input->post('area_beds')) ? '' : $this->input->post('area_beds');
    $area_filters['area.area_type_id'] = is_null($this->input->post('area_area_type_id')) ? '' : $this->input->post('area_area_type_id');
    $area_filters['area.lab_report_staff_id'] = is_null($this->input->post('area_lab_report_staff_id')) ? '' : $this->input->post('area_lab_report_staff_id');
    $area_filters['area.temp_area_id'] = is_null($this->input->post('area_temp_area_id')) ? '' : $this->input->post('area_temp_area_id');
    $this->session->set_userdata('department.department_id', $area_filters['department.department_id']);
    $this->session->set_userdata('area_types.area_type_id', $area_filters['area_types.area_type_id']);
    $this->session->set_userdata('area.area_id', $area_filters['area.area_id']);
    $this->db->select('department.department_id AS area_department_id, area_types.area_type_id AS area_area_type_id,
    area.area_id AS area_area_id, area.area_name AS area_area_name,
    area.department_id AS area_department_id, area.beds AS area_beds,
    area.area_type_id AS area_area_type_id, area.lab_report_staff_id AS area_lab_report_staff_id,
    area.temp_area_id AS area_temp_area_id')->from('area');
    $this->db->join('department', 'area.department_id = department.department_id', 'left');
    $this->db->join('area_types', 'area.area_type_id = area_types.area_type_id', 'left');
    $this->db->where($area_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $area_filters);
  }
}