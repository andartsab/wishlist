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
	<?php 
		$connect = mysqli_connect("MySQL-8.2","root","","wishlist");
		$query = mysqli_query($connect, 'SELECT * FROM wishlist ORDER BY id DESC');
		$game1 = $query -> fetch_assoc();
		$game2 = $query -> fetch_assoc();
		$game3 = $query -> fetch_assoc();
	?>
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
					<a href="https://wishlist.local/admin.php" class="text-light ms-4 text-uppercase">Админ Панель</a>					
				</div>
			</div>
			
		</div>
	</div>
	<div class="col-12" style="background-color: #212429; height: 100%;">
		<div class="col-8 mx-auto pt-5">
			<div class="d-flex ms-5">
				<img src="img/images.jpg" style="height: 111px;">
				<h1 class="text-white ms-5 pt-4">СПИСОК ЖЕЛАЕМОГО ANDARTSAB</h1>
			</div>
			<div class="d-flex ms-5  pt-5">
				<input type="" name="" placeholder="Поиск по названию или метке" style="background-color: #212429; width: 500px;" class="text-white">
				<div class="dropdown ms-2">
  					<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    					Настройки
  					</button>
  					<ul class="dropdown-menu">
    					<li><a class="dropdown-item" href="#">Action</a></li>
    					<li><a class="dropdown-item" href="#">Another action</a></li>
    					<li><a class="dropdown-item" href="#">Something else here</a></li>
  					</ul>
				</div>
				<div class="dropdown ms-2">
  					<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    					Сортировать по: вашему предпочтению
  					</button>
  					<ul class="dropdown-menu">
    					<li><a class="dropdown-item" href="#">Action</a></li>
    					<li><a class="dropdown-item" href="#">Another action</a></li>
    					<li><a class="dropdown-item" href="#">Something else here</a></li>
  					</ul>
				</div>
			</div>
			<div class="border-top col-9 ms-5 mt-3 pt-3">
				<div class="d-flex">
					<div style="height: 170px; background: #3D4D5D; padding-top: 65px; width: 38px;">
						<img src="img/handle.png" class="ms-2">
					</div>
					<div class="col-11 ms-1 d-flex pt-3" style="background: #3D4D5D;">
						<img src="img/crabchampions.jpg" style="height: 140px;" class="ms-3">
						<div class="col-5">
							<h4 class="text-white ms-4 pt-1">Crab Champions</h4>
						</div>
						<div style="background: #323E4C; height: 40px;" class="d-flex mt-5">
							<p class="pt-2 ms-2 text-white">588,57 РУБ</p>
							<button type="button" class="btn ms-3 text-white" style="background: #62971D;">В корзину</button>
						</div>
					</div>
				</div>
				<div class="d-flex mt-2">
					<div style="height: 170px; background: #3D4D5D; padding-top: 65px; width: 38px;">
						<img src="img/handle.png" class="ms-2">
					</div>
					<div class="col-11 ms-1 d-flex pt-3" style="background: #3D4D5D;">
						<img src="img/crabgame.jpg" style="height: 140px;" class="ms-3">
						<div class="col-5">
							<h4 class="text-white ms-4 pt-1">CRAB GAME</h4>
						</div>
						<div style="background: #323E4C; height: 40px;" class="d-flex mt-5">
							<p class="pt-2 ms-2 text-white">0 РУБ</p>
							<button type="button" class="btn ms-3 text-white" style="background: #62971D;">В корзину</button>
						</div>
					</div>
				</div>
				<div class="d-flex mt-2" style="opacity: <?php
							if (empty($game1['name'])) {
								echo '0';
								}else{
									echo '1';
								}
							?>">
					<div style="height: 170px; background: #3D4D5D; padding-top: 65px; width: 38px;">
						<img src="img/handle.png" class="ms-2">
					</div>
					<div class="col-11 ms-1 d-flex pt-3" style="background: #3D4D5D;">
						<img src="<?php echo $game1['img']; ?>" style="height: 140px;"  class="ms-3">
						<div class="col-5">
							<h4 class="text-white ms-4 pt-1"><?php echo $game1['name']; ?></h4>
						</div>
						<div style="background: #323E4C; height: 40px;" class="d-flex mt-5">
							<p class="pt-2 ms-2 text-white"><?php echo $game1['price']; ?> РУБ</p>
							<button type="button" class="btn ms-3 text-white" style="background: #62971D;">В корзину</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

