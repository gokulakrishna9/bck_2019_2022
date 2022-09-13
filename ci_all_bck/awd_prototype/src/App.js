import "./App.css";
import { BrowserRouter, Routes, Route } from "react-router-dom";

import PersistentDrawerLeft from "./layout";
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


import ServerRoute from "./server_routes";

import uuid from 'react-uuid'

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route
          path="/"
          element={
            <PersistentDrawerLeft
              filter={ADFilter}
              form={ADForm}
              table={DenseTable}
              tableRoute={ServerRoute.get_awd}
            />
          }
        />
          <Route
            path="aircraft"
            element={
              <PersistentDrawerLeft key={uuid()}
                filter={AircraftFilter}
                form={AircraftForm}
                table={DenseTable}
                tableRoute={ServerRoute.get_aircraft}
              />
            }
          />
          <Route
            path="aircraft_model"
            element={
              <PersistentDrawerLeft key={uuid()}
                filter={AircraftModelFilter}
                form={AircraftModelForm}
                table={DenseTable}
                tableRoute={ServerRoute.get_aircraft_model}
              />
            }
          />
          <Route
            path="aircraft_type"
            element={
              <PersistentDrawerLeft key={uuid()}
                filter={AircraftTypeFilter}
                form={AircraftTypeForm}
                table={DenseTable}
                tableRoute={ServerRoute.get_aircraft_type}
              />
            }
          />
          <Route
            path="manufacturer"
            element={
              <PersistentDrawerLeft key={uuid()}
                filter={ManufacturerFilter}
                form={ManufacturerForm}
                table={DenseTable}
                tableRoute={ServerRoute.get_manufacturer}
              />
            }
          />
          <Route
            path="manufacturer_type"
            element={
              <PersistentDrawerLeft key={uuid()}
                filter={ManufacturerTypeFilter}
                form={ManufacturerTypeForm}
                table={DenseTable}
                tableRoute={ServerRoute.get_manufacturer_type}
              />
            }
          />
          <Route
            path="appliance"
            element={
              <PersistentDrawerLeft key={uuid()}
                filter={ApplianceFilter}
                form={ApplianceForm}
                table={DenseTable}
                tableRoute={ServerRoute.get_appliance}
              />
            }
          />
          <Route
            path="engine"
            element={
              <PersistentDrawerLeft key={uuid()}
                filter={EngineFilter}
                form={EngineForm}
                table={DenseTable }
                tableRoute={ServerRoute.get_engine}
              />
            }
          />
          <Route
            path="engine_model"
            element={
              <PersistentDrawerLeft key={uuid()}
                filter={EngineModelFilter}
                form={EngineModelForm}
                table={DenseTable}
                tableRoute={ServerRoute.get_engine_model}
              />
            }
          />
          <Route
            path="engine_type"
            element={
              <PersistentDrawerLeft key={uuid()}
                filter={EngineTypeFilter}
                form={EngineTypeForm}
                table={DenseTable}
                tableRoute={ServerRoute.get_engine_type}
              />
            }
          />
          <Route
            path="ad"
            element={
              <PersistentDrawerLeft key={uuid()}
                filter={ADFilter}
                form={ADForm}
                table={DenseTable}
                tableRoute={ServerRoute.get_awd}
              />
            }
          />
          <Route
            path="ad_type"
            element={
              <PersistentDrawerLeft key={uuid()}
                filter={ADTypeFilter}
                form={ADTypeForm}
                table={DenseTable}
                tableRoute={ServerRoute.get_ad_type}
              />
            }
          />
          <Route
            path="aviation_authorities"
            element={
              <PersistentDrawerLeft key={uuid()}
                filter={AviationAuthoritiesFilter}
                form={AviationAuthoritiesForm}
                table={DenseTable}
                tableRoute={ServerRoute.get_avaiation_authority}
              />
            }
          />        
      </Routes>
    </BrowserRouter>
  );
}

export default App;
