<?php class Id_proof_type_model extends CI_Model {
  function id_proof_type_create() {
    $id_proof_type_post = [];
    $id_proof_type_post['id_proof_type_id'] = is_null($this->input->post('id_proof_type_id')) ? '' : $this->input->post('id_proof_type_id');
    $id_proof_type_post['id_proof_type'] = is_null($this->input->post('id_proof_type')) ? '' : $this->input->post('id_proof_type');
    $this->db->insert('id_proof_type', $id_proof_type_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $id_proof_type_post);
  }
  function id_proof_type_update() {
    $id_proof_type_post['id_proof_type.id_proof_type_id'] = $this->session->id_proof_type_id_proof_type_id;
    $id_proof_type_post['id_proof_type.id_proof_type_id'] = $id_proof_type_id_proof_type_id;
    $id_proof_type_post['id_proof_type.id_proof_type'] = is_null($this->input->post('id_proof_type_id_proof_type')) ? '' : $this->input->post('id_proof_type_id_proof_type');
    $this->session->set_userdata('id_proof_type.id_proof_type_id', $id_proof_type_post['id_proof_type.id_proof_type_id']);
    $this->db->update('id_proof_type', $id_proof_type_post, array('id_proof_type_id' => $id_proof_type_post['id_proof_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $id_proof_type_post);
  }
  function id_proof_type_delete() {
    $id_proof_type_delete['id_proof_type.id_proof_type_id'] = is_null($this->input->post('id_proof_type_id_proof_type_id')) ? '' : $this->input->post('id_proof_type_id_proof_type_id');
    $id_proof_type_delete['id_proof_type.id_proof_type'] = is_null($this->input->post('id_proof_type_id_proof_type')) ? '' : $this->input->post('id_proof_type_id_proof_type');
    $this->db->delete('id_proof_type', array('id_proof_type_id' => $id_proof_type_delete['id_proof_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $id_proof_type_delete);
  }
  function id_proof_type_get_records() {
    $id_proof_type_filters['id_proof_type.id_proof_type_id'] = $this->session->id_proof_type_id_proof_type_id;
    $id_proof_type_filters['id_proof_type.id_proof_type_id'] = $id_proof_type_id_proof_type_id;
    $id_proof_type_filters['id_proof_type.id_proof_type'] = is_null($this->input->post('id_proof_type_id_proof_type')) ? '' : $this->input->post('id_proof_type_id_proof_type');
    $this->session->set_userdata('id_proof_type.id_proof_type_id', $id_proof_type_filters['id_proof_type.id_proof_type_id']);
    $this->db->select('id_proof_type.id_proof_type_id AS id_proof_type_id_proof_type_id, id_proof_type.id_proof_type AS id_proof_type_id_proof_type')->from('id_proof_type');
    $this->db->where($id_proof_type_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $id_proof_type_filters);
  }
}