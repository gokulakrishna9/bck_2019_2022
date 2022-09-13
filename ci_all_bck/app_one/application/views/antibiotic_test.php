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
      <label class="form-check-label" for="temp_antibiotic_test_id">Temp Antibiotic Test Id</label>
      <input type="number" class="form-control" name="temp_antibiotic_test_id" value="<?php echo $input_data->temp_antibiotic_test_id; ?>" id="temp_antibiotic_test_id">
    </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="antibiotic_test_id" value="<?php echo $input_data->antibiotic_test_id; ?>" id="antibiotic_test_id">
    </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="antibiotic_id">Antibiotic</label>
      <?php foreach($antibiotic as $record){ ?>
      <select class="form-control" name="antibiotic_id" id="antibiotic_id">
      <option value="<?php echo $record->antibiotic_id; ?>" <?php if($input_data->antibiotic_id == $record->antibiotic_id) echo 'selected'; ?>><?php echo $record->antibiotic; ?></option>
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
        <th scope="col">Antibiotic Id</th>
        <th scope="col">Micro Organism Test Id</th>
        <th scope="col">Antibiotic Result</th>
        <th scope="col">Temp Antibiotic Test Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($antibiotic_test) > 0){
            forEach($antibiotic_test as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->antibiotic_id; ?></td>
                    <td><?php echo $record->micro_organism_test_id; ?></td>
                    <td><?php echo $record->antibiotic_result; ?></td>
                    <td><?php echo $record->temp_antibiotic_test_id; ?></td>
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