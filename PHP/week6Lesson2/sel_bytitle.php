<?php
	$db_name = "music";
	$table_name = "my_music";
    $display_block = "";
	$connection = @mysqli_connect("localhost", "root", "password")
	     or die(mysql_error());
	$db = @mysqli_select_db($connection, $db_name) or die(mysqli_error($connection));
	$sql = "SELECT id, format, title, artist_fn, artist_ln, rec_label, my_notes, date_acq FROM $table_name ORDER BY id";
	$result = @mysqli_query($connection, $sql) or die(mysqli_error($connection));
    while ($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $format = $row['format'];
        $title = $row['title'];
        $artist_fn = $row['artist_fn'];
        $artist_ln = $row['rec_label'];
        $my_notes = $row['my_notes'];
        $date_acq = $row['date_acq'];
        if($artist_fn != ""){
            $artist_fullname = trim("$artist_fn $artist_ln");
        }else {
            $artist_fullname=trim("$artist_ln");
        }
        if($date_acq == "0000-00-00"){
            $date_acq = "[UNKNOWN]";
        }
        $display_block .= "<p><strong>$title</strong> on $rec_label, by $artist_fullanme<br> $my_notes <em> (acquired:$date_acq, format:$format)</em></p>";
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Music (Ordered by Title and Acquisition Date)</title>
	</head>
	<body>
		<h1>My Music: Ordered by Title and Acquisition Date</h1>
		<?php echo "$display_block"; ?>
		<p><a href="my_menu.html">Return to Menu</a></p>
	</body>
</html>

