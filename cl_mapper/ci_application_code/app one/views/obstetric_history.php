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
      <label class="form-check-label" for="afi">Afi</label>
      <input type="text" class="form-control" name="afi" value="<?php echo $input_data->afi; ?>" id="afi">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="anesthesia_type">Anesthesia Type</label>
      <input type="text" class="form-control" name="anesthesia_type" value="<?php echo $input_data->anesthesia_type; ?>" id="anesthesia_type">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="apgar">Apgar</label>
      <input type="text" class="form-control" name="apgar" value="<?php echo $input_data->apgar; ?>" id="apgar">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="booking_status">Booking Status</label>
      <input type="text" class="form-control" name="booking_status" value="<?php echo $input_data->booking_status; ?>" id="booking_status">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="delivery_mode">Delivery Mode</label>
      <input type="text" class="form-control" name="delivery_mode" value="<?php echo $input_data->delivery_mode; ?>" id="delivery_mode">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="gestation">Gestation</label>
      <input type="text" class="form-control" name="gestation" value="<?php echo $input_data->gestation; ?>" id="gestation">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="outcome">Outcome</label>
      <input type="text" class="form-control" name="outcome" value="<?php echo $input_data->outcome; ?>" id="outcome">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="placenta">Placenta</label>
      <input type="text" class="form-control" name="placenta" value="<?php echo $input_data->placenta; ?>" id="placenta">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="birth_weight">Birth Weight</label>
      <input type="number" class="form-control" name="birth_weight" value="<?php echo $input_data->birth_weight; ?>" id="birth_weight">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="pregnancy_number">Pregnancy Number</label>
      <input type="number" class="form-control" name="pregnancy_number" value="<?php echo $input_data->pregnancy_number; ?>" id="pregnancy_number">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="dob">Dob</label>
      <input type="date" class="form-control" name="dob" value="<?php echo $input_data->dob; ?>" id="dob">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="dod">Dod</label>
      <input type="date" class="form-control" name="dod" value="<?php echo $input_data->dod; ?>" id="dod">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="edd">Edd</label>
      <input type="date" class="form-control" name="edd" value="<?php echo $input_data->edd; ?>" id="edd">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="lmp">Lmp</label>
      <input type="date" class="form-control" name="lmp" value="<?php echo $input_data->lmp; ?>" id="lmp">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="suture_removal_date">Suture Removal Date</label>
      <input type="date" class="form-control" name="suture_removal_date" value="<?php echo $input_data->suture_removal_date; ?>" id="suture_removal_date">
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
        <th scope="col">Afi</th>
        <th scope="col">Anesthesia Type</th>
        <th scope="col">Apgar</th>
        <th scope="col">Birth Weight</th>
        <th scope="col">Booking Status</th>
        <th scope="col">Cause Of Death</th>
        <th scope="col">Delivery Mode</th>
        <th scope="col">Dob</th>
        <th scope="col">Dod</th>
        <th scope="col">Edd</th>
        <th scope="col">Gestation</th>
        <th scope="col">Lmp</th>
        <th scope="col">Nicu Admission</th>
        <th scope="col">Nicu Admission Reason</th>
        <th scope="col">Outcome</th>
        <th scope="col">Patient Id</th>
        <th scope="col">Placenta</th>
        <th scope="col">Pregnancy Number</th>
        <th scope="col">Sex</th>
        <th scope="col">Suture Removal Date</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($obstetric_history) > 0){
            forEach($obstetric_history as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->afi; ?></td>
                    <td><?php echo $record->anesthesia_type; ?></td>
                    <td><?php echo $record->apgar; ?></td>
                    <td><?php echo $record->birth_weight; ?></td>
                    <td><?php echo $record->booking_status; ?></td>
                    <td><?php echo $record->cause_of_death; ?></td>
                    <td><?php echo $record->delivery_mode; ?></td>
                    <td><?php echo $record->dob; ?></td>
                    <td><?php echo $record->dod; ?></td>
                    <td><?php echo $record->edd; ?></td>
                    <td><?php echo $record->gestation; ?></td>
                    <td><?php echo $record->lmp; ?></td>
                    <td><?php echo $record->nicu_admission; ?></td>
                    <td><?php echo $record->nicu_admission_reason; ?></td>
                    <td><?php echo $record->outcome; ?></td>
                    <td><?php echo $record->patient_id; ?></td>
                    <td><?php echo $record->placenta; ?></td>
                    <td><?php echo $record->pregnancy_number; ?></td>
                    <td><?php echo $record->sex; ?></td>
                    <td><?php echo $record->suture_removal_date; ?></td>
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