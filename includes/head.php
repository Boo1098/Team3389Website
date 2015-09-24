<DOCTYPE! html>
<html>
	<head>
		<meta charset="UTF-8">
<?php
session_start();

if (!isset($_SESSION["theme"])) {
	$_SESSION["theme"] = "light";
}
if (isset($_GET["dark"])) {
	if ($_GET["dark"] == 1) {
		$_SESSION["theme"] = "dark";		
	}
}
if (isset($_GET["light"])) {
	if ($_GET["light"] = 1) {
		$_SESSION["theme"] = "light";		
	}
}

?>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	
	<title>Tec Tigers: Team 3389</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto&effect=3d-float' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="Stylesheets/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="Stylesheets/hover.css">
	<link rel="javascript" type="javascript" href="https://apis.google.com/js/platform.js">

	<style>
	<?php
	session_start();
	if (isset($_SESSION["theme"])) {
		if ($_SESSION["theme"] == "dark") {
			include('Stylesheets/dark.css');	
		}
		if ($_SESSION["theme"] == "light") {
			include('Stylesheets/light.css');
		}
	}
	
	?>
	</style>
	</head>
	<body>
<div id=wrapper style="margin-bottom:5px;min-height:82%;">
	<header>
		<table style="width:100%" id="header-table">
			<tr>
				<td width="172px" id="head-text"><a href="http://nathan.team3389.info" class="font-effect-3d-float"> &nbsp;TEC Tigers</a></td>
				<td width="77px" id="logo"><img src="resources/logo2-small.png" alt="logo" height="50px" width="50px" class="hvr-grow-rotate"></td>
				<td id="header-spacer"></td>
				<td class="header-links" align="right" style="padding-right:10px"><a  class="header-links hvr-grow" href="contact.php">Contact Us</a> | <a  class="header-links hvr-grow" href="Sponsors.php">Sponsors</a> | <a  class="header-links hvr-grow" href="history.php">History</a> | <a  class="header-links hvr-grow" href="mentors.php">Mentors</a></td></tr>
		</table>
	</header>
	
