<?= form_open('add_avaiation_authority', 'class="row g-3" id="'.$form_id.'"') ?>
  <div class="col-md-6">
    <label for="" class="form-label">Aviation Authority</label>
    <input type="text" class="form-control" name="avaiation_authority" id="avaiation_authority">
  </div>
  <div class="col-md-6">
    <label class="form-label">&nbsp;</label> <br />
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
<?= form_close() ?>