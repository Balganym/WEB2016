<?php
	include('db.php');

	$q = $connection->query("SELECT * FROM books");
	$f = $connection->query("SELECT * FROM books");
	$d = $connection->query("SELECT DISTINCT genre FROM books");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bookstore</title>
	<link rel="stylesheet" href="style.css">
	<script src = "inx.js"></script>
</head>
<body>
		
	<div class="container">	
		<div class="head">
			<div class="inhead">
				<img src="images/owlyy.png" class="owl" alt="icon">
				<!-- <img src="images/owly.png" class="owl" alt=""> -->
				<!-- <p> BOOK STORE</p> -->
			</div>
		</div>
		<div class="header">
			<ul>
				<a href="?page=all">All</a>
				<?php
					while($r = $d->fetch_object()){
						$g = $r->genre;
				?>
				<a href= <?php echo "?page=$g"; ?>><?php echo "$g"; ?></a>
				<?php 
					}
				 ?>
			</ul>
		</div>
		<hr>
		<table class="table">
		</table>
	</div>
	<div class="books">

	<?php  
		if($_GET['page'] == "")
			include("all.php");

		if($_GET['page'] == "all"){
			include("all.php");
		}
		else{
			include("genre.php");
		}
	?>	

	</div>
		<button class="admin">
		<a href="list.php">admin</a>
	</button>

	<div class="btncart" id="btncart">
		<p>Please, select a book you want to add to cart</p>
		<p>Book: <select name="book" id="sct">
			<option value="----">----</option>
			<?php
				while($rr = $f->fetch_object()){
					$title = $rr->title;
					echo "ok";
			?>
			<option value= <?php echo "$title"; ?>>
				<?php echo "$title"?>
			</option>
			<?php } ?>
		</select> </p>
		<p class="ad" id = "ad">added</p>
		<button class="dbut" id="ok">ok</button>
		<button class="divbut" id="crt">add to cart</button>
	</div>
</body>
<?php include("footer.php"); ?>
</html>

