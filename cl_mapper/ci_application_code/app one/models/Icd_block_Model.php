<?php class Icd_block_model extends CI_Model {
  function icd_block_create($icd_chapter_chapter_id) {
    $icd_block_post = [];
    $icd_block_post['icd_chapter.chapter_id'] = $this->session->icd_chapter_chapter_id;
    $icd_block_post['icd_chapter.chapter_id'] = $icd_chapter_chapter_id;
    $icd_block_post['block_id'] = is_null($this->input->post('block_id')) ? '' : $this->input->post('block_id');
    $icd_block_post['block_title'] = is_null($this->input->post('block_title')) ? '' : $this->input->post('block_title');
    $icd_block_post['chapter_id'] = is_null($this->input->post('chapter_id')) ? '' : $this->input->post('chapter_id');
    $this->session->set_userdata('icd_chapter.chapter_id', $icd_block_post['icd_chapter.chapter_id']);
    $this->db->insert('icd_block', $icd_block_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $icd_block_post);
  }
  function icd_block_update($chapter_id,$block_id) {
    $icd_block_post['icd_chapter.chapter_id'] = $this->session->icd_chapter_chapter_id;
    $icd_block_post['icd_block.block_id'] = $this->session->icd_block_block_id;
    $icd_block_post['icd_chapter.chapter_id'] = $icd_chapter_chapter_id;
    $icd_block_post['icd_block.block_id'] = $icd_block_block_id;
    $icd_block_post['icd_block.block_title'] = is_null($this->input->post('icd_block_block_title')) ? '' : $this->input->post('icd_block_block_title');
    $icd_block_post['icd_block.chapter_id'] = is_null($this->input->post('icd_block_chapter_id')) ? '' : $this->input->post('icd_block_chapter_id');
    $this->session->set_userdata('icd_chapter.chapter_id', $icd_block_post['icd_chapter.chapter_id']);
    $this->session->set_userdata('icd_block.block_id', $icd_block_post['icd_block.block_id']);
    $this->db->update('icd_block', $icd_block_post, array('block_id' => $icd_block_post['block_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $icd_block_post);
  }
  function icd_block_delete() {
    $icd_block_delete['icd_block.block_id'] = is_null($this->input->post('icd_block_block_id')) ? '' : $this->input->post('icd_block_block_id');
    $icd_block_delete['icd_block.block_title'] = is_null($this->input->post('icd_block_block_title')) ? '' : $this->input->post('icd_block_block_title');
    $icd_block_delete['icd_block.chapter_id'] = is_null($this->input->post('icd_block_chapter_id')) ? '' : $this->input->post('icd_block_chapter_id');
    $this->db->delete('icd_block', array('block_id' => $icd_block_delete['block_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $icd_block_delete);
  }
  function icd_block_get_records($chapter_id,$block_id) {
    $icd_block_filters['icd_chapter.chapter_id'] = $this->session->icd_chapter_chapter_id;
    $icd_block_filters['icd_block.block_id'] = $this->session->icd_block_block_id;
    $icd_block_filters['icd_chapter.chapter_id'] = $icd_chapter_chapter_id;
    $icd_block_filters['icd_block.block_id'] = $icd_block_block_id;
    $icd_block_filters['icd_block.block_title'] = is_null($this->input->post('icd_block_block_title')) ? '' : $this->input->post('icd_block_block_title');
    $icd_block_filters['icd_block.chapter_id'] = is_null($this->input->post('icd_block_chapter_id')) ? '' : $this->input->post('icd_block_chapter_id');
    $this->session->set_userdata('icd_chapter.chapter_id', $icd_block_filters['icd_chapter.chapter_id']);
    $this->session->set_userdata('icd_block.block_id', $icd_block_filters['icd_block.block_id']);
    $this->db->select('icd_chapter.chapter_id AS icd_block_chapter_id, icd_block.block_id AS icd_block_block_id,
    icd_block.block_title AS icd_block_block_title, icd_block.chapter_id AS icd_block_chapter_id')->from('icd_block');
    $this->db->join('icd_chapter', 'icd_block.chapter_id = icd_chapter.chapter_id', 'left');
    $this->db->where($icd_block_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $icd_block_filters);
  }
}