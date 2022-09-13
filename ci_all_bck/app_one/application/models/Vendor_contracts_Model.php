<?php class Vendor_contracts_model extends CI_Model {
  function vendor_contracts_create() {
    $vendor_contracts_post = [];
    $vendor_contracts_post['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $vendor_contracts_post['facility.facility_id'] = $this->session->facility_facility_id;
    $vendor_contracts_post['vendor.vendor_id'] = $vendor_vendor_id;
    $vendor_contracts_post['facility.facility_id'] = $facility_facility_id;
    $vendor_contracts_post['contract_id'] = is_null($this->input->post('contract_id')) ? '' : $this->input->post('contract_id');
    $vendor_contracts_post['vendor_id'] = is_null($this->input->post('vendor_id')) ? '' : $this->input->post('vendor_id');
    $vendor_contracts_post['facility_id'] = is_null($this->input->post('facility_id')) ? '' : $this->input->post('facility_id');
    $vendor_contracts_post['from_date'] = is_null($this->input->post('from_date')) ? '' : $this->input->post('from_date');
    $vendor_contracts_post['to_date'] = is_null($this->input->post('to_date')) ? '' : $this->input->post('to_date');
    $vendor_contracts_post['status'] = is_null($this->input->post('status')) ? '' : $this->input->post('status');
    $this->session->set_userdata('vendor.vendor_id', $vendor_contracts_post['vendor.vendor_id']);
    $this->session->set_userdata('facility.facility_id', $vendor_contracts_post['facility.facility_id']);
    $this->db->insert('vendor_contracts', $vendor_contracts_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $vendor_contracts_post);
  }
  function vendor_contracts_update() {
    $vendor_contracts_post['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $vendor_contracts_post['facility.facility_id'] = $this->session->facility_facility_id;
    $vendor_contracts_post['vendor_contracts.contract_id'] = $this->session->vendor_contracts_contract_id;
    $vendor_contracts_post['vendor.vendor_id'] = $vendor_vendor_id;
    $vendor_contracts_post['facility.facility_id'] = $facility_facility_id;
    $vendor_contracts_post['vendor_contracts.contract_id'] = $vendor_contracts_contract_id;
    $vendor_contracts_post['vendor_contracts.vendor_id'] = is_null($this->input->post('vendor_contracts_vendor_id')) ? '' : $this->input->post('vendor_contracts_vendor_id');
    $vendor_contracts_post['vendor_contracts.facility_id'] = is_null($this->input->post('vendor_contracts_facility_id')) ? '' : $this->input->post('vendor_contracts_facility_id');
    $vendor_contracts_post['vendor_contracts.from_date'] = is_null($this->input->post('vendor_contracts_from_date')) ? '' : $this->input->post('vendor_contracts_from_date');
    $vendor_contracts_post['vendor_contracts.to_date'] = is_null($this->input->post('vendor_contracts_to_date')) ? '' : $this->input->post('vendor_contracts_to_date');
    $vendor_contracts_post['vendor_contracts.status'] = is_null($this->input->post('vendor_contracts_status')) ? '' : $this->input->post('vendor_contracts_status');
    $this->session->set_userdata('vendor.vendor_id', $vendor_contracts_post['vendor.vendor_id']);
    $this->session->set_userdata('facility.facility_id', $vendor_contracts_post['facility.facility_id']);
    $this->session->set_userdata('vendor_contracts.contract_id', $vendor_contracts_post['vendor_contracts.contract_id']);
    $this->db->update('vendor_contracts', $vendor_contracts_post, array('contract_id' => $vendor_contracts_post['contract_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $vendor_contracts_post);
  }
  function vendor_contracts_delete() {
    $vendor_contracts_delete['vendor_contracts.contract_id'] = is_null($this->input->post('vendor_contracts_contract_id')) ? '' : $this->input->post('vendor_contracts_contract_id');
    $vendor_contracts_delete['vendor_contracts.vendor_id'] = is_null($this->input->post('vendor_contracts_vendor_id')) ? '' : $this->input->post('vendor_contracts_vendor_id');
    $vendor_contracts_delete['vendor_contracts.facility_id'] = is_null($this->input->post('vendor_contracts_facility_id')) ? '' : $this->input->post('vendor_contracts_facility_id');
    $vendor_contracts_delete['vendor_contracts.from_date'] = is_null($this->input->post('vendor_contracts_from_date')) ? '' : $this->input->post('vendor_contracts_from_date');
    $vendor_contracts_delete['vendor_contracts.to_date'] = is_null($this->input->post('vendor_contracts_to_date')) ? '' : $this->input->post('vendor_contracts_to_date');
    $vendor_contracts_delete['vendor_contracts.status'] = is_null($this->input->post('vendor_contracts_status')) ? '' : $this->input->post('vendor_contracts_status');
    $this->db->delete('vendor_contracts', array('contract_id' => $vendor_contracts_delete['contract_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $vendor_contracts_delete);
  }
  function vendor_contracts_get_records() {
    $vendor_contracts_filters['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $vendor_contracts_filters['facility.facility_id'] = $this->session->facility_facility_id;
    $vendor_contracts_filters['vendor_contracts.contract_id'] = $this->session->vendor_contracts_contract_id;
    $vendor_contracts_filters['vendor.vendor_id'] = $vendor_vendor_id;
    $vendor_contracts_filters['facility.facility_id'] = $facility_facility_id;
    $vendor_contracts_filters['vendor_contracts.contract_id'] = $vendor_contracts_contract_id;
    $vendor_contracts_filters['vendor_contracts.vendor_id'] = is_null($this->input->post('vendor_contracts_vendor_id')) ? '' : $this->input->post('vendor_contracts_vendor_id');
    $vendor_contracts_filters['vendor_contracts.facility_id'] = is_null($this->input->post('vendor_contracts_facility_id')) ? '' : $this->input->post('vendor_contracts_facility_id');
    $vendor_contracts_filters['vendor_contracts.from_date'] = is_null($this->input->post('vendor_contracts_from_date')) ? '' : $this->input->post('vendor_contracts_from_date');
    $vendor_contracts_filters['vendor_contracts.to_date'] = is_null($this->input->post('vendor_contracts_to_date')) ? '' : $this->input->post('vendor_contracts_to_date');
    $vendor_contracts_filters['vendor_contracts.status'] = is_null($this->input->post('vendor_contracts_status')) ? '' : $this->input->post('vendor_contracts_status');
    $this->session->set_userdata('vendor.vendor_id', $vendor_contracts_filters['vendor.vendor_id']);
    $this->session->set_userdata('facility.facility_id', $vendor_contracts_filters['facility.facility_id']);
    $this->session->set_userdata('vendor_contracts.contract_id', $vendor_contracts_filters['vendor_contracts.contract_id']);
    $this->db->select('vendor.vendor_id AS vendor_contracts_vendor_id, facility.facility_id AS vendor_contracts_facility_id,
    vendor_contracts.contract_id AS vendor_contracts_contract_id, vendor_contracts.vendor_id AS vendor_contracts_vendor_id,
    vendor_contracts.facility_id AS vendor_contracts_facility_id, vendor_contracts.from_date AS vendor_contracts_from_date,
    vendor_contracts.to_date AS vendor_contracts_to_date, vendor_contracts.status AS vendor_contracts_status')->from('vendor_contracts');
    $this->db->join('vendor', 'vendor_contracts.vendor_id = vendor.vendor_id', 'left');
    $this->db->join('facility', 'vendor_contracts.facility_id = facility.facility_id', 'left');
    $this->db->where($vendor_contracts_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $vendor_contracts_filters);
  }
}