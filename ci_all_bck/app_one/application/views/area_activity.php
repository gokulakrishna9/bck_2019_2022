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
      <label class="form-check-label" for="frequency_type">Frequency Type</label>
      <input type="text" class="form-control" name="frequency_type" value="<?php echo $input_data->frequency_type; ?>" id="frequency_type">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="frequency">Frequency</label>
      <input type="number" class="form-control" name="frequency" value="<?php echo $input_data->frequency; ?>" id="frequency">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="weightage">Weightage</label>
      <input type="number" class="form-control" name="weightage" value="<?php echo $input_data->weightage; ?>" id="weightage">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="area_activity_id" value="<?php echo $input_data->area_activity_id; ?>" id="area_activity_id">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="area_type_id">Area Type</label>
      <?php foreach($area_types as $record){ ?>
      <select class="form-control" name="area_type_id" id="area_type_id">
      <option value="<?php echo $record->area_type_id; ?>" <?php if($input_data->area_type_id == $record->area_type_id) echo 'selected'; ?>><?php echo $record->area_type; ?></option>
      <?php } ?>
      </select>
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="activity_name">Activity Name</label>
      <textarea class="form-control" name="activity_name" id="activity_name" rows="3"><?php echo $input_data->activity_name; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Activity Name</th>
        <th scope="col">Frequency</th>
        <th scope="col">Weightage</th>
        <th scope="col">Area Type Id</th>
        <th scope="col">Frequency Type</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($area_activity) > 0){
            forEach($area_activity as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->activity_name; ?></td>
                    <td><?php echo $record->frequency; ?></td>
                    <td><?php echo $record->weightage; ?></td>
                    <td><?php echo $record->area_type_id; ?></td>
                    <td><?php echo $record->frequency_type; ?></td>
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