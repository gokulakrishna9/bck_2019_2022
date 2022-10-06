<?php class Dicom_model extends CI_Model {
  function dicom_create($test_test_id,$mlc_visit_id,$patient_visit_visit_id) {
    $dicom_post = [];
    $dicom_post['test.test_id'] = $this->session->test_test_id;
    $dicom_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $dicom_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $dicom_post['test.test_id'] = $test_test_id;
    $dicom_post['mlc.visit_id'] = $mlc_visit_id;
    $dicom_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $dicom_post['dicom_id'] = is_null($this->input->post('dicom_id')) ? '' : $this->input->post('dicom_id');
    $dicom_post['filepath'] = is_null($this->input->post('filepath')) ? '' : $this->input->post('filepath');
    $dicom_post['modality'] = is_null($this->input->post('modality')) ? '' : $this->input->post('modality');
    $dicom_post['study_datetime'] = is_null($this->input->post('study_datetime')) ? '' : $this->input->post('study_datetime');
    $dicom_post['study_id'] = is_null($this->input->post('study_id')) ? '' : $this->input->post('study_id');
    $dicom_post['test_id'] = is_null($this->input->post('test_id')) ? '' : $this->input->post('test_id');
    $dicom_post['visit_id'] = is_null($this->input->post('visit_id')) ? '' : $this->input->post('visit_id');
    $this->session->set_userdata('test.test_id', $dicom_post['test.test_id']);
    $this->session->set_userdata('mlc.visit_id', $dicom_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $dicom_post['patient_visit.visit_id']);
    $this->db->insert('dicom', $dicom_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $dicom_post);
  }
  function dicom_update($test_id,$visit_id,$visit_id,$dicom_id) {
    $dicom_post['test.test_id'] = $this->session->test_test_id;
    $dicom_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $dicom_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $dicom_post['dicom.dicom_id'] = $this->session->dicom_dicom_id;
    $dicom_post['test.test_id'] = $test_test_id;
    $dicom_post['mlc.visit_id'] = $mlc_visit_id;
    $dicom_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $dicom_post['dicom.dicom_id'] = $dicom_dicom_id;
    $dicom_post['dicom.filepath'] = is_null($this->input->post('dicom_filepath')) ? '' : $this->input->post('dicom_filepath');
    $dicom_post['dicom.modality'] = is_null($this->input->post('dicom_modality')) ? '' : $this->input->post('dicom_modality');
    $dicom_post['dicom.study_datetime'] = is_null($this->input->post('dicom_study_datetime')) ? '' : $this->input->post('dicom_study_datetime');
    $dicom_post['dicom.study_id'] = is_null($this->input->post('dicom_study_id')) ? '' : $this->input->post('dicom_study_id');
    $dicom_post['dicom.test_id'] = is_null($this->input->post('dicom_test_id')) ? '' : $this->input->post('dicom_test_id');
    $dicom_post['dicom.visit_id'] = is_null($this->input->post('dicom_visit_id')) ? '' : $this->input->post('dicom_visit_id');
    $this->session->set_userdata('test.test_id', $dicom_post['test.test_id']);
    $this->session->set_userdata('mlc.visit_id', $dicom_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $dicom_post['patient_visit.visit_id']);
    $this->session->set_userdata('dicom.dicom_id', $dicom_post['dicom.dicom_id']);
    $this->db->update('dicom', $dicom_post, array('dicom_id' => $dicom_post['dicom_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $dicom_post);
  }
  function dicom_delete() {
    $dicom_delete['dicom.dicom_id'] = is_null($this->input->post('dicom_dicom_id')) ? '' : $this->input->post('dicom_dicom_id');
    $dicom_delete['dicom.filepath'] = is_null($this->input->post('dicom_filepath')) ? '' : $this->input->post('dicom_filepath');
    $dicom_delete['dicom.modality'] = is_null($this->input->post('dicom_modality')) ? '' : $this->input->post('dicom_modality');
    $dicom_delete['dicom.study_datetime'] = is_null($this->input->post('dicom_study_datetime')) ? '' : $this->input->post('dicom_study_datetime');
    $dicom_delete['dicom.study_id'] = is_null($this->input->post('dicom_study_id')) ? '' : $this->input->post('dicom_study_id');
    $dicom_delete['dicom.test_id'] = is_null($this->input->post('dicom_test_id')) ? '' : $this->input->post('dicom_test_id');
    $dicom_delete['dicom.visit_id'] = is_null($this->input->post('dicom_visit_id')) ? '' : $this->input->post('dicom_visit_id');
    $this->db->delete('dicom', array('dicom_id' => $dicom_delete['dicom_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $dicom_delete);
  }
  function dicom_get_records($test_id,$visit_id,$visit_id,$dicom_id) {
    $dicom_filters['test.test_id'] = $this->session->test_test_id;
    $dicom_filters['mlc.visit_id'] = $this->session->mlc_visit_id;
    $dicom_filters['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $dicom_filters['dicom.dicom_id'] = $this->session->dicom_dicom_id;
    $dicom_filters['test.test_id'] = $test_test_id;
    $dicom_filters['mlc.visit_id'] = $mlc_visit_id;
    $dicom_filters['patient_visit.visit_id'] = $patient_visit_visit_id;
    $dicom_filters['dicom.dicom_id'] = $dicom_dicom_id;
    $dicom_filters['dicom.filepath'] = is_null($this->input->post('dicom_filepath')) ? '' : $this->input->post('dicom_filepath');
    $dicom_filters['dicom.modality'] = is_null($this->input->post('dicom_modality')) ? '' : $this->input->post('dicom_modality');
    $dicom_filters['dicom.study_datetime'] = is_null($this->input->post('dicom_study_datetime')) ? '' : $this->input->post('dicom_study_datetime');
    $dicom_filters['dicom.study_id'] = is_null($this->input->post('dicom_study_id')) ? '' : $this->input->post('dicom_study_id');
    $dicom_filters['dicom.test_id'] = is_null($this->input->post('dicom_test_id')) ? '' : $this->input->post('dicom_test_id');
    $dicom_filters['dicom.visit_id'] = is_null($this->input->post('dicom_visit_id')) ? '' : $this->input->post('dicom_visit_id');
    $this->session->set_userdata('test.test_id', $dicom_filters['test.test_id']);
    $this->session->set_userdata('mlc.visit_id', $dicom_filters['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $dicom_filters['patient_visit.visit_id']);
    $this->session->set_userdata('dicom.dicom_id', $dicom_filters['dicom.dicom_id']);
    $this->db->select('test.test_id AS dicom_test_id, mlc.visit_id AS dicom_visit_id,
    patient_visit.visit_id AS dicom_visit_id, dicom.dicom_id AS dicom_dicom_id,
    dicom.filepath AS dicom_filepath, dicom.modality AS dicom_modality,
    dicom.study_datetime AS dicom_study_datetime, dicom.study_id AS dicom_study_id,
    dicom.test_id AS dicom_test_id, dicom.visit_id AS dicom_visit_id')->from('dicom');
    $this->db->join('test', 'dicom.test_id = test.test_id', 'left');
    $this->db->join('mlc', 'dicom.visit_id = mlc.visit_id', 'left');
    $this->db->join('patient_visit', 'dicom.visit_id = patient_visit.visit_id', 'left');
    $this->db->where($dicom_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $dicom_filters);
  }
}