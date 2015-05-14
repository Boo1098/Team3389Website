<!DOCTYPE html>
<?php include("includes/head.php");?>
	
	<body>
	
		<div class="main-body-text hvr-underline-from-center" id="top">
			<h2 class="body-header hvr-bounce-in">About us!</h2>
			
					 <img style="float:left;" src="resources/logo-small.png" alt="us" height="200px" width="relative" class="hvr-grow"></td><td class="body-text">

					<div id="about-us-content">
						<?php 
						
						include ("markdown.php"); 
						$Parsedown = new Parsedown();
						
						$f = fopen("about-us.txt", "r");
						
						$markdown = fread($f, 9999999);
						
						//$tableHtml = strtok($markdown,'+++');			
						$markdown = strtok($markdown,'+++');
						//$tableTwo = strtok('+++');
						//$markdowntwo= strtok('+++');
						
						//echo $tableHtml;
						//$htmltwo = $Parsedown->text($markdowntwo);
						$html = $Parsedown->text($markdown);
						
						
						
						
						echo $html;
						
						//echo "<td><tr><tr><td colspan=\"2\" class=\"body-text\">\n";
						
						fclose($f);
						
						//echo $tableTwo;
						//echo $markdowntwo;
						//echo $htmltwo;
						?>
					</div>

		</div>
	</body>
</div>
<?php include("includes/footer.php"); ?>
</html>
