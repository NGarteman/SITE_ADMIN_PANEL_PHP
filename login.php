<!DOCTYPE html>
<html lang="en">
<head>
	<title>AdminSL - Главная</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- CDN Подключение Bootstrap 4.0 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Hover.css -->
	<link rel="stylesheet" type="test.loc/css" href="css/hover.css">
	<!-- Select2 -->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
	<!-- Подключение CSS -->
    <link rel="stylesheet" type="test.loc/css" href="css/style.css">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Alegreya+Sans|Istok+Web|Rubik&display=swap');
html{
  min-height: 100%;
}
.navbar-container{
  padding: 0 0 0 0px; 
  min-height: 100vh;
  height: 900px;
  max-height: 3400px;
  background: #343A40;
}
.content-container{
  height: 100vh;
}
.link{
  font-size: 19px;
  font-family: 'Rubik', sans-serif;
  color:white;
  transition: .2s;
}
.link:hover{
  color:#b2bec3;
}
.navbar-brand h2{
  font-weight: 600;
  font-family: 'Istok Web', sans-serif;
}
.jumbotron{
  background: white;
}
.breadcrumb{
  background: white;
}
.rubik-font{
  font-family: 'Rubik', sans-serif;
  font-weight: 00;
}
.table-thead{
  color:grey;
}
    </style>


</head>
<body style="height: 100%!important;">		
<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div style="display:flex;">
<span class="navbar-brand"><h2><i class="fa fa-puzzle-piece" aria-hidden="true"></i>   ENOVA</h2> 
<h5>Доска обьявлений</h5><small class="text-muted">version: 1.0 | Разработчик: Нурлан уулу Максатбек</small></span>  
</div>
<span class="navbar-brand">

</nav>
<div style="justify-content: center; backgroumd-color:red;">

<div class="jumbotron" style="height:70%;width:70%; margin-left:230px; ">
    <h1>Введите данные для входа:</h1></br>
</hr>

<form action="auth.php" method="post">
      <label for="login">Логин</label>
      <input type="text" class="form-control" id="login" placeholder="Введите логин" name="login" required></br>
 
      <label for="password">Пароль</label>
      <input type="password" class="form-control" id="password" placeholder="Введите пароль" name="password" required></br>

      <button type="submit" class="btn btn-primary" style="width:100%;">Войти</button> 
      </br></br>
      <div class="row">
          <p style="Margin-left:20px; font-style:Istok+Web; font-size:15px;">Еще не зарегистрированы?<p>
          <button type="button" class="btn btn-secondary" style="margin-left:10px;"><a href="register.php" style="color:white;text-decoration:none;">Регистрация</a></button>
          </div>
        </div>
      </form> 

</div>
</div>

<footer class="page-footer" style="background:#343A40;; padding-bottom:15px;" >
  <div class="container" style="color:gray; text-align:center;">© 2019 Все права защищены</div>
</footer>
                  
				
                
                

                  

<!-- CDN -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/e8ef7051e6.js" crossorigin="anonymous"></script>
</body>
</html>