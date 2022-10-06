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
      <label class="form-check-label" for="binary_negative">Binary Negative</label>
      <input type="text" class="form-control" name="binary_negative" value="<?php echo $input_data->binary_negative; ?>" id="binary_negative">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="binary_positive">Binary Positive</label>
      <input type="text" class="form-control" name="binary_positive" value="<?php echo $input_data->binary_positive; ?>" id="binary_positive">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="group_name">Group Name</label>
      <input type="text" class="form-control" name="group_name" value="<?php echo $input_data->group_name; ?>" id="group_name">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="numeric_result_unit">Numeric Result Unit</label>
      <input type="number" class="form-control" name="numeric_result_unit" value="<?php echo $input_data->numeric_result_unit; ?>" id="numeric_result_unit">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="temp_group_id">Temp Group Id</label>
      <input type="number" class="form-control" name="temp_group_id" value="<?php echo $input_data->temp_group_id; ?>" id="temp_group_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="temp_test_group_id">Temp Test Group Id</label>
      <input type="number" class="form-control" name="temp_test_group_id" value="<?php echo $input_data->temp_test_group_id; ?>" id="temp_test_group_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="group_id" value="<?php echo $input_data->group_id; ?>" id="group_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="test_method_id">Accredition Logo</label>
      <?php foreach($test_method as $record){ ?>
      <select class="form-control" name="test_method_id" id="test_method_id">
      <option value="<?php echo $record->test_method_id; ?>" <?php if($input_data->test_method_id == $record->test_method_id) echo 'selected'; ?>><?php echo $record->accredition_logo; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="interpretation">Interpretation</label>
      <textarea class="form-control" name="interpretation" id="interpretation" rows="3"><?php echo $input_data->interpretation; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Binary Negative</th>
        <th scope="col">Binary Positive</th>
        <th scope="col">Binary Result</th>
        <th scope="col">Group Name</th>
        <th scope="col">Has Result</th>
        <th scope="col">Interpretation</th>
        <th scope="col">Numeric Result</th>
        <th scope="col">Numeric Result Unit</th>
        <th scope="col">Temp Group Id</th>
        <th scope="col">Temp Test Group Id</th>
        <th scope="col">Test Method Id</th>
        <th scope="col">Text Result</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($test_group) > 0){
            forEach($test_group as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->binary_negative; ?></td>
                    <td><?php echo $record->binary_positive; ?></td>
                    <td><?php echo $record->binary_result; ?></td>
                    <td><?php echo $record->group_name; ?></td>
                    <td><?php echo $record->has_result; ?></td>
                    <td><?php echo $record->interpretation; ?></td>
                    <td><?php echo $record->numeric_result; ?></td>
                    <td><?php echo $record->numeric_result_unit; ?></td>
                    <td><?php echo $record->temp_group_id; ?></td>
                    <td><?php echo $record->temp_test_group_id; ?></td>
                    <td><?php echo $record->test_method_id; ?></td>
                    <td><?php echo $record->text_result; ?></td>
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