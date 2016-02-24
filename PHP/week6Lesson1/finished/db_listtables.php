<?php
    //dblist for output
    $dblist = "";
    // Initial query to get databases
    $sql="SHOW DATABASES";
    $connection = mysqli_connect("localhost", "root", "password") or die ('Error connecting to mysql: ' . mysqli_error($link));
    $result = mysqli_query($connection,$sql);

    // identify rows in query result
    while( $row = mysqli_fetch_row($result)):
        //ignore default databases
      if (($row[0]!='information_schema') && ($row[0]!="mysql")) {
        // get dbname for each row
        $dbname=$row[0];
        //second query to get tables
        $sqlT="SHOW TABLES";
        // new connection to select database
        $con = mysqli_connect("localhost", "root", "password",$dbname) or die ('Error connecting to mysql: ' . mysqli_error($con));
        $resultT=mysqli_query($con,$sqlT) or die ('Error query: ' . mysqli_error($connection));
        // add database to output
        $dblist .= "<h4>".$dbname."</h4>";
        $dblist .= "<ul>";
        // add each table to output
        while ($table = mysqli_fetch_assoc($resultT)) {
          foreach ($table as $tablename) {
            $dblist .= "<li>".$tablename."</li>";
            }
        }
          //close unordered list
        $dblist .= "</ul>";
          // release query results
          mysqli_free_result($resultT);
          //close connection
          mysqli_close($con);
      }
    endwhile;
    //close connection
    mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>MySQL Tables</title>
	</head>
	<body>
		<p><strong>Databases and tables on localhost</strong>:</p>
		<?php echo "$dblist"; ?>
	</body>
</html>
