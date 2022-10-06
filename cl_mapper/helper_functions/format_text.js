var _ = require('lodash');
exports.splitCapitalize = function (str, separator){
  let stringArr = _.split(str, separator);
  let combStr = '';
  _.forEach(stringArr, (str) => {combStr += _.capitalize(str) + ' ';});
  combStr = _.trim(combStr);
  return combStr;
}

exports.removeSpaces = function (str){
  let spacesEx = /[\s\t\n]/i;
  return _.trim(str.replace(spacesEx, ''));
}