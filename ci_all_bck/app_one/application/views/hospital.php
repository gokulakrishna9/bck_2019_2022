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
      <label class="form-check-label" for="hospital_short_name">Hospital Short Name</label>
      <input type="text" class="form-control" name="hospital_short_name" value="<?php echo $input_data->hospital_short_name; ?>" id="hospital_short_name">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="place">Place</label>
      <input type="text" class="form-control" name="place" value="<?php echo $input_data->place; ?>" id="place">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="district">District</label>
      <input type="text" class="form-control" name="district" value="<?php echo $input_data->district; ?>" id="district">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="state">State</label>
      <input type="text" class="form-control" name="state" value="<?php echo $input_data->state; ?>" id="state">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="type1">Type1</label>
      <input type="text" class="form-control" name="type1" value="<?php echo $input_data->type1; ?>" id="type1">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="type2">Type2</label>
      <input type="text" class="form-control" name="type2" value="<?php echo $input_data->type2; ?>" id="type2">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="type3">Type3</label>
      <input type="text" class="form-control" name="type3" value="<?php echo $input_data->type3; ?>" id="type3">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="type4">Type4</label>
      <input type="text" class="form-control" name="type4" value="<?php echo $input_data->type4; ?>" id="type4">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="type5">Type5</label>
      <input type="text" class="form-control" name="type5" value="<?php echo $input_data->type5; ?>" id="type5">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="type6">Type6</label>
      <input type="text" class="form-control" name="type6" value="<?php echo $input_data->type6; ?>" id="type6">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital_type_id">Hospital Type Id</label>
      <input type="number" class="form-control" name="hospital_type_id" value="<?php echo $input_data->hospital_type_id; ?>" id="hospital_type_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="hospital_id" value="<?php echo $input_data->hospital_id; ?>" id="hospital_id">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="village_town_id">Village Town</label>
      <?php foreach($village_town as $record){ ?>
      <select class="form-control" name="village_town_id" id="village_town_id">
      <option value="<?php echo $record->village_town_id; ?>" <?php if($input_data->village_town_id == $record->village_town_id) echo 'selected'; ?>><?php echo $record->village_town; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="hospital">Hospital</label>
      <textarea class="form-control" name="hospital" id="hospital" rows="3"><?php echo $input_data->hospital; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="description">Description</label>
      <textarea class="form-control" name="description" id="description" rows="3"><?php echo $input_data->description; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="logo">Logo</label>
      <textarea class="form-control" name="logo" id="logo" rows="3"><?php echo $input_data->logo; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Hospital Type Id</th>
        <th scope="col">Hospital</th>
        <th scope="col">Hospital Short Name</th>
        <th scope="col">Description</th>
        <th scope="col">Place</th>
        <th scope="col">Village Town Id</th>
        <th scope="col">District</th>
        <th scope="col">State</th>
        <th scope="col">Logo</th>
        <th scope="col">Type1</th>
        <th scope="col">Type2</th>
        <th scope="col">Type3</th>
        <th scope="col">Type4</th>
        <th scope="col">Type5</th>
        <th scope="col">Type6</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($hospital) > 0){
            forEach($hospital as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->hospital_type_id; ?></td>
                    <td><?php echo $record->hospital; ?></td>
                    <td><?php echo $record->hospital_short_name; ?></td>
                    <td><?php echo $record->description; ?></td>
                    <td><?php echo $record->place; ?></td>
                    <td><?php echo $record->village_town_id; ?></td>
                    <td><?php echo $record->district; ?></td>
                    <td><?php echo $record->state; ?></td>
                    <td><?php echo $record->logo; ?></td>
                    <td><?php echo $record->type1; ?></td>
                    <td><?php echo $record->type2; ?></td>
                    <td><?php echo $record->type3; ?></td>
                    <td><?php echo $record->type4; ?></td>
                    <td><?php echo $record->type5; ?></td>
                    <td><?php echo $record->type6; ?></td>
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