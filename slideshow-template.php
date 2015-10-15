<!DOCTYPE html>
<?php 
$title = "Pictures";
include("../includes/head.php");
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
				<script src="jquery.slides.min.js"></script>

				<script>
					$(function(){
						$("#slides").slidesjs({
							width: 940,
							height: 528
						});
					});
				</script>
			
				<div id="slides">
					<img src="http://placehold.it/940x528">
					<img src="http://placehold.it/940x528">
					<img src="http://placehold.it/940x528">
					<img src="http://placehold.it/940x528">
					<img src="http://placehold.it/940x528">
				</div>
			</div>
		</div>
	</body>
</div>
<?php include("includes/footer.php"); ?>
</html>