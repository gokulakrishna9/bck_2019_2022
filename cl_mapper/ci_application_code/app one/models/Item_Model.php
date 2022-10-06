<?php class Item_model extends CI_Model {
  function item_create($dosage_dosage_id,$generic_item_generic_item_id,$item_form_item_form_id) {
    $item_post = [];
    $item_post['dosage.dosage_id'] = $this->session->dosage_dosage_id;
    $item_post['generic_item.generic_item_id'] = $this->session->generic_item_generic_item_id;
    $item_post['item_form.item_form_id'] = $this->session->item_form_item_form_id;
    $item_post['dosage.dosage_id'] = $dosage_dosage_id;
    $item_post['generic_item.generic_item_id'] = $generic_item_generic_item_id;
    $item_post['item_form.item_form_id'] = $item_form_item_form_id;
    $item_post['cost'] = is_null($this->input->post('cost')) ? '' : $this->input->post('cost');
    $item_post['description'] = is_null($this->input->post('description')) ? '' : $this->input->post('description');
    $item_post['dosage_id'] = is_null($this->input->post('dosage_id')) ? '' : $this->input->post('dosage_id');
    $item_post['expire_date'] = is_null($this->input->post('expire_date')) ? '' : $this->input->post('expire_date');
    $item_post['generic_item_id'] = is_null($this->input->post('generic_item_id')) ? '' : $this->input->post('generic_item_id');
    $item_post['item_form_id'] = is_null($this->input->post('item_form_id')) ? '' : $this->input->post('item_form_id');
    $item_post['item_id'] = is_null($this->input->post('item_id')) ? '' : $this->input->post('item_id');
    $item_post['item_name'] = is_null($this->input->post('item_name')) ? '' : $this->input->post('item_name');
    $item_post['item_status'] = is_null($this->input->post('item_status')) ? '' : $this->input->post('item_status');
    $item_post['lot_batch_id'] = is_null($this->input->post('lot_batch_id')) ? '' : $this->input->post('lot_batch_id');
    $item_post['manufacturer_vendor_id'] = is_null($this->input->post('manufacturer_vendor_id')) ? '' : $this->input->post('manufacturer_vendor_id');
    $item_post['manufacturing_date'] = is_null($this->input->post('manufacturing_date')) ? '' : $this->input->post('manufacturing_date');
    $item_post['model'] = is_null($this->input->post('model')) ? '' : $this->input->post('model');
    $item_post['quantity'] = is_null($this->input->post('quantity')) ? '' : $this->input->post('quantity');
    $item_post['supplier_vendor_id'] = is_null($this->input->post('supplier_vendor_id')) ? '' : $this->input->post('supplier_vendor_id');
    $item_post['supply_date'] = is_null($this->input->post('supply_date')) ? '' : $this->input->post('supply_date');
    $item_post['warranty_period'] = is_null($this->input->post('warranty_period')) ? '' : $this->input->post('warranty_period');
    $this->session->set_userdata('dosage.dosage_id', $item_post['dosage.dosage_id']);
    $this->session->set_userdata('generic_item.generic_item_id', $item_post['generic_item.generic_item_id']);
    $this->session->set_userdata('item_form.item_form_id', $item_post['item_form.item_form_id']);
    $this->db->insert('item', $item_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $item_post);
  }
  function item_update($dosage_id,$generic_item_id,$item_form_id,$item_id) {
    $item_post['dosage.dosage_id'] = $this->session->dosage_dosage_id;
    $item_post['generic_item.generic_item_id'] = $this->session->generic_item_generic_item_id;
    $item_post['item_form.item_form_id'] = $this->session->item_form_item_form_id;
    $item_post['item.item_id'] = $this->session->item_item_id;
    $item_post['dosage.dosage_id'] = $dosage_dosage_id;
    $item_post['generic_item.generic_item_id'] = $generic_item_generic_item_id;
    $item_post['item_form.item_form_id'] = $item_form_item_form_id;
    $item_post['item.item_id'] = $item_item_id;
    $item_post['item.cost'] = is_null($this->input->post('item_cost')) ? '' : $this->input->post('item_cost');
    $item_post['item.description'] = is_null($this->input->post('item_description')) ? '' : $this->input->post('item_description');
    $item_post['item.dosage_id'] = is_null($this->input->post('item_dosage_id')) ? '' : $this->input->post('item_dosage_id');
    $item_post['item.expire_date'] = is_null($this->input->post('item_expire_date')) ? '' : $this->input->post('item_expire_date');
    $item_post['item.generic_item_id'] = is_null($this->input->post('item_generic_item_id')) ? '' : $this->input->post('item_generic_item_id');
    $item_post['item.item_form_id'] = is_null($this->input->post('item_item_form_id')) ? '' : $this->input->post('item_item_form_id');
    $item_post['item.item_name'] = is_null($this->input->post('item_item_name')) ? '' : $this->input->post('item_item_name');
    $item_post['item.item_status'] = is_null($this->input->post('item_item_status')) ? '' : $this->input->post('item_item_status');
    $item_post['item.lot_batch_id'] = is_null($this->input->post('item_lot_batch_id')) ? '' : $this->input->post('item_lot_batch_id');
    $item_post['item.manufacturer_vendor_id'] = is_null($this->input->post('item_manufacturer_vendor_id')) ? '' : $this->input->post('item_manufacturer_vendor_id');
    $item_post['item.manufacturing_date'] = is_null($this->input->post('item_manufacturing_date')) ? '' : $this->input->post('item_manufacturing_date');
    $item_post['item.model'] = is_null($this->input->post('item_model')) ? '' : $this->input->post('item_model');
    $item_post['item.quantity'] = is_null($this->input->post('item_quantity')) ? '' : $this->input->post('item_quantity');
    $item_post['item.supplier_vendor_id'] = is_null($this->input->post('item_supplier_vendor_id')) ? '' : $this->input->post('item_supplier_vendor_id');
    $item_post['item.supply_date'] = is_null($this->input->post('item_supply_date')) ? '' : $this->input->post('item_supply_date');
    $item_post['item.warranty_period'] = is_null($this->input->post('item_warranty_period')) ? '' : $this->input->post('item_warranty_period');
    $this->session->set_userdata('dosage.dosage_id', $item_post['dosage.dosage_id']);
    $this->session->set_userdata('generic_item.generic_item_id', $item_post['generic_item.generic_item_id']);
    $this->session->set_userdata('item_form.item_form_id', $item_post['item_form.item_form_id']);
    $this->session->set_userdata('item.item_id', $item_post['item.item_id']);
    $this->db->update('item', $item_post, array('item_id' => $item_post['item_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $item_post);
  }
  function item_delete() {
    $item_delete['item.cost'] = is_null($this->input->post('item_cost')) ? '' : $this->input->post('item_cost');
    $item_delete['item.description'] = is_null($this->input->post('item_description')) ? '' : $this->input->post('item_description');
    $item_delete['item.dosage_id'] = is_null($this->input->post('item_dosage_id')) ? '' : $this->input->post('item_dosage_id');
    $item_delete['item.expire_date'] = is_null($this->input->post('item_expire_date')) ? '' : $this->input->post('item_expire_date');
    $item_delete['item.generic_item_id'] = is_null($this->input->post('item_generic_item_id')) ? '' : $this->input->post('item_generic_item_id');
    $item_delete['item.item_form_id'] = is_null($this->input->post('item_item_form_id')) ? '' : $this->input->post('item_item_form_id');
    $item_delete['item.item_id'] = is_null($this->input->post('item_item_id')) ? '' : $this->input->post('item_item_id');
    $item_delete['item.item_name'] = is_null($this->input->post('item_item_name')) ? '' : $this->input->post('item_item_name');
    $item_delete['item.item_status'] = is_null($this->input->post('item_item_status')) ? '' : $this->input->post('item_item_status');
    $item_delete['item.lot_batch_id'] = is_null($this->input->post('item_lot_batch_id')) ? '' : $this->input->post('item_lot_batch_id');
    $item_delete['item.manufacturer_vendor_id'] = is_null($this->input->post('item_manufacturer_vendor_id')) ? '' : $this->input->post('item_manufacturer_vendor_id');
    $item_delete['item.manufacturing_date'] = is_null($this->input->post('item_manufacturing_date')) ? '' : $this->input->post('item_manufacturing_date');
    $item_delete['item.model'] = is_null($this->input->post('item_model')) ? '' : $this->input->post('item_model');
    $item_delete['item.quantity'] = is_null($this->input->post('item_quantity')) ? '' : $this->input->post('item_quantity');
    $item_delete['item.supplier_vendor_id'] = is_null($this->input->post('item_supplier_vendor_id')) ? '' : $this->input->post('item_supplier_vendor_id');
    $item_delete['item.supply_date'] = is_null($this->input->post('item_supply_date')) ? '' : $this->input->post('item_supply_date');
    $item_delete['item.warranty_period'] = is_null($this->input->post('item_warranty_period')) ? '' : $this->input->post('item_warranty_period');
    $this->db->delete('item', array('item_id' => $item_delete['item_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $item_delete);
  }
  function item_get_records($dosage_id,$generic_item_id,$item_form_id,$item_id) {
    $item_filters['dosage.dosage_id'] = $this->session->dosage_dosage_id;
    $item_filters['generic_item.generic_item_id'] = $this->session->generic_item_generic_item_id;
    $item_filters['item_form.item_form_id'] = $this->session->item_form_item_form_id;
    $item_filters['item.item_id'] = $this->session->item_item_id;
    $item_filters['dosage.dosage_id'] = $dosage_dosage_id;
    $item_filters['generic_item.generic_item_id'] = $generic_item_generic_item_id;
    $item_filters['item_form.item_form_id'] = $item_form_item_form_id;
    $item_filters['item.item_id'] = $item_item_id;
    $item_filters['item.cost'] = is_null($this->input->post('item_cost')) ? '' : $this->input->post('item_cost');
    $item_filters['item.description'] = is_null($this->input->post('item_description')) ? '' : $this->input->post('item_description');
    $item_filters['item.dosage_id'] = is_null($this->input->post('item_dosage_id')) ? '' : $this->input->post('item_dosage_id');
    $item_filters['item.expire_date'] = is_null($this->input->post('item_expire_date')) ? '' : $this->input->post('item_expire_date');
    $item_filters['item.generic_item_id'] = is_null($this->input->post('item_generic_item_id')) ? '' : $this->input->post('item_generic_item_id');
    $item_filters['item.item_form_id'] = is_null($this->input->post('item_item_form_id')) ? '' : $this->input->post('item_item_form_id');
    $item_filters['item.item_name'] = is_null($this->input->post('item_item_name')) ? '' : $this->input->post('item_item_name');
    $item_filters['item.item_status'] = is_null($this->input->post('item_item_status')) ? '' : $this->input->post('item_item_status');
    $item_filters['item.lot_batch_id'] = is_null($this->input->post('item_lot_batch_id')) ? '' : $this->input->post('item_lot_batch_id');
    $item_filters['item.manufacturer_vendor_id'] = is_null($this->input->post('item_manufacturer_vendor_id')) ? '' : $this->input->post('item_manufacturer_vendor_id');
    $item_filters['item.manufacturing_date'] = is_null($this->input->post('item_manufacturing_date')) ? '' : $this->input->post('item_manufacturing_date');
    $item_filters['item.model'] = is_null($this->input->post('item_model')) ? '' : $this->input->post('item_model');
    $item_filters['item.quantity'] = is_null($this->input->post('item_quantity')) ? '' : $this->input->post('item_quantity');
    $item_filters['item.supplier_vendor_id'] = is_null($this->input->post('item_supplier_vendor_id')) ? '' : $this->input->post('item_supplier_vendor_id');
    $item_filters['item.supply_date'] = is_null($this->input->post('item_supply_date')) ? '' : $this->input->post('item_supply_date');
    $item_filters['item.warranty_period'] = is_null($this->input->post('item_warranty_period')) ? '' : $this->input->post('item_warranty_period');
    $this->session->set_userdata('dosage.dosage_id', $item_filters['dosage.dosage_id']);
    $this->session->set_userdata('generic_item.generic_item_id', $item_filters['generic_item.generic_item_id']);
    $this->session->set_userdata('item_form.item_form_id', $item_filters['item_form.item_form_id']);
    $this->session->set_userdata('item.item_id', $item_filters['item.item_id']);
    $this->db->select('dosage.dosage_id AS item_dosage_id, generic_item.generic_item_id AS item_generic_item_id,
    item_form.item_form_id AS item_item_form_id, item.cost AS item_cost,
    item.description AS item_description, item.dosage_id AS item_dosage_id,
    item.expire_date AS item_expire_date, item.generic_item_id AS item_generic_item_id,
    item.item_form_id AS item_item_form_id, item.item_id AS item_item_id,
    item.item_name AS item_item_name, item.item_status AS item_item_status,
    item.lot_batch_id AS item_lot_batch_id, item.manufacturer_vendor_id AS item_manufacturer_vendor_id,
    item.manufacturing_date AS item_manufacturing_date, item.model AS item_model,
    item.quantity AS item_quantity, item.supplier_vendor_id AS item_supplier_vendor_id,
    item.supply_date AS item_supply_date, item.warranty_period AS item_warranty_period')->from('item');
    $this->db->join('dosage', 'item.dosage_id = dosage.dosage_id', 'left');
    $this->db->join('generic_item', 'item.generic_item_id = generic_item.generic_item_id', 'left');
    $this->db->join('item_form', 'item.item_form_id = item_form.item_form_id', 'left');
    $this->db->where($item_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $item_filters);
  }
}