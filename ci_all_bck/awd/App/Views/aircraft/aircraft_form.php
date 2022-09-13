<?php
$arid = '';
$asn = '';
$mn = '';
$mnid = '';
$am = '';
$amid = '';
$at = '';
$atid = '';
if(isset($aircraft)) {
  if(property_exists($aircraft, 'aircraft_serial_number')) {
    $asn = $aircraft->aircraft_serial_number;
  }
  if(property_exists($aircraft, 'aircraft_id')) {
    $arid = $aircraft->aircraft_id;
  }
  if(property_exists($aircraft, 'manufacturer_name')) {
    $mn = $aircraft->manufacturer_name;
  }
  if(property_exists($aircraft, 'manufacturer_id')) {
    $mnid = $aircraft->manufacturer_id;
  }
  if(property_exists($aircraft, 'aircraft_model')) {
    $am = $aircraft->aircraft_model;
  }
  if(property_exists($aircraft, 'aircraft_model_id')) {
    $amid = $aircraft->aircraft_model_id;
  }
  if(property_exists($aircraft, 'aircraft_type')) {
    $at = $aircraft->aircraft_type;
  }
  if(property_exists($aircraft, 'aircraft_type_id')) {
    $atid = $aircraft->aircraft_type_id;
  }
}
?>
<?= form_open("$form_action", 'class="row g-3" id="' . $form_id . '"') ?>
<div class="col-md-4">
  <label for="" class="form-label">Serial Number</label>
  <input type="text" class="form-control" name="aircraft_serial_number" id="aircraft_serial_number" value="<?= $asn ?>">
  <input type="hidden" class="form-control" name="aircraft_id" id="aircraft_id" value="<?= $arid ?>">
</div>
<div class="col-md-4">
  <label for="" class="form-label">Manufacturer</label>
  <input type="text" class="form-control" name="manufacturer_name" id="manufacturer_name" value="<?= $mn ?>">
  <input type="hidden" class="form-control" name="manufacturer_id" id="manufacturer_id" value="<?= $mnid ?>">
</div>
<div class="col-md-4">
  <label for="" class="form-label">Model</label>
  <input type="text" class="form-control" name="aircraft_model" id="aircraft_model" value="<?= $am ?>">
  <input type="hidden" class="form-control" name="aircraft_model_id" id="aircraft_model_id" value="<?= $amid ?>">
</div>
<div class="col-md-4">
  <label for="" class="form-label">Type</label>
  <input type="text" class="form-control" name="aircraft_type" id="aircraft_type"  value="<?= $at ?>">
  <input type="hidden" class="form-control" name="aircraft_type_id" id="aircraft_type_id" value="<?= $atid ?>">
</div>
<div class="col-md-12">
  <label class="form-label">&nbsp;</label> <br />
  <button type="submit" class="btn btn-primary">Save</button>
</div>
</form>