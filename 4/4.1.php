<?php
define("GW_MAXFILESIZE", "5000000");

function upload_file($file) {
	if ($file['name'] == '') {
		echo 'Файл не выбран!';
		return; 
	}
	if ($file['type'] == 'image/jpeg' || $file['type'] == 'image/png' || $file['type'] == 'image/pjpeg' || $file['type'] == 'image/gif') {
		if ($file['size'] <= GW_MAXFILESIZE) {
			if (copy($file['tmp_name'], 'img/'.$file['name'])) {
				echo 'Файл успешно загружен';
				img_resize('img/' . $file['name'], 'thumbs/thumb_' . $file['name'], '250', '150');
			} else { echo 'Ошибка загрузки файла'; return;}	
		} else {
			echo "Файл не должен превышать размер в 5 Мб!"; return;	}
	} else {
		echo "Файл должен иметь одно из известных расширений графических изображений (gif, jpeg или png)!";
		return;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<a href="img/Kenobi_from_Kenobi.png" target="_blank"><img src="thumbs/thumb_Kenobi_from_Kenobi.png"></img></a>
	<a href="img/kot.jpg" target="_blank"><img src="thumbs/thumb_kot.jpg"></img></a>
	<a href="img/oduvanchik.jpg" target="_blank"><img src="thumbs/thumb_oduvanchik.jpg"></img></a>
	<h2>Здесь вы можете добавить изображения на сайт!</h2>

	<?php 
		if (isset($_FILES['file'])) {
			upload_file($_FILES['file']);
		}
	?>

	<form method="post" enctype="multipart/form-data"> 
		<input type="file" name="file" class="gallery_input">
		<input type="submit" value="Загрузить файл!" class="gallery_button">
	</form>

</body>
</html>