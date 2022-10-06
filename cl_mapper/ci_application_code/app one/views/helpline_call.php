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
      <label class="form-check-label" for="call_type">Call Type</label>
      <input type="text" class="form-control" name="call_type" value="<?php echo $input_data->call_type; ?>" id="call_type">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="dial_whom_number">Dial Whom Number</label>
      <input type="text" class="form-control" name="dial_whom_number" value="<?php echo $input_data->dial_whom_number; ?>" id="dial_whom_number">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="direction">Direction</label>
      <input type="text" class="form-control" name="direction" value="<?php echo $input_data->direction; ?>" id="direction">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="from_number">From Number</label>
      <input type="text" class="form-control" name="from_number" value="<?php echo $input_data->from_number; ?>" id="from_number">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="ip_op">Ip Op</label>
      <input type="text" class="form-control" name="ip_op" value="<?php echo $input_data->ip_op; ?>" id="ip_op">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="to_number">To Number</label>
      <input type="text" class="form-control" name="to_number" value="<?php echo $input_data->to_number; ?>" id="to_number">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="dial_call_duration">Dial Call Duration</label>
      <input type="date" class="form-control" name="dial_call_duration" value="<?php echo $input_data->dial_call_duration; ?>" id="dial_call_duration">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="call_id" value="<?php echo $input_data->call_id; ?>" id="call_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="call_category_id">Call Category</label>
      <?php foreach($helpline_call_category as $record){ ?>
      <select class="form-control" name="call_category_id" id="call_category_id">
      <option value="<?php echo $record->call_category_id; ?>" <?php if($input_data->call_category_id == $record->call_category_id) echo 'selected'; ?>><?php echo $record->call_category; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="call_group_id">Group Name</label>
      <?php foreach($helpline_call_group as $record){ ?>
      <select class="form-control" name="call_group_id" id="call_group_id">
      <option value="<?php echo $record->call_group_id; ?>" <?php if($input_data->call_group_id == $record->call_group_id) echo 'selected'; ?>><?php echo $record->group_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="caller_type_id">Caller Type</label>
      <?php foreach($helpline_caller_type as $record){ ?>
      <select class="form-control" name="caller_type_id" id="caller_type_id">
      <option value="<?php echo $record->caller_type_id; ?>" <?php if($input_data->caller_type_id == $record->caller_type_id) echo 'selected'; ?>><?php echo $record->caller_type; ?></option>
      <?php } ?>
      </select>
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
      <label class="form-check-label" for="resolution_status_id">Resolution Status</label>
      <?php foreach($helpline_resolution_status as $record){ ?>
      <select class="form-control" name="resolution_status_id" id="resolution_status_id">
      <option value="<?php echo $record->resolution_status_id; ?>" <?php if($input_data->resolution_status_id == $record->resolution_status_id) echo 'selected'; ?>><?php echo $record->resolution_status; ?></option>
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
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="visit_id">Arrival Mode</label>
      <?php foreach($patient_visit as $record){ ?>
      <select class="form-control" name="visit_id" id="visit_id">
      <option value="<?php echo $record->visit_id; ?>" <?php if($input_data->visit_id == $record->visit_id) echo 'selected'; ?>><?php echo $record->arrival_mode; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="callsid">Callsid</label>
      <textarea class="form-control" name="callsid" id="callsid" rows="3"><?php echo $input_data->callsid; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="note">Note</label>
      <textarea class="form-control" name="note" id="note" rows="3"><?php echo $input_data->note; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="recording_url">Recording Url</label>
      <textarea class="form-control" name="recording_url" id="recording_url" rows="3"><?php echo $input_data->recording_url; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Call Category Id</th>
        <th scope="col">Call Group Id</th>
        <th scope="col">Call Type</th>
        <th scope="col">Caller Type Id</th>
        <th scope="col">Callsid</th>
        <th scope="col">Create Date Time</th>
        <th scope="col">Current Server Time</th>
        <th scope="col">Dial Call Duration</th>
        <th scope="col">Dial Whom Number</th>
        <th scope="col">Direction</th>
        <th scope="col">End Time</th>
        <th scope="col">From Number</th>
        <th scope="col">Hospital Id</th>
        <th scope="col">Ip Op</th>
        <th scope="col">Note</th>
        <th scope="col">Recording Url</th>
        <th scope="col">Resolution Date Time</th>
        <th scope="col">Resolution Status Id</th>
        <th scope="col">Start Time</th>
        <th scope="col">To Number</th>
        <th scope="col">Update Date Time</th>
        <th scope="col">Updated</th>
        <th scope="col">Visit Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($helpline_call) > 0){
            forEach($helpline_call as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->call_category_id; ?></td>
                    <td><?php echo $record->call_group_id; ?></td>
                    <td><?php echo $record->call_type; ?></td>
                    <td><?php echo $record->caller_type_id; ?></td>
                    <td><?php echo $record->callsid; ?></td>
                    <td><?php echo $record->create_date_time; ?></td>
                    <td><?php echo $record->current_server_time; ?></td>
                    <td><?php echo $record->dial_call_duration; ?></td>
                    <td><?php echo $record->dial_whom_number; ?></td>
                    <td><?php echo $record->direction; ?></td>
                    <td><?php echo $record->end_time; ?></td>
                    <td><?php echo $record->from_number; ?></td>
                    <td><?php echo $record->hospital_id; ?></td>
                    <td><?php echo $record->ip_op; ?></td>
                    <td><?php echo $record->note; ?></td>
                    <td><?php echo $record->recording_url; ?></td>
                    <td><?php echo $record->resolution_date_time; ?></td>
                    <td><?php echo $record->resolution_status_id; ?></td>
                    <td><?php echo $record->start_time; ?></td>
                    <td><?php echo $record->to_number; ?></td>
                    <td><?php echo $record->update_date_time; ?></td>
                    <td><?php echo $record->updated; ?></td>
                    <td><?php echo $record->visit_id; ?></td>
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