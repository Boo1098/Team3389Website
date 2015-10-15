<!DOCTYPE html>
<?php 
$title = "Pictures";
include("../includes/head.php");
?>
		<style>
			#slides {
				display:none;
			}
		</style>
		<script src="jquery.slides.min.js"></script>
		
		<div class="main-body-text" id="top">
			<h2 class="body-header font-effect-3d-float">Pictures</h2>
			
			<br />
			<div id="about-us-content">
				<script>
					$(function() {
						$("#slides").slidesjs({
							width:500,
							height:500
						})
					})
				</script>
				
				<div id="slides">
					<img src="https://placeholdit.imgix.net/~text?txtsize=28&bg=0099ff&txtclr=ffffff&txt=300%C3%97300&w=300&h=300&fm=png">
					<img src="https://placeholdit.imgix.net/~text?txtsize=28&bg=ff99ff&txtclr=ffffff&txt=300%C3%97300&w=300&h=300&fm=png">
					<img src="https://placeholdit.imgix.net/~text?txtsize=28&bg=0f99ff&txtclr=ffffff&txt=300%C3%97300&w=300&h=300&fm=png">
					<img src="https://placeholdit.imgix.net/~text?txtsize=28&bg=00ffff&txtclr=ffffff&txt=300%C3%97300&w=300&h=300&fm=png">
					<img src="https://placeholdit.imgix.net/~text?txtsize=28&bg=009fff&txtclr=ffffff&txt=300%C3%97300&w=300&h=300&fm=png">
				</div>
			</div>
		</div>
	</body>
</div>
<?php include("includes/footer.php"); ?>
</html>