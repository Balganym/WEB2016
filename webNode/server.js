var express = require('express');

var mysql = require('mysql');

var connection = mysql.createConnection({
	host: 'localhost',
	user: 'admin',
	password: 'admin',
	database: 'kbu'
});

connection.connect(function(err){
	if(err){
		console.log('error while connecting to the database');
	} else{
		console.log('connection to database established');
	}
});

var app = express();

app.get('/allstudents', function(req, res){
	connection.query('SELECT * FROM students', function(err, rows, fields){
		connection.end();
		if(err){
			console.log('something wrong while fetch data');
		} else{
			console.log(rows);
			res.send(rows);
		}
	});
})

app.get('/', function(req, res){
	res.send('go to localhost:8000/allstudents');
	console.log('Some GET request was handled');
});

app.listen(8000);

console.log('Listening on port 8000 go to localhost:8000');

