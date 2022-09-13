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
      <label class="form-check-label" for="icd_code">Icd Code</label>
      <input type="text" class="form-control" name="icd_code" value="<?php echo $input_data->icd_code; ?>" id="icd_code">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="block_id">Block Id</label>
      <input type="text" class="form-control" name="block_id" value="<?php echo $input_data->block_id; ?>" id="block_id">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="icd_10">Icd 10</label>
      <input type="text" class="form-control" name="icd_10" value="<?php echo $input_data->icd_10; ?>" id="icd_10">
    </div>
  </div>
  <div class="form-row" id="">
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="icd_10_ext">Icd 10 Ext</label>
      <input type="text" class="form-control" name="icd_10_ext" value="<?php echo $input_data->icd_10_ext; ?>" id="icd_10_ext">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      
      <input type="hidden" class="form-control" name="icd_code" value="<?php echo $input_data->icd_code; ?>" id="icd_code">
    </div>
  </div>
    <div class="form-group col-md-6" id="">
      <label class="form-check-label" for="code_title">Code Title</label>
      <textarea class="form-control" name="code_title" id="code_title" rows="3"><?php echo $input_data->code_title; ?></textarea>
    </div>
  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Table -->
            <table class="table table-striped table-responsive">
        <thead><tr><th scope="col">#</th><th scope="col"></th>
        <th scope="col">Block Id</th>
        <th scope="col">Icd 10</th>
        <th scope="col">Icd 10 Ext</th>
        <th scope="col">Code Title</th>
        </tr></thead>
        <tbody>
        <?php if(sizeof($icd_code) > 0){
            forEach($icd_code as $index => $record) { ?>
                <tr><td><?php echo $index; ?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>
                    <td><?php echo $record->block_id; ?></td>
                    <td><?php echo $record->icd_10; ?></td>
                    <td><?php echo $record->icd_10_ext; ?></td>
                    <td><?php echo $record->code_title; ?></td>
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