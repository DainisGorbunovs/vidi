var express = require('express');
var router = express.Router();

/* GET home page. */
indexData = { title: 'SurvivalRate', anothercard: 'Lorem Ipsum ...' };
router.get('/', function (req, res) {
  res.render('index', indexData);
});

module.exports = router;
