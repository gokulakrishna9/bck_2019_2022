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
      <label class="form-check-label" for="indent_status">Indent Status</label>
      <input type="text" class="form-control" name="indent_status" value="<?php echo $input_data->indent_status; ?>" id="indent_status">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="from_id">From Id</label>
      <input type="number" class="form-control" name="from_id" value="<?php echo $input_data->from_id; ?>" id="from_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="to_id">To Id</label>
      <input type="number" class="form-control" name="to_id" value="<?php echo $input_data->to_id; ?>" id="to_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="orderby_id">Orderby Id</label>
      <input type="number" class="form-control" name="orderby_id" value="<?php echo $input_data->orderby_id; ?>" id="orderby_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="approver_id">Approver Id</label>
      <input type="number" class="form-control" name="approver_id" value="<?php echo $input_data->approver_id; ?>" id="approver_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="issuer_id">Issuer Id</label>
      <input type="number" class="form-control" name="issuer_id" value="<?php echo $input_data->issuer_id; ?>" id="issuer_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="insert_user_id">Insert User Id</label>
      <input type="number" class="form-control" name="insert_user_id" value="<?php echo $input_data->insert_user_id; ?>" id="insert_user_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="update_user_id">Update User Id</label>
      <input type="number" class="form-control" name="update_user_id" value="<?php echo $input_data->update_user_id; ?>" id="update_user_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="indent_id" value="<?php echo $input_data->indent_id; ?>" id="indent_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_id">Hospital</label>
      <?php foreach($hospital as $record){ ?>
      <select class="form-control" name="hospital_id" id="hospital_id">
      <option value="<?php echo $record->hospital_id; ?>" <?php if($input_data->hospital_id == $record->hospital_id) echo 'selected'; ?>><?php echo $record->hospital; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_id">Hospital Name</label>
      <?php foreach($staff_previous_hospital as $record){ ?>
      <select class="form-control" name="hospital_id" id="hospital_id">
      <option value="<?php echo $record->hospital_id; ?>" <?php if($input_data->hospital_id == $record->hospital_id) echo 'selected'; ?>><?php echo $record->hospital_name; ?></option>
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
        <th scope="col">Hospital Id</th>
        <th scope="col">Approve Date Time</th>
        <th scope="col">Issue Date Time</th>
        <th scope="col">Indent Date</th>
        <th scope="col">From Id</th>
        <th scope="col">To Id</th>
        <th scope="col">Orderby Id</th>
        <th scope="col">Approver Id</th>
        <th scope="col">Issuer Id</th>
        <th scope="col">Indent Status</th>
        <th scope="col">Insert User Id</th>
        <th scope="col">Update User Id</th>
        <th scope="col">Insert Datetime</th>
        <th scope="col">Update Datetime</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($indent) > 0){
            forEach($indent as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->hospital_id; ?></td>
                    <td><?php echo $record->approve_date_time; ?></td>
                    <td><?php echo $record->issue_date_time; ?></td>
                    <td><?php echo $record->indent_date; ?></td>
                    <td><?php echo $record->from_id; ?></td>
                    <td><?php echo $record->to_id; ?></td>
                    <td><?php echo $record->orderby_id; ?></td>
                    <td><?php echo $record->approver_id; ?></td>
                    <td><?php echo $record->issuer_id; ?></td>
                    <td><?php echo $record->indent_status; ?></td>
                    <td><?php echo $record->insert_user_id; ?></td>
                    <td><?php echo $record->update_user_id; ?></td>
                    <td><?php echo $record->insert_datetime; ?></td>
                    <td><?php echo $record->update_datetime; ?></td>
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