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
      <label class="form-check-label" for="call_information_type">Call Information Type</label>
      <input type="text" class="form-control" name="call_information_type" value="<?php echo $input_data->call_information_type; ?>" id="call_information_type">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="contact_person_id">Contact Person Id</label>
      <input type="text" class="form-control" name="contact_person_id" value="<?php echo $input_data->contact_person_id; ?>" id="contact_person_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="problem_status">Problem Status</label>
      <input type="text" class="form-control" name="problem_status" value="<?php echo $input_data->problem_status; ?>" id="problem_status">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="service_person">Service Person</label>
      <input type="text" class="form-control" name="service_person" value="<?php echo $input_data->service_person; ?>" id="service_person">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="service_provider">Service Provider</label>
      <input type="text" class="form-control" name="service_provider" value="<?php echo $input_data->service_provider; ?>" id="service_provider">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="call_date">Call Date</label>
      <input type="date" class="form-control" name="call_date" value="<?php echo $input_data->call_date; ?>" id="call_date">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="call_time">Call Time</label>
      <input type="date" class="form-control" name="call_time" value="<?php echo $input_data->call_time; ?>" id="call_time">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="service_date">Service Date</label>
      <input type="date" class="form-control" name="service_date" value="<?php echo $input_data->service_date; ?>" id="service_date">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="service_time">Service Time</label>
      <input type="date" class="form-control" name="service_time" value="<?php echo $input_data->service_time; ?>" id="service_time">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="request_id" value="<?php echo $input_data->request_id; ?>" id="request_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="equipment_id">Asset Number</label>
      <?php foreach($equipment as $record){ ?>
      <select class="form-control" name="equipment_id" id="equipment_id">
      <option value="<?php echo $record->equipment_id; ?>" <?php if($input_data->equipment_id == $record->equipment_id) echo 'selected'; ?>><?php echo $record->asset_number; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="user_id">Displayname</label>
      <?php foreach($bb_user as $record){ ?>
      <select class="form-control" name="user_id" id="user_id">
      <option value="<?php echo $record->user_id; ?>" <?php if($input_data->user_id == $record->user_id) echo 'selected'; ?>><?php echo $record->displayname; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="user_id">Password</label>
      <?php foreach($user as $record){ ?>
      <select class="form-control" name="user_id" id="user_id">
      <option value="<?php echo $record->user_id; ?>" <?php if($input_data->user_id == $record->user_id) echo 'selected'; ?>><?php echo $record->password; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="vendor_id">Account No</label>
      <?php foreach($vendor as $record){ ?>
      <select class="form-control" name="vendor_id" id="vendor_id">
      <option value="<?php echo $record->vendor_id; ?>" <?php if($input_data->vendor_id == $record->vendor_id) echo 'selected'; ?>><?php echo $record->account_no; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="call_information">Call Information</label>
      <textarea class="form-control" name="call_information" id="call_information" rows="3"><?php echo $input_data->call_information; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="service_person_remarks">Service Person Remarks</label>
      <textarea class="form-control" name="service_person_remarks" id="service_person_remarks" rows="3"><?php echo $input_data->service_person_remarks; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Call Date</th>
        <th scope="col">Call Information</th>
        <th scope="col">Call Information Type</th>
        <th scope="col">Call Time</th>
        <th scope="col">Contact Person Id</th>
        <th scope="col">Equipment Id</th>
        <th scope="col">Problem Status</th>
        <th scope="col">Service Date</th>
        <th scope="col">Service Person</th>
        <th scope="col">Service Person Remarks</th>
        <th scope="col">Service Provider</th>
        <th scope="col">Service Time</th>
        <th scope="col">User Id</th>
        <th scope="col">Vendor Id</th>
        <th scope="col">Working Status</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($service_record) > 0){
            forEach($service_record as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->call_date; ?></td>
                    <td><?php echo $record->call_information; ?></td>
                    <td><?php echo $record->call_information_type; ?></td>
                    <td><?php echo $record->call_time; ?></td>
                    <td><?php echo $record->contact_person_id; ?></td>
                    <td><?php echo $record->equipment_id; ?></td>
                    <td><?php echo $record->problem_status; ?></td>
                    <td><?php echo $record->service_date; ?></td>
                    <td><?php echo $record->service_person; ?></td>
                    <td><?php echo $record->service_person_remarks; ?></td>
                    <td><?php echo $record->service_provider; ?></td>
                    <td><?php echo $record->service_time; ?></td>
                    <td><?php echo $record->user_id; ?></td>
                    <td><?php echo $record->vendor_id; ?></td>
                    <td><?php echo $record->working_status; ?></td>
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