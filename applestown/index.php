<?php
    include('db.php');

    $q = $connection->query("SELECT * FROM goods");
    $f = $connection->query("SELECT * FROM goods");

    include('header.php');

?>

<?php  
    if($_GET['page'] == ""){ 
        include('content.php');
        ?>

<div class="goods">
    <?php }
    else if($_GET['page'] == "mac" || $_GET['page'] == "iphone" || $_GET['page'] == "ipad" || $_GET['page'] == "ipod" || $_GET['page'] == "watch" || $_GET['page'] == "акс" || $_GET['page'] == "imac" || $_GET['page'] == "iph7" || $_GET['page'] == "iph6" || $_GET['page'] == "iph5" || $_GET['page'] == "iph4" || $_GET['page'] == "macpro" || $_GET['page'] == "macair" || $_GET['page'] == "pro" || $_GET['page'] == "mini" || $_GET['page'] == "ipro" || $_GET['page'] == "iair" || $_GET['page'] == "imini" || $_GET['page'] == "shuf" || $_GET['page'] == "nano" || $_GET['page'] == "муз" || $_GET['page'] == "cheh" || $_GET['page'] == "usb" || $_GET['page'] == "other"){

                include("type.php");
     }else{

        $g = $_GET['page'];
        // echo "$g";
        $good = $connection->query("SELECT * FROM goods WHERE name = '$g'");
            $row = $good->fetch_object();
            $name = $row->name;
            $des = $row->des;
            $type = $row->type;
            $price = $row->price;
            $url = $row->url;
            $charac = $row->charac;
        ?>

    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12 margin-top-30">
                    <div class="col-md-4">
                        <img src=<?php echo "$url"; ?> alt="">
                    </div>
                  <?php echo "<h1>$name</h1>"; ?>
                  <hr>
                  <?php echo "<h2>Цена: $price тг</h2>"; ?>
                  <br>
                  <h2>Описание</h2>
                    <?php echo "<h4>$des</h4>"; ?>
                    <br>
                <h4>Основные характеристики</h4>
                <?php echo "$charac"; ?>           
              </div>
            </div>
        </div>
    </div>

    <?php 

        }
    ?>
</div>
<?php 
include('footer.php');
 ?>