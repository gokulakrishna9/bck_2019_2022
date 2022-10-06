<?php class Publication_model extends CI_Model {
  function publication_create($staff_staff_id) {
    $publication_post = [];
    $publication_post['staff.staff_id'] = $this->session->staff_staff_id;
    $publication_post['staff.staff_id'] = $staff_staff_id;
    $publication_post['edition'] = is_null($this->input->post('edition')) ? '' : $this->input->post('edition');
    $publication_post['journal'] = is_null($this->input->post('journal')) ? '' : $this->input->post('journal');
    $publication_post['publication_id'] = is_null($this->input->post('publication_id')) ? '' : $this->input->post('publication_id');
    $publication_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $publication_post['title'] = is_null($this->input->post('title')) ? '' : $this->input->post('title');
    $this->session->set_userdata('staff.staff_id', $publication_post['staff.staff_id']);
    $this->db->insert('publication', $publication_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $publication_post);
  }
  function publication_update($staff_id,$publication_id) {
    $publication_post['staff.staff_id'] = $this->session->staff_staff_id;
    $publication_post['publication.publication_id'] = $this->session->publication_publication_id;
    $publication_post['staff.staff_id'] = $staff_staff_id;
    $publication_post['publication.publication_id'] = $publication_publication_id;
    $publication_post['publication.edition'] = is_null($this->input->post('publication_edition')) ? '' : $this->input->post('publication_edition');
    $publication_post['publication.journal'] = is_null($this->input->post('publication_journal')) ? '' : $this->input->post('publication_journal');
    $publication_post['publication.staff_id'] = is_null($this->input->post('publication_staff_id')) ? '' : $this->input->post('publication_staff_id');
    $publication_post['publication.title'] = is_null($this->input->post('publication_title')) ? '' : $this->input->post('publication_title');
    $this->session->set_userdata('staff.staff_id', $publication_post['staff.staff_id']);
    $this->session->set_userdata('publication.publication_id', $publication_post['publication.publication_id']);
    $this->db->update('publication', $publication_post, array('publication_id' => $publication_post['publication_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $publication_post);
  }
  function publication_delete() {
    $publication_delete['publication.edition'] = is_null($this->input->post('publication_edition')) ? '' : $this->input->post('publication_edition');
    $publication_delete['publication.journal'] = is_null($this->input->post('publication_journal')) ? '' : $this->input->post('publication_journal');
    $publication_delete['publication.publication_id'] = is_null($this->input->post('publication_publication_id')) ? '' : $this->input->post('publication_publication_id');
    $publication_delete['publication.staff_id'] = is_null($this->input->post('publication_staff_id')) ? '' : $this->input->post('publication_staff_id');
    $publication_delete['publication.title'] = is_null($this->input->post('publication_title')) ? '' : $this->input->post('publication_title');
    $this->db->delete('publication', array('publication_id' => $publication_delete['publication_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $publication_delete);
  }
  function publication_get_records($staff_id,$publication_id) {
    $publication_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $publication_filters['publication.publication_id'] = $this->session->publication_publication_id;
    $publication_filters['staff.staff_id'] = $staff_staff_id;
    $publication_filters['publication.publication_id'] = $publication_publication_id;
    $publication_filters['publication.edition'] = is_null($this->input->post('publication_edition')) ? '' : $this->input->post('publication_edition');
    $publication_filters['publication.journal'] = is_null($this->input->post('publication_journal')) ? '' : $this->input->post('publication_journal');
    $publication_filters['publication.staff_id'] = is_null($this->input->post('publication_staff_id')) ? '' : $this->input->post('publication_staff_id');
    $publication_filters['publication.title'] = is_null($this->input->post('publication_title')) ? '' : $this->input->post('publication_title');
    $this->session->set_userdata('staff.staff_id', $publication_filters['staff.staff_id']);
    $this->session->set_userdata('publication.publication_id', $publication_filters['publication.publication_id']);
    $this->db->select('staff.staff_id AS publication_staff_id, publication.edition AS publication_edition,
    publication.journal AS publication_journal, publication.publication_id AS publication_publication_id,
    publication.staff_id AS publication_staff_id, publication.title AS publication_title')->from('publication');
    $this->db->join('staff', 'publication.staff_id = staff.staff_id', 'left');
    $this->db->where($publication_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $publication_filters);
  }
}