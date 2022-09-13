<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);
///*
$routes->get('awd', 'AWD::awdPage');
$routes->post('add_awd', 'AWD::addAWD');
$routes->get('get_awd_label', 'AWD::getAWDLabelJson');

$routes->get('adfile', 'ADFile::adFilePage');

$routes->get('adtype', 'ADType::adTypePage');
$routes->post('add_adtype', 'ADType::addADType');
$routes->get('get_adtype_label', 'ADType::getADTypeLabelJson');

$routes->get('avaiation_authority', 'AviationAuthority::aviationAuthorityPage');
$routes->post('add_avaiation_authority', 'AviationAuthority::addAviationAuthority');
$routes->get('get_avaiation_authority_label', 'AviationAuthority::getAvaiationAuthorityLabelJson');

$routes->get('aircraft', 'Aircraft::aircraftPage');
$routes->post('add_aircraft', 'Aircraft::addAircraft');
$routes->post('get_aircraft_label', 'Aircraft::addAircraft');

$routes->get('aircraft_type', 'AircraftType::aircraftTypePage');
$routes->post('add_aircraft_type', 'AircraftType::addAircraftType');
$routes->get('get_aircraft_type_label', 'AircraftType::getAircraftTypeLabelJson');

$routes->get('aircraft_model', 'AircraftModel::aircraftModelPage');
$routes->get('get_aircraft_model_label', 'AircraftModel::getAircraftModelLblJson');
$routes->post('add_aircraft_model', 'AircraftModel::addAircraftModel');

$routes->get('appliance', 'Appliance::appliancePage');

$routes->get('engine', 'Engine::enginePage');
$routes->post('add_engine', 'Engine::addEngine');
$routes->get('get_engine_label', 'Engine::getEngineLabelJson');

$routes->get('engine_model', 'EngineModel::aircraftModelPage');
$routes->post('add_engine_model', 'EngineModel::addEngineModel');
$routes->get('get_engine_model_label', 'EngineModel::getEngineModelLabelJson');

$routes->get('engine_type', 'EngineType::engineTypePage');
$routes->post('add_engine_type', 'EngineType::addEngineType');
$routes->get('get_engine_type_label', 'EngineType::getEngineTypeLabelJson');

$routes->get('manufacturer', 'Manufacturer::manufacturerPage');
$routes->post('add_manufacturer', 'Manufacturer::addManufacturer');
$routes->post('update_manufacturer', 'Manufacturer::updateManufacturer'); //
$routes->get('update_manufacturer', 'Manufacturer::updateManufacturer'); //
$routes->post('get_manufacturer', 'Manufacturer::getManufacturer');
$routes->get('get_manufacturer_label', 'Manufacturer::getManufacturerLblJson');

$routes->get('manufacturer_type', 'ManufacturerType::manufacturerTypePage');
$routes->post('add_manufacturer_type', 'ManufacturerType::addManufacturerType');
$routes->get('get_manufacturer_type_label', 'ManufacturerType::getManufacturerTypeLblJson');
$routes->get('view_manufacturer_type', 'ManufacturerType::viewManufacturerType');
$routes->get('update_manufacturer_type', 'ManufacturerType::updateManufacturerType');
$routes->post('update_manufacturer_type', 'ManufacturerType::updateManufacturerType');
$routes->get('delete_manufacturer_type', 'ManufacturerType::deleteManufacturerType');
//*/
/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'AWD::awdPage');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
