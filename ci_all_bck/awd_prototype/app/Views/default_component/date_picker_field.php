<script>
    $(function () {
<?php if (!isset($datepicker))
    $datepicker = [];
?>
<?php foreach ($datepicker as $dp) { ?>
            $('#<?= $dp ?>').Zebra_DatePicker();
<?php } ?>
    });
</script>
