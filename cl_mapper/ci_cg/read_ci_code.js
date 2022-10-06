let _ = require('lodash');
let { readFiles } = require('../helper_functions/read_files');
let { findCaseInsensitiveSubString, findAllCaseInsensitive } = require('../helper_functions/string_function');
// read queries
exports.readQueriesInquirer = function () {
  return [
    {
      type: 'input',
      name: 'folder_name',
      message: 'Folder Name: '
    }
  ];
}

exports.readQueries = function (commandObj, callback) {
  let folderName = _.filter(commandObj.props, { property_name: 'folder_name' });
  folderName = folderName[folderName.length - 1].value;
  console.log(folderName);
  readExternalCode(folderName, (err, rslts) => { extractMethods(err, rslts, callback); });
}

function extractMethods(err, rslts, callback) {
  // file_name, content
  // model_name, method_name, query, filters{variable data source}
  let model_ops = [];
  _.forEach(rslts, (rslt) => {
    let model = {};
    model['model_name'] = modelName(rslt.content);
    console.log(model['model_name']);
    let mdlMthds = modelMethods(rslt.content);
    model['ops'] = [];
    _.forEach(mdlMthds, (meth) => {
      extractQueries(meth);                     // queries where condition variable source
    });
  });
}

function modelName(classCode) {
  // extract text between class and extends
  let splitStrt = findCaseInsensitiveSubString('class', classCode);
  let splitEnd = findCaseInsensitiveSubString('extends', classCode);
  return _.trim(classCode.substring(splitStrt + 6, splitEnd));
}

function modelMethods(classCode) {
  // start at function, find each opening bracket, find closing bracket before function or two consecutive closing brackets
  let methodIndexes = findAllCaseInsensitive('function', classCode);
  let methods = [];
  for (let i = 0; i < methodIndexes.length; i++) {
    if(i == methodIndexes.length)
      methods.push(classCode.substring(methodIndexes[i], classCode.length));
    methods.push(classCode.substring(methodIndexes[i], methodIndexes[i + 1]));
  }
  console.log(methods);
  return methods;
}

// Stage One reverse engineering
function extractQueries(methodCode) {
  // iterate through words if insert get insert
  // if select get select
  let selectIndexes = findAllCaseInsensitive('$this->db->select(', methodCode);
  let selectEndIndexes = findAllCaseInsensitive('$this->db->get();', methodCode);
  // if insert get insert
  let insertIndexes = findAllCaseInsensitive('$this->db->insert(', methodCode);
  let insertEndIndexes = findAllCaseInsensitive('$this->db->insert_id();', methodCode);
  let affectedRowsEndIndexes = findAllCaseInsensitive('$this->db->affected_rows();', methodCode);
  // if update get update
  let updateIndexes = findAllCaseInsensitive('$this->db->update(', methodCode);
  let updateEndIndexes = findAllCaseInsensitive('$this->db->affected_rows();', methodCode);
  // if delete get delete
  let deleteIndexes = findAllCaseInsensitive('$this->db->delete(', methodCode);
  let deleteEndIndexes = findAllCaseInsensitive('$this->db->affected_rows();', methodCode);
  // if where get where
  let whereFullIndexes = findAllCaseInsensitive('$this->db->where(', methodCode);
  let chainWhereIndexes = findAllCaseInsensitive('->where(', methodCode);
}

function getInsert(method, start) {
  // which data points did you get
}

function getSelect(method, start) {
  // find $this->db->select() is start
  // find $this->db->from()   | ->from()
  // find $this->db->join()   | ->join()
  // find $this->db->where()  | ->where(), data source from
  // find $this->db->group_by() | ->group_by()
  // find $this->db->having()   | ->having
  // find get results is end
}