<?php

	include('db.php');

	$id = $_GET['id'];
	$url = $_GET['url'];
	
	$connection->query("DELETE FROM books WHERE id=$id");

	unlink($url);
	header("Location:list.php");
	
?>



