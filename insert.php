<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'barrsten');
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_name = $_FILES['image']['name'];
	move_uploaded_file($file_tmp, $file_name);
	mysqli_query($connect, "INSERT INTO games (image, title, price) VALUES ('" . $file_name . "','" . $_POST['title'] . "', '" . $_POST['price'] . "')");
	header('Location: http://lyglaevartem/46/index.php');
?>