
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?=$data[header]?></title>
	<link href="/css/bootstrap.css" rel="stylesheet" >
	<link href="/css/style.css" rel="stylesheet" >
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
	<div class="container">
		<a class="btn" href="/"><h1 class="mb30">Users Profiles</h1></a>
		<div class="row">
			<div class="col-xs-3">

				<ul class="nav navbar-inner navbar-default">
				<li><a href="/wall">Стена</a></li>
			<?php if(isset($_SESSION[id])): ?>
				<li><a href="/wall/<?=$_SESSION[id]?>">Моя стена</a></li>
				<li><a href="/wall/edit">Редактировать</a></li>
				<li><a href="/login/exit">Выход</a></li>
			<?php else: ?>
				<li><a href="/login"> Логин</a></li>
				<li><a href="/registration"> Регистрация</a></li>
			<?php endif; ?>
				</ul>

			</div>
			<div class="col-xs-9">
				<?php include 'app/views/'.$content_view;?>
			</div>

		</div>
	</div>

	<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="/js/jquery.zoom.js"></script>
	<script type="text/javascript" src="/js/script.js"></script>
	<script type="text/javascript" src="/js/bootstrap.js"></script>
</body>
</html>