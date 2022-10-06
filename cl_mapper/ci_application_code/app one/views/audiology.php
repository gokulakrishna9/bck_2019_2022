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
      <label class="form-check-label" for="oael_outcome">Oael Outcome</label>
      <input type="text" class="form-control" name="oael_outcome" value="<?php echo $input_data->oael_outcome; ?>" id="oael_outcome">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="oaer_outcome">Oaer Outcome</label>
      <input type="text" class="form-control" name="oaer_outcome" value="<?php echo $input_data->oaer_outcome; ?>" id="oaer_outcome">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="remarks">Remarks</label>
      <input type="text" class="form-control" name="remarks" value="<?php echo $input_data->remarks; ?>" id="remarks">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="type_of_test">Type Of Test</label>
      <input type="text" class="form-control" name="type_of_test" value="<?php echo $input_data->type_of_test; ?>" id="type_of_test">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="ip_no">Ip No</label>
      <input type="number" class="form-control" name="ip_no" value="<?php echo $input_data->ip_no; ?>" id="ip_no">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="test_no">Test No</label>
      <input type="number" class="form-control" name="test_no" value="<?php echo $input_data->test_no; ?>" id="test_no">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="date_of_test">Date Of Test</label>
      <input type="date" class="form-control" name="date_of_test" value="<?php echo $input_data->date_of_test; ?>" id="date_of_test">
    </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="aud_test_id" value="<?php echo $input_data->aud_test_id; ?>" id="aud_test_id">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="staff_id">Account Name</label>
      <?php foreach($staff as $record){ ?>
      <select class="form-control" name="staff_id" id="staff_id">
      <option value="<?php echo $record->staff_id; ?>" <?php if($input_data->staff_id == $record->staff_id) echo 'selected'; ?>><?php echo $record->account_name; ?></option>
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
        <th scope="col">Date Of Test</th>
        <th scope="col">Ip No</th>
        <th scope="col">Oael Outcome</th>
        <th scope="col">Oaer Outcome</th>
        <th scope="col">Remarks</th>
        <th scope="col">Staff Id</th>
        <th scope="col">Test No</th>
        <th scope="col">Type Of Test</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($audiology) > 0){
            forEach($audiology as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->date_of_test; ?></td>
                    <td><?php echo $record->ip_no; ?></td>
                    <td><?php echo $record->oael_outcome; ?></td>
                    <td><?php echo $record->oaer_outcome; ?></td>
                    <td><?php echo $record->remarks; ?></td>
                    <td><?php echo $record->staff_id; ?></td>
                    <td><?php echo $record->test_no; ?></td>
                    <td><?php echo $record->type_of_test; ?></td>
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