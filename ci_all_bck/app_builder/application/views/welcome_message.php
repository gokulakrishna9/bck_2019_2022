<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>App Builder</title>
	<link rel="icon" href="<?php echo base_url();?>assets/graphics/cpu-microprocessor-microchip-circuit-board-vladystock.jpg" type="image/gif" sizes="20x20">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css_lib/w3.css">
</head>
<body>
<div id="container">
	<div class="w3-row">
		<div class="w3-col m12">
			<div class="w3-bar w3-indigo" id="header">
				Application Builder in blocks				
				<button onclick="myFunction('Demo2')" class="w3-button  w3-left-align ">
					DB Definition								
				</button>
				<button onclick="myFunction('Demo1')" class="w3-button  w3-left-align ">
					Application Definition
				</button>
				<button onclick="myFunction('Demo3')" class="w3-button  w3-left-align ">
					Layout Builder
				</button>
				<button onclick="myFunction('Demo4')" class="w3-button  w3-left-align ">
					Datasource
				</button>				
				<button onclick="myFunction('Demo7')" class="w3-button  w3-left-align ">
					Build Page
				</button>				
				<button onclick="myFunction('Demo8')" class="w3-button  w3-left-align ">
					Define ACL
				</button>				
				<button onclick="myFunction('Demo3')" class="w3-button  w3-left-align ">
					Build Routes
				</button>
			</div>
		</div>
	</div>
	<div class="w3-row">
			&nbsp;
	</div>
	<div class="w3-row">
			<div class="w3-col m2 l2">
				<div class="w3-bar-block w3-cyan" id="leftNav">
						
				</div>
			</div>
			<div class="w3-col m10 l10">
					<div id="Demo1" class="w3-hide w3-container">
						<p>Application Definition, Description, Select DBs to be used</p>						
						<div class="w3-container w3-red w3-cell">
							<p>Application Definition</p>
						</div>
						<div class="w3-container w3-green w3-cell">
							<p>DB Selection</p>
						</div>
						<div class="w3-container w3-yellow w3-cell">
							<p>Table Selection</p>
						</div>
						<p>{application_id, application_name, application_type, application_brief, application_description, insert_time, update_time}
								{link_id, database_id, application_id, inserted_on, updated_on}</p>
					</div>
					<div id="Demo2" class="w3-hide w3-container">
						<p>Create a New DB, Create Tables with constraints</p>
							<div class="w3-container w3-red w3-cell">
								<p>Database Definition</p>
							</div>
							<div class="w3-container w3-green w3-cell">
								<p>Table Definition</p>
							</div>
							<div class="w3-container w3-yellow w3-cell">
								<p>Table Constraints</p>
							</div>
						<p>
							ab_database{database_id, database_name, user_name, password, database_description, {application_id}, creation_date, updation_date},
							ab_db_table_fields{field_id, field_name, table_id, type, collation, key_type, col_null, col_default, extra, privilages, comment, last_update, creation_date},
							ab_table{table}{pending},
							ab_table_constraints{constraints}{pending}							
						</p>
					</div>
					<div id="Demo3" class="w3-hide w3-container">
						<p>Only container divs with their classes/define form layout/tabbed layout/ ...</p>
						<div class="w3-container w3-green w3-cell">
							<p>Select CSS Framework</p>
							<p>Select Block Element</p>
							<p>Style Block Element</p>
							<p>Add Block Class</p>
							<p>Create Element</p>
							<p>Block level CSS effects</p>
						</div>
						<div class="w3-container w3-yellow w3-cell">
							<p>Select added element from tree, add child element</p>
						</div>
						<p>
							{tree structure, self referencing table, container element, container element properties, child element},
							cg_pg_layout{
								layout_id, layout_name, application_id, layout_definition{json}, description, inserted_on, update_on 
							}
						</p>						
					</div>
					<div id="Demo4" class="w3-hide w3-container">
						<p>Define datasource/map data to layout/define events/styles</p>
						<div class="w3-container w3-red w3-cell">
							<p>Define Form to layout</p>
							<p>Field to html, field ordering</p>
						</div>
						<div class="w3-container w3-green w3-cell">
							<p>Define Query</p>
							<p>Selection string to html</p>
						</div>
						<div class="w3-container w3-yellow w3-cell">
							<p>Other</p>
						</div>
						<p>
							{define form, define query}{select tables/fields from list}{linked masters},
							cg_datasource{datasource_id, {datasource_type_id}, datasource_name, application_id, desciption, datasource_definition{json}, inserted_on, update_on},
							cg_datasource_type{pending},
							directly build layout from layout, don't link, have layout id in the definition
						</p>
					</div>
					<div id="Demo5" class="w3-hide w3-container">
						<p>Build Page/Define Page actions{event, server}{CRUD/Workflow -> session}{Page does not contain routes, header|leftnav}</p>
						<p>Datasources, layout</p>
					</div>
					<div id="Demo7" class="w3-hide w3-container">
						<p>Define ACL on each db/page/element/field/add acl module to application</p>
					</div>
					<div id="Demo8" class="w3-hide w3-container">
						<p>Map header/leftnav/footer to page</p>
					</div>
			</div>
	</div>
	<div id="table_div" class="w3-container">
		
	</div>
</div>
<script>
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
</body>
</html>