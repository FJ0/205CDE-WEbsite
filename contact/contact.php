<?php


$from = 'Contact form <shenton9916@gmail.com>';
$sendTo = 'Contact form <shenton99@hotmaill.com>';
$subject = 'New message from contact form';
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message');
$okMessage = 'Contact form succesfully submitted. Thank you for your interest in my Twitch review site!';
$errorMessage = 'There was an error while submitting the form. Please check your inputs and try again.';

try
{
    $emailText = "You have new message from contact form\n=============================\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    mail($sendTo, $subject, $emailText, "From: " . $from);

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
else {
    echo $responseArray['message'];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<h2>
			<meta http-equiv="refresh" content="0; URL='../index.html'" />
		</h2>
	</body>
</html>