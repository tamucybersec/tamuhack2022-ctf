var express = require('express');
var router = express.Router();
const mysql = require('mysql2');

const connection = mysql.createConnection({
	host: 'tamuhack-sqli-sqldb',
	user: 'username',
	password: 'password',
	database: 'tamuhack_login',
	multipleStatements: true
})

connection.connect();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { error: '' });
});

router.post('/', function(req, res, next) {
	connection.query('SELECT * FROM `credentials` WHERE username = "' + req.body.username + '" AND password = "' + req.body.password + '"', function(error, results, fields) {
		if(results.length !== 0){
			res.render('index', { error: 'Login successful. Flag is gigem{10g1n_5ucc355fu1_g00d_j0b}' });
			return;
		} else {
			res.render('index', { error: 'Login failed. Please try again' });
			return;
		}
	});
});

module.exports = router;
