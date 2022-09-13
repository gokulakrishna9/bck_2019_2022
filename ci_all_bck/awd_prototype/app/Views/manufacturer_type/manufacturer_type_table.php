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
                            <li><a class="dropdown-item" href="#">View</a></li>
                            <li><a class="dropdown-item" href="#">Update</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>