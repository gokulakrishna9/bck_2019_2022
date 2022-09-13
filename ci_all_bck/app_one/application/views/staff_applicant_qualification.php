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
      <label class="form-check-label" for="registration_number">Registration Number</label>
      <input type="number" class="form-control" name="registration_number" value="<?php echo $input_data->registration_number; ?>" id="registration_number">
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
      
      <input type="hidden" class="form-control" name="id" value="<?php echo $input_data->id; ?>" id="id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="applicant_id">First Name</label>
      <?php foreach($staff_applicant as $record){ ?>
      <select class="form-control" name="applicant_id" id="applicant_id">
      <option value="<?php echo $record->applicant_id; ?>" <?php if($input_data->applicant_id == $record->applicant_id) echo 'selected'; ?>><?php echo $record->first_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="qualification_id">Degree</label>
      <?php foreach($qualification as $record){ ?>
      <select class="form-control" name="qualification_id" id="qualification_id">
      <option value="<?php echo $record->qualification_id; ?>" <?php if($input_data->qualification_id == $record->qualification_id) echo 'selected'; ?>><?php echo $record->degree; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="qualification_id">Qualification</label>
      <?php foreach($staff_applicant_qualification_master as $record){ ?>
      <select class="form-control" name="qualification_id" id="qualification_id">
      <option value="<?php echo $record->qualification_id; ?>" <?php if($input_data->qualification_id == $record->qualification_id) echo 'selected'; ?>><?php echo $record->qualification; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="college_id">College Name</label>
      <?php foreach($staff_applicant_college as $record){ ?>
      <select class="form-control" name="college_id" id="college_id">
      <option value="<?php echo $record->college_id; ?>" <?php if($input_data->college_id == $record->college_id) echo 'selected'; ?>><?php echo $record->college_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="staff_id">First Name</label>
      <?php foreach($staff as $record){ ?>
      <select class="form-control" name="staff_id" id="staff_id">
      <option value="<?php echo $record->staff_id; ?>" <?php if($input_data->staff_id == $record->staff_id) echo 'selected'; ?>><?php echo $record->first_name; ?></option>
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
        <th scope="col">Applicant Id</th>
        <th scope="col">Qualification Id</th>
        <th scope="col">College Id</th>
        <th scope="col">Registration Number</th>
        <th scope="col">From Date</th>
        <th scope="col">To Date</th>
        <th scope="col">Staff Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($staff_applicant_qualification) > 0){
            forEach($staff_applicant_qualification as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->applicant_id; ?></td>
                    <td><?php echo $record->qualification_id; ?></td>
                    <td><?php echo $record->college_id; ?></td>
                    <td><?php echo $record->registration_number; ?></td>
                    <td><?php echo $record->from_date; ?></td>
                    <td><?php echo $record->to_date; ?></td>
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