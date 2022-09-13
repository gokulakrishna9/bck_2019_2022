<?php class Counter_model extends CI_Model {
  function counter_create() {
    $counter_post = [];
    $counter_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $counter_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $counter_post['hospital.hospital_id'] = $hospital_hospital_id;
    $counter_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $counter_post['counter_id'] = is_null($this->input->post('counter_id')) ? '' : $this->input->post('counter_id');
    $counter_post['count'] = is_null($this->input->post('count')) ? '' : $this->input->post('count');
    $counter_post['counter_name'] = is_null($this->input->post('counter_name')) ? '' : $this->input->post('counter_name');
    $counter_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $this->session->set_userdata('hospital.hospital_id', $counter_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $counter_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('counter', $counter_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $counter_post);
  }
  function counter_update() {
    $counter_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $counter_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $counter_post['counter.counter_id'] = $this->session->counter_counter_id;
    $counter_post['hospital.hospital_id'] = $hospital_hospital_id;
    $counter_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $counter_post['counter.counter_id'] = $counter_counter_id;
    $counter_post['counter.count'] = is_null($this->input->post('counter_count')) ? '' : $this->input->post('counter_count');
    $counter_post['counter.counter_name'] = is_null($this->input->post('counter_counter_name')) ? '' : $this->input->post('counter_counter_name');
    $counter_post['counter.hospital_id'] = is_null($this->input->post('counter_hospital_id')) ? '' : $this->input->post('counter_hospital_id');
    $this->session->set_userdata('hospital.hospital_id', $counter_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $counter_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('counter.counter_id', $counter_post['counter.counter_id']);
    $this->db->update('counter', $counter_post, array('counter_id' => $counter_post['counter_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $counter_post);
  }
  function counter_delete() {
    $counter_delete['counter.counter_id'] = is_null($this->input->post('counter_counter_id')) ? '' : $this->input->post('counter_counter_id');
    $counter_delete['counter.count'] = is_null($this->input->post('counter_count')) ? '' : $this->input->post('counter_count');
    $counter_delete['counter.counter_name'] = is_null($this->input->post('counter_counter_name')) ? '' : $this->input->post('counter_counter_name');
    $counter_delete['counter.hospital_id'] = is_null($this->input->post('counter_hospital_id')) ? '' : $this->input->post('counter_hospital_id');
    $this->db->delete('counter', array('counter_id' => $counter_delete['counter_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $counter_delete);
  }
  function counter_get_records() {
    $counter_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $counter_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $counter_filters['counter.counter_id'] = $this->session->counter_counter_id;
    $counter_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $counter_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $counter_filters['counter.counter_id'] = $counter_counter_id;
    $counter_filters['counter.count'] = is_null($this->input->post('counter_count')) ? '' : $this->input->post('counter_count');
    $counter_filters['counter.counter_name'] = is_null($this->input->post('counter_counter_name')) ? '' : $this->input->post('counter_counter_name');
    $counter_filters['counter.hospital_id'] = is_null($this->input->post('counter_hospital_id')) ? '' : $this->input->post('counter_hospital_id');
    $this->session->set_userdata('hospital.hospital_id', $counter_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $counter_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('counter.counter_id', $counter_filters['counter.counter_id']);
    $this->db->select('hospital.hospital_id AS counter_hospital_id, staff_previous_hospital.hospital_id AS counter_hospital_id,
    counter.counter_id AS counter_counter_id, counter.count AS counter_count,
    counter.counter_name AS counter_counter_name, counter.hospital_id AS counter_hospital_id')->from('counter');
    $this->db->join('hospital', 'counter.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'counter.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($counter_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $counter_filters);
  }
}