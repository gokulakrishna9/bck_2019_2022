<?php
$et = '';
$em = '';
$em_id = '';
$et_pk = '';
if(isset($engine_type)) {
  if(property_exists($engine_type, 'engine_type')) {
    $et = $engine_type->engine_type;
  }
  if(property_exists($engine_type, 'engine_model')) {
    $em = $engine_type->engine_model;
  }
  if(property_exists($engine_type, 'engine_model_id')) {
    $em_id = $engine_type->engine_model_id;
  }
  if(property_exists($engine_type, 'engine_type_id')) {
    $et_pk = $engine_type->engine_type_id;
  }
}
?>
<?= form_open('add_engine_type', 'class="row g-3" id="'.$form_id.'"') ?>
  <div class="col-md-4">
    <label for="" class="form-label">Engine Type</label>
    <input type="text" class="form-control" name="engine_type" value="<?= $et ?>" id="engine_type">
    <input type="hidden" class="form-control" name="engine_type_id" value="<?= $et_pk ?>" id="engine_type">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Engine Model</label>
    <input type="text" class="form-control" name="engine_model" value="<?= $em ?>" id="engine_model">
    <input type="hidden" class="form-control" name="engine_model_id" value="<?= $em_id ?>" id="engine_model_id">
  </div>
  <div class="col-md-12">
    <label class="form-label">&nbsp;</label> <br />
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
<?= form_close() ?>