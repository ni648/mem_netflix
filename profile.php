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
	<div class="col-12" style="background-color: #212429; height: 100%;">
		<div class="col-8 mx-auto d-flex" style="background-color: #222431; height: 100%;">

			

			<div class=" col-8 d-flex" style="height: 100%">

			<div class=" col-4 p-5" style="height: 100%">
				<div style="background-image: url(profile.jfif);height: 200px;background-size: 100% 100%; width: 200px;"></div>
				</div>
			<div class=" col-8" style="bheight: 100%">
				<h3 style="color: gray; ">ето ты типо
				
				</h3>
				<h3  style="color: gray; ">
					а, звать тебя:
				<?php
				echo $_GET['name']
				 ?>
				</h3>
				</h3>
				<h3  style="color: gray; ">
					если ты нарушишь правила, мы отправим вирус на 
				<?php
				echo $_GET['email']
				 ?>
				</h3>
				</h3>
				<h3  style="color: gray; ">
					и смотри мне! если тебе не
				<?php
				echo $_GET['age']
				 ?>, я тебя найду!
				</h3>
				</h3>
				<h3  style="color: gray; ">
					а, ещё я могу тебя взлоиать)))я знаю что твой пароль - 
				<?php
				echo $_GET['pasword']
				 ?>
				</h3>
				</div>

				
				
			</div>

			<div class=" col-4" style="height: 100%">
				<h3 style="color: gray;">у тебя 1 LVL</h3> 
				<h5 style="color: gray;">и это не поменять</h5> 
				<?php

			if($_GET['age'] < 18){
				echo "<h1 style='color: red' >когда ты выйдешб это удалится потомучто тебе нет 18)))</h1>";
			};

				?>

				<div class="d-flex justify-content-center">
					<button style="border-radius: 50px;height: 90px;width: 250px; border-color: #800e; border-width: ;" class=" btn btn-outline-danger">
					<a href="edit.php" style="text-decoration: none;">
						<h5 style="color: #800e;">ТЫ НАВРАЛ С ДАННЫМИ?</h5>
						<p style="color: #800e;">быстро меняй!</p>
					</button>
				</div>

				

			</div>

		</div>
	</div>
</body>
</html>