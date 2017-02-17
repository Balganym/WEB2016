<?php
	$connection = new mysqli("srv-pleskdb17.ps.kz:3306","apple_stown","moe31992377","applesto_Apples_town");

	if($connection->connect_error){
		echo "ERROR IN DB CONNECTION";
	}
?>

