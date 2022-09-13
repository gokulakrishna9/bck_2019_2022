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

export default function AircraftForm(props) {
  const handleSubmit = (e) => {
    e.preventDefault();
    let formEL = e.target.elements;
    console.log(formEL["model_id"].value);
    console.log(formEL["aircraft_type"].value);

    let bodyFormData = new FormData();

    bodyFormData.append("model_id", formEL["model_id"].value);
    bodyFormData.append("aircraft_type", formEL["aircraft_type"].value);

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
            pID="aircraft_type"
            pName="aircraft_type"
            pVal={' '}
            pPlaceholder="Aircraft Type"
            pLabel="Aircraft Type"
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <AutoCompleteMulti
            key={uuid()}
            pID="model_id"
            pName="model_id"
            pPlaceholder="Model"
            pLabel="Model"
            pMultiple={false}
            dataURL={ServerRoute.get_aircraft_model_label.url}
          />
        </Grid>
        <Grid item xs={12} md={4}>
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
  return <ModalForm formGrid={<FormGrid />}  buttonName={'ADD Type'}/>;
}
