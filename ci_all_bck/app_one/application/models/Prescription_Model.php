<?php class Prescription_model extends CI_Model {
  function prescription_create() {
    $prescription_post = [];
    $prescription_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $prescription_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $prescription_post['item.item_id'] = $this->session->item_item_id;
    $prescription_post['item_master.item_id'] = $this->session->item_master_item_id;
    $prescription_post['unit.unit_id'] = $this->session->unit_unit_id;
    $prescription_post['mlc.visit_id'] = $mlc_visit_id;
    $prescription_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $prescription_post['item.item_id'] = $item_item_id;
    $prescription_post['item_master.item_id'] = $item_master_item_id;
    $prescription_post['unit.unit_id'] = $unit_unit_id;
    $prescription_post['prescription_id'] = is_null($this->input->post('prescription_id')) ? '' : $this->input->post('prescription_id');
    $prescription_post['visit_id'] = is_null($this->input->post('visit_id')) ? '' : $this->input->post('visit_id');
    $prescription_post['item_id'] = is_null($this->input->post('item_id')) ? '' : $this->input->post('item_id');
    $prescription_post['duration'] = is_null($this->input->post('duration')) ? '' : $this->input->post('duration');
    $prescription_post['frequency'] = is_null($this->input->post('frequency')) ? '' : $this->input->post('frequency');
    $prescription_post['morning'] = is_null($this->input->post('morning')) ? '' : $this->input->post('morning');
    $prescription_post['afternoon'] = is_null($this->input->post('afternoon')) ? '' : $this->input->post('afternoon');
    $prescription_post['evening'] = is_null($this->input->post('evening')) ? '' : $this->input->post('evening');
    $prescription_post['quantity'] = is_null($this->input->post('quantity')) ? '' : $this->input->post('quantity');
    $prescription_post['unit_id'] = is_null($this->input->post('unit_id')) ? '' : $this->input->post('unit_id');
    $prescription_post['status'] = is_null($this->input->post('status')) ? '' : $this->input->post('status');
    $this->session->set_userdata('mlc.visit_id', $prescription_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $prescription_post['patient_visit.visit_id']);
    $this->session->set_userdata('item.item_id', $prescription_post['item.item_id']);
    $this->session->set_userdata('item_master.item_id', $prescription_post['item_master.item_id']);
    $this->session->set_userdata('unit.unit_id', $prescription_post['unit.unit_id']);
    $this->db->insert('prescription', $prescription_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $prescription_post);
  }
  function prescription_update() {
    $prescription_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $prescription_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $prescription_post['item.item_id'] = $this->session->item_item_id;
    $prescription_post['item_master.item_id'] = $this->session->item_master_item_id;
    $prescription_post['unit.unit_id'] = $this->session->unit_unit_id;
    $prescription_post['prescription.prescription_id'] = $this->session->prescription_prescription_id;
    $prescription_post['mlc.visit_id'] = $mlc_visit_id;
    $prescription_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $prescription_post['item.item_id'] = $item_item_id;
    $prescription_post['item_master.item_id'] = $item_master_item_id;
    $prescription_post['unit.unit_id'] = $unit_unit_id;
    $prescription_post['prescription.prescription_id'] = $prescription_prescription_id;
    $prescription_post['prescription.visit_id'] = is_null($this->input->post('prescription_visit_id')) ? '' : $this->input->post('prescription_visit_id');
    $prescription_post['prescription.item_id'] = is_null($this->input->post('prescription_item_id')) ? '' : $this->input->post('prescription_item_id');
    $prescription_post['prescription.duration'] = is_null($this->input->post('prescription_duration')) ? '' : $this->input->post('prescription_duration');
    $prescription_post['prescription.frequency'] = is_null($this->input->post('prescription_frequency')) ? '' : $this->input->post('prescription_frequency');
    $prescription_post['prescription.morning'] = is_null($this->input->post('prescription_morning')) ? '' : $this->input->post('prescription_morning');
    $prescription_post['prescription.afternoon'] = is_null($this->input->post('prescription_afternoon')) ? '' : $this->input->post('prescription_afternoon');
    $prescription_post['prescription.evening'] = is_null($this->input->post('prescription_evening')) ? '' : $this->input->post('prescription_evening');
    $prescription_post['prescription.quantity'] = is_null($this->input->post('prescription_quantity')) ? '' : $this->input->post('prescription_quantity');
    $prescription_post['prescription.unit_id'] = is_null($this->input->post('prescription_unit_id')) ? '' : $this->input->post('prescription_unit_id');
    $prescription_post['prescription.status'] = is_null($this->input->post('prescription_status')) ? '' : $this->input->post('prescription_status');
    $this->session->set_userdata('mlc.visit_id', $prescription_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $prescription_post['patient_visit.visit_id']);
    $this->session->set_userdata('item.item_id', $prescription_post['item.item_id']);
    $this->session->set_userdata('item_master.item_id', $prescription_post['item_master.item_id']);
    $this->session->set_userdata('unit.unit_id', $prescription_post['unit.unit_id']);
    $this->session->set_userdata('prescription.prescription_id', $prescription_post['prescription.prescription_id']);
    $this->db->update('prescription', $prescription_post, array('prescription_id' => $prescription_post['prescription_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $prescription_post);
  }
  function prescription_delete() {
    $prescription_delete['prescription.prescription_id'] = is_null($this->input->post('prescription_prescription_id')) ? '' : $this->input->post('prescription_prescription_id');
    $prescription_delete['prescription.visit_id'] = is_null($this->input->post('prescription_visit_id')) ? '' : $this->input->post('prescription_visit_id');
    $prescription_delete['prescription.item_id'] = is_null($this->input->post('prescription_item_id')) ? '' : $this->input->post('prescription_item_id');
    $prescription_delete['prescription.duration'] = is_null($this->input->post('prescription_duration')) ? '' : $this->input->post('prescription_duration');
    $prescription_delete['prescription.frequency'] = is_null($this->input->post('prescription_frequency')) ? '' : $this->input->post('prescription_frequency');
    $prescription_delete['prescription.morning'] = is_null($this->input->post('prescription_morning')) ? '' : $this->input->post('prescription_morning');
    $prescription_delete['prescription.afternoon'] = is_null($this->input->post('prescription_afternoon')) ? '' : $this->input->post('prescription_afternoon');
    $prescription_delete['prescription.evening'] = is_null($this->input->post('prescription_evening')) ? '' : $this->input->post('prescription_evening');
    $prescription_delete['prescription.quantity'] = is_null($this->input->post('prescription_quantity')) ? '' : $this->input->post('prescription_quantity');
    $prescription_delete['prescription.unit_id'] = is_null($this->input->post('prescription_unit_id')) ? '' : $this->input->post('prescription_unit_id');
    $prescription_delete['prescription.status'] = is_null($this->input->post('prescription_status')) ? '' : $this->input->post('prescription_status');
    $this->db->delete('prescription', array('prescription_id' => $prescription_delete['prescription_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $prescription_delete);
  }
  function prescription_get_records() {
    $prescription_filters['mlc.visit_id'] = $this->session->mlc_visit_id;
    $prescription_filters['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $prescription_filters['item.item_id'] = $this->session->item_item_id;
    $prescription_filters['item_master.item_id'] = $this->session->item_master_item_id;
    $prescription_filters['unit.unit_id'] = $this->session->unit_unit_id;
    $prescription_filters['prescription.prescription_id'] = $this->session->prescription_prescription_id;
    $prescription_filters['mlc.visit_id'] = $mlc_visit_id;
    $prescription_filters['patient_visit.visit_id'] = $patient_visit_visit_id;
    $prescription_filters['item.item_id'] = $item_item_id;
    $prescription_filters['item_master.item_id'] = $item_master_item_id;
    $prescription_filters['unit.unit_id'] = $unit_unit_id;
    $prescription_filters['prescription.prescription_id'] = $prescription_prescription_id;
    $prescription_filters['prescription.visit_id'] = is_null($this->input->post('prescription_visit_id')) ? '' : $this->input->post('prescription_visit_id');
    $prescription_filters['prescription.item_id'] = is_null($this->input->post('prescription_item_id')) ? '' : $this->input->post('prescription_item_id');
    $prescription_filters['prescription.duration'] = is_null($this->input->post('prescription_duration')) ? '' : $this->input->post('prescription_duration');
    $prescription_filters['prescription.frequency'] = is_null($this->input->post('prescription_frequency')) ? '' : $this->input->post('prescription_frequency');
    $prescription_filters['prescription.morning'] = is_null($this->input->post('prescription_morning')) ? '' : $this->input->post('prescription_morning');
    $prescription_filters['prescription.afternoon'] = is_null($this->input->post('prescription_afternoon')) ? '' : $this->input->post('prescription_afternoon');
    $prescription_filters['prescription.evening'] = is_null($this->input->post('prescription_evening')) ? '' : $this->input->post('prescription_evening');
    $prescription_filters['prescription.quantity'] = is_null($this->input->post('prescription_quantity')) ? '' : $this->input->post('prescription_quantity');
    $prescription_filters['prescription.unit_id'] = is_null($this->input->post('prescription_unit_id')) ? '' : $this->input->post('prescription_unit_id');
    $prescription_filters['prescription.status'] = is_null($this->input->post('prescription_status')) ? '' : $this->input->post('prescription_status');
    $this->session->set_userdata('mlc.visit_id', $prescription_filters['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $prescription_filters['patient_visit.visit_id']);
    $this->session->set_userdata('item.item_id', $prescription_filters['item.item_id']);
    $this->session->set_userdata('item_master.item_id', $prescription_filters['item_master.item_id']);
    $this->session->set_userdata('unit.unit_id', $prescription_filters['unit.unit_id']);
    $this->session->set_userdata('prescription.prescription_id', $prescription_filters['prescription.prescription_id']);
    $this->db->select('mlc.visit_id AS prescription_visit_id, patient_visit.visit_id AS prescription_visit_id,
    item.item_id AS prescription_item_id, item_master.item_id AS prescription_item_id,
    unit.unit_id AS prescription_unit_id, prescription.prescription_id AS prescription_prescription_id,
    prescription.visit_id AS prescription_visit_id, prescription.item_id AS prescription_item_id,
    prescription.duration AS prescription_duration, prescription.frequency AS prescription_frequency,
    prescription.morning AS prescription_morning, prescription.afternoon AS prescription_afternoon,
    prescription.evening AS prescription_evening, prescription.quantity AS prescription_quantity,
    prescription.unit_id AS prescription_unit_id, prescription.status AS prescription_status')->from('prescription');
    $this->db->join('mlc', 'prescription.visit_id = mlc.visit_id', 'left');
    $this->db->join('patient_visit', 'prescription.visit_id = patient_visit.visit_id', 'left');
    $this->db->join('item', 'prescription.item_id = item.item_id', 'left');
    $this->db->join('item_master', 'prescription.item_id = item_master.item_id', 'left');
    $this->db->join('unit', 'prescription.unit_id = unit.unit_id', 'left');
    $this->db->where($prescription_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $prescription_filters);
  }
}