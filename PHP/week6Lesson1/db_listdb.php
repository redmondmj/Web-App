<?php
    $db_list = "<ul>";
    $sql = "SHOW DATABASES";
    $connection = @mysqli_connect("localhost", "root", "chiquita27");
    if (mysqli_connect_errno()){
        $msg = "Failed to connect to MySQL: " . mysqli_connect_error();
        echo $msg;
        exit();
    }

    $result = mysqli_query($connection,$sql);
    while( $row = mysqli_fetch_row($result)):
        $dbname = $row[0];
        $db_list .= "<li>$dbname</li>";
    endwhile;

$db_list .= "</ul>";

mysqli_close($connection);
?>

<!DOCTYPE html>

<html>
	<head>
		<title>List Databases</title>
	</head>
	<body>
		<?php echo "$db_list"; ?>
	</body>
</html>

