<?php
	include 'connect.php';
	
	$name = $_POST['inputName'];
	$desc = $_POST['inputDesc'];
	$follow = $_POST['inputFollow'];
	$monthav = $_POST['inputMonthav'];
	
	if(!$_POST['submit']) {
		echo "Add a streamer";
		header('Location: table.php');
		} else {
			mysql_query("INSERT INTO streamers (`ID`,`Name`,`Description`,`Followers`,`MonthlyAverageViews`)
							VALUES(NULL,'$name','$desc','$follow','$monthav')") or die(mysql_error());
			echo "Streamer has been added!";
			header('Location: table.php');
		}
?>