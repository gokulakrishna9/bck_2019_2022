<?= form_open('add_manufacturer', 'class="row g-3" id="'.$form_id.'"') ?>
<form id="<?= $form_id ?>" class="row g-3">
  <div class="col-md-6">
    <label for="" class="form-label">Manufacturer Name</label>
    <input type="text" class="form-control" name="manufacturer_name" id="manufacturer_name">
  </div>
    <div class="col-md-6">
    <label for="" class="form-label">Manufacturer Type</label>
    <input type="text" class="form-control" name="manufacturer_type" id="manufacturer_type">
    <input type="hidden" class="form-control" name="manufacturer_type_id" id="manufacturer_type_id">
  </div>
  <div class="col-md-12">
    <label class="form-label">&nbsp;</label> <br />
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
<?= form_close() ?>