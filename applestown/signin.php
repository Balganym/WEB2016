<!-- <html>
    <head>
        <title>Главная страница</title>
    </head>
    <body>
        <h2>Главная страница</h2>
        <form action="testreg.php" method="post">
     <p>
        <label>Ваш логин:<br></label>
        <input name="login" type="text" size="20" maxlength="20">
    </p>
    <p>
        <label>Ваш пароль:<br></label>
        <input name="password" type="password" size="15" maxlength="15">
    </p>
    <p>
        <input type="submit" name="submit" value="Войти">
    </form>
    <br>
    </body>
</html> --> -->


<?php 
    include('header.php');
 ?>
<!-- === END HEADER === -->
<!-- === BEGIN CONTENT === -->
<div id="content">
    <div class="container background-white">
        <div class="container">
            <div class="row margin-vert-30">
                <!-- Login Box -->
                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                    <form action = "testreg.php" method = "post" class="login-page">
                        <div class="login-header margin-bottom-30">
                            <h2>Login to your account</h2>
                        </div>
                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                            <input name="login" placeholder="Username" class="form-control" type="text" size="20" maxlength="20">
                        </div>
                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input name="password" type="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="checkbox">
                                    <input type="checkbox">Stay signed in</label>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary pull-right" name = "submit" type="submit">Login</button>
                            </div>
                        </div>
                        <hr>
                       <!--  <h4>Forget your Password ?</h4>
                        <p>
                            <a href="#">Click here</a>to reset your password.</p> -->
                    </form>
                </div>
                <!-- End Login Box -->
            </div>
        </div>
    </div>
</div>
<!-- === END CONTENT === -->
<!-- === BEGIN FOOTER === -->
<?php 
    include('footer.php');
?>
<!-- === END FOOTER ===