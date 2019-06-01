<!DOCTYPE html>
<html>
<head>
	<title>Add Game</title>
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
  		<a class="navbar-brand" href="admin.php">Админ панель</a>
  		<a class="navbar-brand" href="card.php">Корзина</a>
	</nav>
	<div class="col-9 mx-auto row">
	<?php 
		$result = mysqli_query($connect, "SELECT * FROM games");
		for($i=0; $i<$result->num_rows;$i++){
		$res = $result->fetch_assoc();
	?>
	<?php
	echo '<div class="col-4 mt-2">';
	echo '<img src="' . $res["image"] . '" class="img">';	
	echo '<h2>' . $res["title"] . '</h2>';
	echo '<p>' . $res["price"] . '</p>';
	?>
	<div class="row">
	<form action="delete.php" method="POST">
		<?php  
			echo "<button class='btn btn-info' name='id' value='" . $res['id'] . "'>Удалить</button>";
		?>
	</form>
	<form method="POST" action="change.php">
		<?php 
			echo '<input name="image" value="' . $res['image'] . '" type="hidden">' ;
			echo '<input name="title" value="' . $res['title'] . '" type="hidden">' ;
			echo '<input name="price" value="' . $res['price'] . '" type="hidden">' ;
			echo '<input name="id" value="' . $res['id'] . '" type="hidden">' ;
		?>
		<button class="btn btn-info ml-2">Редактировать</button>
	</form>
	<form action="add_cart.php" method="POST">
		<?php  
			echo "<button class='btn btn-info ml-2' name='id' value='" . $res['id'] . "'>В корзину</button>";
		?>
	</form>
	</div>
	<?php  
	echo '</div>';
	?>
	<?php } ?>
</div>
</body>
</html>