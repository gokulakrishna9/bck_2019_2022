<?php
class Dbs_model extends CI_Model {
  function __construct(){
    parent::__construct();
    $this->load->dbutil();
  }

  function db_list(){
    $dbs = $this->dbutil->list_databases();
    return $dbs;
  }

  function db_table_columns(){
    $dbs = $this->dbutil->list_databases();
    $db_table_columns = array();
    foreach($dbs as $db) {
      $this->db->db_select($db);      
      $tables = $this->db->list_tables();
      foreach($tables as $table){        
        $fields = $this->db->field_data($table);
        foreach($fields as $field){
          $fld = (array)$field;
          $fld['db_name'] = $db;
          $fld['db_table_name'] = $table;
          $db_table_columns[] = (object)$fld;
        }
      }
    }
    
    //var_dump($db_table_columns);
    return $db_table_columns;
  }

  function health_for_all_columns() {
    $this->db->db_select('health4all');      
    $tables = $this->db->list_tables();
    foreach($tables as $table){        
      $fields = $this->db->field_data($table);
      foreach($fields as $field){
        $fld = (array)$field;
        $fld['db_name'] = 'health4all';
        $fld['db_table_name'] = $table;
        $db_table_columns[] = $fld;
      }
    }
    return $db_table_columns;
  }

  function db_creator(){
    // Create Database
    // Create tables
  }

}
?>