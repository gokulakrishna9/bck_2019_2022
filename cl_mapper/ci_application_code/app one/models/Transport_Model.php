<?php class Transport_model extends CI_Model {
  function transport_create($staff_staff_id,$mlc_visit_id,$patient_visit_visit_id) {
    $transport_post = [];
    $transport_post['staff.staff_id'] = $this->session->staff_staff_id;
    $transport_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $transport_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $transport_post['staff.staff_id'] = $staff_staff_id;
    $transport_post['mlc.visit_id'] = $mlc_visit_id;
    $transport_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $transport_post['end_date_time'] = is_null($this->input->post('end_date_time')) ? '' : $this->input->post('end_date_time');
    $transport_post['entry_date_time'] = is_null($this->input->post('entry_date_time')) ? '' : $this->input->post('entry_date_time');
    $transport_post['from_area_id'] = is_null($this->input->post('from_area_id')) ? '' : $this->input->post('from_area_id');
    $transport_post['note'] = is_null($this->input->post('note')) ? '' : $this->input->post('note');
    $transport_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $transport_post['start_date_time'] = is_null($this->input->post('start_date_time')) ? '' : $this->input->post('start_date_time');
    $transport_post['to_area_id'] = is_null($this->input->post('to_area_id')) ? '' : $this->input->post('to_area_id');
    $transport_post['transport_id'] = is_null($this->input->post('transport_id')) ? '' : $this->input->post('transport_id');
    $transport_post['transport_type'] = is_null($this->input->post('transport_type')) ? '' : $this->input->post('transport_type');
    $transport_post['visit_id'] = is_null($this->input->post('visit_id')) ? '' : $this->input->post('visit_id');
    $this->session->set_userdata('staff.staff_id', $transport_post['staff.staff_id']);
    $this->session->set_userdata('mlc.visit_id', $transport_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $transport_post['patient_visit.visit_id']);
    $this->db->insert('transport', $transport_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $transport_post);
  }
  function transport_update($staff_id,$visit_id,$visit_id,$transport_id) {
    $transport_post['staff.staff_id'] = $this->session->staff_staff_id;
    $transport_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $transport_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $transport_post['transport.transport_id'] = $this->session->transport_transport_id;
    $transport_post['staff.staff_id'] = $staff_staff_id;
    $transport_post['mlc.visit_id'] = $mlc_visit_id;
    $transport_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $transport_post['transport.transport_id'] = $transport_transport_id;
    $transport_post['transport.end_date_time'] = is_null($this->input->post('transport_end_date_time')) ? '' : $this->input->post('transport_end_date_time');
    $transport_post['transport.entry_date_time'] = is_null($this->input->post('transport_entry_date_time')) ? '' : $this->input->post('transport_entry_date_time');
    $transport_post['transport.from_area_id'] = is_null($this->input->post('transport_from_area_id')) ? '' : $this->input->post('transport_from_area_id');
    $transport_post['transport.note'] = is_null($this->input->post('transport_note')) ? '' : $this->input->post('transport_note');
    $transport_post['transport.staff_id'] = is_null($this->input->post('transport_staff_id')) ? '' : $this->input->post('transport_staff_id');
    $transport_post['transport.start_date_time'] = is_null($this->input->post('transport_start_date_time')) ? '' : $this->input->post('transport_start_date_time');
    $transport_post['transport.to_area_id'] = is_null($this->input->post('transport_to_area_id')) ? '' : $this->input->post('transport_to_area_id');
    $transport_post['transport.transport_type'] = is_null($this->input->post('transport_transport_type')) ? '' : $this->input->post('transport_transport_type');
    $transport_post['transport.visit_id'] = is_null($this->input->post('transport_visit_id')) ? '' : $this->input->post('transport_visit_id');
    $this->session->set_userdata('staff.staff_id', $transport_post['staff.staff_id']);
    $this->session->set_userdata('mlc.visit_id', $transport_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $transport_post['patient_visit.visit_id']);
    $this->session->set_userdata('transport.transport_id', $transport_post['transport.transport_id']);
    $this->db->update('transport', $transport_post, array('transport_id' => $transport_post['transport_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $transport_post);
  }
  function transport_delete() {
    $transport_delete['transport.end_date_time'] = is_null($this->input->post('transport_end_date_time')) ? '' : $this->input->post('transport_end_date_time');
    $transport_delete['transport.entry_date_time'] = is_null($this->input->post('transport_entry_date_time')) ? '' : $this->input->post('transport_entry_date_time');
    $transport_delete['transport.from_area_id'] = is_null($this->input->post('transport_from_area_id')) ? '' : $this->input->post('transport_from_area_id');
    $transport_delete['transport.note'] = is_null($this->input->post('transport_note')) ? '' : $this->input->post('transport_note');
    $transport_delete['transport.staff_id'] = is_null($this->input->post('transport_staff_id')) ? '' : $this->input->post('transport_staff_id');
    $transport_delete['transport.start_date_time'] = is_null($this->input->post('transport_start_date_time')) ? '' : $this->input->post('transport_start_date_time');
    $transport_delete['transport.to_area_id'] = is_null($this->input->post('transport_to_area_id')) ? '' : $this->input->post('transport_to_area_id');
    $transport_delete['transport.transport_id'] = is_null($this->input->post('transport_transport_id')) ? '' : $this->input->post('transport_transport_id');
    $transport_delete['transport.transport_type'] = is_null($this->input->post('transport_transport_type')) ? '' : $this->input->post('transport_transport_type');
    $transport_delete['transport.visit_id'] = is_null($this->input->post('transport_visit_id')) ? '' : $this->input->post('transport_visit_id');
    $this->db->delete('transport', array('transport_id' => $transport_delete['transport_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $transport_delete);
  }
  function transport_get_records($staff_id,$visit_id,$visit_id,$transport_id) {
    $transport_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $transport_filters['mlc.visit_id'] = $this->session->mlc_visit_id;
    $transport_filters['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $transport_filters['transport.transport_id'] = $this->session->transport_transport_id;
    $transport_filters['staff.staff_id'] = $staff_staff_id;
    $transport_filters['mlc.visit_id'] = $mlc_visit_id;
    $transport_filters['patient_visit.visit_id'] = $patient_visit_visit_id;
    $transport_filters['transport.transport_id'] = $transport_transport_id;
    $transport_filters['transport.end_date_time'] = is_null($this->input->post('transport_end_date_time')) ? '' : $this->input->post('transport_end_date_time');
    $transport_filters['transport.entry_date_time'] = is_null($this->input->post('transport_entry_date_time')) ? '' : $this->input->post('transport_entry_date_time');
    $transport_filters['transport.from_area_id'] = is_null($this->input->post('transport_from_area_id')) ? '' : $this->input->post('transport_from_area_id');
    $transport_filters['transport.note'] = is_null($this->input->post('transport_note')) ? '' : $this->input->post('transport_note');
    $transport_filters['transport.staff_id'] = is_null($this->input->post('transport_staff_id')) ? '' : $this->input->post('transport_staff_id');
    $transport_filters['transport.start_date_time'] = is_null($this->input->post('transport_start_date_time')) ? '' : $this->input->post('transport_start_date_time');
    $transport_filters['transport.to_area_id'] = is_null($this->input->post('transport_to_area_id')) ? '' : $this->input->post('transport_to_area_id');
    $transport_filters['transport.transport_type'] = is_null($this->input->post('transport_transport_type')) ? '' : $this->input->post('transport_transport_type');
    $transport_filters['transport.visit_id'] = is_null($this->input->post('transport_visit_id')) ? '' : $this->input->post('transport_visit_id');
    $this->session->set_userdata('staff.staff_id', $transport_filters['staff.staff_id']);
    $this->session->set_userdata('mlc.visit_id', $transport_filters['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $transport_filters['patient_visit.visit_id']);
    $this->session->set_userdata('transport.transport_id', $transport_filters['transport.transport_id']);
    $this->db->select('staff.staff_id AS transport_staff_id, mlc.visit_id AS transport_visit_id,
    patient_visit.visit_id AS transport_visit_id, transport.end_date_time AS transport_end_date_time,
    transport.entry_date_time AS transport_entry_date_time, transport.from_area_id AS transport_from_area_id,
    transport.note AS transport_note, transport.staff_id AS transport_staff_id,
    transport.start_date_time AS transport_start_date_time, transport.to_area_id AS transport_to_area_id,
    transport.transport_id AS transport_transport_id, transport.transport_type AS transport_transport_type,
    transport.visit_id AS transport_visit_id')->from('transport');
    $this->db->join('staff', 'transport.staff_id = staff.staff_id', 'left');
    $this->db->join('mlc', 'transport.visit_id = mlc.visit_id', 'left');
    $this->db->join('patient_visit', 'transport.visit_id = patient_visit.visit_id', 'left');
    $this->db->where($transport_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $transport_filters);
  }
}