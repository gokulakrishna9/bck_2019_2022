<?php
$at = '';
$atid = '';
$am = '';
$amid = '';
if(isset($aircraft_type)) {
  if(property_exists($aircraft_type, 'aircraft_type')) {
    $at = $aircraft_type->aircraft_type;
  }
  if(property_exists($aircraft_type, 'aircraft_type_id')) {
    $atid = $aircraft_type->aircraft_type_id;
  }
  if(property_exists($aircraft_type, 'aircraft_model')) {
    $am = $aircraft_type->aircraft_model;
  }
  if(property_exists($aircraft_type, 'aircraft_model_id')) {
    $amid = $aircraft_type->aircraft_model_id;
  }
}
?>
<?= form_open('add_aircraft_type', 'class="row g-3" id="'.$form_id.'"') ?>
  <div class="col-md-4">
    <label for="" class="form-label">Aircraft Type</label>
    <input type="text" class="form-control" name="aircraft_type" id="aircraft_type" value="<?= $at ?>">
    <input type="hidden" class="form-control" name="aircraft_type_id" id="aircraft_type_id" value="<?= $atid ?>">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Aircraft Model</label>
    <input type="text" class="form-control" name="aircraft_model" id="aircraft_model" value="<?= $am ?>">
    <input type="hidden" class="form-control" name="aircraft_model_id" id="aircraft_model_id" value="<?= $amid ?>">
  </div>
  <div class="col-md-12">
    <label class="form-label">&nbsp;</label> <br />
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
<?= form_close() ?>