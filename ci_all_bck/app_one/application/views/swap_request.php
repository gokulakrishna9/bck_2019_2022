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
      <label class="form-check-label" for="roaster_id_requested">Roaster Id Requested</label>
      <input type="number" class="form-control" name="roaster_id_requested" value="<?php echo $input_data->roaster_id_requested; ?>" id="roaster_id_requested">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="shift_id_requested">Shift Id Requested</label>
      <input type="number" class="form-control" name="shift_id_requested" value="<?php echo $input_data->shift_id_requested; ?>" id="shift_id_requested">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="swap_status">Swap Status</label>
      <input type="number" class="form-control" name="swap_status" value="<?php echo $input_data->swap_status; ?>" id="swap_status">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="roaster_id_accepted">Roaster Id Accepted</label>
      <input type="number" class="form-control" name="roaster_id_accepted" value="<?php echo $input_data->roaster_id_accepted; ?>" id="roaster_id_accepted">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="swap_id" value="<?php echo $input_data->swap_id; ?>" id="swap_id">
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Roaster Id Requested</th>
        <th scope="col">Shift Id Requested</th>
        <th scope="col">Request Timestamp</th>
        <th scope="col">Swap Status</th>
        <th scope="col">Roaster Id Accepted</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($swap_request) > 0){
            forEach($swap_request as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->roaster_id_requested; ?></td>
                    <td><?php echo $record->shift_id_requested; ?></td>
                    <td><?php echo $record->request_timestamp; ?></td>
                    <td><?php echo $record->swap_status; ?></td>
                    <td><?php echo $record->roaster_id_accepted; ?></td>
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