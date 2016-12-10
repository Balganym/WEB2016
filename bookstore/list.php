<?php
	include('db.php');

	$q = $connection->query("SELECT * FROM books");
?>

<html>
<head>
	<title>List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="scr.js"></script>
</head>
<body class="listbody">
	<h2 class = "listt">List of books</h2>
<div class="form1">
	<div class="form2">
		<table class="table">
			<thead>
				<tr>
					<th class = "id">ID</th>
					<th>Title</th>
					<th>Author</th>
					<th>Genre</th>
					<th>Price</th>
					<th>Delete</th>
				</tr>
			</thead>
			<?php
			while($row = $q->fetch_object()){
				$id = $row->id;
				$title = $row->title;
				$author = $row->author;
				$genre = $row->genre;
				$price = $row->price;
			?>
			<tbody>
				<tr>
					<td class ="id"><?php echo "$id" ?></td>
					<?php echo "<td>$title</td>" ?>
					<?php echo "<td>$author</td>"?>
					<?php echo "<td>$genre</td>" ?>
					<?php echo "<td>$price</td>" ?>
					<?php echo "<td class='delete'><a href='delete.php?id=$id'>DELETE</a></td>" ?> 
				</tr>
			</tbody>
			<?php
			}
			?>
		</table>
		<div class="back">
			<a href="index.php">back</a>
		</div>
		<button class="add" id="but">
			add
		</button>
	</div>
</div>

<!--       Modul window  -->

	<div class="win" id = "div1">
		 	<form action="list.php" method = "POST" enctype="multipart/form-data">
	 			<h2>add</h2>
	 			<p><input type="text" name="title" placeholder = "Title"></p>
	 			<p><input type="text" name="author" placeholder = "Author"></p>
	 			<p><input type="text" name="genre" placeholder = "Genre"></p>
	 			<p><input type="text" name="price" placeholder = "Price"></p>
	 			<p><input type="file" name = "fileToUpload" ></p>
	 			<p><input type="submit" name = "sumbit" id = "but2" class="submit" value = "submit"></p>
 		</form>
 		<button class="close" id="close">
 			<img src="images/close.png" class ="cls" alt="">
 		</button>
	</div>

	<?php 
		include("add.php");
	?>

</body>
</html>