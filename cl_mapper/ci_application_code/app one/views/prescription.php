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
      <label class="form-check-label" for="frequency">Frequency</label>
      <input type="text" class="form-control" name="frequency" value="<?php echo $input_data->frequency; ?>" id="frequency">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="duration">Duration</label>
      <input type="number" class="form-control" name="duration" value="<?php echo $input_data->duration; ?>" id="duration">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="prescription_id" value="<?php echo $input_data->prescription_id; ?>" id="prescription_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="item_id">Description</label>
      <?php foreach($item as $record){ ?>
      <select class="form-control" name="item_id" id="item_id">
      <option value="<?php echo $record->item_id; ?>" <?php if($input_data->item_id == $record->item_id) echo 'selected'; ?>><?php echo $record->description; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="item_id">Description</label>
      <?php foreach($item_master as $record){ ?>
      <select class="form-control" name="item_id" id="item_id">
      <option value="<?php echo $record->item_id; ?>" <?php if($input_data->item_id == $record->item_id) echo 'selected'; ?>><?php echo $record->description; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="unit_id">Unit Name</label>
      <?php foreach($unit as $record){ ?>
      <select class="form-control" name="unit_id" id="unit_id">
      <option value="<?php echo $record->unit_id; ?>" <?php if($input_data->unit_id == $record->unit_id) echo 'selected'; ?>><?php echo $record->unit_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="visit_id">Brought By</label>
      <?php foreach($mlc as $record){ ?>
      <select class="form-control" name="visit_id" id="visit_id">
      <option value="<?php echo $record->visit_id; ?>" <?php if($input_data->visit_id == $record->visit_id) echo 'selected'; ?>><?php echo $record->brought_by; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="visit_id">Arrival Mode</label>
      <?php foreach($patient_visit as $record){ ?>
      <select class="form-control" name="visit_id" id="visit_id">
      <option value="<?php echo $record->visit_id; ?>" <?php if($input_data->visit_id == $record->visit_id) echo 'selected'; ?>><?php echo $record->arrival_mode; ?></option>
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
        <th scope="col">Afternoon</th>
        <th scope="col">Duration</th>
        <th scope="col">Evening</th>
        <th scope="col">Frequency</th>
        <th scope="col">Item Id</th>
        <th scope="col">Morning</th>
        <th scope="col">Quantity</th>
        <th scope="col">Status</th>
        <th scope="col">Unit Id</th>
        <th scope="col">Visit Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($prescription) > 0){
            forEach($prescription as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->afternoon; ?></td>
                    <td><?php echo $record->duration; ?></td>
                    <td><?php echo $record->evening; ?></td>
                    <td><?php echo $record->frequency; ?></td>
                    <td><?php echo $record->item_id; ?></td>
                    <td><?php echo $record->morning; ?></td>
                    <td><?php echo $record->quantity; ?></td>
                    <td><?php echo $record->status; ?></td>
                    <td><?php echo $record->unit_id; ?></td>
                    <td><?php echo $record->visit_id; ?></td>
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