<?php

	include('db.php');

	$id = $_GET['id'];
	$url = $_GET['url'];
	
	$connection->query("DELETE FROM goods WHERE id=$id");

	unlink($url);
	header("Location:admin.php");
	
?>



