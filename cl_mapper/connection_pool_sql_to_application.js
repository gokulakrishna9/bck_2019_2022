var mysql = require('mysql');
var myc_pool = mysql.createPool({
    connectionLimit : 10,
    host        : 'localhost',
    user        : 'root',
    password    : '',
    database    : '',
    port        : 3308
});

module.exports = myc_pool;