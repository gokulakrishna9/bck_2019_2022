let _ = require('lodash');
let { tabSpaces, ucFirst, toLower } = require('../helper_functions/string_function');

let tableStrtTmpl = _.template(`<%= indentation %><table class="table table-striped table-responsive">`);
let tableEndTmpl = _.template(`<%= indentation %></table>`);
let tableHdStrtTmpl = _.template(`<%= indentation %><thead><tr><th scope="col">#</th><th scope="col"></th>`);
let tableHdColTmpl = _.template(`<%= indentation %><th scope="col"><%= header_label %></th>`);
let tableHdEndTmpl = _.template(`<%= indentation %></tr></thead>`);
let tableBdStrtTmpl = _.template(`<%= indentation %><tbody>`);
let tableHasRec = _.template(`<%= indentation %><?php if(sizeof($<%= table_name %>) > 0){`);
let tablePHPCodeStrt = _.template(`<%= indentation %>forEach($<%= table_name %> as $index => $record) { ?>`);
let tablePHPCodeEnd = _.template(`<%= indentation %><?php }} ?>`);
let tableRowStrtTmpl = _.template(`<%= indentation %><tr><td><?php echo $index; ?></td>`);
let updateButtonTmpl = _.template(`<%= indentation %><td><a class="btn btn-outline-warning btn-sm" href='#'>Update</a></td>`);
let tableBdColTmpl = _.template(`<%= indentation %><td><?php echo $record-><%= column_value %>; ?></td>`);
let tableRowEndTmpl = _.template(`<%= indentation %></tr>`);
let tableBdEndTmpl = _.template(`<%= indentation %></tbody>`);

let indentation = 2;
exports.buildTable = function (entities) {
  // headers, columns, table_name for data
  let tables = [];
  _.forEach(entities, (ent) => {
    let table = [];
    table.push(tableStrtTmpl({ indentation: tabSpaces(indentation) }));
    table.push(tableHdStrtTmpl({ indentation: tabSpaces(2 * 2 * indentation) }));
    _.forEach(ent.table_columns, (column) => {
      if (toLower(column.column_key) == 'pri')
        return;
      table.push(tableHdColTmpl({ indentation: tabSpaces(2 * 2 * indentation), header_label: column.column_label }));
    });
    table.push(tableHdEndTmpl({ indentation: tabSpaces(2 * 2 * indentation) }));
    table.push(tableBdStrtTmpl({ indentation: tabSpaces(2 * 2 * indentation) }));
    table.push(tableHasRec({ indentation: tabSpaces(2 * 2 * indentation), table_name: ent.table_name }));
    table.push(tablePHPCodeStrt({ indentation: tabSpaces(3 * 2 * indentation), table_name: ent.table_name }));
    table.push(tableRowStrtTmpl({ indentation: tabSpaces(4 * 2 * indentation) }));
    table.push(updateButtonTmpl({ indentation: tabSpaces(5 * 2 * indentation) }));
    _.forEach(ent.table_columns, (column) => {
      if (toLower(column.column_key) == 'pri') {
        return;
      }
      table.push(tableBdColTmpl({ indentation: tabSpaces(5 * 2 * indentation), column_value: column.column_name }));
    });
    table.push(tableRowEndTmpl({ indentation: tabSpaces(4 * 2 * indentation) }));
    table.push(tablePHPCodeEnd({ indentation: tabSpaces(3 * 2 * indentation) }));
    table.push(tableBdEndTmpl({ indentation: tabSpaces(2 * 2 * indentation) }));
    table.push(tableEndTmpl({ indentation: tabSpaces(indentation) }));
    tables.push({ table_name: ent.table_name, table: _.join(table, '\n') });
  });
  return tables;
}