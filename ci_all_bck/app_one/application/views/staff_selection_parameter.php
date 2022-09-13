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
      <label class="form-check-label" for="parameter_max_value">Parameter Max Value</label>
      <input type="text" class="form-control" name="parameter_max_value" value="<?php echo $input_data->parameter_max_value; ?>" id="parameter_max_value">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="parameter_rank">Parameter Rank</label>
      <input type="number" class="form-control" name="parameter_rank" value="<?php echo $input_data->parameter_rank; ?>" id="parameter_rank">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="parameter_id" value="<?php echo $input_data->parameter_id; ?>" id="parameter_id">
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
      <label class="form-check-label" for="parameter_label">Parameter Label</label>
      <textarea class="form-control" name="parameter_label" id="parameter_label" rows="3"><?php echo $input_data->parameter_label; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Drive Id</th>
        <th scope="col">Parameter Label</th>
        <th scope="col">Parameter Max Value</th>
        <th scope="col">Parameter Rank</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($staff_selection_parameter) > 0){
            forEach($staff_selection_parameter as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->drive_id; ?></td>
                    <td><?php echo $record->parameter_label; ?></td>
                    <td><?php echo $record->parameter_max_value; ?></td>
                    <td><?php echo $record->parameter_rank; ?></td>
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