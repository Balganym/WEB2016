<?php

   $dbhost = "localhost";
   $dbuser = "admin";
   $dbpass = "admin";
   $dbname = "Apple_town";
   
   //Connect to MySQL Server
   mysql_connect($dbhost, $dbuser, $dbpass);
   
   //Select Database
   mysql_select_db($dbname) or die(mysql_error());


	$gen = $_GET['page'];
	$gen = mysql_real_escape_string($gen);

	//build query
   	$query = "SELECT * FROM goods WHERE type = '$gen'";

   	$qry_result = mysql_query($query) or die(mysql_error());


	while($rw = mysql_fetch_array($qry_result)) {
		$title = $rw['name'];
		$author = $rw['des'];
		$genre = $rw['type'];
		$price = $rw['price'];
		$url = $rw['url'];
?>
	<div class = "out">
		<img src=<?php echo "$url";?> alt="">
		<div class = "in">
			<?php echo "<p>Title: $title</p>"; ?>
			<?php echo "<p>Author: $author</p>"; ?>
			<?php echo "<p>Genre: $genre</p>"; ?>
			<?php echo "<p>Price: $price tg</p>"; ?>
		</div>
		<button class="cart" id ="cart">
			add to cart
		</button>
	</div>
<?php 
}
?>