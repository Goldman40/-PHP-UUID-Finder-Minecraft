<?php 
 include('functions/getName.php');
 
if ( $_GET['u'] == NULL ) { 
?>
<html>
<form action="name.php" method="GET">
	<input type="text" name="u"/>
	<input type="submit" value="Send"/>
</form>
 <?php
} else {
 echo '<br><br>Your Minecraft username is : ';
	getName($_GET['u']);
 echo '<br><br><a href="name.php">Send another name</a>';
 }
 ?>
