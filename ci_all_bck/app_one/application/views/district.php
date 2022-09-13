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
      <label class="form-check-label" for="district">District</label>
      <input type="text" class="form-control" name="district" value="<?php echo $input_data->district; ?>" id="district">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="state">State</label>
      <input type="text" class="form-control" name="state" value="<?php echo $input_data->state; ?>" id="state">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="district_id" value="<?php echo $input_data->district_id; ?>" id="district_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="state_id">State</label>
      <?php foreach($state as $record){ ?>
      <select class="form-control" name="state_id" id="state_id">
      <option value="<?php echo $record->state_id; ?>" <?php if($input_data->state_id == $record->state_id) echo 'selected'; ?>><?php echo $record->state; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="state_id">Country Code</label>
      <?php foreach($state_codes as $record){ ?>
      <select class="form-control" name="state_id" id="state_id">
      <option value="<?php echo $record->state_id; ?>" <?php if($input_data->state_id == $record->state_id) echo 'selected'; ?>><?php echo $record->country_code; ?></option>
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
        <th scope="col">District</th>
        <th scope="col">Latitude</th>
        <th scope="col">Longitude</th>
        <th scope="col">State</th>
        <th scope="col">State Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($district) > 0){
            forEach($district as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->district; ?></td>
                    <td><?php echo $record->latitude; ?></td>
                    <td><?php echo $record->longitude; ?></td>
                    <td><?php echo $record->state; ?></td>
                    <td><?php echo $record->state_id; ?></td>
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