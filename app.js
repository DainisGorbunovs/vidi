var express = require('express');
var app = express();
var path = require('path');
var routes = require('./routes/index');

app.use(express.static(path.join(__dirname, 'app')));
app.set('views', './app')
app.set('view engine', 'jade');
app.use('/', routes);

// Let user choose a port
var appPort = 3000;
if (typeof process.argv[2] !== 'undefined')
    appPort = Number(process.argv[2]);

var server = app.listen(appPort, function () {
  var host = server.address().address;
  var port = server.address().port;
  console.log('Example app listening at http://%s:%s', host, port);
});
