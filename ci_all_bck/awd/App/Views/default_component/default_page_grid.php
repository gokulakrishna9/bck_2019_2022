<!-- LeftNav, Header, Content -->
<?= $this->extend('default_component/default_page') ?>
<?= $this->section('page_grid') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-2" id="leftnav"><?= $this->include('default_component/leftnav_aircraft') ?></div>
        <div class="col-10">
            <div class="row p-1" style="background-color:rgb(240,255,255);">
                <div class="col-10 p-1" id="filter_form"><?= $this->include($page_filter) ?></div>
            </div>            
            <div class="row">
                <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">ADD</a>
                </p>
            </div>
            <div class="row">
                <div class="col">
                    <div class="<?= $show ?>collapse multi-collapse" id="multiCollapseExample1">
                        <h5 class="modal-title"><?= esc($form_title) ?></h5>
                        <div class="card card-body">
                            <?= $this->include("$page_form") ?>
                        </div>
                    </div>
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

<?php if(isset($page_js)) { ?>
<?= $this->include("$page_js") ?>
<?php } ?>
<?= $this->include('default_component/form_validate_submit') ?>

<?= $this->include('default_component/date_picker_field') ?>

<?= $this->endSection() ?>