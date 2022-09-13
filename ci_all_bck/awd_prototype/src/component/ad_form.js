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
import DatePickerC from "../mui_component/date_field"

import ServerRoute from "../server_routes";
import axios from "axios";

export default function ADForm(props) {
  const handleSubmit = (e) => {
    e.preventDefault();
    props.onSubmitClb();
    let formEL = e.target.elements;
    console.log(formEL["ad_number"].value);
    console.log(formEL["subject"].value);
    console.log(formEL["issued_by"].value);
    console.log(formEL["issue_date"].value);
    console.log(formEL["effective_date"].value);
    console.log(formEL["supersedes"].value);
    console.log(formEL["superseded_by"].value);
    console.log(formEL["aircraft_serial_number"].value);
    console.log(formEL["aircraft_model"].value);
    console.log(formEL["aircraft_type"].value);
    console.log(formEL["engine_serial_number"].value);
    console.log(formEL["engine_model"].value);
    console.log(formEL["engine_type"].value);
    console.log(formEL["part_number"].value);
    
    let bodyFormData = new FormData();

    bodyFormData.append("ad_number", formEL["ad_number"].value);
    bodyFormData.append("subject", formEL["subject"].value);
    bodyFormData.append("issued_by", formEL["issued_by"].value);
    bodyFormData.append("effective_date", formEL["effective_date"].value);
    bodyFormData.append("supersedes", formEL["supersedes"].value);
    bodyFormData.append("superseded_by", formEL["superseded_by"].value);
    bodyFormData.append("aircraft_serial_number", formEL["aircraft_serial_number"].value);
    bodyFormData.append("aircraft_model", formEL["aircraft_model"].value);
    bodyFormData.append("aircraft_type", formEL["aircraft_type"].value);
    bodyFormData.append("engine_serial_number", formEL["engine_serial_number"].value);
    bodyFormData.append("engine_model", formEL["engine_model"].value);
    bodyFormData.append("engine_type", formEL["part_number"].value);
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
  }
  let FormGrid = () => (
    <form key={uuid()} onSubmit={(e) => handleSubmit(e)}>
      <Grid container spacing={3} direction="row">
        <Grid item xs={12} md={4}>
          <TextFieldC
            key={uuid()}
            pID="ad_number"
            pName="ad_number"
            pVal={' '}
            pPlaceholder="AD Number"
            pLabel="AD Number"
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <TextFieldC
            key={uuid()}
            pID="subject"
            pName="subject"
            pVal={' '}
            pPlaceholder="Subject"
            pLabel="Subject"
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <AutoCompleteMulti
            key={uuid()}
            pID="issued_by"
            pName="issued_by"
            pPlaceholder="Issued By"
            pLabel="Issued By"
            pMultiple={false}
            dataURL={ServerRoute.get_avaiation_authority_label.url}
          />
        </Grid>
        <Grid item xs={12} md={4}>
        <DatePickerC 
          key={uuid()}
          pID="issue_date"
          pName="issue_date"
          pPlaceholder="Issue Date"
          pLabel="Issue Date"
          pVal={' '}
          minDate={null}
        />
        </Grid>
        <Grid item xs={12} md={4}>
        <DatePickerC 
          key={uuid()}
          minDate={" "}
          pID="effective_date"
          pName="effective_date"
          pPlaceholder="Effective Date"
          pLabel="Effective Date"
          pVal={' '}
        />
        </Grid>
        <Grid item xs={12} md={4}>
          <AutoCompleteMulti
            key={uuid()}
            pID="supersedes"
            pName="supersedes"
            pPlaceholder="Supersedes"
            pLabel="Supersedes"
            pMultiple={false}            
            dataURL = {ServerRoute.get_awd_label.url}
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <AutoCompleteMulti
            key={uuid()}
            pID="superseded_by"
            pName="superseded_by"
            pPlaceholder="Superseded By"
            pLabel="Superseded By"
            pMultiple={false}
            dataURL={ServerRoute.get_awd_label.url}
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <AutoCompleteMulti
            key={uuid()}
            pID="aircraft_serial_number"
            pName="aircraft_serial_number"
            pPlaceholder="Aircraft Serial Number"
            pLabel="Aircraft Serial Number"
            pMultiple={true}
            dataURL = {ServerRoute.get_aircraft_label.url}
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <AutoCompleteMulti
            key={uuid()}
            pID="aircraft_model"
            pName="aircraft_model"
            pPlaceholder="aircraft_model"
            pLabel="Aircraft Model"
            pMultiple={false}
            dataURL={ServerRoute.get_aircraft_model_label.url}
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <AutoCompleteMulti
            key={uuid()}
            pID="aircraft_type"
            pName="aircraft_type"
            pPlaceholder="Aircraft Type"
            pLabel="Aircraft Type"
            dataURL={ServerRoute.get_aircraft_type_label.url}
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <AutoCompleteMulti
            key={uuid()}
            pID="engine_serial_number"
            pName="engine_serial_number"
            pPlaceholder="Engine Serial Number"
            pLabel="Engine Serial Number"
            pMultiple={false}
            dataURL={ServerRoute.get_engine_label.url}
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <AutoCompleteMulti
            key={uuid()}
            pID="engine_model"
            pName="engine_model"
            pPlaceholder="Engine Model"
            pLabel="Engine Model"
            pMultiple={false}
            dataURL={ServerRoute.get_engine_model_label.url}
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <AutoCompleteMulti
            key={uuid()}
            pID="engine_type"
            pName="engine_type"
            pPlaceholder="Engine Type"
            pLabel="Engine Type"
            dataURL={ServerRoute.get_engine_type_label.url}
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <label>Part Number</label>
          <br />
          <TextField
            key={uuid()}
            id="part_number"
            name="part_number"
            placeholder="Part Number"
            label="Part Number"
            variant="outlined"
            size="normal"
            fullWidth
          />
        </Grid>
        <Grid item xs={12} md={4}>
          <br />
          <Button
            key={uuid()}
            className="btn-upload"
            color="primary"
            variant="contained"
            component="span"
          >
            Upload
          </Button>
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
  return <ModalForm formGrid={<FormGrid />}  buttonName={'ADD AD'} />;
}
