<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">
		.img{
			width: 300px;
			height: 400px;
		}
	</style>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'barrsten');
	?>
	<nav class="navbar navbar-dark bg-dark">
  		<a class="navbar-brand" href="index.php">Главная</a>
  		<a class="navbar-brand" href="admin.php">Админ панель</a>
	</nav>
	<div class="col-9 mx-auto row">
	<?php 
		$result = mysqli_query($connect, "SELECT * FROM games WHERE cart='a'");
		for($i=0; $i<$result->num_rows;$i++){
		$res = $result->fetch_assoc();
	?>
	<?php
	echo '<div class="col-4 mt-2">';
	echo '<img src="' . $res["image"] . '" class="img">';	
	echo '<h2>' . $res["title"] . '</h2>';
	echo '<p>' . $res["price"] . '</p>';
	?>
	<?php  
	echo '</div>';
	?>
	<?php } ?>
	<?php 
		$sum = mysqli_query($connect, "SELECT * FROM games");
		for($i=0; $i<$sum->num_rows;$i++){
			$summa = $sum->fetch_assoc();
			echo $sum_total = $summa['price']+$sum_total;
		}
		// $summa['price'];
	?>
</div>
</body>
</html>