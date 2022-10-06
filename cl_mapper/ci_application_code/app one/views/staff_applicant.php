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
      <label class="form-check-label" for="email">Email</label>
      <input type="text" class="form-control" name="email" value="<?php echo $input_data->email; ?>" id="email">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="first_name">First Name</label>
      <input type="text" class="form-control" name="first_name" value="<?php echo $input_data->first_name; ?>" id="first_name">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="last_name">Last Name</label>
      <input type="text" class="form-control" name="last_name" value="<?php echo $input_data->last_name; ?>" id="last_name">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="phone">Phone</label>
      <input type="text" class="form-control" name="phone" value="<?php echo $input_data->phone; ?>" id="phone">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="phone_alternate">Phone Alternate</label>
      <input type="text" class="form-control" name="phone_alternate" value="<?php echo $input_data->phone_alternate; ?>" id="phone_alternate">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="date_of_birth">Date Of Birth</label>
      <input type="date" class="form-control" name="date_of_birth" value="<?php echo $input_data->date_of_birth; ?>" id="date_of_birth">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="applicant_id" value="<?php echo $input_data->applicant_id; ?>" id="applicant_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="district_id">District</label>
      <?php foreach($district as $record){ ?>
      <select class="form-control" name="district_id" id="district_id">
      <option value="<?php echo $record->district_id; ?>" <?php if($input_data->district_id == $record->district_id) echo 'selected'; ?>><?php echo $record->district; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="drive_id">Name</label>
      <?php foreach($staff_recruitment_drive as $record){ ?>
      <select class="form-control" name="drive_id" id="drive_id">
      <option value="<?php echo $record->drive_id; ?>" <?php if($input_data->drive_id == $record->drive_id) echo 'selected'; ?>><?php echo $record->name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="staff_id">Account Name</label>
      <?php foreach($staff as $record){ ?>
      <select class="form-control" name="staff_id" id="staff_id">
      <option value="<?php echo $record->staff_id; ?>" <?php if($input_data->staff_id == $record->staff_id) echo 'selected'; ?>><?php echo $record->account_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="address">Address</label>
      <textarea class="form-control" name="address" id="address" rows="3"><?php echo $input_data->address; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="fathers_name">Fathers Name</label>
      <textarea class="form-control" name="fathers_name" id="fathers_name" rows="3"><?php echo $input_data->fathers_name; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="gender">Gender</label>
      <textarea class="form-control" name="gender" id="gender" rows="3"><?php echo $input_data->gender; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="husbands_name">Husbands Name</label>
      <textarea class="form-control" name="husbands_name" id="husbands_name" rows="3"><?php echo $input_data->husbands_name; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="mothers_name">Mothers Name</label>
      <textarea class="form-control" name="mothers_name" id="mothers_name" rows="3"><?php echo $input_data->mothers_name; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="place">Place</label>
      <textarea class="form-control" name="place" id="place" rows="3"><?php echo $input_data->place; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Address</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col">District Id</th>
        <th scope="col">Drive Id</th>
        <th scope="col">Email</th>
        <th scope="col">Fathers Name</th>
        <th scope="col">First Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Husbands Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Mothers Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Phone Alternate</th>
        <th scope="col">Place</th>
        <th scope="col">Staff Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($staff_applicant) > 0){
            forEach($staff_applicant as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->address; ?></td>
                    <td><?php echo $record->date_of_birth; ?></td>
                    <td><?php echo $record->district_id; ?></td>
                    <td><?php echo $record->drive_id; ?></td>
                    <td><?php echo $record->email; ?></td>
                    <td><?php echo $record->fathers_name; ?></td>
                    <td><?php echo $record->first_name; ?></td>
                    <td><?php echo $record->gender; ?></td>
                    <td><?php echo $record->husbands_name; ?></td>
                    <td><?php echo $record->last_name; ?></td>
                    <td><?php echo $record->mothers_name; ?></td>
                    <td><?php echo $record->phone; ?></td>
                    <td><?php echo $record->phone_alternate; ?></td>
                    <td><?php echo $record->place; ?></td>
                    <td><?php echo $record->staff_id; ?></td>
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