<?php
$ad_ty = '';
$ad_type_id = '';
if(isset($ad_type)) {
  if(property_exists($ad_type, 'ad_type_id')) {
    $ad_ty = $ad_type->ad_type_id;
  }
  if(property_exists($ad_type, 'ad_type')) {
    $ad_type_id = $ad_type->ad_type;
  }
}
?>
<?= form_open('add_adtype', 'class="row g-3" id="'.$form_id.'"') ?>
  <div class="col-md-6">
    <label for="" class="form-label">AD Type</label>
    <input type="text" class="form-control" name="ad_type" id="ad_type" value="<%= $ad_ty %>">
    <input type="hidden" class="form-control" name="ad_type" id="ad_type" value="<%= $ad_type_id %>">
  </div>
  <div class="col-md-6">
    <label class="form-label">&nbsp;</label> <br />
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
<?= form_close() ?>