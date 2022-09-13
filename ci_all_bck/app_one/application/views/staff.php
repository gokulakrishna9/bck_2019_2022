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
      <label class="form-check-label" for="first_name">First Name</label>
      <input type="text" class="form-control" name="first_name" value="<?php echo $input_data->first_name; ?>" id="first_name">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="name">Name</label>
      <input type="text" class="form-control" name="name" value="<?php echo $input_data->name; ?>" id="name">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="gender">Gender</label>
      <input type="text" class="form-control" name="gender" value="<?php echo $input_data->gender; ?>" id="gender">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="staff_category">Staff Category</label>
      <input type="text" class="form-control" name="staff_category" value="<?php echo $input_data->staff_category; ?>" id="staff_category">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="staff_type">Staff Type</label>
      <input type="text" class="form-control" name="staff_type" value="<?php echo $input_data->staff_type; ?>" id="staff_type">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="staff_role">Staff Role</label>
      <input type="text" class="form-control" name="staff_role" value="<?php echo $input_data->staff_role; ?>" id="staff_role">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="ima_registration_number">Ima Registration Number</label>
      <input type="text" class="form-control" name="ima_registration_number" value="<?php echo $input_data->ima_registration_number; ?>" id="ima_registration_number">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="email">Email</label>
      <input type="text" class="form-control" name="email" value="<?php echo $input_data->email; ?>" id="email">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="phone">Phone</label>
      <input type="text" class="form-control" name="phone" value="<?php echo $input_data->phone; ?>" id="phone">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="staff_status">Staff Status</label>
      <input type="text" class="form-control" name="staff_status" value="<?php echo $input_data->staff_status; ?>" id="staff_status">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="doctor_reg_no">Doctor Reg No</label>
      <input type="text" class="form-control" name="doctor_reg_no" value="<?php echo $input_data->doctor_reg_no; ?>" id="doctor_reg_no">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="account_number">Account Number</label>
      <input type="text" class="form-control" name="account_number" value="<?php echo $input_data->account_number; ?>" id="account_number">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="ifsc_code">Ifsc Code</label>
      <input type="text" class="form-control" name="ifsc_code" value="<?php echo $input_data->ifsc_code; ?>" id="ifsc_code">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="date_of_birth">Date Of Birth</label>
      <input type="date" class="form-control" name="date_of_birth" value="<?php echo $input_data->date_of_birth; ?>" id="date_of_birth">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="status_date">Status Date</label>
      <input type="date" class="form-control" name="status_date" value="<?php echo $input_data->status_date; ?>" id="status_date">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="staff_id" value="<?php echo $input_data->staff_id; ?>" id="staff_id">
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
      <label class="form-check-label" for="department_id">Department</label>
      <?php foreach($department as $record){ ?>
      <select class="form-control" name="department_id" id="department_id">
      <option value="<?php echo $record->department_id; ?>" <?php if($input_data->department_id == $record->department_id) echo 'selected'; ?>><?php echo $record->department; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="unit_id">Unit Name</label>
      <?php foreach($unit as $record){ ?>
      <select class="form-control" name="unit_id" id="unit_id">
      <option value="<?php echo $record->unit_id; ?>" <?php if($input_data->unit_id == $record->unit_id) echo 'selected'; ?>><?php echo $record->unit_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="area_id">Area Name</label>
      <?php foreach($area as $record){ ?>
      <select class="form-control" name="area_id" id="area_id">
      <option value="<?php echo $record->area_id; ?>" <?php if($input_data->area_id == $record->area_id) echo 'selected'; ?>><?php echo $record->area_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="staff_category_id">Staff Category</label>
      <?php foreach($staff_category as $record){ ?>
      <select class="form-control" name="staff_category_id" id="staff_category_id">
      <option value="<?php echo $record->staff_category_id; ?>" <?php if($input_data->staff_category_id == $record->staff_category_id) echo 'selected'; ?>><?php echo $record->staff_category; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="staff_role_id">Staff Role</label>
      <?php foreach($staff_role as $record){ ?>
      <select class="form-control" name="staff_role_id" id="staff_role_id">
      <option value="<?php echo $record->staff_role_id; ?>" <?php if($input_data->staff_role_id == $record->staff_role_id) echo 'selected'; ?>><?php echo $record->staff_role; ?></option>
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
      <label class="form-check-label" for="last_name">Last Name</label>
      <textarea class="form-control" name="last_name" id="last_name" rows="3"><?php echo $input_data->last_name; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="image">Image</label>
      <textarea class="form-control" name="image" id="image" rows="3"><?php echo $input_data->image; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="designation">Designation</label>
      <textarea class="form-control" name="designation" id="designation" rows="3"><?php echo $input_data->designation; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="area_of_responsibility">Area Of Responsibility</label>
      <textarea class="form-control" name="area_of_responsibility" id="area_of_responsibility" rows="3"><?php echo $input_data->area_of_responsibility; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="research_area">Research Area</label>
      <textarea class="form-control" name="research_area" id="research_area" rows="3"><?php echo $input_data->research_area; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="specialisation">Specialisation</label>
      <textarea class="form-control" name="specialisation" id="specialisation" rows="3"><?php echo $input_data->specialisation; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="research">Research</label>
      <textarea class="form-control" name="research" id="research" rows="3"><?php echo $input_data->research; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="personal_note">Personal Note</label>
      <textarea class="form-control" name="personal_note" id="personal_note" rows="3"><?php echo $input_data->personal_note; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="bank">Bank</label>
      <textarea class="form-control" name="bank" id="bank" rows="3"><?php echo $input_data->bank; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="bank_branch">Bank Branch</label>
      <textarea class="form-control" name="bank_branch" id="bank_branch" rows="3"><?php echo $input_data->bank_branch; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="account_name">Account Name</label>
      <textarea class="form-control" name="account_name" id="account_name" rows="3"><?php echo $input_data->account_name; ?></textarea>
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
        <th scope="col">Department Id</th>
        <th scope="col">Unit Id</th>
        <th scope="col">Area Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Name</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col">Gender</th>
        <th scope="col">Staff Category</th>
        <th scope="col">Staff Category Id</th>
        <th scope="col">Staff Type</th>
        <th scope="col">Staff Role</th>
        <th scope="col">Staff Role Id</th>
        <th scope="col">Mci Flag</th>
        <th scope="col">Ima Registration Number</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Image</th>
        <th scope="col">Qualification Id</th>
        <th scope="col">Designation</th>
        <th scope="col">Area Of Responsibility</th>
        <th scope="col">Research Area</th>
        <th scope="col">Specialisation</th>
        <th scope="col">Research</th>
        <th scope="col">Personal Note</th>
        <th scope="col">Staff Status</th>
        <th scope="col">Status</th>
        <th scope="col">Status Date</th>
        <th scope="col">Doctor Reg No</th>
        <th scope="col">Staff Flag</th>
        <th scope="col">Doctor Flag</th>
        <th scope="col">Bank</th>
        <th scope="col">Bank Branch</th>
        <th scope="col">Account Name</th>
        <th scope="col">Account Number</th>
        <th scope="col">Ifsc Code</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($staff) > 0){
            forEach($staff as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->hospital_id; ?></td>
                    <td><?php echo $record->department_id; ?></td>
                    <td><?php echo $record->unit_id; ?></td>
                    <td><?php echo $record->area_id; ?></td>
                    <td><?php echo $record->first_name; ?></td>
                    <td><?php echo $record->last_name; ?></td>
                    <td><?php echo $record->name; ?></td>
                    <td><?php echo $record->date_of_birth; ?></td>
                    <td><?php echo $record->gender; ?></td>
                    <td><?php echo $record->staff_category; ?></td>
                    <td><?php echo $record->staff_category_id; ?></td>
                    <td><?php echo $record->staff_type; ?></td>
                    <td><?php echo $record->staff_role; ?></td>
                    <td><?php echo $record->staff_role_id; ?></td>
                    <td><?php echo $record->mci_flag; ?></td>
                    <td><?php echo $record->ima_registration_number; ?></td>
                    <td><?php echo $record->email; ?></td>
                    <td><?php echo $record->phone; ?></td>
                    <td><?php echo $record->image; ?></td>
                    <td><?php echo $record->qualification_id; ?></td>
                    <td><?php echo $record->designation; ?></td>
                    <td><?php echo $record->area_of_responsibility; ?></td>
                    <td><?php echo $record->research_area; ?></td>
                    <td><?php echo $record->specialisation; ?></td>
                    <td><?php echo $record->research; ?></td>
                    <td><?php echo $record->personal_note; ?></td>
                    <td><?php echo $record->staff_status; ?></td>
                    <td><?php echo $record->status; ?></td>
                    <td><?php echo $record->status_date; ?></td>
                    <td><?php echo $record->doctor_reg_no; ?></td>
                    <td><?php echo $record->staff_flag; ?></td>
                    <td><?php echo $record->doctor_flag; ?></td>
                    <td><?php echo $record->bank; ?></td>
                    <td><?php echo $record->bank_branch; ?></td>
                    <td><?php echo $record->account_name; ?></td>
                    <td><?php echo $record->account_number; ?></td>
                    <td><?php echo $record->ifsc_code; ?></td>
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