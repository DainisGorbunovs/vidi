var express = require('express');
var app = express();
var path = require('path');
var routes = require('./routes/index');

app.use(express.static(path.join(__dirname, 'app')));
app.set('views', './app')
app.set('view engine', 'jade');
app.use('/', routes);

// Let user choose a port
appPort = Number(process.argv[2]) || 3000;

var server = app.listen(appPort, function () {
  var host = server.address().address;
  var port = server.address().port;
  console.log('Example app listening at http://%s:%s', host, port);
});

// Load lad.json and la_info.json
var ladjson = require('./app/LA/lad.json');
var ladainfojson = require('./app/LA/LA_info.json');
for (var feature in ladjson.features)
{
	for (var feature2 in ladainfojson)
		if (ladainfojson[feature2].areaName == ladjson.features[feature].properties.LAD13NM)
			for(var k in ladainfojson[feature])
				//console.log(ladainfojson[feature][k]);
				ladjson.features[feature].properties[k] = ladainfojson[feature2][k];
	//console.log(ladjson.features[feature].properties);
}

var ladjsonstring = JSON.stringify(ladjson);
//console.log(ladjsonstring);

var fs = require('fs');
var outputFilename = './app/LA/ladata.json';

fs.writeFile(outputFilename, ladjsonstring, function(err) {
    if(err) {
      console.log(err);
    } else {
      console.log("JSON saved to " + outputFilename);
    }
});
