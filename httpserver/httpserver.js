// var hserver = require("http");
//
//
// hserver.createServer(function (req, res) {
//
//   res.writeHead(200, {'Content-Type' : 'text/plain'});
//   res.end('hello World!');
//
// }).listen(1337, '127.0.0.1');
//
// console.log('server running at http://127.0.0.1:1337');

var express = require('express');
var app = express();

app.use(express.static(__dirname + '/html'));
//var bodyParser = require('body-parser');

//app.use(express.bodyParser());

app.get("/", function(req, res){
  res.sendfile('html/index.html');
})


app.get("/htm", function(req, res){

  res.sendfile("html/inname.html");


})


app.get("/name", function(req, res){
  res.send("userid: " + req.query.inputid +","+ "userpw: " + req.query.inputpw);
  console.log("Login Request ID " + req.query.inputid);
});

app.get("/finally", function (req, res){
  res.sendfile("html/tttt.html");
  res.status(200);
});

app.get("/031701", function (req, res){
  res.sendfile("html/20160317-3103-01.html");
  res.status(200);
});

app.get("/031702", function (req, res){
  res.sendfile("html/20160317-3103-02.html");
  res.status(200);
});

app.get("/032103", function (req, res){
  res.sendfile("html/20160321-3103-03.html");
  res.status(200);
});

app.get("/login", function (req, res){
  res.sendfile("html/20160331-3103-11.html");
  res.status(200);
});

app.get("*", function(req, res){
  res.send("404 Not Found Error! Please check the address");
  res.status(404);
});

var server = app.listen(1337, function(){
  console.log("Server is Working! on http://127.0.0.1:1337");
});
