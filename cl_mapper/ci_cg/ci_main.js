let { readFiles } = require('../helper_functions/read_files');
let { writeCIModel } = require('./model_b');
let { writeCIController } = require('./controller_b');
let {writeCIView} = require('./view_b');

let _ = require('lodash');
// have the call back here
exports.ciMain = function () {
  let appName = global.sesObject['current_app']['application_name'];  // {application_name, application_description, db_list, db_schemas, entities}
  readFiles('./code/'+appName, ciWriter);
}

function ciWriter(err, entities) {
  writeCIModel(entities);             // some changes to be done, variable names
  writeCIController(entities);
  writeCIView(entities);
}

/**
 * {
  app_name: 'test label',
  db: 'health4all',
  table_name: 'vendor_contracts',
  ops: [ { op_name: '', params: {} } ],
  table_columns: [
    {
      column_type: 'int',
      column_size: '4',
      column_key: 'PRI',
      column_name: 'contract_id',
      table_name: 'vendor_contracts',
      column_label: 'Contract Id',
      db: 'health4all'
    },
    {
      column_type: 'int',
      column_size: '4',
      column_key: '',
      column_name: 'facility_id',
      table_name: 'vendor_contracts',
      column_label: 'Facility Id',
      db: 'health4all'
    },
    {
      column_type: 'date',
      column_key: '',
      column_name: 'from_date',
      table_name: 'vendor_contracts',
      column_label: 'From Date',
      db: 'health4all'
    },
    {
      column_type: 'varchar',
      column_size: '20',
      column_key: '',
      column_name: 'status',
      table_name: 'vendor_contracts',
      column_label: 'Status',
      db: 'health4all'
    },
    {
      column_type: 'date',
      column_key: '',
      column_name: 'to_date',
      table_name: 'vendor_contracts',
      column_label: 'To Date',
      db: 'health4all'
    },
    {
      column_type: 'int',
      column_size: '4',
      column_key: '',
      column_name: 'vendor_id',
      table_name: 'vendor_contracts',
      column_label: 'Vendor Id',
      db: 'health4all'
    }
  ],
  labels: [
    {
      column_type: 'varchar',
      column_size: '20',
      column_key: '',
      column_name: 'status',
      table_name: 'vendor_contracts',
      column_label: 'Status',
      db: 'health4all'
    }
  ],
  relation: {
    masters: [ [Object], [Object] ],
    derived: [],
    branching: [ [Object], [Object] ]
  }
}
 */