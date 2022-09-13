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
      
      <input type="hidden" class="form-control" name="user_id" value="<?php echo $input_data->user_id; ?>" id="user_id">
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
      <label class="form-check-label" for="username">Username</label>
      <textarea class="form-control" name="username" id="username" rows="3"><?php echo $input_data->username; ?></textarea>
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="password">Password</label>
      <textarea class="form-control" name="password" id="password" rows="3"><?php echo $input_data->password; ?></textarea>
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="displayname">Displayname</label>
      <textarea class="form-control" name="displayname" id="displayname" rows="3"><?php echo $input_data->displayname; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Registration Date</th>
        <th scope="col">Registrar</th>
        <th scope="col">Examiner</th>
        <th scope="col">Technician</th>
        <th scope="col">Screener</th>
        <th scope="col">Issuer</th>
        <th scope="col">Requester</th>
        <th scope="col">Admin</th>
        <th scope="col">Displayname</th>
        <th scope="col">Hospital Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($bb_user) > 0){
            forEach($bb_user as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->username; ?></td>
                    <td><?php echo $record->password; ?></td>
                    <td><?php echo $record->registration_date; ?></td>
                    <td><?php echo $record->registrar; ?></td>
                    <td><?php echo $record->examiner; ?></td>
                    <td><?php echo $record->technician; ?></td>
                    <td><?php echo $record->screener; ?></td>
                    <td><?php echo $record->issuer; ?></td>
                    <td><?php echo $record->requester; ?></td>
                    <td><?php echo $record->admin; ?></td>
                    <td><?php echo $record->displayname; ?></td>
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