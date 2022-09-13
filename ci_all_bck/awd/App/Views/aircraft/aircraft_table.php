<?php
$view_url = base_url('index.php/' . $view_action . '?' . $primary_column_name . '='); // .$mt['manufacturer_type_id']
$update_url = base_url('index.php/' . $update_action . '?' . $primary_column_name . '=');
$delete_url = base_url('index.php/' . $delete_action . '?' . $primary_column_name . '=');
?>
<table id="input-table" class="table table-bordered tablesorter">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Serial Number</th>
      <th scope="col">Manufacturer</th>
      <th scope="col">Model</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
    <?php forEach ($table_data as $index => $mt) { ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $mt->aircraft_serial_number ?></td>
                <td><?= $mt->manufacturer_name ?></td>
                <td><?= $mt->aircraft_model ?></td>
                <td><?= $mt->aircraft_type ?></td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= $view_url.$mt->$primary_column_name ?>">View</a></li>
                            <li><a class="dropdown-item" href="<?= $update_url.$mt->$primary_column_name ?>">Update</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?= $delete_url.$mt->$primary_column_name ?>">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        <?php } ?>
  </tbody>
</table>