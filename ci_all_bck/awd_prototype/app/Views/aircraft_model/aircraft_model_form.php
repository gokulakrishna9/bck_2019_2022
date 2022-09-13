<?= form_open('add_aircraft_model', 'class="row g-3" id="'.$form_id.'"') ?>
  <div class="col-md-4">
    <label for="" class="form-label">Aircraft Model</label>
    <input type="text" class="form-control" name="aircraft_model" id="aircraft_model">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Aircraft Manufacturer</label>
    <input type="text" class="form-control" name="manufacturer_name" id="manufacturer_name">
    <input type="hidden" class="form-control" name="manufacturer_id" id="manufacturer_id">
  </div>
  <div class="col-md-12">
    <label class="form-label">&nbsp;</label> <br />
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
<?= form_close() ?>