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
      <label class="form-check-label" for="cycle">Cycle</label>
      <input type="text" class="form-control" name="cycle" value="<?php echo $input_data->cycle; ?>" id="cycle">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="flow_amount">Flow Amount</label>
      <input type="text" class="form-control" name="flow_amount" value="<?php echo $input_data->flow_amount; ?>" id="flow_amount">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="regularity">Regularity</label>
      <input type="text" class="form-control" name="regularity" value="<?php echo $input_data->regularity; ?>" id="regularity">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="menstrual_history_id" value="<?php echo $input_data->menstrual_history_id; ?>" id="menstrual_history_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="visit_id">Brought By</label>
      <?php foreach($mlc as $record){ ?>
      <select class="form-control" name="visit_id" id="visit_id">
      <option value="<?php echo $record->visit_id; ?>" <?php if($input_data->visit_id == $record->visit_id) echo 'selected'; ?>><?php echo $record->brought_by; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="visit_id">Arrival Mode</label>
      <?php foreach($patient_visit as $record){ ?>
      <select class="form-control" name="visit_id" id="visit_id">
      <option value="<?php echo $record->visit_id; ?>" <?php if($input_data->visit_id == $record->visit_id) echo 'selected'; ?>><?php echo $record->arrival_mode; ?></option>
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
        <th scope="col">Cycle</th>
        <th scope="col">Dysmenorrhea</th>
        <th scope="col">Flow Amount</th>
        <th scope="col">Regularity</th>
        <th scope="col">Visit Id</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($menstrual_history) > 0){
            forEach($menstrual_history as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->cycle; ?></td>
                    <td><?php echo $record->dysmenorrhea; ?></td>
                    <td><?php echo $record->flow_amount; ?></td>
                    <td><?php echo $record->regularity; ?></td>
                    <td><?php echo $record->visit_id; ?></td>
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