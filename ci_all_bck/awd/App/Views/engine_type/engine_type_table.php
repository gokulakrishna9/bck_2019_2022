<?php
$view_url = base_url('index.php/' . $view_action . '?' . $primary_column_name . '='); // .$mt['manufacturer_type_id']
$update_url = base_url('index.php/' . $update_action . '?' . $primary_column_name . '=');
$delete_url = base_url('index.php/' . $delete_action . '?' . $primary_column_name . '=');
?>
<table id="input-table" class="table table-bordered tablesorter">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Engine Type</th>
      <th scope="col">Engine Model</th>
    </tr>
  </thead>
  <tbody>
    <?php forEach ($table_data as $index => $mt) { ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $mt->engine_type ?></td>
                <td><?= $mt->engine_model ?></td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= $view_url.$mt->engine_type_id ?>">View</a></li>
                            <li><a class="dropdown-item" href="<?= $update_url.$mt->engine_type_id ?>">Update</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?= $delete_url.$mt->engine_type_id ?>">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        <?php } ?>
  </tbody>
</table>