<?php class Icd_chapter_model extends CI_Model {
  function icd_chapter_create() {
    $icd_chapter_post = [];
    $icd_chapter_post['chapter_id'] = is_null($this->input->post('chapter_id')) ? '' : $this->input->post('chapter_id');
    $icd_chapter_post['chapter_title'] = is_null($this->input->post('chapter_title')) ? '' : $this->input->post('chapter_title');
    $this->db->insert('icd_chapter', $icd_chapter_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $icd_chapter_post);
  }
  function icd_chapter_update($chapter_id) {
    $icd_chapter_post['icd_chapter.chapter_id'] = $this->session->icd_chapter_chapter_id;
    $icd_chapter_post['icd_chapter.chapter_id'] = $icd_chapter_chapter_id;
    $icd_chapter_post['icd_chapter.chapter_title'] = is_null($this->input->post('icd_chapter_chapter_title')) ? '' : $this->input->post('icd_chapter_chapter_title');
    $this->session->set_userdata('icd_chapter.chapter_id', $icd_chapter_post['icd_chapter.chapter_id']);
    $this->db->update('icd_chapter', $icd_chapter_post, array('chapter_id' => $icd_chapter_post['chapter_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $icd_chapter_post);
  }
  function icd_chapter_delete() {
    $icd_chapter_delete['icd_chapter.chapter_id'] = is_null($this->input->post('icd_chapter_chapter_id')) ? '' : $this->input->post('icd_chapter_chapter_id');
    $icd_chapter_delete['icd_chapter.chapter_title'] = is_null($this->input->post('icd_chapter_chapter_title')) ? '' : $this->input->post('icd_chapter_chapter_title');
    $this->db->delete('icd_chapter', array('chapter_id' => $icd_chapter_delete['chapter_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $icd_chapter_delete);
  }
  function icd_chapter_get_records($chapter_id) {
    $icd_chapter_filters['icd_chapter.chapter_id'] = $this->session->icd_chapter_chapter_id;
    $icd_chapter_filters['icd_chapter.chapter_id'] = $icd_chapter_chapter_id;
    $icd_chapter_filters['icd_chapter.chapter_title'] = is_null($this->input->post('icd_chapter_chapter_title')) ? '' : $this->input->post('icd_chapter_chapter_title');
    $this->session->set_userdata('icd_chapter.chapter_id', $icd_chapter_filters['icd_chapter.chapter_id']);
    $this->db->select('icd_chapter.chapter_id AS icd_chapter_chapter_id, icd_chapter.chapter_title AS icd_chapter_chapter_title')->from('icd_chapter');
    $this->db->where($icd_chapter_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $icd_chapter_filters);
  }
}