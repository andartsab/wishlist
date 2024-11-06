<?php
	$connect = mysqli_connect("MySQL-8.2", "root", "", "wishlist");
	$query = mysqli_query($connect, "SELECT * FROM wishlist ORDER BY id DESC");

	mysqli_query($connect, "INSERT INTO wishlist (img, name, price) VALUES ('{$_GET["img"]}','{$_GET["name"]}','{$_GET["price"]}' )");
	header("Location: https://wishlist.local/index.php");
	exit();
?>