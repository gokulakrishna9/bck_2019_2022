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
      <label class="form-check-label" for="blood_group">Blood Group</label>
      <input type="text" class="form-control" name="blood_group" value="<?php echo $input_data->blood_group; ?>" id="blood_group">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="sub_group">Sub Group</label>
      <input type="text" class="form-control" name="sub_group" value="<?php echo $input_data->sub_group; ?>" id="sub_group">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="anti_a">Anti A</label>
      <input type="text" class="form-control" name="anti_a" value="<?php echo $input_data->anti_a; ?>" id="anti_a">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="anti_b">Anti B</label>
      <input type="text" class="form-control" name="anti_b" value="<?php echo $input_data->anti_b; ?>" id="anti_b">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="anti_ab">Anti Ab</label>
      <input type="text" class="form-control" name="anti_ab" value="<?php echo $input_data->anti_ab; ?>" id="anti_ab">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="anti_d">Anti D</label>
      <input type="text" class="form-control" name="anti_d" value="<?php echo $input_data->anti_d; ?>" id="anti_d">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="a_cells">A Cells</label>
      <input type="text" class="form-control" name="a_cells" value="<?php echo $input_data->a_cells; ?>" id="a_cells">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="b_cells">B Cells</label>
      <input type="text" class="form-control" name="b_cells" value="<?php echo $input_data->b_cells; ?>" id="b_cells">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="o_cells">O Cells</label>
      <input type="text" class="form-control" name="o_cells" value="<?php echo $input_data->o_cells; ?>" id="o_cells">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="du">Du</label>
      <input type="text" class="form-control" name="du" value="<?php echo $input_data->du; ?>" id="du">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="forward_done_by">Forward Done By</label>
      <input type="number" class="form-control" name="forward_done_by" value="<?php echo $input_data->forward_done_by; ?>" id="forward_done_by">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="reverse_done_by">Reverse Done By</label>
      <input type="number" class="form-control" name="reverse_done_by" value="<?php echo $input_data->reverse_done_by; ?>" id="reverse_done_by">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="grouping_date">Grouping Date</label>
      <input type="date" class="form-control" name="grouping_date" value="<?php echo $input_data->grouping_date; ?>" id="grouping_date">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="grouping_id" value="<?php echo $input_data->grouping_id; ?>" id="grouping_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="donation_id">Weight</label>
      <?php foreach($bb_donation as $record){ ?>
      <select class="form-control" name="donation_id" id="donation_id">
      <option value="<?php echo $record->donation_id; ?>" <?php if($input_data->donation_id == $record->donation_id) echo 'selected'; ?>><?php echo $record->weight; ?></option>
      <?php } ?>
      </select>
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
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Donation Id</th>
        <th scope="col">Blood Group</th>
        <th scope="col">Sub Group</th>
        <th scope="col">Anti A</th>
        <th scope="col">Anti B</th>
        <th scope="col">Anti Ab</th>
        <th scope="col">Anti D</th>
        <th scope="col">A Cells</th>
        <th scope="col">B Cells</th>
        <th scope="col">O Cells</th>
        <th scope="col">Du</th>
        <th scope="col">Forward Done By</th>
        <th scope="col">Reverse Done By</th>
        <th scope="col">Grouping Date</th>
        <th scope="col">Hospital Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($blood_grouping) > 0){
            forEach($blood_grouping as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->donation_id; ?></td>
                    <td><?php echo $record->blood_group; ?></td>
                    <td><?php echo $record->sub_group; ?></td>
                    <td><?php echo $record->anti_a; ?></td>
                    <td><?php echo $record->anti_b; ?></td>
                    <td><?php echo $record->anti_ab; ?></td>
                    <td><?php echo $record->anti_d; ?></td>
                    <td><?php echo $record->a_cells; ?></td>
                    <td><?php echo $record->b_cells; ?></td>
                    <td><?php echo $record->o_cells; ?></td>
                    <td><?php echo $record->du; ?></td>
                    <td><?php echo $record->forward_done_by; ?></td>
                    <td><?php echo $record->reverse_done_by; ?></td>
                    <td><?php echo $record->grouping_date; ?></td>
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