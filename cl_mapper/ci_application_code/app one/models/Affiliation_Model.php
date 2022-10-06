<?php class Affiliation_model extends CI_Model {
  function affiliation_create($staff_staff_id) {
    $affiliation_post = [];
    $affiliation_post['staff.staff_id'] = $this->session->staff_staff_id;
    $affiliation_post['staff.staff_id'] = $staff_staff_id;
    $affiliation_post['affiliated_institution'] = is_null($this->input->post('affiliated_institution')) ? '' : $this->input->post('affiliated_institution');
    $affiliation_post['affiliation_id'] = is_null($this->input->post('affiliation_id')) ? '' : $this->input->post('affiliation_id');
    $affiliation_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $this->session->set_userdata('staff.staff_id', $affiliation_post['staff.staff_id']);
    $this->db->insert('affiliation', $affiliation_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $affiliation_post);
  }
  function affiliation_update($staff_id,$affiliation_id) {
    $affiliation_post['staff.staff_id'] = $this->session->staff_staff_id;
    $affiliation_post['affiliation.affiliation_id'] = $this->session->affiliation_affiliation_id;
    $affiliation_post['staff.staff_id'] = $staff_staff_id;
    $affiliation_post['affiliation.affiliation_id'] = $affiliation_affiliation_id;
    $affiliation_post['affiliation.affiliated_institution'] = is_null($this->input->post('affiliation_affiliated_institution')) ? '' : $this->input->post('affiliation_affiliated_institution');
    $affiliation_post['affiliation.staff_id'] = is_null($this->input->post('affiliation_staff_id')) ? '' : $this->input->post('affiliation_staff_id');
    $this->session->set_userdata('staff.staff_id', $affiliation_post['staff.staff_id']);
    $this->session->set_userdata('affiliation.affiliation_id', $affiliation_post['affiliation.affiliation_id']);
    $this->db->update('affiliation', $affiliation_post, array('affiliation_id' => $affiliation_post['affiliation_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $affiliation_post);
  }
  function affiliation_delete() {
    $affiliation_delete['affiliation.affiliated_institution'] = is_null($this->input->post('affiliation_affiliated_institution')) ? '' : $this->input->post('affiliation_affiliated_institution');
    $affiliation_delete['affiliation.affiliation_id'] = is_null($this->input->post('affiliation_affiliation_id')) ? '' : $this->input->post('affiliation_affiliation_id');
    $affiliation_delete['affiliation.staff_id'] = is_null($this->input->post('affiliation_staff_id')) ? '' : $this->input->post('affiliation_staff_id');
    $this->db->delete('affiliation', array('affiliation_id' => $affiliation_delete['affiliation_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $affiliation_delete);
  }
  function affiliation_get_records($staff_id,$affiliation_id) {
    $affiliation_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $affiliation_filters['affiliation.affiliation_id'] = $this->session->affiliation_affiliation_id;
    $affiliation_filters['staff.staff_id'] = $staff_staff_id;
    $affiliation_filters['affiliation.affiliation_id'] = $affiliation_affiliation_id;
    $affiliation_filters['affiliation.affiliated_institution'] = is_null($this->input->post('affiliation_affiliated_institution')) ? '' : $this->input->post('affiliation_affiliated_institution');
    $affiliation_filters['affiliation.staff_id'] = is_null($this->input->post('affiliation_staff_id')) ? '' : $this->input->post('affiliation_staff_id');
    $this->session->set_userdata('staff.staff_id', $affiliation_filters['staff.staff_id']);
    $this->session->set_userdata('affiliation.affiliation_id', $affiliation_filters['affiliation.affiliation_id']);
    $this->db->select('staff.staff_id AS affiliation_staff_id, affiliation.affiliated_institution AS affiliation_affiliated_institution,
    affiliation.affiliation_id AS affiliation_affiliation_id, affiliation.staff_id AS affiliation_staff_id')->from('affiliation');
    $this->db->join('staff', 'affiliation.staff_id = staff.staff_id', 'left');
    $this->db->where($affiliation_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $affiliation_filters);
  }
}