<?php
  $name = filter_var(trim($_POST['name']),
  FILTER_SANITIZE_STRING);

  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);

  $password = filter_var(trim($_POST['password']),
  FILTER_SANITIZE_STRING);
  

  if(mb_strlen($name) < 1 || mb_strlen($name) > 50){
        echo "Недопустимая длина имени";
        exit();
    } else if(mb_strlen($login) < 2 || mb_strlen($login) > 50){
        echo "Недопустимая длина логина";
        exit();
     } else if(mb_strlen($password) < 2 || mb_strlen($password) > 50){
        echo "Недопустимая длина пароля";
        exit();
  }

  $password = md5($password."local"); 

  $mysql = new mysqli('localhost', 'root', '', 'ENOVA');
  $mysql->query("INSERT INTO `Users` (`name`, `login`, `password`)
  VALUES('$name', '$login', '$password')");

  $mysql->close();

  Header('location: /');

?>