<?php class Supply_chain_party_model extends CI_Model {
  function supply_chain_party_create($area_area_id,$department_department_id,$hospital_hospital_id,$staff_previous_hospital_hospital_id,$vendor_vendor_id) {
    $supply_chain_party_post = [];
    $supply_chain_party_post['area.area_id'] = $this->session->area_area_id;
    $supply_chain_party_post['department.department_id'] = $this->session->department_department_id;
    $supply_chain_party_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $supply_chain_party_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $supply_chain_party_post['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $supply_chain_party_post['area.area_id'] = $area_area_id;
    $supply_chain_party_post['department.department_id'] = $department_department_id;
    $supply_chain_party_post['hospital.hospital_id'] = $hospital_hospital_id;
    $supply_chain_party_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $supply_chain_party_post['vendor.vendor_id'] = $vendor_vendor_id;
    $supply_chain_party_post['area_id'] = is_null($this->input->post('area_id')) ? '' : $this->input->post('area_id');
    $supply_chain_party_post['department_id'] = is_null($this->input->post('department_id')) ? '' : $this->input->post('department_id');
    $supply_chain_party_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $supply_chain_party_post['supply_chain_party_id'] = is_null($this->input->post('supply_chain_party_id')) ? '' : $this->input->post('supply_chain_party_id');
    $supply_chain_party_post['supply_chain_party_name'] = is_null($this->input->post('supply_chain_party_name')) ? '' : $this->input->post('supply_chain_party_name');
    $supply_chain_party_post['vendor_id'] = is_null($this->input->post('vendor_id')) ? '' : $this->input->post('vendor_id');
    $this->session->set_userdata('area.area_id', $supply_chain_party_post['area.area_id']);
    $this->session->set_userdata('department.department_id', $supply_chain_party_post['department.department_id']);
    $this->session->set_userdata('hospital.hospital_id', $supply_chain_party_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $supply_chain_party_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('vendor.vendor_id', $supply_chain_party_post['vendor.vendor_id']);
    $this->db->insert('supply_chain_party', $supply_chain_party_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $supply_chain_party_post);
  }
  function supply_chain_party_update($area_id,$department_id,$hospital_id,$hospital_id,$vendor_id,$supply_chain_party_id) {
    $supply_chain_party_post['area.area_id'] = $this->session->area_area_id;
    $supply_chain_party_post['department.department_id'] = $this->session->department_department_id;
    $supply_chain_party_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $supply_chain_party_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $supply_chain_party_post['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $supply_chain_party_post['supply_chain_party.supply_chain_party_id'] = $this->session->supply_chain_party_supply_chain_party_id;
    $supply_chain_party_post['area.area_id'] = $area_area_id;
    $supply_chain_party_post['department.department_id'] = $department_department_id;
    $supply_chain_party_post['hospital.hospital_id'] = $hospital_hospital_id;
    $supply_chain_party_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $supply_chain_party_post['vendor.vendor_id'] = $vendor_vendor_id;
    $supply_chain_party_post['supply_chain_party.supply_chain_party_id'] = $supply_chain_party_supply_chain_party_id;
    $supply_chain_party_post['supply_chain_party.area_id'] = is_null($this->input->post('supply_chain_party_area_id')) ? '' : $this->input->post('supply_chain_party_area_id');
    $supply_chain_party_post['supply_chain_party.department_id'] = is_null($this->input->post('supply_chain_party_department_id')) ? '' : $this->input->post('supply_chain_party_department_id');
    $supply_chain_party_post['supply_chain_party.hospital_id'] = is_null($this->input->post('supply_chain_party_hospital_id')) ? '' : $this->input->post('supply_chain_party_hospital_id');
    $supply_chain_party_post['supply_chain_party.supply_chain_party_name'] = is_null($this->input->post('supply_chain_party_supply_chain_party_name')) ? '' : $this->input->post('supply_chain_party_supply_chain_party_name');
    $supply_chain_party_post['supply_chain_party.vendor_id'] = is_null($this->input->post('supply_chain_party_vendor_id')) ? '' : $this->input->post('supply_chain_party_vendor_id');
    $this->session->set_userdata('area.area_id', $supply_chain_party_post['area.area_id']);
    $this->session->set_userdata('department.department_id', $supply_chain_party_post['department.department_id']);
    $this->session->set_userdata('hospital.hospital_id', $supply_chain_party_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $supply_chain_party_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('vendor.vendor_id', $supply_chain_party_post['vendor.vendor_id']);
    $this->session->set_userdata('supply_chain_party.supply_chain_party_id', $supply_chain_party_post['supply_chain_party.supply_chain_party_id']);
    $this->db->update('supply_chain_party', $supply_chain_party_post, array('supply_chain_party_id' => $supply_chain_party_post['supply_chain_party_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $supply_chain_party_post);
  }
  function supply_chain_party_delete() {
    $supply_chain_party_delete['supply_chain_party.area_id'] = is_null($this->input->post('supply_chain_party_area_id')) ? '' : $this->input->post('supply_chain_party_area_id');
    $supply_chain_party_delete['supply_chain_party.department_id'] = is_null($this->input->post('supply_chain_party_department_id')) ? '' : $this->input->post('supply_chain_party_department_id');
    $supply_chain_party_delete['supply_chain_party.hospital_id'] = is_null($this->input->post('supply_chain_party_hospital_id')) ? '' : $this->input->post('supply_chain_party_hospital_id');
    $supply_chain_party_delete['supply_chain_party.supply_chain_party_id'] = is_null($this->input->post('supply_chain_party_supply_chain_party_id')) ? '' : $this->input->post('supply_chain_party_supply_chain_party_id');
    $supply_chain_party_delete['supply_chain_party.supply_chain_party_name'] = is_null($this->input->post('supply_chain_party_supply_chain_party_name')) ? '' : $this->input->post('supply_chain_party_supply_chain_party_name');
    $supply_chain_party_delete['supply_chain_party.vendor_id'] = is_null($this->input->post('supply_chain_party_vendor_id')) ? '' : $this->input->post('supply_chain_party_vendor_id');
    $this->db->delete('supply_chain_party', array('supply_chain_party_id' => $supply_chain_party_delete['supply_chain_party_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $supply_chain_party_delete);
  }
  function supply_chain_party_get_records($area_id,$department_id,$hospital_id,$hospital_id,$vendor_id,$supply_chain_party_id) {
    $supply_chain_party_filters['area.area_id'] = $this->session->area_area_id;
    $supply_chain_party_filters['department.department_id'] = $this->session->department_department_id;
    $supply_chain_party_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $supply_chain_party_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $supply_chain_party_filters['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $supply_chain_party_filters['supply_chain_party.supply_chain_party_id'] = $this->session->supply_chain_party_supply_chain_party_id;
    $supply_chain_party_filters['area.area_id'] = $area_area_id;
    $supply_chain_party_filters['department.department_id'] = $department_department_id;
    $supply_chain_party_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $supply_chain_party_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $supply_chain_party_filters['vendor.vendor_id'] = $vendor_vendor_id;
    $supply_chain_party_filters['supply_chain_party.supply_chain_party_id'] = $supply_chain_party_supply_chain_party_id;
    $supply_chain_party_filters['supply_chain_party.area_id'] = is_null($this->input->post('supply_chain_party_area_id')) ? '' : $this->input->post('supply_chain_party_area_id');
    $supply_chain_party_filters['supply_chain_party.department_id'] = is_null($this->input->post('supply_chain_party_department_id')) ? '' : $this->input->post('supply_chain_party_department_id');
    $supply_chain_party_filters['supply_chain_party.hospital_id'] = is_null($this->input->post('supply_chain_party_hospital_id')) ? '' : $this->input->post('supply_chain_party_hospital_id');
    $supply_chain_party_filters['supply_chain_party.supply_chain_party_name'] = is_null($this->input->post('supply_chain_party_supply_chain_party_name')) ? '' : $this->input->post('supply_chain_party_supply_chain_party_name');
    $supply_chain_party_filters['supply_chain_party.vendor_id'] = is_null($this->input->post('supply_chain_party_vendor_id')) ? '' : $this->input->post('supply_chain_party_vendor_id');
    $this->session->set_userdata('area.area_id', $supply_chain_party_filters['area.area_id']);
    $this->session->set_userdata('department.department_id', $supply_chain_party_filters['department.department_id']);
    $this->session->set_userdata('hospital.hospital_id', $supply_chain_party_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $supply_chain_party_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('vendor.vendor_id', $supply_chain_party_filters['vendor.vendor_id']);
    $this->session->set_userdata('supply_chain_party.supply_chain_party_id', $supply_chain_party_filters['supply_chain_party.supply_chain_party_id']);
    $this->db->select('area.area_id AS supply_chain_party_area_id, department.department_id AS supply_chain_party_department_id,
    hospital.hospital_id AS supply_chain_party_hospital_id, staff_previous_hospital.hospital_id AS supply_chain_party_hospital_id,
    vendor.vendor_id AS supply_chain_party_vendor_id, supply_chain_party.area_id AS supply_chain_party_area_id,
    supply_chain_party.department_id AS supply_chain_party_department_id, supply_chain_party.hospital_id AS supply_chain_party_hospital_id,
    supply_chain_party.supply_chain_party_id AS supply_chain_party_supply_chain_party_id, supply_chain_party.supply_chain_party_name AS supply_chain_party_supply_chain_party_name,
    supply_chain_party.vendor_id AS supply_chain_party_vendor_id')->from('supply_chain_party');
    $this->db->join('area', 'supply_chain_party.area_id = area.area_id', 'left');
    $this->db->join('department', 'supply_chain_party.department_id = department.department_id', 'left');
    $this->db->join('hospital', 'supply_chain_party.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'supply_chain_party.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->join('vendor', 'supply_chain_party.vendor_id = vendor.vendor_id', 'left');
    $this->db->where($supply_chain_party_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $supply_chain_party_filters);
  }
}