<!DOCTYPE html>
<?php 
$title = "Gallery";
include("includes/head.php");
?>
	<style>
		#about-us-content img {
			margin:10px;
		}
	</style>
	<div class="main-body-text" height="400" id="top">
		<h2 class="body-header font-effect-3d-float">Gallery</h2>
		<div id="about-us-content" height="200 "align="center">
			<?php
			
				if($_GET['file'] !== ""){
				$files = glob("../../team3389.info/old_site/img2/galleries/2010-Chesapeake_Regional/tn/*.*");
					for ($i=0; $i<count($files); $i++)
					{
						$num = $files[$i];
						echo '<a href="'.'http://www.team3389.info/old_site/img2/galleries/2010-Chesapeake_Regional/'.substr($num,75).'"><img src="'.'http://'.substr($num,6).'" alt="'.substr($num,75,-4).'" style="float:left;" /></a>';				
					}
				} else {
					$files = glob("../../team3389.info/old_site/img2/galleries/*");
					for($i =0; $i<count($files);$i++){
						$num = $files[$i];
						echo $num;
					}
				}
			?>
			
			<div style="clear:both;"></div>
		</div>
	</div>
<?php include("includes/footer.php"); ?>
</html>