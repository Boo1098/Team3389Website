
<!DOCTYPE html>
<?php include("includes/head.php");?>
	
	<body>
	

						<?php 
						

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);


						include ("markdown.php"); 
						$Parsedown = new Parsedown();
						
						$f = fopen("Markdown/mentors.txt", "r");
						
						$markdown = fread($f, 9999999);
						
						//$tableHtml = strtok($markdown,'+++');			
						
						
						$html = $Parsedown->text($markdown);
						
						
						
						
						echo $html;
						?>

	</body>
</div>
<?php include("includes/footer.php"); ?>
</html>
