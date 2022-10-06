<?php class Department_model extends CI_Model {
  function department_create($hospital_hospital_id,$staff_previous_hospital_hospital_id) {
    $department_post = [];
    $department_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $department_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $department_post['hospital.hospital_id'] = $hospital_hospital_id;
    $department_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $department_post['clinical'] = is_null($this->input->post('clinical')) ? '' : $this->input->post('clinical');
    $department_post['department'] = is_null($this->input->post('department')) ? '' : $this->input->post('department');
    $department_post['department_email'] = is_null($this->input->post('department_email')) ? '' : $this->input->post('department_email');
    $department_post['department_id'] = is_null($this->input->post('department_id')) ? '' : $this->input->post('department_id');
    $department_post['description'] = is_null($this->input->post('description')) ? '' : $this->input->post('description');
    $department_post['floor'] = is_null($this->input->post('floor')) ? '' : $this->input->post('floor');
    $department_post['fri'] = is_null($this->input->post('fri')) ? '' : $this->input->post('fri');
    $department_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $department_post['lab_report_staff_id'] = is_null($this->input->post('lab_report_staff_id')) ? '' : $this->input->post('lab_report_staff_id');
    $department_post['mon'] = is_null($this->input->post('mon')) ? '' : $this->input->post('mon');
    $department_post['number_of_units'] = is_null($this->input->post('number_of_units')) ? '' : $this->input->post('number_of_units');
    $department_post['op_room_no'] = is_null($this->input->post('op_room_no')) ? '' : $this->input->post('op_room_no');
    $department_post['sat'] = is_null($this->input->post('sat')) ? '' : $this->input->post('sat');
    $department_post['temp_department_id'] = is_null($this->input->post('temp_department_id')) ? '' : $this->input->post('temp_department_id');
    $department_post['thr'] = is_null($this->input->post('thr')) ? '' : $this->input->post('thr');
    $department_post['tue'] = is_null($this->input->post('tue')) ? '' : $this->input->post('tue');
    $department_post['wed'] = is_null($this->input->post('wed')) ? '' : $this->input->post('wed');
    $this->session->set_userdata('hospital.hospital_id', $department_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $department_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('department', $department_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $department_post);
  }
  function department_update($hospital_id,$hospital_id,$department_id) {
    $department_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $department_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $department_post['department.department_id'] = $this->session->department_department_id;
    $department_post['hospital.hospital_id'] = $hospital_hospital_id;
    $department_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $department_post['department.department_id'] = $department_department_id;
    $department_post['department.clinical'] = is_null($this->input->post('department_clinical')) ? '' : $this->input->post('department_clinical');
    $department_post['department.department'] = is_null($this->input->post('department_department')) ? '' : $this->input->post('department_department');
    $department_post['department.department_email'] = is_null($this->input->post('department_department_email')) ? '' : $this->input->post('department_department_email');
    $department_post['department.description'] = is_null($this->input->post('department_description')) ? '' : $this->input->post('department_description');
    $department_post['department.floor'] = is_null($this->input->post('department_floor')) ? '' : $this->input->post('department_floor');
    $department_post['department.fri'] = is_null($this->input->post('department_fri')) ? '' : $this->input->post('department_fri');
    $department_post['department.hospital_id'] = is_null($this->input->post('department_hospital_id')) ? '' : $this->input->post('department_hospital_id');
    $department_post['department.lab_report_staff_id'] = is_null($this->input->post('department_lab_report_staff_id')) ? '' : $this->input->post('department_lab_report_staff_id');
    $department_post['department.mon'] = is_null($this->input->post('department_mon')) ? '' : $this->input->post('department_mon');
    $department_post['department.number_of_units'] = is_null($this->input->post('department_number_of_units')) ? '' : $this->input->post('department_number_of_units');
    $department_post['department.op_room_no'] = is_null($this->input->post('department_op_room_no')) ? '' : $this->input->post('department_op_room_no');
    $department_post['department.sat'] = is_null($this->input->post('department_sat')) ? '' : $this->input->post('department_sat');
    $department_post['department.temp_department_id'] = is_null($this->input->post('department_temp_department_id')) ? '' : $this->input->post('department_temp_department_id');
    $department_post['department.thr'] = is_null($this->input->post('department_thr')) ? '' : $this->input->post('department_thr');
    $department_post['department.tue'] = is_null($this->input->post('department_tue')) ? '' : $this->input->post('department_tue');
    $department_post['department.wed'] = is_null($this->input->post('department_wed')) ? '' : $this->input->post('department_wed');
    $this->session->set_userdata('hospital.hospital_id', $department_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $department_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('department.department_id', $department_post['department.department_id']);
    $this->db->update('department', $department_post, array('department_id' => $department_post['department_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $department_post);
  }
  function department_delete() {
    $department_delete['department.clinical'] = is_null($this->input->post('department_clinical')) ? '' : $this->input->post('department_clinical');
    $department_delete['department.department'] = is_null($this->input->post('department_department')) ? '' : $this->input->post('department_department');
    $department_delete['department.department_email'] = is_null($this->input->post('department_department_email')) ? '' : $this->input->post('department_department_email');
    $department_delete['department.department_id'] = is_null($this->input->post('department_department_id')) ? '' : $this->input->post('department_department_id');
    $department_delete['department.description'] = is_null($this->input->post('department_description')) ? '' : $this->input->post('department_description');
    $department_delete['department.floor'] = is_null($this->input->post('department_floor')) ? '' : $this->input->post('department_floor');
    $department_delete['department.fri'] = is_null($this->input->post('department_fri')) ? '' : $this->input->post('department_fri');
    $department_delete['department.hospital_id'] = is_null($this->input->post('department_hospital_id')) ? '' : $this->input->post('department_hospital_id');
    $department_delete['department.lab_report_staff_id'] = is_null($this->input->post('department_lab_report_staff_id')) ? '' : $this->input->post('department_lab_report_staff_id');
    $department_delete['department.mon'] = is_null($this->input->post('department_mon')) ? '' : $this->input->post('department_mon');
    $department_delete['department.number_of_units'] = is_null($this->input->post('department_number_of_units')) ? '' : $this->input->post('department_number_of_units');
    $department_delete['department.op_room_no'] = is_null($this->input->post('department_op_room_no')) ? '' : $this->input->post('department_op_room_no');
    $department_delete['department.sat'] = is_null($this->input->post('department_sat')) ? '' : $this->input->post('department_sat');
    $department_delete['department.temp_department_id'] = is_null($this->input->post('department_temp_department_id')) ? '' : $this->input->post('department_temp_department_id');
    $department_delete['department.thr'] = is_null($this->input->post('department_thr')) ? '' : $this->input->post('department_thr');
    $department_delete['department.tue'] = is_null($this->input->post('department_tue')) ? '' : $this->input->post('department_tue');
    $department_delete['department.wed'] = is_null($this->input->post('department_wed')) ? '' : $this->input->post('department_wed');
    $this->db->delete('department', array('department_id' => $department_delete['department_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $department_delete);
  }
  function department_get_records($hospital_id,$hospital_id,$department_id) {
    $department_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $department_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $department_filters['department.department_id'] = $this->session->department_department_id;
    $department_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $department_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $department_filters['department.department_id'] = $department_department_id;
    $department_filters['department.clinical'] = is_null($this->input->post('department_clinical')) ? '' : $this->input->post('department_clinical');
    $department_filters['department.department'] = is_null($this->input->post('department_department')) ? '' : $this->input->post('department_department');
    $department_filters['department.department_email'] = is_null($this->input->post('department_department_email')) ? '' : $this->input->post('department_department_email');
    $department_filters['department.description'] = is_null($this->input->post('department_description')) ? '' : $this->input->post('department_description');
    $department_filters['department.floor'] = is_null($this->input->post('department_floor')) ? '' : $this->input->post('department_floor');
    $department_filters['department.fri'] = is_null($this->input->post('department_fri')) ? '' : $this->input->post('department_fri');
    $department_filters['department.hospital_id'] = is_null($this->input->post('department_hospital_id')) ? '' : $this->input->post('department_hospital_id');
    $department_filters['department.lab_report_staff_id'] = is_null($this->input->post('department_lab_report_staff_id')) ? '' : $this->input->post('department_lab_report_staff_id');
    $department_filters['department.mon'] = is_null($this->input->post('department_mon')) ? '' : $this->input->post('department_mon');
    $department_filters['department.number_of_units'] = is_null($this->input->post('department_number_of_units')) ? '' : $this->input->post('department_number_of_units');
    $department_filters['department.op_room_no'] = is_null($this->input->post('department_op_room_no')) ? '' : $this->input->post('department_op_room_no');
    $department_filters['department.sat'] = is_null($this->input->post('department_sat')) ? '' : $this->input->post('department_sat');
    $department_filters['department.temp_department_id'] = is_null($this->input->post('department_temp_department_id')) ? '' : $this->input->post('department_temp_department_id');
    $department_filters['department.thr'] = is_null($this->input->post('department_thr')) ? '' : $this->input->post('department_thr');
    $department_filters['department.tue'] = is_null($this->input->post('department_tue')) ? '' : $this->input->post('department_tue');
    $department_filters['department.wed'] = is_null($this->input->post('department_wed')) ? '' : $this->input->post('department_wed');
    $this->session->set_userdata('hospital.hospital_id', $department_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $department_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('department.department_id', $department_filters['department.department_id']);
    $this->db->select('hospital.hospital_id AS department_hospital_id, staff_previous_hospital.hospital_id AS department_hospital_id,
    department.clinical AS department_clinical, department.department AS department_department,
    department.department_email AS department_department_email, department.department_id AS department_department_id,
    department.description AS department_description, department.floor AS department_floor,
    department.fri AS department_fri, department.hospital_id AS department_hospital_id,
    department.lab_report_staff_id AS department_lab_report_staff_id, department.mon AS department_mon,
    department.number_of_units AS department_number_of_units, department.op_room_no AS department_op_room_no,
    department.sat AS department_sat, department.temp_department_id AS department_temp_department_id,
    department.thr AS department_thr, department.tue AS department_tue,
    department.wed AS department_wed')->from('department');
    $this->db->join('hospital', 'department.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'department.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($department_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $department_filters);
  }
}