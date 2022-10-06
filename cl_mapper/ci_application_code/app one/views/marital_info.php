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
      <label class="form-check-label" for="consanguinous">Consanguinous</label>
      <input type="text" class="form-control" name="consanguinous" value="<?php echo $input_data->consanguinous; ?>" id="consanguinous">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="marital_status">Marital Status</label>
      <input type="text" class="form-control" name="marital_status" value="<?php echo $input_data->marital_status; ?>" id="marital_status">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="marital_life">Marital Life</label>
      <input type="number" class="form-control" name="marital_life" value="<?php echo $input_data->marital_life; ?>" id="marital_life">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="marital_history_id" value="<?php echo $input_data->marital_history_id; ?>" id="marital_history_id">
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
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Consanguinous</th>
        <th scope="col">Marital Life</th>
        <th scope="col">Marital Status</th>
        <th scope="col">Patient Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($marital_info) > 0){
            forEach($marital_info as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->consanguinous; ?></td>
                    <td><?php echo $record->marital_life; ?></td>
                    <td><?php echo $record->marital_status; ?></td>
                    <td><?php echo $record->patient_id; ?></td>
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