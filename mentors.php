
<!DOCTYPE html>
<?php include("includes/head.php");?>
	
	<body>
	

						<?php 
						
						include ("markdown.php"); 
						$Parsedown = new Parsedown();
						
						$f = fopen("Markdown/mentors.txt", "r");
						
						$markdown = fread($f, 9999999);
						
						//$tableHtml = strtok($markdown,'+++');			
						$markdown = strtok($markdown,'+++');
						
						$html = $Parsedown->text($markdown);
						
						
						
						
						echo $html;
						?>

	</body>
</div>
<?php include("includes/footer.php"); ?>
</html>
