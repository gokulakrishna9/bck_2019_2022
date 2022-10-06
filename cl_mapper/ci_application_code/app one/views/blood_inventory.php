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
      <label class="form-check-label" for="component_type">Component Type</label>
      <input type="text" class="form-control" name="component_type" value="<?php echo $input_data->component_type; ?>" id="component_type">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="inv_status">Inv Status</label>
      <input type="text" class="form-control" name="inv_status" value="<?php echo $input_data->inv_status; ?>" id="inv_status">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="created_by">Created By</label>
      <input type="number" class="form-control" name="created_by" value="<?php echo $input_data->created_by; ?>" id="created_by">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="discarded_by">Discarded By</label>
      <input type="number" class="form-control" name="discarded_by" value="<?php echo $input_data->discarded_by; ?>" id="discarded_by">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="volume">Volume</label>
      <input type="number" class="form-control" name="volume" value="<?php echo $input_data->volume; ?>" id="volume">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="component_perparation_time">Component Perparation Time</label>
      <input type="date" class="form-control" name="component_perparation_time" value="<?php echo $input_data->component_perparation_time; ?>" id="component_perparation_time">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="expiry_date">Expiry Date</label>
      <input type="date" class="form-control" name="expiry_date" value="<?php echo $input_data->expiry_date; ?>" id="expiry_date">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="inventory_id" value="<?php echo $input_data->inventory_id; ?>" id="inventory_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="donation_id">Bag Type</label>
      <?php foreach($bb_donation as $record){ ?>
      <select class="form-control" name="donation_id" id="donation_id">
      <option value="<?php echo $record->donation_id; ?>" <?php if($input_data->donation_id == $record->donation_id) echo 'selected'; ?>><?php echo $record->bag_type; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_id">Description</label>
      <?php foreach($hospital as $record){ ?>
      <select class="form-control" name="hospital_id" id="hospital_id">
      <option value="<?php echo $record->hospital_id; ?>" <?php if($input_data->hospital_id == $record->hospital_id) echo 'selected'; ?>><?php echo $record->description; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_id">Address</label>
      <?php foreach($staff_previous_hospital as $record){ ?>
      <select class="form-control" name="hospital_id" id="hospital_id">
      <option value="<?php echo $record->hospital_id; ?>" <?php if($input_data->hospital_id == $record->hospital_id) echo 'selected'; ?>><?php echo $record->address; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="status_id">Status</label>
      <?php foreach($bb_status as $record){ ?>
      <select class="form-control" name="status_id" id="status_id">
      <option value="<?php echo $record->status_id; ?>" <?php if($input_data->status_id == $record->status_id) echo 'selected'; ?>><?php echo $record->status; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="notes">Notes</label>
      <textarea class="form-control" name="notes" id="notes" rows="3"><?php echo $input_data->notes; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Component Perparation Time</th>
        <th scope="col">Component Type</th>
        <th scope="col">Created By</th>
        <th scope="col">Datetime</th>
        <th scope="col">Discarded By</th>
        <th scope="col">Donation Id</th>
        <th scope="col">Expiry Date</th>
        <th scope="col">Hospital Id</th>
        <th scope="col">Inv Status</th>
        <th scope="col">Notes</th>
        <th scope="col">Status Id</th>
        <th scope="col">Volume</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($blood_inventory) > 0){
            forEach($blood_inventory as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->component_perparation_time; ?></td>
                    <td><?php echo $record->component_type; ?></td>
                    <td><?php echo $record->created_by; ?></td>
                    <td><?php echo $record->datetime; ?></td>
                    <td><?php echo $record->discarded_by; ?></td>
                    <td><?php echo $record->donation_id; ?></td>
                    <td><?php echo $record->expiry_date; ?></td>
                    <td><?php echo $record->hospital_id; ?></td>
                    <td><?php echo $record->inv_status; ?></td>
                    <td><?php echo $record->notes; ?></td>
                    <td><?php echo $record->status_id; ?></td>
                    <td><?php echo $record->volume; ?></td>
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