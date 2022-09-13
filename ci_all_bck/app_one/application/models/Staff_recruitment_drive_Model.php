<?php class Staff_recruitment_drive_model extends CI_Model {
  function staff_recruitment_drive_create() {
    $staff_recruitment_drive_post = [];
    $staff_recruitment_drive_post['drive_id'] = is_null($this->input->post('drive_id')) ? '' : $this->input->post('drive_id');
    $staff_recruitment_drive_post['place'] = is_null($this->input->post('place')) ? '' : $this->input->post('place');
    $staff_recruitment_drive_post['name'] = is_null($this->input->post('name')) ? '' : $this->input->post('name');
    $staff_recruitment_drive_post['start_date'] = is_null($this->input->post('start_date')) ? '' : $this->input->post('start_date');
    $this->db->insert('staff_recruitment_drive', $staff_recruitment_drive_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $staff_recruitment_drive_post);
  }
  function staff_recruitment_drive_update() {
    $staff_recruitment_drive_post['staff_recruitment_drive.drive_id'] = $this->session->staff_recruitment_drive_drive_id;
    $staff_recruitment_drive_post['staff_recruitment_drive.drive_id'] = $staff_recruitment_drive_drive_id;
    $staff_recruitment_drive_post['staff_recruitment_drive.place'] = is_null($this->input->post('staff_recruitment_drive_place')) ? '' : $this->input->post('staff_recruitment_drive_place');
    $staff_recruitment_drive_post['staff_recruitment_drive.name'] = is_null($this->input->post('staff_recruitment_drive_name')) ? '' : $this->input->post('staff_recruitment_drive_name');
    $staff_recruitment_drive_post['staff_recruitment_drive.start_date'] = is_null($this->input->post('staff_recruitment_drive_start_date')) ? '' : $this->input->post('staff_recruitment_drive_start_date');
    $this->session->set_userdata('staff_recruitment_drive.drive_id', $staff_recruitment_drive_post['staff_recruitment_drive.drive_id']);
    $this->db->update('staff_recruitment_drive', $staff_recruitment_drive_post, array('drive_id' => $staff_recruitment_drive_post['drive_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_recruitment_drive_post);
  }
  function staff_recruitment_drive_delete() {
    $staff_recruitment_drive_delete['staff_recruitment_drive.drive_id'] = is_null($this->input->post('staff_recruitment_drive_drive_id')) ? '' : $this->input->post('staff_recruitment_drive_drive_id');
    $staff_recruitment_drive_delete['staff_recruitment_drive.place'] = is_null($this->input->post('staff_recruitment_drive_place')) ? '' : $this->input->post('staff_recruitment_drive_place');
    $staff_recruitment_drive_delete['staff_recruitment_drive.name'] = is_null($this->input->post('staff_recruitment_drive_name')) ? '' : $this->input->post('staff_recruitment_drive_name');
    $staff_recruitment_drive_delete['staff_recruitment_drive.start_date'] = is_null($this->input->post('staff_recruitment_drive_start_date')) ? '' : $this->input->post('staff_recruitment_drive_start_date');
    $this->db->delete('staff_recruitment_drive', array('drive_id' => $staff_recruitment_drive_delete['drive_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_recruitment_drive_delete);
  }
  function staff_recruitment_drive_get_records() {
    $staff_recruitment_drive_filters['staff_recruitment_drive.drive_id'] = $this->session->staff_recruitment_drive_drive_id;
    $staff_recruitment_drive_filters['staff_recruitment_drive.drive_id'] = $staff_recruitment_drive_drive_id;
    $staff_recruitment_drive_filters['staff_recruitment_drive.place'] = is_null($this->input->post('staff_recruitment_drive_place')) ? '' : $this->input->post('staff_recruitment_drive_place');
    $staff_recruitment_drive_filters['staff_recruitment_drive.name'] = is_null($this->input->post('staff_recruitment_drive_name')) ? '' : $this->input->post('staff_recruitment_drive_name');
    $staff_recruitment_drive_filters['staff_recruitment_drive.start_date'] = is_null($this->input->post('staff_recruitment_drive_start_date')) ? '' : $this->input->post('staff_recruitment_drive_start_date');
    $this->session->set_userdata('staff_recruitment_drive.drive_id', $staff_recruitment_drive_filters['staff_recruitment_drive.drive_id']);
    $this->db->select('staff_recruitment_drive.drive_id AS staff_recruitment_drive_drive_id, staff_recruitment_drive.place AS staff_recruitment_drive_place,
    staff_recruitment_drive.name AS staff_recruitment_drive_name, staff_recruitment_drive.start_date AS staff_recruitment_drive_start_date')->from('staff_recruitment_drive');
    $this->db->where($staff_recruitment_drive_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $staff_recruitment_drive_filters);
  }
}