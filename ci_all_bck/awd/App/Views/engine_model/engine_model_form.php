<?php
$eng_model = '';
$engine_model_id = '';
$manufacturer = '';
$manufacturer_id = '';
if(isset($engine_model)) {
  if(property_exists($engine_model, 'engine_model')) {
    $eng_model = $engine_model->engine_model;
  }
  if(property_exists($engine_model, 'engine_model_id')) {
    $engine_model_id = $engine_model->engine_model_id;
  }
  if(property_exists($engine_model, 'manufacturer_name')) {
    $manufacturer = $engine_model->manufacturer_name;
  }
  if(property_exists($engine_model, 'manufacturer_id')) {
    $manufacturer_id = $engine_model->manufacturer_id;
  }
}
?>
<?= form_open('add_engine_model', 'class="row g-3" id="'.$form_id.'"') ?>
  <div class="col-md-4">
    <label for="" class="form-label">Engine Model</label>
    <input type="text" class="form-control" name="engine_model" id="engine_model" value="<?= $eng_model ?>">
    <input type="hidden" class="form-control" name="engine_model_id" id="engine_model_id" value="<?= $engine_model_id ?>">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Manufacturer</label>
    <input type="text" class="form-control" name="manufacturer_name" id="manufacturer_name" value="<?= $manufacturer ?>">
    <input type="hidden" class="form-control" name="manufacturer_id" id="manufacturer_id" value="<?= $manufacturer_id ?>">
  </div>
  <div class="col-md-12">
    <label class="form-label">&nbsp;</label> <br />
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
<?= form_close() ?>