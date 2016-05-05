 <table border="1">
  <caption>Streamers11</caption>
  <tr>
    <th>Name
    <th>Description
	<th>Subscribers
	<th>Followers
  </tr>
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
</table>
<h1>Create a Streamer</h1>
<form action="create.php" method="post">
	Name<input type="text" name="inputName" value="" /><br />
	Description<input type="text" name="inputDesc" value="" /><br />
	Subscribers<input type="text" name="inputSubs" value="" /><br />
	Followers<input type="text" name="inputFollow" value="" /><br />
	<br />
	<input type="submit" name="submit" />
</form>