<?php
    $sql = "CREATE DATABASE music";
    $connection = mysqli_connect("localhost", "root", "chiquita27")
         or die(mysqli_error($connection));
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    if ($result) {
         $msg = "<P>Database has been created!</P>";
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Create a MySQL Database</title>
	</head>
	<body>
		<?php echo "$msg"; ?>
	</body>
</html>
