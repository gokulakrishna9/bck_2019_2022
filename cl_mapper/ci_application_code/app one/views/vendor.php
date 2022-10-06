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
      <label class="form-check-label" for="account_no">Account No</label>
      <input type="text" class="form-control" name="account_no" value="<?php echo $input_data->account_no; ?>" id="account_no">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="vendor_address">Vendor Address</label>
      <input type="text" class="form-control" name="vendor_address" value="<?php echo $input_data->vendor_address; ?>" id="vendor_address">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="vendor_city">Vendor City</label>
      <input type="text" class="form-control" name="vendor_city" value="<?php echo $input_data->vendor_city; ?>" id="vendor_city">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="vendor_country">Vendor Country</label>
      <input type="text" class="form-control" name="vendor_country" value="<?php echo $input_data->vendor_country; ?>" id="vendor_country">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="vendor_name">Vendor Name</label>
      <input type="text" class="form-control" name="vendor_name" value="<?php echo $input_data->vendor_name; ?>" id="vendor_name">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="vendor_pan">Vendor Pan</label>
      <input type="text" class="form-control" name="vendor_pan" value="<?php echo $input_data->vendor_pan; ?>" id="vendor_pan">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="vendor_phone">Vendor Phone</label>
      <input type="text" class="form-control" name="vendor_phone" value="<?php echo $input_data->vendor_phone; ?>" id="vendor_phone">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="vendor_state">Vendor State</label>
      <input type="text" class="form-control" name="vendor_state" value="<?php echo $input_data->vendor_state; ?>" id="vendor_state">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="vendor_id" value="<?php echo $input_data->vendor_id; ?>" id="vendor_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="contact_person_id">Contact Person Email</label>
      <?php foreach($contact_person as $record){ ?>
      <select class="form-control" name="contact_person_id" id="contact_person_id">
      <option value="<?php echo $record->contact_person_id; ?>" <?php if($input_data->contact_person_id == $record->contact_person_id) echo 'selected'; ?>><?php echo $record->contact_person_email; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="vendor_type_id">Vendor Type</label>
      <?php foreach($vendor_type as $record){ ?>
      <select class="form-control" name="vendor_type_id" id="vendor_type_id">
      <option value="<?php echo $record->vendor_type_id; ?>" <?php if($input_data->vendor_type_id == $record->vendor_type_id) echo 'selected'; ?>><?php echo $record->vendor_type; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="bank_name">Bank Name</label>
      <textarea class="form-control" name="bank_name" id="bank_name" rows="3"><?php echo $input_data->bank_name; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="branch">Branch</label>
      <textarea class="form-control" name="branch" id="branch" rows="3"><?php echo $input_data->branch; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="vendor_email">Vendor Email</label>
      <textarea class="form-control" name="vendor_email" id="vendor_email" rows="3"><?php echo $input_data->vendor_email; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Account No</th>
        <th scope="col">Bank Name</th>
        <th scope="col">Branch</th>
        <th scope="col">Contact Person Id</th>
        <th scope="col">Vendor Address</th>
        <th scope="col">Vendor City</th>
        <th scope="col">Vendor Country</th>
        <th scope="col">Vendor Email</th>
        <th scope="col">Vendor Name</th>
        <th scope="col">Vendor Pan</th>
        <th scope="col">Vendor Phone</th>
        <th scope="col">Vendor State</th>
        <th scope="col">Vendor Type Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($vendor) > 0){
            forEach($vendor as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->account_no; ?></td>
                    <td><?php echo $record->bank_name; ?></td>
                    <td><?php echo $record->branch; ?></td>
                    <td><?php echo $record->contact_person_id; ?></td>
                    <td><?php echo $record->vendor_address; ?></td>
                    <td><?php echo $record->vendor_city; ?></td>
                    <td><?php echo $record->vendor_country; ?></td>
                    <td><?php echo $record->vendor_email; ?></td>
                    <td><?php echo $record->vendor_name; ?></td>
                    <td><?php echo $record->vendor_pan; ?></td>
                    <td><?php echo $record->vendor_phone; ?></td>
                    <td><?php echo $record->vendor_state; ?></td>
                    <td><?php echo $record->vendor_type_id; ?></td>
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