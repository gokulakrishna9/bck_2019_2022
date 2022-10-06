// https://stackoverflow.com/questions/10049557/reading-all-files-in-a-directory-store-them-in-objects-and-send-the-object
const fs = require('fs');
let async = require('async');
let _ = require('lodash');

// Build the entire string and call the callback
exports.readAppScaffold = function (folder_name, callback) {
  async.waterfall([
    function (clbck) {
      fs.readdir(folder_name, { recursive: true }, (err, filenames) => {
        let contents = [];
        if (err) {
          console.log(err);
        }
        clbck(err, filenames);
      });
    },
    function (filenames, clbck) {
      async.concat(filenames, (filename, clb) => {
        fs.readFile(folder_name + '/' + filename, 'utf-8', (err, content) => {
          if (err) {
            console.log(err);
            return err;
          }
          clb(err, content);
        });
      }, (err, results) => { callback(err, results); });
    }
  ],
    () => {

    });
}

exports.readFiles = function (folder_name, callback) {
  async.waterfall([
    function (clbck) {
      let folders = [folder_name];
      let files = [];
      while (!_.isEmpty(folders)) {
        let folder_name = folders.pop();
        let filenames = _.map(fs.readdirSync(folder_name), (file) => { return folder_name + '/' + file; });
        _.forEach(filenames, (fileName) => {
          let fileStat = fs.lstatSync(fileName);
          if (fileStat.isFile())
            files.push(fileName);
          else
            folders.push(fileName);
        });
      }
      clbck(null, files);
    },
    function (filenames, clbck) {
      async.concat(filenames, (filename, clb) => {
        fs.readFile(filename, 'utf-8', (err, content) => {
          if (err) {
            console.log(err);
            return err;
          }
          clb(err, { file_name: filename, content: content });
        });
      }, (err, results) => { callback(err, results); });
    }
  ],
    () => {

    });
}
// move to synchronous
// TERMINATION CONDITION IS folders, folder is out of contents
// Knok out the loop, it will exit before async finishes
/*
let folders = [];
let files = [];
let br = 0;
function folderStrct(flders) {
  let iter = br;
  // get folder content, 
  _.forEach(flders, (folder_name) => {
    async.waterfall([
      function (clb) {
        fs.readdir(folder_name, { recursive: true }, (err, filenames) => {
          if (err) {
            console.log(err);
          }
          filenames = _.map(filenames, (filename) => { return folder_name + '\\' + filename });
          clb(err, filenames);
        });
      },
      function (filenames, clb) {
        async.concat(filenames, (folder, conctClb) => {
          fs.lstat(folder, (err, stats) => {
            let file_type = stats.isFile() ? true : false;
            conctClb(err, { filename: folder, file_type: file_type })
          });
        }, (err, rslt) => {
          files.push(_.map(_.filter(rslt, { file_type: true }), (file) => { return file.filename }));
          let fold = _.map(_.filter(rslt, { file_type: false }), (file) => { return file.filename });
          folders.push(...fold);
          if (fold.length > 0) {
            async.waterfall([function () { folderStrct(_.map(_.filter(rslt, { file_type: false }), (folder) => { return folder.filename; })) }]);
          }
        });
      }
    ]);
  });
  return true;
}
*/