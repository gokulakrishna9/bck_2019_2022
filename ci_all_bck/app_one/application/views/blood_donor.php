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
      <label class="form-check-label" for="maritial_status">Maritial Status</label>
      <input type="text" class="form-control" name="maritial_status" value="<?php echo $input_data->maritial_status; ?>" id="maritial_status">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="dob">Dob</label>
      <input type="text" class="form-control" name="dob" value="<?php echo $input_data->dob; ?>" id="dob">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="blood_group">Blood Group</label>
      <input type="text" class="form-control" name="blood_group" value="<?php echo $input_data->blood_group; ?>" id="blood_group">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="sub_group">Sub Group</label>
      <input type="text" class="form-control" name="sub_group" value="<?php echo $input_data->sub_group; ?>" id="sub_group">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="phone">Phone</label>
      <input type="text" class="form-control" name="phone" value="<?php echo $input_data->phone; ?>" id="phone">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="age">Age</label>
      <input type="number" class="form-control" name="age" value="<?php echo $input_data->age; ?>" id="age">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="donor_id" value="<?php echo $input_data->donor_id; ?>" id="donor_id">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_id">Hospital</label>
      <?php foreach($hospital as $record){ ?>
      <select class="form-control" name="hospital_id" id="hospital_id">
      <option value="<?php echo $record->hospital_id; ?>" <?php if($input_data->hospital_id == $record->hospital_id) echo 'selected'; ?>><?php echo $record->hospital; ?></option>
      <?php } ?>
      </select>
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
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="name">Name</label>
      <textarea class="form-control" name="name" id="name" rows="3"><?php echo $input_data->name; ?></textarea>
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="parent_spouse">Parent Spouse</label>
      <textarea class="form-control" name="parent_spouse" id="parent_spouse" rows="3"><?php echo $input_data->parent_spouse; ?></textarea>
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="occupation">Occupation</label>
      <textarea class="form-control" name="occupation" id="occupation" rows="3"><?php echo $input_data->occupation; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="email">Email</label>
      <textarea class="form-control" name="email" id="email" rows="3"><?php echo $input_data->email; ?></textarea>
    </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Name</th>
        <th scope="col">Parent Spouse</th>
        <th scope="col">Maritial Status</th>
        <th scope="col">Occupation</th>
        <th scope="col">Dob</th>
        <th scope="col">Age</th>
        <th scope="col">Sex</th>
        <th scope="col">Blood Group</th>
        <th scope="col">Sub Group</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Alerts</th>
        <th scope="col">Hospital Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($blood_donor) > 0){
            forEach($blood_donor as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->name; ?></td>
                    <td><?php echo $record->parent_spouse; ?></td>
                    <td><?php echo $record->maritial_status; ?></td>
                    <td><?php echo $record->occupation; ?></td>
                    <td><?php echo $record->dob; ?></td>
                    <td><?php echo $record->age; ?></td>
                    <td><?php echo $record->sex; ?></td>
                    <td><?php echo $record->blood_group; ?></td>
                    <td><?php echo $record->sub_group; ?></td>
                    <td><?php echo $record->phone; ?></td>
                    <td><?php echo $record->email; ?></td>
                    <td><?php echo $record->address; ?></td>
                    <td><?php echo $record->alerts; ?></td>
                    <td><?php echo $record->hospital_id; ?></td>
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