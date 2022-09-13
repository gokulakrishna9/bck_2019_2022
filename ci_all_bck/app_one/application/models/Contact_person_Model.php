<?php class Contact_person_model extends CI_Model {
  function contact_person_create() {
    $contact_person_post = [];
    $contact_person_post['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $contact_person_post['vendor.vendor_id'] = $vendor_vendor_id;
    $contact_person_post['contact_person_id'] = is_null($this->input->post('contact_person_id')) ? '' : $this->input->post('contact_person_id');
    $contact_person_post['contact_person_first_name'] = is_null($this->input->post('contact_person_first_name')) ? '' : $this->input->post('contact_person_first_name');
    $contact_person_post['contact_person_last_name'] = is_null($this->input->post('contact_person_last_name')) ? '' : $this->input->post('contact_person_last_name');
    $contact_person_post['contact_person_email'] = is_null($this->input->post('contact_person_email')) ? '' : $this->input->post('contact_person_email');
    $contact_person_post['contact_person_contact'] = is_null($this->input->post('contact_person_contact')) ? '' : $this->input->post('contact_person_contact');
    $contact_person_post['vendor_id'] = is_null($this->input->post('vendor_id')) ? '' : $this->input->post('vendor_id');
    $contact_person_post['gender'] = is_null($this->input->post('gender')) ? '' : $this->input->post('gender');
    $contact_person_post['designation'] = is_null($this->input->post('designation')) ? '' : $this->input->post('designation');
    $this->session->set_userdata('vendor.vendor_id', $contact_person_post['vendor.vendor_id']);
    $this->db->insert('contact_person', $contact_person_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $contact_person_post);
  }
  function contact_person_update() {
    $contact_person_post['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $contact_person_post['contact_person.contact_person_id'] = $this->session->contact_person_contact_person_id;
    $contact_person_post['vendor.vendor_id'] = $vendor_vendor_id;
    $contact_person_post['contact_person.contact_person_id'] = $contact_person_contact_person_id;
    $contact_person_post['contact_person.contact_person_first_name'] = is_null($this->input->post('contact_person_contact_person_first_name')) ? '' : $this->input->post('contact_person_contact_person_first_name');
    $contact_person_post['contact_person.contact_person_last_name'] = is_null($this->input->post('contact_person_contact_person_last_name')) ? '' : $this->input->post('contact_person_contact_person_last_name');
    $contact_person_post['contact_person.contact_person_email'] = is_null($this->input->post('contact_person_contact_person_email')) ? '' : $this->input->post('contact_person_contact_person_email');
    $contact_person_post['contact_person.contact_person_contact'] = is_null($this->input->post('contact_person_contact_person_contact')) ? '' : $this->input->post('contact_person_contact_person_contact');
    $contact_person_post['contact_person.vendor_id'] = is_null($this->input->post('contact_person_vendor_id')) ? '' : $this->input->post('contact_person_vendor_id');
    $contact_person_post['contact_person.gender'] = is_null($this->input->post('contact_person_gender')) ? '' : $this->input->post('contact_person_gender');
    $contact_person_post['contact_person.designation'] = is_null($this->input->post('contact_person_designation')) ? '' : $this->input->post('contact_person_designation');
    $this->session->set_userdata('vendor.vendor_id', $contact_person_post['vendor.vendor_id']);
    $this->session->set_userdata('contact_person.contact_person_id', $contact_person_post['contact_person.contact_person_id']);
    $this->db->update('contact_person', $contact_person_post, array('contact_person_id' => $contact_person_post['contact_person_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $contact_person_post);
  }
  function contact_person_delete() {
    $contact_person_delete['contact_person.contact_person_id'] = is_null($this->input->post('contact_person_contact_person_id')) ? '' : $this->input->post('contact_person_contact_person_id');
    $contact_person_delete['contact_person.contact_person_first_name'] = is_null($this->input->post('contact_person_contact_person_first_name')) ? '' : $this->input->post('contact_person_contact_person_first_name');
    $contact_person_delete['contact_person.contact_person_last_name'] = is_null($this->input->post('contact_person_contact_person_last_name')) ? '' : $this->input->post('contact_person_contact_person_last_name');
    $contact_person_delete['contact_person.contact_person_email'] = is_null($this->input->post('contact_person_contact_person_email')) ? '' : $this->input->post('contact_person_contact_person_email');
    $contact_person_delete['contact_person.contact_person_contact'] = is_null($this->input->post('contact_person_contact_person_contact')) ? '' : $this->input->post('contact_person_contact_person_contact');
    $contact_person_delete['contact_person.vendor_id'] = is_null($this->input->post('contact_person_vendor_id')) ? '' : $this->input->post('contact_person_vendor_id');
    $contact_person_delete['contact_person.gender'] = is_null($this->input->post('contact_person_gender')) ? '' : $this->input->post('contact_person_gender');
    $contact_person_delete['contact_person.designation'] = is_null($this->input->post('contact_person_designation')) ? '' : $this->input->post('contact_person_designation');
    $this->db->delete('contact_person', array('contact_person_id' => $contact_person_delete['contact_person_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $contact_person_delete);
  }
  function contact_person_get_records() {
    $contact_person_filters['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $contact_person_filters['contact_person.contact_person_id'] = $this->session->contact_person_contact_person_id;
    $contact_person_filters['vendor.vendor_id'] = $vendor_vendor_id;
    $contact_person_filters['contact_person.contact_person_id'] = $contact_person_contact_person_id;
    $contact_person_filters['contact_person.contact_person_first_name'] = is_null($this->input->post('contact_person_contact_person_first_name')) ? '' : $this->input->post('contact_person_contact_person_first_name');
    $contact_person_filters['contact_person.contact_person_last_name'] = is_null($this->input->post('contact_person_contact_person_last_name')) ? '' : $this->input->post('contact_person_contact_person_last_name');
    $contact_person_filters['contact_person.contact_person_email'] = is_null($this->input->post('contact_person_contact_person_email')) ? '' : $this->input->post('contact_person_contact_person_email');
    $contact_person_filters['contact_person.contact_person_contact'] = is_null($this->input->post('contact_person_contact_person_contact')) ? '' : $this->input->post('contact_person_contact_person_contact');
    $contact_person_filters['contact_person.vendor_id'] = is_null($this->input->post('contact_person_vendor_id')) ? '' : $this->input->post('contact_person_vendor_id');
    $contact_person_filters['contact_person.gender'] = is_null($this->input->post('contact_person_gender')) ? '' : $this->input->post('contact_person_gender');
    $contact_person_filters['contact_person.designation'] = is_null($this->input->post('contact_person_designation')) ? '' : $this->input->post('contact_person_designation');
    $this->session->set_userdata('vendor.vendor_id', $contact_person_filters['vendor.vendor_id']);
    $this->session->set_userdata('contact_person.contact_person_id', $contact_person_filters['contact_person.contact_person_id']);
    $this->db->select('vendor.vendor_id AS contact_person_vendor_id, contact_person.contact_person_id AS contact_person_contact_person_id,
    contact_person.contact_person_first_name AS contact_person_contact_person_first_name, contact_person.contact_person_last_name AS contact_person_contact_person_last_name,
    contact_person.contact_person_email AS contact_person_contact_person_email, contact_person.contact_person_contact AS contact_person_contact_person_contact,
    contact_person.vendor_id AS contact_person_vendor_id, contact_person.gender AS contact_person_gender,
    contact_person.designation AS contact_person_designation')->from('contact_person');
    $this->db->join('vendor', 'contact_person.vendor_id = vendor.vendor_id', 'left');
    $this->db->where($contact_person_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $contact_person_filters);
  }
}