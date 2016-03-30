<?php
    include('session.php');

	$db_name = "music";
	$table_name = "my_music";
    $display_block = "";
	$connection = @mysqli_connect("localhost", "root", "")
	     or die(mysql_error());
	$db = @mysqli_select_db($connection, $db_name) or die(mysql_error());
	$sql = "SELECT id, format, title, trim(concat(artist_fn,' ',artist_ln)) as artist_fullname, rec_label, my_notes, date_acq FROM $table_name ORDER BY artist_fullname";
	$result = @mysqli_query($connection, $sql) or die(mysqli_error($connection));
    while ($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $format = $row['format'];
        $title = $row['title'];
        $artist_fn = $row['artist_fullname'];
        $rec_label = $row['rec_label'];
        $my_notes = $row['my_notes'];
        $date_acq = $row['date_acq'];

        if($date_acq == "0000-00-00"){
            $date_acq = "[UNKNOWN]";
        }
        $display_block .= "<p><strong>$title</strong> on $rec_label, by $artist_fn<br> $my_notes <em> (acquired:$date_acq, format:$format)</em></p>";
    }

?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Music (Ordered by Artist)</title>
        <b id="logout"><a href="logout.php">Log Out</a></b>
        <link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<h1>My Music: Ordered by Artist</h1>
		<?php echo "$display_block"; ?>
		<p><a href="profile.php">Return to Menu</a></p>
	</body>
</html>
