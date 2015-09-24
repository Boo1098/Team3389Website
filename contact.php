<!DOCTYPE html>
<?php include("includes/head.php");?>
	<div class="main-body-text hvr-underline-from-center" id="top">
		<h2 class="body-header font-effect-3d-float">Contact Us!</h2>
		<div id="about-us-content" class="dont-indent" align="center">
			<?php 
						
				include ("markdown.php"); 
				$Parsedown = new Parsedown();
						
				$f = fopen("Markdown/Contact.txt", "r");
						
				$markdown = fread($f, 9999999);
						
				//$tableHtml = strtok($markdown,'+++');			
						$markdown = strtok($markdown,'+++');
						
						$html = $Parsedown->text($markdown);
						
						
						
						
						echo $html;
			?>
		</div>
	</div>
<?php include("includes/footer.php"); ?>
</html>