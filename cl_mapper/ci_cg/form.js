// form elements
// label elements
// form classes | default classes
// form grid | default grid

// form elements
/**
 * 
 * <input type="password" class="form-control" id="exampleInputPassword1">
 * <input type="checkbox" class="form-check-input" id="exampleCheck1">
 * <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
    <label class="form-check-label" for="exampleRadios1">
      Default radio
    </label>
 */
let _ = require('lodash');
let { tabSpaces, ucFirst } = require('../helper_functions/string_function');
// form elements
// BUILD THE ENTIRE DATA STRUCTURE THEN PASS TO TEMPLATE
let input = _.template(`<input type="<%= input_type %>" class="<%= class_name %>" name="<%= field_name %>" value="<?php echo $input_data-><%= field_name %>; ?>" id="<%= field_id %>">`);
let label = _.template(`<label class="<%= class_name %>" for="<%= field_name %>"><%= label %></label>`);
let selectStart = _.template(`<select class="<%= class_name %>" name="<%= field_name %>" id="<%= field_id %>">`);
let phpOptions = _.template(`<?php foreach($<%= master_table %> as $record){ ?>`);
let option = _.template(`<option value="<?php echo $record-><%= primary_column %>; ?>" <?php if($input_data-><%= primary_column %> == $record-><%= primary_column %>) echo 'selected'; ?>><?php echo $record-><%= label_column %>; ?></option>`);
let phpOptionsEnd = _.template(`<?php } ?>`);
let selectEnd = _.template(`</select>`);
let textArea = _.template(`<textarea class="form-control" name="<%= field_name %>" id="<%= field_name %>" rows="<%= rows %>"><?php echo $input_data-><%= field_name %>; ?></textarea>`);

let { findCaseInsensitiveSubString } = require('../helper_functions/string_function')
// in controller table name is the name of data field containing select, table_columns, labels
exports.buildForm = function (entities) {
  // {form_element{element_type, class, id}, label_element, error_element}
  let defaultForms = [];
  _.forEach(entities, (entity) => {
    let formColumns = {
      'text': [], 'number': [], 'textarea': [], 'date': [],
      'radio': [], 'checkbox': [], 'select': [],            // checkbox and select map to masters
      'password': [], 'hidden': [],
      'email': [], 'file': []                               // file think through, with private folder, email through command line
    };
    formColumns.text.push(..._.filter(entity.table_columns, (column) => { return (column.column_type == 'varchar' && column.column_size <= 50); }));
    formColumns.number.push(..._.filter(entity.table_columns, (column) => {
      if (column.column_key == 'PRI' || (!_.isEmpty(entity.relation) && 
        _.filter(entity.relation.masters, { column_name: column.column_name }).length > 0))
        return false;
      return findCaseInsensitiveSubString(column.column_type, 'int');
    }));
    formColumns.hidden.push(..._.filter(entity.table_columns, {column_key: 'PRI'}));
    formColumns.textarea.push(..._.filter(entity.table_columns, (column) => {
      return findCaseInsensitiveSubString(column.column_type, 'text') || (findCaseInsensitiveSubString(column.column_type, 'varchar') && column.column_size > 50);
    }));
    formColumns.date.push(..._.filter(entity.table_columns, (column) => {
      return findCaseInsensitiveSubString(column.column_type, 'date') || findCaseInsensitiveSubString(column.column_type, 'time') || findCaseInsensitiveSubString(column.column_type, 'year');
    }));
    formColumns.radio.push(..._.filter(entity.table_columns, (column) => { return findCaseInsensitiveSubString(column.column_type, 'boolean') }));
    let masters = [];
    if (!_.isEmpty(entity.relation)) {
      _.forEach(entity.relation.masters, (mstr) => {
        let mst = _.filter(entities, { table_name: mstr.table_name });
        if (_.isEmpty(mst))
          return;
        if (_.isEmpty(mst[0].labels[0]))
          return;
        masters.push({ label: mst[0].labels[0], master: mstr });
      });
    }
    formColumns.select.push(...masters);      // select one
    formColumns.checkbox.push(...masters);    // select many
    let formElm = buildDefaultForm(formColumns);
    defaultForms.push({table_name: entity.table_name, form_elements: formElm});
  });
  return defaultForms;
}

function buildDefaultForm(formColumns) {
  let formElements = [];      // label, input element
  // input tag types
  _.forEach(formColumns, (elems, key) => {
    if (key == 'select' || key == 'textarea' || key == 'checkbox' || key == 'radio')
      return;
    _.forEach(elems, (elem) => {
      let lbl = '';
      if(key != 'hidden')
        lbl = label({ class_name: 'form-check-label', field_name: elem.column_name, label: elem.column_label });
      formElements.push([
        lbl,
        input({ input_type: key, class_name: 'form-control', field_name: elem.column_name, field_id: elem.column_name })
      ]);
    });
  });
  // select boxes
  _.forEach(formColumns.select, (col) => {
    formElements.push([
      label({ class_name: 'form-check-label', field_name: col.master.column_name, label: col.label.column_label }),
      phpOptions({ master_table: col.master.table_name }),
      selectStart({ class_name: 'form-control', field_name: col.master.column_name, field_id: col.master.column_name }),
      option({ primary_column: col.master.column_name, label_column: col.label.column_name }),
      phpOptionsEnd({}),
      selectEnd({})
    ]);
  });
  /*
  _.forEach(formColumns.checkbox, (elem) => {
    formElements.push(
      [
        input({ input_type: 'checkbox', class_name: 'form-control', field_name: elem.column_name, field_id: elem.column_name }),
        label({ class_name: 'form-check-label', field_name: elem.column_name, label: elem.column_label })
      ]
    );
  });
  */
  // textArea
  _.forEach(formColumns.textarea, (elem) => {
    formElements.push(
      [label({ class_name: 'form-check-label', field_name: elem.column_name, label: elem.column_label }),
      textArea({ class_name: 'form-control', field_name: elem.column_name, field_id: elem.column_name, rows: 3 })]
    );
  });
  return formElements;
}

/*
 {
  folder_name: 'app one/scaffold',
  file_name: 'health4all_visit_name',
  extension: '.json',
  app_name: 'app one',
  db: 'health4all',
  table_name: 'visit_name',
  ops: [ { op_name: '', params: {} } ],
  table_columns: [
    {
      column_type: 'varchar',
      column_size: '50',
      column_key: '',
      column_name: 'visit_name',
      table_name: 'visit_name',
      column_label: 'Visit Name',
      db: 'health4all'
    },
    {
      column_type: 'int',
      column_size: '11',
      column_key: 'PRI',
      column_name: 'visit_name_id',
      table_name: 'visit_name',
      column_label: 'Visit Name Id',
      db: 'health4all'
    }
  ],
  labels: [
    {
      column_type: 'varchar',
      column_size: '50',
      column_key: '',
      column_name: 'visit_name',
      table_name: 'visit_name',
      column_label: 'Visit Name',
      db: 'health4all'
    }
  ],
  relation: {
    masters: [],
    derived: [ [Object] ],
    branching: { patient_visit: [Array] }
  }
 */