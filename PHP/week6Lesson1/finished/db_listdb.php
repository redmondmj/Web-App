<?php

    //dblist for output
    $db_list = "<ul>";
    // Initial query to get databases
    $sql="SHOW DATABASES";
    $connection = mysqli_connect("localhost", "root", "password") or die ('Error connecting to mysql: ' . mysqli_error($link));
    $result = mysqli_query($connection,$sql);

    // identify rows in query result
    while( $row = mysqli_fetch_row($result)):
        // get dbname for each row
        $dbname=$row[0];
        // add database to output
        $db_list .= "<li>".$dbname."</li>";

    endwhile;
    //close unordered list
    $db_list .= "</ul>";
    //close connection
    mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>MySQL Databases</title>
	</head>
	<body>
		<p><strong>Databases on localhost</strong>:</p>
		<?php echo "$db_list"; ?>
	</body>
</html>
