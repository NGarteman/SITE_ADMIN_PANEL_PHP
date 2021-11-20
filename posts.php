<!DOCTYPE html>
<html lang="en">
<head>
	<title>AdminSL - Управление записями</title>
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
				    <li class="breadcrumb-item active" aria-current="page">Управление записями</li>
				  </ol>
				</nav>
			<!-- tabs -->
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active hvr-float" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-table"></i> Все записи</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link hvr-float" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="far fa-plus-square"></i> Новая запись</a>
			  </li>
			</ul>
			<!-- tab content -->
			<div class="tab-content" id="myTabContent">
			  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			  	<table class="table mt-3 table-responsive-sm table-responsive-md">
				  <thead class="table-thead table-striped">
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Главное изображение</th>
				      <th scope="col">Заголовок</th>
				      <th scope="col">Текст</th>
				      <th scope="col">Автор</th>
				      <th scope="col">Просмотры</th>
				      <th scope="col">Дата создания</th>
				      <th scope="col">Действия</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Тут будет изображение</td>
				      <td>Title</td>
				      <td>Content</td>
				      <td>Anonim</td>
				      <td>1000</td>
				      <td>2019-12-12</td>
				      <td><a href="#" class="pr-2 hvr-grow" data-toggle="tooltip" data-placement="top" title="Удалить"><i class="far fa-trash-alt"></i></a> <a class="pr-2 hvr-grow" href="#" data-toggle="tooltip" data-placement="top" title="Редактировать"><i class="far fa-edit"></i></a> <a class="hvr-grow" href="#" data-toggle="tooltip" data-placement="top" title="Управление комментариями"><i class="far fa-comment-alt"></i></a></td>
				    </tr>
				  </tbody>
				</table>
			  </div>
			  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
			  	<div class="container mt-3">
			  	<form>
				  <div class="form-group">
				    <label for="title">Заголовок:</label>
				    <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
				  </div>
				  <div class="form-group">
				  	<label for="text">Текст статьи:</label>
				    <textarea name="content" id="text" rows="10" cols="80"></textarea>
            	  </div>
				  <div class="form-group">
				    <label for="author">Автор:</label>
				    <input name="author" type="text" class="form-control" id="author">
				  </div>
				    <div class="form-group">
				    <label for="select">Категория:</label>
				    <select class="js-example-basic-single form-control" id="select" name="select" style="width: 100%; height: 200px;">
				      <option value="LA">Laravel</option>
				      <option>PHP</option>
				      <option>Yii</option>
				      <option>Go</option>
				      <option>HTML/CSS</option>
				    </select>
				  </div>
				  <button type="submit" class="btn btn-primary rubik-font">Отправить</button>
				</form>
				</div>
			  </div>
			</div>
			</div>
		</div>
</div>
<!-- CDN Jquery, popper, bootstrap -->
<!-- Select2 JS -->
<script src="http://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/e8ef7051e6.js" crossorigin="anonymous"></script>
<!-- ckeditor -->
<script src="js/ckeditor/ckeditor.js"></script>
<!-- script.js -->
<script src="js/script.js
"></script>
</body>
</html>