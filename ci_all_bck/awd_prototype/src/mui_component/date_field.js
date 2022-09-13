import * as React from "react";
import TextField from "@mui/material/TextField";
import AdapterDateFns from "@mui/lab/AdapterDateFns";
import LocalizationProvider from "@mui/lab/LocalizationProvider";
import DatePicker from "@mui/lab/DatePicker";

export default function DatePickerC(props) {
  const [value, setValue] = React.useState({value: new Date()});
  const [minDate, setMinDate] = React.useState(props.minDate);
  const [focus, setFocus] = React.useState(props.pAutoFocus);
  const [nextFocus, setNextFocus] = React.useState('');
  const [shiftPressed, setShiftPressed] = React.useState(false);
  const [validation, setValidation] = React.useState(true);
  return (
    <React.Fragment>
      <label>{props.fieldLabel}</label>
      <br />
      <LocalizationProvider dateAdapter={AdapterDateFns}>
        <DatePicker
          label={props.pLabel}
          value={value}
          onChange={(newValue) => {
            let newDtStr = newValue.toISOString().split("T")[0];
            setValue(newDtStr);
          }}
          renderInput={(params) => <TextField {...params} fullWidth />}
          minDate={minDate}
          autoFocus={focus}
        />
        <input type="hidden" name={props.pName} id={props.pID} value={value}/>
      </LocalizationProvider>
    </React.Fragment>
  );
}
