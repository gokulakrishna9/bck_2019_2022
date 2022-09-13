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
      <label class="form-check-label" for="model">Model</label>
      <input type="text" class="form-control" name="model" value="<?php echo $input_data->model; ?>" id="model">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="service_engineer">Service Engineer</label>
      <input type="text" class="form-control" name="service_engineer" value="<?php echo $input_data->service_engineer; ?>" id="service_engineer">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="service_engineer_contact">Service Engineer Contact</label>
      <input type="text" class="form-control" name="service_engineer_contact" value="<?php echo $input_data->service_engineer_contact; ?>" id="service_engineer_contact">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="cost">Cost</label>
      <input type="number" class="form-control" name="cost" value="<?php echo $input_data->cost; ?>" id="cost">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="service_person_id">Service Person Id</label>
      <input type="number" class="form-control" name="service_person_id" value="<?php echo $input_data->service_person_id; ?>" id="service_person_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="supply_date">Supply Date</label>
      <input type="date" class="form-control" name="supply_date" value="<?php echo $input_data->supply_date; ?>" id="supply_date">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="warranty_start_date">Warranty Start Date</label>
      <input type="date" class="form-control" name="warranty_start_date" value="<?php echo $input_data->warranty_start_date; ?>" id="warranty_start_date">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="warranty_end_date">Warranty End Date</label>
      <input type="date" class="form-control" name="warranty_end_date" value="<?php echo $input_data->warranty_end_date; ?>" id="warranty_end_date">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="equipment_id" value="<?php echo $input_data->equipment_id; ?>" id="equipment_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="equipment_type_id">Equipment Type</label>
      <?php foreach($equipment_type as $record){ ?>
      <select class="form-control" name="equipment_type_id" id="equipment_type_id">
      <option value="<?php echo $record->equipment_type_id; ?>" <?php if($input_data->equipment_type_id == $record->equipment_type_id) echo 'selected'; ?>><?php echo $record->equipment_type; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="vendor_id">Vendor Name</label>
      <?php foreach($vendor as $record){ ?>
      <select class="form-control" name="vendor_id" id="vendor_id">
      <option value="<?php echo $record->vendor_id; ?>" <?php if($input_data->vendor_id == $record->vendor_id) echo 'selected'; ?>><?php echo $record->vendor_name; ?></option>
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
  <div class="form-row" id="">
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
      <label class="form-check-label" for="department_id">Department</label>
      <?php foreach($department as $record){ ?>
      <select class="form-control" name="department_id" id="department_id">
      <option value="<?php echo $record->department_id; ?>" <?php if($input_data->department_id == $record->department_id) echo 'selected'; ?>><?php echo $record->department; ?></option>
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
      <label class="form-check-label" for="unit_id">Unit Name</label>
      <?php foreach($unit as $record){ ?>
      <select class="form-control" name="unit_id" id="unit_id">
      <option value="<?php echo $record->unit_id; ?>" <?php if($input_data->unit_id == $record->unit_id) echo 'selected'; ?>><?php echo $record->unit_name; ?></option>
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
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="make">Make</label>
      <textarea class="form-control" name="make" id="make" rows="3"><?php echo $input_data->make; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="serial_number">Serial Number</label>
      <textarea class="form-control" name="serial_number" id="serial_number" rows="3"><?php echo $input_data->serial_number; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="asset_number">Asset Number</label>
      <textarea class="form-control" name="asset_number" id="asset_number" rows="3"><?php echo $input_data->asset_number; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="procured_by">Procured By</label>
      <textarea class="form-control" name="procured_by" id="procured_by" rows="3"><?php echo $input_data->procured_by; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="supplier">Supplier</label>
      <textarea class="form-control" name="supplier" id="supplier" rows="3"><?php echo $input_data->supplier; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Equipment Type Id</th>
        <th scope="col">Make</th>
        <th scope="col">Model</th>
        <th scope="col">Serial Number</th>
        <th scope="col">Asset Number</th>
        <th scope="col">Procured By</th>
        <th scope="col">Cost</th>
        <th scope="col">Supplier</th>
        <th scope="col">Vendor Id</th>
        <th scope="col">Supply Date</th>
        <th scope="col">Warranty Start Date</th>
        <th scope="col">Warranty End Date</th>
        <th scope="col">Service Engineer</th>
        <th scope="col">Service Engineer Contact</th>
        <th scope="col">Service Person Id</th>
        <th scope="col">Hospital Id</th>
        <th scope="col">Department Id</th>
        <th scope="col">Area Id</th>
        <th scope="col">Unit Id</th>
        <th scope="col">Staff Id</th>
        <th scope="col">Equipment Status</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($equipment) > 0){
            forEach($equipment as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->equipment_type_id; ?></td>
                    <td><?php echo $record->make; ?></td>
                    <td><?php echo $record->model; ?></td>
                    <td><?php echo $record->serial_number; ?></td>
                    <td><?php echo $record->asset_number; ?></td>
                    <td><?php echo $record->procured_by; ?></td>
                    <td><?php echo $record->cost; ?></td>
                    <td><?php echo $record->supplier; ?></td>
                    <td><?php echo $record->vendor_id; ?></td>
                    <td><?php echo $record->supply_date; ?></td>
                    <td><?php echo $record->warranty_start_date; ?></td>
                    <td><?php echo $record->warranty_end_date; ?></td>
                    <td><?php echo $record->service_engineer; ?></td>
                    <td><?php echo $record->service_engineer_contact; ?></td>
                    <td><?php echo $record->service_person_id; ?></td>
                    <td><?php echo $record->hospital_id; ?></td>
                    <td><?php echo $record->department_id; ?></td>
                    <td><?php echo $record->area_id; ?></td>
                    <td><?php echo $record->unit_id; ?></td>
                    <td><?php echo $record->staff_id; ?></td>
                    <td><?php echo $record->equipment_status; ?></td>
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