// state method
// authentication method
// authorization method
// validation method
// table_name_create, table_name_update, table_name_delete, table_name_get_records
let _ = require('lodash');

let { writeFile } = require('../helper_functions/write_to_file');
let { tabSpaces, ucFirst, splitCapitalize, toLower } = require('../helper_functions/string_function');

let controllerOpnTmpl = _.template(`<?php \n defined('BASEPATH') OR exit('No direct script access allowed'); \n class <%= table_name %> extends CI_CONTROLLER {`);
let controllerCloseTmpl = _.template(`}`);
let remapStrtTmpl = _.template(`<%= outer_tab_spaces %>public function _remap($method){`);
let remapAuthenTmpl = _.template(`<%= inner_tab_spaces %>if(!$this->authenticate_user()){\n<%= outer_tab_spaces %><%= inner_tab_spaces %>$this->authentication_failure();\n<%= outer_tab_spaces %><%= inner_tab_spaces %>return;\n<%= inner_tab_spaces %>}`);
let remapMetExistsTmpl = _.template(`<%= inner_tab_spaces %>if(method_exists($this, $method)){\n<%= outer_tab_spaces %><%= inner_tab_spaces %>$this->$method();\n<%= inner_tab_spaces %>} else {\n<%= outer_tab_spaces %><%= inner_tab_spaces %>$this->default_handler($method);\n<%= inner_tab_spaces %>}`);
let remapAuthoTmpl = _.template(`<%= inner_tab_spaces %>if(!$this->authorize_user($method)){\n<%= outer_tab_spaces %><%= inner_tab_spaces %>$this->authorization_failure();\n<%= outer_tab_spaces %><%= inner_tab_spaces %>return;\n<%= inner_tab_spaces %>}`);
let remapEnd = _.template(`<%= outer_tab_spaces %>}`);
let authenticateTmpl = _.template(`<%= outer_tab_spaces %>private function authenticate_user(){return true;}`);
let authorizeTmpl = _.template(`<%= outer_tab_spaces %>private function authorize_user(){return true;}`);
let authenticateFailureTmpl = _.template(`<%= outer_tab_spaces %>private function authentication_failure(){show_404();}`);
let authorizationFailureTmpl = _.template(`<%= outer_tab_spaces %>private function authorization_failure(){show_404();}`);
let defaultHandlerTmpl = _.template(`<%= outer_tab_spaces %>private function default_handler(){show_404();}`);
let methodStartTmpl = _.template(`<%= outer_tab_spaces %>public function <%= method_name %>() {`);
let methodEndTmpl = _.template(`<%= outer_tab_spaces %>}`);
let loadModelTmpl = _.template(`<%= inner_tab_spaces %>$this->load->model('<%= model_name %>');`);
let loadDataTmpl = _.template(`<%= inner_tab_spaces %>$this->data['<%= value_name %>'] = $this-><%= model_name %>-><%= method_name %>(<%= param_list %>);`);
let loadViewTmpl = _.template(`<%= inner_tab_spaces %>$this->load->view('<%= folder_name %>/<%= grid_name %>', $this->data);`);
let echoJsonTmpl = _.template(`<%= inner_tab_spaces %>echo json_encode($this-><%= model_name %>-><%= method_name %>(<%= param_list %>));`);

// tabSpaces(tabsize)
let outerTab = 2;
let innerTab = 4;
exports.writeCIController = function (entities) {
  let controllerFile = [];
  _.forEach(entities, (ent) => {
    entity = JSON.parse(ent.content);
    if (_.isEmpty(entity.table_name))
      return;
    let appName = 'C:/wamp64/www/' + toLower(_.replace(entity.app_name, ' ', '_'));
    let controller = [];
    let fileName = ucFirst(entity.table_name);
    //table_name_create, table_name_update, table_name_delete, table_name_get_records
    controller.push(controllerOpnTmpl({ table_name: ucFirst(entity.table_name) }));
    controller.push(remapStrtTmpl({ inner_tab_spaces: tabSpaces(innerTab), outer_tab_spaces: tabSpaces(outerTab) }));
    controller.push(remapAuthenTmpl({ inner_tab_spaces: tabSpaces(innerTab), outer_tab_spaces: tabSpaces(outerTab) }));
    controller.push(remapAuthoTmpl({ inner_tab_spaces: tabSpaces(innerTab), outer_tab_spaces: tabSpaces(outerTab) }));
    controller.push(remapMetExistsTmpl({ inner_tab_spaces: tabSpaces(innerTab), outer_tab_spaces: tabSpaces(outerTab) }));
    controller.push(remapEnd({ inner_tab_spaces: tabSpaces(innerTab), outer_tab_spaces: tabSpaces(outerTab) }));
    controller.push(...wCreateMethod(entities, entity));
    controller.push(...wUpdateMethod(entities, entity));
    controller.push(...wDeleteMethod(entities, entity));
    controller.push(...wSelectMethod(entities, entity));
    controller.push(authenticateTmpl({ inner_tab_spaces: tabSpaces(innerTab), outer_tab_spaces: tabSpaces(outerTab) }));
    controller.push(authorizeTmpl({ inner_tab_spaces: tabSpaces(innerTab), outer_tab_spaces: tabSpaces(outerTab) }));
    controller.push(authenticateFailureTmpl({ inner_tab_spaces: tabSpaces(innerTab), outer_tab_spaces: tabSpaces(outerTab) }));
    controller.push(authorizationFailureTmpl({ inner_tab_spaces: tabSpaces(innerTab), outer_tab_spaces: tabSpaces(outerTab) }));
    controller.push(defaultHandlerTmpl({ inner_tab_spaces: tabSpaces(innerTab), outer_tab_spaces: tabSpaces(outerTab) }));
    controller.push(controllerCloseTmpl({}));
    //controller.push(...wSelectJSONMethod(entities, entity));
    controllerFile.push({ folder_name: appName + '/application/controllers', file_name: fileName, extension: '.php', file_contents: _.join(controller, '\n') });
  });
  writeFile(controllerFile, (rslt) => { console.log(rslt); });
}

function writeDefaults(entities, entity) {
  let stmtList = { load_models: [], load_masters_data: [], load_data: [] };
  _.forEach(entity['relation']['masters'], (col) => {
    stmtList['load_models'].push(loadModelTmpl({ inner_tab_spaces: tabSpaces(innerTab), model_name: col.table_name + '_' + 'model' }));
    stmtList['load_masters_data'].push(loadDataTmpl({ inner_tab_spaces: tabSpaces(innerTab), value_name: col.table_name, model_name: col.table_name + '_' + 'model', method_name: col.table_name + '_get_records', param_list: '' }));
  });
  stmtList['load_data'].push(loadDataTmpl({ inner_tab_spaces: tabSpaces(innerTab), value_name: entity.table_name, model_name: entity.table_name + '_' + 'model', method_name: entity.table_name + '_get_records', param_list: '' }));
  return stmtList;
}

function wCreateMethod(entities, entity) {
  let wD = writeDefaults(entities, entity);
  let method = [];
  method.push(methodStartTmpl({ outer_tab_spaces: tabSpaces(outerTab), method_name: entity.table_name + '_create' }));
  method.push(...wD['load_models']);
  method.push(...wD['load_masters_data']);
  method.push(loadDataTmpl({ inner_tab_spaces: tabSpaces(innerTab), value_name: entity.table_name + '_create', model_name: entity.table_name + '_' + 'model', method_name: entity.table_name + '_create', param_list: '' }));
  method.push(...wD['load_data']);
  method.push(loadViewTmpl({ inner_tab_spaces: tabSpaces(innerTab), folder_name: entity.table_name, grid_name: 'default_grid' }));
  method.push(methodEndTmpl({ outer_tab_spaces: tabSpaces(outerTab) }));
  return method;
}

function wUpdateMethod(entities, entity) {
  let wD = writeDefaults(entities, entity);
  let method = [];
  method.push(methodStartTmpl({ outer_tab_spaces: tabSpaces(outerTab), method_name: entity.table_name + '_update' }));
  method.push(...wD['load_models']);
  method.push(...wD['load_masters_data']);
  method.push(loadDataTmpl({ inner_tab_spaces: tabSpaces(innerTab), value_name: entity.table_name + '_update', model_name: entity.table_name + '_' + 'model', method_name: entity.table_name + '_update', param_list: '' }))
  method.push(...wD['load_data']);
  method.push(loadViewTmpl({ inner_tab_spaces: tabSpaces(innerTab), folder_name: entity.table_name, grid_name: 'default_grid' }));
  method.push(methodEndTmpl({ outer_tab_spaces: tabSpaces(outerTab) }));
  return method;
}

function wDeleteMethod(entities, entity) {
  let wD = writeDefaults(entities, entity);
  let method = [];
  method.push(methodStartTmpl({ outer_tab_spaces: tabSpaces(outerTab), method_name: entity.table_name + '_delete' }));
  method.push(...wD['load_models']);
  method.push(...wD['load_masters_data']);
  method.push(loadDataTmpl({ inner_tab_spaces: tabSpaces(innerTab), value_name: entity.table_name + '_delete', model_name: entity.table_name + '_' + 'model', method_name: entity.table_name + '_delete', param_list: '' }));
  method.push(...wD['load_data']);
  method.push(loadViewTmpl({ inner_tab_spaces: tabSpaces(innerTab), folder_name: entity.table_name, grid_name: 'default_grid' }));
  method.push(methodEndTmpl({ outer_tab_spaces: tabSpaces(outerTab) }));
  return method;
}

function wSelectMethod(entities, entity) {
  let wD = writeDefaults(entities, entity);
  let method = [];
  method.push(methodStartTmpl({ outer_tab_spaces: tabSpaces(outerTab), method_name: entity.table_name + '_select' }));
  method.push(...wD['load_models']);
  method.push(...wD['load_masters_data']);
  method.push(...wD['load_data']);
  method.push(loadViewTmpl({ inner_tab_spaces: tabSpaces(innerTab), folder_name: entity.table_name, grid_name: 'default_grid' }));
  method.push(methodEndTmpl({ outer_tab_spaces: tabSpaces(outerTab) }));
  return method;
}


// pending
function wSelectJSONMethod(entities, entity) {
  let wD = writeDefaults(entities, entity);
  let method = [];
  method.push(methodStartTmpl({ outer_tab_spaces: tabSpaces(outerTab), method_name: tabSpaces(innerTab) }));
  method.push(echoJsonTmpl({ model_name: entity.table_name + '_model', method_name: entity.table_name + '_get_records', param_list: '' }));
  method.push(methodEndTmpl({ outer_tab_spaces: tabSpaces(outerTab) }));
}