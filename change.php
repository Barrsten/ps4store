<meta charset="utf-8">
<form method="POST" action="update.php" enctype="multipart/form-data">
	<?php 
		echo '<input type="file" name="image">';
		echo '<input name="title" value="' . $_POST['title'] . '">';
		echo '<input name="price" value="' . $_POST['price'] . '">';
		echo '<input name="id" value="' . $_POST['id'] . '" type="hidden">';
	?>
	<button>Сохранить</button>
</form>
