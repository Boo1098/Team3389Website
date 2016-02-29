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
			
				if(isset($_GET['file']) && $_GET['file'] !== ""){
					$path = $_GET['file'];
					$newpath = '';
					$track = explode('/', $path);
					echo '<p style="text-indent:50px;padding:5px;float:left;"><a href="?file=">Gallery</a> -> </p>';
					for($i=2;$i<count($track)-1;$i++){
						$newpath = $newpath.'/'.$track[$i];
						if($i-1 == count($track)-3) {
							echo '<p style="padding:5px;float:left;text-indent:0px;"><a href="#">'.$track[$i].'</a></p>';
						} else {
							echo '<p style="padding:5px;float:left;text-indent:0px"><a href="?file=resources/galleries'.$newpath.'/*">'.$track[$i].'</a> -> </p>';
						}
					}
					//echo '<p style="display:block;width:100%;clear:both;font-size:2em;text-align:center;"><a href="?file=">Return</a></p>';
					echo '<div style="clear:both"></div>';
					$files = glob($_GET['file']);
					if(filetype($files[2])=="dir") {
						for($i=0; $i<count($files);$i++) {
							$num = $files[$i];
							$filename=basename($num);
							$filename_wo_ = str_replace("_", " ", $filename);
							$filename_wo_ = str_replace("-", " ", $filename_wo_);
							echo '<p style="float:left;width:33.3333%;padding:10px 0px 10px 0px;display:block;text-indent:0px;text-align:center;"><a href="?file='.$num.'/*">'.$filename_wo_.'</a></p>';
						}
					} else {
						
						for($i =0; $i<count($files);$i++){
							$num = $files[$i];
							$filename=basename($num);
							$tn = str_replace($filename, "tn/tn_".$filename, $num);
							if($filename !== 'tn' && substr($filename, -3) !== "MP4") {
								echo '<a style="padding:10px;" href="'.$num.'" target="_blank" ><img style="height:112px;"src="'.$tn.'" alt="'.$filename.'" /></a>';
							}
							if(substr($filename,-3) == "MP4"){
								echo '<a style="padding:10px;position:relative;bottom:55px;" href="'.$num.'">'.$filename.'</a>';
							}
						}
					}
				} else {
					$files = glob("resources/galleries/*");
					for($i =0; $i<count($files);$i++){
						$num = $files[$i];
						if(basename($num) !== "videos"){
							echo '<p style="float:left;width:33.33333%;font-size:2em;display:block;text-indent:0px;text-align:center;"><a href="?file='.$num.'/*">'.substr($num,20).'</a></p>';
						}
					}
				}
			?>
			
			<div style="clear:both;"></div>
		</div>
	</div>
<?php include("includes/footer.php"); ?>
</html>