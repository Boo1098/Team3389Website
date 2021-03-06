<!DOCTYPE html>
<?php 
$title = "Home";
include("includes/head.php");
?>
	<!--
	
	
	$files = glob("images/*.*");
	for ($i=0; $i<count($files); $i++)
	{
	    $num = $files[$i];
	    echo '<img src="'.$num.'" alt="random image" />'."<br><br>";
	}
	
	
	*/-->
		<div class="main-body-text" id="top">
			<div id="about-us-content">
				<div id="image_center" style="margin:auto;max-width:750px">
					<!--<img src="resources/TeamPic2016.jpg" id="full_width_mobile" alt="us" style="width:100%" />--><iframe style="width:100%;height:500px" src="https://www.youtube.com/embed/Fptwhkm1zzA" frameborder="0" allowfullscreen></iframe>
				</div>
				
				
				<div class="text">
					<img src="resources/tec_logo.svg" alt="2016 Team Picture" style="float:right; max-height:200px;" class="full_mobile" />
					<p>We are <a href="http://www.firstinspire.org/"><em>FIRST</em><sup>&reg;</sup></a> (For Inspiration and Recognition of Science and Technology) robotics team number 3389 and our team name is TEC Tigers.
						We are located at Parkside High School - CTE, Wicomico County, Salisbury MD 21804.</p>

					<p>Our team is comprised of high school students from schools including Parkside, Wicomico (Wi-Hi), James M Bennett and Mardela high schools.
						We accept students from any school in the area in the high school age range (14-18).
						The team is mentored by teaching and technology professionals from the Wicomico County area.
						TEC Tigers is one of thousands of teams that are part of the First Robotics Competition (FRC).</p>

					<p>We are the Wicomico County TEC Hub, part of TEC Foundation, which is a non-profit organization dedicated to growing hands-on Science,
						Technology, Engineering, and Mathematics (STEM) educational programs on the Eastern Shore of Maryland and Virginia.
						You can check out their website <a href="http://www.tec-hub.org/">here</a>.</p>

					<p>Every year we build a robot according to the year`s game.
						Check out the video from the 2015 competition game called <a href="https://www.youtube.com/watch?v=W6UYFKNGHJ8">Recycle Rush</a>.
						We have only six weeks to design, prototype, build and test a robot to compete in some or all aspects of the annual game.
						Coming up with funding to help us with entry fees, parts and travel expenses is never easy as the season can cost anywhere from $13,000
						to $30,000 depending on travel expenses and if we qualify for the Championships, so please give our generous sponsors some love
						by visiting our <a href="Sponsors.php">sponsors page</a> and checking out their services.
						After our 6 week build period we compete against over 60 other teams at the Chesapeake Regional in Baltimore, MD.
						We have finished our third year and are beginning our fourth season.
						For more about our team take a look at our <a href="history14.php">history page</a>.</p>

					<p>We welcome any and all support we are offered. We are always in need of money, tools, raw materials, and even extra hands and expertise!
						We are always looking to recruit more members, mentors, &amp; sponsors.
						If you are interested in joining or sponsoring the team or just want more information please contact us at 
						<a href="#">jmil<span class="dummy">elfa</span>es@wcbo<span class="dummy">cake</span>e.com</a> or call us at 410-677-5143.</p>
				</div>

				<div id="program_select">
					<div id="vex_select">
						<h2><a href="about-vex.php"><img src="http://www.team3389.info/resources/VEX-icon-white.png" alt="VEX" /></a></h2>
						<div class="program-text">
							<p>Easy to manage small robot with a select group of parts making everything easy to put together.</p>
						</div>
						<p class="more_info_button"><a href="about-vex.php">Learn More</a></p>
					</div><!--
					
				--><div id="ftc_select">
						<h2><a href="about-ftc.php"><img src="http://team3389.info/resources/FIRST/Programs/Typography/White/FIRSTTech_Type_White.png" alt="FIRST Tech challenge" /></a></h2>
						<div class="program-text">
							<p>The newest addition to team3389, FIRST<sup>&reg;</sup> Tech challenge focuses on the tech side requiring a smaller robot to do a lot more tasks.</p>
						</div>
						<p class="more_info_button"><a href="about-ftc.php">Learn More</a></p>
					</div><!--
					
				--><div id="frc_select">
						<h2><a href="about-frc.php"><img src="http://team3389.info/resources/FIRST/Programs/Typography/White/FIRSTRobotics_Type_White.png" alt="FIRST Robotics Competition" /></a></h2>
						<div class="program-text">
							<p>Big robot that needs lots of teamwork and dedication with only a 6 week period to work on it.</p>
						</div>
						<p class="more_info_button"><a href="about-frc.php">Learn More</a></p>
					</div>
				</div>
			</div>
		</div>
<?php include("includes/footer.php"); ?>
</html>
