<?php class Vendor_model extends CI_Model {
  function vendor_create($contact_person_contact_person_id,$vendor_type_vendor_type_id) {
    $vendor_post = [];
    $vendor_post['contact_person.contact_person_id'] = $this->session->contact_person_contact_person_id;
    $vendor_post['vendor_type.vendor_type_id'] = $this->session->vendor_type_vendor_type_id;
    $vendor_post['contact_person.contact_person_id'] = $contact_person_contact_person_id;
    $vendor_post['vendor_type.vendor_type_id'] = $vendor_type_vendor_type_id;
    $vendor_post['account_no'] = is_null($this->input->post('account_no')) ? '' : $this->input->post('account_no');
    $vendor_post['bank_name'] = is_null($this->input->post('bank_name')) ? '' : $this->input->post('bank_name');
    $vendor_post['branch'] = is_null($this->input->post('branch')) ? '' : $this->input->post('branch');
    $vendor_post['contact_person_id'] = is_null($this->input->post('contact_person_id')) ? '' : $this->input->post('contact_person_id');
    $vendor_post['vendor_address'] = is_null($this->input->post('vendor_address')) ? '' : $this->input->post('vendor_address');
    $vendor_post['vendor_city'] = is_null($this->input->post('vendor_city')) ? '' : $this->input->post('vendor_city');
    $vendor_post['vendor_country'] = is_null($this->input->post('vendor_country')) ? '' : $this->input->post('vendor_country');
    $vendor_post['vendor_email'] = is_null($this->input->post('vendor_email')) ? '' : $this->input->post('vendor_email');
    $vendor_post['vendor_id'] = is_null($this->input->post('vendor_id')) ? '' : $this->input->post('vendor_id');
    $vendor_post['vendor_name'] = is_null($this->input->post('vendor_name')) ? '' : $this->input->post('vendor_name');
    $vendor_post['vendor_pan'] = is_null($this->input->post('vendor_pan')) ? '' : $this->input->post('vendor_pan');
    $vendor_post['vendor_phone'] = is_null($this->input->post('vendor_phone')) ? '' : $this->input->post('vendor_phone');
    $vendor_post['vendor_state'] = is_null($this->input->post('vendor_state')) ? '' : $this->input->post('vendor_state');
    $vendor_post['vendor_type_id'] = is_null($this->input->post('vendor_type_id')) ? '' : $this->input->post('vendor_type_id');
    $this->session->set_userdata('contact_person.contact_person_id', $vendor_post['contact_person.contact_person_id']);
    $this->session->set_userdata('vendor_type.vendor_type_id', $vendor_post['vendor_type.vendor_type_id']);
    $this->db->insert('vendor', $vendor_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $vendor_post);
  }
  function vendor_update($contact_person_id,$vendor_type_id,$vendor_id) {
    $vendor_post['contact_person.contact_person_id'] = $this->session->contact_person_contact_person_id;
    $vendor_post['vendor_type.vendor_type_id'] = $this->session->vendor_type_vendor_type_id;
    $vendor_post['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $vendor_post['contact_person.contact_person_id'] = $contact_person_contact_person_id;
    $vendor_post['vendor_type.vendor_type_id'] = $vendor_type_vendor_type_id;
    $vendor_post['vendor.vendor_id'] = $vendor_vendor_id;
    $vendor_post['vendor.account_no'] = is_null($this->input->post('vendor_account_no')) ? '' : $this->input->post('vendor_account_no');
    $vendor_post['vendor.bank_name'] = is_null($this->input->post('vendor_bank_name')) ? '' : $this->input->post('vendor_bank_name');
    $vendor_post['vendor.branch'] = is_null($this->input->post('vendor_branch')) ? '' : $this->input->post('vendor_branch');
    $vendor_post['vendor.contact_person_id'] = is_null($this->input->post('vendor_contact_person_id')) ? '' : $this->input->post('vendor_contact_person_id');
    $vendor_post['vendor.vendor_address'] = is_null($this->input->post('vendor_vendor_address')) ? '' : $this->input->post('vendor_vendor_address');
    $vendor_post['vendor.vendor_city'] = is_null($this->input->post('vendor_vendor_city')) ? '' : $this->input->post('vendor_vendor_city');
    $vendor_post['vendor.vendor_country'] = is_null($this->input->post('vendor_vendor_country')) ? '' : $this->input->post('vendor_vendor_country');
    $vendor_post['vendor.vendor_email'] = is_null($this->input->post('vendor_vendor_email')) ? '' : $this->input->post('vendor_vendor_email');
    $vendor_post['vendor.vendor_name'] = is_null($this->input->post('vendor_vendor_name')) ? '' : $this->input->post('vendor_vendor_name');
    $vendor_post['vendor.vendor_pan'] = is_null($this->input->post('vendor_vendor_pan')) ? '' : $this->input->post('vendor_vendor_pan');
    $vendor_post['vendor.vendor_phone'] = is_null($this->input->post('vendor_vendor_phone')) ? '' : $this->input->post('vendor_vendor_phone');
    $vendor_post['vendor.vendor_state'] = is_null($this->input->post('vendor_vendor_state')) ? '' : $this->input->post('vendor_vendor_state');
    $vendor_post['vendor.vendor_type_id'] = is_null($this->input->post('vendor_vendor_type_id')) ? '' : $this->input->post('vendor_vendor_type_id');
    $this->session->set_userdata('contact_person.contact_person_id', $vendor_post['contact_person.contact_person_id']);
    $this->session->set_userdata('vendor_type.vendor_type_id', $vendor_post['vendor_type.vendor_type_id']);
    $this->session->set_userdata('vendor.vendor_id', $vendor_post['vendor.vendor_id']);
    $this->db->update('vendor', $vendor_post, array('vendor_id' => $vendor_post['vendor_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $vendor_post);
  }
  function vendor_delete() {
    $vendor_delete['vendor.account_no'] = is_null($this->input->post('vendor_account_no')) ? '' : $this->input->post('vendor_account_no');
    $vendor_delete['vendor.bank_name'] = is_null($this->input->post('vendor_bank_name')) ? '' : $this->input->post('vendor_bank_name');
    $vendor_delete['vendor.branch'] = is_null($this->input->post('vendor_branch')) ? '' : $this->input->post('vendor_branch');
    $vendor_delete['vendor.contact_person_id'] = is_null($this->input->post('vendor_contact_person_id')) ? '' : $this->input->post('vendor_contact_person_id');
    $vendor_delete['vendor.vendor_address'] = is_null($this->input->post('vendor_vendor_address')) ? '' : $this->input->post('vendor_vendor_address');
    $vendor_delete['vendor.vendor_city'] = is_null($this->input->post('vendor_vendor_city')) ? '' : $this->input->post('vendor_vendor_city');
    $vendor_delete['vendor.vendor_country'] = is_null($this->input->post('vendor_vendor_country')) ? '' : $this->input->post('vendor_vendor_country');
    $vendor_delete['vendor.vendor_email'] = is_null($this->input->post('vendor_vendor_email')) ? '' : $this->input->post('vendor_vendor_email');
    $vendor_delete['vendor.vendor_id'] = is_null($this->input->post('vendor_vendor_id')) ? '' : $this->input->post('vendor_vendor_id');
    $vendor_delete['vendor.vendor_name'] = is_null($this->input->post('vendor_vendor_name')) ? '' : $this->input->post('vendor_vendor_name');
    $vendor_delete['vendor.vendor_pan'] = is_null($this->input->post('vendor_vendor_pan')) ? '' : $this->input->post('vendor_vendor_pan');
    $vendor_delete['vendor.vendor_phone'] = is_null($this->input->post('vendor_vendor_phone')) ? '' : $this->input->post('vendor_vendor_phone');
    $vendor_delete['vendor.vendor_state'] = is_null($this->input->post('vendor_vendor_state')) ? '' : $this->input->post('vendor_vendor_state');
    $vendor_delete['vendor.vendor_type_id'] = is_null($this->input->post('vendor_vendor_type_id')) ? '' : $this->input->post('vendor_vendor_type_id');
    $this->db->delete('vendor', array('vendor_id' => $vendor_delete['vendor_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $vendor_delete);
  }
  function vendor_get_records($contact_person_id,$vendor_type_id,$vendor_id) {
    $vendor_filters['contact_person.contact_person_id'] = $this->session->contact_person_contact_person_id;
    $vendor_filters['vendor_type.vendor_type_id'] = $this->session->vendor_type_vendor_type_id;
    $vendor_filters['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $vendor_filters['contact_person.contact_person_id'] = $contact_person_contact_person_id;
    $vendor_filters['vendor_type.vendor_type_id'] = $vendor_type_vendor_type_id;
    $vendor_filters['vendor.vendor_id'] = $vendor_vendor_id;
    $vendor_filters['vendor.account_no'] = is_null($this->input->post('vendor_account_no')) ? '' : $this->input->post('vendor_account_no');
    $vendor_filters['vendor.bank_name'] = is_null($this->input->post('vendor_bank_name')) ? '' : $this->input->post('vendor_bank_name');
    $vendor_filters['vendor.branch'] = is_null($this->input->post('vendor_branch')) ? '' : $this->input->post('vendor_branch');
    $vendor_filters['vendor.contact_person_id'] = is_null($this->input->post('vendor_contact_person_id')) ? '' : $this->input->post('vendor_contact_person_id');
    $vendor_filters['vendor.vendor_address'] = is_null($this->input->post('vendor_vendor_address')) ? '' : $this->input->post('vendor_vendor_address');
    $vendor_filters['vendor.vendor_city'] = is_null($this->input->post('vendor_vendor_city')) ? '' : $this->input->post('vendor_vendor_city');
    $vendor_filters['vendor.vendor_country'] = is_null($this->input->post('vendor_vendor_country')) ? '' : $this->input->post('vendor_vendor_country');
    $vendor_filters['vendor.vendor_email'] = is_null($this->input->post('vendor_vendor_email')) ? '' : $this->input->post('vendor_vendor_email');
    $vendor_filters['vendor.vendor_name'] = is_null($this->input->post('vendor_vendor_name')) ? '' : $this->input->post('vendor_vendor_name');
    $vendor_filters['vendor.vendor_pan'] = is_null($this->input->post('vendor_vendor_pan')) ? '' : $this->input->post('vendor_vendor_pan');
    $vendor_filters['vendor.vendor_phone'] = is_null($this->input->post('vendor_vendor_phone')) ? '' : $this->input->post('vendor_vendor_phone');
    $vendor_filters['vendor.vendor_state'] = is_null($this->input->post('vendor_vendor_state')) ? '' : $this->input->post('vendor_vendor_state');
    $vendor_filters['vendor.vendor_type_id'] = is_null($this->input->post('vendor_vendor_type_id')) ? '' : $this->input->post('vendor_vendor_type_id');
    $this->session->set_userdata('contact_person.contact_person_id', $vendor_filters['contact_person.contact_person_id']);
    $this->session->set_userdata('vendor_type.vendor_type_id', $vendor_filters['vendor_type.vendor_type_id']);
    $this->session->set_userdata('vendor.vendor_id', $vendor_filters['vendor.vendor_id']);
    $this->db->select('contact_person.contact_person_id AS vendor_contact_person_id, vendor_type.vendor_type_id AS vendor_vendor_type_id,
    vendor.account_no AS vendor_account_no, vendor.bank_name AS vendor_bank_name,
    vendor.branch AS vendor_branch, vendor.contact_person_id AS vendor_contact_person_id,
    vendor.vendor_address AS vendor_vendor_address, vendor.vendor_city AS vendor_vendor_city,
    vendor.vendor_country AS vendor_vendor_country, vendor.vendor_email AS vendor_vendor_email,
    vendor.vendor_id AS vendor_vendor_id, vendor.vendor_name AS vendor_vendor_name,
    vendor.vendor_pan AS vendor_vendor_pan, vendor.vendor_phone AS vendor_vendor_phone,
    vendor.vendor_state AS vendor_vendor_state, vendor.vendor_type_id AS vendor_vendor_type_id')->from('vendor');
    $this->db->join('contact_person', 'vendor.contact_person_id = contact_person.contact_person_id', 'left');
    $this->db->join('vendor_type', 'vendor.vendor_type_id = vendor_type.vendor_type_id', 'left');
    $this->db->where($vendor_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $vendor_filters);
  }
}