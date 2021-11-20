<!DOCTYPE html>
<html lang="en">
<head>
	<title>AdminSL - Статистика</title>
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
  font-weight: 600;
}
.table-thead{
  color:grey;
}
    </style>
</head>
<body style="height: 100%!important;">		
<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
	<span class="navbar-brand"><h2>Доска обьявлений</h2><small class="text-muted">version: 1.0 | Разработчик: Нурлан уулу Максатбек</small></span>
	  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
    </div>-->
</nav>	
<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 navbar-container border-right" style="color:white;">
				<ul class="nav flex-column pl-1 pt-2">
					<li class="nav-item">
						<a href="index.php" class="nav-link hvr-forward link"><i class="fas fa-home"></i> Главная</a>
					</li>
					<li class="nav-item">
						<a href="posts.php" class="nav-link hvr-forward link"><i class="fas fa-sliders-h"></i> Управление записями</a>
					</li>
					<li class="nav-item">
						<a href="category.php" class="nav-link hvr-forward link"><i class="fas fa-sliders-h"></i> Управление категориями</a>
					</li>
					<li class="nav-item">
						<a href="information.php" class="nav-link hvr-forward link"><i class="fas fa-chart-bar"></i> Статистка</a>
					</li>
				</ul>
			</div>	
			<!-- Content -->
			<div class="col-md-10 content-container rubik-font">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item">Главная</li>
				    <li class="breadcrumb-item active" aria-current="page">Статистика</li>
				  </ol>
				</nav>

				<h1>Здесь будут данные с яндекс метрики</h1>
			</div>
		</div>
</div>
<!-- CDN -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/e8ef7051e6.js" crossorigin="anonymous"></script>
</body>
</html>