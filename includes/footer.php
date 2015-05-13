	<footer>
<?php
// Start the session
session_start();

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
		<div id="footer-div">
		
			<table width="97%"> 
				<tr> 
					<td width="50%"id="footer-heading"><span class="hvr-pop">More links!</span></td>
					<td width="20.5%" class="hvr-grow" align="center" valign="center"><a href="https://twitter.com/FRCTeam3389" class="twitter-follow-button" data-show-count="false">Follow @FRCTeam3389</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></td>
					<td width="20.5%" class="hvr-grow" align="center" valign="center"><script src="https://apis.google.com/js/platform.js"></script>
						<div class="g-ytsubscribe" data-channel="Robospectrum"></div>
					</td>
					<td width="20.5%" align="center" class="hvr-grow"><a href="//plus.google.com/u/0/108991739010079990924?prsrc=3" rel="publisher" target="_top" style="text-decoration:none;"><img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/></a></td>				
					<td width="20.5%" align="center" class="hvr-grow"><div class="fb-like" data-href="https://www.facebook.com/Team3389" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div></td>
					
					<td width="20.5%" align="right" class="hvr-grow">
						<?php
						session_start();
						
						if (isset($_SESSION["theme"])) {
							if ($_SESSION["theme"] == "light") {
								echo "<a href=\"?dark=1\">Dark theme\n";							
							}
							if ($_SESSION["theme"] == "dark") {
								echo "<a href=\"?light=1\">light theme\n";							
							}
						}
						?>
					</a></td>
				</tr>
			</table>
			
			<table style="margin-top:20px;width:98%;table-layout:fixed">
				<tr style="height:10%">
					<td  align="left" style="width:10%" valign="left">
						<a href="http://usfirst.org">
							<img align="left" src="resources/first.png" alt="First"height="100px" width="auto"class="hvr-skew-backward">
						</a>
					</td>
					
					<td align="center" style="width:10%" valign="center">
						<a href="http://tecfound.org">
							<img src="resources/tecfound.png" alt="Tec Foundation"height="100px" width="auto"class="hvr-bounce-in">
						</a>
					</td>
					
					<td align="right" style="width:10%" valign="right">
						<a href="http://www.usfirst.org/roboticsprograms/frc">
							<img align="right"src="resources/frc.gif" alt="FIRST Robotics Competition"height="100px" width="auto" class="hvr-skew-forward">
						</a>
					</td>
				</tr>
				
				<tr> 
					<td style="padding-right:10px" colspan="3" align="right" valign="right"><a href="admin.php" class="hvr-buzz">admins</a></td>
				</tr>
			</table>
		</div>
	</footer>