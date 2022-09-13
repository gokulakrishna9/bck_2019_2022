<?= form_open('add_manufacturer_type', 'class="row g-3" id="awd_form"') ?>
    <div class="col-md-6">
    <label for="" class="form-label">Manufacturer Type</label>
    <input type="text" class="form-control" id="manufacturer_type" name="manufacturer_type" placeholder="Manufacturer Type">
  </div>
  <div class="col-md-12">
    <label class="form-label">&nbsp;</label> <br />
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
<?= form_close() ?>