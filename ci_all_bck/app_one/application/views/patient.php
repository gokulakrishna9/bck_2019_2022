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
      <label class="form-check-label" for="patient_id_manual">Patient Id Manual</label>
      <input type="text" class="form-control" name="patient_id_manual" value="<?php echo $input_data->patient_id_manual; ?>" id="patient_id_manual">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="first_name">First Name</label>
      <input type="text" class="form-control" name="first_name" value="<?php echo $input_data->first_name; ?>" id="first_name">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="middle_name">Middle Name</label>
      <input type="text" class="form-control" name="middle_name" value="<?php echo $input_data->middle_name; ?>" id="middle_name">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="last_name">Last Name</label>
      <input type="text" class="form-control" name="last_name" value="<?php echo $input_data->last_name; ?>" id="last_name">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="gender">Gender</label>
      <input type="text" class="form-control" name="gender" value="<?php echo $input_data->gender; ?>" id="gender">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="country_code">Country Code</label>
      <input type="text" class="form-control" name="country_code" value="<?php echo $input_data->country_code; ?>" id="country_code">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="state_code">State Code</label>
      <input type="text" class="form-control" name="state_code" value="<?php echo $input_data->state_code; ?>" id="state_code">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="district_id">District Id</label>
      <input type="text" class="form-control" name="district_id" value="<?php echo $input_data->district_id; ?>" id="district_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="phone">Phone</label>
      <input type="text" class="form-control" name="phone" value="<?php echo $input_data->phone; ?>" id="phone">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="alt_phone">Alt Phone</label>
      <input type="text" class="form-control" name="alt_phone" value="<?php echo $input_data->alt_phone; ?>" id="alt_phone">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="father_name">Father Name</label>
      <input type="text" class="form-control" name="father_name" value="<?php echo $input_data->father_name; ?>" id="father_name">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="mother_name">Mother Name</label>
      <input type="text" class="form-control" name="mother_name" value="<?php echo $input_data->mother_name; ?>" id="mother_name">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="spouse_name">Spouse Name</label>
      <input type="text" class="form-control" name="spouse_name" value="<?php echo $input_data->spouse_name; ?>" id="spouse_name">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="id_proof_number">Id Proof Number</label>
      <input type="text" class="form-control" name="id_proof_number" value="<?php echo $input_data->id_proof_number; ?>" id="id_proof_number">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="education_level">Education Level</label>
      <input type="text" class="form-control" name="education_level" value="<?php echo $input_data->education_level; ?>" id="education_level">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="education_qualification">Education Qualification</label>
      <input type="text" class="form-control" name="education_qualification" value="<?php echo $input_data->education_qualification; ?>" id="education_qualification">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="blood_group">Blood Group</label>
      <input type="text" class="form-control" name="blood_group" value="<?php echo $input_data->blood_group; ?>" id="blood_group">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="mr_no">Mr No</label>
      <input type="text" class="form-control" name="mr_no" value="<?php echo $input_data->mr_no; ?>" id="mr_no">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="bc_no">Bc No</label>
      <input type="text" class="form-control" name="bc_no" value="<?php echo $input_data->bc_no; ?>" id="bc_no">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="gestation_type">Gestation Type</label>
      <input type="text" class="form-control" name="gestation_type" value="<?php echo $input_data->gestation_type; ?>" id="gestation_type">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="delivery_mode">Delivery Mode</label>
      <input type="text" class="form-control" name="delivery_mode" value="<?php echo $input_data->delivery_mode; ?>" id="delivery_mode">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="delivery_location">Delivery Location</label>
      <input type="text" class="form-control" name="delivery_location" value="<?php echo $input_data->delivery_location; ?>" id="delivery_location">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_type">Hospital Type</label>
      <input type="text" class="form-control" name="hospital_type" value="<?php echo $input_data->hospital_type; ?>" id="hospital_type">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="delivery_location_type">Delivery Location Type</label>
      <input type="text" class="form-control" name="delivery_location_type" value="<?php echo $input_data->delivery_location_type; ?>" id="delivery_location_type">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="delivery_plan">Delivery Plan</label>
      <input type="text" class="form-control" name="delivery_plan" value="<?php echo $input_data->delivery_plan; ?>" id="delivery_plan">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="age_years">Age Years</label>
      <input type="number" class="form-control" name="age_years" value="<?php echo $input_data->age_years; ?>" id="age_years">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="age_months">Age Months</label>
      <input type="number" class="form-control" name="age_months" value="<?php echo $input_data->age_months; ?>" id="age_months">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="age_days">Age Days</label>
      <input type="number" class="form-control" name="age_days" value="<?php echo $input_data->age_days; ?>" id="age_days">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="gestation">Gestation</label>
      <input type="number" class="form-control" name="gestation" value="<?php echo $input_data->gestation; ?>" id="gestation">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="birth_weight">Birth Weight</label>
      <input type="number" class="form-control" name="birth_weight" value="<?php echo $input_data->birth_weight; ?>" id="birth_weight">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="insert_by_user_id">Insert By User Id</label>
      <input type="number" class="form-control" name="insert_by_user_id" value="<?php echo $input_data->insert_by_user_id; ?>" id="insert_by_user_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="update_by_user_id">Update By User Id</label>
      <input type="number" class="form-control" name="update_by_user_id" value="<?php echo $input_data->update_by_user_id; ?>" id="update_by_user_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="temp_patient_id">Temp Patient Id</label>
      <input type="number" class="form-control" name="temp_patient_id" value="<?php echo $input_data->temp_patient_id; ?>" id="temp_patient_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="dob">Dob</label>
      <input type="date" class="form-control" name="dob" value="<?php echo $input_data->dob; ?>" id="dob">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="patient_id" value="<?php echo $input_data->patient_id; ?>" id="patient_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="id_proof_type_id">Id Proof Type</label>
      <?php foreach($id_proof_type as $record){ ?>
      <select class="form-control" name="id_proof_type_id" id="id_proof_type_id">
      <option value="<?php echo $record->id_proof_type_id; ?>" <?php if($input_data->id_proof_type_id == $record->id_proof_type_id) echo 'selected'; ?>><?php echo $record->id_proof_type; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="occupation_id">Occupation</label>
      <?php foreach($occupation as $record){ ?>
      <select class="form-control" name="occupation_id" id="occupation_id">
      <option value="<?php echo $record->occupation_id; ?>" <?php if($input_data->occupation_id == $record->occupation_id) echo 'selected'; ?>><?php echo $record->occupation; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_id">Hospital</label>
      <?php foreach($hospital as $record){ ?>
      <select class="form-control" name="hospital_id" id="hospital_id">
      <option value="<?php echo $record->hospital_id; ?>" <?php if($input_data->hospital_id == $record->hospital_id) echo 'selected'; ?>><?php echo $record->hospital; ?></option>
      <?php } ?>
      </select>
    </div>
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
      <label class="form-check-label" for="identification_marks">Identification Marks</label>
      <textarea class="form-control" name="identification_marks" id="identification_marks" rows="3"><?php echo $input_data->identification_marks; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="address">Address</label>
      <textarea class="form-control" name="address" id="address" rows="3"><?php echo $input_data->address; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="place">Place</label>
      <textarea class="form-control" name="place" id="place" rows="3"><?php echo $input_data->place; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="delivery_place">Delivery Place</label>
      <textarea class="form-control" name="delivery_place" id="delivery_place" rows="3"><?php echo $input_data->delivery_place; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="congenital_anomalies">Congenital Anomalies</label>
      <textarea class="form-control" name="congenital_anomalies" id="congenital_anomalies" rows="3"><?php echo $input_data->congenital_anomalies; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Patient Id Manual</th>
        <th scope="col">Identification Marks</th>
        <th scope="col">First Name</th>
        <th scope="col">Middle Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Dob</th>
        <th scope="col">Age Years</th>
        <th scope="col">Age Months</th>
        <th scope="col">Age Days</th>
        <th scope="col">Gender</th>
        <th scope="col">Address</th>
        <th scope="col">Place</th>
        <th scope="col">Country Code</th>
        <th scope="col">State Code</th>
        <th scope="col">District Id</th>
        <th scope="col">Phone</th>
        <th scope="col">Alt Phone</th>
        <th scope="col">Father Name</th>
        <th scope="col">Mother Name</th>
        <th scope="col">Spouse Name</th>
        <th scope="col">Id Proof Type Id</th>
        <th scope="col">Id Proof Number</th>
        <th scope="col">Occupation Id</th>
        <th scope="col">Education Level</th>
        <th scope="col">Education Qualification</th>
        <th scope="col">Blood Group</th>
        <th scope="col">Mr No</th>
        <th scope="col">Bc No</th>
        <th scope="col">Gestation</th>
        <th scope="col">Gestation Type</th>
        <th scope="col">Delivery Mode</th>
        <th scope="col">Delivery Place</th>
        <th scope="col">Delivery Location</th>
        <th scope="col">Hospital Type</th>
        <th scope="col">Delivery Location Type</th>
        <th scope="col">Delivery Plan</th>
        <th scope="col">Birth Weight</th>
        <th scope="col">Congenital Anomalies</th>
        <th scope="col">Insert By User Id</th>
        <th scope="col">Update By User Id</th>
        <th scope="col">Insert Datetime</th>
        <th scope="col">Update Datetime</th>
        <th scope="col">Temp Patient Id</th>
        <th scope="col">Hospital Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($patient) > 0){
            forEach($patient as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->patient_id_manual; ?></td>
                    <td><?php echo $record->identification_marks; ?></td>
                    <td><?php echo $record->first_name; ?></td>
                    <td><?php echo $record->middle_name; ?></td>
                    <td><?php echo $record->last_name; ?></td>
                    <td><?php echo $record->dob; ?></td>
                    <td><?php echo $record->age_years; ?></td>
                    <td><?php echo $record->age_months; ?></td>
                    <td><?php echo $record->age_days; ?></td>
                    <td><?php echo $record->gender; ?></td>
                    <td><?php echo $record->address; ?></td>
                    <td><?php echo $record->place; ?></td>
                    <td><?php echo $record->country_code; ?></td>
                    <td><?php echo $record->state_code; ?></td>
                    <td><?php echo $record->district_id; ?></td>
                    <td><?php echo $record->phone; ?></td>
                    <td><?php echo $record->alt_phone; ?></td>
                    <td><?php echo $record->father_name; ?></td>
                    <td><?php echo $record->mother_name; ?></td>
                    <td><?php echo $record->spouse_name; ?></td>
                    <td><?php echo $record->id_proof_type_id; ?></td>
                    <td><?php echo $record->id_proof_number; ?></td>
                    <td><?php echo $record->occupation_id; ?></td>
                    <td><?php echo $record->education_level; ?></td>
                    <td><?php echo $record->education_qualification; ?></td>
                    <td><?php echo $record->blood_group; ?></td>
                    <td><?php echo $record->mr_no; ?></td>
                    <td><?php echo $record->bc_no; ?></td>
                    <td><?php echo $record->gestation; ?></td>
                    <td><?php echo $record->gestation_type; ?></td>
                    <td><?php echo $record->delivery_mode; ?></td>
                    <td><?php echo $record->delivery_place; ?></td>
                    <td><?php echo $record->delivery_location; ?></td>
                    <td><?php echo $record->hospital_type; ?></td>
                    <td><?php echo $record->delivery_location_type; ?></td>
                    <td><?php echo $record->delivery_plan; ?></td>
                    <td><?php echo $record->birth_weight; ?></td>
                    <td><?php echo $record->congenital_anomalies; ?></td>
                    <td><?php echo $record->insert_by_user_id; ?></td>
                    <td><?php echo $record->update_by_user_id; ?></td>
                    <td><?php echo $record->insert_datetime; ?></td>
                    <td><?php echo $record->update_datetime; ?></td>
                    <td><?php echo $record->temp_patient_id; ?></td>
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