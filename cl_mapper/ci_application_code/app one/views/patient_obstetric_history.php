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
      <label class="form-check-label" for="conception_type">Conception Type</label>
      <input type="number" class="form-control" name="conception_type" value="<?php echo $input_data->conception_type; ?>" id="conception_type">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="delivery_mode_id">Delivery Mode Id</label>
      <input type="number" class="form-control" name="delivery_mode_id" value="<?php echo $input_data->delivery_mode_id; ?>" id="delivery_mode_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="delivery_outcome">Delivery Outcome</label>
      <input type="number" class="form-control" name="delivery_outcome" value="<?php echo $input_data->delivery_outcome; ?>" id="delivery_outcome">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="pregnancy_number">Pregnancy Number</label>
      <input type="number" class="form-control" name="pregnancy_number" value="<?php echo $input_data->pregnancy_number; ?>" id="pregnancy_number">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="weight_at_birth">Weight At Birth</label>
      <input type="number" class="form-control" name="weight_at_birth" value="<?php echo $input_data->weight_at_birth; ?>" id="weight_at_birth">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="date_of_birth">Date Of Birth</label>
      <input type="date" class="form-control" name="date_of_birth" value="<?php echo $input_data->date_of_birth; ?>" id="date_of_birth">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="date_of_death">Date Of Death</label>
      <input type="date" class="form-control" name="date_of_death" value="<?php echo $input_data->date_of_death; ?>" id="date_of_death">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="edd_date">Edd Date</label>
      <input type="date" class="form-control" name="edd_date" value="<?php echo $input_data->edd_date; ?>" id="edd_date">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="imp_date">Imp Date</label>
      <input type="date" class="form-control" name="imp_date" value="<?php echo $input_data->imp_date; ?>" id="imp_date">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="obstetric_history_id" value="<?php echo $input_data->obstetric_history_id; ?>" id="obstetric_history_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="patient_id">Age</label>
      <?php foreach($bb_external_patient as $record){ ?>
      <select class="form-control" name="patient_id" id="patient_id">
      <option value="<?php echo $record->patient_id; ?>" <?php if($input_data->patient_id == $record->patient_id) echo 'selected'; ?>><?php echo $record->age; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="patient_id">Address</label>
      <?php foreach($patient as $record){ ?>
      <select class="form-control" name="patient_id" id="patient_id">
      <option value="<?php echo $record->patient_id; ?>" <?php if($input_data->patient_id == $record->patient_id) echo 'selected'; ?>><?php echo $record->address; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="apgar">Apgar</label>
      <textarea class="form-control" name="apgar" id="apgar" rows="3"><?php echo $input_data->apgar; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="cause_of_death">Cause Of Death</label>
      <textarea class="form-control" name="cause_of_death" id="cause_of_death" rows="3"><?php echo $input_data->cause_of_death; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="nicu_admission_reason">Nicu Admission Reason</label>
      <textarea class="form-control" name="nicu_admission_reason" id="nicu_admission_reason" rows="3"><?php echo $input_data->nicu_admission_reason; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Alive</th>
        <th scope="col">Apgar</th>
        <th scope="col">Booked</th>
        <th scope="col">Cause Of Death</th>
        <th scope="col">Conception Type</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col">Date Of Death</th>
        <th scope="col">Delivered</th>
        <th scope="col">Delivery Mode Id</th>
        <th scope="col">Delivery Outcome</th>
        <th scope="col">Edd Date</th>
        <th scope="col">Gender</th>
        <th scope="col">Imp Date</th>
        <th scope="col">Nicu Admission</th>
        <th scope="col">Nicu Admission Reason</th>
        <th scope="col">Patient Id</th>
        <th scope="col">Pregnancy Number</th>
        <th scope="col">Weight At Birth</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($patient_obstetric_history) > 0){
            forEach($patient_obstetric_history as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->alive; ?></td>
                    <td><?php echo $record->apgar; ?></td>
                    <td><?php echo $record->booked; ?></td>
                    <td><?php echo $record->cause_of_death; ?></td>
                    <td><?php echo $record->conception_type; ?></td>
                    <td><?php echo $record->date_of_birth; ?></td>
                    <td><?php echo $record->date_of_death; ?></td>
                    <td><?php echo $record->delivered; ?></td>
                    <td><?php echo $record->delivery_mode_id; ?></td>
                    <td><?php echo $record->delivery_outcome; ?></td>
                    <td><?php echo $record->edd_date; ?></td>
                    <td><?php echo $record->gender; ?></td>
                    <td><?php echo $record->imp_date; ?></td>
                    <td><?php echo $record->nicu_admission; ?></td>
                    <td><?php echo $record->nicu_admission_reason; ?></td>
                    <td><?php echo $record->patient_id; ?></td>
                    <td><?php echo $record->pregnancy_number; ?></td>
                    <td><?php echo $record->weight_at_birth; ?></td>
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