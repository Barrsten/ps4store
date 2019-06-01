<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'barrsten');
	$query = mysqli_query($connect, "UPDATE games SET cart='a' WHERE id ='" . $_POST['id'] . "'");
	header('Location: http://lyglaevartem/46/index.php');
?>