ct_student_batch_id 	ct_student_id 	ct_batch_id 
<?php
class Student_model extends CI_Model {
  // label, html_element, {type | master_value_field, master label field}, ... 
  private $table_fields = array(
    'table_name' => 'ct_student',
    'primary_key'=>'ct_student_id',
    'all_fields' => array(
      'ct_student_id', 'first_name', 'last_name',
      'student_mobile', 'parent_mobile', 'guardian_first_name',
      'guardian_last_name', 'relation_type_id', 'last_institution', 
      'institution_place', 'highest_education', 'age', 
      'gender', 'address_street_line_one', 'address_street_line_two', 
      'city', 'pin' 
    )
  );

  function get_form_fields(){
    return $this->table_fields;
  }

  function get_records(){
    $limit = $this->session->per_page;
    if($this->session->page_number == 1)
      $offset = 0;
    else 
      $offset = ($this->session->page_number - 1) * $limit;
    $this->db->select("*")
      ->from($this->table_fields['table_name'])
      ->where($this->table_fields['table_name'].'.active', '1')
      ->order_by($this->table_fields['table_name'], 'ASC')
      ->limit($limit, $offset);
    $qry = $this->db->get();
    $rslts = $qry->result();
    return $rslts;
  }

  function count_all(){
    return $this->db->count_all($this->table_fields['table_name']);
  }

  function get_record(){
    if($this->input->get($this->table_fields['primary_key']))
      $this->db->where($this->table_fields['table_name'].'.'.$this->table_fields['primary_key'] , $this->input->get($this->table_fields['primary_key']));
    $this->db->select("*")
      ->from($this->table_fields['table_name'])
      ->where($this->table_fields['table_name'].'.active', '1')
      ->order_by($this->table_fields['table_name'].'.sort_order', 'ASC');
      
    $qry = $this->db->get();
    $rslts = $qry->result();
    return $rslts[0];
  }

  function add_update_record(){
    $post_data = array();
    foreach($this->table_fields['all_fields'] as $field){
      $post_data[$field] = is_null($this->input->post($field)) ? ' ' : $this->input->post($field);
    }    
    $this->db->replace($this->table_fields['table_name'], $post_data);
    $insert_id = $this->db->insert_id();
    $this->db->select("*")
      ->from($this->table_fields['table_name'])
      ->where($this->table_fields['table_name'].$this->table_fields['primary_key'], $insert_id);
    $qry = $this->db->get();
    $rslt = $qry->result();
    $rslt = $rslt[0];
    $rslt = array(
      'insert_id' => $insert_id,
      'primary_key' => $this->table_fields['primary_key'],
      'result' => $rslt
    );
    return $rslt;
  }

  function validate_input(){
  }

  function transaction_check(){
    // Destroy transactions after a certain limit
  }
}