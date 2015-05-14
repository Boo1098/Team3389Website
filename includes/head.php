<DOCTYPE! html>
<meta charset="UTF-8">
<div id=wrapper style="margin-bottom:5px;min-height:82%;">
	<head>
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
	<header>
		<table style="width:100%" id="header-table">
			<tr>
				<td id="head-text"><a href="http://nathan.team3389.info"> &nbsp;Tec Tigers</a></td>
				<td id="logo"><img src="resources/logo-small.png" alt="logo" height="50px" width="75px" class="hvr-grow-rotate"></td>
				<td id="header-spacer"></td>
				<td class="header-links"><a  class="header-links hvr-grow" href="contact.php">Contact Us</a></td>
				<td class="header-links"><a  class="header-links hvr-grow" href="Sponsors.php">Sponsors</a></td>
				<td class="header-links"><a  class="header-links hvr-grow" href="history.php">History</a></td>
				<td class="header-links"><a  class="header-links hvr-grow" href="##">link</a></td>
				<td class="header-links"><a  class="header-links hvr-grow" href="##">link</a></td>
				<td class="header-links"><a  class="header-links hvr-grow" href="##">link</a></td>
				<td class="header-links"><a  class="header-links hvr-grow" href="##">link</a></td>
				<td class="header-links"><a  class="header-links hvr-grow" href="##">link</a></td>
			</tr>
		</table>
	</header>
	</head>