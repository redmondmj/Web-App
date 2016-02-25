<?php
    include('session.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Add a Record</title>
        <!-- Load jQuery JS -->
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <!-- Load jQuery UI Main JS  -->
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

        <!-- Load SCRIPT.JS which will create datepicker for input field  -->
        <script src="calendar.js"></script>

        <link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<h1>Adding a Record to my_music</h1>
        <b id="logout"><a href="logout.php">Log Out</a></b>
		<form method="POST" action="do_addrecord.php">
			<table cellspacing=3 cellpadding=3>
				<tr>
                    <td valign=top>
						<p><strong>Format:</strong><br>
						<input type="radio" name="format" value="CD" checked> CD
						<input type="radio" name="format" value="CS"> cassette
						<input type="radio" name="format" value="LP"> LP
						</p>
					</td>
				</tr>
				<tr>
					<td valign=top>
						<p><strong>Title:</strong><br>
						<input type="text" name="title" size=35 maxlength=150></p>
					</td>
					<td valign=top>
						<p><strong>Record Label:</strong><br>
						<input type="text" name="rec_label" size=35 maxlength=50></p>
					</td>
				</tr>
				<tr>
					<td valign=top>
						<p><strong>Artist's First Name:</strong><br>
						<input type="text" name="artist_fn" size=35 maxlength=100></p>
					</td>
					<td valign=top>
						<p><strong>Artist's Last Name (or Group Name):</strong><br>
						<input type="text" name="artist_ln" size=35 maxlength=100></p>
					</td>
				</tr>
				<tr>
					<td valign=top>
						<p><strong>My Notes:</strong><br>
						<textarea name="my_notes" cols=35 rows=5 wrap=virtual></textarea></p>
						<p><input type="SUBMIT" name="submit" value="Add Record"></p>
					</td>
                    <td valign=top>
                        <p><strong>Pick a Date:</strong><br>
						<input name="date_acq" type="text" id="datepicker" />
						</p>
					</td>
				</tr>
			</table>
		</form>
        <p><a href="profile.php">Return to Menu</a></p>
	</body>
</html>

