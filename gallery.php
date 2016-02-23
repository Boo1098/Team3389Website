<!DOCTYPE html>
<?php 
$title = "Sponsors";
include("includes/head.php");
?>
	<div class="main-body-text" height="400" id="top">
		<h2 class="body-header font-effect-3d-float">Gallery</h2>
		<div id="about-us-content" height="200 "align="center">
			<?php
				$files = glob("http://www.team3389.info/old_site/img2/galleries/2010-Chesapeake_Regional/tn/*.*");
				for ($i=0; $i<count($files); $i++)
				{
					$num = $files[$i];
					echo '<a href="'.'http://www.team3389.info/old_site/img2/galleries/2010-Chesapeake_Regional/'.substr($num,77).'"><img src="'.$num.'" alt="'.substr($num,77,-4).'" /></a>'."<br><br>";
					echo $num;
					echo substr($num,77);
				}
			?>
		</div>
	</div>
<?php include("includes/footer.php"); ?>
</html>