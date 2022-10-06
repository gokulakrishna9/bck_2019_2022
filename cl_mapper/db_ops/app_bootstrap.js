let myc_pool = require('../connection_pool_sql_to_application');
let _ = require('lodash');
exports.getApplications = function (commandObj, callback) {
  myc_pool.getConnection((err, connection) => {
    connection.changeUser({ database: 'application_builder' }, function (err) {
      if (err)
        throw err;
    });
    connection.query(
      `SELECT application.application_id, application_name, 
      application_description, database_name, database_description 
      FROM application 
      LEFT JOIN ap_database ON  application.application_id = ap_database.application_id`,
      function (error, result, fields) {
        if (error) {
          callback(error, null);
        } else {
          global.updateSession({app_details_list: result});
        }
      });
    connection.release();
  });
}

exports.getDatabases = function (commandObj, callback) {
  myc_pool.getConnection((err, connection) => {
    connection.query('SHOW DATABASES', function (error, result, fields) {
      if (error) {
        callback(error, null);
      } else {
        global.updateSession({db_list: result});
      }
    });
    connection.release();
  });
};

exports.loadApplication = function(commandObj, callback) {
  console.log(commandObj);
  callback(null, global.sesObject['app_details_list']);
}