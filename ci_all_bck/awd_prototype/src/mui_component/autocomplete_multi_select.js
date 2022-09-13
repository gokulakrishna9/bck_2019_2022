import * as React from "react";
import TextField from "@mui/material/TextField";
import Autocomplete from "@mui/material/Autocomplete";
import CircularProgress from "@mui/material/CircularProgress";

import axios from "axios";
import ServerRoute from "../server_routes";
import _ from "lodash";

function serverCall(dataURL, queryString, prevVal, callBackMethod) {
  console.log(queryString);
  axios
    .get(ServerRoute.base_url + ServerRoute[dataURL].url, {
      params: { qry_string: queryString },
    })
    .then((response) => {
      callBackMethod(_.uniqBy([...prevVal, ...response.data], "value"));
    });
}

export default function AutoCompleteMulti(prnProps) {
  const [open, setOpen] = React.useState(false);
  const [options, setOptions] = React.useState([]);
  const [focus, setFocus] = React.useState(prnProps.pAutoFocus);

  const loading = open && options.length === 0;

  const [valueL, setValueL] = React.useState(' ');

  return (
    <React.Fragment>
      <br />
      <Autocomplete
        fullWidth
        open={open}
        onOpen={() => {
          setOpen(true);
        }}
        onClose={() => {
          setOpen(false);
        }}
        getOptionLabel={(option) => option.label}
        onChange={(event, value) => {
          if(!Array.isArray(value) && !_.isEmpty(value)) {
            setValueL(value.value);
            console.log(valueL);
          } else {
            let val = _.reduce(_.uniqBy(value, "value"), (seleted, val) => {
              return _.join([seleted, val.value], ', ');
            }, ' ');
            setValueL(val);
            console.log(valueL);
          }          
          console.log(value);          
          // set values in hidden field
        }}
        isOptionEqualToValue={(option, value) => option.label === value.label}
        options={options}
        loading={loading}
        multiple={prnProps.pMultiple}
        renderInput={(params) => (
          <TextField
            label={prnProps.pLabel}
            autoFocus={focus}
            {...params}
            onChange={(e) => {
              serverCall(
                prnProps.dataURL,
                e.target.value,
                options,
                (result) => {
                  setOptions(result);
                }
              );
            }}
            InputProps={{
              ...params.InputProps,
              endAdornment: (
                <React.Fragment>
                  {loading ? (
                    <CircularProgress color="inherit" size={20} />
                  ) : null}
                  {params.InputProps.endAdornment}
                </React.Fragment>
              ),
            }}
          />
        )}
      />
      <input type="hidden" id={prnProps.pID} name={prnProps.pName} value={valueL} />
    </React.Fragment>
  );
}
