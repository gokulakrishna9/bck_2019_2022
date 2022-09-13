<?php
$am = '';
$amid = '';
$mfn = '';
$mfid = '';
if(isset($aircraft_model)) {
  if(property_exists($aircraft_model, 'aircraft_model')) {
    $am = $aircraft_model->aircraft_model;
  }
  if(property_exists($aircraft_model, 'aircraft_model_id')) {
    $amid = $aircraft_model->aircraft_model_id;
  }
  if(property_exists($aircraft_model, 'manufacturer_name')) {
    $mfn = $aircraft_model->manufacturer_name;
  }
  if(property_exists($aircraft_model, 'manufacturer_id')) {
    $mfid = $aircraft_model->manufacturer_id;
  }
}
?>
<?= form_open('add_aircraft_model', 'class="row g-3" id="'.$form_id.'"') ?>
  <div class="col-md-4">
    <label for="" class="form-label">Aircraft Model</label>
    <input type="text" class="form-control" name="aircraft_model" id="aircraft_model" value="<?= $am ?>">
    <input type="hidden" class="form-control" name="aircraft_model_id" id="aircraft_model_id" value="<?= $amid ?>">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Aircraft Manufacturer</label>
    <input type="text" class="form-control" name="manufacturer_name" id="manufacturer_name"  value="<?= $mfn ?>">
    <input type="hidden" class="form-control" name="manufacturer_id" id="manufacturer_id"  value="<?= $mfid ?>">
  </div>
  <div class="col-md-12">
    <label class="form-label">&nbsp;</label> <br />
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
<?= form_close() ?>