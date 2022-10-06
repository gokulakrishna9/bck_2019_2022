<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="nav flex-column">
      <a class="nav-link active" href="#">Active</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-12">
          Left Nav
        </div>
        <div class="col-md-9 col-sm-12">
          <!-- Form -->
            <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="blood_group">Blood Group</label>
      <input type="text" class="form-control" name="blood_group" value="<?php echo $input_data->blood_group; ?>" id="blood_group">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="patient_age">Patient Age</label>
      <input type="text" class="form-control" name="patient_age" value="<?php echo $input_data->patient_age; ?>" id="patient_age">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="patient_gender">Patient Gender</label>
      <input type="text" class="form-control" name="patient_gender" value="<?php echo $input_data->patient_gender; ?>" id="patient_gender">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="rdp_units">Rdp Units</label>
      <input type="text" class="form-control" name="rdp_units" value="<?php echo $input_data->rdp_units; ?>" id="rdp_units">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="referred_by_doctor">Referred By Doctor</label>
      <input type="text" class="form-control" name="referred_by_doctor" value="<?php echo $input_data->referred_by_doctor; ?>" id="referred_by_doctor">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="request_status">Request Status</label>
      <input type="text" class="form-control" name="request_status" value="<?php echo $input_data->request_status; ?>" id="request_status">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="bloodbank_id">Bloodbank Id</label>
      <input type="number" class="form-control" name="bloodbank_id" value="<?php echo $input_data->bloodbank_id; ?>" id="bloodbank_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="cryoprecipitate_units">Cryoprecipitate Units</label>
      <input type="number" class="form-control" name="cryoprecipitate_units" value="<?php echo $input_data->cryoprecipitate_units; ?>" id="cryoprecipitate_units">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="ffp_units">Ffp Units</label>
      <input type="number" class="form-control" name="ffp_units" value="<?php echo $input_data->ffp_units; ?>" id="ffp_units">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="fp_units">Fp Units</label>
      <input type="number" class="form-control" name="fp_units" value="<?php echo $input_data->fp_units; ?>" id="fp_units">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="packed_cell_units">Packed Cell Units</label>
      <input type="number" class="form-control" name="packed_cell_units" value="<?php echo $input_data->packed_cell_units; ?>" id="packed_cell_units">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="patient_type">Patient Type</label>
      <input type="number" class="form-control" name="patient_type" value="<?php echo $input_data->patient_type; ?>" id="patient_type">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="platelet_concentrate_units">Platelet Concentrate Units</label>
      <input type="number" class="form-control" name="platelet_concentrate_units" value="<?php echo $input_data->platelet_concentrate_units; ?>" id="platelet_concentrate_units">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="prp_units">Prp Units</label>
      <input type="number" class="form-control" name="prp_units" value="<?php echo $input_data->prp_units; ?>" id="prp_units">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="request_hospital_id">Request Hospital Id</label>
      <input type="number" class="form-control" name="request_hospital_id" value="<?php echo $input_data->request_hospital_id; ?>" id="request_hospital_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="whole_blood_units">Whole Blood Units</label>
      <input type="number" class="form-control" name="whole_blood_units" value="<?php echo $input_data->whole_blood_units; ?>" id="whole_blood_units">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="request_id" value="<?php echo $input_data->request_id; ?>" id="request_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_id">Description</label>
      <?php foreach($hospital as $record){ ?>
      <select class="form-control" name="hospital_id" id="hospital_id">
      <option value="<?php echo $record->hospital_id; ?>" <?php if($input_data->hospital_id == $record->hospital_id) echo 'selected'; ?>><?php echo $record->description; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_id">Address</label>
      <?php foreach($staff_previous_hospital as $record){ ?>
      <select class="form-control" name="hospital_id" id="hospital_id">
      <option value="<?php echo $record->hospital_id; ?>" <?php if($input_data->hospital_id == $record->hospital_id) echo 'selected'; ?>><?php echo $record->address; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="patient_id">Age</label>
      <?php foreach($bb_external_patient as $record){ ?>
      <select class="form-control" name="patient_id" id="patient_id">
      <option value="<?php echo $record->patient_id; ?>" <?php if($input_data->patient_id == $record->patient_id) echo 'selected'; ?>><?php echo $record->age; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="patient_id">Address</label>
      <?php foreach($patient as $record){ ?>
      <select class="form-control" name="patient_id" id="patient_id">
      <option value="<?php echo $record->patient_id; ?>" <?php if($input_data->patient_id == $record->patient_id) echo 'selected'; ?>><?php echo $record->address; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="staff_id">Account Name</label>
      <?php foreach($staff as $record){ ?>
      <select class="form-control" name="staff_id" id="staff_id">
      <option value="<?php echo $record->staff_id; ?>" <?php if($input_data->staff_id == $record->staff_id) echo 'selected'; ?>><?php echo $record->account_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="visit_id">Brought By</label>
      <?php foreach($mlc as $record){ ?>
      <select class="form-control" name="visit_id" id="visit_id">
      <option value="<?php echo $record->visit_id; ?>" <?php if($input_data->visit_id == $record->visit_id) echo 'selected'; ?>><?php echo $record->brought_by; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="visit_id">Arrival Mode</label>
      <?php foreach($patient_visit as $record){ ?>
      <select class="form-control" name="visit_id" id="visit_id">
      <option value="<?php echo $record->visit_id; ?>" <?php if($input_data->visit_id == $record->visit_id) echo 'selected'; ?>><?php echo $record->arrival_mode; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="department">Department</label>
      <textarea class="form-control" name="department" id="department" rows="3"><?php echo $input_data->department; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="patient_name">Patient Name</label>
      <textarea class="form-control" name="patient_name" id="patient_name" rows="3"><?php echo $input_data->patient_name; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="ward_unit">Ward Unit</label>
      <textarea class="form-control" name="ward_unit" id="ward_unit" rows="3"><?php echo $input_data->ward_unit; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Blood Group</th>
        <th scope="col">Blood Transfusion Required</th>
        <th scope="col">Bloodbank Id</th>
        <th scope="col">Cryoprecipitate Units</th>
        <th scope="col">Department</th>
        <th scope="col">Diagnosis</th>
        <th scope="col">Ffp Units</th>
        <th scope="col">Fp Units</th>
        <th scope="col">Hospital Id</th>
        <th scope="col">Packed Cell Units</th>
        <th scope="col">Patient Age</th>
        <th scope="col">Patient Gender</th>
        <th scope="col">Patient Id</th>
        <th scope="col">Patient Name</th>
        <th scope="col">Patient Type</th>
        <th scope="col">Platelet Concentrate Units</th>
        <th scope="col">Prp Units</th>
        <th scope="col">Rdp Units</th>
        <th scope="col">Referred By Doctor</th>
        <th scope="col">Request Date</th>
        <th scope="col">Request Hospital Id</th>
        <th scope="col">Request Status</th>
        <th scope="col">Request Type</th>
        <th scope="col">Staff Id</th>
        <th scope="col">Visit Id</th>
        <th scope="col">Ward Unit</th>
        <th scope="col">Whole Blood Units</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($blood_request) > 0){
            forEach($blood_request as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->blood_group; ?></td>
                    <td><?php echo $record->blood_transfusion_required; ?></td>
                    <td><?php echo $record->bloodbank_id; ?></td>
                    <td><?php echo $record->cryoprecipitate_units; ?></td>
                    <td><?php echo $record->department; ?></td>
                    <td><?php echo $record->diagnosis; ?></td>
                    <td><?php echo $record->ffp_units; ?></td>
                    <td><?php echo $record->fp_units; ?></td>
                    <td><?php echo $record->hospital_id; ?></td>
                    <td><?php echo $record->packed_cell_units; ?></td>
                    <td><?php echo $record->patient_age; ?></td>
                    <td><?php echo $record->patient_gender; ?></td>
                    <td><?php echo $record->patient_id; ?></td>
                    <td><?php echo $record->patient_name; ?></td>
                    <td><?php echo $record->patient_type; ?></td>
                    <td><?php echo $record->platelet_concentrate_units; ?></td>
                    <td><?php echo $record->prp_units; ?></td>
                    <td><?php echo $record->rdp_units; ?></td>
                    <td><?php echo $record->referred_by_doctor; ?></td>
                    <td><?php echo $record->request_date; ?></td>
                    <td><?php echo $record->request_hospital_id; ?></td>
                    <td><?php echo $record->request_status; ?></td>
                    <td><?php echo $record->request_type; ?></td>
                    <td><?php echo $record->staff_id; ?></td>
                    <td><?php echo $record->visit_id; ?></td>
                    <td><?php echo $record->ward_unit; ?></td>
                    <td><?php echo $record->whole_blood_units; ?></td>
                </tr>
            <?php }} ?>
        </tbody>
  </table>
        </div>
      </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>