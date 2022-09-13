<?php
  $mf_n = '';
  $mf_t_id = '';
  $mf_t_lbl = '';
  $mf_id = '';
  if(isset($manufacturer)) {
    if(property_exists($manufacturer, 'manufacturer_name')) {
      $mf_n = $manufacturer->manufacturer_name;
    }
    if(property_exists($manufacturer, 'manufacturer_type')) {
      $mf_t_lbl = $manufacturer->manufacturer_type;
    }
    if(property_exists($manufacturer, 'manufacturer_type_id')) {
      $mf_t_id = $manufacturer->manufacturer_type_id;
    }
    if(property_exists($manufacturer, 'manufacturer_id')) {
      $mf_id = $manufacturer->manufacturer_id;
    }
  }
?>
<?= form_open("$form_action", 'class="row g-3" id="'.$form_id.'"') ?>
<form id="<?= $form_id ?>" class="row g-3">
  <div class="col-md-6">
    <label for="" class="form-label">Manufacturer Name</label>
    <input type="text" class="form-control" name="manufacturer_name" id="manufacturer_name" value="<?= $mf_n ?>">
    <input type="hidden" class="form-control" name="manufacturer_id" id="manufacturer_id" value="<?= $mf_id ?>">
  </div>
    <div class="col-md-6">
    <label for="" class="form-label">Manufacturer Type</label>
    <input type="text" class="form-control" name="manufacturer_type" id="manufacturer_type" value="<?= $mf_t_lbl ?>">
    <input type="hidden" class="form-control" name="prev_manufacturer_type_list" id="prev_manufacturer_type_list" value="<?= $mf_t_id ?>">
    <input type="hidden" class="form-control" name="manufacturer_type_id" id="manufacturer_type_id" value="<?= $mf_t_id ?>">
  </div>
  <div class="col-md-12">
    <label class="form-label">&nbsp;</label> <br />
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
<?= form_close() ?>