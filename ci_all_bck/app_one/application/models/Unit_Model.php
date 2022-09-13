<?php class Unit_model extends CI_Model {
  function unit_create() {
    $unit_post = [];
    $unit_post['department.department_id'] = $this->session->department_department_id;
    $unit_post['department.department_id'] = $department_department_id;
    $unit_post['unit_id'] = is_null($this->input->post('unit_id')) ? '' : $this->input->post('unit_id');
    $unit_post['unit_head_staff_id'] = is_null($this->input->post('unit_head_staff_id')) ? '' : $this->input->post('unit_head_staff_id');
    $unit_post['unit_name'] = is_null($this->input->post('unit_name')) ? '' : $this->input->post('unit_name');
    $unit_post['department_id'] = is_null($this->input->post('department_id')) ? '' : $this->input->post('department_id');
    $unit_post['beds'] = is_null($this->input->post('beds')) ? '' : $this->input->post('beds');
    $unit_post['lab_report_staff_id'] = is_null($this->input->post('lab_report_staff_id')) ? '' : $this->input->post('lab_report_staff_id');
    $unit_post['temp_unit_id'] = is_null($this->input->post('temp_unit_id')) ? '' : $this->input->post('temp_unit_id');
    $this->session->set_userdata('department.department_id', $unit_post['department.department_id']);
    $this->db->insert('unit', $unit_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $unit_post);
  }
  function unit_update() {
    $unit_post['department.department_id'] = $this->session->department_department_id;
    $unit_post['unit.unit_id'] = $this->session->unit_unit_id;
    $unit_post['department.department_id'] = $department_department_id;
    $unit_post['unit.unit_id'] = $unit_unit_id;
    $unit_post['unit.unit_head_staff_id'] = is_null($this->input->post('unit_unit_head_staff_id')) ? '' : $this->input->post('unit_unit_head_staff_id');
    $unit_post['unit.unit_name'] = is_null($this->input->post('unit_unit_name')) ? '' : $this->input->post('unit_unit_name');
    $unit_post['unit.department_id'] = is_null($this->input->post('unit_department_id')) ? '' : $this->input->post('unit_department_id');
    $unit_post['unit.beds'] = is_null($this->input->post('unit_beds')) ? '' : $this->input->post('unit_beds');
    $unit_post['unit.lab_report_staff_id'] = is_null($this->input->post('unit_lab_report_staff_id')) ? '' : $this->input->post('unit_lab_report_staff_id');
    $unit_post['unit.temp_unit_id'] = is_null($this->input->post('unit_temp_unit_id')) ? '' : $this->input->post('unit_temp_unit_id');
    $this->session->set_userdata('department.department_id', $unit_post['department.department_id']);
    $this->session->set_userdata('unit.unit_id', $unit_post['unit.unit_id']);
    $this->db->update('unit', $unit_post, array('unit_id' => $unit_post['unit_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $unit_post);
  }
  function unit_delete() {
    $unit_delete['unit.unit_id'] = is_null($this->input->post('unit_unit_id')) ? '' : $this->input->post('unit_unit_id');
    $unit_delete['unit.unit_head_staff_id'] = is_null($this->input->post('unit_unit_head_staff_id')) ? '' : $this->input->post('unit_unit_head_staff_id');
    $unit_delete['unit.unit_name'] = is_null($this->input->post('unit_unit_name')) ? '' : $this->input->post('unit_unit_name');
    $unit_delete['unit.department_id'] = is_null($this->input->post('unit_department_id')) ? '' : $this->input->post('unit_department_id');
    $unit_delete['unit.beds'] = is_null($this->input->post('unit_beds')) ? '' : $this->input->post('unit_beds');
    $unit_delete['unit.lab_report_staff_id'] = is_null($this->input->post('unit_lab_report_staff_id')) ? '' : $this->input->post('unit_lab_report_staff_id');
    $unit_delete['unit.temp_unit_id'] = is_null($this->input->post('unit_temp_unit_id')) ? '' : $this->input->post('unit_temp_unit_id');
    $this->db->delete('unit', array('unit_id' => $unit_delete['unit_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $unit_delete);
  }
  function unit_get_records() {
    $unit_filters['department.department_id'] = $this->session->department_department_id;
    $unit_filters['unit.unit_id'] = $this->session->unit_unit_id;
    $unit_filters['department.department_id'] = $department_department_id;
    $unit_filters['unit.unit_id'] = $unit_unit_id;
    $unit_filters['unit.unit_head_staff_id'] = is_null($this->input->post('unit_unit_head_staff_id')) ? '' : $this->input->post('unit_unit_head_staff_id');
    $unit_filters['unit.unit_name'] = is_null($this->input->post('unit_unit_name')) ? '' : $this->input->post('unit_unit_name');
    $unit_filters['unit.department_id'] = is_null($this->input->post('unit_department_id')) ? '' : $this->input->post('unit_department_id');
    $unit_filters['unit.beds'] = is_null($this->input->post('unit_beds')) ? '' : $this->input->post('unit_beds');
    $unit_filters['unit.lab_report_staff_id'] = is_null($this->input->post('unit_lab_report_staff_id')) ? '' : $this->input->post('unit_lab_report_staff_id');
    $unit_filters['unit.temp_unit_id'] = is_null($this->input->post('unit_temp_unit_id')) ? '' : $this->input->post('unit_temp_unit_id');
    $this->session->set_userdata('department.department_id', $unit_filters['department.department_id']);
    $this->session->set_userdata('unit.unit_id', $unit_filters['unit.unit_id']);
    $this->db->select('department.department_id AS unit_department_id, unit.unit_id AS unit_unit_id,
    unit.unit_head_staff_id AS unit_unit_head_staff_id, unit.unit_name AS unit_unit_name,
    unit.department_id AS unit_department_id, unit.beds AS unit_beds,
    unit.lab_report_staff_id AS unit_lab_report_staff_id, unit.temp_unit_id AS unit_temp_unit_id')->from('unit');
    $this->db->join('department', 'unit.department_id = department.department_id', 'left');
    $this->db->where($unit_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $unit_filters);
  }
}