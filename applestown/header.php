<!-- === BEGIN HEADER === --> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>"Apple's town" Интернет магазин мобильных телефонов и аксессуаров</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link href="favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" href="css/boots.css" rel="stylesheet">
        <link rel="stylesheet" href="css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="css/custom.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                        <div class="col-sm-6 padding-vert-5">
                            <strong>Phone:</strong>&nbsp;8 747 320 11 00
                        </div>
                        <div class="col-sm-6 text-right padding-vert-5">
                            <strong>Email:</strong>&nbsp;baikenov_kk@mail.ru
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php" title="">
                                <img src="assets/img/loggo.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="index.php" class="fa-home active">Home</a>
                                    </li>
                                    <li>
                                        <span><?php $g = "mac"?>
                                            <a href= <?php echo "?page=$g"; ?>>
                                                <p style="color: white;">Mac</p>
                                            </a></span>
                                        <ul>
                                            <li>
                                                <?php $g = "macpro"?>
                                            <a href= <?php echo "?page=$g"; ?>>MacBook Pro
                                            </a>
                                            </li>
                                            <li>
                                                <?php $g = "macair"?>
                                            <a href= <?php echo "?page=$g"; ?>>
                                                MacBook Air</a>
                                            </li>
                                            <li>
                                                <?php $g = "imac"?>
                                                    <a href= <?php echo "?page=$g"; ?>>
                                                    iMac</a>
                                            </li>
                                            <li>
                                                <?php $g = "pro"?>
                                                    <a href= <?php echo "?page=$g"; ?>>
                                                    Mac pro</a>
                                            </li>
                                            <li>
                                                <?php $g = "mini"?>
                                                    <a href= <?php echo "?page=$g"; ?>>
                                                    Mac mini</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span><?php $g = "iphone"?>
                                            <a href= <?php echo "?page=$g"; ?>>
                                                <?php $g = $r->type; ?>
                                                <p style="color: white;">iPhone</p>
                                            </a></span>
                                        <ul>
                                            <li>
                                                <?php $g = "iph7"?>
                                                    <a href= <?php echo "?page=$g"; ?>>
                                                    iPhone 7</a>
                                            </li>
                                            <li>
                                               <?php $g = "iph6"?>
                                                    <a href= <?php echo "?page=$g"; ?>>
                                                    iPhone 6</a>
                                            </li>
                                            <li> <?php $g = "iph5"?>
                                                    <a href= <?php echo "?page=$g"; ?>>
                                                    iPhone 5</a>
                                            </li>
                                            <li>
                                                 <?php $g = "iph4"?>
                                                    <a href= <?php echo "?page=$g"; ?>>
                                                    iPhone 4</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span><?php $g = "ipad"?>
                                            <a href= <?php echo "?page=$g"; ?>>
                                                <?php $g = $r->type; ?>
                                                <p style="color: white;">iPad</p>
                                            </a>
                                        </span>
                                        <ul>
                                            <li>
                                                 <?php $g = "ipro"?>
                                                    <a href= <?php echo "?page=$g"; ?>>
                                                    iPad Pro</a>
                                            </li>
                                            <li>
                                               <?php $g = "iair"?>
                                                    <a href= <?php echo "?page=$g"; ?>>
                                                    iPad Air</a>
                                            </li>
                                            <li>
                                                <?php $g = "imini"?>
                                                    <a href= <?php echo "?page=$g"; ?>>
                                                    iPad mini</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>
                                            <?php $g = "ipod"?>
                                                <a href= <?php echo "?page=$g"; ?>>
                                                    <?php $g = $r->type; ?>
                                                    <p style="color: white;">iPod</p>
                                                </a>
                                        </span>
                                        <ul>
                                            <li>
                                                <?php $g = "nano"?>
                                                    <a href= <?php echo "?page=$g"; ?>>
                                                    iPod touch/nano</a>
                                            </li>
                                            <li>
                                                <?php $g = "shuf"?>
                                                    <a href= <?php echo "?page=$g"; ?>>
                                                    iPod shuffle</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><?php $g = "watch"?>
                                        <a href= <?php echo "?page=$g"; ?>>
                                            <?php $g = $r->type; ?>
                                            <p style="color: white;">Watch</p>
                                        </a>
                                    </li>
                                    <li>
                                        <span><?php $g = "акс"?>
                                            <a href= <?php echo "?page=$g"; ?>>
                                                <?php $g = $r->type; ?>
                                                <p style="color: white;">Акксессуары</p>
                                            </a>
                                        </span>
                                        <ul>
                                            <li>
                                               <?php $g = "муз"?>
                                                    <a href= <?php echo "?page=$g"; ?>>
                                                        <?php $g = $r->type; ?>
                                                        Аудио и музыка</a>
                                            </li>
                                            <li>
                                                <?php $g = "cheh"?>
                                                    <a href= <?php echo "?page=$g"; ?>>
                                                    Чехлы и сумки</a>
                                            </li>
                                            <li>
                                                <?php $g = "usb"?>
                                                    <a href= <?php echo "?page=$g"; ?>>Питание и кабели</a>
                                            </li>
                                            <li>
                                                <?php $g = "other"?>
                                                    <a href= <?php echo "?page=$g"; ?>>Другие</a>

                       
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
           