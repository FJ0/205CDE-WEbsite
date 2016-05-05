<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			Lee's Favourite Twitch.tv Streamers
		</title>
		<meta charset="utf-8">
		<link href="style.css" rel="stylesheet" type="text/css">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src=
		"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js">
		</script>
		<script src=
		"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
		</script>
	</head>
	<body class="body">
		<header class="mainHeader">
			<img src="img/Logo.png">
			<nav>
				<ul>
					<li>
						<a href="index.html">Home</a>
					</li>

					<li class="active">
						<a href="streamersdb.php">Streamers DB</a>
					</li>

					<li>
						<a href="top5.html">Top 5</a>
					</li>

					<li>
						<a href="contact.php">Contact me</a>
					</li>
				</ul>
			</nav>
		</header>

		<div class="mainContent">
			<div class="content">
				<article class="content1">
					<header>
						<h2>
							<a href="#" rel="bookmark" title=
							"Permalink to this POST TITLE">Streamers DB</a>
						</h2>
					</header>

					<p>
					</p>

					<div class="table-responsive">
						<table class="table table-hover">
							<caption>
							</caption>

							<tr>
								<th>
									Name
								</th>
								<th>
									Description
								</th>
								<th>
									Followers
								</th>
								<th>
									Monthly Average Views
								</th>
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
					</div>

					<h1>
						<a href="#" rel="bookmark" title="Permalink to this POST TITLE">Create A
						Streamer</a>
					</h1>

					<form action="create.php" method="post">
						Name <input name="inputName" type="text" value=""><br>
						Description <input name="inputDesc" type="text" value=""><br>
						Followers <input name="inputFollow" type="text" value=""><br>
						Monthly Average Views <input name="inputMonthav" type="text" value=
						""><br>
						<br>
						<input name="submit" type="submit">
					</form>
					<p></p>
				</article>
			</div>

			<aside class="top-sidebar">
				<article>
					<h2>
						Did you know?
					</h2>

					<p>
						Twitch has 2+ million peak concurrent sitewide viewers <a href=
						"http://www.businessinsider.com/statistics-about-twitch-2014-8?IR=T">About
						Twitch</a>
					</p>
				</article>
			</aside>

			<aside class="middle-sidebar">
				<article>
					<h2>
						<a href="http://www.businessinsider.com/statistics-about-twitch-2014-8?IR=T" 
						rel="bookmark" title="Did you know?">Did you know?</a>
					</h2>

					<p>
						76% of Twitch's users are between the ages of 18 and 49. Only a third of
						these people go to traditional video-game websites for news, and many of
						them are cord cutters and don't have traditional cable TV. <a href=
						"http://www.businessinsider.com/statistics-about-twitch-2014-8?IR=T">About
						Twitch</a>
					</p>
				</article>
			</aside>

			<aside class="bottom-sidebar">
				<article>
					<h2>
						Did you know?
					</h2>

					<p>
						Amazon bought Twitch.tv in 2014 for a reported $970m <a href=
						"https://en.wikipedia.org/wiki/Twitch.tv">About Twitch</a>
					</p>
				</article>
			</aside>
		</div>

		<footer class="mainFooter">
			<p>
				Lee Reviews Twitch.tv 2016 <a href="http://www.twitch.tv">www.twitch.tv</a>
			</p>
		</footer>
	</body>
</html>