<?php class Test_order_model extends CI_Model {
  function test_order_create($hospital_hospital_id,$staff_previous_hospital_hospital_id,$test_area_test_area_id,$mlc_visit_id,$patient_visit_visit_id) {
    $test_order_post = [];
    $test_order_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $test_order_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $test_order_post['test_area.test_area_id'] = $this->session->test_area_test_area_id;
    $test_order_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $test_order_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $test_order_post['hospital.hospital_id'] = $hospital_hospital_id;
    $test_order_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $test_order_post['test_area.test_area_id'] = $test_area_test_area_id;
    $test_order_post['mlc.visit_id'] = $mlc_visit_id;
    $test_order_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $test_order_post['doctor_id'] = is_null($this->input->post('doctor_id')) ? '' : $this->input->post('doctor_id');
    $test_order_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $test_order_post['order_date_time'] = is_null($this->input->post('order_date_time')) ? '' : $this->input->post('order_date_time');
    $test_order_post['order_id'] = is_null($this->input->post('order_id')) ? '' : $this->input->post('order_id');
    $test_order_post['order_status'] = is_null($this->input->post('order_status')) ? '' : $this->input->post('order_status');
    $test_order_post['received_date_time'] = is_null($this->input->post('received_date_time')) ? '' : $this->input->post('received_date_time');
    $test_order_post['temp_order_id'] = is_null($this->input->post('temp_order_id')) ? '' : $this->input->post('temp_order_id');
    $test_order_post['test_area_id'] = is_null($this->input->post('test_area_id')) ? '' : $this->input->post('test_area_id');
    $test_order_post['visit_id'] = is_null($this->input->post('visit_id')) ? '' : $this->input->post('visit_id');
    $this->session->set_userdata('hospital.hospital_id', $test_order_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $test_order_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('test_area.test_area_id', $test_order_post['test_area.test_area_id']);
    $this->session->set_userdata('mlc.visit_id', $test_order_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $test_order_post['patient_visit.visit_id']);
    $this->db->insert('test_order', $test_order_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $test_order_post);
  }
  function test_order_update($hospital_id,$hospital_id,$test_area_id,$visit_id,$visit_id,$order_id) {
    $test_order_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $test_order_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $test_order_post['test_area.test_area_id'] = $this->session->test_area_test_area_id;
    $test_order_post['mlc.visit_id'] = $this->session->mlc_visit_id;
    $test_order_post['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $test_order_post['test_order.order_id'] = $this->session->test_order_order_id;
    $test_order_post['hospital.hospital_id'] = $hospital_hospital_id;
    $test_order_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $test_order_post['test_area.test_area_id'] = $test_area_test_area_id;
    $test_order_post['mlc.visit_id'] = $mlc_visit_id;
    $test_order_post['patient_visit.visit_id'] = $patient_visit_visit_id;
    $test_order_post['test_order.order_id'] = $test_order_order_id;
    $test_order_post['test_order.doctor_id'] = is_null($this->input->post('test_order_doctor_id')) ? '' : $this->input->post('test_order_doctor_id');
    $test_order_post['test_order.hospital_id'] = is_null($this->input->post('test_order_hospital_id')) ? '' : $this->input->post('test_order_hospital_id');
    $test_order_post['test_order.order_date_time'] = is_null($this->input->post('test_order_order_date_time')) ? '' : $this->input->post('test_order_order_date_time');
    $test_order_post['test_order.order_status'] = is_null($this->input->post('test_order_order_status')) ? '' : $this->input->post('test_order_order_status');
    $test_order_post['test_order.received_date_time'] = is_null($this->input->post('test_order_received_date_time')) ? '' : $this->input->post('test_order_received_date_time');
    $test_order_post['test_order.temp_order_id'] = is_null($this->input->post('test_order_temp_order_id')) ? '' : $this->input->post('test_order_temp_order_id');
    $test_order_post['test_order.test_area_id'] = is_null($this->input->post('test_order_test_area_id')) ? '' : $this->input->post('test_order_test_area_id');
    $test_order_post['test_order.visit_id'] = is_null($this->input->post('test_order_visit_id')) ? '' : $this->input->post('test_order_visit_id');
    $this->session->set_userdata('hospital.hospital_id', $test_order_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $test_order_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('test_area.test_area_id', $test_order_post['test_area.test_area_id']);
    $this->session->set_userdata('mlc.visit_id', $test_order_post['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $test_order_post['patient_visit.visit_id']);
    $this->session->set_userdata('test_order.order_id', $test_order_post['test_order.order_id']);
    $this->db->update('test_order', $test_order_post, array('order_id' => $test_order_post['order_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_order_post);
  }
  function test_order_delete() {
    $test_order_delete['test_order.doctor_id'] = is_null($this->input->post('test_order_doctor_id')) ? '' : $this->input->post('test_order_doctor_id');
    $test_order_delete['test_order.hospital_id'] = is_null($this->input->post('test_order_hospital_id')) ? '' : $this->input->post('test_order_hospital_id');
    $test_order_delete['test_order.order_date_time'] = is_null($this->input->post('test_order_order_date_time')) ? '' : $this->input->post('test_order_order_date_time');
    $test_order_delete['test_order.order_id'] = is_null($this->input->post('test_order_order_id')) ? '' : $this->input->post('test_order_order_id');
    $test_order_delete['test_order.order_status'] = is_null($this->input->post('test_order_order_status')) ? '' : $this->input->post('test_order_order_status');
    $test_order_delete['test_order.received_date_time'] = is_null($this->input->post('test_order_received_date_time')) ? '' : $this->input->post('test_order_received_date_time');
    $test_order_delete['test_order.temp_order_id'] = is_null($this->input->post('test_order_temp_order_id')) ? '' : $this->input->post('test_order_temp_order_id');
    $test_order_delete['test_order.test_area_id'] = is_null($this->input->post('test_order_test_area_id')) ? '' : $this->input->post('test_order_test_area_id');
    $test_order_delete['test_order.visit_id'] = is_null($this->input->post('test_order_visit_id')) ? '' : $this->input->post('test_order_visit_id');
    $this->db->delete('test_order', array('order_id' => $test_order_delete['order_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $test_order_delete);
  }
  function test_order_get_records($hospital_id,$hospital_id,$test_area_id,$visit_id,$visit_id,$order_id) {
    $test_order_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $test_order_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $test_order_filters['test_area.test_area_id'] = $this->session->test_area_test_area_id;
    $test_order_filters['mlc.visit_id'] = $this->session->mlc_visit_id;
    $test_order_filters['patient_visit.visit_id'] = $this->session->patient_visit_visit_id;
    $test_order_filters['test_order.order_id'] = $this->session->test_order_order_id;
    $test_order_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $test_order_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $test_order_filters['test_area.test_area_id'] = $test_area_test_area_id;
    $test_order_filters['mlc.visit_id'] = $mlc_visit_id;
    $test_order_filters['patient_visit.visit_id'] = $patient_visit_visit_id;
    $test_order_filters['test_order.order_id'] = $test_order_order_id;
    $test_order_filters['test_order.doctor_id'] = is_null($this->input->post('test_order_doctor_id')) ? '' : $this->input->post('test_order_doctor_id');
    $test_order_filters['test_order.hospital_id'] = is_null($this->input->post('test_order_hospital_id')) ? '' : $this->input->post('test_order_hospital_id');
    $test_order_filters['test_order.order_date_time'] = is_null($this->input->post('test_order_order_date_time')) ? '' : $this->input->post('test_order_order_date_time');
    $test_order_filters['test_order.order_status'] = is_null($this->input->post('test_order_order_status')) ? '' : $this->input->post('test_order_order_status');
    $test_order_filters['test_order.received_date_time'] = is_null($this->input->post('test_order_received_date_time')) ? '' : $this->input->post('test_order_received_date_time');
    $test_order_filters['test_order.temp_order_id'] = is_null($this->input->post('test_order_temp_order_id')) ? '' : $this->input->post('test_order_temp_order_id');
    $test_order_filters['test_order.test_area_id'] = is_null($this->input->post('test_order_test_area_id')) ? '' : $this->input->post('test_order_test_area_id');
    $test_order_filters['test_order.visit_id'] = is_null($this->input->post('test_order_visit_id')) ? '' : $this->input->post('test_order_visit_id');
    $this->session->set_userdata('hospital.hospital_id', $test_order_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $test_order_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('test_area.test_area_id', $test_order_filters['test_area.test_area_id']);
    $this->session->set_userdata('mlc.visit_id', $test_order_filters['mlc.visit_id']);
    $this->session->set_userdata('patient_visit.visit_id', $test_order_filters['patient_visit.visit_id']);
    $this->session->set_userdata('test_order.order_id', $test_order_filters['test_order.order_id']);
    $this->db->select('hospital.hospital_id AS test_order_hospital_id, staff_previous_hospital.hospital_id AS test_order_hospital_id,
    test_area.test_area_id AS test_order_test_area_id, mlc.visit_id AS test_order_visit_id,
    patient_visit.visit_id AS test_order_visit_id, test_order.doctor_id AS test_order_doctor_id,
    test_order.hospital_id AS test_order_hospital_id, test_order.order_date_time AS test_order_order_date_time,
    test_order.order_id AS test_order_order_id, test_order.order_status AS test_order_order_status,
    test_order.received_date_time AS test_order_received_date_time, test_order.temp_order_id AS test_order_temp_order_id,
    test_order.test_area_id AS test_order_test_area_id, test_order.visit_id AS test_order_visit_id')->from('test_order');
    $this->db->join('hospital', 'test_order.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'test_order.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->join('test_area', 'test_order.test_area_id = test_area.test_area_id', 'left');
    $this->db->join('mlc', 'test_order.visit_id = mlc.visit_id', 'left');
    $this->db->join('patient_visit', 'test_order.visit_id = patient_visit.visit_id', 'left');
    $this->db->where($test_order_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $test_order_filters);
  }
}