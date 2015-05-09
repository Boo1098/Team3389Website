<!DOCTYPE html>
<?php include("includes/head.php"); ?>
	
	<body>
	
		<div class="main-body-text hvr-underline-from-center" id="top">
			<h2 class="body-header hvr-bounce-in">Admin Login!</h2>
			
			<table id="about-us-content">
				<tr>
					<td><img src="resources/logo.png" alt="us" height="200px" width="relative" class="hvr-grow">
					</td>
					<td>
						<form action="logged_in.php" method="post">
						<p class="body-text"style="text-indent:0px;font-size:150%;">Username: <input type="text" class="login" name="username"><br>
						Password: &nbsp;<input class="login" type="password" name="password"><br>
						<input class="button" type="button" method="_self" value="Enter"></p>
						</form>
					</td>
				</tr>
			</table>
		</div>
		
		
	
	</body>
</div>
<?php include("includes/footer.php"); ?>
</html>