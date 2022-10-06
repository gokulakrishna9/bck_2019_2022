// form grid
// div.form-row > div.form-group col-md-6 > label > input.form-control
let _ = require('lodash');
let { tabSpaces, ucFirst } = require('../helper_functions/string_function');

let divStrtTmpl = _.template(`<%= indentation %><div class="<%= class_name %>" id="">`);
let divEndTmpl = _.template(`<%= indentation %></div>`);
let indentation = 2;
exports.buildFormGrid = function (entities) {
  let columnSize = 3;
  let col = 0;
  let entCount = 1;
  formGrid = [];
  _.forEach(entities, (ent) => {
    let form = [];
    _.forEach(ent.form_elements, (elems) => {
      if (col == 0) {
        form.push(divStrtTmpl({ indentation: tabSpaces(indentation), class_name: 'form-row' }));
      }
      form.push(divStrtTmpl({ indentation: tabSpaces(2 * indentation), class_name: 'form-group col-md-6' }));
      _.forEach(elems, (ele) => {
        form.push(tabSpaces(3 * indentation) + ele);
      });
      form.push(divEndTmpl({ indentation: tabSpaces(2 * indentation) }));
      col++;
      entCount++;
      if (col >= columnSize) {
        col = 0;
        form.push(divEndTmpl({ indentation: tabSpaces(indentation) }));
      } else if (entCount >= entities.length) {
        form.push(divEndTmpl({ indentation: tabSpaces(indentation) }));
      }
    });
    col = 0;
    formGrid.push({ table_name: ent.table_name, form_grid: _.join(form, '\n') });
  });
  return formGrid;
}