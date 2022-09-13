<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>App Builder</title>
	<link rel="icon" href="<?php echo base_url();?>assets/graphics/cpu-microprocessor-microchip-circuit-board-vladystock.jpg" type="image/gif" sizes="20x20">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css_lib/w3.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js_lib/w3.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js_lib/fuzzyset.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js_lib/lodash.min.js"></script>
</head>
<body>
<table id="id01">
  <tr>
    <th colspan="7">Database allColumns</th>
  </tr>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Max Length</th>
    <th>Primary Key</th>
    <th>DB Name</th>
    <th>Information Schema</th>
    <th>DB Table Name</th>
  </tr>
  <tr w3-repeat="db_table_allColumns">
    <td>{{name}}</td>
    <td>{{type}}</td>
    <td>{{max_length}}</td>
    <td>{{primary_key}}</td>
    <td>{{db_name}}</td>
    <td>{{information_schema}}</td>
    <td>{{db_table_name}}</td>
  </tr>
</table>
<script>
  w3.getHttpObject("/app_builder/dbs/get_data", myFunction);
  function myFunction(allColumns) {
    //  w3.displayObject("id01", x);
    console.log('All allColumns');
    console.log(allColumns);
    // Build a tree with root table at top
    // use fuzzyset function as a predicate
    let primaryKeys = _.filter(allColumns, {primary_key: 1})
    console.log('Primary Keys');
    console.log(primaryKeys);
    // For each primary key look through each of the allColumns for a match
    let rootTables = new Array();
    _.forEach(primaryKeys, function(record){
      let tableLinks = {};
      tableLinks[record.db_table_name] = _.reject(_.filter(allColumns, {name: record.name}), {db_table_name: record.db_table_name});
      rootTables.push(tableLinks);
    });
    console.log('Link Tables');
    console.log(rootTables);
  }
</script>
</body>
</html>