<?php class Staff_service_model extends CI_Model {
  function staff_service_create() {
    $staff_service_post = [];
    $staff_service_post['date_of_joining'] = is_null($this->input->post('date_of_joining')) ? '' : $this->input->post('date_of_joining');
    $staff_service_post['designation'] = is_null($this->input->post('designation')) ? '' : $this->input->post('designation');
    $staff_service_post['institution'] = is_null($this->input->post('institution')) ? '' : $this->input->post('institution');
    $staff_service_post['service_id'] = is_null($this->input->post('service_id')) ? '' : $this->input->post('service_id');
    $this->db->insert('staff_service', $staff_service_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $staff_service_post);
  }
  function staff_service_update($service_id) {
    $staff_service_post['staff_service.service_id'] = $this->session->staff_service_service_id;
    $staff_service_post['staff_service.service_id'] = $staff_service_service_id;
    $staff_service_post['staff_service.date_of_joining'] = is_null($this->input->post('staff_service_date_of_joining')) ? '' : $this->input->post('staff_service_date_of_joining');
    $staff_service_post['staff_service.designation'] = is_null($this->input->post('staff_service_designation')) ? '' : $this->input->post('staff_service_designation');
    $staff_service_post['staff_service.institution'] = is_null($this->input->post('staff_service_institution')) ? '' : $this->input->post('staff_service_institution');
    $this->session->set_userdata('staff_service.service_id', $staff_service_post['staff_service.service_id']);
    $this->db->update('staff_service', $staff_service_post, array('service_id' => $staff_service_post['service_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_service_post);
  }
  function staff_service_delete() {
    $staff_service_delete['staff_service.date_of_joining'] = is_null($this->input->post('staff_service_date_of_joining')) ? '' : $this->input->post('staff_service_date_of_joining');
    $staff_service_delete['staff_service.designation'] = is_null($this->input->post('staff_service_designation')) ? '' : $this->input->post('staff_service_designation');
    $staff_service_delete['staff_service.institution'] = is_null($this->input->post('staff_service_institution')) ? '' : $this->input->post('staff_service_institution');
    $staff_service_delete['staff_service.service_id'] = is_null($this->input->post('staff_service_service_id')) ? '' : $this->input->post('staff_service_service_id');
    $this->db->delete('staff_service', array('service_id' => $staff_service_delete['service_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $staff_service_delete);
  }
  function staff_service_get_records($service_id) {
    $staff_service_filters['staff_service.service_id'] = $this->session->staff_service_service_id;
    $staff_service_filters['staff_service.service_id'] = $staff_service_service_id;
    $staff_service_filters['staff_service.date_of_joining'] = is_null($this->input->post('staff_service_date_of_joining')) ? '' : $this->input->post('staff_service_date_of_joining');
    $staff_service_filters['staff_service.designation'] = is_null($this->input->post('staff_service_designation')) ? '' : $this->input->post('staff_service_designation');
    $staff_service_filters['staff_service.institution'] = is_null($this->input->post('staff_service_institution')) ? '' : $this->input->post('staff_service_institution');
    $this->session->set_userdata('staff_service.service_id', $staff_service_filters['staff_service.service_id']);
    $this->db->select('staff_service.date_of_joining AS staff_service_date_of_joining, staff_service.designation AS staff_service_designation,
    staff_service.institution AS staff_service_institution, staff_service.service_id AS staff_service_service_id')->from('staff_service');
    $this->db->where($staff_service_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $staff_service_filters);
  }
}