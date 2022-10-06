let _ = require('lodash');
let { splitCapitalize } = require('../helper_functions/format_text');
let { caseInsensitiveCompare } = require('../helper_functions/string_functions');
let { fieldObj } = require('./scaffold_helper');
// build a json mvc object

exports.scafDBOps = function (error, op_data, propertiesObj, dispatchCallback) {
  console.log(propertiesObj);
  let dbModel = op_data.db_model;
  let models = {};
  if (_.isEmpty(dbModel))
    return { db_ops: '' };
  _.forEach(dbModel, (tables, db) => {
    models[db] = [];
    _.forEach(tables, (table) => {
      if (_.isEmpty(table))
        return { db_ops: '' };
      let primaryKey = _.filter(table.table_columns_array, { COLUMN_KEY: 'PRI' });
      if (!_.isEmpty(primaryKey))
        primaryKey = primaryKey[0].COLUMN_NAME;
      let tbl = { table: table.table_name, database: db, primary_key: primaryKey, default: true };
      models[db].push(
        {
          ...tbl,
          operators: {
            create_record: createRecord(tables, table),
            update_record: updateRecord(tables, table),
            delete_record: deleteRecord(tables, table),
            get_records: getRecords(tables, table),
            get_derived: getDerived(tables, table),
            all_branches: getBranchJoins(tables, table)
          }
        }
      );
    });
  });
  dispatchCallback(null, { ...op_data, model_ops: { ...models } }, null, propertiesObj);
}

// table_name, table_columns_array, derived, masters, primaryKeysWithSameName, indirectLinksMasters, indirectLinksDerived
function createRecord(tables, table) {
  // return insert id
  let query = {
    query_name: table.table_name + '_create_record',
    database: table.db,
    table: table.table_name,
    primary_key: table.primary_column.COLUMN_NAME,
    field_list: [],
    query_type: 'insert',
    joins: [],
    active: true,
  };
  query.field_list = getColumns(table);
  //_.forEach(query.field_list, (field) => {console.log(field)});
  return query;
}

function updateRecord(tables, table) {
  // return insert id
  let query = {
    query_name: table.table_name + '_update_record',
    database: table.db,
    table: table.table_name,
    primary_key: table.primary_column.COLUMN_NAME,
    field_list: [],
    query_type: 'update',
    joins: [],
    active: true,
  }
  query.field_list = getColumns(table);
  // _.forEach(query.field_list, (field) => {console.log(field.field_operators)});
  return query;
}

function deleteRecord(tables, table) {
  // return insert id
  let query = {
    query_name: table.table_name + '_delete_record',
    database: table.db,
    table: table.table_name,
    primary_key: table.primary_column.COLUMN_NAME,
    field_list: [],
    query_type: 'delete',
    joins: [],
    active: true,
  }
  query.field_list = getColumns(table);
  // _.forEach(query.field_list, (field) => {console.log(field.field_operators)});
  return query;
}

function getRecords(tables, table) {
  // return insert id
  let query = {
    query_name: table.table_name + '_get_records',
    database: table.db,
    table: table.table_name,
    primary_key: table.primary_column.COLUMN_NAME,
    field_list: [],
    query_type: 'join',
    joins: [],
    active: true,
  }
  query.field_list = getColumns(table);
  query.joins = getJoins(tables, table, 'masters_labels');
  //_.forEach(query.field_list, (field) => {console.log(field.joins)});
  //console.log(query.joins);
  return query;
}

function getDerived(tables, table) {
  // return insert id
  let query = {
    query_name: table.table_name + '_get_derived',
    database: table.db,
    table: table.table_name,
    primary_key: table.primary_column.COLUMN_NAME,
    field_list: [],
    query_type: 'join',
    joins: [],
    active: true,
  }
  query.field_list = getColumns(table);
  query.joins = getJoins(tables, table, 'derived_labels');
  //_.forEach(query.field_list, (field) => {console.log(field.joins)});
  //console.log(query.joins);
  return query;
}

// make branch on a string
function getBranchJoins(tables, table) {
  let query = {
    query_name: table.table_name + '_branching',
    database: table.db,
    table: table.table_name,
    primary_key: table.primary_column.COLUMN_NAME,
    field_list: [],
    query_type: 'branching_joins',
    joins: [],
    active: true,
  };
  // main table to master tables
  query.field_list = getColumns(table);  
  query.joins.push(...getJoins(tables, table, 'masters_labels'), ...getJoins(tables, table, 'derived_labels'));
  // master table to links
  // table.masters_branches_labels[{table_name:{masters{primary_key, label_col}, derived{primary_key, label_col}}}]  
  _.forEach(table['masters_labels'], (link_obj) => {
    // _.concat    
    let table_name = Object.keys(link_obj)[0];
    let branch = {branch_head: table_name};
    branch['field_list'] = getColumns(_.filter(tables, { table_name: table_name })[0]);
    let tableObj = _.filter(tables, { table_name: table_name })[0];
    query['masters'] = {};
    query['masters']['masters'] = {...branch, branches: getJoins(tables, tableObj, 'masters_labels')};
    query['masters']['derived'] = {...branch, branches: getJoins(tables, tableObj, 'derived_labels')};
  });
  _.forEach(table['derived_labels'], (link_obj) => {
    // _.concat    
    let table_name = Object.keys(link_obj)[0];
    let branch = {branch_head: table_name};
    branch['field_list'] = getColumns(_.filter(tables, { table_name: table_name })[0]);
    let tableObj = _.filter(tables, { table_name: table_name })[0];
    query['derived'] = {};
    query['derived']['masters'] = {...branch, branches: getJoins(tables, tableObj, 'masters_labels')};
    query['derived']['derived'] = {...branch, branches: getJoins(tables, tableObj, 'derived_labels')};
  });
  return query;
}

function getColumns(table) {
  // field_list{field_name: field_name, label: label, show: true/false}},
  let fieldList = []
  _.forEach(table.table_columns_array, (column) => {
    let master = {};
    let mast = false;
    let prim = column.COLUMN_KEY == 'PRI';
    _.forEach(table.masters_labels, (col) => {
      col = col[Object.keys(col)[0]];
      mast = caseInsensitiveCompare(col.primary_key.COLUMN_NAME, column.COLUMN_NAME);
      let label = _.map(col.label_col, (lbl) => { return lbl.COLUMN_NAME });
      if (mast) {
        master = { table_name: col.primary_key.TABLE_NAME, label: label , primary_column_name: col.primary_key.COLUMN_NAME};
        return false;
      }
    });
    fieldList.push({
      table_name: column.TABLE_NAME,
      field_name: column.COLUMN_NAME,
      label: splitCapitalize(column.COLUMN_NAME), type: fieldObj(column), master: master,
      show: true, field_operators: { required: mast, validation_rule: '', filter: (mast || prim), helpers: [] }
    });
  });
  return fieldList;
}

// Add table constraints here, 
// linear execution, worst case scenario build a function list that is called to apply constraints on tables
// find master table and its primary key and build join
function getJoins(tables, table, joins_field) {
  // build joins {join_type: '', join_on: ''}
  // joinTable{primary_column}
  // console.log(table.TABLE_NAME);
  let joins = [];
  _.forEach(table[joins_field], (column) => {
    let joinTable = Object.keys(column)[0];
    // INVOKE CONSTRAINT FUNCTIONS HERE
    let tableObj = _.filter(tables, { table_name: joinTable })[0];
    if (tableObj.derived_labels.length > 10) {
      return {};
    }
    column = column[joinTable];
    joins.push({ master: joinTable, join_type: 'left', join_on: table.table_name + '.' + column.primary_key.COLUMN_NAME + '=' + joinTable + '.' + column.primary_key.COLUMN_NAME });
  });
  return joins;
}