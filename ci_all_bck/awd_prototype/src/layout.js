import * as React from "react";
import { styled, useTheme } from "@mui/material/styles";
import Box from "@mui/material/Box";
import Drawer from "@mui/material/Drawer";
import CssBaseline from "@mui/material/CssBaseline";
import MuiAppBar from "@mui/material/AppBar";
import Toolbar from "@mui/material/Toolbar";
import List from "@mui/material/List";
import Typography from "@mui/material/Typography";
import Divider from "@mui/material/Divider";
import IconButton from "@mui/material/IconButton";
import MenuIcon from "@mui/icons-material/Menu";
import ChevronLeftIcon from "@mui/icons-material/ChevronLeft";
import ChevronRightIcon from "@mui/icons-material/ChevronRight";
import ListItem from "@mui/material/ListItem";
import ListItemText from "@mui/material/ListItemText";
import { Link } from "react-router-dom";
import Grid from "@mui/material/Grid";
import _ from "lodash";

import ADFilter from "./component/ad_filter";
import ADForm from "./component/ad_form";
import DenseTable from "./component/table";
import ADTypeFilter from "./component/ad_type_filter";
import ADTypeForm from "./component/ad_type_form";

import AircraftForm from "./component/aircraft_form";
import AircraftFilter from "./component/aircraft_filter";

import AircraftModelFilter from "./component/aircraft_model_filter";
import AircraftModelForm from "./component/aircraft_model_form";

import AircraftTypeFilter from "./component/aircraft_type_filter";
import AircraftTypeForm from "./component/aircraft_type_form";

import ApplianceFilter from "./component/appliance_filter";
import ApplianceForm from "./component/appliance_form";

import AviationAuthoritiesFilter from "./component/aviation_authorities_filter";
import AviationAuthoritiesForm from "./component/aviation_authorities_form";

import EngineFilter from "./component/engine_filter";
import EngineForm from "./component/engine_form";

import EngineModelFilter from "./component/engine_model_filter";
import EngineModelForm from "./component/engine_model_form";

import EngineTypeFilter from "./component/engine_type_filter";
import EngineTypeForm from "./component/engine_type_form";

import ManufacturerFilter from "./component/manufacturer_filter";
import ManufacturerForm from "./component/manufacturer_form";

import ManufacturerTypeFilter from "./component/manufacturer_type_filter";
import ManufacturerTypeForm from "./component/manufacturer_type_form";

const drawerWidth = 240;

const Main = styled("main", { shouldForwardProp: (prop) => prop !== "open" })(
  ({ theme, open }) => ({
    flexGrow: 1,
    padding: theme.spacing(3),
    transition: theme.transitions.create("margin", {
      easing: theme.transitions.easing.sharp,
      duration: theme.transitions.duration.leavingScreen,
    }),
    marginLeft: `-${drawerWidth}px`,
    ...(open && {
      transition: theme.transitions.create("margin", {
        easing: theme.transitions.easing.easeOut,
        duration: theme.transitions.duration.enteringScreen,
      }),
      marginLeft: 0,
    }),
  })
);

const AppBar = styled(MuiAppBar, {
  shouldForwardProp: (prop) => prop !== "open",
})(({ theme, open }) => ({
  transition: theme.transitions.create(["margin", "width"], {
    easing: theme.transitions.easing.sharp,
    duration: theme.transitions.duration.leavingScreen,
  }),
  ...(open && {
    width: `calc(100% - ${drawerWidth}px)`,
    marginLeft: `${drawerWidth}px`,
    transition: theme.transitions.create(["margin", "width"], {
      easing: theme.transitions.easing.easeOut,
      duration: theme.transitions.duration.enteringScreen,
    }),
  }),
}));

const DrawerHeader = styled("div")(({ theme }) => ({
  display: "flex",
  alignItems: "center",
  padding: theme.spacing(0, 1),
  // necessary for content to be below app bar
  ...theme.mixins.toolbar,
  justifyContent: "flex-end",
}));

export default function PersistentDrawerLeft(props) {
  const theme = useTheme();
  const [open, setOpen] = React.useState(false);
  const [update_record, setUpdateRecord] = React.useState(-1);

  const handleDrawerOpen = () => {
    setOpen(true);
  };

  const handleDrawerClose = () => {
    setOpen(false);
  };

  const FormComponent = props.form;
  const FilterComponent = props.filter;
  const TableComponent = props.table;
  /*
      filter={<AircraftModelFilter />}
      form={<AircraftModelForm />}
      table={<DenseTable servOperator={ServerRoute.get_aircraft_model}/>}
   */

  return (
    <Box sx={{ display: "flex" }}>
      <CssBaseline />
      <Drawer
        sx={{
          width: drawerWidth,
          flexShrink: 0,
          "& .MuiDrawer-paper": {
            width: drawerWidth,
            boxSizing: "border-box",
          },
        }}
        variant="persistent"
        anchor="left"
        open={open}
      >
        <DrawerHeader>
          <IconButton onClick={handleDrawerClose}>
            {theme.direction === "ltr" ? (
              <ChevronLeftIcon />
            ) : (
              <ChevronRightIcon />
            )}
          </IconButton>
        </DrawerHeader>
        <Divider />
        <List>
          {_.map(
            [
              ["ad", "AD"],
              ["ad_type", "AD Type"],
              ["aviation_authorities", "Aviation Authorities"],
            ],
            (route) => {
              return (
                <ListItem button key={route[0]}>
                  <Link to={"/" + route[0]}>{route[1]}</Link>
                </ListItem>
              );
            }
          )}
        </List>
        <Divider />
        <List>
          {[
            ["aircraft", "Aircraft"],
            ["aircraft_model", "Aircraft Model"],
            ["aircraft_type", "Aircraft Type"],
            ["manufacturer", "Manufacturer"],
            ["manufacturer_type", "Manufacturer Type"],
            ["appliance", "Appliance"],
            ["engine", "Engine"],
            ["engine_model", "Engine Model"],
            ["engine_type", "Engine Type"],
          ].map((route) => (
            <ListItem button key={route[0]}>
              <Link to={"/" + route[0]}>{route[1]}</Link>
            </ListItem>
          ))}
        </List>
      </Drawer>
      <Main open={open}>
        <AppBar position="fixed" open={open}>
          <Grid
            container
            spacing={0.5}
            direction="row"
            justifyContent="center"
            alignItems="center"
          >
            <Grid item xs={2} md={3}>
              &nbsp;
              <IconButton
                color="inherit"
                aria-label="open drawer"
                onClick={handleDrawerOpen}
                edge="start"
                sx={{ mr: 2, ...(open && { display: "none" }) }}
              >
                <MenuIcon />
              </IconButton>
              Company Logo
            </Grid>
            <Grid item xs={12} md={8}>
              <FilterComponent />
            </Grid>
            <Grid item xs={12} md={1}>
              <FormComponent
                primaryKey={update_record}
                onSubmitClb={() => {
                  console.log("Layout On Submit Clicked");
                }}
              />
            </Grid>
          </Grid>
        </AppBar>
        <DrawerHeader />
        <TableComponent
          onUpdateClick={(primaryKey) => {
            console.log(primaryKey);
            setUpdateRecord(primaryKey);
          }}
          servOperator={props.tableRoute}
        />
      </Main>
    </Box>
  );
}
