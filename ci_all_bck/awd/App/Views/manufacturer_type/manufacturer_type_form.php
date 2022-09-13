<?php
$mf_t;
if (isset($manufacturer_type_record) && property_exists($manufacturer_type_record, 'manufacturer_type')) {
  $mf_t = $manufacturer_type_record->manufacturer_type;
} else {
  $mf_t = '';
}
?>

<?php
$mf_t_id;
if (isset($manufacturer_type_record) && property_exists($manufacturer_type_record, 'manufacturer_type_id')) {
  $mf_t_id = $manufacturer_type_record->manufacturer_type_id;
} else {
  $mf_t_id = '';
} 
?>

<?= form_open("$form_action", 'class="row g-3" id="awd_form"') ?>
<div class="col-md-6">
  <label for="" class="form-label">Manufacturer Type</label>
  <input type="text" class="form-control" value="<?= $mf_t ?>" id="manufacturer_type" name="manufacturer_type" placeholder="Manufacturer Type">
  <input type="hidden" class="form-control" value="<?= $mf_t_id ?>" id="manufacturer_type_id" name="manufacturer_type_id" placeholder="Manufacturer Type">
</div>
<div class="col-md-12">
  <label class="form-label">&nbsp;</label> <br />
  <button type="submit" class="btn btn-primary">Save</button>
</div>
<?= form_close() ?>