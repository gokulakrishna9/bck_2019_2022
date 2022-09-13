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
      <label class="form-check-label" for="affiliated_to">Affiliated To</label>
      <input type="number" class="form-control" name="affiliated_to" value="<?php echo $input_data->affiliated_to; ?>" id="affiliated_to">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="college_id" value="<?php echo $input_data->college_id; ?>" id="college_id">
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
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="college_name">College Name</label>
      <textarea class="form-control" name="college_name" id="college_name" rows="3"><?php echo $input_data->college_name; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="address">Address</label>
      <textarea class="form-control" name="address" id="address" rows="3"><?php echo $input_data->address; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="email">Email</label>
      <textarea class="form-control" name="email" id="email" rows="3"><?php echo $input_data->email; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">College Name</th>
        <th scope="col">Affiliated To</th>
        <th scope="col">Address</th>
        <th scope="col">District Id</th>
        <th scope="col">Email</th>
        <th scope="col">University Flag</th>
        <th scope="col">Public Institution Flag</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($staff_applicant_college) > 0){
            forEach($staff_applicant_college as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->college_name; ?></td>
                    <td><?php echo $record->affiliated_to; ?></td>
                    <td><?php echo $record->address; ?></td>
                    <td><?php echo $record->district_id; ?></td>
                    <td><?php echo $record->email; ?></td>
                    <td><?php echo $record->university_flag; ?></td>
                    <td><?php echo $record->public_institution_flag; ?></td>
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