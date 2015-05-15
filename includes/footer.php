	<footer>
		<div id="footer-div">
		
			<table width="97%"> 
				<tr style="white-space:no-wrap;width:98%"> 
					<td id="footer-heading"><span class="hvr-pop">More links!</span></td>
					<td  class="hvr-grow link-row" width="100%"><a href="https://twitter.com/FRCTeam3389" class="twitter-follow-button"  target="_blank" data-show-count="false">Follow @FRCTeam3389</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					<script src="https://apis.google.com/js/platform.js"></script>
						<div class="g-ytsubscribe" data-channel="Robospectrum"></div>
					
					<a href="//plus.google.com/103918810376285135334/posts?prsrc=3" rel="publisher"  target="_blank" style="text-decoration:none;"><img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/></a>
					<div class="fb-like" data-href="https://www.facebook.com/Team3389" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
					
					
						<?php
						session_start();
						
						if (isset($_SESSION["theme"])) {
							if ($_SESSION["theme"] == "light") {
								echo "<a href=\"?dark=1\">Dark theme\n";							
							}
							if ($_SESSION["theme"] == "dark") {
								echo "<a href=\"?light=1\">Light theme\n";							
							}
						}
						?>
					</a>
					</td>
				</tr>
			</table>
			
			<div style="background-color:#3A3A3A;align:center;">
					<div style="width:100%;height:100px">
					<table width="98%">
					<tbody>
					<tr>
					<td>
						<a href="http://usfirst.org">
							<img align="left" src="resources/first.png" style="align:left" alt="First"height="100px" width="auto" class="hvr-skew-backward">
						</a>
					</td>
					<td valign="center">
						<a style="display:block; margin-left:auto; margin-right:auto"href="http://tecfound.org">

							<img src="resources/tecfound-big.png" style="display:block; margin-left:auto; margin-right:auto" alt="Tec Foundation"height="100px" width="auto" class="hvr-bounce-in">

						</a>
					</td>
					<td>
						<a href="http://www.usfirst.org/roboticsprograms/frc">
							<img align="right" style="align:right" src="resources/frc.gif" alt="FIRST Robotics Competition"height="100px" width="auto" class="hvr-skew-forward">
						</a>
					</td>
					</tr>
					</tbody>
					</table>
					</div>
					<p style="padding-top:10px;padding-left:5px;margin:0px;float:left;"align="left"><a style="margin:0px;" href="http://github.com/boo1098/nathan" class="hvr-buzz">Fork me on github!</a></p>
					<p style="padding-top:10px;padding-right:5px;margin:0px;"align="right"><a style="margin:0px;" href="admin.php" class="hvr-buzz">admins</a></p>
				
			</div>
		</div>
	</footer>
