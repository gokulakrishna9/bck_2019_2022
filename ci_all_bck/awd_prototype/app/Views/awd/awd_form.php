<?= form_open('add_awd', 'class="row g-3" id="'.$form_id.'"') ?>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">AD Number</label>
    <input type="text" class="form-control" placeholder="AD Number" id="ad_number" name="ad_number">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">AD Type</label>
    <input type="text" class="form-control" placeholder="AD Number" id="ad_type" name="ad_type">
    <input type="hidden" class="form-control" placeholder="AD Number" id="ad_type_id" name="ad_type_id">
  </div>
  <div class="col-4">
    <label for="inputAddress" class="form-label">Issued By</label>
    <input type="text" class="form-control" placeholder="Issued By" id="aviation_authority" name="aviation_authority">
    <input type="hidden" class="form-control" placeholder="Issued By" id="aviation_authority_id" name="aviation_authority_id">
  </div>
  <div class="col-4">
    <label for="inputAddress2" class="form-label">Issue Date</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Issue Date" id="issue_date" name="issue_date">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Effective Date</label>
    <input type="text" class="form-control" placeholder="Effective Date" id="effective_date" name="effective_date">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Supersedes</label>
    <input type="text" class="form-control" placeholder="Supersedes" id="supersedes_ad" name="supersedes_ad">
    <input type="hidden" class="form-control" placeholder="Supersedes" id="supersedes_ad_id" name="supersedes_ad_id">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Superseded By</label>
    <input type="text" class="form-control" placeholder="Superseded By" id="superseded_by" name="superseded_by">
    <input type="hidden" class="form-control" placeholder="Superseded By" id="superseded_by_id" name="superseded_by_id">
  </div>
  <div class="col-md-8">
    <label for="inputCity" class="form-label">Subject</label>
    <input type="text" class="form-control" id="inputCity" placeholder="Subject" id="subject" name="subject">
  </div>  
  <div class="col-md-4">
    <label for="inputState" class="form-label">Applicable Aircraft</label>
    <input type="text" class="form-control" placeholder="Applicable Aircraft/Engine Models" id="aircraft_serial_number" name="aircraft_serial_number">
    <input type="hidden" class="form-control" placeholder="Applicable Aircraft/Engine Models" id="aircraft_id" name="aircraft_id">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Applicable Aircraft Model</label>
    <input type="text" class="form-control" placeholder="Aircraft Models" id="aircraft_model" name="aircraft_model">
    <input type="hidden" class="form-control" placeholder="" id="aircraft_model_id" name="aircraft_model_id">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Applicable Aircraft Type</label>
    <input type="text" class="form-control" placeholder="Applicable Aircraft Type" id="aircraft_type" name="aircraft_type">
    <input type="hidden" class="form-control" placeholder="Applicable Aircraft Type" id="aircraft_type_id" name="aircraft_type_id">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Applicable Engine</label>
    <input type="text" class="form-control" placeholder="Applicable Aircraft/Engine Models" id="engine_serial_number" name="engine_serial_number">
    <input type="hidden" class="form-control" placeholder="Applicable Aircraft/Engine Models" id="engine_id" name="engine_id">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Applicable Engine Model</label>
    <input type="text" class="form-control" placeholder="Engine Models" id="engine_model" name="engine_model">
    <input type="hidden" class="form-control" placeholder="Engine Models" id="engine_model_id" name="engine_model_id">
  </div>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">Applicable Engine Type</label>
    <input type="text" class="form-control" id="inputZip" placeholder="Applicable Part Number(s)" id="engine_type" name="engine_type">
    <input type="hidden" class="form-control" id="inputZip" placeholder="Applicable Part Number(s)" id="engine_type_id" name="engine_type_id">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Applicable Part Number</label>
    <input type="text" class="form-control" placeholder="Applicable Part Number(s)" id="appliance_id" name="applicance_id">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Adopted by EASA</label>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">       <!-- Pending -->
    </div>
  </div>
  <div class="col-md-4">
    <label for="" class="form-check-label">Attachment</label>
    <input type="file" class="btn btn-info">    
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
<?= form_close() ?>
