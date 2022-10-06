let _ = require('lodash');
let myc_pool = require('../connection_pool_sql_to_application');
let async = require('async');
let { getDBSchema } = require('../db_scaffold/db_objects');
let { dbModel } = require('../db_scaffold/db_model');
let { writeFile } = require('../helper_functions/write_to_file');
let { readFiles } = require('../helper_functions/read_files');

exports.appInquirer = function () {
  return [
    {
      type: 'input',
      name: 'application_name',
      message: 'Application Name: '
    },
    {
      type: 'input',
      name: 'application_description',
      message: 'Application Description: '
    },
    {
      type: 'input',
      name: 'db_list',
      message: 'DB List, comma separated values: '
    }
  ];
}

exports.addApplication = function (usr_answers, callback) {
  // application_name, description, selected_dbs
  let properties = this.appInquirer();
  let answers = {};
  _.forEach(properties, (property) => {
    let answer = _.filter(usr_answers.props, { property_name: property.name });
    answers[property.name] = answer.length > 0 ? answer[answer.length - 1]['value'] : '';
  });
  writeAppFile(answers, callback);
}

function writeAppFile(op_data, callback) {
  console.log(op_data);
  // op_data.db_list, op_data.application_name, op_data.application_description, writeFile{[{folder_name, file_name, extension, file_contents}]}
  op_data['db_list'] = _.split(op_data.db_list, ', ');
  let scaffoldFolder = './code/'
  async.waterfall([
    // Write files, after building the scaffold, check for existing scaffold, and integrate
    function (clbck) {
      console.log('DB Schema');
      if (!_.isEmpty(op_data.db_list)) {
        async.concat(op_data.db_list, getDBSchema, (err, results) => {
          clbck(err, { ...op_data, db_schemas: results });
        });
      }
    },
    function (rslt, clbck) {
      console.log('DB Model');
      dbModel({ application_name: rslt.application_name, db_schemas: rslt['db_schemas'] }, (err, entities) => { clbck(err, { ...rslt, entities: entities }); });
    },
    function (rslt, clbck) {
      console.log('Write to file');
      writeFile(
        [{ folder_name: scaffoldFolder + op_data.application_name, file_name: 'about_application', file_contents: JSON.stringify(op_data), extension: '.json' }], (err, results) => { });
      writeFile(_.map(rslt.entities, (entity) => { return { folder_name: scaffoldFolder + entity.app_name, file_name: entity.db + '_' + entity.table_name, file_contents: JSON.stringify(entity), extension: '.json' }; }), (err, results) => { callback(err, { ...rslt, ...results }); });
    }
  ]);
}


// NOT IN USE
function addAppToDB(op_data, callback) {
  myc_pool.getConnection((err, connection) => {
    let rslt;
    async.waterfall([
      function (clbck) {
        connection.changeUser({ database: 'application_builder' }, function (err) {
          if (err)
            clbck(err, null);
          else
            clbck(null, null);
        });
      },
      function (result, clbck) {
        console.log('Add App');
        connection.query(
          `INSERT INTO application SET ?`, { application_name: op_data.application_name, application_description: op_data.application_description },
          function (error, result, fields) {
            if (error) {
              clbck(error, null);
            } else {
              clbck(null, { application_name: op_data.application_name, insert_id: result });
            }
          });
      },
      function (result, clbck) {      // Change this step
        console.log('Add DB List');
        let db_list = _.map(_.split(op_data.db_list, ', '), (db) => { return [result.insert_id, _.trim(db)] });
        connection.query(
          `INSERT INTO ap_database (application_id, database_name) VALUES ?`, [db_list],
          function (error, result, fields) {
            if (error) {
              console.log(error);
              clbck(error, null);
            } else {
              op_data['db_list'] = _.split(op_data.db_list, ', ');
              clbck(null, { ...result, ...op_data, insert_data: { rslt: result, fields: fields } });
            }
          });
      },
      // This part remains the same, <<for now>>, work on taking into account changes in database
      function (result, clbck) {
        console.log('DB Schema');
        if (!_.isEmpty(result.db_list)) {
          async.concat(result.db_list, getDBSchema, (err, results) => {
            clbck(err, { ...result, db_schemas: results });
          });
        }
      },
      function (rslt, clbck) {
        console.log('DB Model');
        dbModel({ application_name: rslt.application_name, db_schemas: rslt['db_schemas'] }, (err, entities) => { clbck(err, { ...rslt, entities: entities }); });
      },
      function (rslt, clbck) {
        console.log('Write to file');
        writeFile(_.map(rslt.entities, (entity) => { return { folder_name: entity.app_name, file_name: entity.db + '_' + entity.table_name, file_contents: JSON.stringify(entity), extension: '.json' }; }), (err, results) => { callback(err, { ...rslt, ...results }); });
      }
    ], function (err, frslt) { });
    connection.release();
  });
}