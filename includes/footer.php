	<footer>
		<div id="footer-div">
		
			<table width="97%"> 
				<tr style="white-space:no-wrap"> 
					<td style="min-width:50%"id="footer-heading"><span class="hvr-pop">More links!</span></td>
					<td style="min-width:151px" class="hvr-grow" align="center" valign="center"><a href="https://twitter.com/FRCTeam3389" class="twitter-follow-button"  target="_blank" data-show-count="false">Follow @FRCTeam3389</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></td>
					<td style="min-width:106px" class="hvr-grow" align="center" valign="center"><script src="https://apis.google.com/js/platform.js"></script>
						<div class="g-ytsubscribe" data-channel="Robospectrum"></div>
					</td>
					<td style="min-width:34px" align="center" class="hvr-grow"><a href="//plus.google.com/103918810376285135334/posts?prsrc=3" rel="publisher"  target="_blank" style="text-decoration:none;"><img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/></a></td>				
					<td style="min-width:127px" align="center" class="hvr-grow"><div class="fb-like" data-href="https://www.facebook.com/Team3389" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div></td>
					
					<td style="min-width:82px" align="right" class="hvr-grow">
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
			
			<div style="background-color:#3A3A3A;">
					<p>
						<a href="http://usfirst.org">
							<img align="left" src="resources/first.png" style="float:left !important" alt="First"height="100px" width="auto" class="hvr-skew-backward">
						</a>

						<a href="http://tecfound.org">
							<img src="resources/tecfound.png" style="float:center !important" alt="Tec Foundation"height="100px" width="auto" class="hvr-bounce-in">
						</a>

						<a href="http://www.usfirst.org/roboticsprograms/frc">
							<img align="right" style="float:right !important" src="resources/frc.gif" alt="FIRST Robotics Competition"height="100px" width="auto" class="hvr-skew-forward">
						</a>
					</p>
				
					<br><br>
					<p><a href="admin.php" class="hvr-buzz">admins</a></p>
				
			</div>
		</div>
	</footer>