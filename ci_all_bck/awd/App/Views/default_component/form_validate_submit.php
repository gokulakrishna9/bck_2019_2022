<script>
    let ajaxMultiSelect = [];
    let ajaxSelect = [];
<?php
if (!isset($auto_complete_list)) {
    $auto_complete_list = [];
}
?>
<?php forEach ($auto_complete_list as $action => $field) { ?>
    <?php if ($field['multi_select']) { ?>
            ajaxMultiSelect.push({label_field: "<?= $field['field'][0] ?>", value_field: "<?= $field['field'][1] ?>"});
    <?php } else { ?>
            ajaxSelect.push({label_field: "<?= $field['field'][0] ?>", value_field: "<?= $field['field'][1] ?>"});
    <?php }
}
?>

    $("#form_id").validate({
        submitHandler: function (form) {
            let inputs = form.elements;         // inputs['field_name']
            _.forEach(ajaxSelect, (ajs, action) => {
                console.log(ajs);
            });
            _.forEach(ajaxMultiSelect, (ajms) => {
                let valueLst = split(inputs[ajms.label_field].value);
                valueLst = _.map(valueLst, (vl) => {
                   return _.find(responseData, {label: vl}) ;
                });
                inputs[ajms.value_field].value = valueLst.join();
                console.log(valueLst);
            });
            form.submit();
        }
    });
</script>