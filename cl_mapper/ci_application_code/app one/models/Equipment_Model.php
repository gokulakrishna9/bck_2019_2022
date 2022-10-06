<?php class Equipment_model extends CI_Model {
  function equipment_create($area_area_id,$department_department_id,$equipment_type_equipment_type_id,$hospital_hospital_id,$staff_previous_hospital_hospital_id,$staff_staff_id,$unit_unit_id,$vendor_vendor_id) {
    $equipment_post = [];
    $equipment_post['area.area_id'] = $this->session->area_area_id;
    $equipment_post['department.department_id'] = $this->session->department_department_id;
    $equipment_post['equipment_type.equipment_type_id'] = $this->session->equipment_type_equipment_type_id;
    $equipment_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $equipment_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $equipment_post['staff.staff_id'] = $this->session->staff_staff_id;
    $equipment_post['unit.unit_id'] = $this->session->unit_unit_id;
    $equipment_post['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $equipment_post['area.area_id'] = $area_area_id;
    $equipment_post['department.department_id'] = $department_department_id;
    $equipment_post['equipment_type.equipment_type_id'] = $equipment_type_equipment_type_id;
    $equipment_post['hospital.hospital_id'] = $hospital_hospital_id;
    $equipment_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $equipment_post['staff.staff_id'] = $staff_staff_id;
    $equipment_post['unit.unit_id'] = $unit_unit_id;
    $equipment_post['vendor.vendor_id'] = $vendor_vendor_id;
    $equipment_post['area_id'] = is_null($this->input->post('area_id')) ? '' : $this->input->post('area_id');
    $equipment_post['asset_number'] = is_null($this->input->post('asset_number')) ? '' : $this->input->post('asset_number');
    $equipment_post['cost'] = is_null($this->input->post('cost')) ? '' : $this->input->post('cost');
    $equipment_post['department_id'] = is_null($this->input->post('department_id')) ? '' : $this->input->post('department_id');
    $equipment_post['equipment_id'] = is_null($this->input->post('equipment_id')) ? '' : $this->input->post('equipment_id');
    $equipment_post['equipment_status'] = is_null($this->input->post('equipment_status')) ? '' : $this->input->post('equipment_status');
    $equipment_post['equipment_type_id'] = is_null($this->input->post('equipment_type_id')) ? '' : $this->input->post('equipment_type_id');
    $equipment_post['hospital_id'] = is_null($this->input->post('hospital_id')) ? '' : $this->input->post('hospital_id');
    $equipment_post['make'] = is_null($this->input->post('make')) ? '' : $this->input->post('make');
    $equipment_post['model'] = is_null($this->input->post('model')) ? '' : $this->input->post('model');
    $equipment_post['procured_by'] = is_null($this->input->post('procured_by')) ? '' : $this->input->post('procured_by');
    $equipment_post['serial_number'] = is_null($this->input->post('serial_number')) ? '' : $this->input->post('serial_number');
    $equipment_post['service_engineer'] = is_null($this->input->post('service_engineer')) ? '' : $this->input->post('service_engineer');
    $equipment_post['service_engineer_contact'] = is_null($this->input->post('service_engineer_contact')) ? '' : $this->input->post('service_engineer_contact');
    $equipment_post['service_person_id'] = is_null($this->input->post('service_person_id')) ? '' : $this->input->post('service_person_id');
    $equipment_post['staff_id'] = is_null($this->input->post('staff_id')) ? '' : $this->input->post('staff_id');
    $equipment_post['supplier'] = is_null($this->input->post('supplier')) ? '' : $this->input->post('supplier');
    $equipment_post['supply_date'] = is_null($this->input->post('supply_date')) ? '' : $this->input->post('supply_date');
    $equipment_post['unit_id'] = is_null($this->input->post('unit_id')) ? '' : $this->input->post('unit_id');
    $equipment_post['vendor_id'] = is_null($this->input->post('vendor_id')) ? '' : $this->input->post('vendor_id');
    $equipment_post['warranty_end_date'] = is_null($this->input->post('warranty_end_date')) ? '' : $this->input->post('warranty_end_date');
    $equipment_post['warranty_start_date'] = is_null($this->input->post('warranty_start_date')) ? '' : $this->input->post('warranty_start_date');
    $this->session->set_userdata('area.area_id', $equipment_post['area.area_id']);
    $this->session->set_userdata('department.department_id', $equipment_post['department.department_id']);
    $this->session->set_userdata('equipment_type.equipment_type_id', $equipment_post['equipment_type.equipment_type_id']);
    $this->session->set_userdata('hospital.hospital_id', $equipment_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $equipment_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('staff.staff_id', $equipment_post['staff.staff_id']);
    $this->session->set_userdata('unit.unit_id', $equipment_post['unit.unit_id']);
    $this->session->set_userdata('vendor.vendor_id', $equipment_post['vendor.vendor_id']);
    $this->db->insert('equipment', $equipment_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $equipment_post);
  }
  function equipment_update($area_id,$department_id,$equipment_type_id,$hospital_id,$hospital_id,$staff_id,$unit_id,$vendor_id,$equipment_id) {
    $equipment_post['area.area_id'] = $this->session->area_area_id;
    $equipment_post['department.department_id'] = $this->session->department_department_id;
    $equipment_post['equipment_type.equipment_type_id'] = $this->session->equipment_type_equipment_type_id;
    $equipment_post['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $equipment_post['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $equipment_post['staff.staff_id'] = $this->session->staff_staff_id;
    $equipment_post['unit.unit_id'] = $this->session->unit_unit_id;
    $equipment_post['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $equipment_post['equipment.equipment_id'] = $this->session->equipment_equipment_id;
    $equipment_post['area.area_id'] = $area_area_id;
    $equipment_post['department.department_id'] = $department_department_id;
    $equipment_post['equipment_type.equipment_type_id'] = $equipment_type_equipment_type_id;
    $equipment_post['hospital.hospital_id'] = $hospital_hospital_id;
    $equipment_post['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $equipment_post['staff.staff_id'] = $staff_staff_id;
    $equipment_post['unit.unit_id'] = $unit_unit_id;
    $equipment_post['vendor.vendor_id'] = $vendor_vendor_id;
    $equipment_post['equipment.equipment_id'] = $equipment_equipment_id;
    $equipment_post['equipment.area_id'] = is_null($this->input->post('equipment_area_id')) ? '' : $this->input->post('equipment_area_id');
    $equipment_post['equipment.asset_number'] = is_null($this->input->post('equipment_asset_number')) ? '' : $this->input->post('equipment_asset_number');
    $equipment_post['equipment.cost'] = is_null($this->input->post('equipment_cost')) ? '' : $this->input->post('equipment_cost');
    $equipment_post['equipment.department_id'] = is_null($this->input->post('equipment_department_id')) ? '' : $this->input->post('equipment_department_id');
    $equipment_post['equipment.equipment_status'] = is_null($this->input->post('equipment_equipment_status')) ? '' : $this->input->post('equipment_equipment_status');
    $equipment_post['equipment.equipment_type_id'] = is_null($this->input->post('equipment_equipment_type_id')) ? '' : $this->input->post('equipment_equipment_type_id');
    $equipment_post['equipment.hospital_id'] = is_null($this->input->post('equipment_hospital_id')) ? '' : $this->input->post('equipment_hospital_id');
    $equipment_post['equipment.make'] = is_null($this->input->post('equipment_make')) ? '' : $this->input->post('equipment_make');
    $equipment_post['equipment.model'] = is_null($this->input->post('equipment_model')) ? '' : $this->input->post('equipment_model');
    $equipment_post['equipment.procured_by'] = is_null($this->input->post('equipment_procured_by')) ? '' : $this->input->post('equipment_procured_by');
    $equipment_post['equipment.serial_number'] = is_null($this->input->post('equipment_serial_number')) ? '' : $this->input->post('equipment_serial_number');
    $equipment_post['equipment.service_engineer'] = is_null($this->input->post('equipment_service_engineer')) ? '' : $this->input->post('equipment_service_engineer');
    $equipment_post['equipment.service_engineer_contact'] = is_null($this->input->post('equipment_service_engineer_contact')) ? '' : $this->input->post('equipment_service_engineer_contact');
    $equipment_post['equipment.service_person_id'] = is_null($this->input->post('equipment_service_person_id')) ? '' : $this->input->post('equipment_service_person_id');
    $equipment_post['equipment.staff_id'] = is_null($this->input->post('equipment_staff_id')) ? '' : $this->input->post('equipment_staff_id');
    $equipment_post['equipment.supplier'] = is_null($this->input->post('equipment_supplier')) ? '' : $this->input->post('equipment_supplier');
    $equipment_post['equipment.supply_date'] = is_null($this->input->post('equipment_supply_date')) ? '' : $this->input->post('equipment_supply_date');
    $equipment_post['equipment.unit_id'] = is_null($this->input->post('equipment_unit_id')) ? '' : $this->input->post('equipment_unit_id');
    $equipment_post['equipment.vendor_id'] = is_null($this->input->post('equipment_vendor_id')) ? '' : $this->input->post('equipment_vendor_id');
    $equipment_post['equipment.warranty_end_date'] = is_null($this->input->post('equipment_warranty_end_date')) ? '' : $this->input->post('equipment_warranty_end_date');
    $equipment_post['equipment.warranty_start_date'] = is_null($this->input->post('equipment_warranty_start_date')) ? '' : $this->input->post('equipment_warranty_start_date');
    $this->session->set_userdata('area.area_id', $equipment_post['area.area_id']);
    $this->session->set_userdata('department.department_id', $equipment_post['department.department_id']);
    $this->session->set_userdata('equipment_type.equipment_type_id', $equipment_post['equipment_type.equipment_type_id']);
    $this->session->set_userdata('hospital.hospital_id', $equipment_post['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $equipment_post['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('staff.staff_id', $equipment_post['staff.staff_id']);
    $this->session->set_userdata('unit.unit_id', $equipment_post['unit.unit_id']);
    $this->session->set_userdata('vendor.vendor_id', $equipment_post['vendor.vendor_id']);
    $this->session->set_userdata('equipment.equipment_id', $equipment_post['equipment.equipment_id']);
    $this->db->update('equipment', $equipment_post, array('equipment_id' => $equipment_post['equipment_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $equipment_post);
  }
  function equipment_delete() {
    $equipment_delete['equipment.area_id'] = is_null($this->input->post('equipment_area_id')) ? '' : $this->input->post('equipment_area_id');
    $equipment_delete['equipment.asset_number'] = is_null($this->input->post('equipment_asset_number')) ? '' : $this->input->post('equipment_asset_number');
    $equipment_delete['equipment.cost'] = is_null($this->input->post('equipment_cost')) ? '' : $this->input->post('equipment_cost');
    $equipment_delete['equipment.department_id'] = is_null($this->input->post('equipment_department_id')) ? '' : $this->input->post('equipment_department_id');
    $equipment_delete['equipment.equipment_id'] = is_null($this->input->post('equipment_equipment_id')) ? '' : $this->input->post('equipment_equipment_id');
    $equipment_delete['equipment.equipment_status'] = is_null($this->input->post('equipment_equipment_status')) ? '' : $this->input->post('equipment_equipment_status');
    $equipment_delete['equipment.equipment_type_id'] = is_null($this->input->post('equipment_equipment_type_id')) ? '' : $this->input->post('equipment_equipment_type_id');
    $equipment_delete['equipment.hospital_id'] = is_null($this->input->post('equipment_hospital_id')) ? '' : $this->input->post('equipment_hospital_id');
    $equipment_delete['equipment.make'] = is_null($this->input->post('equipment_make')) ? '' : $this->input->post('equipment_make');
    $equipment_delete['equipment.model'] = is_null($this->input->post('equipment_model')) ? '' : $this->input->post('equipment_model');
    $equipment_delete['equipment.procured_by'] = is_null($this->input->post('equipment_procured_by')) ? '' : $this->input->post('equipment_procured_by');
    $equipment_delete['equipment.serial_number'] = is_null($this->input->post('equipment_serial_number')) ? '' : $this->input->post('equipment_serial_number');
    $equipment_delete['equipment.service_engineer'] = is_null($this->input->post('equipment_service_engineer')) ? '' : $this->input->post('equipment_service_engineer');
    $equipment_delete['equipment.service_engineer_contact'] = is_null($this->input->post('equipment_service_engineer_contact')) ? '' : $this->input->post('equipment_service_engineer_contact');
    $equipment_delete['equipment.service_person_id'] = is_null($this->input->post('equipment_service_person_id')) ? '' : $this->input->post('equipment_service_person_id');
    $equipment_delete['equipment.staff_id'] = is_null($this->input->post('equipment_staff_id')) ? '' : $this->input->post('equipment_staff_id');
    $equipment_delete['equipment.supplier'] = is_null($this->input->post('equipment_supplier')) ? '' : $this->input->post('equipment_supplier');
    $equipment_delete['equipment.supply_date'] = is_null($this->input->post('equipment_supply_date')) ? '' : $this->input->post('equipment_supply_date');
    $equipment_delete['equipment.unit_id'] = is_null($this->input->post('equipment_unit_id')) ? '' : $this->input->post('equipment_unit_id');
    $equipment_delete['equipment.vendor_id'] = is_null($this->input->post('equipment_vendor_id')) ? '' : $this->input->post('equipment_vendor_id');
    $equipment_delete['equipment.warranty_end_date'] = is_null($this->input->post('equipment_warranty_end_date')) ? '' : $this->input->post('equipment_warranty_end_date');
    $equipment_delete['equipment.warranty_start_date'] = is_null($this->input->post('equipment_warranty_start_date')) ? '' : $this->input->post('equipment_warranty_start_date');
    $this->db->delete('equipment', array('equipment_id' => $equipment_delete['equipment_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $equipment_delete);
  }
  function equipment_get_records($area_id,$department_id,$equipment_type_id,$hospital_id,$hospital_id,$staff_id,$unit_id,$vendor_id,$equipment_id) {
    $equipment_filters['area.area_id'] = $this->session->area_area_id;
    $equipment_filters['department.department_id'] = $this->session->department_department_id;
    $equipment_filters['equipment_type.equipment_type_id'] = $this->session->equipment_type_equipment_type_id;
    $equipment_filters['hospital.hospital_id'] = $this->session->hospital_hospital_id;
    $equipment_filters['staff_previous_hospital.hospital_id'] = $this->session->staff_previous_hospital_hospital_id;
    $equipment_filters['staff.staff_id'] = $this->session->staff_staff_id;
    $equipment_filters['unit.unit_id'] = $this->session->unit_unit_id;
    $equipment_filters['vendor.vendor_id'] = $this->session->vendor_vendor_id;
    $equipment_filters['equipment.equipment_id'] = $this->session->equipment_equipment_id;
    $equipment_filters['area.area_id'] = $area_area_id;
    $equipment_filters['department.department_id'] = $department_department_id;
    $equipment_filters['equipment_type.equipment_type_id'] = $equipment_type_equipment_type_id;
    $equipment_filters['hospital.hospital_id'] = $hospital_hospital_id;
    $equipment_filters['staff_previous_hospital.hospital_id'] = $staff_previous_hospital_hospital_id;
    $equipment_filters['staff.staff_id'] = $staff_staff_id;
    $equipment_filters['unit.unit_id'] = $unit_unit_id;
    $equipment_filters['vendor.vendor_id'] = $vendor_vendor_id;
    $equipment_filters['equipment.equipment_id'] = $equipment_equipment_id;
    $equipment_filters['equipment.area_id'] = is_null($this->input->post('equipment_area_id')) ? '' : $this->input->post('equipment_area_id');
    $equipment_filters['equipment.asset_number'] = is_null($this->input->post('equipment_asset_number')) ? '' : $this->input->post('equipment_asset_number');
    $equipment_filters['equipment.cost'] = is_null($this->input->post('equipment_cost')) ? '' : $this->input->post('equipment_cost');
    $equipment_filters['equipment.department_id'] = is_null($this->input->post('equipment_department_id')) ? '' : $this->input->post('equipment_department_id');
    $equipment_filters['equipment.equipment_status'] = is_null($this->input->post('equipment_equipment_status')) ? '' : $this->input->post('equipment_equipment_status');
    $equipment_filters['equipment.equipment_type_id'] = is_null($this->input->post('equipment_equipment_type_id')) ? '' : $this->input->post('equipment_equipment_type_id');
    $equipment_filters['equipment.hospital_id'] = is_null($this->input->post('equipment_hospital_id')) ? '' : $this->input->post('equipment_hospital_id');
    $equipment_filters['equipment.make'] = is_null($this->input->post('equipment_make')) ? '' : $this->input->post('equipment_make');
    $equipment_filters['equipment.model'] = is_null($this->input->post('equipment_model')) ? '' : $this->input->post('equipment_model');
    $equipment_filters['equipment.procured_by'] = is_null($this->input->post('equipment_procured_by')) ? '' : $this->input->post('equipment_procured_by');
    $equipment_filters['equipment.serial_number'] = is_null($this->input->post('equipment_serial_number')) ? '' : $this->input->post('equipment_serial_number');
    $equipment_filters['equipment.service_engineer'] = is_null($this->input->post('equipment_service_engineer')) ? '' : $this->input->post('equipment_service_engineer');
    $equipment_filters['equipment.service_engineer_contact'] = is_null($this->input->post('equipment_service_engineer_contact')) ? '' : $this->input->post('equipment_service_engineer_contact');
    $equipment_filters['equipment.service_person_id'] = is_null($this->input->post('equipment_service_person_id')) ? '' : $this->input->post('equipment_service_person_id');
    $equipment_filters['equipment.staff_id'] = is_null($this->input->post('equipment_staff_id')) ? '' : $this->input->post('equipment_staff_id');
    $equipment_filters['equipment.supplier'] = is_null($this->input->post('equipment_supplier')) ? '' : $this->input->post('equipment_supplier');
    $equipment_filters['equipment.supply_date'] = is_null($this->input->post('equipment_supply_date')) ? '' : $this->input->post('equipment_supply_date');
    $equipment_filters['equipment.unit_id'] = is_null($this->input->post('equipment_unit_id')) ? '' : $this->input->post('equipment_unit_id');
    $equipment_filters['equipment.vendor_id'] = is_null($this->input->post('equipment_vendor_id')) ? '' : $this->input->post('equipment_vendor_id');
    $equipment_filters['equipment.warranty_end_date'] = is_null($this->input->post('equipment_warranty_end_date')) ? '' : $this->input->post('equipment_warranty_end_date');
    $equipment_filters['equipment.warranty_start_date'] = is_null($this->input->post('equipment_warranty_start_date')) ? '' : $this->input->post('equipment_warranty_start_date');
    $this->session->set_userdata('area.area_id', $equipment_filters['area.area_id']);
    $this->session->set_userdata('department.department_id', $equipment_filters['department.department_id']);
    $this->session->set_userdata('equipment_type.equipment_type_id', $equipment_filters['equipment_type.equipment_type_id']);
    $this->session->set_userdata('hospital.hospital_id', $equipment_filters['hospital.hospital_id']);
    $this->session->set_userdata('staff_previous_hospital.hospital_id', $equipment_filters['staff_previous_hospital.hospital_id']);
    $this->session->set_userdata('staff.staff_id', $equipment_filters['staff.staff_id']);
    $this->session->set_userdata('unit.unit_id', $equipment_filters['unit.unit_id']);
    $this->session->set_userdata('vendor.vendor_id', $equipment_filters['vendor.vendor_id']);
    $this->session->set_userdata('equipment.equipment_id', $equipment_filters['equipment.equipment_id']);
    $this->db->select('area.area_id AS equipment_area_id, department.department_id AS equipment_department_id,
    equipment_type.equipment_type_id AS equipment_equipment_type_id, hospital.hospital_id AS equipment_hospital_id,
    staff_previous_hospital.hospital_id AS equipment_hospital_id, staff.staff_id AS equipment_staff_id,
    unit.unit_id AS equipment_unit_id, vendor.vendor_id AS equipment_vendor_id,
    equipment.area_id AS equipment_area_id, equipment.asset_number AS equipment_asset_number,
    equipment.cost AS equipment_cost, equipment.department_id AS equipment_department_id,
    equipment.equipment_id AS equipment_equipment_id, equipment.equipment_status AS equipment_equipment_status,
    equipment.equipment_type_id AS equipment_equipment_type_id, equipment.hospital_id AS equipment_hospital_id,
    equipment.make AS equipment_make, equipment.model AS equipment_model,
    equipment.procured_by AS equipment_procured_by, equipment.serial_number AS equipment_serial_number,
    equipment.service_engineer AS equipment_service_engineer, equipment.service_engineer_contact AS equipment_service_engineer_contact,
    equipment.service_person_id AS equipment_service_person_id, equipment.staff_id AS equipment_staff_id,
    equipment.supplier AS equipment_supplier, equipment.supply_date AS equipment_supply_date,
    equipment.unit_id AS equipment_unit_id, equipment.vendor_id AS equipment_vendor_id,
    equipment.warranty_end_date AS equipment_warranty_end_date, equipment.warranty_start_date AS equipment_warranty_start_date')->from('equipment');
    $this->db->join('area', 'equipment.area_id = area.area_id', 'left');
    $this->db->join('department', 'equipment.department_id = department.department_id', 'left');
    $this->db->join('equipment_type', 'equipment.equipment_type_id = equipment_type.equipment_type_id', 'left');
    $this->db->join('hospital', 'equipment.hospital_id = hospital.hospital_id', 'left');
    $this->db->join('staff_previous_hospital', 'equipment.hospital_id = staff_previous_hospital.hospital_id', 'left');
    $this->db->join('staff', 'equipment.staff_id = staff.staff_id', 'left');
    $this->db->join('unit', 'equipment.unit_id = unit.unit_id', 'left');
    $this->db->join('vendor', 'equipment.vendor_id = vendor.vendor_id', 'left');
    $this->db->where($equipment_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $equipment_filters);
  }
}