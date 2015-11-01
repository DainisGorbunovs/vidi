var express = require('express');
var router = express.Router();

/* GET home page. */
indexData = { title: 'SurvivalRate', anothercard: 'Lorem Ipsum ...' };
router.get('/', function (req, res) {
  res.render('index', indexData);
});

router.get('/map', function (req, res) {
  res.render('map', indexData);
});

router.get('/lad.json', function (req, res) {
  res.render('LA/lad.json', indexData);
});

module.exports = router;
