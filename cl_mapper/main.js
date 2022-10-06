let readline = require('readline');
let _ = require('lodash');
let { op_mapping } = require('./op_mapping');
let { caseInsensitiveCompare } = require('./helper_functions/boolean_function');
let rl = readline.createInterface(process.stdin, process.stdout);
let { getDatabases, getApplications } = require('./db_ops/app_bootstrap');

global.sesObject = {};
global.updateSession = function (globalName, newObject) {
  delete global.sesObject[globalName];
  global.sesObject[globalName] = newObject;
}

function bootstrapApp() {
  getDatabases('', (err, rslt) => { console.log(err); });
  getApplications('', (err, rslt) => { console.log(err); });
}

bootstrapApp();

rl.setPrompt('map> ');
rl.prompt();
rl.on('line', function (line) {
  if (line === 'exit')
    rl.close();
  else if (line === 'clear') {
    console.clear();
    rl.prompt();
  }
  else
    executeCommand(line);
}).on('close', function () {
  process.exit(0);
});
let questions_group = {};
let answers = [];
let group_list = [];
let op_map;
function executeCommand(line) {
  // ops and params
  // separate ops by ';' and params by ','{op_name: properties->values, ; op_name2: properties, ;}
  // only help and execute command{context_help, op_help, execute {dynamic}operator}
  if (_.isEmpty(line)) {
    rl.prompt();
    return;
  }
  let command = buildCommandObj(line)[0];       // buildCommandObj can take multiple commands
  let op = true;
  if (command.command == 'help') {
    helpContent(command);
  } else {
    // have inquirer here
    op_map = _.filter(op_mapping(), { op_name: command.command })[0];
    if (_.isEmpty(op_map)) {
      op = false;
      op_map = global.sesObject['map_obj'];
    }
    if (_.isEmpty(op_map)) {
      rl.prompt();
      return;
    }
    global.updateSession('map_obj', op_map);
    if (_.isEmpty(op_map.inquirer_method)) {
      dispatchAction(op_map, command);
    } else {
      let c_file = op_map.op_file;
      let controller = require(c_file);
      if (_.isEmpty(questions_group)) {
        questions_group['root'] = buildQuestionGroups(_.map(controller[op_map.inquirer_method](), (question) => { return { ...question, active: true } }));
        group_list.push('root');
      }
      if(!op)
        prmpt(line);
      else
        prmpt('');
    }
  }
}

function prmpt(line) {
  let group = group_list[group_list.length - 1];
  let question = _.filter(questions_group[group], { active: true })[0];
  if (!_.isEmpty(line) && !caseInsensitiveCompare(line, 'grp_done') && !_.isEmpty(question)) {
    if(!caseInsensitiveCompare(question.loop_type, 'stmt')){
      question.active = false;
      answers.push({ group_name: question.group_name, property_name: question.name, value: line });
    } else if(caseInsensitiveCompare(line, 'stmt_done')){
      question.active = false;
    } else {
      answers.push({ group_name: question.group_name, property_name: question.name, value: line });
    }
  }
  if (caseInsensitiveCompare(line, 'grp_done')) {
    // change group
    let popped = group_list.pop();
    group = group_list[group_list.length - 1];
  }
  if (!_.isEmpty(group)) {
    inquire(questions_group[group]);
    rl.setPrompt('?>');
    rl.prompt();
  } else {
    dispatchAction(op_map, answers);
    op_map = {};
    answers = {};
    rl.setPrompt('map>');
    rl.prompt();
  }
}

// make this recursive, {loop_type{stmt_grp, stmt}, group_name, questions, message, name}
// Just set the question as done, have a prev question array
function inquire(questions) {
  let done = _.filter(questions, { active: true });
  if (_.isEmpty(done)) {
    console.log('Op done to exit type "grp_done"')
    questions = _.map(questions, (question) => { return { ...question, active: true } })
  }
  _.forEach(questions, (question) => {
    if (!question.active)
      return;
    if (!_.isEmpty(question.group_name)) {
      group_list.push(question.group_name);
      question.active = false;
      prmpt('');
      return false;
    } else if (caseInsensitiveCompare(question.loop_type, 'stmt')) {
      console.log(question.message);
      return false;
      // assign property to answer
    } else {
      console.log(question.message);
      return false;
    }
  });
}
// group_question
let epoch = 'a';
function buildQuestionGroups(questions) {
  let qstns = [];
  _.forEach(questions, (question) => {
    epoch += epoch;
    let group_name = _.isEmpty(question.group_name) ? 'list_' + epoch : question.group_name;
    if (caseInsensitiveCompare(question.loop_type, 'stmt_grp')) {
      qstns.push({ group_name: group_name, active: true });
      questions_group[group_name] = buildQuestionGroups(question.questions);
    } else {
      qstns.push({ ...question, active: true });
    }
  });
  return qstns;
}

function buildCommandObj(line) {
  let commandsStr = _.split(line, ';');
  let commands = [];
  _.forEach(commandsStr, (command) => {
    let op_props = _.split(command, ':');
    let comm = op_props[0];
    let props_vals;
    if (!_.isEmpty(op_props[1])) {
      props_vals = _.map(_.split(op_props[1], ','), (pv) => {
        let prv = _.split(pv, '->');
        return { [_.trim(prv[0])]: _.trim(prv[1]) };
      });
    }
    commands.push({ command: comm, props: props_vals });
  });
  return commands;
}

function helpContent(command) {
  console.log('Command Structure: {op_name: properties->values, ... ; op_name2: properties, ;}')
  console.log('Execute Any Of The Following Commands');
  console.log('help, ', 'add_app, ', 'select_app, ', 'list_app, ', 'load_app, ', 'list_db, ', 'add_db, ', 'add_relation, ', 'build_scaffold, ', 'edit_scaffold, ', 'build_ci, ', 'exit');
  rl.prompt();
  return;
  // Get component op help
}

function dispatchAction(op_map, answers) {
  console.log('dispatchAction');
  let c_file = op_map.op_file;
  let controller = require(c_file);
  let method = op_map.op_method;
  let props = {};
  if (!_.isEmpty(answers)) {
    props['props'] = answers;
    answers = {};
  }
  controller[method](props, (err, rslt) => { output(err, rslt, op_map.display_fields, op_map.global_name); });
}

function output(err, rslt, displayFields, globalName) {
  rl.setPrompt('map> ');
  if (!_.isEmpty(rslt))
    global.updateSession(globalName, rslt);
  rl.prompt();
}