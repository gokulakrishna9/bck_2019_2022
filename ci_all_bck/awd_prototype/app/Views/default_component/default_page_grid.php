<!-- LeftNav, Header, Content -->
<?= $this->extend('default_component/default_page') ?>
<?= $this->section('page_grid') ?>
<div class="container-fluid">
    <div class="row">        
        <div class="col-2" id="leftnav"><?= $this->include('default_component/leftnav_aircraft') ?></div>
        <div class="col-10">
            <div class="row p-1" style="background-color:rgb(240,255,255);">
                <div class="col-10 p-1" id="filter_form"><?= $this->include($page_filter) ?></div>
                <div class="col-2  p-1" id="page_form">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form_model">
                        Add Record
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-12" id="pagination_row"><?= $this->include('default_component/pagination_form') ?></div>
            </div>
            <div class="row">
                <div class="col-12" style="overflow-x: auto; white-space: nowrap;" id="data_table">
                    <?= $this->include("$page_table") ?>
                </div>
            </div>
        </div>            
    </div>
    <div class="modal" id="form_model">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header alert-info">
                    <h5 class="modal-title"><?= esc($form_title) ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid" id="form_grid">
                        <?= $this->include("$page_form") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>     
<?= script_tag('js/jquery-3.6.0.min.js') ?>
<?= script_tag('js/bootstrap.bundle.min.js') ?>
<?= script_tag('js/jquery-ui.min.js') ?>
<?= script_tag('js/jquery.tablesorter.min.js') ?>
<?= script_tag('js/jquery.tablesorter.widgets.js') ?>
<?= script_tag('js/underscore-umd-min.js') ?>
<?= script_tag('js/jquery.validate.min.js') ?>
<?= script_tag('js/zebra_datepicker.min.js') ?>
<?= script_tag('c_js/tbl_sorter.js') ?>

<?= $this->include('default_component/auto_complete_mul_fields') ?>
        
<?= $this->include('default_component/form_validate_submit')  ?>

<?= $this->include('default_component/date_picker_field') ?>
    
<?= $this->endSection() ?>