import * as React from "react";
import Grid from "@mui/material/Grid";
import TextField from "@mui/material/TextField";
import AdapterDateFns from "@mui/lab/AdapterDateFns";
import LocalizationProvider from "@mui/lab/LocalizationProvider";
import DatePicker from "@mui/lab/DatePicker";
import DatePickerC from "./date_field";

export default function DatePickerLinked(props) {
  const [dateOne, setDateOne] = React.useState(undefined);
  const [dateTwoMin, setDateTwoMin] = React.useState(undefined);
  const [dateTwo, setDateTwo] = React.useState(undefined);
  const [disabled, setDisabled] = React.useState(true);
  return (
    <React.Fragment>
      <Grid item xs={12} md={4}>
        <label>{props.fieldLabel}</label>
        <br />
        <LocalizationProvider dateAdapter={AdapterDateFns}>
          <DatePicker
            label={props.dateOneID}
            value={dateOne}
            onChange={(newValue) => {
              console.log(newValue);
              setDateTwoMin(newValue);
              setDisabled(false);
              let newDtStr = newValue.toISOString().split("T")[0];
              if (newDtStr > new Date(dateTwo)) {
                setDateTwo(newDtStr);
              }
              setDateOne(newDtStr);
            }}
            renderInput={(params) => <TextField {...params} fullWidth />}
            minDate={props.minDate}
          />
        </LocalizationProvider>
        <input
          type="hidden"
          id={props.dateOneID}
          name={props.dateOneName}
          value={dateOne}
        />
      </Grid>
      <Grid item xs={12} md={4}>
        <label>{props.fieldLabel}</label>
        <br />
        <LocalizationProvider dateAdapter={AdapterDateFns}>
          { disabled ?
          <DatePicker
            label={props.dateTwoID}
            value={dateTwo}
            onChange={(newValue) => {
              console.log(newValue);
              setDateTwo(newValue.toISOString().split("T")[0]);
            }}
            renderInput={(params) => <TextField {...params} fullWidth />}
            minDate={dateTwoMin}
            disabled
          />
          :
          <DatePicker
            label={props.dateTwoID}
            value={dateTwo}
            onChange={(newValue) => {
              console.log(newValue);
              setDateTwo(newValue.toISOString().split("T")[0]);
            }}
            renderInput={(params) => <TextField {...params} fullWidth />}
            minDate={dateTwoMin}
          />
          }
        </LocalizationProvider>
        <input
          type="hidden"
          id={props.dateTwoID}
          name={props.dateTwoName}
          value={dateTwo}
        />
      </Grid>
    </React.Fragment>
  );
}
