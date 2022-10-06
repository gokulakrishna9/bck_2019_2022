<?php class Form_layout_model extends CI_Model {
  function form_layout_create($form_form_id) {
    $form_layout_post = [];
    $form_layout_post['form.form_id'] = $this->session->form_form_id;
    $form_layout_post['form.form_id'] = $form_form_id;
    $form_layout_post['default_value'] = is_null($this->input->post('default_value')) ? '' : $this->input->post('default_value');
    $form_layout_post['field_name'] = is_null($this->input->post('field_name')) ? '' : $this->input->post('field_name');
    $form_layout_post['form_id'] = is_null($this->input->post('form_id')) ? '' : $this->input->post('form_id');
    $form_layout_post['id'] = is_null($this->input->post('id')) ? '' : $this->input->post('id');
    $form_layout_post['mandatory'] = is_null($this->input->post('mandatory')) ? '' : $this->input->post('mandatory');
    $this->session->set_userdata('form.form_id', $form_layout_post['form.form_id']);
    $this->db->insert('form_layout', $form_layout_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $form_layout_post);
  }
  function form_layout_update($form_id,$id) {
    $form_layout_post['form.form_id'] = $this->session->form_form_id;
    $form_layout_post['form_layout.id'] = $this->session->form_layout_id;
    $form_layout_post['form.form_id'] = $form_form_id;
    $form_layout_post['form_layout.id'] = $form_layout_id;
    $form_layout_post['form_layout.default_value'] = is_null($this->input->post('form_layout_default_value')) ? '' : $this->input->post('form_layout_default_value');
    $form_layout_post['form_layout.field_name'] = is_null($this->input->post('form_layout_field_name')) ? '' : $this->input->post('form_layout_field_name');
    $form_layout_post['form_layout.form_id'] = is_null($this->input->post('form_layout_form_id')) ? '' : $this->input->post('form_layout_form_id');
    $form_layout_post['form_layout.mandatory'] = is_null($this->input->post('form_layout_mandatory')) ? '' : $this->input->post('form_layout_mandatory');
    $this->session->set_userdata('form.form_id', $form_layout_post['form.form_id']);
    $this->session->set_userdata('form_layout.id', $form_layout_post['form_layout.id']);
    $this->db->update('form_layout', $form_layout_post, array('id' => $form_layout_post['id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $form_layout_post);
  }
  function form_layout_delete() {
    $form_layout_delete['form_layout.default_value'] = is_null($this->input->post('form_layout_default_value')) ? '' : $this->input->post('form_layout_default_value');
    $form_layout_delete['form_layout.field_name'] = is_null($this->input->post('form_layout_field_name')) ? '' : $this->input->post('form_layout_field_name');
    $form_layout_delete['form_layout.form_id'] = is_null($this->input->post('form_layout_form_id')) ? '' : $this->input->post('form_layout_form_id');
    $form_layout_delete['form_layout.id'] = is_null($this->input->post('form_layout_id')) ? '' : $this->input->post('form_layout_id');
    $form_layout_delete['form_layout.mandatory'] = is_null($this->input->post('form_layout_mandatory')) ? '' : $this->input->post('form_layout_mandatory');
    $this->db->delete('form_layout', array('id' => $form_layout_delete['id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $form_layout_delete);
  }
  function form_layout_get_records($form_id,$id) {
    $form_layout_filters['form.form_id'] = $this->session->form_form_id;
    $form_layout_filters['form_layout.id'] = $this->session->form_layout_id;
    $form_layout_filters['form.form_id'] = $form_form_id;
    $form_layout_filters['form_layout.id'] = $form_layout_id;
    $form_layout_filters['form_layout.default_value'] = is_null($this->input->post('form_layout_default_value')) ? '' : $this->input->post('form_layout_default_value');
    $form_layout_filters['form_layout.field_name'] = is_null($this->input->post('form_layout_field_name')) ? '' : $this->input->post('form_layout_field_name');
    $form_layout_filters['form_layout.form_id'] = is_null($this->input->post('form_layout_form_id')) ? '' : $this->input->post('form_layout_form_id');
    $form_layout_filters['form_layout.mandatory'] = is_null($this->input->post('form_layout_mandatory')) ? '' : $this->input->post('form_layout_mandatory');
    $this->session->set_userdata('form.form_id', $form_layout_filters['form.form_id']);
    $this->session->set_userdata('form_layout.id', $form_layout_filters['form_layout.id']);
    $this->db->select('form.form_id AS form_layout_form_id, form_layout.default_value AS form_layout_default_value,
    form_layout.field_name AS form_layout_field_name, form_layout.form_id AS form_layout_form_id,
    form_layout.id AS form_layout_id, form_layout.mandatory AS form_layout_mandatory')->from('form_layout');
    $this->db->join('form', 'form_layout.form_id = form.form_id', 'left');
    $this->db->where($form_layout_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $form_layout_filters);
  }
}