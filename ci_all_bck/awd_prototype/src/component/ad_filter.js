import * as React from "react";
import Grid from "@mui/material/Grid";

function ADFilter() {
  return (
    <Grid container spacing={.5}>
      <Grid item xs={8} md={3}>
        <p>XS-8</p>
      </Grid>
      <Grid item xs={4}  md={3}>
        <p>XS-4</p>
      </Grid>
      <Grid item xs={4}  md={3}>
        <p>XS-4</p>
      </Grid>
      <Grid item xs={8}  md={3}>
        <p>XS-4</p>
      </Grid>
    </Grid>
  );
}

export default ADFilter;
