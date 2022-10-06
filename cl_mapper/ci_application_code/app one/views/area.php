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
      <label class="form-check-label" for="area_name">Area Name</label>
      <input type="text" class="form-control" name="area_name" value="<?php echo $input_data->area_name; ?>" id="area_name">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="beds">Beds</label>
      <input type="number" class="form-control" name="beds" value="<?php echo $input_data->beds; ?>" id="beds">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="lab_report_staff_id">Lab Report Staff Id</label>
      <input type="number" class="form-control" name="lab_report_staff_id" value="<?php echo $input_data->lab_report_staff_id; ?>" id="lab_report_staff_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="temp_area_id">Temp Area Id</label>
      <input type="number" class="form-control" name="temp_area_id" value="<?php echo $input_data->temp_area_id; ?>" id="temp_area_id">
    </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="area_id" value="<?php echo $input_data->area_id; ?>" id="area_id">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="area_type_id">Area Type</label>
      <?php foreach($area_types as $record){ ?>
      <select class="form-control" name="area_type_id" id="area_type_id">
      <option value="<?php echo $record->area_type_id; ?>" <?php if($input_data->area_type_id == $record->area_type_id) echo 'selected'; ?>><?php echo $record->area_type; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="department_id">Department</label>
      <?php foreach($department as $record){ ?>
      <select class="form-control" name="department_id" id="department_id">
      <option value="<?php echo $record->department_id; ?>" <?php if($input_data->department_id == $record->department_id) echo 'selected'; ?>><?php echo $record->department; ?></option>
      <?php } ?>
      </select>
    </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Area Name</th>
        <th scope="col">Area Type Id</th>
        <th scope="col">Beds</th>
        <th scope="col">Department Id</th>
        <th scope="col">Lab Report Staff Id</th>
        <th scope="col">Temp Area Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($area) > 0){
            forEach($area as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->area_name; ?></td>
                    <td><?php echo $record->area_type_id; ?></td>
                    <td><?php echo $record->beds; ?></td>
                    <td><?php echo $record->department_id; ?></td>
                    <td><?php echo $record->lab_report_staff_id; ?></td>
                    <td><?php echo $record->temp_area_id; ?></td>
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