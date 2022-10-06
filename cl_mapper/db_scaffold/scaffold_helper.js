let _ = require('lodash');
let {splitCapitalize} = require('../helper_functions/string_function');
exports.fieldObj = function(column) {
  let columnType = _.split(column.COLUMN_TYPE.replace('(', ' ').replace(')', ''), ' ');
  return {
    column_type: columnType[0],
    column_size: columnType[1], 
    column_key: column.COLUMN_KEY,
    column_name: column.COLUMN_NAME,
    table_name: column.TABLE_NAME,
    column_label: splitCapitalize(column.COLUMN_NAME, '_'),
    db: column.TABLE_SCHEMA
  };
}