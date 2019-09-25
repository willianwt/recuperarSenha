<?php
	define('HOST','localhost');
	define('USER','root');
	define('PASS','root');
	define('BASE','login');
	
	$conn = new MySQLi(HOST,USER,PASS,BASE);
	
	if(mysqli_connect_errno())
		trigger_error(mysqli_connect_error());
?>