
<table id="input-table" class="table table-bordered tablesorter">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">AD Number</th>
      <th scope="col">AD Type</th>
      <th scope="col">Issued By</th>
      <th scope="col">Issue Date</th>
      <th scope="col">Effective Date</th>
      <th scope="col">Supersedes</th>
      <th scope="col">Supserseded By</th>
      <th scope="col">Subject</th>
      <th scope="col">Applicable Aircraft/Engine Models</th>
      <th scope="col">Applicable Part Number(s)</th>
      <th scope="col">Applicable Serial Number(s)</th>
      <th scope="col">Attachment</th>
    </tr>
  </thead>
  <tbody>
   <?php forEach ($table_data as $index => $mt) { ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $mt->ad_number ?></td>
                <td><?= $mt->ad_type ?></td>
                <td><?= $mt->avaiation_authority ?></td>
                <td><?= $mt->ad_type ?></td>
                <td><?= $mt->issue_date ?></td>
                <td><?= $mt->effective_date ?></td>
                <td><?= $mt->supersedes ?></td>
                <td><?= $mt->superseded_by ?></td>
                <td><?= $mt->subject ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
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
