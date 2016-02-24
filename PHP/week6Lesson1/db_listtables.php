<?php
    $dblist = "";
    $sql = "SHOW DATABASES";
    $connection = @mysqli_connect("localhost", "root", "chiquita27");
    if (mysqli_connect_errno()){
        $msg = "Failed to connect to MySQL: " . mysqli_connect_error();
        echo $msg;
        exit();
    }

    $result = mysqli_query($connection,$sql);
    while( $row = mysqli_fetch_row($result)):
        if(($row[0] != 'information_schem') && ($row[0] != "mysql")){
            $dbname = $row[0];
            $sqlT="SHOW TABLES";
            $con = mysqli_connect("localhost", "root", "chiquita27", $dbname) or die ('Error connecting to Mysql' . mysqli_error($con));
            $resultT = mysqli_query($con,$sqlT) or die ('Error Query ' . mysqli_error($con));
            $dblist .= "<h4>".$dbname."</h4>";
            $dblist .= "<ul>";
            while ($table = mysqli_fetch_assoc($resultT)){
                foreach($table as $tablename){
                    $dblist .= "<li>".$tablename."</li>";
                }
            }
            $dblist .= "</ul>";
            mysqli_free_result($resultT);
            mysqli_close($con);
        }
    endwhile;

$dblist .= "</ul>";

mysqli_close($connection);
?>

<!DOCTYPE html>

<html>
	<head>
		<title>List Databases</title>
	</head>
	<body>
		<?php echo "$dblist"; ?>
	</body>
</html>
