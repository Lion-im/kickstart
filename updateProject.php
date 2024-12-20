<?php 
	$connect = mysqli_connect("MySQL-8.2", "root", "", "kickstart");

	$id = $_POST["id"];
	$title = $_POST["title"];
	$text = $_POST["text"];
	$goal = $_POST["goal"];
	$img = $_POST["img"];

	mysqli_query($connect, "UPDATE projects SET
		title='{$title}',
		text='{$text}',
		goal='{$goal}',
		img='{$img}',
	 	WHERE id = '{$id}'");

	header("Location: add.php")
?>