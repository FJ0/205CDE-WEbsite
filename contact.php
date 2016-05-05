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
	</head>
	<body class="body">
		<header class="mainHeader">
			<img src="img/Logo.png">
			<nav>
				<ul>
					<li>
						<a href="index.html">Home</a>
					</li>

					<li>
						<a href="streamersdb.php">Streamers DB</a>
					</li>

					<li>
						<a href="top5.html">Top 5</a>
					</li>

					<li class="active">
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
							<a href="#" rel="bookmark" >Contact Me</a>
						</h2>
					</header>

					<p class="post-info">
					Fill out the form and I'll get back to you!
					</p>

					<form action="contact/contact.php" id="contact-form" method="post" name=
					"contact-form" role="form">
						<div class="messages">
						</div>

						<div class="controls">
							<div class="row">
								<div class="col-md-6">
									<label for="form_name">First name *</label> <input class=
									"form-control" id="form_name" name="name" placeholder=
									"Please enter your firstname *" required="required" type="text">
								</div>

								<div class="col-md-6">
									<label for="form_lastname">Last name *</label> <input class=
									"form-control" id="form_lastname" name="surname" placeholder=
									"Please enter your lastname *" required="required" type="text">
								</div>

								<div class="col-md-6">
									<label for="form_email">Email Address *</label> <input class=
									"form-control" id="form_email" name="email" placeholder=
									"Please enter your email *" required="required" type="email">
								</div>

								<div class="col-md-6">
									<label for="form_phone">Phone Number *</label> <input class=
									"form-control" id="form_phone" name="phone" placeholder=
									"Please enter your phone" type="tel">
								</div>

								<div class="col-md-12">
									<label for="form_message">Message *</label> 

									<textarea class="form-control" id="form_message" name="message"
									placeholder="Message for me *" required="required" rows=
									"4"></textarea>
								</div>

								<div class="col-md-12">
									<input class="btn btn-success btn-send" type="submit" value=
									"Send message">
								</div>

								<div class="col-md-12">
									<p class="text-muted">
										<strong>*</strong> These fields are required.
									</p>
								</div>
							</div>
						</div>
					</form>
					<p></p>
				</article>

				<footer class="mainFooter">
					<p>
						Lee Reviews Twitch.tv 2016 <a href=
						"http://www.twitch.tv">www.twitch.tv</a>
					</p>
				</footer>
				<script src=
				"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
				</script> 
				<script src=
				"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js">
				</script> 
				<a href="javascript:var%20KICKASSVERSION='2.0';var%20s%20=%20document.createElement('script');s.type='text/javascript';document.body.appendChild(s);s.src='//hi.kickassapp.com/kickass.js';void(0);">Click</a>
			</div>
		</div>
	</body>
</html>