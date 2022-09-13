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
      <label class="form-check-label" for="weight">Weight</label>
      <input type="text" class="form-control" name="weight" value="<?php echo $input_data->weight; ?>" id="weight">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hb">Hb</label>
      <input type="text" class="form-control" name="hb" value="<?php echo $input_data->hb; ?>" id="hb">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="sbp">Sbp</label>
      <input type="text" class="form-control" name="sbp" value="<?php echo $input_data->sbp; ?>" id="sbp">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="dbp">Dbp</label>
      <input type="text" class="form-control" name="dbp" value="<?php echo $input_data->dbp; ?>" id="dbp">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="temperature">Temperature</label>
      <input type="text" class="form-control" name="temperature" value="<?php echo $input_data->temperature; ?>" id="temperature">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="blood_unit_num">Blood Unit Num</label>
      <input type="text" class="form-control" name="blood_unit_num" value="<?php echo $input_data->blood_unit_num; ?>" id="blood_unit_num">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="segment_num">Segment Num</label>
      <input type="text" class="form-control" name="segment_num" value="<?php echo $input_data->segment_num; ?>" id="segment_num">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="bag_type">Bag Type</label>
      <input type="text" class="form-control" name="bag_type" value="<?php echo $input_data->bag_type; ?>" id="bag_type">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="pulse">Pulse</label>
      <input type="number" class="form-control" name="pulse" value="<?php echo $input_data->pulse; ?>" id="pulse">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="collected_by">Collected By</label>
      <input type="number" class="form-control" name="collected_by" value="<?php echo $input_data->collected_by; ?>" id="collected_by">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="donation_date">Donation Date</label>
      <input type="date" class="form-control" name="donation_date" value="<?php echo $input_data->donation_date; ?>" id="donation_date">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="donation_time">Donation Time</label>
      <input type="date" class="form-control" name="donation_time" value="<?php echo $input_data->donation_time; ?>" id="donation_time">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="donation_id" value="<?php echo $input_data->donation_id; ?>" id="donation_id">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="donor_id">Name</label>
      <?php foreach($blood_donor as $record){ ?>
      <select class="form-control" name="donor_id" id="donor_id">
      <option value="<?php echo $record->donor_id; ?>" <?php if($input_data->donor_id == $record->donor_id) echo 'selected'; ?>><?php echo $record->name; ?></option>
      <?php } ?>
      </select>
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="replacement_patient_id">Name</label>
      <?php foreach($bb_replacement_patient as $record){ ?>
      <select class="form-control" name="replacement_patient_id" id="replacement_patient_id">
      <option value="<?php echo $record->replacement_patient_id; ?>" <?php if($input_data->replacement_patient_id == $record->replacement_patient_id) echo 'selected'; ?>><?php echo $record->name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="status_id">Status</label>
      <?php foreach($bb_status as $record){ ?>
      <select class="form-control" name="status_id" id="status_id">
      <option value="<?php echo $record->status_id; ?>" <?php if($input_data->status_id == $record->status_id) echo 'selected'; ?>><?php echo $record->status; ?></option>
      <?php } ?>
      </select>
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="camp_id">Camp Name</label>
      <?php foreach($blood_donation_camp as $record){ ?>
      <select class="form-control" name="camp_id" id="camp_id">
      <option value="<?php echo $record->camp_id; ?>" <?php if($input_data->camp_id == $record->camp_id) echo 'selected'; ?>><?php echo $record->camp_name; ?></option>
      <?php } ?>
      </select>
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_id">Hospital</label>
      <?php foreach($hospital as $record){ ?>
      <select class="form-control" name="hospital_id" id="hospital_id">
      <option value="<?php echo $record->hospital_id; ?>" <?php if($input_data->hospital_id == $record->hospital_id) echo 'selected'; ?>><?php echo $record->hospital; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_id">Hospital Name</label>
      <?php foreach($staff_previous_hospital as $record){ ?>
      <select class="form-control" name="hospital_id" id="hospital_id">
      <option value="<?php echo $record->hospital_id; ?>" <?php if($input_data->hospital_id == $record->hospital_id) echo 'selected'; ?>><?php echo $record->hospital_name; ?></option>
      <?php } ?>
      </select>
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="status">Status</label>
      <textarea class="form-control" name="status" id="status" rows="3"><?php echo $input_data->status; ?></textarea>
    </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Donor Id</th>
        <th scope="col">Replacement Patient Id</th>
        <th scope="col">Weight</th>
        <th scope="col">Pulse</th>
        <th scope="col">Hb</th>
        <th scope="col">Sbp</th>
        <th scope="col">Dbp</th>
        <th scope="col">Temperature</th>
        <th scope="col">Blood Unit Num</th>
        <th scope="col">Segment Num</th>
        <th scope="col">Bag Type</th>
        <th scope="col">Collected By</th>
        <th scope="col">Donation Date</th>
        <th scope="col">Status</th>
        <th scope="col">Status Id</th>
        <th scope="col">Camp Id</th>
        <th scope="col">Hospital Id</th>
        <th scope="col">Screening Result</th>
        <th scope="col">Donation Time</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($bb_donation) > 0){
            forEach($bb_donation as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->donor_id; ?></td>
                    <td><?php echo $record->replacement_patient_id; ?></td>
                    <td><?php echo $record->weight; ?></td>
                    <td><?php echo $record->pulse; ?></td>
                    <td><?php echo $record->hb; ?></td>
                    <td><?php echo $record->sbp; ?></td>
                    <td><?php echo $record->dbp; ?></td>
                    <td><?php echo $record->temperature; ?></td>
                    <td><?php echo $record->blood_unit_num; ?></td>
                    <td><?php echo $record->segment_num; ?></td>
                    <td><?php echo $record->bag_type; ?></td>
                    <td><?php echo $record->collected_by; ?></td>
                    <td><?php echo $record->donation_date; ?></td>
                    <td><?php echo $record->status; ?></td>
                    <td><?php echo $record->status_id; ?></td>
                    <td><?php echo $record->camp_id; ?></td>
                    <td><?php echo $record->hospital_id; ?></td>
                    <td><?php echo $record->screening_result; ?></td>
                    <td><?php echo $record->donation_time; ?></td>
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