<?php
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'toor';
	
	$db = 'testdb';

	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	mysql_select_db($db);
?>