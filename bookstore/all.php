<?php
	include("db.php");
	while($row = $q->fetch_object()){
		$title = $row->title;
		$author = $row->author;
		$genre = $row->genre;
		$price = $row->price;
		$url = $row->url;
?>
	<div class = "out">
		<img src=<?php echo "$url"; ?> alt="">
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