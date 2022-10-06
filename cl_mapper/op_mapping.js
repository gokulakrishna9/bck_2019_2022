exports.op_mapping = function () {
  return [
    {
      op_name: 'list_db',
      op_file: './session_ops',
      op_method: 'listDB',
      inquirer_method: '',
      display_fields: ['Database'],
      global_name: 'db_list'
    },
    {
      op_name: 'list_apps',
      op_file: './session_ops',
      op_method: 'listApplications',
      inquirer_method: '',
      display_fields: ['application_name'],
      global_name: 'app_list'
    },
    {
      op_name: 'add_app',
      op_file: './db_ops/app_init',
      op_method: 'addApplication',
      inquirer_method: 'appInquirer',
      display_fields: ['application_name'],
      global_name: 'current_app'
    },
    {
      op_name: 'load_app',
      op_file: './db_ops/app_scaffold',
      op_method: 'loadApplication',
      inquirer_method: '',
      display_fields: ['application_name'],
      global_name: 'current_app'
    },
    {
      op_name: 'build_ci',
      op_file: './ci_cg/ci_main',
      op_method: 'ciMain',
      inquirer_method: '',
      display_fields: ['success'],
      global_name: 'scaffold'
    },
    {
      op_name: 'edit_scaffold',
      op_file: './db_scaffold/sql_ops',
      op_method: 'showCommands',
      inquirer_method: '',
      display_fields: ['show_commands'],
      global_name: 'scaffold'
    },
    {
      op_name: 'list_tables',
      op_file: './db_scaffold/sql_ops',
      op_method: 'listTables',
      inquirer_method: '',
      display_fields: [''],
      global_name: ''
    },
    {
      op_name: 'show_session',
      op_file: './db_scaffold/sql_ops',
      op_method: 'showSession',
      inquirer_method: '',
      display_fields: [''],
      global_name: ''
    },
    {
      op_name: 'list_columns',
      op_file: './db_scaffold/sql_ops',
      op_method: 'listColumns',
      inquirer_method: '',
      display_fields: [''],
      global_name: ''
    },
    {
      op_name: 'list_masters',
      op_file: './db_scaffold/sql_ops',
      op_method: 'listMasters',
      inquirer_method: '',
      display_fields: [''],
      global_name: ''
    },
    {
      op_name: 'list_derived',
      op_file: './db_scaffold/sql_ops',
      op_method: 'listDerived',
      inquirer_method: '',
      display_fields: [''],
      global_name: ''
    },
    {
      op_name: 'list_branches',
      op_file: './db_scaffold/sql_ops',
      op_method: 'listBranches',
      inquirer_method: '',
      display_fields: [''],
      global_name: ''
    },
    {
      op_name: 'label_column',
      op_file: './db_scaffold/sql_ops',
      op_method: 'labelColumn',
      inquirer_method: 'labelInquirer',
      display_fields: [''],
      global_name: ''
    },
    {
      op_name: 'sql_op',
      op_file: './db_scaffold/sql_ops',
      op_method: 'sqlOp',
      inquirer_method: 'sqlOpInquirer',
      display_fields: [''],
      global_name: ''
    },
    {
      op_name: 'read_ci_app',
      op_file: './ci_cg/read_ci_code',
      op_method: 'readQueries',
      inquirer_method: 'readQueriesInquirer',
      display_fields: [''],
      global_name: ''
    }
  ]
}