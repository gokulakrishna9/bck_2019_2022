exports.listDB = function (commandObj, callback) {
  callback(null, global.sesObject['db_list']);
}

exports.listApplications = function (commandObj, callback) {
  callback(null, global.sesObject['app_details_list']);
}