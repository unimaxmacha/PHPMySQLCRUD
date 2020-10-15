<?php 
	/* Database credentials. Assuming you are running Mysql server with default setting(user 'root' with no password */
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'db_dbinfo');

	/* Attempt to connect to MySQL database */
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	mysqli_set_charset($link,"utf8");

	// Check Connection
	if($link === false) {
		die("ERROR: Could not connect. " .mysqli_connect_error());
	}
?>