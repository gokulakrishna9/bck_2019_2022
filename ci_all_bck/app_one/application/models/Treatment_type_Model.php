<?php class Treatment_type_model extends CI_Model {
  function treatment_type_create() {
    $treatment_type_post = [];
    $treatment_type_post['treatment_type_id'] = is_null($this->input->post('treatment_type_id')) ? '' : $this->input->post('treatment_type_id');
    $treatment_type_post['treatment_type'] = is_null($this->input->post('treatment_type')) ? '' : $this->input->post('treatment_type');
    $this->db->insert('treatment_type', $treatment_type_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $treatment_type_post);
  }
  function treatment_type_update() {
    $treatment_type_post['treatment_type.treatment_type_id'] = $this->session->treatment_type_treatment_type_id;
    $treatment_type_post['treatment_type.treatment_type_id'] = $treatment_type_treatment_type_id;
    $treatment_type_post['treatment_type.treatment_type'] = is_null($this->input->post('treatment_type_treatment_type')) ? '' : $this->input->post('treatment_type_treatment_type');
    $this->session->set_userdata('treatment_type.treatment_type_id', $treatment_type_post['treatment_type.treatment_type_id']);
    $this->db->update('treatment_type', $treatment_type_post, array('treatment_type_id' => $treatment_type_post['treatment_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $treatment_type_post);
  }
  function treatment_type_delete() {
    $treatment_type_delete['treatment_type.treatment_type_id'] = is_null($this->input->post('treatment_type_treatment_type_id')) ? '' : $this->input->post('treatment_type_treatment_type_id');
    $treatment_type_delete['treatment_type.treatment_type'] = is_null($this->input->post('treatment_type_treatment_type')) ? '' : $this->input->post('treatment_type_treatment_type');
    $this->db->delete('treatment_type', array('treatment_type_id' => $treatment_type_delete['treatment_type_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $treatment_type_delete);
  }
  function treatment_type_get_records() {
    $treatment_type_filters['treatment_type.treatment_type_id'] = $this->session->treatment_type_treatment_type_id;
    $treatment_type_filters['treatment_type.treatment_type_id'] = $treatment_type_treatment_type_id;
    $treatment_type_filters['treatment_type.treatment_type'] = is_null($this->input->post('treatment_type_treatment_type')) ? '' : $this->input->post('treatment_type_treatment_type');
    $this->session->set_userdata('treatment_type.treatment_type_id', $treatment_type_filters['treatment_type.treatment_type_id']);
    $this->db->select('treatment_type.treatment_type_id AS treatment_type_treatment_type_id, treatment_type.treatment_type AS treatment_type_treatment_type')->from('treatment_type');
    $this->db->where($treatment_type_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $treatment_type_filters);
  }
}