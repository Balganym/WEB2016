<?php
	include('db.php');
	$q = $connection->query("SELECT * FROM goods");
	session_start();

	
	if($_SESSION['user']!=NULL){
?>

<html>
<head>
	<title>List</title>
	<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
	<script src="js/scr.js"></script>
</head>
<body class="listbody">

<h2 class = "listt">List of goods</h2>
		<div class="back">
			<a href="index.php">back</a>
		</div>
		<button class="add" id="but">
			add
		</button>
		<form class = "exit" action="exit.php" method = "POST">
		<input type="submit" value = "выйти">
	</form>
<div class="form1">
	<div class="form2">
		<table class="table">
			<thead>
				<tr>
					<th class = "id">ID</th>
					<th>Type</th>
					<th>Name</th>
					<th>Price</th>
					<th>Delete</th>
				</tr>
			</thead>
			<?php
			while($row = $q->fetch_object()){
				$id = $row->id;
				$type = $row->type;
				$name = $row->name;
				$price = $row->price;
			?>
			<tbody>
				<tr>
					<td class ="id"><?php echo "$id" ?></td>
					<?php echo "<td>$type</td>" ?>
					<?php echo "<td>$name</td>"?>
					<?php echo "<td>$price</td>" ?>
					<?php echo "<td class='delete'><a href='delete.php?id=$id'>DELETE</a></td>" ?> 
				</tr>
			</tbody>
			<?php
			}
			?>
		</table>
	</div>
</div>

 <!--       Modul window  -->

	<div class="win" id = "div1">
		 	<form action="admin.php" method = "POST" enctype="multipart/form-data">
	 			<h2>add</h2>
	 	
	 			<p>Type: <select name="type" id="tp">
					<option value="-----">-----</option>
					<option value= "mac">Mac</option>
					<option value= "iphone">iPhone</option>
					<option value= "ipad">iPad</option>
					<option value= "ipod">iPod</option>
					<option value= "watch">Watch</option>
					<option value= "акс">Акксессуары</option>
				</select> </p>
	 			<p>Subtype: <select name="subtype" id="sbt">
					<option value="-----">-----</option>
					<option value= "iph4">iPhone4</option>
					<option value= "iph5">iPhone5</option>
					<option value= "iph6">iPhone6</option>
					<option value= "iph7">iPhone7</option>
					<option value= "macpro">MacBook Pro</option>
					<option value= "macair">MacBook Air</option>
					<option value= "pro">Mac Pro</option>
					<option value= "imac">iMac</option>
					<option value= "mini">Mac mini</option>
					<option value= "ipad">iPad</option>
					<option value= "ipro">iPad Pro</option>
					<option value= "iAir">iPad Air</option>
					<option value= "imini">iPad mini</option>
					<option value= "ipod">iPod</option>
					<option value= "nano">iPod touch/nano</option>
					<option value= "shuf">iPod shuffle</option>
					<option value= "муз">Аудио и музыка</option>
					<option value= "cheh">Чехлы и сумки</option>
					<option value= "usb">Питание и кабели</option>
					<option value= "other">Другие</option>
				</select> </p>
				<br>
	 			<p><input type="text" name="name" placeholder = "Название товара"></p>
	 			<p><input style = "height: 100px;" type="text" name="des" placeholder = "Описание"></p>
	 			<p><input type="text" name="price" placeholder = "Цена"></p>
	 			<p><input style = "height: 150px;" type="text" name="charac" placeholder = "Характеристики (например: <li>цвет: черный</li>)"></p>
	 			<p><input type="file" name = "fileToUpload" ></p>
	 			<p><input type="submit" name = "sumbit" id = "but2" class="submit" value = "submit"></p>
 		</form>
 		<button class="close" id="close">
 			<img src="img/close.png" class ="cls" alt="">
 		</button>
	</div> 

	<?php 
		include("add.php");
	?>

</body>
</html>

<?php

	}else{

		header("Location:signin.php");
	}
?>