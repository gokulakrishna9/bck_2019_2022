import * as React from "react";
import TextField from "@mui/material/TextField";
import uuid from "react-uuid";

export default function TextFieldC(props) {
  const [value, setValue] = React.useState(props.pVal);
  const [focus, setFocus] = React.useState(false);
  const [nextFocus, setNextFocus] = React.useState("");
  const [shiftPressed, setShiftPressed] = React.useState(false);
  const [validation, setValidation] = React.useState(true);
  const [tabEvent, setTabEvent] = React.useState(false);
  return (
    <React.Fragment>
      <br />
      <TextField
        key={uuid()}
        value={value}
        label={props.pLabel}
        placeholder={props.pPlaceholder}
        variant="outlined"
        size="normal"
        fullWidth
        onFocus={(e) => {
          setFocus(true);
        }}
        onChange={(e) => {
          setValue(e.target.value);
        }}
        onBlur={(e) => {
          setFocus(false);
        }}
        autoFocus={focus}
      />
      <input type="hidden" id={props.pID} name={props.pName} value={value} />
    </React.Fragment>
  );
}
