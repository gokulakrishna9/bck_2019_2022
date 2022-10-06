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
      
      <input type="hidden" class="form-control" name="helpline_email_id" value="<?php echo $input_data->helpline_email_id; ?>" id="helpline_email_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="call_id">Call Type</label>
      <?php foreach($helpline_call as $record){ ?>
      <select class="form-control" name="call_id" id="call_id">
      <option value="<?php echo $record->call_id; ?>" <?php if($input_data->call_id == $record->call_id) echo 'selected'; ?>><?php echo $record->call_type; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="user_id">Displayname</label>
      <?php foreach($bb_user as $record){ ?>
      <select class="form-control" name="user_id" id="user_id">
      <option value="<?php echo $record->user_id; ?>" <?php if($input_data->user_id == $record->user_id) echo 'selected'; ?>><?php echo $record->displayname; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="user_id">Password</label>
      <?php foreach($user as $record){ ?>
      <select class="form-control" name="user_id" id="user_id">
      <option value="<?php echo $record->user_id; ?>" <?php if($input_data->user_id == $record->user_id) echo 'selected'; ?>><?php echo $record->password; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="cc_email">Cc Email</label>
      <textarea class="form-control" name="cc_email" id="cc_email" rows="3"><?php echo $input_data->cc_email; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="greeting">Greeting</label>
      <textarea class="form-control" name="greeting" id="greeting" rows="3"><?php echo $input_data->greeting; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="note">Note</label>
      <textarea class="form-control" name="note" id="note" rows="3"><?php echo $input_data->note; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="to_email">To Email</label>
      <textarea class="form-control" name="to_email" id="to_email" rows="3"><?php echo $input_data->to_email; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Call Id</th>
        <th scope="col">Cc Email</th>
        <th scope="col">Email Date Time</th>
        <th scope="col">Greeting</th>
        <th scope="col">Note</th>
        <th scope="col">Phone Shared</th>
        <th scope="col">To Email</th>
        <th scope="col">User Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($helpline_email) > 0){
            forEach($helpline_email as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->call_id; ?></td>
                    <td><?php echo $record->cc_email; ?></td>
                    <td><?php echo $record->email_date_time; ?></td>
                    <td><?php echo $record->greeting; ?></td>
                    <td><?php echo $record->note; ?></td>
                    <td><?php echo $record->phone_shared; ?></td>
                    <td><?php echo $record->to_email; ?></td>
                    <td><?php echo $record->user_id; ?></td>
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