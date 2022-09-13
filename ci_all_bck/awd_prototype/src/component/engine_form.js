import React, { Component } from "react";
import Grid from "@mui/material/Grid";
import ModalForm from "../mui_component/form_modal";
import Button from "@mui/material/Button";
import TextField from "@mui/material/TextField";
import _ from "lodash";
import uuid from "react-uuid";

import DatePickerLinked from "../mui_component/date_field_linked";
import TextFieldC from "../mui_component/textfield";
import AutoCompleteMulti from "../mui_component/autocomplete_multi_select"

import ServerRoute from "../server_routes";
import axios from "axios";

export default function EngineForm(props) {
  const handleSubmit = (e) => {
    e.preventDefault();
    let formEL = e.target.elements;
    console.log(formEL["engine_serial_number"].value);
    console.log(formEL["manufacturer_id"].value);
    console.log(formEL["engine_model_id"].value);
    console.log(formEL["engine_type_id"].value);

    let bodyFormData = new FormData();

    bodyFormData.append("engine_serial_number", formEL["engine_serial_number"].value);
    bodyFormData.append("manufacturer_id", formEL["manufacturer_id"].value);
    bodyFormData.append("engine_model_id", formEL["engine_model_id"].value);
    bodyFormData.append("engine_type_id", formEL["engine_type_id"].value);
    
    /*
    axios({
      baseURL: ServerRoute.base_url,
      url: ServerRoute.add_ad_record.url,
      method: ServerRoute.add_ad_record.method,
      headers: { "content-type": "application/x-www-form-urlencoded" },
      data: bodyFormData,
    }).then((response) => {
      console.log(response);
    });
    */
  };
  let FormGrid = () => (
    <form key={uuid()} onSubmit={(e) => handleSubmit(e)}>
      <Grid container spacing={3} direction="row">
        <Grid item xs={12} md={4}>
          <TextFieldC
            key={uuid()}
            pID="engine_serial_number"
            pName="engine_serial_number"
            pVal={' '}
            pPlaceholder="Engine Serial Number"
            pLabel="Engine Serial Number"
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <AutoCompleteMulti
            key={uuid()}
            pID="manufacturer_id"
            pName="manufacturer_id"
            pPlaceholder="Manufacturer"
            pLabel="Manufacturer"
            pMultiple={false}
            dataURL={ServerRoute.get_manufacturer_label.url}
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <AutoCompleteMulti
            key={uuid()}
            pID="engine_model_id"
            pName="engine_model_id"
            pPlaceholder="Engine Model"
            pLabel="Engine Model"
            pMultiple={false}
            dataURL={ServerRoute.get_engine_model_label.url}
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <AutoCompleteMulti
            key={uuid()}
            pID="engine_type_id"
            pName="engine_type_id"
            pPlaceholder="engine Type"
            pLabel="engine Type"
            pMultiple={false}
            dataURL={ServerRoute.get_engine_type_label.url}
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <br />
          <Button
            key={uuid()}
            color="primary"
            type="submit"
            variant="contained"
            value="Submit"
          >
            Submit
          </Button>
        </Grid>
      </Grid>
    </form>
  );
  return <ModalForm formGrid={<FormGrid />}  buttonName={'Engine'}/>;
}
