<!DOCTYPE html>
	<head>
		<title>404: You have been forsaken | Team 33389: TEC Tigers</title>
		
		<link href='https://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		<img src="http://www.team3389.info/errorpages/tec_logo-compressed.jpg" alt="TEC Tigers" height="100" /><br /><br />
		<h1 style="font-family:'Pinyon Script', cursive, sans-serif;font-size: 5em;display:inline"><span style="font-family: Calibri, sans-serif;">Error:</span> 404</h1>
		<h2 style="display:inline;padding-left:20px;">We must have changed something :(</h2>
		<p style="font-size:1em;">We have been making lots of changes and you may have been linked to an old page. If you feel there should be a page please email the admin at na<span style="display:none">ajksldf</span>thansd1098@gm<span style="display:none">assdklfj.com</span>ail.com</p>
		<h3 style="font-size:2em;"><a href="http://www.team3389.info/">Head back to our home page</a></h3>
	<?php
		// The message
		$message = "Someone got a 404: \r\n";

		// In case any of our lines are larger than 70 characters, we should use wordwrap()
		$message = wordwrap($message, 70, "\r\n");

		// Send
		if ()mail('nathansd1098@gmail.com', '404', $message)){
			echo 'hi';
		}
	?>
	</body>
</html>