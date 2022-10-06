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
      <label class="form-check-label" for="sample_code">Sample Code</label>
      <input type="text" class="form-control" name="sample_code" value="<?php echo $input_data->sample_code; ?>" id="sample_code">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="sample_container_type">Sample Container Type</label>
      <input type="text" class="form-control" name="sample_container_type" value="<?php echo $input_data->sample_container_type; ?>" id="sample_container_type">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="temp_sample_id">Temp Sample Id</label>
      <input type="number" class="form-control" name="temp_sample_id" value="<?php echo $input_data->temp_sample_id; ?>" id="temp_sample_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="sample_id" value="<?php echo $input_data->sample_id; ?>" id="sample_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="sample_status_id">Sample Status</label>
      <?php foreach($sample_status as $record){ ?>
      <select class="form-control" name="sample_status_id" id="sample_status_id">
      <option value="<?php echo $record->sample_status_id; ?>" <?php if($input_data->sample_status_id == $record->sample_status_id) echo 'selected'; ?>><?php echo $record->sample_status; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="specimen_type_id">Specimen Type</label>
      <?php foreach($specimen_type as $record){ ?>
      <select class="form-control" name="specimen_type_id" id="specimen_type_id">
      <option value="<?php echo $record->specimen_type_id; ?>" <?php if($input_data->specimen_type_id == $record->specimen_type_id) echo 'selected'; ?>><?php echo $record->specimen_type; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="specimen_source">Specimen Source</label>
      <textarea class="form-control" name="specimen_source" id="specimen_source" rows="3"><?php echo $input_data->specimen_source; ?></textarea>
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
        <th scope="col">Sample Code</th>
        <th scope="col">Sample Container Type</th>
        <th scope="col">Sample Date Time</th>
        <th scope="col">Sample Status Id</th>
        <th scope="col">Specimen Source</th>
        <th scope="col">Specimen Type Id</th>
        <th scope="col">Temp Sample Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($test_sample) > 0){
            forEach($test_sample as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->order_id; ?></td>
                    <td><?php echo $record->sample_code; ?></td>
                    <td><?php echo $record->sample_container_type; ?></td>
                    <td><?php echo $record->sample_date_time; ?></td>
                    <td><?php echo $record->sample_status_id; ?></td>
                    <td><?php echo $record->specimen_source; ?></td>
                    <td><?php echo $record->specimen_type_id; ?></td>
                    <td><?php echo $record->temp_sample_id; ?></td>
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