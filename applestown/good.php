<?php 
	while($gs = mysql_fetch_array($good)) {
		$name = $gs['name'];
		$des = $gs['des'];
		$type = $gs['type'];
		$price = $gs['price'];
		$url = $gs['url'];
 ?>

	<div class = "col-md-12">
		<div class="imgs">
			<img src=<?php echo "$url"; ?> alt="">
		</div>
		
		<div class = "in">
			<a href="<?php echo "?page=$title"; ?>"><?php echo "<p>$name</p>"; ?></a>
			<?php echo "<p>Описание: $des</p>"; ?>
			<?php echo "<p>Цена: $price tg</p>"; ?>
			<?php echo "<p>Цена: $price tg</p>"; ?>
		</div>
	</div>

