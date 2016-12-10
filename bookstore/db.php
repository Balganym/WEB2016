<?php
	$connection = new mysqli("localhost","admin","admin","store");

	if($connection->connect_error){
		echo "ERROR IN DB CONNECTION";
	}
?>