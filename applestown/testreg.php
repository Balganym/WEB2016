<?php
    session_start();
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
        if (isset($_POST['password'])) { $password=sha1($_POST['password']); if ($password =='') { unset($password);} 
    }
    if (empty($login) or empty($password)){
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    $login = htmlspecialchars($login);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    
    include 'db.php';

    $q = $connection->query("SELECT * FROM users WHERE login='$login' AND password='$password'");

    if($row=$q->fetch_object()){
        $id = $row->id;
        $_SESSION['user'] = $id;
        header("Location:managing.php");
    }else{
        exit ("Извините, введённый вами login или пароль неверный.");
    }
?>