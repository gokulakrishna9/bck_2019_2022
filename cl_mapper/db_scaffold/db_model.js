/*
  application, db, table, ops[{op_name, params}], 
  table_columns, primary_key, label_column, 
  relations{relation_name: [{table_name, link_on, label, relation_type}, ...]}, related_table_columns
*/
// db_schema, columns{TABLE_SCHEMA, TABLE_NAME, COLUMN_NAME, COLUMN_TYPE, COLUMN_KEY}
/*
  column_type: columnType[0],
  column_size: columnType[1], 
  column_key: column.COLUMN_KEY,
  column_name: column.COLUMN_NAME,
  table_name: column.TABLE_NAME,
  column_label: splitCapitalize(column.COLUMN_NAME, '_'),
  db: column.TABLE_SCHEMA
 */
let _ = require('lodash');
let { fieldObj } = require('./scaffold_helper');
exports.dbModel = function (applObj, clbck) {
  let dbSchemas = applObj.db_schemas;
  // all primary keys
  // all tables
  // related_tables{table_name, link_on, label, relation_type}
  // related_table_columns{table_name{columns, label}}
  let entities = [];
  let allColumns = schemaColumns(dbSchemas);
  let primaryKeys = allPrimaryKeys(allColumns);
  let appName = applObj.application_name;
  _.forEach(primaryKeys, (primaryKey) => {
    let db = primaryKey.db;
    let tableName = primaryKey.table_name;
    let ops = [
      { op_name: '', params: {} },
    ];
    let tableColumns = tblColumns(allColumns, primaryKey);
    let labelColumns = findLabelFields(tableColumns);
    let relatedTables = relatedTbls(allColumns, tableColumns);
    entities.push({
      folder_name: appName + '/scaffold', file_name: db + '_' + tableName, extension: '.json',
      app_name: appName, db: db, table_name: tableName,
      ops: ops, table_columns: tableColumns, labels: labelColumns,
      relation: relatedTables
    });
  });
  //_.forEach(entities, (entity) => {
  //console.log(entity.relation.masters);
  //console.log(entity.relation.derived);
  //console.log(entity.relation.branching);
  //});
  clbck(null, entities);
}

function allPrimaryKeys(allColumns) {
  return _.filter(allColumns, { column_key: 'PRI' });
}

function schemaColumns(dbSchemas) {
  let allColumns = _.map(dbSchemas, (schema) => {
    return schema.columns;
  });
  return _.map(_.flatten(allColumns), (col) => { return fieldObj(col); });
}

function tblColumns(allColumns, primaryKey) {
  return _.filter(allColumns, { db: primaryKey.db, table_name: primaryKey.table_name });
}

// given table columns deduct label field
// THIS IS A RULE --WILL GET STUCK
function findLabelFields(tableColumns) {
  let labelColumns = _.filter(tableColumns, (column) => {
    return (column.column_type == 'varchar' || column.column_type == 'char')
  });
  return labelColumns;
}

function relatedTbls(allColumns, tableColumns) {
  let primaryColumn = _.filter(tableColumns, { column_key: 'PRI' })[0];
  if (_.isEmpty(primaryColumn))
    return;
  let nonPrimColumns = _.filter(_.reject(tableColumns, { column_key: 'PRI' }), { column_type: 'int' });
  let alCols = _.reject(allColumns, { table_name: primaryColumn.table_name });
  let masters = mastersTables(alCols, nonPrimColumns, 'masters');
  let derived = derivedTables(alCols, primaryColumn, 'derived');
  let branching = {};
  _.forEach({ ...masters, ...derived }, (lnk) => {
    let aC = _.reject(alCols, { table_name: lnk.table_name });
    let pC = _.filter(allColumns, { table_name: lnk.table_name, column_key: 'PRI' });
    let nPC = _.reject(_.filter(alCols, { table_name: lnk.table_name }), { table_name: lnk.table_name, column_key: 'PRI' });
    branching[lnk.table_name] = [...mastersTables(aC, nPC, 'branching_masters'), ...derivedTables(aC, pC, 'branching_derived')];
  });
  return { masters: masters, derived: derived, branching: branching }
}

function mastersTables(alCols, nonPrimColumns, relationType) {
  let masters = [];
  _.forEach(nonPrimColumns, (col) => {
    let mastrs = _.filter(alCols, { column_name: col.column_name, column_key: 'PRI' });
    if (!_.isEmpty(mastrs)) {
      _.forEach(mastrs, (col) => {
        masters.push({ ...col, relation_type: relationType, active: true });
      });
    }
  });
  return masters;
}

function derivedTables(alCols, primColumn, relationType) {
  return _.map(_.filter(alCols, { column_name: primColumn.column_name }), (col) => { return { ...col, relation_type: relationType, active: true } });
}