<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
include("includes/head.php");
include("tests/encryption/login.php");

?>

	<body>
	
		<div class="main-body-text hvr-underline-from-center" id="top">
			<h2 class="body-header hvr-bounce-in">Admin Login!</h2>
			
						<?php if($_SESSION['username']): ?>
						<p style="color:white;font-size:2em;">You are logged in as <b><?echo $_SESSION['username'];?></b></p>
						
						<p><a class="hvr-grow" style="font-size:1.2em" href="editPages/editAbout.php">Edit About Page</a></p>
						<p><a class="hvr-grow" style="font-size:1.2em" href="editPages/editContact.php">Edit Contact Us Page</a></p>
						<p><a class="hvr-grow" style="font-size:1.2em" href="editPages/editSponsors.php">Edit Sponsors Page</a></p>
						<p><a class="hvr-grow" style="font-size:1.2em" href="editPages/editHistory.php">Edit History Page</a></p>
						
						<p><a align="right" class="hvr-grow" href="?logout=1">Logout</a></p>
						

						
						<?php endif; ?>	
						
						<?php if(!$_SESSION['username']): ?>
						<form name="login" action="" method="post">
						<p class="body-text"style="text-indent:0px;font-size:150%;">
						
						Username: <input type="text" class="login" name="username"><br>
						Password: &nbsp;<input class="login" type="password" name="password">
						
						<input class="button" type="submit" name="submit" method="_self" value="Enter"></p>
						</form>
						<?php endif; ?>	
		</div>
		
		
	
	</body>
</div>
<?php include("includes/footer.php"); ?>
</html>