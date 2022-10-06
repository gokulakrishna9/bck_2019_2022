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
      <label class="form-check-label" for="duration">Duration</label>
      <input type="text" class="form-control" name="duration" value="<?php echo $input_data->duration; ?>" id="duration">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="treatment">Treatment</label>
      <input type="text" class="form-control" name="treatment" value="<?php echo $input_data->treatment; ?>" id="treatment">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="treatment_type">Treatment Type</label>
      <input type="text" class="form-control" name="treatment_type" value="<?php echo $input_data->treatment_type; ?>" id="treatment_type">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="treatment_date">Treatment Date</label>
      <input type="date" class="form-control" name="treatment_date" value="<?php echo $input_data->treatment_date; ?>" id="treatment_date">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="treatment_time">Treatment Time</label>
      <input type="date" class="form-control" name="treatment_time" value="<?php echo $input_data->treatment_time; ?>" id="treatment_time">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="treatment_id" value="<?php echo $input_data->treatment_id; ?>" id="treatment_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="notes">Notes</label>
      <textarea class="form-control" name="notes" id="notes" rows="3"><?php echo $input_data->notes; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Duration</th>
        <th scope="col">Notes</th>
        <th scope="col">Treatment</th>
        <th scope="col">Treatment Date</th>
        <th scope="col">Treatment Time</th>
        <th scope="col">Treatment Type</th>
        <th scope="col">Visit Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($patient_treatment) > 0){
            forEach($patient_treatment as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->duration; ?></td>
                    <td><?php echo $record->notes; ?></td>
                    <td><?php echo $record->treatment; ?></td>
                    <td><?php echo $record->treatment_date; ?></td>
                    <td><?php echo $record->treatment_time; ?></td>
                    <td><?php echo $record->treatment_type; ?></td>
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