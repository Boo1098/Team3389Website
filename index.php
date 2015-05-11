<!DOCTYPE html>
<?php include("includes/head.php");?>
	
	<body>
	
		<div class="main-body-text hvr-underline-from-center" id="top">
			<h2 class="body-header hvr-bounce-in">About us!</h2>
			
			<table id="about-us-content">
				<tr>
					<td><img src="resources/logo-small.png" alt="us" height="200px" width="relative" class="hvr-grow">
					</td>
					<td class="body-text">
						<?php 
						 include ("markdown.php"); 
						$Parsedown = new Parsedown();
						
						$f = fopen("about-us.txt", "r");
						
						$markdown = fread($f, 9999999);
						$markdown = strtok($markdown, '+++');
						$markdowntwo = strtok('+++');
						
						$html = $Parsedown->text($markdown);
						$htmltwo = $Parsedown->text($markdowntwo);
						
						
						echo $html;
						
						fclose($f);
						
						echo text("</td></tr><tr><td colspan=\"2\" class=\"body-text\">");
						echo $markdowntwo;
						echo $htmltwo;
						?>

					</td>
				</tr>
			</table>
		</div>
	</body>
</div>
<?php include("includes/footer.php"); ?>
</html>