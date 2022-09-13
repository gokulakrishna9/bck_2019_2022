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
      <label class="form-check-label" for="screened_by">Screened By</label>
      <input type="number" class="form-control" name="screened_by" value="<?php echo $input_data->screened_by; ?>" id="screened_by">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="screening_id" value="<?php echo $input_data->screening_id; ?>" id="screening_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="donation_id">Weight</label>
      <?php foreach($bb_donation as $record){ ?>
      <select class="form-control" name="donation_id" id="donation_id">
      <option value="<?php echo $record->donation_id; ?>" <?php if($input_data->donation_id == $record->donation_id) echo 'selected'; ?>><?php echo $record->weight; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_id">Hospital</label>
      <?php foreach($hospital as $record){ ?>
      <select class="form-control" name="hospital_id" id="hospital_id">
      <option value="<?php echo $record->hospital_id; ?>" <?php if($input_data->hospital_id == $record->hospital_id) echo 'selected'; ?>><?php echo $record->hospital; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_id">Hospital Name</label>
      <?php foreach($staff_previous_hospital as $record){ ?>
      <select class="form-control" name="hospital_id" id="hospital_id">
      <option value="<?php echo $record->hospital_id; ?>" <?php if($input_data->hospital_id == $record->hospital_id) echo 'selected'; ?>><?php echo $record->hospital_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Donation Id</th>
        <th scope="col">Test Hiv</th>
        <th scope="col">Test Hbsag</th>
        <th scope="col">Test Hcv</th>
        <th scope="col">Test Vdrl</th>
        <th scope="col">Test Mp</th>
        <th scope="col">Test Irregular Ab</th>
        <th scope="col">Screening Result</th>
        <th scope="col">Screening Datetime</th>
        <th scope="col">Screened By</th>
        <th scope="col">Hospital Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($blood_screening) > 0){
            forEach($blood_screening as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->donation_id; ?></td>
                    <td><?php echo $record->test_hiv; ?></td>
                    <td><?php echo $record->test_hbsag; ?></td>
                    <td><?php echo $record->test_hcv; ?></td>
                    <td><?php echo $record->test_vdrl; ?></td>
                    <td><?php echo $record->test_mp; ?></td>
                    <td><?php echo $record->test_irregular_ab; ?></td>
                    <td><?php echo $record->screening_result; ?></td>
                    <td><?php echo $record->screening_datetime; ?></td>
                    <td><?php echo $record->screened_by; ?></td>
                    <td><?php echo $record->hospital_id; ?></td>
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