// https://stackabuse.com/reading-and-writing-json-files-with-node-js/
const fs = require('fs');
let async = require('async');

// filesArray {folder_name, file_name, file_extension, file_contents}, callback(err, rslt)
exports.writeFile = function (filesArray, callback) {
  let folderName = filesArray[0].folder_name;
  // async parallel
  async.waterfall([
    function (clbck) {
      console.log('Creating Application Folder... ' + folderName);
      fs.mkdir(folderName + '/', { recursive: true }, (err) => {
        if (err) {
          console.log(err);
        }
        console.log(folderName + ' Done!');
        clbck(null, true);
      });
    },
    function (rslt, clbck) {
      console.log('Writing Application Files...');
      async.concat(filesArray, (file, clb) => {
        let fileName = file.file_name+file.extension;
        let fileString = file.file_contents;
        fs.writeFile(folderName + '/' + fileName, fileString, (err) => {
          if (err)
            console.log(err);
          else
            clb(null, { file_name: fileName, success: 'Wrote File.' });
          console.log(folderName + '/' + fileName + ' Done!');
        });
      }, (err, results) => { callback(err, {files: results}); });
    }
  ]);
}