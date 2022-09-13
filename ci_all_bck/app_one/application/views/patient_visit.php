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
      <label class="form-check-label" for="visit_type">Visit Type</label>
      <input type="text" class="form-control" name="visit_type" value="<?php echo $input_data->visit_type; ?>" id="visit_type">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="nurse">Nurse</label>
      <input type="text" class="form-control" name="nurse" value="<?php echo $input_data->nurse; ?>" id="nurse">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="insurance_case">Insurance Case</label>
      <input type="text" class="form-control" name="insurance_case" value="<?php echo $input_data->insurance_case; ?>" id="insurance_case">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="insurance_no">Insurance No</label>
      <input type="text" class="form-control" name="insurance_no" value="<?php echo $input_data->insurance_no; ?>" id="insurance_no">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="icd_10">Icd 10</label>
      <input type="text" class="form-control" name="icd_10" value="<?php echo $input_data->icd_10; ?>" id="icd_10">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="icd_10_ext">Icd 10 Ext</label>
      <input type="text" class="form-control" name="icd_10_ext" value="<?php echo $input_data->icd_10_ext; ?>" id="icd_10_ext">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="outcome">Outcome</label>
      <input type="text" class="form-control" name="outcome" value="<?php echo $input_data->outcome; ?>" id="outcome">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="arrival_mode">Arrival Mode</label>
      <input type="text" class="form-control" name="arrival_mode" value="<?php echo $input_data->arrival_mode; ?>" id="arrival_mode">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="admit_id">Admit Id</label>
      <input type="number" class="form-control" name="admit_id" value="<?php echo $input_data->admit_id; ?>" id="admit_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hosp_file_no">Hosp File No</label>
      <input type="number" class="form-control" name="hosp_file_no" value="<?php echo $input_data->hosp_file_no; ?>" id="hosp_file_no">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="unit">Unit</label>
      <input type="number" class="form-control" name="unit" value="<?php echo $input_data->unit; ?>" id="unit">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="area">Area</label>
      <input type="number" class="form-control" name="area" value="<?php echo $input_data->area; ?>" id="area">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="doctor_id">Doctor Id</label>
      <input type="number" class="form-control" name="doctor_id" value="<?php echo $input_data->doctor_id; ?>" id="doctor_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="admit_weight">Admit Weight</label>
      <input type="number" class="form-control" name="admit_weight" value="<?php echo $input_data->admit_weight; ?>" id="admit_weight">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="pulse_rate">Pulse Rate</label>
      <input type="number" class="form-control" name="pulse_rate" value="<?php echo $input_data->pulse_rate; ?>" id="pulse_rate">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="respiratory_rate">Respiratory Rate</label>
      <input type="number" class="form-control" name="respiratory_rate" value="<?php echo $input_data->respiratory_rate; ?>" id="respiratory_rate">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="temperature">Temperature</label>
      <input type="number" class="form-control" name="temperature" value="<?php echo $input_data->temperature; ?>" id="temperature">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="sbp">Sbp</label>
      <input type="number" class="form-control" name="sbp" value="<?php echo $input_data->sbp; ?>" id="sbp">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="dbp">Dbp</label>
      <input type="number" class="form-control" name="dbp" value="<?php echo $input_data->dbp; ?>" id="dbp">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="discharge_weight">Discharge Weight</label>
      <input type="number" class="form-control" name="discharge_weight" value="<?php echo $input_data->discharge_weight; ?>" id="discharge_weight">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="refereal_hospital_id">Refereal Hospital Id</label>
      <input type="number" class="form-control" name="refereal_hospital_id" value="<?php echo $input_data->refereal_hospital_id; ?>" id="refereal_hospital_id">
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
      <label class="form-check-label" for="temp_visit_id">Temp Visit Id</label>
      <input type="number" class="form-control" name="temp_visit_id" value="<?php echo $input_data->temp_visit_id; ?>" id="temp_visit_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="admit_date">Admit Date</label>
      <input type="date" class="form-control" name="admit_date" value="<?php echo $input_data->admit_date; ?>" id="admit_date">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="admit_time">Admit Time</label>
      <input type="date" class="form-control" name="admit_time" value="<?php echo $input_data->admit_time; ?>" id="admit_time">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="outcome_date">Outcome Date</label>
      <input type="date" class="form-control" name="outcome_date" value="<?php echo $input_data->outcome_date; ?>" id="outcome_date">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="outcome_time">Outcome Time</label>
      <input type="date" class="form-control" name="outcome_time" value="<?php echo $input_data->outcome_time; ?>" id="outcome_time">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="ip_file_received">Ip File Received</label>
      <input type="date" class="form-control" name="ip_file_received" value="<?php echo $input_data->ip_file_received; ?>" id="ip_file_received">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="visit_id" value="<?php echo $input_data->visit_id; ?>" id="visit_id">
    </div>
  </div>
  <div class="form-row" id="">
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
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="visit_name_id">Visit Name</label>
      <?php foreach($visit_name as $record){ ?>
      <select class="form-control" name="visit_name_id" id="visit_name_id">
      <option value="<?php echo $record->visit_name_id; ?>" <?php if($input_data->visit_name_id == $record->visit_name_id) echo 'selected'; ?>><?php echo $record->visit_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="patient_id">First Name</label>
      <?php foreach($bb_external_patient as $record){ ?>
      <select class="form-control" name="patient_id" id="patient_id">
      <option value="<?php echo $record->patient_id; ?>" <?php if($input_data->patient_id == $record->patient_id) echo 'selected'; ?>><?php echo $record->first_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="patient_id">Patient Id Manual</label>
      <?php foreach($patient as $record){ ?>
      <select class="form-control" name="patient_id" id="patient_id">
      <option value="<?php echo $record->patient_id; ?>" <?php if($input_data->patient_id == $record->patient_id) echo 'selected'; ?>><?php echo $record->patient_id_manual; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="department_id">Department</label>
      <?php foreach($department as $record){ ?>
      <select class="form-control" name="department_id" id="department_id">
      <option value="<?php echo $record->department_id; ?>" <?php if($input_data->department_id == $record->department_id) echo 'selected'; ?>><?php echo $record->department; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="insurance_id">Insurance Name</label>
      <?php foreach($insurance as $record){ ?>
      <select class="form-control" name="insurance_id" id="insurance_id">
      <option value="<?php echo $record->insurance_id; ?>" <?php if($input_data->insurance_id == $record->insurance_id) echo 'selected'; ?>><?php echo $record->insurance_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="presenting_complaints">Presenting Complaints</label>
      <textarea class="form-control" name="presenting_complaints" id="presenting_complaints" rows="3"><?php echo $input_data->presenting_complaints; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="past_history">Past History</label>
      <textarea class="form-control" name="past_history" id="past_history" rows="3"><?php echo $input_data->past_history; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="cvs">Cvs</label>
      <textarea class="form-control" name="cvs" id="cvs" rows="3"><?php echo $input_data->cvs; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="rs">Rs</label>
      <textarea class="form-control" name="rs" id="rs" rows="3"><?php echo $input_data->rs; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="pa">Pa</label>
      <textarea class="form-control" name="pa" id="pa" rows="3"><?php echo $input_data->pa; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="cns">Cns</label>
      <textarea class="form-control" name="cns" id="cns" rows="3"><?php echo $input_data->cns; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="cxr">Cxr</label>
      <textarea class="form-control" name="cxr" id="cxr" rows="3"><?php echo $input_data->cxr; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="provisional_diagnosis">Provisional Diagnosis</label>
      <textarea class="form-control" name="provisional_diagnosis" id="provisional_diagnosis" rows="3"><?php echo $input_data->provisional_diagnosis; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="final_diagnosis">Final Diagnosis</label>
      <textarea class="form-control" name="final_diagnosis" id="final_diagnosis" rows="3"><?php echo $input_data->final_diagnosis; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="decision">Decision</label>
      <textarea class="form-control" name="decision" id="decision" rows="3"><?php echo $input_data->decision; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="advise">Advise</label>
      <textarea class="form-control" name="advise" id="advise" rows="3"><?php echo $input_data->advise; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Hospital Id</th>
        <th scope="col">Admit Id</th>
        <th scope="col">Visit Type</th>
        <th scope="col">Visit Name Id</th>
        <th scope="col">Patient Id</th>
        <th scope="col">Hosp File No</th>
        <th scope="col">Admit Date</th>
        <th scope="col">Admit Time</th>
        <th scope="col">Department Id</th>
        <th scope="col">Unit</th>
        <th scope="col">Area</th>
        <th scope="col">Doctor Id</th>
        <th scope="col">Nurse</th>
        <th scope="col">Insurance Case</th>
        <th scope="col">Insurance Id</th>
        <th scope="col">Insurance No</th>
        <th scope="col">Presenting Complaints</th>
        <th scope="col">Past History</th>
        <th scope="col">Family History</th>
        <th scope="col">Admit Weight</th>
        <th scope="col">Pulse Rate</th>
        <th scope="col">Respiratory Rate</th>
        <th scope="col">Temperature</th>
        <th scope="col">Sbp</th>
        <th scope="col">Dbp</th>
        <th scope="col">Clinical Findings</th>
        <th scope="col">Cvs</th>
        <th scope="col">Rs</th>
        <th scope="col">Pa</th>
        <th scope="col">Cns</th>
        <th scope="col">Cxr</th>
        <th scope="col">Provisional Diagnosis</th>
        <th scope="col">Final Diagnosis</th>
        <th scope="col">Decision</th>
        <th scope="col">Advise</th>
        <th scope="col">Icd 10</th>
        <th scope="col">Icd 10 Ext</th>
        <th scope="col">Discharge Weight</th>
        <th scope="col">Outcome</th>
        <th scope="col">Outcome Date</th>
        <th scope="col">Outcome Time</th>
        <th scope="col">Ip File Received</th>
        <th scope="col">Mlc</th>
        <th scope="col">Arrival Mode</th>
        <th scope="col">Refereal Hospital Id</th>
        <th scope="col">Insert By User Id</th>
        <th scope="col">Update By User Id</th>
        <th scope="col">Insert Datetime</th>
        <th scope="col">Update Datetime</th>
        <th scope="col">Temp Visit Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($patient_visit) > 0){
            forEach($patient_visit as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->hospital_id; ?></td>
                    <td><?php echo $record->admit_id; ?></td>
                    <td><?php echo $record->visit_type; ?></td>
                    <td><?php echo $record->visit_name_id; ?></td>
                    <td><?php echo $record->patient_id; ?></td>
                    <td><?php echo $record->hosp_file_no; ?></td>
                    <td><?php echo $record->admit_date; ?></td>
                    <td><?php echo $record->admit_time; ?></td>
                    <td><?php echo $record->department_id; ?></td>
                    <td><?php echo $record->unit; ?></td>
                    <td><?php echo $record->area; ?></td>
                    <td><?php echo $record->doctor_id; ?></td>
                    <td><?php echo $record->nurse; ?></td>
                    <td><?php echo $record->insurance_case; ?></td>
                    <td><?php echo $record->insurance_id; ?></td>
                    <td><?php echo $record->insurance_no; ?></td>
                    <td><?php echo $record->presenting_complaints; ?></td>
                    <td><?php echo $record->past_history; ?></td>
                    <td><?php echo $record->family_history; ?></td>
                    <td><?php echo $record->admit_weight; ?></td>
                    <td><?php echo $record->pulse_rate; ?></td>
                    <td><?php echo $record->respiratory_rate; ?></td>
                    <td><?php echo $record->temperature; ?></td>
                    <td><?php echo $record->sbp; ?></td>
                    <td><?php echo $record->dbp; ?></td>
                    <td><?php echo $record->clinical_findings; ?></td>
                    <td><?php echo $record->cvs; ?></td>
                    <td><?php echo $record->rs; ?></td>
                    <td><?php echo $record->pa; ?></td>
                    <td><?php echo $record->cns; ?></td>
                    <td><?php echo $record->cxr; ?></td>
                    <td><?php echo $record->provisional_diagnosis; ?></td>
                    <td><?php echo $record->final_diagnosis; ?></td>
                    <td><?php echo $record->decision; ?></td>
                    <td><?php echo $record->advise; ?></td>
                    <td><?php echo $record->icd_10; ?></td>
                    <td><?php echo $record->icd_10_ext; ?></td>
                    <td><?php echo $record->discharge_weight; ?></td>
                    <td><?php echo $record->outcome; ?></td>
                    <td><?php echo $record->outcome_date; ?></td>
                    <td><?php echo $record->outcome_time; ?></td>
                    <td><?php echo $record->ip_file_received; ?></td>
                    <td><?php echo $record->mlc; ?></td>
                    <td><?php echo $record->arrival_mode; ?></td>
                    <td><?php echo $record->refereal_hospital_id; ?></td>
                    <td><?php echo $record->insert_by_user_id; ?></td>
                    <td><?php echo $record->update_by_user_id; ?></td>
                    <td><?php echo $record->insert_datetime; ?></td>
                    <td><?php echo $record->update_datetime; ?></td>
                    <td><?php echo $record->temp_visit_id; ?></td>
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