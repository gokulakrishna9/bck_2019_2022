<?= form_open('add_engine_model', 'class="row g-3" id="'.$form_id.'"') ?>
  <div class="col-md-4">
    <label for="" class="form-label">Engine Model</label>
    <input type="text" class="form-control" name="engine_model" id="engine_model">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Manufacturer</label>
    <input type="text" class="form-control" name="manufacturer_name" id="manufacturer_name">
    <input type="hidden" class="form-control" name="manufacturer_id" id="manufacturer_id">
  </div>
  <div class="col-md-12">
    <label class="form-label">&nbsp;</label> <br />
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
<?= form_close() ?>