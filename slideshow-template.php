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
					<?php

						   $files = glob("http://nathan.team3389.info/resources/12-13/*.*");

						  for ($i=1; $i<count($files); $i++)

						{

						$image = $files[$i];
						$supported_file = array(
							'gif',
							'jpg',
							'jpeg',
							'png'
						);

						$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
						if (in_array($ext, $supported_file)) {
							print $image ."<br />";
							echo '<img src="'.$image .'" alt="Random image" />';
						} else {
							continue;
						 }

						}

					?>
				</div>
			</div>
		</div>
	</body>
</div>
<?php include("includes/footer.php"); ?>
</html>