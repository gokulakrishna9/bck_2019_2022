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
      <label class="form-check-label" for="item_name">Item Name</label>
      <input type="text" class="form-control" name="item_name" value="<?php echo $input_data->item_name; ?>" id="item_name">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="description">Description</label>
      <input type="text" class="form-control" name="description" value="<?php echo $input_data->description; ?>" id="description">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="model">Model</label>
      <input type="number" class="form-control" name="model" value="<?php echo $input_data->model; ?>" id="model">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="serial_number">Serial Number</label>
      <input type="number" class="form-control" name="serial_number" value="<?php echo $input_data->serial_number; ?>" id="serial_number">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="asset_number">Asset Number</label>
      <input type="number" class="form-control" name="asset_number" value="<?php echo $input_data->asset_number; ?>" id="asset_number">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="item_id" value="<?php echo $input_data->item_id; ?>" id="item_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="generic_item_id">Generic Name</label>
      <?php foreach($generic_item as $record){ ?>
      <select class="form-control" name="generic_item_id" id="generic_item_id">
      <option value="<?php echo $record->generic_item_id; ?>" <?php if($input_data->generic_item_id == $record->generic_item_id) echo 'selected'; ?>><?php echo $record->generic_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="item_form_id">Item Form</label>
      <?php foreach($item_form as $record){ ?>
      <select class="form-control" name="item_form_id" id="item_form_id">
      <option value="<?php echo $record->item_form_id; ?>" <?php if($input_data->item_form_id == $record->item_form_id) echo 'selected'; ?>><?php echo $record->item_form; ?></option>
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
        <th scope="col">Item Name</th>
        <th scope="col">Generic Item Id</th>
        <th scope="col">Item Form Id</th>
        <th scope="col">Description</th>
        <th scope="col">Model</th>
        <th scope="col">Serial Number</th>
        <th scope="col">Asset Number</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($item_master) > 0){
            forEach($item_master as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->item_name; ?></td>
                    <td><?php echo $record->generic_item_id; ?></td>
                    <td><?php echo $record->item_form_id; ?></td>
                    <td><?php echo $record->description; ?></td>
                    <td><?php echo $record->model; ?></td>
                    <td><?php echo $record->serial_number; ?></td>
                    <td><?php echo $record->asset_number; ?></td>
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