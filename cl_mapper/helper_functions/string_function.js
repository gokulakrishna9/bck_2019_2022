var _ = require('lodash');
exports.splitCapitalize = function (str, separator) {
  let stringArr = _.split(str, separator);
  let combStr = '';
  _.forEach(stringArr, (str) => { combStr += _.capitalize(str) + ' '; });
  combStr = _.trim(combStr);
  return combStr;
}

exports.removeSpaces = function (str) {
  let spacesEx = /[\s\t\n]/i;
  return _.trim(str.replace(spacesEx, ''));
}

exports.toLower = function (str) {
  return _.toLower(_.trim(str));
}

function lower(str) {
  return _.toLower(_.trim(str)); 
}

exports.findCaseInsensitiveSubString = function (find, str) {
  find = lower(find);
  str = lower(str);
  return str.indexOf(find) >= 0;
}

exports.findAllCaseInsensitive = function (find, str) {
  find = lower(find);
  str = lower(str);
  let indexes = [];
  let lastIndex = 0;
  while(lastIndex <= str.length){
    lastIndex = str.indexOf(find, lastIndex);
    if(lastIndex == -1)
      break;
    indexes.push(lastIndex);
    lastIndex += find.length + 1;
  }
  return indexes;
}

exports.tabSpaces = function (tabSize) {
  let tab = '';
  for (let i = 1; i <= tabSize; i++) {
    tab += ' ';
  }
  return tab;
}

exports.ucFirst = function (string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

exports.writeLine = function (line) {
  console.log(JSON.stringify(line));
}