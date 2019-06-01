<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'barrsten');
	mysqli_query($connect, "DELETE FROM games WHERE id='" . $_POST['id'] . "'");
	header('Location: http://lyglaevartem/46/index.php');
?>