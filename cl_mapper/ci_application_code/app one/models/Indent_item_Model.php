<?php class Indent_item_model extends CI_Model {
  function indent_item_create($hospital_hospital_id,$staff_previous_hospital_hospital_id,$indent_indent_id,$item_item_id,$item_master_item_id) {
    $indent_item_post = [];
    $indent_item_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $indent_item_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $indent_item_post['indent.indent_id'] = $this->session->indent_indent_id;
    $indent_item_post['item.item_id'] = $this->session->item_item_id;
    $indent_item_post['item_master.item_id'] = $this->session->item_master_item_id;
    $indent_item_post['hospital.hospital_id'] = $hospital_hospital_id;
    $indent_item_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $indent_item_post['indent.indent_id'] = $indent_indent_id;
    $indent_item_post['item.item_id'] = $item_item_id;
    $indent_item_post['item_master.item_id'] = $item_master_item_id;
    $indent_item_post['consumption_status'] = is_null($this->input->post('consumption_status')) ? '' : $this->input->post('consumption_status');
    $indent_item_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $indent_item_post['indent_id'] = is_null($this->input->post('indent_id')) ? '' : $this->input->post('indent_id');
    $indent_item_post['indent_item_id'] = is_null($this->input->post('indent_item_id')) ? '' : $this->input->post('indent_item_id');
    $indent_item_post['indent_status'] = is_null($this->input->post('indent_status')) ? '' : $this->input->post('indent_status');
    $indent_item_post['issue_date'] = is_null($this->input->post('issue_date')) ? '' : $this->input->post('issue_date');
    $indent_item_post['item_id'] = is_null($this->input->post('item_id')) ? '' : $this->input->post('item_id');
    $indent_item_post['quantity_approved'] = is_null($this->input->post('quantity_approved')) ? '' : $this->input->post('quantity_approved');
    $indent_item_post['quantity_indented'] = is_null($this->input->post('quantity_indented')) ? '' : $this->input->post('quantity_indented');
    $indent_item_post['quantity_issued'] = is_null($this->input->post('quantity_issued')) ? '' : $this->input->post('quantity_issued');
    $this->session->set_userdata('hospital.hospital_id', $indent_item_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $indent_item_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('indent.indent_id', $indent_item_post['indent.indent_id']);
    $this->session->set_userdata('item.item_id', $indent_item_post['item.item_id']);
    $this->session->set_userdata('item_master.item_id', $indent_item_post['item_master.item_id']);
    $this->db->insert('indent_item', $indent_item_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $indent_item_post);
  }
  function indent_item_update($hospital_id,$hospital_id,$indent_id,$item_id,$item_id,$indent_item_id) {
    $indent_item_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $indent_item_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $indent_item_post['indent.indent_id'] = $this->session->indent_indent_id;
    $indent_item_post['item.item_id'] = $this->session->item_item_id;
    $indent_item_post['item_master.item_id'] = $this->session->item_master_item_id;
    $indent_item_post['indent_item.indent_item_id'] = $this->session->indent_item_indent_item_id;
    $indent_item_post['hospital.hospital_id'] = $hospital_hospital_id;
    $indent_item_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $indent_item_post['indent.indent_id'] = $indent_indent_id;
    $indent_item_post['item.item_id'] = $item_item_id;
    $indent_item_post['item_master.item_id'] = $item_master_item_id;
    $indent_item_post['indent_item.indent_item_id'] = $indent_item_indent_item_id;
    $indent_item_post['indent_item.consumption_status'] = is_null($this->input->post('indent_item_consumption_status')) ? '' : $this->input->post('indent_item_consumption_status');
    $indent_item_post['indent_item.hospital_id'] = is_null($this->input->post('indent_item_hospital_id')) ? '' : $this->input->post('indent_item_hospital_id');
    $indent_item_post['indent_item.indent_id'] = is_null($this->input->post('indent_item_indent_id')) ? '' : $this->input->post('indent_item_indent_id');
    $indent_item_post['indent_item.indent_status'] = is_null($this->input->post('indent_item_indent_status')) ? '' : $this->input->post('indent_item_indent_status');
    $indent_item_post['indent_item.issue_date'] = is_null($this->input->post('indent_item_issue_date')) ? '' : $this->input->post('indent_item_issue_date');
    $indent_item_post['indent_item.item_id'] = is_null($this->input->post('indent_item_item_id')) ? '' : $this->input->post('indent_item_item_id');
    $indent_item_post['indent_item.quantity_approved'] = is_null($this->input->post('indent_item_quantity_approved')) ? '' : $this->input->post('indent_item_quantity_approved');
    $indent_item_post['indent_item.quantity_indented'] = is_null($this->input->post('indent_item_quantity_indented')) ? '' : $this->input->post('indent_item_quantity_indented');
    $indent_item_post['indent_item.quantity_issued'] = is_null($this->input->post('indent_item_quantity_issued')) ? '' : $this->input->post('indent_item_quantity_issued');
    $this->session->set_userdata('hospital.hospital_id', $indent_item_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $indent_item_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('indent.indent_id', $indent_item_post['indent.indent_id']);
    $this->session->set_userdata('item.item_id', $indent_item_post['item.item_id']);
    $this->session->set_userdata('item_master.item_id', $indent_item_post['item_master.item_id']);
    $this->session->set_userdata('indent_item.indent_item_id', $indent_item_post['indent_item.indent_item_id']);
    $this->db->update('indent_item', $indent_item_post, array('indent_item_id' => $indent_item_post['indent_item_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $indent_item_post);
  }
  function indent_item_delete() {
    $indent_item_delete['indent_item.consumption_status'] = is_null($this->input->post('indent_item_consumption_status')) ? '' : $this->input->post('indent_item_consumption_status');
    $indent_item_delete['indent_item.hospital_id'] = is_null($this->input->post('indent_item_hospital_id')) ? '' : $this->input->post('indent_item_hospital_id');
    $indent_item_delete['indent_item.indent_id'] = is_null($this->input->post('indent_item_indent_id')) ? '' : $this->input->post('indent_item_indent_id');
    $indent_item_delete['indent_item.indent_item_id'] = is_null($this->input->post('indent_item_indent_item_id')) ? '' : $this->input->post('indent_item_indent_item_id');
    $indent_item_delete['indent_item.indent_status'] = is_null($this->input->post('indent_item_indent_status')) ? '' : $this->input->post('indent_item_indent_status');
    $indent_item_delete['indent_item.issue_date'] = is_null($this->input->post('indent_item_issue_date')) ? '' : $this->input->post('indent_item_issue_date');
    $indent_item_delete['indent_item.item_id'] = is_null($this->input->post('indent_item_item_id')) ? '' : $this->input->post('indent_item_item_id');
    $indent_item_delete['indent_item.quantity_approved'] = is_null($this->input->post('indent_item_quantity_approved')) ? '' : $this->input->post('indent_item_quantity_approved');
    $indent_item_delete['indent_item.quantity_indented'] = is_null($this->input->post('indent_item_quantity_indented')) ? '' : $this->input->post('indent_item_quantity_indented');
    $indent_item_delete['indent_item.quantity_issued'] = is_null($this->input->post('indent_item_quantity_issued')) ? '' : $this->input->post('indent_item_quantity_issued');
    $this->db->delete('indent_item', array('indent_item_id' => $indent_item_delete['indent_item_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $indent_item_delete);
  }
  function indent_item_get_records($hospital_id,$hospital_id,$indent_id,$item_id,$item_id,$indent_item_id) {
    $indent_item_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $indent_item_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $indent_item_filters['indent.indent_id'] = $this->session->indent_indent_id;
    $indent_item_filters['item.item_id'] = $this->session->item_item_id;
    $indent_item_filters['item_master.item_id'] = $this->session->item_master_item_id;
    $indent_item_filters['indent_item.indent_item_id'] = $this->session->indent_item_indent_item_id;
    $indent_item_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $indent_item_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $indent_item_filters['indent.indent_id'] = $indent_indent_id;
    $indent_item_filters['item.item_id'] = $item_item_id;
    $indent_item_filters['item_master.item_id'] = $item_master_item_id;
    $indent_item_filters['indent_item.indent_item_id'] = $indent_item_indent_item_id;
    $indent_item_filters['indent_item.consumption_status'] = is_null($this->input->post('indent_item_consumption_status')) ? '' : $this->input->post('indent_item_consumption_status');
    $indent_item_filters['indent_item.hospital_id'] = is_null($this->input->post('indent_item_hospital_id')) ? '' : $this->input->post('indent_item_hospital_id');
    $indent_item_filters['indent_item.indent_id'] = is_null($this->input->post('indent_item_indent_id')) ? '' : $this->input->post('indent_item_indent_id');
    $indent_item_filters['indent_item.indent_status'] = is_null($this->input->post('indent_item_indent_status')) ? '' : $this->input->post('indent_item_indent_status');
    $indent_item_filters['indent_item.issue_date'] = is_null($this->input->post('indent_item_issue_date')) ? '' : $this->input->post('indent_item_issue_date');
    $indent_item_filters['indent_item.item_id'] = is_null($this->input->post('indent_item_item_id')) ? '' : $this->input->post('indent_item_item_id');
    $indent_item_filters['indent_item.quantity_approved'] = is_null($this->input->post('indent_item_quantity_approved')) ? '' : $this->input->post('indent_item_quantity_approved');
    $indent_item_filters['indent_item.quantity_indented'] = is_null($this->input->post('indent_item_quantity_indented')) ? '' : $this->input->post('indent_item_quantity_indented');
    $indent_item_filters['indent_item.quantity_issued'] = is_null($this->input->post('indent_item_quantity_issued')) ? '' : $this->input->post('indent_item_quantity_issued');
    $this->session->set_userdata('hospital.hospital_id', $indent_item_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $indent_item_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('indent.indent_id', $indent_item_filters['indent.indent_id']);
    $this->session->set_userdata('item.item_id', $indent_item_filters['item.item_id']);
    $this->session->set_userdata('item_master.item_id', $indent_item_filters['item_master.item_id']);
    $this->session->set_userdata('indent_item.indent_item_id', $indent_item_filters['indent_item.indent_item_id']);
    $this->db->select('hospital.hospital_id AS indent_item_hospital_id, staff_previous_hospital.hospital_id AS indent_item_hospital_id,
    indent.indent_id AS indent_item_indent_id, item.item_id AS indent_item_item_id,
    item_master.item_id AS indent_item_item_id, indent_item.consumption_status AS indent_item_consumption_status,
    indent_item.hospital_id AS indent_item_hospital_id, indent_item.indent_id AS indent_item_indent_id,
    indent_item.indent_item_id AS indent_item_indent_item_id, indent_item.indent_status AS indent_item_indent_status,
    indent_item.issue_date AS indent_item_issue_date, indent_item.item_id AS indent_item_item_id,
    indent_item.quantity_approved AS indent_item_quantity_approved, indent_item.quantity_indented AS indent_item_quantity_indented,
    indent_item.quantity_issued AS indent_item_quantity_issued')->from('indent_item');
    $this->db->join('hospital', 'indent_item.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'indent_item.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->join('indent', 'indent_item.indent_id = indent.indent_id', 'left');
    $this->db->join('item', 'indent_item.item_id = item.item_id', 'left');
    $this->db->join('item_master', 'indent_item.item_id = item_master.item_id', 'left');
    $this->db->where($indent_item_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $indent_item_filters);
  }
}