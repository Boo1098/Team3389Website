<!DOCTYPE html>
<?php 
$title = "Pictures";
include("includes/head.php");
?>
		<div class="main-body-text" id="top">
			<h2 class="body-header font-effect-3d-float">Pictures</h2>
			
			<br />
			<div id="about-us-content">
				<style>
					/* Prevents slides from flashing */
					#slides {
						display:none;
					}
				</style>
				<script type="text/javascript" src="css-pop.js"></script>
				<script src="http://code.jquery.com/jquery-latest.min.js"></script>
				<script src="slideshows/jquery.slides.js"></script>
				<style>
				
					#blanket {
					   background-color:#111;
					   opacity: 0.65;
					   *background:none;
					   position:absolute;
					   z-index: 9001;
					   top:0px;
					   left:0px;
					   width:100%;
					}

					.popUpDiv {
						position:absolute;
						/*background:url(pop-back.jpg) no-repeat;*/
						/*width:400px;*/
						/*height:400px;*/
						border:5px solid #000;
						z-index: 9002;
					}

					.popUpDiv a {position:relative; top:20px; left:20px}
				</style>
				
				<script>
					$(function(){
						$("#slides").slidesjs({
							width: 940,
							height: 528
						});
					});
				</script>
				
				<div id="slides">
					
				</div>
				<?php
					$times=1;
					$files = glob("/var/www/html/nathan/resources/pictures/12-13/*.{png,jpg,jpeg}", GLOB_BRACE);
					foreach ($files as $file) {
						if($times <= 2) {
							print " <div id=\"blanket\" style=\"display:none;\"></div>
									<div id=\"popUpDiv".$times."\" class=\"popUpDiv\" style=\"display:none;\">
										<a href=\"#\" onclick=\"popup('popUpDiv".$times."')\" ><img src=\"http://nathan.team3389.info/resources/pictures/".substr($file, 40)."\" /></a>
									</div>	
									<a href=\"#\" onclick=\"popup('popUpDiv".$times."')\"><img src=\"http://nathan.team3389.info/resources/pictures/".substr($file, 40)."\" /></a>";
						}
						$times=$times+1;
					}
				?>
			</div>
		</div>
	</body>
</div>
<?php include("includes/footer.php"); ?>
</html>