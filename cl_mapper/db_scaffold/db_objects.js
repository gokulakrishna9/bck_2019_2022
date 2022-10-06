let myc_pool = require('../connection_pool_sql_to_application');
//let { model_builder } = require('./db_structure');
let { fieldObj } = require('./scaffold_helper');
var _ = require('lodash');

// Raise set all databases, only once, should be called in index.html and only once
exports.getDatabases = function (callback) {
  myc_pool.getConnection((err, connection) => {
    connection.query('SHOW DATABASES', (error, result, fields) => {
      if (error)
        throw error;
      // raise result action
      callback(result);
    });
  });
};

exports.getDBSchema = function (db_name, callback) {
  myc_pool.getConnection((err, connection) => {
    connection.query('SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = "' + db_name + '"', (error, result, fields) => {
      if (error) {
        rslt['error'] = error;
        callback(error, null);
        return;
      }
      let rslt = { db_name: db_name, columns: result };
      callback(null, rslt);
    });
    connection.release();
  });
}

exports.modelBuilder = function (DBColumns) {
  let allDBData = tableColumnsArray(DBColumns);
  let modelObjects = [];
  _.forEach(allDBData, function (table_columns, table_name) {
    let modelObj = {};
    modelObj.db = table_columns[0].TABLE_SCHEMA;
    modelObj.table_name = table_name;
    modelObj.table_columns_array = table_columns;                                   // working
    let primary_column = _.filter(table_columns, { COLUMN_KEY: 'PRI' })[0];
    modelObj.primary_column = primary_column != undefined ? primary_column : {};
    modelObj.label_column = findLabel(table_columns);
    let derived = tableDerived(DBColumns, modelObj.primary_column);            // working -only matching child key, non primary
    if(typeof derived != 'undefined' && derived.length > 0)
      modelObj.derived_labels = _.map(derived, function(der) { return findLabel(allDBData[der.TABLE_NAME]); });
    else
      modelObj.derived_labels = [];
    let masters = tableMasters(DBColumns, table_columns);                      // working -only primary keys
    if(typeof masters != 'undefined' && masters.length > 0)
      modelObj.masters_labels = _.map(masters, (master) => { return findLabel(allDBData[master.TABLE_NAME]);  });
    else
      modelObj.masters_labels = [];
    modelObj.primary_keys_with_same_name = primaryKeysWithSameName(DBColumns, modelObj.primary_column);   // working
    // let masters_branches = branches(DBColumns, masters);           // working -master of masters, derived of masters{prim} 
    // SUPERFLUOUS
    /*
    if(typeof masters_branches != 'undefined'){
      modelObj.masters_branches_labels = _.map(masters_branches, (mb, table_name) => {
        return {[table_name]: {masters: findLabel(allDBData[table_name]), derived: findLabel(allDBData[table_name])}};
      });
    }      
    else
      modelObj.masters_branches_labels = [];
    let derived_branches = branches(DBColumns, derived);           // working -master of derived, derived of derived{prim}
    if(typeof derived_branches != 'undefined'){
      modelObj.derived_branches_labels = _.map(derived_branches, (mb, table_name) => {
        return {[table_name]: {masters: findLabel(allDBData[table_name]), derived: findLabel(allDBData[table_name])}};
      });
    }
    else
      modelObj.derived_branches_labels = [];
    */
    // labels, table, masters, derived, masters_branches, derived_branches{same as table_name, or varchar with size 5 to 30}
    modelObjects.push(modelObj);
    //_.forEach(modelObj.masters_labels, (labels) => {console.log(labels)});
  });
  return modelObjects;
}

function getColumns(allDBData, column) {
  return _.filter(allDBData, { TABLE_NAME: column.TABLE_NAME });
}

function branches(allDBData, linkOn) {
  let indirectLinks = {};  
  _.forEach(linkOn, function (tbl) {
    let columns = _.filter(allDBData, { TABLE_NAME: tbl.TABLE_NAME })
    let lnk = tableMasters(allDBData, columns);
    indirectLinks[tbl.TABLE_NAME] = [];
    if (!_.isEmpty(lnk))
      indirectLinks[tbl.TABLE_NAME].push({ masters: lnk });
    lnk = tableDerived(allDBData, tbl);
    if (!_.isEmpty(lnk))
      indirectLinks[tbl.TABLE_NAME].push({ derived: lnk });
  });
  return indirectLinks;
}

// These get sent to DB for correction
function primaryKeysWithSameName(allDBData, primaryColumn) {
  if (_.isEmpty(primaryColumn))
    return;
  let primaryKeys = _.filter(allDBData, { COLUMN_KEY: 'PRI' });
  primaryKeys = _.reject(primaryKeys, { TABLE_NAME: primaryColumn.TABLE_NAME });
  let similarKeys = _.filter(primaryKeys, { COLUMN_NAME: primaryColumn.COLUMN_NAME });
  return similarKeys;
}

function tableMasters(allDBData, table_columns) {
  let tableColumns = _.filter(table_columns, function (column) {
    // timestamp, year
    if (column.COLUMN_KEY == 'PRI' || column.DATA_TYPE == 'time' ||
      column.DATA_TYPE == 'date' || column.DATA_TYPE == 'datetime' ||
      column.DATA_TYPE == 'decimal' || column.DATA_TYPE == 'real' ||
      column.DATA_TYPE == 'double' || column.DATA_TYPE == 'timestamp' || column.DATA_TYPE == 'year') {
      return false;
    }
    else {
      return true;
    }
  });
  let masterColumns = [];
  _.forEach(tableColumns, function (column) {
    masterColumns.push(...(_.filter(allDBData, col => {
      if (col.COLUMN_KEY == 'PRI' && col.COLUMN_NAME == column.COLUMN_NAME && col.TABLE_NAME != column.TABLE_NAME)
        return true;
      else
        return false;
    })));
  });
  // masters from different tables
  return masterColumns;
}

function tableDerived(allDBData, primaryColumn) {
  if (_.isEmpty(primaryColumn))
    return;
  let childColumns = _.filter(allDBData, column => {
    if (column.COLUMN_NAME == primaryColumn.COLUMN_NAME && column.TABLE_NAME != primaryColumn.TABLE_NAME)
      return true;
    else
      return false;
  });
  return childColumns;
}

function tableColumnsArray(DBColumns) {
  let tables = _.uniq(_.map(DBColumns, (col) => { return col.TABLE_NAME; }));
  let tablesCols = {};
  _.forEach(tables, function (table) {
    tablesCols[table] = _.filter(DBColumns, { TABLE_NAME: table });
  });
  return tablesCols;
}

function findLabel(fieldList) {
  if (_.isEmpty(fieldList))
    return;
  let priLbl = {};
  let tableName = fieldList[0].TABLE_NAME;
  // fieldList {column_name, column_type, column_size, table_name, column_key}
  priLbl[tableName] = {};
  let primary_key = _.filter(fieldList, { COLUMN_KEY: 'PRI' })[0];
  priLbl[tableName]['primary_key'] =  primary_key != undefined ? primary_key : {};
  let labelCol = _.filter(fieldList, { COLUMN_NAME: tableName });
  if (labelCol.length != 0) {

  } else if (labelCol.length == 0) {
    labelCol = _.filter(fieldList, (field) => {
      let column_size = fieldObj(field).column_size;
      return field.COLUMN_KEY != 'PRI' && field.DATA_TYPE == 'varchar' && (field.COLUMN_NAME.includes(tableName) || column_size >= 5);
    });
  } else {
    labelCol = [];
  }
  priLbl[tableName]['label_col'] = labelCol;
  //console.log(priLbl);
  return priLbl;
}