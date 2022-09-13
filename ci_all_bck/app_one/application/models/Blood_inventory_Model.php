<?php class Blood_inventory_model extends CI_Model {
  function blood_inventory_create() {
    $blood_inventory_post = [];
    $blood_inventory_post['bb_status.status_id'] = $this->session->bb_status_status_id;
    $blood_inventory_post['bb_donation.donation_id'] = $this->session->bb_donation_donation_id;
    $blood_inventory_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_inventory_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_inventory_post['bb_status.status_id'] = $bb_status_status_id;
    $blood_inventory_post['bb_donation.donation_id'] = $bb_donation_donation_id;
    $blood_inventory_post['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_inventory_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_inventory_post['inventory_id'] = is_null($this->input->post('inventory_id')) ? '' : $this->input->post('inventory_id');
    $blood_inventory_post['component_type'] = is_null($this->input->post('component_type')) ? '' : $this->input->post('component_type');
    $blood_inventory_post['inv_status'] = is_null($this->input->post('inv_status')) ? '' : $this->input->post('inv_status');
    $blood_inventory_post['status_id'] = is_null($this->input->post('status_id')) ? '' : $this->input->post('status_id');
    $blood_inventory_post['donation_id'] = is_null($this->input->post('donation_id')) ? '' : $this->input->post('donation_id');
    $blood_inventory_post['volume'] = is_null($this->input->post('volume')) ? '' : $this->input->post('volume');
    $blood_inventory_post['created_by'] = is_null($this->input->post('created_by')) ? '' : $this->input->post('created_by');
    $blood_inventory_post['expiry_date'] = is_null($this->input->post('expiry_date')) ? '' : $this->input->post('expiry_date');
    $blood_inventory_post['notes'] = is_null($this->input->post('notes')) ? '' : $this->input->post('notes');
    $blood_inventory_post['datetime'] = is_null($this->input->post('datetime')) ? '' : $this->input->post('datetime');
    $blood_inventory_post['component_perparation_time'] = is_null($this->input->post('component_perparation_time')) ? '' : $this->input->post('component_perparation_time');
    $blood_inventory_post['discarded_by'] = is_null($this->input->post('discarded_by')) ? '' : $this->input->post('discarded_by');
    $blood_inventory_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $this->session->set_userdata('bb_status.status_id', $blood_inventory_post['bb_status.status_id']);
    $this->session->set_userdata('bb_donation.donation_id', $blood_inventory_post['bb_donation.donation_id']);
    $this->session->set_userdata('hospital.hospital_id', $blood_inventory_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_inventory_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('blood_inventory', $blood_inventory_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $blood_inventory_post);
  }
  function blood_inventory_update() {
    $blood_inventory_post['bb_status.status_id'] = $this->session->bb_status_status_id;
    $blood_inventory_post['bb_donation.donation_id'] = $this->session->bb_donation_donation_id;
    $blood_inventory_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_inventory_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_inventory_post['blood_inventory.inventory_id'] = $this->session->blood_inventory_inventory_id;
    $blood_inventory_post['bb_status.status_id'] = $bb_status_status_id;
    $blood_inventory_post['bb_donation.donation_id'] = $bb_donation_donation_id;
    $blood_inventory_post['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_inventory_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_inventory_post['blood_inventory.inventory_id'] = $blood_inventory_inventory_id;
    $blood_inventory_post['blood_inventory.component_type'] = is_null($this->input->post('blood_inventory_component_type')) ? '' : $this->input->post('blood_inventory_component_type');
    $blood_inventory_post['blood_inventory.inv_status'] = is_null($this->input->post('blood_inventory_inv_status')) ? '' : $this->input->post('blood_inventory_inv_status');
    $blood_inventory_post['blood_inventory.status_id'] = is_null($this->input->post('blood_inventory_status_id')) ? '' : $this->input->post('blood_inventory_status_id');
    $blood_inventory_post['blood_inventory.donation_id'] = is_null($this->input->post('blood_inventory_donation_id')) ? '' : $this->input->post('blood_inventory_donation_id');
    $blood_inventory_post['blood_inventory.volume'] = is_null($this->input->post('blood_inventory_volume')) ? '' : $this->input->post('blood_inventory_volume');
    $blood_inventory_post['blood_inventory.created_by'] = is_null($this->input->post('blood_inventory_created_by')) ? '' : $this->input->post('blood_inventory_created_by');
    $blood_inventory_post['blood_inventory.expiry_date'] = is_null($this->input->post('blood_inventory_expiry_date')) ? '' : $this->input->post('blood_inventory_expiry_date');
    $blood_inventory_post['blood_inventory.notes'] = is_null($this->input->post('blood_inventory_notes')) ? '' : $this->input->post('blood_inventory_notes');
    $blood_inventory_post['blood_inventory.datetime'] = is_null($this->input->post('blood_inventory_datetime')) ? '' : $this->input->post('blood_inventory_datetime');
    $blood_inventory_post['blood_inventory.component_perparation_time'] = is_null($this->input->post('blood_inventory_component_perparation_time')) ? '' : $this->input->post('blood_inventory_component_perparation_time');
    $blood_inventory_post['blood_inventory.discarded_by'] = is_null($this->input->post('blood_inventory_discarded_by')) ? '' : $this->input->post('blood_inventory_discarded_by');
    $blood_inventory_post['blood_inventory.hospital_id'] = is_null($this->input->post('blood_inventory_hospital_id')) ? '' : $this->input->post('blood_inventory_hospital_id');
    $this->session->set_userdata('bb_status.status_id', $blood_inventory_post['bb_status.status_id']);
    $this->session->set_userdata('bb_donation.donation_id', $blood_inventory_post['bb_donation.donation_id']);
    $this->session->set_userdata('hospital.hospital_id', $blood_inventory_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_inventory_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('blood_inventory.inventory_id', $blood_inventory_post['blood_inventory.inventory_id']);
    $this->db->update('blood_inventory', $blood_inventory_post, array('inventory_id' => $blood_inventory_post['inventory_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_inventory_post);
  }
  function blood_inventory_delete() {
    $blood_inventory_delete['blood_inventory.inventory_id'] = is_null($this->input->post('blood_inventory_inventory_id')) ? '' : $this->input->post('blood_inventory_inventory_id');
    $blood_inventory_delete['blood_inventory.component_type'] = is_null($this->input->post('blood_inventory_component_type')) ? '' : $this->input->post('blood_inventory_component_type');
    $blood_inventory_delete['blood_inventory.inv_status'] = is_null($this->input->post('blood_inventory_inv_status')) ? '' : $this->input->post('blood_inventory_inv_status');
    $blood_inventory_delete['blood_inventory.status_id'] = is_null($this->input->post('blood_inventory_status_id')) ? '' : $this->input->post('blood_inventory_status_id');
    $blood_inventory_delete['blood_inventory.donation_id'] = is_null($this->input->post('blood_inventory_donation_id')) ? '' : $this->input->post('blood_inventory_donation_id');
    $blood_inventory_delete['blood_inventory.volume'] = is_null($this->input->post('blood_inventory_volume')) ? '' : $this->input->post('blood_inventory_volume');
    $blood_inventory_delete['blood_inventory.created_by'] = is_null($this->input->post('blood_inventory_created_by')) ? '' : $this->input->post('blood_inventory_created_by');
    $blood_inventory_delete['blood_inventory.expiry_date'] = is_null($this->input->post('blood_inventory_expiry_date')) ? '' : $this->input->post('blood_inventory_expiry_date');
    $blood_inventory_delete['blood_inventory.notes'] = is_null($this->input->post('blood_inventory_notes')) ? '' : $this->input->post('blood_inventory_notes');
    $blood_inventory_delete['blood_inventory.datetime'] = is_null($this->input->post('blood_inventory_datetime')) ? '' : $this->input->post('blood_inventory_datetime');
    $blood_inventory_delete['blood_inventory.component_perparation_time'] = is_null($this->input->post('blood_inventory_component_perparation_time')) ? '' : $this->input->post('blood_inventory_component_perparation_time');
    $blood_inventory_delete['blood_inventory.discarded_by'] = is_null($this->input->post('blood_inventory_discarded_by')) ? '' : $this->input->post('blood_inventory_discarded_by');
    $blood_inventory_delete['blood_inventory.hospital_id'] = is_null($this->input->post('blood_inventory_hospital_id')) ? '' : $this->input->post('blood_inventory_hospital_id');
    $this->db->delete('blood_inventory', array('inventory_id' => $blood_inventory_delete['inventory_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_inventory_delete);
  }
  function blood_inventory_get_records() {
    $blood_inventory_filters['bb_status.status_id'] = $this->session->bb_status_status_id;
    $blood_inventory_filters['bb_donation.donation_id'] = $this->session->bb_donation_donation_id;
    $blood_inventory_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $blood_inventory_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $blood_inventory_filters['blood_inventory.inventory_id'] = $this->session->blood_inventory_inventory_id;
    $blood_inventory_filters['bb_status.status_id'] = $bb_status_status_id;
    $blood_inventory_filters['bb_donation.donation_id'] = $bb_donation_donation_id;
    $blood_inventory_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $blood_inventory_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $blood_inventory_filters['blood_inventory.inventory_id'] = $blood_inventory_inventory_id;
    $blood_inventory_filters['blood_inventory.component_type'] = is_null($this->input->post('blood_inventory_component_type')) ? '' : $this->input->post('blood_inventory_component_type');
    $blood_inventory_filters['blood_inventory.inv_status'] = is_null($this->input->post('blood_inventory_inv_status')) ? '' : $this->input->post('blood_inventory_inv_status');
    $blood_inventory_filters['blood_inventory.status_id'] = is_null($this->input->post('blood_inventory_status_id')) ? '' : $this->input->post('blood_inventory_status_id');
    $blood_inventory_filters['blood_inventory.donation_id'] = is_null($this->input->post('blood_inventory_donation_id')) ? '' : $this->input->post('blood_inventory_donation_id');
    $blood_inventory_filters['blood_inventory.volume'] = is_null($this->input->post('blood_inventory_volume')) ? '' : $this->input->post('blood_inventory_volume');
    $blood_inventory_filters['blood_inventory.created_by'] = is_null($this->input->post('blood_inventory_created_by')) ? '' : $this->input->post('blood_inventory_created_by');
    $blood_inventory_filters['blood_inventory.expiry_date'] = is_null($this->input->post('blood_inventory_expiry_date')) ? '' : $this->input->post('blood_inventory_expiry_date');
    $blood_inventory_filters['blood_inventory.notes'] = is_null($this->input->post('blood_inventory_notes')) ? '' : $this->input->post('blood_inventory_notes');
    $blood_inventory_filters['blood_inventory.datetime'] = is_null($this->input->post('blood_inventory_datetime')) ? '' : $this->input->post('blood_inventory_datetime');
    $blood_inventory_filters['blood_inventory.component_perparation_time'] = is_null($this->input->post('blood_inventory_component_perparation_time')) ? '' : $this->input->post('blood_inventory_component_perparation_time');
    $blood_inventory_filters['blood_inventory.discarded_by'] = is_null($this->input->post('blood_inventory_discarded_by')) ? '' : $this->input->post('blood_inventory_discarded_by');
    $blood_inventory_filters['blood_inventory.hospital_id'] = is_null($this->input->post('blood_inventory_hospital_id')) ? '' : $this->input->post('blood_inventory_hospital_id');
    $this->session->set_userdata('bb_status.status_id', $blood_inventory_filters['bb_status.status_id']);
    $this->session->set_userdata('bb_donation.donation_id', $blood_inventory_filters['bb_donation.donation_id']);
    $this->session->set_userdata('hospital.hospital_id', $blood_inventory_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $blood_inventory_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('blood_inventory.inventory_id', $blood_inventory_filters['blood_inventory.inventory_id']);
    $this->db->select('bb_status.status_id AS blood_inventory_status_id, bb_donation.donation_id AS blood_inventory_donation_id,
    hospital.hospital_id AS blood_inventory_hospital_id, staff_previous_hospital.hospital_id AS blood_inventory_hospital_id,
    blood_inventory.inventory_id AS blood_inventory_inventory_id, blood_inventory.component_type AS blood_inventory_component_type,
    blood_inventory.inv_status AS blood_inventory_inv_status, blood_inventory.status_id AS blood_inventory_status_id,
    blood_inventory.donation_id AS blood_inventory_donation_id, blood_inventory.volume AS blood_inventory_volume,
    blood_inventory.created_by AS blood_inventory_created_by, blood_inventory.expiry_date AS blood_inventory_expiry_date,
    blood_inventory.notes AS blood_inventory_notes, blood_inventory.datetime AS blood_inventory_datetime,
    blood_inventory.component_perparation_time AS blood_inventory_component_perparation_time, blood_inventory.discarded_by AS blood_inventory_discarded_by,
    blood_inventory.hospital_id AS blood_inventory_hospital_id')->from('blood_inventory');
    $this->db->join('bb_status', 'blood_inventory.status_id = bb_status.status_id', 'left');
    $this->db->join('bb_donation', 'blood_inventory.donation_id = bb_donation.donation_id', 'left');
    $this->db->join('hospital', 'blood_inventory.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'blood_inventory.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($blood_inventory_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $blood_inventory_filters);
  }
}