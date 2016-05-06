 <meta http-equiv="refresh" content="0; URL='./streamersdb.php'" />
<?php
	include 'connect.php';
	
	$query = "SELECT * FROM streamers";
	
	$result = mysql_query($query);
	
	while($streamers = mysql_fetch_array($result)) {
		echo "<tr>\n";
		echo " <td>" . $streamers['Name'] . "\n";
		echo " <td>" . $streamers['Description'] . "\n";
		echo " <td>" . $streamers['Followers'] . "\n";
		echo " <td>" . $streamers['MonthlyAverageViews'] . "\n";
		echo "</tr>\n";
	}
?>