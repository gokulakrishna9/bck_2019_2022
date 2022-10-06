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
      <label class="form-check-label" for="status">Status</label>
      <input type="text" class="form-control" name="status" value="<?php echo $input_data->status; ?>" id="status">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="from_date">From Date</label>
      <input type="date" class="form-control" name="from_date" value="<?php echo $input_data->from_date; ?>" id="from_date">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="to_date">To Date</label>
      <input type="date" class="form-control" name="to_date" value="<?php echo $input_data->to_date; ?>" id="to_date">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="contract_id" value="<?php echo $input_data->contract_id; ?>" id="contract_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="facility_id">Facility Name</label>
      <?php foreach($facility as $record){ ?>
      <select class="form-control" name="facility_id" id="facility_id">
      <option value="<?php echo $record->facility_id; ?>" <?php if($input_data->facility_id == $record->facility_id) echo 'selected'; ?>><?php echo $record->facility_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="vendor_id">Account No</label>
      <?php foreach($vendor as $record){ ?>
      <select class="form-control" name="vendor_id" id="vendor_id">
      <option value="<?php echo $record->vendor_id; ?>" <?php if($input_data->vendor_id == $record->vendor_id) echo 'selected'; ?>><?php echo $record->account_no; ?></option>
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
        <th scope="col">Facility Id</th>
        <th scope="col">From Date</th>
        <th scope="col">Status</th>
        <th scope="col">To Date</th>
        <th scope="col">Vendor Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($vendor_contracts) > 0){
            forEach($vendor_contracts as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->facility_id; ?></td>
                    <td><?php echo $record->from_date; ?></td>
                    <td><?php echo $record->status; ?></td>
                    <td><?php echo $record->to_date; ?></td>
                    <td><?php echo $record->vendor_id; ?></td>
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