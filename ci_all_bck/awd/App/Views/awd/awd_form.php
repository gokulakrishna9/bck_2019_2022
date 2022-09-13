<?php 
$ad_record_id = ''; $ad_number = ''; $subject = ''; $aviation_authority = ''; $aviation_authority_id = ''; 
$ad_type = ''; $ad_type_id=''; $issue_date = ''; $effective_date = ''; $supersedes_ad= ''; $superseded_by = ''; $aircraft_serial_number = ''; 
$aircraft_id = ''; $aircraft_model = ''; $aircraft_model_id = ''; $aircraft_type = ''; $aircraft_type_id = ''; 
$engine_serial_number = ''; $engine_id = ''; $engine_type = ''; $engine_type_id = ''; $engine_model = ''; 
$engine_model_id = ''; $applicance_name=''; $applicance_id = '';
if(isset($ad_record)) {
  if(property_exists($ad_record, 'ad_record_id')) {
    $mf_n = $ad_record->ad_record_id;
  }
  if(property_exists($ad_record, 'ad_number')) {
    $mf_n = $ad_record->ad_number;
  }
  if(property_exists($ad_record, 'subject')) {
    $mf_n = $ad_record->subject;
  }
  if(property_exists($ad_record, 'aviation_authority')) {
    $mf_n = $ad_record->aviation_authority;
  }
  if(property_exists($ad_record, 'aviation_authority_id')) {
    $mf_n = $ad_record->aviation_authority_id;
  }
  if(property_exists($ad_record, 'ad_type')) {
    $mf_n = $ad_record->ad_type;
  }
  if(property_exists($ad_record, 'ad_type_id')) {
    $mf_n = $ad_record->ad_type_id;
  }
  if(property_exists($ad_record, 'issue_date')) {
    $mf_n = $ad_record->issue_date;
  }
  if(property_exists($ad_record, 'effective_date')) {
    $mf_n = $ad_record->effective_date;
  }
  if(property_exists($ad_record, 'supersedes')) {
    $mf_n = $ad_record->supersedes;
  }
  if(property_exists($ad_record, 'superseded_by')) {
    $mf_n = $ad_record->superseded_by;
  }
  if(property_exists($ad_record, 'aircraft_serial_number')) {
    $mf_n = $ad_record->aircraft_serial_number;
  }
  if(property_exists($ad_record, 'aircraft_model')) {
    $mf_n = $ad_record->aircraft_model;
  }
  if(property_exists($ad_record, 'aircraft_model_id')) {
    $mf_n = $ad_record->aircraft_model_id;
  }
  if(property_exists($ad_record, 'aircraft_type')) {
    $mf_n = $ad_record->aircraft_type;
  }
  if(property_exists($ad_record, 'aircraft_type_id')) {
    $mf_n = $ad_record->aircraft_type_id;
  }
  if(property_exists($ad_record, 'engine_serial_number')) {
    $mf_n = $ad_record->engine_serial_number;
  }
  if(property_exists($ad_record, 'engine_id')) {
    $mf_n = $ad_record->engine_id;
  }
  if(property_exists($ad_record, 'engine_type')) {
    $mf_n = $ad_record->engine_type;
  }
  if(property_exists($ad_record, 'engine_type_id')) {
    $mf_n = $ad_record->engine_type_id;
  }
  if(property_exists($ad_record, 'engine_model')) {
    $mf_n = $ad_record->engine_model;
  }
  if(property_exists($ad_record, 'engine_model_id')) {
    $mf_n = $ad_record->engine_model_id;
  }
  // Missing appliance
}
?>
<?= form_open('add_awd', 'class="row g-3" id="'.$form_id.'"') ?>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">AD Number</label>
    <input type="text" class="form-control" placeholder="AD Number" id="ad_number" name="ad_number" value="<?= $ad_number ?>">
    <input type="text" class="form-control" placeholder="AD Number" id="ad_record_id" name="ad_record_id" value="<?= $ad_record_id ?>">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">AD Type</label>
    <input type="text" class="form-control" placeholder="AD Number" id="ad_type" name="ad_type" value="<?= $ad_type ?>">
    <input type="hidden" class="form-control" placeholder="AD Number" id="ad_type_id" name="ad_type_id" value="<?= $ad_type_id ?>">
  </div>
  <div class="col-4">
    <label for="inputAddress" class="form-label">Issued By</label>
    <input type="text" class="form-control" placeholder="Issued By" id="aviation_authority" name="aviation_authority" value="<?= $aviation_authority ?>">
    <input type="hidden" class="form-control" placeholder="Issued By" id="aviation_authority_id" name="aviation_authority_id" value="<?= $aviation_authority_id ?>">
  </div>
  <div class="col-4">
    <label for="inputAddress2" class="form-label">Issue Date</label>
    <input type="text" class="form-control" placeholder="Issue Date" id="issue_date" name="issue_date" value="<?= $issue_date ?>">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Effective Date</label>
    <input type="text" class="form-control" placeholder="Effective Date" id="effective_date" name="effective_date" value="<?= $effective_date ?>">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Supersedes</label>
    <input type="text" class="form-control" placeholder="Supersedes" id="supersedes_ad" name="supersedes_ad" value="<?= $supersedes_ad ?>">
    <input type="hidden" class="form-control" placeholder="Supersedes" id="supersedes_ad" name="supersedes_ad" value="<?= $supersedes_ad ?>">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Superseded By</label>
    <input type="text" class="form-control" placeholder="Superseded By" id="superseded_by" name="superseded_by" value="<?= $superseded_by ?>">
    <input type="hidden" class="form-control" placeholder="Superseded By" id="superseded_by" name="superseded_by" value="<?= $superseded_by ?>">
  </div>
  <div class="col-md-8">
    <label for="inputCity" class="form-label">Subject</label>
    <input type="text" class="form-control" id="inputCity" placeholder="Subject" id="subject" name="subject" value="<?= $subject ?>">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Applicable Aircraft</label>
    <input type="text" class="form-control" placeholder="Applicable Aircraft" id="aircraft_serial_number" name="aircraft_serial_number" value="<?= $aircraft_serial_number ?>">
    <input type="hidden" class="form-control" id="aircraft_id" name="aircraft_id" value="<?= $aircraft_id ?>">
    <input type="hidden" class="form-control" id="prev_aircraft_list" name="prev_aircraft_list" value="<?= $aircraft_id ?>">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Applicable Aircraft Model</label>
    <input type="text" class="form-control" placeholder="Aircraft Models" id="aircraft_model" name="aircraft_model" value="<?= $aircraft_model ?>">
    <input type="hidden" class="form-control" placeholder="" id="aircraft_model_id" name="aircraft_model_id" value="<?= $aircraft_model_id ?>">
    <input type="hidden" class="form-control" placeholder="" id="prev_aircraft_model_list" name="prev_aircraft_model_list" value="<?= $aircraft_model_id ?>">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Applicable Aircraft Type</label>
    <input type="text" class="form-control" placeholder="Applicable Aircraft Type" id="aircraft_type" name="aircraft_type" value="<?= $aircraft_type ?>">
    <input type="hidden" class="form-control" id="aircraft_type_id" name="aircraft_type_id" value="<?= $aircraft_type_id ?>">
    <input type="hidden" class="form-control" id="prev_aircraft_type_list" name="prev_aircraft_type_list" value="<?= $aircraft_type_id ?>">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Applicable Engine</label>
    <input type="text" class="form-control" placeholder="Engine Models" id="engine_serial_number" name="engine_serial_number" value="<?= $engine_serial_number ?>">
    <input type="hidden" class="form-control" id="engine_id" name="engine_id" value="<?= $engine_id ?>">
    <input type="hidden" class="form-control" id="prev_engine_list" name="prev_engine_list" value="<?= $engine_id ?>">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Applicable Engine Model</label>
    <input type="text" class="form-control" placeholder="Engine Models" id="engine_model" name="engine_model" value="<?= $engine_model ?>">
    <input type="hidden" class="form-control" id="engine_model_id" name="engine_model_id" value="<?= $engine_model_id ?>">
    <input type="hidden" class="form-control" id="prev_engine_model_list" name="prev_engine_model_list" value="<?= $engine_model_id ?>">
  </div>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">Applicable Engine Type</label>
    <input type="text" class="form-control" id="engine_type" id="engine_type" name="engine_type" value="<?= $engine_type ?>">
    <input type="hidden" class="form-control" id="engine_type_id" name="engine_type_id" value="<?= $engine_type_id ?>"> 
    <input type="hidden" class="form-control" id="prev_engine_type_list" name="prev_engine_type_list" value="<?= $engine_type_id ?>">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Applicable Part Number</label>
    <input type="text" class="form-control" placeholder="Applicable Part Number(s)" id="appliance_name" name="applicance_name" value="<?= $applicance_name ?>">
    <input type="text" class="form-control" id="appliance_id" name="applicance_id" value="<?= $applicance_id ?>">
    <input type="text" class="form-control" id="prev_appliance_list" name="prev_appliance_list" value="<?= $applicance_id ?>">
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
