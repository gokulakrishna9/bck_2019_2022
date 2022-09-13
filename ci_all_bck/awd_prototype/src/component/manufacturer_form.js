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

export default function ManufacturerForm(props) {
  const handleSubmit = (e) => {
    e.preventDefault();
    let formEL = e.target.elements;
    console.log(formEL["manufacturer_name"].value);
    console.log(formEL["manufacturer_type_id"].value);

    let bodyFormData = new FormData();

    bodyFormData.append("manufacturer_name", formEL["manufacturer_name"].value);
    bodyFormData.append("manufacturer_type_id", formEL["manufacturer_type_id"].value);    
    
    axios({
      url: ServerRoute.base_url+ServerRoute.add_manufacturer_type.url,
      method: 'post',
      headers: { "Content-Type": "multipart/form-data" },
      data: bodyFormData,
    }).then((response) => {
      console.log(response);
    }).catch((response)=> {
      console.log(response);
    });
    
  };
  let FormGrid = () => (    
    <form key={uuid()} onSubmit={(e) => handleSubmit(e)}>
      <Grid container spacing={3} direction="row">
        <Grid item xs={12} md={4}>
          <TextFieldC
            key={uuid()}
            pID="manufacturer_name"
            pName="manufacturer_name"
            pVal={' '}
            pPlaceholder="Manufacturer Name"
            pLabel="Manufacturer Name"
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <AutoCompleteMulti
            key={uuid()}
            pID="manufacturer_type_id"
            pName="manufacturer_type_id"
            pPlaceholder="Manufacturer Type"
            pLabel="Manufacturer Type"
            pMultiple={true}
            dataURL={ServerRoute.get_manufacturer_type_label.url}
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
  return <ModalForm formGrid={<FormGrid />}  buttonName={'Manufacturer'}/>;
}
