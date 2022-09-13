<?php 
$eid = '';
$e_s_n = ' ';
$mn = '';
$mid = '';
$em = '';
$emid = '';
$et = '';
$etid = '';
if(isset($engine)) {
  if(property_exists($engine, 'engine_serial_number')) {
    $e_s_n = $engine->engine_serial_number;
  }
  if(property_exists($engine, 'engine_id')) {
    $eid = $engine->engine_id;
  }
  if(property_exists($engine, 'manufacturer_name')) {
    $mn = $engine->manufacturer_name;
  }
  if(property_exists($engine, 'manufacturer_id')) {
    $mid = $engine->manufacturer_id;
  }
  if(property_exists($engine, 'engine_model')) {
    $em = $engine->engine_model;
  }
  if(property_exists($engine, 'engine_model_id')) {
    $emid = $engine->engine_model_id;
  }
  if(property_exists($engine, 'engine_type')) {
    $et = $engine->engine_type;
  }
  if(property_exists($engine, 'engine_type_id')) {
    $etid = $engine->engine_type_id;
  }
}
?>
<?= form_open('add_engine', 'class="row g-3" id="' . $form_id . '"') ?>
<div class="col-md-4">
  <label for="" class="form-label">Engine Serial Number</label>
  <input type="text" class="form-control" name="engine_serial_number" id="engine_serial_number" value="<?= $e_s_n ?>">
  <input type="hidden" class="form-control" name="engine_id" id="engine_id" value="<?= $eid ?>">
</div>
<div class="col-md-4">
  <label for="" class="form-label">Manufacturer</label>
  <input type="text" class="form-control" name="manufacturer_name" id="manufacturer_name" value="<?= $mn ?>">
  <input type="hidden" class="form-control" name="manufacturer_id" id="manufacturer_id" value="<?= $mid ?>">
</div>
<div class="col-md-4">
  <label for="" class="form-label">Model</label>
  <input type="text" class="form-control" name="engine_model" id="engine_model" value="<?= $em ?>">
  <input type="hidden" class="form-control" name="engine_model_id" id="engine_model_id" value="<?= $emid ?>">
</div>
<div class="col-md-4">
  <label for="" class="form-label">Type</label>
  <input type="text" class="form-control" name="engine_type" id="engine_type" value="<?= $et ?>">
  <input type="hidden" class="form-control" name="engine_type_id" id="engine_type_id" value="<?= $etid ?>">
</div>
<div class="col-md-12">
  <label class="form-label">&nbsp;</label> <br />
  <button type="submit" class="btn btn-primary">Save</button>
</div>
<?= form_close() ?>