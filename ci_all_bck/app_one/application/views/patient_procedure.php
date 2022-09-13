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
      <label class="form-check-label" for="procedure_duration">Procedure Duration</label>
      <input type="text" class="form-control" name="procedure_duration" value="<?php echo $input_data->procedure_duration; ?>" id="procedure_duration">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="patient_procedure_id" value="<?php echo $input_data->patient_procedure_id; ?>" id="patient_procedure_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="procedure_id">Procedure Name</label>
      <?php foreach($procedure as $record){ ?>
      <select class="form-control" name="procedure_id" id="procedure_id">
      <option value="<?php echo $record->procedure_id; ?>" <?php if($input_data->procedure_id == $record->procedure_id) echo 'selected'; ?>><?php echo $record->procedure_name; ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="procedure_note">Procedure Note</label>
      <textarea class="form-control" name="procedure_note" id="procedure_note" rows="3"><?php echo $input_data->procedure_note; ?></textarea>
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="post_procedure">Post Procedure</label>
      <textarea class="form-control" name="post_procedure" id="post_procedure" rows="3"><?php echo $input_data->post_procedure; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Procedure Plan Id</th>
        <th scope="col">Visit Id</th>
        <th scope="col">Procedure Id</th>
        <th scope="col">Procedure Datetime</th>
        <th scope="col">Procedure Duration</th>
        <th scope="col">Procedure Note</th>
        <th scope="col">Procedure Findings</th>
        <th scope="col">Post Procedure</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($patient_procedure) > 0){
            forEach($patient_procedure as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->procedure_plan_id; ?></td>
                    <td><?php echo $record->visit_id; ?></td>
                    <td><?php echo $record->procedure_id; ?></td>
                    <td><?php echo $record->procedure_datetime; ?></td>
                    <td><?php echo $record->procedure_duration; ?></td>
                    <td><?php echo $record->procedure_note; ?></td>
                    <td><?php echo $record->procedure_findings; ?></td>
                    <td><?php echo $record->post_procedure; ?></td>
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