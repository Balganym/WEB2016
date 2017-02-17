<?php

	include('db.php');

	$id = $_GET['id'];	
	$connection->query("DELETE FROM goods WHERE id=$id");

	header("Location:managing.php");
	
?>



