var _ = require('lodash');
exports.caseInsensitiveCompare = function(string1, string2){
  if(_.toLower(_.trim(string1)) === _.toLower(_.trim(string2)))
    return true;
  else
    return false;
}