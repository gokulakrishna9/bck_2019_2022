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
      <label class="form-check-label" for="from_area_id">From Area Id</label>
      <input type="number" class="form-control" name="from_area_id" value="<?php echo $input_data->from_area_id; ?>" id="from_area_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="to_area_id">To Area Id</label>
      <input type="number" class="form-control" name="to_area_id" value="<?php echo $input_data->to_area_id; ?>" id="to_area_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="transport_id" value="<?php echo $input_data->transport_id; ?>" id="transport_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="visit_id">Mlc Number</label>
      <?php foreach($mlc as $record){ ?>
      <select class="form-control" name="visit_id" id="visit_id">
      <option value="<?php echo $record->visit_id; ?>" <?php if($input_data->visit_id == $record->visit_id) echo 'selected'; ?>><?php echo $record->mlc_number; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="visit_id">Visit Type</label>
      <?php foreach($patient_visit as $record){ ?>
      <select class="form-control" name="visit_id" id="visit_id">
      <option value="<?php echo $record->visit_id; ?>" <?php if($input_data->visit_id == $record->visit_id) echo 'selected'; ?>><?php echo $record->visit_type; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="staff_id">First Name</label>
      <?php foreach($staff as $record){ ?>
      <select class="form-control" name="staff_id" id="staff_id">
      <option value="<?php echo $record->staff_id; ?>" <?php if($input_data->staff_id == $record->staff_id) echo 'selected'; ?>><?php echo $record->first_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="note">Note</label>
      <textarea class="form-control" name="note" id="note" rows="3"><?php echo $input_data->note; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Visit Id</th>
        <th scope="col">From Area Id</th>
        <th scope="col">To Area Id</th>
        <th scope="col">Staff Id</th>
        <th scope="col">Start Date Time</th>
        <th scope="col">End Date Time</th>
        <th scope="col">Entry Date Time</th>
        <th scope="col">Transport Type</th>
        <th scope="col">Note</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($transport) > 0){
            forEach($transport as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->visit_id; ?></td>
                    <td><?php echo $record->from_area_id; ?></td>
                    <td><?php echo $record->to_area_id; ?></td>
                    <td><?php echo $record->staff_id; ?></td>
                    <td><?php echo $record->start_date_time; ?></td>
                    <td><?php echo $record->end_date_time; ?></td>
                    <td><?php echo $record->entry_date_time; ?></td>
                    <td><?php echo $record->transport_type; ?></td>
                    <td><?php echo $record->note; ?></td>
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