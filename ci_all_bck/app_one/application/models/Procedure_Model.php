<?php class Procedure_model extends CI_Model {
  function procedure_create() {
    $procedure_post = [];
    $procedure_post['procedure_type.procedure_type_id'] = $this->session->procedure_type_procedure_type_id;
    $procedure_post['procedure_type.procedure_type_id'] = $procedure_type_procedure_type_id;
    $procedure_post['procedure_id'] = is_null($this->input->post('procedure_id')) ? '' : $this->input->post('procedure_id');
    $procedure_post['procedure_name'] = is_null($this->input->post('procedure_name')) ? '' : $this->input->post('procedure_name');
    $procedure_post['procedure_type_id'] = is_null($this->input->post('procedure_type_id')) ? '' : $this->input->post('procedure_type_id');
    $this->session->set_userdata('procedure_type.procedure_type_id', $procedure_post['procedure_type.procedure_type_id']);
    $this->db->insert('procedure', $procedure_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $procedure_post);
  }
  function procedure_update() {
    $procedure_post['procedure_type.procedure_type_id'] = $this->session->procedure_type_procedure_type_id;
    $procedure_post['procedure.procedure_id'] = $this->session->procedure_procedure_id;
    $procedure_post['procedure_type.procedure_type_id'] = $procedure_type_procedure_type_id;
    $procedure_post['procedure.procedure_id'] = $procedure_procedure_id;
    $procedure_post['procedure.procedure_name'] = is_null($this->input->post('procedure_procedure_name')) ? '' : $this->input->post('procedure_procedure_name');
    $procedure_post['procedure.procedure_type_id'] = is_null($this->input->post('procedure_procedure_type_id')) ? '' : $this->input->post('procedure_procedure_type_id');
    $this->session->set_userdata('procedure_type.procedure_type_id', $procedure_post['procedure_type.procedure_type_id']);
    $this->session->set_userdata('procedure.procedure_id', $procedure_post['procedure.procedure_id']);
    $this->db->update('procedure', $procedure_post, array('procedure_id' => $procedure_post['procedure_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $procedure_post);
  }
  function procedure_delete() {
    $procedure_delete['procedure.procedure_id'] = is_null($this->input->post('procedure_procedure_id')) ? '' : $this->input->post('procedure_procedure_id');
    $procedure_delete['procedure.procedure_name'] = is_null($this->input->post('procedure_procedure_name')) ? '' : $this->input->post('procedure_procedure_name');
    $procedure_delete['procedure.procedure_type_id'] = is_null($this->input->post('procedure_procedure_type_id')) ? '' : $this->input->post('procedure_procedure_type_id');
    $this->db->delete('procedure', array('procedure_id' => $procedure_delete['procedure_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $procedure_delete);
  }
  function procedure_get_records() {
    $procedure_filters['procedure_type.procedure_type_id'] = $this->session->procedure_type_procedure_type_id;
    $procedure_filters['procedure.procedure_id'] = $this->session->procedure_procedure_id;
    $procedure_filters['procedure_type.procedure_type_id'] = $procedure_type_procedure_type_id;
    $procedure_filters['procedure.procedure_id'] = $procedure_procedure_id;
    $procedure_filters['procedure.procedure_name'] = is_null($this->input->post('procedure_procedure_name')) ? '' : $this->input->post('procedure_procedure_name');
    $procedure_filters['procedure.procedure_type_id'] = is_null($this->input->post('procedure_procedure_type_id')) ? '' : $this->input->post('procedure_procedure_type_id');
    $this->session->set_userdata('procedure_type.procedure_type_id', $procedure_filters['procedure_type.procedure_type_id']);
    $this->session->set_userdata('procedure.procedure_id', $procedure_filters['procedure.procedure_id']);
    $this->db->select('procedure_type.procedure_type_id AS procedure_procedure_type_id, procedure.procedure_id AS procedure_procedure_id,
    procedure.procedure_name AS procedure_procedure_name, procedure.procedure_type_id AS procedure_procedure_type_id')->from('procedure');
    $this->db->join('procedure_type', 'procedure.procedure_type_id = procedure_type.procedure_type_id', 'left');
    $this->db->where($procedure_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $procedure_filters);
  }
}