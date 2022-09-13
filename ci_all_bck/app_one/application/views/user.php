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
      <label class="form-check-label" for="temp_user_id">Temp User Id</label>
      <input type="number" class="form-control" name="temp_user_id" value="<?php echo $input_data->temp_user_id; ?>" id="temp_user_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="present_login_time">Present Login Time</label>
      <input type="date" class="form-control" name="present_login_time" value="<?php echo $input_data->present_login_time; ?>" id="present_login_time">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="present_login_date">Present Login Date</label>
      <input type="date" class="form-control" name="present_login_date" value="<?php echo $input_data->present_login_date; ?>" id="present_login_date">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="past_login_time">Past Login Time</label>
      <input type="date" class="form-control" name="past_login_time" value="<?php echo $input_data->past_login_time; ?>" id="past_login_time">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="past_login_date">Past Login Date</label>
      <input type="date" class="form-control" name="past_login_date" value="<?php echo $input_data->past_login_date; ?>" id="past_login_date">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="user_id" value="<?php echo $input_data->user_id; ?>" id="user_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="staff_id">First Name</label>
      <?php foreach($staff as $record){ ?>
      <select class="form-control" name="staff_id" id="staff_id">
      <option value="<?php echo $record->staff_id; ?>" <?php if($input_data->staff_id == $record->staff_id) echo 'selected'; ?>><?php echo $record->first_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="username">Username</label>
      <textarea class="form-control" name="username" id="username" rows="3"><?php echo $input_data->username; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="password">Password</label>
      <textarea class="form-control" name="password" id="password" rows="3"><?php echo $input_data->password; ?></textarea>
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
        <th scope="col">Staff Id</th>
        <th scope="col">Present Login Time</th>
        <th scope="col">Present Login Date</th>
        <th scope="col">Past Login Time</th>
        <th scope="col">Past Login Date</th>
        <th scope="col">Temp User Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($user) > 0){
            forEach($user as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->username; ?></td>
                    <td><?php echo $record->password; ?></td>
                    <td><?php echo $record->staff_id; ?></td>
                    <td><?php echo $record->present_login_time; ?></td>
                    <td><?php echo $record->present_login_date; ?></td>
                    <td><?php echo $record->past_login_time; ?></td>
                    <td><?php echo $record->past_login_date; ?></td>
                    <td><?php echo $record->temp_user_id; ?></td>
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