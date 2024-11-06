<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html, body{
			height: 100%;			
		}
	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="col-12  p-3" style="background-color: #171A21;">
		<div class="col-8 mx-auto" >
			<div class="row">
				<div class="col-3" >
					<a href="index.html">
						<img src="logo.png" class="w-100">
					</a>
				</div>
				<div class="col-9 pt-4" >
					<a href="" class="text-light ms-4 text-uppercase">Магазин</a>
					<a href="" class="text-light ms-4 text-uppercase">Сообщество</a>
					<a href="" class="text-light ms-4 text-uppercase">O STEAM</a>
					<a href="" class="text-light ms-4 text-uppercase">Поддержка</a>					
				</div>
			</div>
			
		</div>
	</div>
	<div  class="col-12" style="background-color: #212429; height: 100%;">
		<div class="text-center col-4 mx-auto" style="background: #212429;">
		<h1 class="text-white">Добавить игру</h1>
		<form action="insert.php" method="GET">
			<input type="" name="img" class="form-control mt-1 w-100" placeholder="картинка">
			<input type="" name="name" class="form-control mt-1 w-100" placeholder="название">
			<input type="" name="price" class="form-control mt-1 w-100" placeholder="цена">
			<button class="btn btn-success mt-1 text-white">Готово</button>
		</form>
	</div>
	</div>
</body>
</html>