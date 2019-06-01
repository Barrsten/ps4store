<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'barrsten');
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_name = $_FILES['image']['name'];
	if($file_name != null){
	move_uploaded_file($file_tmp, $file_name);
	$query = mysqli_query($connect, "UPDATE games SET image='" . $file_name . "', title='" . $_POST['title'] . "', price='" . $_POST['price'] . "' WHERE id ='" . $_POST['id'] . "'");
	header('Location: http://lyglaevartem/46/index.php');
}else{
	$query = mysqli_query($connect, "UPDATE games SET title='" . $_POST['title'] . "', price='" . $_POST['price'] . "' WHERE id ='" . $_POST['id'] . "'");
	header('Location: http://lyglaevartem/46/index.php');
}
?>