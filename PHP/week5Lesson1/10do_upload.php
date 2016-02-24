<?php
    if ($_FILES['img1'] != ""){
        @copy($_FILES['img1']['tmp_name'],"./files/img/" .$_FILES['img1']['name']) or die("Couldn't save the file!");
        }else{
            die("No input file specified.");
        }
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Successful File Upload</title>
	</head>
	<body>
		<h1>Success!</h1>
		<p>You sent: <?php echo $_FILES['img1']['name']; ?>,
		a <?php echo $_FILES['img1']['size'] ?> byte file with
		a mime type of <?php echo $_FILES['img1']['type'] ?>.</p>
	</body>
</html>

