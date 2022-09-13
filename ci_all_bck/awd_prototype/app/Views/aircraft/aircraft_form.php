<?= form_open('add_aircraft', 'class="row g-3" id="'.$form_id.'"') ?>
    <div class="col-md-4">
        <label for="" class="form-label">Serial Number</label>
        <input type="text" class="form-control" name="aircraft_serial_number" id="aircraft_serial_number">
    </div>
    <div class="col-md-4">
        <label for="" class="form-label">Manufacturer</label>
        <input type="text" class="form-control" name="manufacturer_name" id="manufacturer_name">
        <input type="hidden" class="form-control" name="manufacturer_id" id="manufacturer_id">
    </div>
    <div class="col-md-4">
        <label for="" class="form-label">Model</label>
        <input type="text" class="form-control" name="aircraft_model" id="aircraft_model">
        <input type="hidden" class="form-control" name="aircraft_model_id" id="aircraft_model_id">
    </div>
    <div class="col-md-4">
        <label for="" class="form-label">Type</label>
        <input type="text" class="form-control" name="aircraft_type" id="aircraft_type">
        <input type="hidden" class="form-control" name="aircraft_type_id" id="aircraft_type_id">
    </div>
    <div class="col-md-12">
        <label class="form-label">&nbsp;</label> <br />
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>