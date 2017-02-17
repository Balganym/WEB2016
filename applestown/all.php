<?php
	include("db.php");
	while($row = $q->fetch_object()){
		$name = $row->name;
		$des = $row->des;
		$type = $row->type;
		$price = $row->price;
		$url = $row->url;
?>
	<div class = "out">
		<div class="imgs">
			<img src=<?php echo "$url"; ?> alt="img">
		</div>
		<div class = "in">
	 <a href=""><?php echo "<p>$name</p>"; ?></a>
			<!-- <a href="<?php echo "?page=$title"; ?>"><?php echo "<p>$name</p>"; ?></a> -->
			<?php echo "<p>Цена: $price tg</p>"; ?>
		</div>
	</div>
<?php 
}
?>