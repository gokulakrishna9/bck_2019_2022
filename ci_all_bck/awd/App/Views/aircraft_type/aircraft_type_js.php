<script>
  $(function() {
    function split(val) {
      return val.split(/,\s*/);
    }

    function extractLast(term) {
      return split(term).pop();
    }
    let responseData = [];
    // form action prevent default
    $("#aircraft_model")
      // don't navigate away from the field on tab when selecting an item
      .on("keydown", function(event) {
        if (event.keyCode === $.ui.keyCode.TAB &&
          $(this).autocomplete("instance").menu.active) {
          event.preventDefault();
        }
      })
      .autocomplete({
        source: function(request, response) {
          console.log(request.term);
          $.getJSON("get_aircraft_model_label", {
            dataType: 'json',
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
        search: function() {
          // custom minLength
          var term = extractLast(this.value);
          if (term.length < 2) {
            return false;
          }
        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function(event, ui) {
          var terms = split(this.value);
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push(ui.item.value);
          // add placeholder to get the comma-and-space at the end
          terms.push("");
          this.value = terms.join(", "); // This is what we have to assign
          // have a hidden element with corresponding keys, and submit that
          // MOVE THIS TO ON SUBMIT
          let valTerms = [];
          console.log('#aircraft_model_id');
          console.log($('#aircraft_model_id').val());
          valTerms = split($('#aircraft_model_id').val());
          valTerms.push(_.find(responseData, {
            label: ui.item.value
          }).value);
          $('#aircraft_model_id').val(valTerms.join(", "));
          console.log($('#aircraft_model_id').val());
          return false;
        }
      });
  });
</script>