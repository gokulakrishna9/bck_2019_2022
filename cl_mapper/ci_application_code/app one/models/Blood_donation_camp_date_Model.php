<?php class Blood_donation_camp_date_model extends CI_Model {
  function blood_donation_camp_date_create() {
    $blood_donation_camp_date_post = [];
    $blood_donation_camp_date_post['camp_date'] = is_null($this->input->post('camp_date')) ? '' : $this->input->post('camp_date');
    $blood_donation_camp_date_post['camp_id'] = is_null($this->input->post('camp_id')) ? '' : $this->input->post('camp_id');
    $this->db->insert('blood_donation_camp_date', $blood_donation_camp_date_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $blood_donation_camp_date_post);
  }
  function blood_donation_camp_date_update($camp_id) {
    $blood_donation_camp_date_post['blood_donation_camp_date.camp_id'] = $this->session->blood_donation_camp_date_camp_id;
    $blood_donation_camp_date_post['blood_donation_camp_date.camp_id'] = $blood_donation_camp_date_camp_id;
    $blood_donation_camp_date_post['blood_donation_camp_date.camp_date'] = is_null($this->input->post('blood_donation_camp_date_camp_date')) ? '' : $this->input->post('blood_donation_camp_date_camp_date');
    $this->session->set_userdata('blood_donation_camp_date.camp_id', $blood_donation_camp_date_post['blood_donation_camp_date.camp_id']);
    $this->db->update('blood_donation_camp_date', $blood_donation_camp_date_post, array('camp_id' => $blood_donation_camp_date_post['camp_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_donation_camp_date_post);
  }
  function blood_donation_camp_date_delete() {
    $blood_donation_camp_date_delete['blood_donation_camp_date.camp_date'] = is_null($this->input->post('blood_donation_camp_date_camp_date')) ? '' : $this->input->post('blood_donation_camp_date_camp_date');
    $blood_donation_camp_date_delete['blood_donation_camp_date.camp_id'] = is_null($this->input->post('blood_donation_camp_date_camp_id')) ? '' : $this->input->post('blood_donation_camp_date_camp_id');
    $this->db->delete('blood_donation_camp_date', array('camp_id' => $blood_donation_camp_date_delete['camp_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $blood_donation_camp_date_delete);
  }
  function blood_donation_camp_date_get_records($camp_id) {
    $blood_donation_camp_date_filters['blood_donation_camp_date.camp_id'] = $this->session->blood_donation_camp_date_camp_id;
    $blood_donation_camp_date_filters['blood_donation_camp_date.camp_id'] = $blood_donation_camp_date_camp_id;
    $blood_donation_camp_date_filters['blood_donation_camp_date.camp_date'] = is_null($this->input->post('blood_donation_camp_date_camp_date')) ? '' : $this->input->post('blood_donation_camp_date_camp_date');
    $this->session->set_userdata('blood_donation_camp_date.camp_id', $blood_donation_camp_date_filters['blood_donation_camp_date.camp_id']);
    $this->db->select('blood_donation_camp_date.camp_date AS blood_donation_camp_date_camp_date, blood_donation_camp_date.camp_id AS blood_donation_camp_date_camp_id')->from('blood_donation_camp_date');
    $this->db->where($blood_donation_camp_date_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $blood_donation_camp_date_filters);
  }
}