<?php class Mlc_model extends CI_Model {
  function mlc_create() {
    $mlc_post = [];
    $mlc_post['visit_id'] = is_null($this->input->post('visit_id')) ? '' : $this->input->post('visit_id');
    $mlc_post['mlc_number'] = is_null($this->input->post('mlc_number')) ? '' : $this->input->post('mlc_number');
    $mlc_post['mlc_number_manual'] = is_null($this->input->post('mlc_number_manual')) ? '' : $this->input->post('mlc_number_manual');
    $mlc_post['ps_name'] = is_null($this->input->post('ps_name')) ? '' : $this->input->post('ps_name');
    $mlc_post['brought_by'] = is_null($this->input->post('brought_by')) ? '' : $this->input->post('brought_by');
    $mlc_post['police_intimation'] = is_null($this->input->post('police_intimation')) ? '' : $this->input->post('police_intimation');
    $mlc_post['declaration_required'] = is_null($this->input->post('declaration_required')) ? '' : $this->input->post('declaration_required');
    $mlc_post['pc_number'] = is_null($this->input->post('pc_number')) ? '' : $this->input->post('pc_number');
    $mlc_post['mlc_id'] = is_null($this->input->post('mlc_id')) ? '' : $this->input->post('mlc_id');
    $this->db->insert('mlc', $mlc_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $mlc_post);
  }
  function mlc_update() {
    $mlc_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $mlc_post['mlc.visit_id'] = $mlc_visit_id;
    $mlc_post['mlc.mlc_number'] = is_null($this->input->post('mlc_mlc_number')) ? '' : $this->input->post('mlc_mlc_number');
    $mlc_post['mlc.mlc_number_manual'] = is_null($this->input->post('mlc_mlc_number_manual')) ? '' : $this->input->post('mlc_mlc_number_manual');
    $mlc_post['mlc.ps_name'] = is_null($this->input->post('mlc_ps_name')) ? '' : $this->input->post('mlc_ps_name');
    $mlc_post['mlc.brought_by'] = is_null($this->input->post('mlc_brought_by')) ? '' : $this->input->post('mlc_brought_by');
    $mlc_post['mlc.police_intimation'] = is_null($this->input->post('mlc_police_intimation')) ? '' : $this->input->post('mlc_police_intimation');
    $mlc_post['mlc.declaration_required'] = is_null($this->input->post('mlc_declaration_required')) ? '' : $this->input->post('mlc_declaration_required');
    $mlc_post['mlc.pc_number'] = is_null($this->input->post('mlc_pc_number')) ? '' : $this->input->post('mlc_pc_number');
    $mlc_post['mlc.mlc_id'] = is_null($this->input->post('mlc_mlc_id')) ? '' : $this->input->post('mlc_mlc_id');
    $this->session->set_userdata('mlc.visit_id', $mlc_post['mlc.visit_id']);
    $this->db->update('mlc', $mlc_post, array('visit_id' => $mlc_post['visit_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $mlc_post);
  }
  function mlc_delete() {
    $mlc_delete['mlc.visit_id'] = is_null($this->input->post('mlc_visit_id')) ? '' : $this->input->post('mlc_visit_id');
    $mlc_delete['mlc.mlc_number'] = is_null($this->input->post('mlc_mlc_number')) ? '' : $this->input->post('mlc_mlc_number');
    $mlc_delete['mlc.mlc_number_manual'] = is_null($this->input->post('mlc_mlc_number_manual')) ? '' : $this->input->post('mlc_mlc_number_manual');
    $mlc_delete['mlc.ps_name'] = is_null($this->input->post('mlc_ps_name')) ? '' : $this->input->post('mlc_ps_name');
    $mlc_delete['mlc.brought_by'] = is_null($this->input->post('mlc_brought_by')) ? '' : $this->input->post('mlc_brought_by');
    $mlc_delete['mlc.police_intimation'] = is_null($this->input->post('mlc_police_intimation')) ? '' : $this->input->post('mlc_police_intimation');
    $mlc_delete['mlc.declaration_required'] = is_null($this->input->post('mlc_declaration_required')) ? '' : $this->input->post('mlc_declaration_required');
    $mlc_delete['mlc.pc_number'] = is_null($this->input->post('mlc_pc_number')) ? '' : $this->input->post('mlc_pc_number');
    $mlc_delete['mlc.mlc_id'] = is_null($this->input->post('mlc_mlc_id')) ? '' : $this->input->post('mlc_mlc_id');
    $this->db->delete('mlc', array('visit_id' => $mlc_delete['visit_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $mlc_delete);
  }
  function mlc_get_records() {
    $mlc_filters['mlc.visit_id'] = $this->session->mlc_visit_id;
    $mlc_filters['mlc.visit_id'] = $mlc_visit_id;
    $mlc_filters['mlc.mlc_number'] = is_null($this->input->post('mlc_mlc_number')) ? '' : $this->input->post('mlc_mlc_number');
    $mlc_filters['mlc.mlc_number_manual'] = is_null($this->input->post('mlc_mlc_number_manual')) ? '' : $this->input->post('mlc_mlc_number_manual');
    $mlc_filters['mlc.ps_name'] = is_null($this->input->post('mlc_ps_name')) ? '' : $this->input->post('mlc_ps_name');
    $mlc_filters['mlc.brought_by'] = is_null($this->input->post('mlc_brought_by')) ? '' : $this->input->post('mlc_brought_by');
    $mlc_filters['mlc.police_intimation'] = is_null($this->input->post('mlc_police_intimation')) ? '' : $this->input->post('mlc_police_intimation');
    $mlc_filters['mlc.declaration_required'] = is_null($this->input->post('mlc_declaration_required')) ? '' : $this->input->post('mlc_declaration_required');
    $mlc_filters['mlc.pc_number'] = is_null($this->input->post('mlc_pc_number')) ? '' : $this->input->post('mlc_pc_number');
    $mlc_filters['mlc.mlc_id'] = is_null($this->input->post('mlc_mlc_id')) ? '' : $this->input->post('mlc_mlc_id');
    $this->session->set_userdata('mlc.visit_id', $mlc_filters['mlc.visit_id']);
    $this->db->select('mlc.visit_id AS mlc_visit_id, mlc.mlc_number AS mlc_mlc_number,
    mlc.mlc_number_manual AS mlc_mlc_number_manual, mlc.ps_name AS mlc_ps_name,
    mlc.brought_by AS mlc_brought_by, mlc.police_intimation AS mlc_police_intimation,
    mlc.declaration_required AS mlc_declaration_required, mlc.pc_number AS mlc_pc_number,
    mlc.mlc_id AS mlc_mlc_id')->from('mlc');
    $this->db->where($mlc_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $mlc_filters);
  }
}