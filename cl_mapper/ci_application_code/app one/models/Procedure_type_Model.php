<?php class Procedure_type_model extends CI_Model {
  function procedure_type_create() {
    $procedure_type_post = [];
    $procedure_type_post['procedure_type'] = is_null($this->input->post('procedure_type')) ? '' : $this->input->post('procedure_type');
    $procedure_type_post['procedure_type_id'] = is_null($this->input->post('procedure_type_id')) ? '' : $this->input->post('procedure_type_id');
    $this->db->insert('procedure_type', $procedure_type_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $procedure_type_post);
  }
  function procedure_type_update($procedure_type_id) {
    $procedure_type_post['procedure_type.procedure_type_id'] = $this->session->procedure_type_procedure_type_id;
    $procedure_type_post['procedure_type.procedure_type_id'] = $procedure_type_procedure_type_id;
    $procedure_type_post['procedure_type.procedure_type'] = is_null($this->input->post('procedure_type_procedure_type')) ? '' : $this->input->post('procedure_type_procedure_type');
    $this->session->set_userdata('procedure_type.procedure_type_id', $procedure_type_post['procedure_type.procedure_type_id']);
    $this->db->update('procedure_type', $procedure_type_post, array('procedure_type_id' => $procedure_type_post['procedure_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $procedure_type_post);
  }
  function procedure_type_delete() {
    $procedure_type_delete['procedure_type.procedure_type'] = is_null($this->input->post('procedure_type_procedure_type')) ? '' : $this->input->post('procedure_type_procedure_type');
    $procedure_type_delete['procedure_type.procedure_type_id'] = is_null($this->input->post('procedure_type_procedure_type_id')) ? '' : $this->input->post('procedure_type_procedure_type_id');
    $this->db->delete('procedure_type', array('procedure_type_id' => $procedure_type_delete['procedure_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $procedure_type_delete);
  }
  function procedure_type_get_records($procedure_type_id) {
    $procedure_type_filters['procedure_type.procedure_type_id'] = $this->session->procedure_type_procedure_type_id;
    $procedure_type_filters['procedure_type.procedure_type_id'] = $procedure_type_procedure_type_id;
    $procedure_type_filters['procedure_type.procedure_type'] = is_null($this->input->post('procedure_type_procedure_type')) ? '' : $this->input->post('procedure_type_procedure_type');
    $this->session->set_userdata('procedure_type.procedure_type_id', $procedure_type_filters['procedure_type.procedure_type_id']);
    $this->db->select('procedure_type.procedure_type AS procedure_type_procedure_type, procedure_type.procedure_type_id AS procedure_type_procedure_type_id')->from('procedure_type');
    $this->db->where($procedure_type_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $procedure_type_filters);
  }
}