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
      <label class="form-check-label" for="consumption_status">Consumption Status</label>
      <input type="text" class="form-control" name="consumption_status" value="<?php echo $input_data->consumption_status; ?>" id="consumption_status">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="indent_status">Indent Status</label>
      <input type="text" class="form-control" name="indent_status" value="<?php echo $input_data->indent_status; ?>" id="indent_status">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="quantity_approved">Quantity Approved</label>
      <input type="number" class="form-control" name="quantity_approved" value="<?php echo $input_data->quantity_approved; ?>" id="quantity_approved">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="quantity_indented">Quantity Indented</label>
      <input type="number" class="form-control" name="quantity_indented" value="<?php echo $input_data->quantity_indented; ?>" id="quantity_indented">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="quantity_issued">Quantity Issued</label>
      <input type="number" class="form-control" name="quantity_issued" value="<?php echo $input_data->quantity_issued; ?>" id="quantity_issued">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="issue_date">Issue Date</label>
      <input type="date" class="form-control" name="issue_date" value="<?php echo $input_data->issue_date; ?>" id="issue_date">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="indent_item_id" value="<?php echo $input_data->indent_item_id; ?>" id="indent_item_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_id">Description</label>
      <?php foreach($hospital as $record){ ?>
      <select class="form-control" name="hospital_id" id="hospital_id">
      <option value="<?php echo $record->hospital_id; ?>" <?php if($input_data->hospital_id == $record->hospital_id) echo 'selected'; ?>><?php echo $record->description; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_id">Address</label>
      <?php foreach($staff_previous_hospital as $record){ ?>
      <select class="form-control" name="hospital_id" id="hospital_id">
      <option value="<?php echo $record->hospital_id; ?>" <?php if($input_data->hospital_id == $record->hospital_id) echo 'selected'; ?>><?php echo $record->address; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="indent_id">Indent Status</label>
      <?php foreach($indent as $record){ ?>
      <select class="form-control" name="indent_id" id="indent_id">
      <option value="<?php echo $record->indent_id; ?>" <?php if($input_data->indent_id == $record->indent_id) echo 'selected'; ?>><?php echo $record->indent_status; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="item_id">Description</label>
      <?php foreach($item as $record){ ?>
      <select class="form-control" name="item_id" id="item_id">
      <option value="<?php echo $record->item_id; ?>" <?php if($input_data->item_id == $record->item_id) echo 'selected'; ?>><?php echo $record->description; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="item_id">Description</label>
      <?php foreach($item_master as $record){ ?>
      <select class="form-control" name="item_id" id="item_id">
      <option value="<?php echo $record->item_id; ?>" <?php if($input_data->item_id == $record->item_id) echo 'selected'; ?>><?php echo $record->description; ?></option>
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
        <th scope="col">Consumption Status</th>
        <th scope="col">Hospital Id</th>
        <th scope="col">Indent Id</th>
        <th scope="col">Indent Status</th>
        <th scope="col">Issue Date</th>
        <th scope="col">Item Id</th>
        <th scope="col">Quantity Approved</th>
        <th scope="col">Quantity Indented</th>
        <th scope="col">Quantity Issued</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($indent_item) > 0){
            forEach($indent_item as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->consumption_status; ?></td>
                    <td><?php echo $record->hospital_id; ?></td>
                    <td><?php echo $record->indent_id; ?></td>
                    <td><?php echo $record->indent_status; ?></td>
                    <td><?php echo $record->issue_date; ?></td>
                    <td><?php echo $record->item_id; ?></td>
                    <td><?php echo $record->quantity_approved; ?></td>
                    <td><?php echo $record->quantity_indented; ?></td>
                    <td><?php echo $record->quantity_issued; ?></td>
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