let _ = require('lodash');
let { tabSpaces, ucFirst, splitCapitalize, toLower } = require('../helper_functions/string_function');
let { writeFile } = require('../helper_functions/write_to_file');

// HAVE ABILITY TO ACT ON COLUMNS, APPLYING DATE, FORMATTING etc...
let methodOpening = _.template(`function <%=method_name%>(<%=param_list%>) {`);
let methodClosing = _.template(`}`);
let phpVariable = _.template(`$<%=variable_name%>`);
let methodVariable = _.template(`$<%=variable_name%> = ''`);
let arrayDeclaration = _.template(`$<%= array_name %> = [];`);
let sessionDataArray = _.template(`$<%= array_name %>['<%= column_name %>'] = $this->session->has_userdata('<%= key_name %>') ? $this->session->userdata('<%= key_name %>') : '';`);
let postTmpl = _.template(`$<%= array_name %>['<%= column_name %>'] = is_null($this->input->post('<%= value_variable %>')) ? '' : $this->input->post('<%= value_variable %>');`);
let getTmpl = _.template(`$<%= array_name %>['<%= column_name %>'] = is_null($this->input->get('<%= value_variable %>')) ? '' : $this->input->get('<%= value_variable %>');`);
let insertTmpl = _.template(`$this->db->insert('<%= table_name %>', $<%= data_array_name %>);`);
let returnInsertTmpl = _.template(`return array('insert_id' => $this->db->insert_id(), 'input_data' => $<%= array_name %>);`);
let returnUpdateTmpl = _.template(`return array('insert_id' => $this->db->affected_rows(), 'input_data' => $<%= array_name %>);`);
let fieldOpTmpl = _.template(`$<%= array_name %>[<%= field_name %>] = <%= op_name %>($<%= field_name %>);`)
let arrayTmpl = _.template(`$<%= array_name %> = array(<%= array_elements %>);`);
let arrExp = _.template(`array(<%= array_elements %>)`);
let arrayElemTmpl = _.template(`'<%= column_name %>' => $<%= value_variable %>`);
let assignParamInptTmpl = _.template(`$<%= array_name %>['<%= column_name %>'] = $<%= value_variable %>;`);
let sessInptTmpl = _.template(`$<%= array_name %>['<%= column_name %>'] = $this->session-><%= value_variable %>;`);
let setSessTmpl = _.template(`$this->session->set_userdata('<%= column_name %>', $<%= array_name %>['<%= column_name %>']);`);
let selectTmpl = _.template(`$this->db->select('<%= columns_list %>')->from('<%= table_name %>');`);
let selectColTmpl = _.template(`<%=table_name%>.<%=column_name%> AS <%=column_label%>`)
let joinTmpl = _.template(`$this->db->join('<%= join_table %>', '<%= join_on %>', '<%= join_type %>');`);
let getResultTmpl = _.template(`$qry = $this->db->get();`);
let resultTmpl = _.template(`return array('result' => $qry->result(), 'filter_array' => $<%= filter_array %>);`);
let updateTmpl = _.template(`$this->db->update('<%= table_name %>', $<%= data_array_name %>, array(<%= filter_elements %>));`);
let whereTmpl = _.template(`$this->db->where('<%= field_name %>', $<%= field_value_variable %>);`);
let whereArrTmpl = _.template(`$this->db->where($<%= filter_array %>);`);
let deleteTmpl = _.template(`$this->db->delete('<%= table_name %>', array(<%= filter_elements %>));`);
let groupByTmpl = _.template(`$this->db->group_by($<%= table_name_column_name %>);`);
let orderByTmpl = _.template(`$this->db->order_by('<%= table_name_column_name %>', '<%= sorting %>');`);
// The HAVING clause is often used with the GROUP BY clause to filter groups based on a specified condition. 
// If the GROUP BY clause is omitted, the HAVING clause behaves like the WHERE clause.
let havingTmpl = _.template(`$this->db->having('<%= table_name_column_name %>');`);
let returnStat = _.template(`return $rslt;`);
let modelOpeningTmpl = _.template(`<?php class <%=table_name %>_model extends CI_Model {`);
let modelClosingTmpl = _.template(`}`);
let dateModTmpl = _.template(`$<%= array_name %>['<%= field_name %>'] = empty($<%= array_name %>['<%= field_name %>']) ? date("Y-m-d") : date("Y-m-d", strtotime($<%= array_name %>['<%= field_name %>']))`);
let timeModTmpl = _.template(`$<%= array_name %>['<%= field_name %>'] = empty($<%= array_name %>['<%= field_name %>']) ? '23:59' : date("H:i", strtotime($<%= array_name %>['<%= field_name %>']))`);

exports.writeCIModel = function (entities) {
  let modelFile = [];
  let appName = '';
  _.forEach(entities, (entity) => {
    let model = [];
    entity = JSON.parse(entity.content);
    if (_.isEmpty(entity.table_name))
      return;
    appName = 'C:/wamp64/www/' + toLower(_.replace(entity.app_name, ' ', '_'));
    let fileName = ucFirst(entity.table_name);
    model.push(modelOpeningTmpl({ table_name: fileName }));
    // create{add masters to params as well, insert record, return{insert id, post data}}
    model.push(...wCreateMethod(entities, entity));
    // update{add masters to params as well, update record, return{insert id, post data}}
    model.push(...wUpdateMethod(entities, entity));
    // delete{add masters to params as well, select record, return{deleted record}}
    model.push(...wDeleteMethod(entities, entity));
    // select{select record with masters labels}, make filter a get
    model.push(...wSelectMethod(entities, entity));
    // derived{grouping on derived}
    // let derivedMethod = wDerivedMethod(entities, entity);
    // branching{grouping on branches}
    // let branchingMethodsArray = wBranchingMethods(entities, entity);
    // custom model ops ...
    model.push(modelClosingTmpl({}));
    // controllerFile.push({  file_name: fileName, extension: '.php', file_contents: _.join(controller, '\n') });
    modelFile.push({ folder_name: appName + '/application/models', file_name: fileName + '_Model', extension: '.php', file_contents: _.join(model, '\n') });
  });
  writeFile(modelFile, (rslt) => { console.log(rslt); });
}
// tabSpaces(tabsize)
let outerTab = 2;
let innerTab = 4;

// DONT FORGET THIS STEP
function applyOps(column) {
  // CHECK SESSION FOR FIELD LEVEL OPS
  return '';
}

function applyFieldOp(column) {
  return column;
}

function inputFields(entities, entity) {
  let masterList = [];
  let inptArrayName = entity.table_name + '_' + 'post';
  let inputList = { method_params: [], session_input: [], param_input: [], post_input: [], update_session: [], input_array_name: inptArrayName };  
  _.forEach(entity['relation']['masters'], (col) => {
    inputList['method_params'].push(methodVariable({ variable_name: col.table_name + '_' + col.column_name }));
    masterList.push(col);
  });
  // assign input from session
  _.forEach(masterList, (column) => {
    inputList['session_input'].push(tabSpaces(innerTab) + sessInptTmpl({ array_name: inptArrayName, column_name: column.table_name + '.' + column.column_name, value_variable: column.table_name + '_' + column.column_name }));
  });
  // assign input from params
  _.forEach(masterList, (column) => {
    inputList['param_input'].push(tabSpaces(innerTab) + assignParamInptTmpl({ array_name: inptArrayName, column_name: column.table_name + '.' + column.column_name, value_variable: column.table_name + '_' + column.column_name }));
  });
  // assign input from browser
  inputList['post_input'].push(..._.map(entity.table_columns, (column) => {
    inputList['post_input'].push(tabSpaces(innerTab) + postTmpl({ array_name: inptArrayName, column_name: column.column_name, value_variable: column.column_name }));
  }));
  // update session params
  _.forEach(masterList, (column) => {
    inputList['update_session'].push(tabSpaces(innerTab) + setSessTmpl({ array_name: inptArrayName, column_name: column.table_name + '.' + column.column_name, value_variable: column.table_name + '_' + column.column_name }));
  });
  return inputList;
}

function wCreateMethod(entities, entity) {
  let createMethod = [];  
  let inptFields = inputFields(entities, entity);
  let methodName = entity.table_name + '_' + 'create';
  createMethod.push(tabSpaces(outerTab) + methodOpening({ method_name: methodName, param_list: inptFields.method_params }));
  createMethod.push(tabSpaces(innerTab) + arrayDeclaration({ array_name: inptFields.input_array_name }));
  createMethod.push(...inptFields.session_input);
  createMethod.push(...inptFields.param_input);
  createMethod.push(...inptFields.post_input);
  createMethod.push(...inptFields.update_session);
  createMethod.push(tabSpaces(innerTab) + insertTmpl({ table_name: entity.table_name, data_array_name: inptFields.input_array_name }));
  createMethod.push(tabSpaces(innerTab) + returnInsertTmpl({ array_name: inptFields.input_array_name }));
  createMethod.push(tabSpaces(outerTab) + methodClosing({}));
  return _.reject(createMethod, (method) => { return _.isEmpty(method); });
}

function wUpdateMethod(entities, entity) {
  let updateMethod = [];
  let paramList = [];
  let masterList = [];
  _.forEach([...entity['relation']['masters'], ..._.filter(entity.table_columns, { column_key: 'PRI' })], (col) => {
    paramList.push(phpVariable({ variable_name: col.column_name }));
    masterList.push(col);
  });
  let methodName = entity.table_name + '_' + 'update';
  updateMethod.push(tabSpaces(outerTab) + methodOpening({ method_name: methodName, param_list: paramList }));
  let inptArrayName = entity.table_name + '_' + 'post';
  // assign input from session
  _.forEach(masterList, (column) => {
    updateMethod.push(tabSpaces(innerTab) + sessInptTmpl({ array_name: inptArrayName, column_name: column.table_name + '.' + column.column_name, value_variable: column.table_name + '_' + column.column_name }));
  });
  // assign input from params
  _.forEach(masterList, (column) => {
    updateMethod.push(tabSpaces(innerTab) + assignParamInptTmpl({ array_name: inptArrayName, column_name: column.table_name + '.' + column.column_name, value_variable: column.table_name + '_' + column.column_name }));
  });
  // assign input from browser
  updateMethod.push(..._.map(_.reject(entity.table_columns, { column_key: 'PRI' }), (column) => {
    return tabSpaces(innerTab) + postTmpl({ array_name: inptArrayName, column_name: column.table_name + '.' + column.column_name, value_variable: column.table_name + '_' + column.column_name });
  }));
  // update session params
  _.forEach(masterList, (column) => {
    updateMethod.push(tabSpaces(innerTab) + setSessTmpl({ array_name: inptArrayName, column_name: column.table_name + '.' + column.column_name, value_variable: column.table_name + '_' + column.column_name }));
  });

  let priKey = _.filter(entity.table_columns, { column_key: 'PRI' })[0];
  // array field tmpl
  let filterElem = arrayElemTmpl({ column_name: priKey.column_name, value_variable: inptArrayName + "['" + priKey.column_name + "']" });
  // array tmpl
  updateMethod.push(tabSpaces(innerTab) + updateTmpl({ table_name: entity.table_name, data_array_name: inptArrayName, filter_elements: filterElem }));
  updateMethod.push(tabSpaces(innerTab) + returnUpdateTmpl({ array_name: inptArrayName }));
  updateMethod.push(tabSpaces(outerTab) + methodClosing({}));
  return _.reject(updateMethod, (method) => { return _.isEmpty(method); });
}

function wDeleteMethod(entities, entity) {
  let deleteMethod = [];
  let methodName = entity.table_name + '_' + 'delete';
  deleteMethod.push(tabSpaces(outerTab) + methodOpening({ method_name: methodName, param_list: '' }));
  let priKey = _.filter(entity.table_columns, { column_key: 'PRI' })[0];
  let inptArrayName = entity.table_name + '_' + 'delete';
  deleteMethod.push(..._.map(entity.table_columns, (column) => {
    return tabSpaces(innerTab) + postTmpl({ array_name: inptArrayName, column_name: column.table_name + '.' + column.column_name, value_variable: column.table_name + '_' + column.column_name });
  }));

  // array field tmpl
  let filterElem = arrayElemTmpl({ column_name: priKey.column_name, value_variable: inptArrayName + "['" + priKey.column_name + "']" });
  // array tmpl
  deleteMethod.push(tabSpaces(innerTab) + deleteTmpl({ table_name: entity.table_name, filter_elements: filterElem }));
  deleteMethod.push(tabSpaces(innerTab) + returnUpdateTmpl({ array_name: inptArrayName }));
  deleteMethod.push(tabSpaces(outerTab) + methodClosing({}));
  return _.reject(deleteMethod, (method) => { return _.isEmpty(method); });
}

function wSelectMethod(entities, entity) {
  let selectMethod = [];
  let paramList = [];
  let masterList = [];
  _.forEach([...entity['relation']['masters'], ..._.filter(entity.table_columns, { column_key: 'PRI' })], (col) => {
    paramList.push(phpVariable({ variable_name: col.column_name }));
    masterList.push(col);
  });
  let methodName = entity.table_name + '_' + 'get_records';
  selectMethod.push(tabSpaces(outerTab) + methodOpening({ method_name: methodName, param_list: paramList }));
  let inptArrayName = entity.table_name + '_' + 'filters';
  // assign input from session
  _.forEach(masterList, (column) => {
    selectMethod.push(tabSpaces(innerTab) + sessInptTmpl({ array_name: inptArrayName, column_name: column.table_name + '.' + column.column_name, value_variable: column.table_name + '_' + column.column_name }));
  });
  // assign input from params
  _.forEach(masterList, (column) => {
    selectMethod.push(tabSpaces(innerTab) + assignParamInptTmpl({ array_name: inptArrayName, column_name: column.table_name + '.' + column.column_name, value_variable: column.table_name + '_' + column.column_name }));
  });
  // assign input from browser
  selectMethod.push(..._.map(_.reject(entity.table_columns, { column_key: 'PRI' }), (column) => {
    return tabSpaces(innerTab) + postTmpl({ array_name: inptArrayName, column_name: column.table_name + '.' + column.column_name, value_variable: column.table_name + '_' + column.column_name });
  }));
  // update session params
  _.forEach(masterList, (column) => {
    selectMethod.push(tabSpaces(innerTab) + setSessTmpl({ array_name: inptArrayName, column_name: column.table_name + '.' + column.column_name, value_variable: column.table_name + '_' + column.column_name }));
  });
  let select = [];
  // select operations
  select.push(...entity['relation']['masters']);
  select.push(...entity.table_columns);
  let selCols = []
  _.forEach(select, (col) => {
    let label = entity.table_name + '_' + col.column_name;
    selCols.push(selectColTmpl({ table_name: col.table_name, column_name: col.column_name, column_label: label }));
  });
  let columnList = wBuildColumnList(selCols);
  selectMethod.push(tabSpaces(innerTab) + selectTmpl({ columns_list: columnList, table_name: entity.table_name }));
  // join(joinTmpl{join_table, join_on, join_type}), where(field_name, value_variable)
  _.forEach(entity['relation']['masters'], (col) => {
    let join_on = entity.table_name + '.' + col.column_name + ' = ' + col.table_name + '.' + col.column_name;
    selectMethod.push(tabSpaces(innerTab) + joinTmpl({ join_table: col.table_name, join_on: join_on, join_type: 'left' }));
  });
  selectMethod.push(tabSpaces(innerTab) + whereArrTmpl({ filter_array: inptArrayName }));
  selectMethod.push(tabSpaces(innerTab) + getResultTmpl({}));
  selectMethod.push(tabSpaces(innerTab) + resultTmpl({ filter_array: inptArrayName }));
  // return select
  selectMethod.push(tabSpaces(outerTab) + methodClosing({}));
  return _.reject(selectMethod, (method) => { return _.isEmpty(method); });
}

function wBuildColumnList(selArr) {
  let colSize = 2;
  let selStr = [];
  _.forEach(_.chunk(selArr, colSize), (chunk) => {
    selStr.push(_.join(chunk, ', '));
  });
  return _.join(selStr, ',\n' + tabSpaces(innerTab));
}

function wBuildRelations(entities, entity) {

}