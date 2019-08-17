<?php 

if(isset($_POST['submit'])) {
	$file = $_FILES['file'];
	// print_r($file);
	$fileName = $file['name'];
	$fileTempName = $_FILES['tmp_name'];


	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));


	$allowed = ['jpg', 'jpeg', 'png'];
	if(in_array($fileActualExt, $allowed)){
		if($_FILES['error'] == 0) {
			if($_FILES['size'] < 50000) {
				$fileNameNew = uniqid('',  true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTempName, $fileDestination);
				// header('Location: upload.php?uploadsuccess');
			} else {
				echo 'Your file is too big';
			}
		} else {
			echo 'there was an error uploadin your file';
		}
	} else {
		echo 'Not allowed file type';
	}

}



 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Upload test</title>
</head>
<body>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" name="submit" value="upload">
	</form>
</body>
</html>