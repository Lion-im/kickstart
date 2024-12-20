<?php 
	$connect = mysqli_connect("MySQL-8.2", "root", "", "kickstart");
	mysqli_query($connect, "DELETE FROM projects WHERE id='{$_GET["id"]}'");

	header("Location: add.php")
?>
