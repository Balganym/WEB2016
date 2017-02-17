<?php
    session_start();
    if    (empty($_SESSION['user'])) {
      exit ("Доступ на эту    страницу разрешен только зарегистрированным пользователям. Если вы    зарегистрированы, то войдите на сайт под своим логином и паролем<br>");
    }
   
    session_destroy();
    exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
            
?>