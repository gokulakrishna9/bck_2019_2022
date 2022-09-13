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
      <label class="form-check-label" for="col_change">Col Change</label>
      <input type="text" class="form-control" name="col_change" value="<?php echo $input_data->col_change; ?>" id="col_change">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="country_code">Country Code</label>
      <input type="text" class="form-control" name="country_code" value="<?php echo $input_data->country_code; ?>" id="country_code">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="place_code">Place Code</label>
      <input type="text" class="form-control" name="place_code" value="<?php echo $input_data->place_code; ?>" id="place_code">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="state_code">State Code</label>
      <input type="text" class="form-control" name="state_code" value="<?php echo $input_data->state_code; ?>" id="state_code">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="place_function">Place Function</label>
      <input type="text" class="form-control" name="place_function" value="<?php echo $input_data->place_function; ?>" id="place_function">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="place_status">Place Status</label>
      <input type="text" class="form-control" name="place_status" value="<?php echo $input_data->place_status; ?>" id="place_status">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="place_date">Place Date</label>
      <input type="text" class="form-control" name="place_date" value="<?php echo $input_data->place_date; ?>" id="place_date">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="place_iata">Place Iata</label>
      <input type="text" class="form-control" name="place_iata" value="<?php echo $input_data->place_iata; ?>" id="place_iata">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="subsidiary_loc">Subsidiary Loc</label>
      <input type="text" class="form-control" name="subsidiary_loc" value="<?php echo $input_data->subsidiary_loc; ?>" id="subsidiary_loc">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="support_codes">Support Codes</label>
      <input type="text" class="form-control" name="support_codes" value="<?php echo $input_data->support_codes; ?>" id="support_codes">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="place_id" value="<?php echo $input_data->place_id; ?>" id="place_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="place_name">Place Name</label>
      <textarea class="form-control" name="place_name" id="place_name" rows="3"><?php echo $input_data->place_name; ?></textarea>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="place_name_without_diacritics">Place Name Without Diacritics</label>
      <textarea class="form-control" name="place_name_without_diacritics" id="place_name_without_diacritics" rows="3"><?php echo $input_data->place_name_without_diacritics; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Col Change</th>
        <th scope="col">Country Code</th>
        <th scope="col">Place Code</th>
        <th scope="col">Place Name</th>
        <th scope="col">Place Name Without Diacritics</th>
        <th scope="col">State Code</th>
        <th scope="col">Place Function</th>
        <th scope="col">Place Status</th>
        <th scope="col">Place Date</th>
        <th scope="col">Place Iata</th>
        <th scope="col">Subsidiary Loc</th>
        <th scope="col">Support Codes</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($places_table) > 0){
            forEach($places_table as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->col_change; ?></td>
                    <td><?php echo $record->country_code; ?></td>
                    <td><?php echo $record->place_code; ?></td>
                    <td><?php echo $record->place_name; ?></td>
                    <td><?php echo $record->place_name_without_diacritics; ?></td>
                    <td><?php echo $record->state_code; ?></td>
                    <td><?php echo $record->place_function; ?></td>
                    <td><?php echo $record->place_status; ?></td>
                    <td><?php echo $record->place_date; ?></td>
                    <td><?php echo $record->place_iata; ?></td>
                    <td><?php echo $record->subsidiary_loc; ?></td>
                    <td><?php echo $record->support_codes; ?></td>
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