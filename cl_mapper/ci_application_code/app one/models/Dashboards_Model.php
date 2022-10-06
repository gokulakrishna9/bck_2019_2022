<?php class Dashboards_model extends CI_Model {
  function dashboards_create() {
    $dashboards_post = [];
    $dashboards_post['dashboard_id'] = is_null($this->input->post('dashboard_id')) ? '' : $this->input->post('dashboard_id');
    $dashboards_post['logo'] = is_null($this->input->post('logo')) ? '' : $this->input->post('logo');
    $dashboards_post['org_label'] = is_null($this->input->post('org_label')) ? '' : $this->input->post('org_label');
    $dashboards_post['organization'] = is_null($this->input->post('organization')) ? '' : $this->input->post('organization');
    $dashboards_post['short_name'] = is_null($this->input->post('short_name')) ? '' : $this->input->post('short_name');
    $dashboards_post['state'] = is_null($this->input->post('state')) ? '' : $this->input->post('state');
    $dashboards_post['state_alias'] = is_null($this->input->post('state_alias')) ? '' : $this->input->post('state_alias');
    $dashboards_post['type6'] = is_null($this->input->post('type6')) ? '' : $this->input->post('type6');
    $this->db->insert('dashboards', $dashboards_post);
    return array('insert_id' => $this->db->insert_id(), 'input_data' => $dashboards_post);
  }
  function dashboards_update($dashboard_id) {
    $dashboards_post['dashboards.dashboard_id'] = $this->session->dashboards_dashboard_id;
    $dashboards_post['dashboards.dashboard_id'] = $dashboards_dashboard_id;
    $dashboards_post['dashboards.logo'] = is_null($this->input->post('dashboards_logo')) ? '' : $this->input->post('dashboards_logo');
    $dashboards_post['dashboards.org_label'] = is_null($this->input->post('dashboards_org_label')) ? '' : $this->input->post('dashboards_org_label');
    $dashboards_post['dashboards.organization'] = is_null($this->input->post('dashboards_organization')) ? '' : $this->input->post('dashboards_organization');
    $dashboards_post['dashboards.short_name'] = is_null($this->input->post('dashboards_short_name')) ? '' : $this->input->post('dashboards_short_name');
    $dashboards_post['dashboards.state'] = is_null($this->input->post('dashboards_state')) ? '' : $this->input->post('dashboards_state');
    $dashboards_post['dashboards.state_alias'] = is_null($this->input->post('dashboards_state_alias')) ? '' : $this->input->post('dashboards_state_alias');
    $dashboards_post['dashboards.type6'] = is_null($this->input->post('dashboards_type6')) ? '' : $this->input->post('dashboards_type6');
    $this->session->set_userdata('dashboards.dashboard_id', $dashboards_post['dashboards.dashboard_id']);
    $this->db->update('dashboards', $dashboards_post, array('dashboard_id' => $dashboards_post['dashboard_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $dashboards_post);
  }
  function dashboards_delete() {
    $dashboards_delete['dashboards.dashboard_id'] = is_null($this->input->post('dashboards_dashboard_id')) ? '' : $this->input->post('dashboards_dashboard_id');
    $dashboards_delete['dashboards.logo'] = is_null($this->input->post('dashboards_logo')) ? '' : $this->input->post('dashboards_logo');
    $dashboards_delete['dashboards.org_label'] = is_null($this->input->post('dashboards_org_label')) ? '' : $this->input->post('dashboards_org_label');
    $dashboards_delete['dashboards.organization'] = is_null($this->input->post('dashboards_organization')) ? '' : $this->input->post('dashboards_organization');
    $dashboards_delete['dashboards.short_name'] = is_null($this->input->post('dashboards_short_name')) ? '' : $this->input->post('dashboards_short_name');
    $dashboards_delete['dashboards.state'] = is_null($this->input->post('dashboards_state')) ? '' : $this->input->post('dashboards_state');
    $dashboards_delete['dashboards.state_alias'] = is_null($this->input->post('dashboards_state_alias')) ? '' : $this->input->post('dashboards_state_alias');
    $dashboards_delete['dashboards.type6'] = is_null($this->input->post('dashboards_type6')) ? '' : $this->input->post('dashboards_type6');
    $this->db->delete('dashboards', array('dashboard_id' => $dashboards_delete['dashboard_id']));
    return array('insert_id' => $this->db->affected_rows(), 'input_data' => $dashboards_delete);
  }
  function dashboards_get_records($dashboard_id) {
    $dashboards_filters['dashboards.dashboard_id'] = $this->session->dashboards_dashboard_id;
    $dashboards_filters['dashboards.dashboard_id'] = $dashboards_dashboard_id;
    $dashboards_filters['dashboards.logo'] = is_null($this->input->post('dashboards_logo')) ? '' : $this->input->post('dashboards_logo');
    $dashboards_filters['dashboards.org_label'] = is_null($this->input->post('dashboards_org_label')) ? '' : $this->input->post('dashboards_org_label');
    $dashboards_filters['dashboards.organization'] = is_null($this->input->post('dashboards_organization')) ? '' : $this->input->post('dashboards_organization');
    $dashboards_filters['dashboards.short_name'] = is_null($this->input->post('dashboards_short_name')) ? '' : $this->input->post('dashboards_short_name');
    $dashboards_filters['dashboards.state'] = is_null($this->input->post('dashboards_state')) ? '' : $this->input->post('dashboards_state');
    $dashboards_filters['dashboards.state_alias'] = is_null($this->input->post('dashboards_state_alias')) ? '' : $this->input->post('dashboards_state_alias');
    $dashboards_filters['dashboards.type6'] = is_null($this->input->post('dashboards_type6')) ? '' : $this->input->post('dashboards_type6');
    $this->session->set_userdata('dashboards.dashboard_id', $dashboards_filters['dashboards.dashboard_id']);
    $this->db->select('dashboards.dashboard_id AS dashboards_dashboard_id, dashboards.logo AS dashboards_logo,
    dashboards.org_label AS dashboards_org_label, dashboards.organization AS dashboards_organization,
    dashboards.short_name AS dashboards_short_name, dashboards.state AS dashboards_state,
    dashboards.state_alias AS dashboards_state_alias, dashboards.type6 AS dashboards_type6')->from('dashboards');
    $this->db->where($dashboards_filters);
    $qry = $this->db->get();
    return array('result' => $qry->result(), 'filter_array' => $dashboards_filters);
  }
}