<?php

$login = filter_var(trim($_POST['login']),
 FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']),
 FILTER_SANITIZE_STRING);

  $password = md5($password."local");

  $mysql = new mysqli('localhost', 'root', '', 'ENOVA');

  $result = $mysql->query("SELECT * FROM `Users` WHERE `login` = '$login' AND `password` = '$password'");
  $user = $result->fetch_assoc();
  if(count($user) == 0) {   
      Echo "Неверные данные логина или пароля";
      exit();
  }

      print_r($user);
      exit();

      setcookie('user', $user['name'], time() + 3600, "/");

  $mysql->close();

  Header('location:/');
?>