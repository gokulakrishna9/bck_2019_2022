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

export default function ManufacturerTypeForm(props) {
  const [manufacturer_type, setManufacturerType] = React.useState("");
  
  React.useEffect(() => {
    if (props.primaryKey !== -1) {
      // axios call
      axios
        .get(ServerRoute.base_url + ServerRoute.get_manufacturer_type.url, {
          params: { primary_key: props.primaryKey },
        })
        .then((response) => {
          console.log(response.data.table_data[0]);
          setManufacturerType(response.data.table_data[0].manufacturer_type);
          // state update
          // set modal parameter
        });
    }
  }, []);
  const handleSubmit = (e) => {
    e.preventDefault();
    let formEL = e.target.elements;
    console.log(formEL["manufacturer_type"].value);

    let bodyFormData = new FormData();

    bodyFormData.append("manufacturer_type", formEL["manufacturer_type"].value);
    axios({
      url: ServerRoute.base_url + ServerRoute.add_manufacturer_type.url,
      method: "post",
      headers: { "Content-Type": "multipart/form-data" },
      data: bodyFormData,
    })
      .then((response) => {
        console.log(response);
        setManufacturerType("");
        e.target.reset();
      })
      .catch((response) => {
        console.log(response);
      });
  };
  let FormGrid = () => (
    <form key={uuid()} onSubmit={(e) => handleSubmit(e)}>
      <Grid container spacing={3} direction="row">
        <Grid item xs={12} md={4}>
          <TextFieldC
            key={uuid()}
            pID="manufacturer_type"
            pName="manufacturer_type"
            pVal={manufacturer_type}
            pPlaceholder="Manufacturer Name"
            pLabel="Manufacturer Name"
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
  return (
    <ModalForm
      setOpen={props.primaryKey !== -1 ? true : false}
      formGrid={<FormGrid />}
      buttonName={"Manufacturer"}
    />
  );
}
