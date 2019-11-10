var express = require('express');
var router = express.Router();
var fs = require('fs');


router.post('/', function (req, res) {
  // var log = __dirname + '/../public/static_assets/sample.log';
  // fs.writeFileSync(log, req.body.x, 'utf8'); // write it back

  var path = __dirname + '/../public/static_assets/hello-world.json';
  var data = fs.readFileSync(path, 'utf8');
  var obj = JSON.parse(data); //now it an object
  obj.scenes[2].infos[0].rotateX = req.body.x;
  obj.scenes[2].infos[0].rotateY = req.body.y;
  var json = JSON.stringify(obj, null,2); //convert it back to json
  fs.writeFileSync(path, json, 'utf8'); // write it back
  res.status(200)
  res.redirect('/editor.html')
})

module.exports = router;
