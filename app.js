var express = require('express');
var app = express();
var path = require('path');
var routes = require('./routes/index');

app.use(express.static(path.join(__dirname, 'app')));

app.use('/', routes);

var server = app.listen(3000, function () {
  var host = server.address().address;
  var port = server.address().port;

  console.log('Example app listening at http://%s:%s', host, port);
});
