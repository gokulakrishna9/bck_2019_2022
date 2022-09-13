<?php class Specimen_type_model extends CI_Model {
  function specimen_type_create() {
    $specimen_type_post = [];
    $specimen_type_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $specimen_type_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $specimen_type_post['hospital.hospital_id'] = $hospital_hospital_id;
    $specimen_type_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $specimen_type_post['specimen_type_id'] = is_null($this->input->post('specimen_type_id')) ? '' : $this->input->post('specimen_type_id');
    $specimen_type_post['specimen_type'] = is_null($this->input->post('specimen_type')) ? '' : $this->input->post('specimen_type');
    $specimen_type_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $specimen_type_post['temp_specimen_type_id'] = is_null($this->input->post('temp_specimen_type_id')) ? '' : $this->input->post('temp_specimen_type_id');
    $this->session->set_userdata('hospital.hospital_id', $specimen_type_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $specimen_type_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('specimen_type', $specimen_type_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $specimen_type_post);
  }
  function specimen_type_update() {
    $specimen_type_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $specimen_type_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $specimen_type_post['specimen_type.specimen_type_id'] = $this->session->specimen_type_specimen_type_id;
    $specimen_type_post['hospital.hospital_id'] = $hospital_hospital_id;
    $specimen_type_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $specimen_type_post['specimen_type.specimen_type_id'] = $specimen_type_specimen_type_id;
    $specimen_type_post['specimen_type.specimen_type'] = is_null($this->input->post('specimen_type_specimen_type')) ? '' : $this->input->post('specimen_type_specimen_type');
    $specimen_type_post['specimen_type.hospital_id'] = is_null($this->input->post('specimen_type_hospital_id')) ? '' : $this->input->post('specimen_type_hospital_id');
    $specimen_type_post['specimen_type.temp_specimen_type_id'] = is_null($this->input->post('specimen_type_temp_specimen_type_id')) ? '' : $this->input->post('specimen_type_temp_specimen_type_id');
    $this->session->set_userdata('hospital.hospital_id', $specimen_type_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $specimen_type_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('specimen_type.specimen_type_id', $specimen_type_post['specimen_type.specimen_type_id']);
    $this->db->update('specimen_type', $specimen_type_post, array('specimen_type_id' => $specimen_type_post['specimen_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $specimen_type_post);
  }
  function specimen_type_delete() {
    $specimen_type_delete['specimen_type.specimen_type_id'] = is_null($this->input->post('specimen_type_specimen_type_id')) ? '' : $this->input->post('specimen_type_specimen_type_id');
    $specimen_type_delete['specimen_type.specimen_type'] = is_null($this->input->post('specimen_type_specimen_type')) ? '' : $this->input->post('specimen_type_specimen_type');
    $specimen_type_delete['specimen_type.hospital_id'] = is_null($this->input->post('specimen_type_hospital_id')) ? '' : $this->input->post('specimen_type_hospital_id');
    $specimen_type_delete['specimen_type.temp_specimen_type_id'] = is_null($this->input->post('specimen_type_temp_specimen_type_id')) ? '' : $this->input->post('specimen_type_temp_specimen_type_id');
    $this->db->delete('specimen_type', array('specimen_type_id' => $specimen_type_delete['specimen_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $specimen_type_delete);
  }
  function specimen_type_get_records() {
    $specimen_type_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $specimen_type_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $specimen_type_filters['specimen_type.specimen_type_id'] = $this->session->specimen_type_specimen_type_id;
    $specimen_type_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $specimen_type_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $specimen_type_filters['specimen_type.specimen_type_id'] = $specimen_type_specimen_type_id;
    $specimen_type_filters['specimen_type.specimen_type'] = is_null($this->input->post('specimen_type_specimen_type')) ? '' : $this->input->post('specimen_type_specimen_type');
    $specimen_type_filters['specimen_type.hospital_id'] = is_null($this->input->post('specimen_type_hospital_id')) ? '' : $this->input->post('specimen_type_hospital_id');
    $specimen_type_filters['specimen_type.temp_specimen_type_id'] = is_null($this->input->post('specimen_type_temp_specimen_type_id')) ? '' : $this->input->post('specimen_type_temp_specimen_type_id');
    $this->session->set_userdata('hospital.hospital_id', $specimen_type_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $specimen_type_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('specimen_type.specimen_type_id', $specimen_type_filters['specimen_type.specimen_type_id']);
    $this->db->select('hospital.hospital_id AS specimen_type_hospital_id, staff_previous_hospital.hospital_id AS specimen_type_hospital_id,
    specimen_type.specimen_type_id AS specimen_type_specimen_type_id, specimen_type.specimen_type AS specimen_type_specimen_type,
    specimen_type.hospital_id AS specimen_type_hospital_id, specimen_type.temp_specimen_type_id AS specimen_type_temp_specimen_type_id')->from('specimen_type');
    $this->db->join('hospital', 'specimen_type.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'specimen_type.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($specimen_type_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $specimen_type_filters);
  }
}