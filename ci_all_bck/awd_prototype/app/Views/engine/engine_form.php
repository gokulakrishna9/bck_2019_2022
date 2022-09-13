<?= form_open('add_engine', 'class="row g-3" id="'.$form_id.'"') ?>
    <div class="col-md-4">
        <label for="" class="form-label">Engine Serial Number</label>
        <input type="text" class="form-control" name="engine_serial_number" id="engine_serial_number">
    </div>
    <div class="col-md-4">
        <label for="" class="form-label">Manufacturer</label>
        <input type="text" class="form-control" name="manfuaturer_name" id="manufacturer_name">
        <input type="hidden" class="form-control" name="manufacturer_id" id="manufacturer_id">
    </div>
    <div class="col-md-4">
        <label for="" class="form-label">Model</label>
        <input type="text" class="form-control" name="engine_model" id="engine_model">
        <input type="hidden" class="form-control" name="engine_model_id" id="engine_model_id">
    </div>
    <div class="col-md-4">
        <label for="" class="form-label">Type</label>
        <input type="text" class="form-control" name="engine_type" id="engine_type">
        <input type="hidden" class="form-control" name="engine_type_id" id="engine_type_id">
    </div>
    <div class="col-md-12">
        <label class="form-label">&nbsp;</label> <br />
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
<?= form_close() ?>