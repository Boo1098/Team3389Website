<!DOCTYPE html>
<?php 
$title = "Sponsors";
include("includes/head.php");
?>
	<div class="main-body-text" height="400" id="top">
		<h2 class="body-header font-effect-3d-float">2015 Sponsors</h2>
		<div id="about-us-content" height="200 "align="center">
			<?php
				$path = "resources/sponsors/new/*";
				$files = glob($path);
				for($i =0; $i<count($files);$i++){
					$num = $files[$i];
					$filename=basename($num);
					//$tn = str_replace($filename, "tn/tn_".$filename, $num);
					if($filename !== 'tn' && substr($filename, -3) !== "MP4") {
						echo '<a style="padding:10px;" href="'.$num.'" target="_blank" ><img style="max-height:200px;" class="sponsor-images" src="'.$num.'" alt="'.$filename.'" /></a>';
					}
					/*if(substr($filename,-3) == "MP4"){
						echo '<a style="padding:10px;position:relative;bottom:55px;" href="'.$num.'">'.$filename.'</a>';
					}*/
				}
			?>
		</div>
	</div>
<?php include("includes/footer.php"); ?>
</html>