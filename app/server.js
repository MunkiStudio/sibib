var gzippo = require('gzippo');
var express = require('express');
var morgan = require('morgan');
var app = express();

app.use(morgan('dev'));
//app.use(gzippo.staticGzip("."));
app.use(express.static('.'));
app.listen(process.env.PORT || 5000);