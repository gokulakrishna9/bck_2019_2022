<?php class Procedure_staff_model extends CI_Model {
  function procedure_staff_create() {
    $procedure_staff_post = [];
    $procedure_staff_post['patient_procedure.patient_procedure_id'] = $this->session->patient_procedure_patient_procedure_id;
    $procedure_staff_post['staff.staff_id'] = $this->session->staff_staff_id;
    $procedure_staff_post['patient_procedure.patient_procedure_id'] = $patient_procedure_patient_procedure_id;
    $procedure_staff_post['staff.staff_id'] = $staff_staff_id;
    $procedure_staff_post['procedure_staff_id'] = is_null($this->input->post('procedure_staff_id')) ? '' : $this->input->post('procedure_staff_id');
    $procedure_staff_post['patient_procedure_id'] = is_null($this->input->post('patient_procedure_id')) ? '' : $this->input->post('patient_procedure_id');
    $procedure_staff_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $procedure_staff_post['staff_role'] = is_null($this->input->post('staff_role')) ? '' : $this->input->post('staff_role');
    $this->session->set_userdata('patient_procedure.patient_procedure_id', $procedure_staff_post['patient_procedure.patient_procedure_id']);
    $this->session->set_userdata('staff.staff_id', $procedure_staff_post['staff.staff_id']);
    $this->db->insert('procedure_staff', $procedure_staff_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $procedure_staff_post);
  }
  function procedure_staff_update() {
    $procedure_staff_post['patient_procedure.patient_procedure_id'] = $this->session->patient_procedure_patient_procedure_id;
    $procedure_staff_post['staff.staff_id'] = $this->session->staff_staff_id;
    $procedure_staff_post['procedure_staff.procedure_staff_id'] = $this->session->procedure_staff_procedure_staff_id;
    $procedure_staff_post['patient_procedure.patient_procedure_id'] = $patient_procedure_patient_procedure_id;
    $procedure_staff_post['staff.staff_id'] = $staff_staff_id;
    $procedure_staff_post['procedure_staff.procedure_staff_id'] = $procedure_staff_procedure_staff_id;
    $procedure_staff_post['procedure_staff.patient_procedure_id'] = is_null($this->input->post('procedure_staff_patient_procedure_id')) ? '' : $this->input->post('procedure_staff_patient_procedure_id');
    $procedure_staff_post['procedure_staff.staff_id'] = is_null($this->input->post('procedure_staff_staff_id')) ? '' : $this->input->post('procedure_staff_staff_id');
    $procedure_staff_post['procedure_staff.staff_role'] = is_null($this->input->post('procedure_staff_staff_role')) ? '' : $this->input->post('procedure_staff_staff_role');
    $this->session->set_userdata('patient_procedure.patient_procedure_id', $procedure_staff_post['patient_procedure.patient_procedure_id']);
    $this->session->set_userdata('staff.staff_id', $procedure_staff_post['staff.staff_id']);
    $this->session->set_userdata('procedure_staff.procedure_staff_id', $procedure_staff_post['procedure_staff.procedure_staff_id']);
    $this->db->update('procedure_staff', $procedure_staff_post, array('procedure_staff_id' => $procedure_staff_post['procedure_staff_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $procedure_staff_post);
  }
  function procedure_staff_delete() {
    $procedure_staff_delete['procedure_staff.procedure_staff_id'] = is_null($this->input->post('procedure_staff_procedure_staff_id')) ? '' : $this->input->post('procedure_staff_procedure_staff_id');
    $procedure_staff_delete['procedure_staff.patient_procedure_id'] = is_null($this->input->post('procedure_staff_patient_procedure_id')) ? '' : $this->input->post('procedure_staff_patient_procedure_id');
    $procedure_staff_delete['procedure_staff.staff_id'] = is_null($this->input->post('procedure_staff_staff_id')) ? '' : $this->input->post('procedure_staff_staff_id');
    $procedure_staff_delete['procedure_staff.staff_role'] = is_null($this->input->post('procedure_staff_staff_role')) ? '' : $this->input->post('procedure_staff_staff_role');
    $this->db->delete('procedure_staff', array('procedure_staff_id' => $procedure_staff_delete['procedure_staff_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $procedure_staff_delete);
  }
  function procedure_staff_get_records() {
    $procedure_staff_filters['patient_procedure.patient_procedure_id'] = $this->session->patient_procedure_patient_procedure_id;
    $procedure_staff_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $procedure_staff_filters['procedure_staff.procedure_staff_id'] = $this->session->procedure_staff_procedure_staff_id;
    $procedure_staff_filters['patient_procedure.patient_procedure_id'] = $patient_procedure_patient_procedure_id;
    $procedure_staff_filters['staff.staff_id'] = $staff_staff_id;
    $procedure_staff_filters['procedure_staff.procedure_staff_id'] = $procedure_staff_procedure_staff_id;
    $procedure_staff_filters['procedure_staff.patient_procedure_id'] = is_null($this->input->post('procedure_staff_patient_procedure_id')) ? '' : $this->input->post('procedure_staff_patient_procedure_id');
    $procedure_staff_filters['procedure_staff.staff_id'] = is_null($this->input->post('procedure_staff_staff_id')) ? '' : $this->input->post('procedure_staff_staff_id');
    $procedure_staff_filters['procedure_staff.staff_role'] = is_null($this->input->post('procedure_staff_staff_role')) ? '' : $this->input->post('procedure_staff_staff_role');
    $this->session->set_userdata('patient_procedure.patient_procedure_id', $procedure_staff_filters['patient_procedure.patient_procedure_id']);
    $this->session->set_userdata('staff.staff_id', $procedure_staff_filters['staff.staff_id']);
    $this->session->set_userdata('procedure_staff.procedure_staff_id', $procedure_staff_filters['procedure_staff.procedure_staff_id']);
    $this->db->select('patient_procedure.patient_procedure_id AS procedure_staff_patient_procedure_id, staff.staff_id AS procedure_staff_staff_id,
    procedure_staff.procedure_staff_id AS procedure_staff_procedure_staff_id, procedure_staff.patient_procedure_id AS procedure_staff_patient_procedure_id,
    procedure_staff.staff_id AS procedure_staff_staff_id, procedure_staff.staff_role AS procedure_staff_staff_role')->from('procedure_staff');
    $this->db->join('patient_procedure', 'procedure_staff.patient_procedure_id = patient_procedure.patient_procedure_id', 'left');
    $this->db->join('staff', 'procedure_staff.staff_id = staff.staff_id', 'left');
    $this->db->where($procedure_staff_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $procedure_staff_filters);
  }
}