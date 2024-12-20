<?php 
	$connect = mysqli_connect("MySQL-8.2", "root", "", "kickstart");
	$query = mysqli_query($connect, "SELECT * FROM projects WHERE id='{$_GET["id"]}'");

	$stroka = $query -> fetch_assoc();
	$donat = $stroka["donated"] + 10;
	echo $donat;
	mysqli_query($connect, "UPDATE projects SET donated='" . $donat . " ' WHERE id='{$_GET["id"]}' ");
	header("Location: index.php");

?>