let _ = require('lodash');
let { buildForm } = require('./form');
let { buildFormGrid } = require('./form_grid');
let { viewMain } = require('./view_main');
let { buildTable } = require('./table');
let { writeFile } = require('../helper_functions/write_to_file');
let { tabSpaces, ucFirst, splitCapitalize, toLower } = require('../helper_functions/string_function');

exports.writeCIView = function (entities) {
  let ents = [];
  _.forEach(entities, (entity) => {
    ents.push(JSON.parse(entity.content));
    //console.log(entity.relation);
  });
  let forms = buildForm(ents);
  let formGrids = buildFormGrid(forms);      // Working
  let htmlTables = buildTable(ents);
  let pages = [];
  // pageObj{form_grid, table_component}
  //controllerFile.push({ folder_name: appName + '/controllers', file_name: fileName, extension: '.php', file_contents: _.join(controller, '\n') });
  _.forEach(ents, (ent) => {
    if (_.isEmpty(ent.table_name))
      return;
    let appName = 'C:/wamp64/www/' + toLower(_.replace(entity.app_name, ' ', '_')) + '/application/views';
    let tableName = ent.table_name;
    let formGrid = _.filter(formGrids, {table_name: tableName})[0].form_grid;
    let htmlTable = _.filter(htmlTables, {table_name: tableName})[0].table;
    pages.push({ folder_name: appName, file_name: tableName, extension: '.php', file_contents: viewMain({ form_grid: formGrid, table_component: htmlTable }) });
  });
  writeFile(pages, (rslt) => { console.log(rslt); });
}