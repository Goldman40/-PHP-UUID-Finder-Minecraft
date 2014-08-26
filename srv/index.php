<?php 
 include('getUuid.php');
 
if ( $_GET['p'] == NULL ) { 
?>
<html>
<form action="index.php" method="GET">
	<input type="text" name="p"/>
	<input type="submit" value="Send"/>
</form>
 <?php
} else {
 echo '<br><br>Your Minecraft uuid is :';
	getUuid($_GET['p']);
 echo '<br><br><a href="index.php">Send another uuid</a>';
 }
 ?>
