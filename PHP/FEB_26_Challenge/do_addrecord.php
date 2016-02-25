<?php
	//check for required fields
	if ((!$_POST['format']) || (!$_POST['title'])) {
	     header( "Location: \Web-App\PHP\FEB_26_Challenge\show_addrecord.php");
	     exit;
	}

	//set up database and table names
	$db_name = "music";
	$table_name = "my_music";

	//connect to MySQL and select database to use
	$connection = mysqli_connect("localhost", "root", "")
	     or die(mysqli_error($connection));
	$db = mysqli_select_db($connection, $db_name) or die(mysqli_error($connection));

	//create SQL statement and issue query
    $sql = "INSERT INTO $table_name (format, title, artist_fn, artist_ln, rec_label, my_notes, date_acq) VALUES ('$_POST[format]', '$_POST[title]', '$_POST[artist_fn]', '$_POST[artist_ln]', '$_POST[rec_label]', '$_POST[my_notes]', '$_POST[date_acq]')";

    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    header( "Location: \Web-App\PHP\FEB_26_Challenge\show_addrecord.php");
    exit;
?>


