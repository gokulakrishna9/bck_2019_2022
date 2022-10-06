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
      <label class="form-check-label" for="date">Date</label>
      <input type="date" class="form-control" name="date" value="<?php echo $input_data->date; ?>" id="date">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="time">Time</label>
      <input type="date" class="form-control" name="time" value="<?php echo $input_data->time; ?>" id="time">
    </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="activity_done_id" value="<?php echo $input_data->activity_done_id; ?>" id="activity_done_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="user_id">Displayname</label>
      <?php foreach($bb_user as $record){ ?>
      <select class="form-control" name="user_id" id="user_id">
      <option value="<?php echo $record->user_id; ?>" <?php if($input_data->user_id == $record->user_id) echo 'selected'; ?>><?php echo $record->displayname; ?></option>
      <?php } ?>
      </select>
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="user_id">Password</label>
      <?php foreach($user as $record){ ?>
      <select class="form-control" name="user_id" id="user_id">
      <option value="<?php echo $record->user_id; ?>" <?php if($input_data->user_id == $record->user_id) echo 'selected'; ?>><?php echo $record->password; ?></option>
      <?php } ?>
      </select>
    </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Activity Id</th>
        <th scope="col">Comments</th>
        <th scope="col">Date</th>
        <th scope="col">Datetime</th>
        <th scope="col">Score</th>
        <th scope="col">Time</th>
        <th scope="col">User Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($activity_done) > 0){
            forEach($activity_done as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->activity_id; ?></td>
                    <td><?php echo $record->comments; ?></td>
                    <td><?php echo $record->date; ?></td>
                    <td><?php echo $record->datetime; ?></td>
                    <td><?php echo $record->score; ?></td>
                    <td><?php echo $record->time; ?></td>
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