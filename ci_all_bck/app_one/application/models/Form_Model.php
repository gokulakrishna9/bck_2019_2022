<?php class Form_model extends CI_Model {
  function form_create() {
    $form_post = [];
    $form_post['print_layout.print_layout_id'] = $this->session->print_layout_print_layout_id;
    $form_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $form_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $form_post['print_layout.print_layout_id'] = $print_layout_print_layout_id;
    $form_post['hospital.hospital_id'] = $hospital_hospital_id;
    $form_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $form_post['form_id'] = is_null($this->input->post('form_id')) ? '' : $this->input->post('form_id');
    $form_post['form_name'] = is_null($this->input->post('form_name')) ? '' : $this->input->post('form_name');
    $form_post['num_columns'] = is_null($this->input->post('num_columns')) ? '' : $this->input->post('num_columns');
    $form_post['form_type'] = is_null($this->input->post('form_type')) ? '' : $this->input->post('form_type');
    $form_post['print_layout_id'] = is_null($this->input->post('print_layout_id')) ? '' : $this->input->post('print_layout_id');
    $form_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $this->session->set_userdata('print_layout.print_layout_id', $form_post['print_layout.print_layout_id']);
    $this->session->set_userdata('hospital.hospital_id', $form_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $form_post['staff_previous_hospital.hospital_id']);
    $this->db->insert('form', $form_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $form_post);
  }
  function form_update() {
    $form_post['print_layout.print_layout_id'] = $this->session->print_layout_print_layout_id;
    $form_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $form_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $form_post['form.form_id'] = $this->session->form_form_id;
    $form_post['print_layout.print_layout_id'] = $print_layout_print_layout_id;
    $form_post['hospital.hospital_id'] = $hospital_hospital_id;
    $form_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $form_post['form.form_id'] = $form_form_id;
    $form_post['form.form_name'] = is_null($this->input->post('form_form_name')) ? '' : $this->input->post('form_form_name');
    $form_post['form.num_columns'] = is_null($this->input->post('form_num_columns')) ? '' : $this->input->post('form_num_columns');
    $form_post['form.form_type'] = is_null($this->input->post('form_form_type')) ? '' : $this->input->post('form_form_type');
    $form_post['form.print_layout_id'] = is_null($this->input->post('form_print_layout_id')) ? '' : $this->input->post('form_print_layout_id');
    $form_post['form.hospital_id'] = is_null($this->input->post('form_hospital_id')) ? '' : $this->input->post('form_hospital_id');
    $this->session->set_userdata('print_layout.print_layout_id', $form_post['print_layout.print_layout_id']);
    $this->session->set_userdata('hospital.hospital_id', $form_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $form_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('form.form_id', $form_post['form.form_id']);
    $this->db->update('form', $form_post, array('form_id' => $form_post['form_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $form_post);
  }
  function form_delete() {
    $form_delete['form.form_id'] = is_null($this->input->post('form_form_id')) ? '' : $this->input->post('form_form_id');
    $form_delete['form.form_name'] = is_null($this->input->post('form_form_name')) ? '' : $this->input->post('form_form_name');
    $form_delete['form.num_columns'] = is_null($this->input->post('form_num_columns')) ? '' : $this->input->post('form_num_columns');
    $form_delete['form.form_type'] = is_null($this->input->post('form_form_type')) ? '' : $this->input->post('form_form_type');
    $form_delete['form.print_layout_id'] = is_null($this->input->post('form_print_layout_id')) ? '' : $this->input->post('form_print_layout_id');
    $form_delete['form.hospital_id'] = is_null($this->input->post('form_hospital_id')) ? '' : $this->input->post('form_hospital_id');
    $this->db->delete('form', array('form_id' => $form_delete['form_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $form_delete);
  }
  function form_get_records() {
    $form_filters['print_layout.print_layout_id'] = $this->session->print_layout_print_layout_id;
    $form_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $form_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $form_filters['form.form_id'] = $this->session->form_form_id;
    $form_filters['print_layout.print_layout_id'] = $print_layout_print_layout_id;
    $form_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $form_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $form_filters['form.form_id'] = $form_form_id;
    $form_filters['form.form_name'] = is_null($this->input->post('form_form_name')) ? '' : $this->input->post('form_form_name');
    $form_filters['form.num_columns'] = is_null($this->input->post('form_num_columns')) ? '' : $this->input->post('form_num_columns');
    $form_filters['form.form_type'] = is_null($this->input->post('form_form_type')) ? '' : $this->input->post('form_form_type');
    $form_filters['form.print_layout_id'] = is_null($this->input->post('form_print_layout_id')) ? '' : $this->input->post('form_print_layout_id');
    $form_filters['form.hospital_id'] = is_null($this->input->post('form_hospital_id')) ? '' : $this->input->post('form_hospital_id');
    $this->session->set_userdata('print_layout.print_layout_id', $form_filters['print_layout.print_layout_id']);
    $this->session->set_userdata('hospital.hospital_id', $form_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $form_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('form.form_id', $form_filters['form.form_id']);
    $this->db->select('print_layout.print_layout_id AS form_print_layout_id, hospital.hospital_id AS form_hospital_id,
    staff_previous_hospital.hospital_id AS form_hospital_id, form.form_id AS form_form_id,
    form.form_name AS form_form_name, form.num_columns AS form_num_columns,
    form.form_type AS form_form_type, form.print_layout_id AS form_print_layout_id,
    form.hospital_id AS form_hospital_id')->from('form');
    $this->db->join('print_layout', 'form.print_layout_id = print_layout.print_layout_id', 'left');
    $this->db->join('hospital', 'form.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'form.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->where($form_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $form_filters);
  }
}