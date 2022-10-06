const Fuse = require('fuse.js');
let _ = require('lodash');
let { writeLine } = require('../helper_functions/string_function')

exports.showCommands = function (commandObj, callback) {
  console.log('Show Commands');
  writeLine([{ show_commands: 'list_tables{Command Help: list_tables: db_name->DB_NAME}, list_columns{Command Help: list_columns: db_name->DB_NAME, table_name->TABLE_NAME, key->TRUE/FALSE}, list_masters, list_derived, list_branches, link_table, unlink_table, sql_op, lang_op, global_op, framework_op, label_column' }]);
}

exports.showSession = function (commandObj, callback) {
  console.log(global.sesObject);
  callback(null, null);
}
// commandObj{props{prop_name: prop_value}}
// framework_op for generating more code
/**
 * 
 *  const countries = { country: { name: 'Venezuela' } }
    const isExist = _.has(countries, 'country.name')}  
 * 
 */
exports.listTables = function (commandObj, callback) {
  let db_name = _.find(commandObj.props, (prop) => { return _.has(prop, 'db_name'); });
  db_name = _.isEmpty(db_name) ? '' : db_name.db_name;
  let perLine = 4;
  let tables;
  if (_.isEmpty(db_name)) {
    tables = _.chunk(_.map(global.sesObject.current_app.entities, (ent) => { return { db: ent.db, table: ent.table_name } }), perLine);
  } else {
    console.log('Selected DB: ' + db_name);
    tables = _.chunk(_.map(_.filter(global.sesObject.current_app.entities, { db: db_name }), (ent) => { return { db: ent.db, table: ent.table_name } }), perLine);
  }
  _.forEach(tables, (line_items) => { writeLine(line_items); });
  console.log('Tables list done!');
  callback(null, null);
}

exports.listColumns = function (commandObj, callback) {
  const fuseOptns = {
    includeScore: false,
    keys: ['table_name']
  };
  let entities = global.sesObject.current_app.entities;
  let fuse = new Fuse(entities, fuseOptns);
  let table_name = _.find(commandObj.props, (prop) => { return _.has(prop, 'table_name'); });
  table_name = _.isEmpty(table_name) ? '' : table_name.table_name;
  let perLine = 1;
  let columns;
  if (_.isEmpty(table_name)) {
    columns = _.chunk(_.map(entities, (ent) => {
      let cols = _.map(ent.table_columns, (column) => {
        return { db: ent.db, table: ent.table_name, column_name: column.column_name, column_type: column.column_type, column_size: column.column_size, column_key: column.column_key }
      });
      return cols
    }), perLine);
  } else {
    console.log('Table Name: ' + table_name);
    let entit = _.filter(entities, { table_name: table_name });
    columns = _.chunk(..._.map(entit, (ent) => {
      let cols = _.map(ent.table_columns, (column) => {
        return { db: ent.db, table: ent.table_name, column_name: column.column_name, column_type: column.column_type, column_size: column.column_size, column_key: column.column_key }
      });
      return cols;
    }), perLine);
  }
  _.forEach(columns, (line_items) => { writeLine(line_items); });
  console.log('Columns list done!');
  callback(null, null);
}

exports.listMasters = function (commandObj, callback) {
  let entities = global.sesObject.current_app.entities;
  let table_name = _.find(commandObj.props, (prop) => { return _.has(prop, 'table_name'); });
  table_name = _.isEmpty(table_name) ? '' : table_name.table_name;
  let masters;
  let perLine = 1;
  if (_.isEmpty(table_name)) {
    masters = _.chunk(_.map(entities, (ent) => { return ent.relation.masters; }), perLine);
  } else {
    masters = _.chunk(..._.map(_.filter(entities, { table_name: table_name }), (ent) => { return ent.relation.masters; }), perLine);
  }
  _.forEach(masters, (line_items) => { writeLine(line_items); });
  console.log('Masters list done!');
  callback(null, null);
}

exports.listDerived = function (commandObj, callback) {
  let entities = global.sesObject.current_app.entities;
  let table_name = _.find(commandObj.props, (prop) => { return _.has(prop, 'table_name'); });
  table_name = _.isEmpty(table_name) ? '' : table_name.table_name;
  let masters;
  let perLine = 1;
  if (_.isEmpty(table_name)) {
    masters = _.chunk(_.map(entities, (ent) => { return ent.relation.derived; }), perLine);
  } else {
    masters = _.chunk(..._.map(_.filter(entities, { table_name: table_name }), (ent) => { return ent.relation.derived; }), perLine);
  }
  _.forEach(masters, (line_items) => { writeLine(line_items); });
  console.log('Masters list done!');
  callback(null, null);
}

exports.listBranches = function (commandObj, callback) {
  let entities = global.sesObject.current_app.entities;
  let table_name = _.find(commandObj.props, (prop) => { return _.has(prop, 'table_name'); });
  table_name = _.isEmpty(table_name) ? '' : table_name.table_name;
  let derived;
  let perLine = 1;
  if (_.isEmpty(table_name)) {
    derived = _.chunk(..._.map(entities, (ent) => { return _.map(ent.relation.branching, (tbl, tbl_name) => { return { link_on: tbl_name, ...tbl } }) }), perLine);
  } else {
    derived = _.chunk(..._.map(_.filter(entities, { table_name: table_name }), (ent) => { return _.map(ent.relation.branching, (tbl, tbl_name) => { return { link_on: tbl_name, ...tbl } }) }), perLine);
  }
  _.forEach(derived, (line_items) => { writeLine(line_items); });
  console.log('Derived list done!');
  callback(null, null);
}

exports.labelInquirer = function () {
  return [
    {
      type: 'input',
      name: 'db',
      message: 'Database Name: '
    },
    {
      type: 'input',
      name: 'table_name',
      message: 'Table Name: '
    },
    {
      type: 'input',
      name: 'column_name',
      message: 'Column Name: '
    },
    {
      type: 'input',
      name: 'label_name',
      message: 'Label Name: '
    }
  ];
}

exports.labelColumn = function (commandObj, callback) {
  // relation, label_name
  console.log(commandObj);
  let db_name = commandObj.props.db;
  if (_.isEmpty(db_name)) {
    console.log('Missing DB Name');
    callback(null, null);
    return;
  }
  let table_name = commandObj.props.table_name;
  if (_.isEmpty(table_name)) {
    console.log('Missing Table Name');
    callback(null, null);
    return;
  }
  let column_name = commandObj.props.column_name;
  if (_.isEmpty(table_name)) {
    console.log('Missing Column Name');
    callback(null, null);
    return;
  }
  let label_name = commandObj.props.label_name;
  if (_.isEmpty(table_name)) {
    console.log('Missing Label Name');
    callback(null, null);
    return;
  }
  let entities = global.sesObject.current_app.entities;
  console.log(db_name + ' ' + table_name);
  let entity = _.filter(entities, { db: db_name, table_name: table_name })[0];
  console.log(entity.folder_name + ' ' + entity.file_name + ' ' + entity.extension);
  // Modify Entity, and Update file
  callback(null, null);
}

exports.linkTableInquirer = function () {
  return [
    {
      type: 'input',
      name: 'db',
      message: 'Database Name: '
    },
    {
      type: 'input',
      name: 'root_table_name',
      message: 'Root Table Name: '
    },
    {
      type: 'input',
      name: 'table_one_name',
      message: 'Table One Name: '
    },
    {
      type: 'input',
      name: 'column_one_name',
      message: 'Column One Name: '
    },
    {
      type: 'input',
      name: 'table_two_name',
      message: 'Table Two Name: '
    },
    {
      type: 'input',
      name: 'column_two_name',
      message: 'Column Two Name: '
    },
  ];
}

exports.linkTable = function (commandObj, callback) {
  console.log(commandObj);
  let db_name = commandObj.props.db;
  if (_.isEmpty(db_name)) {
    console.log('Missing DB Name');
    callback(null, null);
    return;
  }
  let root_table_name = commandObj.props.root_table_name;
  if (_.isEmpty(root_table_name)) {
    console.log('Missing Root Table Name');
    callback(null, null);
    return;
  }
  let table_one_name = commandObj.props.table_one_name;
  if (_.isEmpty(table_one_name)) {
    console.log('Missing Table One Name');
    callback(null, null);
    return;
  }
  let table_two_name = commandObj.props.table_two_name;
  if (_.isEmpty(table_two_name)) {
    console.log('Missing Table One Name');
    callback(null, null);
    return;
  }
  let column_one_name = commandObj.props.column_one_name;
  if (_.isEmpty(column_one_name)) {
    console.log('Missing Column One Name');
    callback(null, null);
    return;
  }
  let column_two_name = commandObj.props.column_two_name;
  if (_.isEmpty(column_two_name)) {
    console.log('Missing Column Two Name');
    callback(null, null);
    return;
  }

  let entities = global.sesObject.current_app.entities;
  console.log(db_name + ' ' + table_name);
  let entity = _.filter(entities, { db: db_name, root_table_name: root_table_name })[0];
  console.log(entity.folder_name + ' ' + entity.file_name + ' ' + entity.extension);
  // Modify Entity, and Update file
  callback(null, null);
}

exports.unlinkTableInquirer = function () {
  return [
    {
      type: 'input',
      name: 'db',
      message: 'Database Name: '
    },
    {
      type: 'input',
      name: 'root_table_name',
      message: 'Root Table Name: '
    },
    {
      type: 'input',
      name: 'table_one_name',
      message: 'Unlink Table Name: ',
      loop_type: 'stmt'
    }
  ];
}

exports.unlinkTable = function (commandObj, callback) {
  console.log(commandObj);
  let db_name = commandObj.props.db;
  if (_.isEmpty(db_name)) {
    console.log('Missing DB Name');
    callback(null, null);
    return;
  }
  let root_table_name = commandObj.props.root_table_name;
  if (_.isEmpty(root_table_name)) {
    console.log('Missing Root Table Name');
    callback(null, null);
    return;
  }
  let table_one_name = commandObj.props.table_one_name;
  if (_.isEmpty(table_one_name)) {
    console.log('Missing Unlink Table Name');
    callback(null, null);
    return;
  }

  let entities = global.sesObject.current_app.entities;
  console.log(db_name + ' ' + table_name);
  let entity = _.filter(entities, { db: db_name, root_table_name: root_table_name })[0];
  console.log(entity.folder_name + ' ' + entity.file_name + ' ' + entity.extension);
  // Modify Entity, and Update file
  callback(null, null);
}

exports.updateDefaultOp = function (commandObj, callback) {
  // sessions, params, filters, add sqlOp, add fieldOp
}

exports.fieldOp = function (commandObj, callback) {

}
//{loop_type{stmt_grp, stmt}, group_name, questions, message, name}
exports.sqlOpInquirer = function () {
  return [
    {
      type: 'input',
      name: 'db',
      message: 'Database Name: '
    },
    {
      type: 'input',
      name: 'root_table_name',
      message: 'Root Table Name: '
    },
    {
      type: 'input',
      name: 'sql_op_name',
      message: 'SQL OP Name: '
    },
    {
      group_name: 'query',
      loop_type: 'stmt_grp',
      questions: [
        {
          type: 'input',
          name: 'select_column_op',
          message: 'Select Column SQL OP: ',
          loop_type: 'stmt'
        },
        {
          group_name: 'joins', 
          loop_type: 'stmt_grp', 
          questions: [
            {
              type: 'input',
              name: 'join_column_one',
              message: 'join_column_one table_name.column_name as table_name: ',
              loop_type: ''
            },
            {
              type: 'input',
              name: 'join_column_two',
              message: 'join_column_two table_name.column_name as table_name: ',
              loop_type: ''
            },
            {
              type: 'input',
              name: 'join_type',
              message: 'join_type : ',
              loop_type: ''
            }
          ]
        },
        {
          type: 'input',
          name: 'where_column_op',
          message: 'Add where condition groups (col1 condition &&||| col2 condition ...): ',
          loop_type: 'stmt'
        },
        {
          type: 'input',
          name: 'group_by_op',
          message: 'Add group condition table.column|column_name, sql_op, ASC|DESC: ',
          loop_type: 'stmt'
        },
        {
          type: 'input',
          name: 'having_column_op',
          message: 'Add having condition groups (col1 condition &&||| col2 condition ...): ',
          loop_type: 'stmt'
        }
      ]
    }
  ];
}
// Have templates{php style, allow complex templates}
exports.sqlOp = function (commandObj, callback) {
  console.log(commandObj);
  console.log(global.sesObject);
}

exports.buildFilterInquirer = function () {
  return [
    {
      type: 'input',
      name: 'db',
      message: 'Database Name: '
    },
    {
      type: 'input',
      name: 'root_table_name',
      message: 'Root Table Name: '
    },
    {
      type: 'input',
      name: 'table_one_name',
      message: 'Root Table Name: '
    },
    {
      type: 'input',
      name: 'column_name',
      message: 'Column Name: '
    },
    {
      type: 'input',
      name: 'column_op',
      message: 'Column OP: '
    },
  ];
}

exports.buildFilter = function (commandObj, callback) {
  // session, input, params
}

// acl columns, date time columns, ...
exports.globalSqlOp = function (commandObj, callback) {

}