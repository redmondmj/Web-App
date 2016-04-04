<?php
	//set up database and table names
	$db_name = "company";
	$table_name = "clients";

	//connect to MySQL and select database to use
	$connection = mysqli_connect("localhost", "root", "")
	     or die(mysqli_error($connection));
	$db = mysqli_select_db($connection, $db_name) or die(mysqli_error($connection));

	//create SQL statement and issue query
    $sql = "INSERT INTO $table_name (fname, lname, phone, emailAddress, streetAddress, birthday, province, postCode) VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[phone]', '$_POST[emailAddress]', '$_POST[streetAddress]', '$_POST[birthday]', '$_POST[province]', '$_POST[postCode]')";

    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    header( "Location: \Web-App\PHP\Project II\show_addrecord.php");
    exit;
?>


