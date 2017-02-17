<div id="portfolio" class="bottom-border-shadow">
    <div class="container bottom-border">
        <div class="row padding-top-40">
            
<?php

   $dbhost = "srv-pleskdb17.ps.kz:3306";
   $dbuser = "apple_stown";
   $dbpass = "moe31992377";
   $dbname = "applesto_Apples_town";
   
   mysql_connect($dbhost, $dbuser, $dbpass);
 
   mysql_select_db($dbname) or die(mysql_error());

	include('db.php');


	$gen = $_GET['page'];
	$gen = mysql_real_escape_string($gen);

	//build query
   	$query = "SELECT * FROM goods WHERE type = '$gen' OR subtype = '$gen'";


   	$qry_result = mysql_query($query) or die(mysql_error());

$ok = False;

while($rw = mysql_fetch_array($qry_result)) {

		$name = $rw['name'];
		$des = $rw['des'];
		$type = $rw['type'];
		$price = $rw['price'];
		$url = $rw['url'];
    $ok = True;
?>

		   <div class="flexx">
				  <a href="<?php echo "?page=$name"; ?>">
					  <div class="flexx-item">
						<img alt="image" src=<?php echo "$url";?>>
						<?php echo "<h3>$name</h3>"?>
					  </div>
				  </a>
			</div>
		
<?php 
}

?>
			
        </div>
    </div>
</div>
<?php  if($ok == False){
  ?>
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12 margin-top-30">
                  <h3>Пока нет товаров этой категории</h3>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>