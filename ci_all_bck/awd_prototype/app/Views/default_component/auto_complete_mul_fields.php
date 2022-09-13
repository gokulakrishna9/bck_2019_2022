<script>
    $(function () {
        function split(val) {
            return val.split(/,\s*/);
        }
        function extractLast(term) {
            return split(term).pop();
        }
        let responseData = [];
        // form action prevent default
<?php
if (!isset($auto_complete_list))
    $auto_complete_list = [];
forEach ($auto_complete_list as $action => $field) {
    ?>
            $("#<?= $field['field'][0] ?>")
                    // don't navigate away from the field on tab when selecting an item
                    .on("keydown", function (event) {
                        if (event.keyCode === $.ui.keyCode.TAB &&
                                $(this).autocomplete("instance").menu.active) {
                            event.preventDefault();
                        }
                    })
                    .autocomplete({
                        source: function (request, response) {
                            console.log(request.term);
                            $.getJSON("<?= $action ?>", {
                                qry_string: extractLast(request.term)
                            }, respJson => {
                                console.log(respJson);
                                responseLbl = respJson.map(li => {
                                    return li.label;
                                });
                                console.log(responseLbl);
                                responseData.push(...respJson);
                                response(responseLbl);
                            });
                        },
                        //appendTo: '',
                        search: function () {
                            // custom minLength
                            var term = extractLast(this.value);
                            if (term.length < 2) {
                                return false;
                            }
                        },
                        focus: function () {
                            // prevent value inserted on focus
                            return false;
                        },
                        select: function (event, ui) {
                            var terms = split(this.value);
                            // remove the current input
                            terms.pop();
                            // add the selected item
                            terms.push(ui.item.value);
                            // add placeholder to get the comma-and-space at the end
                            terms.push("");
                            this.value = terms.join(", ");         // This is what we have to assign
                            // have a hidden element with corresponding keys, and submit that
                            // MOVE THIS TO ON SUBMIT
                            let valTerms = [];
                            console.log('#<?= $field['field'][1] ?>');
                            console.log($('#<?= $field['field'][1] ?>').val());
                            valTerms = split($('#<?= $field['field'][1] ?>').val());
                            valTerms.push(_.find(responseData, {label: ui.item.value}).value);
                            $('#<?= $field['field'][1] ?>').val(valTerms.join(", "));
                            console.log($('#<?= $field['field'][1] ?>').val());
                            return false;
                        }
                    });

<?php } ?>
    });
</script>
<?php
