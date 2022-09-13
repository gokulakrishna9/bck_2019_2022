<table id="input-table" class="table table-bordered tablesorter">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Manufacturer Type</th>
        </tr>
    </thead>
    <tbody>
        <?php forEach ($table_data as $index => $mt) { ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $mt['manufacturer_type'] ?></td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url('index.php/'.$view_action.'?manufacturer_type_id='.$mt['manufacturer_type_id']); ?>">View</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('index.php/'.$update_action.'?manufacturer_type_id='.$mt['manufacturer_type_id']); ?>">Update</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('index.php/'.$delete_action.'?manufacturer_type_id='.$mt['manufacturer_type_id']); ?>">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>