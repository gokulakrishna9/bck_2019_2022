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
      <label class="form-check-label" for="department">Department</label>
      <input type="text" class="form-control" name="department" value="<?php echo $input_data->department; ?>" id="department">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="floor">Floor</label>
      <input type="text" class="form-control" name="floor" value="<?php echo $input_data->floor; ?>" id="floor">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="op_room_no">Op Room No</label>
      <input type="text" class="form-control" name="op_room_no" value="<?php echo $input_data->op_room_no; ?>" id="op_room_no">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="lab_report_staff_id">Lab Report Staff Id</label>
      <input type="number" class="form-control" name="lab_report_staff_id" value="<?php echo $input_data->lab_report_staff_id; ?>" id="lab_report_staff_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="number_of_units">Number Of Units</label>
      <input type="number" class="form-control" name="number_of_units" value="<?php echo $input_data->number_of_units; ?>" id="number_of_units">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="temp_department_id">Temp Department Id</label>
      <input type="number" class="form-control" name="temp_department_id" value="<?php echo $input_data->temp_department_id; ?>" id="temp_department_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="department_id" value="<?php echo $input_data->department_id; ?>" id="department_id">
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
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_id">Address</label>
      <?php foreach($staff_previous_hospital as $record){ ?>
      <select class="form-control" name="hospital_id" id="hospital_id">
      <option value="<?php echo $record->hospital_id; ?>" <?php if($input_data->hospital_id == $record->hospital_id) echo 'selected'; ?>><?php echo $record->address; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="department_email">Department Email</label>
      <textarea class="form-control" name="department_email" id="department_email" rows="3"><?php echo $input_data->department_email; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="description">Description</label>
      <textarea class="form-control" name="description" id="description" rows="3"><?php echo $input_data->description; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Clinical</th>
        <th scope="col">Department</th>
        <th scope="col">Department Email</th>
        <th scope="col">Description</th>
        <th scope="col">Floor</th>
        <th scope="col">Fri</th>
        <th scope="col">Hospital Id</th>
        <th scope="col">Lab Report Staff Id</th>
        <th scope="col">Mon</th>
        <th scope="col">Number Of Units</th>
        <th scope="col">Op Room No</th>
        <th scope="col">Sat</th>
        <th scope="col">Temp Department Id</th>
        <th scope="col">Thr</th>
        <th scope="col">Tue</th>
        <th scope="col">Wed</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($department) > 0){
            forEach($department as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->clinical; ?></td>
                    <td><?php echo $record->department; ?></td>
                    <td><?php echo $record->department_email; ?></td>
                    <td><?php echo $record->description; ?></td>
                    <td><?php echo $record->floor; ?></td>
                    <td><?php echo $record->fri; ?></td>
                    <td><?php echo $record->hospital_id; ?></td>
                    <td><?php echo $record->lab_report_staff_id; ?></td>
                    <td><?php echo $record->mon; ?></td>
                    <td><?php echo $record->number_of_units; ?></td>
                    <td><?php echo $record->op_room_no; ?></td>
                    <td><?php echo $record->sat; ?></td>
                    <td><?php echo $record->temp_department_id; ?></td>
                    <td><?php echo $record->thr; ?></td>
                    <td><?php echo $record->tue; ?></td>
                    <td><?php echo $record->wed; ?></td>
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