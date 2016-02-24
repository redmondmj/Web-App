<?php
    $sql = "CREATE DATABASE test1";
    $connection = @mysqli_connect("localhost", "root", "chiquita27");
    if (mysqli_connect_errno()){
        $msg = "Failed to connect to MySQL: " . mysqli_connect_error();
        echo $msg;
        exit();
    }

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    if($result){
        $msg = "Database created successfully!";
    }

?>

<!DOCTYPE html>

<html>
	<head>
		<title>Connect to a Database</title>
	</head>
	<body>
		<?php echo "$msg"; ?>
	</body>
</html>

