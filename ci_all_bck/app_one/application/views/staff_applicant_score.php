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
      
      <input type="hidden" class="form-control" name="score_id" value="<?php echo $input_data->score_id; ?>" id="score_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="parameter_id">Parameter Label</label>
      <?php foreach($staff_selection_parameter as $record){ ?>
      <select class="form-control" name="parameter_id" id="parameter_id">
      <option value="<?php echo $record->parameter_id; ?>" <?php if($input_data->parameter_id == $record->parameter_id) echo 'selected'; ?>><?php echo $record->parameter_label; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="applicant_id">First Name</label>
      <?php foreach($staff_applicant as $record){ ?>
      <select class="form-control" name="applicant_id" id="applicant_id">
      <option value="<?php echo $record->applicant_id; ?>" <?php if($input_data->applicant_id == $record->applicant_id) echo 'selected'; ?>><?php echo $record->first_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="drive_id">Place</label>
      <?php foreach($staff_recruitment_drive as $record){ ?>
      <select class="form-control" name="drive_id" id="drive_id">
      <option value="<?php echo $record->drive_id; ?>" <?php if($input_data->drive_id == $record->drive_id) echo 'selected'; ?>><?php echo $record->place; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="score">Score</label>
      <textarea class="form-control" name="score" id="score" rows="3"><?php echo $input_data->score; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Parameter Id</th>
        <th scope="col">Applicant Id</th>
        <th scope="col">Drive Id</th>
        <th scope="col">Score</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($staff_applicant_score) > 0){
            forEach($staff_applicant_score as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->parameter_id; ?></td>
                    <td><?php echo $record->applicant_id; ?></td>
                    <td><?php echo $record->drive_id; ?></td>
                    <td><?php echo $record->score; ?></td>
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