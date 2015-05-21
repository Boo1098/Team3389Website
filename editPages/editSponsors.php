<!DOCTYPE html>
<?include '../login.php';?>
<?php
if(isset($_POST['field1'])) {
    $data = $_POST['field1'] . "\n";
    $ret = file_put_contents('../Markdown/Sponsors.txt', $data, LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   //die('');
}?>
<?php if($_SESSION['username']): ?>
<form action="editSponsors.php" method="POST">
    <textarea name="field1" rows="40" cols="150" style="resize:both"><?php endif;?><?php
	if ($_SESSION['username']) {
	include ("../markdown.php"); 
	$Parsedown = new Parsedown();
	
	$f = fopen("../Markdown/Sponsors.txt", "r");
	
	$markdown = fread($f, 9999999);
	
	echo $markdown;}
	?><?php if($_SESSION['username']): ?></textarea>
    <input type="submit" name="submit" value="Save Data">
</form><?php endif;?>
<p><a href="?logout=1">Logout</a></p><p><a href="../admin.php"><--- back</a></p>

