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

				<script>
					$(function(){
						$("#slides").slidesjs({
							width: 940,
							height: 528
						});
					});
				</script>
				
				<div id="slides">
					src=\"http://nathan.team3389.info/resources/pictures/".substr($file, 40)."\"
				</div>
				<?php
					$times=1;
					$files = glob("/var/www/html/nathan/resources/pictures/12-13/*.{png,jpg,jpeg}", GLOB_BRACE);
					foreach ($files as $file) {
						print " <div id=\"popUpDiv3\" class=\"popUpDiv".$times."\" style=\"display:none;\">
									<a href=\"#\" onclick=\"popup('popUpDiv".$times."')\" >Click to Close CSS Pop Up3</a>
								</div>	
								<a href=\"#\" onclick=\"popup('popUpDiv".$times."')\"><img src=\"pop-back.jpg\" /></a>";
						$times=$times+1;
					}
				?>
			</div>
		</div>
	</body>
</div>
<?php include("includes/footer.php"); ?>
</html>