<?php
	//check for required fields
	if ((!$_POST['id']) || (!$_POST['format']) || (!$_POST['title'])) {
	     header( "Location: /show_addrecord.html");
	     exit;
	}

	//set up database and table names
	$db_name = "music";
	$table_name = "my_music";

	//connect to MySQL and select database to use
	$connection = mysqli_connect("localhost", "root", "chiquita27")
	     or die(mysqli_error($connection));
	$db = mysqli_select_db($connection, $db_name) or die(mysqli_error($connection));

	//create SQL statement and issue query
    $sql = "INSERT INTO $table_name (id, format, title, artist_fn, artist_ln, rec_label, my_notes, date_acq) VALUES ('$_POST[id]', '$_POST[format]', '$_POST[title]', '$_POST[artist_fn]', '$_POST[artist_ln]', '$_POST[rec_label]', '$_POST[my_notes]', '$_POST[date_acq]')";

    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add a Record</title>
	</head>
	<body>
		<h1>Adding a Record to <?php echo "$table_name"; ?></h1>
		<table cellspacing=3 cellpadding=3>
			<tr>
				<td valign=top>
					<p><strong>ID:</strong><br>
					<?php echo "$_POST[id]"; ?></p>
					<p><strong>Date Acquired (YYYY-MM-DD):</strong><br>
					<?php echo "$_POST[date_acq]"; ?></p>
				</td>
				<td valign=top>
					<p><strong>Format:</strong><br>
					<?php echo "$_POST[format]"; ?>
					</p>
				</td>
			</tr>
			<tr>
				<td valign=top>
					<p><strong>Title:</strong><br>
					<?php echo "$_POST[title]"; ?></p>
					</td>
					<td valign=top>
					<p><strong>Record Label:</strong><br>
					<?php echo "$_POST[rec_label]"; ?></p>
				</td>
			</tr>
			<tr>
				<td valign=top>
					<p><strong>Artist's First Name:</strong><br>
					<?php echo "$_POST[artist_fn]"; ?></p>
					</td>
					<td valign=top>
					<p><strong>Artist's Last Name (or Group Name):</strong><br>
					<?php echo "$_POST[artist_ln]"; ?></p>
				</td>
			</tr>
			<tr>
				<td valign=top colspan=2 align=center>
					<p><strong>My Notes:</strong><br>
					<?php echo stripslashes($_POST['my_notes']); ?></p>
					<p><a href="show_addrecord.html">Add Another</a></p>
				</td>
			</tr>
		</table>
	</body>
</html>

