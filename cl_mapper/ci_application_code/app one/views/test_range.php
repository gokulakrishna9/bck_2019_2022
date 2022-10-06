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
      <label class="form-check-label" for="max">Max</label>
      <input type="text" class="form-control" name="max" value="<?php echo $input_data->max; ?>" id="max">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="min">Min</label>
      <input type="text" class="form-control" name="min" value="<?php echo $input_data->min; ?>" id="min">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="from_day">From Day</label>
      <input type="number" class="form-control" name="from_day" value="<?php echo $input_data->from_day; ?>" id="from_day">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="from_month">From Month</label>
      <input type="number" class="form-control" name="from_month" value="<?php echo $input_data->from_month; ?>" id="from_month">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="from_year">From Year</label>
      <input type="number" class="form-control" name="from_year" value="<?php echo $input_data->from_year; ?>" id="from_year">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="range_active">Range Active</label>
      <input type="number" class="form-control" name="range_active" value="<?php echo $input_data->range_active; ?>" id="range_active">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="temp_test_range_id">Temp Test Range Id</label>
      <input type="number" class="form-control" name="temp_test_range_id" value="<?php echo $input_data->temp_test_range_id; ?>" id="temp_test_range_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="to_day">To Day</label>
      <input type="number" class="form-control" name="to_day" value="<?php echo $input_data->to_day; ?>" id="to_day">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="to_month">To Month</label>
      <input type="number" class="form-control" name="to_month" value="<?php echo $input_data->to_month; ?>" id="to_month">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="to_year">To Year</label>
      <input type="number" class="form-control" name="to_year" value="<?php echo $input_data->to_year; ?>" id="to_year">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="test_range_id" value="<?php echo $input_data->test_range_id; ?>" id="test_range_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="test_master_id">Binary Negative</label>
      <?php foreach($test_master as $record){ ?>
      <select class="form-control" name="test_master_id" id="test_master_id">
      <option value="<?php echo $record->test_master_id; ?>" <?php if($input_data->test_master_id == $record->test_master_id) echo 'selected'; ?>><?php echo $record->binary_negative; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="range_text">Range Text</label>
      <textarea class="form-control" name="range_text" id="range_text" rows="3"><?php echo $input_data->range_text; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Age Type</th>
        <th scope="col">From Day</th>
        <th scope="col">From Month</th>
        <th scope="col">From Year</th>
        <th scope="col">Gender</th>
        <th scope="col">Max</th>
        <th scope="col">Min</th>
        <th scope="col">Range Active</th>
        <th scope="col">Range Text</th>
        <th scope="col">Range Type</th>
        <th scope="col">Temp Test Range Id</th>
        <th scope="col">Test Master Id</th>
        <th scope="col">To Day</th>
        <th scope="col">To Month</th>
        <th scope="col">To Year</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($test_range) > 0){
            forEach($test_range as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->age_type; ?></td>
                    <td><?php echo $record->from_day; ?></td>
                    <td><?php echo $record->from_month; ?></td>
                    <td><?php echo $record->from_year; ?></td>
                    <td><?php echo $record->gender; ?></td>
                    <td><?php echo $record->max; ?></td>
                    <td><?php echo $record->min; ?></td>
                    <td><?php echo $record->range_active; ?></td>
                    <td><?php echo $record->range_text; ?></td>
                    <td><?php echo $record->range_type; ?></td>
                    <td><?php echo $record->temp_test_range_id; ?></td>
                    <td><?php echo $record->test_master_id; ?></td>
                    <td><?php echo $record->to_day; ?></td>
                    <td><?php echo $record->to_month; ?></td>
                    <td><?php echo $record->to_year; ?></td>
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