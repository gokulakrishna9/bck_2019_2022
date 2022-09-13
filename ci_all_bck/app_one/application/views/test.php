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
      <label class="form-check-label" for="test_done_by">Test Done By</label>
      <input type="number" class="form-control" name="test_done_by" value="<?php echo $input_data->test_done_by; ?>" id="test_done_by">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="test_approved_by">Test Approved By</label>
      <input type="number" class="form-control" name="test_approved_by" value="<?php echo $input_data->test_approved_by; ?>" id="test_approved_by">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="temp_test_id">Temp Test Id</label>
      <input type="number" class="form-control" name="temp_test_id" value="<?php echo $input_data->temp_test_id; ?>" id="temp_test_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="test_id" value="<?php echo $input_data->test_id; ?>" id="test_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="sample_id">Sample Code</label>
      <?php foreach($test_sample as $record){ ?>
      <select class="form-control" name="sample_id" id="sample_id">
      <option value="<?php echo $record->sample_id; ?>" <?php if($input_data->sample_id == $record->sample_id) echo 'selected'; ?>><?php echo $record->sample_code; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="test_master_id">Test Name</label>
      <?php foreach($test_master as $record){ ?>
      <select class="form-control" name="test_master_id" id="test_master_id">
      <option value="<?php echo $record->test_master_id; ?>" <?php if($input_data->test_master_id == $record->test_master_id) echo 'selected'; ?>><?php echo $record->test_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="group_id">Group Name</label>
      <?php foreach($test_group as $record){ ?>
      <select class="form-control" name="group_id" id="group_id">
      <option value="<?php echo $record->group_id; ?>" <?php if($input_data->group_id == $record->group_id) echo 'selected'; ?>><?php echo $record->group_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="test_range_id">Test Range Id</label>
      <textarea class="form-control" name="test_range_id" id="test_range_id" rows="3"><?php echo $input_data->test_range_id; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Order Id</th>
        <th scope="col">Sample Id</th>
        <th scope="col">Test Master Id</th>
        <th scope="col">Group Id</th>
        <th scope="col">Test Result</th>
        <th scope="col">Test Result Binary</th>
        <th scope="col">Test Result Text</th>
        <th scope="col">Test Date Time</th>
        <th scope="col">Test Done By</th>
        <th scope="col">Test Approved By</th>
        <th scope="col">Reported Date Time</th>
        <th scope="col">Test Status</th>
        <th scope="col">Test Range Id</th>
        <th scope="col">Temp Test Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($test) > 0){
            forEach($test as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->order_id; ?></td>
                    <td><?php echo $record->sample_id; ?></td>
                    <td><?php echo $record->test_master_id; ?></td>
                    <td><?php echo $record->group_id; ?></td>
                    <td><?php echo $record->test_result; ?></td>
                    <td><?php echo $record->test_result_binary; ?></td>
                    <td><?php echo $record->test_result_text; ?></td>
                    <td><?php echo $record->test_date_time; ?></td>
                    <td><?php echo $record->test_done_by; ?></td>
                    <td><?php echo $record->test_approved_by; ?></td>
                    <td><?php echo $record->reported_date_time; ?></td>
                    <td><?php echo $record->test_status; ?></td>
                    <td><?php echo $record->test_range_id; ?></td>
                    <td><?php echo $record->temp_test_id; ?></td>
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