<html>
	<head>
		<meta charset="UTF-8">
		<meta name="robots" content="noindex">
		<meta name="googlebot" content="noindex">
		<title><?php echo $title;?> | Tec Tigers: Team 3389</title>
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
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Roboto&effect=3d-float' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="Stylesheets/stylesheet.css" />
	<link rel="stylesheet" type="text/css" href="Stylesheets/hover.css" />
	<script src="https://apis.google.com/js/platform.js"></script>
	<link rel="stylesheet" type="text/css" href="Stylesheets/light.css" />
	<?php
	session_start();
	/*if (isset($_SESSION["theme"])) {
		if ($_SESSION["theme"] == "dark") {
			include('/Stylesheets/dark.css');	
		}
		if ($_SESSION["theme"] == "light") {}
			include('/Stylesheets/light.css');
		}
	}*/
	
	?>
	<?php $useragent=$_SERVER['HTTP_USER_AGENT'];
		if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a 	wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
		echo ('<link rel="stylesheet" type="text/css" href="Stylesheets/stylesheet-mobile.css">');
	?>
	</head>
	<body>
	<?php include('/includes/analytics.php'); ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<script src="/includes/analytics.js"></script>
	<!--<script src="/includes/jquery-2.1.4.min.js"></script>
	<script src="/includes/doubletaptogo.min.js"></script>-->

	<header>
		<table style="width:100%" id="header-table">
			<tr>
				<td id="logo"><a href="http://www.team3389.info" class="font-effect-3d-float"><img src="resources/tec_logo_straight.svg" alt="logo" height="50"></a></td>
				<td class="header-links" style="text-align:right">
					<nav id="nav">
					    <a href="#nav" title="Show navigation"><i class="material-icons md-big md-light">reorder</i></a>
						<a href="#" title="Hide navigation"><i class="material-icons md-big md-light md-inactive">reorder</i></a>
						<ul id="main-header-links">
							<li style="width:142px"><a  class="header-links hvr-grow" aria-haspopup="true" href="index.php">About Us &#9660;</a>
								<ul id="about-dropdown">
									<li><a class="" href="community.php">Community</a></li>
									<li><a class="" href="about-frc.php">FRC</a></li>
									<li><a class="" href="about-ftc.php">FTC</a></li>
									<li><a class="" href="about-vex.php">VEX</a></li>
									<li><a class="" href="gallery.php">Gallery</a></li>
									<li><a class="" href="contact.php">Contact Us</a><li> 
								</ul>
							</li><li style="width:120px;"><a  class="header-links hvr-grow" aria-haspopup="true" href="#">History &#9660;</a>
								<ul id="history-dropdown">
									<li style="text-align:left;width:125px;">
										<a class="" href="#FRC" style="text-align:left">FRC</a>
										<ul style="position:relative;border:none;padding:0px;top:0px;text-indent:30px" id="FRC">
											<li><a href="history15.php">2015-16</a></li>
											<li><a href="history14.php">2014-15</a></li>
											<li><a href="history13.php">2013-14</a></li>
											<li><a href="history12.php">2012-13</a></li>
											<li><a href="history11.php">2011-12</a></li>
											<li><a href="history10.php">2010-11</a></li>
											<li><a href="history9.php">2009-10</a></li>
										</ul>
									</li>
									<li style="text-align:left;width:125px;">
										<a class="" href="#FTC" style="text-align:left">FTC</a>
										<ul style="position:relative;border:none;padding:0px;top:0px;text-indent:30px;" id="FTC">
											<li><a href="ftc-history15.php">2015-16</a></li>
										</ul>										
									</li>
									<!-- No History yet :P 
									
									<li><a class="hvr-grow" href="#">FTC</a></li>
									<li><a class="hvr-grow" href="#">Vex</a></li>
									
									-->
								</ul>
							</li><li style="width:115px"><a  class="header-links hvr-grow" href="Sponsors.php">Sponsors</a>
							<!-- I don't feel like writing this right now :p1
							
							</li><li style="width:100px"><a  class="header-links hvr-grow" href="mentors.php">Mentors</a></li>
							
							-->
						</ul>
					</nav>
				</td></tr>
		</table>
	</header>
	<div id=wrapper style="margin-bottom:5px;min-height:50%;max-width:1920px;margin:auto;">
