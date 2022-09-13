import React, { Component } from "react";
import Grid from "@mui/material/Grid";
import ModalForm from "../mui_component/form_modal";
import Button from "@mui/material/Button";
import TextField from "@mui/material/TextField";
import _ from "lodash";
import uuid from "react-uuid";

import DatePickerLinked from "../mui_component/date_field_linked";
import TextFieldC from "../mui_component/textfield";
import AutoCompleteMulti from "../mui_component/autocomplete_multi_select";

import ServerRoute from "../server_routes";
import axios from "axios";

export default function ADTypeForm(props) {
  const handleSubmit = (e) => {
    e.preventDefault();
    let formEL = e.target.elements;
    console.log(formEL["ad_type"].value);

    let bodyFormData = new FormData();

    bodyFormData.append("ad_type", formEL["ad_type"].value);
    
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
            pID="ad_type"
            pName="ad_type"
            pVal={" "}
            pPlaceholder="AD Type"
            pLabel="AD Type"
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
  return <ModalForm formGrid={<FormGrid />} buttonName={"ADD AD Type"} />;
}
